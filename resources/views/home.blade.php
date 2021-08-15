@extends('layout.app')
@section('title','Home')

@section('content')

<div class="container-fluid parallax mb-5">
   <div class="row d-flex justify-content-center">
      <div class="col-md-4 topDiv text-center">
           <h1 class="text-white">Software Engineer</h1>
           <h3 class="text-white">Mobile & Web</h3>
           <button class="btn btn-primary">Learn More</button>
      </div>
   </div>
</div>

<div class="container text-center mt-5 mb-5">
    <h2>My services</h2><br><br>
    <div class="row">
        <div class="col-md-4 p-2">
            <div class="card" style="width:100%">
                 <img class="card-img-top" src="{{asset('image/laravel.jpg') }}" alt="Card image cap">
                 <div class="card-body">
                   <h5 class="card-title">service name</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width:100%">
                 <img class="card-img-top" src="{{asset('image/laravel.jpg') }}" alt="Card image cap">
                 <div class="card-body">
                   <h5 class="card-title">service name</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width:100%">
                 <img class="card-img-top" src="{{asset('image/laravel.jpg') }}" alt="Card image cap">
                 <div class="card-body">
                   <h5 class="card-title">service name</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   
                </div>
            </div>
        </div>

    </div>
</div>  


<div class="container text-center mt-5 mb-5">
    <h2>Recent Projects</h2><br><br>
    <div class="row">
        <div class="col-md-4 p-2">
            <div class="card" style="width:100%">
                 <img class="card-img-top" src="{{asset('image/laravel.jpg') }}" alt="Card image cap">
                 <div class="card-body">
                   <h5 class="card-title">Project Name</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width:100%">
                 <img class="card-img-top" src="{{asset('image/laravel.jpg') }}" alt="Card image cap">
                 <div class="card-body">
                   <h5 class="card-title">Project Name</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width:100%">
                 <img class="card-img-top" src="{{asset('image/laravel.jpg') }}" alt="Card image cap">
                 <div class="card-body">
                   <h5 class="card-title">Project Name</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container text-center mb-5 mt-5">
<h2>Contact With Me</h2><br><br>
    <div class="row">
        <div class="col-md-6">
        <form>
               <div class="form-group">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Mobile</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Message</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-block btn-primary mt-3">send now </button>
            </form>

        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58425.51825411899!2d90.41524806314919!3d23.761821509680097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b80e827f19df%3A0x9c7482b95bc6d57c!2sKhilgaon%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1616944606407!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
</div>

@endsection