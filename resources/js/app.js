require('./bootstrap');

import bootstrap from 'bootstrap';
const deleteButtons = document.querySelectorAll('.js-delete');
const eleOverlay = document.querySelector('.overlay');
console.log(deleteButtons);

deleteButtons.forEach(button => {
    button.addEventListener('click', function() {
        eleOverlay.classList.remove('d-none');
    })
})

document.querySelector('.js-no').addEventListener('click', function() {

})