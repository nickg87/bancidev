@extends('admin.main')
@section('title', 'All files')
@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('admin.partials._messages')
                <div class="row">
                    <div class="col-lg-12">
                        <!-- USER DATA-->
                        <div class="user-data m-b-30">
                            <h3 class="title-3 m-b-30">
                                <i class="zmdi zmdi-file"></i>Files</h3>
                            <div class="row">
                                <div class="col-sm-10 offset-sm-1">
                                    <h4 class="page-heading">Upload your Files <span id="counter"></span></h4>
                                    {!! Form::open(['route' => 'admin.file.store','files'=>true, 'class'=>'dropzone form-horizontal','id'=>'my-dropzone' ]) !!}
                                    <div class="dz-message">
                                        <div class="col-xs-8">
                                            <div class="message">
                                                <p>Drop files here or Click to Upload</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fallback">
                                        <input type="file" name="file" multiple>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                            {{--Dropzone Preview Template--}}
                            <div id="previewFiles" style="display: none;">

                                <div class="dz-preview dz-file-preview">
                                    <div class="dz-image"><img data-dz-thumbnail /></div>

                                    <div class="dz-details">
                                        <div class="dz-size"><span data-dz-size></span></div>
                                        <div class="dz-filename"><span data-dz-name></span></div>
                                    </div>
                                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                                    <div class="dz-error-message"><span data-dz-errormessage></span></div>



                                    <div class="dz-success-mark">

                                        <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                            <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                            <title>Check</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                            </g>
                                        </svg>

                                    </div>
                                    <div class="dz-error-mark">

                                        <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                            <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                            <title>error</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                                    <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            {{--End of Dropzone Preview Template--}}

                            <div class="table-responsive table-data" style="height:auto">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>File name</td>
                                        <td>Original name</td>
                                        <td>Added on</td>
                                        <td>Pages assigned</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $cntr=0; ?>
                                    @foreach($files as $file) <?php $cntr++; ?>
                                        <tr>
                                            <td>
                                                {{$cntr}}
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6 style="text-transform:none">{!! $file->file  !!}</h6>
                                                    <span> <a target="_blank" href="{{asset('files/'.$file->file)}}#">see original file</a></span>
                                                </div>
                                            </td>
                                            <td>{{ $file->original_name }}</td>
                                            <td>
                                                <div class="table-data__info">
                                                    {{ $file->created_at }}
                                                </div>
                                            </td>
                                            <td>
                                                @foreach ($file->pages as $page)
                                                    <span > <a>{{$page->title}} </a></span> <br>
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a @if (!Auth::user()->isUser()) data-confirm="Do you really want to delete ?" href="{{route('admin.file.destroy',$file->id)}}" data-method="delete" data-token="{{csrf_token()}}" @else  href="#" onclick="return alert('You don\'t have acces to this feature')"  @endif  class="chosen-single item" data-toggle="tooltip" data-placement="top"  title="Delete this image">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>

                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center d-flex justify-content-center">
                                        {!! $files->links(); !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    &nbsp
                                </div>
                            </div>
                        </div>
                        <!-- END USER DATA-->


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->

@stop

@section("scripts")
    <script src="/backend/js/anchor-form.js"></script>
    <script src="/backend/js/dropzone.js"></script>
    <script src="/backend/js/dropzone-file-config.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            laravel.initialize();
        })
    </script>
@endsection