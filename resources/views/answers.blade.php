@extends('layout')


@section('header1')

    <div class="header5">
        <h3 class="header-heading">

            {{$questions->title}}

        </h3>
        <button onclick="window.location='{{route('question.create')}}'" class="btn btn-primary header-button">Ask
            Question
        </button>
    </div>
    <h3>{{$questions->content}}</h3>
    <span class="count">Asked at {{$questions->created_at}} &emsp;</span>
    <span class="count">Modified at {{$questions->updated_at}}</span>
    <hr/>
@endsection

@section('mainContent')
    <div class="container">
        @foreach($questions->answers as $answer)
            <div class="row">
                <div class="col-2">
                    <button class="btn" onclick="window.location='{{route('AnswerVote.store',
                    ['question_id' => $questions->id,'answer_id'=>$answer->id,'vote' => 1])}}'">
                        <i class="fa-solid fa-caret-up"></i></button>
                    {{$answer->positive_answer_votes()->count() - $answer->negative_answer_votes()->count()}} votes
                    <button class="btn" onclick="window.location='{{route('AnswerVote.store',
                    ['question_id' => $questions->id,'answer_id'=>$answer->id,'vote' => -1])}}'">
                        <i class="fa-solid fa-caret-down"></i></button>
                </div>
                <div class="col-10">
                    {{$answer->content}}
                    <hr/>
                </div>
            </div>
        @endforeach
        <h2>Your Answer</h2>
        <form method="post" action="{{route('answer.store')}}">
            @csrf <!-- {{ csrf_field() }} -->
            <input type="hidden" name="question_id" value="{{$questions->id}}">
            <textarea rows="4" cols="50" name="answer" placeholder="Enter answer here..."></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
