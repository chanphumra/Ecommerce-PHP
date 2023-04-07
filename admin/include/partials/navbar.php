<?php
    $page_name = $_GET['page_name'] ?? "home"
?>

<nav class="navbar navbar-vertical navbar-expand-lg">
    <script>
        var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
            alert("Hello");
        }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1 <?=$page_name=="home"?"active":"" ?>" href="index.php" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span></div>
                        </a>
                    </div>
                </li>

                <li class="nav-item">

                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1 <?=$page_name=='order' || $page_name == 'orderdetails'? "active":""?>" href="index.php?page_name=order" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="shopping-bag"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Orders</span></span></div>
                        </a>
                    </div>

                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#pricing" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">Customers</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="pricing">
                                <li class="collapsed-nav-item-title d-none">Customers</li>
                                <li class="nav-item"><a class="nav-link" href="pages/pages/pricing/pricing-column.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Add Customer</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/pages/pricing/pricing-grid.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Customer</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#email" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="box"></span></span><span class="nav-link-text">Category</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent <?=($page_name=="addcategory" || $page_name=="category" || $page_name == "subcategory" || $page_name == "editmaincategory" || $page_name == "editsubcategory")?"show":"" ?>" data-bs-parent="#navbarVerticalCollapse" id="email">
                                <li class="collapsed-nav-item-title d-none">Category</li>
                                <li class="nav-item">
                                    <a class="nav-link <?=$page_name=="addcategory"?"active":"" ?>" href="index.php?page_name=addcategory" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Add category</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?=($page_name=="category" || $page_name == "subcategory" || $page_name == "editmaincategory" || $page_name == "editsubcategory")?"active":"" ?>" href="index.php?page_name=category" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Category</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#project-management" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="project-management">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span class="nav-link-text">Product</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent <?=($page_name=="addproduct" || $page_name=="products" || $page_name=="editproduct")?"show":"" ?>" data-bs-parent="#navbarVerticalCollapse" id="project-management">
                                <li class="collapsed-nav-item-title d-none">Product</li>
                                <li class="nav-item">
                                    <a class="nav-link <?=$page_name=="addproduct"?"active":"" ?>" href="index.php?page_name=addproduct" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Add Product</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?=($page_name=="products" || $page_name=="editproduct")?"active":"" ?>" href="index.php?page_name=products" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Product</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#events" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="monitor"></span></span><span class="nav-link-text">Slideshows</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent <?=($page_name=="addslideshow" || $page_name=="slideshow" || $page_name=="editslideshow")?"show":"" ?>" data-bs-parent="#navbarVerticalCollapse" id="events">
                                <li class="collapsed-nav-item-title d-none">Slideshows</li>
                                <li class="nav-item"><a class="nav-link <?=($page_name=="addslideshow")?"active":"" ?>" href="index.php?page_name=addslideshow" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Add Slideshow</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link <?=($page_name=="slideshow" || $page_name=="editslideshow")?"active":"" ?>" href="index.php?page_name=slideshow" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Slideshow</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#social" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text">Site Setting</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="social">
                                <li class="collapsed-nav-item-title d-none">Site Setting</li>
                                <li class="nav-item"><a class="nav-link" href="index.php?page_name=siteprofile" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Site Profile</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="apps/social/settings.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Footer</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- parent pages-->
                    <!-- <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="apps/calendar.html" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="calendar"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Calendar</span></span></div>
                        </a>
                    </div> -->
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>