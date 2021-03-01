 <?php
echo "<b>".$name = $_POST['name']."<br>";
echo "<b>".$email = $_POST['email']."<br>";
echo "<b>".$city = $_POST['city']."<br>";
echo "<b>".$state = $_POST['state']."<br>";
echo "<b>".$phone = $_POST['phone']."<br>";
echo "<b>".$address = $_POST['address']."<br>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>



<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php echo $phone = $_POST['name']."  <br>"?></th>
      <td scope="row"><?php echo $email = $_POST['email']."  <br>"?></th>
      <td scope="row"><?php echo $city = $_POST['city']."  <br>"?></th>
      <td scope="row"><?php echo $state = $_POST['state']."  <br>"?></th>
      <td scope="row"><?php echo $phone = $_POST['phone']."  <br>"?></th>
      <td scope="row"><?php echo $address = $_POST['address']."  <br>"?></th>
      
    </tr>
  </tbody>
  
</table>
</div>
