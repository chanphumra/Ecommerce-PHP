<section class="pt-5 pb-9">
    <div class="container-small cart CART" style="min-height: 85vh;">
        <h2 class="mb-6">Cart</h2>
        <div class="row g-5">
            <div class="col-12 col-lg-8">
                <div id="cartTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":7}'>
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        <table class="table fs--1 mb-0 border-top border-200">
                            <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                                    <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">PRODUCTS</th>
                                    <th class="sort align-middle text-end" scope="col" style="width:300px;">PRICE</th>
                                    <th class="sort align-middle ps-5" scope="col" style="width:200px;">QUANTITY</th>
                                    <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL</th>
                                    <th class="sort text-end align-middle pe-0" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="cart-table-body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body" id="cart-summary">

                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section>
<script>
    let cart = JSON.parse(localStorage.getItem('carts')) || {
        products: [],
        subtotal: 0,
        discount_price: 0,
        total: 0
    };
    const cartArea = document.querySelector('#cart-table-body');
    const cartSummary = document.querySelector('#cart-summary');

    getAllCart();
    const totalProduct = document.querySelectorAll("#totalEachProduct");
    const subtotal = document.querySelectorAll(".subtotal");
    const discount = document.querySelector(".discount");
    const total = document.querySelectorAll(".totalPrice");

    function getAllCart() {
        cart = JSON.parse(localStorage.getItem('carts')) || {
            products: [],
            subtotal: 0,
            discount_price: 0,
            total: 0
        };
        if(checkEmptyCart()) return;
        cartArea.innerHTML = "";
        cart.products.forEach((item, index) => {
            cartArea.innerHTML += `
                <tr class="cart-table-row btn-reveal-trigger">
                    <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="admin/uploads/product/${item.image}" alt="" width="55" height="55" /></div>
                    </td>
                    <td class="products align-middle"><a class="fw-semi-bold mb-0 line-clamp-2" href="index?page_name=productdetail&id=${item.id}">${item.name}</a></td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$${item.sale_price}</td>
                    <td class="quantity align-middle fs-0 ps-5">
                        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus" onclick="minusCart(${index})">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="${item.qty}" /><button class="btn btn-sm px-2 addcart" data-type="plus" id="" onclick="plusCart(${index})">+</button></div>
                    </td>
                    <td class="total align-middle fw-bold text-1000 text-end" id="totalEachProduct" >$${item.sale_price * item.qty}</td>
                    <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-500 hover-text-600 me-2" onclick="removeCart(${index})"><span class="fas fa-trash"></span></button></td>
                </tr>
            `;
        });

        cartArea.innerHTML += `
            <tr class="cart-table-row btn-reveal-trigger">
                <td class="text-1100 fw-semi-bold ps-0 fs-0" colspan="4">Items subtotal : </td>
                <td class="text-1100 fw-bold text-end fs-0 subtotal">$${cart.subtotal}</td>
                <td></td>
            </tr>
        `;

        cartSummary.innerHTML = `
            <div class="d-flex flex-between-center mb-3">
                <h3 class="card-title mb-0">Summary</h3>
                <!-- <a class="btn btn-link p-0" href="#!">Edit cart </a> -->
            </div>
            <div>
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Items subtotal :</p>
                    <p class="text-1100 fw-semi-bold subtotal">$${cart.subtotal}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Discount :</p>
                    <p class="text-danger fw-semi-bold discount">-$${cart.discount_price.toFixed(2)}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Tax :</p>
                    <p class="text-1100 fw-semi-bold">$0</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Subtotal :</p>
                    <p class="text-1100 fw-semi-bold totalPrice">$${cart.total}</p>
                </div>
            </div>
            <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                <h4 class="mb-0">Total :</h4>
                <h4 class="mb-0 totalPrice">$${cart.total}</h4>
            </div>
            <button onclick="nextStep()" class="btn btn-primary w-100">Proceed to check out<span class="fas fa-chevron-right ms-1 fs--2"></span></button>
        `;
    }

    function plusCart(index) {
        const newProduct = cart.products[index];
        newProduct.qty += 1;
        cart.subtotal += newProduct.sale_price;
        cart.discount_price += newProduct.sale_price * newProduct.discount / 100;
        cart.total = (cart.subtotal - cart.discount_price);
        localStorage.setItem('carts', JSON.stringify(cart));
        totalProduct[index].innerHTML = '$' + newProduct.sale_price * newProduct.qty;
        subtotal[0].innerHTML = '$' + cart.subtotal;
        subtotal[1].innerHTML = '$' + cart.subtotal;
        discount.innerHTML = '-$' + cart.discount_price.toFixed(2);
        total[0].innerHTML = '$' + cart.total;
        total[1].innerHTML = '$' + cart.total;
    }

    function minusCart(index) {
        const newProduct = cart.products[index];
        if (newProduct.qty == 1) return;
        newProduct.qty -= 1;
        cart.subtotal -= newProduct.sale_price;
        cart.discount_price -= newProduct.sale_price * newProduct.discount / 100;
        cart.total = (cart.subtotal - cart.discount_price);
        localStorage.setItem('carts', JSON.stringify(cart));
        totalProduct[index].innerHTML = '$' + newProduct.sale_price * newProduct.qty;
        subtotal[0].innerHTML = '$' + cart.subtotal;
        subtotal[1].innerHTML = '$' + cart.subtotal;
        discount.innerHTML = '-$' + cart.discount_price.toFixed(2);
        total[0].innerHTML = '$' + cart.total;
        total[1].innerHTML = '$' + cart.total;
    }

    function removeCart(index) {
        const newProduct = cart.products[index];
        cart.subtotal -= newProduct.qty * newProduct.sale_price;
        cart.discount_price -= newProduct.qty * newProduct.sale_price * newProduct.discount / 100;
        cart.total = (cart.subtotal - cart.discount_price);
        cart.products.splice(index, 1);
        localStorage.setItem('carts', JSON.stringify(cart));
        getAllCart();
    }

    function nextStep() {
        axios.get("admin/ajax/auth.php?action=checkLogin").then(res => {
            if(res.data.success){
                window.location = "index.php?page_name=shippinginfo";
            }
            else{
                Swal.fire({
                toast: true,
                position: 'top',
                showClass: {
                    icon: 'animated heartBeat delay-1s'
                },
                icon: 'warning',
                text: 'Please register an account',
                showConfirmButton: false,
                timer: 1000
            });
            }
        }).catch(err => {
            console.log(err);
        });
    }

    function checkEmptyCart() {
        let empty = false;
        if(cart.products.length == 0) {
            empty = true;
            document.querySelector('.CART').innerHTML = `
                <div class="d-flex flex-column gap-3 justify-content-center align-items-center" style="height: 75vh;">
                    <img src='assets/img/empty.png' width="350" height="350"/>
                    <h1 class="text-700">Your cart is empty</h1>
                    <button onclick="window.location='index.php'" type="button" class="btn btn-primary rounded fs-1">Back to shop</button>
                </div>
            `;
        }
        return empty;
    }
</script>