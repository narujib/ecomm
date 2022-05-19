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


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User List <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#add-accounts-modal">Create Accounts</a></h6>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Active</th>
                                    <th>Jurusan</th>
                                    <th>Create</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($userList as $u) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
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
                                            <a href="<?= base_url(); ?>administrator/resetpassuser/<?= $u['id'] ?>" class="btn btn-warning m-1" onclick="return confirm('Sure?');"><i class="fas fa-key"></i></a>
                                            <a href="<?= base_url(); ?>administrator/editUser/<?= $u['id'] ?>" class="btn btn-primary m-1"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url(); ?>administrator/deletuser/<?= $u['id'] ?>" class="btn btn-danger m-1" onclick="return confirm('Delete this account?');"><i class="fas fa-trash-alt"></i></a>
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