<!-- Importing the layout file for this view -->
<?= $this->extend('components/layout') ?>

<!-- Initializing the content section, which will then be inside the layout file view. -->
<!-- All views must have this to use the layout view with header and footer. -->
<?= $this->section('content') ?>

<!-- Insert content here. -->

<!-- You can also add partial components. -->
<!-- <div class="container"> -->
<!--    < ?= $this->include('partial-file-name') ?> -->
<!-- </div> -->

<?= $this->endSection() ?>