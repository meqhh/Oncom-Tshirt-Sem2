<form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
    @csrf
    <div class="bg-cover bg-center bg-black h-56 p-4" style="background-image: url('{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : 'https://via.placeholder.com/150' }}')">
    <div class="flex justify-end">
        <input type="file" name="profile_photo" id="profile_photo" class="hidden" onchange="this.form.submit()">
        <label for="profile_photo" class="bg-white text-gray-700 font-bold py-2 px-4 rounded-full opacity-75 hover:opacity-100 cursor-pointer">Edit</label>
    </div>
</div>
<img class="w-11 h-15 rounded-full mx-auto -mt-1 border-4 border-white" src="{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : 'https://via.placeholder.com/150' }}" alt="Profile Picture">
