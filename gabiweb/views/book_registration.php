<?php 
  include '../utilities/interface_elements.php';
  echo_html_base_header();

  echo 
    '<h1>Cadastro de obra</h1>
    <form class="registration" action="book_registration_success.html">
      <fieldset>
        <legend>Códigos de referência</legend>
        <input type="text" name="id" placeholder="ID da obra"></br>
        <input class="registration" type="text" name="isbn" placeholder="ISBN"></br>
        <input type="number" name="copies" placeholder="Quantidade a cadastrar (ignore se há apenas uma)"></br>
        <p>Obs.: As cópias serão cadastradas com IDs sequenciais ao inserido acima.</p>
        <input type="text" name="ddc" placeholder="CDD">
      </fieldset>
      
      <fieldset>
        <legend>Informações gerais</legend>
        <input type="text" name="title" placeholder="Título (e.g.: O senhor dos aneis)"></br>
        <input type="text" name="author" placeholder="Autores (João Silva,Carlos Souza)"></br>
        <p>Obs.: O código Cutter-Sanborn é gerado pelo sistema.</p>
        <input type="text" name="publisher" placeholder="Editora (Martins Fontes, Rocco)"></br>

        <input type="number" name="year" placeholder="Ano da obra (e.g.: 1988)"></br>
        <input type="number" name="year" placeholder="Número de páginas (e.g.: 225)"></br>
        <input type="text" name="cover_color" placeholder="Cores da capa (azul,bege)">
        
        <input type="submit" value="Cadastrar">
        
      </fieldset>
    </form>';  
  echo_return_to_menu_button(MenuType::LIBRARIAN);
  echo_html_ending_file();  
?> 
