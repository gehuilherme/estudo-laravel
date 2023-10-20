@extends('layouts.index')
@section('title', 'Admin Panel')

@php
    $names = ["Rafael", "Joe", "Tom", "José", "Maria", "Catarina", "Lana", "Wesley", "Bianca", "Guilherme"]
@endphp


@section('content')

    <ul class="nav nav-tabs nav-fill" id="tabAdmin">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#usersTab"><i class="fas fa-users"></i> Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#loginHistoryTab"><i class="fas fa-list"></i> Login History</a>
        </li> 
    </ul>

    <div class="tab-content pt-3">
        <div id="usersTab" class="tab-pane fade show active">
            <h3>List of Users</h3>
            <table class="table table-striped pt-3">
                <thead>
                  <tr>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($names as $name)
                    <tr>
                        <td>{{$name}}</td>
                        <td>{{$name}}</td>
                        <td>{{$name}}</td>
                        <td>{{$name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="loginHistoryTab" class="tab-pane fade">
            <h3>Login History</h3>
            <table class="table table-striped pt-3">
                <thead>
                  <tr>
                    <th scope="col" class="col col-3">Date/Time</th>
                    <th scope="col" class="col col">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($names as $name)
                    <tr>
                        <td>{{$name}}</td>
                        <td>{{$name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
          $('#tabAdmin a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
          });
        });
    </script>
    
@endsection