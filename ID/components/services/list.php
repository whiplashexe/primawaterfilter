<?php
$services_data = json_decode(json_encode([
    [
        'title' => 'Pemasangan Filter Air',
        'desc'  => 'Untuk kamu yang memiliki masalah air keruh, berbau, tinggi zat besi, atau kapur. Kami menawarkan berbagai jenis filter seperti Carbon, Softener, Manganese, dan Multi Media untuk hasil air yang jernih dan aman digunakan setiap hari.',
        'list'  => [
            'Menjernihkan air dari kotoran dan bau',
            'Menetralkan zat besi dan kapur',
            'Meningkatkan kualitas air untuk kebutuhan harian'
        ],
        'link'  => ''
    ],
    [
        'title' => 'Pemasangan Sistem RO (Reverse Osmosis)',
        'desc'  => 'Solusi air higienis untuk restoran, villa, dan industri. Teknologi RO mampu menyaring air hingga ke tingkat molekul untuk menghasilkan air super murni yang aman diminum dan digunakan untuk produksi makanan.',
        'list'  => [
            'Hasil air higienis dan layak konsumsi',
            'Cocok untuk dapur restoran dan produksi makanan',
            'Kapasitas bervariasi dari 100 GPD hingga skala industri'
        ],
        'link'  => ''
    ],
    [
        'title' => 'Pemasangan Pompa Air',
        'desc'  => 'Dapatkan tekanan air yang stabil di rumah, villa, atau bisnis kamu. Kami menyediakan instalasi untuk pompa sumur dalam, pompa transfer, dan booster system sesuai kebutuhan dan kapasitas lokasi.',
        'list'  => [
            'Tekanan air lebih stabil di seluruh titik',
            'Dukungan berbagai tipe pompa',
            'Instalasi aman dan rapi oleh teknisi profesional'
        ],
        'link'  => ''
    ],
    [
        'title' => 'Service & Maintenance Rutin',
        'desc'  => 'Perawatan berkala agar sistem filtrasi air kamu tetap bekerja maksimal. Tim kami siap melakukan pengecekan, pembersihan, dan penggantian media filter sesuai jadwal.',
        'list'  => [
            'Mencegah penurunan performa sistem',
            'Perpanjang umur filter dan pompa',
            'Dukungan teknis cepat dan terjadwal'
        ],
        'link'  => ''
    ]
]));
?>


<section id="service_list">
    <div class="container service_list-container">
        <div class="content">
            <?php foreach ($services_data as $key => $service): ?>
            <article class="card">
                <h3 class="title"><?= $service->title ?></h3>
                <p class="desc"><?= $service->desc ?></p>
                <ul class="list">
                    <?php foreach ($service->list as $key => $li): ?>
                    <li><?= $li ?></li>
                    <?php endforeach; ?>
                </ul>
                <a class="cta" href="<?= $service->link ?>">Konsultasi Gratis</a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>