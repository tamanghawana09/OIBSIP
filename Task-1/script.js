function clearDisplay(){
    let input = "";
    document.getElementById('input').value = input;
    console.log("value clear")
}
function display(value){
    document.getElementById('input').value += value;
}
function calculate(){
    try {
        document.getElementById("input").value = eval(document.getElementById("input").value);
    } catch (error) {
        document.getElementById("input").value = "Error";
    }
}
function sqrt(){
    document.getElementById('input').value = Math.sqrt(document.getElementById('input').value);
}
function del(){
    var input = document.getElementById('input');
    input.value = input.value.slice(0,-1);
}
function toggle(){
    var input = document.getElementById('input');
    var currentInput = parseFloat(input.value);
    input.value = -currentInput; 
}