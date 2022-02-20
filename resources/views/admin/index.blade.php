<x-layout>
    <header class="container-fluid py-4">
        <div class="row mx-auto">
            <h1 class="text-center">With great power comes great responsibility</h1>
        </div>

    </header>

    <main class="container-fluid">
        <div class="row mx-auto">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="d-flex justify-content-center">
                    <h2>The topics for next week</h2>
                </div>
                <div class="row mx-auto">
                    @foreach ($picked_topics as $topic)
                        <div class="col-4">
                            <div class="card shadow my-2 h-100 p-3">
                                <h4 class="my-2 p-3">{{ $topic->title }}</h4>
                                <h5 class="ms-2">
                                    <span class="badge bg-warning ">{{ $topic->category->name }}</span>
                                    <span class="float-end"><i class="fas fa-redo"></i></span>
                                </h5>
                            </div>
                        </div>
                    @endforeach

                </div>




            </div>

        </div>
        <div class="row mx-auto">
            <div class="col-10 offset-1">
                <h3>Users</h3>
                <table class="table table-hover table-success table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Admin?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                @if ($user->is_admin)
                                    <td class="fw-bold text-success">YES</td>

                                @else
                                    <td class="fw-bold text-danger">NO</td>
                                @endif

                            </tr>
                        @endforeach
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
        <div class="row mx-auto mt-5">
            <div class="col-10 offset-1">
                <h3>Topics</h3>
                <table class="table table-hover table-info table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>User</th>
                            <th>Created at</th>
                            <th>Category</th>
                            <th class="text-center">Accepted</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($topics as $topic)
                            <tr>
                                <td>{{ $topic->id }}</td>
                                <td>{{ $topic->title }}</td>
                                <td>{{ $topic->description }}</td>
                                <td>{{ $topic->user->email }}</td>
                                <td>{{ $topic->created_at }}</td>
                                <td>{{ $topic->category->name }}</td>
                                @if ($topic->is_accepted)
                                    <td class="text-center"><i class="text-success fa fa-solid fa-thumbs-up"></i>
                                    </td>
                                    <td></td>
                                @else
                                    <td class="text-center"><i class="text-danger fa fa-solid fa-thumbs-down"></i>
                                    </td>
                                    <td data-topic-id="{{ $topic->id }}" class="approve-btn"><span
                                            class="btn btn-outline-primary"><i class="fa fa-solid fa-check"></i></span>
                                    </td>
                                @endif

                            </tr>
                        @endforeach
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

    </main>





</x-layout>
