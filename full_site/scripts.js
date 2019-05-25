$(document).ready(function() {
    $(".prod-sel").click(function(){
        alert($(this).find("span.typ").text());
    });
});