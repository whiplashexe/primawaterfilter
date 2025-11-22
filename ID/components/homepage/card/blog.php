<article class="card blog">
    <?php if (!empty($blog->img_cover_url)): ?>
        <div class="cover-wrapper">
            <img src="<?= $blog->img_cover_url ?>" alt="cover" class="cover">
        </div>
    <?php endif; ?>
    <div class="content-wrapper">
        <h3 class="title"><?= $blog->title ?></h3>
        <p class="desc"><?= $blog->desc ?></p>
        <a class="cta" href="<?= $blog->link ?>">Baca Selengkapnya <i class="fas fa-arrow-right"></i> </a>
    </div>
</article>