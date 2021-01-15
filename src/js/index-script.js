const texts = ['Escriba su problema jurídico.', 'Escriba su tema de interés.', 'Busque un abogado en especial.'];
let count = 0;
let index = 0;
let currentText = '';
let letter = '';

(function type() {
	if (count === texts.length) {
		count = 0;
	}

	currentText = texts[count];
	letter = currentText.slice(0, index++);
	document.querySelector(".typing").textContent = letter;

	if (letter.length == currentText.length) {
		count++;
		index = 0;
	}
	setTimeout(type, 125);

})();

$(document).ready(function () {

	$('#search-box').focus(function () {
		$('.typing').css('display', 'none');
	});
	$('#search-box').focusout(function () {
		$('.typing').css('display', 'flex');
	});

	var tags_carousel = $("#tags-carousel");
	tags_carousel.owlCarousel({
		autoplay: !0,
		loop: !0,
		center: 0,
		dots: 1,
		autoplayTimeout: 2000,
		responsive: {
			0: { items: 1 },
			768: { items: 3 }
		},
		smartSpeed: 3000
	});
	
	var publicidad_carousel = $("#publicidad-carousel");
	publicidad_carousel.owlCarousel({
		autoplay: 0,
		loop: !0,
		center: 0,
		dots: 0,
		autoplayTimeout: 3500,
		responsive: {
			0: { items: 1 },
			768: { items: 1 }
		},
		smartSpeed: 2000
	});
	
	var abogados_carousel = $("#abogados-carousel");
	abogados_carousel.owlCarousel({
		autoplay: !0,
		loop: !0,
		center: 0,
		dots: 0,
		autoplayTimeout: 10000,
		responsive: {
			0: { items: 1 },
			768: { items: 1 }
		},
		smartSpeed: 1000
	});
	$("#tags-btn-der").click(function () {
		tags_carousel.trigger('next.owl.carousel');
	});
	$("#tags-btn-izq").click(function () {
		tags_carousel.trigger('prev.owl.carousel');
	});
	$("#nav-icon2").click(function () {
		$(this).toggleClass("open");
		$(".menu").toggleClass("active");
	});
});
