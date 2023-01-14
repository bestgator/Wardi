

<?php $__env->startSection('styles'); ?>
    <style>
        .section-top {
            margin-left: auto;
            margin-right: auto;
        }
        @media (min-width:720px){
            .p-sku {
                margin-top: 1.4rem !important;
            }
        }
        @media (max-width:720px){
            .p-sku {
                margin-top: 1.4rem !important;
                text-align: right;
                margin-right: 0 !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', $productt->nameLang()); ?>
<?php $__env->startSection('image', $productt->ShowSinglePhoto()); ?>
<?php $__env->startSection('description', $productt->meta_description != "" ?  $productt->meta_description : \App\Classes\Helper::MakerDesc($productt->detailsLang())); ?>
<?php $__env->startSection('keywords', $productt->getRawOriginal('meta_tag') != "" ?  $productt->getRawOriginal('meta_tag') : \App\Classes\Helper::MakerTags($productt->nameLang(), $productt->category->slug, $productt->subcategory->slug, $productt->subcategory->nameLang(), $productt->childcategory->slug, $productt->childcategory->nameLang())); ?>

<?php $__env->startSection('content'); ?>

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="pages">

                        <li>
                            <a href="<?php echo e(route('front.index')); ?>"><?php echo e($langg->lang17); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('front.category',$productt->category->slug)); ?>"><?php echo e($productt->category->nameLang()); ?></a>
                        </li>
                        <?php if($productt->subcategory_id != null): ?>
                            <li>
                                <a href="<?php echo e(route('front.subcat',['slug1' => $productt->category->slug, 'slug2' => $productt->subcategory->slug])); ?>"><?php echo e($productt->subcategory->nameLang()); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if($productt->childcategory_id != null): ?>
                            <li>
                                <a href="<?php echo e(route('front.childcat',['slug1' => $productt->category->slug, 'slug2' => $productt->subcategory->slug, 'slug3' => $productt->childcategory->slug])); ?>"><?php echo e($productt->childcategory->nameLang()); ?></a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?php echo e(route('front.product', $productt->slug)); ?>"><?php echo e($productt->nameLang()); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Area Start -->
    <section class="product-details-page">

        <div class="container mb-3">
            <div class="row">

                <div class="col-lg-10">

                    <div class="row">

                        <div class="col-lg-6 col-md-12">

                            <div class="xzoom-container" style="text-align: center;min-width: 100%;">
                                <img class="xzoom5 lazyload w-100" id="xzoom-magnific" data-src="<?php echo e($productt->ShowSinglePhoto()); ?>" xoriginal="<?php echo e($productt->ShowSinglePhoto()); ?>" alt="<?php echo e($productt->nameLang()); ?>"/>
                                <div class="xzoom-thumbs">

                                    <div class="all-slider">

                                        <a href="<?php echo e($productt->ShowSinglePhoto()); ?>">
                                            <img class="xzoom-gallery5 lazyload" width="80" data-src="<?php echo e($productt->ShowSinglePhoto()); ?>" title="The description goes here" alt="<?php echo e($productt->nameLang()); ?>">
                                        </a>

                                        <?php $__currentLoopData = $productt->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <a href="<?php echo e(asset('assets/images/galleries/'.$gal->photo)); ?>">
                                                <img class="xzoom-gallery5 lazyload" width="80" data-src="<?php echo e(asset('assets/images/galleries/'.$gal->photo)); ?>" title="The description goes here" alt="<?php echo e($productt->nameLang()); ?>">
                                            </a>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="right-area">
                                <div class="product-info">

                                    <h1 class="product-name"><?php echo e($productt->nameLang()); ?></h1>

                                    <div class="info-meta-1">
                                        <ul>

                                            <?php if($productt->type == 'Physical'): ?>
                                                <?php if($productt->emptyStock()): ?>
                                                    <li class="product-outstook">
                                                        <p>
                                                            <i class="icofont-close-circled"></i>
                                                            <?php echo e($langg->lang78); ?>

                                                        </p>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="product-isstook">
                                                        <p>
                                                            <i class="icofont-check-circled"></i>
                                                            <?php echo e($gs->show_stock == 0 ? '' : $productt->stock); ?> <?php echo e($langg->lang79); ?>

                                                        </p>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <li>
                                                <div class="ratings">
                                                    <div class="empty-stars"></div>
                                                    <div class="full-stars" style="width:<?php echo e(($rating / 5) * 100); ?>%"></div>
                                                </div>
                                            </li>

                                            <li style="background: #ed64a5;border-radius: 50px;padding: 10px 20px;margin-right: 140px;color:white">
                                                <a href="javascript:;" style="font-size: 16px;color: white;">
                                                    <i class="fa fa-eye"></i> 
                                                    <?php echo e($productt->views ? $productt->views : 0); ?> 
                                                </a>
                                            </li> 
                                        </ul>
                                    </div>

                                    <div class="product-price mt-4">
                                        <b class="title" style="font-family: 'Tajawal'; font-size: 23px;"><?php echo e($langg->lang87); ?> :</b>
                                        <h3 class="price" style="font-family: 'Tajawal'; font-size: 23px">
                                            <span id="sizeprice"><?php echo e($productt->showPrice()); ?></span>
                                            <?php if($productt->showDiscountMsg() != ""): ?>
                                                <del style="text-decoration-color: #817878;"><?php echo e($productt->showPreviousPrice()); ?></del> 
                                            <?php endif; ?>
                                        </h3>
                                    </div>

                                    <h3 class="product-name mt-3" style="color:red;<?php echo e($productt->showDiscountMsg() == "" ? 'display:none' : ''); ?>">
                                        <span class="font-main" style="background-color:#ed64a5; border-radius: 4px;color:white;<?php echo e($productt->showDiscountMsgOnly() == "" ? '': 'padding: 2px 4px;margin-left: 10px;'); ?>">
                                            <?php echo e($productt->showDiscountMsg()); ?> 
                                        </span>
                                        <span class="font-main <?php echo e($productt->showDiscountMsgOnly() != "" ? 'cntr' : ''); ?>" 
                                            style="<?php echo e($productt->showDiscountMsgOnly() == "" ? '': 'padding: 2px 10px;display: inline-block;direction: ltr;'); ?>"
                                            data-hr="<?php echo e($productt->showDiscountMsgOnly()); ?>"
                                        ></span>
                                    </h3>

                                    <div class="info-meta-2"></div>


                                    <?php if(!empty($productt->size)): ?>
                                        <div class="product-size">
                                            <p class="title" style="font-family: 'Tajawal';"><?php echo e($langg->lang88); ?> :</p>
                                            <ul class="siz-list">
                                                <?php
                                                    $is_first = true;
                                                ?>
                                                <?php $__currentLoopData = $productt->size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="<?php echo e($is_first ? 'active' : ''); ?>">
                                                        <span class="box"><?php echo e($data1); ?>

                                                            <input type="hidden" class="size" value="<?php echo e($data1); ?>">
                                                            <input type="hidden" class="size_qty" value="<?php echo e($productt->size_qty[$key]); ?>">
                                                            <input type="hidden" class="size_key" value="<?php echo e($key); ?>">
                                                            <input type="hidden" class="size_price" value="<?php echo e(round($productt->size_price[$key] * $curr->value,2)); ?>">
                                                        </span>
                                                    </li>
                                                    <?php
                                                        $is_first = false;
                                                    ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(!empty($productt->color)): ?>
                                        <div class="product-color">
                                            <p class="title" style="font-family: 'Tajawal';"><?php echo e($langg->lang89); ?> :</p>
                                            <ul class="color-list">
                                                <?php
                                                    $is_first = true;
                                                ?>
                                                <?php $__currentLoopData = $productt->color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="<?php echo e($is_first ? 'active' : ''); ?>">
                                                        <span class="box" data-color="<?php echo e($productt->color[$key]); ?>" style="background-color: <?php echo e($productt->color[$key]); ?>"></span>
                                                    </li>
                                                    <?php
                                                        $is_first = false;
                                                    ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </ul>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(!empty($productt->size)): ?>

                                        <input type="hidden" id="stock" value="<?php echo e($productt->size_qty[0]); ?>">
                                    <?php else: ?>
                                        <?php
                                            $stck = (string)$productt->stock;
                                        ?>
                                        <?php if($stck != null): ?>
                                            <input type="hidden" id="stock" value="<?php echo e($stck); ?>">
                                        <?php elseif($productt->type != 'Physical'): ?>
                                            <input type="hidden" id="stock" value="0">
                                        <?php else: ?>
                                            <input type="hidden" id="stock" value="">
                                        <?php endif; ?>

                                    <?php endif; ?>

                                    <input type="hidden" id="product_price" value="<?php echo e(round($productt->price * $curr->value,2)); ?>">
                                    <input type="hidden" id="product_id" value="<?php echo e($productt->id); ?>">
                                    <input type="hidden" id="curr_pos" value="<?php echo e($gs->currency_format); ?>">
                                    <input type="hidden" id="curr_sign" value="<?php echo e($curr->sign); ?>">

                                    <div class="info-meta-3">
                                        <ul class="meta-list">

                                            <?php if($productt->product_type != "affiliate"): ?>
                                                <li class="d-block count <?php echo e($productt->type == 'Physical' ? '' : 'd-none'); ?>">
                                                    <div class="qty mb-3">
                                                        <ul>
                                                            <li>
                                                            <span class="qtminus">
                                                                <i class="icofont-minus"></i>
                                                            </span>
                                                            </li>
                                                            <li>
                                                                <span class="qttotal">1</span>
                                                            </li>
                                                            <li>
                                                                <span class="qtplus">
                                                                    <i class="icofont-plus"></i>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                            
                                            <?php if($productt->brand): ?>
                                                <li  class="d-block mb-2">
                                                    <b class="title" style="font-family: 'Tajawal'; font-size: 23px;">البراند :</b>
                                                    <a href="<?php echo e(route('front.brandProducts', $productt->brand->id)); ?>">
                                                        <h3 style="font-family: 'Tajawal'; font-size: 23px;display: inline-block;color: #ed64a5;">
                                                            <?php echo e($productt->brand->name_ar ? $productt->brand->name_ar :$productt->brand->name_en); ?>

                                                        </h3>
                                                    </a>
                                                </li>
                                            <?php endif; ?>


                                            <?php if($productt->emptyStock()): ?>
                                                <li class="addtocart mt-3">
                                                    <a href="javascript:;" class="cart-out-of-stock">
                                                        <i class="icofont-close-circled"></i>
                                                        <?php echo e($langg->lang78); ?>

                                                    </a>
                                                </li>
                                            <?php else: ?>
                                                <li class="addtocart mt-3">
                                                    <a href="javascript:;" id="addcrt"><i class="icofont-cart"></i><?php echo e($langg->lang90); ?>

                                                    </a>
                                                </li>

                                                <li class="addtocart mt-3">
                                                    <a id="qaddcrt" href="javascript:;">
                                                        <i class="icofont-cart"></i><?php echo e($langg->lang251); ?>

                                                    </a>
                                                </li>
                                            <?php endif; ?>


                                            <?php if(Auth::guard('web')->check()): ?>
                                                <li class="favorite mt-3">
                                                    <a href="javascript:;" class="add-to-wish" data-href="<?php echo e(route('user-wishlist-add',$productt->id)); ?>">
                                                        <i class="icofont-heart-alt"></i>
                                                    </a>
                                                </li>
                                            <?php else: ?>
                                                <li class="favorite mt-3">
                                                    <a href="javascript:;" data-toggle="modal" data-target="#comment-log-reg">
                                                        <i class="icofont-heart-alt"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                    </div>

                                    <div class="social-links mt-3 social-sharing a2a_kit a2a_kit_size_32">
                                        <ul class="link-list social-links">
                                            <li>
                                                <a class="facebook a2a_button_facebook" href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter a2a_button_twitter" href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="linkedin a2a_button_linkedin" href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="pinterest a2a_button_pinterest" href="#">
                                                    <i class="fab fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="pinterest a2a_button_whatsapp bg-success" href="https://api.whatsapp.com/send/?phone=966543504864&text&app_absent=0" target="blank">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <script async src="https://static.addtoany.com/menu/page.js"></script>

                                    <?php if( $productt->sku != null ): ?>
                                        <p class="p-sku">
                                            <?php echo e($langg->lang77); ?>:
                                            <span class="idno"><?php echo e($productt->sku); ?></span>
                                        </p>
                                    <?php endif; ?>

                                    <div class="mt-4 text-center mx-auto whts" style="display: none">
                                        <a class="btn btn-primary" href="https://api.whatsapp.com/send/?phone=966543504864&text&app_absent=0" target="blank" style="background: #ed64a5;border: 1px solid #ed64a5;">
                                            <?php if(Session::get('language') == '1' ): ?> Talk to doctor now <?php else: ?> تحدث الى طبيب الان  <?php endif; ?>
                                            <i class="fab fa-whatsapp text-success" style="color:red"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php if($productt->tags): ?>
                            <div class="col-md-12 mt-3" style="text-align: right;">
                                <?php $__currentLoopData = $productt->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('front.tag', $tag)); ?>">
                                    <span class="badge badge-secondary my-1" style="background-color: #dddddd;font-size: 90%;padding: 0.45em 0.45em;color:#515154">
                                        <?php echo e($tag); ?>

                                    </span>
                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div id="product-details-tab">
                                <div class="top-menu-area">
                                    <ul style="display: flex; flex-wrap: wrap;" class="tab-menu">
                                        <li>
                                            <a href="#tabs-1" style="font-size: 13px; font-family: 'Tajawal';"><?php echo e($langg->lang92); ?></a>
                                        </li>
                                        <li>
                                            <a href="#tabs-3" style="font-size: 13px;font-family: 'Tajawal';"><?php echo e($langg->lang95); ?>(<?php echo e(count($productt->ratings)); ?>)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content-wrapper">

                                    <div id="tabs-1" class="tab-content-area">
                                        <p><?php echo $productt->detailsLang(); ?></p>
                                    </div>

                                    <div id="tabs-3" class="tab-content-area">
                                        <div class="heading-area">
                                            <h4 class="title">
                                                <?php echo e($langg->lang96); ?>

                                            </h4>
                                            <div class="reating-area">
                                                <div class="stars">
                                                    <span id="star-rating"><?php echo e($rating); ?></span>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="replay-area">
                                            <div id="reviews-section">
                                                <?php if(count($productt->ratings) > 0): ?>
                                                    <ul class="all-replay">
                                                        <?php $__currentLoopData = $productt->ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <div class="single-review">
                                                                    <div class="left-area">
                                                                        <img
                                                                                data-src="<?php echo e($review->user->photo ? asset('assets/images/users/'.$review->user->photo):asset('assets/images/noimage.png')); ?>"
                                                                                alt="<?php echo e($review->user->name); ?>" class="lazyload">
                                                                        <h5 class="name"><?php echo e($review->user->name); ?></h5>
                                                                        <p class="date">
                                                                            <?php echo e(Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$review->review_date)->diffForHumans()); ?>

                                                                        </p>
                                                                    </div>
                                                                    <div class="right-area">
                                                                        <div class="header-area">
                                                                            <div class="stars-area">
                                                                                <ul class="stars">
                                                                                    <div class="ratings">
                                                                                        <div class="empty-stars"></div>
                                                                                        <div class="full-stars" style="width:<?php echo e($review->rating*20); ?>%"></div>
                                                                                    </div>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="review-body">
                                                                            <p>
                                                                                <?php echo e($review->review); ?>

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </li>
                                                    </ul>
                                                <?php else: ?>
                                                    <p><?php echo e($langg->lang97); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(Auth::guard('web')->check()): ?>
                                                <div class="review-area">
                                                    <h4 class="title"><?php echo e($langg->lang98); ?></h4>
                                                    <div class="star-area">
                                                        <ul class="star-list">
                                                            <li class="stars" data-val="1">
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li class="stars" data-val="2">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li class="stars" data-val="3">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li class="stars" data-val="4">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li class="stars active" data-val="5">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="write-comment-area">
                                                    <div class="gocover"
                                                            style="background: url(<?php echo e(asset('assets/images/'.$gs->loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
                                                    </div>
                                                    <form id="reviewform" action="<?php echo e(route('front.review.submit')); ?>"
                                                            data-href="<?php echo e(route('front.reviews',$productt->id)); ?>" method="POST">
                                                        <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                        <?php echo e(csrf_field()); ?>

                                                        <input type="hidden" id="rating" name="rating" value="5">
                                                        <input type="hidden" name="user_id" value="<?php echo e(Auth::guard('web')->user()->id); ?>">
                                                        <input type="hidden" name="product_id" value="<?php echo e($productt->id); ?>">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <textarea name="review" placeholder="<?php echo e($langg->lang99); ?>" required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button class="submit-btn" type="submit"><?php echo e($langg->lang100); ?></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            <?php else: ?>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <br>
                                                        <h5 class="text-center">
                                                            <a href="javascript:;" data-toggle="modal" data-target="#comment-log-reg"
                                                                    class="btn login-btn mr-1"><?php echo e($langg->lang101); ?></a> <?php echo e($langg->lang102); ?>

                                                        </h5>
                                                        <br>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">

                    <?php if(!empty($productt->whole_sell_qty)): ?>
                        <div class="table-area wholesell-details-page">
                            <h3><?php echo e($langg->lang770); ?></h3>
                            <table class="table">
                                <tr>
                                    <th><?php echo e($langg->lang768); ?></th>
                                    <th><?php echo e($langg->lang769); ?></th>
                                </tr>
                                <?php $__currentLoopData = $productt->whole_sell_qty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($productt->whole_sell_qty[$key]); ?>+</td>
                                        <td><?php echo e($productt->whole_sell_discount[$key]); ?>% <?php echo e($langg->lang771); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    <?php endif; ?>

                    <div class="seller-info mt-3">

                        <div class="content"></div>

                        <?php if( $productt->user_id  != 0): ?>
                            <a href="<?php echo e(route('front.vendor',str_replace(' ', '-', $productt->user->shop_name))); ?>" class="view-stor"><?php echo e($langg->lang249); ?></a>
                        <?php endif; ?>

                        


                        <div class="contact-seller">
                                
                            <ul class="list">
                                <?php if(Auth::guard('web')->check()): ?>
                                    <li>
                                        <a class="view-stor" href="javascript:;" data-toggle="modal" data-target="#vendorform">
                                            <i class="icofont-ui-chat"></i>
                                            <?php echo e($langg->lang81); ?>

                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <a class="view-stor" href="javascript:;" data-toggle="modal" data-target="#comment-log-reg">
                                            <i class="icofont-ui-chat"></i>
                                            <?php echo e($langg->lang81); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        

                    </div>

                </div>

            </div>
        </div>

        <!-- Trending Item Area Start -->
        <div class="trending">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-top mb-5">
                            <h2 class="section-title">
                                <?php echo e($langg->lang216); ?>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 remove-padding">
                        <div class="trending-item-slider-2">
                            <?php $__currentLoopData = $similar_pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('includes.product.slider-product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Tranding Item Area End -->

    </section>
    <!-- Product Details Area End -->

    
    <div class="message-modal">
        <div class="modal" id="vendorform" tabindex="-1" role="dialog" aria-labelledby="vendorformLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="vendorformLabel"><?php echo e($langg->lang118); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-form">
                                        <form id="emailreply1">
                                            <?php echo e(csrf_field()); ?>

                                            <ul>
                                                <li>
                                                    <input type="text" class="input-field" id="subj1" name="subject" 
                                                    value="<?php echo e($productt->nameLang()); ?>" placeholder="<?php echo e($langg->lang119); ?>" required="">
                                                </li>
                                                <li>
                                                    <textarea class="input-field textarea" name="message" id="msg1" placeholder="<?php echo e($langg->lang120); ?>" required=""></textarea>
                                                </li>
                                                <input type="hidden" name="type" value="Ticket">
                                            </ul>
                                            <button class="submit-btn" id="emlsub" type="submit"><?php echo e($langg->lang118); ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        


        <?php if(Auth::guard('web')->check()): ?>

            <?php if($productt->user_id != 0): ?>

                


                <div class="modal" id="vendorform1" tabindex="-1" role="dialog" aria-labelledby="vendorformLabel1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="vendorformLabel1"><?php echo e($langg->lang118); ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact-form">
                                                <form id="emailreply">
                                                    <?php echo e(csrf_field()); ?>

                                                    <ul>

                                                        <li>
                                                            <input type="text" class="input-field" readonly=""
                                                                    placeholder="Send To <?php echo e($productt->user->shop_name); ?>" readonly="">
                                                        </li>

                                                        <li>
                                                            <input type="text" class="input-field" id="subj" name="subject"
                                                                    placeholder="<?php echo e($langg->lang119); ?>" required="">
                                                        </li>

                                                        <li>
                        <textarea class="input-field textarea" name="message" id="msg"
                                placeholder="<?php echo e($langg->lang120); ?>" required=""></textarea>
                                                        </li>

                                                        <input type="hidden" name="email" value="<?php echo e(Auth::guard('web')->user()->email); ?>">
                                                        <input type="hidden" name="name" value="<?php echo e(Auth::guard('web')->user()->name); ?>">
                                                        <input type="hidden" name="user_id" value="<?php echo e(Auth::guard('web')->user()->id); ?>">
                                                        <input type="hidden" name="vendor_id" value="<?php echo e($productt->user->id); ?>">

                                                    </ul>
                                                    <button class="submit-btn" id="emlsub1" type="submit"><?php echo e($langg->lang118); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                


            <?php endif; ?>

        <?php endif; ?>

    </div>


    <?php if($gs->is_report): ?>

        <?php if(Auth::check()): ?>

            

            <div class="modal fade" id="report-modal" tabindex="-1" role="dialog" aria-labelledby="report-modal-Title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>

                            <div class="login-area">
                                <div class="header-area forgot-passwor-area">
                                    <h4 class="title"><?php echo e($langg->lang777); ?></h4>
                                    <p class="text"><?php echo e($langg->lang778); ?></p>
                                </div>
                                <div class="login-form">

                                    <form id="reportform" action="<?php echo e(route('product.report')); ?>" method="POST">

                                        <?php echo $__env->make('includes.admin.form-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                                        <input type="hidden" name="product_id" value="<?php echo e($productt->id); ?>">
                                        <div class="form-input">
                                            <input type="text" name="title" class="User Name" placeholder="<?php echo e($langg->lang779); ?>" required="">
                                            <i class="icofont-notepad"></i>
                                        </div>

                                        <div class="form-input">
                                            <textarea name="note" class="User Name" placeholder="<?php echo e($langg->lang780); ?>" required=""></textarea>
                                        </div>

                                        <button type="submit" class="submit-btn"><?php echo e($langg->lang196); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        <?php endif; ?>

    <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

    <script type="text/javascript">

        window.addEventListener('load', function(){
            // trending item  slider
            if($.fn.owlCarousel){
                var $trending_slider = $('.trending-item-slider-2');
                $trending_slider.owlCarousel({
                    items: 7,
                    autoplay: false,
                    margin: 0,
                    loop: true,
                    dots: true,
                    nav: true,
                    center: false,
                    autoplayHoverPause: true,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    smartSpeed: 800,
                    responsive: {
                        0: {
                            items: 2,
                        },
                        414: {
                            items: 2,
                        },
                        768: {
                            items: 2,
                        },
                        992: {
                            items: 2
                        },
                        1200: {
                            items: 4
                        }
                    }
                });
            }
            $(document).on("submit", "#emailreply1", function () {
                var token = $(this).find('input[name=_token]').val();
                var subject = $(this).find('input[name=subject]').val();
                var message = $(this).find('textarea[name=message]').val();
                var $type = $(this).find('input[name=type]').val();
                $('#subj1').prop('disabled', true);
                $('#msg1').prop('disabled', true);
                $('#emlsub').prop('disabled', true);
                $.ajax({
                    type: 'post',
                    url: "<?php echo e(URL::to('/user/admin/user/send/message')); ?>",
                    data: {
                        '_token': token,
                        'subject': subject,
                        'message': message,
                        'type': $type
                    },
                    success: function (data) {
                        $('#subj1').prop('disabled', false);
                        $('#msg1').prop('disabled', false);
                        $('#subj1').val('');
                        $('#msg1').val('');
                        $('#emlsub').prop('disabled', false);
                        if (data == 0)
                            toastr.error("Oops Something Goes Wrong !!");
                        else
                            toastr.success("Message Sent !!");
                        $('.close').click();
                    }

                });
                return false;
            });
        });

    </script>


    <script type="text/javascript">
    
        window.addEventListener('load', function(){
            $(document).on("submit", "#emailreply", function () {
                var token = $(this).find('input[name=_token]').val();
                var subject = $(this).find('input[name=subject]').val();
                var message = $(this).find('textarea[name=message]').val();
                var email = $(this).find('input[name=email]').val();
                var name = $(this).find('input[name=name]').val();
                var user_id = $(this).find('input[name=user_id]').val();
                var vendor_id = $(this).find('input[name=vendor_id]').val();
                $('#subj').prop('disabled', true);
                $('#msg').prop('disabled', true);
                $('#emlsub').prop('disabled', true);
                $.ajax({
                    type: 'post',
                    url: "<?php echo e(URL::to('/vendor/contact')); ?>",
                    data: {
                        '_token': token,
                        'subject': subject,
                        'message': message,
                        'email': email,
                        'name': name,
                        'user_id': user_id,
                        'vendor_id': vendor_id
                    },
                    success: function () {
                        $('#subj').prop('disabled', false);
                        $('#msg').prop('disabled', false);
                        $('#subj').val('');
                        $('#msg').val('');
                        $('#emlsub').prop('disabled', false);
                        toastr.success("<?php echo e($langg->message_sent); ?>");
                        $('.ti-close').click();
                    }
                });
                return false;
            });
        });

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/var/www/wardi/resources/views/front/product.blade.php ENDPATH**/ ?>