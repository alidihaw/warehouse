	var pas=jQuery.noConflict();  
		  pas(document).ready(function(){  
	pas('#admin_pass').keyup(function(){
		$('#strength').html(checkStrength($('#admin_pass').val()))
		//$('#parameter').html(checkStrength($('#admin_pass').val()))
	})	
	
	function checkStrength(password){
    
	//initial strength
		var strength = 0
		
		//if the password length is less than 6, return message.
		if (password.length < 6 && password != '') { 
			$('#strength').removeClass()
			$('#strength').addClass('short')
			$('#parameter').removeClass()
			$('#parameter').addClass('short_param')
			return 'Terlalu Pendek' 
		}
		
		//length is ok, lets continue.
		
		//if length is 8 characters or more, increase strength value
		if (password.length > 7) strength += 1
		
		//if password contains both lower and uppercase characters, increase strength value
		if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1
		
		//if it has numbers and characters, increase strength value
		if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1 
		
		//if it has one special character, increase strength value
		if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1
		
		//if it has two special characters, increase strength value
		if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
		
		//now we have calculated strength value, we can return messages
		
		//if value is less than 2
		if (strength < 2  && password != '') {
			$('#strength').removeClass()
			$('#strength').addClass('weak')
			$('#parameter').removeClass()
			$('#parameter').addClass('weak_param')
			return 'Lemah'			
		} else if (strength == 2  && password != '') {
			$('#strength').removeClass()
			$('#strength').addClass('good')
			$('#parameter').removeClass()
			$('#parameter').addClass('good_param')
			return 'Baik'		
		} else if (strength > 2  && password != '') {
			$('#strength').removeClass()
			$('#strength').addClass('strong')
			$('#parameter').removeClass()
			$('#parameter').addClass('strong_param')
			return 'Kuat'
		} else {
			$('#strength').removeClass()
			$('#parameter').removeClass()
			return ' '
		}
	}
});