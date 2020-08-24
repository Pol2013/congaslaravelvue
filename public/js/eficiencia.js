
$(document).on('ready', constructor);
function calcularEficiencia(){

			var num1= parseInt($('#valor1').val() );
			var num2= parseInt($('#valor2').val() );
			var num3= parseInt($('#valor3').val() );
			var num4= parseInt($('#valor4').val() );
			var num5= parseInt($('#valor5').val() );
			var num6= parseInt($('#valor6').val() );

         if (isNaN(num1)) {
              num1= 0;

            }
        if (isNaN(num2)) {
     num2= 0;

         }
       if (isNaN(num3)) {
     num3= 0;

       }

         if (isNaN(num4)) {
     num4= 0;

        }
       if (isNaN(num5)) {
     num5= 0;

        }
      if (isNaN(num6)) {
     num6= 0;

          }

       var res= (num1/num2*num3)/(num4/num5*num6);
     document.getElementById('eficiencia').value= res;

		
}

function calcularEficacia(){
    var num1= parseInt($('#valor1').val() );
	var num2= parseInt($('#valor2').val() );

	  if (isNaN(num1)) {
              num1= 0;

            }
        if (isNaN(num2)) {
     num2= 0;

         }
  var res= num1 / num2;
     document.getElementById('eficacia').value= res;

}



/*
$(document).on('ready', constructor);

function calcularEficiencia(){
 var num1= Number(document.getElementById('valor1').value);
 var num2= Number(document.getElementById('valor2').value);
 var num3= Number(document.getElementById('valor3').value);
 var num4= Number(document.getElementById('valor4').value);
 var num5= Number(document.getElementById('valor5').value);
 var num6= Number(document.getElementById('valor6').value);

   var res= (num1/num2*num3)/(num4/num5*num6);
 document.getElementById('resultado').value= res;
}

*/


