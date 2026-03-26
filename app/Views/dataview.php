<!-- Importing the layout file for this view -->
<?= $this->extend('components/layout') ?>

<!-- Initializing the content section, which will then be inside the layout file view. -->
<!-- All views must have this to use the layout view with header and footer. -->
<?= $this->section('content') ?>

    <h4>Users list</h4>
    <?= $users ?>

    <?= form_open_multipart(base_url('data/submit')) ?>
        <label>Upload Image: </label>
        <input type="file" name="image">
        <button type="submit">Submit</button>
    <?= form_close() ?>

<?= $this->endSection() ?>