<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>學生心情日記填寫紀錄</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<style>
		
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>

		</script>
	</header>
	<body>
		</p>
		<table align='center' width='30%'>
			
			<?php
				$sel_diary=mysqli_query($conn,"SELECT * FROM `diary`");
				$n = mysqli_num_rows($sel_diary);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th width="50%">學號</th>
						<th width="50%">填寫時間</th>
					</tr>	
			<?php
				}
				while($sel_diary_ok=mysqli_fetch_array($sel_diary)){
					echo "
						<tr>
							<td>$sel_diary_ok[student_id]</td>
							<td>$sel_diary_ok[write_time]</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>