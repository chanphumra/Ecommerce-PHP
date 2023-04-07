<?php 
    require_once "admin/lib/database.php";
    $result = Database::select("profile_setting", "*", "", "");
?>

<section class="py-0">
    <div class="container-small">
        <div class="ecommerce-topbar">
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <div class="row gx-0 gy-2 w-100 flex-between-center">
                    <div class="col-auto"><a class="text-decoration-none" href="index.php">
                            <div class="d-flex align-items-center"><img src="admin/uploads/profile/<?=$result[0]['image']?>" alt="phoenix" width="30" />
                                <p class="logo-text ms-2"><?=$result[0]['name']?></p>
                            </div>
                        </a></div>
                    <div class="col-auto order-md-1">
                        <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                            <li class="nav-item d-flex align-items-center">
                                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                            </li>
                            <li class="nav-item"><a class="nav-link px-2 icon-indicator icon-indicator-primary" href="index.php?page_name=cart" role="button"><span class="text-700" data-feather="shopping-cart" style="height:20px;width:20px;"></span><span class="icon-indicator-number countCart">0</span></a></li>
                            <!-- user auth-->
                            <li class="nav-item dropdown">
                                <a id="AUTH" class="nav-link px-2" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-700" data-feather="user" style="height:20px;width:20px;"></span>
                                </a>
                                <div id="SHOW_DROP_DOWN">
                                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2" aria-labelledby="navbarDropdownUser">
                                        <div class="card position-relative border-0">
                                            <div class="card-body p-0">
                                                <div class="text-center pt-4 pb-3">
                                                    <div class="avatar avatar-xl ">
                                                        <img class="rounded-circle " id="PROFILE_LOGIN" src="" alt="" />
                                                    </div>
                                                    <h6 class="mt-2 text-black" id="USERNAME_LOGIN"></h6>
                                                </div>
                                            </div>
                                            <div class="overflow-auto scrollbar">
                                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                                                    <li class="nav-item"><a class="nav-link px-3" href="index.php?page_name=order"><span class="me-2 text-900" data-feather="shopping-cart"></span>Your order</a></li>
                                                </ul>
                                            </div>
                                            <hr />
                                            <div class="px-3 mb-3">
                                                <a onclick="logout()" class="btn btn-phoenix-secondary d-flex flex-center w-100"> <span class="me-2" data-feather="log-out"> </span>Sign out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="search-box ecommerce-search-box w-100">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
<main class="main" id="top">
    <script>
        const countCart = document.querySelector('.countCart');
        const AUTH = document.querySelector('#AUTH');
        const SHOW_DROP_DOWN = document.querySelector('#SHOW_DROP_DOWN');
        const PROFILE_LOGIN = document.querySelector('#PROFILE_LOGIN');
        const USERNAME_LOGIN = document.querySelector('#USERNAME_LOGIN');

        SHOW_DROP_DOWN.classList.add('d-none');
        getUserLogin();

        AUTH.onclick = () => {
            if (SHOW_DROP_DOWN.classList.contains('d-none')) {
                window.location = "auth/login.php";
            }
        }

        setInterval(() => {
            const cart = JSON.parse(localStorage.getItem('carts')) || {
                products: [],
                subtotal: 0,
                discount_price: 0,
                total: 0
            };
            countCart.innerHTML = cart.products.length;
        }, 0);

        function getUserLogin() {
            if (localStorage.getItem("telegram_id")) {
                axios.get("admin/ajax/customer.php?action=select&table=customer&column=*&condition= WHERE telegram_id=" + localStorage.getItem("telegram_id")).then(res => {
                    const data = res.data[0];
                    SHOW_DROP_DOWN.classList.remove('d-none');
                    PROFILE_LOGIN.src = data.image;
                    USERNAME_LOGIN.innerHTML = data.name;
                }).catch(err => {
                    console.log(err);
                })
            } else if (localStorage.getItem("token")) {
                axios.get("admin/ajax/customer.php?action=verifyToken&token=" + localStorage.getItem("token")).then(res => {
                    const data = res.data[0];
                    SHOW_DROP_DOWN.classList.remove('d-none');
                    PROFILE_LOGIN.src = "admin/uploads/customer/" + data.image;
                    USERNAME_LOGIN.innerHTML = data.name;
                }).catch(err => {
                    console.log(err);
                })
            } else if (sessionStorage.getItem('email')) {
                axios.get(`admin/ajax/customer.php?action=select&table=customer&column=*&condition= WHERE email='${sessionStorage.getItem("email")}'`).then(res => {
                    const data = res.data[0];
                    SHOW_DROP_DOWN.classList.remove('d-none');
                    PROFILE_LOGIN.src = "admin/uploads/customer/" + data.image;
                    USERNAME_LOGIN.innerHTML = data.name;
                }).catch(err => {
                    console.log(err);
                })
            }
        }

        function logout() {
            localStorage.removeItem("telegram_id");
            localStorage.removeItem("token");
            sessionStorage.removeItem("email");
            window.location = "auth/login.php";
        }
    </script>