<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shop - Product Listing</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
body {
    font-family: 'Poppins', sans-serif;
    margin:0;
    padding:0;
    background:#f4f4f4;
}
.container {
    max-width: 1200px;
    margin:auto;
    padding:20px;
}
h1 {
    text-align:center;
    margin-bottom:30px;
    color:#333;
}


.filters {
    display:flex;
    flex-wrap:wrap;
    justify-content:space-between;
    background:#fff;
    padding:15px 20px;
    margin-top:150px;
    border-radius:10px;
    margin-bottom:30px;
    gap:15px;
}
.filters select {
    padding:8px 12px;
    border-radius:5px;
    border:1px solid #ccc;
    min-width:150px;
}
.view-toggle {
    display:flex;
    gap:10px;
}
.view-toggle button {
    background:#eee;
    border:none;
    padding:8px 12px;
    border-radius:5px;
    cursor:pointer;
}
.view-toggle button.active {
    background:#3498db;
    color:#fff;
}


.products {
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
    gap:20px;
}
.products.list-view {
    display:block;
}
.product-card {
    background:#fff;
    border-radius:50px 10px 50px 10px ;
    padding:15px;
    position:relative;
    text-align:center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow:hidden;
}


.product-card:hover {
    transform: translateY(-10px) scale(1.03); 
    box-shadow:0 10px 20px rgba(0,0,0,0.2);
}

.product-card img {
    width:100%;
    height:180px;
    /* object-fit:cover; */
    border-radius: 50px 0 50px;
    margin-bottom:10px;
    transition: transform 0.4s ease; 
}

.product-card:hover img {
    transform: scale(1.15); 
}

.product-card h3 {
    margin:5px 0;
    font-size:18px;
    color:#333;
}
.product-card p.price {
    color:#27ae60;
    font-weight:600;
    margin:5px 0 10px 0;
    font-size:16px;
}
.product-card p.weight {
    font-size:14px;
    color:#555;
    margin-bottom:10px;
}


.quantity {
    display:flex;
    justify-content:center;
    align-items:center;
    gap:10px;
    margin-bottom:10px;
}
.quantity input {
    width:50px;
    text-align:center;
    padding:5px;
    border-radius:5px;
    border:1px solid #ccc;
}
.qty-btn {
    background:#eee;
    border:none;
    padding:5px 10px;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;
    font-weight:600;
    transition:0.2s;
}
.qty-btn:hover {
    background:#ccc;
}

.btn-add {
    background:green;
    color:#fff;
    border:none;
    padding:8px 12px;
    border-radius:5px;
    cursor:pointer;
    width:100% !important;
    transition:0.2s;
}
.btn-add:hover {

  font-weight: bold;
}
.subscription-badge {
    position:absolute;
    top:10px;
    left:10px;
    background:#e67e22;
    color:#fff;
    padding:5px 8px;
    border-radius:5px;
    font-size:12px;
    font-weight:500;
}


.products.list-view .product-card {
    display:flex;
    text-align:left;
    height:120px;
    align-items:center;
    padding:10px;
    gap:15px;
}
.products.list-view .product-card img {
    width:120px;
    height:100%;
    border-radius:10px;
    margin-bottom:0;
}
.products.list-view .product-info {
    flex:1;
}

@media(max-width:768px){
    .filters { flex-direction:column; align-items:flex-start; }
    .products.list-view .product-card { flex-direction:column; height:auto; }
    .products.list-view .product-card img { width:100%; height:180px; }
}

@media(max-width:768px){
   #weightFilter,
   #priceFilter,
   #popularityFilter,
   .view-toggle {
      display: none;
   }

   #categoryFilter {
      width: 100%;  
   }
}

</style>
</head>
<body>
<div class="container">
    <h1>Our Products</h1>


    <div class="filters">
       <select id="categoryFilter">
           <option value="all">All Products</option>
           <option value="snacks">Snacks</option>
           <option value="beverages">Beverages</option>
           <option value="fruits">Fruits</option>
           <option value="dairy">Dairy / Milk</option>
       </select>
       <select id="weightFilter">
           <option value="all">Sort by Weight/Unit</option>
           <option value="low">Low to High</option>
           <option value="high">High to Low</option>
       </select>
       <select id="priceFilter">
           <option value="all">Sort by Price</option>
           <option value="low">Low to High</option>
           <option value="high">High to Low</option>
       </select>
       <select id="popularityFilter">
           <option value="all">Sort by Popularity</option>
           <option value="high">Most Popular</option>
           <option value="low">Least Popular</option>
       </select>
       <div class="view-toggle">
           <button id="gridView" class="active"><i class="fas fa-th"></i></button>
           <button id="listView"><i class="fas fa-list"></i></button>
       </div>
    </div>

 <div class="products" id="productsGrid">
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <div class="product-card" 
                data-category="<?= htmlspecialchars($product['category_id']) ?>" 
                data-price="<?= htmlspecialchars($product['price']) ?>" 
                data-weight="<?= htmlspecialchars($product['weight']) ?>" 
                data-subscription="<?= htmlspecialchars($product['sub_option']) ?>">

                
                <img src="<?= base_url('user_assets/img/products/' . $product['image1']) ?>" 
                     alt="<?= htmlspecialchars($product['name']) ?>">

                <div class="product-info">
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <p class="price">₹<?= number_format($product['price'], 2) ?></p>
                    <p class="weight"><?= htmlspecialchars($product['weight']) ?></p>

                  

                    <?php if (isset($_SESSION['users2_id'])) { ?>
						
						<a class="btn-add" href="<?= base_url('users/add_cart/' . $product['product_id']) ?>">Add to Cart</a>
					<?php } else { ?>
						<a class="btn-add" data-bs-toggle="modal" data-bs-target="#authModal">Add to Cart</a>
					<?php } ?>

                    
                    <?php if ($product['sub_option'] == 'yes' && isset($_SESSION['users2_id'])) { ?>
                        <a href="<?= base_url('subscription?product_id=' . $product['product_id']) ?>" 
                           class="btn btn-subscribe mt-2">
                           Subscribe
                        </a>
                    <?php } else { ?>
						<button class="btn btn-subscribe mt-2" data-bs-toggle="modal" data-bs-target="#authModal">Subscribe</button>
					<?php } ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No products available.</p>
    <?php endif; ?>
</div>


    </div>



<script>
const categoryFilter   = document.getElementById('categoryFilter');
const weightFilter     = document.getElementById('weightFilter');
const priceFilter      = document.getElementById('priceFilter');
const popularityFilter = document.getElementById('popularityFilter');

const productsGrid = document.getElementById('productsGrid');
const products     = Array.from(productsGrid.children);

const gridViewBtn = document.getElementById('gridView');
const listViewBtn = document.getElementById('listView');



categoryFilter.addEventListener('change', () => {
    const value = categoryFilter.value;
    products.forEach(p => {
        p.style.display = (value === 'all' || p.dataset.category === value) ? 'block' : 'none';
    });
});

gridViewBtn.addEventListener('click', () => {
    productsGrid.classList.remove('list-view');
    gridViewBtn.classList.add('active');
    listViewBtn.classList.remove('active');
});

listViewBtn.addEventListener('click', () => {
    productsGrid.classList.add('list-view');
    listViewBtn.classList.add('active');
    gridViewBtn.classList.remove('active');
});

products.forEach(p => {
    if (p.dataset.subscription === "yes") {
        const badge = document.createElement('span');
        badge.className = 'subscription-badge';
        badge.textContent = 'Subscribe';
        p.appendChild(badge);
    }
});


function sortProducts(criteria, order) {
    let sorted = [...products];

    sorted.sort((a, b) => {
        let valA, valB;

        if (criteria === 'price') {
            valA = parseFloat(a.dataset.price);
            valB = parseFloat(b.dataset.price);
        } 
        else if (criteria === 'weight') {
            valA = parseFloat(a.dataset.weight);
            valB = parseFloat(b.dataset.weight);
        } 
        

        if (order === 'low')  return valA - valB;
        if (order === 'high') return valB - valA;
        return 0;
    });

    productsGrid.innerHTML = '';
    sorted.forEach(p => productsGrid.appendChild(p));
}



weightFilter.addEventListener('change', () => {
    const val = weightFilter.value;
    if (val !== 'all') sortProducts('weight', val);
});

priceFilter.addEventListener('change', () => {
    const val = priceFilter.value;
    if (val !== 'all') sortProducts('price', val);
});

popularityFilter.addEventListener('change', () => {
    const val = popularityFilter.value;
    if (val !== 'all') sortProducts('popularity', val);
});
</script>

</body>
</html> -->

<style>
    .homepage-bg-1 {
        background-image: url('<?= base_url() ?>assetss/img/mango_slider.jpg');
    }

    .homepage-bg-2 {
        background-image: url('<?= base_url() ?>assetss/img/pai_slider.jpg');
    }

    .homepage-bg-3 {
        background-image: url('<?= base_url() ?>assetss/img/apple_slider.jpg');
    }
</style>
<style>
    :root {
        --primary-color: #4e944f;
        --secondary-color: #b4e197;
        --accent-color: #e9efec;
        --text-color: #333;
        --shadow-color: rgba(78, 148, 79, 0.2);
    }

    .product-card {
        background: white;
        border-radius: 20px 5px 20px 5px;
        overflow: hidden;
        transition: all 0.4s ease;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        position: relative;
        height: 100%;
        clip-path: polygon(0 0, 100% 0, 100% 93%, 93% 100%, 0 100%, 0% 50%);
    }

    .product-card::before {
        content: '';
        position: absolute;
        top: -20px;
        right: -20px;
        width: 60px;
        height: 60px;
        background: var(--primary-color);
        border-radius: 50%;
        z-index: 1;
        opacity: 0.1;
        transition: all 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-10px) rotate(1deg);
        box-shadow: 0 15px 30px var(--shadow-color);
        clip-path: polygon(0 0, 100% 0, 100% 90%, 90% 100%, 0 100%, 0% 50%);
    }

    .product-card:hover::before {
        opacity: 0.3;
        transform: scale(1.2);
    }

    .product-image {
        position: relative;
        overflow: hidden;
        height: 220px;
        background: var(--accent-color);
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .product-card:hover .product-image img {
        transform: scale(1.1);
    }

    .product-badge {
        position: absolute;
        top: 15px;
        left: 0;
        background: var(--primary-color);
        color: white;
        padding: 5px 15px;
        font-size: 12px;
        font-weight: 600;
        clip-path: polygon(0 0, 100% 0, 90% 100%, 0% 100%);
        z-index: 2;
    }

    .product-content {
        padding: 20px;
    }

    .product-title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--text-color);
        transition: color 0.3s ease;
    }

    .product-card:hover .product-title {
        color: var(--primary-color);
    }

    .product-price {
        font-size: 22px;
        font-weight: 800;
        color: var(--primary-color);
        margin-bottom: 15px;
    }

    .price-unit {
        font-size: 14px;
        font-weight: 500;
        color: #777;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.4s ease;
    }

    .product-card:hover .action-buttons {
        opacity: 1;
        transform: translateY(0);
    }

    .cart-btn,
    .subscribe-btn {
        flex: 1;
        padding: 10px 15px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .cart-btn {
        background: var(--primary-color);
        color: white;
    }

    .subscribe-btn {
        background: var(--secondary-color);
        color: var(--text-color);
    }

    .cart-btn:hover {
        background: #3d7a3e;
        transform: translateY(-2px);
    }

    .subscribe-btn:hover {
        background: #a2d182;
        transform: translateY(-2px);
    }

    .auth-required {
        background: #6c757d;
        color: white;
    }

    .auth-required:hover {
        background: #5a6268;
    }

    /* Animation for cards when they appear */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .product-card {
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
    }

    .product-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .product-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .product-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .product-card:nth-child(4) {
        animation-delay: 0.4s;
    }

    .product-card:nth-child(5) {
        animation-delay: 0.5s;
    }

    .product-card:nth-child(6) {
        animation-delay: 0.6s;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .product-card {
            margin-bottom: 25px;
        }

        .action-buttons {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>




<div class="homepage-slider">

    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Fresh & Organic</p>
                            <h1>Delicious Seasonal Fruits</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Fruit Collection</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-homepage-slider homepage-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Fresh Everyday</p>
                            <h1>100% Organic Collection</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Visit Shop</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-homepage-slider homepage-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-right">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Mega Sale Going On!</p>
                            <h1>Get December Discount</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Visit Shop</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="list-section pt-80 pb-80">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>When order over $75</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3>24/7 Support</h3>
                        <p>Get support all day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-box d-flex justify-content-start align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="content">
                        <h3>Refund</h3>
                        <p>Get refund within 3 days!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>Freshness Delivered, Happiness Guaranteed.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <div class="product-badge">Fresh</div>
                                <img src="<?= base_url('user_assets/img/products/' . $product['image1']) ?>" alt="Product image">
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><?= htmlspecialchars($product['name']) ?></h3>
                                <p class="product-price">₹<?= number_format($product['price'], 2) ?> <span class="price-unit"><?= htmlspecialchars($product['weight']) ?></span></p>
                                <div class="action-buttons">
                                    <?php if (isset($_SESSION['users2_id'])) { ?>
                                        <a href="<?= base_url('users/add_cart/' . $product['product_id']) ?>" class="auth-required cart-btn" data-bs-toggle="modal" data-bs-target="#authModal"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                    <?php } else { ?>
                                        <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                    <?php } ?>
                                    <?php if ($product['sub_option'] == 'yes' && isset($_SESSION['users2_id'])) { ?>
                                        <a href="<?= base_url('subscription?product_id=' . $product['product_id']) ?>" class="auth-required subscribe-btn" data-bs-toggle="modal" data-bs-target="#authModal"><i class="fas fa-sync-alt"></i> Subscribe</a>
                                    <?php } else { ?>
                                        <a href="#" class="auth-required subscribe-btn" data-bs-toggle="modal" data-bs-target="#authModal"><i class="fas fa-sync-alt"></i> Subscribe</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php else: ?>
                <p>No products available.</p>
            <?php endif; ?>


        </div>
    </div>
</div>



<section class="cart-banner pt-100 pb-100">
    <div class="container">
        <div class="row clearfix">
            <div class="image-column col-lg-6">
                <div class="image">
                    <div class="price-box">
                        <div class="inner-price">
                            <span class="price">
                                <strong>30%</strong> <br> off per kg
                            </span>
                        </div>
                    </div>
                    <img src="assets/img/a.jpg" alt="">
                </div>
            </div>
            <div class="content-column col-lg-6">
                <h3><span class="orange-text">Deal</span> of the month</h3>
                <h4>Hikan Strwaberry</h4>
                <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit voluptatem accusant</div>
                <div class="time-counter">
                    <div class="time-countdown clearfix" data-countdown="2020/2/01">
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Days</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Hours</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Mins</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Secs</div>
                        </div>
                    </div>
                </div>
                <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const buttons = document.querySelectorAll('.cart-btn, .subscribe-btn');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                if (this.classList.contains('auth-required')) {
                    e.preventDefault();

                    return;
                }


                const ripple = document.createElement('span');
                ripple.classList.add('ripple-effect');
                this.appendChild(ripple);

                const x = e.clientX - this.getBoundingClientRect().left;
                const y = e.clientY - this.getBoundingClientRect().top;

                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    });
</script>