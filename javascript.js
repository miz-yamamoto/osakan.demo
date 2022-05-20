// 追従するheader
$(function(){

    $(window).on("scroll",function(){
        var main = $("main").offset().top;
        if(($(this).scrollTop()) < main){
            $(".over_header").removeClass("isActive");
            $(".scroll-top").removeClass("isActive");

        } else{
            $(".over_header").addClass("isActive");
            $(".scroll-top").addClass("isActive");
        }
    });
})

// クリップボードにテキストをコピーさせる
function copy() {
    var text = $("#calender-url").val();;
    navigator.clipboard.writeText(text);
  }

function copy_2() {
    var text = $("#calender-url_2").val();
    navigator.clipboard.writeText(text);
  }

//メニューを出す
$(function(){
    let i = 0;
    $(".menu-btn").on("click",function(){
        i++;
        $(".menu").addClass("menuMove");
        $(".btnLine").toggleClass('active');

        if(i % 2 ===0){
            $(".menu").removeClass("menuMove");
        }
    });
    $(".menuList").on("click",function(){
        i++;
        if(i % 2 ===0){
            $(".menu").removeClass("menuMove");
            $(".btnLine").toggleClass('active');
        }
    });
})