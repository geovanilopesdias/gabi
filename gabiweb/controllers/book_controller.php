<?php

include "../utilities/interface_elements.php";
include "../models/book_model.php";
include "../views/book_view.php";

class BookController
{
    private $bookModel;
    private $bookView;
        
    public function __construct()
    {
        $this->bookModel = new BookModel();
        $this->bookView = new BookView();
    }

    public function getAllBooks(): void
    {
        $JSON_FILE_PATH = '../database/bookshelf.json';
        $jsonData = file_get_contents($JSON_FILE_PATH);
        $booksArray = json_decode($jsonData, true);
        $books = [];

        foreach ($booksArray as $bookData) {
            $book = new BookModel(
                (int) $bookData['id'],
                $bookData['isbn'],
                $bookData['ddc'],
                $bookData['title'],
                $bookData['subtitle'],
                $bookData['authors'],
                $bookData['publisher'],
                $bookData['cover_colors'],
                (int) $bookData['publication_year'],
                BookType::from($bookData['type']),
                BookStatus::from($bookData['status'])
            );
            $books[] = $book;
        }
        BookView::echoBookTable($books);
    }

    public function getBookById($id)
    {
        $book = $this->bookModel->getBookById($id);
        return $book;
    }

    /*Searching methods*/
    private function searchJsonFile(string $key, array $searchArray) {
        $jsonData = file_get_contents('../database/bookshelf.json');
        $dataArray = json_decode($jsonData, true);
        $results = [];

        foreach ($dataArray as $item) {
            foreach ($searchArray as $searchTerm) {
                if (stripos($item[$key], $searchTerm) !== false) {
                    $results[] = $item;
                    
                }
            }
        }

        return $results;
    }
    
    public static function searchBook(array $sanitizeExplodedEntry){
        $books = array();
        $books[] = getBooksByAuthor($sanitizeExplodedEntry);
        $books[] = getBooksByTitle($sanitizeExplodedEntry);
        $books[] = getBooksBySubtitle($sanitizeExplodedEntry);
        
        
    }
    
    private function getBooksByAuthor(array $sanExpEntry){
        $book = array();
        foreach($sanExpEntry as $word){
            $book[] = 
        }
    }

    private function getBooksByTitle($title){
        ;
    }

    private function getBooksBySubtitle($subtitle){
        ;
    }

    private function getBooksByConverColors($colors){
        ;
    }
    
    public function addBook($data)
    {
        $result = $this->bookModel->addBook($data);
        return $result;
    }

    public function updateBook($id, $data)
    {
        $result = $this->bookModel->updateBook($id, $data);
        return $result;
    }

    public function deleteBook($id)
    {
        $result = $this->bookModel->deleteBook($id);
        return $result;
    }

    public static function sanitizeInput($input) {
        $input = trim($input);
        $input = strip_tags($input);
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        $input = preg_replace('/[^a-zA-Z0-9, ]/', '', $input);
        return $input;
    }
}

?>