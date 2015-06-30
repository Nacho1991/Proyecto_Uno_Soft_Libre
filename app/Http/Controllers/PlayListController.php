<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Queue\InteractsWithQueue;*/

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Song;

use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;


class PlayListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Auth::check()) {
            $songs = \App\Song::paginate(5);
            return view('lista.index', compact('songs'));
        } else {
            return redirect(url());
        }
    }

    public function push($data)
    {
        if (Auth::check()) {
            $exchange = 'router';
            $queue = 'msgs';

            $conn = new AMQPConnection('localhost', '5672', 'guest', 'guest', '/');
            $ch = $conn->channel();
            $ch->queue_declare($queue, false, true, false, false);
            $ch->exchange_declare($exchange, 'direct', false, true, false);
            $ch->queue_bind($queue, $exchange);

            $msg_body = $data;//implode(' ', array_slice($argv, 1));
            $msg = new AMQPMessage($msg_body, array('content_type' => 'text/plain', 'delivery_mode' => 2));
            $ch->basic_publish($msg, $exchange);
            $ch->close();
            $conn->close();
        } else {
            return redirect(url());
        }
    }


    public function select($id)
    {
        if(Auth::check()) {
            $song = \App\Song::find($id);
            $this->push($song->url_source);
            return redirect('playlists');
        }else{
            return redirect(url());
        }
    }
}
