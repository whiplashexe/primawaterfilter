<?php
$industry_data = json_decode(json_encode([
    [
        'title' => 'Home',
        'items' => [
            [
                'title' => 'RO 100 GPD Under Sink',
                'desc'  => 'Drink-ready water at the tap',
                'link'  => ''
            ],
            [
                'title' => 'Carbon + Multi Media 10×54',
                'desc'  => 'Sediment, chlorine, odor control',
                'link'  => ''
            ],
        ]
    ],
    [
        'title' => 'Villa / Hotel',
        'items' => [
            [
                'title' => 'Booster Pump + Pressure Tank',
                'desc'  => 'Stable pressure across rooms',
                'link'  => ''
            ],
            [
                'title' => 'Softener 10×54',
                'desc'  => 'Protect fixtures from scale',
                'link'  => ''
            ],
        ]
    ],
    [
        'title' => 'Restaurant / F&B',
        'items' => [
            [
                'title' => 'RO 400–800 GPD',
                'desc'  => 'Hygienic water for kitchen & bar',
                'link'  => ''
            ],
            [
                'title' => 'Prefilter + UV',
                'desc'  => 'Extra assurance for food safety',
                'link'  => ''
            ],
        ]
    ],
    [
        'title' => 'Industrial',
        'items' => [
            [
                'title' => 'RO 1–2 m³/h Skid',
                'desc'  => 'Process water with TDS control',
                'link'  => ''
            ],
            [
                'title' => 'Manganese 13×54',
                'desc'  => 'Reduce Fe/Mn and metallic odors',
                'link'  => ''
            ],
        ]
    ]
]));
?>


<section id="industry">
    <div class="container industry-container">
        <div class="content">
            <header class="section-header">
                <h2 class="section-title">Pick your industry</h2>
                <p class="section-description">Get quick starter recommendations tailored to your use case</p>
            </header>

            <div class="options-btn">
                <?php foreach ($industry_data as $key => $button): ?>
                <button class="option-btn <?= $key === 0 ? 'btn-active' : '' ?>"><?= $button->title ?></button>
                <?php endforeach; ?>
            </div>

            <div class="card-wrapper"></div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const industryData = <?= json_encode($industry_data) ?>;
    const cardWrapper = document.querySelector('#industry .card-wrapper');
    const recOptBtns = document.querySelectorAll('#industry .options-btn .option-btn');

    function renderCards(index) {
        const selected = industryData[index];
        cardWrapper.innerHTML = selected.items.map(item => `
            <div class="card">
                <h3 class="title">${item.title}</h3>
                <p class="desc">${item.desc}</p>
                <a class="cta" href="${item.link}" >Ask for a tailored setup <i class="fas fa-arrow-right"></i></a>
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