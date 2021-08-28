@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-8 form-background d-flex" style="height: 95vh; justify-content: center; align-items: center">
            <div class="shadow bg-white rounded d-flex align-self-center w-75">
                <div class="col h-100 w-100" style="padding: 2rem 5rem">
                    <h1 class="display-6 text-color font-weight-bold mb-3">Create your account</h1>
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputfName">First Name</label>
                                <input name="fname" type="text" class="form-control" id="inputfName">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputmName">Middle Name</label>
                                <input name="mname" type="text" class="form-control" id="inputmName">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputlName">Last Name</label>
                                <input name="lname" type="text" class="form-control" id="inputlName">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputAddress">Home Address</label>
                                <input name="address" type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputBrgy">Barangay</label>
                                <select name="brgy" id="inputBrgy" class="form-control">
                                    <option selected>Choose your barangay</option>
                                    <option>Barangay 1</option>
                                    <option>Barangay 2</option>
                                    <option>Barangay 3</option>
                                    <option>Barangay 4</option>
                                    <option>Barangay 5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputContactNum">Contact Number</label>
                                <input name="cnum" type="text" class="form-control" id="inputContactNum">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputBday">Birthday</label>
                                <select name="mbday" id="inputBday" class="form-control">
                                    <option selected>Month</option>
                                    <option value='1'>Janaury</option>
                                    <option value='2'>February</option>
                                    <option value='3'>March</option>
                                    <option value='4'>April</option>
                                    <option value='5'>May</option>
                                    <option value='6'>June</option>
                                    <option value='7'>July</option>
                                    <option value='8'>August</option>
                                    <option value='9'>September</option>
                                    <option value='10'>October</option>
                                    <option value='11'>November</option>
                                    <option value='12'>December</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputBday" style="color:white"></label>
                                <input name="dbday" type="text" class="form-control mt-2" id="inputBday" placeholder="Day">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputBday" style="color:white"></label>
                                <input name="ybday" type="text" class="form-control mt-2" id="inputBday" placeholder="Year">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input name="email" type="email" class="form-control" id="inputEmail">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword">Password</label>
                                <input name="pass" type="password" class="form-control" id="inputPassword">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputConfpw">Confirm Password</label>
                                <input name="cpass" type="password" class="form-control" id="inputConfpw">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUpload">Upload a valid ID</label>
                            <div class="custom-file">
                                <input name="file" type="file" class="custom-file-input" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="inputGroupFile04">Upload an image</label>
                            </div>
                        </div>

                        <div class="form-group form-check">
                            <input name="cbox" type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I have read and agree to the <span
                                    style="text-decoration: underline; color: blue; cursor: pointer;">terms and conditions
                                </span></label>
                        </div>

                        <button name="" type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4 logo-background d-flex" style="justify-content: center; align-items: center">
            <img src="{{ URL::asset('img/login-img.png') }}" class="img-fluid login-img" alt="">
        </div>
    </div>

@endsection
