

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="../../style/body.css">
</head>
<body>
<div class="container">
    <nav class="menu">
        <ul class="main-menu">
            <li onclick="location.href='../../index.php'"><i class="fa fa-home"></i>Insert</li>
            <li onclick="location.href='update.php'"><i class="fa fa-briefcase"></i>Update</li>
            <li class="active"><i class="fa fa-user"></i>Delete</li>
            <li onclick="location.href='search.php'"><i class="fa fa-search"></i>Search</li>
        </ul>
    </nav>
    <article>
        <h1>Select the data to delete</h1>
        <div class="content">
            <form action="../../scripts/delete.php" method="post">
                <label for="title">Title*</label>
                <input type="text" id="title" name="title"  maxlength="150" autofocus required placeholder="Insert book title">
                <br><br>
                <label for="author">Author*</label>
                <input type="text" id="author" name="author" maxlength="60" required placeholder="Insert author">
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
                <div class="panel pink">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
    </article>
</div>
</body>
</html>