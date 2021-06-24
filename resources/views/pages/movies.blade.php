@extends('layouts.layout')
<html>
<style>
    #background {
        background-color: black;
    }

    img {
        width: 200px;
        padding: 10px;
        margin: 0 auto;
        cursor: pointer;
        transition: transform .2s;

    }

    img:hover {
        transform: scale(1.2);
    }

</style>

<body>
    <div id=background>
        <div class="row">
            @foreach ($filmes as $item)


                <div class="col">
                    <a href="{{ url('salas',['id'=>$item['id']]) }}">
                        <img src="{{ $item['thumbnail'] }} " alt="movies">
                    </a>
                </div>



            @endforeach
        </div>

    </div>
</body>

</html>
