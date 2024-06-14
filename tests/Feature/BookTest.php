<?php

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use function PHPUnit\Framework\assertTrue;

uses(RefreshDatabase::class)->in('Feature');

beforeEach(function () {
    Artisan::call('migrate');
});

test('create book', function () {
    $book = Book::create([
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'isbn' => '9780743273565',
    ]);
    assertTrue($book->exists());
});
