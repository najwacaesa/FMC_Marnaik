
<?php
    $navbar = [];
?>

<head>

    <title><?php echo isset($navbar["Tips_Trick"]) ? $navbar["Tips_Trick"] : "Tips & Trick"; ?> | FMC - Dashboard</title>

    <?php include '../FMC/layout/head.php'; ?>

    <?php include '../FMC/layout/head-style.php'; ?>


    </head>

    <?php include '../FMC/layout/body.php'; ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include '../FMC/layout/menu.php'; ?>
            
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                         <!-- start page title -->
                         <?php
                            $maintitle = "Tips & Trick";
                            $title = '';
                        ?>
                        <?php include '../FMC/layout/breadcrumb.php'; ?>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" style="width: 100%; border-radius: 50px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1)">
                                    <img src="../FMC/assets/images/tipss.png" class="card-img-top" alt="..." style="border-radius: 50px;">
                                    <div class="card-body" style="margin-inline: 2rem; margin-bottom:4rem;">
                                        <h5 class="card-title" style="font-size: 2rem; margin-bottom:3rem; margin-top:3rem;">TIPS</h5>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px; margin-left:1rem; margin-bottom:1rem;"><span style="font-weight: 700;">Rencanakan Rute dengan Cermat: </span>  Sebelum berlayar, perencanakan rute perjalanan dengan cermat untuk menghindari jalur yang panjang atau berbelok-belok yang dapat meningkatkan konsumsi bahan bakar.</p>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px; margin-left:1rem; margin-bottom:1rem;"> <span style="font-weight: 700;">Pantau Kondisi Cuaca: </span> Selalu pantau kondisi cuaca sebelum berlayar dan selama perjalanan. Hindari berlayar dalam kondisi cuaca buruk yang dapat memperburuk efisiensi perjalanan dan meningkatkan konsumsi bahan bakar.</p>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px; margin-left:1rem; margin-bottom:1rem;"><span style="font-weight: 700;">Atur Kecepatan Secara Bijak: </span> Atur kecepatan kapal secara bijak sesuai dengan kondisi cuaca, arus laut, dan beban kapal. Berlayar dengan kecepatan yang konsisten dan efisien dapat membantu mengurangi konsumsi bahan bakar.</p>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px; margin-left:1rem; margin-bottom:1rem;"><span style="font-weight: 700;">Gunakan Teknik Mengemudi Efisien: </span> Terapkan teknik mengemudi yang efisien, seperti memanfaatkan arus laut yang menguntungkan dan menghindari manuver yang tidak perlu atau tiba-tiba yang dapat meningkatkan konsumsi bahan bakar.</p>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px; margin-left:1rem; margin-bottom:1rem;"><span style="font-weight: 700;">Lakukan Pemeliharaan Rutin: </span> Jadwalkan pemeliharaan rutin mesin dan peralatan kapal secara teratur untuk memastikan kinerja yang optimal. Pemeliharaan yang baik dapat membantu mencegah kerusakan mesin dan mengurangi konsumsi bahan bakar yang tidak efisien.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="col-lg-6">
                                <div class="card" style="width: 100%; border-radius: 50px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1)">
                                    <img src="../FMC/assets/images/trickk.png" class="card-img-top" alt="..." style="border-radius: 50px;">
                                    <div class="card-body" style="margin-inline: 2rem; margin-bottom:2rem;">
                                        <h5 class="card-title" style="font-size: 2rem; margin-bottom:3rem; margin-top:3rem;">TRICK</h5>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px; margin-left:1rem; margin-bottom:1rem;"><span style="font-weight: 700;">Gunakan Sistem Navigasi yang Canggih: </span> Manfaatkan teknologi sistem navigasi yang canggih untuk memilih rute terpendek dan menghindari rintangan yang dapat memperlambat perjalanan. Ini dapat membantu menghemat waktu dan bahan bakar.</p>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px; margin-left:1rem; margin-bottom:1rem;"><span style="font-weight: 700;">Pertimbangkan Penggunaan Layar dan Layanan Tambahan: </span> Pertimbangkan penggunaan layar dan layanan tambahan, seperti layar khusus anti-fouling, untuk mengurangi gesekan dengan air dan meningkatkan efisiensi perjalanan kapal.</p>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px; margin-left:1rem; margin-bottom:1rem;"><span style="font-weight: 700;">Monitoring Konsumsi Bahan Bakar secara Real-Time: </span> Gunakan sistem pemantauan konsumsi bahan bakar secara real-time untuk melacak dan mengoptimalkan penggunaan bahan bakar selama perjalanan. Hal ini memungkinkan Anda untuk menyesuaikan strategi navigasi dan penggunaan mesin sesuai kebutuhan.</p>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px;margin-left:1rem; margin-bottom:1rem;"><span style="font-weight: 700;">Pilih Peralatan Yang Efisien: </span> Pilih peralatan dan sistem mesin yang efisien dan ramah lingkungan untuk kapal Anda. Investasikan dalam teknologi terbaru yang dapat membantu mengurangi konsumsi bahan bakar dan meningkatkan efisiensi operasional.</p>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class='bx bxs-bulb' style="font-size: 30px; color:#FFC700; margin-right:1rem; flex-shrink: 0;"></i>
                                            <p class="card-text" style="font-size: 18px; margin-left:1rem; margin-bottom:1rem;"><span style="font-weight: 700;">Evaluasi Kinerja Secara Berkala: </span> Lakukan evaluasi kinerja kapal secara berkala berdasarkan data konsumsi bahan bakar dan efisiensi perjalanan. Identifikasi area-area di mana efisiensi dapat ditingkatkan dan terapkan langkah-langkah perbaikan yang sesuai untuk mengoptimalkan penggunaan bahan bakar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            <?php include '../FMC/layout/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include '../FMC/layout/vendor-scripts.php'; ?>

        <script src="assets/js/app.js"></script>

    </body>
</html>