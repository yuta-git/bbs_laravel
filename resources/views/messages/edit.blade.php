@extends('layouts.app')
@section('title', '投稿編集')
@section('header', 'id: ' .  $message->id . 'の投稿編集')
@section('content')
            <div class="row mt-2">
                
                {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put', 'enctype' => 'multipart/form-data', 'class' => 'col-sm-12']) !!}
                
                    <div class="form-group row">
                        {!! Form::label('name', '名前', ['class' => 'col-2 col-form-label']) !!}
                        <div class="col-10">
                            {!! Form::text('name', $message->name, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        {!! Form::label('title', 'タイトル', ['class' => 'col-2 col-form-label']) !!}
                        <div class="col-10">
                            {!! Form::text('title', $message->title, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        {!! Form::label('body', '内容', ['class' => 'col-2 col-form-label']) !!}
                        <div class="col-10">
                            {!! Form::text('body', $message->body, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-2 col-form-label">現在の画像</label>
                        <div class="col-10">
                            <img src="{{ asset('uploads/' . $message->image) }}" alt="表示する画像がありません。">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        {!! Form::label('image', '画像アップロード', ['class' => 'col-2 col-form-label']) !!}
                        <div class="col-3">
                            {!! Form::file('image', ['accept' => 'image/*', 'onchange' => "previewImage(this)"]) !!}
                        </div>
                        <div class="col-7">
                            <img id="preview" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="offset-2 col-10">
                            {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

                {!! Form::close() !!}
                
            </div>                
            <div class="row mt-5">
                {!! link_to_route('messages.index', '投稿一覧', [], ['class' => 'btn btn-primary']) !!}
            </div>
@endsection