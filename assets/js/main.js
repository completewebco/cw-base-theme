// Build CSS
import '../css/app.css'

// Import JS Modules
import menu_init from './modules/menu'

// Load Menu Script
document.addEventListener('DOMContentLoaded', menu_init);

// Alert Bar
function alertBar() {

	const alertDiv = document.getElementById('alert');
	const alertClose = document.getElementsByClassName('alert_close')[0];

	if (sessionStorage.alertBar !== "closed") {
		alertDiv.style.display = "block";
	};

	alertClose.addEventListener('click', (e) => {
		alertDiv.classList.add('close');
		sessionStorage.setItem("alertBar", "closed");
	});
}

alertBar();



//Mobile Nav
const button = document.getElementById('js-mobile');
const body = document.getElementsByTagName('body')[0];

button.addEventListener('click', (e) => {
	if (body.classList.contains('active')) {
		body.classList.remove('active')
	}
	else { body.classList.add('active') }
});


//Mobile Submenus 2
function mobileBtns() {
	const mobileBtn = document.querySelectorAll(".js-mobile");
	const body = document.getElementsByTagName('body')[0];
	const mobilebtnText = document.getElementById('js-mobile-btn-text');
	var i;

	for (i = 0; i < mobileBtn.length; i++) {
		mobileBtn[i].addEventListener("click", function (ev) {
			if (body.classList.contains('active')) {
				body.classList.remove('active');
				mobilebtnText.innerHTML = "Menu";
			}
			else {
				body.classList.add('active');
				mobilebtnText.innerHTML = "Close";
			}
		});
	}
}
mobileBtns();

// Back to Top
function toTop() {
	var topButton = document.getElementById("js-back-to-top");
	var bscrollPosY = window.pageYOffset | document.body.scrollTop;

	if (bscrollPosY > 500) {
		topButton.classList.add('opacity-100');
	} else if (bscrollPosY <= 500) {
		topButton.classList.remove('opacity-100');
	}
}

window.onscroll = function () {
	toTop();
}

//Mobile Submenus
function mobileMenu() {
	var mobileSub = document.querySelectorAll(".menu-item-has-children > a");
	var i;

	for (i = 0; i < mobileSub.length; i++) {
		mobileSub[i].addEventListener("click", function (ev) {

			ev.preventDefault();
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			}
		});
	}
}

window.onload = function () {
	var w = document.documentElement.clientWidth || document.body.clientWidth || window.innerWidth;
	var targetWidth = 1024;
	if (w < targetWidth) {
		mobileMenu();
	}
}



