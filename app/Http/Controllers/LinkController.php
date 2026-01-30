<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use Termwind\Components\Li;

class LinkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        auth()->user()->links()->create($request->validated());

        return to_route('dashboard');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        $this->authorize('atualizar', $link);
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $this->authorize('atualizar', $link);

        $link->update($request->validated());

        return to_route('dashboard')
            ->with('message', 'alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $this->authorize('atualizar', $link);

        $link->delete();
        return to_route('dashboard')
            ->with('message', 'deletado com sucesso!');
    }

    public function up(Link $link)
    {
        $this->authorize('atualizar', $link);

        $link->moveUp();
        return back();
    }

    public function down(Link $link)
    {
        $this->authorize('atualizar', $link);

        $link->moveDown();
        return back();
    }
}
