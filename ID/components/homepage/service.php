<?php
$service_data = json_decode(json_encode([
    [
        'title' => 'Pemasangan Filter Air',
        'desc' => 'Mengatasi air keruh, berbau, tinggi zat besi dan kapur. Sistem disesuaikan dengan kondisi air di lokasi Anda.'
    ],
    [
        'title' => 'Sistem RO (Reverse Osmosis)',
        'desc' => 'Hasil air super murni untuk konsumsi rumah, restoran, hingga industri. Memisahkan kontaminan hingga tingkat molekul.'
    ],
    [
        'title' => 'Pemasangan Pompa Air',
        'desc' => 'Stabilkan tekanan air di rumah, villa, atau bisnis. Dukungan sumur dalam, transfer, hingga booster system.'
    ],
    [
        'title' => 'Service & Maintenance Rutin',
        'desc' => 'Pemeriksaan berkala, pembersihan, dan penggantian media filter agar performa sistem selalu optimal.'
    ]
]));
?>


<section id="service">
    <div class="container service-container">
        <div class="content">
            <header class="section-header">
                <span class="section-span">Layanan</span>
                <h2 class="section-title">Layanan Utama Kami</h2>
                <p class="section-description">Semua kebutuhan air bersih Anda, dalam satu solusi lengkap.</p>
            </header>
            <div class="card-wrapper">
                <?php foreach ($service_data as $key => $service): ?>
                <article class="card">
                    <h3 class="title"><?= $service->title ?></h3>
                    <p class="desc"><?= $service->desc ?></p>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>