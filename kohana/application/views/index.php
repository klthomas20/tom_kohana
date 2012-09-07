<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style media="all" type="text/css">
body{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}

ul{
	list-style:none; 
	margin:8px 0px;
}
.tag-style{
	background: none repeat scroll 0 0 #FDFDFD;
	border-bottom: 2px solid #D3D3D3;
    border-radius: 4px 4px 4px 4px;
	border-left: 1px solid #E9E9E9;
    border-right: 2px solid #D6D6D6;
    border-top: 1px solid #E9E9E9;
	color: #333333;
}

.tag-rec{
	color: #084B91;
}

.buttonsubmit{
	border:1px solid #E2E2E2;
}
</style>
</head>
<body>
<table style="width:100%;" border="0">
<?php if ($message) : ?>
	<tr><td colspan="2" class="tag-style"><?php echo $message; ?></td></tr>
<?php endif; ?>
  <tr>
    <td style="width:30%;" valign="top" align="left">
		<table class="tag-style" style="width:100%">
			<tr><td><label>Tag Bundles</label></td></tr>
			<tr>
				<td width="100%">
					<ul>
					<?php
						foreach ($data as $recid => $rec)
							echo '<li><a class="tag-rec" href="index.php?tg='.$recid.'">' . $rec[0] . ' (' . $rec[1] . ')</a></li>';
					?>
					</ul>
				</td>
			</tr>
		</table>
	</td>
    <td style="width:70%;" valign="top" align="left">
	<form action="index.php" enctype="multipart/form-data" method="post" />
		<table class="tag-style" style="width:100%" border="0"> 
			<tr>
				<td style="width:15%"><label for="photoname">Select Image *</label></td>
				<td style="width:25%">
					<input type="file" name="photoname" class="buttonsubmit"/>
				</td>
				<td style="width:60%">
					<input type="submit" class="buttonsubmit" value="Upload the photo" />
				</td>
			</tr>
			<tr>
				<td valign="top" align="left"><label for="tags[]">Tags *</label></td>
				<td colspan="2">
			<?php
				foreach($tags as $key => $val)
					echo '<input type="checkbox" name="tags[]" value="' . $key . '" />' . $val .'<br / >';
			?>
				</td>
			</tr>
		</table>
	</form>
	</td>
  </tr>
  <?php if (isset($photoname)): ?>
  <tr>
  	<td colspan="3">
		<?php foreach($photoname as $photo): ?>
		<?php	if (file_exists('application/upload/'.$photo)) : ?>
			<img src="application/upload/<?php echo $photo; ?>" border="0" width="100" height="80" />
		<?php 	endif; ?>
		<?php endforeach; ?>
	</td>
  </tr>
  <?php endif; ?>
</table>
</body>
</html>
