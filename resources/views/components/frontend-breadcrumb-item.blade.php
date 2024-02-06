@props(["route"=>"#", "icon"=>"", "title"=>"", "type"=>""])


<li class="breadcrumb-item">
    <a class="text-decoration-none mx-2" href='{{$route}}'>{{ $slot }}
</li>

