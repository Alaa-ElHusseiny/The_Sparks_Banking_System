<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/view.css?v=<?php echo time(); ?>">
    <title>Sparks Bank</title>
</head>
<body>
    <header>
        <nav>
            <a href="https://www.thesparksfoundationsingapore.org/"><img src="images/logo.png" alt="TSF" class="logo"></a>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About me</a>
                </li>
                <li>
                    <a href="customers.php">view customers</a>
                </li>
                <li>
                    <a href="transactions.php">Transactions</a>
                </li>
                <li>
                    <a href="contact.php">contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
    <div class='namelogo'>
    <img class="userlogo" src="images/user.png"/>
    <?php
    include('config.php');
    $id = $_GET['ID'];
    $result = mysqli_query($con,"SELECT Name FROM customer WHERE id = $id");
    $rowSender = mysqli_fetch_assoc($result);
    echo "<h4 class='NameHeading'>$rowSender[Name]</h4>";
    ?>
    </div>
    <div class='transaction'>
        <form method="post" class="transfereForm">
            <center><h4 class="transfereHeading">Transfere money</h4>
            <div class="transfereFormContainer">
                <h5>receiver name</h5>
                <div class="dropdown show" style="width:450pxw;">
                    <select class="money" name="receiver" id="receiver" method="GET">
                        <?php
                        include('config.php');
                        $result=mysqli_query($con, "SELECT * FROM customer");
                        $id = $_GET['ID'];
                        $result2 = mysqli_query($con,"SELECT Name FROM customer WHERE id = $id");
                        $row = mysqli_fetch_assoc($result2);
                        while($row2 = mysqli_fetch_array($result)){
                            if( $row2['Name'] != $row['Name']){
                            echo "
                            <option>$row2[Name]</option>
                            ";
                            }
                        }
                        ?>
                    </select>
                </div>
                <h5>Amount of money</h5>
                <input class="money" name='amount'  placeholder='00000' method="GET"></input>
            </div>
            <?php
            include('config.php');
            $id = $_GET['ID'];
            if(isset($_POST['submit'])){
                $receiver = $_POST['receiver'] ;
                $amount = $_POST['amount'];
                $update="UPDATE customer SET `Balance` = `Balance` - $amount WHERE `customer`.`id` = $id";
                $update1="UPDATE customer SET `Balance` = `Balance` + $amount WHERE `customer`.`Name` = '$receiver'";
                mysqli_query($con,$update);
                mysqli_query($con,$update1);
                date_default_timezone_set('Asia/Riyadh');
                $date = date('Y/m/d h:i:s') ;
                $insert="INSERT INTO transaction(Sender,Receiver,Amount,Date)
                VALUES ('$rowSender[Name]','$receiver',$amount,'$date')";
                mysqli_query($con,$insert);
                echo '<script>alert("Successful Transaction")</script>';
            }
            
            ?>
                <input class="submit" type="submit" name="submit" value="SEND MONEY!">
            
        </center>
        </form>
    </div>
    </main>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>