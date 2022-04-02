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

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">User Post</th>
                        <th scope="col">Create</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($product as $c) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $c['name']; ?></td>
                            <td><img src="<?= base_url('assets/img/product/') . $c['image']; ?>" class="card-img w-25 p-3"></td>
                            <td><?= $c['description']; ?></td>
                            <td><?= $c['jurusan']; ?></td>
                            <td><?= $c['name']; ?> </td>
                            <td><?= date('d F Y', $c['create_at']); ?></td>
                            <td>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->