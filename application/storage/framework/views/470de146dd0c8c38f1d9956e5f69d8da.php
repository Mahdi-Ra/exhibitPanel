 <?php $__env->startSection('content'); ?>

<!--javascript-->
<script src="public/js/core/messages.js?v=<?php echo e(config('system.versioning')); ?>"></script>

<!-- main content -->
<div class="container-fluid">
    <!-- .chat-row -->
    <div class="chat-main-box <?php echo e(app()->getLocale() == 'persian_br' ? 'rtl-chat-main' : 'ltr-chat-main'); ?>">

        <!-- .chat-left-panel -->
        <?php echo $__env->make('pages.messages.components.left-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- .chat-right-panel -->
        <?php echo $__env->make('pages.messages.components.right-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- file uplaod -->
        <?php echo $__env->make('pages.messages.components.file-upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <style>
        .rtl-chat-main {
            right: -10px;
            left: 0;
        }
        .ltr-chat-main {
            right: 0;
            left: -10px;
        }
    </style>
    <!-- .chat-right-panel -->
</div>
<!-- /.chat-row -->

</div>
<!--main content -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\application\resources\views/pages/messages/wrapper.blade.php ENDPATH**/ ?>