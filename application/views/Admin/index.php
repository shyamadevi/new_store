<!-- 

<link rel="stylesheet" href="<?= base_url() ?>admin_assets/css/dashbord.css">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<title>Dashboard</title>
<main class="main-content">
  <div class="container pb-2">
    <h2 class="h2 dashboard-title mb-4"> Admin Dashboard</h2>
    <div class="row g-4 mb-4">

	<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-sur">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Subscribers</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-suc">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Subscriptions</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-pr">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Products</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-pe">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Pending Orders</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-di">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Dispatch Orders</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-de">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Delivered Orders</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-ca">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Cancle Orders</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-ret">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Return Orders</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-rec">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Recall Orders</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
        <div class="card p-3 bg-us">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5>Customers</h5>
              <h4><?= rand(1, 100) ?></h4>
            </div>
            <div class="card-icon"></div>
          </div>
        </div>
      </div>

    </div>

    <h4 class="mb-3 mt-5 fw-bold text-secondary">⚡ Quick Actions</h4>

    <div class="row g-3">
      <div class="col-sm-6">
        <a href="<?= base_url() ?>admin/subscriptions">
          <button class="btn btn-su quick-btn"><i class="fa fa-dollar"></i> Subscribers</button>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="<?= base_url() ?>admin/orders?delivery_status=All">
        <button class="btn btn-or quick-btn"><i class="fa fa-shopping-cart"></i> Orders</button>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="<?= base_url() ?>admin/products">
          <button class="btn btn-pr quick-btn"><i class="fa fa-box-open"></i> Products</button>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="<?= base_url() ?>admin/delivery_returns">
          <button class="btn btn-po quick-btn"><i class="fa fa-file-signature"></i> Policies</button>
        </a>
      </div>
    </div>
  </div>
</main>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Admin Dashboard</h3>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Visitors</p>
                          <h4 class="card-title">0</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-user-check"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Subscribers</p>
                          <h4 class="card-title">0</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-luggage-cart"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Sales</p>
                          <h4 class="card-title">$ 0</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small"
                        >
                          <i class="far fa-check-circle"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Order</p>
                          <h4 class="card-title">0</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
 -->


<div class="container">
    <div class="page-inner">
        <div
            class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Admin Dashboard</h3>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Visitors</p>
                                    <h4 class="card-title">0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-user-check"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Subscribers</p>
                                    <h4 class="card-title">0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-luggage-cart"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Sales</p>
                                    <h4 class="card-title">$ 0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-secondary bubble-shadow-small">
                                    <i class="far fa-check-circle"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Order</p>
                                    <h4 class="card-title">0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>