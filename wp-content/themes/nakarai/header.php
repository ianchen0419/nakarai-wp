<?php
	// 英語：1
	// 繁体字：2
	// 簡体字：3
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="icon" href="<?php bloginfo('template_directory') ?>/inc/img/top/favicon.ico" />
	<meta name="title" content="<?php bloginfo('title') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	
	<meta name="keywords" content="<?php if(get_current_blog_id()==1){
		echo 'plating,protective material for plating,plating protection,Harley Davidson,mekking,sabitori king,rust remover,chrome plating';
	}else if(get_current_blog_id()==2){
		echo '電鍍保護劑,光澤,耐腐蝕性,Harley Davidson,保持光澤,鍍鉻,mekking,sabitori king';
	}else {
		echo '电镀保护剂,光泽,耐腐蚀性,Harley Davidson,保持光泽,镀铬,mekking,sabitori king';
	} ?>" />
	<title><?php bloginfo('title') ?></title>
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/inc/lib/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/<?php if(get_current_blog_id()==1){
		echo 'style.css';
	}else if(get_current_blog_id()==2){
		echo 'style-tw.css';
	}else {
		echo 'style-cn.css';
	} ?>" />
</head>
<body>
<header id="header">
	<div class="wrapper-size">
		<div class="logo-area">
			<a href="<?php bloginfo('url') ?>">
				<picture> 
					<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/top/logo_mobile.png" /> 
					<img src="<?php bloginfo('template_directory') ?>/inc/img/top/logo.png" alt="NAKARAI MEKKING" height="60" /> 
				</picture>
			</a>
		</div>
		<h1 class="title-area">NAKARAI MEKKING</h1>
		<div class="contact-area">TEL: +81-3-3727-5111<br>E-mail: masaki@nakarai.co.jp</div>
		<div class="mobile-menu-bar">
			<i class="fa fa-bars fa-2x" onclick="openMobileMenu()"></i>
		</div>
	</div>
</header>

<nav id="menu">
	<div class="wrapper-size">
		<ul class="list-wrapper">
			<li class="main-list">
				<a href="<?php bloginfo('url') ?>">
					<span><?php if(get_current_blog_id()==1){
						echo 'Home';
					}else if(get_current_blog_id()==2){
						echo '首頁';
					}else {
						echo '首页';
					} ?></span>
				</a>
			</li>
			<li class="child-head main-list">
				<span>Product</span>
				<ul class="child-menu">
					<li>
						<a href="product"><?php if(get_current_blog_id()==1){
							echo 'Product';
						}else if(get_current_blog_id()==2){
							echo '產品';
						}else {
							echo '产品';
						} ?></a>
					</li>
					<li>
						<a href="mekking">Mekking</a>
					</li>
					<li>
						<a href="sabitoriking">Sabitori King</a>
					</li>
				</ul>
			</li>
			<li class="main-list">
				<a href="usage">
					<span><?php if(get_current_blog_id()==1){
						echo 'Usage / Q&A';
					}else if(get_current_blog_id()==2){
						echo '使用方法 / Q&A';
					}else {
						echo '使用方法 / Q&A';
					} ?></span>
				</a>
			</li>
			<li class="child-head main-list">
				<span><?php if(get_current_blog_id()==1){
					echo 'Company';
				}else if(get_current_blog_id()==2){
					echo '公司簡介';
				}else {
					echo '公司简介';
				} ?></span>
				<ul class="child-menu">
					<li>
						<a href="about-us"><?php if(get_current_blog_id()==1){
							echo 'About Us';
						}else if(get_current_blog_id()==2){
							echo '公司簡介';
						}else {
							echo '公司简介';
						} ?></a>
					</li>
					<li>
						<a href="reviews"><?php if(get_current_blog_id()==1){
							echo 'Reviews';
						}else if(get_current_blog_id()==2){
							echo '評價';
						}else {
							echo '评价';
						} ?></a>
					</li>
				</ul>
			</li>
			<li class="main-list">
				<a href="purchase">
					<span><?php if(get_current_blog_id()==1){
						echo 'Purchase';
					}else if(get_current_blog_id()==2){
						echo '購買 / 聯絡我們';
					}else {
						echo '购买 / 联络我们';
					} ?></span>
				</a>
			</li>
			<li class="child-head main-list">
				<span>Languages</span>
				<ul class="child-menu">
					<li>
						<a href="<?php echo get_blog_option(1, 'siteurl'); ?>">English</a>
					</li>
					<li>
						<a href="<?php echo get_blog_option(2, 'siteurl'); ?>">繁體中文</a>
					</li>
					<li>
						<a href="<?php echo get_blog_option(3, 'siteurl'); ?>">简体中文</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	<div id="mobileMenu">
		<ul class="mobile-list">
			<li>
				<a href="<?php bloginfo('url') ?>">
					<i class="fa fa-home fa-fw"></i>
					<span><?php if(get_current_blog_id()==1){
						echo 'Home';
					}else if(get_current_blog_id()==2){
						echo '首頁';
					}else {
						echo '首页';
					} ?></span>
				</a>
			</li>
			<li class="mobile-child-wrapper">
				<div class="mobile-child-head">
					<i class="fa fa-list fa-fw"></i>
					<span><?php if(get_current_blog_id()==1){
						echo 'Product';
					}else if(get_current_blog_id()==2){
						echo '產品';
					}else {
						echo '产品';
					} ?></span>
				</div>
				<ul class="mobile-child-list">
					<li>
						<a href="product"><?php if(get_current_blog_id()==1){
							echo 'Product';
						}else if(get_current_blog_id()==2){
							echo '產品';
						}else {
							echo '产品';
						} ?></a>
					</li>
					<li>
						<a href="mekking">Mekking</a>
					</li>
					<li>
						<a href="sabitoriking">Sabitori King</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="usage">
					<i class="fa fa-question fa-fw"></i>
					<span><?php if(get_current_blog_id()==1){
						echo 'Usage / Q&A';
					}else if(get_current_blog_id()==2){
						echo '使用方法 / Q&A';
					}else {
						echo '使用方法 / Q&A';
					} ?></span>
				</a>
			</li>
			<li class="mobile-child-wrapper">
				<div class="mobile-child-head">
					<i class="fa fa-file-text-o fa-fw"></i>
					<span><?php if(get_current_blog_id()==1){
						echo 'Company';
					}else if(get_current_blog_id()==2){
						echo '公司簡介';
					}else {
						echo '公司简介';
					} ?></span>
				</div>
				<ul class="mobile-child-list">
					<li>
						<a href="about-us"><?php if(get_current_blog_id()==1){
							echo 'About Us';
						}else if(get_current_blog_id()==2){
							echo '公司簡介';
						}else {
							echo '公司简介';
						} ?></a>
					</li>
					<li>
						<a href="reviews"><?php if(get_current_blog_id()==1){
							echo 'Reviews';
						}else if(get_current_blog_id()==2){
							echo '評價';
						}else {
							echo '评价';
						} ?></a>
					</li>
				</ul>
			</li>
			<li>
				<a href="purchase">
					<i class="fa fa-shopping-basket  fa-fw"></i>
					<span><?php if(get_current_blog_id()==1){
						echo 'Purchase';
					}else if(get_current_blog_id()==2){
						echo '購買 / 聯絡我們';
					}else {
						echo '购买 / 联络我们';
					} ?></span>
				</a>
			</li>
			<li class="mobile-child-wrapper">
				<div class="mobile-child-head">
					<i class="fa fa-font fa-fw"></i>
					<span>Languagues</span>
				</div>
				<ul class="mobile-child-list">
					<li>
						<a href="<?php echo get_blog_option(1, 'siteurl'); ?>">English</a>
					</li>
					<li>
						<a href="<?php echo get_blog_option(2, 'siteurl'); ?>">繁體中文</a>
					</li>
					<li>
						<a href="<?php echo get_blog_option(3, 'siteurl'); ?>">簡體中文</a>
					</li>
				</ul>
			</li>
		</ul>

		<div class="mobile-anchor-area">
			<div class="mobile-anchor-item">
				<a href="<?php echo get_blog_option(1, 'siteurl'); ?>/global">
					<i class="fa fa-caret-right"></i>
					<span>海外販売支援プロジェクト</span>
				</a>
			</div>
		</div>
	</div>
</nav>