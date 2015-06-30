<?php

namespace App\Http\Controllers;

use App\Lista;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Auth::check()) {
            if (!Auth::user()->is_admin) {
                $id = Auth::user()->id;
                $lista = \DB::table('artist')
                    ->join('song', 'artist.id', '=', 'song.artist_id')
                    ->join('lista', 'song.id', '=', 'lista.song_id')
                    ->select(
                        'lista.id',
                        'artist.name as nameartist',
                        'lista.song_id',
                        'song.name as namesong')->where('user_id', '=', $id)
                    ->paginate(5);
                return view('music.index', compact('lista'));
            }
            return redirect('inicio');
        } else {
            return redirect('inicio');
        }
    }

    public function destroy($id){
        if(Auth::check()) {
            if(!Auth::user()->is_admin) {
                $lista = \App\Lista::find($id);
                $lista->delete();
                return redirect('listas');
            }
        }else{
            return redirect(url());
        }
    }

    public function store($id)
    {
        if(Auth::check()) {
            if(!Auth::user()->is_admin) {
                $lista = new Lista();
                $lista->song_id = $id;
                $lista->user_id = Auth::user()->id;
                $lista->save();
                return redirect('playlists');
            }
        }else{
            return redirect('inicio');
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

            $msg_body = $data;
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
        if (Auth::check()) {
            $song = \App\Song::find($id);
            $this->push($song->url_source);
            return redirect('listas');
        } else {
            return redirect(url());
        }
    }
}
