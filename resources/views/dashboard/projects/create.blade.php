@extends('layouts.app')

@section('content')

<div class="container m-t-100">
    <div class="columns">
        <div class="column"></div>
        <div class="column is-8">
            <div class="box">

                <h1 class="is-size-3 has-text-centered m-b-50">Create a project</h1>
                <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label">Project title</label>
                        <div class="control">
                            <input class="input" type="text" name="title" placeholder="Project title" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Project image</label>
                        <div class="control">
                            <input class="input" type="file" accept="image/*" name="thumbnail" placeholder="Choose a project image" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Short project description</label>
                        <div class="control">
                            <input class="input" type="text" name="short_desc" placeholder="Short description of your project" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Full project description</label>
                        <div class="control">
                            <textarea name="full_desc" class="textarea"></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Status</label>
                        <div class="control">
                            <div class="select">
                                <select name="status">
                                    <option value="1">live</option>
                                    <option value="0">Concept</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <button type="submit" class="button is-primary">Save project</button>
                    </div>



                </form>


            </div>
        </div>
        <div class="column"></div>
    </div>
</div>


@endsection
