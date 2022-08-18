//var resposta = confirm("Deseja excluir?")

//console.log()

const a = 10;
const b = 33;

function add (a, b) {
    var result = a + b;
    return result;
}

document.querySelector("#calculate").addEventListener("click", function () {
        let valueA = document.querySelector("#valueA").value;
        let valueB = document.querySelector("#valueB").value;

        if (valueA.length > 0 && valueB.length > 0) {
            alert(add(parseInt(valueA), parseInt(valueB)));
        } else {
            alert("Digite os valores para o cálculo");
        }
});
