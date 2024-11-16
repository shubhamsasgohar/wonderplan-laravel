@extends('layouts.app')

<!-- Include Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

@section('content')
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Trips for User: {{ $uid }}</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.firebase-users') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Trips</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Trips</h3>
                        </div>
                        <div class="card-body">
                            <table id="trips-table" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Trip ID</th>
                                    <th>Title</th>
                                    <th>Destination</th>
                                    <th>Travel Date</th>
                                    <th>Days</th>
                                    <th>Budget Type</th>
                                    <th>Group Type</th>
                                    <th>Image</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($trips as $key => $trip)
                                    <tr class="align-middle">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $trip['tripId'] ?? 'N/A' }}</td>
                                        <td>{{ $trip['planRequest']['title'] ?? 'N/A' }}</td>
                                        <td>
                                            {{ $trip['destinationMeta']['city'] ?? 'N/A' }},
                                            {{ $trip['destinationMeta']['state'] ?? 'N/A' }},
                                            {{ $trip['destinationMeta']['country'] ?? 'N/A' }}
                                        </td>
                                        <td>
                                            @if(!empty($trip['planRequest']['travelAt']))
                                                {{ \Carbon\Carbon::parse($trip['planRequest']['travelAt'])->format('d M Y') }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $trip['planRequest']['days'] ?? 'N/A' }}</td>
                                        <td>
                                            {{ ucfirst(strtolower(str_replace('BUDGET_TYPE_', '', $trip['planRequest']['budgetType'] ?? 'N/A'))) }}
                                        </td>
                                        <td>
                                            {{ ucfirst(strtolower(str_replace('GROUP_TYPE_', '', $trip['planRequest']['groupType'] ?? 'N/A'))) }}
                                        </td>
                                        <td>
                                            @if(!empty($trip['imgUrl']))
                                                <img src="{{ $trip['imgUrl'] }}" alt="Trip Image" style="max-width: 100px; height: auto;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No trips found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#trips-table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                // Add an empty placeholder to avoid warnings when no data exists
                "data": {{ count($trips) > 0 ? json_encode($trips) : '[]' }},
                "columns": [
                    { "data": "#" },
                    { "data": "tripId" },
                    { "data": "title" },
                    { "data": "destination" },
                    { "data": "travelAt" },
                    { "data": "days" },
                    { "data": "budgetType" },
                    { "data": "groupType" },
                    { "data": "image" }
                ]
            });
        });
    </script>
@endsection
