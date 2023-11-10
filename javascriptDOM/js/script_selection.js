// // console.log(document);
// // DOM Selection
// // getElementById() -> element
// const judul = document.getElementById('judul');
// judul.style.color = 'red';
// judul.style.backgroundColor = 'grey';
// judul.innerHTML = 'Farhan Nurhidayah';

// // getElementByTagName() -> HTMLCollection = array
// const p = document.getElementsByTagName('p');
// for(let i = 0; i < p.length; i++) {
//     p[i].style.backgroundColor = 'lightblue';
// }

// const h1 = document.getElementsByTagName('h1')[0];
// h1.style.fontSize = '50px';

// // getElemenyByClassName() -> HTMLCollection
// const p1 = document.getElementsByClassName('p1');
// p1[0].innerHTML = 'INi diubah dari javascript';

// getElementsByName
// const coba = document.getElementsByName('');

// document.querySelector() -> element
// const qiu = document.querySelector('#b p ');
// qiu.style.color = 'green';
// qiu.style.fontSize = '20px';

// const li2 = document.querySelector('section#b ul li:nth-child(2)');
// li2.style.backgroundColor = 'red';

// document.querySelectorAll
const all = document.querySelectorAll('p');
for(let i = 0; i < all.length; i++){
    all[i].style.backgroundColor = 'lightblue';
}

// // Mengubah Node Root
// const sectionB = document.querySelector('section#b');
// const p4 =  sectionB.getElementsByTagName('p')[0];
// p4.style.backgroundColor = 'red';

// const h1 = document.getElementsByTagName('p');
// for(let i = 0; i < h1.length; i++){
//     h1[i].style.backgroundColor = 'green';
// }
// h1[0].style.fontSize = '20px';

// const h = document.getElementById('p');
// h.style.fontSize = '50px';



