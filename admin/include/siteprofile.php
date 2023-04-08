<div class="content">
    <form class='mb-9' action="POST" enctype="multipart/form-data">
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Site Setting</h2>
                <!-- <h5 class="text-700 fw-semi-bold">Orders placed across your store</h5> -->
            </div>
            <div class="col-auto"><button class="btn btn-primary mb-2 mb-sm-0 btnEdit" type="submit">Save Changes</button></div>
        </div>
        <div class="d-flex mt-5 gap-4 flex-column flex-md-row">
            <div class="bg-white p-5 rounded shadow border">
                <div class="mb-7 d-flex justify-content-center align-items-center drag-area">
                    <div class="position-relative shadow-sm p-1 rounded-circle border border-primary" style="width: 200px; height: 200px;">
                        <div id="preview" class="w-100 h-100 review-images">
                            <img src="../assets/img/avatar.png" class="object-fit-cover rounded-circle w-100 h-100">
                        </div>
                        <div onclick="browseImage()" class="position-absolute d-flex justify-content-center align-items-center cursor-pointer p-1 rounded-circle border bg-white border-primary" style="width: 45px; height: 45px; bottom: 7px; right: 5px;">
                            <i class="fas fa-pen"></i>
                        </div>
                        <input type="file" accept="image/*" id="image" class="d-none">
                    </div>
                </div>
                <div class="mt-5">
                    <p class='mb-2'>Company name</p>
                    <input id="name" name="name" type="text" class='form-control w-100' placeholder='company name' />
                </div>
            </div>
            <div class="bg-white p-5 rounded shadow w-100 border">
                <h2 class=''>General information</h3>
                <div class="d-flex flex-column flex-md-row gap-4 w-100 mt-5">
                    <div class="w-100">
                        <p class='mb-2'>City</p>
                        <input id="city" name="city" type="text" class='form-control w-100' placeholder='phnom penh' />
                    </div>
                    <div class="w-100">
                        <p class='mb-2'>Country</p>
                        <input id="country" name="country" type="text" class='form-control w-100' placeholder='cambodia' />
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row gap-4 w-100 mt-3">
                    <div class="w-100">
                        <p class='mb-2'>Phone</p>
                        <input id="phone" name="phone" type="text" class='form-control w-100' placeholder='+1234567890' />
                    </div>
                    <div class="w-100">
                        <p class='mb-2'>Email</p>
                        <input id="emails" name="emails" name="emails" type="text" class='form-control w-100' placeholder='company@gmail.com' />
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
    let files = null,
        dragArea = document.querySelector('.drag-area'),
        input = document.querySelector('.drag-area input'),
        container = document.querySelector('.review-images');

    // get data
    axios.get('ajax/siteprofile.php?action=select&table=profile_setting&column=*&condition=WHERE id = 1').then(res => {
        res.data.forEach(item => {
            document.querySelector('#name').value = item.name;
            document.querySelector('#city').value = item.city;
            document.querySelector('#country').value = item.country;
            document.querySelector('#phone').value = item.phone;
            document.querySelector('#emails').value = item.email;
            container.innerHTML = `
                <img src="uploads/profile/${item.image}" class="object-fit-cover rounded-circle w-100 h-100">
            `;
        });
    }).catch(e => {
        console.log(e);
    });

    const imageFile = document.querySelector('#image');

    function showImages(file) {
        document.querySelector('#preview').innerHTML = `<img src="${URL.createObjectURL(file)}" class="object-fit-cover rounded-circle w-100 h-100">`;
    }

    imageFile.onchange = () => {
        let file = input.files;
        files = file[0];
        showImages(file[0]);
        input.files = null;
        console.log(files);
    }

    function browseImage() {
        imageFile.click();
    }


    const form = document.querySelector('form');
    const btnEdit = document.querySelector('.btnEdit');

    form.onsubmit = (e) => {
        e.preventDefault();
    }

    btnEdit.onclick = () => {
        const name = document.querySelector('#name').value;
        const city = document.querySelector('#city').value;
        const country = document.querySelector('#country').value;
        const phone = document.querySelector('#phone').value;
        const emails = document.querySelector('#emails').value;

        /*---- check condition ----*/
        if (name === "" || city === "" || country === "" || phone === "" || emails === "") {
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


        const formdata = new FormData(form);

        if (files != null) formdata.append("image", files);

        axios.post('ajax/siteprofile.php?action=update&table=profile_setting&id=1', formdata, {
                header: {
                    "content-type": "multipart/form-data"
                }
            })
            .then(res => {
                console.log(res);
                if (res.data.success) {
                    Swal.fire({
                        toast: true,
                        position: 'top',
                        showClass: {
                            icon: 'animated heartBeat delay-1s'
                        },
                        icon: 'success',
                        text: 'Profile has been updated',
                        showConfirmButton: false,
                        timer: 1000
                    }).then(res => {
                        window.location.replace('index.php?page_name=siteprofile');
                    })
                }
            })
            .catch(error => {
                console.log(error);
            });
    }
</script>