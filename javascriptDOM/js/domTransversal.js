// parentNode
// parentElement
// nextSiblings
// nextElementSiblings
// previousSibling
// previousElementSibling


// const exit = document.getElementsByClassName('close')[0];
// const hapus = document.querySelector('.card');
// exit.addEventListener('click', function() {
//     hapus.style.display = 'none'; 
//     // alert('ok');
    
// })

// Cara 1
// for( let i = 0; i < card.length; i++) {
//     close[i].addEventListener('click', function() {
//         card[i].style.display = 'none';
//     })
// }


// Cara 2
// PreventDefault
// const close = document.querySelectorAll('.close');
// const card = document.querySelectorAll('.card');

// close.forEach(function(el) {
//     el.addEventListener('click', function(e){
//         // console.log(e);
//         e.target.parentElement.style.display = 'none';
//         e.preventDefault();
//         e.stopPropagation();
//     });
// });

// const cards = document.querySelectorAll('.card');
// cards.forEach(function(card) {
//     card.addEventListener('click', function(e) {
//         alert('ok');
//     });
// });

// Cara 3
// event Bubling
const container = document.querySelector('.container');
container.addEventListener('click', function(e) {
    // console.log(e.target);
    if( e.target.className == 'close') {
        e.target.parentElement.style.display = 'none';
    }

});
// e.preventDefault = untuk menghapus bawaan DOM

// const tUbahWarna = document.getElementById('tUbahWarna');
// tUbahWarna.onclick = function() {
//     document.body.classList.toggle('biru-muda');
// }