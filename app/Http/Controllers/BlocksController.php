<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlocksStoreRequest;
use App\Http\Requests\BlockUpdateRequest;
use App\Models\Block;
use App\Models\Sport;
use Illuminate\Http\Request;

class BlocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sports = Sport::all();
        $blocks = Block::get();
        return view('block.index', compact('blocks', 'sports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sports = Sport::all();
        $blocks = Block::all();
        return view('block.create', compact('blocks', 'sports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlocksStoreRequest $request)
    {
        Block::create($request->all());
        return redirect()->route('blocks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$blocks = Block::find($id))
            return redirect()->route('blocks.index', compact('blocks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if (!$block = Block::find($id))
            return redirect()->route('blocks.index');

        return view('block.edit', compact('block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlockUpdateRequest $request, Block $block)
    {
        $block->update($request->validated());
        return redirect()->route('blocks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {

        $block->delete();
        return redirect()->route('blocks.index');
    }
}
