<?php
require_once "lib/database.php";
$result = Database::select("profile_setting", "*", "", "");
?>
<nav class="navbar navbar-top navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">
        <!-- logo -->
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.php">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center"><img src="uploads/profile/<?= $result[0]['image'] ?>" alt="<?= $result[0]['name'] ?>" width="30" />
                        <p class="logo-text ms-2 d-none d-sm-block"><?= $result[0]['name'] ?></p>
                    </div>
                </div>
            </a>
        </div>
        <!-- icons -->
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="index.php?page_name=chat" role="button">
                    <i class="text-primary fa-brands fa-facebook-messenger" style="font-size: 30px;"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>