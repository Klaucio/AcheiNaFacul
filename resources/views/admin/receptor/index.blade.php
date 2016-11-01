
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
{
@extends('admin.layouts.master')

@section('content')

    {{--<p>{!! link_to_route('estados.create', trans('quickadmin::admin.faculdades-index-add_new'), [], ['class' => 'btn btn-success']) !!}</p>--}}

    @if($achados->count() > 0)

            <div class="portlet-body">
                <div class="col-md-8">
                    <div class="card m-y-1">

                        <ul class="list-group list-group-flush">
                            @foreach($achados as $key => $value)

                                <div class="list-group-item achei contentor">
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
                                        {!! link_to_route('estados.edit', trans('quickadmin::admin.roles-index-edit'), [$value->id], ['class' => 'fa fa-pencil-square-o btn btn-md btn-info']) !!}
                                        {!! link_to_route('estados.show', '', [$value->id], ['class' => 'fa fa-eye btn btn-md btn-info']) !!}
                                        {!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => 'return confirm(\'' . trans('quickadmin::admin.roles-index-are_you_sure') . '\');',  'route' => ['estados.destroy', $value->id]]) !!}
                                        {{--{!! Form::submit(trans('quickadmin:departamentos:admin.roles-index-delete'), ['class' => 'fa fa-trash-o btn btn-md btn-danger']) !!}--}}
                                        {!! Form::close() !!}

                                        <button class="main-button fa fa-info">
                                            <div class="ripple"></div>
                                        </button>
                                    </div>

                                </div>

                            @endforeach

                        </ul>
                    </div>
                </div>
               </div>

    @else
        {{ trans('quickadmin::admin.roles-index-no_entries_found') }}
    @endif

@endsection

