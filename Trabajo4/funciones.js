// 1) Ordenar de menor a mayor
// 2) Mostrar los numeros que sean mayor a 50
// 3) Mostrar solo los numeros pares

function array(){
    // 1)
    let miarray = [99,4,34,93,1];
    miarray.sort(function(a,b){return a - b});
    console.log('Array ordenado: ' + miarray);

    console.log('');

    // 2)
    console.log('Numeros mayores a 50:');
    miarray.forEach(element => {
        if (element>50) {
            console.log(element);
        }
    });
    
    console.log('');

    // 3)
    console.log('Numeros pares:');
    miarray.forEach(element => {
        if ((element % 2) == 0) {
            console.log(element);
        }
    });
}
