<tr>
  <td>{{ $brewery->name}}</td>
  <td><a class="glyphicon glyphicon-eye-open" href="{{ url('breweries') }}/{{ $brewery->id }}"><span class="sr-only">View</span></a></td>
  <td><a class="glyphicon glyphicon-edit" href="{{ url('breweries') }}/{{ $brewery->id }}/edit"><span class="sr-only">Edit</span></a></td>
</tr>
