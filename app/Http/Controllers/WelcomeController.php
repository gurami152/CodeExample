<?php

namespace App\Http\Controllers;

use App\Services\BooksService;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * @var BooksService $booksService
     */
    protected $booksService;

    /**
     * WelcomeController constructor.
     * @param BooksService $booksService
     */
    public function __construct(BooksService $booksService)
    {
        $this->booksService = $booksService;
    }

    public function index(Request $request)
    {
        return view('welcome', [
            'books' => $this->booksService->search($request)
        ]);
    }
}
