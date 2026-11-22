
@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="panel">
    <h1>Welcome to Tasks for Today!</h1>
    <p>Here are your scheduled tasks for today.</p>
</div>

<div class="panel">
    <h2>Today's Tasks</h2>

    @if($tasks->isEmpty())
        <p>No tasks scheduled for today. Enjoy your free time!</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Date</th>
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
