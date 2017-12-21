@extends('layouts.default')

@section('content')
<div class="main-content">
    <div class=container-fluid>
        <div class='row'>
            <div class='col-sm-12'>
                <h1>Academic Resumes:</h1>
                <object data="/myimage/resumeofMr.Miaji.pdf" style="width: 100%; height: 300%; display: block;"></object>

                <p>It appears you don't have a PDF plugin for this browser.
                    You can
                    <a href="https://drive.google.com/open?id=1T3BEw4Wg-B4gyOYL7XJKoBt0esxNpO9n">
                        click here to download the PDF file.</a>
                </p>

                </object>
            </div>
        </div>
    </div>
</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
@endsection