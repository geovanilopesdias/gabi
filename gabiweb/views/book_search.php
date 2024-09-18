<?php 
  include '../utilities/interface_elements.php';
  include '../views/book_controller.php';

  echo_html_base_header();

  echo 
    '
    <form action="book_results.php" method="get">
      <fieldset>
        <legend>Busca por Obras</legend>
        <input type="text" name="user_search" placeholder="Título da obra">
        <input type="submit" value="Buscar">
        </fieldset> </form>
        
    ';

  echo_return_to_menu_button(MenuType::LIBRARIAN);
  echo_html_ending_file();

?> 
