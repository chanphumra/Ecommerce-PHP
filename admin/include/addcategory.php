<div class="content">
    <form class="mb-9" action="POST" enctype="multipart/form-date">
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add a category</h2>
                <h5 class="text-700 fw-semi-bold">Orders placed across your store</h5>
            </div>
            <div class="col-auto"><button class="btn btn-primary mb-2 mb-sm-0 btnSubmit">Publish category</button></div>
        </div>
        <div class="row g-5">
            <div class="col-12 col-xl-8">
                <div class="cat mb-3">
                    <h4>Category Title</h4>
                    <div>
                        <input class="form-check-input" type="checkbox" name="main-check" id="main-category">
                        <label for="main-category">Main category</label>
                    </div>
                </div>
                <input class="form-control mb-5" name="name" id="name" type="text" placeholder="Write title here..." />
                <div class="mb-6">
                    <h4 class="mb-3">Category Description</h4>
                    <textarea rows="10" class="form-control mb-5 resize-none" name="description" id="description" placeholder="Write description here..."></textarea>
                </div>
                <h4 class="mb-3">Display images</h4>
                <div class="d-flex flex-wrap gap-2 mb-3 review-images"></div>
                <div class="drag-area form-control mb-5 d-flex flex-column cursor-pointer justify-content-center align-items-center" style="height: 200px;">
                    <input type="file" class="w-0 h-0 d-none images">
                    <div class="dz-message text-600">Drag your photo here <span class="text-800">or </span><button class="btn btn-link p-0" type="button">Browse from device </button><br /></div>
                    <div><img class="mt-3 me-2" src="assets/img/icons/image-icon.png" width="40" alt="" /></div>
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
                                            </div>
                                            <select class="form-select mb-3 maincategory" name="mainCategory" aria-label="category"></select>
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
                <p class="mb-0 mt-2 mt-sm-0 text-900">Bazaar Shop Cambodia<span class="d-none d-sm-inline-block"></span></p>
            </div>
            
        </div>
    </footer>
</div>
<script>
    const mainCheck = document.querySelector("#main-category");
    const maincategory = document.querySelector('.maincategory');
    mainCheck.onchange = () => {
        if (mainCheck.checked) {
            maincategory.classList.add('active');
        } else {
            maincategory.classList.remove('active');
        }
    }
    /*---- selected image ----*/
    let files = null,
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
    });

    /*---- get main category ----*/
    let main = [],
        main_categorys = document.querySelector('.maincategory');

    function getMainCategory() {
        main = [];
        main_categorys.innerHTML = "";
        axios.get('ajax/category.php?action=select&table=main_category&column=*')
            .then(res => {
                res.data.forEach(item => {
                    main_categorys.innerHTML += `<option value="${item.id}">${item.name}</option>`;
                    main.push(item.name);
                });
            })
            .catch(error => {
                console.log(error);
            });
    }
    getMainCategory();

    /*---- insert categoty ----*/
    const form = document.querySelector('form');
    const btnSubmit = document.querySelector('.btnSubmit');

    form.onsubmit = (e) => {
        e.preventDefault();
    }

    btnSubmit.onclick = () => {
        const name = document.querySelector('#name').value;
        const description = document.querySelector('#description').value;

        /*---- check condition ----*/
        if (name === "" || description === "") {
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

        if (files == null) {
            return Swal.fire({
                toast: true,
                position: 'top',
                showClass: {
                    icon: 'animated heartBeat delay-1s'
                },
                icon: 'error',
                text: 'Image are require!',
                showConfirmButton: false,
                timer: 1000
            });
            return;
        }

        if (!mainCheck.checked && main.length == 0) {
            return Swal.fire({
                toast: true,
                position: 'top',
                showClass: {
                    icon: 'animated heartBeat delay-1s'
                },
                icon: 'error',
                text: 'No main category!',
                showConfirmButton: false,
                timer: 1000
            });
            return;
        }

        const formdata = new FormData(form);
        formdata.append("image", files);
        axios.post('ajax/category.php?action=insert', formdata, {
                header: {
                    "content-type": "multipart/form-data"
                }
            })
            .then(res => {
                if (res.data.success) {
                    Swal.fire({
                        toast: true,
                        position: 'top',
                        showClass: {
                            icon: 'animated heartBeat delay-1s'
                        },
                        icon: 'success',
                        text: 'One Category has been saved',
                        showConfirmButton: false,
                        timer: 1000
                    }).then(res => {
                        window.location.replace('index.php?page_name=category');
                    })
                }
            })
            .catch(error => {
                console.log(error);
            });
    }
</script>