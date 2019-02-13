$(document).ready(function(){
  //date setting
  $('.datepicker').datepicker(
    {
      autoClose: true,
        container: 'body',
        format: 'dd/mm/yyyy',
        showMonthAfterYear:true,
        showDaysInNextAndPreviousMonths:true,
        selectYears:30,
        
    }

  );
  
  $(".login-block").modal();
  

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
$(".login-block").modal("close");

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
//kayıt etmek
       $("button[name='loginButton']").click(function() {
  
       
        //code empty
     
      
            });
            
            $(".kayit").validate({
              rules: {
                  username: {
                      required: true,
                      minlength: 3,
                      remote:"check.php"
                  },
                  email: {
                      required: true,
                      email:true,
                    remote: "check.php"
                },
                  password: {
              required: true,
              minlength: 5
            },
            cpassword: {
              required: true,
              minlength: 5,
              equalTo: "#siginPassword"
            },
           
              },
              //For custom messages
              messages: {
                  username:{
                      required: "Lütfen bu alanı doldurun.",
                      minlength: "En az 3 karekter giriniz.",
                     remote: jQuery.validator.format("{0} ismi kullanımda.")
                  },
                  email:{
                    required: "Lütfen bu alanı doldurun.",
                    email: "Lütfen doğru adres giriniz.",
                  remote: jQuery.validator.format("{0} zaten kullanımda")
                },
                password:{
                  required: "Lütfen bu alanı doldurun.",
                  minlength: "En az 5 karekter giriniz."
              }, 
              cpassword:{
                required: "Lütfen bu alanı doldurun.",
                minlength: "En az 5 karekter giriniz.",
                equalTo:"Lütfen şifreyi doğru giriniz."
            },
              },
              errorElement : 'div',
              errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                $(placement).addClass("errForm");
                if (placement) {
                  $(placement).append(error);
                } else {
                  error.insertAfter(element);
                }
              },
              submitHandler: function(){ 
                myAjax(
                  "post",
                  "users.php",
                  $(".kayit").serialize(),
                  function(){
                  M.toast({html: 'Giriş için  e-mail onay mesaji gönderdik', classes: 'rounded  green darken-2 ',displayLength:5000,activationPercent:0.8});
                  $("#loading").hide("fade","slow");
                },
                function(){
                  $("#loading").show("fade","fast");
                });
              }

           });
           function myAjax(type,url,data,success,beforeSend,complete){
            this.type=type;
            this.url=url;
            this.data=data;
            this.success=success;
            this.beforeSend=beforeSend;
            this.complete=complete;
            console.log(this.beforeSend)
            $.ajax({
              type:this.type,
              url: this.url,
              data: this.data,
              beforeSend:  this.beforeSend,
              complete: this.complete ,
              success: this.success,
            })
          
          }

          
            //ready content...
});





