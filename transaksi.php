<?php 
include('header.php');


?>

<div class="hmm" style="height:80px; background:#333333;"></div>


 <section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-2">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Checkout</h2>
          </div>
        </div>
       
          <div class="col-md-6 col-lg mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
            <div class="unit-3-icon mr-3"><span class="text-primary flaticon-location"></span></div>
             
            <div>
                <h3>Alamat Pengiriman</h3>
                <b><?php echo $_POST['nama'] . ' ', $_POST['noTelp']; ?> </b> &nbsp;<?= $_POST['alamat'] . ', ' . $_POST['kecamatan'] . ', ' . $_POST['kota']; ?> </<b>
                
              </div>
            </div>
          </div>
   <br><br>
          <div class="col-md col-lg mb mb-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex-5">
             <div>
                 <table  width='100%;'>
                     <th width="60%;" >

                         <h3>Produk Dipesan</h3>

                     </th>
                     <th width="13%;">
                         Harga Satuan
                     </th>
                     <th width="13%;">
                         jumlah
                     </th>

                     <th width="13%;">Total</th>
                    
                     <?php 
                    $query = mysqli_query($host, "SELECT * FROM barang WHERE id='$_POST[id]'");
                    $data = mysqli_fetch_array($query);
                    ?>
                    <tr>
                      <td><img width="20%;" src="images/<?= $data['gambar']; ?>" alt=""> <?= $data['nama']; ?></td>
                      <td><?= "Rp. " . number_format($data['harga'], 0, '', ','); ?> </td>
                      <td><?= $_POST['jumlah']; ?></td>
                      <td><?php echo "Rp. " . number_format($hmm = $data['harga'] * $_POST['jumlah'], 0, '', ','); ?></td>
                      
                    </tr>

                </table>
              </div>
            </div>
          </div>


   
      </div>


    </section>

    <form action="nota.php" method="post">
      <input type="hidden" name="nama" value="<?= $_POST['nama'] ?>">
      <input type="hidden" name="no" value="<?= $_POST['noTelp'] ?>">
      <input type="hidden" name="id" value="<?= $data['id'] ?>">
      <input type="hidden" name="jml" value="<?= $_POST['jumlah'] ?>">
      <input type="hidden" name="total" value="<?= $hmm ?>">
      <input type="hidden" name="alamat" value="<?= $_POST['alamat'] ?>">
      <input type="hidden" name="kota" value="<?= $_POST['kota'] ?>">
      <input type="hidden" name="kecamatan" value="<?= $_POST['kecamatan'] ?>">
      <input type="hidden" name="idB" value="<?= $_POST['idB'] ?>">

      <p style="margin-left:60%;"><a href="index.php"  class="btn btn-primary mr-2 mb-2" style="padding-right:50px; padding-left:50px;">Batalkan</a>
      <button type="submit" class="btn btn-primary mr-2 mb-2">Buat Pesanan </button>
    </p>
    </form>
 
<?php 
include('footer.php');
?>