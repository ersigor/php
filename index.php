
<!DOCTYPE html>
<html lang "en">
<body>
<header>
<link rel="stylesheet" href="hw4.css" >  
<div>
</div>
</header>
<footer>
    
<?php
$files1 = array_filter(scandir("./img"), function($filesearch) {
        return !preg_match("/^\..*$/", $filesearch) && !is_dir($filesearch);});
for ($a=0; $a<=count($files1)+1;$a++){
    if (preg_match("/^.*(\.jpg|\.jpeg|\.gif)$/", $files1[$a])) {
   echo '<img class=img src=/img/'.$files1[$a].' alt="img">';
    }
   }   


//if (isset($_POST['id'])) {
//    echo "<br>POST id - " . $_POST['id'] . "<br>";
//} else {
//    echo "<br>Нет POST id<br>";
//}

if (isset($_FILES['image2']) && $_FILES['image2']['error'] == 0 ){
    if (preg_match("/^.*(\.jpg|\.jpeg|\.gif)$/", $_FILES['image2']['name'])) {
        if (move_uploaded_file($_FILES['image2']['tmp_name'], 'img/'. time() . "_" .$_FILES['image2']['name'])) {
            echo "Картинка загружена";
            header('Location:'.$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Ошибка при сохранении картинки";
        }
    } else {
        echo "Картинка не того формата!";
    }
} else {
    echo "Картинки нет";
} 

?>
    <br><br>
<form method="post" enctype="multipart/form-data" action="">
    <input type="text" name="id" required><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <input type="file" name="image2" required><br>
    <input type="submit">
</form>

</footer>
</body>
</html>