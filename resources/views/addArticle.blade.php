@extends('layouts.app')
@section('content')
    <div>
        <form action="/articles" method="post">
            @csrf
            <div>
                <label for="">Title</label>
                <input type="text" name="title"  class="form-control "  id="title" />
            </div>
            <div>
                <label for="">Content</label>
                <input type="text" name="content"   class="form-control " id=""/>
            </div>
            <div>
                <button type="submit" class="btn btn-primary  justify-content-center align-items-center m-3">Envoyé</button>
            </div>
        </form>
    </div>

   @endsection 