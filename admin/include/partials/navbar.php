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
                        <a class="nav-link label-1" href="apps/chat.html" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
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
                            <ul class="nav collapse parent <?=($page_name=="addcategory" || $page_name=="category")?"show":"" ?>" data-bs-parent="#navbarVerticalCollapse" id="email">
                                <li class="collapsed-nav-item-title d-none">Category</li>
                                <li class="nav-item">
                                    <a class="nav-link <?=$page_name=="addcategory"?"active":"" ?>" href="index.php?page_name=addcategory" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Add a category</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?=$page_name=="category"?"active":"" ?>" href="index.php?page_name=category" asd="index" data-bs-toggle="" aria-expanded="false">
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
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="events">
                                <li class="collapsed-nav-item-title d-none">Slideshows</li>
                                <li class="nav-item"><a class="nav-link" href="apps/events/create-an-event.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Add Slideshow</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="apps/events/event-detail.html" asd="index" data-bs-toggle="" aria-expanded="false">
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
                                <li class="nav-item"><a class="nav-link" href="apps/social/profile.html" asd="index" data-bs-toggle="" aria-expanded="false">
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

                <li class="nav-item">
                        
                    <!-- parent pages-->
                    <!-- <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#pricing" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="tag"></span></span><span class="nav-link-text">Pricing</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="pricing">
                                <li class="collapsed-nav-item-title d-none">Pricing</li>
                                <li class="nav-item"><a class="nav-link" href="pages/pages/pricing/pricing-column.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Pricing column</span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/pages/pricing/pricing-grid.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Pricing grid</span></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="pages/pages/notifications.html" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="bell"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Notifications</span></span></div>
                        </a></div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="pages/pages/members.html" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Members</span></span></div>
                        </a></div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#errors" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="alert-triangle"></span></span><span class="nav-link-text">Errors</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="errors">
                                <li class="collapsed-nav-item-title d-none">Errors</li>
                                <li class="nav-item"><a class="nav-link" href="pages/errors/404.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">404</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/errors/500.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">500</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#authentication" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="lock"></span></span><span class="nav-link-text">Authentication</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="authentication">
                                <li class="collapsed-nav-item-title d-none">Authentication</li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple" asd="index" data-bs-toggle="collapse" aria-expanded="true" aria-controls="authentication">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Simple</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#authentication" id="simple">
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/sign-in.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Sign in</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/sign-up.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Sign up</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/sign-out.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Sign out</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/forgot-password.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Forgot
                                                            password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/reset-password.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Reset password</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/lock-screen.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Lock screen</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split" asd="index" data-bs-toggle="collapse" aria-expanded="true" aria-controls="authentication">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Split</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#authentication" id="split">
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/split/sign-in.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Sign in</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/split/sign-up.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Sign up</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/split/sign-out.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Sign out</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/split/forgot-password.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Forgot
                                                            password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/split/reset-password.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Reset password</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/authentication/split/lock-screen.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Lock screen</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#layouts" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="layouts">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="layout"></span></span><span class="nav-link-text">Layouts</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="layouts">
                                <li class="collapsed-nav-item-title d-none">Layouts</li>
                                <li class="nav-item"><a class="nav-link" href="demo/vertical-sidenav.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical sidenav</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/dark-mode.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Dark mode</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/sidenav-collapse.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Sidenav collapse</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/darknav.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Darknav</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/topnav-slim.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Topnav slim</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-top-slim.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Navbar top slim</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-top.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Navbar top</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/horizontal-slim.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal slim</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/combo-nav.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Combo nav</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/combo-nav-slim.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Combo nav slim</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Modules</p>
                    <hr class="navbar-vertical-line" /><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#forms" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="file-text"></span></span><span class="nav-link-text">Forms</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="forms">
                                <li class="collapsed-nav-item-title d-none">Forms</li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Basic</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#forms" id="basic">
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/basic/form-control.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Form control</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/basic/input-group.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Input group</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/basic/select.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Select</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/basic/checks.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Checks</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/basic/range.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Range</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/basic/floating-labels.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Floating
                                                            labels</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/basic/layout.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Layout</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Advance</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#forms" id="advance">
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/advance/advance-select.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Advance select</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/advance/date-picker.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Date picker</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/advance/editor.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Editor</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/advance/file-uploader.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">File uploader</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/forms/advance/rating.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Rating</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/validation.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Validation</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/wizard.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Wizard</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#icons" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="grid"></span></span><span class="nav-link-text">Icons</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="icons">
                                <li class="collapsed-nav-item-title d-none">Icons</li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/feather.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Feather</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/font-awesome.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Font awesome</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/unicons.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Unicons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#tables" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="columns"></span></span><span class="nav-link-text">Tables</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="tables">
                                <li class="collapsed-nav-item-title d-none">Tables</li>
                                <li class="nav-item"><a class="nav-link" href="modules/tables/basic-tables.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Basic tables</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/tables/advance-tables.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Advance tables</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#components" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="package"></span></span><span class="nav-link-text">Components</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="components">
                                <li class="collapsed-nav-item-title d-none">Components</li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/accordion.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Accordion</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/avatar.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Avatar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/alerts.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Alerts</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/badge.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Badge</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/breadcrumb.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Breadcrumb</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/button.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Buttons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/calendar.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Calendar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/card.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Card</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Carousel</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#components" id="carousel">
                                            <li class="nav-item"><a class="nav-link" href="modules/components/carousel/bootstrap.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Bootstrap</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/components/carousel/swiper.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Swiper</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/collapse.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Collapse</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/dropdown.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Dropdown</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/list-group.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">List group</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/modal.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Modals</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Navs &amp; Tabs</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#components" id="navs-_and_-Tabs">
                                            <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/navs.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Navs</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/navbar.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Navbar</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/tabs.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Tabs</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/offcanvas.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Offcanvas</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/progress-bar.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Progress bar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/placeholder.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Placeholder</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/pagination.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Pagination</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/popovers.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Popovers</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/scrollspy.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Scrollspy</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/spinners.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Spinners</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/toast.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Toast</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/tooltips.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Tooltips</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#utilities" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="tool"></span></span><span class="nav-link-text">Utilities</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="utilities">
                                <li class="collapsed-nav-item-title d-none">Utilities</li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/background.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Background</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/borders.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Borders</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/colors.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Colors</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/display.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Display</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/flex.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Flex</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/float.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Float</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/interactions.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Interactions</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/opacity.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Opacity</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/overflow.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Overflow</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/position.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Position</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/shadows.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Shadows</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/sizing.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Sizing</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/spacing.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Spacing</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/typography.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Typography</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/vertical-align.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical align</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/visibility.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Visibility</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#multi-level" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="layers"></span></span><span class="nav-link-text">Multi level</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="multi-level">
                                <li class="collapsed-nav-item-title d-none">Multi level</li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Level two</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#multi-level" id="level-two">
                                            <li class="nav-item"><a class="nav-link" href="#!.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Item 1</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#!.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Item 2</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Level three</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#multi-level" id="level-three">
                                            <li class="nav-item"><a class="nav-link" href="#!.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Item 3</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-three">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
                                                        <span class="nav-link-text">Item 4</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#level-three" id="item-4">
                                                        <li class="nav-item"><a class="nav-link" href="#!.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 5</span>
                                                                </div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link" href="#!.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 6</span>
                                                                </div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Level four</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#multi-level" id="level-four">
                                            <li class="nav-item"><a class="nav-link" href="#!.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Item 6</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-four">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
                                                        <span class="nav-link-text">Item 7</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#level-four" id="item-7">
                                                        <li class="nav-item"><a class="nav-link" href="#!.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 8</span>
                                                                </div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-9" asd="index" data-bs-toggle="collapse" aria-expanded="false" aria-controls="item-7">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                                                    </div><span class="nav-link-text">Item 9</span>
                                                                </div>
                                                            </a><!-- more inner pages-->
                                                            <div class="parent-wrapper">
                                                                <ul class="nav collapse parent" data-bs-parent="#item-7" id="item-9">
                                                                    <li class="nav-item"><a class="nav-link" href="#!.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                                            <div class="d-flex align-items-center"><span class="nav-link-text">Item
                                                                                    10</span></div>
                                                                        </a><!-- more inner pages-->
                                                                    </li>
                                                                    <li class="nav-item"><a class="nav-link" href="#!.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                                                            <div class="d-flex align-items-center"><span class="nav-link-text">Item
                                                                                    11</span></div>
                                                                        </a><!-- more inner pages-->
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Documentation</p>
                    <hr class="navbar-vertical-line" /><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="documentation/getting-started.html" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Getting started</span></span></div>
                        </a></div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#customization" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text">Customization</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="customization">
                                <li class="collapsed-nav-item-title d-none">Customization</li>
                                <li class="nav-item"><a class="nav-link" href="documentation/customization/styling.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Styling</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/customization/plugin.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Plugin</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#layouts-doc" asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="layouts-doc">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="table"></span></span><span class="nav-link-text">Layouts doc</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="layouts-doc">
                                <li class="collapsed-nav-item-title d-none">Layouts doc</li>
                                <li class="nav-item"><a class="nav-link" href="documentation/layouts/vertical-navbar.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical navbar</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/layouts/horizontal-navbar.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal navbar</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/layouts/combo-navbar.html" asd="index" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Combo navbar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="documentation/gulp.html" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon font-awesome"><span class="fa-brands fa-gulp fs-0 ms-1 me-1"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Gulp</span></span></div>
                        </a></div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="documentation/design-file.html" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="figma"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Design file</span></span></div>
                        </a></div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="changelog.html" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="git-merge"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Changelog</span></span></div>
                        </a></div><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="showcase.html" asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="monitor"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Showcase</span></span></div>
                        </a></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>