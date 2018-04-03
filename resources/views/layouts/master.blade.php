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

        <div class="row">
          <div class="col-md-9">

            <form method="POST" action="/posts">
              {{ csrf_field() }}

              @include('errors')
              
              <h4>Customer Details</h4><br>

              <!-- tolong kondisikan for id name -->
              <div class="col-md-3" style="display: inline-block;">
                <div class="form-group">
                  <label for="name">Customer Segment:</label>
                  <input type="text" class="form-control" id="cust_segment" name="cust_segment" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer Category:</label>
                  <input type="text" class="form-control" id="cust_category" name="cust_category" required>
                </div>

                <div class="form-group">
                  <label for="name">Resident Type:</label>
                  <input type="text" class="form-control" id="residence_type" name="residence_type" required>
                </div>

                <div class="form-group">
                  <label for="name">Date of Birth:</label>
                  <input type="text" class="form-control" id="birth_date" name="birth_date" required>
                </div>

                <div class="form-group">
                  <label for="name">Occupation:</label>
                  <input type="text" class="form-control" id="occupation" name="occupation" required>
                </div>

                <!-- <div class="form-group">
                  <label for="name">Modified Time:</label>
                  <input type="text" class="form-control" id="updated_at" name="updated_at">
                </div> -->

                <fieldset disabled>
                  <div class="form-group">
                    <label for="name">Modified Time:</label>
                    <input type="text" class="form-control" id="updated_at" name="updated_at" required>
                  </div>
                </fieldset>

                <div class="form-group">
                  <label for="name">Shared Balance Group:</label>
                  <input type="text" class="form-control" id="shared_balance_group" name="shared_balance_group" required>
                </div>

              </div>

              <div class="col-md-3" style="display: inline-block;">
                <!-- <div class="form-group">
                  <label for="name">Customer Account Number:</label>
                  <input type="text" class="form-control" id="account_number" name="account_number" required>
                </div> -->

                <fieldset disabled>
                  <div class="form-group">
                    <label for="name">Customer Account Number:</label>
                    <input type="text" class="form-control" id="account_number" name="account_number" required>
                  </div>
                </fieldset>

                <div class="form-group">
                  <label for="name">Latitude:</label>
                  <input type="text" class="form-control" id="latitude" name="latitude" required>
                </div>

                <div class="form-group">
                  <label for="name">NPWP Number:</label>
                  <input type="text" class="form-control" id="npwp" name="npwp" required>
                </div>

                <div class="form-group">
                  <label for="name">Is Converted From Lead:</label>
                  <input type="text" class="form-control" id="is_converted_from_lead" name="is_converted_from_lead" required>
                </div>

                <div class="form-group">
                  <label for="name">Primary Mobile:</label>
                  <input type="text" class="form-control" id="primary_mobile" name="primary_mobile" required>
                </div>

                <div class="form-group">
                  <label for="name">Corporate Tax ID:</label>
                  <input type="text" class="form-control" id="corp_tax_id" name="corp_tax_id" required>
                </div>

                <!-- <div class="form-group">
                  <label for="name">Created Time:</label>
                  <input type="text" class="form-control" id="created_at" name="created_at">
                </div> -->

                <fieldset disabled>
                  <div class="form-group">
                    <label for="name">Created Time:</label>
                    <input type="text" class="form-control" id="created_at" name="created_at" required>
                  </div>
                </fieldset>

              </div>

              <div class="col-md-3" style="display: inline-block;">
                <!-- <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                  <label for="password_confirmation">Password Confirmation:</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div> -->

                <div class="form-group">
                  <label for="name">Duckapil Status:</label>
                  <input type="text" class="form-control" id="dukcapil_status" name="dukcapil_status" required>
                </div>

                <div class="form-group">
                  <label for="name">Longitude:</label>
                  <input type="text" class="form-control" id="longitude" name="longitude" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer Status:</label>
                  <input type="text" class="form-control" id="cust_status" name="cust_status" required>
                </div>

                <div class="form-group">
                  <label for="name">BSS Status:</label>
                  <input type="text" class="form-control" id="bss_status" name="bss_status" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer Username:</label>
                  <input type="text" class="form-control" id="cust_username" name="cust_username" required>
                </div>

                <fieldset disabled>
                  <div class="form-group">
                    <label for="name">-</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                </fieldset>

                <fieldset disabled>
                  <div class="form-group">
                    <label for="name">-</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                </fieldset>

              </div>

              <!-- BUTTON SEBELAH SINIII-->
              <div class="form-group float-right">
                <Button type="Submit" class="btn btn-primary">Save</Button>
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
                <div class="form-group">
                  <label for="name">First Name:</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>

                <div class="form-group">
                  <label for="name">Facebook Account Id:</label>
                  <input type="text" class="form-control" id="facebook_acc_id" name="facebook_acc_id" required>
                </div>

                <!-- <div class="form-group">
                  <label for="name">Customer ID:</label>
                  <input type="text" class="form-control" id="cust_id" name="cust_id" required>
                </div> -->

                <fieldset disabled>
                  <div class="form-group">
                    <label for="name">Customer ID:</label>
                    <input type="text" class="form-control" id="cust_id" name="cust_id" required>
                  </div>
                </fieldset>

                <div class="form-group">
                  <label for="name">Preferred Language:</label>
                  <input type="text" class="form-control" id="pref_language" name="pref_language" required>
                </div>

                <div class="form-group">
                  <label for="name">Home Status:</label>
                  <input type="text" class="form-control" id="home_status" name="home_status" required>
                </div>

                <div class="form-group">
                  <label for="name">Fax:</label>
                  <input type="text" class="form-control" id="fax_number" name="fax_number" required>
                </div>

              </div>

              <div class="col-md-3" style="display: inline-block;">
                <div class="form-group">
                  <label for="name">Last Name:</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer ID Type:</label>
                  <input type="text" class="form-control" id="cust_id_type" name="cust_id_type" required>
                </div>

                <div class="form-group">
                  <label for="name">Mother Maiden Name:</label>
                  <input type="text" class="form-control" id="mother_name" name="mother_name" required>
                </div>

                <div class="form-group">
                  <label for="name">KK Number:</label>
                  <input type="text" class="form-control" id="kk_number" name="kk_number" required>
                </div>

                <div class="form-group">
                  <label for="name">Office Phone:</label>
                  <input type="text" class="form-control" id="office_phone" name="office_phone" required>
                </div>
                
                <fieldset disabled>
                  <div class="form-group">
                    <label for="name">None</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                </fieldset>

              </div>

              <div class="col-md-3" style="display: inline-block;">
                <div class="form-group">
                  <label for="name">Gender:</label>
                  <input type="text" class="form-control" id="gender" name="gender" required>
                </div>

                <div class="form-group">
                  <label for="name">Contact Number:</label>
                  <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                </div>

                <div class="form-group">
                  <label for="name">Primary Email:</label>
                  <input type="email" class="form-control" id="primary_email" name="primary_email" required>
                </div>

                <div class="form-group">
                  <label for="name">Home Phone:</label>
                  <input type="text" class="form-control" id="home_phone" name="home_phone" required>
                </div>

                <div class="form-group">
                  <label for="name">Marital Status:</label>
                  <input type="text" class="form-control" id="marital_status" name="marital_status" required>
                </div>

                <fieldset disabled>
                  <div class="form-group">
                    <label for="name">None</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                </fieldset>

              </div>
            
            </form>

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

    
    <script src="jquery/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
  </html>
