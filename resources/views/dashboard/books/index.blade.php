@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_styles')
    <style>
        .book{
            position: relative;
            width: 24%;
            display: inline-block;
            margin-bottom: 50px;
            padding: 15px 15px 80px;
            border: 1px solid #d4d4d4;
            border-radius: 5px;
        }

        a.book {
            color: var(--black-dark);
        }
        .book img {
            margin-bottom: 10px;
        }
        .book button {
            position: absolute;
            bottom: 20px;
            width: calc(100% - 30px);
        }
        @media (max-width: 1024px){
            .book{
                width: 48%;
            }
        }

        @media (max-width: 600px){
            .book{
                width: 100%;
            }
        }
    </style>
@endpush

@push('_js')
    <script>
        $(document).ready(function(){
            $(".__download").click(function(){
                // e.preventDefault();
                let id = $(this).attr("data-id");
                let img = $(this).attr("data-img");
                let _this = $(this)

                $.ajax({
                    url: '/dashboard/books/download/increment/' + id,
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (r) {
                        console.log(r)
                        if (r) {
                            _this.find('.__downloads').html(r)
                            // let linkTag = $(".none_link");
                            // linkTag.attr("href",`/books/${img}.pdf`);
                            // setTimeout(function(){
                            //  linkTag.click()
                            // }, 1000);
                            // window.location.href = `/books/${img}.pdf`
                        }
                    }
                })
            })
        })
    </script>
@endpush

@section("content")

    <div class="container mt-5">
        <h1>Գրքեր</h1>

        <div class="page_content">
            <div class="d-flex justify-content-between flex-wrap">
                @foreach($books as $book)
                    <a
                        class="book __download"
                        data-id="{{$book->id}}"
                        data-img="{{$book->img}}"
                        href="/books/{{$book->img}}.pdf"
                        download=""
                    >
                        <img src="/books/img/{{$book->img}}.png" alt="" width="100%">
                        <h3>{{$book->name}}</h3>
                        <p>{{$book->author}}</p>
                        <p>Pages: {{$book->pages}}</p>
                        <p>Downloads: <span class="__downloads">{{$book->download}}</span></p>
                        <button class="btn btn-primary">Download</button>
                    </a>
                @endforeach
            </div>
        </div>
    </div>


@endsection
