
<?php  
include('includes/config.php');

 if(isset($_POST["cartid"]))  
 {  
    if(isset($_POST["userid"]))  
    {
        $cartid=$_POST["cartid"];
        $userid=$_POST["userid"];
        $query = mysqli_query($con,"DELETE FROM cartdetails WHERE CartID='".$cartid."' AND UserID='".$userid."'");

        if($query)
        {
            echo '

            <p class="product-desc amount" style="color:#192958; font-size: 20px;">The product has been deleted from your cart... </p>
            <div class="buttons-cart">
                                            <a style="color:white;" data-dismiss="modal">Continue</a>
                                        </div>
            ';
        }
    }

 }




?>