 @foreach($ciudades as $ciudad)
 <option data-id="{{$ciudad->id}}" value="{{$ciudad->nombre}}">{{$ciudad->nombre}}</option>
 @endforeach
