<?php
/**
 * Created by PhpStorm.
 * User: 1511363
 * Date: 04/05/2016
 * Time: 10:58
 */

$db = new MySQLi(
    "ap-cdbr-azure-east-c.cloudapp.net",
    "becd1536e6553c",
    "f13cc5a6",
    "CMM007ALDB-1511363"
);

if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}
else{

    if(isset($_GET['category'])){
        $query = "SELECT *
                  FROM blogview
                  WHERE category = ?";

        $stmt = $db->prepare($query);

        $stmt->bind_param("s",$_GET["category"]);

        $stmt->execute() or die("Error: ".$query."<br>".$db->error);

        $result = $stmt->get_result();
    }
    else{
        $query = "SELECT *
          FROM blogview";

        $result = $db->query($query) or die("Error: ".$query."<br>".$db->error);
    }



//    $result = $stmt->execute() ;

    $db->close();

/*    $stmt->store_result();

    $result = $stmt->get_result();

    $num_of_rows = $stmt->num_rows;*/
}




?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">




    <title>Blog</title>
</head>
<body>

<header>
    <h2 class="title">myBlog</h2>
    <p class="title">because the internet needs to know what I think</p>
</header>

<nav>
    <ul>
        <li>
            <a href="blog.php"> All Blog Items</a>
        </li>
        <li>
            <a href="blog.php?category=Work">Work Items</a>
        </li>
        <li>
            <a href="blog.php?category=University">University Items</a>
        </li>
        <li>
            <a href="blog.php?category=Family">Family Items</a>
        </li>
        <li>
            <a href="add.php">Insert a Blog Item</a>
        </li>
    </ul>
</nav>

<main>

    <?php
    if(mysqli_num_rows($result)>0)
    {
        while($row= $result->fetch_assoc())
        {
            ?>
                <div class="blogentry">
                    <h3>
                        <?php
                        echo $row["entryTitle"];
                        if($row["submitter"]!=NULL){
                            echo " by ".$row["submitter"];
                        }
                        ?>
                    </h3>
                    <p class="italic">
                        <?php
                        echo $row["category"];
                        ?>
                    </p>
                    <p>
                        <?php
                        echo $row["entrySummary"];
                        ?>
                    </p>
                </div>

            <?php
        }
    }
    else{
        echo "No data found.";
    }
    ?>


</main>

<footer>
    <p>Designed by Christophe Meyers, 2016</p>
</footer>


</body>
</html>
