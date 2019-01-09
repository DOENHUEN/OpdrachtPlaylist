
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>

<form action='' method='post' class='myForm'>
    <div class='form-row'>
      <label for='naam'>Naam</label>
      <input id='naam' name='naam' type='text'/>
    </div>
    <div class='form-row'>
      <label for='mail'>mailadres</label>
      <input id='mail' name='mail' type='text'/>
    </div>
    <div class='form-row'>
      <label for='artiest1'>artiest 1</label>
      <input id='artiest1' name='artiest1' type='text'/>
    </div>
    <div class='titel1'>
      <label for='titel1'>titel 1</label>
      <input id='titel1' name='titel1' type='text'/>
    </div>
    <div class='form-row'>
      <label for='youtube1'>Youtube</label>
      <input id='youtube1' name='youtube1' type='text'/>
    </div>
    <div class='form-row'>
      <label for='artiest2'>artiest 2</label>
      <input id='artiest2' name='artiest2' type='text'/>
    </div>
    <div class='form-row'>
      <label for='titel2'>titel 2</label>
      <input id='titel2' name='titel2' type='text'/>
    </div>
    <div class='form-row'>
      <label for='youtube2'>Youtube</label>
      <input id='youtube2' name='youtube2' type='text'/>
    </div>
    <div class='form-row'>
      <label for='artiest3'>artiest 3</label>
      <input id='artiest3' name='artiest3' type='text'/>
    </div>
    <div class='form-row'>
      <label for='titel3'>titel 3</label>
      <input id='titel3' name='titel3' type='text'/>
    </div>
    <div class='form-row'>
      <label for='youtube3'>Youtube</label>
      <input id='youtube3' name='youtube3' type='text'/>
    </div>
    <div class='form-row'>
      <button type='submit' name='submit'>Submit</button>
    </div>
</form>

</body>
</html>


<?php

  $input_naam = isset($_POST['naam'])? $_POST['naam'] : '/';
  $input_mail = isset($_POST['mail'])? $_POST['mail'] : '/' ;
  $input_artiest1 = isset($_POST['artiest1'])? $_POST['artiest1'] : '/' ;
  $input_titel1 = isset($_POST['titel1'])? $_POST['titel1'] : '/' ;
  $input_youtube1 = isset($_POST['youtube1'])? $_POST['youtube1'] : '/' ;
  $input_artiest2 = isset($_POST['artiest2'])? $_POST['artiest2'] : '/' ;
  $input_titel2 = isset($_POST['titel2'])? $_POST['titel2'] : '/' ;
  $input_youtube2 = isset($_POST['youtube2'])? $_POST['youtube2'] : '/' ;
  $input_artiest3 = isset($_POST['artiest1'])? $_POST['artiest3'] : '/' ;
  $input_titel3 = isset($_POST['titel3'])? $_POST['titel3'] : '/' ;
  $input_youtube3 = isset($_POST['youtube3'])? $_POST['youtube3'] : '/' ;



  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $myFile = "result.txt";
    $myFileLink= fopen($myFile, 'a+') or die("Can't open file.");
    $newContents = "$input_naam gaf als mailadres $input_mail op en koos voor $input_artiest1 met $input_titel1, $input_artiest2 met $input_titel2 en $input_artiest3 met $input_titel3" . PHP_EOL;
    /*
    $newContents = $input_naam . ' '. $input_mail .' '. $input_artiest1 .' '. $input_titel1 .' '. $input_youtube1 .' '. $input_artiest2 .' '. $input_titel2 .' '. $input_youtube2 .' '. $input_artiest3 .' '. $input_titel3 .' '. $input_youtube3 . PHP_EOL;
    */
    fwrite($myFileLink, $newContents);
    fclose($myFileLink);
    header('Location: bedankt.php');
  }


 ?>
