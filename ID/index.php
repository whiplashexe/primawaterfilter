<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">


    <!-- JQUERY -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SLICK -->
    <script defer src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/components/header.css">
    <link rel="stylesheet" href="./css/components/homepage/slider.css">
    <link rel="stylesheet" href="./css/components/homepage/why.css">
    <link rel="stylesheet" href="./css/components/homepage/service.css">
    <link rel="stylesheet" href="./css/components/homepage/recommendation.css">
    <link rel="stylesheet" href="./css/components/homepage/review.css">

    <link rel="stylesheet" href="./css/components/homepage/home_products.css">
    <link rel="stylesheet" href="./css/components/homepage/card/product.css">

    <link rel="stylesheet" href="./css/components/homepage/blogs.css">
    <link rel="stylesheet" href="./css/components/homepage/card/blog.css">

    <link rel="stylesheet" href="./css/components/homepage/faq.css">
    <link rel="stylesheet" href="./css/components/footer.css">
</head>

<body>
    <?php include "components/header.php" ?>
    <?php include "components/homepage/slider.php" ?>
    <?php include "components/homepage/why.php" ?>
    <?php include "components/homepage/service.php" ?>
    <?php include "components/homepage/recommendation.php" ?>
    <?php include "components/homepage/home_products.php" ?>
    <?php include "components/homepage/review.php" ?>
    <?php include "components/homepage/blogs.php" ?>
    <?php include "components/homepage/faq.php" ?>
    <?php include "components/footer.php" ?>
</body>

</html>