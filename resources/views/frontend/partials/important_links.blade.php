<div class="imp-links p-4 my-5">
    <h2 class="f22 gothammedium mt-2 mb-4">IMPORTANT LINKS</h2>
    @php
        $important = App\Models\Menu::where('type', 'important_link')->get();
    @endphp
    @if($important !='' )
    @foreach($important as $key => $value)
        <a href="{{ $value->url }}" class="f22 gothammedium text-decoration-none o2o2o my-2 d-block"><i class="fa-solid fa-angle-right colorred"></i>&nbsp;&nbsp;&nbsp;{{ $value->name }}</a>
    @endforeach
    @endif
</div>