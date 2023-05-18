@extends("layouts.admin")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')
    <script src="{{asset('js/dashboard/users/index.js')}}"></script>
@endpush

@section("content")



    <div class="page-header d-flex justify-content-between my-10">
        <h1 class="page-title">Users</h1>

    </div>

    <div>
        <div class="mb-10">
            {{ $messages->links() }}
        </div>
        <div class="table-responsive mb-6">
            <table class="table table-striped table-dark text-center">
                <tr>
                    <td>ID</td>
                    <td>User</td>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Email</td>
                    <td style="width: 120px">Phone</td>
                    <td style="width: 400px">Subject</td>
                    <td>Date</td>
                    <td>Action</td>
                </tr>
                @foreach($messages as $message)
                    <tr>
                        <td><span class="badge badge-primary">{{$message->id}}</span></td>
                        <td>
                            @if($message->user_id)
                                {{$message->user->name}}
                            @else
                                <span class="badge badge-danger">Null</span>
                            @endif
                        </td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->surname }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->created_at ? $message->created_at->diffForHumans() : "" }}</td>
                        <td>
                            <form action="/admin/messages/delete/{{$message->id}}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach



            </table>
        </div>

        <div class="mb-10">
            {{$messages->links()}}
        </div>
    </div>

@endsection
