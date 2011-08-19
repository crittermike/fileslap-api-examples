<?php

$username = "joeuser";
$password = "pass123";
$filename = "filename.txt";
$file_id = 12345;

//print upload_file($username, $password, $filename);
//print retrieve_files($username, $password);
//print retrieve_file($username, $password, $file_id);
//print delete_file($username, $password, $file_id);


/**
 * Upload a file to Fileslap under $username's account.
 */
function upload_file($username, $password, $filename) {
  $filename = "filename.txt";
  $postvars = array('file' => "@" . $filename);
  $curl = curl_init();

  curl_setopt($curl, CURLOPT_URL, 'http://fileslap.com/api/files/');
  curl_setopt($curl, CURLOPT_TIMEOUT, 30);
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $postvars);

  $response = curl_exec($curl); // returns the JSON file data
  curl_close ($curl);
  return $response;
}


/**
 * View file data for all of the user's files.
 */
function retrieve_files($username, $password) {
  $curl = curl_init();

  curl_setopt($curl, CURLOPT_URL, 'http://fileslap.com/api/files/');
  curl_setopt($curl, CURLOPT_TIMEOUT, 30);
  curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $response = curl_exec($curl);
  curl_close ($curl);
  return $response;
}


/**
 * View file data for a single file, by passing a file ID.
 */
function retrieve_file($username, $password, $file_id) {
  $curl = curl_init();

  curl_setopt($curl, CURLOPT_URL, 'http://fileslap.com/api/files/' . $file_id . '/');
  curl_setopt($curl, CURLOPT_TIMEOUT, 30);
  curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $response = curl_exec($curl);
  curl_close ($curl);
  return $response;
}


/**
 * Delete a single file, by passing a file ID.
 */
function delete_file($username, $password, $file_id) {
  $curl = curl_init();

  curl_setopt($curl, CURLOPT_URL, 'http://fileslap.com/api/files/' . $file_id . '/');
  curl_setopt($curl, CURLOPT_TIMEOUT, 30);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
  curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $response = curl_exec($curl);
  curl_close ($curl);
  return $response;
}
