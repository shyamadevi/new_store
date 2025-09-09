  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #20c997;
      --primary-dark: #17a085;
      --secondary: #6f42c1;
      --light: #f8f9fa;
      --dark: #0d0d0d;
      --gray: #6c757d;
      --success: #28a745;
    }
    

    .header1 {
        margin-top:50px;
      text-align: center;
      padding: 2.5rem 1rem;
      background: linear-gradient(135deg, var(--dark), var(--primary));
      color: #fff;
      position: relative;
      overflow: hidden;
    }
    
    .header1::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,224C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
      background-size: cover;
      background-position: bottom;
    }
    
    .header1 h1 {
      margin: 0 0 0.5rem;
      font-size: 2.5rem;
      position: relative;
    }
    
    .header1 p {
      font-size: 1.2rem;
      opacity: 0.9;
      position: relative;
      max-width: 600px;
      margin: 0 auto;
    }


    .section {
      margin-bottom: 3rem;
      background: white;
      border-radius: 12px;
      padding: 1.5rem 2rem;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .section h2 {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      color: var(--primary-dark);
      padding-bottom: 0.5rem;
      border-bottom: 2px solid var(--primary);
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .section h2 i {
      color: var(--secondary);
    }

    .form-group {
      margin-bottom: 1.2rem;
    }
    
    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: var(--dark);
    }
    
    select, input {
      width: 100%;
      padding: 0.8rem 1rem;
      border-radius: 8px;
      border: 1px solid #ddd;
      background: white;
      font-size: 1rem;
      transition: all 0.3s;
    }
    
    select:focus, input:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(32, 201, 151, 0.2);
    }

    .slot-selection {
      display: flex;
      gap: 1rem;
      margin-top: 1rem;
    }
    
    .slot-option {
      flex: 1;
      text-align: center;
      padding: 1rem;
      border: 2px solid #ddd;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    .slot-option:hover {
      border-color: var(--primary);
    }
    
    .slot-option.selected {
      border-color: var(--primary);
      background: rgba(32, 201, 151, 0.1);
    }
    
    .slot-option i {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: var(--gray);
    }
    
    .slot-option.selected i {
      color: var(--primary);
    }

    .plans {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
      margin-top: 1.5rem;
      justify-content: center;
    }

    
    .popular {
      border-top-color: var(--secondary);
    }
    
    .popular-tag {
      position: absolute;
      top: -12px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--secondary);
      color: white;
      padding: 0.5rem 1.5rem;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: bold;
    }

    .discount {
      position: absolute;
      top: -10px;
      right: -10px;
      background: var(--primary);
      color: white;
      padding: 0.5rem 0.8rem;
      border-radius: 50px;
      font-size: 0.9rem;
      font-weight: bold;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

   
    .price {
      font-size: 1.8rem;
      margin: 1rem 0;
      color: var(--primary);
      font-weight: bold;
    }
    
    .price .period {
      font-size: 0.9rem;
      color: var(--gray);
      font-weight: normal;
    }
    
    .savings {
      color: var(--success);
      font-weight: 600;
      margin-bottom: 1.5rem;
    }

    .features {
      text-align: left;
      margin: 1.5rem 0;
      padding: 0;
      list-style: none;
    }
    
    .features li {
      margin-bottom: 0.8rem;
      display: flex;
      align-items: center;
    }
    
    .features li i {
      color: var(--success);
      margin-right: 0.5rem;
    }

   
    .info-box {
      margin-top: 3rem;
      background: linear-gradient(to right, #e9f9f3, #e6f3ff);
      border-left: 5px solid var(--primary);
      padding: 2rem;
      border-radius: 12px;
    }
    body {
  padding-top: 80px; /* match your navbar height */
}

    
    .info-box h3 {
      margin: 0 0 1rem;
      color: var(--primary-dark);
      font-size: 1.5rem;
    }
    
    .info-box ul {
      margin: 0;
      padding-left: 1.2rem;
      columns: 2;
      column-gap: 2rem;
    }
    
    .info-box li {
      margin-bottom: 0.8rem;
      break-inside: avoid;
    }

    .testimonials {
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
      margin-top: 2rem;
    }
    
    .testimonial {
      flex: 1 1 300px;
      background: white;
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .testimonial .text {
      font-style: italic;
      margin-bottom: 1rem;
    }
    
    .testimonial .author {
      display: flex;
      align-items: center;
    }
    
    .testimonial .author img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 0.8rem;
      object-fit: cover;
    }
    
    .rating {
      color: #ffc107;
      margin-top: 0.5rem;
    }

    .faq-item {
      margin-bottom: 1.5rem;
      border-bottom: 1px solid #eee;
      padding-bottom: 1rem;
    }
    
    .faq-question {
      font-weight: 600;
      margin-bottom: 0.5rem;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .faq-answer {
      color: var(--gray);
      display: none;
    }
    
    .faq-answer.show {
      display: block;
    }

    .container1 {
  max-width: 1200px;
  margin: auto;
  padding: 2rem 1.5rem;
}

.section1 {
  margin-bottom: 3rem;
  background: white;
  border-radius: 12px;
  padding: 1.5rem 2rem;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.section1 h2 {
  font-size: 1.8rem;
  margin-bottom: 1.5rem;
  color: var(--primary-dark);
  padding-bottom: 0.5rem;
  border-bottom: 2px solid var(--primary);
  display: flex;
  align-items: center;
  gap: 10px;
}

.plans1 {
  display: flex;
  gap: 2rem;
  flex-wrap: wrap;
  margin-top: 1.5rem;
  justify-content: center;
}

.card1 {
  flex: 1 1 300px;
  background: white;
  border-radius: 12px;
  padding: 2rem;
  text-align: center;
  box-shadow: 0 5px 20px rgba(0,0,0,0.08);
  transition: transform 0.3s, box-shadow 0.3s;
  position: relative;
  border-top: 5px solid var(--primary);
  max-width: 350px;
}

.card1:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.btn1 {
  background: var(--primary);
  color: white;
  padding: 1rem 2rem;
  border-radius: 50px;
  margin-top: 1rem;
  font-weight: bold;
  cursor: pointer;
  border: none;
  transition: 0.3s;
  width: 100%;
  font-size: 1.1rem;
  box-shadow: 0 4px 10px rgba(32, 201, 151, 0.3);
}

.btn1:hover {
  background: var(--primary-dark);
  transform: translateY(-2px);
  box-shadow: 0 6px 15px rgba(32, 201, 151, 0.4);
}

.info-box1 {
  margin-top: 3rem;
  background: linear-gradient(to right, #e9f9f3, #e6f3ff);
  border-left: 5px solid var(--primary);
  padding: 2rem;
  border-radius: 12px;
}

.testimonial1 {
  flex: 1 1 300px;
  background: white;
  padding: 1.5rem;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}


    @media (max-width: 768px) {
      .plans {
        flex-direction: column;
        align-items: center;
      }
      
      .card1 {
        width: 100%;
        max-width: 400px;
      }
      
      .slot-selection {
        flex-direction: column;
      }
      
      .info-box ul {
        columns: 1;
      }
    }
  </style>
</head>
<body>
  <div class="header1">
    <h1 style="color:white"><i class="fas fa-calendar-check text-light" ></i> Premium Subscription Plans</h1>
    <p>Fresh Milk & Fruits Delivered Daily to Your Doorstep</p>
</div>

  <div class="container">
    <!-- Product Selection -->
    <div class="section">
      <h2><i class="fas fa-shopping-basket"></i> Customize Your Subscription</h2>
      
      <div class="form-group">
        <label for="type">Product Type</label>
        <select id="type" onchange="toggleOptions()">
          <option value="">-- Select Product Type --</option>
          <option value="milk">Milk</option>
          <option value="fruit">Fruit</option>
        </select>
      </div>

      <div id="milkOptions" style="display:none;">
        <div class="form-group">
          <label for="milkSize">Milk Size</label>
          <select id="milkSize" onchange="updatePrices()">
            <option value="30">500ml - ₹30</option>
            <option value="55">1L - ₹55</option>
            <option value="100">2L - ₹100</option>
          </select>
        </div>
      </div>

      <div id="fruitOptions" style="display:none;">
        <div class="form-group">
          <label for="fruitSelect">Fruit Selection</label>
          <select id="fruitSelect" onchange="updatePrices()">
            <option value="40">Apple - ₹40 (per piece)</option>
            <option value="30">Banana - ₹30 (dozen)</option>
            <option value="60">Orange - ₹60 (per piece)</option>
            <option value="80">Mango - ₹80 (per piece)</option>
            <option value="50">Pomegranate - ₹50 (per piece)</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="quantity">Quantity (per day)</label>
        <input type="number" id="quantity" value="1" min="1" max="10" onchange="updatePrices()">
      </div>
      
      <div class="form-group">
        <label>Preferred Delivery Time</label>
        <div class="slot-selection">
          <div class="slot-option" onclick="selectSlot(this, 'morning')">
            <i class="fas fa-sun"></i>
            <div>Morning</div>
            <div>7:00 - 9:00 AM</div>
          </div>
          <div class="slot-option" onclick="selectSlot(this, 'evening')">
            <i class="fas fa-moon"></i>
            <div>Evening</div>
            <div>5:00 - 7:00 PM</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Subscription Cards -->
    <div class="section">
      <h2><i class="fas fa-tags"></i> Choose Your Plan</h2>
      <p>Select the subscription plan that works best for you. Longer plans offer better savings!</p>
      
      <div class="plans">
        <div class="card1">
          <div class="discount">2% OFF</div>
          <h3>1 Month Plan</h3>
          <div class="description">Perfect for trying out our service</div>
          <div class="price" id="price1">₹0 <span class="period">/month</span></div>
          <div class="savings">Save up to ₹45 monthly</div>
          
          <ul class="features">
            <li><i class="fas fa-check"></i> Daily fresh delivery</li>
            <li><i class="fas fa-check"></i> Free delivery</li>
            <li><i class="fas fa-check"></i> Pause anytime</li>
          </ul>
          
          <button class="btn1">Get Started</button>
        </div>
        
        <div class="card1 popular">
          <div class="popular-tag">MOST POPULAR</div>
          <div class="discount">5% OFF</div>
          <h3>6 Months Plan</h3>
          <div class="description">Great value for regular customers</div>
          <div class="price" id="price6">₹0 <span class="period">/month</span></div>
          <div class="savings">Save up to ₹300 every 6 months</div>
          
          <ul class="features">
            <li><i class="fas fa-check"></i> Everything in 1-month plan</li>
            <li><i class="fas fa-check"></i> 1 free week after 3 months</li>
            <li><i class="fas fa-check"></i> Priority support</li>
            <li><i class="fas fa-check"></i> Free special item monthly</li>
          </ul>
          
          <button class="btn1">Subscribe Now</button>
        </div>
        
        <div class="card1">
          <div class="discount">10% OFF</div>
          <h3>1 Year Plan</h3>
          <div class="description">Maximum savings for loyal customers</div>
          <div class="price" id="price12">₹0 <span class="period">/month</span></div>
          <div class="savings">Save up to ₹800 yearly</div>
          
          <ul class="features">
            <li><i class="fas fa-check"></i> Everything in 6-month plan</li>
            <li><i class="fas fa-check"></i> 2 free weeks after 6 months</li>
            <li><i class="fas fa-check"></i> Birthday surprise gift</li>
            <li><i class="fas fa-check"></i> Premium customer support</li>
            <li><i class="fas fa-check"></i> Custom delivery preferences</li>
          </ul>
          
          <button class="btn1">Become a Member</button>
        </div>
      </div>
    </div>

    <!-- Why Subscribe Section -->
    <div class="info-box">
      <h3><i class="fas fa-star"></i> Why Subscribe With Us?</h3>
      <ul>
        <li>✔ Save up to 10% with long-term plans</li>
        <li>✔ Fresh milk and fruits delivered daily at your preferred time</li>
        <li>✔ Hassle-free — no need to order every day</li>
        <li>✔ Pause or cancel anytime from your profile</li>
        <li>✔ Customizable orders based on your preferences</li>
        <li>✔ Environmentally friendly packaging</li>
        <li>✔ Referral program: get ₹100 credit for each friend who signs up</li>
        <li>✔ First delivery free for new subscribers</li>
      </ul>
    </div>

    <!-- Testimonials -->
    <div class="section">
      <h2><i class="fas fa-comments"></i> What Our Customers Say</h2>
      <div class="testimonials">
        <div class="testimonial">
          <div class="text">"The morning delivery of fresh milk has been a game-changer for our family. We've been subscribers for over a year now!"</div>
          <div class="author">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%2320c997'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='central' text-anchor='middle' font-family='sans-serif' font-size='40' fill='white'%3ER%3C/text%3E%3C/svg%3E" alt="Rajesh">
            <div>
              <strong>Rajesh Kumar</strong>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
        
        <div class="testimonial">
          <div class="text">"I love that I can choose my delivery time. The evening slot works perfectly for me after work. The fruits are always fresh!"</div>
          <div class="author">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%236f42c1'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='central' text-anchor='middle' font-family='sans-serif' font-size='40' fill='white'%3ES%3C/text%3E%3C/svg%3E" alt="Priya">
            <div>
              <strong>Priya Singh</strong>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FAQ Section -->
    <div class="section">
      <h2><i class="fas fa-question-circle"></i> Frequently Asked Questions</h2>
      
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          How does the subscription work? <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          Once you select a product and subscription plan, we'll deliver it daily at your chosen time. You can manage your subscription, pause deliveries, or change products through your account dashboard.
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          Can I change my delivery time? <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          Yes, you can change your delivery time up to 24 hours in advance through your account settings or by contacting our customer support.
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          What if I'm not satisfied with the quality? <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          We guarantee the quality of our products. If you're not satisfied with any delivery, let us know within 24 hours and we'll issue a full refund for that delivery.
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          How do I pause or cancel my subscription? <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          You can easily pause or cancel your subscription at any time from your account page. There are no cancellation fees, and you can resume your subscription whenever you like.
        </div>
      </div>
    </div>
  </div>


  <script>
    function toggleOptions() {
      const type = document.getElementById("type").value;
      document.getElementById("milkOptions").style.display = type === "milk" ? "block" : "none";
      document.getElementById("fruitOptions").style.display = type === "fruit" ? "block" : "none";
      updatePrices();
    }

    function selectSlot(element, slot) {
      // Remove selected class from all options
      const options = document.querySelectorAll('.slot-option');
      options.forEach(opt => opt.classList.remove('selected'));
      
      // Add selected class to clicked option
      element.classList.add('selected');
      
      // You can store the selected slot value if needed
      localStorage.setItem('deliverySlot', slot);
    }

    function updatePrices() {
      const type = document.getElementById("type").value;
      const qty = parseInt(document.getElementById("quantity").value) || 1;

      let pricePerItem = 0;
      if (type === "milk") {
        pricePerItem = parseInt(document.getElementById("milkSize").value) || 0;
      } else if (type === "fruit") {
        pricePerItem = parseInt(document.getElementById("fruitSelect").value) || 0;
      }

      if (!pricePerItem) {
        document.getElementById("price1").innerHTML = "₹0 <span class='period'>/month</span>";
        document.getElementById("price6").innerHTML = "₹0 <span class='period'>/month</span>";
        document.getElementById("price12").innerHTML = "₹0 <span class='period'>/month</span>";
        return;
      }

      const daily = pricePerItem * qty;
      const oneMonth = daily * 30;
      const sixMonths = oneMonth * 6;
      const twelveMonths = oneMonth * 12;

      document.getElementById("price1").innerHTML = "₹" + (oneMonth * 0.98).toFixed(0) + " <span class='period'>/month</span>";
      document.getElementById("price6").innerHTML = "₹" + (sixMonths * 0.95 / 6).toFixed(0) + " <span class='period'>/month</span>";
      document.getElementById("price12").innerHTML = "₹" + (twelveMonths * 0.90 / 12).toFixed(0) + " <span class='period'>/month</span>";
    }

    function toggleFaq(element) {
      const answer = element.nextElementSibling;
      answer.classList.toggle('show');
      
      const icon = element.querySelector('i');
      if (icon.classList.contains('fa-chevron-down')) {
        icon.classList.replace('fa-chevron-down', 'fa-chevron-up');
      } else {
        icon.classList.replace('fa-chevron-up', 'fa-chevron-down');
      }
    }

    // Initialize the page
    document.addEventListener('DOMContentLoaded', function() {
      // Set morning as default delivery slot
      const morningSlot = document.querySelector('.slot-option');
      if (morningSlot) {
        morningSlot.classList.add('selected');
      }
    });
  </script>
</body>
</html>