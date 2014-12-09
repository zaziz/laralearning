@extends('layout')

@section('content')
@foreach($test as $ditch)
<p>{{$ditch}}</p>
@endforeach
@stop