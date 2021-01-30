<!DOCTYPE html>
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>NETMON V3.1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="{{ asset('/indexasset/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/indexasset/animasi.css')}}">
  <link rel="stylesheet" href="{{ asset('/indexasset/font.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

	<style type="text/css">
	.disabled{
		opacity:0.5;
	}
	.disabled h1{
		color:red !important;
	}

	</style>
<script type="text/javascript" charset="utf-8" referrerpolicy="strict-origin-when-cross-origin" src="{{ asset('/indexasset/2')}}"></script></head>
<body class="">
	<div class="black">
	</div><br><br><br>
 	<div id="atas">

<div class="road"><center>
<img src="{{ asset('/indexasset/logo.png')}}" class=""></center>
</div>
		
	</div>
	<div class="container">

		<div id="menu" class="row">
			<div class="col-lg-4 col-xs-12">
				<div class="box-menu">
					<img src="{{ asset('/indexasset/fo.png')}}" class="">
					<span>FO LINK</span>
					<br>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fiber">
					Registered {{ $fo1 }}
					</button>
				</div>

			</div>

			<div class="col-lg-4 col-xs-12">
				<div class="box-menu">
					<img src="{{ asset('/indexasset/radio.png')}}" class="">
					<span>RADIO</span>
					<br>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#radio">
					Registered {{ $radio1 }}
					</button>

				</div>
			</div>
			<div class="col-lg-4 col-xs-12">
				<div class="box-menu">
					<img src="{{ asset('/indexasset/server.png')}}" class="">
					<span>SERVER</span>
					<br>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#server">
					Registered {{ $server1 }}
					</button>
					
				</div>
			</div>
		</div>

	</div>

	<footer>

		<div id="nado" style="opacity:0.9;z-index:-99999 !important">
			<img id="optionalstuff" src="{{ asset('/indexasset/footer_.png')}}" alt="">

 		</div>
	</footer>

<!-- Modal fo -->
<div class="modal fade" id="fiber" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><b><h5 class="modal-title">VIEW FO LINKS</h5></b></center>
      </div>
      <div class="modal-body">
        <div id="fiber"></div>
<!-- table -->
<div class="table-responsive">
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ONT</th>
      {{-- <th scope="col"  style="display:none;">ALAMAT</th> --}}
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  @foreach ($fo as $linkfo)
  <tbody>
       <tr>
       <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $linkfo->ont }}</td>
      {{-- <td style="display:none;">{{ $linkfo->alamat }}</td> --}}
      <td><?php

        $host=$linkfo->alamat;
        $output=shell_exec('ping -n 1 '.$host);
        if (strpos($output, 'Destination net unreachable') !== false) {
            echo "<button type='button' class='btn btn-danger btn-circle'>
            <i class='fa fa-power-off'></i>
            </button>&nbsp;<font color='#000000'> - <b>TROUBLE! CHECK LINKS</b></font>";
        }
            elseif(strpos($output, 'Request timed out') !== false)
        {
            echo "<button type='button' class='btn btn-success btn-circle'>
            <i class='fa fa-question-circle'></i>
            </button>&nbsp;<font color='#CD5C5C'> - <b>ONT POWER OFF</b></font>";
        }
            elseif(strpos($output, 'TTL') !== false)
        {
            echo "<button type='button' class='btn btn-success btn-circle'>
            <i class='fa fa-check'></i>
            </button>&nbsp;<font color='#BA55D3'> - <b>ONT ONLINE</b></font>";
        }
        else
        {
            echo "<button type='button' class='btn btn-success btn-circle'>
            <i class='fa fa-question-circle'></i>
            </button>&nbsp;<font color='#5CB85C'> - <b>ONT POWER OFF</b></font>";
        }
        
        ?></td>
    </tr>
  </tbody>
  @endforeach
</table>
{{-- <div>{{ $fo->links() }}</div> --}}
</div>
<!-- endtable -->     
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal fo -->
<!-- radio modal -->
<div class="modal fade" id="radio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title" id="exampleModalLabel">VIEW RADIO LINKS STATUS</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- table -->
<div class="table-responsive">
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">RADIO</th>
      {{-- <th scope="col"  style="display:none;">ALAMAT</th> --}}
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  @foreach ($radio as $linkradio)
  <tbody>
       <tr>
       <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $linkradio->radio }}</td>
      {{-- <td style="display:none;">{{ $linkradio->alamat }}</td> --}}
      <td><?php

        $host=$linkradio->alamat;
        $output=shell_exec('ping -n 1 '.$host);
        if (strpos($output, 'Destination net unreachable') !== false) {
            echo "<button type='button' class='btn btn-danger btn-circle'>
            <i class='fa fa-power-off'></i>
            </button>&nbsp;<font color='#000000'> - <b>TROUBLE! CHECK TOWER</b></font>";
        }
            elseif(strpos($output, 'Request timed out') !== false)
        {
            echo "<button type='button' class='btn btn-success btn-circle'>
            <i class='fa fa-question-circle'></i>
            </button>&nbsp;<font color='#CD5C5C'> - <b>RADIO POWER OFF</b></font>";
        }
            elseif(strpos($output, 'TTL') !== false)
        {
            echo "<button type='button' class='btn btn-success btn-circle'>
            <i class='fa fa-check'></i>
            </button>&nbsp;<font color='#BA55D3'> - <b>RADIO ONLINE</b></font>";
        }
        else
        {
            echo "<button type='button' class='btn btn-success btn-circle'>
            <i class='fa fa-question-circle'></i>
            </button>&nbsp;<font color='#5CB85C'> - <b>RADIO POWER OFF</b></font>";
        }
        
        ?>
        </td>
    </tr>
  </tbody>
  @endforeach
</table>
{{-- <div>{{ $radio->links() }}</div> --}}
</div>
<!-- endtable -->     
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end radio Modal -->
<!-- server Modal -->
<div class="modal fade" id="server" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title" id="exampleModalLabel">VIEW SERVER / VM STATUS</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- table -->
<div class="table-responsive">
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">SERVER</th>
      {{-- <th scope="col"  style="display:none;">ALAMAT</th> --}}
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  @foreach ($server as $linkserver)
  <tbody>
       <tr>
       <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $linkserver->vm }}</td>
      {{-- <td style="display:none;">{{ $linkserver->alamat }}</td> --}}
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
        
        ?></td>
    </tr>
  </tbody>
@endforeach

</table>
{{-- 
<div>{{ $server->links() }}</div> --}}
</div>
<!-- endtable -->     
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end server Modal -->
<link rel="stylesheet" href="{{ asset('/indexasset/font-awesome.min.css')}}">
<script type="text/javascript" src="{{ asset('/indexasset/jq.js.download')}}"></script>
<script type="text/javascript" src="{{ asset('/indexasset/bootstrap.min.js.download')}}"></script>
<script type="text/javascript" src="{{ asset('/indexasset/font.js.download')}}"></script>

<script type="text/javascript">
  $(document).on('ajaxComplete ajaxReady ready', function () {
      $('ul.pagination li a').off('click').on('click', function (e) {
          $("#fiber").modal('show');
          e.preventDefault();
      });
  });
</script>

</body></html>