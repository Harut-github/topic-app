@extends('general_admin.layout')
@section('title', 'Categories create')
@section('content')
<section class="content">
    <form action="/admin/categories" method="POST">
        {{ csrf_field() }}
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Добавляем категорию</h3>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @else is-valid @enderror" id="exampleInputEmail1" value="{{ old('title') }}" placeholder="title">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="/admin/categories" class="btn btn-default">Назад</a>
                <button class="btn btn-success pull-right">Добавить</button>
            </div>
            <!-- /.box-footer-->
        </div>
    </form>
</section>
@endsection