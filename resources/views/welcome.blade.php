@extends('layouts.master')
@section('title', 'TUBES WEBENG')
@section('left_sidebar')
<div class="sidebar-sticky">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="#">
        <span data-feather="file"></span>
        Customer List
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span data-feather="home"></span>
        Dashboard <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span data-feather="shopping-cart"></span>
        Recently Modified
      </a>
    </li>
  </div>
@endsection

@section('right_sidebar')
<div class="col-md-3">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <a data-toggle="collapse" href="#basic-collapse">Basic</a>
        </h6>
      </div>
      <div id="basic-collapse" class="panel-collapse collapse">
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Customer Summary
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Customer Details
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Comments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Updates
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              CCI Details
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Opportunities
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Quotes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Documents
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Campaigns
            </a>
          </li>
        </ul>
      </div>

      <div class="panel-heading">
        <h6 class="panel-title sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <a data-toggle="collapse" href="#cust-collapse">Customer</a>
        </h6>
      </div>
      <div id="cust-collapse" class="panel-collapse collapse">
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              ngek
            </a>
          </li>
        </ul>
      </div>

      <div class="panel-heading">
        <h6 class="panel-title sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <a data-toggle="collapse" href="#acc-collapse">Accounts</a>
        </h6>
      </div>
      <div id="acc-collapse" class="panel-collapse collapse">
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              ngok
            </a>
          </li>
        </ul>
      </div>

      <div class="panel-heading">
        <h6 class="panel-title sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <a data-toggle="collapse" href="#order-collapse">Order</a>
        </h6>
      </div>
      <div id="order-collapse" class="panel-collapse collapse">
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              ngak
            </a>
          </li>
        </ul>
      </div>

      <div class="panel-heading">
        <h6 class="panel-title sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <a data-toggle="collapse" href="#add-collapse">Add-on</a>
        </h6>
      </div>
      <div id="add-collapse" class="panel-collapse collapse">
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              ngik
            </a>
          </li>
        </ul>
      </div>

      <div class="panel-heading">
        <h6 class="panel-title sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <a data-toggle="collapse" href="#bill-collapse">Bills</a>
        </h6>
      </div>
      <div id="bill-collapse" class="panel-collapse collapse">
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              nguk
            </a>
          </li>
        </ul>
      </div>

      <div class="panel-heading">
        <h6 class="panel-title sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <a data-toggle="collapse" href="#trx-collapse">Transaction Details</a>
        </h6>
      </div>
      <div id="trx-collapse" class="panel-collapse collapse">
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              ngok
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</div>
@endsection