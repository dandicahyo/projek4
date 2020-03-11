<?php 
include('header.php');
?>
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          
              <div class="col-md-12 mt-lg-5 text-center">
                <h1>Product Bank Sampah</h1>
            
                
              </div>
            
        </div>
      </div>
    </div>  

    
    
    <section class="site-section">
      <div class="container">
      <h1 class=" mt-lg-5 section-title row align-items-center justify-content-center text-center">Bank Sampah Products</h1>
  <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row large-gutters">
         

      <?php $query = mysqli_query($host, "SELECT * FROM barang "); ?>
      <?php if (mysqli_num_rows($query) > 0) { ?>
        
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
          ?>
		
		
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">

                
              <a href="property-single.php?kd=<?= $data['id']; ?>" class="d-inline-block mb-4"><img src=<?= "images/" . $data['gambar'] ?> alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3><?= $data['nama'] ?></h3>
                  <strong><?= "Rp. " . number_format($data['harga'], 0, '', ','); ?></strong>

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