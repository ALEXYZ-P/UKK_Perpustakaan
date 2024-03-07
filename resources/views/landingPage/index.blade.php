@extends('landingPage.master')

@section('title', 'Landing Page')
@section('content')

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="#" rel="nofollow">Home</a>
                    {{-- <span></span> Buku --}}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p><strong class="text-brand">Home</strong></p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">50</a></li>
                                            <li><a href="#">100</a></li>
                                            <li><a href="#">150</a></li>
                                            <li><a href="#">200</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Featured</a></li>
                                            <li><a href="#">Price: Low to High</a></li>
                                            <li><a href="#">Price: High to Low</a></li>
                                            <li><a href="#">Release Date</a></li>
                                            <li><a href="#">Avg. Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End nav-tabs-->
                        <div class="tab-content wow fadeIn animated" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                <div class="row product-grid-4">

                                    @foreach ($data as $i)
                                        <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap mb-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ route('landingPage.show', $i->id) }}">
                                                            <img class="default-img"
                                                                src="{{ asset('storage/images/' . $i->sampul) }}"
                                                                alt="">
                                                            <img class="hover-img"
                                                                src="{{ asset('storage/images/' . $i->sampul) }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        {{-- <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a> --}}

                                                    </div>
                                                    {{-- <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">
                                                        @foreach ($kategori as $k)
                                                            {{ $k->id == $data->id_ketegori ? $k->nama : $k->nama }}

                                                        @endforeach
                                                        </span>
                                                    </div> --}}
                                                </div>
                                                <div class="product-content-wrap">
                                                    <div class="product-category">
                                                        <a href="shop-grid-right.html">

                                                            @foreach ($i->kategori()->get() as $item)
                                                                {{$item->nama}}
                                                            @endforeach

                                                            </a>

                                                    </div>
                                                    <h2><a href="shop-product-right.html">{{ $i->judul }}</a></h2>

                                                    <div class="product-price">
                                                        <span>{{ $i->stok }}</span>
                                                    </div>
                                                    <div class="product-action-1 show">
                                                        <input type="hidden" name="id_user" class="id_user"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="id_buku" class="id_buku"
                                                            value="{{ $i->id }}">
                                                        <style>
                                                            .icon {
                                                                color: red;
                                                            }
                                                        </style>


                                                        {{ $liked = false }}

                                                        @foreach ($koleksi as $like)
                                                            @if ($like->id_user == Auth::user()->id)
                                                                @if ($like->id_buku == $i->id)
                                                                    @php
                                                                        $liked = true;
                                                                    @endphp
                                                                    <a aria-label="Add To Like"
                                                                        data-id_user="{{ Auth::user()->id }}"
                                                                        data-id_buku="{{ $i->id }}" id="like"
                                                                        class="action-btn hover-up like icon liked"
                                                                        href="#">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </a>
                                                                @break

                                                                <!-- Menghentikan perulangan setelah menemukan satu tombol "Like" -->
                                                            @endif
                                                        @endif
                                                    @endforeach

                                                    @if (!$liked)
                                                        <a aria-label="Add To Like"
                                                            data-id_user="{{ Auth::user()->id }}"
                                                            data-id_buku="{{ $i->id }}" id="like"
                                                            class="action-btn hover-up like icon" href="#">
                                                            <i class="fi-rs-heart"></i>
                                                        </a>
                                                    @endif





                                                    {{--
@for ($k = 0; $k < count($liked); $k++)
@if ($i->id == $liked[$k])
    <a aria-label="Add To Like"
        data-id_user="{{ Auth::user()->id }}"
        data-id_buku="{{ $i->id }}"
        id="like"
        class="action-btn hover-up like icon liked"
        href="#">
        <i class="fa-solid fa-heart"></i>
    </a>
    @break <!-- Menghentikan perulangan setelah menemukan satu tombol "Like" -->
@elseif ($k == count($liked))
    <!-- Jika sudah mencapai akhir perulangan dan tidak ada yang cocok, maka tampilkan tombol "Like" yang belum disukai -->
    <a aria-label="Add To Like"
        data-id_user="{{ Auth::user()->id }}"
        data-id_buku="{{ $i->id }}"
        id="like"
        class="action-btn hover-up like icon"
        href="#">
        <i class="fi-rs-heart"></i>
    </a>

@endif
@endfor --}}






                                                    {{-- <a aria-label="Add To Like" data-id_user = "{{ Auth::user()->id }}"
                                                            data-id_buku="{{ $i->id }}"
                                                            @if (Auth::check() == true)  @endif id="like"
                                                            @foreach ($liked as $j)
                                                        {{ 'id buku sumber  :' . $i->id }}

                                                        {{ 'id buku  :' . $j->id_buku }}
                                                        {{ 'user login :' . $user->id }}
                                                            @if ($i->id == $j->id_buku)
                                                                class="action-btn hover-up like icon liked" href="#">
                                                                    <i class="fa-solid fa-heart"></i>
                                                            @elseif($i->id != $j->id_buku)
                                                                class="action-btn hover-up like icon "href="#">
                                                                    <i class="fi-rs-heart"></i>
                                                            @endif @endforeach

                                                            </a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <!--En tab two (Popular)-->

                            <!--En tab three (New added)-->
                        </div>


                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                {{-- <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul> --}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>


@endsection
