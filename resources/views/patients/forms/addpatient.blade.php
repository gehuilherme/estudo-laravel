@extends('layouts.index')

@section('title', 'Add Pacient')

@section('content')

    <form>
        <div class="row">
            <div class="mb-3 col-md">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameInput" placeholder="Type patient Name">
            </div>
            <div class="mb-3 col-md">
                <label for="lastnameInput" class="form-label" >Last Name</label>
                <input type="text" class="form-control" id="lastnameInput" placeholder="Type patient Last Name">
            </div>
            <div class="mb-3 col-md">
                <label for="documentInput" class="form-label" >Document</label>
                <input type="text" class="form-control" id="documentInput" placeholder="Type patient document">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md">
                <label for="familyInput" class="form-label">Family</label>
                <select id="familyInput" class="form-select form-control mb-3" aria-label="Select patient family">
                    <option selected>Select Family</option>
                    <option value="1">Laurence, John</option>
                    <option value="2">Smith, Irina</option>
                </select>
            </div>
            
        </div>
        <div class="row">
            <div class="mb-3 col">
                <h2>Patient Details</h2>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md">
                <label for="smokerInput" class="form-label">Smoker?</label>
                <select id="smokerInput" class="form-select form-control mb-3" aria-label="Select if patient smoke">
                    <option value="0" selected >No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="mb-3 col-md">
                <label for="allergiesInput" class="form-label">Allergies?</label>
                <select id="allergiesInput" class="form-select form-control mb-3" aria-label="Select if patient have allergies">
                    <option value="0" selected >No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="mb-3 col-md">
                <label for="diabeticInput" class="form-label">Diabetic?</label>
                <select id="diabeticInput" class="form-select form-control mb-3" aria-label="Select if patient have diabetes">
                    <option value="0" selected >No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="mb-3 col-md">
                <label for="highPressureInput" class="form-label">High pressure?</label>
                <select id="highPressureInput" class="form-select form-control mb-3" aria-label="Select if patient have high pressure">
                    <option value="0" selected >No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="mb-3 col-md">
                <label for="dstInput" class="form-label">DSTs?</label>
                <select id="dstInput" class="form-select form-control mb-3" aria-label="Select if patient have DSTs">
                    <option value="0" selected >No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md">
                <label class="form-label" for="moreInformationInput">More Information</label>
                <textarea class="form-control mb-3" id="moreInformationInput" name="moreInformations" ></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-dark"> <i class="fa fa-save"></i> Submit</button>
    </form>
        
@endsection