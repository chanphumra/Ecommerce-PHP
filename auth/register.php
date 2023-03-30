<?php define('BOT_USERNAME', "bazaar_login_php_bot");?>
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
                    <div class="d-none col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3 py-2 shadow-sm bg-white rounded-4" id="formImage">
                        <a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
                        </a>
                        <div class="text-center mb-7">
                            <h3 class="text-1000">Sign Up</h3>
                            <p class="text-700">Choose your profile</p>
                        </div>
                        <div class="mb-7 d-flex justify-content-center align-items-center">
                            <div class="position-relative shadow-sm p-1 rounded-circle border border-primary" style="width: 200px; height: 200px;">
                                <div id="preview" class="w-100 h-100">
                                    <img src="../assets/img/avatar.png" class="object-fit-cover rounded-circle w-100 h-100">
                                </div>
                                <div onclick="browseImage()" class="position-absolute d-flex justify-content-center align-items-center cursor-pointer p-1 rounded-circle border bg-white border-primary" style="width: 45px; height: 45px; bottom: 7px; right: 5px;">
                                    <i class="fas fa-pen"></i>
                                </div>
                                <input type="file" accept="image/*" id="image" name="image" class="d-none">
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 mb-3" id="btnRegister">Sign Up</button>
                    </div>

                    <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3  py-2 shadow-sm bg-white rounded-4" id="formText">
                        <a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
                        </a>
                        <div class="text-center mb-7">
                            <h3 class="text-1000">Sign Up</h3>
                            <p class="text-700">Create your account today</p>
                        </div>
                        <div class="w-100 d-flex justify-content-center align-items-center">
                            <script async src="https://telegram.org/js/telegram-widget.js" data-telegram-login="<?= BOT_USERNAME ?>" data-size="large" data-auth-url="auth.php"></script>
                        </div>
                        <div class="position-relative">
                            <hr class="bg-200 mt-5 mb-4" />
                            <div class="divider-content-center bg-white">or use email</div>
                        </div>
                        <form>
                            <div class="mb-3 text-start"><label class="form-label" for="name">Name</label><input class="form-control" name="name" id="name" type="text" placeholder="Name" /></div>
                            <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label><input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" /></div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6"><label class="form-label" for="password">Password</label><input class="form-control form-icon-input" name="password" id="password" type="password" placeholder="Password" /></div>
                                <div class="col-md-6"><label class="form-label" for="confirmPassword">Confirm Password</label><input class="form-control form-icon-input" id="confirmPassword" type="password" placeholder="Confirm Password" /></div>
                            </div>
                            <button class="btn btn-primary w-100 mb-3" id="btnNext">Next</button>
                        </form>
                        <div class="text-center"><a class="fs--1 fw-bold" href="login.php">Sign in to an existing account</a></div>
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
        const formText = document.querySelector('#formText');
        const formImage = document.querySelector('#formImage');
        const btnNext = document.querySelector('#btnNext');
        const btnRegister = document.querySelector('#btnRegister');
        const imageFile = document.querySelector('#image');

        form.onsubmit = (e) => {
            e.preventDefault();
        }

        btnNext.onclick = () => {
            const name = document.querySelector('#name').value;
            const email = document.querySelector('#email').value;
            const password = document.querySelector('#password').value;
            const confirmPassword = document.querySelector('#confirmPassword').value;

            if (name == "" || password == "" || confirmPassword == "") {
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
            }

            if (!validateEmail(email)) {
                return Swal.fire({
                    toast: true,
                    position: 'top',
                    showClass: {
                        icon: 'animated heartBeat delay-1s'
                    },
                    icon: 'error',
                    text: 'Invalid Email address',
                    showConfirmButton: false,
                    timer: 1000
                });
            }

            if (confirmPassword != password) {
                return Swal.fire({
                    toast: true,
                    position: 'top',
                    showClass: {
                        icon: 'animated heartBeat delay-1s'
                    },
                    icon: 'error',
                    text: "Password don't be match",
                    showConfirmButton: false,
                    timer: 1000
                });
            }
            /*======= check email exist or not=======*/
            axios.get(`../admin/ajax/customer.php?action=select&table=customer&column=*&condition=WHERE email = '${email}'`).then(res => {
                if (res.data.length > 0)
                    return Swal.fire({
                        toast: true,
                        position: 'top',
                        showClass: {
                            icon: 'animated heartBeat delay-1s'
                        },
                        icon: 'error',
                        text: 'Email already exist',
                        showConfirmButton: false,
                        timer: 1000
                    });

                formText.classList.add('d-none');
                formImage.classList.remove('d-none');
            }).catch(err => {
                console.log(err);
            });
        }

        btnRegister.onclick = () => {
            if (imageFile.files.length == 0) {
                return Swal.fire({
                    toast: true,
                    position: 'top',
                    showClass: {
                        icon: 'animated heartBeat delay-1s'
                    },
                    icon: 'error',
                    text: 'Please choose your profile',
                    showConfirmButton: false,
                    timer: 1000
                });
            }
            const name = document.querySelector('#name').value;
            const email = document.querySelector('#email').value;
            const password = document.querySelector('#password').value;
            const OTP = generateOTP();

            const formData = new FormData(form);
            formData.append('OTP', OTP);

            /*======= send OTP code to user =======*/
            axios.post('../admin/ajax/customer.php?action=sendOTP', formData).then(res => {
                console.log(res);
            }).catch(e => {
                console.log(e);
            });

            /*======= store user to database =======*/
            formData.append('image', imageFile.files[0]);
            axios.post('../admin/ajax/customer.php?action=insert&table=customer', formData).then(res => {
                const lastInsertId = res.data.lastInsertId;
                const fdata = new FormData(form);
                fdata.append("cus_id", lastInsertId);
                fdata.append('OTP', OTP);
                axios.post('../admin/ajax/customer.php?action=insert&table=verify_account', fdata).then(r => {}).catch(e => {
                    console.log(e);
                });
            }).catch(e => {
                console.log(e);
            });

            /*======= goto verify email page =======*/
            Swal.fire({
                toast: true,
                position: 'top',
                showClass: {
                    icon: 'animated heartBeat delay-1s'
                },
                icon: 'info',
                text: 'We send OTP to your email',
                showConfirmButton: false,
                timer: 1000
            }).then(res => {
                window.location = `verifyotp.php?email=${email}`;
            });
        }

        imageFile.onchange = () => {
            document.querySelector('#preview').innerHTML = `<img src="${URL.createObjectURL(imageFile.files[0])}" class="object-fit-cover rounded-circle w-100 h-100">`;
        }

        function browseImage() {
            imageFile.click();
        }

        const validateEmail = (email) => {
            return email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
        };

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