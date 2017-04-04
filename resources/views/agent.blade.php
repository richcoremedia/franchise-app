@extends('layouts.master', ['pageTitle' => 'Agent'])

@section('contents')
	
	<!-- Page Title
 ============================================= -->
 <section id="page-title" class="page-title-mini">

  <div class="container clearfix">
       <h1>Agent</h1>
       <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/office') }}">Office</a></li>
            <li class="active">Agent</li>
       </ol>
  </div>

 </section><!-- #page-title end -->

 <section id="content">

  <div class="content-wrap">

    <div class="container clearfix">

      <div class="fancy-title title-border">
        <h3>Office A</h3>
      </div>

      @foreach ($agentLists as $agent)

        <div class="col-md-4 bottommargin-lg">

          <div class="team">
            <div class="team-image">
              <img src="{{ asset('images/team/3.jpg') }}" alt="John Doe">
            </div>
            <div class="team-desc">
              <div class="team-title bottommargin-sm"><h4>{{ $agent['name'] }}</h4><span>CEO</span><span>1234567890</span><span>abc@abc.com</span></div>
              <a href="{{ url('/agentDetails/'. $agent['id']) }}" class="button button-3d nomargin">Profile</a>
            </div>
          </div>

        </div>

      @endforeach

    </div>

  </div>

</section>

@stop