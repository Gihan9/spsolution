<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">
  </head>
  <body>
    
  <div class="heading"><h2><h2></div>
               
      <div class="container">
         <div class="row">
          
            <div class="col-md-4 col-md-offset-4"  >
            <h2> Delivery Information<h2>
                <form action="{{route('delivery-data')}}" method="post">
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                @csrf                 
                <div class="form-group">
                        <label for="name">Pick Address</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="pickup_address" value="{{old('pickup_address')}}">
                          <span class="text-danger">@error('pickup_address') {{$message}} @enderror</span> 
                    </div> 


                    <div class="form-group">
                        <label for="name">Pick name</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="Pickup_name" value="{{old('Pickup_name')}}">
                          <span class="text-danger">@error('Pickup_name') {{$message}} @enderror</span> 
                    </div> 
                    <div class="form-group">
                        <label for="name">Pick Contact NO</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="Pickup_contact" value="{{old('Pickup_contact')}}">
                          <span class="text-danger">@error('Pickup_contact') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Pick Email</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="Pickup_email" value="{{old('Pickup_email')}}">
                          <span class="text-danger">@error('Pickup_email') {{$message}} @enderror</span> 
                    </div> 
                   
                    <div class="form-group">
                        <label for="name">Delivery Address</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="delivery_address" value="{{old('delivery_address')}}">
                          <span class="text-danger">@error('delivery_address') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Delivery Name</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="delivery_name" value="{{old('delivery_name')}}">
                          <span class="text-danger">@error('delivery_name') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Delivery Contact NO</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="delivery_contact" value="{{old('delivery_contact')}}">
                          <span class="text-danger">@error('delivery_contact') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Delivery Email</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="delivery_email" value="{{old('delivery_email')}}">
                          <span class="text-danger">@error('delivery_email') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Type Of Good</label>
                        <select name="Type_of_good">
                        <option value="document">Document</option>
                        <option value="parcel">Parcel</option></select>
                        <span class="text-danger">@error('Type_of_good') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Delivery Provider</label>
                        <select name="delivery_provider">
                        <option value="dhl">DHL</option>
                        <option value="startrack">STARTRACK</option>
                        <option value="zoom2u">ZooM2U</option>
                        <option value="tge">TGE</option>
                    </select>
                      
                          <span class="text-danger">@error('delivery_provider') {{$message}} @enderror</span> 
                    </div> 


                    <div class="form-group">
                        <label for="name">Priority</label>
                        <select name="priority">
                        <option value="standard">Standard</option>
                        <option value="express">Express</option>
                        <option value="immediate">Immediate</option>
                       
                    </select>
                      
                        
                          <span class="text-danger">@error('priority') {{$message}} @enderror</span> 
                    </div> 
                   

                    
                    <div class="form-group">
                        <label for="name">Pick Up Date</label>
                        <input type="date" class="form-control" placeholder="Enter User name"
                          name="pickup_date" value="{{old('pickup_date')}}">
                          <span class="text-danger">@error('pickup_date') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Pick Up Time</label>
                        <input type="time" class="form-control" placeholder="Enter User name"
                          name="Pickup_time" value="{{old('Pickup_time')}}">
                          <span class="text-danger">@error('Pickup_time') {{$message}} @enderror</span> 
                    </div> 


                    <hr>
                    <h3>Package Information</h3>
                    <div class="form-group">
                        <label for="name">Package Description</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="package_description" value="{{old('package_description')}}">
                          <span class="text-danger">@error('package_description') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Length</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="length" value="{{old('length')}}">
                          <span class="text-danger">@error('length') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Height</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="height" value="{{old('height')}}">
                          <span class="text-danger">@error('height') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Width</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="width" value="{{old('width')}}">
                          <span class="text-danger">@error('width') {{$message}} @enderror</span> 
                    </div> 

                    <div class="form-group">
                        <label for="name">Weight</label>
                        <input type="text" class="form-control" placeholder="Enter User name"
                          name="weight" value="{{old('weight')}}">
                          <span class="text-danger">@error('weight') {{$message}} @enderror</span> 
                    </div> 
                   
                   
                   
                   
                   
                    <div class="formbtn">
                        <br>
                        <button class="btn btn-block btn-primary" type="submit">submit
                        </button>
                    </div>   
                   
                        
                </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>