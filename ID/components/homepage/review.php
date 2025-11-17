<?php
$review_data = json_decode(json_encode([
    [
        'message' => 'Air di rumah kami sekarang jernih dan tidak berbau. Prosesnya cepat dan rapi.',
        'name'  => 'Made',
        'location' => 'Denpasar'
    ],
    [
        'message' => 'Restoran kami pakai RO dari Prima. Hasil air stabil dan higienis untuk dapur.',
        'name'  => 'Ketut',
        'location' => 'Canggu'
    ],
    [
        'message' => 'Tim profesional, after-sales responsif. Harga sebanding dengan kualitas.',
        'name'  => 'Ibu Ayu',
        'location' => 'Ubud'
    ]
]));
?>


<section id="review">
    <div class="container review-container">
        <div class="content">
            <header class="section-header">
                <span class="section-span">Ulasan</span>
                <h2 class="section-title">Apa Kata Client Kami</h2>
            </header>
            <div class="card-wrapper">
                <?php foreach ($review_data as $key => $review): ?>
                <article class="card">
                    <p class="message">"<?= $review->message ?>"</p>
                    <p class="profile"><?= $review->name ?> - <?= $review->location ?> </p>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>