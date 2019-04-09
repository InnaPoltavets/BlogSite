<?php $__env->startSection('content'); ?>

    <div class="blog-post">
        <?php $__currentLoopData = $postsByAuthor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postByAuthor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2 class="blog-post-title"><?php echo e($postByAuthor->title); ?></h2>
        <p><?php echo e($postByAuthor->users->name); ?></p>
        <p class="blog-post-meta"><?php echo e($postByAuthor->created_at); ?> by <?php echo e($postByAuthor->users->name); ?></p>

        <p><?php echo e($postByAuthor->content); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>