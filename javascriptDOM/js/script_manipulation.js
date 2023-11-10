// // Manipulasi Elemen


// Element.innerHTML
// // Element.Style<property>
// // Element.setAttribute()
// // Element.getAttribute()
// // Element.removeAttribute()
// // Element.classList
// //  ================.add() nambah class
// //  ================.remove() menghapus class
// //  ================.toggle() menghapus class jika sudah ada/ menambahkan jika belum ada
// //  ================.item() ambil class sesuai index
// //  ================.contains() ambil class boolean
// //  ================.replace() mengubah class
// document.createElement()
// document.createTextNode()
// node.appendChild()
// node.insertBefore()
// parentNode.removeChild()
// parentNode.replaceChild()

// NOde BAru
// parentNode.append()
// parentNode.prepend()
// childNode.before()
// childNode.after()
// childNode.remove()
// childNode.replaceWith()

// // Element.innerHTML
// const id = document.getElementById('judul');
// id.innerHTML = 'Farhan';


// // Element.Style<property>
// const i = document.querySelector('#judul');
// i.style.backgroundColor = 'red';


// // Element.setAttribute()
// // Element.getAttribute()
// // Element.removeAttribute()
// const req = document.getElementsByTagName('h1')[0];
// req.setAttribute('class','farhan');

// // Element.classList
// //  ================.add()
// //  ================.remove() menghapus class
// //  ================.toggle() menghapus class jika sudah ada/ menambahkan jika belum ada
// //  ================.item() ambil class sesuai index
// //  ================.contains() ambil class boolean
// //  ================.replace() mengubah class
// const p2 = document.querySelector('.p2');



// Manipulasi Node
// document.createElement()
// element baru
// document.createElement()
const pBaru = document.createElement('p');
// document.createTextNode()
const teksPBaru = document.createTextNode('Paragraf Baru');

// simpan tulisan ke dalam paragraf
// node.appendChild()
pBaru.appendChild(teksPBaru);

// simpan pBAru di akhir section A
const sectionA = document.getElementById('a');
sectionA.appendChild(pBaru);


// node.insertBefore()
const liBaru = document.createElement('li');
const baruTulis = document.createTextNode('ini Item Baru');

// taru wadah
liBaru.appendChild(baruTulis);

// letak wadah
const sectionB = document.querySelector('section#b ul');
const li2 = sectionB.querySelector('li:nth-child(2)');
sectionB.insertBefore(liBaru, li2); //(wadahnya, letaknya)

// parentNode.removeChild()
const lini = document.getElementsByTagName('a')[0];
sectionA.removeChild(lini);

// parentNode.replaceChild()
const sectionC = document.getElementById('b');
const p4 = sectionC.querySelector('p');

const h2Baru = document.createElement('h2');
const teksH2Baru = document.createTextNode('Judul baru!');

h2Baru.appendChild(teksH2Baru);
sectionC.replaceChild(h2Baru, p4); //node baru , node lama

h2Baru.style.backgroundColor = 'lightgreen';
pBaru.style.backgroundColor = 'lightgreen';
liBaru.style.backgroundColor = 'lightgreen';

