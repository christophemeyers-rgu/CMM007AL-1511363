<?php
/**
 * Created by PhpStorm.
 * User: 1511363
 * Date: 04/05/2016
 * Time: 10:58
 */


if($_SERVER['REQUEST_METHOD']==='POST'){
    $db = new MySQLi(
        "ap-cdbr-azure-east-c.cloudapp.net",
        "becd1536e6553c",
        "f13cc5a6",
        "CMM007ALDB-1511363"
    );

    $title = $_POST["Title"];
    $summary = $_POST["Summary"];
    $category = $_POST["Category"];
    $author = $_POST["Author"];


    $query = "INSERT INTO blogview (entryTitle, entrySummary, Category, submitter)
              VALUES(?,?,'".$category."',?) ";

    $stmt = $db->prepare($query);

    $stmt->bind_param("sss",$title,$summary,$author);
    $stmt->execute() or die("Error: ".$query."<br>".$db->error);

    $db->close();

    header("Location: blog.php");
}
elseif($_SERVER['REQUEST_METHOD']==='GET'){

}
else{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">




    <title>Add</title>
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

    <div  align="center">

        <form action="add.php" method="post">
            <table>
                <tr>
                    <td class="descriptions">
                        Entry Title:
                    </td>
                    <td>
                        <input class="textbox" type="text" name="Title" required>
                    </td>
                </tr>
                <tr>
                    <td class="descriptions">
                        Entry Summary:
                    </td>
                    <td>
                        <textarea class="textbox" name="Summary" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="descriptions">
                        Category:
                    </td>
                    <td>
                        <select class="textbox" name="Category" required>
                            <option value="Work">Work</option>
                            <option value="University">University</option>
                            <option value="Family">Family</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="descriptions">
                        Submitted By:
                    </td>
                    <td>
                        <input class="textbox" type="text" name="Author">
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td align="right">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</main>

<footer>
    <p>Designed by Christophe Meyers, 2016</p>
</footer>


</body>
</html>
