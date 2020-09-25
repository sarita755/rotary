<div class="container">
   <table class="table table-hover" style="width:100%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
        <th>Month</th>
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($plans as $plan)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$plan->name}}</td>
        <td>{{$plan->month}}</td>
        <td>{{$plan->category}}</td>
        <td>{{  html_entity_decode(strip_tags($plan->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
