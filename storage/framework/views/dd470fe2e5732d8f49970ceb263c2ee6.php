<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: inline-block; float:left">
                            <h3 id="h3"><?php echo e(__('Vármegyék')); ?></h3>
                        </div>
                        <div style="display: inline-block; float:right">
                               <form method="post" action="<?php echo e(route('searchMegyekk')); ?>" accept-charset="UTF-8">
                                <?php echo csrf_field(); ?>
                                <input type="text" name="needle" placeholder="Keresés"><button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                    <div>
                        <table id="table">
                            
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="search-field">Megnevezés</th>
                                    <th>Művelet&nbsp;
                                        <button id = "plusz" onclick = "asd()" type="submit"><i class="fa-solid fa-plus" style="color: #000000;" title=<?php echo e(__("ÚJ")); ?>></i></button>
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody id= "tb">
                                <tr id = "tr" style = "display: none">
                                    <td colspan = "2"><input type="text" name="input" required id="input"></td>
                                    <td> <button id = "mentes" onclick="mentes()" type="submit" class="btn"><i class="fa fa-save"></i>&nbsp;</button><button onclick = "vissza()" type="submit" class="btn"><i class="fa fa-cancel"></i>&nbsp;</button></td>
                                    
                                </tr>
                            <?php $__currentLoopData = $entities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td id="<?php echo e($entity->id); ?>"><?php echo e($entity->id); ?></td>
                                    <td><?php echo e($entity->name); ?></td>
                                    <td style="display: flex">

                                        <form method="post" action="">
                                            <button class="btn btn-sm" type="submit"><i class="fa fa-edit"></i></button>
                                           <?php echo csrf_field(); ?>
                                        </form>
                                        <form method="post" action=""><button class="btn btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                        </form>

</td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\varmegyekTurza1\resources\views/megyek/list.blade.php ENDPATH**/ ?>