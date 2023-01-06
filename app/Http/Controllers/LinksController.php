<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index(Link $link){
        $links = $link->where('status',1)->orderByDesc('created_at')->get();
        return view('links.index',compact('links'));
    }

    public function create(){
        return view('links.create');
    }
    public function store(LinkRequest $request,Link $link){
        $data = $request->only('name','url','logo','describe');
        $link->create($data);
        return redirect()->route('links.index')->with('success', '申请已提交，等待审核中');
    }
}
