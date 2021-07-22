const seafood = [
    {    
        id: 1,
        productName: 'Fresh Canadian Atlantic Salmon Fillet',
        aisles: 'seafood',
        price: 10.99,
        category: 'fish'
        isFresh: true,
        avg: 7.93,
        photo: 'img/salmon_fillet.jpeg'
    },
    {    
        id: 2,
        productName: 'Crab flavoured pollock flakes',
        aisles: 'seafood',
        price: 8.99,
        category: 'fish'
        isFresh: true,
        avg: null,
        photo: 'img/crab-flavored.jpeg'
    },
    {    
        id: 3, 
        productName: 'Fresh Atlantic Salmon Steak',
        aisles: 'seafood',
        price: 15.99,
        category: 'fish'
        isFresh: true,
        avg: 8.81,
        photo: 'img/fresh_atlantic.jpeg'
    }
]

const seafoodSection = document.querySelector(".products-container");

window.addEventListener("DOMContentLoaded", function(){
    let displayFood = seafood.map( (item) => {
        const pizKg = calculateKg(item.price);

        const avgStr = item.avg? item.avg + ' avg. ea. ' : (pizKg/10).toFixed(2) + '/100g';
        return `
        <div style="cursor: pointer;" class="product">
        <img class="product-img" src="${item.photo}" />
        <h3>${item.productName}</h3>
        <h4><b>${avgStr}</b></h4>
        <span>(200 g avg.)</span>
        <span>${pizKg}/kg ${item.price}/lb</span>
        <!-- <img style="width: 40px; height: 40px; color: black;" src="shopping_cart.png" /> -->
    </div>`
    })
    displayFood = displayFood.join("");
    seafoodSection.innerHTML = displayFood;
})

calculateKg = (price) => {
    return (price * 2.205).toFixed(2);
}