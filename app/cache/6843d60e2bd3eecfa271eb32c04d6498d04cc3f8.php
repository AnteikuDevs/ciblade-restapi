

<?php $__env->startSection('title','Pelanggan'); ?>

<?php $__env->startSection('js'); ?>

<script>
    $(document).ready( function () {
        $('.datatables').DataTable();
    } );
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<div class="card">
    <div class="card-body row">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6 text-right">
            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>   Tambah</a>
            <a href="" class="btn btn-success btn-sm"><i class="fa fa-print"></i>   Cetak</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped datatables">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyServer\www\bincigar\app\views/pelanggan/index.blade.php ENDPATH**/ ?>