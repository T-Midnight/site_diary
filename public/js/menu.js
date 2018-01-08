$(function() {
	// Создаем основу для выпадающего меню
	$("<select />").appendTo("nav");

	// Создаем пункт select по умолчанию – «Перейти к...»
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "..."
	}).appendTo("nav select");

	// Копируем ссылки из обычного меню в элементы выпадающего меню
	$("nav a").each(function() {
		 var el = $(this);
		 $("<option />", {
			 "value"   : el.attr("href"),
			 "text"    : el.text()
		 }).appendTo("nav select");
	});
	$("nav select").change(function() {
	  window.location = $(this).find("option:selected").val();
	});
});