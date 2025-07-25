let i = false;
let mm = document.getElementById("mm");
let ar = document.getElementById("arrow");
document.getElementById("kat").onclick = function () {
  if (!i) {
    ar.style.transform = "rotate(-90deg)";
    i = true;
    mm.style.display = "block";
  } else {
    ar.style.transform = "rotate(0)";
    mm.style.display = "none";
    i = false;
  }
};

document.getElementById("navbar").onmouseleave = function () {
  ar.style.transform = "rotate(0)";
  mm.style.display = "none";
  i = false;
};
