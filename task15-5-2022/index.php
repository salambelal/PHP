<?php 
include "data.php"; 
 if(isset($_POST['submit'])){

 $FirstName - $_POST['Fname'];
 $LastName - $_POST['Lname'];
 $old - $_POST['age'];
 $grd - $_POST['grade'];
 $ave - $_POST['average'];



$sql = "INSERT INTO school (Fname , Lname , age , grade ,average ) VALUES ('$FirstName' , '$LastName' ,'$old ' , '$grd' , ' $ave')";

mysqli_query($connect,$sql);
 }

 $select=mysqli_query($connect,"SELECT * FROM `school`") ;

?>


<table border = 3px style="margin: 0 35%  ">
 <tr> 
    
  <th> First name </th>
  <th>  Last name</th>
  <th>  Age </th>
  <th>  Grade </th>
  <th>  Average </th>
</tr>

<?php
while($data=mysqli_fetch_assoc($select)):
    ?>
    <tr>
        <td><?php echo $data['Fname']?></td>
        <td><?php echo $data['Lname']?></td>
        <td><?php echo $data['age']?></td>
        <td><?php echo $data['grade']?></td>
        <td><?php echo $data['average']?></td>
        
    </tr>
    <?php endwhile; ?>
    </table>