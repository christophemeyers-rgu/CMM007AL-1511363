<?php
/**
 * Created by PhpStorm.
 * User: 1511363
 * Date: 04/05/2016
 * Time: 10:57
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">




    <title>Index</title>
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
            <a href="blog.php">Work Items</a>
        </li>
        <li>
            <a href="blog.php">University Items</a>
        </li>
        <li>
            <a href="blog.php">Family Items</a>
        </li>
        <li>
            <a href="add.php">Insert a Blog Item</a>
        </li>
    </ul>
</nav>

<main>
    <div class="grid-container">

        <div class="grid-66 tablet-grid-66 mobile-grid-100 " id="MainText">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta pharetra lacinia. Curabitur mauris neque, finibus eget faucibus eget, condimentum pulvinar augue. Maecenas facilisis, ex vitae fermentum pretium, sem ligula tincidunt neque, vitae accumsan lorem leo a urna. Duis faucibus, sapien vitae dapibus hendrerit, mauris lectus hendrerit purus, a pulvinar nisi augue egestas ipsum. Proin laoreet eleifend justo, non sagittis orci ornare et. Phasellus tempus neque nec tempor porttitor. Cras ultricies tellus odio, sit amet placerat odio pretium in. Aenean posuere aliquam leo id laoreet. Etiam tristique urna felis, a auctor orci blandit eget. Pellentesque nec lacus orci. Praesent ac justo arcu. Sed rhoncus ornare enim, ut fringilla ligula tempor sit amet.
            </p>
        </div>

        <div class="grid-33 tablet-grid-33 mobile-grid-100 " id="BlogImage">

            <img src="assets/images/blog.png" width="200px">

        </div>

    </div>
</main>

<footer>
    <p>Designed by Christophe Meyers, 2016</p>
</footer>


</body>
</html>
