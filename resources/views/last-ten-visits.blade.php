@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">عدد الرسايل={{$visits_number}}</div>

                <div class="card-body">
                    @if ($visits->count()==0)
                    <p>no visits</p>
                    @else
                    @foreach ($visits as$v )
                    <p>{{ \Carbon\Carbon::make($v->created_at)->diffForHumans()}}</p>
                    <hr>
                        
                    @endforeach
                        
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
