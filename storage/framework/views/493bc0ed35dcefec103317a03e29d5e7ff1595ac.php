<!DOCTYPE html>
<html lang="<?php echo e(Session::get('language') == "1" ? 'en' : 'ar'); ?>">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="<?php echo e(url()->current()); ?>" />
    
    <meta name="p:domain_verify" content="2997a8fe56d42fc62078a230d301e26a"/>
    
	<meta name="keywords" content="<?php echo $__env->yieldContent('keywords',$seo->meta_keys ); ?>">
	<meta name="description" content="<?php echo $__env->yieldContent('description',$seo->meta_desc); ?>">
	<title><?php echo $__env->yieldContent('title',$gs->title); ?></title>

	<meta property="og:title" content="<?php echo $__env->yieldContent('title',$gs->title); ?>" />
	<meta property="og:description" content="<?php echo $__env->yieldContent('description',$seo->meta_desc); ?>" />
	<meta property="og:image" content="<?php echo $__env->yieldContent('image',asset('assets/images/'.$gs->favicon)); ?>" />
	<meta name="author" content="Wardi">

	<meta name="twitter:card" content="summary">
	<meta property="twitter:title" content="<?php echo $__env->yieldContent('title',$gs->title); ?>">
	<meta property="twitter:description" content="<?php echo $__env->yieldContent('description',$seo->meta_desc); ?>">
	<meta property="twitter:image" content="<?php echo $__env->yieldContent('image',asset('assets/images/'.$gs->favicon)); ?>">
	<meta property="twitter:url" content="<?php echo e(url()->current()); ?>">

	<!-- favicon -->
	<link rel="icon"  type="image/x-icon" href="<?php echo e(asset('assets/images/'.$gs->favicon)); ?>" class="before_main"/>

	<?php if($langg->rtl == "1"): ?>
	
		<!-- stylesheet -->
		
		
		

		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/bootstrap.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/bootstrap.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/animate.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/animate.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/corenav.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/corenav.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/meanmenu.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/meanmenu.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/slick.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/slick.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/owl-carousel.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/owl-carousel.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/magnific.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/magnific.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/nice-select.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/nice-select.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/toastr.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/toastr.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/jqueryui.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/jqueryui.min.css')); ?>"></noscript>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/global-style.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/global-style.min.css')); ?>"></noscript>
		
		
		
		
		
		
		
		
		
		
		
		
		
		

	<?php else: ?>

		<!-- stylesheet -->
		
		
		<script>
      (function() {
					// load main.css
					var cssMain = document.createElement('link');
          cssMain.href = "<?php echo e(asset('assets/front/css/all.min.css').'?v='.filemtime(public_path('assets/front/css/all.min.css'))); ?>";
          cssMain.rel = 'stylesheet';
          cssMain.type = 'text/css';
          document.querySelector('.before_main').after(cssMain);
			})();
    </script>
		
	<?php endif; ?>

	<?php echo $__env->yieldContent('styles'); ?>

	<?php if($langg->rtl == "1"): ?>

		
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/styles.php?color='.str_replace('#','',$gs->colors).'&'.'header_color='.str_replace('#','',$gs->header_color).'&'.'footer_color='.str_replace('#','',$gs->footer_color).'&'.'copyright_color='.str_replace('#','',$gs->copyright_color).'&'.'menu_color='.str_replace('#','',$gs->menu_color).'&'.'menu_hover_color='.str_replace('#','',$gs->menu_hover_color)).'&v='.filemtime(public_path('assets/front/css/rtl/styles.php'))); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/styles.php?color='.str_replace('#','',$gs->colors).'&'.'header_color='.str_replace('#','',$gs->header_color).'&'.'footer_color='.str_replace('#','',$gs->footer_color).'&'.'copyright_color='.str_replace('#','',$gs->copyright_color).'&'.'menu_color='.str_replace('#','',$gs->menu_color).'&'.'menu_hover_color='.str_replace('#','',$gs->menu_hover_color)).'&v='.filemtime(public_path('assets/front/css/rtl/styles.php'))); ?>"></noscript>

	<?php else: ?>

		<link rel="stylesheet" href="<?php echo e(asset('assets/front/css/styles.php?color='.str_replace('#','',$gs->colors).'&'.'header_color='.str_replace('#','',$gs->header_color).'&'.'footer_color='.str_replace('#','',$gs->footer_color).'&'.'copyright_color='.str_replace('#','',$gs->copyright_color).'&'.'menu_color='.str_replace('#','',$gs->menu_color).'&'.'menu_hover_color='.str_replace('#','',$gs->menu_hover_color))); ?>">

	<?php endif; ?>

	<style>
		@media (max-width:600px){.top-header .content .right-content .list li.login{margin-left:-10px!important}}.top-header ul li.my-dropdown.profilearea .my-dropdown-menu{right:auto!important;left:auto!important}.header-new{background:#464646;color:#fff}.alert-dark{color:#fff!important;background-color:#464646!important;border-color:#464646!important}.btn-def{border:0;padding:4px 20px;background:#fff;color:{};}.item .info .name{height:auto!important}.whts .btn-primary{color:#fff;background-color:{};}.owl-next,.owl-prev{margin-top:-30px}.xzoom-preview{width:490px!important;height:490px!important;background:#fff;position:absolute;z-index:99999;right:600px;top:-70px!important}.whatsapp_icon{background:#2bb43e!important;height:50px;float:left;padding:12px 13px;border:0;cursor:pointer;opacity:.8;z-index:200;position:fixed;box-sizing:border-box;overflow:hidden;box-shadow:rgb(0 0 0 / 40%) 2px 2px 6px;transition:all .5s ease 0s;bottom:50px;display:block;left:15px;width:50px;border-radius:50%;color:#fff;font-size:27px}.owl-carousel{touch-action:manipulation}.owl-carousel.owl-loaded{margin-bottom:10px}.owl-carousel .owl-stage{display:flex;align-items:center}.preloader{position:fixed;top:0;left:0;width:100%;height:100%;background-color:#fff;z-index:9999999}@media  only screen and (max-width:767px){ul.categories_mega_menu{height:fit-content}ul.categories_mega_menu li{padding:.9em 0 0 0}}
		.logo-header.nav-fixed{position: fixed;top: 0;left: 0;width: 100%;z-index: 99;-webkit-box-shadow: 0 3px 10px rgb(0 0 0 / 30%);box-shadow: 0 3px 10px rgb(0 0 0 / 30%);animation: smoothScroll 1.5s forwards;}@keyframes  smoothScroll {0% {transform: translateY(-40px);}100% {transform: translateY(0px);}}@media  only screen and (max-width: 767px){ ul.wardi-mega-menu .link-area a { font-size: 16px !important;}}@media  only screen and (max-width: 767px){ .sub-categori .left-area .filter-result-area .body-area .filter-list li a { font-size: 18px; } .sub-categori .left-area .filter-result-area .body-area .filter-list li .child-content a {font-size: 16px;} }
		.hero-area .owl-carousel .owl-nav {
			overflow: hidden;
    	height: 0px;
		}
		.hero-area .owl-carousel .owl-nav .owl-prev .fa.fa-angle-left{
			position: absolute;
			cursor: pointer;
			top: 50% !important;
			left: 20px;
			background: white;
			border: 1px solid white;
			border-radius: 10%;
			padding: 10px;
			text-align: center;
			color: #ed64a5;
			font-size: 1.4rem;
		}
		.hero-area .owl-carousel .owl-nav .owl-next .fa.fa-angle-right{
			position: absolute;
			cursor: pointer;
			top: 50% !important;
			right: 20px;
			background: white;
			border: 1px solid white;
			border-radius: 10%;
			padding: 10px;
			text-align: center;
			color: #ed64a5;
			font-size: 1.4rem;
		}
		@media  only screen and (max-width: 767px){
			ul.wardi-mega-menu li.dropdown_list:nth-child(2) .link-area a i {
				float: right;
			}
			.font-main.cntr {
				font-size: 0.8rem !important;
			}
			.coun_t{
				padding: 2px 3px !important;
			}
			.product-details-page .font-main.cntr, .product-details-page h3.product-name .font-main {
    		font-size: 1.1rem !important;
			}
		}
		@media (min-width:720px){
			ul.wardi-mega-menu{
				/* justify-content:center!important; */
				flex-wrap: wrap;
			}
		}
		.sales{
			position: absolute;
			top: 5px;
			left: 140px;
			width: 100px;
			z-index: 9999999;
		}
		.coun_t {
			background-color:#000;
			/* background-color: #ed64a5; */
			padding: 3px 5px;
			color: white;
			border-radius: 3px; 
			direction: ltr;
			font-size: 13px;
			display: inline-block;
			margin-right: 3px;
			/* color: #000; */
		}
		#sortby option {
			font-size: 15px;
		}
		.filter-result-area .child-content {
    	padding-right: 15px!important;
		}
		.product-name.mt-3{
			font-size: 16px !important;
			line-height: 1.5 !important;
		}
		@media (max-width: 600px){
            .logo-header .search-box .search-form input {
                padding-right: 40px;
            }
		}
	</style>

	<?php
		if(!function_exists('isMobile')){
			function isMobile() {
				return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
			}
		}
	?>
	
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@graph": [
				{
					"@type": "Organization",
					"@id": "<?php echo e(url('/')); ?>/#organization",
					"name": "<?php echo e($gs->title); ?>",
					"url": "<?php echo e(url('/')); ?>/",
					"sameAs": [
						"https://www.facebook.com/OnlinestoreWardi/",
						"https://twitter.com/StoreWardi",
						"https://www.instagram.com/wardistoreonline/"
					],
					"logo": {
						"@type": "ImageObject",
						"@id": "<?php echo e(url('/')); ?>/#logo",
						"inLanguage": "ar-SA",
						"url": "<?php echo e(asset('assets/images/'.$gs->logo)); ?>",
						"width":  592,
						"height": 102,
						"caption": "<?php echo e($gs->title); ?>"
					},
					"image": { "@id": "<?php echo e(url('/')); ?>/#logo" }
				},
				{
					"@type": "WebSite",
					"@id": "<?php echo e(url('/')); ?>/#website",
					"url": "<?php echo e(url('/')); ?>/",
					"name": "<?php echo e($gs->title); ?>",
					"inLanguage": "ar-SA",
					"description": "يعد متجر وردي من أكثر مواقع التجارة الإلكترونية في المملكة العربية السعودية تحت مؤسسة رواج العالمية للتجارة المرخصة بالسجل التجاري رقم 1010436978 ، يضم متجر وردي أكثر من 10000 منتج من مختلف الأقسام التي تشمل منتجات التجميل والعطور والمكياج وأجهزة التجميل",
					"publisher": { "@id": "<?php echo e(url('/')); ?>/#organization" },
					"potentialAction": [
						{
							"@type": "SearchAction",
							"target": "<?php echo e(url('/')); ?>/category?search={search_term_string}",
							"query-input": "required name=search_term_string"
						}
					]
				},
				{
					"@type": "CollectionPage",
					"@id": "<?php echo e(url('/')); ?>/#webpage",
					"url": "<?php echo e(url('/')); ?>/",
					"name": "يعد متجر وردي من أكثر مواقع التجارة الإلكترونية في المملكة العربية السعودية تحت مؤسسة رواج العالمية للتجارة المرخصة بالسجل التجاري رقم 1010436978 ، يضم متجر وردي أكثر من 10000 منتج من مختلف الأقسام التي تشمل منتجات التجميل والعطور والمكياج وأجهزة التجميل",
					"isPartOf": { "@id": "<?php echo e(url('/')); ?>/#website" },
					"inLanguage": "ar-SA",
					"about": { "@id": "<?php echo e(url('/')); ?>/#organization" },
					"description": "يعد متجر وردي من أكثر مواقع التجارة الإلكترونية في المملكة العربية السعودية تحت مؤسسة رواج العالمية للتجارة المرخصة بالسجل التجاري رقم 1010436978 ، يضم متجر وردي أكثر من 10000 منتج من مختلف الأقسام التي تشمل منتجات التجميل والعطور والمكياج وأجهزة التجميل"
				}
			]
		}
	</script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WSDLDJR');</script>
    <!-- End Google Tag Manager -->
    
    <!--<link rel="stylesheet" href="<?php echo e(asset('assets/front/css/new-style.css')); ?>">-->
    <link rel="preload" href="<?php echo e(asset('assets/front/css/new-style.css').'?v='.filemtime(public_path('assets/front/css/new-style.css'))); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/new-style.css').'?v='.filemtime(public_path('assets/front/css/new-style.css'))); ?>"></noscript>
</head>

<body>

	
	
	
	

	<script async type="text/javascript">
		/*! lazysizes - v5.3.1 */
		!function(e){var t=function(u,D,f){"use strict";var k,H;if(function(){var e;var t={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",fastLoadedClass:"ls-is-cached",iframeLoadMode:0,srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:true,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:true,ricTimeout:0,throttleDelay:125};H=u.lazySizesConfig||u.lazysizesConfig||{};for(e in t){if(!(e in H)){H[e]=t[e]}}}(),!D||!D.getElementsByClassName){return{init:function(){},cfg:H,noSupport:true}}var O=D.documentElement,i=u.HTMLPictureElement,P="addEventListener",$="getAttribute",q=u[P].bind(u),I=u.setTimeout,U=u.requestAnimationFrame||I,o=u.requestIdleCallback,j=/^picture$/i,r=["load","error","lazyincluded","_lazyloaded"],a={},G=Array.prototype.forEach,J=function(e,t){if(!a[t]){a[t]=new RegExp("(\\s|^)"+t+"(\\s|$)")}return a[t].test(e[$]("class")||"")&&a[t]},K=function(e,t){if(!J(e,t)){e.setAttribute("class",(e[$]("class")||"").trim()+" "+t)}},Q=function(e,t){var a;if(a=J(e,t)){e.setAttribute("class",(e[$]("class")||"").replace(a," "))}},V=function(t,a,e){var i=e?P:"removeEventListener";if(e){V(t,a)}r.forEach(function(e){t[i](e,a)})},X=function(e,t,a,i,r){var n=D.createEvent("Event");if(!a){a={}}a.instance=k;n.initEvent(t,!i,!r);n.detail=a;e.dispatchEvent(n);return n},Y=function(e,t){var a;if(!i&&(a=u.picturefill||H.pf)){if(t&&t.src&&!e[$]("srcset")){e.setAttribute("srcset",t.src)}a({reevaluate:true,elements:[e]})}else if(t&&t.src){e.src=t.src}},Z=function(e,t){return(getComputedStyle(e,null)||{})[t]},s=function(e,t,a){a=a||e.offsetWidth;while(a<H.minSize&&t&&!e._lazysizesWidth){a=t.offsetWidth;t=t.parentNode}return a},ee=function(){var a,i;var t=[];var r=[];var n=t;var s=function(){var e=n;n=t.length?r:t;a=true;i=false;while(e.length){e.shift()()}a=false};var e=function(e,t){if(a&&!t){e.apply(this,arguments)}else{n.push(e);if(!i){i=true;(D.hidden?I:U)(s)}}};e._lsFlush=s;return e}(),te=function(a,e){return e?function(){ee(a)}:function(){var e=this;var t=arguments;ee(function(){a.apply(e,t)})}},ae=function(e){var a;var i=0;var r=H.throttleDelay;var n=H.ricTimeout;var t=function(){a=false;i=f.now();e()};var s=o&&n>49?function(){o(t,{timeout:n});if(n!==H.ricTimeout){n=H.ricTimeout}}:te(function(){I(t)},true);return function(e){var t;if(e=e===true){n=33}if(a){return}a=true;t=r-(f.now()-i);if(t<0){t=0}if(e||t<9){s()}else{I(s,t)}}},ie=function(e){var t,a;var i=99;var r=function(){t=null;e()};var n=function(){var e=f.now()-a;if(e<i){I(n,i-e)}else{(o||r)(r)}};return function(){a=f.now();if(!t){t=I(n,i)}}},e=function(){var v,m,c,h,e;var y,z,g,p,C,b,A;var n=/^img$/i;var d=/^iframe$/i;var E="onscroll"in u&&!/(gle|ing)bot/.test(navigator.userAgent);var _=0;var w=0;var M=0;var N=-1;var L=function(e){M--;if(!e||M<0||!e.target){M=0}};var x=function(e){if(A==null){A=Z(D.body,"visibility")=="hidden"}return A||!(Z(e.parentNode,"visibility")=="hidden"&&Z(e,"visibility")=="hidden")};var W=function(e,t){var a;var i=e;var r=x(e);g-=t;b+=t;p-=t;C+=t;while(r&&(i=i.offsetParent)&&i!=D.body&&i!=O){r=(Z(i,"opacity")||1)>0;if(r&&Z(i,"overflow")!="visible"){a=i.getBoundingClientRect();r=C>a.left&&p<a.right&&b>a.top-1&&g<a.bottom+1}}return r};var t=function(){var e,t,a,i,r,n,s,o,l,u,f,c;var d=k.elements;if((h=H.loadMode)&&M<8&&(e=d.length)){t=0;N++;for(;t<e;t++){if(!d[t]||d[t]._lazyRace){continue}if(!E||k.prematureUnveil&&k.prematureUnveil(d[t])){R(d[t]);continue}if(!(o=d[t][$]("data-expand"))||!(n=o*1)){n=w}if(!u){u=!H.expand||H.expand<1?O.clientHeight>500&&O.clientWidth>500?500:370:H.expand;k._defEx=u;f=u*H.expFactor;c=H.hFac;A=null;if(w<f&&M<1&&N>2&&h>2&&!D.hidden){w=f;N=0}else if(h>1&&N>1&&M<6){w=u}else{w=_}}if(l!==n){y=innerWidth+n*c;z=innerHeight+n;s=n*-1;l=n}a=d[t].getBoundingClientRect();if((b=a.bottom)>=s&&(g=a.top)<=z&&(C=a.right)>=s*c&&(p=a.left)<=y&&(b||C||p||g)&&(H.loadHidden||x(d[t]))&&(m&&M<3&&!o&&(h<3||N<4)||W(d[t],n))){R(d[t]);r=true;if(M>9){break}}else if(!r&&m&&!i&&M<4&&N<4&&h>2&&(v[0]||H.preloadAfterLoad)&&(v[0]||!o&&(b||C||p||g||d[t][$](H.sizesAttr)!="auto"))){i=v[0]||d[t]}}if(i&&!r){R(i)}}};var a=ae(t);var S=function(e){var t=e.target;if(t._lazyCache){delete t._lazyCache;return}L(e);K(t,H.loadedClass);Q(t,H.loadingClass);V(t,B);X(t,"lazyloaded")};var i=te(S);var B=function(e){i({target:e.target})};var T=function(e,t){var a=e.getAttribute("data-load-mode")||H.iframeLoadMode;if(a==0){e.contentWindow.location.replace(t)}else if(a==1){e.src=t}};var F=function(e){var t;var a=e[$](H.srcsetAttr);if(t=H.customMedia[e[$]("data-media")||e[$]("media")]){e.setAttribute("media",t)}if(a){e.setAttribute("srcset",a)}};var s=te(function(t,e,a,i,r){var n,s,o,l,u,f;if(!(u=X(t,"lazybeforeunveil",e)).defaultPrevented){if(i){if(a){K(t,H.autosizesClass)}else{t.setAttribute("sizes",i)}}s=t[$](H.srcsetAttr);n=t[$](H.srcAttr);if(r){o=t.parentNode;l=o&&j.test(o.nodeName||"")}f=e.firesLoad||"src"in t&&(s||n||l);u={target:t};K(t,H.loadingClass);if(f){clearTimeout(c);c=I(L,2500);V(t,B,true)}if(l){G.call(o.getElementsByTagName("source"),F)}if(s){t.setAttribute("srcset",s)}else if(n&&!l){if(d.test(t.nodeName)){T(t,n)}else{t.src=n}}if(r&&(s||l)){Y(t,{src:n})}}if(t._lazyRace){delete t._lazyRace}Q(t,H.lazyClass);ee(function(){var e=t.complete&&t.naturalWidth>1;if(!f||e){if(e){K(t,H.fastLoadedClass)}S(u);t._lazyCache=true;I(function(){if("_lazyCache"in t){delete t._lazyCache}},9)}if(t.loading=="lazy"){M--}},true)});var R=function(e){if(e._lazyRace){return}var t;var a=n.test(e.nodeName);var i=a&&(e[$](H.sizesAttr)||e[$]("sizes"));var r=i=="auto";if((r||!m)&&a&&(e[$]("src")||e.srcset)&&!e.complete&&!J(e,H.errorClass)&&J(e,H.lazyClass)){return}t=X(e,"lazyunveilread").detail;if(r){re.updateElem(e,true,e.offsetWidth)}e._lazyRace=true;M++;s(e,t,r,i,a)};var r=ie(function(){H.loadMode=3;a()});var o=function(){if(H.loadMode==3){H.loadMode=2}r()};var l=function(){if(m){return}if(f.now()-e<999){I(l,999);return}m=true;H.loadMode=3;a();q("scroll",o,true)};return{_:function(){e=f.now();k.elements=D.getElementsByClassName(H.lazyClass);v=D.getElementsByClassName(H.lazyClass+" "+H.preloadClass);q("scroll",a,true);q("resize",a,true);q("pageshow",function(e){if(e.persisted){var t=D.querySelectorAll("."+H.loadingClass);if(t.length&&t.forEach){U(function(){t.forEach(function(e){if(e.complete){R(e)}})})}}});if(u.MutationObserver){new MutationObserver(a).observe(O,{childList:true,subtree:true,attributes:true})}else{O[P]("DOMNodeInserted",a,true);O[P]("DOMAttrModified",a,true);setInterval(a,999)}q("hashchange",a,true);["focus","mouseover","click","load","transitionend","animationend"].forEach(function(e){D[P](e,a,true)});if(/d$|^c/.test(D.readyState)){l()}else{q("load",l);D[P]("DOMContentLoaded",a);I(l,2e4)}if(k.elements.length){t();ee._lsFlush()}else{a()}},checkElems:a,unveil:R,_aLSL:o}}(),re=function(){var a;var n=te(function(e,t,a,i){var r,n,s;e._lazysizesWidth=i;i+="px";e.setAttribute("sizes",i);if(j.test(t.nodeName||"")){r=t.getElementsByTagName("source");for(n=0,s=r.length;n<s;n++){r[n].setAttribute("sizes",i)}}if(!a.detail.dataAttr){Y(e,a.detail)}});var i=function(e,t,a){var i;var r=e.parentNode;if(r){a=s(e,r,a);i=X(e,"lazybeforesizes",{width:a,dataAttr:!!t});if(!i.defaultPrevented){a=i.detail.width;if(a&&a!==e._lazysizesWidth){n(e,r,i,a)}}}};var e=function(){var e;var t=a.length;if(t){e=0;for(;e<t;e++){i(a[e])}}};var t=ie(e);return{_:function(){a=D.getElementsByClassName(H.autosizesClass);q("resize",t)},checkElems:t,updateElem:i}}(),t=function(){if(!t.i&&D.getElementsByClassName){t.i=true;re._();e._()}};return I(function(){H.init&&t()}),k={cfg:H,autoSizer:re,loader:e,init:t,uP:Y,aC:K,rC:Q,hC:J,fire:X,gW:s,rAF:ee}}(e,e.document,Date);e.lazySizes=t,"object"==typeof module&&module.exports&&(module.exports=t)}("undefined"!=typeof window?window:{});
		/*! ls.unveilhooks */
		!function(e,t){var a=function(){t(e.lazySizes),e.removeEventListener("lazyunveilread",a,!0)};t=t.bind(null,e,e.document),"object"==typeof module&&module.exports?t(require("lazysizes")):"function"==typeof define&&define.amd?define(["lazysizes"],t):e.lazySizes?a():e.addEventListener("lazyunveilread",a,!0)}(window,function(e,i,o){"use strict";var l,d,u={};function s(e,t,a){var n,r;u[e]||(n=i.createElement(t?"link":"script"),r=i.getElementsByTagName("script")[0],t?(n.rel="stylesheet",n.href=e):(n.onload=function(){n.onerror=null,n.onload=null,a()},n.onerror=n.onload,n.src=e),u[e]=!0,u[n.src||n.href]=!0,r.parentNode.insertBefore(n,r))}i.addEventListener&&(l=function(e,t){var a=i.createElement("img");a.onload=function(){a.onload=null,a.onerror=null,a=null,t()},a.onerror=a.onload,a.src=e,a&&a.complete&&a.onload&&a.onload()},addEventListener("lazybeforeunveil",function(e){var t,a,n;if(e.detail.instance==o&&!e.defaultPrevented){var r=e.target;if("none"==r.preload&&(r.preload=r.getAttribute("data-preload")||"auto"),null!=r.getAttribute("data-autoplay"))if(r.getAttribute("data-expand")&&!r.autoplay)try{r.play()}catch(e){}else requestAnimationFrame(function(){r.setAttribute("data-expand","-10"),o.aC(r,o.cfg.lazyClass)});(t=r.getAttribute("data-link"))&&s(t,!0),(t=r.getAttribute("data-script"))&&(e.detail.firesLoad=!0,s(t,null,function(){e.detail.firesLoad=!1,o.fire(r,"_lazyloaded",{},!0,!0)})),(t=r.getAttribute("data-require"))&&(o.cfg.requireJs?o.cfg.requireJs([t]):s(t)),(a=r.getAttribute("data-bg"))&&(e.detail.firesLoad=!0,l(a,function(){r.style.backgroundImage="url("+(d.test(a)?JSON.stringify(a):a)+")",e.detail.firesLoad=!1,o.fire(r,"_lazyloaded",{},!0,!0)})),(n=r.getAttribute("data-poster"))&&(e.detail.firesLoad=!0,l(n,function(){r.poster=n,e.detail.firesLoad=!1,o.fire(r,"_lazyloaded",{},!0,!0)}))}},!(d=/\(|\)|\s|'/)))});
	</script>

	<?php if($gs->is_loader == 1): ?>
		<div class="preloader" id="preloader" style="background: url(<?php echo e(asset('assets/images/'.$gs->loader)); ?>) no-repeat scroll center center #FFF;background-size: 200px 150px;"></div>
	<?php endif; ?>

	<script>
		window.addEventListener("<?php echo e(isMobile() ? 'load' : 'DOMContentLoaded'); ?>" , function(){
			function fadeOutEffect(el) {
				var fadeTarget = document.getElementById(el);
				fadeTarget.style.display = "none";
			}

			(function (e) {
				setTimeout(function(){
					fadeOutEffect('preloader');
					// fadeOutEffect('subscriptionForm');
				}, <?php echo e(isMobile() ? 200 : 800); ?> )			

			})();
		});
	</script>


	<?php if($gs->is_popup== 1): ?>

		<?php if(isset($visited)): ?>

			<div style="display:none">
					<img data-src="<?php echo e(asset('assets/images/'.$gs->popup_background)); ?>" alt="website popup" class="lazyload" data-sizes="auto">
			</div>


			<div class="subscribe-preloader-wrap" id="subscriptionForm" >
					<div class="subscribePreloader__thumb" 
					style="background-image: url(<?php echo e(asset('assets/images/'.$gs->popup_background)); ?>);">
							<span class="preload-close"><i class="fas fa-times"></i></span>
							<div class="subscribePreloader__text text-center">
									<h1><?php echo e($gs->popup_title); ?></h1>
									<p><?php echo e($gs->popup_text); ?></p>
									<form action="<?php echo e(route('front.subscribe')); ?>" id="subscribeform" method="POST">
											<?php echo e(csrf_field()); ?>

											<div class="form-group">
													<input type="email" name="email"  placeholder="<?php echo e($langg->lang741); ?>" required="">
													<button id="sub-btn" type="submit"><?php echo e($langg->lang742); ?></button>
											</div>
									</form>
							</div>
					</div>
			</div>

		<?php endif; ?>

	<?php endif; ?>  


	<!-- Top Header Area End -->
	<section class="top-header" style="height: 51px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 remove-padding">
					<div class="content" style="top: 112px;margin-top: 5px;">
						<div class="right-content">
							<div class="list">
								<ul>

									<?php if(!Auth::guard('web')->check()): ?>

										<li class="login">
											<a href="<?php echo e(route('user.login')); ?>" class="sign-log">
												<div class="links">
													<i class="fa fa-user-alt"></i>

													<span class="sign-in"><?php echo e($langg->lang12); ?></span> <span>|</span>
													<span class="join"><?php echo e($langg->lang13); ?></span>

												</div>
											</a>
										</li>

									<?php else: ?>

										<li class="profilearea my-dropdown" >

											<a href="javascript: ;" id="profile-icon" class="profile carticon">
												<span class="text">
													<i class="far fa-user"></i>	<?php echo e($langg->lang11); ?> <i class="fas fa-chevron-down"></i>
												</span>
											</a>

											<div class="my-dropdown-menu profile-dropdown" style="min-width: 155px;">
												<ul class="profile-links">

													<li>
														<a href="<?php echo e(route('user-dashboard')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e($langg->lang221); ?></a>
													</li>

													<li>
														<a href="<?php echo e(route('user-profile')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e($langg->lang205); ?></a>
													</li>

													
													
														<li>
															<a href="<?php echo e(route('user-orders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e($langg->lang201); ?></a>
														</li>

														<?php if($gs->is_affilate == 1): ?>
															<li>
																<a href="<?php echo e(route('user-affilate-code')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(Session::get('language') == "1" ? "Affiliate Code" : "التسويق بالعمولة"); ?></a>
															</li>
														<?php endif; ?>

														<li>
															<a href="<?php echo e(route('user-message-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e($langg->lang232); ?></a>
														</li>

														<li>
															<a href="<?php echo e(route('user-reset')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e($langg->lang206); ?></a>
														</li>

													

													<li>
														<a href="<?php echo e(route('user-delete-account')); ?>" onclick="return confirm('<?php echo e(Session::get("language") == "1" ? "Are you sure you want to delete your Account ?" : "هل انت متأكد انك تريد حذف الحساب وجميع بياناتك؟"); ?>');">
															<i class="fas fa-angle-double-right"></i>
															<?php echo e(Session::get('language') == "1" ? "Delete Account" : "حذف الحساب"); ?>

														</a>
													</li>
													
													<li>
														<a href="<?php echo e(route('user-logout')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e($langg->lang223); ?></a>
													</li>

												</ul>
											</div>

										</li>

									<?php endif; ?>

									&nbsp;&nbsp;

									<li >
										<a style="color: white" href="<?php echo e(route('front.branches')); ?>"> <i class="fa fa-map-marker-alt"></i> <?php echo e($langg->lang16); ?> </a>
									</li>
								
								</ul>
							</div>
						</div>

						<div class="left-content">
							<div class="list">
								<ul>
									<?php if($gs->is_language == 1): ?>
										<li>
											<div class="language-selector">
												<i class="fas fa-globe-americas"></i>
												<select name="language" class="language selectors nice">
													<?php $__currentLoopData = DB::table('languages')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e(route('front.language',$language->id)); ?>" <?php echo e(Session::has('language') ? ( Session::get('language') == $language->id ? 'selected' : '' ) : (DB::table('languages')->where('is_default','=',1)->first()->id == $language->id ? 'selected' : '')); ?> ><?php echo e($language->language); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
											</div>
										</li>
									<?php endif; ?>

								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Top Header Area End -->

	<!-- Logo Header Area Start -->
	<section class="logo-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 col-sm-6 col-5 remove-padding">
					<div class="logo">
						<a href="<?php echo e(route('front.index')); ?>">
							<img src="<?php echo e(asset('assets/images/'.$gs->logo)); ?>" alt="website logo" class="lazyload" data-sizes="auto">
						</a>
					</div>
				</div>

				<div class="col-lg-6 col-sm-12 remove-padding order-last order-sm-2 order-md-2 mt-3">
					<div class="search-box-wrapper">
						<div class="search-box">
							<!--<form id="searchForm" class="search-form" style="border: 1px solid <?php echo e($gs->colors); ?>;border-radius: 10px;opacity: 1; height: 38px; " action="<?php echo e(route('front.category', [Request::route('category'),Request::route('subcategory'),Request::route('childcategory')])); ?>" method="GET">-->
							<form id="searchForm" class="search-form" style="border: 1px solid <?php echo e($gs->colors); ?>;border-radius: 10px;opacity: 1; height: 38px; " action="<?php echo e(route('front.category')); ?>" method="GET">
								<?php if(!empty(request()->input('sort'))): ?>
									<input type="hidden" name="sort" value="<?php echo e(request()->input('sort')); ?>">
								<?php endif; ?>
								<?php if(!empty(request()->input('minprice'))): ?>
									<input type="hidden" name="minprice" value="<?php echo e(request()->input('minprice')); ?>">
								<?php endif; ?>
								<?php if(!empty(request()->input('maxprice'))): ?>
									<input type="hidden" name="maxprice" value="<?php echo e(request()->input('maxprice')); ?>">
								<?php endif; ?>
								<input type="text" id="prod_name" name="search" placeholder="<?php echo e($langg->lang2); ?>" value="<?php echo e(request()->input('search')); ?>" autocomplete="off" >
								<div class="autocomplete">
								  <div id="myInputautocomplete-list" class="autocomplete-items"></div>
								</div>
								<button type="submit"><i class="fas fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-sm-6 col-7 remove-padding order-lg-last">
					<div class="helpful-links">
						<ul class="helpful-links-inner">
							<li class="my-dropdown"  data-toggle="tooltip" data-placement="top" title="<?php echo e($langg->lang3); ?>">
								<a href="javascript:;" class="cart carticon">
									<div class="icon">
										<i class="fas fa-shopping-cart"></i>
										<span class="cart-quantity" id="cart-count"><?php echo e(Session::has('cart') ? count(Session::get('cart')->items) : '0'); ?></span>
									</div>
								</a>
								<div class="my-dropdown-menu" id="cart-items">
									<?php echo $__env->make('load.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</div>
							</li>
							<li class="wishlist"  data-toggle="tooltip" data-placement="top" title="<?php echo e($langg->lang9); ?>">
								<?php if(Auth::guard('web')->check()): ?>
									<a href="<?php echo e(route('user-wishlists')); ?>" class="wish">
										<i class="far fa-heart"></i>
										<span id="wishlist-count"><?php echo e(Auth::user()->wishlistCount()); ?></span>
									</a>
								<?php else: ?>
									<a href="javascript:;" data-toggle="modal" id="wish-btn" data-target="#comment-log-reg" class="wish">
										<i class="far fa-heart"></i>
										<span id="wishlist-count">0</span>
									</a>
								<?php endif; ?>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Logo Header Area End -->


	<!--Main-Menu Area Start-->
	<div class="mainmenu-area mainmenu-bb">
		<div class="containerXXX">
			<div class="row align-items-center mainmenu-area-innner">

				<div class="col-lg-12 col-md-12 remove-padding">

					<button class="toggle-bar mobile-menu hidden"><span class="fa fa-bars"></span></button>

					<div class="draggable">
						<ul class="wardi-mega-menu">

							<li class="dropdown_list">
								<div class="link-area">
									<span>
										<a href="<?php echo e(url('/')); ?>">
											<?php if(Session::get('language') == '1' ): ?> Home <?php else: ?> الرئيسية <?php endif; ?>
											<i class="fa fa-home" aria-hidden="true"></i>
										</a>
									</span>
								</div>
							</li>

							<li class="dropdown_list">
								<div class="link-area">
									<span>
										<a href="<?php echo e(route('front.page.quickDeal')); ?>" style="color: #ed64a5">
											<?php if(Session::get('language') == '1' ): ?> Quick Deal <?php else: ?> الخصومات <?php endif; ?>
											<i class="fa fa-tags" aria-hidden="true"></i>
										</a>
									</span>
								</div>
							</li>

							<?php
								$i=1;
							?>

							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<li class="<?php echo e(( count($category->subs) > 0 )?'dropdown_list':'pr-3'); ?>">

									<?php if(count($category->subs) > 0): ?>

										<div class="link-area">
											<span>
												<a href="#">
													<?php echo e($category->nameLang()); ?>

													<i class="fa fa-angle-down" aria-hidden="true"></i>
												</a>
											</span>
										</div>

									<?php else: ?>
										<div class="link-area">
											<span>
												<a href="<?php echo e(route('front.category',$category->slug)); ?>"> <?php echo e($category->nameLang()); ?></a>
											</span>
										</div>
									<?php endif; ?>

									<?php if(count($category->subs) > 0): ?>

										<?php
											$ck = 0;
											foreach($category->subs as $subcat) {
												if(count($subcat->childs) > 0) {
													$ck = 1;
													break;
												}
											}
										?>

										<ul class="<?php echo e($ck == 1 ? 'categories_mega_menu' : 'categories_mega_menu column_1'); ?>">

											<?php $__currentLoopData = $category->subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li>

													<?php if(count($subcat->childs) > 0): ?>
														<a class="sub-link" href="#">
															<?php echo e($subcat->nameLang()); ?>

														</a>
													<?php else: ?>
														<a class="sub-link" href="<?php echo e(route('front.subcat',['slug1' => $category->slug, 'slug2' => $subcat->slug])); ?>"><?php echo e($subcat->nameLang()); ?></a>
													<?php endif; ?>

													<?php if(count($subcat->childs) > 0): ?>
														<div class="categorie_sub_menu">
															<ul>
																<?php $__currentLoopData = $subcat->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<li>
																		<a href="<?php echo e(route('front.childcat',['slug1' => $category->slug, 'slug2' => $subcat->slug, 'slug3' => $childcat->slug])); ?>">
																			<?php echo e($childcat->nameLang()); ?>

																		</a>
																	</li>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															</ul>
														</div>
													<?php endif; ?>

												</li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

										</ul>

									<?php endif; ?>

								</li>

								<?php
									$i++;
								?>

								<?php if($i == 15): ?>
										<li class="">
											<a href="<?php echo e(route('front.categories')); ?>"><i class="fas fa-plus"></i> <?php echo e($langg->lang15); ?> </a>
										</li>
									<?php break; ?>
								<?php endif; ?>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
						</ul>
    			</div>

				</div>

			</div>
		</div>
	</div>
	<!--Main-Menu Area End-->

	<?php echo $__env->yieldContent('content'); ?>

	<a  href="https://api.whatsapp.com/send/?phone=<?php echo e(DB::table('pagesettings')->first()->phone); ?>&text&app_absent=0" target="_blank"  color="#4dc247">
		<i class="fab fa-whatsapp whatsapp_icon"></i>
	</a>

	<!-- Footer Area Start -->
	<footer class="footer" id="footer" style="background: #FFFFFF 0% 0% no-repeat padding-box;<?php if(!isMobile()): ?>border: 1px solid #D1D1D1; <?php endif; ?> opacity: 1;">
		
		<?php 
			$g_s = \App\Models\Socialsetting::find(1);
		?>

		
			<div class="container pb-3">
				<div class="row">

					<div class="col-md-6 col-lg-3">
						<div class="footer-logo text-center">
								<a href="<?php echo e(route('front.index')); ?>" class="logo-link">
										<img src="<?php echo e(asset('assets/images/003.png')); ?>" alt="website logo" class="lazyload" data-sizes="auto">
								</a>
						</div>
						<div class="text">
								<p class="text-center" style="text-align: left;font: normal normal 800 26px/24px Tajawal;letter-spacing: 0px;color: <?php echo e($gs->colors); ?>;opacity: 1;margin-top: 20px; ">
										<?php if(Session::get('language') == '1'): ?> 
											<?php echo $gs->footer; ?>

										<?php else: ?>
											متجر وردى 
										<?php endif; ?>
								</p>
						</div>
					</div>

					<div class="col-lg-1"></div>

					<div class="col-md-6 col-lg-3 align-self-center">
						<div class="footer-widget info-link-widget">
							<?php
								$footerlinks = DB::table('pages')->where('footer', '=', 1)->limit(5)->get() ;
								$ids =  $footerlinks->pluck('id');
								$footer2 = DB::table('pages')->where('footer', '=', 1)->whereNotIn('id',$ids)->limit(1)->get() ;
							?>
							<ul class="link-list">

								<li>
									<a href="<?php echo e(route('front.index')); ?>"
											style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;">
											<?php echo e($langg->lang22); ?>

									</a>
								</li>

								<?php if(empty(Session::get('language'))): ?>

									<?php if(Session::get('language') == '1'): ?>
										<li>
											<a href="<?php echo e(route('front.faq')); ?>" style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;"> FAQ </a>
										</li>
									<?php elseif(Session::get('language') == '2'): ?>
										<li>
											<a href="<?php echo e(route('front.faq')); ?>" style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;"> الاسئله المتداوله </a>
										</li>
									<?php endif; ?>

								<?php else: ?>

									<?php if(Session::get('language') == '2'): ?>
										<li>
											<a href="<?php echo e(route('front.faq')); ?>" style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;"> الاسئله المتداوله </a>
										</li>
									<?php else: ?>
										<li>
											<a href="<?php echo e(route('front.faq')); ?>" style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;"> FAQ </a>
										</li>
									<?php endif; ?>

								<?php endif; ?>

								<?php if(empty(Session::get('language'))): ?>

									<?php if(Session::get('language') == '1'): ?>
										<li><a href="<?php echo e(url('/receipt')); ?>" style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;"> Prescrition</a></li>
									<?php elseif(Session::get('language') == '2'): ?>
										<li><a href="<?php echo e(url('/receipt')); ?>" style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;"> ارسال الوصفه الطبيه</a></li>
									<?php endif; ?>

								<?php else: ?>

									<?php if(Session::get('language') == '2'): ?>
											<li><a href="<?php echo e(url('/receipt')); ?>" style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;"> ارسال الوصفه الطبيه</a></li>
									<?php else: ?>
											<li><a href="<?php echo e(url('/receipt')); ?>" style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;"> Prescrition</a></li>
									<?php endif; ?>

								<?php endif; ?>

								<li>
										<a href="<?php echo e(route('front.contact')); ?>"
												style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;">
												<?php echo e($langg->lang23); ?>

										</a>
								</li>

								<li>
									<a href="<?php echo e(route('front.blog')); ?>" style="text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;"><?php echo e($langg->lang18); ?></a>
								</li>

								<?php $__currentLoopData = $footer2->chunk(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li>
											<a href="<?php echo e(route('front.page', $data->slug)); ?>" style="    text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;">

												</i>
												<?php if($langg->rtl == '1'): ?> 
													<?php echo e($data->title); ?>

												<?php else: ?> 
													<?php echo e($data->slug); ?> 
												<?php endif; ?>
											</a>
										</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</ul>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 align-self-center">
						<div class="footer-widget info-link-widget">

							<ul class="link-list">

								<?php $__currentLoopData = $footerlinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									
										<li>
											<a href="<?php echo e(route('front.page', $data->slug)); ?>" style="    text-align: right;font: normal normal normal 17px/21px Tajawal;letter-spacing: 0px;color: #464646;opacity: 1;">
												</i>
												<?php if($langg->rtl == '1'): ?> 
													<?php echo e($data->title); ?>

												<?php else: ?> 
													<?php echo e($data->slug); ?> 
												<?php endif; ?>
											</a>
										</li>
									
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div>

					<div class="col-md-6 col-lg-2 align-self-center px-0">
						<div class="fotter-social-links">
							<ul>

								<?php if($g_s->f_status == 1): ?>
									<li>
										<a href="https://www.facebook.com/OnlinestoreWardi/" class="fsl" target="_blank" aceclass="facebook" target="_blank" style="background:<?php echo e($gs->colors); ?>;color: white;">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if($g_s->t_status == 1): ?>
									<li>
										<a href="https://twitter.com/StoreWardi" class="twitter" class="fsl" target="_blank" style="background:<?php echo e($gs->colors); ?>;color: white;">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if($g_s->l_status == 1): ?>
									<li>
										<a href="https://www.instagram.com/wardistoreonline/" class="fsl" target="_blank" class="linkedin" target="_blank" style="background:<?php echo e($gs->colors); ?>;color: white;">
											<i class="fab fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="https://api.whatsapp.com/send/?phone=966543504864&text&app_absent=0" class="linkedin" class="fsl" target="_blank" style="background:<?php echo e($gs->colors); ?>;color: white;">
											<i class="fab fa-whatsapp text-light"></i>
										</a>
									</li>
								<?php endif; ?>

							</ul>
						</div>
					</div>

				</div>
			</div>
		

		
		<div class="container-fluid py-0" style="border-top: 1px solid #e0e0e0;">
			<div class="copy-bg py-0 my-3" style="background: #FFFFFF 0% 0% no-repeat padding-box;opacity: 1;">
				<div class="container">
					<div class="row">

						<div class="col-lg-9">
							<div class="content">
								<div class="content">
									<p style="text-align: center;letter-spacing: 0px;color: #464646;opacity: 1;">
										<?php echo $gs->copyright; ?>

									</p>
								</div>
							</div>
						</div>

						<?php if(!isMobile()): ?>
							<div class="col-lg-3">
								<img src="<?php echo e(asset('assets/images/12-1-1.png')); ?>" alt="payment methods" class="lazyload" data-sizes="auto">
							</div>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- Footer Area End -->

	<!-- Back to Top Start -->
	<div class="bottomtotop">
		<i class="fas fa-chevron-right"></i>
	</div>

	<!-- Back to Top End -->
	
	<!-- LOGIN MODAL -->
	<div class="modal fade" id="comment-log-reg" tabindex="-1" role="dialog" aria-labelledby="comment-log-reg-Title"
		aria-hidden="true">
		<div class="modal-dialog  modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<nav class="comment-log-reg-tabmenu">
						<div class="nav nav-tabs" id="nav-tab" role="tablist">

							<a class="nav-item nav-link login active" id="nav-log-tab1" data-toggle="tab" href="#nav-log1"
								role="tab" aria-controls="nav-log" aria-selected="true">
								<?php echo e($langg->lang197); ?>

							</a>
							<a class="nav-item nav-link" id="nav-reg-tab1" data-toggle="tab" href="#nav-reg1" role="tab"
								aria-controls="nav-reg" aria-selected="false">
								<?php echo e($langg->lang198); ?>

							</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-log1" role="tabpanel"
							aria-labelledby="nav-log-tab1">
							<div class="login-area">
								<div class="header-area">
									<h4 class="title"><?php echo e($langg->lang172); ?></h4>
								</div>
								<div class="login-form signin-form">
									<?php echo $__env->make('includes.admin.form-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<form class="mloginform" action="<?php echo e(route('user.login.submit')); ?>" method="POST">
										<?php echo e(csrf_field()); ?>

										<div class="form-input">
											<input type="email" name="email" placeholder="<?php echo e($langg->lang173); ?>"
												required="">
											<i class="fas fa-user"></i>
										</div>
										<div class="form-input">
											<input type="password" class="Password" name="password"
												placeholder="<?php echo e($langg->lang174); ?>" required="">
											<i class="fas fa-key"></i>
										</div>
										<div class="form-forgot-pass">
											<div class="left">
												<input type="checkbox" name="remember" id="mrp"
													<?php echo e(old('remember') ? 'checked' : ''); ?>>
												<label for="mrp"><?php echo e($langg->lang175); ?></label>
											</div>
											<div class="right">
												<a href="javascript:;" id="show-forgot">
													<?php echo e($langg->lang176); ?>

												</a>
											</div>
										</div>
										<input type="hidden" name="modal" value="1">
										<input class="mauthdata" type="hidden" value="<?php echo e($langg->lang177); ?>">
										<button type="submit" class="submit-btn"><?php echo e($langg->lang178); ?></button>
										<?php if($g_s->f_check == 1 ||
										$g_s->g_check == 1): ?>
										<div class="social-area">
											<h3 class="title"><?php echo e($langg->lang179); ?></h3>
											<p class="text"><?php echo e($langg->lang180); ?></p>
											<ul class="social-links">
												<?php if($g_s->f_check == 1): ?>
												<li>
													<a href="<?php echo e(route('social-provider','facebook')); ?>">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<?php endif; ?>
												<?php if($g_s->g_check == 1): ?>
												<li>
													<a href="<?php echo e(route('social-provider','google')); ?>">
														<i class="fab fa-google-plus-g"></i>
													</a>
												</li>
												<?php endif; ?>
											</ul>
										</div>
										<?php endif; ?>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-reg1" role="tabpanel" aria-labelledby="nav-reg-tab1">
							<div class="login-area signup-area">
								<div class="header-area">
									<h4 class="title"><?php echo e($langg->lang181); ?></h4>
								</div>
								<div class="login-form signup-form">
									<?php echo $__env->make('includes.admin.form-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<form class="mregisterform" action="<?php echo e(route('user-register-submit')); ?>"
										method="POST">
										<?php echo e(csrf_field()); ?>


										<div class="form-input">
											<input type="text" class="User Name" name="name"
												placeholder="<?php echo e($langg->lang182); ?>" required="">
											<i class="fas fa-user"></i>
										</div>

										<div class="form-input">
											<input type="email" class="User Name" name="email"
												placeholder="<?php echo e($langg->lang183); ?>" required="">
											<i class="fas fa-envelope"></i>
										</div>

										<div class="form-input">
											<input type="text" class="User Name" name="phone"
												placeholder="<?php echo e($langg->lang184); ?>" required="">
											<i class="fas fa-phone"></i>
										</div>

										<div class="form-input">
											<input type="text" class="User Name" name="address"
												placeholder="<?php echo e($langg->lang185); ?>" required="">
											<i class="fas fa-map-marker-alt"></i>
										</div>

										<div class="form-input">
											<input type="password" class="Password" name="password"
												placeholder="<?php echo e($langg->lang186); ?>" required="">
											<i class="fas fa-key"></i>
										</div>

										<div class="form-input">
											<input type="password" class="Password" name="password_confirmation"
												placeholder="<?php echo e($langg->lang187); ?>" required="">
											<i class="fas fa-key"></i>
										</div>


										<?php if($gs->is_capcha == 1): ?>

										<ul class="captcha-area">
											<li>
												<p><img class="codeimg1"
														src="<?php echo e(asset("assets/images/capcha_code.png")); ?>" alt="capcha"> <i
														class="fas fa-sync-alt pointer refresh_code "></i></p>
											</li>
										</ul>

										<div class="form-input">
											<input type="text" class="Password" name="codes"
												placeholder="<?php echo e($langg->lang51); ?>" required="">
											<i class="fas fa-sync"></i>
										</div>


										<?php endif; ?>

										<input class="mprocessdata" type="hidden" value="<?php echo e($langg->lang188); ?>">
										<button type="submit" class="submit-btn"><?php echo e($langg->lang189); ?></button>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- LOGIN MODAL ENDS -->

	<!-- FORGOT MODAL -->
	<div class="modal fade" id="forgot-modal" tabindex="-1" role="dialog" aria-labelledby="comment-log-reg-Title"
		aria-hidden="true">
		<div class="modal-dialog  modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="login-area">
						<div class="header-area forgot-passwor-area">
							<h4 class="title"><?php echo e($langg->lang191); ?> </h4>
							<p class="text"><?php echo e($langg->lang192); ?> </p>
						</div>
						<div class="login-form">
							<?php echo $__env->make('includes.admin.form-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<form id="mforgotform" action="<?php echo e(route('user-forgot-submit')); ?>" method="POST">
								<?php echo e(csrf_field()); ?>

								<div class="form-input">
									<input type="email" name="email" class="User Name"
										placeholder="<?php echo e($langg->lang193); ?>" required="">
									<i class="fas fa-user"></i>
								</div>
								<div class="to-login-page">
									<a href="javascript:;" id="show-login">
										<?php echo e($langg->lang194); ?>

									</a>
								</div>
								<input class="fauthdata" type="hidden" value="<?php echo e($langg->lang195); ?>">
								<button type="submit" class="submit-btn"><?php echo e($langg->lang196); ?></button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- FORGOT MODAL ENDS -->

	<!-- Product Quick View Modal -->
	<div class="modal fade" id="quickview" tabindex="-1" role="dialog"  aria-hidden="true">
		<div class="modal-dialog quickview-modal modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
			<div class="submit-loader">
				<img src="<?php echo e(asset('assets/images/'.$gs->loader)); ?>" alt="quickview loader" class="lazyload" data-sizes="auto">
			</div>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container quick-view-modal">

				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- Product Quick View Modal -->

	<!-- Order Tracking modal Start-->
	<div class="modal fade" id="track-order-modal" tabindex="-1" role="dialog" aria-labelledby="order-tracking-modal" aria-hidden="true">
			<div class="modal-dialog  modal-lg" role="document">
					<div class="modal-content">
					<div class="modal-header">
							<h6 class="modal-title"> <b><?php echo e($langg->lang772); ?></b> </h6>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body">

											<div class="order-tracking-content">
													<form id="track-form" class="track-form">
															<?php echo e(csrf_field()); ?>

															<input type="text" id="track-code" placeholder="<?php echo e($langg->lang773); ?>" required="">
															<button type="submit" class="mybtn1"><?php echo e($langg->lang774); ?></button>
															<a href="#"  data-toggle="modal" data-target="#order-tracking-modal"></a>
													</form>
											</div>

											<div>
									<div class="submit-loader d-none">
							<img src="<?php echo e(asset('assets/images/'.$gs->loader)); ?>" alt="Tracking loader" class="lazyload" data-sizes="auto">
						</div>
						<div id="track-order">

						</div>
											</div>

					</div>
					</div>
			</div>
	</div>
	<!-- Order Tracking modal End -->
	

	<script async type="text/javascript">
		var mainurl = "<?php echo e(url('/')); ?>";
		var gs      = <?php echo json_encode($gs); ?>;
		var langg    = <?php echo json_encode($langg); ?>;
	</script>

	

	<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/fontawesome.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/fontawesome.min.css')); ?>"></noscript>
	<?php if(!request()->routeIs('front.index')): ?>
		<link rel="preload" href="<?php echo e(asset('assets/front/css/rtl/split/icofont.min.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl/split/icofont.min.css')); ?>"></noscript>
	<?php endif; ?>
	
	
	<script src="<?php echo e(asset('assets/front/js/jquery.js')); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
	<script async src="<?php echo e(asset('assets/front/js/popper.min.js')); ?>"></script>
	<script async src="<?php echo e(asset('assets/front/js/bootstrap.min.js')); ?>"></script>
	
	<script async src="<?php echo e(asset('assets/front/js/plugin.min.js').'?v='.filemtime(public_path('assets/front/js/plugin.min.js'))); ?>"></script>
	<?php if(!request()->routeIs('front.index')): ?>
	<script async src="<?php echo e(asset('assets/front/js/xzoom.min.js')); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
	<?php endif; ?>
	<script async src="<?php echo e(asset('assets/front/js/jquery.hammer.min.js')); ?>"></script>
	<script async src="<?php echo e(asset('assets/front/js/toastr.js')); ?>"></script>
	<?php if(!request()->routeIs('front.index')): ?>
	<script async src="<?php echo e(asset('assets/front/js/setup.js').'?v='.filemtime(public_path('assets/front/js/setup.js'))); ?>"></script>
	<?php endif; ?>
	<script async src="<?php echo e(asset('assets/front/js/myScript.js').'?v='.filemtime(public_path('assets/front/js/myScript.js'))); ?>"></script>
	<script async src="<?php echo e(asset('assets/front/js/custom.js').'?v='.filemtime(public_path('assets/front/js/custom.js'))); ?>" class="ins_js"></script>
	<script async src="<?php echo e(asset('assets/front/js/main.js').'?v='.filemtime(public_path('assets/front/js/main.js'))); ?>"></script>
	
	

	<?php if($gs->is_talkto == 1): ?>
		<!--Start of Tawk.to Script-->
		<?php echo $gs->talkto; ?>

		<!--End of Tawk.to Script-->
	<?php endif; ?>
	
	<?php echo $__env->yieldContent('scripts'); ?>

	<script async type="text/javascript">

		window.addEventListener('load', function(){
			
			$("#close-div").click(function(e){
				e.preventDefault();
				document.getElementById('offer_display').style.display = 'none' ;
			});

		});
	
		window.addEventListener('load', function(){

			function countDownTime(hours, minutes, seconds,elm){
				// console.log(hours, minutes, seconds,elm);
				if(hours >= 0 && minutes >= 0 && seconds >= 0){

					var days = 0;
					var hoursO = 0;

					if(hours > 24){
						days = Math.floor(hours / 24);
						var checkH = (hours / 24) - Math.floor(hours / 24);
						if(checkH > 0){
							hoursO =  Math.floor( checkH * 24) ;						
						}
					}else{
						hoursO = hours;
					}

					var htm = '<span class="coun_t"><span>'+days+'</span> <br> <span>ايام</span> </span>';
					htm += '<span class="coun_t"><span>'+hoursO+'</span> <br> <span>ساعه</span> </span>';
					htm += '<span class="coun_t"><span>'+minutes+'</span> <br> <span>دقيقة</span> </span>';
					htm += '<span class="coun_t"><span>'+seconds+'</span> <br> <span>ثواني</span> </span>';
					// htm = '<span class="coun_t">'+days+'</span> <span class="coun_t">'+hoursO+'</span> <span class="coun_t">'+minutes+'</span> <span class="coun_t">'+ seconds+'</span><br>';
					$(elm).html(htm); 

					if(seconds == 0){
						hours = hours;
						minutes = minutes - 1;
						seconds = 59;
					
						if(minutes == 0){
							hours = hours - 1;
							minutes = 59;
							seconds = 59;
						}
					}else{
						hours = hours;
						minutes = minutes;
						seconds = seconds - 1 ;
					}
					window.setTimeout(function(){
						setTimeout(countDownTime(hours, minutes, seconds,elm), 2000);
					}, 1000);
				}	
			}

			document.querySelectorAll('a div.info span.font-main.cntr').forEach(function(currentValue, index){
				var arr = $(currentValue).data('hr').split(",");
				countDownTime(arr[0],arr[1],arr[2],currentValue);
			});
			
			<?php if(request()->routeIs('front.product')): ?>
				if($('h3.product-name span.font-main.cntr').length > 0){
					var arrs = $('h3.product-name span.font-main.cntr').data('hr').split(",");
					countDownTime(arrs[0],arrs[1],arrs[2],$('h3.product-name span.font-main.cntr')[0]);
				}
			<?php endif; ?>

		});

	</script>
	
	<?php echo $seo->google_analytics; ?>

	<?php echo $__env->make('includes.fbpixel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    
	<script>
		!function (w, d, t) {
		  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++
)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=i+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};
		
		  ttq.load('CDFVEO3C77U1SA0SS8V0');
		  ttq.page();
		}(window, document, 'ttq');
	</script>
	
	<script type="text/javascript" id="pap_x2s6df8d" src="https://www.linkaraby.com/scripts/2xjh8l8dq0"></script>
	
    <script type="text/javascript">
        PostAffTracker.setAccountId('6a30b207');
        try {
        PostAffTracker.track();
        } catch (err) { }
    </script>
    
</body>

</html>
<?php /**PATH /usr/local/var/www/wardi/resources/views/layouts/front.blade.php ENDPATH**/ ?>