
<div class="container mt-5">
    <h1>Customers</h1>
    
    <div style="padding-top:20px;" ng-controller="customersFormCtrl">
        <div></div>
        
        <div class="alert alert-success alert-dismissible fade hide" role="alert">
          {{ PostDataResponse }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <form class="row g-3">
          <div class="row">
              <div class="col-md-6 mb-2">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" ng-model="fullname">
              </div>
              <div class="col-md-3 mb-2">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" ng-model="mobile">
              </div>
              <div class="col-md-3 mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" ng-model="email">
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 mb-2">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" ng-model="address">
              </div>
          </div>
          <div class="row">
              <div class="col-md-3 mb-2">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" ng-model="city">
              </div>
              <div class="col-md-3 mb-2">
                <label for="pincode" class="form-label">Pincode</label>
                <input type="text" class="form-control" ng-model="pincode">
              </div>
              <div class="col-md-3 mb-2">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" ng-model="state">
              </div>
              <div class="col-md-3 mb-2">
                <label for="state" class="form-label">&nbsp;</label>
                <button class="form-control btn btn-success" ng-click="addCustomer()">Submit</button>
              </div>
          </div>
          
        </form>
    </div> 
    
    <div style="padding-top:20px;" ng-controller="customersCtrl">
    <table class="table" style="margin-top:50px;">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Customer Name</th>
          <th scope="col">Mobile</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">City</th>
          <th scope="col">Pincode</th>
          <th scope="col">State</th>
        </tr>
      </thead>
      <tbody>
      <tr ng-repeat="x in names">
        <td>{{ $index + 1 }}</td>
        <td>{{ x.Name }}</td>
        <td>{{ x.Mobile }}</td>
        <td>{{ x.Email }}</td>
        <td>{{ x.Address }}</td>
        <td>{{ x.City }}</td>
        <td>{{ x.Pincode }}</td>
        <td>{{ x.State }}</td>
      </tr>
      </tbody>
    </table>
    </div>
</div>