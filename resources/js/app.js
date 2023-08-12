import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const container = document.querySelector('.container')
const spaces = document.querySelector('.row .space:not(.booked)')
const count = document.getElementById('count')
const total = document.getElementById('total')
const parkingSelect = document.getElementById('parking')


populateUI()

let ticketPrice = +parkingSelect.nodeValue;

function setParkingData(parkingIndex, parkingPrice) {
    localStorage.setItem('selectedParkingIndex', parkingIndex)
    localStorage.setItem('selectedParkingPrice', parkingPrice)
}

function updateSelectedCount() {
    const selectedSpaces = document.querySelectorAll('.row .space.selected')

    const spacesIndex = [...selectedSpaces].map(space => [...spaces].indexOf(space))

    localStorage.setItem('selectedSpaces', JSON.stringify(spacesIndex))

    const selectedSpacesCount = selectedSpaces.length
    count.innerText = selectedSpacesCount
    total.innerText = selectedSpacesCount * ticketPrice

    setParkingData(parkingSelect.selectedIndex,parkingSelect.value);
}

function populateUI() {
    const selectedSpaces = JSON.parse(localStorage.getItem('selectedSpaces'))

    if (selectedSpaces !==null && selectedSpaces.length > -1) {
        spaces.forEach((space, index) => {
            if(selectedSpaces.indexOf(index) > -1){
                space.classList.add("selected");
            }
        });
    }

    const selectedParkingIndex = localStorage.getItem('selectedParkingIndex')

    if (selectedParkingIndex !==null) {
        parkingSelect.selectedIndex = selectedParkingIndex;
    }
}

parkingSelect.addEventListener('change', e => {
    ticketPrice =+e.target.value
    setParkingData(e.target.selectedIndex, e.target.value)
    updateSelectedCount()
})

container.addEventListener('click', e => {
    if(
        e.target.classList.contains("space")&&
        !e.target.classList.contains("booked")
    ){
        e.target.classList.toggle("selected");

        updateSelectedCount();
    }
});

updateSelectedCount();
