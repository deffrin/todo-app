@extends('layouts.todo-app-layout')

@section('content')

<form action="{{ route('save-todo') }}" method="post">
    @csrf
    
    <div class="mb-3 col-6" style="margin-top:200px;">
    <label for="todo-input" class="form-label">what you want to do next</label>
    <input type="text" name="todo" class="form-control" id="todo-input" placeholder="write to do">
    </div>
    <button type="submit" class="btn btn-primary">Create To Do</button>
</form>

@endsection