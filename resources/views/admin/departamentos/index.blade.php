@extends('admin.layouts.master')

@section('content')

    <p>{!! link_to_route('departamentos.create', trans('quickadmin::admin.roles-index-add_new'), [], ['class' => 'btn btn-success']) !!}</p>

    @if($departamentos->count() > 0)
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">{{ trans('quickadmin::admin.roles-index-roles_list') }}</div>
            </div>
            <div class="portlet-body">
                <table id="datatable" class="table table-striped table-hover table-responsive datatable">
                    <thead>
                        <tr>
                            <th>{{ trans('quickadmin::admin.roles-index-title') }}</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    {{'testando'}}
                    <tbody>
                        @foreach ($departamentos as $departamento)
                            <tr>
                                <td>{{ $departamento->designacao }}</td>
                                <td>
                                    {!! link_to_route('departamentos.edit', trans('quickadmin::admin.roles-index-edit'), [$departamento->id], ['class' => 'fa fa-pencil-square-o btn btn-md btn-info']) !!}
                                    {!! link_to_route('newCourse', 'Curso', [$departamento->id], ['class' => 'fa fa-plus-circle btn btn-md btn-info']) !!}
                                    {!! link_to_route('departamentos.show', '', [$departamento->id], ['class' => 'fa fa-eye btn btn-md btn-info']) !!}
                                    {!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => 'return confirm(\'' . trans('quickadmin::admin.roles-index-are_you_sure') . '\');',  'route' => ['departamentos.destroy', $departamento->id]]) !!}
                                    {!! Form::submit(trans('quickadmin::admin.roles-index-delete'), ['class' => 'btn btn-xs btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @else
        {{ trans('quickadmin::admin.roles-index-no_entries_found') }}
    @endif

@endsection

