<?php
 //untuk koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_pwl");

 //fungsi query untuk menjalankan query pada tabel sesuai keperluannya 
function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
        }
        return $rows;
}

 //fungsi tambah untuk menambah data ke dalam tabel
function tambah($data) {
       global $conn;
       $nimhs = $data['nimhs'];
       $nmmhs = $data['nmmhs'];
       $email = $data['email'];
       $prodi = $data['prodi'];
       $foto = $data['foto'];
 //query insert data untuk memasukan data ke dalam tabel mahasiswa
       $query = "INSERT INTO mahasiswa VALUES
       ('','$nmmhs','$nimhs','$email','$prodi','$foto')";
       mysqli_query($conn, $query);
       return mysqli_affected_rows($conn);
}

function hapus($nim) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE Nim = '$nim'");
        return mysqli_affected_rows($conn);
} 

function ubah($data) {
        global $conn;
        global $id;
        $nim = $data['nim'];
        $nama = $data['nama'];
        $email = $data['email'];
        $prodi = $data['prodi'];
        $foto = $data['foto'];
        $query = "UPDATE mahasiswa SET Nim = '$nim', Nama = '$nama',
        Email = '$email', Prodi = '$prodi', Foto = '$foto' WHERE Nim = '$id'";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
} 

function cari($keyword) {
        $query = "SELECT * FROM mahasiswa WHERE Nama LIKE '%$keyword%' OR Nim LIKE '%$keyword%'";
        return query($query);
}

?>
