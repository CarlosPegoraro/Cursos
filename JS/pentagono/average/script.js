function calcAverage(){
    let note1 = document.getElementById("note1").value
    let note2 = document.getElementById("note2").value
    let note3 = document.getElementById("note3").value
    let note4 = document.getElementById("note4").value
    let result = document.getElementById("result")
    let averange = (note1 + note2 + note3 + note4) / 4

    result.textContent = "A media foi: " + averange
};  