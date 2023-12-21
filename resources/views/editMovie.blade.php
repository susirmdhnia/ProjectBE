<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Movies</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="p-5">
          <h1 class="text-center">Edit Movie</h1>
          <form action="{{ route('update', $movie->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label for="" class="form-label">Title</label>
              <input value="{{ $movie->title }}" type="text" class="form-control" id="" name="title">
            </div>

            
            @error('title')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
              <label for="" class="form-label">Release Date</label>
              <input value="{{ $movie->releaseDate }}" type="date" class="form-control" id="" name="releaseDate">
            </div>

            
            @error('releaseDate')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Running Time</label>
                <input valu="{{ $movie->runningTime }}" type="text" class="form-control" id="" name="runningTime">
            </div>

            
            @error('runningTime')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Director</label>
                <input value="{{ $movie->director }}" type="text" class="form-control" id="" name="director">
            </div>

            
            @error('director')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Producer</label>
                <input valu="{{ $movie->producer }}" type="text" class="form-control" id="" name="producer">
            </div>

            
            @error('producer')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Actor</label>
                <input value="{{ $movie->actor }}" type="text" class="form-control" id="" name="actor">
            </div>

            @error('actor')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input value="{{ $movie->image }}" type="file" class="form-control" id="" name="image">
            </div>

            @error('image')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Genre</label>
                <select class="form-select" aria-label="Default select example" name="genre">
                   @foreach($genres as $g)
                          <option value="{{$g->id}}">{{$g->genre}}</option>
                   @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>