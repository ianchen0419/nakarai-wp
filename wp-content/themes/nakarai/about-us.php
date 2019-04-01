<?php /* Template Name: about-us */ ?>
<?php get_header();?>
	<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/about-us/about-us_mobile.jpg" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/about-us.jpg" alt="About Us" width="100%" /> 
		</picture>
		<h1 class="visual-title"><?php if(get_current_blog_id()==1){
					echo 'About Us';
				}else if(get_current_blog_id()==2){
					echo '公司簡介';
				}else {
					echo '公司简介';
				} ?></h1>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'Company Outline';
				}else if(get_current_blog_id()==2){
					echo '公司簡介';
				}else {
					echo '公司简介';
				} ?></h2>
			<table class="properties-table" width="800">
				<tr>
					<th <?php if(get_current_blog_id()==1){
					echo '';
					}else {
						echo 'width="40%"';
					} ?>><?php if(get_current_blog_id()==1){
						echo 'Company Name';
					}else if(get_current_blog_id()==2){
						echo '公司名稱';
					}else {
						echo '公司名称';
					} ?></th>
					<td><?php if(get_current_blog_id()==1){
						echo 'NAKARAI Inc.';
					}else if(get_current_blog_id()==2){
						echo 'メッキ工房NAKARAI/有限会社　半井鍍金工業所';
					}else {
						echo 'メッキ工房NAKARAI/有限会社　半井鍍金工業所';
					} ?></td>
				</tr>
				<tr>
					<th><?php if(get_current_blog_id()==1){
						echo 'Address';
					}else if(get_current_blog_id()==2){
						echo '地址';
					}else {
						echo '地址';
					} ?></th>
					<td><?php if(get_current_blog_id()==1){
						echo 'C, 3-7-2, Kamiikedai, Ota-ku, Tokyo, 145-0064, Japan';
					}else if(get_current_blog_id()==2){
						echo '東京都大田區上池台3-7-2-C';
					}else {
						echo '东京都大田区上池台3-7-2-C';
					} ?></td>
				</tr>
				<tr>
					<th>TEL</th>
					<td>+81-3-3727-5111</td>
				</tr>
				<tr>
					<th><?php if(get_current_blog_id()==1){
						echo 'President';
					}else if(get_current_blog_id()==2){
						echo '負責人';
					}else {
						echo '负责人';
					} ?></th>
					<td><?php if(get_current_blog_id()==1){
						echo 'Masaki Nakarai';
					}else if(get_current_blog_id()==2){
						echo '半井 雅輝';
					}else {
						echo '半井 雅辉';
					} ?></td>
				</tr>
			</table>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
				echo 'Works';
			}else if(get_current_blog_id()==2){
				echo '實績';
			}else {
				echo '实绩';
			} ?></h2>
			<div class="before-after-area">
				<figure>
					<img src="<?php bloginfo('template_directory') ?>/inc/img/top/before.jpg" width="180" alt="before" />
					<figcaption>BEFORE</figcaption>
				</figure>
				<i class="fa fa-caret-right fa-fw fa-3x"></i>
				<figure>
					<img src="<?php bloginfo('template_directory') ?>/inc/img/top/after.jpg" width="180" alt="after" />
					<figcaption>AFTER</figcaption>
				</figure>
			</div>
			<div class="product-image-area">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_1.jpg" width="250" alt="works_1" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_2.jpg" width="250" alt="works_2" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_3.jpg" width="250" alt="works_3" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_4.jpg" width="250" alt="works_4" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_5.jpg" width="250" alt="works_5" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_6.jpg" width="250" alt="works_6" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_7.jpg" width="250" alt="works_7" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_8.jpg" width="250" alt="works_8" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_9.jpg" width="250" alt="works_9" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_10.jpg" width="250" alt="works_10" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_11.jpg" width="250" alt="works_11" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/works_12.jpg" width="250" alt="works_12" />
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
				echo 'Published in magazine';
			}else if(get_current_blog_id()==2){
				echo '雜誌報導';
			}else {
				echo '杂志报导';
			} ?></h2>
			<p><?php if(get_current_blog_id()==1){
				echo 'Until today, it has been introduced by many Japanese magazines. At Harley Davidson\'s Blue Sky Haven, 100 MEKKING were sold in 2 days; showing how popular it is among bike lovers in Japan.';
			}else if(get_current_blog_id()==2){
				echo '到目前為止，受到很多日本雜誌採訪。<br>在Harley Davidson的Blue Sky Heaven中，<br>MEKKING是日本機車愛好者非常喜歡的產品，曾在2天內售出100多瓶。';
			}else {
				echo '到目前为止，受到很多日本杂志采访。<br>在Harley Davidson的Blue Sky Heaven中，<br>MEKKING是日本机车爱好者非常喜欢的产品，曾在2天内售出100多瓶。';
			} ?></p>
			<div class="center-image">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/magazine_1.jpg" width="600" alt="magazine_1" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/about-us/magazine_2.jpg" width="600" alt="magazine_2" />
			</div>
		</div>
	</main>
<?php get_footer(); ?>