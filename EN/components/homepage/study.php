<?php
$study_data = json_decode(json_encode([
    [
        'category' => 'Restaurant',
        'location' => 'Denpasar',
        'title'    => 'RO 400 GPD for hygienic kitchen water',
        'desc'     => 'Outcome: consistent TDS, better taste, safer ice production.',
        'link'     => ''
    ],
    [
        'category' => 'Restaurant',
        'location' => 'Denpasar',
        'title'    => 'RO 400 GPD for hygienic kitchen water',
        'desc'     => 'Outcome: consistent TDS, better taste, safer ice production.',
        'link'     => ''
    ],
    [
        'category' => 'Restaurant',
        'location' => 'Denpasar',
        'title'    => 'RO 400 GPD for hygienic kitchen water',
        'desc'     => 'Outcome: consistent TDS, better taste, safer ice production.',
        'link'     => ''
    ]
]));

?>

<section id="study">
    <div class="container study-container">
        <div class="content">
            <header class="header">
                <h2 class="title">Case studies</h2>
                <a href="#" class="cta">View All</a>
            </header>

            <div class="card-wrapper">
                <?php foreach ($study_data as $key => $study): ?>
                    <article class="card">
                        <div class="content-wrapper">
                            <span class="category"><?= $study->category ?> • <?= $study->location ?></span>
                            <h3 class="title"><?= $study->title ?></h3>
                            <p class="desc"><?= $study->desc ?></p>
                            <a href="#" class="cta">Read More</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>