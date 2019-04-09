<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $priorPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $priorPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      
          <h1 class="display-4 font-italic"><?php echo e($priorPost->title); ?></h1>
     
      <p class="lead my-3"><?php echo e($priorPost->content); ?></p>
      <p class="lead mb-0"><a href="<?php echo e(route('show_post', $priorPost->id)); ?>" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="blog-post">
        <a href="<?php echo e(route('show_post', $post->id)); ?>"><h2><?php echo e($post->title); ?></h2></a>
          <p class="blog-post-meta"><?php echo e($post->categories->name); ?></p>
          <p class="blog-post-meta"><?php echo e($post->created_at); ?> by <a href="<?php echo e(route('authors_posts', $post->users->id)); ?>"><?php echo e($post->users->name); ?></a></p>

        <p><?php echo e($post->content); ?></p>
        <a href="<?php echo e(route('show_post', $post->id)); ?>" class="stretched-link">Continue reading</a>
      </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



  </div><!-- /.row -->

</main><!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>