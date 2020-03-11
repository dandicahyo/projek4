<?php 
include('header.php');
?>
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          
              <div class="col-md-12 mt-lg-5 text-center">
                <h1>List Bank Sampah</h1>
            
                
              </div>
            
        </div>
      </div>
    </div>  

    
    
    <section class="site-section">
      <div class="container">
     
  <h1 class=" mt-lg-5 section-title row align-items-center justify-content-center text-center">Bank Sampah Location</h1>
  <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row large-gutters">
         

      <?php $query = mysqli_query($host, "SELECT * FROM banksampah "); ?>
      <?php if (mysqli_num_rows($query) > 0) { ?>
        
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
          ?>
		
		
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">

                
                            
              <a href="detailMaps.php?id=<?= $data['id_banksampah']; ?>" class="d-inline-block mb-4">
                
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" 
			marginwidth="0" src="<?= $data['alamat_maps'] ?> " width="600" height="650" frameborder="0" style="border:0;" allowfullscreen="">
		</iframe>
                <div class="ftco-media-details">
                  <h3><?= $data['nama_bank'] ?></h3>
                  <p><?= $data['alamat'] ?></p>
    </a>

                </div>
  
              </div> 
            </div>
          </div>

          <?php $no++;
        } ?>
        <?php 
      } ?>
		</div>

        </div>
      </div>
    </div>
    

    
      


</section>
    <?php
    include('footer.php');
    ?>