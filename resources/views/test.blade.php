@extends('layouts.layouts')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Test
        </div>
            @for($i = 0 ; $i < 10; $i++)
                <p> I Am {{ $i }} </p>
            @endfor
        </div>
    </div>
</div>
@endsection

