<style>
    .privacy-container {
        margin-top: 150px;
        max-width: 900px;
    }

    .privacy-section {
        border-left: 5px solid #28a745;
        /* green accent */
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .privacy-section:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .privacy-section h2 {
        color: #28a745;
        font-size: 1.5rem;
    }

    .privacy-section h3 {
        color: #333;
        font-size: 1.2rem;
        margin-top: 1rem;
    }

    .list-group-item {
        border: none;
        padding-left: 0;
        padding-right: 0;
    }

    .contact-info h2 {
        color: #28a745;
    }

    .last-updated {
        font-size: 0.9rem;
    }
</style>
<div class="container py-5 privacy-container">
    <h1 class="text-center fw-bold mb-5" data-aos="fade-down">Privacy Policy</h1>

    <div class="privacy-section shadow-sm p-4 mb-4 bg-white rounded" data-aos="fade-right">
        <p><?= htmlspecialchars($privacy[0]['policy_description_1']) ?></p>
        <p><?= htmlspecialchars($privacy[0]['policy_description_2']) ?></p>
    </div>

    <div class="privacy-section shadow-sm p-4 mb-4 bg-light rounded" data-aos="fade-left">
        <h2 class="fw-bold mb-3">1. <?= htmlspecialchars($privacy[1]['policy_title']) ?></h2>
        <h3 class="fw-semibold">1.1. <?= htmlspecialchars($privacy[1]['policy_heading']) ?></h3>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item"><?= htmlspecialchars($privacy[1]['policy_description_1']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[1]['policy_description_2']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[1]['policy_description_3']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[1]['policy_description_4']) ?></li>
        </ul>

        <h3 class="fw-semibold">1.2. <?= htmlspecialchars($privacy[2]['policy_heading']) ?></h3>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item"><?= htmlspecialchars($privacy[2]['policy_description_1']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[2]['policy_description_2']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[2]['policy_description_3']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[2]['policy_description_4']) ?></li>
        </ul>

        <h3 class="fw-semibold">1.3. <?= htmlspecialchars($privacy[3]['policy_heading']) ?></h3>
        <p><?= htmlspecialchars($privacy[3]['policy_description_1']) ?></p>
    </div>

    <div class="privacy-section shadow-sm p-4 mb-4 bg-white rounded" data-aos="fade-right">
        <h2 class="fw-bold mb-3">2. <?= htmlspecialchars($privacy[4]['policy_title']) ?></h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= htmlspecialchars($privacy[4]['policy_description_1']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[4]['policy_description_2']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[4]['policy_description_3']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[4]['policy_description_4']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[4]['policy_description_5']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[4]['policy_description_6']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[4]['policy_description_7']) ?></li>
        </ul>
    </div>

    <div class="privacy-section shadow-sm p-4 mb-4 bg-light rounded" data-aos="fade-left">
        <h2 class="fw-bold mb-3">3. <?= htmlspecialchars($privacy[5]['policy_title']) ?></h2>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item"><strong>Service Providers:</strong> <?= htmlspecialchars($privacy[5]['policy_description_1']) ?></li>
            <li class="list-group-item"><strong>Business Partners:</strong> <?= htmlspecialchars($privacy[5]['policy_description_2']) ?></li>
            <li class="list-group-item"><strong>Legal Authorities:</strong> <?= htmlspecialchars($privacy[5]['policy_description_3']) ?></li>
        </ul>
        <p><?= htmlspecialchars($privacy[5]['policy_description_4']) ?></p>
    </div>

    <div class="privacy-section shadow-sm p-4 mb-4 bg-white rounded" data-aos="fade-right">
        <h2 class="fw-bold mb-3">4. <?= htmlspecialchars($privacy[6]['policy_title']) ?></h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= htmlspecialchars($privacy[6]['policy_description_1']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[6]['policy_description_2']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[6]['policy_description_3']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[6]['policy_description_4']) ?></li>
        </ul>
    </div>

    <div class="privacy-section shadow-sm p-4 mb-4 bg-light rounded" data-aos="fade-left">
        <h2 class="fw-bold mb-3">5. <?= htmlspecialchars($privacy[7]['policy_title']) ?></h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= htmlspecialchars($privacy[7]['policy_description_1']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[7]['policy_description_2']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[7]['policy_description_3']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[7]['policy_description_4']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[7]['policy_description_5']) ?></li>
            <li class="list-group-item"><?= htmlspecialchars($privacy[7]['policy_description_6']) ?></li>
        </ul>
        <p class="mt-2"><?= htmlspecialchars($privacy[7]['policy_description_7']) ?></p>
    </div>

    <div class="privacy-section shadow-sm p-4 mb-4 bg-white rounded" data-aos="fade-right">
        <h2 class="fw-bold mb-3">6. <?= htmlspecialchars($privacy[8]['policy_title']) ?></h2>
        <p><?= htmlspecialchars($privacy[8]['policy_description_1']) ?></p>
        <p><?= htmlspecialchars($privacy[8]['policy_description_2']) ?></p>
    </div>

    <div class="privacy-section shadow-sm p-4 mb-4 bg-light rounded" data-aos="fade-left">
        <h2 class="fw-bold mb-3">7. <?= htmlspecialchars($privacy[9]['policy_title']) ?></h2>
        <p><?= htmlspecialchars($privacy[9]['policy_description_1']) ?></p>
    </div>

    <div class="privacy-section shadow-sm p-4 mb-4 bg-white rounded" data-aos="fade-right">
        <h2 class="fw-bold mb-3">8. <?= htmlspecialchars($privacy[10]['policy_title']) ?></h2>
        <p><?= htmlspecialchars($privacy[10]['policy_description_1']) ?></p>
    </div>

    <div class="contact-info shadow-sm p-4 mb-5 bg-light rounded" data-aos="fade-up">
        <h2 class="fw-bold mb-3"><?= htmlspecialchars($privacy[11]['policy_title']) ?></h2>
        <p><?= htmlspecialchars($privacy[11]['policy_description_1']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($privacy[11]['policy_description_2']) ?></p>
        <p><strong>Phone:</strong> <?= htmlspecialchars($privacy[11]['policy_description_3']) ?></p>
        <p><strong>Address:</strong> <?= htmlspecialchars($privacy[11]['policy_description_4']) ?></p>
    </div>

    <p class="text-center text-muted fst-italic mb-5" data-aos="fade">Last updated: <?=$privacyup[0]['last_updated']?></p>
</div>
