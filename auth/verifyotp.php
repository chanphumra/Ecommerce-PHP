<?php
if (!isset($_GET['email'])) {
    header("location: login.php");
    exit();
}
$email = $_GET['email'];
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
                        <div class="text-center mb-5 mt-3">
                            <h3 class="text-1000">Email Verification</h3>
                            <p class="text-700">We have sent a code to your email <?= $email ?></p>
                        </div>
                        <div id="otp" class="d-flex justify-content-center mb-4">
                            <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" style="width: 60px; height: 60px; font-size: 18px;" />
                            <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" style="width: 60px; height: 60px; font-size: 18px;" />
                            <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" style="width: 60px; height: 60px; font-size: 18px;" />
                            <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" style="width: 60px; height: 60px; font-size: 18px;" />
                        </div>
                        <button id="btnVerify" class="btn btn-primary w-100 mt-3">Verify Account</button>
                        <div class="text-center mb-4 mt-2">
                            <div class="fs--4 text-700">Didn't recieve code? <a class="fw-bold text-primary cursor-pointer" id="resend"></a></div>
                        </div>
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
        let btnVerify = document.querySelector('#btnVerify');
        let first = document.querySelector('#first');
        let second = document.querySelector('#second');
        let third = document.querySelector('#third');
        let fourth = document.querySelector('#fourth');
        let resend = document.querySelector('#resend');
        let timer = 60;
        OTPInput();
        sendOTP();

        btnVerify.onclick = () => {
            if (first.value == "" || second.value == "" || third.value == "" || fourth.value == "")
                return Swal.fire({
                    toast: true,
                    position: 'top',
                    showClass: {
                        icon: 'animated heartBeat delay-1s'
                    },
                    icon: 'error',
                    text: 'Please complete your otp',
                    showConfirmButton: false,
                    timer: 1000
                });
            let OTP = first.value + second.value + third.value + fourth.value;
            axios.get("../admin/ajax/customer.php?action=select&table=verify_account&column=*&condition=WHERE email= '<?= $email ?>' AND otp=" + OTP).then(res => {
                if (res.data.length == 0) {
                    Swal.fire({
                        toast: true,
                        position: 'top',
                        showClass: {
                            icon: 'animated heartBeat delay-1s'
                        },
                        icon: 'error',
                        text: 'OTP is incorrect',
                        showConfirmButton: false,
                        timer: 1000
                    });
                } else {
                    /*======= delete OTP from database =======*/
                    axios.delete("../admin/ajax/customer.php?action=delete&table=verify_account&condition=WHERE email = '<?=$email?>'").then(res => {
                        console.log(res);
                    }).catch(e => {
                        console.log(e);
                    });

                    /*======= set email is verify success =======*/
                    const formData = new FormData();
                    formData.append("email", "<?=$email?>");
                    formData.append("verify", 1);
                    axios.post("../admin/ajax/customer.php?action=updateVerify&table=customer", formData).then(res => {}).catch(err => {console.log(err);});
                    
                    Swal.fire({
                        toast: true,
                        position: 'top',
                        showClass: {
                            icon: 'animated heartBeat delay-1s'
                        },
                        icon: 'success',
                        text: 'Your account has been verified',
                        showConfirmButton: false,
                        timer: 1000
                    }).then(res => {
                        window.location = "login.php";
                    });
                }
            }).catch(err => {
                console.log(err);
            });
        }

        resend.onclick = () => {
            if (timer <= 0) {
                first.value = second.value = third.value = fourth.value = "";
                first.blur();
                second.blur();
                third.blur();
                fourth.blur();
                sendOTP();
                const OTP = generateOTP();

                const formData = new FormData();
                formData.append('OTP', OTP);
                formData.append('email', "<?= $email ?>");
                formData.append('name', '');

                /*======= send OTP code to user =======*/
                axios.post('../admin/ajax/customer.php?action=sendOTP', formData).then(res => {}).catch(e => {
                    console.log(e);
                });

                /*======= insert OTP in database =======*/
                axios.get("../admin/ajax/customer.php?action=select&table=customer&column=*&condition=WHERE email = '<?=$email?>'").then(r => {
                    if(r.data.length > 0){
                        formData.append("cus_id", r.data[0].id);
                        axios.post('../admin/ajax/customer.php?action=insert&table=verify_account', formData).then(res => {console.log(res)}).catch(e => {console.log(e);});
                    }
                }).catch(err => {
                    console.log(err);
                })
            };
        }

        function OTPInput() {
            const inputs = document.querySelectorAll('#otp > *[id]');
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('keydown', function(event) {
                    if (event.key === "Backspace") {
                        inputs[i].value = '';
                        if (i !== 0) inputs[i - 1].focus();
                    } else {
                        if (i === inputs.length - 1 && inputs[i].value !== '') {
                            return true;
                        } else if (event.keyCode > 47 && event.keyCode < 58) {
                            inputs[i].value = event.key;
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        } else if (event.keyCode > 64 && event.keyCode < 91) {
                            inputs[i].value = String.fromCharCode(event.keyCode);
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        }
                    }
                });
            }
        }

        function sendOTP() {
            resend.innerHTML = `OTP expired in 60s`;
            timer = 59;
            let interval = setInterval(() => {
                resend.innerHTML = `OTP expired in ${timer}s`;
                if (timer == 0) {
                    resend.innerHTML = `Resend OTP`;
                    Swal.fire({
                        toast: true,
                        position: 'top',
                        showClass: {
                            icon: 'animated heartBeat delay-1s'
                        },
                        icon: 'info',
                        text: 'OTP was expired!',
                        showConfirmButton: false,
                        timer: 1000
                    });
                    /*======= delete OTP from database =======*/
                    axios.delete("../admin/ajax/customer.php?action=delete&table=verify_account&condition=WHERE email = '<?=$email?>'").then(res => {
                        console.log(res);
                    }).catch(e => {
                        console.log(e);
                    });
                    clearInterval(interval);
                }
                timer = timer - 1;
            }, 1000);
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