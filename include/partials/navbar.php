<nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between">
    <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
        <div class="dropdown"><button class="btn text-900 ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none" data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span class="fas fa-bars me-2"></span>Category</button>
            <div class="dropdown-menu border py-0 category-dropdown-menu">
                <div class="card border-0 scrollbar" style="max-height: 657px;">
                    <div class="card-body p-6 pb-3">
                        <div class="row gx-7 gy-5 mb-5 category">

                            <!-- main-category -->
                            <!-- <div class="col-12 col-sm-6 col-md-4">
                                
                                <div class="ms-n2 sub-category"></div>
                            </div> -->

                            <!-- <div class="col-12 col-sm-6 col-md-4 category">
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="pocket" style="stroke-width:3;"></span>
                                    <h6 class="text-1000 mb-0 text-nowrap">Collectibles &amp; Artsssss</h6>
                                </div> -->
                                <!-- sub-category -->
                                
                            <!-- </div> -->

                            
                        </div>
                        <div class="text-center border-top pt-3"><a class="fw-bold" href="#!">See all Categories<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="navbar-nav justify-content-end align-items-center">
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0 active" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="index?page_name=product">Products</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="index?page_name=contact">Contact Us</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">About Us</a></li>
            <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0" href="javascript: void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-boundary="window" data-bs-reference="parent"> More<span class="fas fa-angle-down ms-2"></span></a>
                <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown" data-category-list="data-category-list"></div>
            </li>
        </ul>
    </div>
</nav>
<script>
    const category = document.querySelector('.category');

    
    getCategory();

    function getCategory(){
        axios.get('admin/ajax/category.php?action=select&table=main_category&column=*').then(res => {
        category.innerHTML = "";
        const main = res.data;
        main.forEach(itemMain => {
 
            axios.get('admin/ajax/category.php?action=select&table=sub_category&column=*&condition=WHERE main_id = ' + itemMain.id).then(r => {
            category.innerHTML += `
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="d-flex align-items-center mb-3">
                        <span class="text-primary me-2" data-feather="pocket" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">${itemMain.name}</h6>
                    </div>
                    <div class="ms-n2">
            `;
            const sub = r.data;
            sub.forEach(itemSub => {
                category.innerHTML += `
                    <a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">${itemSub.name}</a>
                `;
            });
            category.innerHTML += "</div></div>";
            }).catch(e => {
                console.log(e);
            })
        });
    }).catch(e => {
        console.log(e);
    });
    }
</script>