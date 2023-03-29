<?php
$p_id = $_GET['p_id'] ?? 0;
?>

<div class="content">
    <form class="mb-9">
        <input type="text" id="mainId" class="d-none">
        <input type="text" id="subId" class="d-none">
        <input type="text" name="pId" value="<?= $p_id ?>" class="d-none">
        <input type="text" value="<?= $p_id ?>" class="d-none">
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Edit a product</h2>
            </div>
            <div class="col-auto"><button class="btn btn-primary mb-2 mb-sm-0" id="btnEdit" type="submit">Edit product</button></div>
        </div>
        <h4 class="mb-3">Product Title</h4>
        <div class="row g-5">
            <div class="col-12 col-xl-8"><input class="form-control mb-5" type="text" placeholder="Write title here..." name="name" id="name" />
                <div class="mb-6">
                    <h4 class="mb-3">Product Description</h4>
                    <textarea rows="10" class="form-control mb-5 resize-none" name="description" id="description" placeholder="Write description here..."></textarea>
                </div>
                <h4 class="mb-3">Display images</h4>
                <div class="d-flex flex-wrap gap-2 mb-3 review-images"></div>
                <div class="drag-area form-control mb-5 d-flex flex-column cursor-pointer justify-content-center align-items-center" style="height: 200px;">
                    <input type="file" id="fileimage" multiple class="w-0 h-0 d-none images">
                    <div class="dz-message text-600">Drag your photo here <span class="text-800">or </span><button class="btn btn-link p-0" type="button">Browse from device </button><br /></div>
                    <div><img class="mt-3 me-2" src="assets/img/icons/image-icon.png" width="40" alt="" /></div>
                </div>
                <h4 class="mb-3">Inventory</h4>
                <div class="row g-0 border-top border-bottom border-300">
                    <div class="col-12">
                        <div class="tab-content py-3 h-100">
                            <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                                <h4 class="mb-3 d-sm-none">Pricing</h4>
                                <div class="row g-3">
                                    <div class="col-12 col-lg-6">
                                        <h5 class="mb-2 text-1000">Regular price</h5><input class="form-control" name="price" id="price" type="text" placeholder="$$$" />
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <h5 class="mb-2 text-1000">Sale price</h5><input class="form-control" name="sale_price" id="sale_price" type="text" placeholder="$$$" />
                                    </div>
                                    <div class="col-12">
                                        <h5 class="mb-2 text-1000">Discount</h5><input class="form-control" name="discount" id="discount" type="text" placeholder="0.00%" />
                                    </div>
                                    <div class="col-12">
                                        <h5 class="mb-2 text-1000">Quantity</h5><input class="form-control" name="qty" id="qty" type="text" placeholder="0" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="row g-2">
                    <div class="col-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body" style="height: 310px;">
                                <h4 class="card-title mb-4">Organize</h4>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <div class="d-flex flex-wrap justify-content-between mb-2">
                                                <h5 class="mb-0 text-1000">Main category</h5><a class="fw-bold fs--1" href="index.php?page_name=addcategory">Add new category</a>
                                            </div>
                                            <select class="form-select mb-3 main-category" aria-label="category"></select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <div class="d-flex flex-wrap justify-content-between mb-2">
                                                <h5 class="mb-0 text-1000">Sub category</h5>
                                            </div>
                                            <select class="form-select mb-3 sub-category" name="subId" aria-label="category"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
<script>
    const main_categorys = document.querySelector('.main-category');
    const sub_categorys = document.querySelector('.sub-category');
    const btnEdit = document.querySelector('#btnEdit');
    const form = document.querySelector('form');

    const name = document.querySelector('#name');
    const description = document.querySelector('#description');
    const price = document.querySelector('#price');
    const sale_price = document.querySelector('#sale_price');
    const discount = document.querySelector('#discount');
    const qty = document.querySelector('#qty');
    const subId = document.querySelector('#subId');
    const mainId = document.querySelector('#mainId');
    const proId = document.querySelector('#proId');

    /*---- selected image ----*/
    let files = [],
        dragArea = document.querySelector('.drag-area'),
        input = document.querySelector('.drag-area input'),
        container = document.querySelector('.review-images');

    dragArea.onclick = () => {
        input.click()
    }

    function showImages() {
        container.innerHTML = "";
        let images = files.reduce(function(prev, file, index) {
            return (prev += `<div class="form-control rounded position-relative p-1" style="width: 100px; height: 100px;">
                    <img src="${URL.createObjectURL(file)}" style="width: 100%; height: 100%; object-fit: cover;">
                    <span class="cursor-pointer position-absolute z-100" onclick="delImage(${index})" style=" top: 1px; right: 5px; font-size: 16px;">&times;</span>
                </div>`);
        }, "");
        container.innerHTML = images;
    }

    function delImage(index) {
        files.splice(index, 1);
        showImages();
    }

    input.addEventListener('change', () => {
        let file = input.files;
        if (file.length == 0) return;

        for (let i = 0; i < file.length; i++) {
            if (file[i].type.split("/")[0] != 'image') continue;
            if (!files.some(e => e.name == file[i].name)) files.push(file[i])
        }
        input.files = null;
        showImages();
    })

    dragArea.addEventListener('dragover', e => {
        e.preventDefault();
    })

    dragArea.addEventListener('drop', e => {
        e.preventDefault();

        let file = e.dataTransfer.files;
        for (let i = 0; i < file.length; i++) {
            if (file[i].type.split("/")[0] != 'image') continue;
            if (!files.some(e => e.name == file[i].name)) files.push(file[i])
        }
        showImages();
    });

    const table = "product";
    const column = "*, pro.id, pro.name, pro.description";
    const clause = "AS pro INNER JOIN sub_category AS sub ON sub.id = pro.sub_id INNER JOIN main_category AS main ON main.id = sub.main_id";
    const condition = "WHERE pro.id = " + <?= $p_id ?>;

    console.log(<?= $p_id ?>);

    axios.get(`ajax/product.php?action=select&table=${table}&column=${column}&clause=${clause}&condition=${condition}`)
        .then(res => {
            console.log(res);
            const data = res.data;
            name.value = data[0].name;
            description.value = data[0].description;
            price.value = data[0].price;
            sale_price.value = data[0].sale_price;
            discount.value = data[0].discount;
            qty.value = data[0].qty;
            container.innerHTML += `
                <div class="form-control rounded position-relative p-1" style="width: 100px; height: 100px;">
                    <img src="uploads/product/${data[0].image1}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="form-control rounded position-relative p-1" style="width: 100px; height: 100px;">
                    <img src="uploads/product/${data[0].image2}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="form-control rounded position-relative p-1" style="width: 100px; height: 100px;">
                    <img src="uploads/product/${data[0].image3}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            `;
            subId.value = data[0].sub_id;
            mainId.value = data[0].main_id;

            getMainCategory();
            getSubCategory(data[0].main_id);
        })
        .catch(error => {
            console.log(error);
        });

    main_categorys.onchange = (e) => {
        getSubCategory(main_categorys.value);
    }

    /*---- add product ----*/
    form.onsubmit = (e) => {
        e.preventDefault();
    }

    btnEdit.onclick = () => {

        /*----- check condition -----*/
        if (name == "" || description == "" || price == "" || sale_price == "" || qty == "") {
            return Swal.fire({
                toast: true,
                position: 'top',
                showClass: {
                    icon: 'animated heartBeat delay-1s'
                },
                icon: 'error',
                text: 'Please check information again',
                showConfirmButton: false,
                timer: 1000
            });
        }

        if (sub_categorys.value == "") {
            return Swal.fire({
                toast: true,
                position: 'top',
                showClass: {
                    icon: 'animated heartBeat delay-1s'
                },
                icon: 'error',
                text: 'No category selected!',
                showConfirmButton: false,
                timer: 1000
            });
        }

        if (files.length != 0 && files.length < 3) {
            return Swal.fire({
                toast: true,
                position: 'top',
                showClass: {
                    icon: 'animated heartBeat delay-1s'
                },
                icon: 'error',
                text: '3 Images are require!',
                showConfirmButton: false,
                timer: 1000
            });
        }

        const formData = new FormData(form);

        if (files.length > 0) {
            formData.append('image1', files[0]);
            formData.append('image2', files[1]);
            formData.append('image3', files[2]);
        }

        axios.post("ajax/product.php?action=update&pId=<?= $p_id ?>", formData, {
            header: {
                "content-type": "multipart/form-data"
            }
        }).then(res => {
            const data = res.data;
            console.log(res);
            if (res.data.success) {
                Swal.fire({
                    toast: true,
                    position: 'top',
                    showClass: {
                        icon: 'animated heartBeat delay-1s'
                    },
                    icon: 'success',
                    text: 'Product has been updated',
                    showConfirmButton: false,
                    timer: 1000
                }).then(res => {
                    window.location.replace('index.php?page_name=products');
                })
            }
        }).catch(e => {
            console.log(e);
        });
    }

    /*---- functions----*/
    async function getMainCategory() {
        main_categorys.innerHTML = "";
        await axios.get('ajax/category.php?action=select&table=main_category&column=*')
            .then(res => {
                res.data.forEach(item => {
                    main_categorys.innerHTML += `<option ${item.id == mainId.value ? "selected": ""} value="${item.id}">${item.name}</option>`;
                });
            })
            .catch(error => {
                console.log(error);
            });
    }

    async function getSubCategory(main_id) {
        sub_categorys.innerHTML = "";
        await axios.get(`ajax/category.php?action=select&table=sub_category&column=*&condition=WHERE main_id = ${main_id}`)
            .then(res => {

                res.data.forEach(item => {
                    sub_categorys.innerHTML += `<option value="${item.id}">${item.name}</option>`;
                });
            })
            .catch(error => {
                console.log(error);
            });
    }
</script>