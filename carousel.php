<?php require 'data.php' ?>
<?php require 'functions.php' ?>

<div class="row">
            <div class="col">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php foreach ($items as $index => $item): ?>
                            <li data-target="#carouselExampleCaptions" data-slide-to="<?= $index ?>" class="<?= is_active($index, 1) ?>"></li>
                        <?php endforeach ?>
                    </ol>

                    <div class="carousel-inner">
                        <?php foreach ($items as $index => $item): ?>
                            <div class="carousel-item <?= is_active($index, 1) ?>">
                                <img src="<?= $item['image'] ?>" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= $item['title'] ?></h5>
                                    <p><?= $item['caption'] ?></p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>