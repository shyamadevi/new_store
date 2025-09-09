<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>admin_assets/css/main.css">
<style>
  body{
    margin: 0;
    padding: 0;
  }
</style>
</head>
<body>
  <!-- mobile screen -->

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

  <!-- Full screen -->

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
</script>
