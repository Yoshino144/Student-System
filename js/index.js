// JavaScript Document

//student.php
function delete_js(id){
    var r=confirm("是否确认删除"+id);
    if (r==true)
    {
        window.location.href = 'http://localhost/pro/php/operation.php?operation=delete&id=' + id;
    }
}

function modify_js(id){
    window.location.href = 'http://localhost/pro/php/modify.php?operation=modify&id=' + id;
}



//侧边栏动画
$(document).ready(function () {
    $("#img_head").click(function () {
        if ($("#nav").css("width") == "260px"){
            $("#nav").animate({width: '90px'});
            $("#menu").animate({width: '90px'});
            $("#menu-u0").animate({width: '90px'});
            $("#menu-u1").animate({width: '90px'});
            $("#menu-u2").animate({width: '90px'});
            $("#menu-u3").animate({width: '90px'});
            $("#menu-u4").animate({width: '90px'});
            $("#menu-u5").animate({width: '90px'});
            $("#text-u0").hide();
            $("#text-u1").hide();
            $("#text-u2").hide();
            $("#text-u3").hide();
            $("#text-u4").hide();
            $("#text-u5").hide();
        }
        else{
            $("#nav").animate({ width: '260px'});
            $("#menu").animate({width: '260px'});
            $("#menu-u0").animate({width: '260px'});
            $("#menu-u1").animate({width: '260px'});
            $("#menu-u2").animate({width: '260px'});
            $("#menu-u3").animate({width: '260px'});
            $("#menu-u4").animate({width: '260px'});
            $("#menu-u5").animate({width: '260px'},
            function showtext(){
            $("#text-u0").show();
            $("#text-u1").show();
            $("#text-u2").show();
            $("#text-u3").show();
            $("#text-u4").show();
            $("#text-u5").show();});
        }
    });
    
    
});
