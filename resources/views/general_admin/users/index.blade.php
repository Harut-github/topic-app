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
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <img src="../assets/dist/img/photo2.png" alt="" class="img-responsive" width="150">
                        </td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="fa fa-pencil"></a>

                            {{-- @if (Auth::user()->status == 1) --}}
                            <form action="{{ route('users.destroy', $user->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('вы уверены что хотите удалить???')">
                                    <i class="fa fa-remove"></i>
                                </button>
                            </form>
                            {{-- @endif --}}

                        </td>
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