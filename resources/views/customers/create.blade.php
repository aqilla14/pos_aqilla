<h3>Add Customer</h3>
<form action="{{ route('customers.store') }}" method="POST">
   {{ csrf_field() }}
   <label>Nama:</label>
   <input type="text" name="name" value="{{ old('name')}}">
   <br>
   @if ($errors->has('name'))
   <span>{{$errors->first('name')}}</span>
   @endif
   <br>
   <label>Phone:</label>
   <input type="text" name="phone" value="{{ old('phone')}}">
   <br>
   @if ($errors->has('phone'))
   <span>{{$errors->first('phone')}}</span>
   @endif
   <br>
   <label>Address:</label>
   <textarea name="address">{{ old('address')}}</textarea>
   <br>
   @if ($errors->has('address'))
   <span>{{$errors->first('address')}}</span>
   @endif
   <br>
   <button type="submit">Save</button>
</form>