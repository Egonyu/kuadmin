@extends('backend.admin.index')

@section('content')
<div class="page-content">

<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Form Validation</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                <li class="breadcrumb-item active">Form Validation</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-settings-outline mr-1"></i> Settings
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="page-content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Validation type</h4>
                        <p class="card-title-desc">Parsley is a javascript form validation
                            library. It helps you provide your users with feedback on their form
                            submission before sending it to your server.</p>

                        <form class="custom-validation" action="#">
                            <div class="form-group">
                                <label>Required</label>
                                <input type="text" class="form-control" required placeholder="Type something"/>
                            </div>

                            <div class="form-group">
                                <label>E-Mail</label>
                                <div>
                                    <input type="email" class="form-control" required
                                            parsley-type="email" placeholder="Enter a valid e-mail"/>
                                </div>
                            </div>
                            <textarea name="editor1" id="editor1">
                                
                            </textarea>
                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    <!-- end container-fluid -->
</div> 
<!-- end page-content-wrapper -->
</div>
<!-- End Page-content -->
@endsection
