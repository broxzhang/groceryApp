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
// When the user clicks on div, open the popup
// function myFunction2() {
//     var popup = document.getElementById("myPopup");
//     popup.classList.toggle("show");
// }

// function calculateAmount(val) {
//     var tot_price = val * 1.23;
//     /*display the result*/
//     var divobj = document.getElementById('tot_amount');
//     divobj.value = tot_price;
// }


// $(document).ready(function(){
// 	$(".checkout").on("keyup", ".quantity", function(){
// 		var price = +$(".price").data("price");
// 		var quantity = +$(this).val();
// 		$("#total").text("$" + price * quantity);
// 	})
// })

function mult (value){
    var x;
    x= 1.23*value
    document.getElementById('totalPrice').value=x;
}
function mult2 (value){
    var x;
    x= 0.49*value
    document.getElementById('totalPrice2').value=x;
}
function mult3 (value){
    var x;
    x= 0.35*value
    document.getElementById('totalPrice3').value=x;
}
function mult4 (value){
    var x;
    x= 0.40*value
    document.getElementById('totalPrice4').value=x;
}
