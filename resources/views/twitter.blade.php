<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyTweetz</title>
    <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">MyTweetz</a>
        </div>
    </div>
</nav>

<div class="container">
    @if($data)
        @foreach($data as $key => $val)
            <div class="well">
                <h3>{{$val['text']}}
                <i class="glyphicon glyphicon-heart"></i> {{$val['favorite_count']}}
                    <i class="glyphicon glyphicon-repeat"></i> {{$val['retweet_count']}}
                </h3>
                @if($val['extended_entities']['media'])
                    @foreach($val['extended_entities']['media'] as $i)
                        <img src="{{$i['media_url_https']}}"  class="img-thumbnail img-responsive"/>
                        @endforeach
                    @endif
            </div>
            @endforeach
        @else
        <div class="alert alert-danger"> No Tweets Found</div>
    @endif

</div>
</body>
</html>