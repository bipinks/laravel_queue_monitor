<!-- resources/views/monitor/monitor.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Queue Monitor</h1>

    <table>
        <thead>
        <tr>
            <th>Job ID</th>
            <th>Queue</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->queue }}</td>
                <td>{{ $job->status }}</td>
                <td>{{ $job->created_at }}</td>
                <td>
                    <a href="{{ route('queue.retry', ['id' => $job->id]) }}">Retry</a>
                    <a href="{{ route('queue.delete', ['id' => $job->id]) }}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $jobs->links() }}
@endsection
