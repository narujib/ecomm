<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> / Create Product</h1>

    <div class="row">
        <div class="col-lg">
            <?= form_open_multipart('user/createproduct'); ?>
            <div class="form-group row">
                <input type="hidden" name="user_id" id="user_id" value="<?= $user['id']; ?>">
                <input type="hidden" name="jurusan_id" id="jurusan_id" value="<?= $user['jurusan_id']; ?>">
                <label for="image" class="col-sm-1 col-form-label">Image 1</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                        <?= form_error('image', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="image2" class="col-sm-1 col-form-label">Image 2</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image2" name="image2">
                        <label class="custom-file-label" for="image2">Choose file</label>
                        <?= form_error('image2', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="image3" class="col-sm-1 col-form-label">Image 3</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image3" name="image3">
                        <label class="custom-file-label" for="image3">Choose file</label>
                        <?= form_error('image3', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="image4" class="col-sm-1 col-form-label">Image 4</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image4" name="image4">
                        <label class="custom-file-label" for="image4">Choose file</label>
                        <?= form_error('image4', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="image5" class="col-sm-1 col-form-label">Image 5</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image5" name="image5">
                        <label class="custom-file-label" for="image5">Choose file</label>
                        <?= form_error('image5', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-1 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" value="<?= set_value('title'); ?>">
                    <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="youtube_embed" class="col-sm-1 col-form-label">Youtube</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="youtube_embed" name="youtube_embed" value="<?= set_value('youtube_embed'); ?>">
                    <?= form_error('youtube_embed', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-1 col-form-label">Description</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <textarea class="form-control" id="description" name="description" rows="3"><?= set_value('description'); ?></textarea>
                        <?= form_error('description', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-1 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="" value="<?= $product['jurusan']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-11">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->