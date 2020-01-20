const path = 'http://image.elliott.computer/'
const images = [
    'teshima.png',
    'device.png',
    'relax.png',
    'island.png',
    'spiral.png',
    'information.png',
    'glow.png',
    'ceramics.png',
    'maui-trip-april-22.jpg',
    'maui-trip-april-13.jpg',
    'apartment-box-39.jpg',
    'apartment-box-30.jpg',
    'apartment-box-18.jpg',
    'apartment-box-24.jpg',
    'train-field.png',
    'sky-coin.png',
    'horses.png',
    'apples.png'
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

function changeText() {
    // slideshow.style.cssText = `background-image: url('${path + random(images)}');`;
    // console.log(slideshow);

    slideshowText.innerText = random(texts);
    byline.innerText = random(texts);
    console.log(text);
}

button.addEventListener('click', () => {
    changeText()
})


