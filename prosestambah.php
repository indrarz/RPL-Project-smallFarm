
<?php
include("config.php");
// cek apakah tombol Tambah Barang sudah diklik atau belum?
if(isset($_POST['Tambah'])){

	// ambil data dari formulir
	$Id = $_POST['Id_produk'];
	$Nama = $_POST['Nama_produk'];
	$Stok = $_POST['Stok_produk'];
	$Harga = $_POST['Harga_produk'];
	$Gambar = $_POST['Gambar_produk'];


	// buat query
	$query = pg_query("INSERT INTO Toko (Id_produk ,Nama_produk, Stok_produk, Harga_produk, Gambar_produk) VALUES ('$Id','$Nama', '$Stok', '$Harga', '$Gambar_produk')");

	// apakah query berhasil?
		if($query==TRUE) {
			// kalau berhasil alihkan ke halaman tambahbarang.php dengan status=sukses
			header('Location: tambahbarang.php?info=sukses');
		} else {
			// kalau gagal alihkan ke halaman tambahbarang.php dengan status=gagal
			header('Location: tambahbarang.php?info=gagal');
			}
		}

	else {
	die("Terjadi masalah...");
}

?>
