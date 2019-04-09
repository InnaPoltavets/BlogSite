<?php $__env->startSection('content'); ?>

<h1><?php echo e($category->name); ?></h1>

<div class="blog-post">
    <?php $__currentLoopData = $categorizedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorizedPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <h2 class="blog-post-title"><?php echo e($categorizedPost->title); ?></h2>
        <p><?php echo e($categorizedPost->categories->name); ?></p>
        <p class="blog-post-meta"><?php echo e($categorizedPost->created_at); ?> by <?php echo e($categorizedPost->users->name); ?> </p>

        <p><?php echo e($categorizedPost->content); ?></p>
        

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>