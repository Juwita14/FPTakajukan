<?php
    require "../checker.php";
    require "../koneksi.php";
    
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    
    $sql = "insert into barang (nama_barang, stok_barang, harga_barang) values('$nama', '$stok', '$harga')";
    $query = mysqli_query($db_connection, $sql);
    
    $id = mysqli_insert_id($db_connection);
    if(isset($_FILES['gambar']) && ($_FILES['gambar']['name'][0] != '')){
        $files = [];
        foreach ($_FILES['gambar'] as $key => $file) {
            foreach ($file as $k => $v) {
                $files[$k][$key] = $v;
            }
        }
    
        foreach ($files as $f) {        
            $tmp = $f['tmp_name'];
            $ext = pathinfo($f['name'], PATHINFO_EXTENSION);
            
            // Check the MIME type
            $whitelist = ['image/jpg', 'image/jpeg', 'image/png'];
            if(!in_array(mime_content_type($tmp), $whitelist)){
                die('Mohon hanya unggah file JPG, JPEG, atau PNG.');
            }
        
            // Check the extension
            $whitelist = ['jpg', 'jpeg', 'png'];
            if(!in_array(strtolower($ext), $whitelist)){
                die('Mohon unggah file dengan ekstensi yang benar.');
            }
        
            // Check size of image to verify the image type
            if(getimagesize($tmp) == 0){
                die('File gambar Anda tidak valid.');
            }
        
            // Buat nama file acak
            $random = md5($tmp);
        
            // Upload gambar
            $filename = $random.'.'.$ext;
            move_uploaded_file($tmp, '../file/' . $filename);
    
            $sql = "insert into gambar (id_barang, link_gambar) values('".$id."', '".$filename."')";
            $query = mysqli_query($db_connection, $sql);
        }
    }
    
    header('Location: data.php');
?>