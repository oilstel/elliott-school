
fetch('./data/people.json')
.then((res) => {
    return res.json();
})
.then((participants) => {
    var participantsEL = document.querySelector('#participants');

    // append participants onload
    participants.forEach(person => {
        var personEl = document.createElement('li');
        personEl.innerHTML = person.first_name + ' ' + person.last_name;
        participantsEL.appendChild(personEl);
    })

    document.querySelector('.slideshow').style.cssText = `background-color: ${randomColor()};`

    // Randomizer
    document.querySelector('#randomizer').addEventListener('click', () => {
        // Filter out selected participants into a new array
        var filteredParticipants = participants.filter(person => person.selected !== true);

        // Check if there's still everyone has gone
        if (filteredParticipants.length > 0) {
            participantsEL.innerHTML = '';

            // Choose a random whole number based on the roster.
            var chosenOne = filteredParticipants[Math.floor(Math.random()*filteredParticipants.length)];

            // Add selected: true to person obj
            chosenOne.selected = true;

            document.querySelector('.slideshow').style.cssText = `background-color: ${randomColor()};`
            document.querySelector('#slideshow-text').innerText = chosenOne.first_name;
            // console.log('select:', chosenOne.first_name);

            // Append people to DOM and update selected
            for (let person of participants) {
                var personEl = document.createElement('li');
                let fullName = person.first_name + ' ' + person.last_name;
                personEl.innerHTML = fullName;
                participantsEL.appendChild(personEl);

                if (person.selected) {
                    personEl.classList = 'selected';
                } else {
                    continue;
                }
            }
        } else {
            console.log('That\'s everyone');
            document.querySelector('#slideshow-text').innerText = 'That\'s everyone';
        }
    })

})

function randomColor() {
    var randomNumber = Math.floor(Math.random() * 14) + 1
    console.log(randomNumber);
    return `var(--color${randomNumber})`;
}



        