<div class="content">
    <div class='mb-9'>
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Site Setting</h2>
                <!-- <h5 class="text-700 fw-semi-bold">Orders placed across your store</h5> -->
            </div>
            <div class="col-auto"><button class="btn btn-primary mb-2 mb-sm-0" id="btnAdd" type="submit">Save Changes</button></div>
        </div>
        <div class="d-flex mt-5 gap-8 flex-column flex-md-row">
            <div class="flex-[2] bg-white p-5 rounded shadow">
                <div class="mb-7 d-flex justify-content-center align-items-center">
                    <div class="position-relative shadow-sm p-1 rounded-circle border border-primary" style="width: 200px; height: 200px;">
                        <div id="preview" class="w-100 h-100">
                            <img src="../assets/img/avatar.png" class="object-fit-cover rounded-circle w-100 h-100">
                        </div>
                        <div onclick="browseImage()" class="position-absolute d-flex justify-content-center align-items-center cursor-pointer p-1 rounded-circle border bg-white border-primary" style="width: 45px; height: 45px; bottom: 7px; right: 5px;">
                            <i class="fas fa-pen"></i>
                        </div>
                        <input type="file" accept="image/*" id="image" name="image" class="d-none">
                    </div>
                </div>
                <div class="mt-5">
                    <p class='mb-2'>Company name</p>
                    <input ref="" type="text" class='rounded border border-solid px-3 py-2 w-100' placeholder='company name' />
                </div>
            </div>
            <div class="flex-[4] bg-white p-5 rounded shadow">
                <h2 class='text-xl font-semibold'>General information</h2>
                <div class="d-flex flex-col flex-md-row gap-4 gap-md-8 w-100 mt-5">
                    <div class="w-100">
                        <p class='mb-2'>City</p>
                        <input ref="" type="text" class='rounded border border-solid px-3 py-2 w-100' placeholder='phnom penh' />
                    </div>
                    <div class="w-100">
                        <p class='mb-2'>Country</p>
                        <input ref="" type="text" class='rounded border border-solid px-3 py-2 w-100' placeholder='cambodia' />
                    </div>
                </div>
                <div class="d-flex flex-col md:flex-row gap-4 gap-md-8 w-100 mt-3">
                    <div class="w-100">
                        <p class='mb-2'>Phone</p>
                        <input ref="" type="text" class='rounded border border-solid px-3 py-2 w-100' placeholder='+1234567890' />
                    </div>
                    <div class="w-100">
                        <p class='mb-2'>Email</p>
                        <input ref="" type="text" class='rounded border border-solid px-3 py-2 w-100' placeholder='company@gmail.com' />
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
<script>
    const form = document.querySelector('form');
        const formText = document.querySelector('#formText');
        const formImage = document.querySelector('#formImage');
        const btnNext = document.querySelector('#btnNext');
        const btnRegister = document.querySelector('#btnRegister');
        const imageFile = document.querySelector('#image');
    imageFile.onchange = () => {
            document.querySelector('#preview').innerHTML = `<img src="${URL.createObjectURL(imageFile.files[0])}" class="object-fit-cover rounded-circle w-100 h-100">`;
        }

        function browseImage() {
            imageFile.click();
        }
</script>
