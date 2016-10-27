@include('admin.partials.header')
<div style="margin-top: 10%;"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="card text-xs-center">
                <div class="card-header default-color-dark white-text">
                    <h3>Novo Utilizador</h3>
                </div>
                <div class="card-block">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>{{ trans('quickadmin::auth.whoops') }}</strong> {{ trans('quickadmin::auth.some_problems_with_input') }}
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="input-field col s2">
                            {{-- Espaçamento à esquerda --}}
                        </div>
                        <div class=" col s10">
                        {!! Form::open(['url'=>'/register',  'class' => 'form-horizontal','method'=>"POST"]) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="input-field col s10">
                                    {!! Form::text('name', '', ['class'=>'validade','id'=>'name','value'=>"{{ old('name') }}",'required','autofocus']) !!}
                                    <label for="name">Nome de Utilizador</label>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="input-field col s10">
                                    {!! Form::email('email', '', ['class'=>'validade','id'=>'email','value'=>"{{ old('email') }}",'required']) !!}
                                    <label for="email">Email</label>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="input-field col s10">
                                    {!! Form::password('password', '', ['class'=>'validade','id'=>'password','required']) !!}
                                    <label for="password">Senha</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="input-field col s10">
                                    {!! Form::password('password_confirmation', '', ['class'=>'validade','id'=>'password-confirm','required']) !!}
                                    <label for="password-confirm">Confirme a senha</label>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {!! Form::hidden('id', $utente)  !!}

                        <div class="form-group">
                            <div class="row">
                                <div class="input-field col s10">
                                    <button type="submit" class="btn waves-effect waves-light">
                                        Seguir
                                        <i class="material-icons right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.partials.footer')
