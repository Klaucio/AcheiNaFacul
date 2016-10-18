@extends('admin.layouts.master')

@section('content')

    <p>{!! link_to_route('faculdades.create', trans('quickadmin::admin.faculdades-index-add_new'), [], ['class' => 'btn btn-success']) !!}</p>

    @if($categorias->count() > 0)
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

                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->designacao }}</td>
                                <td>
                                    {!! link_to_route('categorias.edit', trans('quickadmin::admin.roles-index-edit'), [$categoria->id], ['class' => 'fa fa-pencil-square-o btn btn-md btn-info']) !!}
                                    {!! link_to_route('categorias.show', '', [$categoria->id], ['class' => 'fa fa-eye btn btn-md btn-info']) !!}
                                    {!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => 'return confirm(\'' . trans('quickadmin::admin.roles-index-are_you_sure') . '\');',  'route' => ['estados.destroy', $categoria->id]]) !!}
                                    {!! Form::submit(trans('quickadmin:departamentos:admin.roles-index-delete'), ['class' => 'fa fa-trash-o btn btn-md btn-danger']) !!}
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

