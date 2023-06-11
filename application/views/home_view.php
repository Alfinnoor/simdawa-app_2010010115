        <style>
            /* Gaya CSS untuk mengatur tampilan elemen marquee */
            .scrolling-text {
                height: 50px;
                /* Tinggi elemen marquee */
                overflow: hidden;
                /* Menghilangkan konten yang keluar dari area yang ditentukan */
                background-color: #efeff6;
                /* Warna latar belakang elemen marquee */
            }

            .scrolling-text h3 {
                animation: marquee 20s linear infinite;
                /* Animasi berjalan selama 10 detik */
            }

            /* Animasi CSS untuk membuat tulisan berjalan */
            @keyframes marquee {
                0% {
                    transform: translateX(100%);
                }

                100% {
                    transform: translateX(-100%);
                }
            }
        </style>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Home </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Halaman Awal</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 scrolling-text">
                        <h3>Selamat Datang Di SIMDAWA-APP || Sistem Informasi Beasiswa</h3>
                    </div>
                </div>
            </div>
        </div>