<!-- <div>
     No surplus words or unnecessary actions. - Marcus Aurelius -->
     <!-- Star rating goes here! {{ $rating }} -->
<!-- </div> --> 

@if ($rating)
@for($i= 1; $i <= 5; $i++)
    {{ $i<= round($rating) ? '★' : '☆' }}

    @endfor
@else
No rating yet
@endif