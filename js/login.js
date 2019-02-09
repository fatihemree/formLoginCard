//date setting
$(document).ready(function(){
  $('.datepicker').datepicker();
});

$("#tikla").click(function() {

  $(".login-block").toggleClass("animated fadeInDown").
  css("display","block")
  .toggleClass("animated fadeInDown","slow");




});

$("#close").click(function() {
 
 $(".login-block").toggleClass("animated zoomOut")
 .toggleClass("animated zoomOut","slow",function(){ $(".login-block").hide()});
 

 
} );







  





