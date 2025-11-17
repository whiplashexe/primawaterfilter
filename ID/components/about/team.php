<?php
$team_data = json_decode(json_encode([
    [
        'name' => 'Wira Teknik',
        'role' => 'Tim Prima Water Filter',
        'img'  => 'https://jwc.gotra-resources.my.id/web-upload/1762852772-11-11-2025-OT8sjak20Zvrfz6cEWGVLJgD5XeSwxly.webp'
    ],
    [
        'name' => 'Ayu Customer Support',
        'role' => 'Tim Prima Water Filter',
        'img'  => 'https://jwc.gotra-resources.my.id/web-upload/1762852772-11-11-2025-OT8sjak20Zvrfz6cEWGVLJgD5XeSwxly.webp'
    ],
    [
        'name' => 'Bagus Engineer',
        'role' => 'Tim Prima Water Filter',
        'img'  => 'https://jwc.gotra-resources.my.id/web-upload/1762852772-11-11-2025-OT8sjak20Zvrfz6cEWGVLJgD5XeSwxly.webp'
    ]
]));
?>


<section id="about_team">
    <div class="container about_team-container">
        <div class="content">
            <header class="section-header">
                <h2 class="section-title">Tim Profesional di Balik Layanan Kami</h2>
                <p class="section-description">Setiap anggota tim kami memiliki keahlian di bidang teknik air,
                    instalasi, dan pelayanan pelanggan — memastikan setiap proyek berjalan rapi, cepat, dan tepat.</p>
            </header>

            <div class="card-wrapper">
                <?php foreach ($team_data as $key => $team): ?>
                <article class="card">
                    <img src="<?= $team->img ?>" alt="team image" class="team-image">
                    <div class="card-content">
                        <h3 class="name"><?= $team->name ?></h3>
                        <p class="role"><?= $team->role ?></p>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>