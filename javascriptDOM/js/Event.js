// // Even handler
// // addEventListener

// const ev = document.querySelector('.p3');

// function ubahWarna() {
// ev.style.backgroundColor = 'red';
// }

// const p4 = document.querySelector('section#b p');
// p4.addEventListener('click', function() {
//     const ul = document.querySelector('section#b ul');
//     const liBaru = document.createElement('li');
//     const teksLiBaru = document.createTextNode('itembaru');

//     liBaru.appendChild(teksLiBaru);
//     ul.appendChild(liBaru);

// });

// Daftar Event
// Mouse Event
// Keyboard Event
// Resources Event
// Focus Event
// View Event
// Form Event
// CSS Animation & Transition Evet
// Drag & Drop Event

// Mouse Event
// click
// • dblciick
// • mouseover
// • mouseenter
// • mouseup
// • wheel

 const p3 = document.querySelector('.p3');

//  p3.onclick = function () {
//      p3.style.backgroundColor = 'lightblue';
//  }
 p3.addEventListener('mouseenter', function() {
    p3.style.backgroundColor = 'red';
    
});
 p3.addEventListener('mouseleave', function() {
    p3.style.backgroundColor = 'white';
    
});