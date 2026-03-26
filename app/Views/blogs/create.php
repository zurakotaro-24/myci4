<?= $this->extend('components/layout') ?>

<?= $this->section('content') ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Blog</h1>

                <?= form_open_multipart('blogs/insert') ?>
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="<?= set_value('title') ?>">
                        <span class="text-danger">
                            <?= validation_show_error('title') ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control"><?= set_value('content') ?></textarea>
                        <span class="text-danger">
                            <?= validation_show_error('content') ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Upload Image:</label>
                        <input type="file" name="image" class="form-control">
                        <span class="text-danger">
                            <?= validation_show_error('image') ?>
                        </span>
                    </div>
                    <button type="submit" >Add Blog</button>
                <?= form_close() ?>

            </div>
        </div>
    </div>

<?= $this->endSection() ?>