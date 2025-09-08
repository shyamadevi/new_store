<!-- Hero Section -->
  <section class="index-slider">
    <div class="index-slider-content">
      <h1>Fresh Groceries & Daily Milk</h1>
      <p>Delivered straight to your doorstep, every day!</p>
      <a href="#products" class="btn btn-grocery btn-lg mt-3">Shop Now</a>
    </div>
  </section>

  <!-- Products Section -->
  <section class="container my-5" id="products">
    <h2 class="text-center mb-4">Popular Products</h2>
    <div class="row g-4">
      <?php for ($i = 1; $i <= 9; $i++) { ?>
        <div class="col-md-4">
          <div class="card product-card">
            <img src="<?=base_url()?>user_assets/img/products/<?= $i ?>.jpg" class="card-img-top" alt="Product">
            <div class="card-body text-center">
              <h5 class="card-title">Product <?= $i ?></h5>
              <p class="card-text">₹<?= rand(50, 200) ?></p>
              <a href="#" class="btn btn-grocery">Add to Cart</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
