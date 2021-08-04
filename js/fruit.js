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
function mult(value) {
    var x;
    x = 1.23 * value
    x=parseFloat(x).toFixed(2);
    document.getElementById('totalPrice').value = x;
}

// cockies store the number after refreshing
function WriteCookie() {
    if( document.myform.customer.value == "" ) {
       alert("Enter some value!");
       return;
    }
    cookievalue = escape(document.myform.customer.value) + ";";
    document.cookie = "name=" + cookievalue;
    document.write ("Setting Cookies : " + "name=" + cookievalue );
 }