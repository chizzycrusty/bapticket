<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Event::orderBy('created_at', 'desc')->paginate(8);

        return view('events.index', compact('list'));

    }

    public function dashboardOrga()
    {
        $id = Auth::user()->id;

        $list = Event::where('user_id', $id)->get();


        return view('orgas.index', compact('list'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
       // return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required',
            'subject' => 'required',
            'host' => 'required',
            'sector' => 'required',
            'content' => 'required',
            'localisation' => 'required',
            'places' => 'required',
            'date' => 'required',
            'duration' => 'required'
        ]);

        $event = new Event;
        $input = $request -> input();
        $input['user_id'] = Auth::user() -> id;
        $event -> fill($input) -> save();

        return redirect() -> route('event.index') -> with('success', 'Votre évènement a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
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
        $this -> validate($request, [
            'title' => 'required',
            'subject' => 'required',
            'host' => 'required',
            'sector' => 'required',
            'content' => 'required',
            'localisation' => 'required',
            'places' => 'required',
            'date' => 'required',
            'duration' => 'required'
        ]);

        $event = Event::findOrFail($id);
        $input = $request->input();
        $event->fill($input)->save();

        return redirect() -> route('event.index') -> with('success', 'Votre article a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect() -> route('event.index') -> with('success', 'Votre article a bien été supprimé');
    }
}
