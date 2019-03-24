<?php /* Template Name: product */ ?>
<?php get_header();?>
	<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/product/product_mobile.jpg" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product.jpg" alt="Our Products" width="100%" /> 
		</picture>
		<h1 class="visual-title"><?php if(get_current_blog_id()==1){
					echo 'Our Products';
				}else if(get_current_blog_id()==2){
					echo '產品';
				}else {
					echo '产品';
				} ?></h1>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<p class="mar_top40"><?php if(get_current_blog_id()==1){
					echo 'SABITORI KING is for remove rust of chrome plating. After removed rust and to prevent further corrosion, try MEKKING which would keep the glossy shine of plating. These two products can be used on motorcycles, water bike, automobiles or other items for plating/coating';
				}else if(get_current_blog_id()==2){
					echo '為了防止除鏽後再次生鏽，SABITORI KING用來去除電鍍層的生鏽情形，MEKKING可以維護鍍層的光澤<br>這兩種產品皆可應用於各種電鍍塗料，如摩托車，水上摩托車，汽車等。';
				}else {
					echo '为了防止除锈后再次生锈，SABITORI KING用来去除电镀层的生锈情形，MEKKING可以维护镀层的光泽<br>这两种产品皆可应用于各种电镀涂料，如摩托车，水上摩托车，汽车等。';
				} ?></p>
			<div class="intro-item">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/product/mekking_bottle.png" alt="MEKKING" width="250" />
				<div class="product-content">
					<h2>
						<a href="mekking">MEKKING</a>
					</h2>
					<p><?php if(get_current_blog_id()==1){
					echo 'Japan\'s best plating protection';
					}else if(get_current_blog_id()==2){
						echo '史上最強的電鍍保護劑';
					}else {
						echo '史上最强的电镀保护剂';
					} ?></p>
					<p><?php if(get_current_blog_id()==1){
					echo 'Just spread a few drops on chrome plating. It protects from the rust and keeps the brightness.';
					}else if(get_current_blog_id()==2){
						echo '只需在電鍍層上使用幾滴即可，持續保持電鍍層亮度且防止生鏽。';
					}else {
						echo '只需在电镀层上使用几滴即可，持续保持电镀层亮度且防止生锈。';
					} ?></p>
					<div class="detail-button">
						<a href="mekking">Details</a>
					</div>
				</div>
			</div>
			<div class="intro-item mobile-flex">
				<div class="product-content">
					<h2>
						<a href="mekking">SABITORI KING</a>
					</h2>
					<p><?php if(get_current_blog_id()==1){
					echo 'Japan\'s best rust remover';
					}else if(get_current_blog_id()==2){
						echo '史上最強的除鏽劑';
					}else {
						echo '史上最强的除锈剂';
					} ?></p>
					<p><?php if(get_current_blog_id()==1){
					echo 'By using SABITORI KING, you can remove rust without peeling off and damaging the chrome plating.';
					}else if(get_current_blog_id()==2){
						echo 'SABITORI KING除鏽劑不會侵蝕電鍍層，並有效去除鏽蝕，同時不造成傷害。';
					}else {
						echo 'SABITORI KING除锈剂不会侵蚀电镀层，并有效去除锈蚀，同时不造成伤害。';
					} ?></p>
					<div class="detail-button">
						<a href="sabitoriking">Details</a>
					</div>
				</div>
				<img src="<?php bloginfo('template_directory') ?>/inc/img/product/sabitoriking_bottle.png" alt="SABITORI KING" width="250" />
			</div>
			<ul class="nostyle-list">
				<li><?php if(get_current_blog_id()==1){
					echo '※ MEKKING evaporates and becomes a solid if you leave it in a place of 86°F or higher, such as in a car in summer or in a garage. Please keep in a relatively cool place such as in the room.';
					}else if(get_current_blog_id()==2){
						echo '※ 若將MEKKING放置於30℃以上之場所（例如：夏天或車庫中的汽車），MEKKING會蒸發並且呈現固態狀。請保持在比較涼爽的地方，如在房間裡。';
					}else {
						echo '※ 若将MEKKING放置于30℃以上之场所（例如：夏天或车库中的汽车），MEKKING会蒸发并且呈现固态状。请保持在比较凉爽的地方，如在房间里。';
					} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo '※ If you do not close the black cap completely, it may evaporate. Please close it tightly after use.';
					}else if(get_current_blog_id()==2){
						echo '※ 若沒有完全蓋緊黑色蓋子，可能導致蒸發，使用後請密封。';
					}else {
						echo '※ 若没有完全盖紧黑色盖子，可能导致蒸发，使用后请密封。';
					} ?></li>
			</ul>
		</div>
	</main>
<?php get_footer(); ?>