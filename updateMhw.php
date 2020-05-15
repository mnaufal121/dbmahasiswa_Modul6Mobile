<?
if($_SERVER['REQUEST_METHOD']=='POST'){
    //MEndapatkan Nilai Dari Variable 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    
    //import file koneksi database 
    require_once('koneksi.php');
    
    //Membuat SQL Query
    $sql = "UPDATE tb_mahasiswa SET nama = '$name', jurusan = '$jurusan', email = '$email' WHERE id = $id;";
    
    //Meng-update Database 
    if(mysqli_query($con,$sql)){
        echo 'Berhasil Update Data Mahasiswa';
    }else{
        echo 'Gagal Update Data Mahasiswa';
    }
    
    mysqli_close($con);
}
?>