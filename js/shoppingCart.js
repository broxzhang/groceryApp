import products from "./product.js";

let seafoodId;

const { seafood } = products;

$(document).ready(() => {
  const queryString = window.location.search;
  seafoodId = queryString.replace("?itemid=", "")
    ? queryString.replace("?itemid=", "")
    : 1;

  let seafoodToAdd = seafood.find((item) => item.id == seafoodId);

  console.log(seafoodToAdd);
});
