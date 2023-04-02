<script>
    let is_login = false;
    let c = JSON.parse(localStorage.getItem('carts')) || {
        products: [],
        subtotal: 0,
        discount_price: 0,
        total: 0
    };
    if(localStorage.getItem("telegram_id") || localStorage.getItem("token") || sessionStorage.getItem("email") && c.products.length > 0 ){
       is_login = true;    
    }
    if(!is_login) window.location = 'index.php';
</script>