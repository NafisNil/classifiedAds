@extends('frontend.layout.master')
@section('title')
    Category
@endsection

@section('content')
<div class="box" style="margin-bottom: -12px;background-color: white;" itemscope itemtype="https://schema.org/Service">
    @foreach ($category as $item)
    <div class="col-sm-3">
        <div class="col-sm-12">
            <meta itemprop="areaServed" content="Auburn" />
            <div class="mainhedlink" itemprop="serviceType">
                <h3 itemprop="name">{{$item->name}}</h3>
            </div>
            @php
                $subcategory = App\Models\Subcategory::where('category',$item->id)->get();
                session()->put('city', $city);

            @endphp
            <ul class="categoryul" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
                @foreach ($subcategory as $item)
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                    <a title="bedpage24 {{$item->name}}" href="{{route('post.list', $item->id)}}" class="listlinkclass">
                        <span itemprop="name">{{$item->name}}</span>
                    </a>
                </li> 
                @endforeach
               

            </ul>
        </div>

    </div>
    @endforeach


    <div class="clearfix"></div>
 
    
</div>
@endsection