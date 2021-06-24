@extends('layouts.layout')
<html>
<style>
    .container {
        position: relative;
        width: 50%;
        border: solid green;
    }
</style>

<head>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>

<script>
    $(window).on('load', function() {
        let count = 0;
        let texto = "lugar"

        while (count < 50) {
            $('.row').append('<div style="text-align: center" class="col-md-2 btn btn-primary" id="col' +
                count + '">'+texto+'</div>');
            count++;
        }
        $('.btn').on("click", function() {
            console.log($(this).attr('id'));
            $(this).text("reservado");

        });

        $('.btn').css({"margin":"10px","position":"relative",});


    });







    // var styles = {
    //     "width": '100%',
    //     "padding-bottom": '100%',
    //     "position": "relative"

    // };
    // $(".col-md-2").css(styles);
</script>
