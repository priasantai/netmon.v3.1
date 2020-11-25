@extends('backend.layout')
@section('title','FO VIEW')
@section('container')
<!-- start content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Monitor</h1>
        </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div>
                             
                                <a href="{{ url('foadd')}}"><button type="button" class="btn btn-success">Add Fo/Ont</button></a>
                             
                            </div><br>
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                        <th>ID</th>
                                    	<th>ONT</th>
                                    	<th>Address</th>
                                    	<th>Status</th>
                                    	<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($fo as $linkfo)
                                        <tr>
                                        	<td>{{ $loop->iteration }}</td>
                                        	<td>{{ $linkfo->ont }}</td>
                                        	<td>{{ $linkfo->alamat}}</td>
                                        	<td><?php

                                                $host=$linkfo->alamat;
                                                $output=shell_exec('ping -n 1 '.$host);
                                                if (strpos($output, 'Destination net unreachable') !== false) {
                                                    echo "<button type='button' class='btn btn-danger btn-circle'>
                                                    <i class='fa fa-power-off'></i>
                                                    </button>&nbsp;<font color='#D9534F'> - <b>Unreacable</b></font>";
                                                }
                                                    elseif(strpos($output, 'Request timed out') !== false)
                                                {
                                                    echo "<button type='button' class='btn btn-success btn-circle'>
                                                    <i class='fa fa-question-circle'></i>
                                                    </button>&nbsp;<font color='#5CB85C'> - <b>Offline</b></font>";
                                                }
                                                    elseif(strpos($output, 'TTL') !== false)
                                                {
                                                    echo "<button type='button' class='btn btn-success btn-circle'>
                                                    <i class='fa fa-check'></i>
                                                    </button>&nbsp;<font color='#5CB85C'> - <b>Online</b></font>";
                                                }
                                                else
                                                {
                                                    echo "<button type='button' class='btn btn-success btn-circle'>
                                                    <i class='fa fa-question-circle'></i>
                                                    </button>&nbsp;<font color='#5CB85C'> - <b>Connection Timeout</b></font>";
                                                }
                                                
                                                ?>
                                                </td>
                                            <td><a href="{{ url('foedit',$linkfo->id)}}"><button type="button" class="btn btn-info">Edit</button></a>
                                                <a href="{{ url('fodelete',$linkfo->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                                </td>
                                            </tr>
                                         @endforeach
                                       </tbody>
                                    </table>
                                <div>{{ $fo->links() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</div>

<!-- end content -->
@endsection