<?php
include 'connection.php';
$sql = 'SELECT * FROM quality';
$result = $conn->query($sql);
?>
<html>
    <head>
        <title>read</title>
        <link rel="stylesheet" href="styles.css">

    </head>
    <body>
        <div class="container">
            <h2>Items</h2>
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>PRODUCT</td>
                        <td>Items</td>
                        <td>Quality</td>
                        <td>MFG_Date</td>
                        <td>Amount per item</td>
                        <td>Total amount</td>
                        <td>Users Email</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()) {   
                    
                    ?>
                    <tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['items']; ?></td>
<td><?php echo $row['quality']; ?></td>
<td><?php echo $row['mfg_date']; ?></td>
<td><?php echo $row['amount_per_item']; ?></td>
<td><?php echo $row['total_amount']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr> 
<?php }
}
else {
    echo "Empty set <br>";
    
    echo "<a href='quality.html'>add</a>";
}
?> 

                </tbody>
            </table>
        </div>
    </body>
</html>
