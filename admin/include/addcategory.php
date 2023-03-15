<div class="content">
    <form class="mb-9" action="POST" enctype="multipart/form-date">
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add a category</h2>
                <h5 class="text-700 fw-semi-bold">Orders placed across your store</h5>
            </div>
            <div class="col-auto"><button class="btn btn-primary mb-2 mb-sm-0 btnSubmit" type="submit">Publish category</button></div>
        </div>
        <div class="row g-5">
            <div class="col-12 col-xl-8">
                <div class="cat mb-3">
                    <h4>Category Title</h4>
                    <div>
                        <input class="form-check-input" type="checkbox" name="" id="main-category">
                        <label for="main-category">Main category</label>
                    </div>
                </div>
                <input class="form-control mb-5" name="category_name" type="text" placeholder="Write title here..." />
                <div class="mb-6">
                    <h4 class="mb-3"> Category Description</h4>
                    <textarea class="tinymce" name="category_description" data-tinymce='{"height":"15rem","placeholder":"Write a description here..."}'></textarea>
                </div>
                <h4 class="mb-3">Display images</h4>
                <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                    <div class="fallback"><input name="images" type="file" multiple="multiple" /></div>
                    <div class="dz-preview d-flex flex-wrap">
                        <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;"><img class="dz-image" src="../../../assets/img/products/23.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /><a class="dz-remove text-400" href="" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a></div>
                    </div>
                    <div class="dz-message text-600" data-dz-message="data-dz-message"> Drag your photo here <span class="text-800">or </span><button class="btn btn-link p-0" type="button">Browse from device </button><br /><img class="mt-3 me-2" src="assets/img/icons/image-icon.png" width="40" alt="" /></div>
                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="row g-2">
                    <div class="col-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Organize</h4>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4" style="height: 267px;">
                                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                                <h5 class="mb-0 text-1000">Main category</h5>
                                            </div><select class="form-select mb-3 maincategory" aria-label="category">
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
    const mainCheck = document.querySelector("#main-category");
    const maincategory = document.querySelector(".maincategory");
    mainCheck.onchange = () => {
        if (mainCheck.checked) {
            maincategory.classList.add('active');
        } else {
            maincategory.classList.remove('active');
        }
    }

    const form = document.querySelector('form');
    const btnSubmit = document.querySelector('.btnSubmit');

    form.onsubmit = (e) => {
        e.preventDefault();
    }

    btnSubmit.onclick = () => {
        const formdata = new FormData();
        formdata.append("name", "phumra");

        axios.post('ajax/category.php?action=insert', formdata, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            })
            .then(res => {
                console.log(res);
            })
            .catch(error => {
                console.log(error);
            });
    }
    hello
</script>