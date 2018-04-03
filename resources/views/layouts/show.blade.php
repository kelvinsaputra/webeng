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
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Spicy Corp.</a>
    <div class="dropdown">
      <button class="btn dropdown-toggle ml-auto" type="button" data-toggle="dropdown">All Records
      <span class="caret"></span></button>
      <ul class="dropdown-menu drop">
        <li class="dropdown-item"><a href="#">Customer ID</a></li>
        <li class="dropdown-item"><a href="#">Name</a></li>
      </ul>
    </div>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
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
              </tr>
            </thead>
            <tbody>
              @if(count($customers))
              @foreach($customers as $customer)
              <tr>
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
    
    @yield('right_sidebar')

  </div>
  
  <script src="jquery/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
