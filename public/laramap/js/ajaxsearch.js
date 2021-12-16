$(document).ready(function(){

    $("#SubArea").click(function () {
        var distval=$("#SubArea").val();
        $.post('http://localhost/api/searchCity',{distval:distval},function(match){
            $("#city").html(match);
        });
    });

});