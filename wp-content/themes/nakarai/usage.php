<?php /* Template Name: usage */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="big-title narrow">
			<h1><?php if(get_current_blog_id()==1){
					echo 'How to use ​/ ​Q&A';
				}else if(get_current_blog_id()==2){
					echo '使用方法 ​/ ​Q&A';
				}else {
					echo '使用方法 ​/ ​Q&A';
				} ?></h1>
		</div>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<h2 class="main-title mar_top40"><?php if(get_current_blog_id()==1){
					echo 'How to use MEKKING';
				}else if(get_current_blog_id()==2){
					echo '使用方法';
				}else {
					echo '使用方法';
				} ?></h2>
			<p class="red-text"><?php if(get_current_blog_id()==1){
					echo '※ Please don\'t apply the excessive volume because it becomes lumpy easily';
				}else if(get_current_blog_id()==2){
					echo '※ 請勿塗抹太多！會造成彩虹紋';
				}else {
					echo '※ 请勿涂抹太多！会造成彩虹纹';
				} ?></p>
			<div class="step-area">
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/usage/step1.png" width="200" alt="step1">
					<figcaption><?php if(get_current_blog_id()==1){
						echo '1. Carefully wipe off dust or grime on the plating.';
					}else if(get_current_blog_id()==2){
						echo '1. 擦掉附著在鍍層上的污垢';
					}else {
						echo '1. 擦掉附着在镀层上的污垢';
					} ?></figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/usage/step2.png" width="200" alt="step2">
					<figcaption><?php if(get_current_blog_id()==1){
						echo '2. Apply 1 to 2 drops of MEEKING on the "magic wipe" and spread it out evenly.';
					}else if(get_current_blog_id()==2){
						echo '2. 在專用擦拭布上滴上1～2滴的MEKKING，並均勻塗抹';
					}else {
						echo '2. 在专用擦拭布上滴上1～2滴的MEKKING，并均匀涂抹';
					} ?></figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/usage/step3.png" width="200" alt="step3">
					<figcaption><?php if(get_current_blog_id()==1){
						echo '3. As the surface of mirror gets higher it is easy to form lumps. The product erases and prevents such damages.';
					}else if(get_current_blog_id()==2){
						echo '3. 表面越光亮越容易造成彩虹紋現象。請反覆擦拭，直到彩虹紋不見';
					}else {
						echo '3. 表面越光亮越容易造成彩虹纹现象。请反复擦拭，直到彩虹纹不见';
					} ?></figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/usage/step4.png" width="200" alt="step4">
					<figcaption><?php if(get_current_blog_id()==1){
						echo '4. Rub the lumps off by using the "magic wipe".';
					}else if(get_current_blog_id()==2){
						echo '4. 使用專用擦拭布，避免因擦拭不均勻造成彩虹紋';
					}else {
						echo '4. 使用专用擦拭布，避免因擦拭不均匀造成彩虹纹';
					} ?></figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/usage/step5.png" width="200" alt="step5">
					<figcaption><?php if(get_current_blog_id()==1){
						echo '5. It gets hardened in 5 to 10 minutes, check again if lumps exist before complete hardening.';
					}else if(get_current_blog_id()==2){
						echo '5. 經5～10分鐘硬化後，再次確認是否還有彩虹紋';
					}else {
						echo '5. 经5～10分钟硬化后，再次确认是否还有彩虹纹';
					} ?></figcaption>
				</figure>
				<figure class="step-list">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/usage/step6.png" width="200" alt="step6">
					<figcaption><?php if(get_current_blog_id()==1){
						echo '6. Before complete hardening (up to 24 hours), do not spread water on it.';
					}else if(get_current_blog_id()==2){
						echo '6. 等待24小時後確認完全固化，期間請勿接觸到水';
					}else {
						echo '6. 等待24小时后确认完全固化，期间请勿接触到水';
					} ?></figcaption>
				</figure>
			</div>
			<div class="video-area">
				<iframe src="https://www.youtube.com/embed/UOlsTrxHa9o" frameborder="0" height="500" width="100%" height="100%"></iframe>
			</div>

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
				echo 'Attention of use';
			}else if(get_current_blog_id()==2){
				echo '注意事項';
			}else {
				echo '注意事项';
			} ?></h2>
			<p><?php if(get_current_blog_id()==1){
				echo 'MEKKING is a type of volatile solvent, inhalation of volatilized solvent which may be toxic to human body. Please carefully following instructions listed below.';
			}else if(get_current_blog_id()==2){
				echo '吸入溶劑揮發出的氣體可能會導致中毒，因此操作時請遵守及注意以下事項。<br>高溫會導致MEKKING揮發，請勿置放於溫度高於30℃的車內或車庫中，請將MEKKING存放於室內陰涼處。<br>請注意不要忘記關上瓶蓋。固化後無法使用';
			}else {
				echo '吸入溶剂挥发出的气体可能会导致中毒，因此操作时请遵守及注意以下事项。<br>高温会导致MEKKING挥发，请勿置放于温度高于30℃的车内或车库中，请将MEKKING存放于室内阴凉处。<br>请注意不要忘记关上瓶盖。固化后无法使用。';
			} ?></p>
			<ol>
				<li><?php if(get_current_blog_id()==1){
					echo 'MEKKING contains flammable substance. Please ensure the working space provides good ventilation while using MEKKING and refrain from igniting flames in nearby areas.';
				}else if(get_current_blog_id()==2){
					echo 'MEKKING是易燃物質。工作時請注意通風，嚴禁煙火。';
				}else {
					echo 'MEKKING是易燃物质。工作时请注意通风，严禁烟火。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'Never use any tool to spray MEKKING.';
				}else if(get_current_blog_id()==2){
					echo '嚴禁使用噴塗方式施作。';
				}else {
					echo '严禁使用喷涂方式施作。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'Please directly apply MEKKING from its original package without diluting with water or mix with any other liquid. Mixing with such substance will cause MEKKING failure to work.';
				}else if(get_current_blog_id()==2){
					echo '請使用原液。如果有水或異物混入，它將無法使用。';
				}else {
					echo '请使用原液。如果有水或异物混入，它将无法使用。';
				} ?></li>
				<li>
					<span><?php if(get_current_blog_id()==1){
						echo 'Uneven coating or whitening may appear in following situations, please do not use MEKKING until each situation is improved';
					}else if(get_current_blog_id()==2){
						echo '在下列情況下可能導致塗層不均或白化，所以請在使用前改進善各項因素。';
					}else {
						echo '在下列情况下可能导致涂层不均或白化，所以请在使用前改进善各项因素。';
					} ?></span>
					<table class="solution-table">
						<tr>
							<th><?php if(get_current_blog_id()==1){
								echo 'Causes relevant to working condition or environment';
							}else if(get_current_blog_id()==2){
								echo '發生原因';
							}else {
								echo '发生原因';
							} ?></th>
							<th><?php if(get_current_blog_id()==1){
								echo 'Recommended solutions';
							}else if(get_current_blog_id()==2){
								echo '改善措施';
							}else {
								echo '改善措施';
							} ?></th>
						</tr>
						<tr>
							<td><?php if(get_current_blog_id()==1){
								echo 'Item to apply MEKKING is not completely dried up.';
							}else if(get_current_blog_id()==2){
								echo '基材不夠乾燥';
							}else {
								echo '基材不够干燥';
							} ?></td>
							<td><?php if(get_current_blog_id()==1){
								echo 'Leave the item long enough to get completely dry before applying MEKKING.';
							}else if(get_current_blog_id()==2){
								echo '請徹底乾燥後使用';
							}else {
								echo '请彻底干燥后使用';
							} ?></td>
						</tr>
						<tr>
							<td><?php if(get_current_blog_id()==1){
								echo 'Humidity is extremely high.';
							}else if(get_current_blog_id()==2){
								echo '環境溼度過高，如梅雨季';
							}else {
								echo '环境溼度过高，如梅雨季';
							} ?></td>
							<td><?php if(get_current_blog_id()==1){
								echo 'Improve ventilation in the working space by using fan or dehumidifier before applying MEKKING.';
							}else if(get_current_blog_id()==2){
								echo '請利用電風扇、除濕機，改善作業環境後再使用';
							}else {
								echo '请利用电风扇、除湿机，改善作业环境后再使用';
							} ?></td>
						</tr>
						<tr>
							<td><?php if(get_current_blog_id()==1){
								echo 'the temperature of the surface of substrate exceeds 100°F. under such a condition as in the boiling sun during summer.';
							}else if(get_current_blog_id()==2){
								echo '基材溫度超過40℃，如夏日烈日下';
							}else {
								echo '基材温度超过40℃，如夏日烈日下';
							} ?></td>
							<td><?php if(get_current_blog_id()==1){
								echo 'Change the time schedule to apply MEKKING until it gets cooler at night so that the temperature becomes appropriate for it\'s usage.';
							}else if(get_current_blog_id()==2){
								echo '請擇日再使用';
							}else {
								echo '请择日再使用';
							} ?></td>
						</tr>
						<tr>
							<td><?php if(get_current_blog_id()==1){
								echo 'The room temperature reaches 40°F or lower.';
							}else if(get_current_blog_id()==2){
								echo '溫度低於5℃時';
							}else {
								echo '温度低于5℃时';
							} ?></td>
							<td><?php if(get_current_blog_id()==1){
								echo 'Heat the room of the working space by using heater before applying MEEKING.';
							}else if(get_current_blog_id()==2){
								echo '請先用暖爐加熱後再使用';
							}else {
								echo '请先用暖炉加热后再使用';
							} ?></td>
						</tr>
					</table>
				</li>
				<li><?php if(get_current_blog_id()==1){
					echo 'The time it takes for the solvent to completely evaporate is subject to the temperature but usually about 3 to 5 days then the reaction fixation ends.';
				}else if(get_current_blog_id()==2){
					echo '當溶劑揮發後，化學反應結束後，固化速度會因溫度的不同有所差異，但在3到5天內會完全硬化。';
				}else {
					echo '当溶剂挥发后，化学反应结束后，固化速度会因温度的不同有所差异，但在3到5天内会完全硬化。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'Do not spread or drip any water on the treated surface within 24 hours.';
				}else if(get_current_blog_id()==2){
					echo '使用後24小時以內，請勿接觸到水。';
				}else {
					echo '使用后24小时以内，请勿接触到水。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'If mouth or eye gets in touch with MEKKING, immediately rinse mouth or eye with sufficient water and seek medical attention.';
				}else if(get_current_blog_id()==2){
					echo '不慎滴入口腔或眼睛時，請立即使用大量清水沖洗後迅速就醫。';
				}else {
					echo '不慎滴入口腔或眼睛时，请立即使用大量清水冲洗后迅速就医。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'If MEKKING was applied to skin or wipe, immediately rinse with water.';
				}else if(get_current_blog_id()==2){
					echo '接觸到皮膚，衣服等時，請立即沖洗。';
				}else {
					echo '接触到皮肤，衣服等时，请立即冲洗。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'Keep MEKKING tightly closed and stored in cool and dark areas out of reach by children. Please refrain from pouring MEKKING into other containers from its original package for storage except for transportation purpose.';
				}else if(get_current_blog_id()==2){
					echo '請保持密封放置陰暗處，勿讓兒童接觸。除了運送外請勿存放在車內及自行分裝產品。';
				}else {
					echo '请保持密封放置阴暗处，勿让儿童接触。除了运送外请勿存放在车内及自行分装产品。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'When applying MEKKING, ensure the working space is equipped with ventilator to provide good ventilation.';
				}else if(get_current_blog_id()==2){
					echo '作業時，應提供良好換氣通風場所。';
				}else {
					echo '作业时，应提供良好换气通风场所。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'In order to prevent skin from exposing to MEKKING, please make sure to use protection, such as gas masks, gloves, goggles, aprons etc.';
				}else if(get_current_blog_id()==2){
					echo '作業時請避免與皮膚接觸，並根據需要佩戴防毒面具，供氣面具，防護眼鏡，防護手套，防護圍裙等。';
				}else {
					echo '作业时请避免与皮肤接触，并根据需要佩戴防毒面具，供气面具，防护眼镜，防护手套，防护围裙等。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'Please thoroughly wash hands after using MEKKING';
				}else if(get_current_blog_id()==2){
					echo '作業完成後，請徹底清洗雙手。';
				}else {
					echo '作业完成后，请彻底清洗双手。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'Please refrain from using MEKKING other than its intended purposes';
				}else if(get_current_blog_id()==2){
					echo '請勿使用於其它的用途上。';
				}else {
					echo '请勿使用于其它的用途上。';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo 'Please always remember to tighten up the black cap after use. Leave it open will lead to hardening and become unusable.';
				}else if(get_current_blog_id()==2){
					echo '請注意不要忘記關上瓶蓋。固化將後無法使用。';
				}else {
					echo '请注意不要忘记关上瓶盖。固化将后无法使用。';
				} ?></li>
			</ol>
			<table class="properties-table">
				<caption><?php if(get_current_blog_id()==1){
					echo 'Properties';
				}else if(get_current_blog_id()==2){
					echo '屬性';
				}else {
					echo '属性';
				} ?></caption>
				<tr>
					<th><?php if(get_current_blog_id()==1){
						echo 'Appearance';
					}else if(get_current_blog_id()==2){
						echo '外觀';
					}else {
						echo '外观';
					} ?></th>
					<td><?php if(get_current_blog_id()==1){
						echo 'Colorless transparent';
					}else if(get_current_blog_id()==2){
						echo '無色透明';
					}else {
						echo '无色透明';
					} ?></td>
				</tr>
				<tr>
					<th><?php if(get_current_blog_id()==1){
						echo 'Component';
					}else if(get_current_blog_id()==2){
						echo '成分';
					}else {
						echo '成分';
					} ?></th>
					<td><?php if(get_current_blog_id()==1){
						echo 'Special silicone';
					}else if(get_current_blog_id()==2){
						echo '特殊有機矽材質';
					}else {
						echo '特殊有机矽材质';
					} ?></td>
				</tr>
				<tr>
					<th><?php if(get_current_blog_id()==1){
						echo 'Solvent';
					}else if(get_current_blog_id()==2){
						echo '溶劑';
					}else {
						echo '溶剂';
					} ?></th>
					<td><?php if(get_current_blog_id()==1){
						echo 'Hazardous level Ⅱ 1st type of petroleum, Class 4';
					}else if(get_current_blog_id()==2){
						echo '第4類 第1石油類 危險等級Ⅱ';
					}else {
						echo '第4类 第1石油类 危险等级Ⅱ';
					} ?></td>
				</tr>
				<tr>
					<th><?php if(get_current_blog_id()==1){
						echo 'Treatment';
					}else if(get_current_blog_id()==2){
						echo '注意';
					}else {
						echo '注意';
					} ?></th>
					<td><?php if(get_current_blog_id()==1){
						echo 'No fires';
					}else if(get_current_blog_id()==2){
						echo '嚴禁煙火';
					}else {
						echo '严禁烟火';
					} ?></td>
				</tr>
				<tr>
					<th><?php if(get_current_blog_id()==1){
						echo 'Storability';
					}else if(get_current_blog_id()==2){
						echo '保存期限';
					}else {
						echo '保存期限';
					} ?></th>
					<td><?php if(get_current_blog_id()==1){
						echo '1 year (if kept closely sealed and stored between 4°F to 86°F)';
					}else if(get_current_blog_id()==2){
						echo '1年（5℃〜30℃的密封條件下）';
					}else {
						echo '1年（5℃〜30℃的密封条件下）';
					} ?></td>
				</tr>
			</table>
			<p><?php if(get_current_blog_id()==1){
				echo 'Formula of content may be changed without notice due to improvement made.';
			}else if(get_current_blog_id()==2){
				echo '日後調整配方時，恕不另行通知';
			}else {
				echo '日后调整配方时，恕不另行通知';
			} ?></p>
			<ul class="nostyle-list pad_lt0">
				<li><?php if(get_current_blog_id()==1){
					echo '※ MEKKING is up to 200℃ resistance after complete hardening. It can be used on the bike muffler, however, please refrain from applying to the area within 15cm from the base of exhaust pipe.';
				}else if(get_current_blog_id()==2){
					echo '※ 在完全固化後可以承受高達200度的溫度，因此可以應用於摩托車的排氣管，但請在排氣管入口處15cm以後使用';
				}else {
					echo '※ 在完全固化后可以承受高达200度的温度，因此可以应用于摩托车的排气管，但请在排气管入口处15cm以后使用';
				} ?></li>
				<li><?php if(get_current_blog_id()==1){
					echo '※ MEKKING can also be used on plated items made from plastic, it will increase the brightness and improve corrosion resistance.';
				}else if(get_current_blog_id()==2){
					echo '※ 電鍍保護劑也可以用於塑膠材料電鍍（樹脂）等部件、亦可使用在除鏽後的部品上（亮度提高，提高耐腐蝕性)';
				}else {
					echo '※ 电镀保护剂也可以用于塑胶材料电镀（树脂）等部件、亦可使用在除锈后的部品上（亮度提高，提高耐腐蚀性)';
				} ?></li>
			</ul>

			<h2 class="main-title">Q&A</h2>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'What is chrome plating?';
					}else if(get_current_blog_id()==2){
						echo '什麼是電鍍？';
					}else {
						echo '什么是电镀？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'It is a kind of plating using chrome metal to form the final coating on the surface; providing corrosion resistance of oxidation and presenting beautiful glossiness.';
				}else if(get_current_blog_id()==2){
					echo '它是一個鍍層，鍍層是鉻金屬。它可以防止氧化生鏽，並且美化產品外觀。';
				}else {
					echo '它是一个镀层，镀层是铬金属。它可以防止氧化生锈，并且美化产品外观。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'What is the difference from wax?';
					}else if(get_current_blog_id()==2){
						echo 'MEKKING跟打蠟有什麼不同';
					}else {
						echo 'MEKKING跟打蜡有什么不同';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'MEKKING is protective agent preventing adherence of oil. On the other hand, the main component of wax is oil; corrosion of oil will adhere to plating and result in rust unless wax is frequently repainted.';
				}else if(get_current_blog_id()==2){
					echo 'MEKKING是防止油黏附的保護劑。另外，蠟的主要成分是油， 除非蠟經常重新塗刷，否則油的腐蝕會附著在電鍍上並導致生鏽。';
				}else {
					echo 'MEKKING是防止油黏附的保护剂。另外，蜡的主要成分是油， 除非蜡经常重新涂刷，否则油的腐蚀会附着在电镀上并导致生锈。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'What is the difference from polymer?';
					}else if(get_current_blog_id()==2){
						echo '與聚合物有什麼不同？';
					}else {
						echo '与聚合物有什么不同？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'The ingredients are different. It is difficult to regard and simplify polymeric because it is widely used on various product (not as a one polymer), but silicon-based polymer is the main ingredient in plating.';
				}else if(get_current_blog_id()==2){
					echo '主要組成部分不同。聚合物是樹脂型，電鍍是矽型。<br>※聚合物是一種排列相同元素的配方。則玻璃塗層是含有多種元素的配方。';
				}else {
					echo '主要组成部分不同。聚合物是树脂型，电镀是矽型。<br>※聚合物是一种排列相同元素的配方。则玻璃涂层是含有多种元素的配方。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
					echo 'What\'s the effect to use MEKKING on plated items processed with wax or polymer?';
				}else if(get_current_blog_id()==2){
					echo 'MEKKING即使在蠟上或鍍有聚合物加工後也能起作用嗎？';
				}else {
					echo 'MEKKING即使在蜡上或镀有聚合物加工后也能起作用吗？';
				} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'Because wax is made with oil that is extremely easy to be oxidized, please make sure to remove wax before use MEKKING.';
				}else if(get_current_blog_id()==2){
					echo '由於蠟是主要成分是油且容易被氧化，所以在塗抹之前除蠟更為有效。<br>由於聚合物的主要成分是與塑料接近，因此與油相比，難以腐蝕，所以我認為使用在電鍍上也沒有問題。 通常聚合物是靠近塑料的薄膜。MEKKING是接近玻璃的塗膜。所以鍍膜比蠟和聚合物具有更好的光澤和耐腐蝕性。';
				}else {
					echo '由于蜡是主要成分是油且容易被氧化，所以在涂抹之前除蜡更为有效。<br>由于聚合物的主要成分是与塑料接近，因此与油相比，难以腐蚀，所以我认为使用在电镀上也没有问题。 通常聚合物是靠近塑料的薄膜。MEKKING是接近玻璃的涂膜。所以镀膜比蜡和聚合物具有更好的光泽和耐腐蚀性。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'Is it possible to remove rust?';
					}else if(get_current_blog_id()==2){
						echo '它可以除鏽嗎？';
					}else {
						echo '它可以除锈吗？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'MEKKING is a product especially developed to maintain the glossy shine of chrome plating. It wouldn\'t be used for the purpose to remove existed rust. To remove rust, please use SABITORI KING instead.';
				}else if(get_current_blog_id()==2){
					echo 'MEKKING是一種維持鍍鉻光輝的化學品。它無法在已生鏽的部品上除鏽。如果你想除鏽，請使用SABITORI KING。';
				}else {
					echo 'MEKKING是一种维持镀铬光辉的化学品。它无法在已生锈的部品上除锈。如果你想除锈，请使用SABITORI KING。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
					echo 'Does it take professional skill to use?';
				}else if(get_current_blog_id()==2){
					echo '任何人是否都可輕鬆使用它嗎？';
				}else {
					echo '任何人是否都可轻松使用它吗？';
				} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'Don\'t worry! Just follow the instructions, it\'s easy to use.';
				}else if(get_current_blog_id()==2){
					echo '可以的。您可以在確認使用方法後輕鬆使用它。';
				}else {
					echo '可以的。您可以在确认使用方法后轻松使用它。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'Does MEKKING contain abrasive?';
					}else if(get_current_blog_id()==2){
						echo 'MEKKING是否含有研磨劑？';
					}else {
						echo 'MEKKING是否含有研磨剂？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'No. The coating of chrome plating is extremely thin which is only 0.002u. Rubbing it with abrasive results in peel-off of chrome plating and exposing the plating underneath.';
				}else if(get_current_blog_id()==2){
					echo '不含研磨劑的。鍍鉻層非常薄，只有0.002〜0.1微米。如果用研磨劑拋光，鍍鉻層會剝落。';
				}else {
					echo '不含研磨剂的。镀铬层非常薄，只有0.002〜0.1微米。如果用研磨剂抛光，镀铬层会剥落。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'Can it be used to products not made with chrome plating?';
					}else if(get_current_blog_id()==2){
						echo '可用於鍍鉻以外的產品嗎？';
					}else {
						echo '可用于镀铬以外的产品吗？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'Yes. It can be used for Aluminum polish and metals.';
				}else if(get_current_blog_id()==2){
					echo '可以的。它可用於鋁拋光和其他金屬。';
				}else {
					echo '可以的。它可用于铝抛光和其他金属。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'Is it okay to apply MEKKING with regular wipe other than the attached "magic wipe"?';
					}else if(get_current_blog_id()==2){
						echo '是否可使用專用擦拭布以外的布料？';
					}else {
						echo '是否可使用专用擦拭布以外的布料？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'It is not recommended to use other regular wipe to apply MEKKING. MEKKING contains alcohol solvent which might cause color of regular wipe or fabric adhering to plating surface.';
				}else if(get_current_blog_id()==2){
					echo '不建議的。 MEKKING含有酒精溶劑，當與其他布一起使用時，普通擦布顏色會附著在鍍層表面。';
				}else {
					echo '不建议的。 MEKKING含有酒精溶剂，当与其他布一起使用时，普通擦布颜色会附着在镀层表面。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'Can MEKKING be overcoated?';
					}else if(get_current_blog_id()==2){
						echo 'MEKKING可以重複塗抹嗎？';
					}else {
						echo 'MEKKING可以重复涂抹吗？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'Of course it is possible. If you apply 3 times 2 to 6 weeks, MEKKING will protect the coating.';
				}else if(get_current_blog_id()==2){
					echo '當然可以。如果您在2到6週內塗抹3次，MEKKING將保護電鍍層。';
				}else {
					echo '当然可以。如果您在2到6周内涂抹3次，MEKKING将保护电镀层。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'Can I use it on aluminum polish?';
					}else if(get_current_blog_id()==2){
						echo '可以用在鋁拋光上嗎？';
					}else {
						echo '可以用在铝抛光上吗？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'Yes, it is no problem. However, in order to completely block aluminum and oxygen surface, first overcoat at the beginning, then remove the part that touches the air.';
				}else if(get_current_blog_id()==2){
					echo '沒問題。但是，為了完全阻擋鋁和氧氣接觸，首先塗抹一層，去除接觸空氣的部分。';
				}else {
					echo '没问题。但是，为了完全阻挡铝和氧气接触，首先涂抹一层，去除接触空气的部分。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'Does it have the heat resistance?';
					}else if(get_current_blog_id()==2){
						echo '它有耐熱性嗎？';
					}else {
						echo '它有耐热性吗？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'It can withstand up to 400°F, so it does not matter if you apply it to the motorcycle engine.';
				}else if(get_current_blog_id()==2){
					echo '可以承受高達200℃的溫度，因此即便塗抹在摩托車引擎也沒問題。';
				}else {
					echo '可以承受高达200℃的温度，因此即便涂抹在摩托车引擎也没问题。';
				} ?></div>
			</div>
			<div class="faq-item">
				<div class="question">
					<i class="fa fa-question-circle fa-3x"></i>
					<h3><?php if(get_current_blog_id()==1){
						echo 'How much can I use with one bottle?';
					}else if(get_current_blog_id()==2){
						echo '1瓶的MEKKING可以使用多少次？';
					}else {
						echo '1瓶的MEKKING可以使用多少次？';
					} ?></h3>
				</div>
				<div class="answer"><?php if(get_current_blog_id()==1){
					echo 'You can use it for more than 30 motorcycles.';
				}else if(get_current_blog_id()==2){
					echo '可用於30台摩托車。';
				}else {
					echo '可用于30台摩托车。';
				} ?></div>
			</div>
			<p><?php if(get_current_blog_id()==1){
				echo '※ MEKKING is not for plating; it\'s only for the protection.';
			}else if(get_current_blog_id()==2){
				echo '※ MEKKING不是用於電鍍金屬，它只是為了保護電鍍層。';
			}else {
				echo '※ MEKKING不是用于电镀金属，它只是为了保护电镀层。';
			} ?></p>
		</div>
	</main>
<?php get_footer();?>