<div class="container mt-5">
    <div class="my-5">
        <form>
          <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" ng-model="firstName">
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" ng-model="lastName">
          </div>
          
          Full Name : {{ firstName +' '+ lastName }}
          <!--<button type="submit" class="btn btn-primary">Submit</button>-->
        </form>
    
      <ul>
        <li ng-repeat="x in names">
          {{ x.name + ' ' + x.country}}
        </li>
      </ul>
    </div>
<div class="container mt-5">