<table class='table table-striped table-bordered'>
  <thead>
    <tr>
      <th>Name</th>
      <th>Style</th>
      <th>Brewery</th>
      <th>Available</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>
    @each('drafts.partials.table-row-drafts', $drafts, 'draft')
  </tbody>
</table>
