@extends('admin.templates.base')

@section('mainContent')
    <main>

        <h2>Index Comics</h2>

        <section>
            <div>
                <h2>Comics</h2>
                @foreach ($comics as $comic)
                <a href="#">
                    <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
                    <h3>{{$comic->series}}</h3>
                </a>
              @endforeach
            </div>
        </section>

    </main>
@endsection