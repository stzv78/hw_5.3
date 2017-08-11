@extends('index')

@section ('pageTitle', 'Новый контакт:')

@section('content')
<form method="post" action="{{ route('contact.store') }} ">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="lastName">Фамилия: *</label>
        <input class="form-control" placeholder="Фамилия" name="lastName" type="text" id="lastName" required>
    </div>

    <div class="form-group">
        <label for="firstName">Имя:</label>
        <input class="form-control" placeholder="Имя" name="firstName" type="text" id="firstName">
    </div>

    <div class="form-group">
        <label for="address">Адрес:</label>
        <input class="form-control" placeholder="Адрес" name="address"  id="address">
    </div>

    <div class="form-group">
        <label for="phoneNumber">Телефонный номер: *</label>
        <input class="form-control" placeholder="Номер телефона" name="phoneNumber"  id="number" required>
    </div>
    <hr/>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Добавить">
    </div>
</form>
@stop