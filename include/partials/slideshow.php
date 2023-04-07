<?php
require_once 'admin/lib/database.php';
$result = Database::select("slideshow", "*", "", "WHERE enable = 1");
?>

<?php if (!empty($result)) { ?>
<div class="container-small">
    <div class="slideshow swiper">
        <div class="swiper-wrapper">
            <?php foreach ($result as $item) { ?>
                <div class="slideshow-item swiper-slide">
                    <div class="contents">
                        <h1 class="title"><?=$item['title']?></h1>
                        <p class="text mt-2"><?=$item['text']?></p>
                        <a href="" type="button" class="btn btn-primary mt-2 py-3" style="width: 150px; font-size: 14px;">Shop Now</a>
                    </div>
                    <div class="slideimage">
                        <img src="admin/uploads/slideshow/<?=$item['image']?>" alt="" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
        <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<?php } ?>
<style>
    .swiper-button-next::after,
    .swiper-button-prev::after {
        display: none;
    }
</style>