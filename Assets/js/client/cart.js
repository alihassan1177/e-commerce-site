const cartOpenBtn = document.querySelector("[data-cart-toggle]");
const cartCloseBtn = document.querySelector("[data-cart-close]");
const cartSidebar = document.querySelector(".cart-sidebar");
const addToCartBtn = document.querySelectorAll("[data-add-cart]");

// addToCartBtn.forEach((btn) => {
//   btn.addEventListener("click", () => {
//     let category =
//       btn.parentElement.parentElement.querySelector(
//         "[data-category]"
//       ).textContent;
//     let name =
//       btn.parentElement.parentElement.querySelector("[data-name]").textContent;
//     let price =
//       btn.parentElement.parentElement.querySelector("[data-price]").textContent;
//     let id =
//       btn.parentElement.parentElement.querySelector("[data-id]").textContent;

//     let product = {
//       name: name,
//       category: category,
//       price: price,
//       id: id,
//     };

//     console.log(product);
//   });
// });

cartOpenBtn.addEventListener("click", () => {
  cartSidebar.classList.replace("slide-out", "slide-in");
});
cartCloseBtn.addEventListener("click", () => {
  cartSidebar.classList.replace("slide-in", "slide-out");
});
