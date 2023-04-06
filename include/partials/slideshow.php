<?php

?>

<div class="container-small">
    <div class="slideshow swiper">
        <div class="swiper-wrapper">
            <div class="slideshow-item swiper-slide">
                <div class="contents">1</div>
                <div class="slideimage">1</div>
            </div>
            <div class="slideshow-item swiper-slide">
                <div class="contents">2</div>
                <div class="slideimage">2</div>
            </div>
            <div class="slideshow-item swiper-slide">
                <div class="contents">3</div>
                <div class="slideimage">3</div>
            </div>
            <div class="slideshow-item swiper-slide">
                <div class="contents">4</div>
                <div class="slideimage">4</div>
            </div>
        </div>
        <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
        <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<style>
    .swiper-button-next::after,
    .swiper-button-prev::after {
        display: none;
    }
</style>