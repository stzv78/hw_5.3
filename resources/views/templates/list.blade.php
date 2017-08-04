@extends('index')
@section('content')

<table class="table table-responsive table-stripe">
    <thead>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Адрес</th>
        <th>Телефон</th>
        <th></th>
    </tr>
    </thead>

    <tbody>
        @if (isset($data) && is_array($data))
            @foreach($data as $value)
                <tr>
                    <td> {{ $value['firstName'] }} </td>
                    <td> {{ $value['lastName'] }} </td>
                    <td> {{ $value['address'] }} </td>
                    <td> {{ $value['phoneNumber'] }} </td>
                    <td><a class="btn btn-info" href="{{ url('/edit/'. $value['id']) }}">
                            <i class="glyphicon glyphicon-pencil"></i></a>
                        <a class="btn btn-danger" href="{{ url('/delete/'. $value['id']) }}">
                            <i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<hr/>
<div class="text-right"><b>Всего контактов:</b> <i class="badge" > {{ count($data) }}</i></div>
<a class="btn btn-success" href="{{ url('/') }}">Добавить контакт</a>
@stop
