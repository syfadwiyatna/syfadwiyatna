	 
	 <div class="container mtb">
	 	<div class="row">
	 <?php 

	 	$qry = "SELECT * FROM news ORDER BY Id DESC";
	 	$aqry = mysql_query($qry);
	 ?>	

	<?php include "view/sidebar.php"; ?>
	 		<! -- BLOG POSTS LIST -->
	 		<div class="col-lg-8">
	 			<! -- Blog Post 1 -->
	 			<?php while($dt = mysql_fetch_array($aqry)) { 
	 				$isi = substr($dt['isi'], 0, 300);
	 			?>
		 		<p><img class="img-responsive" src="img/<?php echo $dt['img']; ?> "></p>
		 		<a href="single-post.html"><h3 class="ctitle"><?php echo $dt['judul']; ?></h3></a>
		 		<p><csmall>Posted: <?php echo tanggalan($dt['tanggal']) ; ?>.</csmall> | <csmall2>By: <?php echo $dt['penulis'];?>...</p>
		 		<?php echo $isi; ?>
		 		<p><a href="single-post.html">[Read More]</a></p>
		 		<div class="hline"></div>
		 		
		 		<div class="spacing"></div>
		 		<?php 

		 		}
		 		?>
	 			
		 		
			</div><! --/col-lg-8 -->

	 	</div><! --/row -->
	 </div><! --/container -->
	<?php include "view/footer.php"; ?>