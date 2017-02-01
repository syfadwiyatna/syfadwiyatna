<!-- Fixed navbar -->
<?php 
$pages = '';
if(isset($_REQUEST['pages']))$pages = $_REQUEST['pages'];
if(isset($_REQUEST['kat']))$kategori1 = $_REQUEST['kat'];

$alamat = $baseurl."index.php?pages=";
$alamat2 = $baseurl."index.php?pages=pages&kat=";
?>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="65" height="65" style="margin-top: -20px;">
          Syf Corp</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li <?php if($pages=='') echo "class='active'" ;?> ><a href="<?php echo $baseurl ; ?>index.php">HOME</a></li>
            <li <?php if($pages=='news') echo "class='active'" ;?> ><a href="<?php echo $alamat."news" ; ?>">NEWS</a></li>
            <li <?php if($kategori1=='profil') echo "class='active'" ;?> ><a href="<?php echo $alamat2."profil" ; ?>">PROFIL</a></li>
            <li <?php if($pages=='products') echo "class='active'" ;?> ><a href="<?php echo $alamat."products" ; ?>">PRODUCTS</a></li>
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="single-post.html">SINGLE POST</a></li>
                <li><a href="single-project.html">SINGLE PROJECT</a></li>
              </ul>
            </li>-->
            <li <?php if($kategori1=='SERVICE') echo "class='active'" ;?> ><a href="<?php echo $alamat2."SERVICE" ; ?>">SERVICE</a></li>
            <li <?php if($kategori1=='contact') echo "class='active'" ;?> ><a href="<?php echo $alamat2."contact" ; ?>">CONTACT</a></li>
                <li <?php if($kategori1=='portofolio') echo "class='active'" ;?> ><a href="<?php echo $alamat2."portofolio" ; ?>">PORTFOLIO</a></li>
                <li <?php if($kategori1=='guestbook') echo "class='active'" ;?> ><a href="<?php echo $alamat2."guestbook" ; ?>">GUEST BOOK</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>