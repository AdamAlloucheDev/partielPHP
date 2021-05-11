<?php

  require_once ('models/Memo.php');
  require_once ('tools.php');

  $blocs = getAllBlocs();
  $action = $_GET['action'];
  $errors = [];
  $messages = [];

  if ($action == 'new') {

    $view = 'views/memoFormView.php';

    if(!empty($_POST)){

      $submittedTitle = $_POST['title'];
      $submittedSummary = $_POST['summary'];
      $submittedContent = $_POST['content'];
      $submittedStyle = $_POST['style'];

      if (empty($submittedTitle)) {
        $errors[] = "Le titre est obligatoire.";
      }

      if (empty($submittedContent)) {
        $errors[] = "Le contenu est obligatoire.";
      }

      if (!empty($submittedStyle)){
        if (!hexVerify($submittedStyle)){
          $errors[] = "Le code hex est incorrect.";
        }
      }
      
      if (empty($errors)) {
        $_SESSION['message'] = 'Memo bloc enregistré !';
        $result = addBloc($_POST);
        header('Location: index.php?page=articles&action=list');
          exit;
      }
    }

      
  }

  elseif($action == 'edit'){

    $view = 'views/memoFormView.php';
    $blocId = $_GET['id'];
    $selectedBloc = getBloc($blocId);

    if (isset($_GET['id'])) {
      
      $blocId = $_GET['id'];
      $selectedBloc = getBloc($blocId);

      if($selectedBloc == false){
        header('Location: ./index.php');
        exit;
      }
    }
    else {
      header('Location: ./index.php');
      exit;
    }

    if(!empty($_POST)){

      $submittedTitle = $_POST['title'];
      $submittedSummary = $_POST['summary'];
      $submittedContent = $_POST['content'];
      $submittedStyle = $_POST['style'];

      if (!empty($submittedStyle)){
        if (!hexVerify($submittedStyle)){
          $errors[] = "Le code hex est incorrect.";
        }
      }
      
      if (empty($submittedStyle)){
        $submittedStyle = '#ffff88';
      }
      var_dump($submittedStyle);
      
      if (empty($submittedTitle)) {
        $errors[] = "Le titre est obligatoire.";
      }

      if (empty($submittedContent)) {
        $errors[] = "Le contenu est obligatoire.";
      }

      if (empty($errors)) {

        $blocId = $_GET['id'];
        $result = updateBloc($blocId, $_POST);
        
        if($result){
          $_SESSION['message'] = 'Memo bloc mis à jour !';
          header('Location: index.php');
          exit;
        }
        else{
          $_SESSION['message'] = 'Impossible de mettre a jour le Memo bloc...';
          header('Location: index.php');
          exit;
        }
      }
    }

    


  }

  elseif($action == 'delete'){

    $messages[] = "Memo bloc supprimé !";
    $bloc = getBloc($_GET['id']);
    deleteBloc($_GET['id']);
    header('Location: index.php');
    exit;
  }

  else{
    header('Location: index.php');
    exit;
  }


?>