<div class="content">
    <form class="mb-9">
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add a product</h2>
                <h5 class="text-700 fw-semi-bold">Orders placed across your store</h5>
            </div>
            <div class="col-auto"><button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish product</button></div>
        </div>
        <h4 class="mb-3">Product Title</h4>
        <div class="row g-5">
            <div class="col-12 col-xl-8"><input class="form-control mb-5" type="text" placeholder="Write title here..." />
            <div class="mb-6">
                    <h4 class="mb-3">Product Description</h4>
                    <textarea rows="10" class="form-control mb-5 resize-none" name="description" id="description" placeholder="Write description here..."></textarea>
                </div>
                <h4 class="mb-3">Display images</h4>
                <div class="d-flex flex-wrap gap-2 mb-3 review-images"></div>
                <div class="drag-area form-control mb-5 d-flex flex-column cursor-pointer justify-content-center align-items-center" style="height: 200px;">
                    <input type="file" multiple class="w-0 h-0 d-none images">
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
                                        <h5 class="mb-2 text-1000">Regular price</h5><input class="form-control" type="text" placeholder="$$$" />
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <h5 class="mb-2 text-1000">Sale price</h5><input class="form-control" type="text" placeholder="$$$" />
                                    </div>
                                    <div class="col-12">
                                        <h5 class="mb-2 text-1000">Discount</h5><input class="form-control" type="text" placeholder="$$$" />
                                    </div>
                                    <div class="col-12">
                                        <h5 class="mb-2 text-1000">Quantity</h5><input class="form-control" type="text" placeholder="$$$" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                                <div class="d-flex flex-column h-100">
                                    <h5 class="mb-3 text-1000">Add to Stock</h5>
                                    <div class="row g-3 flex-1 mb-4">
                                        <div class="col-sm-7"><input class="form-control" type="number" placeholder="Quantity" /></div>
                                        <div class="col-sm"><button class="btn btn-primary" type="button"><span class="fa-solid fa-check me-1 fs--2"></span>Confirm</button></div>
                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th style="width: 200px;"></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-1000 fw-bold py-1">Product in stock now:</td>
                                                <td class="text-700 fw-semi-bold py-1">$1,090<button class="btn p-0" type="button"><span class="fa-solid fa-rotate text-900 ms-1" style="--phoenix-text-opacity: .6;"></span></button></td>
                                            </tr>
                                            <tr>
                                                <td class="text-1000 fw-bold py-1">Product in transit:</td>
                                                <td class="text-700 fw-semi-bold py-1">5000</td>
                                            </tr>
                                            <tr>
                                                <td class="text-1000 fw-bold py-1">Last time restocked:</td>
                                                <td class="text-700 fw-semi-bold py-1">30th June, 2021</td>
                                            </tr>
                                            <tr>
                                                <td class="text-1000 fw-bold">Total stock over lifetime:</td>
                                                <td class="text-700 fw-semi-bold">20,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                            </div><select class="form-select mb-3" aria-label="category">
                                                <option value="men-cloth">Men's Clothing</option>
                                                <option value="women-cloth">Womens's Clothing</option>
                                                <option value="kid-cloth">Kid's Clothing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <div class="d-flex flex-wrap justify-content-between mb-2">
                                                <h5 class="mb-0 text-1000">Sub category</h5>
                                            </div><select class="form-select mb-3" aria-label="category">
                                                <option value="men-cloth">Men's Clothing</option>
                                                <option value="women-cloth">Womens's Clothing</option>
                                                <option value="kid-cloth">Kid's Clothing</option>
                                            </select>
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
    /*---- selected image ----*/
    let files = [],
        dragArea = document.querySelector('.drag-area'),
        input = document.querySelector('.drag-area input'),
        container = document.querySelector('.review-images');

    dragArea.onclick = () => {
        input.click()
    }

    function showImages() {
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

    // បើយើងចង់insert imageតែមួយប៉ុណ្ណោះ​ សូមchange code line 254​ ដល់ 303​ ដោយcodeខាងក្រោម
    /* let files = null,
        dragArea = document.querySelector('.drag-area'),
        input = document.querySelector('.drag-area input'),
        container = document.querySelector('.review-images');

    dragArea.onclick = () => {
        input.click()
    }

    function showImages(file) {
        container.innerHTML = `<div class="form-control rounded position-relative p-1" style="width: 100px; height: 100px;">
                    <img src="${URL.createObjectURL(file)}" style="width: 100%; height: 100%; object-fit: cover;">
                    <span class="cursor-pointer position-absolute z-100" onclick="delImage()" style=" top: 1px; right: 5px; font-size: 16px;">&times;</span>
                </div>`;
    }

    function delImage() {
        input.files = null;
        files = null;
        container.innerHTML = "";
    }

    input.addEventListener('change', () => {
        let file = input.files;
        files = file[0];
        showImages(file[0]);
        input.files = null;
    })

    dragArea.addEventListener('dragover', e => {
        e.preventDefault();
    })

    dragArea.addEventListener('drop', e => {
        e.preventDefault();
        let file = e.dataTransfer.files;
        files = file[0];
        showImages(file[0]);
        input.files = null;
    }); */

</script>