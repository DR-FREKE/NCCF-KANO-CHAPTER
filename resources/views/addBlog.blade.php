@extends('layouts.adminapp') @section('content')

<div class="row justify-content-end" style="margin:0;">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Bible Study Post</div>

            <div class="card-body">
                <div class="grid">
                    <div class="storeTabs">
                        <form>
                            <div class="topic" id="blog-topic">
                                <input type="text" name="topic-name" id="name_of_file" class="" placeholder="topic name">
                            </div>
                            <div style="padding-top: .8em;">
                                <textarea id="mytextarea" style="min-height:25em;">type here</textarea>
                                <button class="" id="btnBlog" type="button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection