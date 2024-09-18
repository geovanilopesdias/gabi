<?php 

include '../utilities/cutter.php';
include '../utilities/checkers.php';

enum BookStatus: string {
    case Available = 'Available';
    case Loaned = 'Loaned';
    case Reserved = 'Reserved';
    case Damaged = 'Damaged';
    case Missing = 'Missing';
}

enum BookType: string {
  case Academic = 'Academic';
  case Textbook = 'Textbook';
  case Literature = 'Literature';
  case Comics = 'Comics';
  case Childrens = 'Childrens';
  case Curiosities = 'Curiosities';
  case Encyclopedia = 'Encyclopedia';
  case Religious = 'Religious';
  case Selfhelp = 'Self-help';
}

class BookModel {
    private $id;
    private $isbn;
    private $ddc;
    private $cutter;
    private $title;
    private $subtitle;
    private $authors;
    private $publisher;
    private $pages;
    private $coverColors;
    private $type;
    private $status;
    private $publicationYear;
  
    public function __construct(
    int $id = 0, string $isbn = "", string $ddc = "",
    string $tt = "", string $st = "", array $a = [],
    string $publisher = "", array $cc = [], int $year = 0,
    BookType $type = BookType::Literature, BookStatus $status = BookStatus::Available) {
      
        $this->id = $id;
        $this->isbn = $isbn;
        $this->ddc = $ddc;
        $this->title = $tt;
        $this->subtitle = $st;
        $this->authors = $a;
        $this->coverColors = $cc;
        $this->type = $type;
        $this->publicationYear = $year;

    }

    public static function book_for_registration(
        int $id, string $tt, array $a,
        BookType $type,
        string $isbn = "", string $ddc = "", string $st = "", 
        string $publisher = "", array $cc = [], int $year = 0,
        BookStatus $status = BookStatus::Available){
        $book = new BookModel;
        $book->id = $id;
        $book->ddc = $ddc;
        $book->title = $tt;
        $book->subtitle = $st;
        $book->authors = $a;
        $book->coverColors = $cc;
        $book->type = $type;
        $book->publicationYear = $year;
        $book->setIsbn($isbn);
        $book->setCutter($a[0]);
        return $book;
    }
  
    public function getId(): int {
        return $this->id;
    }

    public function getIsbn(): string {
        return $this->isbn;
    }

    public function getDdc(): string {
        return $this->ddc;
    }

    public function getCutter(): string {
        return $this->cutter;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getSubtitle(): string {
        return $this->subtitle;
    }

    public function getAuthors(): array {
        return $this->authors;
    }

    public function getPages(): int {
        return $this->pages;
    }
    
    public function getPublisher(): string {
        return $this->publisher;
    }

    public function getCoverColors(): string {
        return $this->coverColors;
    }

    public function getType(): BookType {
        return $this->type;
    }

    public function getStatus(): BookStatus {
        return $this->status;
    }

    public function getPublicationYear(): int {
        return $this->publicationYear;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setIsbn(string $isbn): void {
      if(is_isbn_valid($isbn))  
        $this->isbn = $isbn;
      else
        throw new Exception("ISBN inválido");
    }

    public function setCutter(string $author): void {
        $first_author_names = explode(' ', $author);
        $first_author_surname = array_pop($first_author_names);
        $this->ddc = find($first_author_surname);
    }
    
    public function setDdc(string $ddc): void {
        $this->ddc = $ddc;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setSubtitle(string $subtitle): void {
        $this->subtitle = $subtitle;
    }

    public function setAuthors(array $authors): void {
        $this->authors = $authors;
    }

    public function setPublisher(string $publisher): void {
        $this->publisher = $publisher;
    }

    public function setPages(int $p): void {
        if ($p > 1)
            $this->pages = $p;
        else
            throw new Exception("Número de páginas inválido");
    }

    public function setCoverColors(string $coverColors): void {
        $this->coverColors = $coverColors;
    }

    public function setType(BookType $type): void {
        $this->type = $type;
    }

    public function setStatus(BookStatus $status): void {
        $this->status = $status;
    }

    public function setPublicationYear(int $year): void {
        $this->publicationYear = $year;
    }
  
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'isbn' => $this->getIsbn(),
            'ddc' => $this->getDdc(),
            'title' => $this->getTitle(),
            'subtitle' => $this->getSubtitle(),
            'authors' => implode(", ", $this->getAuthors()),
            'publisher' => $this->getPublisher(),
            'cover_colors' => implode(", ", $this->getCoverColors()),
            'type' => $this->getType()->name,
            'status' => $this->getStatus()->name,
            'publication_year' => $this->getPublicationYear(),
        ];
    }

  
  
}

?>