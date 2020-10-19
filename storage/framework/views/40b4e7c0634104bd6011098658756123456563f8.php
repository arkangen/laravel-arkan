<table class="table table-bordered">
  <tr>
    <th>Nama</th>
    <td><?php echo e($item->name); ?></td>
  </tr>
  <tr>
    <th>Email</th>
    <td><?php echo e($item->email); ?></td>
  </tr>
  <tr>
    <th>Nomor</th>
    <td><?php echo e($item->number); ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td><?php echo e($item->address); ?></td>
  </tr>
  <tr>
    <th>Total Transaksi</th>
    <td><?php echo e($item->transaction_total); ?></td>
  </tr>
  <tr>
    <th>Status Transaksi</th>
    <td><?php echo e($item->transaction_status); ?></td>
  </tr>
  <tr>
    <th>Pembelian Produk</th>
    <td>
      <table class="tabble table-bordered w-100">
        <tr>
          <th>Nama</th>
          <th>Tipe</th>
          <th>Harga</th>
        </tr>

          <?php $__currentLoopData = $item->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($detail->product->name); ?></td>
              <td><?php echo e($detail->product->type); ?></td>
              <td>$<?php echo e($detail->product->price); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  


      </table>
    </td>
  </tr>
</table>
<div class="row">
  <div class="col-4">
    <a href="<?php echo e(route('transactions.status', $item->id)); ?>?status=SUCCESS" class="btn btn-success btn-block">
      <i class="fa fa-check"></i> Set Sukses
    </a>
  </div>
  <div class="col-4">
    <a href="<?php echo e(route('transactions.status', $item->id)); ?>?status=FAILED" class="btn btn-danger btn-block">
      <i class="fa fa-times"></i> Set Gagal
    </a>
  </div>
  <div class="col-4">
    <a href="<?php echo e(route('transactions.status', $item->id)); ?>?status=PENDING" class="btn btn-info btn-block">
      <i class="fa fa-spinner"></i> Set Pending
    </a>
  </div>
</div>
<?php /**PATH C:\Users\BN000266870\shayna-backendpart1\resources\views/pages/transactions/show.blade.php ENDPATH**/ ?>