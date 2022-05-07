<?php

use PDOWrapper\DB;

require_once("lib/Methods.php");
require_once("lib/Db.class.php");

$script = getData('request_form');
$author = getData('author');
$formName = getFormName();


if($author == 'none'){
    header("location: ../index.php?insert=400&formName=$formName");
}

if ($script == 'index'){

    $title = getData('title');
    $publisher = getData('publisher');
    $country = getData('country');
    $publicationDate = date('Y-m-d',getData('publicationDate'));
    logFile('DATE',$publicationDate);
    $genere = strtoupper(getData('genere'));

    if($title){

        $sql = "INSERT INTO `book` ( `Title`, `Author`, `Publisher`, `Country`, `Pubblication Date`, `Genere`)
                VALUES  (:title, :author, :publisher, :country, :publicationDate, :genere)";
        $data =  array(
            "title" => $title,
            "author" => $author,
            "publisher" => $publisher,
            "country" => $country,
            "publicationDate" => $publicationDate,
            "genere" => $genere,
        );

        $DB = new DB();
        $DB->query($sql,$data);
        $DB->closeConnection();
    }

    header("location: ../index.php?insert=201&formName=$formName");

}
elseif ($script == 'insertAuthor')
{
    $name = getData('name');
    $surname = getData('surname');
    $birth_date = date('Y-m-d',getData('birth_date'));
    $description = getData('description');

    if($name){
        $sql = "INSERT INTO `author` (`Name`,`Surname`,`Birth_date`,`Description`) 
                VALUES (:name,:surname,:birth_date,:description)";

        $data = array(
            'name' => $name,
            'surname' => $surname,
            'birth_date' => $birth_date,
            'description' => $description,
        );

        $DB = new DB();
        $response[''] = $DB->query($sql,$data);
        $DB->closeConnection();

        header("location: ../view/pages/insertAuthor.php?insert=202&formName=$formName");
    }
}






