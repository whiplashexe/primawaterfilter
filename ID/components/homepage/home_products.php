<?php
$home_products_data = json_decode(json_encode([
  [
    'title' => 'RO 100 GPD (Under Sink)',
    'desc'  => 'Favorit rumah tangga & villa.',
    'link'  => '/product.php',
    'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781412-22-11-2025-p8VGOlHNeSfoPzC9FakbAgqJd1DEtW7r.webp'
  ],
  [
    'title' => 'Filter Carbon + Multi Media',
    'desc'  => 'Best-seller untuk PDAM/sumur.',
    'link'  => '/product.php',
    'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781413-22-11-2025-xjrSCcA9KbpdiWMQYhyln6TDGkBRX0Ie.webp'
  ],
  [
    'title' => 'Softener 10×54',
    'desc'  => 'Kurangi kerak. Lindungi peralatan.',
    'link'  => '/product.php',
    'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781413-22-11-2025-xpvKH3ymkNBT2A0zPL1StoelRsMjnwE8.webp'
  ],
  [
    'title' => 'Manganese 10×54',
    'desc'  => 'Untuk zat besi & mangan tinggi.',
    'link'  => '/product.php',
    'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781413-22-11-2025-IAasRnF3VE9OTS7wcmg5iv2tCpeXyBKH.webp'
  ],
  [
    'title' => 'Booster Pump Set',
    'desc'  => 'Tekanan stabil sepanjang hari.',
    'link'  => '/product.php',
    'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781414-22-11-2025-8DpAjXCnK6ikWlxG7daMS9LJuVZTbmQz.webp'
  ],
  [
    'title' => 'RO Skala Restoran',
    'desc'  => 'Air higienis untuk F&B.',
    'link'  => '/product.php',
    'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781414-22-11-2025-RWmeLP8l1S2BIhFa4KcE3gHfYZTp5UnA.webp'
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
          <?php include "card/product.php" ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>