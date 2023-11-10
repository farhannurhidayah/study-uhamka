function getPilihanComputer() {
const comp = Math.random();

if(comp < 0.20) return "gajah";
if (comp >= 0.20 && comp > 0.67) return 'orang';
return 'semut';
};

function getHasil(comp, player) {
    if(player == comp) return 'SERI!';
    if(player == 'gajah') return (comp == 'orang') ? 'MENANG!' : 'KALAH!';
    if(player == 'orang') return (comp == 'gajah') ? 'KALAH!' : 'MENANG!';
    if(player == 'semut') return (comp == 'orang') ? 'KALAH!' : 'MENANG!';   
};

function putar() {
    const imgComputer = document.querySelector('.img-komputer');
    const gambar = ['gajah', 'semut','orang'];
    let i = 0;
    const waktuMulai = new Date().getTime();
    setInterval(function() {
        if( new Date().getTime() - waktuMulai > 1000){
            clearInterval;
            return;
        }
        imgComputer.setAttribute('src', 'img/' + gambar[i++] + '.png' )
        if(i == gambar.length) i = 0;
    }, 100);
}


const pilihan = document.querySelectorAll('li img');
pilihan.forEach(function(cho) {
    cho.addEventListener('click', function() {
        const pilihanComputer = getPilihanComputer();
        const pilihanPlayer = cho.className;
        const hasil = getHasil(pilihanComputer, pilihanPlayer);
        putar();
        setTimeout(function() {
            const imgComputer = document.querySelector('.img-komputer');
            imgComputer.setAttribute('src','img/' + pilihanComputer + '.png');
            
            const info = document.querySelector('.info');
            info.innerHTML = hasil;
            
        }, 1000);
        // console.log('Comp :' + pilihanComputer);
        // console.log('Player :' + pilihanPlayer);
        // console.log('Hasil :' + hasil);
    })
})






// const Gajah = document.querySelector('.gajah');
// Gajah.addEventListener('click', function() {
//     const pilihanComputer = getPilihanComputer();
//     const pilihanPlayer = Gajah.className;
//     const hasil = getHasil(pilihanComputer, pilihanPlayer);
//     // console.log('Comp :' + pilihanComputer);
//     // console.log('Player :' + pilihanPlayer);
//     // console.log('Hasil :' + hasil);
//     const imgComputer = document.querySelector('.img-komputer');
//     imgComputer.setAttribute('src','img/' + pilihanComputer + '.png');
    
//     const info = document.querySelector('.info');
//     info.innerHTML = hasil;
// });
// const Orang = document.querySelector('.orang');
// Orang.addEventListener('click', function() {
//     const pilihanComputer = getPilihanComputer();
//     const pilihanPlayer = Orang.className;
//     const hasil = getHasil(pilihanComputer, pilihanPlayer);
//     // console.log('Comp :' + pilihanComputer);
//     // console.log('Player :' + pilihanPlayer);
//     // console.log('Hasil :' + hasil);
//     const imgComputer = document.querySelector('.img-komputer');
//     imgComputer.setAttribute('src','img/' + pilihanComputer + '.png');

//     const info = document.querySelector('.info');
//     info.innerHTML = hasil;
// });
// const Semut = document.querySelector('.semut');
// Semut.addEventListener('click', function() {
//     const pilihanComputer = getPilihanComputer();
//     const pilihanPlayer = Semut.className;
//     const hasil = getHasil(pilihanComputer, pilihanPlayer);
//     // console.log('Comp :' + pilihanComputer);
//     // console.log('Player :' + pilihanPlayer);
//     // console.log('Hasil :' + hasil);
//     const imgComputer = document.querySelector('.img-komputer');
//     imgComputer.setAttribute('src','img/' + pilihanComputer + '.png');

//     const info = document.querySelector('.info');
//     info.innerHTML = hasil;
// });
