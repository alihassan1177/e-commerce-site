const userWrapper = document.querySelector("[data-users]");
const search = document.querySelector("[data-search]");

let users = [];

fetch("https://jsonplaceholder.typicode.com/users")
  .then((res) => res.json())
  .then((data) => {
    users = data.map((user) => {
      const h3 = document.createElement("h3");
      h3.textContent = user.name;
      userWrapper.append(h3);
      return { name: user.name, element: h3 };
    });
  });

search.addEventListener("input", (e) => {
  const value = e.target.value;
  users.forEach((user) => {
    const isVisible = user.name.includes(value);
    user.element.classList.toggle("hide", !isVisible);
  });
});
