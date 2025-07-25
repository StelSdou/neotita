function updates() {
  var text1Width = document.getElementById("grig").offsetWidth;
  document.documentElement.style.setProperty("--size", text1Width + "px");
}

window.addEventListener("resize", updates);
updates();
