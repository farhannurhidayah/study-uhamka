<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="jquery-3.7.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#submit").click(function(){
                var nama = $("#nama").val();
                var phone = $("#phone").val();
                var email = $("#email").val();
                var ttl = $("#ttl").val();
                var kelamin = document.querySelector('input[name="kelamin"]:checked').value;
                var pendidikan = $("#pendidikan").val();

            if (document.getElementById("html").checked == true){
                var html=1;
            } else var html=0;

            if (document.getElementById("css").checked == true){
                var css=1;
            } else var css=0;

            if (document.getElementById("js").checked == true){
                var js=1;
            } else var js=0;

            if (document.getElementById("PHP").checked == true){
                var PHP=1;
            } else var PHP=0;

            $.ajax({
                type: 'POST',
                url: "back.php",
                data: {
                    submit: true,
                    nama:nama,
                    phone:phone,
                    email:email,
                    ttl:ttl,
                    kelamin:kelamin,
                    html:html,
                    css:css,
                    js:js,
                    PHP:PHP,
                    pendidikan:pendidikan
                    },
                success: function(hasil) {
                    $('#hasil').html(hasil);
                }
                });
                });
                });

    </script>
    <title>daftar coding</title>
</head>
<body style="background-image: url(background\ biru.jpg); color:azure">
    
        <h1><span class="badge bg-secondary">Pendaftaran Pemrograman Web</span></h1>
    
        <table class="text-white">
            <tr><td>Nama:</td><td><input type="text" id="nama" name="nama" required placeholder="Nama Panggilan" class="form-control form-control-sm" style="width: 200px;"></td></tr>
            <tr><td>Nomor Telepon:</td><td><input type="text" id="phone" name="phone" pattern="[0-9]{12}" class="form-control form-control-sm" style="width: 200px;"></td></tr>
            <tr><td>Email:</td><td><input type="email" id="email" name="email" class="form-control form-control-sm" style="width: 200px;"></td></tr>
            <tr><td>Tanggal Lahir:</td><td><input type="date" id="ttl" name="ttl"></td></tr>
            
            <tr>
                <td>Jenis Kelamin:</td>
                <td>
                <input type="radio" id="cowok" name="kelamin" value="laki-laki" class="form-check-input">
                <label for="cowok" class="form-check-label">Laki-Laki</label>
                <input type="radio" id="cewek" name="kelamin" value="perempuan" class="form-check-input">
                <label for="cewek" class="form-check-label">Perempuan</label>
                </td>
            </tr>

            <tr>
                <td>Les yang ingin diikuti:</td>
                <td>
                <input type="checkbox" id="html" name="html" value="html" class="form-check-input">
                <label for="html" class="form-check-label">html</label>
                <input type="checkbox" id="css" name="css" value="css" class="form-check-input">
                <label for="css" class="form-check-label">css</label>
                <input type="checkbox" id="js" name="js" value="javascript" class="form-check-input">
                <label for="javascript" class="form-check-label">javascript</label>
                <input type="checkbox" id="PHP" name="PHP" value="PHP" class="form-check-input">
                <label for="PHP" class="form-check-label">PHP</label>
                </td>
            </tr>

            <tr>
                <td>Level</td>
                <td>
                <select name="pendidikan" id="pendidikan" style="width: 150px;" class="form-select">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
                </td>
            </tr>

            <tr>
                <td>Upload CV</td>
                <td><input type="file" name="CV"></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Komentar dan Saran</td>
                <td><textarea name="komentar" id="komentar" cols="100" rows="8"></textarea></td>
            </tr>

        </table>
        <button type="button" id="submit" name="submit" class="btn btn-success btn-lg" style="width: 200px; margin-left: 153px;">Kirim query</button>
        

        <div id="hasil">
            
        </div>
        
    
</body>
</html>