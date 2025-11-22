<article class="card product">
  <?php if (!empty($data->img_cover_url)): ?>
    <div class="cover-wrapper">
      <img class="cover" src="<?= $data->img_cover_url ?>" alt="cover">
    </div>
  <?php endif; ?>
  <div class="content-wrapper">
    <h3 class="title"><?= $data->title ?></h3>
    <p class="desc"><?= $data->desc ?></p>
    <a class="cta" href="<?= $data->link ?>">tanya stok & harga <i class="fas fa-arrow-right"></i> </a>
  </div>
</article>