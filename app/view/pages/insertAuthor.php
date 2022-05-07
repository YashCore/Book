<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="../../style/body.css">
        <link rel="stylesheet" href="../../style/button.css">
    </head>
    <body>
        <div class="container">
            <nav class="menu">
                <ul class="main-menu">
                    <li class="active"><i class="fa fa-home"></i>Insert</li>
                    <li onclick="location.href='update.php'"><i class="fa fa-briefcase"></i>Update</li>
                    <li onclick="location.href='delete.php'"><i class="fa fa-user"></i>Delete</li>
                    <li onclick="location.href='search.php'"><i class="fa fa-search"></i>Search</li>
                </ul>
            </nav>
            <article>
                <div style="float: right">
                    <script src="../../scripts/js/General.js"></script>
                    <label class="switch">
                        <input type="checkbox" id="form" onclick="location.href='../../index.php'" checked>
                        <span class="slider round"></span>
                    </label>
                    <br>
                    <label for="form">Insert Book</label>
                </div>
                <h1>Enter the Author data</h1>
                <div class="content">
                    <form action="../../scripts/create.php" method="post">
                        <input type="hidden" id="request_form" name="request_form" value="insertAuthor">
                        <label for="name">Name*</label>
                        <input type="text" id="name" name="name"  maxlength="30"  autocomplete="onc" autofocus required placeholder="Insert name">
                        <br><br>
                        <label for="surname">Surname*</label>
                        <input type="text" id="surname" name="surname" maxlength="30" required placeholder="Insert surname">
                        <br><br>
                        <label for="birth_date">Date of birth*</label>
                        <input type="date" id="birth_date" name="birth_date" min="1500-00-00" required placeholder="Insert birth date">
                        <br><br>
                        <label for="description">Author description*</label>
                        <input type="text" id="description" name="description" minlength="50" maxlength="255" required placeholder="Insert description">
                        <br><br>
                        <button type="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </form>
                </div>
            </article>
        </div>
    </body>
</html>
