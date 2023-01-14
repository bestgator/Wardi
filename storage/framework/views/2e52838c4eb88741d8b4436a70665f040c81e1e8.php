<?php if(Session::has('cart')): ?>
	<div class="dropdownmenu-wrapper">

		<div class="dropdown-cart-header">
			<span class="item-no">
				<span class="cart-quantity">
					<?php echo e(Session::has('cart') ? count(Session::get('cart')->items) : '0'); ?>

				</span> <?php echo e($langg->lang4); ?>

			</span>
			<a class="view-cart" href="<?php echo e(route('front.cart')); ?>">
			<?php echo e($langg->lang5); ?>

			</a>
		</div><!-- End .dropdown-cart-header -->

		<ul class="dropdown-cart-products">
			<?php $__currentLoopData = Session::get('cart')->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li class="product cremove<?php echo e($product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values'])); ?>">
					<div class="product-details">
						<div class="content">
							<a href="<?php echo e(route('front.product',$product['item']['slug'])); ?>"><h4 class="product-title"><?php if(Session::get('language') == '1'): ?> <?php echo e(mb_strlen($product['item']['name_en'],'utf-8') > 35 ? mb_substr($product['item']['name_en'],0,35,'utf-8').'...' : $product['item']['name_en']); ?> <?php else: ?> <?php echo e(mb_strlen($product['item']['name_ar'],'utf-8') > 35 ? mb_substr($product['item']['name_ar'],0,35,'utf-8').'...' : $product['item']['name_ar']); ?> <?php endif; ?></h4></a>
							<span class="cart-product-info">
								<span class="cart-product-qty" id="cqt<?php echo e($product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values'])); ?>">
									(<?php echo e($product['qty']); ?>

								</span>
								<span><?php echo e($product['item']['measure']); ?></span>
								x )
								<span id="prct<?php echo e($product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values'])); ?>">
									<?php echo e(App\Models\Product::convertPrice($product['item']['price'])); ?>

								</span>
							</span>
						</div>
					</div><!-- End .product-details -->
					<figure class="product-image-container">
						<a href="<?php echo e(route('front.product', $product['item']['slug'])); ?>" class="product-image">
							<?php  
								$src = null;
								if( file_exists(public_path('assets/images/thumbnails/'.$product['item']['thumbnail'])) && ($product['item']['thumbnail'] != "") ){
										$src =  asset('assets/images/thumbnails/'.$product['item']['thumbnail']) ;
								}elseif( file_exists(public_path('assets/images/products/'.$product['item']['photo'])) && ($product['item']['photo'] != "") ){
										$src =  asset('assets/images/products/'.$product['item']['photo']) ;
								}elseif( (substr( $product['item']['photo'], 0, 4 ) === "http") && ($product['item']['photo'] != "") ){
										$src =  $product['item']['photo'] ;
								}else{
										$src =  asset('assets/images/noimage.png') ;
								}
							?>
							<img src="<?php echo e($src); ?>" alt="<?php echo e($product['item']['name_ar']); ?>">
							
						</a>
						<div class="cart-remove" data-class="cremove<?php echo e($product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values'])); ?>" data-href="<?php echo e(route('product.cart.remove',$product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values']))); ?>" title="Remove Product">
							<i class="fas fa-times"></i>
						</div>
					</figure>
				</li><!-- End .product -->
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul><!-- End .cart-product -->

		<div class="dropdown-cart-total">
				<span><?php echo e($langg->lang6); ?></span>
				<span class="cart-total-price">
					<span class="cart-total"><?php echo e(Session::has('cart') ? App\Models\Product::convertPrice(Session::get('cart')->totalPrice) : '0.00'); ?>

					</span>
				</span>
		</div><!-- End .dropdown-cart-total -->

		<div class="dropdown-cart-action">
				<a href="<?php echo e(route('front.checkout')); ?>" class="mybtn1"><?php echo e($langg->lang7); ?></a>
		</div><!-- End .dropdown-cart-total -->
		
	</div>
<?php else: ?> 
	<p class="mt-1 pl-3 text-left"><?php echo e($langg->lang8); ?></p>
<?php endif; ?><?php /**PATH /usr/local/var/www/wardi/resources/views/load/cart.blade.php ENDPATH**/ ?>