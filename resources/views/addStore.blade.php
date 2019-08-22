@extends('layouts.adminapp') @section('content')

<div class="row justify-content-end" style="margin:0;">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Store</div>

            <div class="card-body">
                <div class="grid">
                    <div class="storeTabs">
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'gallary')" id="defaultOpen">Add Gallery</button>
                            <button class="tablinks" onclick="openCity(event, 'audio')">Add Audio</button>
                            <button class="tablinks" onclick="openCity(event, 'video')">Add Videos</button>
                        </div>

                        <div id="gallary" class="tabcontent">
                            <input type="file" name="file" class="inputfile" id="file">
                            <label for="file">choose file</label>
                        </div>

                        <div id="audio" class="tabcontent">
                            <h3>Paris</h3>
                            <p>Paris is the capital of France.</p>
                        </div>

                        <div id="video" class="tabcontent">
                            <h3>Tokyo</h3>
                            <p>Tokyo is the capital of Japan.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection