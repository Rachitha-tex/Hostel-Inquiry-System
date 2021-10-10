<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="1000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
            @foreach ($data as $data)
        
            <div class="carousel-item {{$data['id']==10 ?'active':''}}">
                <img src="{{asset("carouselpic/".$data->image)}}" class="w-100 h-100" >
               </div> 
            
            @endforeach
          </div>    
    
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
      </div>