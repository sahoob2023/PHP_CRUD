<?php 
include 'header.php';
 ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="save.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="number" name="sage" />
        </div>
   
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
