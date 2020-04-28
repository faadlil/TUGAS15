<?php

require '../connect.php';

if($_POST){

	// echo $_POST['email'];
	// $title    =   $_POST['title'];
	// $content =  md5( $_POST['content']);

print_r($_FILES);

//AMBIL DATA FILE PHOTO

$nameFile = $_FILES['image']['name'];
$nameSementara = $_FILES['image']['tmp_name'];


//MENENTUKAN LOKASI PENYIMPANAN FOTO
$path = '../cover-blog/';

$simpanFile = move_uploaded_file($nameSementara, $path.$nameFile);

if ($simpanFile==TRUE){
	
	$id   = $_GET['id'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$image  = 'cover-blog/'.$nameFile;

	$sql = "UPDATE blogs SET title = '$title', content = '$content', image = '$image' WHERE id ='$id'";
	$result = $conn -> query($sql);

	if ($result == TRUE) {
		header("location: ../admin/index.php");
	}else{
		echo "gagal menyimpan blog";
	}

}else{
	echo "gagal menyimpan gambar";
}

}

 ?>