<?php
include 'header.php';
?>

<h1>Admission</h1>
<?php
include 'config.php';
$sql = "SELECT * FROM student WHERE student.sid";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
if(mysqli_num_rows($result) > 0) 
       {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>10th</th>
        <th>12th</th>
        <th>Department</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result))
            {
          ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['s10']; ?></td>
                <td><?php echo $row['s12']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='delete.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php 
  }
  else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>