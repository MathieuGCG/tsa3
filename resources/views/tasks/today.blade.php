@extends('layouts.main')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h2 class="h4 mb-0 text-primary">Tasks for Today ({{ date('Y-m-d') }})</h2>
        <span class="badge bg-info text-dark">{{ $tasks->count() }} Tasks</span>
    </div>
    <div class="card-body">
        @if ($tasks->isEmpty())
            <div class="alert alert-info mb-0">No tasks scheduled for today!</div>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Task Title</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->id }}</td>
                                <td class="fw-medium">{{ $task->title }}</td>
                                <td>
                                    <span class="badge bg-{{ $task->status === 'completed' ? 'success' : 'warning' }}">
                                        {{ ucfirst($task->status) }}
                                    </span>
                                </td>
                                <td>{{ $task->task_date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection