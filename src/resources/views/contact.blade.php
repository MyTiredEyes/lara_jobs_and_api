@extends('index')

@section('content')
<body>
    <div class="container mt-5">
      <h2 class="text-center mb-4">Отправить письмо</h2>
      <form action="{{route('send')}}" method="POST" class="shadow p-4 rounded bg-light">
        @csrf
        <!-- Имя -->
        <div class="mb-3">
          <label for="name" class="form-label">Ваше имя</label>
          <input type="text" class="form-control
            @error('name')
                is-invalid
            @enderror
          " id="name" name="name" placeholder="Введите ваше имя" required value="{{old('name')}}">
          @error('name')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
  
        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Ваш Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Введите ваш email" required value="{{old('email')}}">
        </div>
  
        <!-- Тема письма -->
        <div class="mb-3">
          <label for="subject" class="form-label">Тема письма</label>
          <input type="text" class="form-control
            @error('subject')
                is-invalid
            @enderror
          " id="subject" name="subject" placeholder="Введите тему письма" required value="{{old('subject')}}">
        </div>
  
        <!-- Сообщение -->
        <div class="mb-3">
          <label for="message" class="form-label">Сообщение</label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Введите ваше сообщение" required >{{old('message')}}</textarea>
        </div>
  
        <!-- Кнопка отправки -->
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
      </form>
    </div>
  
@endsection
