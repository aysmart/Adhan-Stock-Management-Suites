<?php 
include('includes/config.php');
if(isset($_POST['UserID']))
{
//    echo $_POST['UserID'];
$query=mysqli_query($con,"select * from cartdetails WHERE UserID='".$_POST['UserID']."'");
$numCount=1;   
while($row=mysqli_fetch_array($query))
{
?>
                                            <tr>
                                                <td><?php echo htmlentities($numCount) ?></td>
                                                <td><?php echo htmlentities($row['ProductID']) ?></td>
                                                <td><?php echo htmlentities($row['ProductName']) ?></td>
                                                <td><?php echo htmlentities($row['ProductPrice']) ?></td>
                                                <td><?php echo htmlentities($row['ProductQuantity']) ?></td>
                                                <td><?php echo htmlentities($row['WhenAdded']) ?></td>
                                                <td><button class="btn btn-white del-Item" cartID="<?php echo htmlentities($row['CartID']) ?>" userID="<?php echo htmlentities($_SESSION['id']) ?>" style="background: #192958; color:#fff;" type="button">X</button></td>
                                            </tr>
<?php $numCount+=1;}} ?>