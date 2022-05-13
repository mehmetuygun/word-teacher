<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWordListRequest;
use App\Http\Requests\UpdateWordListRequest;
use App\Models\WordList;

class WordListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWordListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWordListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WordList  $wordList
     * @return \Illuminate\Http\Response
     */
    public function show(WordList $wordList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WordList  $wordList
     * @return \Illuminate\Http\Response
     */
    public function edit(WordList $wordList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWordListRequest  $request
     * @param  \App\Models\WordList  $wordList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWordListRequest $request, WordList $wordList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WordList  $wordList
     * @return \Illuminate\Http\Response
     */
    public function destroy(WordList $wordList)
    {
        //
    }
}
