<?php

use PDOWrapper\DB;

require_once("../../scripts/lib/Methods.php");
require("../../scripts/lib/Db.class.php");



$db = new DB();

$data = $db->query("SELECT  `Title`, CONCAT(author.Name, ' ', author.Surname) as Author,  `Publisher`, `Country`, `Pubblication Date`, `Genere`   
                          FROM book INNER JOIN author ON book.Author = Author.id ");

print_r($data);
$db->CloseConnection();

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="../../style/body.css">
    <link rel="stylesheet" href="../../style/table.css">
</head>
<body>
<div class="container">
    <nav class="menu">
        <ul class="main-menu">
            <li onclick="location.href='../../index.php'"><i class="fa fa-home"></i>Insert</li>
            <li class="active"><i class="fa fa-briefcase"></i>Update</li>
            <li onclick="location.href='delete.php'"><i class="fa fa-user"></i>Delete</li>
            <li onclick="location.href='search.php'"><i class="fa fa-search"></i>Search</li>
        </ul>
    </nav>
    <article>
        <h1>Modify the data</h1>
        <div class="content">
            <?PHP if($data){ ?>
            <table >
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Country</th>
                    <th>Publication Date</th>
                    <th>Genere</th>
                </tr>
                <?PHP
                    for ($i=0; $i < count($data) ; $i++) {
                        echo "<tr>";
                        foreach ($data[$i] as $key => $value)
                            $vars= array(
                                    "var" => true,
                                    ""
                            );
                            if(strcmp($key,'id') != 0)
                                th(a($value,'scripts/update.php'));
                        echo "</tb>";
                    }
                }
                else{
                    echo "<p>Non sono stati registrati libri</p>";
                }
                ?>
            </table>
        </div>
    </article>
</div>
</body>
</html>