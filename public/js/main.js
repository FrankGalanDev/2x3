var TAX_RATE = parseFloat ($('#config_tax_rate').val());
var TAX_SETTING = false;
$('body').addClass('hidetax hidenote hidedate');



  var now = new Date();
  var month = (now.getMonth() + 1);       
  var day = now.getDate();
  if (month < 10) {
    month = "0" + month;
  }
  if (day < 10) {
    day = "0" + day;
  }
  var today =  day +'-' + month + '-' + now.getFullYear().toString().substr(2,2);
  
  var intwoweeks = new Date(now.getTime() + 30 * 24 * 60 * 60 * 1000);
  var month = (intwoweeks.getMonth() + 1);       
  var day = intwoweeks.getDate();
  if (month < 10) {
    month = "0" + month;
  }
  if (day < 10) {
    day = "0" + day;
  }
  
  var twoweeks =  day +'-' + month + '-' + intwoweeks.getFullYear().toString().substr(2,2);
  console.log (twoweeks);
  

  $('.datePicker').val(today);
  $('.twoweeks').val(twoweeks);


 
var precio = $("#rate").val();
var iva_solo = precio * TAX_RATE ;
var precio_c_iva= precio * 1.18 ;

var amount= $("#amount").val();
console.log(amount);

var precio_s_iva =precio * amount ;


$("#").val(precio_c_iva);

/*
function calculate(){

  var total_price = 0,
      total_tax = 0;
  
  console.log('CALCULATING - Tax Rate:'+TAX_RATE);

  $('.invoicelist-body tbody tr').each( function(){
    var row = $(this),
        rate   = row.find('.rate input').val(),
        amount = row.find('.amount input').val();
    
    var sum = rate * amount;
    var tax = ((sum / (TAX_RATE+100) ) * TAX_RATE);
    
    
    total_price = total_price + sum;
    total_tax = total_tax + tax;
    
    row.find('.sum').text( sum.toFixed(2) );
    row.find('.tax').text( tax.toFixed(2) );   
  });
  
  $('#total_price').text(total_price.toFixed(2));
  $('#total_tax').text(total_tax.toFixed(2));
  

}



$('.invoicelist-body').on('keyup','input',function(){
  calculate();
});



$('#config_note').on('change',function(){
  $('body').toggleClass('shownote hidenote');
});

$('#config_tax').on('change',function(){
  TAX_SETTING = !TAX_SETTING;
  $('body').toggleClass('showtax hidetax');
});

$('#config_tax_rate').on('keyup',function(){
  TAX_RATE = parseFloat($(this).val());
  if (TAX_RATE < 0 || TAX_RATE > 100){
    TAX_RATE = 0;
  }
  console.log('Changed tax rate to: '+TAX_RATE);
  calculate();
});

$('#config_date').on('change',function(){
  $('body').toggleClass('hidedate showdate');
});


init_date();
calculate();