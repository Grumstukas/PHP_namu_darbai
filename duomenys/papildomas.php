<?php
session_start();
function animalID($number)
{
    $idNo = '';
    for ($i = 0; $i < 20; $i++) {
        if ($i == 15) {
            $idNo .= $number;
        } else {
            $idNo .= rand(1, 9);
        }
    }
    return $idNo;
}

function generateAnimal()
{
    $usedAnimals = [];
    foreach (range(0, 8) as $animal) {

        do {
            $type = rand(1, 18);
        } while (in_array($type, $usedAnimals));


        if ($type < 10) {
            $code = animalID(7); //cat
        } else {
            $code = animalID(5); //dog
        }

        $animalInfo[$animal] = ['type' => $type, 'code' => $code];
        $usedAnimals[] = $type;
    }
    return $animalInfo;
}

$animals = generateAnimal();
$boxStyle = 'width: 225px; height: 225px;  display:inline-block; float:left;';
$box = '';
$_SESSION['pet'] = 0;
$_SESSION['history'][] = 0;
$true = 0;




if(isset($_POST['animal'])){

  $countOfSelected = count($_POST['animal']);
  echo 'countOfSelected '.$countOfSelected.'<br>';
      
    foreach(range(0,$countOfSelected-1) as $value){
      if(substr($_POST['animal'][$value], 15, 1) == 7){
        $true++; 
      }
    }
    echo '<br> cats '.$_SESSION['pet'].'<br> suskaiciuota atitikimų = '.$true;

    if($true == $_SESSION['pet']){
      echo ' VALIO ';
    }else{
      echo ' NNO ';
    }
    // header('Location: http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/papildomas.php');
    // die();
  }

?>

<h1>Select all cats :</h1>
  <form action="" method="POST" style="width: 675px; display:inline-block; float:left;">
    <?php
      foreach (range(0, 8) as $animal){
        $box .= '<div style="background-image: url(animalPhoto/images' .$animals[$animal]['type']. '.jpg); ' .$boxStyle. '"><input type="checkbox" name="animal[]" value="' .$animals[$animal]['code']. '  "style="width: 50px; height: 50px;"></div>';
        if ((float)$animals[$animal]['type'] < 10) {
          $_SESSION['pet']++;
        }
      }
      $_SESSION['history'][] = $_SESSION['pet'];
        echo $box;
    ?>
    <input type="submit" value="Submit">
  </form>

  <?php 
  // session_unset();