import products from "./product.js";

const list = document.querySelector("#productList");

$(document).ready(() => {
  const { seafood, beverages } = products;

  //   localStorage.setItem("seafood", seafood);
  //   localStorage.setItem("beverages", beverages);

  //   let dbSeafood = localStorage.getItem("seafood")
  //     ? localStorage.getItem("seafood")
  //     : seafood;
  //   let dbBeverages = localStorage.getItem("beverages")
  //     ? localStorage.getItem("beverages")
  //     : beverages;

  let seafoodToShow = seafood.map((item) => {
    return fillTable(item);
  });
  seafoodToShow = seafoodToShow.join("");
  list.innerHTML = seafoodToShow;

  let beverageToShow = beverages.map((item) => {
    return fillTable(item);
  });
  beverageToShow = beverageToShow.join("");
  list.innerHTML = seafoodToShow + beverageToShow;
});

const fillTable = (item) => {
  return `
    <tr>
        <th scope="row">${item.id}</th>
        <td>${item.productName}</td>
        <td>${item.aisles}</td>
        <td>$${item.price}</td>
        <td>
        <a class="btn btn-primary" href="backStoreEditProduct.html?id=${item.id}">Edit</a>
        <button class="btn btn-primary">Delete</button>
        </td>
    </tr> 
    `;
};
