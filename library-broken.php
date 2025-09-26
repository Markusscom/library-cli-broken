<?php
$book = require_once "book.php";

$continue = true;

$books = [
    1 => [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'status' => 'available'
    ],
    2 => [
        'title' => '1984',
        'author' => 'George Orwell',
        'status' => 'available'
    ],
    3 => [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'status' => 'available'
    ]
];

function addBook(&$books) {
    $title = readline("Enter title: ");
    $author = readline("Enter author: ");
    $status = readline("Enter is it available? (y/n): ");

    $book = new Book($title, $author, $status);
    $book->setStatus($status);

    $books[] = ['title' => $title, 'author' => $author, 'status' => $book->status];
}

function deleteBook(&$books) {
    $id = readline("Enter book ID you want to delete: ");
    unset($books[$id]);
}

function displayBook($id, $book) {
    $book1 = new Book($book['title'], $book['author'], $book['status']);
    $book1->display();
}


echo "\n\nWelcome to the Library\n";

do {
    echo "\n\n";
    echo "1 - show all books\n";
    echo "2 - show a book\n";
    echo "3 - add a book\n";
    echo "4 - delete a book\n";
    echo "5 - quit\n\n";
    $choice = readline();

    switch ($choice) {
        case 1:
            foreach ($books as $id => $book) {
                $book = new Book($book['title'],$book['author'],$book['status']);
                $book->display();
            }

            break;
        case 2:
            $id = readline("Enter book id: ");
            displayBook($id, $books[$id]);

            break;
        case 3:
            addBook($books);
            break;
        case 4:
            deleteBook($books);
            break;
        case 5:
            echo "Goodbye!\n";
            $continue = false;
            break;
        case 13:
            print_r($books);
            break;
        default:
            echo "Invalid choice\n";
    };

} while ($continue == true);