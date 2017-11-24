@section("header")
	<div class="header">
		<div class="container">
			<h1>KPBU Kota Bandung</h1>
			@if (Auth::check())
				<a href="{{ URL::route("user/logout") }}">
				logout
				</a> |
			@else
				<a href="{{ URL::route("user/login") }}">
				login
				</a>
			@endif
			<a href="#home" class="active">Home</a>
 			<a href="#news">News</a>
  			<a href="#contact">Contact</a>
  			<a href="#about">About</a>
  			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>
	</div>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script> 
@show