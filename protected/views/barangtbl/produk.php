<?php

$id = $_GET['id'];
	$query = "select * from barangtbl where id = '".$id."'";
	$hasil = Yii::app()->db->createCommand($query)->query();
	$temukan = $hasil->rowCount;
	$data = array($hasil);
	if($temukan==0){
	}else{
?>

<table border=0px cellpadding='10' cellspacing="2" bgcolor="" bordercolor="" align="center">
	<tr>
        
<td align=center>			 
	<div class ="product-information">
    	<?php echo $data['nama']; ?><br><br>
        <?php echo $data['ukuran']; ?><br><br>
        <?php echo $data['warna']; ?><br><br>
    </div>
    
    <div class="product-information">
	<img width='200px' height='225px' valign='top' border='1,5' src="<?php echo Yii::app()->theme->baseUrl;?>/images/Produk/<?php echo $data['gambar']; ?>"><br><br>
	</div>		
    
    <div class ="product-information">
    	<?php echo $data['deskripsi']; ?><br><br>
    </div> 
	
    <div class ="product-information">
        <?php $hargarp = $data['harga'] ?>
        <?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br>
    </div>

   
     
<?php
	}
?>
</td>    
</tr>
</table>