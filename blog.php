<?php
include './Lists.Class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog</title>
</head>
<body>
<pre>
    <h1>PHP Blog Assignment</h1>
    <h3>Search Engine</h3>
    <form action='./Search.Class.php' method='GET'>
    <input type='text' name='search' size='50' />
    <input type='submit' value='search' />
    </form>
    <h3>Blog Lists</h3>
    <?php
    $blog = array();
    $dataFile = './data.json';
    $blogContent = file_get_contents($dataFile);
    $blogArray = json_decode($blogContent, true);
    $blog = $blogArray['articles'];
    foreach ($blog as $key => $value){ 
                foreach ($value as $id => $lists){
                    if (is_numeric($lists)){
                        continue;
                    } else {
                        echo "<br>$lists<br>"; 
                    } 
                }
            }   
    ?>
</pre>   
</body>
</html>