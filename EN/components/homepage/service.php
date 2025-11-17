<?php
$service_data = json_decode(json_encode([
    [
        'title' => 'Water Filter Installation',
        'desc'  => 'Carbon, Softener, Manganese, Multi Media'
    ],
    [
        'title' => 'Reverse Osmosis (RO)',
        'desc'  => '100 GPD to industrial scale'
    ],
    [
        'title' => 'Pump Installation',
        'desc'  => 'Deep well, transfer, booster'
    ],
    [
        'title' => 'Routine Maintenance',
        'desc'  => 'Backwash, media change, photo report'
    ]
]));
?>


<section id="service">
    <div class="container service-container">
        <div class="content">
            <header class="header">
                <h2 class="title">Services</h2>
            </header>

            <div class="card-wrapper">
                <?php foreach ($service_data as $key => $service): ?>
                    <article class="card">
                        <h3 class="title"><?= $service->title ?></h3>
                        <p class="desc"><?= $service->desc ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>