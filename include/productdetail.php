<?php
    $id = $_GET['id'];

    require_once "./admin/lib/database.php";
    $table = "product";
    $column = "*, pro.id, pro.name, pro.description, main.name AS main_name, sub.name AS sub_name";
    $clause = "AS pro INNER JOIN sub_category AS sub ON sub.id = pro.sub_id INNER JOIN main_category AS main ON main.id = sub.main_id";
    $condition = "WHERE pro.id = $id";

    $result = Database::select($table, $column, $clause, $condition);

?>

<section class="py-5">
    <?php foreach ($result as $item) { ?>
    <div class="container-small">
        <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><?= $item['main_name'] ?></a></li>
                <li class="breadcrumb-item"><a href="#"><?= $item['sub_name'] ?></a></li>
                <li class="breadcrumb-item"><a href="#"><?= $item['name'] ?></a></li>
            </ol>
        </nav>
        <div class="row g-5 mb-5 mb-lg-8 productdetail" data-product-details="data-product-details">
            
            <div class="col-12 col-lg-6">
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-2 col-lg-12 col-xl-2">
                            <div class="swiper-products-thumb swiper swiper-container theme-slider overflow-visible" id="swiper-products-thumb"></div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                            <div class="d-flex align-items-center border rounded-3 text-center p-5 h-100">
                                <div class="swiper swiper-container theme-slider" data-thumb-target="swiper-products-thumb" data-products-swiper='{"slidesPerView":1,"spaceBetween":16,"thumbsEl":".swiper-products-thumb"}'></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0"><span class="me-2 far fa-heart"></span>Add to wishlist</button>
                        <button class="btn btn-lg btn-warning rounded-pill w-100 fs--1 fs-sm-0 btnAddToCart">
                            <span class="fas fa-shopping-cart me-2"></span>Add to cart
                        </button>
                    </div>
                    </div>
                        <div class="col-12 col-lg-6">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <h3 class="mb-5 lh-sm"><?= $item['name'] ?></h3>
                                    <div class="d-flex flex-wrap align-items-center mb-3">
                                        <h1 class="me-3">$<?= $item['sale_price'] - ($item['sale_price'] * $item['discount']/100.00) ?></h1>
                                        <p class="text-500 text-decoration-line-through fs-2 mb-0 me-3">$<?= $item['sale_price'] ?></p>
                                        <p class="text-warning-500 fw-bolder fs-2 mb-0"><?= $item['discount'] ?>% off</p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-start mb-3">
                                        <span class="badge bg-success fs--1 rounded-pill me-2 fw-semi-bold">In stock</span>
                                    </div>
                                    <p class="mb-2 text-800"><strong class="text-1000"><?= $item['description'] ?></strong></p>
                                </div>
                                <div>
                                    <!-- for display image -->
                                    <div class="mb-3 d-none">
                                        <div class="d-flex product-color-variants" data-product-color-variants="data-product-color-variants">
                                            <div class="rounded-1 border me-2 active" data-variant="Blue" data-products-images='["admin/uploads/product/<?= $item['image1'] ?>","admin/uploads/product/<?= $item['image2'] ?>","admin/uploads/product/<?= $item['image3'] ?>"]'></div>
                                        </div>
                                    </div>
                                    <div class="row g-3 g-sm-8 align-items-end">
                                        <div class="col-12 col-sm-auto">
                                            <p class="fw-semi-bold mb-2 text-900">Size : </p>
                                            <div class="d-flex align-items-center">
                                                <select class="form-select w-auto">
                                                    <option value="44">44</option>
                                                    <option value="22">22</option>
                                                    <option value="18">18</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm">
                                            <p class="fw-semi-bold mb-2 text-900">Quantity : </p>
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="d-flex flex-between-center" data-quantity="data-quantity">
                                                    <button class="btn btn-phoenix-primary px-3" data-type="minus">
                                                        <span class="fas fa-minus"></span>
                                                    </button>
                                                    <input class="form-control text-center input-spin-none bg-transparent border-0 outline-none" id="qty" style="width:50px;" type="number" min="1" value="1" />
                                                    <button class="btn btn-phoenix-primary px-3" data-type="plus">
                                                        <span class="fas fa-plus"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
        </div>
    </div><!-- end of .container-->
    <?php } ?>
</section>
<script>

    //console.log();
    //get all product
    

    const cart = JSON.parse(localStorage.getItem('carts')) || { products: [], subtotal: 0, discount_price: 0, total: 0 };
    
    const btnAddToCart = document.querySelector('.btnAddToCart');
    const qty = document.querySelector('#qty');
    btnAddToCart.onclick = () =>{ 
        const item = (<?= json_encode($result[0])?>);
        const product = {
            id: item.id,
            name: item.name,
            sale_price: new Number(item.sale_price),
            discount: new Number(item.discount),
            qty: new Number(qty.value),
            image: item.image1
        };

        const index = cart.products.findIndex(p => p.id == product.id);
        if (index >= 0) { // exist in cart
            const existProduct = cart.products[index];
            existProduct.qty += product.qty;
            cart.subtotal += product.sale_price * product.qty;
            cart.discount_price += product.sale_price * product.qty * product.discount / 100;
            cart.total = (cart.subtotal - cart.discount_price);
        }
        else {
            cart.products.push(product);
            cart.subtotal += product.sale_price * product.qty;
            cart.discount_price += product.sale_price * product.qty * product.discount / 100;
            cart.total = (cart.subtotal - cart.discount_price);
        }

        localStorage.setItem('carts', JSON.stringify(cart));
        // setCarts(cart);
        // setCount(cart.products.length);
    };
</script>