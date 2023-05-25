@extends('layout.app')


@section('content')

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Train Laravel DB</h1>
          <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
          <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
      </div>

      <div class="container">
        <div class="row">
            <h1 class="text-center py-5 ">Train Details</h1>
        </div>
      </div>

      <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
               
                @forelse ($trains as $train)
                    <div class="col">
                       <div class="card text-start">
                         <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                         <div class="card-body">
                           <h4 class="card-title">Title</h4>
                           <p class="card-text">Body</p>
                         </div>
                       </div>
                    </div>
                @empty
                    <div class="col">
                        <p>There are no Trains Right Now!!</p>
                    </div>
                @endforelse

            </div>
        </div>
      </section>



@endsection