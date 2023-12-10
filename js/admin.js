const sidebar = document.querySelector(".sidebar");
const sidebarClose = document.querySelector("#sidebar-close");
const menu = document.querySelector(".menu-content");
const menuItems = document.querySelectorAll(".submenu-item");
const subMenuTitles = document.querySelectorAll(".submenu .menu-title");

sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    menu.classList.add("submenu-active");
    item.classList.add("show-submenu");
    menuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show-submenu");
      }
    });
  });
});

subMenuTitles.forEach((title) => {
  title.addEventListener("click", () => {
    menu.classList.remove("submenu-active");
  });
});

// const sidebar = document.querySelector(".sidebar");
// const sidebarClose = document.querySelector("#sidebar-close");

var a = 0;

function show_datauser(){
  if(a == 1 ){
    document.getElementById("datauser").style.display="block";
     return a = 0;
  }else{
    document.getElementById("datauser").style.display="none";
     return a = 1;
  }
}

<p></p>