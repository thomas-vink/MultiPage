
$( document ).ready(function() {

    $(".addcart").click(function() {
        var id = $(this).attr('data-id')
        console.log(id)
	    $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:'http://localhost:8000/add',
 			data: {
              id: id,
            },
		    success: function(response){ 
		        console.log(response); 
		    }
        });
    });
});


$( document ).ready(function() {

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })

});