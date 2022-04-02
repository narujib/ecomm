<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('administrator/createaccount') ?>" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control form-control-user" id="name" name="name" value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger pl">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jurusan_id">Jurusan</label>
                    <select name="jurusan_id" id="jurusan_id" class="form-control">
                        <option value="">Select Jurusan</option>
                        <?php foreach ($jurusan as $j) : ?>
                            <option value="<?= $j['id'] ?>"><?= $j['jurusan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('jurusan_id', '<small class="text-danger pl">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="role_id">Jurusan</label>
                    <select name="role_id" id="role_id" class="form-control">
                        <option value="">Select Role</option>
                        <?php foreach ($role_id as $r) : ?>
                            <option value="<?= $r['id'] ?>"><?= $r['role']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('role_id', '<small class="text-danger pl">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" class="form-control form-control-user" id="password1" name="password1">
                    <?= form_error('password1', '<small class="text-danger pl">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="password2">Repeat Password</label>
                    <input type="password" class="form-control form-control-user" id="password2" name="password2">
                </div>
                <div class="form-group">
                    <button type=" submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->