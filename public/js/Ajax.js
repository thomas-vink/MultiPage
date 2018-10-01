
$( document ).ready(function() {


	    $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:'http://localhost:8000/add',
 			data: {
              id: 4,
            },
		    success: function(response){ 
		        console.log(response); 
		    }
        });
});
