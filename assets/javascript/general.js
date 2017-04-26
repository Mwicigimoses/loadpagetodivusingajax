
		$(document).ready(function(){

			//load the default homepage
			$('#content').load('home.php');

			//set trigger and container value
			var trigger= $('#nav ul li a'),
				container = $('#content');

		  	//load pages
		  trigger.on('click',function(){

			//set $this for reuse
		  	var $this = $(this),
		  	target = $this.data('Application/controllers/Home/'+'target');
		  	

		  	//load target page into container
		  	container.load(target);
		  	


		  	//stop normal link behaviour
		  	return false;

			});
		});