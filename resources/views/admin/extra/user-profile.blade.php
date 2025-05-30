@extends('admin/header_int')
@section('title','User Profile')

@section('content')

<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Account Settings</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="{{url('TRC/11/dashboard')}}"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Pages
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Account Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--mail-Compose-contant-start-->
                        <div class="row account-contant">
                            <div class="col-12">
                                <div class="card card-statistics">
                                    <div class="card-body p-0">
                                        <div class="row no-gutters">
                                            <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                                <div class="page-account-profil pt-5">
                                                    <div class="profile-img text-center rounded-circle">
                                                        <div class="pt-5">
                                                            <div class="bg-img m-auto">
                                                                <img src="{{url('public/dist/img/avtar/02.jpg')}}" class="img-fluid" alt="users-avatar">
                                                            </div>
                                                            <div class="profile pt-4">
                                                                <h4 class="mb-1">Alice Williams</h4>
                                                                <p>Enthusiast</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="py-5 profile-counter">
                                                    <ul class="nav justify-content-center text-center">
                                                            <li class="nav-item border-right px-3">
                                                                <div>
                                                                    <h4 class="mb-0">90</h4>
                                                                    <p>Income</p>
                                                                </div>
                                                            </li>

                                                            <li class="nav-item border-right px-3">
                                                                <div>
                                                                    <h4 class="mb-0">1.5K</h4>
                                                                    <p>Expenses</p>
                                                                </div>
                                                            </li>

                                                            <li class="nav-item px-3">
                                                                <div>
                                                                    <h4 class="mb-0">4.4K</h4>
                                                                    <p>Transfar</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="profile-btn text-center">
                                                        <div><button class="btn btn-light text-primary mb-2">Upload New Avatar</button></div>
                                                        <div><button class="btn btn-danger">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-md-6 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Edit Your Personal Settings</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1">Full Name</label>
                                                                    <input type="text" class="form-control" id="name1" value="Alice Williams">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="title1">Title</label>
                                                                    <input type="text" class="form-control" id="title1" value="Marketing expert">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="phone1">Phone Number</label>
                                                                    <input type="text" class="form-control" id="phone1" value="(01) 97 563 15613">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="email1">Email</label>
                                                                    <input type="email" class="form-control" id="email1" value="alicewilliams@gmail.com">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="add1">Address</label>
                                                                <input type="text" class="form-control" id="add1" value="17504 Carlton Cuevas Rd, Gulfport, MS, 39503">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="add2">Address 2</label>
                                                                <input type="text" class="form-control" id="add2" value="1234 North Avenue Luke Lane, South Bend, IN 360001">
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="col-12">
                                                                    <label class="mb-1">Birthday</label>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <select id="inputState" class="form-control">
                                                                        <option>Date</option>
                                                                        <option>01</option>
                                                                        <option>02</option>
                                                                        <option>03</option>
                                                                        <option>04</option>
                                                                        <option>05</option>
                                                                        <option>06</option>
                                                                        <option>07</option>
                                                                        <option>08</option>
                                                                        <option>09</option>
                                                                        <option>10</option>
                                                                        <option selected="">11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                        <option>31</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <select id="inputState1" class="form-control">
                                                                        <option>Month</option>
                                                                        <option>January</option>
                                                                        <option>February</option>
                                                                        <option>March</option>
                                                                        <option>April</option>
                                                                        <option selected="">May</option>
                                                                        <option>June</option>
                                                                        <option>July</option>
                                                                        <option>August</option>
                                                                        <option>September</option>
                                                                        <option>October</option>
                                                                        <option>November</option>
                                                                        <option>December</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <select id="inputState2" class="form-control">
                                                                        <option>Year</option>
                                                                        <option>1984</option>
                                                                        <option>1985</option>
                                                                        <option>1986</option>
                                                                        <option>1987</option>
                                                                        <option>1988</option>
                                                                        <option>1989</option>
                                                                        <option>1990</option>
                                                                        <option>1991</option>
                                                                        <option>1992</option>
                                                                        <option>1993</option>
                                                                        <option selected="">1994</option>
                                                                        <option>1995</option>
                                                                        <option>1996</option>
                                                                        <option>1997</option>
                                                                        <option>1998</option>
                                                                        <option>1999</option>
                                                                        <option>2000</option>
                                                                        <option>2001</option>
                                                                        <option>2002</option>
                                                                        <option>2003</option>
                                                                        <option>2004</option>
                                                                        <option>2005</option>
                                                                        <option>2006</option>
                                                                        <option>2007</option>
                                                                        <option>2008</option>
                                                                        <option>2009</option>
                                                                        <option>2010</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="inputState3">City</label>
                                                                    <select id="inputState3" class="form-control">
                                                                        <option>Choose...</option>
                                                                        <option selected="">London</option>
                                                                        <option>Montreal</option>
                                                                        <option>Delhi</option>
                                                                        <option>Tokyo</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="inputState4">State</label>
                                                                    <select id="inputState4" class="form-control">
                                                                        <option>Choose...</option>
                                                                        <option selected="">England</option>
                                                                        <option>California </option>
                                                                        <option>Texas</option>
                                                                        <option>Scotland </option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="inputZip">Zip</label>
                                                                    <input type="text" class="form-control" id="inputZip" value="EC1A 1BB">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                        I agree to receive email notification.
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update Information</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 border-t col-12">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Your External Link</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="fb">Facebook URL:</label>
                                                                <input type="text" class="form-control" id="fb" value="https://www.facebook.com/">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tr">Twitter URL:</label>
                                                                <input type="text" class="form-control" id="tr" value="https://twitter.com/">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="br">Blogger URL:</label>
                                                                <input type="text" class="form-control" id="br" value="https://www.blogger.com">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="go">Google+ URL:</label>
                                                                <input type="text" class="form-control" id="go" value="https://plus.google.com/discover">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="li">LinkedIn URL:</label>
                                                                <input type="text" class="form-control" id="li" value="https://in.linkedin.com/">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="we">Website URL:</label>
                                                                <input type="text" class="form-control" id="we" value="https://yourwebsite.com">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save &amp; Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mail-Compose-contant-end-->
                    </div>
    <!-- end container-fluid -->
</div>
@endsection
