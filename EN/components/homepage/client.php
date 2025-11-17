<?php
$client_data = json_decode(json_encode([
    [
        'rating' => 5,
        'quote'  => 'Clear water and stable pressure. Clean install and fast handover.',
        'author' => 'Villa Manager, Canggu'
    ],
    [
        'rating' => 5,
        'quote'  => 'Clear water and stable pressure. Clean install and fast handover.',
        'author' => 'Villa Manager, Canggu'
    ],
    [
        'rating' => 5,
        'quote'  => 'Clear water and stable pressure. Clean install and fast handover.',
        'author' => 'Villa Manager, Canggu'
    ]
]));
?>


<section id="client">
    <div class="container client-container">
        <div class="content">
            <div class="header">
                <h2 class="title">What clients say</h2>
            </div>

            <div class="card-wrapper">
                <?php foreach ($client_data as $key => $client): ?>
                    <article class="card">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="message"><?= $client->quote ?></p>
                        <span class="author">— <?= $client->author ?></span>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>