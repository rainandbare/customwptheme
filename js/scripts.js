app = {};

app.displayMainNav = function(){
	$('li.hamburger').on('click', function(){
		$('li.hamburger').toggleClass('hide');
		$('li.mainMenu').toggleClass('show');
	})
	$('.ex').on('click', function(){
		$('li.hamburger').toggleClass('hide');
		$('li.mainMenu').toggleClass('show');
	})
};


app.init = function(){
	app.displayMainNav();
}


$(function(){

	console.log("It's working");
	app.init();



});


