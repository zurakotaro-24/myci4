<!-- Importing the layout file for this view -->
<?= $this->extend('components/layout') ?>

<!-- Initializing the content section, which will then be inside the layout file view. -->
<!-- All views must have this to use the layout view with header and footer. -->
<?= $this->section('content') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>List of  </h1>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>