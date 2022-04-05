<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> / Edit Jurusan</h1>

    <div class="row">
        <div class="col-lg-6">

            <?= $this->session->flashdata('message'); ?>

            <form action="" method="POST">
                <input type="hidden" name="id" id="id" value="<?= $jurusan['id']; ?>">
                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Current Jurusan Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $jurusan['jurusan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jurusan" class="col-sm-4 col-form-label">New Jurusan Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
                        <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="wa" class="col-sm-4 col-form-label">Current Whatsapp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="wa" name="wa" value="<?= $jurusan['wa']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="wa" class="col-sm-4 col-form-label">Whatsapp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="wa" name="wa">
                        <?= form_error('wa', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Current Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $jurusan['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url('administrator/jurusan'); ?>" class="btn btn-danger">Cancel</a>
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