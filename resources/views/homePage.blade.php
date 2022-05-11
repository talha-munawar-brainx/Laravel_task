@extends('layout')


@section('header1')
    <div class="header">
        <h1 class="header-heading">
            All Questions
        </h1>
        <button onclick="window.location='{{route('question.create')}}'" class="btn btn-primary header-button">Ask
            Question
        </button>
    </div>
    <p class="count">{{$questions->count()}} questions</p>
    <hr/>
@endsection

@section('mainContent')

    <div class="container">
        @foreach($questions as $question)
            <div class="row">
                <div class="col-2">
                    <i class="fa-solid fa-caret-up"></i>
                    {{$question->question_votes->count()}} votes
                    <div class="green_div">{{$question->answers()->count()}} answers</div>
                </div>
                <div class="col-10">
                    <div class="col">
                        <a href="/answers/{{$question->id}}"> {{$question->title}} </a>
                        <br>
                        <p class="question_content">{{$question->content}}</p>
                    </div>
                    <hr/>
                </div>

            </div>
        @endforeach
    </div>
@endsection
