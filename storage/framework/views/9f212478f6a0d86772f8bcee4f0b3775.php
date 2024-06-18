<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('post.store')); ?>">
                        <?php echo csrf_field(); ?>  <!-- Include CSRF token -->
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Post Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Enter Post Description" rows="10" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>

                    <!-- <?php echo e(__('You are logged in!')); ?> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\poorn\project-name\resources\views/home.blade.php ENDPATH**/ ?>