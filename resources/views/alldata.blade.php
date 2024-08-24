<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-5xl text-center underline font-bold my-4">All Value </h1>

        @foreach($data as $value)

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
              <tr class="bg-gray-800 text-white">
                <th class="py-2 px-4 text-left">Name</th>
                <th class="py-2 px-4 text-left">Email</th>
                <th class="py-2 px-4 text-left">Phone</th>
                <th class="py-2 px-4 text-left">Date Of Birth</th>
                <th class="py-2 px-4 text-left">Semister</th>
                <th class="py-2 px-4 text-left">Enrollment Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b">
                <td class="py-2 px-4">{{$value->name}}</td>
                <td class="py-2 px-4">{{$value->email}}</td>
                <td class="py-2 px-4">{{$value->phone}}</td>
                <td class="py-2 px-4">{{$value->date}}</td>
                <td class="py-2 px-4">{{$value->semister}}</td>
                <td class="py-2 px-4">
                  <span class="{{ $value->status == 1 ? 'text-green-700' : 'text-red-700' }}">
                      {{ $value->status == 1 ? "Enrollment" : "Not Enrollment" }}
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="my-5">
          <a href="{{route('student.edit', $value->id )}}" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600 cursor-pointer">Edit</a>
          <a href="{{route('student.delete', $value->id )}}" method="POST" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600 ml-2 cursor-pointer">Delete</a>
          </div>
        </div>
    
    @endforeach

</body>
</html>