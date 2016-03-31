<tr>
  <td>{{ $draft->name }}</td>
  <td>{{ $draft->style }}</td>
  <td>{{ App\Breweries::getBreweryName($draft->brewery_id) }}</td>
  <td>{{ App\Drafts::isAvailable($draft->available) }}</td>
  <td><a class="glyphicon glyphicon-eye-open" href="{{ url('drafts') }}/{{ $draft->id }}"><span class="sr-only">View</span></a></td>
  <td><a class="glyphicon glyphicon-edit" href="{{ url('drafts') }}/{{ $draft->id }}/edit"><span class="sr-only">Edit</span></a></td>
</tr>
