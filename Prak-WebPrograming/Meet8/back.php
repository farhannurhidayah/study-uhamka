<?php
            if (isset($_POST['submit'])){
            echo "Profil Pendaftar: ";
            $nama=$_POST['nama'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $ttl=$_POST['ttl'];
            $kelamin=$_POST['kelamin'];
            $pendidikan=$_POST['pendidikan'];

            //pembuatan algoritma checkbox
            $a=-1;
            $les=array();
            if ($_POST['html']==1){
                array_push($les,"html");
                $a=$a+1;
            }

            if ($_POST['css']==1){
                array_push($les,"css");
                $a=$a+1;
            }
            if ($_POST['js']==1){
                array_push($les,"javascript");
                $a=$a+1;
            }
            if ($_POST['PHP']==1){
                array_push($les,"PHP");
                $a=$a+1;
            }

            //perhitungan biaya
            if ($pendidikan=="Beginner") {
                $biayakursus=($a+1)*500000;
            }
            else if ($pendidikan=="Intermediate"){
                $biayakursus=($a+1)*1000000;
            }
            else $biayakursus=($a+1)*1500000;

            echo "
            <table class='table'>
                <tr><td>Nama Pendaftar</td><td>: $nama</td></tr>
                <tr><td>Nomor Telepon</td><td>: $phone</td></tr>
                <tr><td>Email</td><td>: $email</td></tr>
                <tr><td>Tanggal Lahir</td><td>: $ttl</td></tr>
                <tr><td>Jenis Kelamin</td><td>: $kelamin</td></tr>
                <tr><td>Kursus yang Diikuti</td><td>:";
                if ($a != -1){
                    for ($i = 0; $i <= $a; $i++){
                        echo " $les[$i],";
                    }
                }
                
                


            echo " </td></tr>
                <tr><td>Level yang diambil</td><td>: $pendidikan</td></tr>
                <tr><td>Biaya kursus</td><td>: $biayakursus</td></tr>
            </table>";
            }

            ?>