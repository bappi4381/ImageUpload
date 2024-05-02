<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section class="mt-4">
    <div class="container  ">
     <div class="row pt-4 justify-content-center">
        <div class="card" style="width:600px;">
            <div class="card-header d-flex">
              <h3>Image Upload</h3>
              <a href="{{route('image.manage')}}" class="btn btn-success mx-auto ">Show Image info</a>
              
            </div>
            <div class="card-body">
                <form action="{{route('image.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-2">
                    <div class="form-group">
                     <label for="formrow-password-input">Product Image</label>
                     <input type="file" name="image" class="form-control-file" id="formrow-password-input">
                     </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                </div>
                </from>
            </div>
        </div>
    </div>
    </div>
    </section>
     <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
</body>
</html>