<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
      array_push($errors, 'Name is required');
    }
   
    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
      if (isset($post['update-topic']) && $existingPost['id'] != $post['id']) {
        array_push($errors, 'Name with that title already exists'); 
        }
      if (isset($post['add-topic'])) {
        array_push($errors, 'Topic with that title already exists');
      }

  }

    return $errors;
}