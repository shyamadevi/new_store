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
    width:100%;
    transition:0.2s;
}
.btn-add:hover {
  color:blue;
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

    <!-- Products Grid -->
    <div class="products" id="productsGrid">
        <!-- Snacks -->
        <div class="product-card" data-category="snacks" data-popularity="5" data-price="2.5" data-weight="100" data-subscription="yes">
            <img src="https://cdn.shopaccino.com/suvidha-supermart/products/lays-classic-salted-117686700861469_l.jpg?v=592" alt="Chips">
            <div class="product-info">
                <h3>Potato Chips</h3>
                <p class="price">₹210</p>
                <p class="weight">100g</p>
                
                <button class="btn-add">Add to Cart</button>
            </div>
        </div>

        <div class="product-card" data-category="snacks" data-popularity="7" data-price="4.5" data-weight="200" data-subscription="no">
            <img src="https://t4.ftcdn.net/jpg/00/46/34/51/360_F_46345101_Q1y4CNprygAy1qnMcWGCvGWukwk4OCJe.jpg" alt="Nuts">
            <div class="product-info">
                <h3>Mixed Nuts</h3>
                <p class="price">₹378</p>
                <p class="weight">200g</p>
                
                <button class="btn-add">Add to Cart</button>
            </div>
        </div>

        <!-- Beverages -->
        <div class="product-card" data-category="beverages" data-popularity="10" data-price="3" data-weight="500" data-subscription="no">
            <img src="https://m.media-amazon.com/images/I/71zHrg0MPTL.jpg" alt="Juice">
            <div class="product-info">
                <h3>Orange Juice</h3>
                <p class="price">₹252</p>
                <p class="weight">500ml</p>
                
                <button class="btn-add">Add to Cart</button>
            </div>
        </div>

        <!-- Fruits -->
        <div class="product-card" data-category="fruits" data-popularity="8" data-price="1.2" data-weight="150" data-subscription="yes">
            <img src="https://media.istockphoto.com/id/622795204/photo/red-delicious-apples.jpg?s=612x612&w=0&k=20&c=-uu4u0m62t1nz3kcOVkallOgSWoOj_KtcVTCIlyfpXY=" alt="Apple">
            <div class="product-info">
                <h3>Red Apple</h3>
                <p class="price">₹101</p>
                <p class="weight">150g</p>
                
                <button class="btn-add">Add to Cart</button>
            </div>
        </div>

        <!-- Dairy -->
        <div class="product-card" data-category="dairy" data-popularity="9" data-price="2.0" data-weight="500" data-subscription="yes">
            <img src="https://www.akijfairvalue.com/_next/image?url=https%3A%2F%2Fneoscms.blob.core.windows.net%2Fmedia%2F1752544966986_fresh_powder_milk_500gm.jpg&w=3840&q=75&dpl=dpl_4WUb9K45gcZnvpGJwncVTg1mD2fx" alt="Milk">
            <div class="product-info">
                <h3>Fresh Milk</h3>
                <p class="price">₹168</p>
                <p class="weight">500ml</p>
                
                <button class="btn-add">Add to Cart</button>
            </div>
        </div>

        <div class="product-card" data-category="dairy" data-popularity="7" data-price="3.5" data-weight="200" data-subscription="no">
            <img src="https://www.stonyfield.com/wp-content/uploads/2023/03/YoBaby-Lifestyle-Images-38.png" alt="Yogurt">
            <div class="product-info">
                <h3>Natural Yogurt</h3>
                <p class="price">₹294</p>
                <p class="weight">200g</p>
                
                <button class="btn-add">Add to Cart</button>
            </div>
        </div>

        <div class="product-card" data-category="dairy" data-popularity="8" data-price="4.0" data-weight="150" data-subscription="yes">
            <img src="https://www.bbassets.com/media/uploads/p/l/40329477_2-nutoras-cheddar-processed-cheese-slices.jpg" alt="Cheese">
            <div class="product-info">
                <h3>Cheddar Cheese</h3>
                <p class="price">₹336</p>
                <p class="weight">150g</p>
                
                <button class="btn-add">Add to Cart</button>
            </div>
        </div>
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
