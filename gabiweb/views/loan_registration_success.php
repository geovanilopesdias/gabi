    <?php 
    include '../utilities/interface_elements.php';
    echo_html_base_header();

    echo 
      '<h2>Empréstimo realizado com sucesso!</h2>
    <form action="loan_registration.php">
      <fieldset class="registration_checking">
        <legend>Dados do empréstimo</legend>
          <fieldset>
            <legend>Obra</legend>
            <p>ID: 75583</p>
            <p>Título: O Livro de Ouro da Mitologia: história de deuses e heróis</p>
            <p>Autor(es): Thomas <b>Bulfinch</b></p>
            <p>Cutter-Sanborn: B933mi</b></p>
          </fieldset>
          <fieldset>
            <legend>Usuário</legend>
            <p>CPF: 132.979.080-41</p>
            <p>Nome: Adrualdo Siqueira Martins</b></p>
            <p>Turma: 112</p>
          </fieldset>
        <input type="submit" value="Realizar outro empréstimo">
      </fieldset>
    </form>';

  echo_return_to_menu_button(MenuType::LIBRARIAN);
  echo_html_ending_file();  
?> 
