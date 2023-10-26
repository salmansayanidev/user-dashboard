const checkOutUl = document.querySelector(".checkout-click");
const checkOutUlOpen = document.querySelector(".checkout-ul");
const checkout = document.querySelectorAll(".checkout-link");

checkOutUl?.addEventListener("click", () => {
  checkOutUlOpen.classList.add("active");
});

const resMenu = document.querySelector('.sidebar-main-area.res-sidebar')
const resMenuOpen = document.querySelector('.res-menu-btn')
const resMenuClose = document.querySelector('.res-menu-close-btn')

resMenuOpen?.addEventListener('click' , () => {
  resMenu.classList.add('active')
})

resMenuClose.addEventListener('click' , () => {
  resMenu.classList.remove('active')
})




var currentPage = window.location.href;

var navLinks = document.querySelectorAll(".nav-links");
for (var i = 0; i < navLinks.length; i++) {
  if (navLinks[i].href === currentPage) {
    navLinks[i].classList.add("active");
  }
}



const sideBarBtn = document.querySelector(".sidebar-toggle-btn-area");
const sideBar = document.querySelector(".sidebar-main-area");

sideBarBtn?.addEventListener("click", () => {
  sideBar.classList.toggle("active");
});

const shippingFormOpen = document.querySelector('.shipping-address-checkbox input')
const shippingForm = document.querySelector('.shipping-address')

shippingFormOpen?.addEventListener('change' , () => {
    if (shippingFormOpen.checked) {
        shippingForm.style.display = 'block'
    } else {
        shippingForm.style.display = 'none'
    }
})





