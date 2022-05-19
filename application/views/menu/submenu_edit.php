<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> / Edit Sub Menu</h1>

    <div class="row">
        <div class="col-lg-6">

            <?= $this->session->flashdata('message'); ?>

            <form action="" method="POST">
                <input type="hidden" name="id" id="id" value="<?= $submenu['id']; ?>">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                        <?= form_error('title', '<small class="text-danger">', '</small>'); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="menu_id" class="col-sm-2 col-form-label">Menu</label>
                    <div class="col-sm-10">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="<?= $ed_menu['menu_id']; ?>">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id'] ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('menu_id', '<small class="text-danger">', '</small>'); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-sm-2 col-form-label">URL</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
                        <?= form_error('url', '<small class="text-danger">', '</small>'); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                        <?= form_error('icon', '<small class="text-danger">', '</small>'); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="active" class="col-sm-2 col-form-label">Active</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="is_active" id="is_active1" value="option1" checked>
                            <label class="form-check-label" for="is_active">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="is_active" id="is_active2" value="option2">
                            <label class="form-check-label" for="is_active">
                                No
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <a href="<?= base_url('menu/submenu'); ?>" class="btn btn-danger">Cancel</a>
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