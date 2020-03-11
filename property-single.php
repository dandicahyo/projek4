<?php
include('header.php');

$query = mysqli_query($host, "SELECT * FROM barang WHERE id='$_GET[kd]'");
$data = mysqli_fetch_array($query);
$query2 = mysqli_query($host, "SELECT * from banksampah where id_banksampah=$data[id_banksampah] ");
$hmm = mysqli_fetch_array($query2);

?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 mx-auto mt-lg-5 text-center">
            <h1><?= $data['nama']; ?></h1>
            <p class="mb-5"><strong class="text-white"><?= "Rp. " . number_format($data['harga'], 0, '', ','); ?></strong></p>

          </div>
        </div>
      </div>

      <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>



    <div class="site-section" id="property-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="owl-carousel slide-one-item with-dots">
              <div><img src="<?= "images/" . $data['gambar'] ?>" alt="Image" class="img-fluid"></div>
            
            </div>
          </div>
          <div class="col-lg-5 pl-lg-5 ml-auto">
            <div class="mb-5">
              <h3 class="text-black mb-4">Detail Product</h3>
              <p>6 Beds, 4 Baths, 4250 sqft.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa tempore repudiandae optio aliquam
                perspiciatis est quae enim quaerat eos hic dolorem accusamus molestias repellat consequatur velit,
                officiis nihil magnam placeat!</p>
              <p>Ex, esse? Obcaecati nam in cum eius quaerat repellendus adipisci ducimus dolorum sed quos. Amet
                recusandae cumque reprehenderit nam quia voluptatibus, repellat, aspernatur ut   fuga perferendis
                consectetur excepturi neque in!</p>
              <p class="mb-4">Neque facilis iure earum, placeat odit ipsum, amet, optio accusantium voluptatem quasi
                obcaecati fugit? Explicabo eius dolorem provident quis non voluptas, dignissimos tempora eligendi, in,
                nam velit, quasi tenetur. Animi!</p>
                

                <?php
                if (empty($_SESSION['username'])) {
                  ?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Buy Products
                </button>
                <?php

              } else {

                ?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1"> Buy Product</button>
               <?php 
            }
            ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda Harus Login
      </div>
      <div class="modal-footer">
        <a href="adminetrash/login-register.html"type="button"  class="nav-link btn btn-primary">Login</a>

      </div>
    </div>
  </div>
</div>


 
   
    
  






            </div>

            <div class="mb-5">

              <div class="mt-5">
             <iframe width="90%" frameborder="0" scrolling="no" marginheight="0" 
			marginwidth="0" src="<?= $hmm['alamat_maps'] ?> "  frameborder="0" style="border:0;" allowfullscreen="">
		</iframe>
                <h4 class="text-black"><?= $hmm['nama_bank']; ?></h4>
                <p class="text-muted mb-4">Real Estate Agent</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, iure atque sit ratione vitae neque!
                  Laborum voluptate eius, laboriosam explicabo!</p>
                <p><a href="detailMaps.php?id=<?= $hmm['id_banksampah']; ?>" class="btn btn-primary btn-sm">Contact Agent</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>



<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pembelian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <form action="transaksi.php" method="post">
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama:</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
           </div>
           <div class="form-group">
             <label for="noTelp" class="col-form-label">Nomer Telepon:</label>
             <input type="text" name="noTelp" maxlength="13" minlength="11" class="form-control" id="noTelp" required>
           </div>
           <div class="form-group">
            <label for="jumlah" class="col-form-label">Jumlah barang:</label>
            <input type="number" name="jumlah" min="1" max="5" class="form-control" id="rjumlah" required>
          </div>
          <div class="form-group">
            <label for="kota" class="col-form-label">Kota:</label>
            <select id="kota" class="form-control" name="kota" required>
              <option value="">Please Select</option>
                                                <?php
                                                $query = mysqli_query($host, "SELECT * FROM kota ORDER BY nama_kota");
                                                while ($row = mysqli_fetch_array($query)) { ?>

<option id="kota" class="<?php echo $row['id_kota']; ?>" value="<?php echo $row['nama_kota']; ?>">
                                                        <?php echo $row['nama_kota']; ?>
                                                    </option>
                                                    
                                                    <?php 
                                                  } ?>
                                            </select>
          </div>
          
          <div class="form-group">
            <label for="kecamatan" class="col-form-label">Kecamatan:</label>
            <select id="kecamatan" class="form-control" name="kecamatan"required>
              <option value="">Please Select</option>
              <?php
              $query = mysqli_query($host, "SELECT * FROM kecamatan INNER JOIN kota ON kecamatan.id_kota_fk = kota.id_kota ORDER BY nama_kecamatan");
              while ($row = mysqli_fetch_array($query)) { ?>

<option id="kecamatan" class="<?php echo $row['nama_kota']; ?>" value="<?php echo $row['nama_kecamatan']; ?>">
                                                        <?php echo $row['nama_kecamatan']; ?>
                                                      </option>
                                                      
                                                      <?php 
                                                    } ?>
                                            </select>
          </div>
          <div class="form-group">
               <label for="alamatPengiriman" class="col-form-label">Alamat Pengiriman:</label>
               <input type="text" name="alamat" class="form-control" id="alamatPengiriman" required>
               <input type="hidden" name="idB" value="<?= $hmm['id_banksampah'] ?>" class="form-control" id="alamatPengiriman" >
              </div>
              
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Checkout</button>
            </div>
          </form>
      
        </div>
  </div>
</div>


<?php
include('footer.php');
?>