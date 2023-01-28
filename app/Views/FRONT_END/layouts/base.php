<?php

/**
 *  Đây là file chứa bộ khung của webstie, nơi chứa
 *  các đường link CSS, JS,.. và các link khác, bất kỳ 
 *  thành phần giao diện nào khi được khai báo section
 *  ở index dều phải được khai báo vị trí hiển thị renderSection ở đây.
 */
// echo $data;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/public/FRONT-END/image/red-panda.ico">
    <title>Hugo website Selling vegetables</title>

    <!-- CSS CDN Plugin files -->
    <link href="<?= base_url(); ?>/public/FRONT-END/fonts/fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet" />

    <!-- slider sản phẩm -->
    <link href="<?= base_url(); ?>/public/FRONT-END/css/plugin/swiper-bundle.min.css" rel="stylesheet" />

    <!-- CSS CUSTOM -->
    <link href="<?= base_url(); ?>/public/FRONT-END/css/MY-CUSTOM.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/public/FRONT-END/css/quantity-product-cart.css" rel="stylesheet" />
</head>

<body>
    <!-- === MENU - HEADER === -->
    <?= $this->renderSection('header') ?>


    <!-- === MAIN CONTENTS === -->

    <!--[ GIỚI THIỆU - Home Section ]  -->
    <?= $this->renderSection('home_section') ?>

    <!--[ ƯU ĐIỂM - Features Section ]  -->
    <?= $this->renderSection('features_section') ?>

    <!--[ SẢN PHẨM - Products Section ]  -->
    <?= $this->renderSection('products_section') ?>

    <!--[ DANH MỤC - Categories Section ]  -->
    <?= $this->renderSection('categories_section') ?>

    <!--[ ĐÁNH GIÁ - Review Section ]  -->
    <?= $this->renderSection('review_section') ?>

    <!--[ BÀI VIẾT - Blogs Section ]  -->
    <?= $this->renderSection('blogs_section') ?>

    <!-- === END MAIN CONTENTS === -->


    <!-- === FOOTER === -->
    <?= $this->renderSection('footer') ?>

    <!-- ================================================ -->
    <!-- JS PLUGIN CDN file -->
    <script src="<?= base_url(); ?>/public/FRONT-END/js-plugin/jquery-3.6.1.min.js"></script>
    <!-- slider sản phẩm -->
    <script src="<?= base_url(); ?>/public/FRONT-END/js-plugin/swiper-bundle.min.js"></script>

    <!-- JS CUSTOM file -->
    <?= $this->renderSection('custom_js_files') ?>

    <script>
        /*----------------------------------------------
            HIỂN THỊ WEB SAU KHI LOAD XONG TẤT CẢ JS
        -----------------------------------------------*/
        window.onload = function() {
            setTimeout(function() {
                // $('.spinner-loading').fadeOut();
                console.log('ok');
            }, 1200);
        };
        $(window).on('beforeunload', function() {
            // $('.spinner-loading').fadeIn();
            console.log('ok');
        });
    </script>
</body>
