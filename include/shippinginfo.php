<section class="pt-5 pb-9">
    <div class="container-small" style="min-height: 85vh;">
        <h2 class="mb-5">Check out</h2>
        <div class="row justify-content-between">
            <div class="col-lg-7 col-xl-7">
                <form class="form-shipping">
                    <div class="d-flex align-items-end">
                        <h3 class="mb-0 me-3">Shipping Info</h3>
                        <button class="btn btn-link p-0" type="button">Edit</button>
                    </div>
                    <div class="mt-4">
                        <div class="mb-3 text-start"><label class="form-label" style="font-size: 13px; margin-left: -10px;">Fullname</label>
                            <div class="form-icon-container"><input class="form-control form-icon-input" id="name" type="text" placeholder="fullname" /><span class="fas fa-user text-900 fs--1 form-icon"></span></div>
                        </div>
                        <div class="mb-3 text-start"><label class="form-label" style="font-size: 13px; margin-left: -10px;">Email</label>
                            <div class="form-icon-container"><input class="form-control form-icon-input" id="email" type="email" placeholder="name@example.com" /><span class="fas fa-envelope text-900 fs--1 form-icon"></span></div>
                        </div>
                        <div class="mb-3 text-start"><label class="form-label" style="font-size: 13px; margin-left: -10px;">Phone</label>
                            <div class="form-icon-container"><input class="form-control form-icon-input" id="phone" type="text" placeholder="phone" /><span class="fas fa-phone text-900 fs--1 form-icon"></span></div>
                        </div>
                        <div class="mb-3 text-start"><label class="form-label" style="font-size: 13px; margin-left: -10px;">Address</label>
                            <div class="form-icon-container"><input class="form-control form-icon-input" id="address" type="text" placeholder="address" /><span class="fas fa-location-dot text-900 fs--1 form-icon"></span></div>
                        </div>
                        <div class="mb-3 text-start"><label class="form-label" style="font-size: 13px; margin-left: -10px;">Country</label>
                            <div class="form-icon-container"><input class="form-control form-icon-input" id="country" type="text" placeholder="country" /><span class="fas fa-earth-americas text-900 fs--1 form-icon"></span></div>
                        </div>
                        <button onclick="nextStep()" class="btn btn-primary w-100 mt-3 mb-3">Next step</button>
                    </div>
                </form>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const form = document.querySelector('.form-shipping');
    const cartArea = document.querySelector('#cart-area');
    const paymentArea = document.querySelector('#payment-area');

    getAllCart();

    form.onsubmit = (e) => {
        e.preventDefault();
    }

    function getAllCart() {
        const cart = JSON.parse(localStorage.getItem('carts')) || {
            products: [],
            subtotal: 0,
            discount_price: 0,
            total: 0
        };
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

    function nextStep() {
        const fullname = document.querySelector('#name').value,
            email = document.querySelector('#email').value,
            phone = document.querySelector('#phone').value,
            address = document.querySelector('#address').value,
            country = document.querySelector('#country').value;
        window.location = `index.php?page_name=checkout&fullname=${fullname}&email=${email}&phone=${phone}&address=${address}&country=${country}`;
    }
</script>