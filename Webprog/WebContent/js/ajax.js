var xhr = new XMLHttpRequest();

xhr.onload = function() {
	if(xhr.status == 200) {
		document.getElementById('gallery').innerHTML = xhr.responseText;
	}
	
	else {
		$('.lead').hide(); //Verstecke die Kategorie-Überschrift
			
        // Error - blende Error-Meldung ein
        $('#success').html("<div class='alert alert-danger'>");
        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
        .append("</button>");
        $('#success > .alert-danger').append("<strong>Es tut uns Leid, es sieht aus, als würde der Server nicht reagieren. Bitte versuchen Sie es später!");
        $('#success > .alert-danger').append('</div>');
	}
};

xhr.open('GET', 'gallery.html', true);
xhr.send(null);