@extends('layouts.default')
@section('content') 
            <div class="container">
                <div class="row">
                    <div class="span3">
						@include('layouts.sidebar')
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
							HomeController@getIndex()
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
@stop
