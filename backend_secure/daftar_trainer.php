<?php
// File: backend_secure/daftar_trainer.php

require_once __DIR__ . '/database_connection.php';

function insertTrainer($data) {
    global $conn;
    $stmt = $conn->prepare("
        INSERT INTO RTN_AC_TRAINER_REGISTRATION (
            fullname, kategori, no_whatsapp, email, pekerjaan, jabatan, perusahaan, 
            kelas_training, pengajaran_diminati, resume_blob
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if ($stmt === false) {
        error_log("Prepare failed: (" . $conn->errno . ") " . $conn->error);
        return false;
    }

    $null_blob = NULL;
    $stmt->bind_param(
        "sssssssssb",
        $data['fullname'], $data['kategori'], $data['no_whatsapp'], $data['email'],
        $data['pekerjaan'], $data['jabatan'], $data['perusahaan'], 
        $data['kelas_training'], $data['pengajaran_diminati'], $null_blob
    );
    
    $stmt->send_long_data(9, $data['resume_blob']);
    $is_success = $stmt->execute();

    if (!$is_success) {
        error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    }
    $stmt->close();
    return $is_success;
}

function isEmailExists($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT id FROM RTN_AC_TRAINER_REGISTRATION WHERE email = ? LIMIT 1");
    if ($stmt === false) {
        error_log("Prepare failed in isEmailExists: " . $conn->error);
        return false; 
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $email_found = $stmt->num_rows > 0;
    $stmt->close();
    return $email_found;
}
?>