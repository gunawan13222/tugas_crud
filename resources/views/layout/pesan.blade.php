@if ($message = Session::get('success'))
<strong>{{ $message }}</strong>
@endif
@if ($message = Session::get('error'))
<strong>{{ $message }}</strong>
@endif
@if ($message = Session::get('warning'))
<strong>{{ $message }}</strong>
@endif
@if ($message = Session::get('info'))
<strong>{{ $message }}</strong>
@endif
@if ($errors->any())
<strong>silahkan perikasa formulir kembali</strong>

    
@endif