(function() {
		
	//Objekte taggen und Objekte instanziieren
	var $imgs = $('#gallery div');
	var $buttons = $('#buttons');
	var tagged = {};
	
	$imgs.each(function() {
		var img = this;
		var tags = $(this).data('tags');
		
		if(tags) {
			tags.split(',').forEach(function(tagName) {
				if(tagged[tagName] == null) {
					tagged[tagName] = [];
				}
				tagged[tagName].push(img);
			});
		}
	});
	
	//Filter Buttons 
	$('<button/>', {
		text: 'Zeige alle',
		class: 'list-group-item active',
		click: function() {
			$(this)
			.addClass('active')
			.siblings()
			.removeClass('active');
		$imgs.fadeIn();
		}
	}).appendTo($buttons);
	
	$.each(tagged, function(tagName) {
		$('<button />', {
			text: tagName + ' (' + tagged[tagName].length + ')',
			class: 'list-group-item',
			click: function() {
				$(this)
				.addClass('active')
				.siblings()
				.removeClass('active');
			$imgs
			.hide()
			.filter(tagged[tagName])
			.fadeIn();
			}
		}).appendTo($buttons);
	});
}());