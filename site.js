/*$(document).ready(function(){
  $(".menu").mouseover(function(){
    $(".sous-menu").slideDown("slow");
  })
  $(".menu").mouseout(function(){
    $(".sous-menu").slideUp("slow");
  })
  var t = true;

})
*/

var menuroll = false;
$(document).ready(function(){

  $(".menu").mouseover(function(){
      $(".sous-menu").slideDown("slow");
  })
  /*
  $(".sous-menu").mouseover(function(){
    menuroll = true;
  })
*/
  $(".menu").mouseleave(function(){
    $(".sous-menu").slideUp("slow");
  })

/*
  if (menuroll == true)
  {
    $(".sous-menu").slideDown("slow");
    alert("scrolling down");
  }
  else
  {
    alert("")
      $(".sous-menu").slideUp("slow");
    }*/
});
