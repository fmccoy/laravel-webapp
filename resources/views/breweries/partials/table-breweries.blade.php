<table class='table table-striped table-bordered'>
  <thead>
    <tr>
      <th>Name</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>
    @each('breweries.partials.table-row-breweries', $breweries, 'brewery')
  </tbody>
</table>
