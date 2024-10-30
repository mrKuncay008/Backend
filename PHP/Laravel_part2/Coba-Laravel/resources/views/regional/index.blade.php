<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
     integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Coba</title>
</head>
<body>
  <h1>Data Wni Kucing</h1>
    <table class="table">
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Negara</th>
        </tr>
        <tr>
          @php $index = 1; @endphp
          @foreach ($regional as $reg)
              <tr>
                <td>{{ $index++}} </td>
                <td>{{ $reg -> name}} </td>
                <td>{{ $reg -> negara}} </td>
                <td>
                  <a href={{ route('regional.edit', $reg->id)}} class="btn btn-sm btn-success">Edit</a>
                </td>
                <td>
                  <form action={{ route('regional.destroy', $reg->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                  </form>
                </td>
              </tr>
          @endforeach
        </tr>
      </table>
      <a href={{ route('regional.create') }}>
        <button>Create Data</button>
      </a> 
</body>
</html>