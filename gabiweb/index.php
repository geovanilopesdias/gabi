<?php 
  include 'utilities/interface_elements.php';
  echo_html_base_header();

  echo 
    '<form action="../views/librarian_menu.php">
     <input class="index_login_driver" type="submit" value="Sou bibliotecário">
     </form>
     <form action="../views/teacher_menu.php">
     <input class="index_login_driver" type="submit" value="Sou professor">
     </form>
     <form action="../views/student_menu.php">
     <input class="index_login_driver" type="submit" value="Sou alune">
     </form>';  
  echo_html_ending_file();

?> 
