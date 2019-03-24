<?php /* Template Name: purchase */ ?>
<?php get_header();?>
	<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/purchase/purchase_mobile.jpg" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/purchase/purchase.jpg" alt="Purchase / Contact Us" width="100%" /> 
		</picture>
		<h1 class="visual-title"><?php if(get_current_blog_id()==1){
					echo 'Purchase / Contact Us';
				}else if(get_current_blog_id()==2){
					echo '購買 / 聯絡我們';
				}else {
					echo '购买 / 联络我们';
				} ?></h1>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			
			<h2 class="main-title"><?php if(get_current_blog_id()==1){
				echo 'WHERE TO BUY';
			}else if(get_current_blog_id()==2){
				echo '購買方式';
			}else {
				echo '购买方式';
			} ?></h2>
			<p><?php if(get_current_blog_id()==1){
				echo 'You can buy on Amazon.com.';
			}else if(get_current_blog_id()==2){
				echo '您可以從以下網站購買。';
			}else {
				echo '您可以从以下网站购买。';
			} ?></p>
			<div class="buy-area">
				<a href="<?php if(get_current_blog_id()==1){
							echo 'https://www.amazon.com/dp/B004V1HN22';
						}else if(get_current_blog_id()==2){
							echo 'https://seller.pcstore.com.tw/S174670000/C1184236873.htm';
						}else {
							echo 'https://www.qoo10.com/item/NAKARAI-RUST-REMOVAL-AGENT-FOR-MOTORCYCLE-SABITOLING-SABITORI/562761826';
						} ?>" target="_blank">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/purchase/<?php if(get_current_blog_id()==1){
					echo 'amazon.png';
				}else if(get_current_blog_id()==2){
					echo 'pchome.png';
				}else {
					echo 'qoo10.png';
				} ?>" alt="amazon" width="250" />
				</a>
				<a href="<?php if(get_current_blog_id()==1){
							echo 'https://www.amazon.com/dp/B004V1HN22';
						}else if(get_current_blog_id()==2){
							echo 'https://seller.pcstore.com.tw/S174670000/C1184236873.htm';
						}else {
							echo 'https://www.qoo10.com/item/NAKARAI-RUST-REMOVAL-AGENT-FOR-MOTORCYCLE-SABITOLING-SABITORI/562761826';
						} ?>" target="_blank">
					<figure>
						<img src="<?php bloginfo('template_directory') ?>/inc/img/purchase/mekking.png" width="200" alt="mekking" />
						<figcaption>
							<h4>MEKKING</h4>
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
						<img src="<?php bloginfo('template_directory') ?>/inc/img/purchase/sabitori.png" width="200" alt="sabitori" />
						<figcaption>
							<h4>SABITORI KING</h4>
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

			<h2 class="main-title"><?php if(get_current_blog_id()==1){
				echo 'Contact us';
			}else if(get_current_blog_id()==2){
				echo '聯絡我們';
			}else {
				echo '联络我们';
			} ?></h2>
			<form action="" class="contact-form" id="myForm">
				<div class="contact-item">
					<div class="title">
						<span><?php if(get_current_blog_id()==1){
							echo 'Name';
						}else if(get_current_blog_id()==2){
							echo '姓名';
						}else {
							echo '姓名';
						} ?></span>
						<span class="badge"><?php if(get_current_blog_id()==1){
							echo 'Required';
						}else if(get_current_blog_id()==2){
							echo '必填';
						}else {
							echo '必填';
						} ?></span>
					</div>
					<input type="text" name="your_name" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php if(get_current_blog_id()==1){
							echo 'E-mail address';
						}else if(get_current_blog_id()==2){
							echo 'E-mail';
						}else {
							echo 'E-mail';
						} ?></span>
						<span class="badge"><?php if(get_current_blog_id()==1){
							echo 'Required';
						}else if(get_current_blog_id()==2){
							echo '必填';
						}else {
							echo '必填';
						} ?></span>
					</div>
					<input type="email" name="your_mail" required />
				</div>
				<div class="contact-item">
					<div class="title"><?php if(get_current_blog_id()==1){
						echo 'Phone number';
					}else if(get_current_blog_id()==2){
						echo '電話號碼';
					}else {
						echo '电话号码';
					} ?></div>
					<input type="tel" name="your_phone" />
				</div>
				<div class="contact-item">
					<div class="title"><?php if(get_current_blog_id()==1){
						echo 'Address';
					}else if(get_current_blog_id()==2){
						echo '地址';
					}else {
						echo '地址';
					} ?></div>
					<input type="text" name="your_address" />
				</div>
				<div class="contact-item">
					<div class="title"><?php if(get_current_blog_id()==1){
						echo 'Message';
					}else if(get_current_blog_id()==2){
						echo '訊息';
					}else {
						echo '讯息';
					} ?></div>
					<textarea cols="30" rows="15" name="your_message"></textarea>
				</div>
				<div class="center-button" id="nextButton">
					<button class="blue-button" onclick="goComfirm(this, event)"><?php if(get_current_blog_id()==1){
							echo 'Next';
						}else if(get_current_blog_id()==2){
							echo '下一步';
						}else {
							echo '下一步';
						} ?></button>
				</div>
				<div class="center-button" id="comfirmButtons" hidden>
					<button class="blue-button" onclick="goBack(this, event)"><?php if(get_current_blog_id()==1){
							echo 'Back';
						}else if(get_current_blog_id()==2){
							echo '返回';
						}else {
							echo '返回';
						} ?></button>
					<button class="blue-button" name="your_submit" onclick="goSend(this, event)"><?php if(get_current_blog_id()==1){
							echo 'Submit';
						}else if(get_current_blog_id()==2){
							echo '送出';
						}else {
							echo '送出';
						} ?></button>
				</div>
			</form>
			<div id="successText" hidden><?php if(get_current_blog_id()==1){
				echo 'Send Successful';
			}else if(get_current_blog_id()==2){
				echo '表單成功送出';
			}else {
				echo '表单成功送出';
			} ?></div>
			<div id="failText" hidden><?php if(get_current_blog_id()==1){
				echo 'Send Fail';
			}else if(get_current_blog_id()==2){
				echo '表單送出失敗';
			}else {
				echo '表单送出失败';
			} ?></div>
		</div>
	</main>

	<script>
		function goSend(th, e){
			e.preventDefault();
			var your_name=myForm.elements[0].value;
			var your_mail=myForm.elements[1].value;
			var your_phone=myForm.elements[2].value;
			var your_address=myForm.elements[3].value;
			var your_message=myForm.elements[4].value;
			
			var mailXhr=new XMLHttpRequest();
			mailXhr.open('POST', 'http://localhost/nakarai/wp-content/themes/nakarai/purchase-mail.php', true);
			mailXhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			mailXhr.onreadystatechange=function(){
				if(mailXhr.readyState==4 && mailXhr.status==200){
					if(mailXhr.responseText=='success'){
						myForm.hidden=true;
						successText.hidden=false;
					}else{
						myForm.hidden=true;
						failText.hidden=false;
					}
				}
			};
			mailXhr.send(
				"&your_name="+your_name+
				"&your_mail="+your_mail+
				"&your_phone="+your_phone+
				"&your_address="+your_address+
				"&your_message="+your_message
			);

		}
	</script>
<?php get_footer(); ?>