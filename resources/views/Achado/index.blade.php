@extends('layouts.app')

@section('content')


    <div class="container background-grey bottom-border">
        <div class="row padding-vert-60">
            <div class="section">
                <div class="container" style="background-color:#7ADEDE">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('/img/download.jpg') }}"  class="img-responsive img-thumbnail">
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

                        <div class="col-md-4">
                            <div class="card m-y-1">
                                <ul class="list-group sidebar-nav" id="sidebar-nav">
                                    <!-- Typography -->
                                    <li class="list-group-item list-toggle">
                                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-typography">Typography</a>
                                        <ul id="collapse-typography" class="collapse">
                                            <li>
                                                <a href="features-typo-basic.html">
                                                    <i class="fa fa-sort-alpha-asc"></i>Basic Typography</a>
                                            </li>
                                            <li>
                                                <a href="features-typo-blockquotes.html">
                                                    <i class="fa fa-magic"></i>Blockquotes</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Typography -->
                                    <!-- Components -->
                                    <li class="list-group-item list-toggle">
                                        <a class="accordion-toggle" href="#collapse-components" data-toggle="collapse">Components</a>
                                        <ul id="collapse-components" class="collapse">
                                            <li>
                                                <span class="badge">New</span>
                                                <a href="features-labels.html">
                                                    <i class="fa fa-tags"></i>Labels</a>
                                            </li>
                                            <li>
                                                <span class="badge">New</span>
                                                <a href="features-progress-bars.html">
                                                    <i class="fa fa-align-left"></i>Progress Bars</a>
                                            </li>
                                            <li>
                                                <a href="features-panels.html">
                                                    <i class="fa fa-columns"></i>Panels</a>
                                            </li>
                                            <li>
                                                <a href="features-pagination.html">
                                                    <i class="fa fa-arrows-h"></i>Pagination</a>
                                            </li>
                                        </ul>

                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card m-y-1">
                                <div class="bg-info card-block text-center text-xs-center">
                                    <h2 class="card-title">Artigos Achados
                                        <span class="label label-default label-pill pull-right">17</span>
                                    </h2>
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach($achados as $key => $value)

                                        <a href="{{url('achados',$value->id)}}" class="list-group-item achei contentor">
                                            <h2><strong>{{ $value->designacao }}
                                                    <span class="label label-default label-pill pull-right">
                                                <img src="{{asset('img/'.$value->foto)}}" class="img-circle pull-right" style="width:50px">
                                                </span></strong></h2>
                                            <p>
                                            <h5><strong>Local Achado</strong></h5>
                                            {{ $value->local }}
                                            </p>
                                            <div class="button-wrapper">
                                                <div class="layer"></div>
                                                <button class="main-button fa fa-info">
                                                    <div class="ripple"></div>
                                                </button>
                                            </div>

                                            <div class="layered-content">
                                                <button class="close-button fa fa-times"></button>
                                                <div class="content">
                                                    <img src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/111167/profile/profile-512_4.jpg" alt="Balapa">
                                                    <p>Crafted by balapa.</p>
                                                    <p>See also my <a href="http://codepen.io/balapa/details/gbQbXR/">other pen</a></p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

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
