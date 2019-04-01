<?php /* Template Name: index */ ?>
<?php get_header();?>
	<div id="visual" class="visual-top">
		<img src="<?php bloginfo('template_directory') ?>/inc/img/top/top.jpg" width="100%" alt="NAKARAI MEKKING" />
		<div class="visual-text">
			<h4><?php if(get_current_blog_id()==1){
					echo 'Protective material for plating';
				}else if(get_current_blog_id()==2){
					echo '電鍍保護劑';
				}else {
					echo '电镀保护剂';
				} ?></h4>
			<picture> 
				<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/top/mekking_white.png" /> 
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/mekking.png" alt="mekking" width="300" />
			</picture>
			<p><?php if(get_current_blog_id()==1){
					echo 'MEKKING from NAKARAI offers high quality and long lasting result in protecting plating. It\'s the most popular plating protection in Japan.';
				}else if(get_current_blog_id()==2){
					echo 'NAKARAI的MEKKING（電鍍保護劑）<br>高品質，效果持久。是日本最流行的電鍍保護劑。';
				}else {
					echo 'NAKARAI的MEKKING（电镀保护剂）<br>高品质，效果持久。是日本最流行的电镀保护剂。';
				} ?></p>
			<a href="#contact" class="visual-button">Details</a>
		</div>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<div class="topimage-area">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/car_left.jpg" alt="car_left" width="450" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/car_right.jpg" alt="car_right" width="450" />
			</div>
			<h2 class="center-title mar_top40"><?php if(get_current_blog_id()==1){
					echo 'Maintaining best glossy and shinning luster forever.';
				}else if(get_current_blog_id()==2){
					echo '永遠保持光澤。';
				}else {
					echo '永远保持光泽。';
				} ?></h2>
			<p class="shine-text"><?php if(get_current_blog_id()==1){
					echo 'Do you remember the excitement when you first rode on the motorcycle you\'re riding now? That motorcycle had become your partner since the first time you met her. As time goes by, the radiance had declined; now do you want to bring back the shine and radiance for her? Because she\'s so important to you, it\'s necessary to take extra care of her. NAKARAI\'s MEKKING is the product you need to provide protection over the plating of your beloved bike, making her luster glossy and shinning like the first time.';
					}else if(get_current_blog_id()==2){
						echo '當你第一次遇見到你的摩托車時，你還記得那種興奮的感覺嗎？<br>自從第一次見面以來，那輛摩托車已經成為你重要的夥伴。<br>再回到那時的感動吧。<br>就因為它對你很重要，你需要正確的方式來保護它。<br>NAKARAI電鍍保護劑秉持著守護重要夥伴的精神，讓您的愛車光澤更持久，更具吸引力。';
					}else {
						echo '当你第一次遇见到你的摩托车时，你还记得那种兴奋的感觉吗？<br>自从第一次见面以来，那辆摩托车已经成为你重要的夥伴。<br>再回到那时的感动吧。<br>就因为它对你很重要，你需要正确的方式来保护它。<br>NAKARAI电镀保护剂秉持着守护重要夥伴的精神，让您的爱车光泽更持久，更具吸引力。';
					} ?></p>
			<div class="topimage-area">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/topimage_left.jpg" alt="topimage_left" width="450" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/topimage_right.jpg" alt="topimage_right" width="450" />
			</div>
			<div class="quote-area mobile-flex">
				<div class="quote-content">
					<h4>
						<i class="fa fa-quote-left fa-fw fa-3x"></i>
						<span><?php if(get_current_blog_id()==1){
						echo 'Plating protection "MEKKING"';
						}else if(get_current_blog_id()==2){
							echo '電鍍保護劑MEKKING';
						}else {
							echo '电镀保护剂MEKKING';
						} ?></span>
					</h4>
					<p><?php if(get_current_blog_id()==1){
						echo 'Just apply few drops and spread out on the treated area, maintaining the high-gloss shine without corrosion. MEKKING is hydrophobic and forms an extreme thin layer of 0.002u over the chrome plating and it blocks from water, oil and dust which causes rust. It can be widely used on beloved bikes, water bikes or cars as the protection of plating.';
						}else if(get_current_blog_id()==2){
							echo '只需塗抹幾滴並擦拭均勻，能夠保持愛車高光澤度，並且防止腐蝕。<br>MEKKING是疏水性的，會在電鍍層上形成0.002u的極薄層，防止水，油和灰塵生鏽。<br>可廣泛用於心愛的摩托車，水上摩托車或汽車，作為電鍍的保護。';
						}else {
							echo '只需涂抹几滴并擦拭均匀，能够保持爱车高光泽度，并且防止腐蚀。<br>MEKKING是疏水性的，会在电镀层上形成0.002u的极薄层，防止水，油和灰尘生锈。<br>可广泛用于心爱的摩托车，水上摩托车或汽车，作为电镀的保护。';
						} ?></p>
				</div>
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/mekking_product.png" width="400" alt="mekking_product" class="quote-image" />
			</div>
			<div class="quote-area">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/<?php if(get_current_blog_id()==1){
					echo 'comparison.png';
				}else if(get_current_blog_id()==2){
					echo 'comparison_zh.png';
				}else {
					echo 'comparison_zh.png';
				} ?>" width="400" alt="comparison" class="quote-image" />
				<div class="quote-content">
					<h4>
						<i class="fa fa-quote-left fa-fw fa-3x"></i>
						<span><?php if(get_current_blog_id()==1){
							echo 'Effect of MEKKING';
						}else if(get_current_blog_id()==2){
							echo 'MEKKING的效果';
						}else {
							echo 'MEKKING的效果';
						} ?></span>
					</h4>
					<p><?php if(get_current_blog_id()==1){
							echo 'Apply MEKKING a half of rusted part and leave the other half without putting it. In just 2 weeks you will see the clear difference! To maintain the high-gloss shine of plating and to simplify the process, please try our MEKKING.';
						}else if(get_current_blog_id()==2){
							echo '將MEKKING被應用於一半鍍層零件，並且在惡劣環境下放置約2週。<br>很明顯的，我們可以看到有塗抹MEKKING及未塗抹之間的差別。<br>想保持電鍍的光亮？從最簡單的保養開始。';
						}else {
							echo '将MEKKING被应用于一半镀层零件，并且在恶劣环境下放置约2周。<br>很明显的，我们可以看到有涂抹MEKKING及未涂抹之间的差别。<br>想保持电镀的光亮？从最简单的保养开始。';
						} ?></p>
				</div>
			</div>
			<div class="video-area">
				<h2 class="center-title"><?php if(get_current_blog_id()==1){
							echo 'Video (English Subtitle)';
						}else if(get_current_blog_id()==2){
							echo '介紹影片（附中文字幕）';
						}else {
							echo '介绍影片（附中文字幕）';
						} ?></h2>
				<iframe src="https://www.youtube.com/embed/18g_qmhplpU" frameborder="0" height="500" width="100%" height="100%"></iframe>
			</div>
			<div class="other-area">
				<div class="product-area">
					<a href="<?php if(get_current_blog_id()==1){
							echo 'https://www.amazon.com/dp/B004V1HN22';
						}else if(get_current_blog_id()==2){
							echo 'https://seller.pcstore.com.tw/S174670000/C1184236873.htm';
						}else {
							echo 'https://www.qoo10.com/item/NAKARAI-RUST-REMOVAL-AGENT-FOR-MOTORCYCLE-SABITOLING-SABITORI/562761826';
						} ?>" target="_blank">
						<figure>
							<img src="<?php bloginfo('template_directory') ?>/inc/img/top/mekking_amazon.png" alt="mekking_amazon" width="100" />
							<figcaption>
								<h6>MEKKING</h6>
								<p><?php if(get_current_blog_id()==1){
									echo 'Japan\'s best plating protection';
								}else if(get_current_blog_id()==2){
									echo '史上最強的電鍍保護劑';
								}else {
									echo '史上最强的电镀保护剂';
								} ?></p>
							</figcaption>
						</figure>
					</a>
					<a href="<?php if(get_current_blog_id()==1){
						echo 'https://www.amazon.com/dp/B004V1A58G';
					}else if(get_current_blog_id()==2){
						echo 'https://seller.pcstore.com.tw/S174670000/C1185280457.htm';
					}else {
						echo 'https://www.qoo10.com/item/NAKARAI-RUST-REMOVAL-AGENT-FOR-MOTORCYCLE-SABITOLING-SABITORI/562761826';
					} ?>" target="_blank">
						<figure>
							<img src="<?php bloginfo('template_directory') ?>/inc/img/top/sabitori_amazon.png" alt="sabitori_amazon" width="100" />
							<figcaption>
								<h6>SABITORY KING</h6>
								<p><?php if(get_current_blog_id()==1){
									echo 'Japan\'s best rust remover';
								}else if(get_current_blog_id()==2){
									echo '史上最強的除鏽劑';
								}else {
									echo '史上最强的除锈剂';
								} ?></p>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="share-area">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnakaraimasaki%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>