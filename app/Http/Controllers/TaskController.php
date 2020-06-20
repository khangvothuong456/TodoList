<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Task;
use Auth;

class TaskController extends Controller
{
    // 
    public function index()
    {
        $tasks = Task::where('user_id', Auth::user()->id)->get();

        return view('tasks.index', compact('tasks'));
    }

    // 
    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'title'       => 'required',
                'content'     => 'required',
                'deadline_at' => 'required',
            ], [
                'title.required'       => 'Tiêu đề không được bỏ trống',
                'content.required'     => 'Nội dung không được bỏ trống',
                'deadline_at.required' => 'Hạn chót không được bỏ trống',
            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $task = new Task;
            $task->user_id     = Auth::user()->id;
            $task->title       = $request->title;
            $task->content     = $request->content;
            $task->deadline_at = $request->deadline_at;
            $task->save();

            return redirect()->to('/tasks')->with('success', 'Thêm mới nhiệm vụ thành công');
        }

        return view('tasks.add');
    }

    //
    public function edit(Request $request, $id)
    {
        $task = Task::find($id);
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'title'       => 'required',
                'content'     => 'required',
                'deadline_at' => 'required',
            ], [
                'title.required'       => 'Tiêu đề không được bỏ trống',
                'content.required'     => 'Nội dung không được bỏ trống',
                'deadline_at.required' => 'Hạn chót không được bỏ trống',
            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $task->user_id      = Auth::user()->id;
            $task->title        = $request->title;
            $task->content      = $request->content;
            $task->deadline_at  = $request->deadline_at;
            $task->is_completed = $request->is_completed ? true : false;
            $task->save();

            return back()->with('success', 'Cập nhật nhiệm vụ thành công');
        }

        return view('tasks.edit', compact('task'));
    }

    // 
    public function delete($id)
    {
        $task = Task::find($id);

        $task->delete();

        return back()->with('success', 'Xóa nhiệm vụ thành công');
    }
}
