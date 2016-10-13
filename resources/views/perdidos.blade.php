<<<<<<< HEAD
<?php $nav_perdidos = 'active'; ?>
=======
<?php
use App\Models\categoria;
?>

>>>>>>> 5a13515782afb796889f64f84881efbbd78d4f03
@extends('layouts.app')

@section('content')

    <div class="container background-grey bottom-border">
        <div class="row padding-vert-60">
            <div class="section">
                <div class="container" style="background-color:#7ADEDE">
                    <div class="row">
                        <div class="col-md-6">
                            <img src={{ asset('/img/download.jpg') }}  class="img-responsive img-thumbnail>
                        </div>
                        <div class="col-md-6">
                            <h1>A title</h1>
                            <h3>A subtitle</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                nec, pellentesque eu, pretium quis, sem. .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container background-grey bottom-border">
        <div class="row padding-vert-60">
            <div class="p-y-3 section">
                <div class="container">
                    <div class="row">
<<<<<<< HEAD
                        <div class="col-md-4">
                            <div class="card m-y-1">                            
                                <ul class="nav nav-pills nav-stacked">
                                   <li>jedan</li>
                                   <li>dva</li>
                                   <li>tri</li>
                                   <li>cetriri</li>
                                   <li>pet</li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card m-y-1">
                                <div class="bg-info card-block text-center text-xs-center">
                                    <h2 class="card-title">Artigos Perdidos
                                        <span class="label label-default label-pill pull-right">17</span>
                                    </h2>
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach($perdidos as $key => $value)

                                        <li class="list-group-item">
                                            <h4><strong>{{ $value->designacao }}
                                                    <span class="label label-default label-pill pull-right">
                                                <img src="http://v4.pingendo.com/assets/photos/apple/photo-1.jpg" class="img-circle pull-right" style="width:50px">
                                            </span>
                                                </strong>

                                            </h4>
                                            <p>
                                            <h5><strong>Descrição</strong></h5>
                                            {{ $value->descricao }}
                                            <h5><strong>Local Perdido</strong></h5>
                                            {{ $value->local }}
                                            <h5><strong>Descricao Local Perdido</strong></h5>
                                            {{ $value->descricao_local }}
                                            </p>
                                        </li>
=======
                        <div class="w3-container w3-teal">
                            <h2>Reportar Perdido</h2>
                        </div>


                        {!! Form::model($artigo,['action'=>'PerdidosController@store','class'=>'class="w3-container"','files'=>true]) !!}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Preencha correctamente os campos!
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
>>>>>>> 5a13515782afb796889f64f84881efbbd78d4f03
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">�</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            {{--<img src="images/{{ Session::get('image') }}">--}}
                        @endif
                        {!! Form::text('titulo','',['class'=>'w3-input w3-animate-input','placeholder'=>'Titulo do anuncio']) !!}
                        {!! Form::text('designacao','',['class'=>'w3-input w3-animate-input','placeholder'=>'Achado']) !!}
                        {!! Form::text('descricao','',['class'=>'w3-input w3-animate-input','placeholder'=>'Descricao do artigo']) !!}
                        {{--{!! Form::label('data', 'Data em que perdeu') !!}--}}
                        {!! Form::date('data','',['class'=>'w3-input w3-animate-input']) !!}
                        {!! Form::select('categoria_id',$categorias,null,['class'=>'w3-select'] ) !!}
                        {!! Form::text('local','',['class'=>'w3-input w3-animate-input','placeholder'=>'Local onde achou']) !!}
                        {!! Form::textarea('descricao_local', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Descricao do Local']) !!}
                        {!! Form::file('foto','',['class'=>'w3-input w3-animate-input']) !!}
                        {!! Form::hidden('tipo', 'Perdido')  !!}

                        {!! Form::submit('Submeter', ['class'=>'w3-btn w3-hover-green']) !!}
                        {!! Form::close() !!}



                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container background-grey bottom-border">
        <div class="row padding-vert-60">
            <!-- Icons -->
            <div class="col-md-4 text-center">
                <i class="fa-cogs fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn">Velit esse molestie</h2>
                <p class="animate fadeIn">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-cloud-download fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn">Quam nunc putamus</h2>
                <p class="animate fadeIn">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn">Placerat facer possim</h2>
                <p class="animate fadeIn">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
            </div>
            <!-- End Icons -->
        </div>
    </div>
    </div>
@endsection
