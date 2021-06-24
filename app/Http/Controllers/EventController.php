<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(5);
        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('admin.event.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'desc' => 'required',
                'file' => 'image|mimes:jpeg,png,jpg'
            ]
        );
        $data['thumbnail'] = date('dmyHis') . '.' . $request->file('file')->extension();
        Storage::putFileAs('public/event', $request->file('file'), $data['thumbnail']);
        unset($data['file']);
        $data['slug'] = Str::slug($data['name']);


        Event::create($data);
        return redirect(route('admin.admin'))->with('success', 'Berhasil tambah data');
    }
    public function edit(Event $event)
    {
        return view('admin.event.edit', ['event' => $event]);
    }

    public function update(Event $event, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',

        ]);
        if ($request->file('file')) {
            $request->validate([
                'file' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            ]);
            $data['thumbnail'] = date('dmyHis') . '.' . $request->file('file')->extension();
            Storage::putFileAs('public/images', $request->file('file'), $data['thumbnail']);
            unset($data['file']);
        }

        $data['slug'] = Str::slug($data['name']);

        $event->update($data);

        return redirect(route('admin.admin'))->with('success', 'Berhasil Edit Data');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect(route('admin.admin'))->with('success', 'Berhasil hapus data');
    }
}
