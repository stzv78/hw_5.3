@extends('index')

@section ('pageTitle', 'Мои контакты:')

@section('content')
<table class="table table-responsive table-stripe">
<thead>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Адрес</th>
        <th>Телефон</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @if (isset($contacts))
            @foreach($contacts as $contact)
                <tr>
                    <td> {{ $contact->firstName }} </td>
                    <td> {{ $contact->lastName }} </td>
                    <td> {{ $contact->address }} </td>
                    <td> {{ $contact->phoneNumber }} </td>
                    <td> <a class="btn btn-info pull-right" href="{{ route('contact.edit', ['id' => $contact->id]) }}">
                            <i class="glyphicon glyphicon-pencil"></i></a></td>
                    <td>
                        <form method="POST" action="{{ route('contact.destroy',['id'=>$contact->id]) }}">
                            <input type="hidden" name="_method" value="delete"/>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" class="btn btn-danger pull-left" value="">
                            <i class="glyphicon glyphicon-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<hr/>
<div class="text-right"><b>Всего контактов:</b> <i class="badge" > {{ count($contacts) }}</i></div>
<a class="btn btn-success" href="{{ url('/contact/create') }}">Добавить контакт</a>
@stop
