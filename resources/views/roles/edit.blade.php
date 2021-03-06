@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Role</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
   </section>
   <div class="content">
       <div class="container-fluid">
            @include('adminlte-templates::common.errors')
            {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
            @include('roles.fields')
            {!! Form::close() !!}
       </div>
   </div>
@endsection
