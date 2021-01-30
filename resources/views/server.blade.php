@extends('backend.layout')
@section('title','SERVER VIEW')
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
                                    <a href="/serveradd"><button type="button" class="btn btn-success">Add Server/VM</button></a>
                                </div><br>
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>NO</th>
                                    	<th>Server</th>
                                    	<th>Address</th>
                                    	<th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($server as $linkserver)
                                        <tr>
                                        	<td>{{ $loop->iteration }}</td>
                                        	<td>{{ $linkserver->vm }}</td>
                                        	<td>{{ $linkserver->alamat}}</td>
                                        	<td><?php

                                                $host=$linkserver->alamat;
                                                $output=shell_exec('ping -n 1 '.$host);
                                                if (strpos($output, 'Destination net unreachable') !== false) {
                                                    echo "<button type='button' class='btn btn-danger btn-circle'>
                                                    <i class='fa fa-power-off'></i>
                                                    </button>&nbsp;<font color='#000000'> - <b>TROUBLE! CHECK SERVER</b></font>";
                                                }
                                                    elseif(strpos($output, 'Request timed out') !== false)
                                                {
                                                    echo "<button type='button' class='btn btn-success btn-circle'>
                                                    <i class='fa fa-question-circle'></i>
                                                    </button>&nbsp;<font color='#CD5C5C'> - <b>SERVER POWER OFF</b></font>";
                                                }
                                                    elseif(strpos($output, 'TTL') !== false)
                                                {
                                                    echo "<button type='button' class='btn btn-success btn-circle'>
                                                    <i class='fa fa-check'></i>
                                                    </button>&nbsp;<font color='#BA55D3'> - <b>SERVER ONLINE</b></font>";
                                                }
                                                else
                                                {
                                                    echo "<button type='button' class='btn btn-success btn-circle'>
                                                    <i class='fa fa-question-circle'></i>
                                                    </button>&nbsp;<font color='#5CB85C'> - <b>SERVER POWER OFF</b></font>";
                                                }
                                                
                                                ?>
                                                </td>
                                        	<td><a href="{{ url('serveredit',$linkserver->id)}}"><button type="button" class="btn btn-info">Edit</button></a>
                                                <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                <div>{{ $server->links() }}</div>
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