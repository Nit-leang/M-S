<h3 > index user </h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>Name </th>
    </tr>
<?php  foreach ($users as $key => $name) { ?>
    <tr>
        <td><?php echo $key+1; ?></td>
        <td><?php  echo $name; ?></td>
    </tr>
 <?php  } ?>

</table>

