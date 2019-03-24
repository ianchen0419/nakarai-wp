<?php /* Template Name: reviews */ ?>
<?php get_header();?>
	<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/reviews/reviews_mobile.jpg" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/reviews.jpg" alt="Voice of loyalty" width="100%" /> 
		</picture>
		<h1 class="visual-title"><?php if(get_current_blog_id()==1){
			echo 'Voice of loyalty';
		}else if(get_current_blog_id()==2){
			echo '使用者評價';
		}else {
			echo '使用者评价';
		} ?></h1>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<div class="step-area large">
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_1.jpg" alt="review_1" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I used MEKKING to coat the body of my new car. Surprisingly, MEKKING makes a complete glossy shine even though my car was a brand new! It\'s great to see the particular glossiness presented by chrome. There are more and more parts of my motorcycles becoming "PLATED by NAKARAI". If possible, I wish to buy only new plated parts and apply MEKKING on them.';
						}else if(get_current_blog_id()==2){
							echo '我把MEKKING試用在車身上。即使是新車塗上MEKKING，也感受了不同的亮度。<br>我的摩托車越來越多的部分被塗上MEKKING。如果可能的話，我希望購買新的電鍍部件並在上面塗上MEKKING。';
						}else {
							echo '我把MEKKING试用在车身上。即使是新车涂上MEKKING，也感受了不同的亮度。<br>我的摩托车越来越多的部分被涂上MEKKING。如果可能的话，我希望购买新的电镀部件并在上面涂上MEKKING。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
							echo 'Motorcycle: Yamaha Pocke.<br>User: Mr. Y';
						}else if(get_current_blog_id()==2){
							echo '使用車種：Yamaha Pocke.<br>Y先生';
						}else {
							echo '使用车种：Yamaha Pocke.<br>Y先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_2.jpg" alt="review_2" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'When I purchased the used motorcycle, I looked for solutions to remove the rust from chrome plating. I found SABITORI KING and immediately tried it on. It completely removed the rust appeared on the fuel cap. Furthermore, I finished the process with MEKKING; it brought up the blackish shinning glossiness of plating. Left image is before use, several rusted spots are in the center of the said image. Rusted spots are now removed that you can hardly see them.';
						}else if(get_current_blog_id()==2){
							echo '自從我購買二手摩托車以來，我一直在尋找鍍鉻的防鏽產品，所以當我尋找各種各樣的東西時，我發現SABITORI KING。<br>我立即購買並嘗試。我輕鬆除掉浮在油箱蓋上的鐵鏽!!!另外，在使用完MEKKING後，鍍層的漆黑光澤增加了。<br>左圖是在使用之前，圖中有幾個生鏽的黑點，我們在使用後，發現看不太到這些黑點了。';
						}else {
							echo '自从我购买二手摩托车以来，我一直在寻找镀铬的防锈产品，所以当我寻找各种各样的东西时，我发现SABITORI KING。<br>我立即购买并尝试。我轻松除掉浮在油箱盖上的铁锈!!!另外，在使用完MEKKING后，镀层的漆黑光泽增加了。<br>左图是在使用之前，图中有几个生锈的黑点，我们在使用后，发现看不太到这些黑点了。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
							echo 'User: Mr. N';
						}else if(get_current_blog_id()==2){
							echo 'N先生';
						}else {
							echo 'N先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_3.jpg" alt="review_3" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'Heavy user of MEKKING. I purchased MEKKING to use on my Harley\'s plating six month ago via online store. Because I keep my bike in the underground parking lot where is very humid, it became very rusted. I\'ve applied three times since the purchase, bike is still parked in the same parking lot but no more rusts! The plating is glossy and shining. It\'s a wonderful product. Thank God that I found it!';
						}else if(get_current_blog_id()==2){
							echo '我是MEKKING的愛好者。<br>我半年前在網路上購買了它，以保護哈雷機車的鍍層。哈雷放置的地方是一個地下停車場，以致機車潮濕而且生鏽。到目前為止我已經使用了3次。<br>雖然一樣在地下停車場，但鍍層層閃閃發光，不生鏽。<br>我想表達我真誠感謝遇到一個美妙的產品。';
						}else {
							echo '我是MEKKING的爱好者。<br>我半年前在网路上购买了它，以保护哈雷机车的镀层。哈雷放置的地方是一个地下停车场，以致机车潮湿而且生锈。到目前为止我已经使用了3次。<br>虽然一样在地下停车场，但镀层层闪闪发光，不生锈。<br>我想表达我真诚感谢遇到一个美妙的产品。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
							echo 'Motorcycle type: Harley Davidson.<br>User: Mr. O.';
						}else if(get_current_blog_id()==2){
							echo '使用車種：Harley Davidson.<br>O先生';
						}else {
							echo '使用车种：Harley Davidson.<br>O先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_4.jpg" alt="review_4" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'When going to the touring it stands out anyhow. It is important that the plating shines brightly and stands out. After applying MEKKING, it hardely gets dirt and dust. It is no problem with a little wiping for the maintenance after returning from touring. It\'s easy to use because you apply about once every six months. Thanks to MEKKING, my Harley is always shiny.';
						}else if(get_current_blog_id()==2){
							echo '走到哪裡！它總是閃閃發亮！鍍層後，灰塵和污垢也不容易附著在上面。騎著使用鍍層後的哈雷旅行，一回到家只要輕輕擦拭就可以回復光澤！建議每六個月塗抹一次！感謝MEKKING，我的哈雷總是很有光澤。';
						}else {
							echo '走到哪里！它总是闪闪发亮！镀层后，灰尘和污垢也不容易附着在上面。骑着使用镀层后的哈雷旅行，一回到家只要轻轻擦拭就可以回复光泽！建议每六个月涂抹一次！感谢MEKKING，我的哈雷总是很有光泽。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_5.jpg" alt="review_5" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'Many members of HUMMER OWNER\'S CLUB are using MEKKING and SABITORI KING.';
						}else if(get_current_blog_id()==2){
							echo '很感謝HUMMER OWNER\'S CLUB的成員長期支持。';
						}else {
							echo '很感谢HUMMER OWNER\'S CLUB的成员长期支持。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_6.jpg" alt="review_6" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I was told that the plating looked different than usual by people at a car dealer, and I said that\'s because of MEKKING. I applied it to a new car, and I was touched by the fact that it is different from the appearance! The best chemical product of plating is definitely NAKARAI\'s. I also ordered the magic wipe and have used it since then. I decided to use only chemical products such as Wako\'s and SurLuster, but I will also use NAKARAI\'s products!';
						}else if(get_current_blog_id()==2){
							echo '使用完MEKKING後，順路到了汽車經銷商，馬上發現車子的光澤度的不同，我告知了在新車購入時立即使用了MEKKING來保護電鍍，很開心有了成果出來。這都要感謝NAKARAI公司的產品。此外，我也另外訂購了NAKARAI公司的專用擦拭布一起使用。';
						}else {
							echo '使用完MEKKING后，顺路到了汽车经销商，马上发现车子的光泽度的不同，我告知了在新车购入时立即使用了MEKKING来保护电镀，很开心有了成果出来。这都要感谢NAKARAI公司的产品。此外，我也另外订购了NAKARAI公司的专用擦拭布一起使用。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
							echo 'Velfire G\'s<br>Mr. N';
						}else if(get_current_blog_id()==2){
							echo '使用車種：Velfire G\'s<br>N先生';
						}else {
							echo '使用车种：Velfire G\'s<br>N先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_7.jpg" alt="review_7" width="400" />
					<figcaption>
						<ul type="square">
							<li><?php if(get_current_blog_id()==1){
								echo 'Spreads well';
							}else if(get_current_blog_id()==2){
								echo '容易塗抹';
							}else {
								echo '容易涂抹';
							} ?></li>
							<li><?php if(get_current_blog_id()==1){
								echo 'Easy to get rid of dust';
							}else if(get_current_blog_id()==2){
								echo '輕鬆去除污垢';
							}else {
								echo '轻松去除污垢';
							} ?></li>
							<li><?php if(get_current_blog_id()==1){
								echo 'Easy to apply';
							}else if(get_current_blog_id()==2){
								echo '簡單作業';
							}else {
								echo '简单作业';
							} ?></li>
							<li><?php if(get_current_blog_id()==1){
								echo 'Easy to clean up';
							}else if(get_current_blog_id()==2){
								echo '使用後保養簡單';
							}else {
								echo '使用后保养简单';
							} ?></li>
							<li><?php if(get_current_blog_id()==1){
								echo 'Gets rid of dust just by wiping off';
							}else if(get_current_blog_id()==2){
								echo '輕輕擦拭便可除垢';
							}else {
								echo '轻轻擦拭便可除垢';
							} ?></li>
						</ul>
						<p><?php if(get_current_blog_id()==1){
							echo 'BOSS HOSS Trike<br>Mr. U.S. in Tokyo';
						}else if(get_current_blog_id()==2){
							echo '使用車種：BOSS HOSS 三輪摩托車<br>東京 U.S.先生';
						}else {
							echo '使用车种：BOSS HOSS 三轮摩托车<br>东京 U.S.先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_8.jpg" alt="review_8" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'A friend of mine who\'s hobby is photography took a very fashionable picture of the London bus cafe which reflected on Harley\'s shiny air cleaner. After using MEKKING It got a deeper brilliance than when it was brand new! This Harley\'s air cleaner gets more shiny in proportion to the number of applications. Of course, other plating parts keep its shine even on the bad weather conditions or environments. MEKKING is a truly good product. Thank you.';
						}else if(get_current_blog_id()==2){
							echo '我的一個朋友，他的業餘愛好是攝影，拍攝了一張非常時尚的倫敦巴士咖啡館照片<br>使用MEKKING後，比新車時的光澤感更佳。<br>即便在天候惡劣下，電鍍部份仍然保持光澤♪<br>MEKKING是優秀的產品。謝謝♪';
						}else {
							echo '我的一个朋友，他的业馀爱好是摄影，拍摄了一张非常时尚的伦敦公车咖啡馆照片<br>使用MEKKING后，比新车时的光泽感更佳。<br>即便在天候恶劣下，电镀部份仍然保持光泽♪<br>MEKKING是优秀的产品。谢谢♪';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
							echo 'Mr. Okayama';
						}else if(get_current_blog_id()==2){
							echo '岡本先生';
						}else {
							echo '冈本先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_9.jpg" alt="review_9" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I received a good voice from a user. "I was concerned about rust because parking lot is only 1.5 meters form the sea, so bumper easily gets foggy. I wasn\'t able to take rust with any chemical, but I could remove rust after using SABITORI KING and it hardly stays on the car after using MEKKING. The car also becomes hard to get dirty, and it glows well with only water wiping. We apply MEKKING once every 3 months, it lasts longer. I introduced these two products to my friends whose cars have plated parts."';
						}else if(get_current_blog_id()==2){
							echo '在離海洋1.5公尺的停車場裡，因為海水漲潮覆蓋到車子的前保險桿，所以我很擔心鏽蝕。即使我使用了任何東西，也無法改善，但當我使用SABITORI KING時，竟然完全的去除鐵鏽，之後使用了MEKKING發現能夠預防鐵鏽。車子也不易髒，僅用水擦拭即可發光。建議每3個月使用一次並具有良好的擦拭效果';
						}else {
							echo '在离海洋1.5公尺的停车场里，因为海水涨潮复盖到车子的前保险杆，所以我很担心锈蚀。即使我使用了任何东西，也无法改善，但当我使用SABITORI KING时，竟然完全的去除铁锈，之后使用了MEKKING发现能够预防铁锈。车子也不易脏，仅用水擦拭即可发光。建议每3个月使用一次并具有良好的擦拭效果';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
							echo 'Mr. Hasegawa';
						}else if(get_current_blog_id()==2){
							echo '長谷川先生';
						}else {
							echo '长谷川先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_10.jpg" alt="review_10" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I bought MEKKING at Amazon after getting samples of SABITORI KING. It is a high quality product. My car DS1100 gets shiny. I should have known it before. Thank you very much.';
						}else if(get_current_blog_id()==2){
							echo '在收到SABITORI KING樣品後，我在亞馬遜購買了MEKKING。<br>我最喜歡的車DS1100也閃閃發光。使用後只真是相見恨晚，非常感謝。';
						}else {
							echo '在收到SABITORI KING样品后，我在亚马逊购买了MEKKING。<br>我最喜欢的车DS1100也闪闪发光。使用后只真是相见恨晚，非常感谢。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
							echo 'Mr. U.M. in Tokyo';
						}else if(get_current_blog_id()==2){
							echo '東京 U.M.先生';
						}else {
							echo '东京 U.M.先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_11.jpg" alt="review_11" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'About the care of plated parts, I usually wipe it gently after driving. In case I can\'t take dust, I wipe it off by using parts cleaner. It is about 10 minutes or so in terms of working time, but even this alone makes it beautiful, and rust can be invisible. Even so, the plated part of the mirror gets dusty with dust and dirt little by little. Then you can not even take the dust with an other parts cleaner. (Photo 1) So I tried SABITORI KING this time. I put it on a magic wipe and gently wipe it off, and it got dull and became shiny. (Photo 2) Before using SABITORI KING, I used a rust removing agent of the tube type. They looked similar but SABITORI KING is more fine. It will remove rust so easily by just using SABITORI KING. After wiping off the powder of SABITORI KING cleanly, it wiped evenly that impregnated MEKKING. MEKKING is volatile and quickly dries. After application, it shines pretty well. But after it drie out, it will return to like the original. You might think why the shine doesn\'t last, but MEKKING is a plating PROTECTIVE agent. I think that it is better not to misunderstand this point. However, the amazing point of this is after application. A few days after applying MEKKING, I went one day touring. Usually dust adheres to the surface of plated parts. However, after MEKKING application, it seems that dust is blocked by the force of the film, so dust has not adhered much to the plating part. Periodic application may make cleaning easier. Finally, it is hard to do all the plating parts polishing at the same time, but I think that those who did it periodically can keep shining. I think that conspicuous parts and easy-to-clean parts will be protected with MEKKING.';
						}else if(get_current_blog_id()==2){
							echo '我通常在使用摩托車完後，就會使用乾擦保養。<br>如果污垢無法脫落，就會試著用抹布噴灑清潔劑輕輕擦拭。<br>作業時間約10分鐘，但即使這樣也很漂亮，而且能夠去除明顯的鐵鏽。<br>但是，鏡子和其他零件的電鍍部分也隨灰塵和污垢一點一點地變暗。但慢慢的使用零件清潔劑也沒作用。（照片1）所以，我這次嘗試了SABITORI KING。配合用專用擦拭布輕輕擦拭，結果非常的有光澤感（照片2）在使用SABITORI KING之前，我使用的是牙膏型擠壓式的除鏽劑，雖然市面上有很多類似的產品，但使用後顯然的SABITORI KING非常的細緻。使用完除鏽後擦拭完表面，我試著塗抹上MEKKING保護它。鍍膜保護劑在短時間內就會揮發速乾，在乾燥前和乾燥後的光澤度還是有差別的，因為他是鍍膜保護劑而不是鍍膜劑。可是在使用MEKKING後的幾天，發現了使用地方不容易有塵埃，MEKKING真的幫我保護了鍍膜部份，讓清潔更輕鬆了。最後，同時進行所有的電鍍零件拋光很辛苦，但我認為定期進行鍍膜保護可以保持光澤。都會受到塗膜的保護。';
						}else {
							echo '我通常在使用摩托车完后，就会使用干擦保养。<br>如果污垢无法脱落，就会试着用抹布喷洒清洁剂轻轻擦拭。<br>作业时间约10分钟，但即使这样也很漂亮，而且能够去除明显的铁锈。<br>但是，镜子和其他零件的电镀部分也随灰尘和污垢一点一点地变暗。但慢慢的使用零件清洁剂也没作用。（照片1）所以，我这次尝试了SABITORI KING。配合用专用擦拭布轻轻擦拭，结果非常的有光泽感（照片2）在使用SABITORI KING之前，我使用的是牙膏型挤压式的除锈剂，虽然市面上有很多类似的产品，但使用后显然的SABITORI KING非常的细致。使用完除锈后擦拭完表面，我试着涂抹上MEKKING保护它。镀膜保护剂在短时间内就会挥发速干，在干燥前和干燥后的光泽度还是有差别的，因为他是镀膜保护剂而不是镀膜剂。可是在使用MEKKING后的几天，发现了使用地方不容易有尘埃，MEKKING真的帮我保护了镀膜部份，让清洁更轻松了。最后，同时进行所有的电镀零件抛光很辛苦，但我认为定期进行镀膜保护可以保持光泽。都会受到涂膜的保护。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
							echo 'Mr. Horizo';
						}else if(get_current_blog_id()==2){
							echo '堀増先生';
						}else {
							echo '堀増先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_12.jpg" alt="review_12" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo '"Calsonic\'s Blue bicycle"<br>I\'m surprised that I could remove rust by a little rubbing. It is a pleasant experience that truly, amazingly, easy, to erase rust. Gloss revived. It became shiny even though the parts was with rust before applying SABITORI KING. Indeed, it is not easy to remove rust easily with this state... but I could remove it far more easier than any other abrasives. I could find a really good product.';
						}else if(get_current_blog_id()==2){
							echo '馬上來試驗!只是輕輕擦拭，就輕輕鬆鬆的去除鏽斑！恢復光澤度。<br>※完全固化後，成為鍍鉻後的光澤度。<br>事實上，在迄今為止生鏽的狀態下，這並不容易恢復這樣的光澤度，目前為止都使用含有磨料的除鏽劑，也不容易脫落，真的是很推薦SABITORI KING♪';
						}else {
							echo '马上来试验!只是轻轻擦拭，就轻轻松松的去除锈斑！恢复光泽度。<br>※完全固化后，成为镀铬后的光泽度。<br>事实上，在迄今为止生锈的状态下，这并不容易恢复这样的光泽度，目前为止都使用含有磨料的除锈剂，也不容易脱落，真的是很推荐SABITORI KING♪';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_13.jpg" alt="review_13" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'It seems that plating also gradually loses its radiance unless you regularly care. Especially for plating aluminum cast parts, something like point rust appears to come out. However, since it is hard for me to always scrub with MEKKING, I usually keep shining on WAKOS\'s Various Court and I can keep deep shine all the time by polishing with MEKKING about once every 3 months. In addition, MEKKING seems to demonstrate power not only for plating parts but also for surface protection and gloss maintenance of gloss painted parts and iron parts. MEKKING will surely give you satisfaction for those who love shine.';
						}else if(get_current_blog_id()==2){
							echo '除非你經常保養，否則鍍膜會逐漸失去光彩。特別是電鍍鋁容易產生鐵鏽。但是，時常需要拋光是一件非常麻煩的事，所以為了保持光澤，都定期使用MEKKING保養（在我的情況下大概在3個月一次）。使用MEKKING會持續的保持光澤，又，它不僅僅用於鍍膜零件也可以用於光面彩繪部分和鐵部分。對於那些喜歡鍍膜保護的人，肯定會讓你滿意。';
						}else {
							echo '除非你经常保养，否则镀膜会逐渐失去光彩。特别是电镀铝容易产生铁锈。但是，时常需要抛光是一件非常麻烦的事，所以为了保持光泽，都定期使用MEKKING保养（在我的情况下大概在3个月一次）。使用MEKKING会持续的保持光泽，又，它不仅仅用于镀膜零件也可以用于光面彩绘部分和铁部分。对于那些喜欢镀膜保护的人，肯定会让你满意。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
							echo 'Mr. M in Yokohama';
						}else if(get_current_blog_id()==2){
							echo '橫濱 M先生';
						}else {
							echo '横滨 M先生';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_14.jpg" alt="review_14" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I saw NAKARAI\'s MEKKING by a chance when I picked it on the Harley\'s website. I bought a set of MEKKING and SABITORI KING, and I found that these are such wonderful items. Mr. NAKARAI\'s MEKKING and SABITORI KING are unbelivably great products.';
						}else if(get_current_blog_id()==2){
							echo '前幾天，逛了哈雷專門網站，偶然的發現NAKARAI先生的留言。我半信半疑的買了除鏽劑&amp;鍍膜保護劑的組合，使用後真心推薦MEKKING和SABITORI KING。真的是非常好的產品。';
						}else {
							echo '前几天，逛了哈雷专门网站，偶然的发现NAKARAI先生的留言。我半信半疑的买了除锈剂&amp;镀膜保护剂的组合，使用后真心推荐MEKKING和SABITORI KING。真的是非常好的产品。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_15.jpg" alt="review_15" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I ride Yamaha\'s Cruzer SC-32, but the handle part was rusty as you can see. Although I gave up on remove rusts completely because of seawater, my friend told me that SABITORI KING & MEKKING strongly resist in seawater. I could see the great effect right after I used them. It was not possible to remove all rust of the part where the plating is turned up but I\'m very satisfied with the quality. I am looking forward to the next ship maneuvering! Next time I will clean the lever on the left side and tell it to my fishing associates.';
						}else if(get_current_blog_id()==2){
							echo '我騎著YAMAHA的遊艇SC-32，但正如你所看到的，手方向盤部分幾乎是鏽斑。<br>因為是海水所照成，所以我放棄了，但我的朋友告訴我，SABITORI KING和MEKKING對海水很強，我立即嘗試，果然效果很好。<br>沒有鍍膜的部份確實使用除鏽劑也沒有作用，但是使用在鍍膜上的效果非常滿意。很期待下一次的出航。';
						}else {
							echo '我骑着YAMAHA的游艇SC-32，但正如你所看到的，手方向盘部分几乎是锈斑。<br>因为是海水所照成，所以我放弃了，但我的朋友告诉我，SABITORI KING和MEKKING对海水很强，我立即尝试，果然效果很好。<br>没有镀膜的部份确实使用除锈剂也没有作用，但是使用在镀膜上的效果非常满意。很期待下一次的出航。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_16.jpg" alt="review_16" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'Using SABITORI KING and MEKKING my vehicle have become as bright as new. This time I made the boat bumper shiny.';
						}else if(get_current_blog_id()==2){
							echo '使用了SABITORI KING和MEKKING讓它們如同新品閃閃發亮。這次的船型保險桿也變得非常有光澤。';
						}else {
							echo '使用了SABITORI KING和MEKKING让它们如同新品闪闪发亮。这次的船型保险杆也变得非常有光泽。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_17.jpg" alt="review_17" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'By closely looking at the front wheels, I noticed a rust. After washing the wheel and taking the moisture, I used SABITORI KING. It got really beautiful when lightly stroking it by attaching it to a dedicated wipe a little. Although I have not taken a picture, I could remove rust adherent to spokes, which I couldn\'t remove with parts cleaner. I got it easily with just wiping a little. The rough surface also became slippery and I could remove it more than I thought. I did not take a picture, but all the dirt on the front wheel are gone and the wheels became beautiful.';
						}else if(get_current_blog_id()==2){
							echo '最近注意了一下前輪，仔細一看都生鏽了，洗完車輪後，擦乾水分，我立即使用了SABITORI KING。沾取在專用擦拭布上，輕輕擦拭，變得有光澤感了。<br>雖然沒有照片可考，但在部份零件及煞車線上一直擦不掉的鏽斑全變得乾淨了。使用SABITORI KING後。粗糙的表面也變得很光滑。';
						}else {
							echo '最近注意了一下前轮，仔细一看都生锈了，洗完车轮后，擦干水分，我立即使用了SABITORI KING。沾取在专用擦拭布上，轻轻擦拭，变得有光泽感了。<br>虽然没有照片可考，但在部份零件及煞车线上一直擦不掉的锈斑全变得干净了。使用SABITORI KING后。粗糙的表面也变得很光滑。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_18.jpg" alt="review_18" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I purchased a set of MEKKING and SABITORI KING a year ago. It took time to apply MEKKING for the first time, but I\'m very satisfied with the quality. It has not been rusted at all by applying once a year. Because it coats while spreading a small amount, it does not decrease at all!';
						}else if(get_current_blog_id()==2){
							echo '一年前我們購買了MEKKING和SABITORI KING。<br>剛開始使用MEKKING花了不少時間在塗抹上但塗抹後非常的滿意！！<br>每年使用一次就不會生鏽！<br>因為只需少量塗抹，所以經濟又實惠！';
						}else {
							echo '一年前我们购买了MEKKING和SABITORI KING。<br>刚开始使用MEKKING花了不少时间在涂抹上但涂抹后非常的满意！！<br>每年使用一次就不会生锈！<br>因为只需少量涂抹，所以经济又实惠！';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_19.jpg" alt="review_19" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I purchased MEKKING and SABITORI KING as a set two years ago. First, I applied it to the whole and then to the area I think I need, so it\'s very easy! (Thin stretch, evenly stretch, extend without gaps) I paint frequently, but only about half has been reduced yet!';
						}else if(get_current_blog_id()==2){
							echo '兩年前購買MEKKING和SABITORI KING開始整體大致塗抹後加強在意的部份後，之後就會非常輕鬆。因為每次只需使用少量，所以非常的經濟！';
						}else {
							echo '两年前购买MEKKING和SABITORI KING开始整体大致涂抹后加强在意的部份后，之后就会非常轻松。因为每次只需使用少量，所以非常的经济！';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_20.jpg" alt="review_20" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I tried to polish my Harley for the first time in a while and there was a point rust on the wheel part. So I researched on rust remover on the Internet, and purchased NAKARAI\'s SABITORI KING & MEKKING. When I tried, I was surprised because it removed rust more than I imagined! Point rust like the image was completely gone, and when MEKKING was applied, it became shiny! It is a product you would like to recommend to everyone.';
						}else if(get_current_blog_id()==2){
							echo '第一次拋光自己的哈雷機車時，發現車輪有少許點鏽！在網上搜尋除鏽時，發現了MEKKING和SABITORI KING。<br>購買使用後，成果比想像的還要驚訝！ 點鏽完全像圖像一樣的不見，塗上MEKKING後，非常的有光澤！想推薦給每個人。';
						}else {
							echo '第一次抛光自己的哈雷机车时，发现车轮有少许点锈！在网上搜寻除锈时，发现了MEKKING和SABITORI KING。<br>购买使用后，成果比想像的还要惊讶！ 点锈完全像图像一样的不见，涂上MEKKING后，非常的有光泽！想推荐给每个人。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_21.jpg" alt="review_21" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'It turned out very beautiful! I would like to try it elsewhere. I polished the rusted turn signal ASSY with SABITORI KING. It is shining. Holts got better in terms of how much rust was removed, but SABITORI KING got sharper. Then I coated with liquid called MEKKING and It shined more.';
						}else if(get_current_blog_id()==2){
							echo '它變得非常美麗！我也想嘗試其他地方。<br>我使用SABITORI KING替彎型ASSY除鏽。 使用後非常的有光澤，除鏽後塗上MEKKING後更加強光澤度。';
						}else {
							echo '它变得非常美丽！我也想尝试其他地方。<br>我使用SABITORI KING替弯型ASSY除锈。 使用后非常的有光泽，除锈后涂上MEKKING后更加强光泽度。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/reviews/review_22.jpg" alt="review_22" width="400" />
					<figcaption>
						<p><?php if(get_current_blog_id()==1){
							echo 'I am using MEKKING under severe conditions such as sea water, but it does not rust at all. I can not feel the sign of rusting at all! We are convinced that MEKKING is the best chemical. There are also people who think it\'s expensive if you look at only the price, but I think that it is "cheap" given rusting and re-plating and chrome plating dullness. I think that it is a great chemical.';
						}else if(get_current_blog_id()==2){
							echo '塗抹MEKKING保護劑後在海水等惡劣條件下，竟然完全沒生鏽。MEKKING鍍膜保護劑真的是一個非常好的產品，以金額來看雖比較屬於高價位，但以品質來說它絕對是經濟又實惠，比起重新電鍍以及鍍鉻鈍化，我覺得這個價位是值得的！';
						}else {
							echo '涂抹MEKKING保护剂后在海水等恶劣条件下，竟然完全没生锈。MEKKING镀膜保护剂真的是一个非常好的产品，以金额来看虽比较属于高价位，但以品质来说它绝对是经济又实惠，比起重新电镀以及镀铬钝化，我觉得这个价位是值得的！';
						} ?></p>
					</figcaption>
				</figure>
			</div>
		</div>
	</main>
<?php get_footer();?>