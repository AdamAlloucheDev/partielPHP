<?php if(!empty($errors)): ?>
	<div class="errors">
		<?php foreach($errors as $error): ?>
			<?= $error ?><br>
		<?php endforeach; ?>
	</div>
<?php endif; ?>



<h2><?= ($action == 'new') ? "Ajouter un memo bloc :" : "Modifier un memo bloc :" ?></h2>

<form action="" method="POST">

  <label for="title">Titre *</label>
  <input type="text" name="title" id="title" value="<?= isset($submittedtitle) ? $submittedtitle: ($selectedBloc['title'] ?? '');?>" />

  <label for="summary">Description <small>(Sauts de lignes non pris en compte à l'affichage)</small></label>
  <textarea name="summary" id="summary"><?= isset($submittedSummary) ? $submittedSummary: ($selectedBloc['summary'] ?? '');?></textarea>

  <label for="content">Contenu <small>(Sauts de lignes pris en compte à l'affichage)</small> *</label>
  <textarea rows="7" name="content" id="content"><?= isset($submittedContent) ? $submittedContent: ($selectedBloc['content'] ?? '');?></textarea>

  <label for="style">Background color <small>(Référence couleur hexadécimale, #ffff88 par défaut)</small></label>
  <input type="text" name="style" id="style" value="<?= isset($submittedStyle) ? $submittedStyle: ($selectedBloc['style'] ?? '#ffff88');?>" />

  <p><small>Les champs * sont obligatoires</small></p><br>

  <button>Enregistrer</button>
</form>

