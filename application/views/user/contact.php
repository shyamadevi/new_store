<style>
    .contact-container {
        max-width: 1200px;
        margin: auto;
        margin-top: 150px;
        padding: 4rem 1rem;
        font-family: 'Poppins', sans-serif;
        color: #1f2937;
    }

    .contact-content {
        display: flex;
        flex-wrap: wrap;
        gap: 3rem;
    }

    .contact-info {
        flex: 1;
        min-width: 320px;
    }

    .contact-info h2.info-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 2rem;
        color: #16a34a;
        /* fresh green */
    }

    .contact-details {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .contact-item {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
        padding: 1rem;
        background-color: #f9fafb;
        border-radius: 1rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s;
    }

    .contact-item:hover {
        transform: translateY(-5px);
    }

    .contact-icon {
        font-size: 1.75rem;
        color: #16a34a;
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #d1fae5;
        border-radius: 50%;
    }

    .contact-text h3 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .contact-text p {
        font-size: 0.95rem;
        color: #374151;
        margin: 0;
    }

    /* Map Section */
    .map-container {
        margin-top: 2rem;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .map-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #16a34a;
        text-align: center;
    }

    /* Contact Form */
    .contact-form {
        flex: 1;
        min-width: 320px;
        background-color: #f3f4f6;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .contact-form h2.form-title {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-align: center;
        color: #16a34a;
    }

    .contact-form .form-group {
        margin-bottom: 1.25rem;
        display: flex;
        flex-direction: column;
    }

    .contact-form label {
        margin-bottom: 0.5rem;
        font-weight: 500;
    }

    .contact-form input,
    .contact-form select,
    .contact-form textarea {
        padding: 0.75rem 1rem;
        border-radius: 0.75rem;
        border: 1px solid #94a3b8;
        outline: none;
        font-size: 1rem;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .contact-form input:focus,
    .contact-form select:focus,
    .contact-form textarea:focus {
        border-color: #16a34a;
        box-shadow: 0 0 10px rgba(22, 163, 74, 0.2);
    }

    .contact-form textarea {
        resize: vertical;
        min-height: 120px;
    }

    .contact-form button.btn {
        background: #16a34a;
        color: white;
        font-weight: 600;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: background 0.3s, transform 0.2s;
        width: 100%;
        margin-top: 0.5rem;
    }

    .contact-form button.btn:hover {
        background: #15803d;
        transform: scale(1.02);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .contact-content {
            flex-direction: column;
        }

        .map-container iframe {
            width: 100%;
            height: 300px;
        }
    }
</style>
<div class="contact-container">
    <div class="contact-content">
        <div class="contact-info">
            <h2 class="info-title">Contact Information</h2>

            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Our Location</h3>
                        <p>Ahilyanagar, Maharashtra 414604</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Phone Number</h3>
                        <p>(555) 123-4567</p>
                        <p>Toll Free: (800) 123-FRESH</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Email Address</h3>
                        <p>abc@supermarket.com</p>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="map-container">
                <h3 class="map-title">Find Us Here</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0520187970515!2d74.72775317466586!3d19.10537375105081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb17ca9d749e5%3A0x516744f9b2f35ec9!2sA2Z%20IT%20HUB%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1757398021293!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>

        <div class="contact-form">
            <h2 class="form-title">Send Us a Message</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" placeholder="Your full name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" placeholder="Your phone number" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" required>
                        <option value="">Select a subject</option>
                        <option value="delivery">Delivery Inquiry</option>
                        <option value="product">Product Quality</option>
                        <option value="complaint">Complaint</option>
                        <option value="suggestion">Suggestion</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="How can we help you?" required></textarea>
                </div>

                <button type="submit" class="btn" id="submitBtn">
                    <span id="btnText">Send Message</span>
                </button>
            </form>
        </div>
    </div>
</div>