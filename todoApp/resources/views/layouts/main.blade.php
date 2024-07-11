<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://pluspng.com/img-png/to-do-list-png-todo-list-icon-1600.png" type="image/x-icon"/> 
    <style>
        .gradient-header {
            height: 80px;
            background-image: linear-gradient(#0052b0, #b340b3);
        }
        .gradient-custom {
    /* fallback for old browsers */
    background: #fccb90;
  
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(252,203,144,0.5), rgba(213,126,235,0.5));
  
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(252,203,144,0.5), rgba(213,126,235,0.5))
  }

</style>
</head>
<body>

    <div class="bg-dark">
        <div class="container py-3">
        <div class="h1 text-white">To-do List</div>
        </div>
    </div>
    <div class="gradient-custom w-100" style="height: 730px;">
    @yield('main-section')
    </div> 
</body>

</html>

