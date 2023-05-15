<div class="ecommerce-homepage pt-5 mb-9">
    <section class="py-0">
        <div class="container">

            <div class="mb-6">
                <div class="d-flex flex-between-center mb-3">
                    <h3>All Products</h3>
                </div>

                <div class="row product">
                    
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    const product = document.querySelector('.product');

    //get all product
    getProduct();

    function getProduct() {
        product.innerHTML = "";
        axios.get('admin/ajax/product.php?action=select&table=product&column=*&clause=ORDER BY id DESC')
            .then(res => {
                console.log(res.data);
                res.data.forEach(item => {
                    product.innerHTML +=
                        `
                        <div class="col-6 col-lg-3 col-md-4 mb-4">
                            <div class="position-relative text-decoration-none product-card h-100">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <div>
                                        <div class="border border-1 border-2002 rounded-3 position-relative mb-3">
                                            <button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                                <span class="fas fa-heart d-block-hover"></span>
                                                <span class="far fa-heart d-none-hover"></span>
                                            </button>
                                            <img class="img-fluid" style="width: 100%; height:250px; object-fit: cover;" src="admin/uploads/product/${item.image1}" alt="" />
                                        </div>
                                        <a class="stretched-link text-decoration-none" href="index?page_name=productdetail&id=${item.id}">
                                            <h6 class="mb-2 lh-sm line-clamp-3">${item.name}</h6>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-1">
                                            <p class="me-2 text-900 text-decoration-line-through mb-0">${item.sale_price}</p>
                                            <h3 class="text-1100 mb-0">${(item.sale_price - item.sale_price*item.discount/100).toFixed(2)}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });
            })
            .catch(err => {
                console.log(err);
            })
    }
    const cart = JSON.parse(localStorage.getItem('carts')) || {
        products: [],
        subtotal: 0,
        discount_price: 0,
        total: 0
    };

    const addToCart = (item, qty) => {

        const product = {
            id: item.p_id,
            name: item.p_name,
            sale_price: new Number(item.sale_price),
            discount: new Number(item.discount),
            qty: new Number(qty),
            image: item.image1
        };

        const index = cart.products.findIndex(p => p.id == product.id);
        if (index >= 0) { // exist in cart
            const existProduct = cart.products[index];
            existProduct.qty += 1;
            cart.subtotal += product.sale_price;
            cart.discount_price += product.sale_price * product.discount / 100;
            cart.total = (cart.subtotal - cart.discount_price);
        } else {
            product.qty = 1;
            cart.products.push(product);
            cart.subtotal += product.sale_price;
            cart.discount_price += product.sale_price * product.discount / 100;
            cart.total = (cart.subtotal - cart.discount_price);
        }

        localStorage.setItem('carts', JSON.stringify(cart));

    };
</script>