$(document).ready(function(){

	//initial

  $('#content').load('content/blog.php');

  //load pages

$('#nav ul li a').click(function(){

    var page = $(this). attr('href');

    $('#content').load('content/' +page + '.php' );

    return false;



});
});