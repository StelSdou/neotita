const c = document.getElementsByClassName("c");
const cc = Array.from(c);
var open = null;

cc.forEach((element) => {
  element.addEventListener("click", () => {
    if (open == null) {
      open = element;
      element.querySelector(".list").style.display = "block";
      element.querySelector(".content").style.height = "auto";
    } else {
      if (open == element) {
        open.querySelector(".list").style.display = "none";
        open = null;
      } else {
        open.querySelector(".list").style.display = "none";
        open = element;
        element.querySelector(".list").style.display = "block";
        element.querySelector(".content").style.height = "auto";
      }
    }

    if (open != element) {
      open.querySelector(".list").style.display = "none";
      if (open == element) open = null;
      else open = element;
    }
  });
});
