function scrollToAnchor(aid){
    var aTag = $("[sname='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

function selNone(){
    showAds(none);
}
$(document).ready(function() {
    var selected="";
    $(".prod-sel").click(function(){
        selected = $(this).find("span.typ").text();
        showAds(selected);
    });

    function showAds(type){
        scrollToAnchor('ads');
        $("#ads-1").attr("src", "ads/ads_"+type+"1.jpg");
        $("#ads-2").attr("src", "ads/ads_"+type+"2.jpg");
    }

});