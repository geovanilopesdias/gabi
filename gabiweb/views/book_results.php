<?php 
  include '../utilities/interface_elements.php';
  include '../views/book_controller.php';

  $sanitizedEntry = sanitizeInput($_GET["user_search"]);
  $entryKeywords = explode(",", str_replace("", " ", ucwords($sanitizedEntry)));

  searchBook($entryKeywords);
  echo_html_base_header();
  
  echo 
    
?> 
