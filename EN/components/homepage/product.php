<?php
$product_data = json_decode(json_encode([
    [
        'title'       => 'RO 100 GPD Under Sink',
        'desc'        => 'Compact, efficient, drink-ready water for your family',
        'img'         => '',
        'detail_link' => '',
        'consult_link' => ''
    ],
    [
        'title'       => 'Booster Pump System',
        'desc'        => 'Constant pressure with smart control',
        'img'         => '',
        'detail_link' => '',
        'consult_link' => ''
    ],
    [
        'title'       => 'Manganese Filter 12×52',
        'desc'        => 'Cut iron and manganese. Clearer water, no stains',
        'img'         => '',
        'detail_link' => '',
        'consult_link' => ''
    ]
]));
?>


<section id="product">
    <div class="container product-container">
        <div class="content">
            <header class="header">
                <h2 class="title">Product highlight</h2>
                <a href="#" class="cta">See all products</a>
            </header>

            <div class="card-wrapper">
                <?php foreach ($product_data as $key => $product): ?>
                <article class="card">
                    <img class="cover"
                        src="https://images.unsplash.com/photo-1762025501045-17a2541ad84f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="cover">
                    <div class="content-wrapper">
                        <h3 class="title"><?= $product->title ?></h3>
                        <p class="desc"><?= $product->desc ?></p>
                        <div class="cta-wrapper">
                            <a href="#" class="cta">View details</a>
                            <a href="#" class="cta alternative">Consult</a>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>