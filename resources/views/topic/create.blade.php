<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 mt-5">
                <h1>Suggest a topic</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif  
                <form method="POST" action="{{route('storeTopic')}}" enctype="multipart/form-data"> 
                    @csrf
                    <div class="my-3">
                        <label for="InputTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="InputTitle" name="title" value="{{old("title")}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputDescription" class="form-label">Briefly describe your topic</label>
                        <textarea class="form-control" name="description" id="InputDescription">{{old("description")}}</textarea>
                    
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                            <select class="form-select" aria-label="Default select example" name="category" value="{{old("category")}}">

                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>  
                                @endforeach
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>
