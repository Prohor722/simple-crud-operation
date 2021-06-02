<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Submission</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>

<h2 style="text-align:center; padding-top:5%; padding-bottom: 30px ">Form</h2>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <form method="post" action="{{url("/update/$data->id")}}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{$data->name}}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="{{$data->email}}">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="radio" value="m">
                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="radio" value="f">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="status">
                        <label class="form-check-label" for="checkbox">
                            Active
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Profile photo</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

</body>
</html>
