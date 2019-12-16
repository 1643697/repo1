<!DOCTYPE html>
<html>
    <head>
        <title>Sektch</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        
        <h1>Search Bar</h1>
        
        <!-- <script src="Javascripts/lettersOnly.js"></script> -->
        
        <form name = "webinfo" action="action.php" method="POST">
        <!-- This form posts to	action.php,	and	the	page	
        action.php can access the posted form data using	
        the	names of the input elements (“name”	and	“age”)
        like so: $_POST[‘name’]	and	$_POST[‘age’]-->
        
            <br>Search:<br>
            <input name="firsts" id="firsts" placeholder="firsts" onkeyup="lettersOnly(this)">
            
            <input class="button" type="submit" value="Submit"> 
        </form>

        <br>

        
    </body>
</html>