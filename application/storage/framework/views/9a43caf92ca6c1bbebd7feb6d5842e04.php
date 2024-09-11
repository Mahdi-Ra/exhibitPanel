<!--table-->
<?php if(@count($estimates ?? []) > 0): ?>
<div class="table-responsive report-results-table-container" id="report-results-container">
    <table class="table table-hover no-wrap <?php echo e(app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left'); ?>" id="report-results-table">
        <thead>
            <tr>
                <!--category-->
                <th class="col_category"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.category'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--estimate_count-->
                <th class="col_estimate_count"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.count'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_amount_before_tax-->
                <th class="col_bill_amount_before_tax"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.before_tax'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_tax_total_amount-->
                <th class="col_bill_tax_total_amount"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.tax'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_discount_amount-->
                <th class="col_bill_discount_amount"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.discounts'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_adjustment_amount-->
                <th class="col_bill_adjustment_amount"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.adjustments'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_final_amount-->
                <th class="col_bill_final_amount"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.total'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
            </tr>
        </thead>
        <tbody id="report-results-ajax-container">
            <!--rows-->
            <?php echo $__env->make('pages.reports.estimates.category.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </tbody>
        <tfoot>
            <!--rows-->
            <?php echo $__env->make('pages.reports.estimates.category.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </tfoot>
    </table>

</div>
<?php else: ?>
<div id="report-results-container">
    <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\application\resources\views/pages/reports/estimates/category/table.blade.php ENDPATH**/ ?>