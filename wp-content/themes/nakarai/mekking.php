<?php /* Template Name: mekking */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="big-title">
			<h5><?php if(get_current_blog_id()==1){
				echo 'Japan\'s best plating protection';
				}else if(get_current_blog_id()==2){
					echo '史上最強的電鍍保護劑';
				}else {
					echo '史上最强的电镀保护剂';
				} ?></h5>
			<h1>MEKKING</h1>
			<p><?php if(get_current_blog_id()==1){
			echo 'MEKKING is a new chemical product not only to fill up the holes while coating but also greatly improve the corrosion resistance.';
			}else if(get_current_blog_id()==2){
				echo '保證讓您的愛車保持光澤！<br>解決電鍍的弱點提高耐腐蝕性！';
			}else {
				echo '保证让您的爱车保持光泽！<br>解决电镀的弱点提高耐腐蚀性！';
			} ?></p>
		</div>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<div class="intro-item mar_top40">
				<div class="product-content pad_top60"><?php if(get_current_blog_id()==1){
				echo 'Chrome plating has the features of beautiful appearance and corrosion resistance; but in fact, there are numerous tiny little holes in micron unit that are invisible to the naked eye. Once water or dust get into these tiny holes, blistering or rust can be occured.';
				}else if(get_current_blog_id()==2){
					echo '鍍鉻層雖如鏡面般光亮，但有些細微的氣孔是肉眼無法查覺。水和灰塵就會從這個小細孔進入到底材後產生氣泡和鐵鏽。<br>MEKKING是一種化學物質，經由塗抹擦拭，讓細顆粒覆蓋氣孔，提高耐腐蝕性。';
				}else {
					echo '镀铬层虽如镜面般光亮，但有些细微的气孔是肉眼无法查觉。水和灰尘就会从这个小细孔进入到底材后产生气泡和铁锈。<br>MEKKING是一种化学物质，经由涂抹擦拭，让细颗粒复盖气孔，提高耐腐蚀性。';
				} ?></div>
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/mekking_bottle_short.png" alt="MEKKING" width="250" />
			</div>
			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'Don\'t you worry about plating parts?';
				}else if(get_current_blog_id()==2){
					echo '您對電鍍零件感到困擾嗎？';
				}else {
					echo '您对电镀零件感到困扰吗？';
				} ?></h2>
			<div class="two-block-area">
				<div class="two-block-item">
					<ul class="check-list">
						<li><?php if(get_current_blog_id()==1){
							echo 'I want to keep the lights on the plating parts alive!';
						}else if(get_current_blog_id()==2){
							echo '持續電鍍的光澤！';
						}else {
							echo '持续电镀的光泽！';
						} ?></li>
						<li><?php if(get_current_blog_id()==1){
							echo 'I want to know how to trim my plating!';
						}else if(get_current_blog_id()==2){
							echo '想了解電鍍的清洗方法！';
						}else {
							echo '想了解电镀的清洗方法！';
						} ?></li>
						<li><?php if(get_current_blog_id()==1){
							echo 'I don\'t know how to use plating...';
						}else if(get_current_blog_id()==2){
							echo '不懂電鍍的使用方法…';
						}else {
							echo '不懂电镀的使用方法…';
						} ?></li>
						<li><?php if(get_current_blog_id()==1){
							echo 'I want to polish my favorite machine';
						}else if(get_current_blog_id()==2){
							echo '想讓機械有光澤';
						}else {
							echo '想让机械有光泽';
						} ?></li>
						<li><?php if(get_current_blog_id()==1){
							echo 'I want my vehicle to be brilliant and get attention by my folks around!';
						}else if(get_current_blog_id()==2){
							echo '想讓愛好使用者見證！';
						}else {
							echo '想让爱好使用者见证！';
						} ?></li>
						<li><?php if(get_current_blog_id()==1){
							echo 'I want to increase my popularity and win the contest.';
						}else if(get_current_blog_id()==2){
							echo '想要增加光澤，受到肯定。';
						}else {
							echo '想要增加光泽，受到肯定。';
						} ?></li>
						<li><?php if(get_current_blog_id()==1){
							echo 'Anyway, I love plating!';
						}else if(get_current_blog_id()==2){
							echo '總而言之最支持電鍍！';
						}else {
							echo '总而言之最支持电镀！';
						} ?></li>
					</ul>
				</div>
				<div class="two-block-item">
					<figure>
						<figcaption class="solve">
							<i class="fa fa-lightbulb-o fa-fw"></i>
							<span><?php if(get_current_blog_id()==1){
							echo 'We can solve it!';
						}else if(get_current_blog_id()==2){
							echo '這是可以解決的！';
						}else {
							echo '这是可以解决的！';
						} ?></span>
						</figcaption>
						<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/solve.jpg" alt="We can solve it!" width="400" />
					</figure>
				</div>
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
							echo 'What is MEKKING?';
						}else if(get_current_blog_id()==2){
							echo 'MEKKING是什麼？';
						}else {
							echo 'MEKKING是什么？';
						} ?></h2>
			<h4 class="bold-title"><?php if(get_current_blog_id()==1){
							echo 'The Japan\'s best plating protection developed by plating experts!';
						}else if(get_current_blog_id()==2){
							echo '專業的電鍍工廠所開發的史上最強電鍍保護劑！';
						}else {
							echo '专业的电镀工厂所开发的史上最强电镀保护剂！';
						} ?></h4>
			<p><?php if(get_current_blog_id()==1){
							echo 'MEKKING, which developed by plating experts, is hard to get rusty even if you leave it outdoors during the rainy season! So much better than other products!';
						}else if(get_current_blog_id()==2){
							echo '電鍍公司所開發的MEKKING即使在梅雨季，放置屋外也不容易生鏽！<br>這是本公司產品不一樣的地方！';
						}else {
							echo '电镀公司所开发的MEKKING即使在梅雨季，放置屋外也不容易生锈！<br>这是本公司产品不一样的地方！';
						} ?></p>
			<div class="center-image">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/<?php if(get_current_blog_id()==1){
					echo 'comparison.png';
				}else if(get_current_blog_id()==2){
					echo 'comparison_zh.png';
				}else {
					echo 'comparison_zh.png';
				} ?>" alt="The Japan's best plating protection" width="600" />
			</div>
			<h4 class="bold-title"><?php if(get_current_blog_id()==1){
					echo 'Working hours got shortened too!';
				}else if(get_current_blog_id()==2){
					echo '縮短作業時間！';
				}else {
					echo '缩短作业时间！';
				} ?></h4>
			<div class="step-area blur">
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/step1.png" alt="step1" />
					<figcaption><?php if(get_current_blog_id()==1){
					echo '1. Wipe out the dirt on the plating.';
				}else if(get_current_blog_id()==2){
					echo '(1) 清除附著在電鍍上污垢';
				}else {
					echo '(1) 清除附着在电镀上污垢';
				} ?></figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/step2.png" alt="step2" />
					<figcaption><?php if(get_current_blog_id()==1){
					echo '2. Once or Twice, apply MEKKING on the "Magic Wipe" then spread on your plating<br>※ It\'s easy to get lust, so please spread out well.';
				}else if(get_current_blog_id()==2){
					echo '(2) 請滴上1或2滴的MEKKING，擦拭均勻。<br>※請務必擦拭均勻，避免造成彩虹紋';
				}else {
					echo '(2) 请滴上1或2滴的MEKKING，擦拭均匀。<br>※请务必擦拭均匀，避免造成彩虹纹';
				} ?></figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/step3.png" alt="step3" />
					<figcaption><?php if(get_current_blog_id()==1){
					echo '3. Since it begins to harden in 5-10 minutes, check for there isn\'t lust. Then leave it for 24 hours to completely cure it!';
				}else if(get_current_blog_id()==2){
					echo '(3) 大約5~10分鍾會產生硬化，確認是否造成彩虹紋。若未造成彩虹紋，需靜候一天使其完全硬化(24小時)';
				}else {
					echo '(3) 大约5~10分钟会产生硬化，确认是否造成彩虹纹。若未造成彩虹纹，需静候一天使其完全硬化(24小时)';
				} ?></figcaption>
				</figure>
			</div>
			<h4 class="bold-title"><?php if(get_current_blog_id()==1){
					echo 'Corrosion resistance would dramatically improve.';
				}else if(get_current_blog_id()==2){
					echo '顯著提高的耐腐蝕性！';
				}else {
					echo '显着提高的耐腐蚀性！';
				} ?></h4>
			<p><?php if(get_current_blog_id()==1){
					echo 'There are numerous holes invisible to our eyes but exist on the surface of chrome plating. Once water or dust get into such holes, plating starts getting rusted. ※ Although chrome plating itself is extremely corrosion resistant, rust occurs from the small holes. MEKKING is designed to fill up these holes therefore it will give dramatic improvements of the corrosion resistance.';
				}else if(get_current_blog_id()==2){
					echo '看起來很光滑的錶面下，有很多肉眼看不到的細孔。<br>經由填補這個細孔，加強耐腐蝕的效果。<br>※儘管電鍍本身具有極強的耐腐蝕性，但小孔會導致鏽蝕。<br>MEKKING旨在填補這些孔，因此它將顯著改善耐腐蝕性。';
				}else {
					echo '看起来很光滑的表面下，有很多肉眼看不到的细孔。<br>经由填补这个细孔，加强耐腐蚀的效果。<br>※尽管电镀本身具有极强的耐腐蚀性，但小孔会导致锈蚀。<br>MEKKING旨在填补这些孔，因此它将显着改善耐腐蚀性。';
				} ?></p>
			<div class="center-image">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/<?php if(get_current_blog_id()==1){
					echo 'mekking_system.png';
				}else if(get_current_blog_id()==2){
					echo 'mekking_system_zh.png';
				}else {
					echo 'mekking_system_zh.png';
				} ?>" alt="mekking_system" width="600" />
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'When you use MEKKING & SABITORI KING, the chrome parts will be looking like this';
				}else if(get_current_blog_id()==2){
					echo '使用電鍍保護劑 & 除鏽劑後，會有這樣的成果。';
				}else {
					echo '使用电镀保护剂 & 除锈剂后，会有这样的成果。';
				} ?></h2>
			<div class="step-area large">
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/use1.jpg" alt="use1" width="500" />
					<figcaption>
						<strong><?php if(get_current_blog_id()==1){
							echo 'Chromium plating will be easier to get cleaned!<br>The permenant shiny and glossy will be in your hand!';
						}else if(get_current_blog_id()==2){
							echo '簡化電鍍的清潔方式<br>特續保持光澤感！';
						}else {
							echo '简化电镀的清洁方式<br>特续保持光泽感！';
						} ?></strong>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/use2.jpg" alt="use2" width="500" />
					<figcaption>
						<strong><?php if(get_current_blog_id()==1){
							echo 'More than 10 coats on decorated tracks is absolutely possible!';
						}else if(get_current_blog_id()==2){
							echo '一瓶MEKKING，能夠保養10台電子花車';
						}else {
							echo '一瓶MEKKING，能够保养10台电子花车';
						} ?></strong>
						<p><?php if(get_current_blog_id()==1){
							echo 'Because it is enough with 10 cm × 10 cm in 1 to 2 drops, you can use one bottle of MEKKING with 30 motorcycles.';
						}else if(get_current_blog_id()==2){
							echo 'MEKKING一次只需使用1〜2滴，即可用在10㎝×10㎝大小的布上。<br>一瓶約可給30台摩托車用。<br>即便是電子花車，一瓶也可以給10台卡車使用。';
						}else {
							echo 'MEKKING一次只需使用1〜2滴，即可用在10㎝×10㎝大小的布上。<br>一瓶约可给30台摩托车用。<br>即便是电子花车，一瓶也可以给10台卡车使用。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/use3.jpg" alt="use3" width="500" />
					<figcaption>
						<strong><?php if(get_current_blog_id()==1){
							echo 'MEKKING stays strong even with sea water.';
						}else if(get_current_blog_id()==2){
							echo 'MEKKING也不怕海水';
						}else {
							echo 'MEKKING也不怕海水';
						} ?></strong>
						<p><?php if(get_current_blog_id()==1){
							echo 'I applied MEKKING on my jet ski part and it doesn\'t get rusty by coating it in spite of the harsh conditions of sea water. It is more recommended to those who live in seaside area.';
						}else if(get_current_blog_id()==2){
							echo '水上摩托車塗上了MEKKING之後，也不會因為海水的原因導致生鏽，推薦給居住在海邊附近的居民使用。';
						}else {
							echo '水上摩托车涂上了MEKKING之后，也不会因为海水的原因导致生锈，推荐给居住在海边附近的居民使用。';
						} ?></p>
					</figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/use4.jpg" alt="use4" width="500" />
					<figcaption>
						<strong><?php if(get_current_blog_id()==1){
						echo 'Even great for European car plating malls!';
						}else if(get_current_blog_id()==2){
							echo '非常適合歐洲品牌汽車的車門飾條（防蝕鋁）！';
						}else {
							echo '非常适合欧洲品牌汽车的车门饰条（防蚀铝）！';
						} ?></strong>
						<p><?php if(get_current_blog_id()==1){
						echo 'MEKKING is also great for European car plating malls! In fact, European car plating malls are often made of alumite, not chrome plating, and are easy to corrode.';
						}else if(get_current_blog_id()==2){
							echo '對於歐洲品牌汽車的車門飾條（防蝕鋁）效果非常大！實際上歐洲品牌汽車的車門飾條是沒有電鍍的，許多氧化鋁容易腐蝕。';
						}else {
							echo '对于欧洲品牌汽车的车门饰条（防蚀铝）效果非常大！实际上欧洲品牌汽车的车门饰条是没有电镀的，许多氧化铝容易腐蚀。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
						echo 'European cars can keep their shine by applying MEKKING among the brand new cars!';
						}else if(get_current_blog_id()==2){
							echo '建議在新車的狀態下就定期的使用MEKKING維持光澤度。';
						}else {
							echo '建议在新车的状态下就定期的使用MEKKING维持光泽度。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
						echo 'Simultaneously with the purchase of a new car, MEKKING\'s regular coating will solve the problem of corrosion peculiar to European cars. I would definitely recommend MEKKING for a mall that has already been corroded and has been polished well after removing corrosion. It is very effective in preventing corrosion.';
						}else if(get_current_blog_id()==2){
							echo '在購買新車的同時，可以解決歐洲汽車特有的周期性塗層腐蝕問題。已經腐蝕的部份也可完全去除。';
						}else {
							echo '在购买新车的同时，可以解决欧洲汽车特有的周期性涂层腐蚀问题。已经腐蚀的部份也可完全去除。';
						} ?></p>
						<p><?php if(get_current_blog_id()==1){
						echo '(※ The corrosion of the alumite is not so powerful with SABITORI KING, so please remove the corrosion with an aluminum compound, etc., and apply the MEKING coating in a clean condition.)';
						}else if(get_current_blog_id()==2){
							echo '(由於單除鏽劑對防蝕鋁的腐蝕效果不強，我們需要用鋁化合物等去除腐蝕，請清洗並塗上MEKKING)';
						}else {
							echo '(由于单除锈剂对防蚀铝的腐蚀效果不强，我们需要用铝化合物等去除腐蚀，请清洗并涂上MEKKING)';
						} ?></p>
					</figcaption>
				</figure>
			</div>
			
			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'It has been picked from many professional magazines.';
				}else if(get_current_blog_id()==2){
					echo '刊登於許多專業雜誌中';
				}else {
					echo '刊登于许多专业杂志中';
				} ?></h2>
			<div class="center-image">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/magazine1.jpg" alt="magazine1" width="600" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/magazine2.jpg" alt="magazine2" width="600" />
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'A huge popularity among plating lovers';
				}else if(get_current_blog_id()==2){
					echo '在電鍍愛好者中非常受歡迎';
				}else {
					echo '在电镀爱好者中非常受欢迎';
				} ?></h2>
			<p><?php if(get_current_blog_id()==1){
					echo 'Check this out! MEKKING  & SABITORI KING has been using by many Harley lovers. It is sold in two days on the most big event of Harley Davidson called BLUE SKY HEAVEN.';
				}else if(get_current_blog_id()==2){
					echo '本公司產品被大多數的哈雷騎士所喜好<br>在Harley Davidson短短兩天的展場中，售出147瓶！';
				}else {
					echo '本公司产品被大多数的哈雷骑士所喜好<br>在Harley Davidson短短两天的展场中，售出147瓶！';
				} ?></p>
			<div class="center-image">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/harley_event.jpg" alt="harley_event" width="600" />
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'It is ranked as #1 of chemical sector on Japanese EC website.';
				}else if(get_current_blog_id()==2){
					echo '在日本電商網站獲得化學類銷售第一名';
				}else {
					echo '在日本电商网站获得化学类销售第一名';
				} ?></h2>
			<div class="center-image">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/ranked.jpg" alt="ranked" width="600" />
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'From the one of the well-known Japanese actor Mr. Koichi Iwaki, we received a praised message for its luster!';
				}else if(get_current_blog_id()==2){
					echo '日本藝人「岩城滉一」是MEKKING愛用者！';
				}else {
					echo '日本艺人「岩城滉一」是MEKKING爱用者！';
				} ?></h2>
			<div class="center-image">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/actor.png" alt="actor" width="600" />
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'Message from the developer';
				}else if(get_current_blog_id()==2){
					echo '開發人員的想法';
				}else {
					echo '开发人员的想法';
				} ?></h2>
			<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/developer.jpg" alt="developer" class="right-image" width="200" />
			<article>
				<p><?php if(get_current_blog_id()==1){
					echo 'Recently, there are negative images that "plating is easy to be rusty, peeled off, or difficult to handle"<br>Such images are brought from low quality due to the reduction of manufacturing cost in recent years, but we can not do anything about such currents. The original "glow of plating" is superb.<br>I couldn\'t stand with hearing the bad reputation of plating because of those low quality plating. Therefore, I developed MEKKING, a magic protective agent for plating which keeps the shine and has good corrosion-resistance.';
				}else if(get_current_blog_id()==2){
					echo '最近「電鍍」給人易生鏽，剝落，難處理的負面形象。<br>但這是近年來由於低成本製造，導致「電鍍品質」大幅降低，原本電鍍是一個非常出色的產品。<br>由於電鍍品質不良，無法發揮功能，所以我們開發了耐腐蝕性的化學保護劑MEKKING。';
				}else {
					echo '最近「电镀」给人易生锈，剥落，难处理的负面形象。<br>但这是近年来由于低成本制造，导致「电镀品质」大幅降低，原本电镀是一个非常出色的产品。<br>由于电镀品质不良，无法发挥功能，所以我们开发了耐腐蚀性的化学保护剂MEKKING。';
				} ?></p>
				<strong><?php if(get_current_blog_id()==1){
					echo 'Attention of use';
				}else if(get_current_blog_id()==2){
					echo '使用時的注意事項';
				}else {
					echo '使用时的注意事项';
				} ?></strong>
				<ul type="square" class="pad_lt20">
					<li><?php if(get_current_blog_id()==1){
						echo 'I think it\'s best to protect plating, not wipe it. There are many products with abrasive materials such as wax, when you keep cleaning with such products, the more chrome plating will come off.';
					}else if(get_current_blog_id()==2){
						echo 'MEKKING是保護而不是拋光的最佳選擇。MEKKGIN含蠟和其他磨料，拋光時可能會導致電鍍層剝落。';
					}else {
						echo 'MEKKING是保护而不是抛光的最佳选择。MEKKGIN含蜡和其他磨料，抛光时可能会导致电镀层剥落。';
					} ?></li>
					<li><?php if(get_current_blog_id()==1){
						echo 'After the MEKKING application, you no longer need to apply wax. The reason for this is that wax is the role of protecting the metal coating by oxidizing itself before metal is oxidized with oil as the main ingredient, but it also causes rust to be caused by the corrosion of the oil. MEKKING is a glass coating, so it is very hard to oxidize compared to oil.';
					}else if(get_current_blog_id()==2){
						echo '使用MEKKING後，不需要上蠟。因為蠟在金屬被油汙氧化之前，氧化自身以保護金屬膜，同時也會受到油污影響而腐蝕<br>因為MEKKING是玻璃膜，所以與油相比下不易氧化。';
					}else {
						echo '使用MEKKING后，不需要上蜡。因为蜡在金属被油污氧化之前，氧化自身以保护金属膜，同时也会受到油污影响而腐蚀<br>因为MEKKING是玻璃膜，所以与油相比下不易氧化。';
					} ?></li>
					<li><?php if(get_current_blog_id()==1){
						echo 'Mekking is also very effective for chrome-plated plastic parts. (Because the plating is thin, it is good for prevention of peeling.)';
					}else if(get_current_blog_id()==2){
						echo 'MEKKING也對電鍍塑膠零件很有效。因為電鍍層很薄，MEKKING可以防止鍍層剝落。';
					}else {
						echo 'MEKKING也对电镀塑胶零件很有效。因为电镀层很薄，MEKKING可以防止镀层剥落。';
					} ?></li>
					<li><?php if(get_current_blog_id()==1){
						echo 'SABITORI KING  is an excellent product that removes rust without affecting chrome plating. The SABITORI KING also has an extra-large half-size magic wipe that removes dirt from the plating in order not to damage it.';
					}else if(get_current_blog_id()==2){
						echo '若零件已經生鏽，建議使用SABITORI KING。<br>它不會照成鍍層的剝離，並具有優良的防鏽性能。 同時有效去除污垢，避免鏽蝕傷害。';
					}else {
						echo '若零件已经生锈，建议使用SABITORI KING。<br>它不会照成镀层的剥离，并具有优良的防锈性能。 同时有效去除污垢，避免锈蚀伤害。';
					} ?></li>
					<li><?php if(get_current_blog_id()==1){
						echo 'Please use the Japan\'s best "MEKKKING" plating protective agent, and the "SABITORI KING" which is gentle to plating and strict to rust.';
					}else if(get_current_blog_id()==2){
						echo '請多多支持史上最強的MEKKING保護鍍膜品質！SABITORI KING嚴格的去除鐵鏽！';
					}else {
						echo '请多多支持史上最强的MEKKING保护镀膜品质！SABITORI KING严格的去除铁锈！';
					} ?></li>
				</ul>
			</article>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'Characteristics of chrome plating';
				}else if(get_current_blog_id()==2){
					echo '電鍍的特徵';
				}else {
					echo '电镀的特征';
				} ?></h2>
			<ul class="check-list">
				<li><?php if(get_current_blog_id()==1){
					echo 'Beautiful looking!';
				}else if(get_current_blog_id()==2){
					echo '外觀很漂亮！';
				}else {
					echo '外观很漂亮！';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'Protects against the color change in the atmosphere!';
				}else if(get_current_blog_id()==2){
					echo '在空氣中不易變色';
				}else {
					echo '在空气中不易变色';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'Great corrosion resistance';
				}else if(get_current_blog_id()==2){
					echo '耐腐蝕性良好';
				}else {
					echo '耐腐蚀性良好';
				} ?></li>
				<p><?php if(get_current_blog_id()==1){
					echo 'It is often used in the outer parts of motorcycles, cars and trucks, but its greatest weakness is rust.<br>That is...<br>There are countless invisible holes, where water and dust enter, and the underlying plating rusts.';
				}else if(get_current_blog_id()==2){
					echo '電鍍常用於摩托車、汽車，卡車零件的外裝，缺點是容易生鏽。<br>這是因為水和灰塵會從無數的細孔進入，導致電鍍底層生鏽。';
				}else {
					echo '电镀常用于摩托车、汽车，卡车零件的外装，缺点是容易生锈。<br>这是因为水和灰尘会从无数的细孔进入，导致电镀底层生锈。';
				} ?></p>
				<p><?php if(get_current_blog_id()==1){
					echo '※ Chromium plating itself is so difficult to corrode that it rusts inside the hole before rust on the chrome!';
				}else if(get_current_blog_id()==2){
					echo '※ 電鍍層本身很難被鏽蝕，所以在電鍍層被破壞之前它會從細孔內部生鏽！';
				}else {
					echo '※ 电镀层本身很难被锈蚀，所以在电镀层被破坏之前它会从细孔内部生锈！';
				} ?></p>
			</ul>
			<div class="four-stage">
				<figure>
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/stage1.png" alt="stage1" />
					<p><?php if(get_current_blog_id()==1){
						echo 'The initial stage<br>The occurance of water spots';
					}else if(get_current_blog_id()==2){
						echo '(1) 初期階段<br>產生水斑';
					}else {
						echo '(1) 初期阶段<br>产生水斑';
					} ?></p>
				</figure>
				<figure>
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/stage2.png" alt="stage2" />
					<p><?php if(get_current_blog_id()==1){
						echo 'The middle stage<br>The occurance of spotty rusts';
					}else if(get_current_blog_id()==2){
						echo '(2) 中期階段<br>產生鏽斑';
					}else {
						echo '(2) 中期阶段<br>产生锈斑';
					} ?></p>
				</figure>
				<figure>
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/stage3.png" alt="stage3" />
					<p><?php if(get_current_blog_id()==1){
						echo 'The plating, which increases rust, may swell or peel.';
					}else if(get_current_blog_id()==2){
						echo '(3) 末期階段<br>隨著時間增長，鏽斑範圍擴大，容易剝落。';
					}else {
						echo '(3) 末期阶段<br>随着时间增长，锈斑范围扩大，容易剥落。';
					} ?></p>
				</figure>
				<figure>
					<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/stage4.png" alt="stage4" />
					<p><?php if(get_current_blog_id()==1){
						echo 'The chrome plating on the surface will peel off, and in the end, it will be too late if you don\'t take care of it at the beginning or at least the middle stage of the process, in a form that is deplorable.<br>At the end of life, it is not possible to regenerate unless it is re-plated or the parts are purchased again.';
					}else if(get_current_blog_id()==2){
						echo '(4) 結束<br>錶面電鍍層脫落的初期到中期階段時，就需要採取措施，放到後期則會導致電鍍膜無法修愎。';
					}else {
						echo '(4) 结束<br>表面电镀层脱落的初期到中期阶段时，就需要采取措施，放到后期则会导致电镀膜无法修愎。';
					} ?></p>
				</figure>
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'As for chrome plating maintenance, is wax useless for it?';
				}else if(get_current_blog_id()==2){
					echo '為了保護電鍍，不能打蠟？';
				}else {
					echo '为了保护电镀，不能打蜡？';
				} ?></h2>
			<p><?php if(get_current_blog_id()==1){
					echo 'I get asked such questions a lot. It has advantages and disadvantages.The advantage is that the principal ingredient is oil, so the price is low.<br>The disadvantage is that since oil is the main ingredient, it protects the metal coating by oxidizing the oil (wax) before the metal is oxidized, but it also causes rust by the corrosion of the oil.';
				}else if(get_current_blog_id()==2){
					echo '這是常被提起的問題。分別有優點和缺點。優點是臘的主要成份是石油，成本較便宜。<br>缺點是油是主要成分，所以蠟在金屬被氧化之前，會先氧化自身並保護金屬膜，但是油的腐蝕污垢也會引起生鏽。';
				}else {
					echo '这是常被提起的问题。分别有优点和缺点。优点是腊的主要成份是石油，成本较便宜。<br>缺点是油是主要成分，所以蜡在金属被氧化之前，会先氧化自身并保护金属膜，但是油的腐蚀污垢也会引起生锈。';
				} ?></p>
			<p><?php if(get_current_blog_id()==1){
					echo 'For example,<br>It is the same as women\'s makeup; if you don\'t apply it frequently, it is similar to making your skin rough.<br>The biggest disadvantage is that if you polish the wax with a lot of abrasive material, the more you polish it, the more chrome plating you may lose.';
				}else if(get_current_blog_id()==2){
					echo '做個比方來說，這就像是女性使用的化妝品，如果不常使用，就會引起皮膚問題。<br>最大的缺點是蠟中含有拋光劑，如果你反覆研磨，拋光會造成電鍍層被刮傷。';
				}else {
					echo '做个比方来说，这就像是女性使用的化妆品，如果不常使用，就会引起皮肤问题。<br>最大的缺点是蜡中含有抛光剂，如果你反复研磨，抛光会造成电镀层被刮伤。';
				} ?></p>
			<p><?php if(get_current_blog_id()==1){
					echo '※ The gold colored part looks smoldering because the chrome plating is taken off and the underlying nickel plating is produced.<br>※ No matter how much you polish a single metal, for example, stainless steel, the base is stainless, so there is no problem, but you can see clearly in this image why chrome plating should not be polished.';
				}else if(get_current_blog_id()==2){
					echo '※ 黃金色部份的鍍鉻脫落，底部鍍鎳出現，電鍍將會無光澤<br>※ 單純的金屬（例如不銹鋼）若被拋光，基材也是不銹鋼，所以沒有問題，但是電鍍不應該拋光的原因請看下麵圖片解說。';
				}else {
					echo '※ 黄金色部份的镀铬脱落，底部镀镍出现，电镀将会无光泽<br>※ 单纯的金属（例如不锈钢）若被抛光，基材也是不锈钢，所以没有问题，但是电镀不应该抛光的原因请看下面图片解说。';
				} ?></p>
			<div class="center-image">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/maintenance.jpg" alt="maintenance" width="600" />
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'The chrome plating film is extremely thin!';
				}else if(get_current_blog_id()==2){
					echo '鍍鉻層非常的薄';
				}else {
					echo '镀铬层非常的薄';
				} ?></h2>
			<p><?php if(get_current_blog_id()==1){
					echo 'The thickness of the chrome plating used for decoration is 0.002 ~ 0.1 microns.';
				}else if(get_current_blog_id()==2){
					echo '鍍鉻層的厚度約為0.002〜0.1微米。';
				}else {
					echo '镀铬层的厚度约为0.002〜0.1微米。';
				} ?></p>
			<p><?php if(get_current_blog_id()==1){
					echo '※ 1 micron=1/1000 mm';
				}else if(get_current_blog_id()==2){
					echo '※ 1微米= 1/1000毫米';
				}else {
					echo '※ 1微米= 1/1000毫米';
				} ?></p>
			<p><?php if(get_current_blog_id()==1){
					echo 'You can see that the chrome plating film is very thin.<br>The chrome plating is base plating (copper plating + nickel plating) and is thick.';
				}else if(get_current_blog_id()==2){
					echo '如果您選擇不含研磨劑的蠟，則需要經常重新塗抹。(就像女性每天要保養一樣)<br>由於過於拋光，請註意底層的鍍鎳！為什麼拋光鍍鉻後，容易出現小刮痕！<br>鍍鉻膜鏡面光滑度高，所以容易看出刮痕。';
				}else {
					echo '如果您选择不含研磨剂的蜡，则需要经常重新涂抹。(就像女性每天要保养一样)<br>由于过于抛光，请注意底层的镀镍！为什么抛光镀铬后，容易出现小刮痕！<br>镀铬膜镜面光滑度高，所以容易看出刮痕。';
				} ?></p>
			<div class="center-image">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/mekking/<?php if(get_current_blog_id()==1){
					echo 'thin.png';
				}else if(get_current_blog_id()==2){
					echo 'thin_zh.png';
				}else {
					echo 'thin_zh.png';
				} ?>" alt="thin" width="500" />
			</div>
			
			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'Bad use case';
				}else if(get_current_blog_id()==2){
					echo '錯誤的使用範例';
				}else {
					echo '错误的使用范例';
				} ?></h2>
			<p><?php if(get_current_blog_id()==1){
					echo 'Waxing with towels, etc., and ruffling ... full of flaws<br>This is the worst thing to do! Be careful when you polish with cloth, towel, etc!<br>※ Because it has the property of spreading dirt, it is easy to pull and damage if there is dirt. Because the chrome plating has a high mirror surface, it gets scratched and stands out due to small things.<br>※ It will be very difficult to repair it once it has been damaged.';
				}else if(get_current_blog_id()==2){
					echo '用毛巾沾取MEKKING塗抹時，會產生刮痕。請避免使用布或毛巾塗抹！<br>※ 因為污垢會累積，所以有灰塵和堆積物時容易引起刮傷。由於鍍鉻的鏡面反射率高，所以只要受到一點刮傷，就非常明顯。<br>※ 一旦有刮傷，就難以修復';
				}else {
					echo '用毛巾沾取MEKKING涂抹时，会产生刮痕。请避免使用布或毛巾涂抹！<br>※ 因为污垢会累积，所以有灰尘和堆积物时容易引起刮伤。由于镀铬的镜面反射率高，所以只要受到一点刮伤，就非常明显。<br>※ 一旦有刮伤，就难以修复';
				} ?></p>
			<p><?php if(get_current_blog_id()==1){
					echo 'The correct answer is not to polish chrome plating but to rub it gently.';
				}else if(get_current_blog_id()==2){
					echo '正確的作法不是拋光鍍鉻而是輕輕擦拭。';
				}else {
					echo '正确的作法不是抛光镀铬而是轻轻擦拭。';
				} ?></p>
			<p><?php if(get_current_blog_id()==1){
					echo 'So what would be the best method for the chrome plating maintenance?<br>It is best to protect chrome plating instead of polishing it.';
				}else if(get_current_blog_id()==2){
					echo '保養鍍鉻最好的做法<br>不是拋光它，而是保護它';
				}else {
					echo '保养镀铬最好的做法<br>不是抛光它，而是保护它';
				} ?></p>
			<p><?php if(get_current_blog_id()==1){
					echo 'The weak point of chrome plating? → Holes.<br>Corrosion resistance of chrome plating? → Good / Satisfactory<br>What are the remediation measures? → If you cover up this hole, it will quickly increase corrosion resistance.';
				}else if(get_current_blog_id()==2){
					echo '鍍鉻的缺點？→有細孔<br>鍍鉻的耐腐蝕性？→良好<br>改善方法→如果堵住這個細孔，耐腐蝕性能會立即上升';
				}else {
					echo '镀铬的缺点？→有细孔<br>镀铬的耐腐蚀性？→良好<br>改善方法→如果堵住这个细孔，耐腐蚀性能会立即上升';
				} ?></p>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
					echo 'Stainless steel doesn\'t rust easily, does it?';
				}else if(get_current_blog_id()==2){
					echo '不鏽鋼能防止生鏽嗎？';
				}else {
					echo '不锈钢能防止生锈吗？';
				} ?></h2>
			<p><?php if(get_current_blog_id()==1){
					echo 'Stainless steel is made of an alloy of nickel and chrome metals.<br>In other words, chrome plating, if it were to fill even this hole, would yield a corrosion resistance comparable to that of sterility. AND! MEKKING is the one which would block the hole!! Usually, the gloss gets damaged when something is coated on the plated surface, but MEKKING is done by applying a chrome brightener while improving the specularity of the plated surface. That\'s why the chrome\'s distinctive blue light increases after application when you use MEKKING!!';
				}else if(get_current_blog_id()==2){
					echo '不銹鋼由鎳+鉻金屬合金製成。換句話說，如果鍍鉻也堵住這個孔，則可以獲得與不銹鋼相當的耐腐蝕性。<br>而可以有此效果的就是MEKKING。<br>通常，當在電鍍錶面上塗抹某些東西時，光澤常常受到損害，但是電鍍是通過施加鉻的光亮劑來完成的，同時改善了電鍍的鏡面光澤，所以在使用之後，會增加鉻獨特的光澤。';
				}else {
					echo '不锈钢由镍+铬金属合金制成。换句话说，如果镀铬也堵住这个孔，则可以获得与不锈钢相当的耐腐蚀性。<br>而可以有此效果的就是MEKKING。<br>通常，当在电镀表面上涂抹某些东西时，光泽常常受到损害，但是电镀是通过施加铬的光亮剂来完成的，同时改善了电镀的镜面光泽，所以在使用之后，会增加铬独特的光泽。';
				} ?></p>
			<p><?php if(get_current_blog_id()==1){
					echo 'You might want to remove rust before coat it with plating. 『SABITORI KING』is for that moment! It is an excellent product that removes rust without removing plating without affecting chrome plating.<br>(The rust that cannot be obtained by the rust-triggering can only be reproduced by the plating.)';
				}else if(get_current_blog_id()==2){
					echo '使用電鍍之前，您首先要先使用SABITORI KING除鏽！它可以在不影響電鍍層的情況下去除鏽蝕。(如果使用SABITORI KING無法修復，亦代表鏽蝕太深，只能透過重新電鍍解決)';
				}else {
					echo '使用电镀之前，您首先要先使用SABITORI KING除锈！它可以在不影响电镀层的情况下去除锈蚀。(如果使用SABITORI KING无法修复，亦代表锈蚀太深，只能透过重新电镀解决)';
				} ?></p>

		</div>
	</main>
<?php get_footer(); ?>