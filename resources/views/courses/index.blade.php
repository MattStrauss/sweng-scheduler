@extends('layouts.auth')

@section('mainContent')

<div id="course-view" class="container mx-auto px-4">
    <!-- todo: add main page -->
    <div id="curriculumGraph" data-courses="{{$courses}}" data-completed="{{$completedCourses}}">

    </div>


</div>

@endsection
