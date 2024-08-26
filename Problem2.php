<?php

class Book
{
    public $name;
    public $availableCopies;

    public function __construct($name, $availableCopies)
    {
        $this->name = $name;
        $this->availableCopies = $availableCopies;
    }

    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }
}

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function borrow($book)
    {
        if ($book->borrowBook()) {
            echo "{$this->name} successfully borrowed '{$book->name}'.\n";
        } else {
            echo "Sorry, '{$book->name}' is out of stock.\n";
        }
    }
}

// Create books
$book1 = new Book('The Great Gatsby', 5);
$book2 = new Book('To Kill a Mockingbird', 3);

// Create members
$member1 = new Member('John Doe');
$member2 = new Member('Jane Smith');

// Members borrow books
$member1->borrow($book1);
$member2->borrow($book2);

// Print available copies
echo "Available Copies of '{$book1->name}': {$book1->availableCopies}\n";
echo "Available Copies of '{$book2->name}': {$book2->availableCopies}\n";
