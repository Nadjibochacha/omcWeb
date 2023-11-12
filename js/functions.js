let tabs = document.getElementsByClassName("tab");
let tables = document.getElementsByClassName("timeT");
function showTab(params) {
  for (let index = 0; index < tabs.length; index++) {
    // hidden all tables
    tabs[index].classList.remove("active");
    tables[index].classList.add("d-none");
    // show just this table
    tabs[params].classList.add("active");
    tables[params].classList.remove("d-none");
  }
}

function showLogin() {
  document.getElementById("content").classList.add("d-none");
  document.getElementById("login").classList.remove("d-none");
}
function showHome() {
  document.getElementById("content").classList.remove("d-none");
  document.getElementById("login").classList.add("d-none");
}
