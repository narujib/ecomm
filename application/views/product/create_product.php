<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> / Create Product</h1>

    <div class="row">
        <div class="col-lg">
            <?= form_open_multipart('user/createproduct'); ?>
            <div class="form-group row">
                <input type="hidden" name="user_id" id="user_id" value="<?= $user['id']; ?>">
                <label for="image" class="col-sm-1 col-form-label">Image</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                        <?= form_error('image', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-1 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                    <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-1 col-form-label">Description</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        <?= form_error('description', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan_id" class="col-sm-1 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select name="jurusan_id" id="jurusan_id" class="form-control">
                            <option value="">Select jurusan</option>
                            <?php foreach ($jurusan as $j) : ?>
                                <option value="<?= $j['id'] ?>"><?= $j['jurusan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('jurusan_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
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