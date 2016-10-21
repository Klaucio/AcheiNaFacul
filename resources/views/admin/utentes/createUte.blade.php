@include('admin.partials.header')
<div style="margin-top: 10%;"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="card text-xs-center">
                <div class="card-header default-color-dark white-text">
                    <h2>Registe-se</h2>
                </div>
                <div class="card-block">
                    <h4 class="card-title">Special title treatment</h4>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>{{ trans('quickadmin::auth.whoops') }}</strong>  {{ trans('quickadmin::auth.some_problems_with_input') }}
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="input-field col s2">
                        </div>
                        <div class="input-field col s10">
                            {!! Form::open(['action'=>'UtentesController@store',  'class' => 'form-horizontal']) !!}
                            {{ csrf_field() }}


                            <div class="form-group">

                                <div class="row">
                                    <div class="input-field col s4">
                                        <input name="tipo" type="radio" id="estudante" value="Estudante" onClick=ShowHideDiv()  />
                                        <label for="estudante">Estudante</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input name="tipo" type="radio" id="funcionario"  value="Funcionario" onClick=ShowHideDiv() />

                                        <label for="funcionario">Funcionario</label>
                                    </div>
                                </div>
                            </div>

                            <div id="nrEstudante" class="row">
                                <div class="input-field col s10">
                                    {!! Form::number('id', '', ['class'=>'validade','id'=>'nrUtente']) !!}
                                    <label id="nrUtente" for="id">Número de Identificação</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10">
                                    {!! Form::text('nome', '', ['class'=>'validate']) !!}
                                    <label for="nome">Nome</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10">
                                    {!! Form::text('telefone', '', ['class'=>'validate']) !!}
                                    <label for="telefone">Telefone</label>
                                </div>
                            </div>
                            <div id="divEstudante" style="display: none">
                                <div class="row">
                                    <div class="input-field col s10">
                                        {!! Form::select('curso_id',$cursos,null,['class'=>''] ) !!}
                                        <label for="curso_id">Curso</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s10">
                                        {!! Form::select('regime', array(
                                          'Regime',
                                          'Laboral'=>'Laboral',
                                          'Pós laboral'=>'Pós laboral',
                                          ),null) !!}
                                        <label for="regime">Regime</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s10">
                                        {!! Form::text('sala', '', ['class'=>'w3-input w3-animate-input']) !!}
                                        <label for="sala">Sala</label>
                                    </div>
                                </div>

                            </div>

                            <div id="divFuncionario"  style="display: none">


                                <div  class="form-group">
                                    <div class="row">
                                        <div class="input-field col s10">
                                            {!! Form::text('designacao', '', ['class'=>'validate']) !!}
                                            <label for="designacao">Local Trabalho</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="input-field col s10">
                                            {{--<i class="material-icons prefix">mode_edit</i>--}}
                                            {!! Form::textarea('descricao', '', ['class'=>'materialize-textarea','rows' => 4]) !!}
                                            <label for="descricao">Descição Trabalho</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
        <div class="card-footer text-muted default-color-dark white-text">

        {{--</div>--}}
        </div>
    </div>
</div>
@include('admin.partials.footer')
