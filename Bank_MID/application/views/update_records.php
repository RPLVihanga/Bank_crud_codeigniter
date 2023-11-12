<html>
<head>
<title>Registration form</title>
</head>

<body>
<?php
  $i=1;
  foreach($data as $row)
  {
?>
  <form method="post">
     <table width="600" border="1" cellspacing="5" cellpadding="5">
	 <tr>
	 <td width="230">Enter Bank Name </td>
	 <td width="329"><input type="text" name="bname" value="<?php echo $row->bname; ?>"/></td>
	 </tr>
	 <tr>
	 <td>Enter Branch </td>
	 <td><input type="text" name="branch" value="<?php echo $row['branch']; ?>"/></td>
	 </tr>
	 <tr>
	 <td>Enter Account Number </td>
	 <td><input type="text" name="acnumber" value="<?php echo $row['acnumber']; ?>"/></td>
	 </tr>
	 <tr>
	 <td colspan="2" align="center">
	   <input type="submit" name="update" value="Update Records"/></td>
	 </tr>
	 </table>
	 </form>
  <?php } ?>
  </body>
  </html>