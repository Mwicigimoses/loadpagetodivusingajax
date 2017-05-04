	$(document).ready(function(){

		$('#home_link').on('click',function(){
				
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

			
});				
