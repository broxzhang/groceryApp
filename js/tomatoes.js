function mult (value){
    var x;
    var value;
    var tp
    x= 0.39*value
   tp = parseFloat(x).toFixed( 2 );
    document.getElementById('totalPrice').value=x;
        // Store
        localStorage.tp = tp;
        localStorage.value = value;
    
        // Retrieve
        document.getElementById('input').value = localStorage.value;
        document.getElementById('totalPrice').value = localStorage.tp;   
}
// =======================================================================
function mult3 (value){
    var x3;
    var value;
    var tp3
    x3= 0.40*value
   tp3 = parseFloat(x3).toFixed( 2 );
    document.getElementById('totalPrice3').value=tp3;
        // Store
        localStorage.tp3 = tp3;
        localStorage.value3 = value3;
    
        // Retrieve
        document.getElementById('input3').value3 = localStorage.value3;
        document.getElementById('totalPrice3').value3 = localStorage.tp3;   
}
    // =======================================================================

function mult2 (value){
    var x2;
    var value;
    var tp2
    x2= 0.35*value
   tp2 = parseFloat(x2).toFixed( 2 );
    document.getElementById('totalPrice2').value=tp2;
        // Store
        localStorage.tp2 = tp2;
        localStorage.value2 = value2;
    
        // Retrieve
        document.getElementById('input2').value2 = localStorage.value2;
        document.getElementById('totalPrice2').value2 = localStorage.tp2;   
}
window.onload=function(){
    document.getElementById('input').value = localStorage.value;
    document.getElementById('totalPrice').value = localStorage.tp;
	document.getElementById('input2').value = localStorage.value;
    document.getElementById('totalPrice2').value = localStorage.tp2;
    document.getElementById('input3').value = localStorage.value;
    document.getElementById('totalPrice3').value = localStorage.tp3;}
// =======================================================================

// function mult4 (value){
//     var x;
//     x= 0.40*value
//     x = parseFloat(x).toFixed( 2 );
//     document.getElementById('totalPrice4').value=x;
// }
// =======================================================================
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}

function myFunction2() {
    var popup = document.getElementById("myPopup3");
    popup.classList.toggle("show");
}
function myFunction3() {
    var popup = document.getElementById("myPopup4");
    popup.classList.toggle("show");
}