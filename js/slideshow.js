const path = '../images/slideshow/'
const images = [
    'teshima.png',
    'device.png',
    'relax.png',
    'island.png',
    'spiral.png',
    'information.png'
]
const button = document.querySelector('#alive-button');
const slideshow = document.querySelector('.slideshow');
const slideshowText = document.querySelector('#slideshow-text');

(() => {
    byline.innerText = random(texts);
    slideshow.style.cssText = `background-image: url('${path + random(images)}');`;
})()

function random(items) {
    return items[Math.floor(Math.random()*items.length)];
}

function changeImage() {
    slideshow.style.cssText = `background-image: url('${path + random(images)}');`;
    console.log(slideshow);

    slideshowText.innerText = random(texts);
    byline.innerText = random(texts);
    console.log(text);
}

button.addEventListener('click', () => {
    changeImage()
})


