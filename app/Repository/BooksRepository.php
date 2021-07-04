<?php


namespace App\Repository;


use App\Book;
use Illuminate\Database\Eloquent\Builder;

class BooksRepository
{
    /**
     * @var Book $book
     */
    protected $book;

    /**
     * BooksRepository constructor.
     * @param Book $book
     */
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function searchBy(array $criteria)
    {
        $query = $this->getQueryBuilder()
            ->whereRowValues(array_keys($criteria),'like', array_values($criteria));
        return $query->get();
    }

    /**
     * @return Builder
     */
    protected function getQueryBuilder(): Builder
    {
        return $this->book->query();
    }

}
