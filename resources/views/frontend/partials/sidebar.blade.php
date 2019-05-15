 <!-- Search Widget -->
 <div class="card my-4">
     <h5 class="card-header">Search</h5>
     <div class="card-body">
         <form action="{{route('post.search')}}" method="GET">
             <div class="input-group">
                 <input type="text" class="form-control" placeholder="Search for..." name="query">
                 <span class="input-group-btn">
                     <button class="btn btn-secondary" type="submit">Go!</button>
                 </span>
             </div>
         </form>
     </div>
 </div>

 <!-- Categories Widget -->
 <div class="card my-4">
     <h5 class="card-header">Categories</h5>
     <div class="card-body">
         <div class="row">
             <div class="col-lg-12">
                 <ul class="list-unstyled mb-0">
                     @foreach($categories as $category)
                     <li>
                         <a href="{{route('category.show', $category->id)}}">{{$category->name}}
                             {{$category->posts?'('.$category->posts.')':''}}</a>
                     </li>
                     @endforeach
                 </ul>
             </div>
         </div>
     </div>
 </div>

 <!-- Side Widget -->
 <div class="card my-4">
     <h5 class="card-header">Archives</h5>
     <div class="card-body">
         <ol class="list-unstyled mb-0">
             @if(isset($archives))
             @foreach($archives as $archive)
             <li>
                 <a href="{{url('?month='.$archive['month'].'&year='.$archive['year'])}}">{{$archive['month']}}/{{$archive['year']}}
                     ({{$archive['published']}})</a>
             </li>
             @endforeach
             @endif
         </ol>
     </div>
 </div>
 <!-- Side Widget2 -->
 <div class="card my-4">
     <h5 class="card-header">Tags</h5>
     <div class="card-body">
             @if(isset($tags))
             @foreach($tags as $tag)
                 <a href="/posts/tags/{{$tag}}" class="m-1"><span class="badge badge-info px-2">{{$tag}}</span></a>
             @endforeach
             @endif
         </ol>
     </div>
 </div>