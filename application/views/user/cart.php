
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
<section style="margin-top: 150px;">
    <!-- The rest of the HTML remains exactly the same -->
    <div class="cart-page-container">
        <div class="row">
            <!-- Product Display -->
            <div class="col-lg-5">
                <div class="cart-product-card animate-in">
                    <div class="cart-card-header">
                        <i class="fas fa-store me-2"></i>Product Details
                    </div>
                    <div class="cart-card-body">
                        <div class="cart-main-image">
                            <img id="main-cart-product-image" src="https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Organic Avocados">
                        </div>
                        
                        <div class="cart-thumbnail-container">
                            <div class="cart-thumbnail active" data-image="https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80">
                                <img src="https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Avocado Image 1">
                            </div>
                            <div class="cart-thumbnail" data-image="https://images.unsplash.com/photo-1519098901903-b469f8bba0f4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80">
                                <img src="https://images.unsplash.com/photo-1519098901903-b469f8bba0f4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Avocado Image 2">
                            </div>
                            <div class="cart-thumbnail" data-image="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80">
                                <img src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Avocado Image 3">
                            </div>
                            <div class="cart-thumbnail" data-image="https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80">
                                <img src="https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Avocado Image 4">
                            </div>
                        </div>
                        
                        <h2 class="cart-product-title">Organic Hass Avocados (Pack of 4)</h2>
                        <div class="cart-product-price">₹320.00</div>
                        <p class="cart-product-description">Fresh organic Hass avocados, sourced directly from local farms. Perfect for guacamole, salads, or as a healthy addition to your meals. Rich in healthy fats, fiber, and various nutrients.</p>
                        <div class="cart-product-meta">SKU: ORG-AVOC-004 | Category: Fruits</div>
                    </div>
                </div>
            </div>
            
            <!-- Cart Items -->
            <div class="col-lg-7">
                <div class="cart-card animate-in">
                    <div class="cart-card-header">
                        <i class="fas fa-shopping-cart me-2"></i>Your Cart (1 item)
                    </div>
                    <div class="cart-card-body">
                        <div class="cart-item">
                            <div class="item-details">
                                <h3 class="item-name">Organic Hass Avocados (Pack of 4)</h3>
                                <p class="item-price">₹320.00</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="quantity-control">
                                        <button class="quantity-btn">-</button>
                                        <input type="number" class="quantity-input" value="1" min="1">
                                        <button class="quantity-btn">+</button>
                                    </div>
                                    <button class="btn-remove"><i class="fas fa-trash me-2"></i> Remove</button>
                                </div>
                                <div class="subscription-option">
                                    <input class="form-check-input" type="checkbox" id="subscription">
                                    <label class="form-check-label" for="subscription">Convert to weekly subscription (Save 15%)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Order Summary -->
                <div class="summary-card animate-in">
                    <div class="cart-card-header">
                        <i class="fas fa-receipt me-2"></i>Order Summary
                    </div>
                    <div class="cart-card-body">
                        <div class="summary-item">
                            <span>Subtotal (1 item)</span>
                            <span>₹320.00</span>
                        </div>
                        
                        <div class="summary-item">
                            <span>Delivery Fee</span>
                            <span>₹40.00</span>
                        </div>
                        
                        <div class="summary-item">
                            <span>Discount</span>
                            <span style="color:#4CAF50">-₹0.00</span>
                        </div>
                        
                        <div class="summary-total">
                            <span>Total</span>
                            <span>₹360.00</span>
                        </div>
                        
                        <div class="coupon-form">
                            <label for="coupon" class="form-label">Have a coupon?</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="coupon" placeholder="Enter coupon code">
                                <button class="btn-apply">Apply</button>
                            </div>
                        </div>
                        
                        <button class="btn-checkout">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Review Section -->
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="review-form-container animate-in">
                    <h3 class="section-title"><i class="fas fa-star me-2"></i>Share Your Experience</h3>
                    
                    <form class="review-form">
                        <div class="form-group">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        
                        <div class="form-group">
                            <label for="image" class="form-label">Your Photo (Optional)</label>
                            <input type="file" class="form-control" id="image">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Your Rating</label>
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5">
                                <label for="star5">★</label>
                                <input type="radio" id="star4" name="rating" value="4">
                                <label for="star4">★</label>
                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3">★</label>
                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2">★</label>
                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1">★</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="review" class="form-label">Your Review</label>
                            <textarea class="form-control" id="review" rows="3" placeholder="Share your experience with our cart-products and service"></textarea>
                        </div>
                        
                        <button type="submit" class="btn-submit">Submit Review</button>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="review-slider-container animate-in">
                    <div class="review-slider">
                        <i class="fas fa-comments"></i>
                        <h4>Customer Reviews</h4>
                        <p>No reviews yet. Be the first to share your experience!</p>
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border text-success" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Image gallery functionality
        document.querySelectorAll('.cart-thumbnail').forEach(thumb => {
            thumb.addEventListener('click', function() {
                // Update main image
                const mainImage = document.getElementById('main-cart-product-image');
                mainImage.src = this.dataset.image;
                
                // Update active cart-thumbnail
                document.querySelectorAll('.cart-thumbnail').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
        
        // Quantity controls
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.quantity-input');
                let value = parseInt(input.value);
                
                if (this.textContent === '-') {
                    if (value > 1) value--;
                } else {
                    value++;
                }
                
                input.value = value;
                updateTotals();
            });
        });
        
        // Remove items
        document.querySelectorAll('.btn-remove').forEach(button => {
            button.addEventListener('click', function() {
                const item = this.closest('.cart-item');
                item.style.opacity = '0';
                item.style.transform = 'translateX(50px)';
                setTimeout(() => {
                    item.remove();
                    updateTotals();
                }, 300);
            });
        });
        
        // Update totals (simplified)
        function updateTotals() {
            // In a real application, this would calculate based on actual prices and quantities
            const itemCount = document.querySelectorAll('.cart-item').length;
            document.querySelector('.cart-card-header').innerHTML = `<i class="fas fa-shopping-cart me-2"></i>Your Cart (${itemCount} item${itemCount !== 1 ? 's' : ''})`;
        }
        
        // Rating stars
        document.querySelectorAll('.rating input').forEach(star => {
            star.addEventListener('change', function() {
                const ratingValue = this.value;
                const stars = this.parentElement.querySelectorAll('label');
                
                stars.forEach((star, index) => {
                    if (index < ratingValue) {
                        star.style.color = '#ffc107';
                    } else {
                        star.style.color = '#ddd';
                    }
                });
            });
        });
    </script>
