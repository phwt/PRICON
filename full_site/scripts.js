function scrollToAnchor(aid){
    var aTag = $("[sname='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}
$(document).ready(function() {
    var selected="";
    $(".prod-sel").click(function(){
        selected = $(this).find("span.typ").text();
        showAds(selected);
        scrollToAnchor('acc');
    });

    var atype = ['elec', 'appr', 'health', 'phone', 'sport', 'lifes'];

    window.showAds = function(type){
        if(type == ""){
            $("#a-1").attr("src", "a/a_"+atype[Math.floor(Math.random()*6)]+"1.jpg");
            $("#a-2").attr("src", "a/a_"+atype[Math.floor(Math.random()*6)]+"2.jpg");
        }else{
            $("#a-1").attr("src", "a/a_"+type+"1.jpg");
            $("#a-2").attr("src", "a/a_"+type+"2.jpg");
        }
    }
    showAds("");

    window.openfk = function(type){
        var win = window.open('fake_' + type, '', (type=="fb") ? 'width=350,height=550' : 'width=450,height=650');
        $('#ph_txt').fadeOut();
        var pollTimer = window.setInterval(function() {
            $('#ph_txt').text("การไม่ตรวจสอบหน้าเว็บที่เข้าสู่ระบบให้ได้อาจทำให้ตกเป็นเหยื่อของการฟิชชิ่งหรือการหลอกขโมบข้อมูลได้ ซึ่งตามตัวอย่างหากผู้ประสงค์ร้ายได้ชื่อผู้ใช้กับรหัสผ่านไป ก็จะสามารถเข้าถึงข้อมูลได้อีกจำนวนมากเลยทีเดียว");
            if (win.closed !== false) { // !== is required for compatibility with Opera
                window.clearInterval(pollTimer);
                $('#ph_txt').fadeIn();
            }
        }, 200);
    }
});
function selNone(){
    scrollToAnchor('acc');
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