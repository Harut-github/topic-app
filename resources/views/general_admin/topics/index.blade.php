@extends('general_admin.layout')
@section('title', 'Topic page')
@section('content')

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Листинг сущности</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <a href="/admin/topics/create" class="btn btn-success">Добавить</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>Img</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topics as $topic)
                    <tr>
                        <td>{{$topic->id}}</td>
                        <td>{{$topic->title}}

                        <td>
                            <img src="/{{$topic->image}}" alt="" width="100">
                        </td>
                        <td>
                            <a href="{{ route('topics.edit', $topic->id)}}" class="fa fa-pencil"></a>

                            <form action="{{ route('topics.destroy', $topic->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('вы уверены что хотите удалить???')">
                                    <i class="fa fa-remove"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tfoot>
            </table>
        </div>
    </div>
</section>

@endsection