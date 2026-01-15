<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Admin</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">


<div class="flex min-h-screen">


<!-- Sidebar -->
<aside class="w-64 bg-gray-900 text-white flex flex-col">
<div class="p-6 text-center border-b border-gray-700">
<h2 class="text-2xl font-bold text-emerald-400">PropertiKu</h2>
<p class="text-xs text-gray-400">Admin Panel</p>
</div>


<nav class="flex-1 p-4 space-y-2">
<a href="#" class="block px-4 py-2 rounded bg-emerald-600">Dashboard</a>
<a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Data Properti</a>
<a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Tambah Properti</a>
<a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Pengaturan</a>
</nav>


<div class="p-4 border-t border-gray-700">
<a href="#" class="block text-center bg-red-600 hover:bg-red-700 py-2 rounded">Logout</a>
</div>
</aside>


<!-- Main Content -->
<main class="flex-1 p-8">
<h1 class="text-3xl font-bold mb-6">Dashboard</h1>


<!-- Cards -->
<div class="grid md:grid-cols-3 gap-6 mb-8">
<div class="bg-white p-6 rounded-xl shadow">
<h3 class="text-sm text-gray-500">Total Properti</h3>
<p class="text-3xl font-bold mt-2">24</p>
</div>
<div class="bg-white p-6 rounded-xl shadow">
<h3 class="text-sm text-gray-500">Terjual</h3>
<p class="text-3xl font-bold mt-2">8</p>
</div>
<div class="bg-white p-6 rounded-xl shadow">
<h3 class="text-sm text-gray-500">Tersedia</h3>
<p class="text-3xl font-bold mt-2">16</p>
</div>
</div>


<!-- Table -->
<div class="bg-white rounded-xl shadow overflow-hidden">
<table class="w-full text-sm">
<thead class="bg-gray-100">
<tr>
<th class="p-4 text-left">Nama Properti</th>
<th>Lokasi</th>
<th>Harga</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<tr class="border-t">
<td class="p-4">Rumah Minimalis</td>
<td>Jakarta Selatan</td>
<td>Rp 850.000.000</td>
<td class="space-x-2">
<button class="text-blue-600 hover:underline">Edit</button>
<button class="text-red-600 hover:underline">Hapus</button>
</td>
</tr>
</tbody>
</table>
</div>


</main>


</div>


</body>
</html>