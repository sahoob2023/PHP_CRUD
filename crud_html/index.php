<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'crudproject') or die("connectio failed");
    $query = 'SELECT * FROM todaycrud';
    $result = mysqli_query($conn, $query) or die("Unsucessful");
    if(mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="20px">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['address']; ?></td>
                        <td><?php echo $data['age']; ?></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td>
                            <a href='edit.php? id=<?php echo $data['id'];?>'>Edit</a>
                            <a href='deleteinline.php? id=<?php echo $data['id'];?>'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</div>
</div>
</body>

</html>