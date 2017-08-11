let hamburger = document.getElementById('hamburger');
let header = document.getElementById('page-header');
let menuItems = document.getElementsByClassName('menu-item');

let rotator = document.getElementById('rotator');
let btnRight = document.createElement('button');
btnRight.innerHTML = '&gt;';
btnRight.classList.add('right');
rotator.appendChild(btnRight);
let btnLeft = document.createElement('button');
btnLeft.innerHTML = '&lt;';
rotator.appendChild(btnLeft);
btnLeft.classList.add('left');

let elements = [];

// FUNCTIONS

/*
 * To toggle given class for given element
 */

function toggleClass(element, clas) {
    element.classList.toggle(clas);
}

// to add specyfic class to a div
const addClass = (div, index) => {
    div.classList = 'element';
    switch (index) {
        case 0:
            div.classList.add('element-left');
            break;
        case 1:
            div.classList.add('element-center');
            break;
        case 2:
            div.classList.add('element-right');
            break;
    }
}

const moveRight = () => {
    let first = elements.shift();
    elements.push(first);
    elements.map((a, index) => {
        addClass(a, index);
    });
}

const moveLeft = () => {
    let last = elements.pop();
    elements.unshift(last);
    elements.map((a, index) => {
        addClass(a, index);
    });
}

// EVENT LISTENERS

let refreshIntervalId = setInterval(moveRight, intervalTime);

btnLeft.addEventListener('click', () => {
    moveLeft();
    clearInterval(refreshIntervalId);
    refreshIntervalId = setInterval(moveRight, intervalTime);
});

btnRight.addEventListener('click', () => {
    moveRight();
    clearInterval(refreshIntervalId);
    refreshIntervalId = setInterval(moveRight, intervalTime);
});

// WORKING TIME :)

// to create and set elements
photos.map((a, index) => {
    let div = document.createElement('div');
    addClass(div, index);
    div.style.backgroundImage = `url('${a.img}')`;
    elements.push(div);
    rotator.appendChild(div);
});

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

const changeLogoColor = color => {
    let logo = document
        .querySelector('.header-logo')
        .contentDocument
        .getElementById('main');
    logo.setAttribute('fill', color);
}

function menuClick() {
    toggleClass(header, 'nav-opened');
    if (header.classList.contains('nav-opened')) {
        changeLogoColor('#000000');
    } else {
        changeLogoColor('#FFFFFF');
    }
}
