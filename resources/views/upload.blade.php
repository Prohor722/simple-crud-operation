<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    @foreach($dataset as $data)
        <div class="row" style="margin-top:80px">>
            <div class="col-md-3"></div>
            <div class="col-md-2">
                <div>
                    <img src="data:image/jpeg;base64,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"
                         class="rounded-circle" alt="">
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 30px; margin-left: 30px; padding-right:10px">
                <h4>ID: {{$data->id}}</h4>
                <h4>Name: {{$data->name}}</h4>
                <h4>Phone: {{$data->phone}}</h4>
                <h4>Email: {{$data->email}}</h4>
                <h4>Gender: {{$data->gender}}</h4>
                <h4>Status: {{$data->status}}</h4>
            </div>
            <div class="col-md-1">
                <a href="{{url("/edit/$data->id")}}">
                    <button type="button" class="btn btn-outline-primary mb-2">Edit</button>
                </a>
                <a href="{{url("/delete/$data->id")}}">
                    <button type="button" class="btn btn-outline-danger mb-2">Delete</button>
                </a>

            </div>
        </div>
    @endforeach

    <a href="{{url('/')}}">
        <button type="button" class="btn btn-outline-warning mb-2">Add Data</button>
    </a>
</body>
</html>
