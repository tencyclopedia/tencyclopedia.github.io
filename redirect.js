$(document).ready(function(){
$('.hovereffect').click(function(){
      var x=$(this).find("a").prop("href");
     window.location.href=x;
    })


    });