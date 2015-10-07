$(".item, .item.active").click(function() {
	var title = $(this).attr('value');
	console.log(title);
});