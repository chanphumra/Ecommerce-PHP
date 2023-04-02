<script>
    if(localStorage.getItem("telegram_id") || localStorage.getItem("token") || sessionStorage.getItem("email")){
        window.location = "../index.php";    
    }
</script>