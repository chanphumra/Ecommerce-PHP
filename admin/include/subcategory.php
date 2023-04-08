<?php
$main_id = $_GET['main_id'] ?? 0;
$main_name = $_GET['main_name'] ?? 'No category';
?>

<div class="content">
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Sub Categorys <span class="text-sm text-primary"><?= $main_name ?></span></h2>
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
                        <a href="index.php?page_name=addcategory"><button class="btn btn-primary"><span class="fas fa-plus me-2"></span>Add category</button></a>
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
                        <tbody class="list sub_category" id="products-table-body"></tbody>
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
                <p class="mb-0 mt-2 mt-sm-0 text-900">Bazaar Shop Cambodia<span class="d-none d-sm-inline-block"></span></p>
            </div>
            
        </div>
    </footer>

    <script>
        const sub_category = document.querySelector('.sub_category');

        getSubCatefory();
        /*====== function ======*/
        function getSubCatefory() {
            sub_category.innerHTML = "";
            axios.get('ajax/category.php?action=select&table=sub_category&column=*&condition=WHERE main_id = ' + <?= $main_id ?>).then(res => {
                console.log(res);
                res.data.forEach(item => {
                    sub_category.innerHTML += `
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs--1 align-middle">
                                <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                            </td>
                            <td class="align-middle white-space-nowrap py-0">
                                <div class="border rounded-2">
                                    <img src="uploads/category/${item.image}" alt="" width="55" height="55" />
                                </div>
                            </td>
                            <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">${item.name}</a></td>
                            <td class="price align-middle white-space-nowrap fw-bold text-700 ps-4">${item.description}</td>
                            <td class="time align-middle white-space-nowrap text-700 ps-4">${new Date(Date.parse(item.created_at.replace(/-/g, '/'))).toDateString()}</td>
                            <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                <div class="position-relative">
                                    <div class="hover-actions">
                                        <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2">
                                            <span class="fas fa-check"></span>
                                        </button>
                                        <a href="index.php?page_name=editsubcategory&id=${item.id}" class="btn btn-sm btn-phoenix-secondary me-1 fs--2">
                                            <span class="fas fa-pen"></span>
                                        </a>
                                        <button onclick="deleteSubCategory(${item.id})" class="btn btn-sm btn-phoenix-secondary fs--2">
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
                    `;
                });

            }).catch(e => {
                console.log(e);
            })
        }

        function deleteSubCategory(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-primary ms-2',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You want to delete this main category!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    axios.get('ajax/category.php?action=select&table=product&column=COUNT(sub_id) AS count&condition=WHERE sub_id = ' + id).then(res => {
                        console.log(res);
                        if (res.data[0].count == 0) {
                            axios.delete('ajax/category.php?action=delete&table=sub_category&id=' + id).then(res => {
                                if (res.data.success) {
                                    Swal.fire({
                                        toast: true,
                                        position: 'top',
                                        showClass: {
                                            icon: 'animated heartBeat delay-1s'
                                        },
                                        icon: 'success',
                                        text: 'Sub Category has been deleted',
                                        showConfirmButton: false,
                                        timer: 1000
                                    }).then(res => {
                                        window.location.href = "index.php?page_name=category";
                                    })
                                } else {
                                    Swal.fire({
                                        toast: true,
                                        position: 'top',
                                        showClass: {
                                            icon: 'animated heartBeat delay-1s'
                                        },
                                        icon: 'error',
                                        text: 'Something wrong',
                                        showConfirmButton: false,
                                        timer: 1000
                                    })
                                }
                            }).catch(err => {
                                console.log(err);
                            });
                        } else {
                            Swal.fire({
                                toast: true,
                                position: 'top',
                                showClass: {
                                    icon: 'animated heartBeat delay-1s'
                                },
                                icon: 'error',
                                text: 'This sub category not empty',
                                showConfirmButton: false,
                                timer: 1000
                            })
                        }
                    }).catch(err => {
                        console.log(err);
                    });
                }
            })
        }
    </script>
</div>