<?php
$why_data = json_decode(json_encode([
    [
        'title' => 'Tim Profesional',
        'desc' => 'Teknisi bersertifikat dan berpengalaman di berbagai skala proyek.',
        'icon' => 'fa-solid fa-user-check',
    ],
    [
        'title' => 'Respon Cepat',
        'desc' => 'Instalasi dan layanan dilakukan cepat dan aman.',
        'icon' => 'fa-solid fa-bolt',
    ],
    [
        'title' => 'Solusi Custom',
        'desc' => 'Rancangan sistem berdasarkan kondisi air dan kebutuhan lokasi.',
        'icon' => 'fa-solid fa-sliders',
    ],
    [
        'title' => 'Garansi & After-Sales',
        'desc' => 'Perawatan berkala dan dukungan teknis terjadwal.',
        'icon' => 'fa-solid fa-shield',
    ]
]));
?>


<section id="why">
    <div class="container why-container">
        <div class="content">
            <header class="section-header">
                <span class="section-span">Mengapa Memilih Kami</span>
                <h2 class="section-title">Mengapa Memilih Prima Water Filter</h2>
                <p class="section-description">Kami memberikan solusi menyeluruh untuk kebutuhan air bersih Anda.</p>
            </header>
            <main class="card-wrapper">
                <?php foreach ($why_data as $key => $why): ?>
                <article class="card">
                    <i class="icon <?= $why->icon ?>"></i>
                    <h3 class="title"><?= $why->title ?></h3>
                    <p class="desc"><?= $why->desc ?></p>
                </article>
                <?php endforeach; ?>
            </main>
        </div>
    </div>
</section>