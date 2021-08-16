// const seafood = [
//     {
//         id: 1,
//         productName: 'Fresh Canadian Atlantic Salmon Fillet',
//         aisles: 'seafood',
//         price: 10.99,
//         category: 'fish',
//         isFresh: true,
//         avg: 7.93,
//         photo: 'img/salmon_fillet.jpeg'
//     },
//     {
//         id: 2,
//         productName: 'Crab flavoured pollock flakes',
//         aisles: 'seafood',
//         price: 8.99,
//         category: 'fish',
//         isFresh: true,
//         avg: null,
//         photo: 'img/crab-flavored.jpeg'
//     },
//     {
//         id: 3,
//         productName: 'Fresh Atlantic Salmon Steak',
//         aisles: 'seafood',
//         price: 15.99,
//         category: 'fish',
//         isFresh: true,
//         avg: 8.81,
//         photo: 'img/fresh_atlantic.jpeg'
//     }
// ]

import products from "./product.js";
// import seafood from './product.js';

const seafoodSection = document.querySelector("#seafoodSection");

const { seafood } = products;

console.log(seafood);

window.addEventListener("DOMContentLoaded", function () {
  displayFood(seafood);
});

const displayFood = (seafood) => {
  let displayFood = seafood.map((item, i) => {
    const pizKg = calculateKg(item.price);

    const avgStr = item.avg
      ? item.avg + " avg. ea. "
      : (pizKg / 10).toFixed(2) + "/100g";
    return `
  <div class="card col-md-4" style="min-width: 250px">
        <a href="seafood-detail.html?itemid=${item.id}">
        <img class="card-img-top" src="${item.photo}" alt="seafood image" >
        </a>
        <div class="card-body">
          <h5 class="card-title">${item.productName}</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">${avgStr}</li>
            <li class="list-group-item">${pizKg}/kg ${item.price}/lb</li>
          </ul>
          </div>
        <div class="card-body">
        <a href="shoppingCart.html?itemid=${item.id}"> 
          <i class="fas fa-shopping-cart">Add To Cart</i>
        </a>
        </div>
      </div>`;
  });
  displayFood = displayFood.join("");
  // seafoodSection.innerHTML = displayFood;

  function calculateKg(price) {
    return (price * 2.205).toFixed(2);
  }
};

document.querySelectorAll(".filter").forEach((item) => {
  let filteredSeafood = [];
  item.addEventListener("click", () => {
    console.log(item.innerHTML);
    switch (item.innerHTML) {
      case "Fresh Fish":
        console.log("here");
        filteredSeafood = seafood.filter(
          (item) => item.category === "fish" && item.type === "fresh"
        );
        console.log(filteredSeafood);
        displayFood(filteredSeafood);
        break;
      case "Fresh Seafood":
        console.log("here");
        filteredSeafood = seafood.filter(
          (item) => item.category === "seafood" && item.type === "fresh"
        );
        console.log(filteredSeafood);
        displayFood(filteredSeafood);
        break;
      case "Frozen Fish":
        console.log("here");
        filteredSeafood = seafood.filter(
          (item) => item.category === "fish" && item.type === "frozen"
        );
        console.log(filteredSeafood);
        displayFood(filteredSeafood);
        break;
      case "Frozen Seafood":
        console.log("here");
        filteredSeafood = seafood.filter(
          (item) => item.category === "seafood" && item.type === "frozen"
        );
        console.log(filteredSeafood);
        displayFood(filteredSeafood);
        break;
      case "Prepared Fish":
        console.log("here");
        filteredSeafood = seafood.filter(
          (item) => item.category === "fish" && item.type === "prepared"
        );
        console.log(filteredSeafood);
        displayFood(filteredSeafood);
        break;
      case "Prepared Seafood":
        console.log("here");
        filteredSeafood = seafood.filter(
          (item) => item.category === "seafood" && item.type === "prepared"
        );
        console.log(filteredSeafood);
        displayFood(filteredSeafood);
        break;
    }
  });
});

const product = document.querySelector(".product");
console.log(product);
// .addEventListener('click', function (){
//     document.location = 'seafood-detail.html'
// })
// filterAnchor.addEventListener('click', function(){
//     console.log('here')
// })
