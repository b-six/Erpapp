$('.dropdown-trigger').dropdown();

// $('.marketing').hover(function () {
// 	// var filterVal = 'blur(20px)';
// 	$('.nav-wrapper').css("background-image", "url('./assets/img/home/marketing.png')");
// 	$('body').css("background-image", "url('./assets/img/home/marketing.png')");
// 	// $('body').css('filter', filterVal);
// })

// $('.marketing').mouseleave(function () {
// 	$('body').css("background", "#1f202c");
// 	// var filterVal = 'blur(0px)';
// 	$('body')
// 	// .css('filter', filterVal);
// 	$('.nav-wrapper').css("background", "#1f202c");
// })

//login button
$('#submit-login').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-login').submit();
});