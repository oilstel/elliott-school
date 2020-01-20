const texts = [
    'Our class website',
    'All questions are good',
    'I hear the New York City traffic',
    'An island far away in the sea',
    'It\'s spring again',
    '🍃🌀'
]

const byline = document.querySelector('#title em');

(() => byline.innerText = random(texts))()

function random(items) {
    return items[Math.floor(Math.random()*items.length)];
}