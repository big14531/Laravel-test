@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="disk-usage-box card card-default">
                <div class="card-header">Disk Usage</div>

                <div class="card-body">
                    <ul>
                        <li>Total size :  </li>
                        <li>Number of files :  </li>
                    </ul>
                </div>
            </div>

            <div class="file-comp-box card card-default">
                <div class="card-header">File Usage Compositions</div>

                <div class="card-body">
                    No data
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
