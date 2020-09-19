<div class="card-header text-center">Categories</div>
    <div class="card-body">
        <ul class="nav">
            @if ( count($allCategories) > 0)
                @foreach($allCategories as $category)
                    <li><a href="{{route('category',$category->id)}}"> {{$category->name}} </a> </li>
                @endforeach
            @endif
        </ul>            
    </div>
</div>
