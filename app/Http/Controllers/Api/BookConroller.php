<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = BookResource::collection(Book::all());

        foreach ($books as $book) {
            if ($book->author_id == $book->author['id']) {
                $books->author = $book->author['name'];
            }
        }
        return [
            'data' => $books,
            'message' => 'Книги успешно получены'
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return [
            'data' => $book,
            'message' => 'Книга успешно создана'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = new BookResource(Book::findOrFail($id));
        return [
            'data' => $book,
            'message' => 'Книга ' . $id . ' успешно получена'
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return [
            'data' => $book,
            'message' => 'Книга успешно изменена'
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return [
            'data' => $book,
            'message' => 'Книга ' . $id . ' успешно удалена'
        ];
    }
}
