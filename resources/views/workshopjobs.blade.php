@extents('layout.app');

@section('content');
<div>
    <a class="btn btn-primary" href="#" role="button">Add a Job</a>
    <a class="btn btn-primary" href="#" role="button">Delete Job</a>
</div>
    <div>
        <table class="table table-dark">
            <thead>
              ...
            </thead>
            <tbody>
              <tr class="table-active">
                ...
              </tr>
              <tr>
                ...
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2" class="table-active">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection