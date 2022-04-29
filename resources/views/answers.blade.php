@extends('layout')


@section('header1')
    <div class="header5">
        <h3 class="header-heading">
            {{$question->title}}
        </h3>
        <button onclick="window.location='{{url("/questions/ask")}}'" class="btn btn-primary header-button">Ask
            Question
        </button>
    </div>
    <h3>{{$question->content}}</h3>
    <span class="count">Asked at {{$question->created_at}} &emsp;</span>
    <span class="count">Modified at {{$question->updated_at}}</span>
    <hr/>
@endsection

@section('mainContent')
    <div class="container">
        @foreach($answers as $answer)
            <div class="row">
                <div class="col-2">
                    <a><i class="fa-solid fa-caret-up arrows"></i></a>
                    {{$answer->answer_votes()->count()}} votes
                    <a><i class="fa-solid fa-caret-down arrows"></i></a>
                </div>
                <div class="col-10">
                    {{$answer->content}}
                    <hr/>
                </div>
            </div>
        @endforeach
        <h2>Your Answer</h2>
        <form method="post" action="{{url('insert_answer')}}">
            @csrf <!-- {{ csrf_field() }} -->
            <input type="hidden" name="question_id" value="{{$question->id}}">
            <textarea rows="4" cols="50" name="answer" placeholder="Enter answer here..."></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
