<html>
<head>
<title>Display Records</title>
</head>
<table width="600" border="1" cellspacing="5" cellpadding="5">
<thead>
<tr style="background:#CCC">

<th>Bank Name</th>
<th>Branch</th>
<th>Ac Number</th>
<th>Action</th>
</tr>
<tbody>


<?php foreach ($item as $list) { ?>
        <tr>
            <td><?php echo $list->bname; ?></td>
            <td><?php echo $list->branch; ?></td>
            <td><?php echo $list->acnumber; ?></td>
            <td><a href="<?php echo base_url(); ?>index.php/bank_detail_control/delete/<?php echo $list->Id; ?>">Delete</a></td>
        </tr>
    <?php } ?>

</tbody>
</table>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>
</body>
</html>