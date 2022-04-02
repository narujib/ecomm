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
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#add-accounts-modal">Create Accounts</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Active</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Create</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($userList as $u) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td>
                                <?php foreach ($user_role as $ur) : ?>
                                    <?php if ($u['role_id'] == $ur['id']) {
                                        echo $ur['role'];
                                    }
                                    ?>
                                <?php endforeach; ?>
                            </td>
                            <td>
                                <?php if ($u['is_active'] == 1) {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?>
                            </td>
                            <td>
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($u['jurusan_id'] == $j['id']) {
                                        echo $j['jurusan'];
                                    }
                                    ?>
                                <?php endforeach; ?>
                            </td>
                            <td><?= date('d F Y', $u['date_created']); ?></td>
                            <td>
                                <a href="<?= base_url(); ?>administrator/editUser/<?= $u['id'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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

<!-- MODAL -->
<div class="modal fade" id="add-accounts-modal" tabindex="-1" aria-labelledby="add-accounts-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-accounts-modalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('administrator/accounts'); ?>" method="POST">
                <div class="modal-body">

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
                        <label for="role_id">Role</label>
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="">Select Role</option>
                            <?php foreach ($user_role as $r) : ?>
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

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type=" submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>