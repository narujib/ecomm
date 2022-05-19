<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg">
            <?= form_open_multipart(); ?>
            <input type="hidden" name="id" id="id" value="<?= $home['id']; ?>">

            <div class="form-group row">
                <label for="hero_des" class="col-sm-2 col-form-label">Slider Text</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <textarea class="form-control" id="hero_des" name="hero_des" rows="3"><?= $home['hero_des']; ?> </textarea>
                        <?= form_error('hero_des', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Slider 1</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/') . $home['hero_img_1']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="hero_img_1" name="hero_img_1" value="<?= base_url('assets/img/') . $home['hero_img_1']; ?>">
                                <label class="custom-file-label" for="hero_img_1">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Slider 2</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/') . $home['hero_img_2']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="hero_img_2" name="hero_img_2">
                                <label class="custom-file-label" for="hero_img_2">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="about_des" class="col-sm-2 col-form-label">About Text</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <textarea class="form-control" id="about_des" name="about_des" rows="3"><?= $home['about_des']; ?> </textarea>
                        <?= form_error('about_des', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">About Image</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/') . $home['about_img']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="about_img" name="about_img">
                                <label class="custom-file-label" for="about_img">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
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