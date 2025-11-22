<?php
$recommendation_data = json_decode(json_encode([
  [
    'title' => 'Rumah Tangga',
    'items' => [
      [
        'title' => 'Filter Carbon',
        'desc'  => 'Hilangkan bau, warna, klorin.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781417-22-11-2025-CPFW305EKUNbJGxT6HcD9fSBQno1RhsL.webp'
      ],
      [
        'title' => 'Softener',
        'desc'  => 'Turunkan kapur/kerak. Aman untuk kulit & peralatan.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781416-22-11-2025-eyO3tlUAMZWCEHmGz9hY8ubQDJc2FRnX.webp'
      ],
      [
        'title' => 'RO 100 GPD (Under Sink)',
        'desc'  => 'Air minum super murni.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781417-22-11-2025-8NBEMZ5fhbpeCvoyskl2I0aWcdRJm93A.webp'
      ],
      [
        'title' => 'Pompa Booster',
        'desc'  => 'Tekanan air selalu stabil.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781416-22-11-2025-4QiHmu0P32xOoKNFwtXW8VISb6pfZUyD.webp'
      ]
    ]
  ],
  [
    'title' => 'Bisnis',
    'items' => [
      [
        'title' => 'Multi Media Filter',
        'desc'  => 'Sedimen, lumpur, kekeruhan.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781416-22-11-2025-XlOY3NEgyTkHAve5BxozLCWda9026mij.webp'
      ],
      [
        'title' => 'Manganese',
        'desc'  => 'Zat besi & mangan.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781416-22-11-2025-xX2NRDfId60rJcuEkhgm5UHFaS8pnieb.webp'
      ],
      [
        'title' => 'Softener',
        'desc'  => 'Lindungi pipa & mesin produksi.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781415-22-11-2025-hKdkrHFE5zQ3fB194gxG2IqaT0POYVN6.webp'
      ],
      [
        'title' => 'RO Skala Menengah',
        'desc'  => 'Produksi air murni untuk operasional.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781415-22-11-2025-oeibGNQR4rcFLzBmwVP1gv6q82CntT0U.webp'
      ],
      [
        'title' => 'Sistem Pompa',
        'desc'  => 'Distribusi & tekanan stabil.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781415-22-11-2025-8rqTJSiGluNH6YoeBI43vbaQkmPU5jWt.webp'
      ]
    ]
  ],
  [
    'title' => 'Restoran',
    'items' => [
      [
        'title' => 'RO Food-Grade',
        'desc'  => 'Air higienis untuk minum & masak.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781414-22-11-2025-ux5pfWE8w3jS0AlC67vhT4BQq2bRoPya.webp'
      ],
      [
        'title' => 'Filter Carbon',
        'desc'  => 'Rasa & bau netral untuk F&B.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781414-22-11-2025-RWmeLP8l1S2BIhFa4KcE3gHfYZTp5UnA.webp'
      ],
      [
        'title' => 'Softener',
        'desc'  => 'Kurangi kerak di mesin kopi/steamer.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781413-22-11-2025-IAasRnF3VE9OTS7wcmg5iv2tCpeXyBKH.webp'
      ],
      [
        'title' => 'Booster Pump',
        'desc'  => 'Tekanan stabil di jam ramai.',
        'link'  => '',
        'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1763781413-22-11-2025-xpvKH3ymkNBT2A0zPL1StoelRsMjnwE8.webp'
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
                <div class="cover-wrapper">
                  <img class="cover" src=${item.img_cover_url} alt="cover">
                </div>
                <div class="content-wrapper">
                  <h3 class="title">${item.title}</h3>
                  <p class="desc">${item.desc}</p>
                  <a class="cta" href="${item.link}" >Konsultasikan paket ini <i class="fas fa-arrow-right"></i></a>
                </div>
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