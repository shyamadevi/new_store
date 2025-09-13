<!DOCTYPE html>
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

/* Filters Section */
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

/* Products Grid/List */
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

/* Hover Animation */
.product-card:hover {
    transform: translateY(-10px) scale(1.03); /* card थोडं वर उचलेल आणि मोठं दिसेल */
    box-shadow:0 10px 20px rgba(0,0,0,0.2);
}

.product-card img {
    width:100%;
    height:180px;
    /* object-fit:cover; */
    border-radius: 50px 0 50px;
    margin-bottom:10px;
    transition: transform 0.4s ease; /* smooth animation */
}

.product-card:hover img {
    transform: scale(1.15); /* zoom in */
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

/* Quantity with + / - buttons */
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
  /* color:blue; */
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

/* List View Styling */
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
</style>
</head>
<body>
<div class="container">
    <h1>Our Products</h1>

    <!-- Filters & Sorting -->
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

                <!-- Product Image -->
                <img src="<?= base_url('user_assets/img/products/' . $product['image1']) ?>" 
                     alt="<?= htmlspecialchars($product['name']) ?>">

                <!-- Product Info -->
                <div class="product-info">
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <p class="price">₹<?= number_format($product['price'], 2) ?></p>
                    <p class="weight"><?= htmlspecialchars($product['weight']) ?></p>

                    <!-- Quantity Selector -->
                    <!-- <div class="quantity">
                        <button class="qty-btn minus">-</button>
                        <input type="number" value="1" min="1">
                        <button class="qty-btn plus">+</button>
                    </div> -->

                    <?php if (isset($_SESSION['users2_id'])) { ?>
						<!-- Add to Cart Button -->
						<a class="btn-add" href="<?= base_url('users/add_cart/' . $product['product_id']) ?>">Add to Cart</a>
					<?php }else{ ?>
						<a class="btn-add" data-bs-toggle="modal" data-bs-target="#authModal">Add to Cart</a>
					<?php } ?>

                    <!-- Show Subscription Button only if enabled -->
                    <?php if ($product['sub_option'] == 'yes' && isset($_SESSION['users2_id'])){ ?>
                        <a href="<?= base_url('subscription?product_id=' . $product['product_id']) ?>" 
                           class="btn btn-subscribe mt-2">
                           Subscribe
                        </a>
                    <?php }else{?>
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


// ---------------------- CATEGORY FILTER ----------------------
categoryFilter.addEventListener('change', () => {
    const value = categoryFilter.value;
    products.forEach(p => {
        p.style.display = (value === 'all' || p.dataset.category === value) ? 'block' : 'none';
    });
});
// ---------------------- GRID / LIST VIEW ----------------------
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
// ---------------------- SUBSCRIPTION BADGE ----------------------
products.forEach(p => {
    if (p.dataset.subscription === "yes") {
        const badge = document.createElement('span');
        badge.className = 'subscription-badge';
        badge.textContent = 'Subscribe';
        p.appendChild(badge);
    }
});


// ---------------------- SORTING FUNCTION ----------------------
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
        else if (criteria === 'popularity') {
            valA = parseInt(a.dataset.popularity);
            valB = parseInt(b.dataset.popularity);
        }

        if (order === 'low')  return valA - valB;
        if (order === 'high') return valB - valA;
        return 0;
    });

    productsGrid.innerHTML = '';
    sorted.forEach(p => productsGrid.appendChild(p));
}


// ---------------------- SORTING EVENTS ----------------------
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
</html>
