<link rel="stylesheet" href="<?= base_url('user_assets/css/cart2.css') ?>">
<?php
// print_r($cartdata);

if (isset($_SESSION['users2_id'])) { ?>


<!-- Cart Section -->
<section class="cart-section mt-5" style="margin-top: 200px;">
    <?php if(!empty($cartdata)): ?>
    <div class="cart-container">
        <table class="cart-table">
            <thead class="cart-header">
                <tr>
                    <th>Remove</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach($cartdata as $item): ?>
                        <tr class="cart-row" data-id="<?= $item['cart_id'] ?>">
                            <td class="text-center">
                                <a href="<?=base_url()?>users/remove_cart/<?=$item['cart_id']?>" class="remove-btn" onclick="return confirm('Sure Remove From Cart!')">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                            <td class="product-cell">
                                <img src="<?= base_url('user_assets/img/products/'.$item['image1']) ?>" alt="<?= $item['name'] ?>" class="product-image">
                            </td>
                            <td class="product-cell">
                                <div class="product-info">
                                    <h3 class="product-name"><?= $item['name'] ?></h3>
                                    <p class="product-desc"><?= $item['description'] ?></p>
                                    <small><b>Brand:</b> <?= $item['brand'] ?> | <b>Weight:</b> <?= $item['weight'] ?></small>
                                </div>
                            </td>
                            <td class="price-cell">
                                <span class="product-price">₹<?= number_format($item['discount_amount'],2) ?></span>
                                <?php if($item['discount_amount'] < $item['price']): ?>
                                    <br><del class="text-muted">₹<?= number_format($item['price'],2) ?></del>
                                <?php endif; ?>
                            </td>
                            <td class="quantity-cell">
                                <div class="quantity-control">
                                    <button class="quantity-btn minus" onclick="decartqnt(this,<?=$item['cart_id']?>)">-</button>
                                    <input type="text" disabled class="quantity-input" value="<?= $item['quantity'] ?>">
                                    <button class="quantity-btn plus" onclick="incartqnt(this,<?=$item['cart_id']?>)">+</button>
                                </div>
                            </td>
                            <td class="total-cell">
                                <span class="product-total">₹<?= number_format($item['discount_amount'] * $item['quantity'],2) ?></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>

    <div class="cart-summary">
        <div class="summary-card">
            <h3 class="summary-title"><i class="fas fa-receipt"></i> Payment Details</h3>
            <?php 
                $mrpTotal = 0;
                $discountTotal = 0;
                $finalTotal = 0;
                if(!empty($cartdata)){
                    foreach($cartdata as $item){
                        $mrpTotal += ($item['price'] * $item['quantity']);
                        $finalTotal += ($item['discount_amount'] * $item['quantity']);
                    }
                    $discountTotal = $mrpTotal - $finalTotal;
                }
            ?>
            <ul class="totals-list">
                <li class="totals-item">
                    <span class="totals-label">MRP Total</span>
                    <span class="totals-value">₹<?= number_format($mrpTotal,2) ?></span>
                </li>
                <li class="totals-item">
                    <span class="totals-label">Product Discount</span>
                    <span class="totals-value">-₹<?= number_format($discountTotal,2) ?></span>
                </li>
                <li class="totals-item">
                    <span class="totals-label">Delivery Fee</span>
                    <span class="totals-value">₹0.00</span>
                </li>
                <li class="total-price">
                    <span>Total</span>
                    <span>₹<?= number_format($finalTotal,2) ?></span>
                </li>
            </ul>
            <a href="<?= base_url('users/checkout') ?>" class="summary-btn">Proceed to Checkout</a>
        </div>
    </div>
    <?php else: ?>
        <div class="cart-container">
            <p class="cart-table">
                <p class="cart-header">
                    <p class="text-center">Your cart is empty.</p>
                </p>
            </p>
        </div>
    <?php endif; ?>
</section>
<script type="text/javascript">
	function incartqnt(btn,cart_id){
		$.ajax({
			"url":"<?=base_url()?>users/incartqnt/"+cart_id
		}).done(function(res){
			console.log(res);
			location.reload();
		});
	}
	function decartqnt(btn,cart_id){
		$.ajax({
			"url":"<?=base_url()?>users/decartqnt/"+cart_id
		}).done(function(res){
			console.log(res);
			location.reload();
		});
	}

</script>
<?php }else{
    echo "not login";
} ?>
