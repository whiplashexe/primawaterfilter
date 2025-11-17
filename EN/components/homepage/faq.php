<?php
$faq_data = json_decode(json_encode([
    [
        'title' => 'How long is the installation?',
        'desc'  => 'Typically 1 working day for homes. Larger projects take 2–5 days.'
    ],
    [
        'title' => 'When to replace media?',
        'desc'  => 'Every 6–12 months on average depending on water quality and usage.'
    ],
    [
        'title' => 'Do you provide warranty?',
        'desc'  => '6-month installation warranty. Equipment warranty follows manufacturer.'
    ]
]));
?>


<section id="faq">
    <div class="container faq-container">
        <div class="content">
            <header class="header">
                <h2 class="title">FAQ</h2>
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