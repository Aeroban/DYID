<h1>This is a header</h1>
{{-- If the request is to go to index, then make class = active --}}
<a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a> 
{{-- If the request is to go to about, then make this class = active/{subpage} --}}
<a href="about" class="{{ request()->is('about/*') ? 'active' : '' }}">About</a>