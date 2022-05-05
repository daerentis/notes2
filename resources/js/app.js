require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

function debounce(func, timeout = 300) {
  let timer;
  return (...args) => {
    console.log(timer);
    clearTimeout(timer);
    timer = setTimeout(() => {
      func.apply(this, args);
    }, timeout);
  };
}
function saveInput() {
  console.log("Saving data");
}

const processChange = debounce(() => saveInput());
