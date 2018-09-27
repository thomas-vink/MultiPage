$('.AddToCart').click(function(){
    var editaction=($(this).attr("id"));
    $.ajax({
        type:"POST",
        url:"/add",
        data:(this).val(,
        success:function(results){
            window.location.href="REDIRECTED ROUTE URL"
        }
    }); 
});