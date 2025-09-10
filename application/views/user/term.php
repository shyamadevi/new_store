<style>
    .terms-wrapper {
        max-width: 980px;
        margin: auto;
        margin-top: 150px;
        padding: 3rem 1rem;
        font-family: 'Nunito', sans-serif;
        color: #1e293b;
    }

    .terms-header {
        text-align: center;
        font-size: 2.8rem;
        font-weight: 800;
        color: #10b981;
        margin-bottom: 2.5rem;
        position: relative;
    }

    .terms-header::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: #10b981;
        margin: 10px auto 0;
        border-radius: 2px;
    }

    .terms-block {
        background: #f3f4f6;
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .terms-block:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
    }

    .terms-title {
        font-size: 1.6rem;
        color: #047857;
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .terms-subtitle {
        font-size: 1.2rem;
        color: #065f46;
        margin-top: 1rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    .terms-list {
        list-style-type: square;
        padding-left: 1.5rem;
        margin-top: 0.5rem;
    }

    .terms-list li {
        margin-bottom: 0.5rem;
        color: #374151;
    }

    .terms-highlight {
        background: linear-gradient(135deg, #d1fae5, #a7f3d0);
        padding: 1rem 1.5rem;
        border-left: 5px solid #10b981;
        border-radius: 8px;
        margin-top: 1rem;
        font-weight: 500;
    }

    .terms-contact {
        margin-top: 2rem;
        padding: 2rem;
        background: #e5e7eb;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .terms-contact h2 {
        font-size: 1.8rem;
        color: #10b981;
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .terms-contact p {
        font-size: 1rem;
        color: #374151;
        margin-bottom: 0.5rem;
    }

    .terms-last-updated {
        text-align: center;
        font-size: 0.9rem;
        color: #6b7280;
        font-style: italic;
        margin-top: 2rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .terms-wrapper {
			padding: 2rem;
		}
</style>
<div class="terms-wrapper">
    <h1 class="terms-header">Terms and Conditions</h1>

    <div class="terms-block">
        <p><?= htmlspecialchars($terms[0]['terms_description_1']); ?></p>
        <p><?= htmlspecialchars($terms[0]['terms_description_2']); ?></p>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">1. <?= htmlspecialchars($terms[1]['terms_title']); ?></h2>
        <p><?= htmlspecialchars($terms[1]['terms_heading']); ?></p>
        <ul class="terms-list">
            <li><?= htmlspecialchars($terms[1]['terms_description_1']); ?></li>
            <li><?= htmlspecialchars($terms[1]['terms_description_2']); ?></li>
            <li><?= htmlspecialchars($terms[1]['terms_description_3']); ?></li>
            <li><?= htmlspecialchars($terms[1]['terms_description_4']); ?></li>
        </ul>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">2. <?= htmlspecialchars($terms[2]['terms_title']); ?></h2>
        <h3 class="terms-subtitle">2.1. <?= htmlspecialchars($terms[2]['terms_heading']); ?></h3>
        <p><?= htmlspecialchars($terms[2]['terms_description_1']); ?></p>

        <h3 class="terms-subtitle">2.2. <?= htmlspecialchars($terms[3]['terms_heading']); ?></h3>
        <p><?= htmlspecialchars($terms[3]['terms_description_1']); ?></p>

        <h3 class="terms-subtitle">2.3. <?= htmlspecialchars($terms[4]['terms_heading']); ?></h3>
        <p><?= htmlspecialchars($terms[4]['terms_description_1']); ?></p>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">3. <?= htmlspecialchars($terms[5]['terms_title']); ?></h2>
        <p><?= htmlspecialchars($terms[5]['terms_description_1']); ?></p>
        <p><?= htmlspecialchars($terms[5]['terms_description_2']); ?></p>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">4. <?= htmlspecialchars($terms[6]['terms_title']); ?></h2>
        <h3 class="terms-subtitle">4.1. <?= htmlspecialchars($terms[6]['terms_heading']); ?></h3>
        <p><?= htmlspecialchars($terms[6]['terms_description_1']); ?></p>

        <h3 class="terms-subtitle">4.2. <?= htmlspecialchars($terms[7]['terms_heading']); ?></h3>
        <p><?= htmlspecialchars($terms[7]['terms_description_1']); ?></p>

        <h3 class="terms-subtitle">4.3. <?= htmlspecialchars($terms[8]['terms_heading']); ?></h3>
        <p><?= htmlspecialchars($terms[8]['terms_description_1']); ?></p>

        <div class="terms-highlight">
            <p><strong>Freshness Guarantee:</strong> <?= htmlspecialchars($terms[8]['terms_description_2']); ?></p>
        </div>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">5. <?= htmlspecialchars($terms[9]['terms_title']); ?></h2>
        <h3 class="terms-subtitle">5.1. <?= htmlspecialchars($terms[9]['terms_heading']); ?></h3>
        <p><?= htmlspecialchars($terms[9]['terms_description_1']); ?></p>

        <h3 class="terms-subtitle">5.2. <?= htmlspecialchars($terms[10]['terms_heading']); ?></h3>
        <p><?= htmlspecialchars($terms[10]['terms_description_1']); ?></p>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">6. <?= htmlspecialchars($terms[11]['terms_title']); ?></h2>
        <p><?= htmlspecialchars($terms[11]['terms_description_1']); ?></p>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">7. <?= htmlspecialchars($terms[12]['terms_title']); ?></h2>
        <p><?= htmlspecialchars($terms[12]['terms_description_1']); ?></p>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">8. <?= htmlspecialchars($terms[13]['terms_title']); ?></h2>
        <p><?= htmlspecialchars($terms[13]['terms_description_1']); ?></p>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">9. <?= htmlspecialchars($terms[14]['terms_title']); ?></h2>
        <p><?= htmlspecialchars($terms[14]['terms_description_1']); ?></p>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">10. <?= htmlspecialchars($terms[15]['terms_title']); ?></h2>
        <p><?= htmlspecialchars($terms[15]['terms_description_1']); ?></p>
    </div>

    <div class="terms-block">
        <h2 class="terms-title">11. <?= htmlspecialchars($terms[16]['terms_title']); ?></h2>
        <p><?= htmlspecialchars($terms[16]['terms_description_1']); ?></p>
    </div>

    <div class="terms-contact">
        <h2><?= htmlspecialchars($terms[17]['terms_title']); ?></h2>
        <p><?= htmlspecialchars($terms[17]['terms_heading']); ?></p>
        <p>Email: <?= htmlspecialchars($terms[17]['terms_description_1']); ?></p>
        <p>Phone: <?= htmlspecialchars($terms[17]['terms_description_2']); ?></p>
        <p>Address: <?= htmlspecialchars($terms[17]['terms_description_3']); ?></p>
    </div>

    <p class="terms-last-updated">Last updated: <?=$termsup[0]['last_updated']?></p>
</div>
