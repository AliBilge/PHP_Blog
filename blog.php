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
    <h1>PHP Blog Assignment</h1>
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
    
</body>
</html>