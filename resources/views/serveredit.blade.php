@extends ('backend.layout')
@section ('title','EDIT SERVER')
@section ('container')

<div class="main-content">
            <section class="section">
              <div class="section-header">
                  <h1>Monitor</h1>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div>
                          <div>
                          <form action="{{ route('serverupdate',$serveredits->id)}}" method="POST">@csrf
                                  <div class="form-group row">
                                     <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"><b>DS / VM:</b></label>
                                      <div class="col-sm-3">
                                      <input type="text" name="vm" class="form-control form-control-lg" id="colFormLabelLg" placeholder="" value="{{$serveredits->vm}}">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                          <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"><b>IP / DOMAIN:</b></label>
                                            <div class="col-sm-3">
                                              <input type="text" name="alamat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="" value="{{$serveredits->alamat}}">
                                            </div>
                                  </div>
                                  <button type="submit" class="btn btn-success">SAVE</button>
                                                
                                  </form>
                         
                          </div>
                      </div>
                  </div>
              </div>
            </section>    
</div>
@endsection
