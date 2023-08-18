@extends('general_admin.layout')
@section('title', 'user page')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Листинг сущности</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>E-mail</th>
                        <th>Телефон</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                    </tr>
                    @endforeach
                    </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>

@endsection