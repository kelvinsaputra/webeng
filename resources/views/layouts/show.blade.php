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

            @if(count($names) || count($customer_ids) || count($ktps))
                
                @if(count($names))
                <div class="form-group">
                  <div class="row">
                    <ul style="list-style-type: none;"><h4>Data Hasil Search menurut Nama:</h4><br><br>
                      @foreach($names as $name)
                        <li>First Name : {{ $name->first_name }}</li>
                        <li>Last Name : {{ $name->last_name }}</li>
                        <li>Gender : {{ $name->gender }}</li>
                        <li>Facebook ID : {{ $name->facebook_acc_id }}</li>
                        <li>Customer ID type : {{ $name->cust_id_type }}</li>
                        <li>Contact Number : {{ $name->contact_number }}</li>
                        <li>Customer ID : {{ $name->cust_id }}</li>
                        <li>Mother : {{ $name->mother_name }}</li>
                        <li>Primary Email : {{ $name->primary_email }}</li>
                        <li>Pref Language : {{ $name->pref_language }}</li>
                        <li>KK Number : {{ $name->kk_number }}</li>
                        <li>Home Phone : {{ $name->home_phone }}</li>
                        <li>Home Status : {{ $name->home_status }}</li>
                        <li>Office Phone : {{ $name->office_phone }}</li>
                        <li>Martial Status : {{ $name->marital_status }}</li>
                        <li>Fax Number : {{ $name->fax_number }}</li>
                        <br>
                        <td><button type="button" class="btn btn-success"><a href="edit/{{ $name->pic_id }}" style="text-decoration: none; color: white;">Edit</a></button><td>
                        <td><button type="button" class="btn btn-danger"><a href="/" style="text-decoration: none; color: white;">Cancel</a></button><td>
                        <br><hr><br>
                      @endforeach
                    </ul>
                  </div>
                </div>
                @endif

                @if(count($customer_ids))
                <div class="form-group">
                  <div class="row">
                    <ul style="list-style-type: none;"><h4>Data Hasil Search menurut Customer ID:</h4><br><br>
                      @foreach($customer_ids as $name)
                        <li>First Name : {{ $name->first_name }}</li>
                        <li>Last Name : {{ $name->last_name }}</li>
                        <li>Gender : {{ $name->gender }}</li>
                        <li>Facebook ID : {{ $name->facebook_acc_id }}</li>
                        <li>Customer ID type : {{ $name->cust_id_type }}</li>
                        <li>Contact Number : {{ $name->contact_number }}</li>
                        <li>Customer ID : {{ $name->cust_id }}</li>
                        <li>Mother : {{ $name->mother_name }}</li>
                        <li>Primary Email : {{ $name->primary_email }}</li>
                        <li>Pref Language : {{ $name->pref_language }}</li>
                        <li>KK Number : {{ $name->kk_number }}</li>
                        <li>Home Phone : {{ $name->home_phone }}</li>
                        <li>Home Status : {{ $name->home_status }}</li>
                        <li>Office Phone : {{ $name->office_phone }}</li>
                        <li>Martial Status : {{ $name->marital_status }}</li>
                        <li>Fax Number : {{ $name->fax_number }}</li>
                        <td><a href="edit/{{ $name->pic_id }}">edit</a></td>
                        <br><hr><br>
                      @endforeach
                    </ul>
                  </div>
                </div>
                @endif

                @if(count($ktps))
                <div class="form-group">
                  <div class="row">
                    <ul style="list-style-type: none;"><h4>Data Hasil Search menurut KTP:</h4><br><br>
                      <h5>
                      @foreach($ktps as $name)
                        <li>Customer ID : {{ $name->cust_id }}</li>
                        <li>KK number : {{ $name->kk_number }}</li>
                        <li>First Name : {{ $name->first_name }}</li>
                        <li>Last Name : {{ $name->last_name }}</li>
                        <li>Gender : {{ $name->gender }}</li>
                        <li>Birth Date : {{ $name->birth_date }}</li>
                        <li>Residence type : {{ $name->residence_type }}</li>
                        <li>Occupation : {{ $name->occupation }}</li>
                        <br><hr><br>
                      @endforeach
                      </h5>
                    </ul>
                  </div>
                </div>
                @endif

              @else

              <div class="form-group">
                <div class="alert alert-danger">
                  Data tidak ditemukan!
                </div>
              </div>

            @endif

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
