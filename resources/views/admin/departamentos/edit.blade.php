@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
            <h1>{{ trans('quickadmin::admin.roles-edit-edit_role') }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {!! implode('', $errors->all('
                        <li class="error">:message</li>
                        ')) !!}
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {!! Form::open(['route' => ['departamentos.update', $departamento->id], 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}

    <div class="form-group">
    {!! Form::label('faculdade', 'Faculdade', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('faculdade_id',$faculdades,null,['class'=>'w3-select','placeholder'=>'<Sellecione>'] ) !!}

    </div>
    </div>
    <div class="form-group">
        {!! Form::label('designacao', trans('quickadmin::admin.roles-edit-title'), ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('designacao', old('designacao', $departamento->designacao), ['class'=>'form-control', 'placeholder'=> trans('quickadmin::admin.roles-edit-title_placeholder')]) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('abreviatura', 'Abreviatura', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('abreviatura', old('abreviatura',$departamento->abreviatura), ['class'=>'form-control', 'placeholder'=> 'Abreviatura da faculdade']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            {!! Form::submit(trans('quickadmin::admin.roles-edit-btnupdate'), ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

    {!! Form::close() !!}

@endsection


