<?php
$arrayError=array();

if (isset($_SESSION['arrayError'])) {
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/etudiant.css">
    <title>Document</title>
</head>
<body>
<?php require_once(ROUTE_DIR.'vue/inc/1menu.html.php'); ?> 
<div class="creer">

<form method="POST" action="<?php echo WEB_ROUTE ?>">
		<input type="hidden" name="controller" value="etudiantController">
        <input type="hidden" name="action" value="inscrit">
<h1>Inscription</h1>
<div class="matri">
<input class="matri1" type="text" name="" placeholder="Saisir le Matricule" id=""><a href="#"><i class=" sear fa-sharp fa-solid fa-magnifying-glass"></i></a>
</div>
<div class="form_input">
    <label for="" >Nom Complet Etudiant</label>
     <input type="text" name="nom_complet" >
     <main><?php echo isset($arrayError['nom_complet']) ? $arrayError['nom_complet'] : '' ?></main>
</div>
<div class="form_input">
    <label for="">Téléphone</label>
     <input type="text" name="telephone" >
     <main><?php echo isset($arrayError['telephone']) ? $arrayError['telephone'] : '' ?></main>
</div>
<div class="form_input">
    <label for="">Adresse</label>
     <input type="text" name="adresse" >
     <main><?php echo isset($arrayError['adresse']) ? $arrayError['adresse'] : '' ?></main>
</div>
<div class="form_input2">
    <label for="" >Année Scolaire</label> 
    <select name="anneescolaire" id="">
    <option value="Choisir la Classe">Choisir Année</option>
    <option value="2022-2023">Année en Cours</option>
    <option value="2023-2024">2023-2024</option>
    <option value="2024-2025">2024-2025</option>
  </select>
  <main><?php echo isset($arrayError['anneescolaire']) ? $arrayError['anneescolaire'] : '' ?></main>
</div>
<div class="form_input1">
    <label for="">La Classe inscrit</label> <br>
    <?php foreach ($classes as $key => $val):?>
        <?php echo $val['libelle'];?>
     <input type="checkbox" name="classe[]" value="<?=$val['libelle'];?>" id=""><br>
    <?php endforeach;?>
     <main><?php echo isset($arrayError['classe']) ? $arrayError['classe'] : '' ?></main>
</div>
<button type="submit">Création</button>
</form>
</div>
</body>
</html>