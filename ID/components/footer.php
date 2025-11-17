<footer id="footer">
    <div class="container footer-container">
        <div class="content">
            <div class="content-wrapper-1 content-wrapper">
                <a class="brand" href="#">
                    <img src="https://jwc.gotra-resources.my.id/web-upload/1690792056-31-07-2023-tK53dR6Mce4j1SOINEfALm7JPTZDwFnv.55"
                        alt="brand">
                </a>
                <p class="description">Solution for the Best Water Treatment in Indonesia.</p>
            </div>
            <div class="content-wrapper-2 content-wrapper">
                <h3 class="title">Navigasi</h3>
                <ul class="navs">
                    <?php foreach ($navs as $key => $nav): ?>
                    <li class="nav-item"><a href="<?= $nav->link ?>" class="nav-link"><?= $nav->title ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="content-wrapper-3 content-wrapper">
                <h3 class="title">Kontak</h3>
                <ul class="navs">
                    <li class="nav-item"><a href="#" class="nav-link">📍 Jl. Sedap Malam, Kesiman,
                            Denpasar
                            – Bali</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">📞 +62 812-3888-8949</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">🌐 primawaterfilter.com</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">✉️ info@primawaterfilter.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container footer-copyright">
        <p>© 2025 Prima Water Filter. All rights reserved.</p>
        <p>Designed by Jasa Web Creator</p>
    </div>
</footer>