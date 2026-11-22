
@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<div class="panel">
    <h1>Task List</h1>
    <p>Here is the complete list of your scheduled tasks.</p>
</div>

<div class="panel">
    @if($tasks->isEmpty())
        <p>No tasks have been recorded.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Task Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td class="status">{{ $task->status }}</td>
                        <td>{{ $task->task_date->format('F d, Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
