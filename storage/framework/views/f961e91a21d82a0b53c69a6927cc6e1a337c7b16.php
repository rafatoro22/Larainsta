<?php $__env->startSection('content'); ?>

    <div class="row">


        <div class="col-lg-5 offset-lg-1 col-xl-4 offset-xl-2 welcome-left d-flex align-items-center justify-content-center ">              

            <img class="d-none d-lg-block img-fluid" src="<?php echo e(asset('images/insta.png')); ?>">

        </div>


        <div class="col-lg-5 col-xl-4 welcome-right ">


            <?php echo $__env->make('forms.register', ['clases'=>'col-md-12'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                


        </div>


    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larainsta\resources\views/welcome.blade.php ENDPATH**/ ?>