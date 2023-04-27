<?php 
    if(!isset($_SESSION['token']) && !isset($_COOKIE['token']) && !isset($_COOKIE['telegram_id'])){
        header("location: index.php");
        exit();
    }
?>

<script>
    let c = JSON.parse(localStorage.getItem('carts')) || {
        products: [],
        subtotal: 0,
        discount_price: 0,
        total: 0
    };
    if(c.products.length <= 0 ) window.location = 'index.php';
</script>