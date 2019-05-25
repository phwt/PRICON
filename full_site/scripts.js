function scrollToAnchor(aid){
    var aTag = $("[sname='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}
$(document).ready(function() {
    var selected="";
    $(".prod-sel").click(function(){
        selected = $(this).find("span.typ").text();
        showAds(selected);
    });

    var atype = ['elec', 'appr', 'health', 'phone', 'sport', 'lifes'];

    window.showAds = function(type){
        scrollToAnchor('acc');
        if(type == ""){
            $("#a-1").attr("src", "a/a_"+atype[Math.floor(Math.random()*6)]+"1.jpg");
            $("#a-2").attr("src", "a/a_"+atype[Math.floor(Math.random()*6)]+"2.jpg");
        }else{
            $("#a-1").attr("src", "a/a_"+type+"1.jpg");
            $("#a-2").attr("src", "a/a_"+type+"2.jpg");
        }
    }

});
function selNone(){
    showAds("");
}

$('#choose').on('appear', function(event, $all_appeared_elements) {
    // this element is now inside browser viewport
    alert();
});
// $(document).on('scroll', function() {
//     console.log("sad");
//     if($(this).scrollTop()>=$('#choose').position().top){
//         console.log("WOW");
//     }
// })