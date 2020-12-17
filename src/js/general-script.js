// Código desarrollado por Edwin Nieto

$("#burger-menu").click(function () {
	$(".menu").toggleClass("is-active");
});

$(".link").click(function () {
	$(".menu").toggleClass("is-active");
});

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

$('#search-box').focus(function(){
	$('.typing').css('display','none');
});
$('#search-box').focusout(function(){
	$('.typing').css('display','flex');
});