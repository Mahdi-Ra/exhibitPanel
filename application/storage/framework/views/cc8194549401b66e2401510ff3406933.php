<div class="row">
    <div class="col-lg-12">
        <!--filefolder_name-->
        <div class="form-group row <?php echo e(app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left'); ?>">
            <label class="col-12 control-label col-form-label"><?php echo app('translator')->get('lang.folder_name'); ?></label>
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="filefolder_name" name="filefolder_name" value="<?php echo e($folder->filefolder_name ?? ''); ?>">
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\application\resources\views/pages/settings/sections/files/modals/add-edit-inc.blade.php ENDPATH**/ ?>