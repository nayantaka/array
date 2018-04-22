<table border=1 cellspacing=0>
<tr>
<td>No</td>
<td>Nama Barang</td>
<td>Harga</td>
</tr>
<?php
	$belanja = $_REQUEST['item'];
	$total = 0;
	$inc=1;
	foreach($belanja as $b){
		
		if($b == 'sabun'){
			$harga = 3000;
		}
		elseif($b == 'pasta gigi'){
			$harga = 10000;
		}
		else{
			$harga = 8000;
		}
		echo '<tr><td>';
		echo $inc;
		echo '</td><td>';
		echo $b;
		echo '</td><td>';
		echo $harga;
		echo '</td></tr>';
		$total = $total + $harga;
		$inc++;
		
	}
	echo '<tr><td>';
		echo ' ';
		echo '</td><td>';
		echo 'Total';
		echo '</td><td>';
		echo $total;
		echo '</td></tr>';
	echo '</table>';
	
?>