<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTicketRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $tickets = Ticket::all();
        return view('tickets.index')->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateTicketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTicketRequest $request)
    {
        //
        //return $request->all();
        $slug = uniqid();

        $ticket = new Ticket([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug,
            'user_id' => 1
        ]);

        $ticket->save();

        return redirect('tickets/create')->with('success', 'Tickets has been created! Its link is: ' . $slug );

    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('tickets.show')->with('ticket', $ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('tickets.edit')->with('ticket', $ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CreateTicketRequest  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTicketRequest $request, $slug)
    {
        //
        //dd($request->get('status'));
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = $request->get('title');
        $ticket->content = $request->get('content');

        //{{-- $ticket->status = 1 | $request->status = null for unchecked / pending --}}
        //{{-- $ticket->status = 0 | $request->status = on for checked / answered --}}

        if ($request->get('status') != null) {
            $ticket->status = 0;
        } else {
            $ticket->status = 1;
        }
        $ticket->save();

        return redirect(action('App\Http\Controllers\TicketsController@edit', $ticket->slug))->with('success', 'Tickets has been updated! Its link is: ' . $slug);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //

   }
}