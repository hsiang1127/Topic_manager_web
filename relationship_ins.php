<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>親子關係設定</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<style>
		
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			function userins(){
				var parent=document.getElementById("parent").value;
				var child=document.getElementById("child").value;
				if(parent==""){
					alert('家長帳號未輸入!!');
					return false;
				}
				if(child==""){
					alert('學生帳號未輸入!!');
					return false;
				}
				window.location.href="relationship_ins_ok.php?parent="+parent+"&student="+child;
				
			}
		</script>
	</header>
	<body>
		</p>
		<table align='center' width='20%'>
			<tr>
				<th width="50%" >家長帳號</th>
				<td>
					<!--使用html的datalist實現-->
					<input list="ice-cream-flavors-p" id="parent" name="parent" />
					<datalist id="ice-cream-flavors-p">
					<?php
						$selparent=mysqli_query($conn,"select * from `parent`");
						while($selparent_ok=mysqli_fetch_array($selparent)){
							echo "<option value=\"$selparent_ok[parent_id]\">";
						}
					?>
					</datalist>
				</td>
			</tr>
			<tr>
				<th width="50%" >學生帳號</th>
				<td>
					<input type='hidden' id='child' name='child' value='<?php echo $_GET['id']; ?>'>
					<?php echo $_GET['id']; ?>
					<!--使用html的datalist實現
					<input list="ice-cream-flavors" id="child" name="child" />
					<datalist id="ice-cream-flavors">
					<?php
						/*$selstu=mysqli_query($conn,"select * from `student`");
						while($selstu_ok=mysqli_fetch_array($selstu)){
							echo "<option value=\"$selstu_ok[student_id]\">";
						}*/
					?>
					</datalist>-->
				</td>
			</tr>
			<tr>
				<td colspan='2'><button class='button' id='ins' name='ins' onclick="userins();"><b>確認設定</b></button></td>
			</tr>
		</table>
	</body>
</html>