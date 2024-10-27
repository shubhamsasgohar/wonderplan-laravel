@extends('adminlte::page')

@section('title', 'User List')

@section('content')

    <div class="container">
        <h2>User List</h2>

        {{-- Using AdminLTE DataTable component --}}
        @component('adminlte::components.tool.datatable', [
            'id' => 'userTable',               // ID for the DataTable
            'heads' => [                       // Table headers
                '#',
                ['label' => 'UID', 'width' => 20],
                'Email',
                'Display Name',
                'Created At'
            ],
            'config' => [                      // DataTable configuration options
                'paging' => true,              // Enable pagination
                'searching' => true,           // Enable search box
                'ordering' => true,            // Enable column ordering
                'info' => true,                // Show table information (e.g., "Showing 1 to 10 of 50 entries")
                'autoWidth' => false,          // Disable auto width adjustment
                'pageLength' => 12,            // Number of entries per page
                'lengthMenu' => [              // Length options for pagination
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, 'All']
                ],
                'responsive' => true,          // Enable responsive table
            ],
            'attributes' => new \Illuminate\View\ComponentAttributeBag(['class' => 'table table-bordered table-striped'])
        ])
            {{-- Loop through users --}}
            @foreach($users as $key => $user)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{ $user['uid'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['displayName'] }}</td>
                    <td>{{ $user['createdAt'] }}</td>
                </tr>
            @endforeach
        @endcomponent
    </div>

@endsection

{{-- Push DataTables CSS --}}
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
@endpush

{{-- Push DataTables JS --}}
@push('js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    {{-- Initialize DataTable --}}
@endpush
