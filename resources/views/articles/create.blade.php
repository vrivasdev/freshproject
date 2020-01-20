
@extends('layout')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="heading has-text-weight-bold is-size-4">New Article</div>
            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input 
                            type="text" 
                            class="input @error('title') is-danger @enderror" 
                            name="title" 
                            id="title"
                            value="{{old('title')}}"
                        >
                        @error('title')
                            <p class="help is-danger">{{ $errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    <div class="control">
                        <input type="text" class="input @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt">
                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="body">Body</label>
                    <div class="control">
                        <input type="text" class="input @error('body') is-danger @enderror" name="body" id="body">
                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection