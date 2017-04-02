@extends('layouts.master', ['pageTitle' => 'Property'])

@section('contents')
     <h2>Property</h2>

     <ul>
          @foreach ($propertyLists as $property)
               <li>
                    Name: {{ $property['name'] }} <br>
                    Size: {{ $property['size'] }} <br>
                    <a href="{{ url('/propertyDetails/' . $property['id']) }}" title="View">View</a> <br><br>
               </li>
          @endforeach
     </ul>

@stop