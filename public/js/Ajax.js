$( document ).ready(function() {

	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

	var id = 12; 
		$.ajax({
		    method: 'POST', 
		    url: 'http://localhost:8000/add', 
		    data: {'id' : id}, 
		    success: function(response){ 
		        console.log(response); 
		    }
		});
	});
