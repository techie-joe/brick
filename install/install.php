<?php
require_once 'init.php';

$fileName = 'index.html';

// Check if the file already exists
if (!file_exists(ROOT+$fileName)) {

  // Define the content to be written to the new file
  $title   = 'Hello World!';
  $desc    = 'You are good to go.';
  $style   = '#_main{ margin:1em; max-width:300px; }';
  $content = '<p>'.$title.'</p>';
  $fileContent = htmlPage($content,$title,$desc,$style);

  // Write the content to the new file
  file_put_contents(ROOT+$fileName, $fileContent);

  // Show success page
  $title   = 'Installation complete';
  $desc    = 'You are good to go.';
  $style   = '#_main{ margin:1em; max-width:300px; }';
  $content = '<p>'.$title.'</p><p><hr></p><a href="'.ROOT.'" class="_btnlink">Ok</a>';
  echo htmlPage($content,$title,$desc,$style);

}else{

  // Show success page
  $title   = 'Already installed';
  $desc    = 'You are good to go.';
  $style   = '#_main{ margin:1em; max-width:300px; }';
  $content = '<p>'.$title.'</p><p><hr></p><a href="'.ROOT.'" class="_btnlink">Ok</a>';
  echo htmlPage($content,$title,$desc,$style);

}
exit(0); // exit normally
