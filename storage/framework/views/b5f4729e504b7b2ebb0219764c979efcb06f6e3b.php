<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<body>

		<div class="body">

			<div role="main" class="main">
                <?php echo $__env->yieldContent('slider'); ?>
				<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>


	</div>

<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>

<!-- Mirrored from preview.oklerthemes.com/porto/6.0.0/index-header-below-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Mar 2018 14:37:51 GMT -->
</html>
