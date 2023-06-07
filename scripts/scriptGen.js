//ushan

//header scripts

let menuIcon = document.querySelector('.menu-icon');
let navLinkList = document.getElementById('nav-links');
let navLinks = document.querySelectorAll('.links');

// when the menu button is pressed
if (menuIcon) {
    menuIcon.addEventListener('click', () => {
        menuIcon.style.transition = '500ms';
        menuIcon.classList.toggle('rotate-menu');
        navLinkList.style.transition = '300ms';
        navLinkList.classList.toggle('nav-show');
    });

}


if (document.getElementById('nav_user_icon') != null) {
    let user_dropdown = document.getElementById('nav_user_list');
    document.getElementById('nav_user_icon').addEventListener('mouseover', () => {
        user_dropdown.classList.remove('hidden');
    });

    user_dropdown.addEventListener('mouseleave', () => {
        user_dropdown.classList.add('hidden');
    });

}

// home page ..........

// pkg section - photo slider

let nxt_button = document.querySelectorAll('.gallery-btn');
let slide_photos_pkg = document.querySelectorAll('.pkg-img');
let slide_photos_accomo = document.querySelectorAll('.accomo-img');
// add event listeners
for (let i = 0; i < nxt_button.length; i++) {
    nxt_button[i].addEventListener('click', () => {

        switch (nxt_button[i].id) {
            case "pkg_btn":
                changeImg(slide_photos_pkg);
                break;
            case "accomo_btn":
                changeImg(slide_photos_accomo)
                break;
        }
    });

}
// change images when button pressed
function changeImg(slide_photos) {

    let slide_photos_src = [];

    for (let i = 0; i < slide_photos.length; i++) {
        slide_photos_src[i] = slide_photos[i].src;
    }

    slide_photos_src.reverse;

    slide_photos_src[2] = slide_photos_src.shift();
    for (let i = 0; i < slide_photos.length; i++) {
        slide_photos[i].src = slide_photos_src[i];

    }
}

