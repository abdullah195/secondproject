<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Document</title>
</head>
<body>


<div style="text-align: center;padding:2%">


<form class="mb-lg-4" method="post" action="">
    @csrf


   <input class="form-control" type="email" name="email" placeholder="Enter Email Address">
   <button type="submit" class="btn">Submit</button>
</form>

    <div class="text-lg-right">
        @if(session('message'))
            {{ session('message') }}
        @endif
    </div>
</div>


</body>
</html>
