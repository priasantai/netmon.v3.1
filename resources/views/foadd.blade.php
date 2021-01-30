@extends ('backend.layout')
@section ('title','Add Fo / Ont')
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
                          <form action="{{ route('fosimpan')}}" method="POST">@csrf
                                  <div class="form-group row">
                                     <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"><b>FO / ONT:</b></label>
                                      <div class="col-sm-3">
                                        <input type="text" name="ont" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Register ONT">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                          <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"><b>IP / DOMAIN:</b></label>
                                            <div class="col-sm-3">
                                              <input type="text" name="alamat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Alamat IP/Domain">
                                            </div>
                                  </div>
                                  <button type="submit" class="btn btn-success">Add ONT</button>
                                                
                                  </form>
                         
                          </div>
                      </div>
                  </div>
              </div>
            </section>    
</div>
@endsection
