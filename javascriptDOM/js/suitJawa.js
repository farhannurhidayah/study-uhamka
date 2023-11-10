var tanya = true;
while(tanya){
    
var p = prompt('Silahkan pilih : gajah, semut, orang');
var comp = Math.random();

if(comp < 0.20) {
    comp = "gajah";
} else if (comp >= 0.20 && comp > 0.67) {
    comp = 'orang';
}else {
    comp = 'semut';
}
console.log(comp);


var hasil = '' ;
if( p == comp) {
    hasil = 'SERI!';
} else if(p == 'gajah') {
    hasil = (comp == 'orang') ? 'MENANG!' : 'KALAH!';
    // if(comp == 'orang'){
    //     hasil = 'MENANG!';
    // }else {
    //     hasil = 'KALAH!';
    // }
} else if(p == 'orang') {
    hasil = (comp == 'gajah') ? 'KALAH!' : 'MENANG!';
    // if(comp == 'gajah'){
        //     hasil = 'KALAH!';
    // }else {
    //     hasil = 'MENANG!';
    // }
} else if(p == 'semut') {
    hasil = (comp == 'orang') ? 'KALAH!' : 'MENANG!';   
}else {
    hasil = 'Memasukan pilihan yang salah'; 
}

alert('Kamu memilih : '+ p +' dan Komputer memilih : '+ comp +'\nMAka hasilnya : Kamu '+ hasil );

tanya = confirm('lagi?');

}

alert('Terima Kasih Sudah Bermain')