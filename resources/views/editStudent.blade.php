<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Update Student</h2>

        <form action="{{route('student.update')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <!-- Student Name -->
            <div class="mb-4">
                <label for="student-name" class="block text-sm font-medium text-gray-700">Student Name</label>
                <input type="text" id="student-name" value="{{$data->name }}" name="student_name" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" value="{{$data->email }}" id="email" name="email" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Phone Number -->
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" value="{{$data->phone }}" id="phone" name="phone" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Date of Birth -->
            <div class="mb-4">
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" value="{{$data->date }}" id="dob" name="dob" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

                        <!-- Enrollment Status -->
            <div class="mb-4">
    <label for="semister" class="block text-sm font-medium text-gray-700">Semester</label>
    <select id="semister" name="semister" required
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="" disabled>Select status</option>
        <option value="semister 1" {{ $data->semister == 'semister 1' ? 'selected' : '' }}>Semester 1</option>
        <option value="semister 2" {{ $data->semister == 'semister 2' ? 'selected' : '' }}>Semester 2</option>
        <option value="semister 3" {{ $data->semister == 'semister 3' ? 'selected' : '' }}>Semester 3</option>
        <option value="semister 4" {{ $data->semister == 'semister 4' ? 'selected' : '' }}>Semester 4</option>
    </select>
</div>

            <!-- Enrollment Status -->
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Enrollment Status</label>
                <select id="status" name="status" required 
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Select status</option>
                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Enrolled</option>
                    <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Not Enrolled</option>
                </select>
            </div>
            

            <!-- Submit Button -->
            <div class="flex items-center justify-end">
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md shadow-sm text-white text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update Student
                </button>
            </div>
        </form>
    </div>

</body>
</html>