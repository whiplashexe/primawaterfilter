<?php
$products_list = json_decode(json_encode([
    [
        'title' => 'Rumah Tangga',
        'desc'  => 'Solusi air bersih untuk kebutuhan sehari-hari di rumah Anda.',
        'items' => [
            [
                'title' => 'Filter Carbon + Multi Media 10×54',
                'desc'  => 'Menghilangkan bau, warna, dan kotoran halus pada air PDAM atau sumur bor. Air rumah tangga yang keruh atau berbau.',
                'link'  => ''
            ],
            [
                'title' => 'RO 100 GPD Under Sink',
                'desc'  => 'Menyaring air hingga murni, langsung siap minum. Kebutuhan air minum di rumah dan dapur.',
                'link'  => ''
            ]
        ]
    ],
    [
        'title' => 'Bisnis & Industri',
        'desc'  => 'Solusi air bersih untuk kantor, villa, hotel, dan area komersial.',
        'items' => [
            [
                'title' => 'Filter Manganese 12×52',
                'desc'  => 'Menghilangkan kandungan besi dan mangan tinggi pada air sumur. Hotel, villa, atau kantor dengan kebutuhan air tinggi.',
                'link'  => ''
            ],
            [
                'title' => 'Booster Pump System',
                'desc'  => 'Menjaga tekanan air tetap stabil di seluruh titik pemakaian. Bangunan bertingkat dan villa dengan banyak kamar mandi.',
                'link'  => ''
            ]
        ]
    ],
    [
        'title' => 'Restoran & F&B',
        'desc'  => 'Sistem air higienis untuk dapur profesional dan kebutuhan minuman.',
        'items' => [
            [
                'title' => 'RO 400–800 GPD',
                'desc'  => 'Menyaring air untuk memastikan kualitas makanan dan minuman tetap higienis. Restoran dan kafe dengan kebutuhan air olahan.',
                'link'  => ''
            ],
            [
                'title' => 'Softener System 10×54',
                'desc'  => 'Mengatasi air kapur yang menyebabkan kerak di peralatan dapur. Restoran dengan penggunaan air panas atau steam.',
                'link'  => ''
            ]
        ]
    ]
]));
?>


<section id="products_list">
    <div class="container products_list-container">
        <div class="content">
            <?php foreach ($products_list as $key => $products): ?>
            <article class="section-wrapper">
                <h3 class="title"><?= $products->title ?></h3>
                <p class="desc"><?= $products->desc ?></p>

                <div class="card-wrapper">
                    <?php foreach ($products->items as $key => $product): ?>
                    <article class="card">
                        <img src="https://jwc.gotra-resources.my.id/web-upload/1762852772-11-11-2025-OT8sjak20Zvrfz6cEWGVLJgD5XeSwxly.webp"
                            alt="product" class="card-image">
                        <div class="card-content">
                            <h4 class="title"><?= $product->title ?></h4>
                            <p class="desc"><?= $product->desc ?></p>
                            <a href="#" class="cta">Konsultasi Produk</a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>