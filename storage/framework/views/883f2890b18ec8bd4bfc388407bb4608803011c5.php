<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Kategori</h4>
                </div>
                <div class="form-body">
                    <?php echo Form::open(array('route' => 'kategori.store')); ?>

                        <?php echo e(csrf_field()); ?>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <?php echo Form::text('nama', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Simpan Kategori</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\olx\resources\views/dashboard/kategori/create.blade.php ENDPATH**/ ?>