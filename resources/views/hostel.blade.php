<section class="boxes container-fluid">
  @foreach ($datanew as $item)
    <div class="box">
    
      <img src="{{asset("hostel/".$item->image)}}" class="img" alt="">
      <div class="box-title">
        <h3>{{$item->name}}</h3>
        <p class="box-para" style="">{{$item->description}}</p> 
      </div>
    </div>
    @endforeach
  </section>


   
 
