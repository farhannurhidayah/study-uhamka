// ambil elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');
// document.getElementsByTagName


// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    // value mengambil nilai
    // console.log(keyword.value);

    // buat objek ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            // console.log(xhr.responseText);
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    // xhr.open('GET', 'ajax/coba.txt', true );
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();
});
