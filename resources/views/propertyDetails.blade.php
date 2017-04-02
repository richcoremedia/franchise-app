@extends('layouts.master', ['pageTitle' => 'PropertyDetails'])

@section('contents')
     <h2>Property Details</h2>

     <p>{{ $id }}</p>

     {!! Form::open(['url' => '/propertyDetails/'.$id, 'method' => 'POST']) !!}

          {!! Form::label('price', 'Price') !!}
          {!! Form::text('price') !!}

          {!! Form::label('city', 'City') !!}
          {!! Form::text('city') !!}

          {!! Form::submit('Submit') !!}

     {!! Form::close() !!}

@stop