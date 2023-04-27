<?php 
    include_once 'checkauth.php';
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