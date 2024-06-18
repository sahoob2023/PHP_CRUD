<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="show" value="Show" />
    </form>


<?php
if(isset($_POST['show'])){
    $conn = mysqli_connect('localhost', 'root', '', 'crudproject') or die("connectio failed");

    $idd = $_POST['sid'];
    $query = "SELECT * FROM todaycrud WHERE id = '$idd'";

    $result = mysqli_query($conn, $query) or die("Unsucessful");

    if(mysqli_num_rows($result)>0){
        while($data = mysqli_fetch_assoc($result)){

    
?>


    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $data['id'];?>" />
            <input type="text" name="sname" value="<?php echo $data['name'];?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $data['address'];?>" />
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="sage" value="<?php echo $data['age'];?>" />
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $data['phone'];?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>

    <?php
     }}}
    ?>
</div>
</div>
</body>
</html>
 