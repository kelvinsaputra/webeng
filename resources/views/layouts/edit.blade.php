<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
<form action="/search" method="post">
{{ csrf_field() }}
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <img src="images/spicy.png" class="img img-responsive" />
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Spicy Corp.</a>
    <div class="dropdown">
      <button class="btn dropdown-toggle ml-auto" type="button" data-toggle="dropdown">All Records
      <span class="caret"></span></button>
      <ul class="dropdown-menu drop">
        <li class="dropdown-item"><a href="#">Customer ID</a></li>
        <li class="dropdown-item"><a href="#">Name</a></li>
      </ul>
    </div>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" id="search" name="search">
    <button class="btn btn-default btn-sm">
      <span class="glyphicon glyphicon-search"></span> Search 
    </button>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav>
</form>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        @yield('left_sidebar')
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Fake CRM</h1>

          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-outline-secondary">Share</button>
              <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">

            <h4>Customer Details</h4><br>
            @include('errors')
            
            {!! Form::open(['url' => 'update', 'method' => 'post']) !!}
              {{ csrf_field() }}
              {{ method_field('PATCH') }}

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::hidden('id', $temp) }}

                {{ Form::label('cust_segment', 'Customer Segment :') }}
                {{ Form::select('cust_segment', array('Retail' => 'Retail', 'Business' => 'Business'), $array['cust_segment'], ['class' => 'form-control']) }}

                {{ Form::label('cust_category', 'Customer Category :') }}
                {{ Form::select('cust_category', array('Default' => 'Default', 'Enterprise' => 'Enterprise'), $array['cust_category'], ['class' => 'form-control']) }}
                
                {{ Form::label('residence_type', 'Residence Type :') }}
                {{ Form::select('residence_type', array('Domestic' => 'Domestic', 'Foreign' => 'Foreign'), $array['residence_type'], ['class' => 'form-control']) }}

                {{ Form::label('birth_date', 'Date of Birth :') }}
                {{ Form::date('birth_date', $array['birth_date'], array('class' => 'form-control', 'required')) }}

                {{ Form::label('occupation', 'Occupation :') }}
                {{ Form::select('occupation', array('Employed' => 'Employed', 'Private' => 'Private'), $array['occupation'], ['class' => 'form-control']) }}

                <fieldset disabled>
                {{ Form::label('updated_at', 'Modified Time :') }}
                {{ Form::text('updated_at', $array['updated_at'], array('class' => 'form-control')) }}
                </fieldset>

                {{ Form::label('shared_balance_group', 'Share Balance Group :') }}
                {{ Form::text('shared_balance_group', $array['shared_balance_group'], array('class' => 'form-control', 'required')) }}

              </div>

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('account_number', 'Customer Account Number :') }}
                {{ Form::text('account_number', $array['account_number'], array('class' => 'form-control', 'required', 'pattern' => '^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$')) }}

                <fieldset disabled>
                {{ Form::label('latitude', 'Latitude :') }}
                {{ Form::number('latitude', $array['latitude'], array('class' => 'form-control')) }}
                </fieldset>

                {{ Form::label('npwp', 'NPWP Number :') }}
                {{ Form::text('npwp', $array['npwp'], array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('is_converted_from_lead', 'Is Converted from Lead :') }}
                {{ Form::select('is_converted_from_lead', array(0 => 'True', 1 => 'False'), $array['is_converted_from_lead'], ['class' => 'form-control']) }}

                {{ Form::label('primary_mobile', 'Primary Mobile :') }}
                {{ Form::text('primary_mobile', $array['primary_mobile'], array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('corp_tax_id', 'Corporate Tax ID :') }}
                {{ Form::text('corp_tax_id', $array['corp_tax_id'], array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                <fieldset disabled>
                {{ Form::label('created_at', 'Created Time :') }}
                {{ Form::text('created_at', $array['created_at'], array('class' => 'form-control')) }}
                </fieldset>

              </div>

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('dukcapil_status', 'Dukcapil Status :') }}
                {{ Form::select('dukcapil_status', array(0 => 'Valid', 1 => 'Not Valid'), $array['dukcapil_status'], ['class' => 'form-control']) }}

                <fieldset disabled>
                {{ Form::label('longitude', 'Longitude :') }}
                {{ Form::number('longitude', $array['longitude'], array('class' => 'form-control')) }}
                </fieldset>

                {{ Form::label('cust_status', 'Customer Status :') }}
                {{ Form::select('cust_status', array('Registered' => 'Registered', 'Active' => 'Active', 'Suspended' => 'Suspended', 'Deactive' => 'Deactive'), $array['cust_status'], ['class' => 'form-control']) }}

                {{ Form::label('bss_status', 'BSS Status :') }}
                {{ Form::text('bss_status', $array['bss_status'], array('class' => 'form-control', 'required')) }}

                {{ Form::label('cust_username', 'Customer Username :') }}
                {{ Form::text('cust_username', $array['cust_username'], array('class' => 'form-control', 'required')) }}

                <fieldset disabled>
                {{ Form::label('name', '-') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
                </fieldset>

                <fieldset disabled>
                {{ Form::label('name', '-') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
                </fieldset>

              </div>

              <div class="form-group float-right">
                
                {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary">Add</button>
                  <button type="button" class="btn btn-secondary">Edit</button>
                  <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  More
                  </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Check Ducapil</a>
                    <a class="dropdown-item" href="#">Another dropdown</a>
                  </div>
                </div>
              </div>

              <hr>
              <h4>PIC Details</h4><br>

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('first_name', 'First Name :') }}
                {{ Form::text('first_name', $array['first_name'], array('class' => 'form-control', 'required', 'pattern' => '^[a-zA-Z]+$')) }}

                {{ Form::label('facebook_acc_id', 'Facebook Account ID :') }}
                {{ Form::text('facebook_acc_id', $array['facebook_acc_id'], array('class' => 'form-control', 'required')) }}

                {{ Form::label('cust_id', 'Customer ID :') }}
                {{ Form::text('cust_id', $array['cust_id'], array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('pref_language', 'Preferred Language :') }}
                {{ Form::select('pref_language', ['Indonesia' => 'Indonesia', 'English' => 'English'], $array['pref_language'], ['class' => 'form-control']) }}

                {{ Form::label('home_status', 'Home Status :') }}
                {{ Form::select('home_status', array('Own House' => 'Own House', 'Rent' => 'Rent', 'Apartment' => 'Apartment'), $array['home_status'], ['class' => 'form-control']) }}

                {{ Form::label('fax_number', 'Fax :') }}
                {{ Form::text('fax_number', $array['fax_number'], array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

              </div>

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('last_name', 'Last Name :') }}
                {{ Form::text('last_name', $array['last_name'], array('class' => 'form-control', 'required', 'pattern' => '^[a-zA-Z]+$')) }}

                {{ Form::label('cust_id_type', 'Customer ID Type :') }}
                {{ Form::select('cust_id_type', array('KTP' => 'KTP', 'Passport' => 'Passport'), $array['cust_id_type'], ['class' => 'form-control']) }}

                {{ Form::label('mother_name', 'Mother Maide Name :') }}
                {{ Form::text('mother_name', $array['mother_name'], array('class' => 'form-control', 'required')) }}

                {{ Form::label('kk_number', 'KK Number :') }}
                {{ Form::text('kk_number', $array['kk_number'], array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('office_phone', 'Office Phone :') }}
                {{ Form::text('office_phone', $array['office_phone'], array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                <fieldset disabled>
                {{ Form::label('name', '-') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
                </fieldset>
                
              </div>

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('gender', 'Gender :') }}
                {{ Form::select('gender', ['Pria' => 'Pria', 'Wanita' => 'Wanita'], $array['gender'], ['class' => 'form-control']) }}

                {{ Form::label('contact_number', 'Contact Number :') }}
                {{ Form::text('contact_number', $array['contact_number'], array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('primary_email', 'Primary Email :') }}
                {{ Form::email('primary_email', $array['primary_email'], array('class' => 'form-control', 'required')) }}

                {{ Form::label('home_phone', 'Home Phone :') }}
                {{ Form::text('home_phone', $array['home_phone'], array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('marital_status', 'Martial Status :') }}
                {{ Form::text('marital_status', $array['marital_status'], array('class' => 'form-control', 'required')) }}

                <fieldset disabled>
                {{ Form::label('name', '-') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
                </fieldset>

              </div>

            {!! Form::close() !!}
            <br><br>

          </div>
          @yield('right_sidebar')

        </div>   

        </div>
      </main>
    </div>
  </div>

    
    <script src="jquery/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
  </html>
