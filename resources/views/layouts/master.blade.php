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
    <button type="button" class="btn btn-default btn-sm">
      <span class="glyphicon glyphicon-search"></span> Search 
    </button>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav>

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

            <form method="POST" action="">
              {{ csrf_field() }}

              @include('errors')
              
              <h4>Customer Details</h4><br>

              <!-- tolong kondisikan for id name -->
              <div class="col-md-3" style="display: inline-block;">
                <div class="form-group">
                  <label for="name">Customer Segment:</label>
                  <input type="email" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer Category:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Resident Type:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Date of Birth:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Occupation:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Modified Time:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Shared Balance Group:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

              </div>

              <div class="col-md-3" style="display: inline-block;">
                <div class="form-group">
                  <label for="name">Customer Account Number:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Latitude:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">NPWP Number:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Is Converted From Lead:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Primary Mobile:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Corporate Tax ID:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Created Time:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

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
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Longitude:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer Status:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">BSS Status:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer Username:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer Comment:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer Note:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

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
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Facebook Account Id:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer ID:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Preferred Language:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Home Status:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Fax:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

              </div>

              <div class="col-md-3" style="display: inline-block;">
                <div class="form-group">
                  <label for="name">Last Name:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Customer ID Type:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Mother Maiden Name:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">KK Number:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Office Phone:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
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
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Contact Number:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Primary Email:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Home Phone:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="name">Marital Status:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
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

        <h2>Section title</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
              </tr>
              <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>Integer</td>
                <td>nec</td>
                <td>odio</td>
                <td>Praesent</td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>libero</td>
                <td>Sed</td>
                <td>cursus</td>
                <td>ante</td>
              </tr>
              <tr>
                <td>1,004</td>
                <td>dapibus</td>
                <td>diam</td>
                <td>Sed</td>
                <td>nisi</td>
              </tr>
              <tr>
                <td>1,005</td>
                <td>Nulla</td>
                <td>quis</td>
                <td>sem</td>
                <td>at</td>
              </tr>
              <tr>
                <td>1,006</td>
                <td>nibh</td>
                <td>elementum</td>
                <td>imperdiet</td>
                <td>Duis</td>
              </tr>
              <tr>
                <td>1,007</td>
                <td>sagittis</td>
                <td>ipsum</td>
                <td>Praesent</td>
                <td>mauris</td>
              </tr>
              <tr>
                <td>1,008</td>
                <td>Fusce</td>
                <td>nec</td>
                <td>tellus</td>
                <td>sed</td>
              </tr>
              <tr>
                <td>1,009</td>
                <td>augue</td>
                <td>semper</td>
                <td>porta</td>
                <td>Mauris</td>
              </tr>
              <tr>
                <td>1,010</td>
                <td>massa</td>
                <td>Vestibulum</td>
                <td>lacinia</td>
                <td>arcu</td>
              </tr>
              <tr>
                <td>1,011</td>
                <td>eget</td>
                <td>nulla</td>
                <td>Class</td>
                <td>aptent</td>
              </tr>
              <tr>
                <td>1,012</td>
                <td>taciti</td>
                <td>sociosqu</td>
                <td>ad</td>
                <td>litora</td>
              </tr>
              <tr>
                <td>1,013</td>
                <td>torquent</td>
                <td>per</td>
                <td>conubia</td>
                <td>nostra</td>
              </tr>
              <tr>
                <td>1,014</td>
                <td>per</td>
                <td>inceptos</td>
                <td>himenaeos</td>
                <td>Curabitur</td>
              </tr>
              <tr>
                <td>1,015</td>
                <td>sodales</td>
                <td>ligula</td>
                <td>in</td>
                <td>libero</td>
              </tr>
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
