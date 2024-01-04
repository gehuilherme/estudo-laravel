@extends('layouts.index')

@section('title', 'Patients')

@section('content')
<div class="card-header pt-0 border-0 bg-white">
    <button type="button" class="btn btn-success card-tools">Add new</button>
</div>

    <table class="table table-striped pt-3" id="listPatientTable">
        <thead>
        <tr class="text-center">
            <th scope="col" class="text-center">id</th>
            <th scope="col" class="text-center">Document</th>
            <th scope="col" class="text-center">First Name</th>
            <th scope="col" class="text-center">Last Name</th>
            <th scope="col" class="text-center">Family</th>
            <th scope="col" class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr>
                <td class="p-1 text-center">{{$patient->id}}</td>
                <td class="p-1 text-center">{{$patient->document}}</td>
                <td class="p-1 text-center">{{$patient->name}}</td>
                <td class="p-1 text-center">{{$patient->lastname}}</td>
                <td class="p-1 text-center">Not Implemented</td>
                <td class="p-1 text-center">
                    <a href="patients/edit/{{$patient->id}}">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="edit/del/{{$patient->id}}">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>            
            @endforeach
        </tbody>
    </table>

<script>
    $(document).ready(function() {
        new DataTable('#listPatientTable', {
            columnDefs: [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }
            ]
        });
    });
</script>
@endsection