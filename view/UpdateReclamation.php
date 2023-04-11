<?php
include '../Controller/ReclamationC.php';

$pc = new ReclamationC();
if(isset($_GET['idR'])) {
    $idR = $_GET['idR'];
    $reclamation = $pc->getReclamation($idR);
}
if(isset($_POST['update'])) {
    $reclamation = new Reclamation($_POST['idR'], $_POST['typeR'], $_POST['descriptionR']);
    $pc->updateReclamation($idR, $reclamation);
    header('Location: listReclamation.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindzone</title>
</head>
<body>
   <h1>Edit Reclamation</h1>
   <form method="post" action="UpdateReclamation.php">
        <label for="idR">Id Rec:</label>
        <input type="text" name="idR" value="<?php echo $reclamation['idR'] ?>" required><br><br>
        <label for="typeR">Type:</label>
        <input type="text" name="typeR" value="<?php echo $reclamation['typeR'] ?>" required><br><br>
        <label for="descriptionR">Description:</label>
        <input type="text" name="descriptionR" value="<?php echo $reclamation['descriptionR'] ?>" required><br><br>
        <input type="submit" name="update" value="Update">
   </form>
</body>
</html>
