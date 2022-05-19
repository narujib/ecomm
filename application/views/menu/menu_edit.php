<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> / Edit Menu</h1>

    <div class="row">
        <div class="col-lg-6">

            <?= $this->session->flashdata('message'); ?>

            <form action="" method="POST">
                <input type="hidden" name="id" id="id" value="<?= $menu['id']; ?>">

                <div class="form-group row">
                    <label for="menu" class="col-sm-4 col-form-label">Edit Menu Name</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $menu['menu']; ?>" class="form-control" id="menu" name="menu">
                        <?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url('menu'); ?>" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->