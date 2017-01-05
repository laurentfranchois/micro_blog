<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');

$id=0;
$rep="";
  if (isset($_GET['id']) && !empty($_GET['id'])){

    $id=$_GET['id'];
    $query = "select * from messages where id='".$_GET['id']."'";
    $prep = $pdo->query($query);
    if($data=$prep->fetch()){
      $rep=$data['contenu'];
    }
  }
?>

<div class="row">
    <form method="post" action="message.php">
        <div class="col-sm-10">
            <div class="form-group">
                <textarea id="message" name="message" class="form-control" placeholder="Message"> <?php echo $rep;?></textarea>
                <input type="hidden" name="id" value=<?php echo $id ?>>

            </div>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
        </div>
    </form>
</div>

<?php
$query = 'SELECT * FROM messages';
$stmt = $pdo->query($query);

while ($data = $stmt->fetch()) {
	?>
	<blockquote>
		<?= $data['contenu']?>
    <a href="index.php?id=<?=$data['id']?>"><button type="button" class="btn btn-success btn-lg">Modifier</button></a>
    <a href="suppression_message.php?id=<?=$data['id']?>"><button type="button" class="btn btn-primary btn-lg">Supprimer</button></a>
    <?= $data['date'] ?>


	</blockquote>

	<?php
}
?>

<?php include('includes/bas.inc.php'); ?>
