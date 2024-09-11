<!--table-->
@if (@count($invoices ?? []) > 0)
<div class="table-responsive report-results-table-container" id="report-results-container">
    <table class="table table-hover no-wrap {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }}" id="report-results-table">
        <thead>
            <tr>
                <!--category-->
                <th class="col_category"><a href="javascript:void(0)">@lang('lang.category')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--invoice_count-->
                <th class="col_invoice_count"><a href="javascript:void(0)">@lang('lang.count')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_amount_before_tax-->
                <th class="col_bill_amount_before_tax"><a href="javascript:void(0)">@lang('lang.before_tax')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_tax_total_amount-->
                <th class="col_bill_tax_total_amount"><a href="javascript:void(0)">@lang('lang.tax')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_discount_amount-->
                <th class="col_bill_discount_amount"><a href="javascript:void(0)">@lang('lang.discounts')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_adjustment_amount-->
                <th class="col_bill_adjustment_amount"><a href="javascript:void(0)">@lang('lang.adjustments')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--bill_final_amount-->
                <th class="col_bill_final_amount"><a href="javascript:void(0)">@lang('lang.total')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
            </tr>
        </thead>
        <tbody id="report-results-ajax-container">
            <!--rows-->
            @include('pages.reports.invoices.category.ajax')
        </tbody>
        <tfoot>
            <!--rows-->
            @include('pages.reports.invoices.category.footer')
        </tfoot>
    </table>

</div>
@else
<div id="report-results-container">
    @include('notifications.no-results-found')
</div>
@endif