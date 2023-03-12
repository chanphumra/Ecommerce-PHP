<div class="content">
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Orders</h2>
            </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All <span class="text-700 fw-semi-bold">(68817)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Pending payment <span class="text-700 fw-semi-bold">(6)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Unfulfilled <span class="text-700 fw-semi-bold">(17)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Completed<span class="text-700 fw-semi-bold">(6,810)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Refunded<span class="text-700 fw-semi-bold">(8)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Failed<span class="text-700 fw-semi-bold">(2)</span></a></li>
        </ul>
        <div id="orderTable" data-list='{"valueNames":["order","total","customer","payment_status","fulfilment_status","delivery_type","date"],"page":10,"pagination":true}'>
            <div class="mb-4">
                <div class="row g-3">
                    <div class="col-auto">
                        <div class="search-box">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search orders" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                    <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                        <div class="btn-group position-static" role="group">
                            <div class="btn-group position-static text-nowrap" role="group"><button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Payment status<span class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group position-static text-nowrap" role="group"><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Fulfilment status<span class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More filters </button>
                        </div>
                    </div>
                    <div class="col-auto"><button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button><button class="btn btn-primary"><span class="fas fa-plus me-2"></span>Add order</button></div>
                </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
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
                                <th class="sort align-middle pe-3" scope="col" data-sort="payment_status" style="width:10%;">PAYMENT STATUS</th>
                                <th class="sort align-middle text-start pe-3" scope="col" data-sort="fulfilment_status" style="width:12%; min-width: 200px;">FULFILMENT STATUS</th>
                                <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:30%;">DELIVERY TYPE</th>
                                <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">DATE</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2453</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$87</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/32.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Carry Anna</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Complete</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 12, 12:56 PM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2452</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$7264</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m">
                                            <div class="avatar-name rounded-circle"><span>M</span></div>
                                        </div>
                                        <h6 class="mb-0 ms-3 text-900">Milind Mikuja</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="badge-label">Ready to pickup</span><span class="ms-1" data-feather="info" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Free shipping</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 9, 2:28PM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2451</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$375</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/35.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Stanly Drinkwater</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Completed</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local pickup</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 4, 12:56 PM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2450</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$657</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/57.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Josef Stravinsky</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Partially Fulfiled</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Standard shipping</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 1, 4:07 AM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2449</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$9562</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/58.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Igor Borvibson</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Failed</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Partially Fulfiled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Express</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 28, 7:28 PM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2448</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$46</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/59.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Katerina Karenin</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Unfulfiled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local delivery</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 24, 10:16 AM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2447</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$953</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m">
                                            <div class="avatar-name rounded-circle"><span>R</span></div>
                                        </div>
                                        <h6 class="mb-0 ms-3 text-900">Roy Anderson</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 18, 5:43 PM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2446</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$12</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/31.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Martina scorcese</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Standard shipping</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 18, 2:09 AM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2445</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$3927</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/33.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Luis Bunuel</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Canceled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 16, 3:22 PM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2444</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$5937</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/34.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Jean Renoir</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Ready to pickup</span><span class="ms-1" data-feather="info" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local pickup</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 09, 8:49 AM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2443</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$124</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/29.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Ricky Antony</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Failed</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Unfulfiled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 05, 4:35 PM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2442</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$542</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/3.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Emma Watson</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Standard shipping</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 05, 12:00 PM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2441</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$1480</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle avatar-placeholder" src="../../../assets/img/team/avatar.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Jennifer Schramm</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="badge-label">Ready to pickup</span><span class="ms-1" data-feather="info" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local delivery</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 02, 2:00 AM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2440</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$80</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/25.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Michael Jenkins</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Unfulfiled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Free shipping</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Oct 30, 4:25 PM</td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2439</a></td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">$999</td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/32.png" alt="" /></div>
                                        <h6 class="mb-0 ms-3 text-900">Raymond Mims</h6>
                                    </a></td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Oct 28, 3:00 PM</td>
                            </tr>
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
            </div>
        </div>
    </div>
    <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2022 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.7.0</p>
            </div>
        </div>
    </footer>
</div>