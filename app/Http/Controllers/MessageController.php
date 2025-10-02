<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $title = 'Messages';
        $newMessage = Message::where('status', 0)->count();
        $messages = Message::latest()->get();
        return view('admin.messages.index', compact('title', 'messages', 'newMessage'));
    }
    public function show(Message $message)
    {
        $title = 'Detail Message';
        if($message->status == 0)
        {
            Message::where('id', $message->id)->update(['status' => 1]);
            $message = Message::where('id', $message->id)->first();
        }
        $newMessage = Message::where('status', 0)->count();
        return view('admin.messages.show', compact('title', 'message', 'newMessage'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email:dns',
            'subject' => 'required|max:255',
            'message' => 'required|string'
        ]);


        Message::create($validatedData);

        return redirect( route('contact') )->with('success', 'Your email has been sent successfully!');
    }

    public function updateStatus(Message $message)
    {
        if($message->status == 0 ) {
            $status = 1;
        } else {
            $status = 0;
        }
        Message::where('id', $message->id)->update(['status' => $status]);
        return redirect( route('messages.index') )->with('success', 'Message marked as '. ($status == 0 ? 'Unread' : 'Read'));
    }

    public function destroy(Message $message)
    {
        Message::destroy($message->id);
        return redirect(route('messages.index'))->with('success', 'Email deleted successfully.');
    }
}
