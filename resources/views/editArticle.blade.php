@extends('layouts.app')
@section('content')
<div class=" container   justify-content-center align-items-center border border-black m-5 p-5">
        <form action="{{route('articles.update', ['article'=>$article->id])}}" method="post">
            @method('PUT')
            @csrf
            
            <div>
                <label for="">Title</label>
                <input type="text" name="title"  class="form-control "  id="title" value="{{$article->title}}"/>
            </div>
            <div>
                <label for="">Content</label>
                <input type="text" name="content"   class="form-control " id="" value="{{$article->title}}"/>
            </div>
            <div>
                <button type="submit" class="btn btn-primary  justify-content-center align-items-center m-3">Envoyé</button>
            </div>
        </form>
    </div>
@endsection