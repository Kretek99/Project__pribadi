<?php
require_once('config.php');
$sql = 'select * from artikel';
$result = mysql_query($sql);
while($data=mysql_fetch_array($result)){
	?>

	<div class="artikel">
		<img src="<?php echo $data['gambar']; ?>" alt="gambar artikel"/>
		<h1>
			<?php echo $data['judul']; ?>
		</h1>

		<b>
			<small>
				<?php echo $data['tanggal']; ?>
			</small>
		</b>
		
		<b>
			<small>
				View : 3,487,497
			</small>
		</b>

		<p><?php
			
			echo $data['isi'];
			
			?>
		</p>
		<p>
			<?php  
			echo $data['keterangan'];

			?>
		</p>

		<a href="#">
			Lanjutkan
		</a>
	</div>


	<?php } ?>