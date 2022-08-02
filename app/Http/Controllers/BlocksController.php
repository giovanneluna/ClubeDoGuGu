<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlocksStoreRequest;
use App\Http\Requests\BlockUpdateRequest;
use App\Models\Block;
use App\Models\Sport;
use Illuminate\Http\Request;

class BlocksController extends Controller
{
    public function index()
    {

        $sports = Sport::all();
        $blocks = Block::get();
        return view('block.index', compact('blocks', 'sports'));
    }

    public function create()
    {

        $sports = Sport::all();
        $blocks = Block::all();
        return view('block.create', compact('blocks', 'sports'));
    }

    public function store(BlocksStoreRequest $request)
    {
        Block::create($request->all());
        return redirect()->route('blocks.index');
    }

    public function show($id)
    {
        return redirect()->route('blocks.index');
    }

    public function edit($id)
    {

        if (!$block = Block::find($id))
            return redirect()->route('blocks.index');

        return view('block.edit', compact('block'));
    }

    public function update(BlockUpdateRequest $request, Block $block)
    {
        $block->update($request->validated());
        return redirect()->route('blocks.index');
    }

    public function destroy(Block $block)
    {

        $block->delete();
        return redirect()->route('blocks.index');
    }
}
