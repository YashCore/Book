<?php

use PDOWrapper\DB;
require_once('scripts/lib/Db.class.php');
require_once('scripts/lib/Methods.php');


$insert = getData('insert');
$form  = getData('formName');

if(isset($insert) && $form == 'create.php')
{
    switch ($insert){
        case 400:
            $message =  "Non esiste nessun autore.<br>Si richiede d'inserire minimo un Autore";
            popup($message);
            break;

        case 201:
            $message =  "Libro registrato!";
            popup($message);
            break;

        case 202:
            $message =  "Autore registrato!";
            popup($message);
            break;

        default:
            $message =  "Ops!<br> Qualcosa è andato storto!";
            echo "<script type='text/javascript'>alert('$message');</script>";
    }

}


$db = new DB();
$data = $db->query("SELECT id,name,surname from `author`");
$db->CloseConnection();


?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="style/body.css"/>
        <link rel="stylesheet" href="style/button.css"/>
    </head>
    <body>
        <div class="container">
            <nav class="menu">
                <ul class="main-menu">
                    <li class="active"><i class="fa fa-home"></i>Insert</li>
                    <li onclick="location.href='view/pages/update.php'"><i class="fa fa-briefcase"></i>Update</li>
                    <li onclick="location.href='view/pages/delete.php'"><i class="fa fa-user"></i>Delete</li>
                    <li onclick="location.href='view/pages/search.php'"><i class="fa fa-search"></i>Search</li>
                </ul>
            </nav>
            <article>
                <div style="float: right">
                    <script src="scripts/js/General.js"></script>
                    <label class="switch">
                        <input type="checkbox" id="form" onclick="location.href='view/pages/insertAuthor.php'"/>
                        <span class="slider round"></span>
                    </label>
                    <br>
                    <label for="form">Insert Author</label>
                </div>
                <h1>Enter the Book data</h1>
                <div class="content">
                    <form action="scripts/create.php" method="post">
                        <input type="hidden" id="request_form" name="request_form" value="index">
                        <label for="title">Title*</label>
                        <input type="text" id="title" name="title"  maxlength="150" autofocus required placeholder="Insert book title">
                        <br><br>
                        <label for="author">Author*</label>
                        <select id="author" name="author" required>
                            <?PHP
                                if($data){
                                    echo "<option value='none' selected disabled hidden>Select an Option</option>";
                                    foreach ($data as $key => $att){
                                        $id = $att['id'];
                                        $name = $att['name'].' '.$att['surname'];
                                        echo "<option value='$id'>$name</option>";
                                    }
                                }else{
                                    echo "<option value='none'>Non sono presenti Autori: Aggiungere ne almeno uno</option>";
                                }
                            ?>
                        </select>
                        <br><br>
                        <label for="publisher">Publisher*</label>
                        <input type="text" id="publisher" name="publisher" maxlength="60" required placeholder="Insert publisher">
                        <br><br>
                        <label for="country">Origin Country*</label>
                        <input type="text" id="country" name="country" maxlength="60" required placeholder="Insert origin country">
                        <br><br>
                        <label for="publicationDate">Publication Date*</label>
                        <input type="date" id="publicationDate" name="publicationDate" min="1500-00-00" required placeholder="Insert publication date ">
                        <br><br>
                        <label for="genere">Select Book Genere*</label>
                        <select name="genere" id="genere" required>
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="yellow">YELLOW</option>
                            <option value="horror">HORROR</option>
                            <option value="erotic">EROTIC</option>
                            <option value="fantasy">FANTASY</option>
                            <option value="humorous">HUMOROUS</option>
                            <option value="thriller">THRILLER</option>
                            <option value="dystopia">DYSTOPIA</option>
                            <option value="human psyche">HUMAN PSYCHE</option>
                            <option value="science fiction">SCIENCE FICTION</option>
                            <option value="pink or romance">PINK OR ROMANCE</option>
                            <option value="historical novel">HISTORICAL NOVEL</option>
                            <option value="adventure and action">ADVENTURE AND ACTION</option>
                            <option value="biography and autobiography">BIOGRAPHY AND AUTOBIOGRAPHY</option>
                        </select>
                        <br><br>
                        <button type="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </form>
                </div>
            </article>
        </div>
    </body>
</html>