<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @php
        $name = "aye chan mon";
        $age = 26;
        $arr = ['apple','mango','orange',"grape",'lemon'];        
        $myHtml = "<h1>Hello html</h1>";
    @endphp
    
    <h1>Mya name is {{ $name }} and {{ $age }} years old</h1>

  

    {!! $myHtml !!}

    <script>
        console.log(@json($arr));
    </script>

    @if($age > 26)
        <p>you are older than 26</p>
        @elseif($age == 26)
            <p>you are 26</p>
        @else
            <p>you are younger than 26</p>
    @endif

    <!-- @json($arr); -->

  

    <ul>
        @foreach($arr as $key=>$a)
            <li>{{ $key+1 }} {{ $a }}</li>
        @endforeach
    </ul>     
    

    @for($i=1;$i<=10;$i++)
        {{ $i }} Hello <br>
    @endfor

    @if(isset($agedd))
        age par tl<br>
    @else
        ma pr bue<br>
    @endif

    <img src="{{ asset('css/laravelPhoto.png') }}" alt="">
    <!-- {{ dd($arr) }} -->

   

    
</body>
</html>