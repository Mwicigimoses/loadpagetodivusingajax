	$(document).ready(function(){
		
			$('#blog_link').on('click',function(){
				$.ajax({
				        url: base_url+'home/blogform',
				          type: 'POST',
				          data: '',
				          xhr: function() {
				              var myXhr = $.ajaxSettings.xhr();
				              return myXhr;
				          },
				          cache: false,
				          contentType: false,
				          processData: false,
				        success: function (result) {
				        	//alert('success');
				            $("#main_content").html(result);
				          },
				        error: function(){
				        	alert('error');
				        }
				   });				

			});


			//sermon
			$('#sermon_link').on('click',function(){
				//alert('Clicked');
				$.ajax({
				        url: base_url+'home/sermon',
				          type: 'POST',
				          data: '',
				          xhr: function() {
				              var myXhr = $.ajaxSettings.xhr();
				              return myXhr;
				          },
				          cache: false,
				          contentType: false,
				          processData: false,
				        success: function (result) {
				        	//alert('success');
				            $("#main_content").html(result);
				          },
				        error: function(){
				        	alert('error');
				        }
				   });				

			});

			$('#keephopealive_link').on('click',function(){
				//alert('Clicked');
				$.ajax({
				        url: base_url+'home/keephopealive',
				          type: 'POST',
				          data: '',
				          xhr: function() {
				              var myXhr = $.ajaxSettings.xhr();
				              return myXhr;
				          },
				          cache: false,
				          contentType: false,
				          processData: false,
				        success: function (result) {
				        	//alert('success');
				            $("#main_content").html(result);
				          },
				        error: function(){
				        	alert('error');
				        }
				   });				

			});

			$('#home_link').on('click',function(){
				//alert('Clicked');
				$.ajax({
				        url: base_url+'home/homepage',
				          type: 'POST',
				          data: '',
				          xhr: function() {
				              var myXhr = $.ajaxSettings.xhr();
				              return myXhr;
				          },
				          cache: false,
				          contentType: false,
				          processData: false,
				        success: function (result) {
				        	//alert('success');
				            $("#main_content").html(result);
				          },
				        error: function(){
				        	alert('error');
				        }
				   });				

			});
			/*//load the default homepage
			//$('#content').load('home.php');
			
			//set trigger and container value
			var trigger= $('#nav ul li a'),
			, container = $('#main_content');
			alert('Clicked');

		  	//load pages
		  trigger.on('click',function(){
				


			//set $this for reuse
		  	var $this = $(this),
		  	target = $this.data('target');
		  	

		  	//load target page into container
		  	container.load(target);
		  	


		  	//stop normal link behaviour
		  	return false;

			});*/
		});