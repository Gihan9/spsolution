<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  
      <div class="container">
      <div class="row">
            <div class=alert align="center">
              @if(session()->has('message'))
              
              <div class="alert alert-success alert-dismissible">
              <a href="MyEvents" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{session()->get('message')}} <strong>"{{$data->name}}"</strong>
            </div>
              @endif
            </div>
            </div>
               <h2>Delivery Data<h2>
             
                <hr>
                <table class="table">
                    <thead>
                        <th>Pickup Address</th>
                        <th>Pickup Name</th>
                        <th>Pickup Contact Number</th>
                        <th>Pickup Email</th>
                        <th>Delivery Address</th>
                        <th>Delivery Name</th>
                        <th>Delivery Contact</th>
                        <th>Delivery Email</th>
                        <th>Type Of Good</th>
                        <th>Delivery Provider</th>
                        <th>Priority</th>
                        <th>pickup Date</th>
                        <th>Pickup Time</th>
                        <th>Package Description</th>
                        <th>Length</th>
                        <th>height</th>
                        <th>width</th>
                        <th>Status</th>



                        

                      
                        

                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$data->pickup_address}}</td>
                            <td>{{$data->Pickup_name}}</td>
                            <td>{{$data->Pickup_contact}}</td>
                            <td>{{$data->Pickup_email}}</td>
                            <td>{{$data->delivery_address}}</td>
                            <td>{{$data->delivery_contact}}</td>
                            <td>{{$data->delivery_email}}</td>
                            <td>{{$data->Type_of_good}}</td>
                            <td>{{$data->delivery_provider}}</td>
                            <td>{{$data->priority}}</td>
                            <td>{{$data->pickup_date}}</td>
                            <td>{{$data->Pickup_time}}</td>
                            <td>{{$data->package_description}}</td>
                            <td>{{$data->length}}</td>
                            <td>{{$data->height}}</td>
                            <td>{{$data->width}}</td>
                            <td>{{$data->weight}}</td>
                            <td>{{$data->status}}</td>
                            <td><span class="fa fa trash"></span></td>


                            
                        </tr>
                    </tbody>
                    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>