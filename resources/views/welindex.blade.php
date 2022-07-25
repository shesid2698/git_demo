@extends('welcome')
@section('con')
    @parent
@endsection
@section('sss','這邊替換!!')
@section('math')
 @foreach ($math1 as $m1)
     @foreach ($math2 as $m2)
         {{$m1}}*{{$m2}}={{$m1*$m2}}&emsp;
     @endforeach
    項目還剩下{{$loop->remaining}} <br>
 @endforeach
@endsection
@section('name')
    {{$name2}}
@endsection
@section('name2')
@parent

@for ($i=0;$i<5;$i++)
    <p>sss</p>
@endfor
@endsection
