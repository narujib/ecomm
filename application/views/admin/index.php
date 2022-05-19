<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h5 class="font-weight-bold">User</h5>
                            </div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $jmlUser; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-5x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h5 class="font-weight-bold">Product</h4>
                            </div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $jmlProduct; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar  fa-5x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h5 class="font-weight-bold">Jurusan</h4>
                            </div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $jmlJurusan; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks  fa-5x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow m-2">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product List
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="col-sm">Name</th>
                                <th class="col-sm">Image</th>
                                <th class="col-sm">Description</th>
                                <th class="col-sm">Jurusan</th>
                                <th class="col-sm">Youtube</th>
                                <th class="col-sm">User Post</th>
                                <th class="col-sm">Create</th>
                                <th class="col-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($product as $c) : ?>


                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><span class="text-break"><?= $c['title']; ?></span></td>
                                    <td><img src="<?= base_url('assets/img/product/') . $c['image']; ?>" class="img-thumbnail"></td>
                                    <td><span class="d-inline-block text-truncate text-break" style="max-width: 150px;"><?= $c['description'];  ?></span></td>
                                    <td><?= $c['jurusan']; ?></td>
                                    <td><?= $c['youtube_embed']; ?></td>
                                    <td><?= $c['name']; ?></td>
                                    <td><?= date('d F Y', $c['create_at']); ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>home/productdetail/<?= $c['id'] ?>" target="_blank" class="btn btn-warning m-1"><i class="fas fa-eye"></i></a>
                                        <a href="<?= base_url(); ?>user/deletproduct/<?= $c['id'] ?>" class="btn btn-danger m-1" onclick="return confirm('Sure?');"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->