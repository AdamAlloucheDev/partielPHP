<?php if(isset($_SESSION['message'])): ?>
  <div class="message">
    <?= $_SESSION['message'] ?>
  </div>
<?php endif; ?>

<div class="blocs">
  <?php foreach($blocs as $bloc): ?>
    <div class="bloc" style="background:<?= $bloc['style']; ?>;">
      <h3 class="post-title"><?= $bloc['title']; ?></h3>
      <p class="description"><?= $bloc['summary']; ?></p>
      <p class="content"><?=  nl2br(htmlspecialchars($bloc['content'])) ; ?></p>
      <p class="actions">
			<a href="index.php?page=blocs&action=edit&id=<?= $bloc['id']; ?>">Modifier</a> | <a href="index.php?page=blocs&action=delete&id=<?= $bloc['id']; ?>"  onclick="return confirm('Confirmer la suppression')">Supprimer</a>
		  </p>
    </div>
  <?php endforeach; ?>
</div>