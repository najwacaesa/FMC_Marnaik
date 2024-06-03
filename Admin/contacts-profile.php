<?php
// Masukkan file session
include 'layouts/session.php';
// Masukkan file konfigurasi database
include '../config.php';

// Ambil nilai admin_id dari sesi
$adminId = $_SESSION['user']['id'];

// Variabel untuk menampung data pengguna
$username = '';
$profilePicture = '';
$role = '';
$about = '';

// Gunakan prepared statement untuk query
$sql = "SELECT * FROM user WHERE id = ?";
$stmt = $conn->prepare($sql);

// Periksa apakah prepared statement berhasil dibuat
if (!$stmt) {
    die('Query preparation failed: ' . $conn->error);
}

// Bind parameter ke prepared statement
$stmt->bind_param("i", $adminId);

// Jalankan prepared statement
$stmt->execute();

// Dapatkan hasil dari query
$result = $stmt->get_result();

// Periksa apakah query berhasil dieksekusi dan ada hasilnya
if ($result->num_rows > 0) {
    // Ambil data pengguna
    $adminData = $result->fetch_assoc();

    // Assign nilai dari database ke variabel
    $username = isset($adminData['username']) ? $adminData['username'] : 'N/A';
    $profilePicture = isset($adminData['profile_picture']) ? $adminData['profile_picture'] : '';
    $role = isset($adminData['peran']) ? $adminData['peran'] : 'N/A';
    $about = isset($adminData['about_me']) ? $adminData['about_me'] : 'No information available.';
    $gender = isset($adminData['gender']) ? $adminData['gender'] : 'No information available.';
    $tanggal_lahir = isset($adminData['tanggal_lahir']) ? $adminData['tanggal_lahir'] : 'No information available.';
    $alamat = isset($adminData['alamat']) ? $adminData['alamat'] : 'No information available.';
} else {
    // Tampilkan pesan jika tidak ada data pengguna ditemukan
    echo "No user found with the provided ID.";
}

// Tutup prepared statement
$stmt->close();

// Tutup koneksi database
$conn->close();
// var_dump($username);
// var_dump($role);
// var_dump($profilePicture);
// var_dump($gender);
// var_dump($tanggal_lahir);
// var_dump($about);exit
?>
<?php
    $navbar = [];
?>


<head>

    <title><?php echo isset($navbar["Profil"]) ? $navbar["Profil"] : "Profile"; ?> | FMC - Dashboard</title>

    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

    </head>

    <?php include 'layouts/body.php'; ?>

<div id="layout-wrapper">
    <?php include 'layouts/menu.php'; ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <?php
                $maintitle = "Admin";
                $title = 'Profile';
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>

                <div class="row mb-4">
                    <div class="col-xl-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">User Profile Information</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username:</label>
                                            <input type="text" class="form-control" id="username" value="<?php echo $username; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="role">Role:</label>
                                            <input type="text" class="form-control" id="role" value="<?php echo $role; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">Deskripsi:</label>
                                            <textarea class="form-control" id="about" rows="4" readonly><?php echo $about; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir:</label>
                                            <input type="text" class="form-control" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat:</label>
                                            <textarea class="form-control" id="alamat" rows="3" readonly><?php echo $alamat; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="profile-user"></div>
                            <div class="card-body">
                                <div class="profile-content text-center">
                                    <div class="profile-user-img">
                                        <img src="upload/<?php echo $profilePicture; ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                    </div>
                                    <h5 class="mt-3 mb-1"><?php echo $username; ?></h5>
                                    <p class="text-muted"><?php echo $role; ?></p>
                                    <p class="text-muted mb-1"><?php echo $about; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'layouts/footer.php'; ?>
    </div>
</div>

<?php include 'layouts/right-sidebar.php'; ?>
<?php include 'layouts/vendor-scripts.php'; ?>
<script src="assets/js/app.js"></script>
</body>
</html>