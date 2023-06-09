<section class="container-small" style="min-height: 85vh;">
    <div class="mb-9 ">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Your Orders</h2>
            </div>
        </div>
        <div id="orderTable" data-list='{"valueNames":["order","total","customer","payment_status","fulfilment_status","delivery_type","date"],"page":7,"pagination":true}'>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1" id="ORDER">

            </div>
        </div>
    </div>
</section>

<script>
    const order = document.querySelector('#ORDER');
    getUserLogin();

    function getUserLogin() {
        axios.get("admin/ajax/auth.php?action=getUser").then(res => {
            if (res.data.success) {
                const data = res.data.user[0];
                getOrder(data.id);
            }
        }).catch(err => {
            console.log(err)
        });
    }

    function getOrder(cus_id) {
        order.innerHTML = "";
        const table = "orders AS od";
        const column = "*, od.id, cus.id AS cus_id, cus.name, cus.image";
        const clause = "INNER JOIN customer AS cus ON cus.id = od.cus_id ";
        const condition = 'WHERE cus.id = ' + cus_id + " ORDER BY od.id DESC";
        axios.get(`admin/ajax/order.php?action=select&table=${table}&column=${column}&clause=${clause}&condition=${condition}`).then(res => {
            let result = '';
            result += `
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table table-sm fs--1 mb-0">
                        <thead>
                            <tr>
                                <th class="white-space-nowrap fs--1 align-middle ps-0" style="width:26px;">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </th>
                                <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:5%;">ORDER</th>
                                <th class="sort align-middle text-end" scope="col" data-sort="total" style="width:6%;">TOTAL</th>
                                <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:28%; min-width: 250px;">CUSTOMER</th>
                                <th class="sort align-middle pe-3" scope="col" data-sort="payment_status" style="width:22%;">PAYMENT STATUS</th>
                                <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:30%;">PAYMENT TYPE</th>
                                <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">DATE</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">
            `;

            res.data.forEach(item => {
                result += `
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs--1 align-middle px-0 py-3">
                            <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                        </td>
                        <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="index.php?page_name=orderdetails&oid=${item.id}&cusid=${item.cus_id}">#${item.id}</a></td>
                        <td class="total align-middle text-end fw-semi-bold text-1000">$${item.total}</td>
                        <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle" src="${item.type == 'normal' ? 'admin/uploads/customer/'+ item.image: item.image}" alt="" /></div>
                                <h6 class="mb-0 ms-3 text-900">${item.name}</h6>
                            </a>
                        </td>
                        <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Complete</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                        <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">${item.payment_method}</td>
                        <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">${item.created_at}<td>
                    </tr>
                `;
            });
            result += `
                        </tbody>
                    </table>
                </div>
                <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
            `;
            order.innerHTML = result;
            console.log(res);
        }).catch(err => {
            console.log(err);
        })
    }
</script>