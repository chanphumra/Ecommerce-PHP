<?php
    require_once 'checkauth.php';
    define('BOT_USERNAME', "bazaar_login_php_bot");
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../admin/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../admin/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../admin/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../admin/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../admin/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../admin/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../admin/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../admin/vendors/simplebar/simplebar.min.js"></script>
    <script src="../admin/assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../admin/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../admin/assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../admin/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../admin/assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../admin/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <link href="../admin/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <main class="main" style="background: url('../assets/img/bg.png') no-repeat; background-size: 100% 100%;" id="top">
        <div class="container-fluid px-0" style="background: rgba(0, 0, 0, 0.1);" data-layout="container">
            <div class="container">
                <div class="row flex-center min-vh-100 py-5">
                    <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3 py-2 shadow-sm bg-white rounded-4">
                        <a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block">
                                <img src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" />
                            </div>
                        </a>
                        <div class="text-center mb-7">
                            <h3 class="text-1000">Sign In</h3>
                            <p class="text-700">Get access to your account</p>
                        </div>
                        <div class="w-100 d-flex justify-content-center align-items-center">
                            <script async src="https://telegram.org/js/telegram-widget.js" data-telegram-login="<?= BOT_USERNAME ?>" data-size="large" data-auth-url="auth.php"></script>
                        </div>
                        <div class="position-relative">
                            <hr class="bg-200 mt-5 mb-4" />
                            <div class="divider-content-center bg-white">or use email</div>
                        </div>
                        <form>
                            <div class="mb-3 text-start"><label class="form-label mb-1" for="email">Email address</label>
                                <div class="form-icon-container"><input class="form-control form-icon-input" name="email" id="email" type="email" placeholder="name@example.com" require="" /><span class="fas fa-user text-900 fs--1 form-icon"></span></div>
                            </div>
                            <div class="mb-3 text-start"><label class="form-label mb-1" for="password">Password</label>
                                <div class="form-icon-container"><input class="form-control form-icon-input" name="password" id="password" type="password" placeholder="Password" require="" /><span class="fas fa-key text-900 fs--1 form-icon"></span></div>
                            </div>
                            <div class="row flex-between-center mb-7">
                                <div class="col-auto">
                                    <div class="form-check mb-0 "><input class="form-check-input cursor-pointer" name="remember" id="remember" type="checkbox" /><label class="form-check-label mb-0 mt-1 cursor-pointer" for="remember">Remember me</label></div>
                                </div>
                                <div class="col-auto"><a class="fs--1 fw-semi-bold" href="../../../pages/authentication/simple/forgot-password.html">Forgot Password?</a></div>
                            </div><button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
                        </form>
                        <div class="text-center"><a class="fs--1 fw-bold" href="register.php">Create an account</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../admin/vendors/popper/popper.min.js"></script>
    <script src="../admin/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../admin/vendors/anchorjs/anchor.min.js"></script>
    <script src="../admin/vendors/is/is.min.js"></script>
    <script src="../admin/vendors/fontawesome/all.min.js"></script>
    <script src="../admin/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../admin/vendors/list.js/list.min.js"></script>
    <script src="../admin/vendors/feather-icons/feather.min.js"></script>
    <script src="../admin/vendors/dayjs/dayjs.min.js"></script>
    <script src="../admin/assets/js/phoenix.js"></script>
    <script src="../admin/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const form = document.querySelector('form');
        const email = document.querySelector('#email');
        const password = document.querySelector('#password');

        form.onsubmit = (e) => {
            e.preventDefault();
            if (email.value == "" || password.value == "")
                return Swal.fire({
                    toast: true,
                    position: 'top',
                    showClass: {
                        icon: 'animated heartBeat delay-1s'
                    },
                    icon: 'error',
                    text: 'Please check information again',
                    showConfirmButton: false,
                    timer: 1000
                });
            axios.post('../admin/ajax/customer.php?action=login', new FormData(form)).then(res => {
                const success = res.data[0].success;
                if (success) {
                    const verify = res.data[1].verify;
                    const user = res.data[2].user ?? [];
                    const token = res.data[2].token ?? "";
                    const remember = document.querySelector('#remember');
                    if (verify == 1) {
                        if(remember.checked){
                            localStorage.setItem('token', token);
                            /*======== remove another auth ========*/
                            sessionStorage.removeItem('email');
                            localStorage.removeItem('telegram_id');
                        }
                        else{
                            sessionStorage.setItem('email', email.value);
                            /*======== remove another auth ========*/
                            localStorage.removeItem('token');
                            localStorage.removeItem('telegram_id');
                        }
                        Swal.fire({
                            toast: true,
                            position: 'top',
                            showClass: {
                                icon: 'animated heartBeat delay-1s'
                            },
                            icon: 'success',
                            text: 'Welcome to our shop',
                            showConfirmButton: false,
                            timer: 1000
                        }).then(res => {
                            window.location = "../index.php";
                        });
                    } else {
                        verifyAccount();
                    }
                } else {
                    Swal.fire({
                        toast: true,
                        position: 'top',
                        showClass: {
                            icon: 'animated heartBeat delay-1s'
                        },
                        icon: 'error',
                        text: 'Incorrect email or password',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
                console.log(res);
            }).catch(err => {
                console.log(err);
            })
        }

        function verifyAccount() {
            const OTP = generateOTP();
            const formData = new FormData(form);
            formData.append("OTP", OTP);
            formData.append("name", "you");

            /*======= send OTP code to user =======*/
            axios.post('../admin/ajax/customer.php?action=sendOTP', formData).then(res => {
                console.log(res);
            }).catch(e => {
                console.log(e);
            });

            /*======= store OTP code in database =======*/
            axios.get('../admin/ajax/customer.php?action=select&table=verify_account&column=*&condition=WHERE email = ' + email.value).then(res => {
                if (res.data.length == 0) {
                    insertVerify(OTP);
                } else {
                    updateVerify(OTP);
                }
            }).catch(e => {
                console.log(e);
            });
            window.location = "verifyotp.php?email=" + document.querySelector("#email").value;
        }

        function insertVerify(OTP) {
            const formData = new FormData(form);
            /*======= find customer id =======*/
            axios.get('../admin/ajax/customer.php?action=select&table=customer&column=id&condition=WHERE email = ' + email.value).then(res => {
                const cus_id = res.data[0].id;
                formData.append("cus_id", cus_id);
                formData.append("email", email.value);
                formData.append("OTP", OTP);
                /*======= insert to database =======*/
                axios.post('../admin/ajax/customer.php?action=insert&table=verify_account', formData).then(res => {
                    console.log(res);
                }).catch(e => {
                    console.log(e);
                });
            }).catch(e => {
                console.log(e);
            });
        }

        function updateVerify(OTP) {
            const formData = new FormData();
            formData.append("fields", JSON.stringify(["otp"]));
            formData.append("values", JSON.stringify([OTP]));
            axios.post('../admin/ajax/customer.php?action=update&table=verify_account&condition=WHERE email=' + email.value, formData).then(res => {
                console.log(res);
            }).catch(e => {
                console.log(e);
            });
        }

        function generateOTP() {
            const digits = '0123456789';
            let OTP = '';
            for (let i = 0; i < 4; i++) {
                OTP += digits[Math.floor(Math.random() * 10)];
            }
            return OTP;
        }
    </script>

</body>

</html>