const LIBRO1 = {
    ID: 1,
    autor: "Mark Twain",
    titulo: "El principe",
    stock: 18,
    valor: 100,
    editorial: "La flor"
};

const LIBRO2 ={
    ID: 2,
    autor: "Emanuel Fernandez",
    titulo: "Infinity",
    stock: 3,
    valor: 49,
    editorial: "Rawnson"
};

const LIBRO3 = {
    ID: 3,
    autor: "Juan perez",
    titulo: "El reencuentro",
    stock: 50,
    valor: 70,
    editorial: "Lara"
};

const LIBRO4 = {
    ID: 4,
    autor: "Maria Barrios",
    titulo: "Don quijote",
    stock: 5,
    valor: 250,
    editorial: "El folleto"
};

const LIBRO5 = {
    ID: 5,
    autor: "Valentina Godoy",
    titulo: "La llave",
    stock: 1,
    valor: 199,
    editorial: "Agape"
};

let libros = [LIBRO1, LIBRO2, LIBRO3, LIBRO4, LIBRO5];

function buscar() {
    let id = document.getElementById("id").value
    let resultado
    let total_valor
    let color
    const importe1 = 0.2

    libros.forEach(element => {
        if (element.ID == id) {
         resultado = element
        }
     });


    if (resultado==undefined) { //En caso de no existir
        document.getElementById("div").style.background = "red";
        document.getElementById("div").innerHTML = "No existe";
    }else{
        if(resultado.stock > 5){
            color = "green";
        
            if (resultado.valor >= 100) {
                total_valor = resultado.valor - resultado.valor*importe1; // Si es mayor o igual le saco el 20%
                if (resultado.editorial == "La flor") {
                    let importe2 = resultado.valor * (5/100) // Si es la flor le agrego el 5%
                    total_valor = total_valor - importe2
                }
            }else{
                if (resultado.editorial == "La flor") {
                    let importe2 = resultado.valor * (5/100) // Si es la flor le agrego el 5%
                    total_valor = resultado.valor - importe2
                }else{
                    total_valor = resultado.valor;
                }
            }
        }
        if(resultado.stock <= 5){
            color = "red";

            if (resultado.valor >= 100) {
            total_valor = resultado.valor - resultado.valor*importe1; // Si es mayor o igual le saco el 20%
                if (resultado.editorial == "La flor") {
                    let importe2 = resultado.valor * (5/100) // Si es la flor le agrego el 5%
                    total_valor = total_valor - importe2
                }
            }else{
                if (resultado.editorial == "La flor") {
                    let importe2 = resultado.valor * (5/100) // Si es la flor le agrego el 5%
                    total_valor = resultado.valor - importe2
                }else{
                    total_valor = resultado.valor;
                }
            }
        }

        document.getElementById("div").innerHTML = "Autor: "+resultado.autor+`<br>`+"Titulo: "+resultado.titulo+"<br>"+"Valor: "+total_valor;
        document.getElementById("div2").style.background = color
        document.getElementById("div2").innerHTML = "Stock: "+ resultado.stock
    }
}
