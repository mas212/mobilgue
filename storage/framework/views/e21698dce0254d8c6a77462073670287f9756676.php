<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Produk</h4>
                </div>
                <div class="form-body">
                    <?php echo Form::open(array('route' => 'product.store', 'files'=>true, 'id'=>'form-product')); ?>

                        <?php echo e(csrf_field()); ?>  
                        <div class="col-md-12">
                            <div class="form-group<?php echo $errors->has('nama') ? 'has-error' : ''; ?>">
                                <label>Nama</label>
                                <?php echo Form::text('nama', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                                <?php echo $errors->first('nama', '<p class="help-block">:message</p>'); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group <?php echo $errors->has('kategori_id') ? 'has-error' : ''; ?>">
                                <label>Kategories</label>
                                <select name="kategori_id" class="form-control">
                                    <?php if(!$kategoris->isEmpty()): ?>
                                        <option>Pilih Kategori</option>
                                        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($kategori->id); ?>">
                                                <?php echo e($kategori->nama); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="alert alert-danger">
                                            Data kategori kosong
                                        </div>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group <?php echo $errors->has('subcat_id') ? 'has-error' : ''; ?>">
                                <label>Subkategories</label>
                                <select name="subcat_id" class="form-control">
                                    <?php if(!$subkategoris->isEmpty()): ?>
                                        <option>Pilih Subkategori</option>
                                        <?php $__currentLoopData = $subkategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subkategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($subkategori->id); ?>">
                                                <?php echo e($subkategori->nama); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="alert alert-danger">
                                            Data subkategori kosong
                                        </div>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tahun</label>
                                <?php echo Form::text('tahun', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>

                         <div class="col-md-12">
                            <div class="form-group">
                                <label>Merek</label>
                                <?php echo Form::text('merek', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Jarak</label>
                                <?php echo Form::text('jarak', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Warna</label>
                                <?php echo Form::text('warna', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group <?php echo $errors->has('transmisi_id') ? 'has-error' : ''; ?>">
                                <label>Transmisi</label>
                                <select name="transmisi_id" class="form-control">
                                    <?php if(!$transmisis->isEmpty()): ?>
                                        <option>Pilih Transmisi</option>
                                        <?php $__currentLoopData = $transmisis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transmisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($transmisi->id); ?>">
                                                <?php echo e($transmisi->nama); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="alert alert-danger">
                                            Data Transmisi kosong
                                        </div>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Harga</label>
                                <?php echo Form::text('harga', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ringkasan</label>
                                <?php echo Form::text('ringkasan', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo</label>
                                <?php echo Form::file('photo', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <?php echo Form::textarea('deskripsi', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Selanjut Product Photo > </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\olx\resources\views/dashboard/product/create.blade.php ENDPATH**/ ?>