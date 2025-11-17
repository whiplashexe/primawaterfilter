<?php
$faq_data = json_decode(json_encode([
    [
        'title' => 'Apa perbedaan filter carbon dan softener?',
        'desc'  => 'Carbon menyerap bau, warna, dan klorin. Softener menurunkan kadar kapur untuk mencegah kerak.'
    ],
    [
        'title' => 'Berapa lama media filter perlu diganti?',
        'desc'  => 'Umumnya 6–12 bulan tergantung kualitas air dan volume pemakaian. Tim kami bisa jadwalkan maintenance rutin.'
    ],
    [
        'title' => 'Bisa dipasang untuk rumah kecil?',
        'desc'  => 'Bisa. Kami siapkan konfigurasi yang efisien sesuai debit dan kebutuhan titik air.'
    ],
    [
        'title' => 'Apakah Prima menyediakan survei lokasi?',
        'desc'  => 'Ya. Konsultasi awal dan survei lokasi tersedia untuk menentukan solusi terbaik.'
    ]
]));
?>


<section id="faq">
    <div class="container faq-container">
        <div class="content">
            <header class="section-header">
                <span class="section-span">FAQ</span>
                <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
            </header>
            <div class="card-wrapper">
                <?php foreach ($faq_data as $key => $faq): ?>
                <article class="card">
                    <div class="question">
                        <h3 class="title">
                            <?= $faq->title ?>
                        </h3>
                        <button class="faq-btn"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="answer">
                        <p class="desc">
                            <?= $faq->desc ?>
                        </p>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const faqCards = document.querySelectorAll('#faq .card');

    faqCards.forEach((card) => {
        const faqBtn = card.querySelector('.faq-btn');
        const answer = card.querySelector('.answer')
        faqBtn.addEventListener('click', () => {
            card.classList.toggle('faq-active');
            faqBtn.classList.toggle('faq-active');
            answer.classList.toggle('faq-active');
        })
    })
});
</script>