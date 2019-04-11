$(function(){
var header=document.getElementById('header');
var headroom=new Headroom(header);
headroom.init();

var ancho=$(window).width();
    enlaces=$('#enlaces');
    btnmenu=$('#bt-menu');
    icono=$('#bt-menu .icono');

    if(ancho<700){
        enlaces.hide();
        icono.addCLass('fa-bars');
    }
    btnmenu.on('click',function (e){
enlaces.slideToggle();
icono.toggleClass('fa-bars');
icono.toggleClass('fa-times');

    });
    $(window).on('resize',function(){
if($(this).width()>700){
    enlaces.show();
    icono.removeClass('fa-times');
    icono.addCLass('fa-bars');
    
}
else{
    enlaces.hide();
    icono.addCLass('fa-bars');
    icono.removeClass('fa-times');

}
    });
});