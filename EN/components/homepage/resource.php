<?php
$resource_data = json_decode(json_encode([
    [
        'title' => 'How to choose a home water filter',
        'desc'  => 'Key checks before installation',
        'img'   => '',
        'link'  => ''
    ],
    [
        'title' => 'How to choose a home water filter',
        'desc'  => 'Key checks before installation',
        'img'   => '',
        'link'  => ''
    ],
    [
        'title' => 'How to choose a home water filter',
        'desc'  => 'Key checks before installation',
        'img'   => '',
        'link'  => ''
    ]
]));
?>


<section id="resource">
    <div class="container resource-container">
        <div class="content">
            <header class="header">
                <h2 class="title">Resources</h2>
                <a href="#" class="cta">Browse all</a>
            </header>

            <div class="card-wrapper">
                <?php foreach ($resource_data as $key => $resource): ?>
                    <article class="card">
                        <img class="cover"
                            src="https://images.unsplash.com/photo-1762025501045-17a2541ad84f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="cover">
                        <div class="content-wrapper">
                            <h3 class="title"><?= $resource->title ?></h3>
                            <p class="desc"><?= $resource->desc ?></p>
                            <a href="#" class="cta">Read article</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>