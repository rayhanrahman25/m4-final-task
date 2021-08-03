<?php
include_once "functions.php";
$fruits = ['seven', 'taxi-driver', 'psycho', 'fight-club', 'the-god-father'];
$file_type = [
'image/png',
'image/jpg',
'image/jpeg'
];
if($_FILES['photo']){
    $total_files = count($_FILES['photo']['name']);
    for($i=0; $i<$total_files; $i++){
    if(in_array($_FILES['photo']['type'][$i],$file_type)!==false && $_FILES['photo']['size'][$i] < 5*1024*1024){
      move_uploaded_file($_FILES['photo']['tmp_name'][$i], "files/".$_FILES['photo']['name'][$i]);
    }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

<style>
    body{
        margin-top: 30px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row">
<div class="column column-60 column-offset-20">

                <h1>Movie City Login Form</h1>
                <pre>
                    <p>
                        <?php
                        print_r($_FILES);
                        ?>
                    </p>
                </pre>
               <p>Watch World Best Series And Movies Here, One month Free Subsciption</p>
                
               <p>
               <?php
$sfruits = filter_input( INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY );
if ( isset( $sfruits ) ) {
    echo "Favourite Movies: " . ucwords( join( ', ', $sfruits ) );
}
?>
               </p>
</div>
</div>
</div>
</div>
</div>
    <div class="container">
        <div class="row">
                <div class="column column-60 column-offset-20">
                    <!-- method = GET/POST -->
                    <form method="POST" enctype="multipart/form-data">
                     <input type="text" name="fname" placeholder="First Name" value="<?php fristname();?>"><br>
                     <input type="text" name="lname" placeholder="First Name"  value="<?php lastname();?>"><br>
                         <label for="fruits">Pick Your Favourite Movie / Movies</label>
                         <select name="fruits[]" id="fruits" multiple>
                             <option value="" selected disabled>Pick Your Favourite Movie / Movies</option>
                            <?php printFruits( $fruits, $sfruits );?>
                         </select>
                         <label for="photo">NID CARD PHOTO / DRIVING LICENSE / PASSPORT</label><br>
                         <!--==== want to accept multiple file ==== -->
                         <input type="file" name="photo[]" id="photo"><br>
                         <input type="file" name="photo[]" id="photo"><br>
                         <input type="file" name="photo[]" id="photo"><br>
                         <input type="checkbox" name="film[]" value="over-eighteen" <?php isChecked( 'over-eighteen' );?>>
                         <label >I'm 18+ <label><br>
                         <input type="checkbox" name="film[]" value="loves-over-eihteen-movies" <?php isChecked( 'loves-over-eihteen-movies' );?>>
                         <label>You want 18+ scene ? <label><br>
                         <input type="checkbox" name="film[]" value="genre" <?php isChecked( 'genre' );?>>
                         <label >Horror / Thriller / Sci-fi <label><br>
                    <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
    </div>
</body>
</html>