<?php
$home_products_data = json_decode(json_encode([
    [
        'title' => 'RO 100 GPD (Under Sink)',
        'desc'  => 'Favorit rumah tangga & villa.',
        'link'  => '/product.php'
    ],
    [
        'title' => 'Filter Carbon + Multi Media',
        'desc'  => 'Best-seller untuk PDAM/sumur.',
        'link'  => '/product.php'
    ],
    [
        'title' => 'Softener 10×54',
        'desc'  => 'Kurangi kerak. Lindungi peralatan.',
        'link'  => '/product.php'
    ],
    [
        'title' => 'Manganese 10×54',
        'desc'  => 'Untuk zat besi & mangan tinggi.',
        'link'  => '/product.php'
    ],
    [
        'title' => 'Booster Pump Set',
        'desc'  => 'Tekanan stabil sepanjang hari.',
        'link'  => '/product.php'
    ],
    [
        'title' => 'RO Skala Restoran',
        'desc'  => 'Air higienis untuk F&B.',
        'link'  => '/product.php'
    ]
]));
?>

<section id="home_products">
    <div class="container home_products-container">
        <div class="content">
            <header class="section-header">
                <span class="section-span">Produk Unggulan</span>
                <h2 class="section-title">Paling Sering Dijual</h2>
                <p class="section-description">Pilihan yang terbukti efektif di lapangan.</p>
            </header>

            <div class="card-wrapper">
                <?php foreach ($home_products_data as $key => $data): ?>
                <article class="card">
                    <h3 class="title"><?= $data->title ?></h3>
                    <p class="desc"><?= $data->desc ?></p>
                    <a class="cta" href="<?= $data->link ?>">Tanya stok & harga <i class="fas fa-arrow-right"></i> </a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>