<?php

class Book {
    // Private properties for title and available copies
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the number of available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book, decreasing available copies
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "Sorry, no copies of '{$this->title}' are available to borrow.\n";
        }
    }

    // Method to return a book, increasing available copies
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property for the member's name
    private $name;

    // Constructor to initialize the name
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the member's name
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book
    public function borrowBook($book) {
        echo "{$this->name} is borrowing '{$book->getTitle()}'.\n";
        $book->borrowBook();
    }

    // Method to return a book
    public function returnBook($book) {
        echo "{$this->name} is returning '{$book->getTitle()}'.\n";
        $book->returnBook();
    }
}

// Usage

// Create 2 books with the specified properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the specified properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow the books
$member1->borrowBook($book1); // John Doe borrows "The Great Gatsby"
$member2->borrowBook($book2); // Jane Smith borrows "To Kill a Mockingbird"

// Print available copies with their names
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";

?>
