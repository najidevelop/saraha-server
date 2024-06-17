<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#4285f4" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <meta name="description" content="">
  
   
      <meta name="keywords" content=" " />
 
  <meta name="author" content=""> 
      <meta property="og:title" content="">
      <meta property="og:description" content="">
  <meta property="og:url" content="">
  
  
      @isset($Settings)
          <link rel="icon" type="image/x-icon" href="{{ url('assets/site/uploading/' . $Settings->favicon) }}">
      @endisset
 
  
  <title>
          @yield('title')
  </title>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  @php
      use Carbon\Carbon;
      $time = Carbon::now();

  @endphp
  <link rel="stylesheet" href="{{ url('assets/site/assets') }}/css/style.css?v={{$time}}" />
  <!--<link rel="stylesheet" href="{{ url('assets/site/assets') }}/css/styleQues.css?v={{$time}}" />-->
  <link rel="stylesheet" href="{{ url('assets/site/assets') }}/css/Style_ques.css?v={{$time}}" />
  <link rel="stylesheet" href="{{ url('assets/site/assets') }}/css/style_ans.css?v={{$time}}" />
  <link rel="stylesheet" href="{{ url('assets/site/assets') }}/css/styleNews.css?v={{$time}}" />
  <!--<script src="https://kit.fontawesome.com/c7392f690f.js" crossorigin="anonymous"></script>-->
 
</head>