<?php

/**
 *   Đây là trang index dùng để hiển thị toàn bộ website,
 *   Các section là dùng để gọi các thành phần của trang
 *   cần phần giao diện nào thì khai báo section đồng thời
 *   khai báo vị trí xuất hiện trong file: layouts/base.php
 */
?>

<!-- GỌI BỘ KHUNG RA ĐỂ NẠP SECTION PHÍA DƯỚI -->
<?= $this->extend('layouts/base') ?>


<!-- ========================================== -->
<!-- === MENU - HEADER === -->
<?= $this->section('header') ?>
<?= $this->include('layouts/header') ?>
<?= $this->endSection() ?>


<!-- === MAIN CONTENTS === -->

<!--[ GIỚI THIỆU - Home Section ]  -->
<?= $this->section('home_section') ?>
<?= $this->include('partials/home_section') ?>
<?= $this->endSection() ?>

<!--[ ƯU ĐIỂM - Features Section ]  -->
<?= $this->section('features_section') ?>
<?= $this->include('partials/features_section') ?>
<?= $this->endSection() ?>

<!--[ SẢN PHẨM - Products Section ]  -->
<?= $this->section('products_section') ?>
<?= $this->include('partials/products_section') ?>
<?= $this->endSection() ?>

<!--[ DANH MỤC - Categories Section ]  -->
<?= $this->section('categories_section') ?>
<?= $this->include('partials/categories_section') ?>
<?= $this->endSection() ?>

<!--[ ĐÁNH GIÁ - Review Section ]  -->
<?= $this->section('review_section') ?>
<?= $this->include('partials/review_section') ?>
<?= $this->endSection() ?>

<!--[ BÀI VIẾT - Blogs Section ]  -->
<?= $this->section('blogs_section') ?>
<?= $this->include('partials/blogs_section') ?>
<?= $this->endSection() ?>

<!-- === END MAIN CONTENTS === -->


<!-- === FOOTER === -->
<?= $this->section('footer') ?>
<?= $this->include('layouts/footer') ?>
<?= $this->endSection() ?>



<!-- ========================================== -->
<!-- TẤT CẢ CÁC FILE JS TỰ VIẾT - JS CUSTOM  -->
<?= $this->section('custom_js_files') ?>
<?= $this->include('js/MY_CUSTOM_JS') ?>
<?= $this->include('js/quantity_product_cart') ?>
<?= $this->include('js/swiper_slider_custom') ?>
<?= $this->endSection() ?>
