var textdefault ;
$(document).ready(function() {
	 textdefault = $('textarea').val();
	 $('textarea').click(function(e) {
        if ( $('textarea').val()== textdefault) {
			$('textarea').val("");
		}
      });
	 $('textarea').focusout(function(e) {
        if ( $('textarea').val()== "") {
			$('textarea').val(textdefault);
		}
    });
	$(".pay input").click(function(e) {
        if ( $('textarea').val()== textdefault) {
			$('textarea').val("");
		}
		$('.cost input').val($('.cost input').val().replace('$','').replace(' ',''))
    });
    $('textarea').each(function() {
        var input = '#' + this.id;
        var count = '.words input';
        $(count).show();
        word_count(input, count);
        $(this).keyup(function() { word_count(input, count) });
    });
	
	

});
function word_count(field, count) {
    var number = 0;
	var textfield = $(field).val();
	if (textfield==textdefault) {
		textfield="";
	}
    var matches = textfield.match(/\b/g);
    if(matches) {
        number = matches.length/2;
    }
	if ( number>0){
    	$(count).val( number );
		var rate = $('.rate input').val().replace('¢','');
		$('.cost input').val("$ "+ (number*rate/100).toFixed(2));
		
	}
	else {
		$(count).val("");
		$('.cost input').val("");
	}

}