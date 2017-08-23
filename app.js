let hamburger = document.getElementById('hamburger');
let header = document.getElementById('page-header');
let menuItems = document.getElementsByClassName('menu-item');

// FUNCTIONS

/*
 * To toggle given class for given element
 */

function toggleClass(element, clas) {
    element.classList.toggle(clas);
}

/*
 * Hamburger and menu events
 */

const addMenuClick = () => {
    hamburger.addEventListener('click', menuClick);
    for (let i = 0; i < menuItems.length; i++) {
        menuItems[i].addEventListener('click', menuClick);
    }
}

/*
 * remove menu clicks when screen is big
 */

const removeMenuClick = () => {
    hamburger.removeEventListener('click', menuClick);
    for (let i = 0; i < menuItems.length; i++) {
        menuItems[i].removeEventListener('click', menuClick);
    }
}

// if (document.body.clientWidth < 640) {
    addMenuClick();
// }

/*
 * need only when screen is changing width
 */

window.addEventListener('resize', e => {
    if (e.currentTarget.innerWidth > 639) {
//         removeMenuClick();
    } else {
//         addMenuClick();
    }
});

/*
 * menu opening
 */

function menuClick() {
    toggleClass(header, 'nav-opened');
}
