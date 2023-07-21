@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row flex-lg-nowrap">
      <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
        <div class="card p-3">
          <div class="e-navlist e-navlist--active-bg">
            <ul class="nav">
              <li class="nav-item"><a class="nav-link px-2 active" href="#"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
              <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-crud-users" target="__blank"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
              <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page" target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>إدخال المعلومات</span></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body">
                <div class="e-profile">
                  <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                      <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                          <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                        </div>
                      </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3" >
                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap "style="text-align: right ;" >حارث رياض عبد</h4>
                        <p class="mb-0" style="text-align: right ;">@johnny.s</p>
                        <div class="text-muted"style="text-align: right ;"><small>Last seen 2 hours ago</small></div>
                        <div class="mt-2 float-right">
                          <button class="btn btn-primary" type="button">
                            <i class="fa fa-fw fa-camera"></i>
                            <span>تغيير الصورة</span>
                          </button>
                        </div>
                      </div>
                      <div class="text-center text-sm-right">
                        <span class="badge badge-secondary">administrator</span>
                        <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                      </div>
                    </div>
                  </div>
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link">إدخال المعلومات</a></li>
                  </ul>
                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      <form id="MyForm" class="validated forms" action="{{route('profile.store')}}" method="POST">
                        @csrf
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label style="float: right;">الاسم الكامل</label>
                                  <input class="form-control" type="text" name="student_name" placeholder="الاسم الكامل" value="">
                                </div>
                              </div>
                               
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label style="float: right;">الاميل الشخصي</label>
                                  <input class="form-control" type="text" name="Phone_1" placeholder="user@example.com">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                  <label style="float: right;">رقم الموبايل</label>
                                  <input class="form-control" type="text" name="Phone_2" placeholder="..0513 او  ..07707" value="">
                                </div>
                              </div>
                              </div>
                              <div class="row">
                            <div class="col">
                                <div class="form-group">
                                  <label style="float: right;">رقم الهاتف<span class="text-primary" > الثاني إن وجد</span></label>
                                  <input class="form-control" type="text" name="IQAddress" placeholder="..0513 او  ..07707" value="">
                                </div>
                              </div>  
                              </div>
                             
                          </div>
                        </div>
                        
                        <div class="row" >
                          <div class="row float-right" style="margin: auto ;" >
                          <div class="col d-flex justify-content-end">
                            <input class="btn btn-success m-auto" style="margin: auto ;" type="submit" name="submit" value ="حفظ المعلومات" > 
                          </div>
                        </div>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-3 mb-3">
            <div class="card mb-3">
              <div class="card-body">
                <div class="px-xl-3">
                  <button class="btn btn-block btn-secondary">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h6 class="card-title font-weight-bold">Support</h6>
                <p class="card-text">Get fast, free help from our friendly assistants.</p>
                <button type="button" class="btn btn-primary">Contact Us</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>

@endsection