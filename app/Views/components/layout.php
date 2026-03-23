<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= esc($page_title ?? 'Default Title') ?></title>
        
        <link rel="stylesheet" href='<?= base_url('assets/css/bootstrap.min.css') ?>'>
        <link rel="stylesheet" href='<?= base_url('assets/css/styles.css') ?>'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    </head>

    <body class="d-flex flex-column min-vh-100">

        <header class="fixed-top">
            <?= view('components/header') ?>
        </header>
        
        <main class="flex-grow-1">
            <?= $this->renderSection('content'); ?>
        </main>
        
        <footer class="fixed-bottom">
            <?= view('components/footer') ?>
        </footer>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src='<?= base_url('assets/js/jquery-4.0.0.min.js') ?>'></script>
        <script src='<?= base_url('assets/js/popper.min.js') ?>'></script>
        <script src='<?= base_url('assets/js/bootstrap.min.js') ?>'></script>
    </body>
</html>