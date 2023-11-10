// const tombol = document.querySelector('button');
// tombol.addEventListener('mouseenter', function() {
//     const body = document.querySelector('body');
//     body.style.backgroundColor = 'lightblue';
// });
// tombol.addEventListener('mouseleave', function() {
//     const body = document.querySelector('body');
//     body.style.backgroundColor = 'white';
// });

const tUbahWarna = document.getElementById('tUbahWarna');
tUbahWarna.onclick = function() {
    document.body.classList.toggle('biru-muda');
}
// tUbahWarna.addEventListener('click', function() {
// });

// tUbahWarna.onclick = function() {
//     // document.body.style.backgroundColor = 'lightblue';
//     document.body.setAttribute('class', 'biru-muda');
// }
// tUbahWarna.onclick = function() {
//     // document.body.style.backgroundColor = 'lightblue';
//     document.body.removeAttribute('class', 'biru-muda');
// }
// const body = document.getElementsByTagName('body')[0];
const tAcakWarna = document.createElement('button');
const teksTombol = document.createTextNode('Acak Warna');
tAcakWarna.appendChild(teksTombol);
tAcakWarna.setAttribute('type', 'button');
tUbahWarna.after(tAcakWarna);

tAcakWarna.addEventListener('click', function() {
    const r = Math.round(Math.random() * 255 + 1);
    const g = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);
    console.log(r);
    document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
}); 

const sMerah = document.querySelector('input[name=sMerah]');
const sBiru = document.querySelector('input[name=sBiru]');
const sHijau = document.querySelector('input[name=sHijau]');
sMerah.addEventListener('input', function() {
    // console.log(sMerah.value);
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;
    document.body.style.backgroundColor = 'rgb('+ r +', '+ g +', '+ b +')'
});
sBiru.addEventListener('input', function() {
    // console.log(sMerah.value);
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;
    document.body.style.backgroundColor = 'rgb('+ r +', '+ g +', '+ b +')';
});

sHijau.addEventListener('input', function() {
    // console.log(sMerah.value);
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;
    document.body.style.backgroundColor = 'rgb('+ r +', '+ g +', '+ b +')';
});

document.body.addEventListener('mousemove', function(event) {
    // posisi mouse
    // console.log(event.clientX);
    // console.log(window.innerWidth);  
    const xPos = Math.round((event.clientX / window.innerWidth) * 255);
    const yPos = Math.round((event.clientY / window.innerHeight) * 255);

    document.body.style.backgroundColor = 'rgb('+ xPos +', '+ yPos +', 100)';
});