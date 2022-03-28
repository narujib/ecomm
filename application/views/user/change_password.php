<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('user/changepassword') ?>" method="POST">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="text" class="form-control form-control-user" id="current_password" name="current_password">
                    <?= form_error('current_password', '<small class="text-danger pl">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password1">New Password</label>
                    <input type="text" class="form-control form-control-user" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password2">Repeat Password</label>
                    <input type="new_password2" class="form-control form-control-user" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->