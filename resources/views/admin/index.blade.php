@extends('be.master1 ')

@section('content')
<div class="row col-sm-12">
                                        <div class="card d-flex w-100 mb-4">
                                            <div class="row no-gutters row-bordered row-border-light h-100">
                                                <div class="d-flex col-md-6">
                                                    <div class="card-body">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-auto">
                                                                <i class="lnr lnr-users text-primary display-4"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-0 text-muted">Unique <span class="text-primary">Visitors</span></h6>
                                                                <h4 class="mt-3 mb-0">652<i class="ion ion-md-arrow-round-down ml-3 text-danger"></i></h4>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-muted">36% From Last 6 Months</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex col-md-6 align-items-center">
                                                    <div class="card-body">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-auto">
                                                                <i class="lnr lnr-magic-wand text-primary display-4"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-0 text-muted">Monthly <span class="text-primary">Earnings</span></h6>
                                                                <h4 class="mt-3 mb-0">5963<i class="ion ion-md-arrow-round-up ml-3 text-success"></i></h4>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-muted">36% From Last 6 Months</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       <!-- 3rd row Start -->
                            <div class="col-xl-7">
                                <div class="card mb-4" style="margin-left: 20px;">
                                    <div class="card-header with-elements pb-0">
                                        <h6 class="card-header-title mb-0">Customer details</h6>
                                        <div class="card-header-elements ml-auto p-0">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#sale-stats">Sale stats</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nav-tabs-top">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="sale-stats">
                                                <div style="height: 450px; border: 1px solid #ddd; border-radius: 5px; padding: 15px; overflow: auto;" id="tab-table-1">
                                                    <table class="table table-hover card-table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <label class="mb-0">
                                                                        <span><strong>Due</strong></span>
                                                                    </label>
                                                                </th>
                                                                <th>User</th>
                                                                <th>Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <label class="mb-0">
                                                                        <span><strong>12</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="{{asset ('be/img/avatars/3-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">John Deo</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1183] Workaround for OS X selects printing bug</h6>
                                                                        <p class="text-muted mb-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="mb-0">
                                                                        <span><strong>16</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="{{asset ('be/img/avatars/1-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">Jems Win</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1249] Vertically center carousel controls</h6>
                                                                        <p class="text-muted mb-0">Try any carousel control and reduce the screen width below...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="mb-0">
                                                                        <span><strong>40</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="{{asset ('be/img/avatars/1-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">Jems Wiliiam</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1254] Inaccurate small pagination height</h6>
                                                                        <p class="text-muted mb-0">The height of pagination elements is not consistent with...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="mb-0">
                                                                        <span><strong>12</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="{{asset ('be/img/avatars/3-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">John Deo</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1183] Workaround for OS X selects printing bug</h6>
                                                                        <p class="text-muted mb-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="mb-0">
                                                                        <span><strong>12</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="{{asset ('be/img/avatars/3-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">John Deo</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1183] Workaround for OS X selects printing bug</h6>
                                                                        <p class="text-muted mb-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="mb-0">
                                                                        <span><strong>16</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="{{asset ('be/img/avatars/1-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">Jems Win</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1249] Vertically center carousel controls</h6>
                                                                        <p class="text-muted mb-0">Try any carousel control and reduce the screen width below...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="mb-0">
                                                                        <span><strong>40</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="{{asset ('be/img/avatars/1-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">Jems Wiliiam</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1254] Inaccurate small pagination height</h6>
                                                                        <p class="text-muted mb-0">The height of pagination elements is not consistent with...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="mb-0">
                                                                        <span><strong>12</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="{{asset ('be/img/avatars/3-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">John Deo</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1183] Workaround for OS X selects printing bug</h6>
                                                                        <p class="text-muted mb-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                                        
@endsection