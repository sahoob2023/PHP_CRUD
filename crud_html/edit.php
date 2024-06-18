<?php 
include 'header.php'; 
 

$conn = mysqli_connect('localhost', 'root', '', 'crudproject') or die("connectio failed");

$idd = $_GET['id'];
    $query = "SELECT * FROM todaycrud WHERE id = '$idd'";

    $result = mysqli_query($conn, $query) or die("Unsucessful");

    if(mysqli_num_rows($result)>0){
        while($data = mysqli_fetch_assoc($result)){


?>
 
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="newupdate.php" method="get">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
          <input type="text" name="sname" value="<?php echo $data['name'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $data['address'];?>"/>
      </div>
      <div class="form-group">
          <label>Age</label>
          <input type="number" name="sage" value="<?php echo $data['age'];?>"/>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $data['phone'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update" />
    </form>

    <?php 
}
    }
    ?>
</div>
</div>
</body>
</html>

 
