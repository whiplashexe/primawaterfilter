<?php
$recommendation_data = json_decode(json_encode([
    [
        'title' => 'Rumah Tangga',
        'items' => [
            [
                'title' => 'Filter Carbon',
                'desc'  => 'Hilangkan bau, warna, klorin.',
                'link'  => ''
            ],
            [
                'title' => 'Softener',
                'desc'  => 'Turunkan kapur/kerak. Aman untuk kulit & peralatan.',
                'link'  => ''
            ],
            [
                'title' => 'RO 100 GPD (Under Sink)',
                'desc'  => 'Air minum super murni.',
                'link'  => ''
            ],
            [
                'title' => 'Pompa Booster',
                'desc'  => 'Tekanan air selalu stabil.',
                'link'  => ''
            ]
        ]
    ],
    [
        'title' => 'Bisnis',
        'items' => [
            [
                'title' => 'Multi Media Filter',
                'desc'  => 'Sedimen, lumpur, kekeruhan.',
                'link'  => ''
            ],
            [
                'title' => 'Manganese',
                'desc'  => 'Zat besi & mangan.',
                'link'  => ''
            ],
            [
                'title' => 'Softener',
                'desc'  => 'Lindungi pipa & mesin produksi.',
                'link'  => ''
            ],
            [
                'title' => 'RO Skala Menengah',
                'desc'  => 'Produksi air murni untuk operasional.',
                'link'  => ''
            ],
            [
                'title' => 'Sistem Pompa',
                'desc'  => 'Distribusi & tekanan stabil.',
                'link'  => ''
            ]
        ]
    ],
    [
        'title' => 'Restoran',
        'items' => [
            [
                'title' => 'RO Food-Grade',
                'desc'  => 'Air higienis untuk minum & masak.',
                'link'  => ''
            ],
            [
                'title' => 'Filter Carbon',
                'desc'  => 'Rasa & bau netral untuk F&B.',
                'link'  => ''
            ],
            [
                'title' => 'Softener',
                'desc'  => 'Kurangi kerak di mesin kopi/steamer.',
                'link'  => ''
            ],
            [
                'title' => 'Booster Pump',
                'desc'  => 'Tekanan stabil di jam ramai.',
                'link'  => ''
            ]
        ]
    ]
]));
?>


<section id="recommendation">
    <div class="container recommendation-container">
        <div class="content">
            <header class="section-header">
                <span class="section-span">Rekomendasi Cepat</span>
                <h2 class="section-title">Kebutuhanmu untuk apa?</h2>
                <p class="section-description">Pilih segmen di bawah ini. Kami tampilkan paket filter yang paling
                    relevan.</p>
            </header>

            <div class="options-btn">
                <?php foreach ($recommendation_data as $key => $button): ?>
                <button class="option-btn <?= $key === 0 ? 'btn-active' : '' ?>"><?= $button->title ?></button>
                <?php endforeach; ?>
            </div>

            <div class="card-wrapper"></div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const recommendationData = <?= json_encode($recommendation_data) ?>;
    const cardWrapper = document.querySelector('#recommendation .card-wrapper');
    const recOptBtns = document.querySelectorAll('#recommendation .options-btn .option-btn');

    function renderCards(index) {
        const selected = recommendationData[index];
        cardWrapper.innerHTML = selected.items.map(item => `
            <div class="card">
                <h3 class="title">${item.title}</h3>
                <p class="desc">${item.desc}</p>
                <a class="cta" href="${item.link}" >Konsultasikan paket ini <i class="fas fa-arrow-right"></i></a>
            </div>
        `).join('');
    }

    renderCards(0);

    recOptBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            recOptBtns.forEach((btn2) => {
                btn2.classList.remove("btn-active");
            })
            btn.classList.add('btn-active');
            renderCards(index);
        })
    })
})
</script>
