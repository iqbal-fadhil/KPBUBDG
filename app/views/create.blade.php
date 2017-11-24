@extends ('layout')

@section('content')
    
    <br>
    <div class="row">
        <h3>Tambahkan Proyek Baru</h3>
    </div>
    <div class="row">
        <div class="col-sm-12">
            {{Form::model($project, array('class'=>'form-horizontal','id'=>'form_user','files'=>true))}}
            
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Picture </label>
                    <div class="col-sm-9">
                        {{Form::file('picture',array(
                                'id'=> 'picture',
                                'class'=> 'form-control'
                        ))}}
                        <h5>Use 1920 x 960 pixel for best quality</h5>
                    </div>
                <br><label id="error_picture" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('picture')}}</label>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Judul Proyek </label>
                    <div class="col-sm-9">
                        {{Form::text('Judul Proyek',null,array(
                                'id'=> 'Judul Proyek',
                                'class'=> 'form-control'
                        ))}}
                    </div>
            </div>


            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nilai </label>
                    <div class="col-sm-9">
                        {{Form::text('Nilai',null,array(
                                'id'=> 'Nilai',
                                'class'=> 'form-control'
                        ))}}
                    </div>
            </div>


            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lokasi</label>
                    <div class="col-sm-9">
                        {{Form::text('Lokasi',null,array(
                                'id'=> 'Lokasi',
                                'class'=> 'form-control'
                        ))}}
                    </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deskripsi </label>
                    <div class="col-sm-9">
                        {{Form::textarea('description',null,array(
                                'id'=> 'editor1',
                                'class'=> 'form-control'
                        ))}}
                    </div>
                <br><label id="error_description" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('description')}}</label>
            </div>
            
            <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                    </br>
                    {{Form::submit('Simpan', array('class'=>'btn btn-primary'))}}
    
                    <a class="btn btn-warning" href="{{route('home')}}">
                        Kembali
                    </a>
                </div>

            </div>
             {{Form::close()}}
        </div>
    </div>
@stop
