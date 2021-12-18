var swiper = new Swiper(".gallery__container-slider", {
	slidesPerView: 4,
	spaceBetween: 30,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	navigation: {
		nextEl: ".gallery-arrow__next",
		prevEl: ".gallery-arrow__prev",
	},

});

function readMore() {
	var dots = document.getElementById("dots");
	var more = document.getElementById("more");
	var btn = document.getElementById("btn");

	if (dots.style.display === "none") {
		dots.style.display = "inline";
		btn.innerHTML = "Citeste mai mult";
		more.style.display = "none";
	} else {
		dots.style.display = "none";
		btn.innerHTML = "Inchide";
		more.style.display = "inline";
	}
};

var bigsize = "400";
var smallsize = "250";
function changeSizeImage(im) {
	if (im.height == bigsize) im.height = smallsize;
	else im.height = bigsize;
}