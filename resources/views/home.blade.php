@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>Home</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="disk-usage-box card card-default">
                <div class="card-header">Disk Usage</div>
                <div class="card-body">
                    <ul>
                        <li>Total size : {{ sprintf('%0.2f', $total_size/(1024*1024)) }} MB ( {{sprintf('%0.2f', $total_size)}} B )</li>
                        <li>Number of files : {{ $total_file }}</li>
                    </ul>
                </div>
            </div>
            <div class="file-comp-box card card-default">
                <div class="card-header">File Usage Compositions</div>
                <div class="card-body">
                    @if( !count( $file_type ) ) No data @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>No. of file</th>
                                <th>Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $file_type as $item )
                            <tr>
                                <td scope="row">{{ $item['name'] }} </td>
                                <td>{{ $item['count'] }} </td>
                                <td>{{ sprintf('%0.2f', $item['size']/(1024*1024)) }} MB ( {{sprintf('%0.2f', $item['size'])}} B ) </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection