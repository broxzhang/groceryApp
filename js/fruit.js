function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
function myFunction2() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}




//calculate the total price

var tp;
var value;
var type;





function mult(value) {

    var x = 1.23 * value

    tp = parseFloat(x).toFixed(2);

    // Store
    localStorage.tp = tp;
    localStorage.value = value;

    // Retrieve
    document.getElementById('input').value = localStorage.value;
    document.getElementById('totalPrice').value = localStorage.tp;


}

window.onload = function () {
    //  document.getElementById('type').value = localStorage.type;
    document.getElementById('input').value = localStorage.value;
    document.getElementById('totalPrice').value = localStorage.tp;

}

const mySel = document.getElementById("type"); 
mySel.addEventListener("change",function() { 
  localStorage.setItem("selValue",this.value); // save it 
}); 
let val = localStorage.getItem("selValue"); 
if (val) mySel.value=val; // set the dropdown 
// trigger the change in case there are other events on the select 
mySel.onchange(); 