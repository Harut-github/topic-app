window.onload = function() {

    let btnMobileNav = document.querySelector('.mobile_btn');
    let mobileNav = document.querySelector('.mobile_nav');
    let mobileIcon = document.querySelector('.mobile_nav-icon');


    btnMobileNav.addEventListener('click', function() {
        mobileNav.classList.toggle('active');
        mobileIcon.classList.toggle('active');
    });
}