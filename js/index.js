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
            $("#img-u0").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u1").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u2").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u3").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u4").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u5").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#menu-u0").animate({width: '70px'});
            $("#menu-u1").animate({width: '70px'});
            $("#menu-u2").animate({width: '70px'});
            $("#menu-u3").animate({width: '70px'});
            $("#menu-u4").animate({width: '70px'});
            $("#menu-u5").animate({width: '70px'});
            $("#text-u0").hide();
            $("#text-u1").hide();
            $("#text-u2").hide();
            $("#text-u3").hide();
            $("#text-u4").hide();
            $("#text-u5").hide();
            $("#text_nav").animate({left: '15px'});
            $("#dw").animate({marginLeft:90});
        }
        else{
            $("#nav").animate({ width: '260px'});
            $("#menu").animate({width: '260px'});
            $("#dw").animate({marginLeft:260});
            $("#img-u0").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u1").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u2").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u3").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u4").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u5").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#menu-u0").animate({width: '240px'});
            $("#menu-u1").animate({width: '240px'});
            $("#menu-u2").animate({width: '240px'});
            $("#menu-u3").animate({width: '240px'});
            $("#menu-u4").animate({width: '240px'});
            $("#text_nav").animate({left: '90px'});
            $("#menu-u5").animate({width: '240px'},
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
