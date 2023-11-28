<?php 
	
	require 'fungsi.php';
	$No3 = $_GET['No'];

	if (del3($No3) > 0) {
		echo "

				<script>
					alert('Data Utang is Succsess Delete');
					document.location.href = 'keuanganindex.php';
				</script>
			";
		} else {

			echo "

				<script>
					alert('Data Failed to Delete');
					document.location.href = 'keuanganindex.php';
				</script>";
		}	
	

 ?>