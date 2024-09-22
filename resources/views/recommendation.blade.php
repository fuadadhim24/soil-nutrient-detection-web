<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soil Nutrion - Soil Nutrient Detection</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="./assets/compiled/css/app-dark.css"> --}}
    <link rel="stylesheet" href="{{ asset('compiled/css/iconly.css') }}">
</head>

<body>
    <script src="{{ asset('static/js/initTheme.js') }}"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column align-items-start mt-2 gap-2">
                            <h2 class="fw-bold">Tani.</h2>
                            <h6 class="text-subtitletext-muted fw-normal ">Polije Research 2024</h6>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item active ">
                            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>


                        </li>
                        <div class="card mt-11" style="background-color: #0EB47B;">
                            <div class="card-body py-5 px-2">
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <div class="ms-3 name align-items-center">
                                            <h6 class="text-white fw-normal mb-0">Dihimbau, memantau aktivitas sawah
                                                anda secara berkala!</h6>
                                            <button type="button" class="btn btn-light-secondary mt-1"
                                                style="font-size: 0.75rem !important;">
                                                Tambah Sawah
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                                        <div class="avatar avatar-xl">
                                            <img src="{{ asset('assets/admin/Field.png') }}" alt="Face 1"
                                                class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <li class="sidebar-item">
                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class='sidebar-link'>
                                <i class="bi bi-door-open"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Halaman Rekomendasi</h3>
                            <p class="text-subtitle text-muted">Sawah A</p>
                        </div>
                        <div class="col-12 col-md-3 order-md-2 order-first">
                            <div class="card">
                                <div class="card-body py-3 px-4">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="col-md-4 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-start ">
                                            <div class="stats-icon red mb-2">
                                                <i class="iconly-boldArrow---Left-2"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold">Ganti Sawah</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 order-md-3 order-first">
                            <div class="card">
                                <div class="card-body py-3 px-4">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="col-md-4 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-start ">
                                            <div class="stats-icon blue mb-2">
                                                <i class="iconly-boldCalendar"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold">Periode</h5>
                                            <h6 class="text-muted mb-0 fw-normal">17 April 2020 - 21 May 2020</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <h3>Dashboard</h3>
    <!-- <p class="text-subtitle text-muted">Hi, Serayanti. Selamat datang kembali di Tani Admin!</p> -->
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card mb-4 pb-3">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title mb-0">Informasi Sawah</h5>
                                        </div>
                                        <div class="col text-end">
                                            <a href="#" class="btn btn-outline-warning">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Nama Sawah: Sawah A</li>
                                        <li class="list-group-item">Lokasi: Jl. Mastrip, Kerajan Timur, Sumbersari</li>
                                        <li class="list-group-item">Tahap Fase: Fase Penanaman</li>
                                        <li class="list-group-item">Visibilitas: Ditampilkan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-body px-4">
                                    {{-- <h1><span class="badge bg-secondary">New</span></h1> --}}
                                    <div class="d-block mt-3 text-center"
                                        style="background-color: #d9f3ea; padding: 15px;">
                                        <h5 style="color: #198754; font-weight: 400">S T A T U S</h5>
                                    </div>
                                    <div class="d-flex justify-content-evenly mt-3">
                                        <div>Kadar:</div>
                                        <div>
                                            N = 2000 mg/kg<br>P = 1300 mg/kg<br>K = 1500 mg/kg
                                        </div>
                                    </div>
                                    <div class="d-block text-center mt-4">
                                        <h6 class="mb-0">Curah Hujan = Tinggi</h6>
                                    </div>
                                    <div class="d-block text-center mt-4">
                                        <h6 class="text-muted mb-0" style="font-weight: 400">Update terakhir
                                            19/03/2024 <span class="font-bold">19.05 WIB</span>
                                        </h6>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Lihat Lokasi</h5>
                                </div>
                                <div class="card-body">
                                    <div class="googlemaps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.6091242787!2d107.57311654129782!3d-6.903273917028756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1633023222539!5m2!1sen!2sid"
                                            width="100%" height="180" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card mb-4 pb-3">
                                <div class="card-header">
                                    <div class="col">
                                        <h5 class="card-title mb-0">Monitoring Tanah</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-block text-center px-4"
                                        style="background-color: #ff7979; padding: 40px 0; border-radius: 10px">
                                        <h4 style="color: white">Tanah kering segera siram air!</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-body px-4">
                                    {{-- <h1><span class="badge bg-secondary">New</span></h1> --}}
                                    <div class="d-block text-center">
                                        <h5 class="text-muted" style="font-weight: 400">Sumbersari, Jember </h5>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="mt-2"
                                            style="width: 50px; height: 50px; background-color: #FADA3D; border-radius: 50%;">
                                        </div>
                                    </div>

                                    <div class="d-block text-center mt-2">
                                        <h1 class="mb-0" style="color: black">46°</h1>
                                    </div>
                                    <div class="d-block text-center mt-0">
                                        <h6 class="mb-0">Terang Benderang</h6>
                                    </div>
                                    <div class="d-block text-center mt-2">
                                        <h6 class="text-muted mb-0" style="font-weight: 400">Update terakhir
                                            19/03/2024 <span class="font-bold">19.05 WIB</span>
                                        </h6>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">Tanaman Terdaftar</h5>
                                    <a href="#" class="btn btn-outline-success">Tambah</a>
                                </div>

                                <div class="card-body">
                                    <div class="row justify-content-evenly">
                                        <div class="col-auto text-center">
                                            <div
                                                style="width: 50px; height: 50px; background-color: #d9f3ea; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                <img src="{{ asset('assets/admin/beras.png') }}" alt="Image"
                                                    style="width: 30px; height: 30px;">
                                            </div>
                                            <h6 class="mt-2" style="color: black">1</h6>
                                        </div>
                                        <div class="col-auto text-center">
                                            <div
                                                style="width: 50px; height: 50px; background-color: #d9f3ea; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                <img src="{{ asset('assets/admin/jagung.png') }}" alt="Image"
                                                    style="width: 30px; height: 30px;">
                                            </div>
                                            <h6 class="mt-2" style="color: black">2</h6>
                                        </div>
                                        <div class="col-auto text-center">
                                            <div
                                                style="width: 50px; height: 50px; background-color: #d9f3ea; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                <img src="{{ asset('assets/admin/tebu.png') }}" alt="Image"
                                                    style="width: 30px; height: 30px;">
                                            </div>
                                            <h6 class="mt-2" style="color: black">3</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2023 &copy; Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                by <a href="https://saugi.me">Saugi</a></p>
        </div>
    </div>
</footer> -->
            </div>


            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Pengujian Sensor</h3>
                            <p class="text-subtitle text-muted">Suhu, Kelembapan, dan NPK</p>
                        </div>
                    </div>
                    <!-- <h3>Dashboard</h3>
    <!-- <p class="text-subtitle text-muted">Hi, Serayanti. Selamat datang kembali di Tani Admin!</p> -->
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Grafik Suhu</h5>
                                </div>
                                <div class="card-body">
                                    <div class="googlemaps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.6091242787!2d107.57311654129782!3d-6.903273917028756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1633023222539!5m2!1sen!2sid"
                                            width="100%" height="180" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Grafik Kelembaban</h5>
                                </div>
                                <div class="card-body">
                                    <div class="googlemaps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.6091242787!2d107.57311654129782!3d-6.903273917028756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1633023222539!5m2!1sen!2sid"
                                            width="100%" height="180" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Grafik Nitrogen</h5>
                                </div>
                                <div class="card-body">
                                    <div class="googlemaps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.6091242787!2d107.57311654129782!3d-6.903273917028756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1633023222539!5m2!1sen!2sid"
                                            width="100%" height="180" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Grafik Fosfor</h5>
                                </div>
                                <div class="card-body">
                                    <div class="googlemaps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.6091242787!2d107.57311654129782!3d-6.903273917028756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1633023222539!5m2!1sen!2sid"
                                            width="100%" height="180" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Grafik Kalium</h5>
                                </div>
                                <div class="card-body">
                                    <div class="googlemaps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.6091242787!2d107.57311654129782!3d-6.903273917028756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1633023222539!5m2!1sen!2sid"
                                            width="100%" height="180" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2023 &copy; Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                by <a href="https://saugi.me">Saugi</a></p>
        </div>
    </div>
</footer> -->
            </div>
        </div>
        {{-- <script src="assets/static/js/components/dark.js"></script> --}}
        <script src="{{ asset('extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


        <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
