const productsWrapper = document.querySelector("[data-products]");
const search = document.querySelector("[data-search]");

// let users = [];

// fetch("https://jsonplaceholder.typicode.com/users")
//   .then((res) => res.json())
//   .then((data) => {
//     users = data.map((user) => {
//       const h3 = document.createElement("h3");
//       h3.textContent = user.name;
//       userWrapper.append(h3);
//       return { name: user.name, element: h3 };
//     });
//   });

let productsLength = productsWrapper.children.length;

search.addEventListener("input", (e) => {
  const value = e.target.value;

  for (let index = 0; index < productsLength; index++) {
    let name = productsWrapper.children[index].querySelector("[data-name]");
    let category =
      productsWrapper.children[index].querySelector(
        "[data-category]"
      ).textContent;
    let price =
      productsWrapper.children[index].querySelector("[data-price]").textContent;
    const isVisible =
      name.textContent.includes(value) ||
      category.includes(value) ||
      price.includes(value);
    const element = name.parentElement.parentElement;

    element.classList.toggle("hide", !isVisible);
  }
});
