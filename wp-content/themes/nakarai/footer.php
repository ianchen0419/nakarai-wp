<div id="footer">
<div class="wrapper-size">
	<div class="sitemap-area">
		<ul class="sitemap-block">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php if(get_current_blog_id()==1){
					echo 'Home';
				}else if(get_current_blog_id()==2){
					echo '首頁';
				}else {
					echo '首页';
				} ?></a>
			</li>
			<li>Product</li>
			<li class="child-list">
				<a href="product"><?php if(get_current_blog_id()==1){
					echo 'Product';
				}else if(get_current_blog_id()==2){
					echo '產品';
				}else {
					echo '产品';
				} ?></a>
			</li>
			<li class="child-list">
				<a href="mekking">Mekking</a>
			</li>
			<li class="child-list">
				<a href="sabitoriking">Sabitori King</a>
			</li>
		</ul>
		<ul class="sitemap-block">
			<li>
				<a href="usage"><?php if(get_current_blog_id()==1){
					echo 'Usage / Q&A';
				}else if(get_current_blog_id()==2){
					echo '使用方法 / Q&A';
				}else {
					echo '使用方法 / Q&A';
				} ?></a>
			</li>
			<li><?php if(get_current_blog_id()==1){
				echo 'Company';
			}else if(get_current_blog_id()==2){
				echo '公司簡介';
			}else {
				echo '公司简介';
			} ?></li>
			<li class="child-list">
				<a href="about-us"><?php if(get_current_blog_id()==1){
							echo 'About Us';
						}else if(get_current_blog_id()==2){
							echo '公司簡介';
						}else {
							echo '公司简介';
						} ?></a>
			</li>
			<li class="child-list">
				<a href="reviews"><?php if(get_current_blog_id()==1){
							echo 'Reviews';
						}else if(get_current_blog_id()==2){
							echo '評價';
						}else {
							echo '评价';
						} ?></a>
			</li>
		</ul>
		<ul class="sitemap-block">
			<li>
				<a href="purchase"><?php if(get_current_blog_id()==1){
						echo 'Purchase';
					}else if(get_current_blog_id()==2){
						echo '購買 / 聯絡我們';
					}else {
						echo '购买 / 联络我们';
					} ?></a>
			</li>
			<li>
				<a href="<?php echo get_blog_option(1, 'siteurl'); ?>/global">海外販売支援プロジェクト</a>
			</li>
		</ul>
	</div>
	<div class="copyright-area">Copyright © NAKARAI Inc. All Rights Reserved.</div>
</div>
</div>

<script src="<?php bloginfo('template_directory') ?>/base.js"></script>
</body>
</html>