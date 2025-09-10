<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title></title>
  <meta
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    name="viewport" />
  <link
    rel="icon"
    href="<?= base_url() ?>assets/img/"
    type="image/x-icon" />


  <script src="<?= base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["<?= base_url() ?>assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>


  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/kaiadmin.min.css" />


  <link rel="stylesheet" href="<?= base_url() ?>assets/css/demo.css" />
</head>

<body>
  <div class="wrapper">

    <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">

        <div class="logo-header" data-background-color="dark">
          <a href="index.html" class="logo">
            <img
              src="<?= base_url() ?>assets/img"
              alt="navbar brand"
              class="navbar-brand"
              height="20" />
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>

      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">
            <li class="nav-item active">
              <a
                data-bs-toggle="collapse"
                href="#dashboard"
                class="collapsed"
                aria-expanded="false">
                <i class="fas fa-home"></i>
                <p>Admin Dashboard</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="dashboard">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="#">
                      <span class="sub-item">Product Manager Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sub-item">Order Manager Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sub-item">Delivery Manager Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Components</h4>
            </li>
            <li class="nav-item mt-4">
              <a data-bs-toggle="collapse" href="#product">
                <i class="fa fa-tasks"></i>
                <p>Product Management</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="product">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="#">
                      <span class="sub-item">Product List</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sub-item">Add Product</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mt-4">
              <a data-bs-toggle="collapse" href="#offer">
                <i class="fas fa-tag"></i>
                <p>Offers Management</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="offer">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="#">
                      <span class="sub-item">Offer List</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sub-item">Add Offer</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mt-4">
              <a data-bs-toggle="collapse" href="#subscription">
                <i class="fas fa-calendar-check"></i>
                <p>Subscription <br>Management</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="subscription">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="#">
                      <span class="sub-item">Subscriber List</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sub-item">Add Subscriptions</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mt-4">
              <a data-bs-toggle="collapse" href="#employee">
                <i class="fas fa-users"></i>
                <p>Employee Management</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="employee">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="#">
                      <span class="sub-item">Employee List</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sub-item">Add Employee</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mt-4">
              <a data-bs-toggle="collapse" href="#customer">
                <i class="fas fa-user"></i>
                <p>Customer Management</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="customer">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="<?= base_url() ?>admin/customer_list">
                      <span class="sub-item">Customer List</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url() ?>admin/add_customer">
                      <span class="sub-item">Add Customer</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mt-4">
              <a data-bs-toggle="collapse" href="#settings">
                <i class="fas fa-cog"></i>
                <p>Settings</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="settings">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="<?=base_url()?>user_side/contact_details">
                      <span class="sub-item">Contact Details</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sub-item">Add Contact Details</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mt-4">
              <a data-bs-toggle="collapse" href="#charts">
                <i class="fa fa-shopping-cart"></i>
                <p>Order Management</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="#">
                      <span class="sub-item">Order List</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <!-- <li class="nav-item">
              <a href="widgets.html">
                <i class="fas fa-desktop"></i>
                <p>Widgets</p>
                <span class="badge badge-success">4</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="../../documentation/index.html">
                <i class="fas fa-file"></i>
                <p>Documentation</p>
                <span class="badge badge-secondary">1</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>


    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">

          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="<?= base_url() ?>assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>

        </div>

        <nav
          class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
          <div class="container-fluid">
            <nav
              class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pe-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input
                  type="text"
                  placeholder="Search ..."
                  class="form-control" />
              </div>
            </nav>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
              <li
                class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                <a
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  href="#"
                  role="button"
                  aria-expanded="false"
                  aria-haspopup="true">
                  <i class="fa fa-search"></i>
                </a>
                <ul class="dropdown-menu dropdown-search animated fadeIn">
                  <form class="navbar-left navbar-form nav-search">
                    <div class="input-group">
                      <input
                        type="text"
                        placeholder="Search ..."
                        class="form-control" />
                    </div>
                  </form>
                </ul>
              </li>
              <li class="nav-item topbar-icon dropdown hidden-caret">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="notifDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <i class="fa fa-bell"></i>
                  <span class="notification">4</span>
                </a>
                <ul
                  class="dropdown-menu notif-box animated fadeIn"
                  aria-labelledby="notifDropdown">
                  <li>
                    <div class="dropdown-title">
                      You have 4 new notification
                    </div>
                  </li>
                  <li>
                    <!-- <div class="notif-scroll scrollbar-outer">
                      <div class="notif-center">
                        <a href="#">
                          <div class="notif-icon notif-primary">
                            <i class="fa fa-user-plus"></i>
                          </div>
                          <div class="notif-content">
                            <span class="block"> New user registered </span>
                            <span class="time">5 minutes ago</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="notif-icon notif-success">
                            <i class="fa fa-comment"></i>
                          </div>
                          <div class="notif-content">
                            <span class="block">
                              Rahmad commented on Admin
                            </span>
                            <span class="time">12 minutes ago</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="notif-img">
                            <img
                              src="<?= base_url() ?>assets/img/profile2.jpg"
                              alt="Img Profile" />
                          </div>
                          <div class="notif-content">
                            <span class="block">
                              Reza send messages to you
                            </span>
                            <span class="time">12 minutes ago</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="notif-icon notif-danger">
                            <i class="fa fa-heart"></i>
                          </div>
                          <div class="notif-content">
                            <span class="block"> Farrah liked Admin </span>
                            <span class="time">17 minutes ago</span>
                          </div>
                        </a>
                      </div>
                    </div> -->
                  </li>
                  <li>
                    <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item topbar-user dropdown hidden-caret">
                <a
                  class="dropdown-toggle profile-pic"
                  data-bs-toggle="dropdown"
                  href="#"
                  aria-expanded="false">
                  <div class="avatar-sm">
                    <img
                      src="<?= base_url() ?>assets/img"
                      alt="..."
                      class="avatar-img rounded-circle" />
                  </div>
                  <span class="profile-username">
                    <span class="op-7">Hi,</span>
                    <span class="fw-bold">Admin</span>
                  </span>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                  <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                      <div class="user-box">
                        <div class="avatar-lg">
                          <img
                            src="<?= base_url() ?>assets/img/"
                            alt="image profile"
                            class="avatar-img rounded" />
                        </div>
                        <div class="u-text">
                          <h4>Admin</h4>
                          <p class="text-muted">admin@example.com</p>
                          <a
                            href="profile.html"
                            class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">My Profile</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Account Setting</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Logout</a>
                    </li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </nav>

      </div>

      <!-- 
        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>admin_assets/css/main.css">
<style>
  body{
    margin: 0;
    padding: 0;
  }
</style>
</head>
<body>


  <div class="mobile-topbar d-lg-none">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
      <i class="fas fa-bars"></i>
    </button>
    <div class="dropdown">
      <a class="nav-link dropdown-toggle text-dark" href="#" id="adminDropdownMobile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-user-circle me-1"></i> Admin
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdownMobile">
        <li><a class="dropdown-item" href="<?= base_url() ?>admin/profile"><i class="fas fa-id-badge me-2"></i> Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-danger" href="<?= base_url() ?>admin/logout"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
      </ul>
    </div>
  </div>

  <div class="offcanvas offcanvas-start sidebar-offcanvas d-lg-none" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarOffcanvasLabel">
        <i class="fas fa-user-shield me-2"></i> Admin Panel
      </h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
      <div class="px-3 mb-3">
        <input id="menuSearchMobile" class="form-control form-control-sm" type="text" placeholder="Search menu...">
      </div>
      <ul class="nav flex-column px-3" id="sidebarMenuMobile">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/index">
            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#pagesSubmenuMobile" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pagesSubmenuMobile">
            <i class="fas fa-book-open me-2"></i> Pages
          </a>
          <div class="collapse ps-3" id="pagesSubmenuMobile">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/slider">
                  <i class="fas fa-sliders-h me-2"></i> Slider
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/footer_list">
                  <i class="fas fa-ruler-combined me-2"></i> Footer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/about">
                  <i class="fas fa-info-circle me-2"></i> About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/delivery_returns">
                  <i class="fas fa-file-signature me-2"></i>Policy
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#sectionsSubmenuMobile" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sectionsSubmenuMobile">
            <i class="fas fa-layer-group me-2"></i> Sections
          </a>
          <div class="collapse ps-3" id="sectionsSubmenuMobile">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/welcome_section">
                  <i class="fas fa-handshake me-2"></i>Welcome
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/services_section">
                  <i class="fas fa-concierge-bell me-2"></i>Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/choose_us_section">
                  <i class="fas fa-thumbs-up me-2"></i>Choose Us
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/products">
            <i class="fas fa-box-open me-2"></i> Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#userSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="userSubmenu">
            <i class="fas fa-user me-2"></i> Customer
          </a>
          <div class="collapse ps-3" id="userSubmenu">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/customer_list">
                  <i class="fas fa-users me-2"></i> All Customer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/subscriptions">
                  <i class="fas fa-envelope-open-text me-2"></i> Subscriptions
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#ordersSubmenuMobile" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="ordersSubmenuMobile">
            <i class="fas fa-shopping-cart me-2"></i> Orders
          </a>
          <div class="collapse ps-3" id="ordersSubmenuMobile">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=All">
                  <i class="fas fa-boxes me-2"></i>All Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=pending">
                  <i class="fas fa-hourglass-start me-2"></i>Pending
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=dispatched">
                  <i class="fas fa-shipping-fast me-2"></i>Dispatched
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=delivered">
                  <i class="fas fa-check-double me-2"></i>Delivered
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=cancled">
                  <i class="fas fa-ban me-2"></i>Cancelled
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=return">
                  <i class="fas fa-undo me-2"></i>Return
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>

 

  <nav class="sidebar d-none d-lg-flex flex-column">
    <a class="navbar-brand px-3 mb-3" href="<?= base_url() ?>admin/index">
      <i class="fas fa-user-shield me-2"></i> Admin Panel
    </a>
    <div class="px-3 mb-3">
      <input id="menuSearch" class="form-control form-control-sm" type="text" placeholder="Search menu...">
    </div>
    <div class="nav-items-scroll">
      <ul class="nav flex-column px-3" id="sidebarMenu">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/index">
            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#pagesSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pagesSubmenu">
            <i class="fas fa-book-open me-2"></i> Pages
          </a>
          <div class="collapse ps-3" id="pagesSubmenu">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/slider">
                  <i class="fas fa-sliders-h me-2"></i> Slider
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/footer_list">
                  <i class="fas fa-ruler-combined me-2"></i> Footer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/about">
                  <i class="fas fa-info-circle me-2"></i> About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/delivery_returns">
                  <i class="fas fa-file-signature me-2"></i>Policy
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#sectionsSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sectionsSubmenu">
            <i class="fas fa-layer-group me-2"></i> Sections
          </a>
          <div class="collapse ps-3" id="sectionsSubmenu">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/welcome_section">
                  <i class="fas fa-handshake me-2"></i>Welcome
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/services_section">
                  <i class="fas fa-concierge-bell me-2"></i>Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/choose_us_section">
                  <i class="fas fa-thumbs-up me-2"></i>Choose Us
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>admin/products">
            <i class="fas fa-box-open me-2"></i> Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#userSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="userSubmenu">
            <i class="fas fa-user me-2"></i> Customer
          </a>
          <div class="collapse ps-3" id="userSubmenu">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/customer_list">
                  <i class="fas fa-users me-2"></i> All Customer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/subscriptions">
                  <i class="fas fa-envelope-open-text me-2"></i> Subscriptions
                </a>
              </li>
            </ul>
          </div>
        </li>
          <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#ordersSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="ordersSubmenu">
            <i class="fas fa-shopping-cart me-2"></i> Orders
          </a>
          <div class="collapse ps-3" id="ordersSubmenu">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=All">
                  <i class="fas fa-boxes me-2"></i>All Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=pending">
                  <i class="fas fa-hourglass-start me-2"></i>Pending
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=dispatched">
                  <i class="fas fa-shipping-fast me-2"></i>Dispatched
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=delivered">
                  <i class="fas fa-check-double me-2"></i>Delivered
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=cancled">
                  <i class="fas fa-ban me-2"></i>Cancelled
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/orders?delivery_status=return">
                  <i class="fas fa-undo me-2"></i>Return
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="main-content">
    <div class="topbar d-none d-lg-flex shadow">
      <div class="dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user-circle me-1"></i> Admin
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
          <li><a class="dropdown-item" href="<?= base_url() ?>admin/profile"><i class="fas fa-id-badge me-2"></i> Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-danger" href="<?= base_url() ?>admins/admin_logout"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<script>
    document.addEventListener("DOMContentLoaded", function () {

      function setupSidebar(menuId, searchId) {
            const menuSearch = document.getElementById(searchId);
            const sidebarMenu = document.getElementById(menuId);

			if (menuSearch && sidebarMenu) {

              menuSearch.addEventListener("input", function () {
                    const query = this.value.toLowerCase();
                    const items = sidebarMenu.querySelectorAll(".nav-item");

					items.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        item.style.display = text.includes(query) ? "" : "none";
                    });
                });

                const currentUrl = window.location.href;
                const navLinks = sidebarMenu.querySelectorAll(".nav-link");

                navLinks.forEach(link => {
                    if (link.href === currentUrl) {
                        link.classList.add("active");

						const parentCollapse = link.closest(".collapse");
                        if (parentCollapse) {
                            new bootstrap.Collapse(parentCollapse, { toggle: true });
                        }
                    }
                });
            }
        }

		setupSidebar('sidebarMenu', 'menuSearch');
        setupSidebar('sidebarMenuMobile', 'menuSearchMobile');
    });
</script> -->