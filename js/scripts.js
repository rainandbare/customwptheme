app = {};

app.displayMainNav = function(){
	$('li.hamburger').on('click', function(){
		$('li.hamburger').toggleClass('hide');
		$('li.mainMenu').toggleClass('show');
		$('body').toggleClass('noscroll');
	})
	$('.ex').on('click', function(){
		$('li.hamburger').toggleClass('hide');
		$('li.mainMenu').toggleClass('show');
		$('body').toggleClass('noscroll');
	})
};


app.stickyNav = function(){
	$(window).scroll(function() {
	  if( $(this).scrollTop() > 5 ) {
	    $('.mainNav').addClass('scrolled');
	  } else {
	    $('.mainNav').removeClass('scrolled');
	  }
	});	
};  

app.init = function(){
	app.displayMainNav();
	app.stickyNav();
}


$(function(){

	console.log("It's working");
	app.init();



});


