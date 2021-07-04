<?php


namespace App\Services;


use App\Repository\BooksRepository;
use Illuminate\Http\Request;

class BooksService
{
    /**
     * @var BooksRepository
     */
    protected $bookRepository;

    /**
     * BooksService constructor.
     * @param BooksRepository $bookRepository
     */
    public function __construct(BooksRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function search(Request $request)
    {
        return $this->bookRepository->searchBy([
            'name' => "%{$request->name}%",
        ]);
    }
}
