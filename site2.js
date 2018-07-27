var menuroll = false;
$(document).ready(function(){

  $(".menu").mouseover(function(){

      $(".sous-menu").slideDown("slow");
  });

  $(".menu").mouseleave(function(){
    $(".sous-menu").slideUp("slow");
  });
});
