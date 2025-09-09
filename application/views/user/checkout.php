

    <!-- Bootstrap 5 (external) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Internal CSS -->
    
    <section style="margin-top: 140px;">
    <div class="fc-page">

        <!-- Progress -->
        <div class="fc-checkout-progress">
            <div class="fc-step">
                <div class="fc-icon fc-active"><i class="fas fa-shopping-cart"></i></div>
                <div class="fc-label fc-active">Cart</div>
            </div>
            <div class="fc-step">
                <div class="fc-icon fc-active"><i class="fas fa-user"></i></div>
                <div class="fc-label fc-active">Details</div>
            </div>
            <div class="fc-step">
                <div class="fc-icon fc-active"><i class="fas fa-truck"></i></div>
                <div class="fc-label fc-active">Shipping</div>
            </div>
            <div class="fc-step">
                <div class="fc-icon" id="fc-step-payment-icon"><i class="fas fa-credit-card"></i></div>
                <div class="fc-label" id="fc-step-payment-label">Payment</div>
            </div>
        </div>

        <div class="row gx-4">
            <!-- Left column: details, delivery -->
            <div class="col-lg-7">
                <!-- Delivery Address card -->
                <div class="fc-card">
                    <div class="fc-header"><i class="fas fa-map-marker-alt me-2"></i>Delivery Address</div>
                    <div class="fc-body">
                        <div class="fc-address-list">
                            <div class="fc-address fc-selected" data-address-id="1">
                                <h6>Home <span class="fc-pill">Default</span></h6>
                                <p class="fc-muted mb-1">John Doe</p>
                                <p class="fc-muted mb-1">123 Main Street, Apt 4B, New York, NY 10001</p>
                                <p class="fc-muted">Phone: (123) 456-7890</p>
                            </div>

                            <div class="fc-address" data-address-id="2">
                                <h6>Work</h6>
                                <p class="fc-muted mb-1">John Doe</p>
                                <p class="fc-muted mb-1">456 Office Park, Suite 300, New York, NY 10001</p>
                                <p class="fc-muted">Phone: (123) 456-7890</p>
                            </div>

                            <div class="fc-add-address mt-2" id="fc-add-address-btn">
                                <i class="fas fa-plus"></i> Add new address
                            </div>

                            <div class="fc-new-address mt-3" id="fc-new-address-form" style="display:none;">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label">Full name <span class="fc-required">*</span></label>
                                        <input class="form-control" type="text" id="fc-new-name" placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label">Phone <span class="fc-required">*</span></label>
                                        <input class="form-control" type="tel" id="fc-new-phone" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Address <span class="fc-required">*</span></label>
                                    <input class="form-control" id="fc-new-address" placeholder="Street address" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label">City <span class="fc-required">*</span></label>
                                        <input class="form-control" id="fc-new-city" placeholder="City" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label">ZIP <span class="fc-required">*</span></label>
                                        <input class="form-control" id="fc-new-zip" placeholder="ZIP code" required>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-2">
                                    <button class="btn btn-outline-secondary me-2" id="fc-cancel-address">Cancel</button>
                                    <button class="btn btn-primary" id="fc-save-address">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delivery slot -->
                <div class="fc-card">
                    <div class="fc-header"><i class="fas fa-calendar-alt me-2"></i>Delivery Slot <span class="fc-required">*</span></div>
                    <div class="fc-body">
                        <p class="mb-2">Choose a date & time</p>
                        <div class="fc-delivery-grid" id="fc-delivery-grid">
                            <div class="fc-slot" data-slot="today-10-12"><strong>Today</strong><div class="fc-muted">10:00 - 12:00</div></div>
                            <div class="fc-slot" data-slot="today-14-16"><strong>Today</strong><div class="fc-muted">14:00 - 16:00</div></div>
                            <div class="fc-slot" data-slot="tom-9-11"><strong>Tomorrow</strong><div class="fc-muted">09:00 - 11:00</div></div>
                            <div class="fc-slot" data-slot="tom-16-18"><strong>Tomorrow</strong><div class="fc-muted">16:00 - 18:00</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right column: payment methods -->
            <div class="col-lg-5">
                <!-- Payment Methods -->
                <div class="fc-card">
                    <div class="fc-header"><i class="fas fa-credit-card me-2"></i>Payment Methods <span class="fc-required">*</span></div>
                    <div class="fc-body">
                        <div class="fc-payment-method" data-method="cod">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-money-bill-wave me-3" style="font-size:20px;color:var(--fc-primary)"></i>
                                <div>
                                    <div style="font-weight:700">Cash on Delivery</div>
                                    <div class="fc-muted">Pay with cash when delivered</div>
                                </div>
                            </div>
                        </div>

                        <div class="fc-payment-method mt-2" data-method="wallet">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-wallet me-3" style="font-size:20px;color:var(--fc-primary)"></i>
                                <div>
                                    <div style="font-weight:700">Wallet</div>
                                    <div class="fc-muted">Use FreshCart wallet (Balance: ₹1,250.00)</div>
                                </div>
                            </div>
                        </div>

                        <div class="fc-payment-method mt-2" data-method="card">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-credit-card me-3" style="font-size:20px;color:var(--fc-primary)"></i>
                                <div>
                                    <div style="font-weight:700">Credit / Debit Card</div>
                                    <div class="fc-muted">Pay securely with cards (via Razorpay)</div>
                                </div>
                            </div>
                        </div>

                        <div class="fc-payment-method mt-2" data-method="netbanking">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-university me-3" style="font-size:20px;color:var(--fc-primary)"></i>
                                <div>
                                    <div style="font-weight:700">Netbanking</div>
                                    <div class="fc-muted">Pay from your bank account (via Razorpay)</div>
                                </div>
                            </div>
                        </div>

                        <div class="fc-payment-method mt-2" data-method="upi">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-mobile-alt me-3" style="font-size:20px;color:var(--fc-primary)"></i>
                                <div>
                                    <div style="font-weight:700">UPI</div>
                                    <div class="fc-muted">Pay using Google Pay, PhonePe, etc. (via Razorpay)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Removed the button card from this column -->
            </div>
        </div>
        
        <!-- Order summary at bottom with full width -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="fc-card">
                    <div class="fc-header"><i class="fas fa-receipt me-2"></i>Order Summary</div>
                    <div class="fc-body fc-compact-summary">
                        <!-- Order item list -->
                        <div class="mb-3">
                            <div class="fc-order-item">
                                <img src="https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?q=80&w=800&auto=format&fit=crop" alt="Avocados">
                                <div class="flex-grow-1">
                                    <div class="fc-name">Organic Avocados (Pack of 4)</div>
                                    <div class="fc-muted">Qty: 1</div>
                                </div>
                                <div class="fw-bold">₹320.00</div>
                            </div>

                            <div class="fc-order-item">
                                <img src="https://images.unsplash.com/photo-1563636619-e9143da7973b?q=80&w=800&auto=format&fit=crop" alt="Milk">
                                <div class="flex-grow-1">
                                    <div class="fc-name">Organic Milk (1L)</div>
                                    <div class="fc-muted">Qty: 1</div>
                                </div>
                                <div class="fw-bold">₹120.00</div>
                            </div>

                            <div class="fc-order-item">
                                <img src="https://images.unsplash.com/photo-1549931319-a545dcf3bc73?q=80&w=800&auto=format&fit=crop" alt="Bread">
                                <div class="flex-grow-1">
                                    <div class="fc-name">Whole Wheat Bread</div>
                                    <div class="fc-muted">Qty: 1</div>
                                </div>
                                <div class="fw-bold">₹80.00</div>
                            </div>

                            <div class="fc-order-item">
                                <img src="https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?q=80&w=800&auto=format&fit=crop" alt="Bananas">
                                <div class="flex-grow-1">
                                    <div class="fc-name">Fresh Bananas (1 kg)</div>
                                    <div class="fc-muted">Qty: 1</div>
                                </div>
                                <div class="fw-bold">₹60.00</div>
                            </div>

                            <div class="fc-order-item">
                                <img src="https://images.unsplash.com/photo-1567337710282-00832b415979?q=80&w=800&auto=format&fit=crop" alt="Yogurt">
                                <div class="flex-grow-1">
                                    <div class="fc-name">Greek Yogurt (500g)</div>
                                    <div class="fc-muted">Qty: 1</div>
                                </div>
                                <div class="fw-bold">₹180.00</div>
                            </div>
                        </div>

                        <!-- Summary numbers -->
                        <div class="fc-summary-row"><div class="fc-muted">Subtotal (5 items)</div><div>₹760.00</div></div>
                        <div class="fc-summary-row"><div class="fc-muted">Delivery Fee</div><div>₹40.00</div></div>
                        <div class="fc-summary-row"><div class="fc-muted">Tax</div><div>₹45.60</div></div>
                        <div class="fc-summary-row"><div class="fc-muted">Discount</div><div style="color:var(--fc-primary)">-₹100.00</div></div>

                        <div class="fc-summary-row" style="font-weight:800; font-size:18px; border-top:2px solid #f1f1f1; padding-top:10px;">
                            <div>Total</div>
                            <div id="fc-total-amount">₹745.60</div>
                        </div>
                        
                        <!-- Moved the button to the order summary section -->
                        <div class="fc-sticky-button-container">
                            <button id="fc-action-btn" class="fc-action-btn fc-place" disabled>
                                <i class="fas fa-lock me-2"></i><span id="fc-action-label">Select Payment & Delivery</span>
                            </button>

                            <div class="text-center mt-2">
                                <img src="https://razorpay.com/assets/razorpay-glyph.svg" height="20" alt="Razorpay" class="me-2">
                                <small class="text-muted">Secured by Razorpay</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Razorpay Checkout script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <!-- Bootstrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FC JS (behaviour) -->
    <script>
        (function(){
            // --- state ---
            let fcSelectedPayment = null;
            let fcSelectedDeliverySlot = null;
            const fcPaymentMethods = document.querySelectorAll('.fc-payment-method');
            const fcDeliverySlots = document.querySelectorAll('.fc-slot');
            const fcActionBtn = document.getElementById('fc-action-btn');
            const fcActionLabel = document.getElementById('fc-action-label');
            const fcStepIcon = document.getElementById('fc-step-payment-icon');
            const fcStepLabel = document.getElementById('fc-step-payment-label');

            // Check if all required selections are made
            function fcCheckSelections() {
                if (fcSelectedPayment && fcSelectedDeliverySlot) {
                    fcActionBtn.disabled = false;
                    
                    if (fcSelectedPayment === 'cod') {
                        fcActionBtn.classList.remove('fc-pay');
                        fcActionBtn.classList.add('fc-place');
                        fcActionLabel.textContent = 'Place Order';
                        fcActionBtn.innerHTML = '<i class="fas fa-lock me-2"></i><span id="fc-action-label">Place Order</span>';
                    } else if (fcSelectedPayment === 'wallet') {
                        fcActionBtn.classList.remove('fc-place');
                        fcActionBtn.classList.add('fc-pay');
                        fcActionBtn.innerHTML = '<i class="fas fa-wallet me-2"></i><span id="fc-action-label">Pay with Wallet</span>';
                    } else {
                        fcActionBtn.classList.remove('fc-place');
                        fcActionBtn.classList.add('fc-pay');
                        fcActionBtn.innerHTML = '<i class="fas fa-lock me-2"></i><span id="fc-action-label">Pay Now</span>';
                    }
                } else {
                    fcActionBtn.disabled = true;
                    fcActionLabel.textContent = 'Select Payment & Delivery';
                }
            }

            // Payment method selection
            fcPaymentMethods.forEach(item => {
                item.addEventListener('click', function(){
                    fcSelectedPayment = this.dataset.method;
                    
                    // Update UI
                    fcPaymentMethods.forEach(m => m.classList.remove('fc-selected'));
                    this.classList.add('fc-selected');
                    
                    fcCheckSelections();
                });
            });

            // Delivery slot selection
            fcDeliverySlots.forEach(slot => {
                slot.addEventListener('click', function(){
                    fcSelectedDeliverySlot = this.dataset.slot;
                    
                    // Update UI
                    fcDeliverySlots.forEach(s => s.classList.remove('fc-selected'));
                    this.classList.add('fc-selected');
                    
                    fcCheckSelections();
                });
            });

            // Address selection
            document.querySelectorAll('.fc-address').forEach(a => {
                a.addEventListener('click', function(){
                    document.querySelectorAll('.fc-address').forEach(x => x.classList.remove('fc-selected'));
                    this.classList.add('fc-selected');
                });
            });

            // Add address toggles
            document.getElementById('fc-add-address-btn').addEventListener('click', () => {
                document.getElementById('fc-new-address-form').style.display = 'block';
                document.getElementById('fc-new-address-form').scrollIntoView({behavior:'smooth'});
            });
            
            document.getElementById('fc-cancel-address').addEventListener('click', () => {
                document.getElementById('fc-new-address-form').style.display = 'none';
            });
            
            document.getElementById('fc-save-address').addEventListener('click', () => {
                // Simple demo: add address to list (no backend)
                const name = document.getElementById('fc-new-name').value || 'New User';
                const phone = document.getElementById('fc-new-phone').value || '';
                const addr = document.getElementById('fc-new-address').value || '';
                const city = document.getElementById('fc-new-city').value || '';
                const zip = document.getElementById('fc-new-zip').value || '';
                
                if (!name || !phone || !addr || !city || !zip) {
                    alert('Please fill all required fields');
                    return;
                }
                
                const container = document.querySelector('.fc-address-list');
                const div = document.createElement('div');
                div.className = 'fc-address';
                div.innerHTML = '<h6>' + name + '</h6><p class="fc-muted mb-1">'+ addr + ', ' + city + ' - ' + zip +'</p><p class="fc-muted">Phone: ' + phone + '</p>';
                container.insertBefore(div, document.getElementById('fc-new-address-form'));
                document.getElementById('fc-new-address-form').style.display = 'none';
                
                // Clear form
                document.getElementById('fc-new-name').value = '';
                document.getElementById('fc-new-phone').value = '';
                document.getElementById('fc-new-address').value = '';
                document.getElementById('fc-new-city').value = '';
                document.getElementById('fc-new-zip').value = '';
                
                // Rebind click
                div.addEventListener('click', function(){ 
                    document.querySelectorAll('.fc-address').forEach(x => x.classList.remove('fc-selected')); 
                    this.classList.add('fc-selected'); 
                });
            });

            // --- Razorpay & Order processing ---
            // Helper: parse total amount rupees from displayed text (₹745.60)
            function fcGetTotalRupees(){
                const t = document.getElementById('fc-total-amount').textContent || '₹0';
                // remove non-numeric except dot
                const num = t.replace(/[^\d.]/g,'');
                return parseFloat(num) || 0;
            }

            // Main action button click
            fcActionBtn.addEventListener('click', function(){
                if (fcSelectedPayment === 'cod') {
                    // Immediate order placement (COD)
                    fcPlaceOrder({ payment_method: 'cod', paid: false });
                } else if (fcSelectedPayment === 'wallet') {
                    // Simulate wallet payment
                    if (confirm('Use wallet balance (₹1,250.00) to pay ₹' + fcGetTotalRupees().toFixed(2) + '?')) {
                        fcPlaceOrder({ payment_method: 'wallet', paid: true, wallet_used: true });
                    }
                } else {
                    // Use Razorpay for card / netbanking / upi
                    fcOpenRazorpay();
                }
            });

            // Function: open Razorpay checkout with test key
            function fcOpenRazorpay(){
                const amountRupees = fcGetTotalRupees();
                const amountPaise = Math.round(amountRupees * 100);

                // Replace with your Razorpay test/production key
                const RAZORPAY_KEY = 'rzp_test_1DP5mmOlF5G5ag';

                const options = {
                    "key": RAZORPAY_KEY,
                    "amount": amountPaise,
                    "currency": "INR",
                    "name": "FreshCart",
                    "description": "Order Payment",
                    "handler": function (response){
                        // Payment succeeded
                        fcPlaceOrder({
                            payment_method: fcSelectedPayment,
                            paid: true,
                            razorpay_payment_id: response.razorpay_payment_id
                        });
                    },
                    "modal": {
                        "ondismiss": function(){
                            alert('Payment cancelled. Please try again or choose a different payment method.');
                        }
                    },
                    "prefill": {
                        "name": "John Doe",
                        "email": "customer@example.com",
                        "contact": "9999999999"
                    },
                    "notes": {
                        "order_id": "FC-" + Date.now()
                    },
                    "theme": {
                        "color": "#4CAF50"
                    }
                };

                const rz = new Razorpay(options);
                rz.open();
            }

            // Function: place order (simulate backend call)
            function fcPlaceOrder(payload){
                // Disable button and show processing state
                fcActionBtn.disabled = true;
                const originalHTML = fcActionBtn.innerHTML;
                fcActionBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Processing...';

                // Simulate async server call
                setTimeout(() => {
                    // Success UI:
                    fcActionBtn.disabled = false;
                    fcActionBtn.innerHTML = '<i class="fas fa-check me-2"></i>Order Placed';
                    fcActionBtn.classList.remove('fc-pay');
                    fcActionBtn.classList.add('fc-place');

                    // Update progress to payment completed
                    fcStepIcon.classList.add('fc-active');
                    fcStepLabel.classList.add('fc-active');

                    // Show success message with payment info
                    let msg = 'Order placed successfully!\nPayment Method: ' + (payload.payment_method || 'N/A') + '\n';
                    if (payload.paid) {
                        msg += 'Payment status: Paid.\n';
                        if (payload.razorpay_payment_id) msg += 'Payment ID: ' + payload.razorpay_payment_id + '\n';
                    } else {
                        msg += 'Payment status: To be collected (COD).\n';
                    }
                    alert(msg);

                }, 1200);
            }

        })();
    </script>
