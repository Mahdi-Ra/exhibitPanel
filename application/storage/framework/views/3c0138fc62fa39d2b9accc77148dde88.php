<div class="form-group row">
    <label for="example-month-input" class="col-12 col-form-label <?php echo e(app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left'); ?>"><?php echo e(cleanLang(__('lang.move_to_this_stage'))); ?></label>
    <div class="col-sm-12">
        <select class="select2-basic form-control form-control-sm" id="leads_status" name="leads_status">
            <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($status->leadstatus_id); ?>"><?php echo e($status->leadstatus_title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div><?php /**PATH C:\xampp\htdocs\application\resources\views/pages/settings/sections/leads/modals/move.blade.php ENDPATH**/ ?>