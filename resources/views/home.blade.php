@extends('layouts.app')

@section('title', 'Welcome to Our Courses')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Welcome to Our Course Offers</h1>
    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4 d-flex align-items-stretch mb-4">

                <div class="card course-card flex-fill shadow-sm">
                    <div class="card-header" style="background-color: #000000; color: white;">
                        <h5 class="card-title mb-0">{{ $course->name }}</h5>
                    </div>
                    <img src="{{ asset('storage/img/' . $course->img) }}" class="card-img-top" alt="{{ $course->name }}">

                    <div class="card-body d-flex flex-column">
                        <p class="card-text course-description flex-grow-1">
                            @if($course->name == 'English for Beginners')
                                A beginner level course for learning English.
                            @elseif($course->name == 'Intermediate English')
                                An intermediate level course for enhancing English skills.
                            @elseif($course->name == 'Advanced English')
                                An advanced course for mastering English.
                            @elseif($course->name == 'German for Beginners')
                                A beginner level course for learning German.
                            @elseif($course->name == 'Intermediate German')
                                An intermediate level course for enhancing German skills.
                            @elseif($course->name == 'Advanced German')
                                An advanced course for mastering German.
                            @elseif($course->name == 'French for Beginners')
                                A beginner level course for learning French.
                            @elseif($course->name == 'Intermediate French')
                                An intermediate level course for enhancing French skills.
                            @elseif($course->name == 'Advanced French')
                                An advanced course for mastering French.
                            @elseif($course->name == 'Italian for Beginners')
                                A beginner level course for learning Italian.
                            @elseif($course->name == 'Intermediate Italian')
                                An intermediate level course for enhancing Italian skills.
                            @elseif($course->name == 'Advanced Italian')
                                An advanced course for mastering Italian.
                            @elseif($course->name == 'Spanish for Beginners')
                                A beginner level course for learning Spanish.
                            @elseif($course->name == 'Intermediate Spanish')
                                An intermediate level course for enhancing Spanish skills.
                            @elseif($course->name == 'Advanced Spanish')
                                An advanced course for mastering Spanish.
                            @elseif($course->name == 'Chinese for Beginners')
                                A beginner level course for learning Chinese.
                            @elseif($course->name == 'Intermediate Chinese')
                                An intermediate level course for enhancing Chinese skills.
                            @elseif($course->name == 'Advanced Chinese')
                                An advanced course for mastering Chinese.
                            @else
                                No description available.
                            @endif
                        </p>
                        <a href="/courses" class="btn btn-outline-dark mt-auto" style="background-color: #76787b; color: white;">Learn More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
