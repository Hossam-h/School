@extends('layouts.master')
@section('css')
@toastr_css
@section('title')
empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('main_side.Grades')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">dsfjsdfk</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

                <!--start father----------------------------------------------------------------------------------->
                <h3>Father</h3>

                <div class="row setup-content" id="step-1">

                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <form action="{{route('Myparent.update','test')}}" method="POST" enctype="multipart/form-data">

                                    {{ method_field('patch') }}
                                     {{ csrf_field() }}

                                     <input type="text" hidden name="id" value="{{$parent_edit->id}}" class="form-control">
                                        <label for="title">{{trans('Parent_trans.Email')}}</label>
                                        <input type="email" name="Email" value="{{$parent_edit->Email}}" class="form-control">

                                </div>
                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.Password')}}</label>
                                    <input type="password" name="Password" value="{{$parent_edit->Password}}" class="form-control">

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.Name_Father')}}</label>
                                    <input type="text" name="Name_Father" value="{{$parent_edit->getTranslation('Name_Father','ar')}}" class="form-control">

                                </div>
                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.Name_Father_en')}}</label>
                                    <input type="text" name="Name_Father_en" value="{{$parent_edit->getTranslation('Name_Father','en')}}" class="form-control">

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="title">{{trans('Parent_trans.Job_Father')}}</label>
                                    <input type="text" name="Job_Father" value="{{$parent_edit->getTranslation('Job_Father','ar')}}" class="form-control">

                                </div>
                                <div class="col-md-3">
                                    <label for="title">{{trans('Parent_trans.Job_Father_en')}}</label>
                                    <input type="text" name="Job_Father_en" value="{{$parent_edit->getTranslation('Job_Father','en')}}" class="form-control">

                                </div>

                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.National_ID_Father')}}</label>
                                    <input type="text" name="National_ID_Father" value="{{$parent_edit->National_ID_Father}}"class="form-control">

                                </div>
                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.Passport_ID_Father')}}</label>
                                    <input type="text" name="Passport_ID_Father" value="{{$parent_edit->Passport_ID_Father}}" class="form-control">

                                </div>

                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.Phone_Father')}}</label>
                                    <input type="text" name="Phone_Father" value="{{$parent_edit->Phone_Father}}" class="form-control">

                                </div>

                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">{{trans('Parent_trans.Nationality_Father_id')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Nationality_Father_id">
                                        <option selected>{{trans('Parent_trans.Choose')}}...</option>

                                        @foreach($nationalties as $National)
                                        <option value="{{$National->id}}">{{$National->name}}</option>
                                        @endforeach

                                    </select>

                                </div>
                                <div class="form-group col">
                                    <label for="inputState">{{trans('Parent_trans.Blood_Type_Father_id')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Blood_Type_Father_id">
                                        <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($bloodes as $Type_Blood)
                                        <option value="{{$Type_Blood->id}}">{{$Type_Blood->type}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group col">
                                    <label for="inputZip">{{trans('Parent_trans.Religion_Father_id')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Religion_Father_id">
                                        <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($relegions as $Religion)
                                        <option value="{{$Religion->id}}">{{$Religion->relegion}}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('Parent_trans.Address_Father')}}</label>
                                <textarea class="form-control" value="{{$parent_edit->Address_Father}}"  name="Address_Father" id="exampleFormControlTextarea1" rows="4"></textarea>

                            </div>




                        </div>
                    </div>
                </div>
                <!--end father----------------------------------------------------------------------------------------->


                <!--start maother------------------------------------------------------------------------------------->
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.Name_Mother')}}</label>
                                    <input type="text" value="{{$parent_edit->getTranslation('Name_Mother','ar')}}" name="Name_Mother" class="form-control">

                                </div>
                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.Name_Mother_en')}}</label>
                                    <input type="text" name="Name_Mother_en" value="{{$parent_edit->getTranslation('Name_Mother','en')}}" class="form-control">

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="title">{{trans('Parent_trans.Job_Mother')}}</label>
                                    <input type="text" name="Job_Mother" value="{{$parent_edit->getTranslation('Job_Mother','ar')}}" class="form-control">

                                </div>
                                <div class="col-md-3">
                                    <label for="title">{{trans('Parent_trans.Job_Mother_en')}}</label>
                                    <input type="text" name="Job_Mother_en" value="{{$parent_edit->getTranslation('Job_Mother','en')}}" class="form-control">

                                </div>

                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.National_ID_Mother')}}</label>
                                    <input type="text" name="National_ID_Mother" value="{{$parent_edit->National_ID_Mother}}" class="form-control">

                                </div>
                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.Passport_ID_Mother')}}</label>
                                    <input type="text" name="Passport_ID_Mother" value="{{$parent_edit->Passport_ID_Mother}}" class="form-control">

                                </div>

                                <div class="col">
                                    <label for="title">{{trans('Parent_trans.Phone_Mother')}}</label>
                                    <input type="text" name="Phone_Mother"  value="{{$parent_edit->Phone_Mother}}" class="form-control">

                                </div>

                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">{{trans('Parent_trans.Nationality_Father_id')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Nationality_Mother_id">
                                        <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($nationalties as $National)
                                        <option value="{{$National->id}}">{{$National->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group col">
                                    <label for="inputState">{{trans('Parent_trans.Blood_Type_Father_id')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Blood_Type_Mother_id">
                                        <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($bloodes as $Type_Blood)
                                        <option value="{{$Type_Blood->id}}">{{$Type_Blood->type}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group col">
                                    <label for="inputZip">{{trans('Parent_trans.Religion_Father_id')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Religion_Mother_id">
                                        <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($relegions as $Religion)
                                        <option value="{{$Religion->id}}">{{$Religion->relegion}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('Parent_trans.Address_Mother')}}</label>
                                <textarea class="form-control" name="Address_Mother" id="exampleFormControlTextarea1" rows="4"></textarea>

                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('Parent_trans.file')}}</label>

                               <input type="file" name="File_name" id="exampleFormControlTextarea1" accept="image/*" class="form-control" multiple>
                            </div>


                        </div>
                    </div>

                </div>


                <!--end maother----------------------------------------------------------------------------------------->
             <input type="submit" class="btn btn-primary">


            </div>
        </div>
    </div>
</div>





<!-- row closed -->
@endsection
@section('js')

@toastr_js
@toastr_render

@endsection
