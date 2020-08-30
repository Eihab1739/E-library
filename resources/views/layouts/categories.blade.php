    <div class="card-header text-center">Categories</div>

         <div class="card-body">

                <ul class"nav ">
                @if ( count($allcategories) > 0)
                @foreach($allcategories as $category)
                <li><a href="{{route('category',$category->id)}}"> {{$category->name}} </a> </li>
                @endforeach
                </ul>
                @endif
        </div>
    </div>
