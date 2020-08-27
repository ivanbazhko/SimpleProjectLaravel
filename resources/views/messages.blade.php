@if($errors->any())
    <div class="alert" style="background-color:rgba(255, 0, 0, 0.6);">
        <ul>
            @foreach($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
   <div class="alert" style="background-color:rgba(21, 255, 0, 0.6);">
      {{ session('success') }}
   </div>
@endif

@if(session('wrong'))
   <div class="alert" style="background-color:rgba(255, 0, 0, 0.6);">
      {{ session('wrong') }}
   </div>
@endif