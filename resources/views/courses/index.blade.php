@extends('layouts.auth')

@section('mainContent')

<div id="course-view" class="container mx-auto px-4">
    <!-- todo: add main page -->

    <div id="courses" data-props="@json('courses')" ></div>
    <div id="myTest">

    </div>


</div>

@endsection
