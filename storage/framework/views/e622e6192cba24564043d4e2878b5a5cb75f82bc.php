<?php $__env->startSection('content'); ?>


			<br><br>
			<div class="container">
    <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="<?php echo e(asset('uploads/1.jpeg')); ?>" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/2.jpeg')); ?>" alt="Nature" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/3.jpeg')); ?>" alt="Fjords" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
</div>
<br><br>

<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="<?php echo e(asset('uploads/4.jpeg')); ?>" alt="Lights" style="width:100%">
        <div class="caption">
        </div>
     </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/5.jpeg')); ?>" alt="Nature" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="<?php echo e(asset('uploads/6.jpeg')); ?>" alt="Fjords" style="width:100%">
        <div class="caption">
        </div>
    </div>
  </div>
</div>





</div>

				

                <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>