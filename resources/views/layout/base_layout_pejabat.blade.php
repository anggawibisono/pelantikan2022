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
    <link rel="stylesheet" href="<?php echo asset('css/baselayout.css')?>" type="text/css"> 
    <script src="https://kit.fontawesome.com/bace4f6563.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="area-header">
            <div class="header-page">
                <img class="logo-poltek" src="https://poltekssn.ac.id/wp-content/uploads/2022/06/cropped-LAMBANG-ORIGINAL-rev-300x300-1.png">
                <div class="text-judul">
                    <div class="judul1">PELANTIKAN</div>
                    <div class="text-tarunapoltek">  
                        <div class="judul2">TARUNA</div>
                        <div class="judul3">POLITEKNIK SIBER DAN SANDI NEGARA</div>
                    </div>
                    <div class="judul4">2022</div>
                </div>
            </div>
        </div>

        @yield('content')

        <div class="bottom-nav">
        
            <div class="navigation">
                <ul>
                    <li class="list">
                        <a href="/invitation/pejabat/{{$data_pejabat->slug}}">
                            <span class="icon">
                                <i class="fa-solid fa-house"></i>
                            </span>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('*undangan*') ? 'active' : ' ' }}">
                        <a href="/invitation_isi/pejabat/{{$data_pejabat->slug}}">

                            <span class="icon">
                                <i class="fa-solid fa-calendar"></i>
                            </span>
                            <span class="text">Undangan</span>
                            <div>
                                <div class="{{ $data_pejabat->konfirmasi_kehadiran=='no' ? 'alert-konfirmasi' : 'hide-alert-konfirmasi' }}">
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="{{ Request::is('*acara*') ? 'active' : ' ' }}">
                        <a href="/invitation_acara/pejabat/{{$data_pejabat->slug}}">
                            <span class="icon">
                                <i class="fa-solid fa-user-group"></i>
                            </span>
                            <span class="text">Acara</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('*gallery*') ? 'active' : ' ' }}">
                        <a href="/invitation_gallery/pejabat/{{$data_pejabat->slug}}">
                            <span class="icon">
                                <i class="fa-solid fa-image"></i>
                            </span>
                            <span class="text">Gallery</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
</body>
</html>