<!DOCTYPE html>
<html>

<head>
    <title>icons grid</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/canvas.js"></script>
</head>

<body>
    <header>
        <div id="logo">
            <a href="#">Logo</a>
        </div>
        <nav>
            <ul id="menu">
                <li><a href="#" class="active">item 1</a></li>
                <li><a href="#">item 2</a></li>
                <li><a href="#">item 3</a></li>
                <li><a href="#">item 4</a></li>
                <li><a href="#">item 5</a></li>
                <li><a href="#">item 6</a></li>
            </ul>
        </nav>
        <div id="search">
            <form action="" method="get">
                <input type="hidden" name="p" value="search">
                <input type="text" name="q" value="<? echo $_GET['q'] ?>">
                <input type="submit" value="search">
            </form>
        </div>
    </header>
  
    <main>
     <? echo $content ?>
    </main>
</body>

</html>