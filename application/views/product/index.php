<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('user/createproduct'); ?>" class="btn btn-primary mb-3">Post Content</a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Jurusan</th>
                                    <th>User Post</th>
                                    <th>Create</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($product as $c) : ?>


                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $c['title']; ?></td>
                                        <td class="col-sm-1"><img src="<?= base_url('assets/img/product/') . $c['image']; ?>" class="img-thumbnail img-fluid"></td>
                                        <td><?= $c['description']; ?></td>
                                        <td><?= $c['jurusan']; ?></td>
                                        <td><?= $c['name']; ?> </td>
                                        <td><?= date('d F Y', $c['create_at']); ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>home/productSingle/<?= $c['id'] ?>" target="_blank" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->