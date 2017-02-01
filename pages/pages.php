

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<?php
		$msgthx='';
		if(isset($_REQUEST['kat'])){
			if(isset($_POST['simpanguestbook'])){
				$nama = addslashes($_POST['nama']);
				$email = addslashes($_POST['email']);
				$pesan = addslashes($_POST['pesan']);

				$qrysimpan = "INSERT INTO guestbook(nama,email,pesan) values ('$nama','$email','$pesan') ";
				$aqrysimpan = mysql_query($qrysimpan);
				if($aqrysimpan)$msgthx = "<div class='alert alert-success'>Terimakasih Telah Mengisi Guest Book !</div>";
				
			}
		}
	?>
	<?php 
		$kategori = '';
		$kat = '';
		if(isset($_REQUEST['kat'])){
			$kat = addslashes($_REQUEST['kat']);
			$kategori = "WHERE kategori='$kat'";
		}


		$qry = "SELECT * FROM pages $kategori ORDER BY Id ASC ";
		$aqry = mysql_query($qry);
		$dt = mysql_fetch_array($aqry);
	?>

	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3 style="text-transform: capitalize;"><?php echo $dt['kategori'];?> <?php echo $dt['judul']; ?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	

	 
	<!-- *****************************************************************************************************************
	 AGENCY ABOUT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">

	 		<?php 
	 		echo $msgthx."<br>";
	 		echo $dt['isi']; ?>
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

	<?php 
		include "view/footer.php";
	?>