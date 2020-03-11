<?php 
include('header.php');
?>
<div class="hmm" style="height:80px; background:#333333;"></div>


<?php 


$nm = $_POST['nama'];
$no = $_POST['no'];
$id = $_POST['id'];
$jml = $_POST['jml'];
$total = $_POST['total'];
$alamat = $_POST['alamat'];
$kec = $_POST['kecamatan'];
$kota = $_POST['kota'];
$uid = $_SESSION['uid'];
$idB = $_POST['idB'];
$query = mysqli_query($host, "insert into transaksi values ('','$nm','$no','$id','$jml','$total','$alamat','$kec','$kota','$uid','$idB')");



?>

 <section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-2">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Nota</h2>
          </div>
        </div>
       
          <div class="col-md-6 col-lg mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
            
            <div>
            <i>Terima kasih Anda sudah berbelanja di E-Trash 
                
                <br><br><br>
                <p>Total biaya unutk pembelian produk anda adalah <?= "Rp. " . number_format($_POST['total'], 0, '', ','); ?>,- dan barang akan kami kirim ke alamat di bawah ini:</p>
                <p>Nama lengkap: <?= $_POST['nama'] ?></p>
                <p>No Telepon : <?= $_POST['no'] ?></p>
                <p>Alamat : <?= $_POST['alamat'], ', ', $_POST['kecamatan'], ', ', $_POST['kota']; ?></p>
            </i>    
                
            </div>
            </div>
            </div>
    <br><br>
    
    
    </section>
    <?php 
    include('footer.php');
    ?>