<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Vendor</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="menu" tabindex="0">
        <div class="smartphone-menu-trigger"></div>
        <header class="avatar">
            <img src="images/Gas Kita 1 2.png" alt="Logo">
            <h2>Halo, Selamat Datang <span>Admin</span></h2>
        </header>
        <hr>
        <ul>
            <li tabindex="0" class="icon">
                <img src="images/pelangan.png" alt="" class="logo">
                <span>Pelanggan</span>
            </li>
            <li tabindex="0" class="icon-active icon">
                <img src="images/Vendor LPG.png" alt="" class="logo">
                <span>Vendor LPG</span>
            </li>
            <li tabindex="0" class="icon">
                <img src="images/settings.png" alt="" class="logo">
                <span>Vendor Service Kompor</span>
            </li>
            <li tabindex="0" class="icon">
                <img src="images/assessment.png" alt="" class="logo">
                <span>Finansial</span>
            </li>
            <li tabindex="0" class="icon">
                <img src="images/transfer.png" alt="" class="logo">
                <span>Bukti Transfer</span>
            </li>
            <hr>
            <li tabindex="0" class="icon">
                <img src="images/profile.png" alt="" class="logo">
                <span>Profil</span>
            </li>
            <li tabindex="0" class="icon">
                <img src="images/keluar.png" alt="" class="logo">
                <span>Keluar</span>
            </li>
        </ul>
    </nav>

    <main>
        <div class="helper">
            <div class="helper-header">
                <div class="title">
                    Vendor LPG <span>/ Daftar Vendor LPG</span>
                </div>
                <div class="setting">
                    <img src="images/notif.png" alt="" class="notif">
                    <img src="images/pp.png" alt="" class="profile">
                </div>
            </div>
        </div>
        <div class="content">
            <h1>Daftar Vendor LPG</h1>
            <div class="tabs">
                <button onclick="openCity('Menunggu')">Menunggu</button>
                <button onclick="openCity('Ditolak')">Ditolak</button>
                <button onclick="openCity('Terverifikasi')">Terverifikasi</button>
            </div>

            <div id="Menunggu" class="container vendor">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NAMA TOKO</th>
                            <th>NO. HP</th>
                            <th>TANGGAL BERGABUNG</th>
                            <th>DETAIL</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tokoName">
                                <img src="images/pp.png" alt="" class="picture">
                                <p>Michael John</p>
                            </td>
                            <td>+62 822-9991-2313</td>
                            <td>23/04/2020</td>
                            <td><img src="images/detail.png" alt=""></td>
                            <td>
                                <select name="" id="" class="verification">
                                    <option value="" class="option">Dropdown</option>
                                    <option value="" class="option">Terima</option>
                                    <option value="" class="option">Tolak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="tokoName">
                                <img src="images/pp.png" alt="" class="picture">
                                <p>Michael John</p>
                            </td>
                            <td>+62 822-9991-2313</td>
                            <td>23/04/2020</td>
                            <td><img src="images/detail.png" alt=""></td>
                            <td>
                                <select name="" id="" class="verification">
                                    <option value="" class="option">Dropdown</option>
                                    <option value="" class="option">Terima</option>
                                    <option value="" class="option">Tolak</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="Ditolak" class="container vendor" style="display:none">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NAMA TOKO</th>
                            <th>NO. HP</th>
                            <th>TANGGAL BERGABUNG</th>
                            <th>SALDO (Rp)</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tokoName">
                                <img src="images/pp.png" alt="" class="picture">
                                <p>Michael John</p>
                            </td>
                            <td>+62 822-9991-2313</td>
                            <td>23/04/2020</td>
                            <td>2.000.000</td>
                            <td>
                                <select name="" id="" class="verification">
                                    <option value="" class="option">Dropdown</option>
                                    <option value="" class="option">Profil Toko</option>
                                    <option value="" class="option">Saldo</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="tokoName">
                                <img src="images/pp.png" alt="" class="picture">
                                <p>Michael John</p>
                            </td>
                            <td>+62 822-9991-2313</td>
                            <td>23/04/2020</td>
                            <td>2.000.000</td>
                            <td>
                                <select name="" id="" class="verification">
                                    <option value="" class="option">Dropdown</option>
                                    <option value="" class="option">Profil Toko</option>
                                    <option value="" class="option">Saldo</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="Terverifikasi" class="container vendor" style="display:none">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NAMA TOKO</th>
                            <th>NO. HP</th>
                            <th>TANGGAL BERGABUNG</th>
                            <th>SALDO (Rp)</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tokoName">
                                <img src="images/pp.png" alt="" class="picture">
                                <p>Michael John</p>
                            </td>
                            <td>+62 822-9991-2313</td>
                            <td>23/04/2020</td>
                            <td>2.000.000</td>
                            <td>
                                <select name="" id="" class="verification">
                                    <option value="" class="option">Dropdown</option>
                                    <option value="" class="option">Profil Toko</option>
                                    <option value="" class="option">Saldo</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="tokoName">
                                <img src="images/pp.png" alt="" class="picture">
                                <p>Michael John</p>
                            </td>
                            <td>+62 822-9991-2313</td>
                            <td>23/04/2020</td>
                            <td>2.000.000</td>
                            <td>
                                <select name="" id="" class="verification">
                                    <option value="" class="option">Dropdown</option>
                                    <option value="" class="option">Profil Toko</option>
                                    <option value="" class="option">Saldo</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- <script>
                function openCity(status) {
                    var i;
                    var x = document.getElementsByClassName("vendor");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    document.getElementById(status).style.display = "block";
                }
            </script> --}}
        </div>
    </main>

</body>
</html>