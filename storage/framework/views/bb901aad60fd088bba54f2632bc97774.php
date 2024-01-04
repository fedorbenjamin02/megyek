<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form method="post" action="<?php echo e(route('updateMegyek', $entity->id)); ?>" accept-charset="UTF-8">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('patch'); ?>
                        <div class="card-header"><?php echo e(__('Vármegyék módosítása')); ?> (#<?php echo e($entity->id); ?>)</div>
                        <div class="card-body">
                            <?php if(session('status')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            <div>
                                <div class="table table-active">
                                    <div>
                                        <div class="row" style="margin-left: 15px;">
                                            <div class="row">
                                                <label for="name"><strong>Név</strong></label>
                                                <input type="text" name="name" value="<?php echo e($entity->name); ?>" required></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer row text-center" style="margin-left: 0; margin-right: 0">
                            <div class="col-auto">
                                <button type="submit" class="btn"><i class="fa fa-save"></i>&nbsp;</button>
                            </div>
                            <div class="col-auto">
                                <a class="btn" href="<?php echo e(route('megyekk')); ?>#<?php echo e($entity->id); ?>"><i class="fa fa-ban"></i>&nbsp;</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\varmegyek\resources\views/megyek/edit.blade.php ENDPATH**/ ?>