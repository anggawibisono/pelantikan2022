<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bace4f6563.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/home.css')?>" type="text/css"> 
</head>
<body>

    <div class="header">
            <img class="logo-poltek" src="https://poltekssn.ac.id/wp-content/uploads/2022/06/cropped-LAMBANG-ORIGINAL-rev-300x300-1.png">
            <div class="judul1">PELANTIKAN</div>
            <div class="judul2">TARUNA</div>
            <div class="judul3">POLITEKNIK SIBER DAN SANDI NEGARA</div>
            <div class="judul4">2022</div>
        </div>

        <div class="opening">
            <div class="text-kepada">
                Kepada
            </div>
            <div class="area-kepada">
                <div class="text-bapak-ibu">Bapak/Ibu</div>
                <div class="text-nama-ortu">{{$data_taruna->nama_ayah}}</div>
            </div>
             <div class="text-orangtuadari">
                Orang Tua dari
            </div>
            <div class="area-orangtuadari">
                <div class="text-nama-taruna">{{$data_taruna->nama_taruna}}</div>
            </div>
        </div>

        <div class="area-image">
             <div class="image-bottom">
                <div class="image-left">
                    <img class="image-safi" src="/images/safi.png"/>
                </div>
                <div class="image-right">
                    <img class="image-agung" src="/images/agung.png"/>
                </div>
                
                
            </div>
        </div>

        <div class="area-button-buka-undangan">
             <div class="button-buka-undangan">
                <a class="text-button-buka-undangan" href="/taruna/undangan/{{$data_taruna->slug}}">BUKA UNDANGAN</a>
            </div>
        </div>
        
</body>
</html>