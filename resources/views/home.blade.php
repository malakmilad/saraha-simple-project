@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">عدد الرسايل={{$visits}}</div>

                <div class="card-body">
                    @if ($massages->count()==0)
                    <p>no massages</p>
                    @else
                    @foreach ($massages as$m )
                    <p>{{$m->text}}</p>
                    <a href="{{route('send.delete',$m->id)}}" class="btn btn-danger">delete</a></td>
                    <hr>
                        
                    @endforeach
                        
                    @endif
                    
                </div>
                {{$massages->links()}}
            </div>
        </div>
        
    </div>
</div>
@endsection
