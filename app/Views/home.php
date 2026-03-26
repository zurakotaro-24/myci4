<?= $this->extend('components/layout') ?>

<?= $this->section('content') ?>
    <body>
        <section>
            <div class="banner">
                <img class="img-fluid" src="<?= base_url('assets/images/b3.jpg') ?>">
            </div>
        </section>
        <section>
                <?php if(session()->get('isLoggedIn')): ?>
                    <?= form_open(base_url('user/logout')) ?>
                        <button type="submit" class="btn btn-danger">Log out</button>
                    <?= form_close() ?>
                <?php endif; ?>
            <section id="features">
                <div class="container">
                    <h2 class='text-center py-5 text-primary'>Our Features</h2>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <p class="display-4 text-primary"><i class="fa fa-user"></i></p>
                            <h5>The Page title goes here</h5>
                            <p>This program is free software; you can redistribute it and/or modify it</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="display-4 text-primary"><i class="fa fa-cogs"></i></p>
                            <h5>The Page title goes here</h5>
                            <p>This program is free software; you can redistribute it and/or modify it</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="display-4 text-primary"><i class="fa fa-envelope"></i></p>
                            <h5>The Page title goes here</h5>
                            <p>This program is free software; you can redistribute it and/or modify it</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="display-4 text-primary"><i class="fa fa-twitter"></i></p>
                            <h5>The Page title goes here</h5>
                            <p>This program is free software; you can redistribute it and/or modify it</p>
                        </div>

                        <div class="col-md-3 text-center">
                            <p class="display-4 text-primary"><i class="fa fa-facebook"></i></p>
                            <h5>The Page title goes here</h5>
                            <p>This program is free software; you can redistribute it and/or modify it</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="display-4 text-primary"><i class="fa fa-linkedin"></i></p>
                            <h5>The Page title goes here</h5>
                            <p>This program is free software; you can redistribute it and/or modify it</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="display-4 text-primary"><i class="fa fa-youtube"></i></p>
                            <h5>The Page title goes here</h5>
                            <p>This program is free software; you can redistribute it and/or modify it</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="display-4 text-primary"><i class="fa fa-google"></i></p>
                            <h5>The Page title goes here</h5>
                            <p>This program is free software; you can redistribute it and/or modify it</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-4"><i>About Us</i></h1>

                    <p class="lead">GoPHP is a platform for learning Web Technologies like: PHP, MySQL, WordPress, Drupal, Joomla, CodeIgnitor, Web Services, AngularJS, Javascript, Jquery and more…</p>
                    <hr class="my-4">
                    <p>We are providing Online classes, Class room training and Corporate training as well. Our main GOAL is to provide Quality of education with real time professionals. Each and every training includes a Real Time Project development. Here, our experts provides full guidelines to the students on: How to learn a technology ?,&nbsp;Coding Standards, Job Assistance and more</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>

        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid img-thumbnail" src="<?= base_url('assets/images/1.png') ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid img-thumbnail" src="<?= base_url('assets/images/1.png') ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid img-thumbnail" src="<?= base_url('assets/images/1.png') ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid img-thumbnail" src="<?= base_url('assets/images/1.png') ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
<?= $this->endSection() ?>