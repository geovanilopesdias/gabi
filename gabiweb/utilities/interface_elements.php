<?php

  enum MenuType {
    case LIBRARIAN;
    case TEACHER;
    case STUDENT;
  }
  
  function echo_gabi_logo(){
    echo '<img id="gabi_logo" src="../images/gabi_logo.png" />';
  }

  function echo_return_to_menu_button(MenuType $mt){
    $file;
    switch ($mt){
      case MenuType::LIBRARIAN:
        $file = "../views/librarian_menu.php";
        break; 
      case MenuType::TEACHER:
        $file = "../views/teacher_menu.php";
        break;
      case MenuType::STUDENT:
        $file = "../views/student_menu.php";
        break;
    }
    echo 
    '<form action="'.$file.'">
      <input type="submit" id="back_to_menu" value="Voltar ao menu principal">
    </form>';
  }

function echo_return_to_index_button(){
  echo 
  '<form action="../index.php">
    <input type="submit" id="back_to_menu" value="Voltar à seleção de usuário">
  </form>';
}

  function echo_html_base_header(){
    echo 
      '<html>
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>&#128214;GABi: Gestor Aberto de Bibliotecas</title>
        <link href="../stylesheets/style.css" rel="stylesheet" type="text/css" />
      </head>
      <body>';
      echo_gabi_logo();
  }

  function echo_html_ending_file(){ /*Insert footnote when finnished*/
    echo
      '</body>
      </html>';
  }

?>