<?php

  function getAllBlocs(){
      $db = dbConnect();
      $query = $db->query("SELECT *
      FROM memo_blocs
      ORDER BY id ASC");
      return 	$query->fetchAll();
    }

  function getBloc($blocId) {
    $db = dbConnect();
    $query = $db->prepare("SELECT *
    FROM memo_blocs
    WHERE id = ?");
    $query->execute([$blocId]);
    return $query->fetch();
  }

  function addBloc($data){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO memo_blocs (title, summary, content, style) VALUES (?, ?, ?, ?)');
    $result = $query->execute(
      [
        $data['title'],
        $data['summary'],
        $data['content'],
        $data['style'],
      ]
    );
    return $result;
  }


  function updateBloc($blocId, $data){
    $db = dbConnect();
    $query = $db->prepare('UPDATE memo_blocs 
    SET title = :new_title, summary = :new_summary, content = :new_content, style = :new_style
    WHERE id = :bloc_id'); 
    $result = $query->execute(
      [ 
      'new_title' => $data['title'],
      'new_summary' => $data['summary'],
      'new_content' => $data['content'],
      'new_style' => $data['style'],
      'bloc_id' => $blocId
      ]
    );
    return $result;
  }


  function deleteBloc($blocId){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM memo_blocs WHERE id = ?');
    $result = $query->execute( [$blocId] );
    return $result;
  }

?>