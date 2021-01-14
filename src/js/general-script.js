// Código desarrollado por Edwin Nieto

$("#burger-menu").click(function () {
	$(".menu").toggleClass("is-active");
});

$(".link").click(function () {
	$(".menu").toggleClass("is-active");
});


$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})