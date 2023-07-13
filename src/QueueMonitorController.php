<?php

namespace BipinKareparambil\QueueMonitor;

use Illuminate\Support\Facades\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QueueMonitorController
{
    public function index(Request $request)
    {
        $jobs = Queue::getConnection()->table('jobs')->paginate(20);

        return view('queue-monitor::monitor', compact('jobs'));
    }

    public function retry(Request $request, $id)
    {
        Queue::retry($id);

        return Redirect::route('queue.monitor')->with('success', 'Job retried successfully.');
    }

    public function delete(Request $request, $id)
    {
        Queue::delete($id);

        return Redirect::route('queue.monitor')->with('success', 'Job deleted successfully.');
    }
}
