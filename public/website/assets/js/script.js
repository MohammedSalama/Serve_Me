/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader(){
    const nav = document.querySelector('.navbar')
    // When the scroll is greater than 120 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 120) {
        nav.classList.add('scroll-header');
    }
    else nav.classList.remove('scroll-header');
}
window.addEventListener('scroll', scrollHeader);


// ===============   Animation in Header   ============== //
const headerTitle = document.querySelector('.header__title');
const headerText = document.querySelector('.header__text');
const headerBtn = document.querySelector('.btn__group');
window.onload = () => {
    headerTitle.style.opacity = '1';
    headerText.style.opacity = '1';
    headerBtn.style.opacity = '1';
}

// ===============   Animation in Features   ============== //
// function showFeatures() {
//     const Features = document.querySelector('.features');
//     if (this.scrollY >= 950) {
//         Features.style.opacity = '1';
//     }
//     else Features.style.opacity = '0';
// }
// window.addEventListener('scroll', showFeatures);

//========== Feature Carousel ============//
var owlFeature = $('.feature__carousel');
owlFeature.owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    item:1,
    rtl:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },            
        960:{
            items:3
        },
        1200:{
            items:2.5
        }
    }
});
owlFeature.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owlFeature.trigger('next.owl');
    } else {
        owlFeature.trigger('prev.owl');
    }
    e.preventDefault();
});

// ===============   Slider in Screen   ============== //
var $owl = $('.owl-carousel');

$owl.children().each(function (index) {
    $(this).attr('data-position', index); // NB: .attr() instead of .data()
});

$owl.owlCarousel({
    center: true,
    loop: true,
    rtl:true,
    items: 5,
    margin:10,
    pagination: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 5,
        },
        1000: {
            items: 5,
        }
    }
});

$(document).on('click', '.owl-item>div', function () {
    var $speed = 300;  // in ms
    $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
});


// ============  Navbar responsive  ============= //
const headerOverlay = document.querySelector('.before');
const bars = document.querySelector('.nav__bars');
const sideBar = document.querySelector('.side__bar');
const closeSideBar = document.querySelector('.close__sidebar');
showSidebar = () => sideBar.classList.add('nav__active');
showBefore = () => headerOverlay.style.display = "block";
hideSidebar = () => sideBar.classList.remove('nav__active');
hideBefore = () => headerOverlay.style.display = "none";

bars.addEventListener('click', () => {
    showSidebar();
    showBefore()
})
closeSideBar.addEventListener('click', () => {
    hideSidebar(), hideBefore()
});

/*==================== SHOW SCROLL UP ====================*/
function scrollTop() {
    const scrollTop = document.getElementById('scroll-up')
    if (this.scrollY >= 560) {
        scrollTop.classList.add('show-scroll');
    }
    else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)