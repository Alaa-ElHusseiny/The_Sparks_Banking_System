<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/customers.css" rel="stylesheet">
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
    <center>
        <table class="table">
        <thead class="thesd ">
            <tr>
            <th scope="col" class="id">id</th>
            <th scope="col" class="name">Name</th>
            <th scope="col" class="email">Email Adress</th>
            <th scope="col" class="mobile">Mobile Number</th>
            <th scope="col" class="acc">Account Number</th>
            <th scope="col" class="balance">Balance </th>
            </tr>
        </thead>
        <tbody class="table-body">
        <?php
            include('config.php');
            $result=mysqli_query($con, "SELECT * FROM customer");
            $counter=0;
            while($row = mysqli_fetch_array($result)){
                echo "
                <tr >
                <th scope='row'>$row[id]</th>
                <td>$row[Name]</td>
                <td>$row[Email]</td>
                <td>$row[Mobile]</td>
                <td>$row[Account]</td>
                <td>$row[Balance]</td>
                <td class='buttontd'>
                <button><a href='view.php? ID=$row[id]'>view</a></button>
                </td>
                </tr>
                ";
            }
                
        ?>
    <footer>
        &copy; <em id="date"></em>copyright 2023, ALAA ELHUSSEINY
    </footer>
    <script src="js/main.js"></script>
    
</body>
</html>
<?php
    include('config.php');
    $update="UPDATE customer SET `S. No` = '9' WHERE `customer`.`S. No` = '17'";
    mysqli_query($con,$update);
?>
