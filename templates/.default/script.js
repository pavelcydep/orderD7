function person() {
    $('#toggler-person').on( "click",function(){
    
        $(this).addClass("active");
        $('.toggler-item2').removeClass("active");
        $('#company-info').addClass("d-none");
        $('#person-info').removeClass("d-none");
    });
}

function person2() {
    $('#toggler-person2').click(function() {
        $(this).addClass("active");
        $('#toggler-person').removeClass("active");
        $('#company-info').removeClass("d-none");
    });
}

function delivery() {
    $('#delivery_id').click(function() {
        $(this).addClass("active");
        $('#pickup').removeClass("active");
        $('#delivery_address').removeClass("active");
        $('#pickup').addClass("d-none");
        $('#delivery-pickup').removeClass("d-none");
    });
}

function delivery2() {
    $('#delivery_id').click(function() {
        $(this).addClass("active");
        $('#delivery').removeClass("active");
        $('#pickup').removeClass("d-none");
        $('#delivery-pickup').addClass("d-none");
    });
}
function rassr() {
    $('#pay_1').click(function() {
        
        $('#list').toggleClass("d-none");
    });
}

function noactive(){
    $('#radio-3').click(function() { 
        $('#list').addClass("d-none");
    });
}
function monthToggle() {
   
    var value = $('input[name=payment_rasr]:checked').val();
     if(value==3)
     {
        $('#month_id').text('на 3 месяца');
        $('#list').addClass("d-none");
      }
      if(value==6)
      {
        $('#month_id').text('на 6 месяцев');
       
     }
     }

      function addPlaceholder(){
      $( ".input-mask-phone" ).mouseover(function() {
        $(".input-mask-phone").attr('placeholder', '+7 (___) ___ - __ - __');
        });
        $( ".input-mask-phone" ).mouseout(function() {
            $(".input-mask-phone").removeAttr('placeholder', '+7 (___) ___ - __ - __');
        });
            }
            function payment1() {
                $('#payment1').click(function() {
                    $(this).addClass("active");
                    $('#payment2').removeClass("active");
                    $('#payment3').removeClass("active");
                    $('#payment4').removeClass("active");
                    $('#pay').text('Оформить рассрочку');
                });
            }
            function payment2() {
                $('#payment2').click(function() {
                    $(this).addClass("active");
                    $('#payment1').removeClass("active");
                    $('#payment3').removeClass("active");
                    $('#payment4').removeClass("active");
                    $('#pay').text('Безналичный расчет');
                });
            }
            function payment3() {
                $('#payment3').click(function() {
                    $(this).addClass("active");
                    $('#payment2').removeClass("active");
                    $('#payment1').removeClass("active");
                    $('#payment4').removeClass("active");
                    $('#pay').text('Оплатить онлайн');
                });
            }
            function payment4() {
                $('#payment4').click(function() {
                    $(this).addClass("active");
                    $('#payment2').removeClass("active");
                    $('#payment3').removeClass("active");
                    $('#payment1').removeClass("active");
                    $('#pay').text('Оплата при получение');
                });
            }
      