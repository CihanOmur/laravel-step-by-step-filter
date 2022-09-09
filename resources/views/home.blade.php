<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="{{ route('index') }}" method="GET" class="d-flex justify-content-around mt-3 mb-3">
        <div class="col-1">
            <select class="form-select" name="brand" aria-label="Default select example" >
                <option value="">Brand</option>
                @foreach ($brand as $item)
                    <option value="{{ $item }}" {{in_array($item,$params) && ($params['brand'] == $item) ? 'selected': '' }} >{{ $item }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-1">
            <select class="form-select" name="serial" aria-label="Default select example">
                <option value="">Serial</option>
                @foreach ($serial as $item)
                    <option value="{{ $item }}" {{ in_array($item,$params) && ($params['serial'] == $item) ? 'selected': '' }}>{{ $item }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-1">
            <select class="form-select" name="modal" aria-label="Default select example">
                <option value="">Modal</option>
                @foreach ($modal as $item)
                    <option value="{{ $item }}" {{ in_array($item,$params) && ($params['modal'] == $item) ? 'selected': '' }}>{{ $item }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-1">
            <select class="form-select" name="engine" aria-label="Default select example">
                <option value="">Engine</option>
                @foreach ($engine as $item)
                    <option value="{{ $item }}" {{in_array($item,$params) &&  ($params['engine'] == $item) ? 'selected': '' }}>{{ $item }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-1">
            <select class="form-select" name="year" aria-label="Default select example">
                <option value="">Year</option>
                @foreach ($year as $item)
                    <option value="{{ $item }}" {{in_array($item,$params) &&  ($params['year'] == $item) ? 'selected': '' }}>{{ $item}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-1">
            <select class="form-select" name="packet" aria-label="Default select example">
                <option value="">Packet</option>
                @foreach ($packet as $item)
                    <option value="{{ $item }}" {{ in_array($item,$params) &&  ($params['packet'] == $item) ? 'selected': '' }}>{{ $item }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-1">
            <select class="form-select" name="category"  aria-label="Default select example">
                <option value="">Category</option>
                @foreach ($category as $item)
                    <option value="{{ $item }}" {{in_array($item,$params) && ($params['category'] == $item) ? 'selected': '' }}>{{ $item }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-1">
            <select class="form-select" name="product_name" aria-label="Default select example">
                <option value="">Product Name</option>
                @foreach ($product_name as $item)
                    <option value="{{ $item }}" {{in_array($item,$params) && ($params['product_name'] == $item) ? 'selected': '' }}>{{ $item }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-1">
            <input class="form-control" name="search" type="text" id="search" placeholder="Search input">
        </div>
        <div>
            <button  id="clickButton" class="btn btn-primary d-none" type="submit"></button>
        </div>
        <div>
            <a href="{{ route('index') }}" class="btn btn-danger">Clear Filter</a>
        </div>

    </form>
    <table class="table table-striped" >
        <thead>
            <th>Brand</th>
            <th>Serial</th>
            <th>Modal</th>
            <th>Engine</th>
            <th>Year</th>
            <th>Packet</th>
            <th>Category</th>
            <th>Product</th>
            <th>Name</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->serial }}</td>
                    <td>{{ $item->modal }}</td>
                    <td>{{ $item->engine }}</td>
                    <td>{{ $item->year }}</td>
                    <td>{{ $item->packet }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->title }}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    <div class="col-6 d-flex">
        {{ $data->links() }}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
     $("select").change(function(){
            var button = document.getElementById('clickButton');
            button.click();
        });
    </script>
    <script>
        $("#search").change(function(){
                var button = document.getElementById('clickButton');
                button.click();
            });
    </script>

</body>
</html>