@extends('layouts.main')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h2 class="h4 mb-0 text-dark">Full Task Listing</h2>
        <span class="badge bg-secondary">{{ $tasks->count() }} Total Records</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Task Title</th>
                        <th>Scheduled Date</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr class="{{ $task->task_date === date('Y-m-d') ? 'table-warning' : '' }}">
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>
                                <strong>{{ $task->task_date }}</strong>
                                @if ($task->task_date === date('Y-m-d'))
                                    <span class="badge bg-primary ms-1">Today</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-{{ $task->status === 'completed' ? 'success' : 'warning' }}">
                                    {{ ucfirst($task->status) }}
                                </span>
                            </td>
                            <td>{{ $task->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection