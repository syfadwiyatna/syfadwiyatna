

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<?php 
		
		$qry = "SELECT * FROM products ORDER BY Id DESC ";
		$aqry = mysql_query($qry);
		
	?>

	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3 style="text-transform: capitalize;">Products</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	

	 
	<!-- *****************************************************************************************************************
	 AGENCY ABOUT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<?php while($dt = mysql_fetch_array($aqry)){ ?>
	 		<div class="col-sm-3">
	 			<div class="well">
	 				<img src="<?php echo $dt['gambar'];?>" width="100%">
	 				<h6 style="text-transform: capitalize;"><?php echo $dt['judul'];?></h6><hr><h7 style='font-weight: bold;color: red'>Rp <?php echo number_format($dt['harga'],0,",",".");?></h7>
	 			</div>
	 		</div>
	 		<?php }?>
	 		
	 	</div><! --/row -->
	 </div><! --/container -->
	 
	<?php 
		include "view/footer.php";
	?>