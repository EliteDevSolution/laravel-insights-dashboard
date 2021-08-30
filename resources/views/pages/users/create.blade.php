@extends('layouts.app')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('users.index') }}">
                            {{ trans('cruds.user.title_singular') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active">{{ trans('global.create') }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("users.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">{{ trans('cruds.user.fields.name') }}<span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                        @if($errors->has('name'))
                            <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">{{ trans('cruds.user.fields.email') }}<span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                        @if($errors->has('email'))
                            <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">{{ trans('cruds.user.fields.phone') }}</label>
                        <input type="text" id="phone" name="phone" class="form-control" data-toggle="input-mask" data-mask-format="(00) 0000-0000" maxlength="14" value="{{ old('phone', isset($user) ? $user->phone : '') }}" required>
                        @if($errors->has('phone'))
                            <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                        @if($errors->has('password'))
                            <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                        {!! Form::label('roles', trans('cruds.user.fields.roles')) !!}
                        <div>
                            {!! Form::select('roles[]', $roles, old('roles'), ['class' => 'form-control', 'data-toggle'=>'select2']) !!}
                        </div>
                        @if($errors->has('roles'))
                            <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                                {{ $errors->first('roles') }}
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            {!! Form::label('status', trans('cruds.user.fields.status')) !!}
                            <div>
                                {!! Form::select('status', $status, old('status'), ['class' => 'form-control', 'data-toggle'=>'select2']) !!}
                            </div>
                            @if($errors->has('status'))
                                <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">{{ trans('cruds.user.fields.takedowns') }}</label>
                            <input type="number" id="takedowns" name="takedowns" class="form-control" value="{{ old('takedowns', 0) }}">
                            @if($errors->has('takedownsss'))
                                <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                                    {{ $errors->first('takedowns') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">{{ trans('cruds.user.fields.cpf_cnpj') }}</label>
                            <input type="number" id="cpf" name="cpf" class="form-control" value="{{ old('cpf', 0) }}">
                            @if($errors->has('cpf'))
                                <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                                    {{ $errors->first('cpf') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('roles', trans('cruds.user.fields.contract')) !!}
                        <div>
                            <textarea class="form-control" id="contract" name="contract" rows="8">{{ old('contract', isset($user) ? $user->contract : '') }}</textarea>
                        </div>
                        @if($errors->has('contract'))
                            <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                                {{ $errors->first('contract') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('avatar', trans('cruds.user.fields.avatar')) !!}
                        <div class="col-md-2">
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png gif tif jpeg" />
                        </div>
                    </div>
                    <div>
                        <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- third party css end -->
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice
        {
            background-color: #3a3a3a;
        }
        .select2-container{
            width: 100% !important;
        }
        .select2-selection--single{
            height: 40px !important;
            border-color: #ced4da !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow
        {
            top:6px;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered
        {
            line-height:37px;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__rendered
        {
            height: 32px;
            padding: 3px 5px;
        }
        .dropify-wrapper
        {
            min-width: 200px;
        }

    </style>
@endpush

@push('js')
    <!-- third party js -->
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('assets/libs/autonumeric/autoNumeric-min.js') }}"></script>
    <!-- Init js-->
    <script src="{{ asset('assets/js/pages/form-masks.init.js') }}"></script>
    
    <script>
        $(document).ready(function(){
            $('[data-toggle="select2"]').select2();
            $('.dropify').dropify();
        });
    </script>
    <!-- third party js end -->
@endpush
