const path = 'http://image.elliott.computer/'
const images = [
    'teshima.png',
    'device.png',
    'relax.png',
    'island.png',
    'spiral.png',
    'information.png',
    'uno-12.jpg',
    'sasaki-garden.jpg',
    'maui-trip-april-22.jpg',
    'maui-trip-april-15.jpg',
    'maui-trip-april-13.jpg',
    'maui-trip-april-2.jpg',
    'maui-trip-april-27.jpg',
    'happy-hacker-keyboard.jpg',
    'inflatable-earth-ball.jpg',
    'felt-laptop-case.jpg',
    'figs-and-plank-on-stool.jpg',
    'apartment-box-39.jpg',
    'apartment-box-30.jpg',
    'apartment-box-18.jpg',
    'apartment-box-24.jpg'
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


