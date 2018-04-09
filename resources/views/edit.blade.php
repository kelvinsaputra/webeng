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
    <img src="images/spicy.png" class="img img-responsive">
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
            
            {!! Form::open(['url' => 'posts', 'method' => 'post']) !!}
              {{ csrf_field() }}

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('cust_segment', 'Customer Segment :') }}
                {{ Form::text('cust_segment', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('cust_category', 'Customer Category :') }}
                {{ Form::text('cust_category', null, array('class' => 'form-control', 'required')) }}
                
                {{ Form::label('residence_type', 'Residence Type :') }}
                {{ Form::text('residence_type', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('birth_date', 'Date of Birth :') }}
                {{ Form::date('birth_date', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('occupation', 'Occupation :') }}
                {{ Form::text('occupation', null, array('class' => 'form-control', 'required')) }}

                <fieldset disabled>
                {{ Form::label('updated_at', 'Modified Time :') }}
                {{ Form::text('updated_at', null, array('class' => 'form-control')) }}
                </fieldset>

                {{ Form::label('shared_balance_group', 'Share Balance Group :', 'required') }}
                {{ Form::text('shared_balance_group', null, array('class' => 'form-control')) }}

              </div>

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('account_number', 'Customer Account Number :') }}
                {{ Form::number('account_number', null, array('class' => 'form-control', 'required', 'min' => '1')) }}

                {{ Form::label('latitude', 'Latitude :') }}
                {{ Form::number('latitude', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('npwp', 'NPWP Number :') }}
                {{ Form::text('npwp', null, array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('is_converted_from_lead', 'Is Converted from Lead :') }}
                {{ Form::number('is_converted_from_lead', null, array('class' => 'form-control', 'required', 'min' => '0', 'max' => '1', 'title' => '0 untuk FALSE dan 1 untuk TRUE')) }}

                {{ Form::label('primary_mobile', 'Primary Mobile :') }}
                {{ Form::text('primary_mobile', null, array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('corp_tax_id', 'Corporate Tax ID :') }}
                {{ Form::text('corp_tax_id', null, array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                <fieldset disabled>
                {{ Form::label('created_at', 'Created Time :') }}
                {{ Form::text('created_at', null, array('class' => 'form-control')) }}
                </fieldset>

              </div>

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('dukcapil_status', 'Dukcapil Status :') }}
                {{ Form::number('dukcapil_status', null, array('class' => 'form-control', 'required', 'min' => '0', 'max' => '1', 'title' => '0 untuk FALSE dan 1 untuk TRUE')) }}

                {{ Form::label('longitude', 'Longitude :') }}
                {{ Form::number('longitude', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('cust_status', 'Customer Status :') }}
                {{ Form::text('cust_status', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('bss_status', 'BSS Status :') }}
                {{ Form::text('bss_status', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('cust_username', 'Customer Username :') }}
                {{ Form::text('cust_username', null, array('class' => 'form-control', 'required')) }}

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
                {{ Form::text('first_name', null, array('class' => 'form-control', 'required', 'pattern' => '^[a-zA-Z]+$')) }}

                {{ Form::label('facebook_acc_id', 'Facebook Account ID :') }}
                {{ Form::text('facebook_acc_id', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('cust_id', 'Customer ID :') }}
                {{ Form::text('cust_id', null, array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('pref_language', 'Preferred Language :') }}
                {{ Form::text('pref_language', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('home_status', 'Home Status :') }}
                {{ Form::text('home_status', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('fax_number', 'Fax :') }}
                {{ Form::text('fax_number', null, array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

              </div>

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('last_name', 'Last Name :') }}
                {{ Form::text('last_name', null, array('class' => 'form-control', 'required', 'pattern' => '^[a-zA-Z]+$')) }}

                {{ Form::label('cust_id_type', 'Customer ID Type :') }}
                {{ Form::text('cust_id_type', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('mother_name', 'Mother Maide Name :') }}
                {{ Form::text('mother_name', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('kk_number', 'KK Number :') }}
                {{ Form::text('kk_number', null, array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('office_phone', 'Office Phone :') }}
                {{ Form::text('office_phone', null, array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                <fieldset disabled>
                {{ Form::label('name', '-') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
                </fieldset>
                
              </div>

              <div class="col-md-3" style="display: inline-block;">

                {{ Form::label('gender', 'Gender :') }}
                {{ Form::text('gender', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('contact_number', 'Contact Number :') }}
                {{ Form::text('contact_number', null, array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('primary_email', 'Primary Email :') }}
                {{ Form::email('primary_email', null, array('class' => 'form-control', 'required')) }}

                {{ Form::label('home_phone', 'Home Phone :') }}
                {{ Form::text('home_phone', null, array('class' => 'form-control', 'required', 'pattern' => '^[0-9]+$')) }}

                {{ Form::label('marital_status', 'Martial Status :') }}
                {{ Form::text('marital_status', null, array('class' => 'form-control', 'required')) }}

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

        <h2>Customer Data</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>account_number</th>
                <th>cust_username</th>
                <th>cust_segment</th>
                <th>cust_category</th>
                <th>dukcapil_status</th>
                <th>longitude</th>
                <th>latitude</th>
                <th>residence_type</th>
                <th>npwp</th>
                <th>birth_date</th>
                <th>is_converted_from_lead</th>
                <th>cust_status</th>
                <th>occupation</th>
                <th>primary_mobile</th>
                <th>bss_status</th>
                <th>corp_tax_id</th>
                <th>shared_balance_group</th>
                <th>updated_at</th>
                <th>modify</th>
              </tr>
            </thead>
            <tbody>
              @if(count($customers))
                @foreach($customers as $customer)
                  <tr>
                    <td><a href="update/{{ $customer->account_number }}">edit</a></td>
                    <td>{{ $customer->account_number }}</td>
                    <td>{{ $customer->cust_username }}</td>
                    <td>{{ $customer->cust_segment }}</td>
                    <td>{{ $customer->cust_category }}</td>
                    <td>{{ $customer->dukcapil_status }}</td>
                    <td>{{ $customer->longitude }}</td>
                    <td>{{ $customer->latitude }}</td>
                    <td>{{ $customer->residence_type }}</td>
                    <td>{{ $customer->npwp }}</td>
                    <td>{{ $customer->birth_date }}</td>
                    <td>{{ $customer->is_converted_from_lead }}</td>
                    <td>{{ $customer->cust_status }}</td>
                    <td>{{ $customer->occupation }}</td>
                    <td>{{ $customer->primary_mobile }}</td>
                    <td>{{ $customer->bss_status }}</td>
                    <td>{{ $customer->corp_tax_id }}</td>
                    <td>{{ $customer->shared_balance_group }}</td>
                    <td>{{ $customer->updated_at }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>

          <h2>PIC Data</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>pic_id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>gender</th>
                <th>facebook_acc_id</th>
                <th>cust_id_type</th>
                <th>contact_number</th>
                <th>cust_id</th>
                <th>mother_name</th>
                <th>primary_email</th>
                <th>pref_language</th>
                <th>kk_number</th>
                <th>home_phone</th>
                <th>home_status</th>
                <th>office_phone</th>
                <th>marital_status</th>
                <th>fax_number</th>
              </tr>
            </thead>
            <tbody>
              @if(count($pics))
                @foreach($pics as $pic)
                  <tr>
                    <td><a href="update/{{$pic->pic_id}}">edit</a></td>
                    <td>{{ $pic->pic_id }}</td>
                    <td>{{ $pic->first_name }}</td>
                    <td>{{ $pic->last_name }}</td>
                    <td>{{ $pic->gender }}</td>
                    <td>{{ $pic->facebook_acc_id }}</td>
                    <td>{{ $pic->cust_id_type }}</td>
                    <td>{{ $pic->contact_number }}</td>
                    <td>{{ $pic->cust_id }}</td>
                    <td>{{ $pic->mother_name }}</td>
                    <td>{{ $pic->primary_email }}</td>
                    <td>{{ $pic->pref_language }}</td>
                    <td>{{ $pic->kk_number }}</td>
                    <td>{{ $pic->home_phone }}</td>
                    <td>{{ $pic->home_status }}</td>
                    <td>{{ $pic->office_phone }}</td>
                    <td>{{ $pic->marital_status }}</td>
                    <td>{{ $pic->fax_number }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>

        </div>
      </main>
    </div>
  </div>

    
    <script src="jquery/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
  </html>
