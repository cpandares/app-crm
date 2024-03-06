<!-- resources/views/login_logs.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Login Logs</h1>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><strong>Username</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Login Date</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->username }}</td>
                    <td>{{ $log->email }}</td>
                    <td>
                        @php
                            /* {{ date('d/m/Y', strtotime($item->created_at)) }}*/
                            $log_date = date('d/m/Y', strtotime($log->created_at));
                        @endphp
                        {{  $log_date }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $logs->links() }}
</div>
@endsection
