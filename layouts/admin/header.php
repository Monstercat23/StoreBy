<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= isset($title) ? $title : '' ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.css' ?>">
    <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/css/shared/style.css' ?>">
    <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/css/demo_1/style.css' ?>">
    <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/css/admin.css' ?>">
    <link rel="stylesheet" href="<?= BASE_URL . '/public/dist/css/app.min.css' ?>">

    <link rel="shortcut icon" href="<?= BASE_URL . '/layouts/admin/assets/images/favicon.ico' ?>" />
</head>

<body class="header-fixed">
    <!-- NAV BAR  -->
    <nav class="t-header">
        <div class="t-header-brand-wrapper px-0">
            <h2 class="mx-auto">Dashboard</h2>
        </div>
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                    <i class="mdi mdi-menu"></i>
                </button>
                <ul class="nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= url('admin/account/logout.php') ?>" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-apps mdi-1x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                            <div class="dropdown-body border-top pt-0">
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                                    <a href="<?= url('admin/account/logout.php') ?>">Đăng xuất</a>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-body">
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                    <img class="profile-img img-lg rounded-circle" src="<?= BASE_URL . Auth::user()->avatar ?>" alt="profile image">
                </div>
                <div class="info-wrapper">
                    <p class="user-name"><?= Auth::user()->name ?></p>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">MAIN</li>
                <li>
                    <a href="<?= url('admin/dashboard/index.php') ?>">
                        <span class="link-title">Dashboard</span>
                        <i class="mdi mdi-gauge link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Sản phẩm</span>
                        <i class="mdi mdi-flask link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="sample-pages">
                        <li>
                            <a href="<?= url('admin/category/index.php') ?>">Loại sản phẩm</a>
                        </li>
                        <li>
                            <a href="<?= url('admin/product/index.php') ?>">Sản phẩm</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?= url('admin/order/index.php') ?>">
                        <span class="link-title">Đơn hàng</span>
                        <i class="mdi mdi-cart link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?= url('admin/customer/index.php') ?>">
                        <span class="link-title">Khách hàng</span>
                        <i class="mdi mdi-account-box link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#sample-pages-x" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Báo cáo</span>
                        <i class="mdi mdi-flask link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="sample-pages-x">
                        <li>
                            <a href="<?= url('admin/report/salesReport.php') ?>">Báo cáo doanh thu</a>
                        </li>
                        <!-- <li>
                            <a href="<?= url('admin/report/inventoryReport.php') ?>">Báo cáo tồn kho</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="<?= url('admin/blog/index.php') ?>">
                        <span class="link-title">Tin tức</span>
                        <i class="mdi mdi-book-open link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?= url('admin/contact/index.php') ?>">
                        <span class="link-title">Liên hệ</span>
                        <i class="mdi mdi-contact-mail link-icon"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- CONTENT  -->
        <div class="page-content-wrapper">
