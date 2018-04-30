@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Plant Types
                    </br>
                    <a href="/planttypes/create"> Add Plant Types</a>
                </div>
                <div class="card-body">
                    <table class='table' border='1' cellpadding='10'>
                        <tr>
                            <td>Name</td>
                            <td>Comments</td>
                            <td></td>
                        </tr>
                        @foreach($planttypes as $planttypes) 
                            <tr>
                                <td>{{ $planttypes['name'] }}</td>
                                <td>{{ $planttypes['comments'] }}</td>
                                <td><a href="/planttypes/edit/{{ $planttypes["id"] }}">Edit</a></td>
                            <tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection