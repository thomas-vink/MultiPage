
$( document ).ready(function() {

    $(".addcart").click(function() {
        var id = $(this).attr('data-id');
        console.log(id);
	    $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:'http://localhost:8000/AddToCart',
 			data: {
              id: id,
            },
		    success: function(response){
		        console.log(response);
		    }
        });
    });


    $(".OpenCartModal").click(function() {
        $.ajax({
            type:'GET',
            url:'http://localhost:8000/GetFromCart',
            DataType: "html",
            data: {
            },
            success: function(response){
  


            }
        });

    });




});
