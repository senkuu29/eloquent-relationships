<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>
    
    <!-- Bootstrap CSS untuk tampilan yang lebih baik -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"> <!-- CSS tambahan untuk styling -->
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body text-center">
                
                <!-- Gambar profil pengguna -->
                <img src="{{ asset('images/fotoSaya.jpg') }}" alt="User Image" class="img-fluid rounded-circle mb-3" width="150">
                
                <!-- Nama pengguna dengan link ke website -->
                <h3><a href="https://santrikoding.com" class="text-warning text-decoration-none fw-bold">Deden Ahmad Jamil</a></h3>
                
                <!-- Judul halaman -->
                <h5 class="text-secondary">Laravel Eloquent Relationship : One To One & Many To Many</h5>
                
                <div class="table-responsive mt-4">
                    <!-- Tabel untuk menampilkan data pengguna, nomor telepon, dan peran -->
                    <table class="table table-bordered table-striped text-center">
                        <thead class="text-white">
                            <tr>
                                <th>Nama User</th>
                                <th>Nomor Telepon</th>
                                <th>Roles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Looping melalui daftar pengguna -->
                            @foreach($users as $user)
                            <tr>
                                <!-- Menampilkan nama pengguna -->
                                <td class="fw-bold">{{ $user->name }}</td>
                                
                                <!-- Menampilkan nomor telepon pengguna -->
                                <td>{{ $user->phone->phone }}</td>
                                
                                <!-- Menampilkan peran pengguna -->
                                <td>
                                    @foreach ($user->roles()->get() as $role)
                                    <span class="badge">{{ $role->name }}</span>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
