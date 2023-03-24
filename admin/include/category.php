<div class="content">
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Categorys</h2>
            </div>
        </div>
        <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
                <div class="g-3 d-flex justify-content-between">
                    <div class="col-auto">
                        <div class="search-box">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search category" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="index.php?page_name=addproduct"><button class="btn btn-primary"><span class="fas fa-plus me-2"></span>Add category</button></a>
                    </div>
                </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs--1 mb-0">
                        <thead>
                            <tr>
                                <th class="white-space-nowrap fs--1 align-middle" style="max-width:20px; width:18px;">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </th>
                                <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;"></th>
                                <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:400px;" data-sort="product">CATEGORY NAME</th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="price" style="width:350px;">DESCRIPTION</th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">PUBLISHED ON</th>
                                <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="products-table-body">

                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                                </td>
                                <td class="align-middle white-space-nowrap py-0">
                                    <div class="border rounded-2">
                                        <img src="../../../assets/img//products/1.png" alt="" width="53" />
                                    </div>
                                </td>
                                <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; ...</a></td>
                                <td class="price align-middle white-space-nowrap fw-bold text-700 ps-4">Category description</td>
                                <td class="time align-middle white-space-nowrap text-700 ps-4">Nov 12, 10:45 PM</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                    <div class="position-relative">
                                        <div class="hover-actions">
                                            <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2">
                                                <span class="fas fa-check"></span>
                                            </button>
                                            <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2">
                                                <span class="fas fa-pen"></span>
                                            </button>
                                            <button class="btn btn-sm btn-phoenix-secondary fs--2">
                                                <span class="fas fa-trash"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
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