<?php $__env->startSection('content'); ?>

<div class="blog-post">
        <h2 class="blog-post-title"><?php echo e($post->title); ?></h2>
        <p><?php echo e($post->categories->name); ?></p>
        <p class="blog-post-meta"><?php echo e($post->created_at); ?>

            <a href="<?php echo e(route('authors_posts', $post->users->id)); ?>">by <?php echo e($post->users->name); ?> </a></p>

        <p><?php echo e($post->content); ?></p>









<form action="<?php echo e(route('save_comment')); ?>" method="post">
    <?php echo e(csrf_field()); ?>





    <div class="form-group">
        <textarea id="exampleCheck1" name="content"></textarea>
        <label class="form-check-label" for="exampleCheck1"></label>
    </div>

    <button type="submit" class="btn btn-primary">Send comment</button>
</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>