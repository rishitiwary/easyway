<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assignment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
   input[type="number"]{
        width: 50px;;
    }
</style>
</head>
<body>

<div class="container">
<div class="row">
          <div class="col-lg-12">
          @if(session('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> <?=@session('success')?>.
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <?=@session('error')?>.
                    </div>
                    @endif
              <div class="col-lg-4">
  <h4>Add the volume of the buckets</h4>
  
  <form class="form-inline" action="{{url('interview/bucket_size')}}" method="post">
      @csrf

    <table class="table">
        <tr>
            <th>Bucket Name</th> <th>Size</th>
        </tr>
        <tr><td>A:</td>
        <td ><input type="number" step="any" value="" name="bucket_size[]">Cubic Inches</td>
    </tr>
    <tr><td>B:</td>
        <td><input type="number" step="any" value="" name="bucket_size[]">Cubic Inches</td>
    </tr>
    <tr><td>C:</td>
        <td><input type="number" step="any" value=""  name="bucket_size[]">Cubic Inches</td>
    </tr>
    <tr><td>D:</td>
        <td><input type="number" step="any" value="" name="bucket_size[]">Cubic Inches</td>
    </tr>
    <tr><td>E:</td>
        <td><input type="number" step="any" value="" name="bucket_size[]">Cubic Inches</td>
    </tr>
    </table>
     
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
              </div>
              <div class="col-lg-4">
  <h4>Add the volume of the balls</h4>
  
  <form class="form-inline" action="{{url('interview/balls_size')}}" method="post">
      @csrf
      <div class="row">
          <div class="col-lg-12">
    <table class="table">
        <tr>
            <th>Ball Name</th> <th>Size</th>
        </tr>
        <tr><td>Pink:</td>
        <td><input type="number" step="any" value="{{$balls->pink}}" name="pink">Cubic Inches</td>
    </tr>
    <tr><td>Red:</td>
        <td><input type="number" step="any" value="{{$balls->red}}" name="red">Cubic Inches</td>
    </tr>
    <tr><td>Blue:</td>
        <td><input type="number" step="any" value="{{$balls->blue}}" name="blue">Cubic Inches</td>
    </tr>
    <tr><td>Orange:</td>
        <td><input type="number" step="any" value="{{$balls->orange}}" name="orange">Cubic Inches</td>
    </tr>
    <tr><td>Green:</td>
        <td><input type="number" step="any" value="{{$balls->green}}" name="green">Cubic Inches</td>
    </tr>
    </table>
      </div>
      </div>
 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

  <div class="col-lg-4">
  <h4>Input the number of each colored
ball to be placed inside the buckets:</h4>
  
  <form class="form-inline" action="{{url('interview/ball_in_bucket')}}" method="post">
      @csrf
    
    <table class="table">
        <tr>
            <th>Color</th> <th>Ball</th>
        </tr>
        <tr><td>Pink:</td>
        <td ><input type="number" step="any" name="pink">Balls</td>
    </tr>
    <tr><td>Red:</td>
        <td><input type="number" step="any" name="red">Balls</td>
    </tr>
    <tr><td>Blue:</td>
        <td><input type="number" step="any" name="blue">Balls</td>
    </tr>
    <tr><td>Orange:</td>
        <td><input type="number" step="any" name="orange">Balls</td>
    </tr>
    <tr><td>Green:</td>
        <td><input type="number" step="any" name="green">Balls</td>
    </tr>
    </table>
     
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
              </div>

@foreach($bucket as $run)
<div @if($run->size==$run->balls) style="color:red" @endif>Bucket size : {{$run->size}} & space left : {{$run->size-$run->balls}}</div>
 
@endforeach
</div>
</div>
      </div>
 
</body>
</html>
