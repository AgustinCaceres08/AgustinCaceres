//Funciones con parametros
function sumar(num1,num2){
    let resultado = num1 + num2;
    console.log(resultado);
}

function sumar2(){
    let numero1 = document.getElementById('A').value;
    let numero2 = document.getElementById('B').value;
    let resultado2 = Number(numero1)+Number(numero2);
    
    //console.log(resultado2);

    //if (numero1 > numero2){
    //    alert(numero1 + ' es mayor que '+ numero2)
    //}
    //else{
    //    alert(numero2 + ' es mayor que ' + numero1);
    //}

    document.getElementById('D').innerHTML=resultado2;
}
