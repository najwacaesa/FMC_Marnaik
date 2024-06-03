<?php
    $navbar = [];
?>

<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-mobile.png" alt="" height="18">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-mobile.png" alt="" height="18"> <span class="logo-txt">FMC</span>
                    </span>
                </a>

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-mobile.png" alt="" height="18">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-mobile.png" alt="" height="18"> <span class="logo-txt">FMC</span>
                    </span>
                </a>
                
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            
        </div>

        <div class="d-flex">
         <!-- Notification -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="bell">3</i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"><?php echo isset($navbar["Notification"]) ? $navbar["Notification"] : "Notification"; ?> </h5>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <?php
                        // Panggil file config.php yang berisi koneksi ke database
                        // Masukkan file konfigurasi database
                        include '../config.php';

                        // Periksa apakah koneksi berhasil dibuat
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Jalankan query SQL
                        $sql = "SELECT * FROM notif ORDER BY date DESC LIMIT 5";
                        $result = $conn->query($sql);

                        
                        if ($result) {
                            // Lakukan sesuatu dengan hasil query
                        } else {
                            echo "Error: " . $conn->error;
                        }
                        
                        // Periksa apakah terdapat notifikasi yang ditemukan
                        if ($result->num_rows > 0) {
                            // Loop through each row to display the notification
                            while($row = $result->fetch_assoc()) {
                                // Tampilkan data notifikasi dalam HTML
                                echo "<a href='' class='text-reset notification-item'>
                                        <div class='d-flex border-bottom align-items-start bg-light'>
                                            <div class='flex-shrink-0'>
                                            <i class='bx bxs-bell-ring' style='font-size:30px; margin-right:1rem; color:FCDC2A;'></i>
                                            </div>
                                            <div class='flex-grow-1'>
                                                <h6 class='mb-1'>Kapal FMC Marnaik</h6>
                                                <div class='text-muted'>
                                                    <p class='mb-1 font-size-13'>" . $row['Bahan_Bakar_Harian'] . "<span class='badge text-success bg-success-subtle'>New</span></p>
                                                    <p class='mb-0 font-size-10 text-uppercase fw-bold'><i class='mdi mdi-clock-outline'></i> " . $row['Date'] . "</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>";
                            }
                        } else {
                            // Jika tidak ada notifikasi yang ditemukan, tampilkan pesan kosong
                            echo "<p>No notifications found.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/fp.png" alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <a class="dropdown-item" href="contacts-profile.php"><i class='bx bx-user-circle text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">My Account</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="auth-logout.php"><i class='bx bx-log-out text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Logout</span></a>
                </div>
            </div>
        </div>
    </div>
</header>