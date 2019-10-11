<?php require 'data.php' ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <?php foreach ($links as $link): ?>
                    <li class="nav-item active <?= isset($link['children']) ? 'dropdown' : '' ?>">
                        <?php if (isset($link['children'])): ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $link['text'] ?> 
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?= $link['url'] ?>">
                                <?= $link['text'] ?> 

                                <?php if ($link['alt']): ?>
                                    <span class="sr-only"><?= $link['alt'] ?></span>
                                <?php endif ?>
                            </a>
                        <?php endif ?>

                        <?php if (isset($link['children'])): ?>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <?php foreach ($link['children'] as $children): ?>
                                    <a class="dropdown-item" href="<?= $children['url'] ?>">
                                        <?= $children['text'] ?>
                                    </a>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </nav>