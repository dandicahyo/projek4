<?php 
include('header.php');
?>
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          
              
            
        </div>
      </div>
    </div>  

    
    
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <?php 
            $id = $_GET['id'];
            $query = mysqli_query($host, "select * from banksampah where id_banksampah = $id");
            $data = mysqli_fetch_array($query);
            ?>
            
            <p class="lead text-center" style="font-size:26px;  font-weight: bold;">
            
            <?= $data['nama_bank'] ?>
            </p>
            <div class="col-md mt-lg    ">
                <?= $data['alamat'] ?>

<br><br><br>
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" 
			marginwidth="0" src="<?= $data['alamat_maps'] ?> " width="600" height="650" frameborder="0" style="border:0;" allowfullscreen="">
		</iframe>
              </div>
 

            <div class="pt-5">
             
             
              
             </div>

          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
             
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Fitur</h3>

                <?php
                if (empty($_SESSION['username'])) {
                  ?>
                <li><a href="" data-toggle="modal" data-target="#exampleModal">Setor </a></li>
                 
                <?php

              } else {

                ?>
                <li><a href="" data-toggle="modal" data-target="#exampleModal1">Setor </a></li>
               <?php 
            }
            ?>

                <li><a href="detailProductBank.php?id=<?= $id ?>">Product <span>
                (
                    <?php 

                    $query1 = mysqli_query($host, "SELECT * FROM  barang where id_banksampah = $id");

                    $query2 = mysqli_query($host, "SELECT COUNT(*) AS jml
                    FROM barang where id_banksampah = $id");

                    $data3 = mysqli_fetch_array($query2);
                    $data2 = mysqli_fetch_array($query1);

                    if (isset($data2)) {
                      echo $data3['jml'];
                    } else {
                      echo '0';
                    }



                    ?>
                )
                </span></a></li>
               </div>
            </div>
          

           
          </div>
        </div>
      </div>
    </section>

<!-- MODALS -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Setor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="setor.php" method="post">
        <div class="form-group">
               <label for="nama" class="col-form-label">Nama:</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
                <input type="hidden" name="id" value="<?= $data['id_banksampah']; ?>">
           </div>
           <div class="form-group">
               <label for="noTelp" class="col-form-label">Nomer Telepon:</label>
                <input type="text" name="noTelp" maxlength="13" minlength="11" class="form-control" id="noTelp" required>
           </div>
           <div class="form-group">
               <label for="email" class="col-form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email" required>
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
           </div>

        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Setor</button>
        </div>
      </form>
    </div>
  </div>
</div>


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


    <?php
    include('footer.php');
    ?>