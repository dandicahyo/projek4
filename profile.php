<?php
include('header.php');
?>


<?php
if (empty($_SESSION['username'])) {
    echo "<script>alert('Silahkan Login'); 
                    window.location=('adminetrash/login-register.html') </script>";
} else {
    ?>
<div class="hmm" style="height:80px; background:#333333;"></div>
<br>
<div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Profile</h2>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">

                            
                            <?php
                            $q = $_SESSION['uid'];
                            $query = mysqli_query($host, "SELECT * FROM user where uid=$q"); ?>
                        <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            
                    
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Keuangan</th>

        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $data['name'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td><?= $data['password'] ?></td>
                                        <?php 
                                        $query1 = mysqli_query($host, "SELECT uang from uang where uid = $q");
                                        if (mysqli_num_rows($query1) > 0) {
                                            $dataku = mysqli_fetch_array($query1) ?>
                                            
                                            <td><?= $dataku['uang'] ?></td>
                                                <?php

                                            } else {
                                                ?>
                                                <td>0</td>
                                                <?php

                                            }
                                            ?>
                            
                                    </tr>
                                   
                                </tbody>
                
                            </table>
                            
          <?php $no++;
        } ?>
        <?php 
    } ?>
		</div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>History</h2>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">

                            <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Nama Barang</th>
                                        <th>Nomor Telepon</th>
                                        <th>Jumlah Barang</th>
                                        <th>Total</th>
                                        <th>Alamat</th>
                                        <th>Kecamatan</th>
                                        <th>Kota</th>
                                    </tr>

                                </thead>
                                
                                <tbody>
                            <?php
                            $q = $_SESSION['uid'];
                            $query = mysqli_query($host, "SELECT a.nama as nk,
                             a.nomer_Telp,a.jumlah,a.Total,a.alamat,a.kecamatan,a.kota,b.nama as nm FROM transaksi as a INNER JOIN BARANG as b on id=id_Barang where uid=$q"); ?>
                        <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            
                    
                               
                                    <tr>
                                        <td><?= $data['nk'] ?></td>
                                        <td><?= $data['nm'] ?></td>
                                        <td><?= $data['nomer_Telp'] ?></td>
                                        <td><?= $data['jumlah'] ?></td>
                                        <td><?= $data['Total'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['kecamatan'] ?></td>
                                        <td><?= $data['kota'] ?></td>
                            
                                    </tr>
                                   
                               
                            
          <?php $no++;
        } ?>
        <?php 
    } ?>
       </tbody>
                
                </table>
		</div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>History Setor</h2>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">

                            <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Nomor Telepon</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Kecamatan</th>
                                        <th>Kota</th>
                                        <th>Status</th>
                                    </tr>

                                </thead>
                                
                                <tbody>
                            <?php
                            $q = $_SESSION['uid'];
                            $query = mysqli_query($host, "SELECT * FROM setor  where uid=$q"); ?>
                        <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            
                    
                               
                                    <tr>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['noTelp'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['kecamatan'] ?></td>
                                        <td><?= $data['kota'] ?></td>
                                        <?php
                                        if ($data['pembayaran'] == 0) {
                                            echo '<td> Belum terbayar </td>';
                                            ?>
              <?php 
            } else {
                echo '<td>Lunas</td>';
            }
            ?>
                                    </tr>
                                   
                               
                            
          <?php $no++;
        } ?>
        <?php 
    } ?>
       </tbody>
                
                </table>
		</div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

}
?>
    <br><br><br>
<?php 
include('footer.php');
?>