<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tasklist;    // 追加
class tasklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasklists = tasklist::all();
        return view('tasklists.index', [
            'tasklists' => $tasklists,
    ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasklist = new tasklist;
        return view('tasklists.create', [
            'tasklist' => $tasklist,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'status' => 'required|max:10',
            'content' => 'required|max:255',
            ]);
            
        $tasklist = new tasklist;
        $tasklist->status = $request->status;    // 追加
        $tasklist->content = $request->content;
        $tasklist->save();
        return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasklist = tasklist::find($id);
        return view('tasklists.show', [
            'tasklist' => $tasklist,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasklist = tasklist::find($id);
        return view('tasklists.edit', [
            'tasklist' => $tasklist,
        ]);
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
        $this->validate($request, [
            'status' => 'required|max:10',
            'content' => 'required|max:255',
        ]);
        
        $tasklist = tasklist::find($id);
        $tasklist->status = $request->status;    // 追加
        $tasklist->content = $request->content;
        $tasklist->save();
        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tasklist = tasklist::find($id);
        $tasklist->delete();
        return redirect('/');
    }
}