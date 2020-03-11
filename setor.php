<?php 
include('header.php');


$id = $_POST['id'];
$nm = $_POST['nama'];
$tlp = $_POST['noTelp'];
$kota = $_POST['kota'];
$kc = $_POST['kecamatan'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$uid = $_SESSION['uid'];

$query = mysqli_query($host, "insert into setor values ('', '$nm', '$tlp', '$email', '$alamat', '$kc', '$kota','','$id','$uid','0')");

?>


<div class="hmm" style="height:80px; background:#333333;"></div>


 <section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-2">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Setor</h2>
          </div>
        </div>
       
     
              <p>
              Terima kasih, permintaan anda sendang kami proses dan sampah akan kami ambil beberapa jam lagi.
              
              </p>  
<br>
     <br>
          <div class="col-md-6 col-lg mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
            <div class="unit-3-icon mr-3"><span class="text-primary flaticon-location"></span></div>
             
            <div>
                <h3>Alamat Pengambilan</h3>
                <b><?php echo $_POST['nama'] . ' ', $_POST['noTelp']; ?> </b> &nbsp;<?= $_POST['alamat'] . ', ' . $_POST['kecamatan'] . ', ' . $_POST['kota']; ?> </<b>
                
              </div>
            </div>
          </div>
   <br><br>
         

   
      </div>


    </section>

   
<?php 
include('footer.php');
?>