@extends('index')

@section ('pageTitle', 'Редактировать контакт:')

@section('content')
    <form method="POST" action="{{  route('contact.update', ['id' => $contact->id]) }}">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="lastName">Фамилия: *</label>
                <input class="form-control" name="lastName" type="text" id="lastName" value="{{ $contact->lastName }}">
            </div>

            <div class="form-group">
                <label for="firstName">Имя:</label>
                <input class="form-control" name="firstName" type="text" id="firstName" value="{{ $contact->firstName }}">
            </div>

            <div class="form-group">
                <label for="address">Адрес:</label>
                <input class="form-control" name="address"  id="address" value="{{ $contact->address }}">
            </div>

            <div class="form-group">
                <label for="phoneNumber">Телефонный номер: *</label>
                <input class="form-control" name="phoneNumber"  id="phoneNumber" value="{{ $contact->phoneNumber }}">
            </div>
            <hr/>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Добавить">
                {{ method_field('PUT') }}
            </div>
    </form>
@stop