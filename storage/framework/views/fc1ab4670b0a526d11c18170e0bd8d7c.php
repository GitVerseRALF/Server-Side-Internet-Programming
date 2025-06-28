 

<?php $__env->startSection('content'); ?>
    <h1>Create New Category</h1>

    <form method="POST" action="<?php echo e(route('categories.store')); ?>">
        <?php echo csrf_field(); ?>  

        <div>
            <label for="category_name">Category Name:</label>
            <input type="text" name="category_name" id="category_name" value="<?php echo e(old('category_name')); ?>">

            <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit">Create Category</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\SSIP_DBSM\resources\views/categories/create.blade.php ENDPATH**/ ?>