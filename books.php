<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
</head>
<body>

<h2>Book List</h2>

<?php

// Create a multidimensional array
$books = array(

    array(
        "title" => "PHP and MySQL Web Development",
        "author" => "Luke Welling",
        "price" => 39.99,
        "pages" => 800
    ),

    array(
        "title" => "Learning PHP, MySQL & JavaScript",
        "author" => "Robin Nixon",
        "price" => 29.99,
        "pages" => 750
    ),

    array(
        "title" => "Beginning PHP and MySQL",
        "author" => "W. Jason Gilmore",
        "price" => 24.99,
        "pages" => 600
    )

);

// Display the books
foreach ($books as $book) {

    echo "<p>";
    echo "<strong>Title:</strong> " . $book["title"] . "<br>";
    echo "<strong>Author:</strong> " . $book["author"] . "<br>";
    echo "<strong>Price:</strong> $" . $book["price"] . "<br>";
    echo "<strong>Pages:</strong> " . $book["pages"];
    echo "</p>";

}

?>

</body>
</html>
