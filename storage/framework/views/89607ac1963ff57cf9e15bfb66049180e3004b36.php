<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('save_page')); ?>" method="post">
  <?php echo e(csrf_field()); ?>

    <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
  </div>
  
  <div class="form-group">
      <label for="categories">Categories</label>
      <select name="categories_id">
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      
  </div>
  
  <div class="form-group">
      <textarea id="exampleCheck1" name="content"></textarea>
      <label class="form-check-label" for="exampleCheck1"></label>
  </div>
    
  <button type="submit" class="btn btn-primary">Save</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>