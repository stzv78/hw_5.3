@extends('index')

@section('content')

    <form method="POST" action="{{ url('/add') }}">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="lastName">Фамилия: *</label>
                <input class="form-control" name="lastName" type="text" id="lastName" value="{{ $data['lastName'] }}">
            </div>

            <div class="form-group">
                <label for="firstName">Имя:</label>
                <input class="form-control" name="firstName" type="text" id="firstName" value="{{ $data['firstName'] }}">
            </div>

            <div class="form-group">
                <label for="address">Адрес:</label>
                <input class="form-control" name="address"  id="address" value="{{ $data['address'] }}">
            </div>

            <div class="form-group">
                <label for="phoneNumber">Телефонный номер: *</label>
                <input class="form-control" name="phoneNumber"  id="phoneNumber" value="{{ $data['phoneNumber'] }}">
            </div>
            <hr/>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Добавить">

            </div>
    </form>
@stop