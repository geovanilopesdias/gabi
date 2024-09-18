<?php

class BookView {
    public static function echoBookTable(array $books): void
    {
        if (empty($books)) {
            echo "No books found.";
            return;
        }

        echo "<table> <thead> <tr>";
        $keys = array_keys($books[0]->toArray());
        foreach ($keys as $key) {
            echo "<th>$key</th>";
        }
        echo "</tr> </thead> <tbody>";
        foreach ($books as $book) {
            self::echoBookRow($book);
        }
        echo "</tbody></table>";
    }
    

    private function echoBookRow(array $book): void
    {
        echo "<tr>";
        echo "<td>" . $book['id'] . "</td>";
        echo "<td>" . $book['isbn'] . "</td>";
        echo "<td>" . $book['ddc'] . "</td>";
        echo "<td>" . $book['title'] . "</td>";
        echo "<td>" . $book['subtitle'] . "</td>";
        echo "<td>" . implode(", ", $book['authors']) . "</td>";
        echo "<td>" . $book['publisher'] . "</td>";
        echo "<td>" . implode(", ", $book['cover_colors']) . "</td>";
        echo "<td>" . $book['type'] . "</td>";
        echo "<td>" . $book['status'] . "</td>";
        echo "<td>" . $book['publication_year'] . "</td>";
        echo "</tr>";
    }

}

?>