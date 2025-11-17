<?php
$why_data = json_decode(json_encode([
    ['title' => 'On-site survey and basic water test included'],
    ['title' => 'Clean piping, safe panels, documented handover'],
    ['title' => 'Clean piping, safe panels, documented handover'],
]))
?>

<section id="why">
    <div class="container why-container">
        <div class="content">
            <?php foreach ($why_data as $key => $why): ?>
            <article class="card">
                <p class="title"><?= $why->title ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>