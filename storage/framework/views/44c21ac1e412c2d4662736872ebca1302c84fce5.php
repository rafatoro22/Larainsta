<?php $__env->startSection('content'); ?>

<div class="container">

   <div class="row justify-content-center">

       <div class="col-md-8">

           <h1>Novo POST</h1>

           <form method="POST" enctype="multipart/form-data" action="/posts">

         

               <?php echo csrf_field(); ?>

               Descrição<textarea type="text" name="description"></textarea>

         

               Filter:<input type="text" name="filter">

         

               Arquivo:<input type="file" name="image_path">

         

               <button type="submit">vai</button>

           </form>

       </div>

   </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larainsta\resources\views/posts/create.blade.php ENDPATH**/ ?>