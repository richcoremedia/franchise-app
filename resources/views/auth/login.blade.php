@extends('layouts.app', ['pageTitle' => 'Login'])

@section('contents')

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">
                    
                    <div class="panel panel-default nobottommargin">
                        <div class="panel-body" style="padding: 40px;">
                            <form class="nobottommargin" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="col_full{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail Address</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus/>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col_full{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password" class="form-control" required/>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" value="login">Login</button>
                                    {{-- <a href="{{ route('password.request') }}" class="fright">Forgot Your Password?</a> --}}
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
