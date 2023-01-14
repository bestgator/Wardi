<a href="<?php echo e(route('front.product', $prod->slug)); ?>" class="item">

	<div style="top: 1067px;width: 50%;<?php echo e($prod->showDiscountMsgOnly() != "" ? 'background: #f63134 0% 0% no-repeat padding-box;' : ''); ?>border-radius: 10px;opacity: 1; margin-right: auto; margin-left: auto;">
			<h4 style="top: 1090px; text-align: center;font: normal normal bold 15px/22px Tajawal;letter-spacing: 0px;color: #FFFFFF;opacity: 1;">
				<span class="font-main"><?php echo e($prod->showDiscountMsg() ?  $prod->showDiscountMsg() : 'none'); ?> </span>
			</h4>
	</div>

	<div class="item-img">

		<?php if(!empty($prod->features)): ?>
			<div class="sell-area">
				<?php $__currentLoopData = $prod->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<span class="sale" style="background-color:<?php echo e($prod->colors[$key]); ?>"><?php echo e($prod->features[$key]); ?></span>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		<?php endif; ?>

		<div class="extra-list">
			<ul>

				<li>
					<?php if(Auth::guard('web')->check()): ?>
						<span class="add-to-wish" data-href="<?php echo e(route('user-wishlist-add',$prod->id)); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo e($langg->lang54); ?>" data-placement="right"><i class="far fa-heart" ></i>
						</span>
					<?php else: ?>
						<span rel-toggle="tooltip" title="<?php echo e($langg->lang54); ?>" data-toggle="modal" id="wish-btn" data-target="#comment-log-reg" data-placement="right">
							<i class="far fa-heart"></i>
						</span>
					<?php endif; ?>
				</li>

				<li>
					<span class="quick-view" rel-toggle="tooltip" title="<?php echo e($langg->lang55); ?>" href="javascript:;" data-href="<?php echo e(route('product.quick',$prod->id)); ?>" data-toggle="modal" data-target="#quickview" data-placement="right"> 
						<i class="far fa-eye"></i>
					</span>
				</li>

			</ul>
		</div>

		

		<img class="img-fluid lazyload" data-src="<?php echo e($prod->ShowPhoto()); ?>" alt="<?php echo e($prod->showName()); ?>" data-sizes="auto">
	
	</div>

	<div class="info">

		<span class="font-main <?php echo e($prod->showDiscountMsgOnly() != "" ? 'cntr' : ''); ?>" 
			style="<?php echo e($prod->showDiscountMsgOnly() == "" ? 'color:white;': ''); ?>"
			data-hr="<?php echo e($prod->showDiscountMsgOnly()); ?>"
		><?php echo e($prod->showDiscountMsgOnly() == "" ? "none" : ''); ?></span>
		
		<div class="stars">
			<div class="ratings">
					<div class="empty-stars"></div>
					<div class="full-stars" style="width:<?php echo e($prod->ratings ? ( ($prod->ratings->avg('rating') / 5) * 100) : '0'); ?>%"></div>
			</div>
		</div>
		
		<h4 class="price font-main">
			<?php echo e($prod->showPrice()); ?>  
			<?php if( $prod->showDiscountMsg() != ""): ?> 
				<del><?php echo e($prod->showPreviousPrice()); ?></del> 
			<?php endif; ?>
		</h4>
		
		<h5 class="name font-main" ><?php echo e($prod->showName()); ?></h5>
		
		<div class="item-cart-area ">
			<?php if($prod->product_type == "affiliate"): ?>
				<span class="add-to-cart-btn affilate-btn font-main"
					data-href="<?php echo e(route('affiliate.product', $prod->slug)); ?>"><i class="fas fa-shopping-cart"></i>
					<?php echo e($langg->lang251); ?>

				</span>
			<?php else: ?>
				<?php if($prod->stock === 0): ?>
					<span class="add-to-cart-btn cart-out-of-stock font-main">
						<i class="far fa-times-circle"></i> <?php echo e($langg->lang78); ?>

					</span>
				<?php else: ?>
					<span class="add-to-cart add-to-cart-btn font-main" data-href="<?php echo e(route('product.cart.add',$prod->id)); ?>">
						<i class="fas fa-shopping-cart"></i> <?php echo e($langg->lang56); ?>

					</span>
					<span class="add-to-cart-quick add-to-cart-btn font-main"
						data-href="<?php echo e(route('product.cart.quickadd',$prod->id)); ?>">
						<i class="fas fa-shopping-cart"></i> <?php echo e($langg->lang251); ?>

					</span>
				<?php endif; ?>
			<?php endif; ?>
		</div>

	</div>

</a><?php /**PATH /usr/local/var/www/wardi/resources/views/includes/product/slider-product.blade.php ENDPATH**/ ?>