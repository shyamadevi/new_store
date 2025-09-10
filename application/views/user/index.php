 <style>
     :root {
         --primary: #28a745;
         --primary-dark: #218838;
         --dark: #333;
         --gray: #6c757d;
         --danger: #dc3545;
     }

     .category-slider {
         position: relative;
         overflow: hidden;
         margin: 2rem 0;
     }

     .slider-wrapper {
         overflow: hidden;
         width: 100%;
         background: #f8f9fa;
         padding: 15px 0;
         border-radius: 12px;
     }

     .slider-container {
         display: flex;
         gap: 20px;
         animation: slide 30s linear infinite;
         width: max-content;
     }

     @keyframes slide {
         0% {
             transform: translateX(0);
         }

         100% {
             transform: translateX(-50%);
         }
     }

     .slider-container:hover {
         animation-play-state: paused;
     }

     .category-card {
         flex: 0 0 220px;
         background: white;
         border-radius: 15px;
         overflow: hidden;
         box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
         transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
         position: relative;
         cursor: pointer;
     }

     .category-card:hover {
         transform: translateY(-5px);
         box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
     }

     .category-card-link {
         display: block;
         color: inherit;
         text-decoration: none;
     }

     .category-image-container {
         position: relative;
         width: 100%;
         height: 100px;
         overflow: hidden;
         border-radius: 8px;
     }

     .category-card img {
         width: 100%;
         height: 100%;
         object-fit: cover;
         display: block;
         transition: transform 0.4s ease;
     }

     .category-card:hover img {
         transform: scale(1.05);
     }

     .overlay-gradient {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: linear-gradient(to bottom,
                 rgba(0, 0, 0, 0.1) 0%,
                 rgba(0, 0, 0, 0.2) 20%,
                 rgba(0, 0, 0, 0.4) 40%,
                 rgba(0, 0, 0, 0.6) 60%,
                 rgba(0, 0, 0, 0.8) 80%,
                 rgba(0, 0, 0, 1) 100%);
         pointer-events: none;
         border-radius: 12px;
     }

     .card-content {
         position: absolute;
         bottom: 10px;
         left: 0;
         width: 100%;
         text-align: center;
         color: #fff;
         z-index: 2;
     }

     .card-content h3 {
         margin: 0;
         font-size: 1.1rem;
         font-weight: bold;
     }

     .card-content p {
         margin: 0;
         font-size: 0.9rem;
     }

     @media (max-width: 768px) {
         .slider-container {
             animation: slide-mobile 40s linear infinite;
         }

         @keyframes slide-mobile {
             0% {
                 transform: translateX(0);
             }

             100% {
                 transform: translateX(-100%);
             }
         }

         .category-card {
             flex: 0 0 180px;
         }
     }

     .fruits-section {
         margin-top: 150px;
         padding: 2rem 0;
         background: linear-gradient(to bottom, #ffffff, #f1f8e9);
     }

     .section-title {
         position: relative;
         padding-bottom: 0.5rem;
         font-weight: 700;
         color: var(--dark);
     }

     .section-title::after {
         content: '';
         position: absolute;
         bottom: 0;
         left: 0;
         width: 50px;
         height: 3px;
         background: var(--primary);
         border-radius: 10px;
     }

     .view-more-btn {
         background-color: transparent;
         color: var(--primary);
         border: 2px solid var(--primary);
         font-weight: 600;
         transition: all 0.3s;
         padding: 0.5rem 1.25rem;
         border-radius: 30px;
     }

     .view-more-btn:hover {
         background-color: var(--primary);
         color: white;
         transform: translateY(-2px);
         box-shadow: 0 4px 8px rgba(46, 204, 113, 0.3);
     }

     .fruits-card {
         border: none;
         border-radius: 15px;
         overflow: hidden;
         transition: all 0.3s ease;
         height: 100%;
         background-color: white;
         box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
         position: relative;
     }

     .fruits-card:hover {
         transform: translateY(-10px);
         box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
     }

     .card-img-top {
         height: 160px;
         object-fit: cover;
         border-radius: 12px 12px 0 0;
         transition: transform 0.3s;
     }

     .fruits-card:hover .card-img-top {
         transform: scale(1.05);
     }

     .heart-icon {
         position: absolute;
         top: 15px;
         right: 15px;
         font-size: 1.3rem;
         color: #ddd;
         cursor: pointer;
         transition: all 0.2s;
         z-index: 10;
         background: rgba(255, 255, 255, 0.8);
         border-radius: 50%;
         width: 32px;
         height: 32px;
         display: flex;
         align-items: center;
         justify-content: center;
     }

     .heart-icon:hover {
         color: #e74c3c;
     }

     .heart-icon.active {
         color: #e74c3c;
     }

     .card-title {
         font-size: 1rem;
         font-weight: 600;
         margin-bottom: 0.75rem;
         color: var(--dark);
         height: 45px;
         overflow: hidden;
         display: -webkit-box;
         -webkit-line-clamp: 2;
         -webkit-box-orient: vertical;
     }

     .current-price {
         font-weight: 700;
         font-size: 1.15rem;
         color: var(--primary);
     }

     .original-price {
         font-size: 0.9rem;
         color: var(--gray);
     }

     .discount {
         color: var(--danger);
         font-weight: 600;
         font-size: 0.9rem;
     }

     .add-to-cart-btn {
         background-color: var(--primary);
         color: white;
         border: none;
         border-radius: 30px;
         font-weight: 600;
         padding: 0.5rem;
         transition: all 0.3s;
         width: 100%;
         margin-top: 0.5rem;
     }

     .add-to-cart-btn:hover {
         background-color: var(--primary-dark);
         transform: translateY(-2px);
         box-shadow: 0 4px 8px rgba(46, 204, 113, 0.3);
     }

     .add-to-cart-btn:active {
         transform: translateY(0);
     }

     .badge-off {
         position: absolute;
         top: 18px;
         left: 20px;
         background-color: var(--danger);
         color: white;
         font-weight: 600;
         padding: 0.25rem 0.5rem;
         border-radius: 4px;
         font-size: 0.8rem;
         z-index: 5;
     }

     @media (max-width: 768px) {
         .card-img-top {
             height: 140px;
         }

         .section-title {
             font-size: 1.25rem;
         }
     }

     .fruit-weight {
         font-size: 0.85rem;
         color: var(--gray);
         margin-top: -0.5rem;
         margin-bottom: 0.5rem;
     }

     .auth-modal .modal-content {
         border-radius: 15px;
         border: none;
     }

     .auth-modal .modal-header {
         border-bottom: none;
         justify-content: center;
         position: relative;
     }

     .auth-modal .btn-close {
         position: absolute;
         right: 20px;
         top: 20px;
     }

     .card,
     .badge-off,
     .rounded {
         border-top-left-radius: 30px !important;
         border-top-right-radius: 5px !important;
         border-bottom-left-radius: 5px !important;
         border-bottom-right-radius: 30px !important;
     }
 </style>


 <section class="fruits-section" id="fresh_vegetables">
     <div class="container mt-5">
         <div class="row align-items-center mb-4">
             <div class="col-12 d-flex justify-content-between align-items-center">
                 <h2 class="section-title">Fresh Vegetables</h2>
                 <a href="#" class="btn view-more-btn">
                     View More <i class="fa-solid fa-arrow-right"></i>
                 </a>
             </div>
         </div>

         <div class="row g-4">

             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">15% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Organic Broccoli">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Broccoli</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹85</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹100</del></span>
                                 <span class="discount">15% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <?php if ($this->session->userdata('users2_id')) { ?>
                                     <a href="<?= base_url('user/cart/add/1') ?>">
                                         <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                                     </a>
                                 <?php } else { ?>
                                     <a href="#" data-bs-toggle="modal" data-bs-target="#authModal2">
                                         <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                                     </a>
                                 <?php } ?>
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">20% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1573246123716-6b1782bfc499" class="card-img-top rounded mb-3" alt="Organic Carrots">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Carrots</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹60</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹75</del></span>
                                 <span class="discount">20% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">10% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Bell Peppers">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Colorful Bell Peppers</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹135</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹150</del></span>
                                 <span class="discount">10% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">12% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655" class="card-img-top rounded mb-3" alt="Spinach">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Spinach Leaves</h6>
                             <div class="fruit-weight">approx 250g</div>
                             <p class="mb-1 current-price">₹45</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹51</del></span>
                                 <span class="discount">12% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="fruits-section" id="fresh_vegetables">
     <div class="container mt-5">
         <div class="row align-items-center mb-4">
             <div class="col-12 d-flex justify-content-between align-items-center">
                 <h2 class="section-title">Fresh Vegetables</h2>
                 <a href="#" class="btn view-more-btn">
                     View More <i class="fa-solid fa-arrow-right"></i>
                 </a>
             </div>
         </div>

         <div class="row g-4">

             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">15% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Organic Broccoli">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Broccoli</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹85</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹100</del></span>
                                 <span class="discount">15% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">20% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1573246123716-6b1782bfc499" class="card-img-top rounded mb-3" alt="Organic Carrots">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Carrots</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹60</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹75</del></span>
                                 <span class="discount">20% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">10% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Bell Peppers">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Colorful Bell Peppers</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹135</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹150</del></span>
                                 <span class="discount">10% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">12% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655" class="card-img-top rounded mb-3" alt="Spinach">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Spinach Leaves</h6>
                             <div class="fruit-weight">approx 250g</div>
                             <p class="mb-1 current-price">₹45</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹51</del></span>
                                 <span class="discount">12% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <section class="fruits-section" id="fresh_vegetables">
     <div class="container mt-5">
         <div class="row align-items-center mb-4">
             <div class="col-12 d-flex justify-content-between align-items-center">
                 <h2 class="section-title">Fresh Vegetables</h2>
                 <a href="#" class="btn view-more-btn">
                     View More <i class="fa-solid fa-arrow-right"></i>
                 </a>
             </div>
         </div>

         <div class="row g-4">

             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">15% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Organic Broccoli">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Broccoli</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹85</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹100</del></span>
                                 <span class="discount">15% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">20% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1573246123716-6b1782bfc499" class="card-img-top rounded mb-3" alt="Organic Carrots">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Carrots</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹60</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹75</del></span>
                                 <span class="discount">20% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">10% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Bell Peppers">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Colorful Bell Peppers</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹135</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹150</del></span>
                                 <span class="discount">10% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">12% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655" class="card-img-top rounded mb-3" alt="Spinach">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Spinach Leaves</h6>
                             <div class="fruit-weight">approx 250g</div>
                             <p class="mb-1 current-price">₹45</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹51</del></span>
                                 <span class="discount">12% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <section class="fruits-section" id="fresh_vegetables">
     <div class="container mt-5">
         <div class="row align-items-center mb-4">
             <div class="col-12 d-flex justify-content-between align-items-center">
                 <h2 class="section-title">Fresh Vegetables</h2>
                 <a href="#" class="btn view-more-btn">
                     View More <i class="fa-solid fa-arrow-right"></i>
                 </a>
             </div>
         </div>

         <div class="row g-4">

             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">15% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Organic Broccoli">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Broccoli</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹85</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹100</del></span>
                                 <span class="discount">15% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">20% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1573246123716-6b1782bfc499" class="card-img-top rounded mb-3" alt="Organic Carrots">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Carrots</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹60</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹75</del></span>
                                 <span class="discount">20% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">10% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Bell Peppers">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Colorful Bell Peppers</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹135</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹150</del></span>
                                 <span class="discount">10% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">12% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655" class="card-img-top rounded mb-3" alt="Spinach">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Spinach Leaves</h6>
                             <div class="fruit-weight">approx 250g</div>
                             <p class="mb-1 current-price">₹45</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹51</del></span>
                                 <span class="discount">12% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <section class="fruits-section" id="fresh_vegetables">
     <div class="container mt-5">
         <div class="row align-items-center mb-4">
             <div class="col-12 d-flex justify-content-between align-items-center">
                 <h2 class="section-title">Fresh Vegetables</h2>
                 <a href="#" class="btn view-more-btn">
                     View More <i class="fa-solid fa-arrow-right"></i>
                 </a>
             </div>
         </div>

         <div class="row g-4">

             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">15% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Organic Broccoli">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Broccoli</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹85</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹100</del></span>
                                 <span class="discount">15% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">20% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1573246123716-6b1782bfc499" class="card-img-top rounded mb-3" alt="Organic Carrots">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Organic Carrots</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹60</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹75</del></span>
                                 <span class="discount">20% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">10% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c" class="card-img-top rounded mb-3" alt="Bell Peppers">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Colorful Bell Peppers</h6>
                             <div class="fruit-weight">approx 500g</div>
                             <p class="mb-1 current-price">₹135</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹150</del></span>
                                 <span class="discount">10% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>


             <div class="col-6 col-md-4 col-lg-3 d-flex">
                 <div class="card fruits-card flex-fill p-3">
                     <span class="badge-off">12% OFF</span>

                     <a href="#" class="d-block position-relative">
                         <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655" class="card-img-top rounded mb-3" alt="Spinach">
                         <i class="fa-regular fa-heart heart-icon"></i>
                     </a>

                     <div class="card-body p-0">
                         <a href="#" class="text-decoration-none">
                             <h6 class="card-title">Fresh Spinach Leaves</h6>
                             <div class="fruit-weight">approx 250g</div>
                             <p class="mb-1 current-price">₹45</p>

                             <p class="mb-2">
                                 <span class="original-price"><del>₹51</del></span>
                                 <span class="discount">12% off</span>
                             </p>

                             <button class="btn add-to-cart-btn">
                                 <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                             </button>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>



 <div class="modal fade auth-modal" id="authModal2" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="authModalLabel">Login Required</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body text-center p-4">
                 <i class="fas fa-exclamation-circle fa-3x text-warning mb-3"></i>
                 <p>You need to be logged in to add items to your cart.</p>
                 <p>Please login or create an account to continue shopping.</p>
             </div>
             <div class="modal-footer justify-content-center">
                 <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                 <button type="button" class="btn btn-primary">
                     <a data-bs-toggle="modal" data-bs-target="#authModal">Login Now</a>
                 </button>
             </div>
         </div>
     </div>
 </div>


 <script>
     document.addEventListener('DOMContentLoaded', function() {
         // Heart icon functionality
         const heartIcons = document.querySelectorAll('.heart-icon');
         heartIcons.forEach(icon => {
             icon.addEventListener('click', function(e) {
                 e.preventDefault();
                 this.classList.toggle('fa-regular');
                 this.classList.toggle('fa-solid');
                 this.classList.toggle('active');
             });
         });
         //  const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
         //  addToCartButtons.forEach(button => {
         //      button.addEventListener('click', function(e) {
         //          const modal = new bootstrap.Modal(document.getElementById('authModal2'));
         //          modal.show();
         //      });
         //  });
     });
 </script>