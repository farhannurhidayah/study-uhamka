$(document).ready(function() { // ketika dokumen siapp maka jalankan program ini
    $('#tombol-cari').hide(); // menghilangkan tag
    // var keyword = document.getElementById('keyword');
    // keyword.addEventListener('keyup', function() {
    //     console.log('Ok');
    // });

    // event ketika keyword ditulus
    $('#keyword').on('keyup', function() {
        // munculkan icon loading
        $('#loader').show();
        //     $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
        //     // fungsi load hanya menjalakan get
        
        
        // 
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {
            $('#container').html(data);
            $('#loader').hide();
        
    });
    
});

});