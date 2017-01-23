@extends('layouts.main')



@section('head')

<link href="{{asset('css/estilohome.css')}}" rel="stylesheet" type="text/css">

@stop 



@section('content')

 <div class="slider">
                        <ul>

                              <li><img src="{{asset('img/volcan.jpg')}} " alt="" width="640" height="425"}}> </li>
                              <li><img src="{{asset('img/parque.jpg')}}" alt="" width="640" height="425"></li>   
                              <li><img src="{{asset('img/termas.jpg')}}" alt=""  width="640" height="425"></li>
                              <li><img src="{{asset('img/acuario.jpg')}}" alt="" width="640" height="425"></li>

                        </ul>
 </div>
@stop
