<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Produk Image</h4>
                </div>
                <div class="form-body">
                    <?php echo Form::open(array('route' => 'product-image.store', 'files'=>true, 'id'=>'form-product')); ?>

                        <?php echo e(csrf_field()); ?>  
                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo 1</label>
                                <?php echo Form::file('photo_1', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo 2</label>
                                <?php echo Form::file('photo_2', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo 3</label>
                                <?php echo Form::file('photo_3', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Simpan Produk Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\olx\resources\views/dashboard/product_image/create.blade.php ENDPATH**/ ?>