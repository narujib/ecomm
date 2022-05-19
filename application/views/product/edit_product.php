<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> / Edit Product</h1>

    <div class="row">
        <div class="col-lg">
            <?= form_open_multipart(); ?>
            <div class="form-group row">
                <input type="hidden" name="id" id="id" value="<?= $product['id']; ?>">

                <div class="col-sm-2">Picture 1</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/product/') . $product['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture 2</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/product/') . $product['image2']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image2" name="image2">
                                <label class="custom-file-label" for="image2">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture 3</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/product/') . $product['image3']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image3" name="image3">
                                <label class="custom-file-label" for="image3">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture 4</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/product/') . $product['image4']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image4" name="image4">
                                <label class="custom-file-label" for="image4">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture 5</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/product/') . $product['image5']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image5" name="image5">
                                <label class="custom-file-label" for="image5">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" value="<?= $product['title']; ?>" name="title">
                    <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="youtube_embed" class="col-sm-2 col-form-label">Youtube</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="youtube_embed" value="<?= $product['youtube_embed']; ?>" name="youtube_embed">
                    <?= form_error('youtube_embed', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <textarea class="form-control" id="description" name="description" rows="3"><?= $product['description']; ?> </textarea>
                        <?= form_error('description', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="" value="<?= $jurusan['jurusan']; ?>" readonly>
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