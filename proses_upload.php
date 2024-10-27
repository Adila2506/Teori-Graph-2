<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["pdfFile"]["name"]);
    $uploadOk = 1;
    $pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Periksa apakah file adalah file PDF
    if ($pdfFileType != "pdf") {
        echo "Hanya file PDF yang diizinkan.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($targetFile)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
    }
    // Check file size
if ($_FILES["pdfFile"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
    // Periksa jika $uploadOk = 0 karena ada kesalahan
    if ($uploadOk == 0) {
        echo "File Anda tidak berhasil diunggah.";
    } else {
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            echo "File PDF " . basename($_FILES["pdfFile"]["name"]) . " berhasil diunggah.";
        } else {
            echo "Terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>