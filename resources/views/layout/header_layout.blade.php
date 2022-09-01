<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>undangan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylebaselayout.css">
    <link rel="stylesheet" href="<?php echo asset('css/baselayout_header.css')?>" type="text/css"> 
    <script src="https://kit.fontawesome.com/bace4f6563.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="area-header">
            <div class="header-page">
                <!-- <img class="mb-4" src="https://poltekssn.ac.id/wp-content/uploads/2022/06/cropped-LAMBANG-ORIGINAL-rev-300x300-1.png" alt="" width="72" height="72"> -->
                <div class="text-judul">
                    <div class="judul1">PELANTIKAN TARUNA</div>
                    <div class="judul2">POLITEKNIK SIBER DAN SANDI NEGARA 2022</div>
                </div>
            </div>
        </div>

        @yield('content')
</body>
</html>