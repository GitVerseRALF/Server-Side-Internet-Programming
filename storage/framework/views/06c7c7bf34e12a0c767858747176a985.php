  

<?php $__env->startSection('content'); ?>
    <h1>All Categories</h1>

    <?php if($categories->count() > 0): ?> 
        <ul>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(route('categories.show', $category->id)); ?>"> 
                        <?php echo e($category->category_name); ?>

                    </a> 
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?> 
        <p>No categories found.</p>
    <?php endif; ?>

    <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary">Create New Category</a> 
    <a href="<?php echo e(route('categories.edit', $category->id)); ?>">Edit</a>

<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\SSIP_DBSM\resources\views/categories/index.blade.php ENDPATH**/ ?>