<?php $__env->startSection('content'); ?>
    <div class="orders">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Daftar Transaksi Masuk</h4>
            </div>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Nomor</th>
                      <th>Total Transaksi</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->number); ?></td>
                        <td>$<?php echo e($item->transaction_total); ?></td>
                        <td>
                          <?php if($item->transaction_status == 'PENDING'): ?>
                            <span class="badge badge-info">
                          <?php elseif($item->transaction_status == 'SUCCESS'): ?>
                            <span class="badge badge-success">
                          <?php elseif($item->transaction_status == 'FAILED'): ?>
                            <span class="badge badge-danger">
                          <?php else: ?>
                            <span>
                          <?php endif; ?>
                            <?php echo e($item->transaction_status); ?>

                            </span>
                        </td>
                        <td>
                          <?php if($item->transaction_status == 'PENDING'): ?>
                            <a href="<?php echo e(route('transactions.status', $item->id)); ?>?status=SUCCESS" class="btn btn-success btn-sm">
                              <i class="fa fa-check"></i>
                            </a>
                            <a href="<?php echo e(route('transactions.status', $item->id)); ?>?status=FAILED" class="btn btn-danger btn-sm">
                              <i class="fa fa-times"></i>
                            </a>
                          <?php endif; ?>
                          <a href="#mymodal"
                            data-remote="<?php echo e(route('transactions.show', $item->id)); ?>"
                            data-toggle="modal"
                            data-target="#mymodal"
                            data-title="Detail Transaksi <?php echo e($item->uuid); ?>"
                            class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
                          </a>
                          <a href="<?php echo e(route('transactions.edit', $item->id)); ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <form action="<?php echo e(route('transactions.destroy', $item->id)); ?>" 
                                method="post" 
                                class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button class="btn btn-danger btn-sm">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                          <td colspan="6" class="text-center p-5">
                            Data tidak tersedia
                          </td>
                        </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BN000266870\shayna-backendpart1\resources\views/pages/transactions/index.blade.php ENDPATH**/ ?>