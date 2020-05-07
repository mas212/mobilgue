<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Transmisi</h4>
                </div>
                <div class="mb-0">
                    <a href="<?php echo e(route('transmisi.create')); ?>" class="btn btn-primary">
                        Tambah Transmisi
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        <?php if(!$transmisis->isEmpty()): ?>
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">No
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Transmisi
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $transmisis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transmisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    <?php echo e($transmisi->id); ?>

                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    <?php echo e($transmisi->nama); ?>

                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    <a href="<?php echo e(route('transmisi.edit',$transmisi->id)); ?>" class="btn btn-success">
                                        Edit
                                    </a>
                                    <div class="remove" style="margin-top: 5px; position: relative; left: 19%; bottom: 42px;">
                                        <?php echo Form::open(['method' =>'DELETE', 'route'=>['transmisi.destroy',$transmisi->id]]); ?>

                                            <?php echo Form::submit('Delete', ['class'=>'btn btn-danger']); ?>

                                        <?php echo Form::close(); ?>

                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php echo e($transmisis->links()); ?>

                            </tr>
                        </tbody>
                        <?php else: ?>
                          <tbody>
                            <tr>Transmisi kosong</tr>
                          </tbody>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\olx\resources\views/dashboard/transmisi/index.blade.php ENDPATH**/ ?>