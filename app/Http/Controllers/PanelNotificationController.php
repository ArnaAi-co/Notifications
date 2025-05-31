<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PanelNotification;
use Illuminate\Http\Request;

class PanelNotificationController extends Controller
{

    public function __construct()
    {

        $this->middleware('role:admin');
    }

    public function index()
    {
        $panelNotifications = PanelNotification::orderBy('order')->get();

        return view('admin.panel-notifications.index',compact('panelNotifications'));
    }


    public function create()
    {
        return view('admin.panel-notifications.create');
    }


    public function store(Request $request)
    {
        $validate = request()->validate([
            'type' => 'required|string',
            'title' => 'required|string',
            'order' => 'required|string',
            'description' => 'sometimes',
            'status' => 'boolean',
        ]);

        $validate['user_id'] = auth()->user()->id;
        $create = PanelNotification::create($validate);

        if ($create) {
            toastr()->success(__('Panel Notification created successfully'));
        }
        return redirect(route('admin.panel-notifications.index'));
    }


    public function show(PanelNotification $panelNotification)
    {

    }


    public function edit(PanelNotification $panelNotification)
    {
        return view('admin.panel-notifications.edit',compact('panelNotification'));
    }


    public function update(Request $request, PanelNotification $panelNotification)
    {
        $validate = request()->validate([
            'type' => 'required|string',
            'title' => 'required|string',
            'order' => 'required|string',
            'description' => 'sometimes',
            'status' => 'boolean',
        ]);

        $validate['user_id'] = auth()->user()->id;
        $update = PanelNotification::where('id',$panelNotification->id)->update($validate);

        if ($update) {
            toastr()->success(__('Panel Notification updated successfully'));
        }
        return redirect(route('admin.panel-notifications.index'));
    }


    public function destroy($id)
    {

        $panelNotification = PanelNotification::findOrFail($id);

        $delete = $panelNotification->delete();
        if ($delete) {
            toastr()->success(__('Panel Notification deleted successfully'));
        }
        return redirect(route('admin.panel-notifications.index'));
    }
}
