<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>
    <!-- Memuat Bootstrap dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- Membuat kartu dengan latar belakang biru -->
        <div class="card bg-primary mt-5">
            <div class="card-body text-white">
                <!-- Judul dengan tautan ke situs santrikoding -->
                <h3 class="text-center "><a href="https://santrikoding.com" class="text-white">Deden ahmad jamil</a></h3>
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One & Many To Many</h5>
                
                <!-- Membuat tabel dengan border dan striping -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-white">
                            <th>Nama User</th>
                            <th>Nomor Telepon</th>
                            <th>Roles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Melakukan looping untuk menampilkan data pengguna -->
                        @foreach($users as $user)
                        <tr>
                            <!-- Menampilkan nama pengguna -->
                            <td class="text-white">{{ $user->name }}</td>
                            <!-- Menampilkan nomor telepon pengguna dari relasi One to One -->
                            <td class="text-white">{{ $user->phone->phone }}</td>
                            <td class="text-white">
                                <!-- Melakukan looping untuk menampilkan peran (roles) pengguna dari relasi Many to Many -->
                                @foreach ($user->roles()->get() as $role)
                                <!-- Menampilkan setiap role dalam bentuk tombol -->
                                <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
