@extends('layouts.index')
@section('title', 'Add User')

@section('content')

    <form>
        <div class="row">
            <div class="mb-3 col-md">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameInput" placeholder="Type your Name">
            </div>
            <div class="mb-3 col-md">
                <label for="lastnameInput" class="form-label" >Last Name</label>
                <input type="text" class="form-control" id="lastnameInput" placeholder="Type your Last Name">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" placeholder="Type your Email">
            </div>
            <div class="mb-3 col-md">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordInput"  placeholder="Type your Password">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col">
                <label for="passwordInput" class="form-label">User Role</label>
                <select class="form-select form-control mb-3" aria-label="Select user role">
                    <option selected>Select user role</option>
                    <option value="1">Administrator</option>
                    <option value="2">Medic</option>
                    <option value="3">Nurse</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-dark"> <i class="fa fa-save"></i> Submit</button>
    </form>
    
@endsection