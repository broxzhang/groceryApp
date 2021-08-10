import products from "./product.js";

const { seafood } = products;

let seafoodId = null;

const addToCart = () => {
  window.location.href = "shoppingcart.html";
};

$(document).ready(() => {
  const queryString = window.location.search;
  seafoodId = queryString.replace("?itemid=", "")
    ? queryString.replace("?itemid=", "")
    : 1;

  let seafoodToShow = seafood.find((item) => item.id == seafoodId);
  const seafoodContainer = document.querySelector("#seafood-detail-container");
  seafoodContainer.innerHTML = displaySeaFood(seafoodToShow);

  const button = document.querySelector("#btnAddToCart");
  button.addEventListener("click", addToCart);
});

const displaySeaFood = (seafood) => {
  const pizKg = calculateKg(seafood.price);
  const avgStr = seafood.avg
    ? seafood.avg + " avg. ea. "
    : (pizKg / 10).toFixed(2) + "/100g";
  return `
  <div class="main-container col-10 mt-5">
  <div class="col-4">
      <img src="${seafood.photo}" alt="item-pic" class="img-thumbnail">
      <figcaption class="figure-caption text-right">A sea food image.</figcaption>
  </div>
  <div class="col-1"></div>
  <div class="col-5 flex-column">
      <h3>${seafood.productName}</h3>
      <h4 class="mt-5">
          <b>${avgStr}</b>
      </h4>
      <h4 class="mt-4">${pizKg}/kg $${seafood.price}/lb</h4>
      <button type="button" class="btn btn-danger mt-5" id="btnAddToCart">
          <i class="fa fa-shopping-cart" ></i>Add
      </button>
      <hr />
      <div class="mt-4">
          <h2 data-toggle="collapse" href="#descripExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Product Description
            </h2>
            <div class="collapse" id="descripExample">
              <div class="card card-body">
              ${seafood.description}
              </div>
            </div>
      </div>
      <hr />
      <div class="mt-4">
          <h2 data-toggle="collapse" href="#IngredientsExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Ingredients
            </h2>
            <div class="collapse" id="IngredientsExample">
              <div class="card card-body">
              ${seafood.ingredients}
              </div>
            </div>
      </div>
      <hr />
  </div>
</div>
    `;
};

function calculateKg(price) {
  return (price * 2.205).toFixed(2);
}
