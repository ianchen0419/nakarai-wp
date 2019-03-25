//menu highlight
var nowPath=location.pathname.split('/').pop();
function menuHighlight(){

	if(nowPath!=='global'){
		var visitedMenu=document.querySelector('nav a[href*="' + nowPath + '"]');
	}
	if(visitedMenu){
		visitedMenu.closest('.main-list').classList.add('active');
	}else{
		document.querySelector('nav ul li').classList.add('active');
	}
}

menuHighlight();

function openMobileMenu(){
	document.body.classList.add('mobile-menu-opened');
	mobileMenu.classList.add('opened');
}

// menu dropdown
function menuDropdown(){

	//mobile menu dropdown
	document.body.addEventListener('touchstart', function(event){

		if(event.target.tagName=='BODY' && mobileMenu.classList.contains('opened')){
			document.body.classList.remove('mobile-menu-opened');
			mobileMenu.classList.remove('opened');
		}
	})

	const mobileMenuChildHeads=document.querySelectorAll('.mobile-child-head');

	for(i=0;i<mobileMenuChildHeads.length;i++){
		mobileMenuChildHeads[i].addEventListener('click', function(){
			this.classList.toggle('active');
			this.nextElementSibling.classList.toggle('opened');
		})
	}

}

if(window.innerWidth < 770){
	menuDropdown();
}

var inputs=document.querySelectorAll('#myForm input');
var textArea=document.querySelector('#myForm textarea');
function goComfirm(th,e){
	e.preventDefault();
	if(navigator.userAgent.indexOf("MSIE ")==-1){
		myForm.reportValidity();
	}
	if(myForm.checkValidity()==true){
		th.parentNode.hidden=true;
		comfirmButtons.hidden=false;
		myForm.classList.add('in-comfirm');
		for(i=0;i<inputs.length;i++){
			inputs[i].readOnly=true;
		}
		textArea.readOnly=true;
	}
}
function goBack(th,e){
	e.preventDefault();
	th.parentNode.hidden=true;
	nextButton.hidden=false;
	myForm.classList.remove('in-comfirm');
	for(i=0;i<inputs.length;i++){
		inputs[i].readOnly=false;
		inputs[i].disabled=false;
	}
	textArea.readOnly=false;
	textArea.disabled=false;
}