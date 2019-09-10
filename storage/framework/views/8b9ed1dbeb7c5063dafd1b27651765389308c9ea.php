<?php $__env->startSection('content'); ?>

<div class="container">

 <div class="row justify-content-center">

   <div class="col-md-8">

     <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

     <div class="card mt-4">

       <img class="card-img-top" src="<?php echo e($post->image_path); ?>" alt="Card image cap">

       <div class="card-body"><?php echo e($post->description); ?></div>
       <div class="row">

        <div class="col-md-6 mb-2"><center><input class = "btn btn-success pr-4" type="submit" value="Like"/></center></div>
         <div class="col-md-6 mb-2"><center><button type="button" class="btn btn-danger">Deslike</button></center></div>

       </div>
       <textarea name="comentarios" id="comentarios">
       </textarea>
       <input class = "btn btn-primary " type="submit" value="Comentar"/>

     </div>   

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   </div>

 </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larainsta\resources\views/posts/list.blade.php ENDPATH**/ ?>