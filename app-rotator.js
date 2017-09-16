document.addEventListener('DOMContentLoaded', function () {

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

}, false);