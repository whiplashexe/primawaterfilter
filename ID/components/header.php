<?php

$navs = json_decode(json_encode([
    ['title' => 'Beranda', 'link' => '/'],
    ['title' => 'Tentang Kami', 'link' => 'about.php'],
    ['title' => 'Layanan', 'link' => 'services.php'],
    ['title' => 'Produk', 'link' => 'products.php'],
    ['title' => 'Proyek', 'link' => ''],
    ['title' => 'Artikel', 'link' => ''],
    ['title' => 'FAQ', 'link' => ''],
    ['title' => 'Kontak', 'link' => ''],
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
                <a href="#" class="cta">Konsultasi Sekarang</a>
            </div>

            <button class="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</header>