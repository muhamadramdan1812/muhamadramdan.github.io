<?php
require_once("koneksi.php");
//buat konfigurasi upload
//folder tujuan upload file
$eror = false;
$folder = './upload/';
//Tipe file yang bisa di upload
$file_type = array('jpg','jpeg','png','gif','doc','docx','xls','mp3','amr','mp4','avi','mpeg','mov' );
//Ukuran maksimun file yang dpat diupload
$max_size = 2000000; //2MB
if(isset($_POST['btnUpload'])){
	//Mulai memproses file
	$file_name = $_FILES['data_upload']['name'];
	$file_size = $_FILES['data_upload']['size'];
	//Cari ekstensi file menggunakan fungsi explode
	$explode = explode('.', $file_name);
	$extensi = $explode[count($explode)-1];
	//Cek apakah type file sudah sesuai
	if (!in_array($extensi, $file_type)) {
		$eror = true;
		$pesan = '- Type file yang anda upload tidak sesuai<br/>';
	}
	if ($file_size > $max_size) {
		$eror = true;
		$pesan = 'Ukuran file melebihi batas maksimun';
	}
	//Cek ukuran file apakah sudah sesuai

	if ($eror == true) {
		echo "<div id=eror>".$pesan."</div>";
	}
	else{
		//mulai proses upload file
		if (move_uploaded_file($_FILES['data_upload']['tmp_name'],$folder.$file_name)) {
			//catat nama file ke database
			$catat = mysqli_query($db,'INSERT INTO upload_file(filename,detail,folder,dateupload) VALUES
				("'.$file_name.'", "'.$_POST['keterangan'].'",
				"'.$folder.'", "'.date('Y-m-d H:i:s').'")');
			echo '<div id="msg">Berhasil mengupload file '.$file_name.'</div>';
		}else{
			echo 'Proses upload eror';
		}
	}
}
?>