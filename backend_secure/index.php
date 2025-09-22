<?php
// PENYESUAIAN PATH: Naik satu direktori lalu masuk ke backend_secure
// require_once __DIR__ . '/../backend_secure/database_connection.php';

// function generateRegisterId($class_name) {
//     return 'REG-' . date('YmdHis') . '-' . substr(md5($class_name), 0, 6);
// }

// function insertRegistration($data) {
//     global $conn;

//     $register_id = generateRegisterId($data['nama_kelas']);

//     // Query INSERT dengan kolom 'harga_perperson', 'discount_pct', 'net_harga_perperson', 'total_harga'
//     $stmt = $conn->prepare("
//         INSERT INTO RTN_AC_PENDAFTARAN_KELAS
//         (id, Kategori, nama_kelas, nama_lengkap, email, no_whatsapp, jumlah_peserta, pesan_tambahan, type_training, harga_perperson, discount_pct, net_harga_perperson, total_harga)
//         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
//     ");
//     // bind_param dengan variabel untuk semua kolom, termasuk harga
//     $stmt->bind_param(
//         "ssssssissiiii", // Tipe data sesuai dengan kolom yang ada: id, Kategori, nama_kelas, nama_lengkap, email, no_whatsapp, jumlah_peserta (int), pesan_tambahan, type_training, harga_perperson (int), discount_pct (int), net_harga_perperson (int), total_harga (int)
//         $register_id,
//         $data['kategori'],
//         $data['nama_kelas'],
//         $data['nama_lengkap'],
//         $data['email'],
//         $data['whatsapp'],
//         $data['jumlah_peserta'],
//         $data['pesan_tambahan'],
//         $data['type_training'],
//         $data['harga_perperson'],
//         $data['discount_pct'],
//         $data['net_harga_perperson'],
//         $data['total_harga']
//     );

//     return $stmt->execute();
// }

// // Tangkap data
// $data = [
//     'kategori'        => $_POST['kategori'] ?? '',
//     'nama_kelas'      => $_POST['nama_kelas'] ?? '',
//     'nama_lengkap'    => $_POST['nama_lengkap'] ?? '',
//     'email'           => $_POST['email'] ?? '',
//     'whatsapp'        => $_POST['whatsapp'] ?? '',
//     'jumlah_peserta'  => (int) ($_POST['jumlah_peserta'] ?? 1),
//     'pesan_tambahan'  => $_POST['pesan_tambahan'] ?? '',
//     'type_training'   => $_POST['type_training'] ?? '',
//     'harga_perperson' => (int) ($_POST['harga_perperson'] ?? 0),
//     'discount_pct'    => (int) ($_POST['discount_pct'] ?? 0),
//     'net_harga_perperson' => (int) ($_POST['net_harga_perperson'] ?? 0),
//     'total_harga'     => (int) ($_POST['total_harga'] ?? 0)
// ];

// if (insertRegistration($data)) {
//     echo "<script>alert('Pendaftaran berhasil!'); window.location.href = '../';</script>";
// } else {
//     echo "<script>alert('Gagal menyimpan data.'); history.back();</script>";
// }

// Pastikan skrip hanya berjalan jika ada permintaan POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // [START] BLOK VERIFIKASI reCAPTCHA
    $secretKey = '6Ld3Q5QrAAAAADNmHR_KXWM-kl1oQLcREYgoU52L'; // Kunci Rahasia Anda

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        
        $recaptchaToken = $_POST['g-recaptcha-response'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret'   => $secretKey,
            'response' => $recaptchaToken,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $options = ['http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]];

        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $responseData = json_decode($response);

        if ($responseData->success) {
            // --- VERIFIKASI BERHASIL, LANJUTKAN PROSES DATA ---

            // [START] BLOK KODE DATABASE ANDA
            // Pastikan path ini benar sesuai struktur folder Anda
            require_once __DIR__ . '/database_connection.php';

            function generateRegisterId($class_name) {
                return 'REG-' . date('YmdHis') . '-' . substr(md5($class_name), 0, 6);
            }

            function insertRegistration($data) {
                global $conn;
                $register_id = generateRegisterId($data['nama_kelas']);

                $stmt = $conn->prepare("
                    INSERT INTO RTN_AC_PENDAFTARAN_KELAS
                    (id, Kategori, nama_kelas, nama_lengkap, email, no_whatsapp, jumlah_peserta, pesan_tambahan, type_training, harga_perperson, discount_pct, net_harga_perperson, total_harga)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                ");
                
                $stmt->bind_param(
                    "ssssssissiiii",
                    $register_id, $data['kategori'], $data['nama_kelas'], $data['nama_lengkap'],
                    $data['email'], $data['whatsapp'], $data['jumlah_peserta'], $data['pesan_tambahan'],
                    $data['type_training'], $data['harga_perperson'], $data['discount_pct'],
                    $data['net_harga_perperson'], $data['total_harga']
                );

                return $stmt->execute();
            }

            // Tangkap data dari form
            $data = [
                'kategori'        => $_POST['kategori'] ?? '',
                'nama_kelas'      => $_POST['nama_kelas'] ?? '',
                'nama_lengkap'    => $_POST['nama_lengkap'] ?? '',
                'email'           => $_POST['email'] ?? '',
                'whatsapp'        => $_POST['whatsapp'] ?? '',
                'jumlah_peserta'  => (int) ($_POST['jumlah_peserta'] ?? 1),
                'pesan_tambahan'  => $_POST['pesan_tambahan'] ?? '',
                'type_training'   => $_POST['type_training'] ?? '',
                'harga_perperson' => (int) ($_POST['harga_perperson'] ?? 0),
                'discount_pct'    => (int) ($_POST['discount_pct'] ?? 0),
                'net_harga_perperson' => (int) ($_POST['net_harga_perperson'] ?? 0),
                'total_harga'     => (int) ($_POST['total_harga'] ?? 0)
            ];

            if (insertRegistration($data)) {
                echo "<script>alert('Pendaftaran berhasil!'); window.location.href = '../';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan data. Silakan coba lagi.'); history.back();</script>";
            }
            // [END] BLOK KODE DATABASE ANDA

        } else {
            // Verifikasi reCAPTCHA Gagal
            echo "<script>alert('Verifikasi reCAPTCHA gagal. Silakan coba lagi.'); history.back();</script>";
        }

    } else {
        // Token reCAPTCHA tidak ditemukan
        echo "<script>alert('Mohon centang kotak reCAPTCHA \"I\\\'m not a robot\".'); history.back();</script>";
    }
    // [END] BLOK VERIFIKASI reCAPTCHA

} else {
    // Jika file diakses langsung tanpa metode POST
    die("Akses tidak diizinkan.");
}

?>