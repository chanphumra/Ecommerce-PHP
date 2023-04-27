<?php
    require_once "admin/lib/database.php";
    $oid = $_GET['oid'];
    $cusid = $_GET['cusid'];
    $table = "orders AS od";
    $column = "*, orderdetail.qty";
    $clause = "INNER JOIN order_details AS orderdetail ON od.id = orderdetail.o_id INNER JOIN product AS pro ON orderdetail.p_id = pro.id";
    $condition = "WHERE od.id = $oid";
    $result = Database::select($table, $column, $clause, $condition);
    $subtotal = $discount = 0;
?>

<section class="container-small" style="min-height: 90vh;">
    <div class="mb-9">
        <h2 class="mb-0">Your Order <span>#<?=$oid?></span></h2>
        <div class="row g-5 gy-7" style="margin-top: -20px;">
            <div class="col-12 col-xl-8 col-xxl-9">
                <div id="orderTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":7}'>
                    <div class="table-responsive scrollbar">
                        <table class="table fs--1 mb-0 border-top border-200">
                            <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                                    <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:400px;" data-sort="products">PRODUCTS</th>
                                    <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">PRICE</th>
                                    <th class="sort align-middle text-end ps-4" scope="col" data-sort="quantity" style="width:200px;">QUANTITY</th>
                                    <th class="sort align-middle text-end ps-4" scope="col" data-sort="total" style="width:250px;">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="order-table-body">
                                <?php foreach ($result as $item) { ?>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle white-space-nowrap py-2">
                                        <div class="border rounded-2"><img src="admin/uploads/product/<?=$item['image1']?>" alt="" width="55" height="55"/></div>
                                    </td>
                                    <td class="products align-middle py-0"><a class="fw-semi-bold line-clamp-2 mb-0" href="#!"><?=$item['name']?></a></td>
                                    <td class="price align-middle text-900 fw-semi-bold text-end py-0 ps-4">$<?=$item['sale_price']?></td>
                                    <td class="quantity align-middle text-end py-0 ps-4 text-700"><?=$item['qty']?></td>
                                    <td class="total align-middle fw-bold text-1000 text-end py-0 ps-4">$<?=$item['sale_price']*$item['qty']?></td>
                                </tr>
                                <?php 
                                    $subtotal += $item['qty']* $item['sale_price'];
                                    $discount += $item['qty']* $item['sale_price'] * $item['discount']/100;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex flex-between-center py-3 border-bottom mb-7">
                    <p class="text-1100 fw-semi-bold lh-sm mb-0">Items subtotal :</p>
                    <p class="text-1100 fw-bold lh-sm mb-0">$<?=$subtotal?></p>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-xxl-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title mb-4">Summary</h3>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Items subtotal :</p>
                                        <p class="text-1100 fw-semi-bold">$<?=$subtotal?></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Discount :</p>
                                        <p class="text-danger fw-semi-bold">-$<?=$discount?></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Tax :</p>
                                        <p class="text-1100 fw-semi-bold">$0</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Subtotal :</p>
                                        <p class="text-1100 fw-semi-bold">$<?=$result[0]['total']?></p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-top border-dashed pt-4">
                                    <h4 class="mb-0">Total :</h4>
                                    <h4 class="mb-0">$<?=$result[0]['total']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>