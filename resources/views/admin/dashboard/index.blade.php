@extends('layouts.app')

<style>
    .button1{
        background-color: lightseagreen;
        color: white;
        height: 34px;
        width: 75px;
        border-radius: 15px;
        border-color: green;
        shadow: none;
        font-weight: bold;
    }
    .button2{
        background-color: mediumseagreen;
        color: white;
        height: 34px;
        width: 75px;
        border-radius: 15px;
        border-color: green;
        shadow: none;
        font-weight: bold;
    }
    .button3{
        background-color: seagreen;
        color: white;
        height: 34px;
        width: 85px;
        border-radius: 15px;
        border-color: green;
        shadow: none;
        font-weight: bold;
    }
    .button4{
        background-color: lightseagreen;
        color: white;
        height: 40px;
        width: 100px;
        border-radius: 5px;
        border-color: lightseagreen;
        shadow: none;
        font-weight: bold
    }
</style>
@section('content')
<div class="content-wrapper">
    <h1 class="text-center mt-5">KINDERCARE EDUCATION CENTRE</h1>
    <div class="container-fluid">
          <p class="text-center"><i class="mdi mdi-account fs-3 font-16"></i>Pupils</p>
    <div class="row mb-5">
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="box text-center bg-success">
                    <h1 class="font-light text-white">
                        {{ $pupils }}
                    </h1>
                    <h6 class="text-white">Total Pupils</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                        {{ $activePupils }}
                    </h1>
                    <h6 class="text-white">Active Pupils</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                        {{ $deactivePupils }}
                    </h1>
                    <h6 class="text-white">Deactivated Pupils</h6>
                </div>
            </div>
        </div>
        </div>
        <h4 class="text-center"><i class="mdi mdi-book-open-variant"></i>Assignments</h4>
        <div class="row">
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="box text-center bg-success">
                    <h1 class="font-light text-white">
                        {{ $assignments }}
                    </h1>
                    <h6 class="text-white">Total Assignments</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                        {{ $notYetDeadline }}
                    </h1>
                    <h6 class="text-white">Due Assignments</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                        {{ $overdue }}
                    </h1>
                    <h6 class="text-white">Over Due</h6>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    </div>
@endsection