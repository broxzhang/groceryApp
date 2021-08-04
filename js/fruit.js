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

function mult(value) {

    x = 1.23 * value

    tp = parseFloat(x).toFixed(2);

    // Store
    localStorage.tp = tp;
    localStorage.value = value;

    // Retrieve
    document.getElementById('input').value = localStorage.value;
    document.getElementById('totalPrice').value = localStorage.tp;


}

window.onload=function(){
	document.getElementById('input').value = localStorage.value;
    document.getElementById('totalPrice').value = localStorage.tp;
}
