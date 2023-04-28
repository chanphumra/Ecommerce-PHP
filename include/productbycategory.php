
<?php
    $sub_id = $_GET['sub_id'];
    require_once "./admin/lib/database.php";

    $table = "sub_category";
    $column = "sub.name AS sub_name, main.name AS main_name";
    $clause = "AS sub INNER JOIN main_category AS main ON sub.main_id = main.id";
    $condition = "WHERE sub.id = $sub_id";

    $result = Database::select($table, $column, $clause, $condition);
    
?>

<div class="ecommerce-homepage pt-5 mb-9">
    <section class="pt-5 pb-9">
        <div class="container">
            <div class="d-flex flex-between-center mb-3">
                <nav class="mb-3" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <?php foreach ($result as $item) { ?>
                            <li class="breadcrumb-item"><a href="#"><?= $item["main_name"] ?></a></li>
                            <li class="breadcrumb-item"><a href="#"><?= $item["sub_name"] ?></a>
                        <?php } ?>
                    </ol>
                </nav>
            </div>
          <div class="row">
            <div class="col">
              <div class="row row-col-sm-2 row-col-md-3 row-cols-lg-5 row-col-xxl-6 gx-4 gy-6 mb-8 product">
                <!-- <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/20.png" alt="" /></div><a class="stretched-link text-decoration-none" href="../../../apps/e-commerce/landing/product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">ASUS TUF Gaming F15 Gaming Laptop</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="text-500 fw-semi-bold ms-1">(3 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$150.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                  <ul class="pagination mb-0">
                    <li class="page-item">
                      <a class="page-link" href="#">
                        <span class="fas fa-chevron-left"> </span>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link pe-0" href="#"> <span class="fas fa-chevron-right"></span></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>
</div>
<script>
    const product = document.querySelector('.product');

    //get all product
    getProduct();
    function getProduct(){
        product.innerHTML = "";
        axios.get('admin/ajax/product.php?action=select&table=product&column=*&condition=WHERE sub_id = <?= $sub_id ?>')
            .then(res => {
                console.log(res.data);
                res.data.forEach(item => {
                    product.innerHTML += 
                    `
                        <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
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
<<<<<<< HEAD
                                            <p class="me-2 text-900 text-decoration-line-through mb-0">$${item.price}</p>
                                            <h3 class="text-1100 mb-0">$${(item.sale_price - (item.sale_price * item.discount/100.00)).toFixed(2)}</h3>
=======
                                            <p class="me-2 text-900 text-decoration-line-through mb-0">${item.sale_price}</p>
                                            <h3 class="text-1100 mb-0">${(item.sale_price - item.sale_price*item.discount/100).toFixed(2)}</h3>
>>>>>>> 0bdd8367327e7d9b6a5b75e3d599b28fdf8d8034
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
</script>