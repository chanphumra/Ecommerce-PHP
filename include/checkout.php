<?php
$fullname = $_GET['fullname'] ?? "";
$email = $_GET['email'] ?? "";
$phone = $_GET['phone'] ?? "";
$address = $_GET['address'] ?? "";
$country = $_GET['country'] ?? "";
?>
<section class="pt-5 pb-9">
    <div class="container-small" style="min-height: 85vh;">
        <h2 class="mb-5">Check out</h2>
        <div class="row justify-content-between">
            <div class="col-lg-7 col-xl-7">
                <div>
                    <div class="d-flex align-items-end">
                        <h3 class="mb-0 me-3">Shipping Details</h3>
                        <a href="index.php?page_name=shippinginfo" class="btn btn-link p-0" type="button">Edit</a>
                    </div>
                    <table class="table table-borderless mt-4">
                        <tbody>
                            <tr>
                                <td class="py-2 ps-0">
                                    <div class="d-flex"><i class="fs-5 me-2 fas fa-user" style="height:16px; width:16px;"> </i>
                                        <h5 class="lh-sm me-4">Fullname</h5>
                                    </div>
                                </td>
                                <td class="py-2 fw-bold lh-sm">:</td>
                                <td class="py-2 px-3">
                                    <h5 class="lh-sm fw-normal text-800"><?= $fullname ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 ps-0">
                                    <div class="d-flex"><i class="fs-5 me-2 fas fa-envelope" style="height:16px; width:16px;"> </i>
                                        <h5 class="lh-sm me-4">Email</h5>
                                    </div>
                                </td>
                                <td class="py-2 fw-bold lh-sm">: </td>
                                <td class="py-2 px-3">
                                    <h5 class="lh-sm fw-normal text-800"><?= $email ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 ps-0">
                                    <div class="d-flex"><i class="fs-5 me-2 fas fa-phone" style="height:16px; width:16px;"> </i>
                                        <h5 class="lh-sm me-4">Phone</h5>
                                    </div>
                                </td>
                                <td class="py-2 fw-bold lh-sm">: </td>
                                <td class="py-2 px-3">
                                    <h5 class="lh-sm fw-normal text-800"><?= $phone ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 ps-0">
                                    <div class="d-flex"><i class="fs-5 me-2 fas fa-location-dot" style="height:16px; width:16px;"> </i>
                                        <h5 class="lh-sm me-4">Address</h5>
                                    </div>
                                </td>
                                <td class="py-2 fw-bold lh-sm">:</td>
                                <td class="py-2 px-3">
                                    <h5 class="lh-lg fw-normal text-800"><?= $address ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 ps-0">
                                    <div class="d-flex"><i class="fs-5 me-2 fas fa-earth-americas" style="height:16px; width:16px;"> </i>
                                        <h5 class="lh-sm me-4">Country</h5>
                                    </div>
                                </td>
                                <td class="py-2 fw-bold lh-sm">: </td>
                                <td class="py-2 px-3">
                                    <h5 class="lh-sm fw-normal text-800"><?= $country ?></h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Summary</h3><a href="index.php?page_name=cart" class="btn btn-link pe-0" type="button">Edit cart</a>
                        </div>
                        <div class="border-dashed border-bottom mt-4">
                            <div class="mx-n2" id="cart-area"></div>
                        </div>
                        <div id="payment-area"></div>
                        <!-- paypal integration -->
                        <div class="mt-3" id="smart-button-container">
                            <div id="paypal-button-container"></div>
                        </div>
                        <!-- paypal integration -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://www.paypal.com/sdk/js?client-id=AQWkrZ-K_tJ6LOb4smFBfS69sKsndyWpfnEQpQ_WPvdSQ7wkm9uut6dXk7PpOITDJ_n0BVrg2gXLea3c&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
    const cart = JSON.parse(localStorage.getItem('carts')) || {
        products: [],
        subtotal: 0,
        discount_price: 0,
        total: 0
    };
    const cartArea = document.querySelector('#cart-area');
    const paymentArea = document.querySelector('#payment-area');

    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'gold',
                layout: 'vertical',
                label: 'paypal',
            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "amount": {
                            "currency_code": "USD",
                            "value": cart.total,
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                });
            },

            onError: function(err) {
                console.log("error" + err);
            }
        }).render('#paypal-button-container');
    }

    function sendMessageTelegram(order_id) {
        const TELEGRAM_BOT_TOKEN = "6278662814:AAG1kcbEcC8Q5nnaGZvdPWKmN00RSwYIL10";
        const TELEGRAM_GROUP_ID = "-986148041";

        let text = `<b>Summary Order #${order_id}</b>` + '\n\n';
        for (let index = 0; index < cart.products.length; index++) {
            const product = cart.products[index];
            text += (index + 1) + ". " + product.name + "      x" + product.qty + "      $" + product.sale_price + "\n";
        }
        text += "-----------------------------------------" + "\n";
        text += "subtotal:              $" + cart.subtotal + "\n";
        text += "discount:             $" + cart.discount_price + "\n";
        text += "total:                     $" + cart.total + "\n";
        const data = {
            chat_id: TELEGRAM_GROUP_ID,
            parse_mode: "HTML",
            text: text
        };
        axios.post(`https://api.telegram.org/bot${TELEGRAM_BOT_TOKEN}/sendMessage`, data).then(res => {
            console.log(res);
        }).catch(err => {
            console.log(err);
        });
    }

    function getAllCart() {
        cartArea.innerHTML = "";
        cart.products.forEach(item => {
            cartArea.innerHTML += `
                <div class="row align-items-center mb-2 g-3">
                    <div class="col-8 col-md-7 col-lg-8">
                        <div class="d-flex align-items-center">
                            <img class="me-2 ms-1" src="admin/uploads/product/${item.image}" width="45" height="45" alt="" />
                            <h5 class="fw-semi-bold text-1000 lh-base text-truncate">${item.name}</h6>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-lg-2">
                        <h5 class="mb-0 fw-semi-bold text-lg-start">x${item.qty}</h2>
                    </div>
                    <div class="col-2 ps-0">
                        <h5 class="mb-0 fw-semi-bold text-end pe-2">$${item.qty*item.sale_price}</h5>
                    </div>
                </div>
            `;
        });

        paymentArea.innerHTML = `
            <div class="border-dashed border-bottom mt-4">
                <div class="d-flex justify-content-between mb-2">
                    <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                    <h5 class="text-900 fw-semi-bold">$${cart.subtotal}</h5>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <h5 class="text-900 fw-semi-bold">Discount: </h5>
                    <h5 class="text-danger fw-semi-bold">-$${cart.discount_price.toFixed(2)}</h5>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <h5 class="text-900 fw-semi-bold">Tax: </h5>
                    <h5 class="text-900 fw-semi-bold">$0</h5>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <h5 class="text-900 fw-semi-bold">Subtotal </h5>
                    <h5 class="text-900 fw-semi-bold">$${cart.total}</h5>
                </div>
            </div>
            <div class="d-flex justify-content-between border-dashed-y pt-3">
                <h4 class="mb-0">Total :</h4>
                <h4 class="mb-0">$${cart.total}</h4>
            </div>
        `;
    }

    initPayPalButton();
    getAllCart();
</script>
