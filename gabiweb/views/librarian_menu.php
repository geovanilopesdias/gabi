<?php 
  include '../utilities/interface_elements.php';
  echo_html_base_header();

    echo 
      '<table>
        <caption>
          Menu Bibliotecário
        </caption>
        <tr>
          <td class="fields" colspan="2">Empréstimos</td>
          <td class="fields" colspan="2">Livros</td>
        </tr>
  
        <tr>
          <td class="labels">Novos</td>
          <td class="labels">Consulta</td>
          <td class="labels">Cadastro</td>
          <td class="labels">Consulta</td>
        </tr>
  
        <tr>
          <td>
            <a href="loan_registration.php">
              <img class="menu_icon" src="../images/loan_register.png" />
            </a>
          </td>
  
          <td><img class="menu_icon" src="../images/loan_search.png" /></td>
  
          <td>
            <a href="book_registration.php">
              <img class="menu_icon" src="../images/book_register.png" />
            </a>
          </td>
  
          <td>
            <a href="book_search.html">
              <img class="menu_icon" src="../images/book_search.png"/>
            </a>
          </td>
        </tr>
  
        <tr>
          <td class="fields" colspan="2">Usuários</td>
          <td class="fields" colspan="2">Relatórios</td>
        </tr>
  
        <tr>
          <td class="labels">Cadastro</td>
          <td class="labels">Busca</td>
          <td class="labels">Débitos</td>
          <td class="labels">Empréstimos</td>
        </tr>
        <tr>
          <td rowspan="3">
            <a href="user_registration.html">
              <img class="menu_icon" src="../images/user_register.png" />
            </a>
          </td>
          <td rowspan="3">
            <img class="menu_icon" src="../images/user_search.png" />
          </td>
          <td><img class="report_icon" src="../images/debt_report.png" /></td>
          <td><img class="report_icon" src="../images/outdated_loan.png" /></td>
        </tr>
        <tr>
          <td class="labels">Históricos</td>
          <td class="labels">Desatualizações</td>
        </tr>
        <tr>
          <td>
            <img class="report_icon" src="../images/user_loan_history.png" />
          </td>
          <td><img class="report_icon" src="../images/outdated_user.png" /></td>
        </tr>
      </table>
      <a
        id="flaticon_reference"
        href="https://www.flaticon.com/"
        title="Flaticon Website"
        >Ícones do Portal Flaticon</a>';

  echo_return_to_index_button();
  echo_html_ending_file();

?>