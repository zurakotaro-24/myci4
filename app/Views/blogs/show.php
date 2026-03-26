<!-- Importing the layout file for this view -->
<?= $this->extend('components/layout') ?>

<!-- Initializing the content section, which will then be inside the layout file view. -->
<!-- All views must have this to use the layout view with header and footer. -->
<?= $this->section('content') ?>

<div class="container">
    <div class="container-fluid">
        <label>Title: </label>
        <p><?= $blog['title'] ?></p>
    </div>
    <div class="container-fluid">
        <label>Content: </label>
        <p><?= $blog['content'] ?></p>
    </div>
    <div class="container-fluid">
        <label>Image: </label>
        <img src="<?= base_url('uploads/' . $blog['image']) ?>">
    </div>
</div>

<?= $this->endSection() ?>