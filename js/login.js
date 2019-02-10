//date setting
$(document).ready(function(){
  $('.datepicker').datepicker();
});
//open
$("#tikla").click(function() {
  $(".login-block").toggleClass("animated fadeInDown").
  css("display","block")
  .toggleClass("animated fadeInDown","slow");
});
//close
$("#close").click(function() {
 $(".login-block").toggleClass("animated zoomOut")
 .toggleClass("animated zoomOut","slow",function(){
    $(".login-block").hide();
    $(".loginUsers").show();
    $(".signUsers").hide();
});
} );
//sig in
$(".login_signButton").click(function() {
  $( ".loginUsers" ).hide( "slide", { direction: "down" }, "slow",function(){ $(".signUsers").show("slide", { direction: "up" },"slow");     } );
 } );
 //sigin to login button
 $(".users-loginButton span").
 click(function(){ 
  $( ".signUsers" ).hide( "slide", { direction: "up" }, "slow",function(){ $(".loginUsers").show("slide", { direction: "down" },"slow");     } );
       });





  





