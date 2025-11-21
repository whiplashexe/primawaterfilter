<?php
$blogs_data = json_decode(json_encode([
    [
        'title' => '5 Tanda Air di Rumahmu Butuh Filter',
        'desc'  => 'Kenali gejala umum sebelum masalah semakin besar.',
        'link'  => ''
    ],
    [
        'title' => 'RO vs UV — Mana yang Lebih Efektif?',
        'desc'  => 'Penjelasan singkat untuk kebutuhan rumah dan bisnis.',
        'link'  => ''
    ],
    [
        'title' => 'Cara Merawat Filter Agar Tetap Awet',
        'desc'  => 'Checklist sederhana untuk pemilik rumah dan villa.',
        'link'  => ''
    ]
]));
?>


<section id="blogs">
    <div class="container blogs-container">
        <div class="content">
            <header class="section-header">
                <span class="section-span">Artikel</span>
                <h2 class="section-title">Edukasi & Tips Seputar Air Bersih</h2>
            </header>
            <div class="card-wrapper">
                <?php foreach ($blogs_data as $key => $blog): ?>
                <?php include "card/blog.php" ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>