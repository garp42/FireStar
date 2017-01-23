$(function(){
	$('#search-icon').mouseover(function(){
		$('#search-icon').attr('src', 'icons/search64-hover.png');
	});
	$('#search-icon').mouseout(function(){
		$('#search-icon').attr('src', 'icons/search64.png');
	});
	$('#account-icon').mouseover(function(){
		$('#account-icon').attr('src', 'icons/account128-hover.png');
		$('#account-title').css('color', '#E47516');
	});
	$('#account-icon').mouseout(function(){
		$('#account-icon').attr('src', 'icons/account128.png');
		$('#account-title').css('color', 'white');
	});
    $('#account-icon').click(function(){
        $('#login-popup').css('display', 'block');
    });
	$('#account-title').mouseover(function(){
		$('#account-title').css('color', '#E47516');
		$('#account-icon').attr('src', 'icons/account128-hover.png');
	});
	$('#account-title').mouseout(function(){
		$('#account-title').css('color', 'white');
		$('#account-icon').attr('src', 'icons/account128.png');
	});
	$('#explorer-icon').mouseover(function(){
		$('#explorer-icon').attr('src', 'icons/explorer128-hover.png');
		$('#explorer-title').css('color', '#E47516');
	});
	$('#explorer-icon').mouseout(function(){
		$('#explorer-icon').attr('src', 'icons/explorer128.png');
		$('#explorer-title').css('color', 'white');
	});
	$('#explorer-title').mouseover(function(){
		$('#explorer-title').css('color', '#E47516');
		$('#explorer-icon').attr('src', 'icons/explorer128-hover.png');
	});
	$('#explorer-title').mouseout(function(){
		$('#explorer-title').css('color', 'white');
		$('#explorer-icon').attr('src', 'icons/explorer128.png');
	});

	$('#login-facebook').mouseover(function(){
		$('#facebook-icon').css('opacity', '1');
	});
	$('#login-facebook').mouseout(function(){
		$('#facebook-icon').css('opacity', '0.8');
	});
	$('#login-google').mouseover(function(){
		$('#google-icon').css('opacity', '1');
	});
	$('#login-google').mouseout(function(){
		$('#google-icon').css('opacity', '0.8');
	});
	$('#login-mail').mouseover(function(){
		$('#mail-icon').css('opacity', '1');
	});
	$('#login-mail').mouseout(function(){
		$('#mail-icon').css('opacity', '0.8');
	})



	$('#search-bar').focus(function(){
		$('#search-bar').css('border-bottom', '2px solid white');
	});
	$('#search-bar').blur(function(){
		$('#search-bar').css('border-bottom', '2px solid silver');
	});

	//Register.php
	$('#username').focus(function(){
		$('#username').css('border-color', '#E47516');
	});
	$('#username').blur(function(){
		$('#username').css('border-color', 'rgba(0,0,0,0.2');
	});
	$('#email').focus(function(){
		$('#email').css('border-color', '#E47516');
	});
	$('#email').blur(function(){
		$('#email').css('border-color', 'rgba(0,0,0,0.2');
	});
	$('#password').focus(function(){
		$('#password').css('border-color', '#E47516');
	});
	$('#password').blur(function(){
		$('#password').css('border-color', 'rgba(0,0,0,0.2');
	});
	$('#password2').focus(function(){
		$('#password2').css('border-color', '#E47516');
	});
	$('#password2').blur(function(){
		$('#password2').css('border-color', 'rgba(0,0,0,0.2');
	});
	$('#username_email').focus(function(){
		$('#username_email').css('border-color', '#E47516');
	});
	$('#username_email').blur(function(){
		$('#username_email').css('border-color', 'rgba(0,0,0,0.2');
	});
	$('#send-submit').mouseover(function(){
		$('#send-submit').css('background-color', '#E47516');
		$('#send-submit').css('color', 'white');
		$('#send-submit').css('transition', '0.5s');
	});
	$('#send-submit').mouseout(function(){
		$('#send-submit').css('background-color', 'white');
		$('#send-submit').css('color', 'black');
		$('#send-submit').css('transition', '0.5s');
	});

	// var array = ['img/stars-wallpaper.jpg', 'img/horizon-wallpaper.jpg', 'img/horizon-wallpaper2.jpg'];
	// var count = -1;

	// function changeImage(){
	// 	count++
	// 	if(count>=array.length){
	// 		count=0;
	// 	}
	// 	$('#wallpaper-img').attr('src', array[count]);
	// 	$('#wallpaper-img').css('transition', '2s');
	// }

	// setInterval(function(){ changeImage() }, 3000);

});