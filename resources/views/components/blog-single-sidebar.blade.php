<div class="col-lg-4 sidebar ftco-animate">
{{--    <div class="sidebar-box">--}}
{{--        <form action="#" class="search-form">--}}
{{--            <div class="form-group">--}}
{{--                <span class="icon icon-search"></span>--}}
{{--                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    <div class="sidebar-box ftco-animate">--}}
{{--        <h3>Category</h3>--}}
{{--        <ul class="categories">--}}
{{--            <li><a href="#">Art <span>(6)</span></a></li>--}}
{{--            <li><a href="#">Sports <span>(8)</span></a></li>--}}
{{--            <li><a href="#">Language <span>(2)</span></a></li>--}}
{{--            <li><a href="#">Food <span>(2)</span></a></li>--}}
{{--            <li><a href="#">Music <span>(2)</span></a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}

    <div class="sidebar-box ftco-animate">
        <h3>Popular Articles</h3>
        @foreach($populars as $popular)
            <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{$popular->getFirstMedia()->getUrl()}});"></a>
                <div class="text">
                    <h3 class="heading"><a href="{{route('blog.show', $popular->id)}}">{{$popular['title_preview_'.app()->getLocale()]}}</a></h3>
                    <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> {{$article->created_at->format('j')}} {{__('translate.'.$article->created_at->format('F'))}} {{$article->created_at->format('Y')}}</a></div>
                        <div><a href="#"><span class="icon-person"></span> {{$article->user['name_'.app()->getLocale()]}}</a></div>
{{--                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

{{--    <div class="sidebar-box ftco-animate">--}}
{{--        <h3>Tag Cloud</h3>--}}
{{--        <ul class="tagcloud m-0 p-0">--}}
{{--            <a href="#" class="tag-cloud-link">School</a>--}}
{{--            <a href="#" class="tag-cloud-link">Kids</a>--}}
{{--            <a href="#" class="tag-cloud-link">Nursery</a>--}}
{{--            <a href="#" class="tag-cloud-link">Daycare</a>--}}
{{--            <a href="#" class="tag-cloud-link">Care</a>--}}
{{--            <a href="#" class="tag-cloud-link">Kindergarten</a>--}}
{{--            <a href="#" class="tag-cloud-link">Teacher</a>--}}
{{--        </ul>--}}
{{--    </div>--}}

    <div class="sidebar-box ftco-animate">
        <h3>Archives</h3>
        <ul class="categories">
            <li><a href="#">{{__('translate.December')}} 2018 <span>(30)</span></a></li>
            <li><a href="#">{{__('translate.November')}} 2018 <span>(20)</span></a></li>
            <li><a href="#">{{__('translate.September')}} 2018 <span>(6)</span></a></li>
            <li><a href="#">{{__('translate.August')}} 2018 <span>(8)</span></a></li>
        </ul>
    </div>


{{--    <div class="sidebar-box ftco-animate">--}}
{{--        <h3>Paragraph</h3>--}}
{{--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>--}}
{{--    </div>--}}
</div><!-- END COL -->
