@extends('layout.app')
@section('content')
<main class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <h1 class="text-uppercase mt-5">List of your apps ({{count($sites)}})</h1>
              @if (count($sites)>0)
                  <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                @foreach ($sites as $itemsitem)
                      <li class="list-group-item"><a href="http://{{$itemsitem->myurl}}">{{$itemsitem->name}}</a></li>
                @endforeach
                  </ul>
          @else
            <p>There is actually no site app. Please add</p>
          @endif


        </div>
          <!-- <span class="line"></span> -->
        </div>

        <div class="col-md-4">
          <h1 class="text-center mt-5 text-uppercase">Configs and other</h1>
          <ul class="list-group">
            <li class="list-group-item"><a class="" href="http://localhost/phpmyadmin/">Phpmyadmin</a></li>
            <li class="list-group-item"><a class="" href="http://localhost/dashboard/"> Go to Apache Friends</a></li>
            <li class="list-group-item" ><a class="" href="http://localhost/dashboard/howto.html"> Go to Help Desk</a></li>
          </ul>
          <hr>
            <a href="#" class="link"> Edit the http-vhost file</a>
            <br>
            <a href="#" class="link"> Create a new app</a>



        </div>

      </div>
    </div>
  </main>
@endsection
