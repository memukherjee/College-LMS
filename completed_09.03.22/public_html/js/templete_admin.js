function loadNav() {
    const nav = document.querySelector(".navbar-college");
    fetch("navbar_admin.html")
      .then((res) => res.text())
      .then((data) => {
        nav.innerHTML = data;
      });
  }
  
  function loadFooter() {
    const nav = document.querySelector(".footer-college");
    fetch("footer.html")
      .then((res) => res.text())
      .then((data) => {
        nav.innerHTML = data;
      });
  }
  
  function onLoad() {
    loadNav();
    loadFooter();
  }