@extends('layouts.app')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('detections.index') }}">
                                {{ trans('global.detections') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active">{{ trans('global.edit') }}</li>
                    </ol>
                </div>
                <h4 class="page-title">{{ trans('global.edit') }} {{ trans('global.detection') }}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route("detections.update", $detection->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                    <label for="title">{{ trans('cruds.detections.fields.title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($detection) ? $detection->title : '') }}" required>
                                    @if($errors->has('title'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                                    <label for="type">{{ trans('cruds.detections.fields.detection_type') }} <span class="text-danger">*</span></label>
                                    {!! Form::select('type', $dec_type, old('type', isset($detection) ? $detection->type : ''), ['id'=>'type', 'class' => 'form-control', 'data-toggle'=>'select2']) !!}
                                    @if($errors->has('type'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('type') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('emergency') ? 'has-error' : '' }}">
                                    <label for="emergency">{{ trans('cruds.detections.fields.emergency') }} <span class="text-danger">*</span></label>
                                    {!! Form::select('emergency', $emergency, old('emergency', isset($detection) ? $detection->emergency : ''), ['class' => 'form-control', 'data-toggle'=>'select2']) !!}
                                    @if($errors->has('emergency'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('emergency') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
                                    <label for="level">{{ trans('cruds.detections.fields.detection_level') }} <span class="text-danger">*</span></label>
                                    {!! Form::select('level', $dec_level, old('level', isset($detection) ? $detection->detection_level : ''), ['class' => 'form-control', 'data-toggle'=>'select2']) !!}
                                    @if($errors->has('level'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('level') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('tlp') ? 'has-error' : '' }}">
                                    <label for="tlp">{{ trans('cruds.detections.fields.tlp') }} <span class="text-danger">*</span></label>
                                    {!! Form::select('tlp', $tlp, old('tlp', isset($detection) ? $detection->tlp : ''), ['class' => 'form-control', 'data-toggle'=>'select2']) !!}
                                    @if($errors->has('level'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('tlp') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('pap') ? 'has-error' : '' }}">
                                    <label for="pap">{{ trans('cruds.detections.fields.pap') }} <span class="text-danger">*</span></label>
                                    {!! Form::select('pap', $pap, old('pap', isset($detection) ? $detection->pap : ''), ['class' => 'form-control', 'data-toggle'=>'select2']) !!}
                                    @if($errors->has('pap'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('pap') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('clients') ? 'has-error' : '' }}">
                                    <label for="clients">{{ trans('cruds.detections.fields.clients_detections') }} <span class="text-danger">*</span></label>
                                    {!! Form::select('clients[]', $clients, old('clients', isset($detection) ?  array_map('intval', unserialize($detection->client_send_ids)) : []), ['class' => 'form-control', 'data-toggle'=>'select2', 'multiple'=>'multiple', 'required' => 'required']) !!}
                                    @if($errors->has('clients'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('clients') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
                                    <label for="tags">{{ trans('cruds.detections.fields.tags_detection') }} <span class="text-danger">*</span></label>
                                    {!! Form::select('tags[]', $tags, old('tags', isset($detection) ?  array_map('intval', unserialize($detection->tags)) : []), ['class' => 'form-control', 'data-toggle'=>'select2', 'multiple'=>'multiple', 'required' => 'required']) !!}
                                    @if($errors->has('tags'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('tags') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                                    <label for="comment">{{ trans('cruds.detections.fields.analyst_comments') }}</label>
                                    <textarea class="form-control" rows="8" name="comment">{{ old('comment', isset($detection) ? $detection->comment : '') }}</textarea>
                                    @if($errors->has('comment'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('comment') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                    <label for="description">{{ trans('cruds.detections.fields.detection_description') }}</label>
                                    <textarea class="form-control" rows="8" name="description">{{ old('description', isset($detection) ? $detection->description : '') }}</textarea>
                                    @if($errors->has('description'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('scenery') ? 'has-error' : '' }}">
                                    <label for="scenery">{{ trans('cruds.detections.fields.threat_scenery') }}</label>
                                    <textarea class="form-control" rows="8" name="scenery">{{ old('scenery', isset($detection) ? $detection->scenery : '') }}</textarea>
                                    @if($errors->has('scenery'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('scenery') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('tech_detail') ? 'has-error' : '' }}">
                                    <label for="tech_detail">{{ trans('cruds.detections.fields.tech_details') }}</label>
                                    <textarea class="form-control" rows="8" name="tech_detail">{{ old('tech_detail', isset($detection) ? $detection->tech_detail : '') }}</textarea>
                                    @if($errors->has('tech_detail'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('tech_detail') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group {{ $errors->has('ioc') ? 'has-error' : '' }}">
                                    <label for="ioc">{{ trans('cruds.detections.fields.ioc') }}</label>
                                    <div>
                                        <button class="btn btn-success mb-1" type="button" id="ioc_add_btn"><i class="fe-plus"></i> {{ trans('global.add') }} </button>
                                    </div>
                                    <div class="ioc-content">
                                        @if(isset($detection) && !is_null($detection->ioc))
                                            @foreach(unserialize($detection->ioc) as $key => $value)
                                                <div class="row mb-1">
                                                    <div class="col-md-4">
                                                        {!! Form::select('ioc_type[]', $ioc, old('ioc_type', $key), ['class' => 'form-control', 'data-toggle'=>'select2']) !!}
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" name="ioc_value[]" class="form-control" value="{{ old('ioc_value', $value) }}" required>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <button class="btn btn-danger trash-btn" type="button" onclick="removeCurItem(this)"><i class="fe-trash"></i></button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('tech_detail') ? 'has-error' : '' }}">
                                    <label for="tech_detail">{{ trans('cruds.detections.fields.evidences') }}</label>
                                    <div id="evdences">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('references') ? 'has-error' : '' }}">
                                    <label for="references">{{ trans('cruds.detections.fields.reference_url') }}</label>
                                    <div class="tagify-border" data-index="0">
                                        <textarea class="form-control" rows="8" name="references" id="references">{{ old('references', isset($detection) ? $detection->reference : '') }}</textarea>
                                    </div>
                                    @if($errors->has('references'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('references') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="hidden-flag col-md-4">
                                <div class="form-group {{ $errors->has('cves') ? 'has-error' : '' }}">
                                    <label for="cves">{{ trans('cruds.detections.fields.cves') }}</label>
                                    <div class="tagify-border" data-index="1">
                                        <textarea class="form-control" rows="8" name="cves" id="cves">{{ old('cves', isset($detection) ? $detection->cves : '') }}</textarea>
                                    </div>
                                    @if($errors->has('cves'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('cves') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="hidden-flag col-md-4">
                                <div class="form-group {{ $errors->has('cvss') ? 'has-error' : '' }}">
                                    <label for="cvss">{{ trans('cruds.detections.fields.cvss') }}</label>
                                    {!! Form::select('cvss', $cvss, old('cvss', isset($detection) ? $detection->cvss : ''), ['class' => 'form-control', 'data-toggle'=>'select2']) !!}
                                    @if($errors->has('cvss'))
                                        <div class="mt-1 require_error">
                                            {{ $errors->first('cvss') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger" type="submit"><i class="mdi mdi-send mr-1"></i> {{ trans('global.save') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/tagify/tagify.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/multiupload/uploadfile.css') }}" rel="stylesheet" type="text/css" />

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
        .ajax-upload-dragdrop
        {
            border: none;
        }
        .ajax-file-upload-filename {
            width: 100%;
            font-size: 12px;
        }
        .ajax-file-upload-statusbar
        {
            width: 100% !important;
            border: 1px solid #dddddd !important;
        }
        .ajax-file-upload-container
        {
            margin: 0px 0px 0px 0px;
        }
        .ajax-file-upload-progress
        {
            width: 98% !important;
        }
        .trash-btn
        {
            margin-left: -2vw;
        }
        .tagify
        {
            border: none;
        }
        .tagify-border
        {
            height: 182px;
            border: solid 1px #DDD;
            overflow-y: auto;
            padding: 4px;
        }
        .ajax-file-upload
        {
            background: #1abc9c;
            font-size: 14px;
            font-weight: normal;
            height: 30px;
            -webkit-box-shadow:none;
        }
        @media only screen and (max-width: 767px) {
            .trash-btn
            {
                width: 100%;
                margin-left: 0px;
            }
        }

    </style>
@endpush

@push('js')
    <!-- third party js -->
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tagify/jQuery.tagify.min.js') }}"></script>
    <script src="{{ asset('assets/libs/multiupload/jquery.uploadfile.min.js') }}"></script>
    <!-- Init js-->
    <script>
        $(document).ready(function(){
            $('[data-toggle="select2"]').select2();
            @if(isset($detection) && $detection->type != 2)
            $('.hidden-flag').hide();
            @endif
            $('#references').tagify({
                delimiters:",",
                pattern:/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/,
                maxTags: Infinity
            });
            $('#cves').tagify({
                delimiters:",",
                pattern:/\w+-./,
                maxTags: Infinity
            });

            $("#evdences").uploadFile({url: "{{ url('upload_file') }}",
                dragDrop: true,
                fileName: "myfile",
                returnType: "json",
                showDelete: true,
                showDownload:true,
                statusBarWidth:500,
                dragdropWidth:500,
                onLoad:function(obj)
                {
                    $.ajax({
                        cache: false,
                        url: "{{ url('load_file') }}" + "?id=" + "{{ $detection->id }}",
                        dataType: "json",
                        success: function(data)
                        {
                            for(var i=0;i<data.length;i++)
                            {
                                obj.createProgress(data[i]["name"],data[i]["path"],data[i]["size"]);
                            }
                        }
                    });
                },
                deleteCallback: function (data, pd) {
                    for (var i = 0; i < data.length; i++) {
                        $.post("{{ url('delete_file') }}" + "?id=" + "{{ $detection->id }}", {op: "delete", name: data[i]},
                            function (resp,textStatus, jqXHR) {
                                //Show Message
                            });
                    }
                    pd.statusbar.hide(); //You choice.
                },
                downloadCallback:function(filename,pd)
                {
                    location.href = "{{ url('download_file') }}"  + "?filename=" + filename;
                }
            });


            $('.tagify-border').click(function()
            {
                if($(this).attr('data-index') === "0")
                {
                    $('.tagify__input').get(0).focus();
                } else if($(this).attr('data-index') === "1")
                    $('.tagify__input').get(1).focus();
            });

            $('#type').change(function(){
                if($(this).val() == '2')
                {
                    $('.hidden-flag').show();
                } else {
                    $('.hidden-flag').hide();
                }
            });

            $('#ioc_add_btn').on('click', function(evt)
            {
                let insertHtml = `<div class="row mb-1">
                                        <div class="col-md-4">
                                            {!! Form::select('ioc_type[]', $ioc, old('ioc_type'), ['class' => 'form-control', 'data-toggle'=>'select2']) !!}
                </div>
                <div class="col-md-7">
                    <input type="text" name="ioc_value[]" class="form-control" value="{{ old('ioc_value') }}" required>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-danger trash-btn" type="button" onclick="removeCurItem(this)"><i class="fe-trash"></i></button>
                                        </div>
                                  </div>`;
                $('.ioc-content').append(insertHtml);
                $('[data-toggle="select2"]').select2();
            });
        });

        let removeCurItem = (obj) => {
            $(obj).parent().parent().remove();
        }

    </script>
    <!-- third party js end -->
@endpush
