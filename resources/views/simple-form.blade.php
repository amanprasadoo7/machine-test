<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Simple Form</title>
</head>

<body>
    <form class="form" action="{{ route('form_store') }}" method="POST">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <div class="form-group">
                <label>Phone Name:</label>
                <input type="text" class="form-control form-control-solid" required placeholder="Enter Product Name"
                    value="{{ old('name') }}" name="name" />
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Phone Price:</label>
                <input type="tel" class="form-control form-control-solid" required
                    placeholder="Enter Product Price"value="{{ old('price') }}" name="price" />
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Phone Color</label>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control form-control-solid" required
                        placeholder="Enter Product Color" value="{{ old('color') }}" name="color" />
                    @error('color')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Phone Description</label>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control form-control-solid" value="{{ old('desc') }}" required
                        placeholder="Enter Product Description" name="desc" />
                    @error('desc')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </form>

    @if (count($products_latest))
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Phone Name</th>
                    <th scope="col">Phone Price</th>
                    <th scope="col">Phone Color</th>
                    <th scope="col">Phone Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products_latest as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->color}}</td>
                        <td>{{$product->description}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
