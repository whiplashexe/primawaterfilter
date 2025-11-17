<?php

$navs = json_decode(json_encode([
    ['title' => 'Services', 'link' => 'services.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => 'Case Studies', 'link' => 'case-studies.php'],
    ['title' => 'Resources', 'link' => 'resources.php'],
    ['title' => 'FAQ', 'link' => 'faq.php'],
]))

?>

<header id="header">
    <div class="container header-container">
        <div class="content">
            <a href="#" class="brand">
                <img src="https://jwc.gotra-resources.my.id/web-upload/1690792056-31-07-2023-tK53dR6Mce4j1SOINEfALm7JPTZDwFnv.55"
                    alt="brand">
            </a>

            <div class="navs">
                <?php foreach ($navs as $key => $nav): ?>
                <a href="<?= $nav->link ?>" class="nav-link">
                    <?= $nav->title ?>
                </a>
                <?php endforeach; ?>
            </div>

            <a href="#" class="cta">Contact Us</a>


            <button class="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</header>