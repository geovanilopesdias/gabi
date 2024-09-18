<?php 
  include '../utilities/interface_elements.php';
  echo_html_base_header();

  echo 
    '<form class="registration" action="loan_registration_success.php">
      <fieldset>
        <legend>Novo empréstimo</legend>
        <input type="text" name="cpf" placeholder="CPF do usuário"></br>
        <input type="text" name="book_id" placeholder="ID da obra">
        <form action="loan_registration_success">
      <input type="submit" value="Concluir">
    </form>
        
      </fieldset>
    </form>';  
  echo_return_to_menu_button(MenuType::LIBRARIAN);
  echo_html_ending_file();  
?> 
