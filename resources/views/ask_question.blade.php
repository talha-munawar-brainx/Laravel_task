@extends('layout')

@section('form')
    <h1>Ask a public Question</h1>
    <div class="form_div">
        <form method="post" action="{{route('question.store')}}">
            @csrf <!-- {{ csrf_field() }} -->
            <h4>Title</h4>
            <p>Be specific and imagine you’re asking a question to another person</p>
            <input name="title" type="text" placeholder="e.g. Is there an R function for finding ...?">
            <h4>Body</h4>
            <p>Include all the information someone would need to answer your question</p>
            <textarea rows="4" cols="50" name="description">
Enter text here...</textarea>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
