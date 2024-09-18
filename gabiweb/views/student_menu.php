<?php 
  include '../utilities/interface_elements.php';
  echo_html_base_header();

    echo 
      '<table>
        <caption>
          Menu Estudante
        </caption>
        <tr>
          <td class="fields">Sugestões</td>
          <td class="fields">Consulta</td>
        </tr>

        <tr>
          <td>
            <ul>
            <li>Lista de livros sugeridos ao aluno (não implementado)</li>
            </ul>
          </td>

          <td>Campo de consulta (não implementado)</td>
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