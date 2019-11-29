<?php
session_start();
function animalID($number)
{
    $idNo = '';
    for ($i = 0; $i < 20; ++$i) {
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
function isThisCat($countOfSelected)
{
    $true = 0;
    foreach (range(0, $countOfSelected - 1) as $value) {
        // echo substr($_POST['animal'][$value], 15, 1);
        if (substr($_POST['animal'][$value], 15, 1) == 7) {
            ++$true;
        }
    }

    return $true;
}
function amountOfCats($animals)
{
    $cats = 0;
    foreach (range(0, 8) as $animal) {
        if ($animals[$animal]['type'] < 10) {
            ++$cats;
        }
    }

    return $cats;
}
function generateForm($animals)
{
    $boxStyle = 'width: 130px; height: 130px;  display:inline-block; float:left; background-size:contain; background-repeat:no-repeat;';
    $box = '';
    foreach (range(0, 8) as $animal) {
        $box .= '<div style="background-image: url(animalPhoto/images'.$animals[$animal]['type'].'.jpg); '.$boxStyle.'">
        <input type="checkbox" name="animal[]" value="'.$animals[$animal]['code'].'  "style="width: 25px; height: 25px;"></div>';
    }

    return $box;
}

$animals = generateAnimal();

if (empty($_POST['animal'])) {
    $_SESSION['animals'] = $animals;
} elseif (!empty($_POST['animal'])) {
    $countOfSelected = count($_POST['animal']);
    $_SESSION['allCats'] = amountOfCats($_SESSION['animals']);
    $_SESSION['rightSelection'] = isThisCat($countOfSelected);

    if ($_SESSION['rightSelection'] == $_SESSION['allCats']) {
        header('Location: http://localhost/_pamoka1/PHP_namu_darbai/capcha/youaregood.php');
        die();
    } else {
        header('Location: http://localhost/_pamoka1/PHP_namu_darbai/capcha/nno.php');
        die();
    }
}

  ?>
<div style="width: 390px; display:inline-block; float:left;">
<h3 style="width: 250px; display:inline-block; float:left; line-height:100px">Select all animals that look like this:</h3>
<div style="width: 130px; height: 120px; display:inline-block; float:left; background-image: url(animalPhoto/main2.png); background-size:contain; background-repeat:no-repeat;margin-top:15px;"></div>
<br>
  <form action="" method="POST" style="width: 390px; display:inline-block; float:left;">
    <?php
      echo generateForm($_SESSION['animals']);
    ?>
    <input type="submit" value="Submit" style="width: 100px; height: 30px; font-size:20px;margin:10px 145px;">
  </form>
  </div>

  <?php
//   session_unset();
