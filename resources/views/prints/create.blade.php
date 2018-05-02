@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Принти
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <style>
            .form {
                display: block;
                margin: 20px auto;
                background: #eee;
                border-radius: 10px;
                padding: 15px
            }

            .progress {
                padding: 30px;
                position: relative;
                width: 100%;
                border: 1px solid #ddd;
                padding: 1px;
                border-radius: 3px;
            }

            .bar {
                background-color: #B4F5B4;
                width: 0%;
                height: 50px;
                border-radius: 3px;
            }

            .percent {
                font-weight: bolder;
                font-size: 1.5em;
                position: absolute;
                display: inline-block;
                top: 25%;
                left: 48%;
            }

            .card {
                background: #fff;
                padding: 3em;
                line-height: 1.5em;
                box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            }

            [hidden] {
                display: none !important;
            }
        </style>
        <div class="card">
            <h3>Виберіть файл зображення</h3>
            <form class="form form-horizontal" action="{{ route('uploade') }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div style="position:relative;">
                    <a class='btn btn-primary' href='javascript:;'>
                        Виберіть файл...
                        <input required id="apkfile" name="myfile" accept="image/x-png" type="file"
                               style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'
                               name="file_source" size="40" onchange='$("#upload-file-info").html($(this).val());'>
                    </a>
                    &nbsp;
                    <span class='label label-info' id="upload-file-info"></span>
                </div>
                <br>
                <input class="form-control btn btn-warning" type="submit" value="Завантажити файл на сервер">
            </form>

            <div style="height: 50px;" class="progress">
                <div class="bar"></div>
                <div class="percent">0%</div>
            </div>

            <div id="status"></div>
            <div id="store" style="display: none;" class="box-body">
                {!! Form::open(['route' => 'prints.store']) !!}

                <div class="row">
                    @include("prints.fields")
                </div>
                {!! Form::close() !!}

            </div>
            <h6>&emsp;</h6>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function (event) {

                (function () {

                    var bar = $('.bar');
                    var percent = $('.percent');
                    var status = $('#status');

                    $('.form').ajaxForm({
                        beforeSend: function () {
                            status.empty();
                            var percentVal = '0%';
                            bar.width(percentVal)
                            percent.html(percentVal);
                        },
                        uploadProgress: function (event, position, total, percentComplete) {
                            var percentVal = percentComplete + '%';
                            bar.width(percentVal)
                            percent.html(percentVal);
                        },
                        success: function (data, textStatus, jqXHR) {
                            //console.log();
                            $('.image').val(jqXHR.responseText);
                            $('.image').hide();

                            var percentVal = '100%';
                            bar.width(percentVal)
                            percent.html(percentVal);
                        },
                        complete: function (xhr) {
                            //status.html(xhr.responseText);
                            $('#store').fadeIn(800, function() {
                            });
                        }
                    });

                })();


            });
        </script>
    </div>
@endsection
