@extends('layout.main')

@section('title', 'Source')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2 class="mt-3 mb-3">Catatan Pengembangan</h2>
                <table class="table ">
                    <thead class="table-danger">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tools</th>
                            <th scope="col">Fitur Laravel</th>
                            <th scope="col">Versi</th>
                            <th scope="col">Fungsi</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                           <th>1</th> 
                           <th>Laravel</th> 
                           <th>-</th> 
                           <th>8.44.0</th> 
                           <th>framework yang digunakan.</th> 
                         </tr>
                         <tr>
                           <th>2</th> 
                           <th>PHP</th> 
                           <th>-</th> 
                           <th>7.3.28</th> 
                           <th>server requirements Laravel.</th> 
                         </tr>
                         <tr>
                           <th>3</th> 
                           <th>Composer</th> 
                           <th>-</th> 
                           <th>2.0.13</th> 
                           <th>membantu penginstalan framework dan library Laravel.</th> 
                         </tr>
                         <tr>
                           <th>4</th> 
                           <th>Bootstrap</th> 
                           <th>-</th> 
                           <th>-</th> 
                           <th>membantu pengembangan tampilan frontend.</th> 
                         </tr>
                         <tr>
                           <th>5</th> 
                           <th>-</th> 
                           <th>Artisan</th> 
                           <th>-</th> 
                           <th>sekretaris pribadi di framework Laravel.</th> 
                         </tr>
                         <tr>
                           <th>6</th> 
                           <th>-</th> 
                           <th>Controller Statis(PageController)</th> 
                           <th>-</th> 
                           <th>mengatur tampilan web statis dengan memanggil file layoutnya.</th> 
                         </tr>
                         <tr>
                           <th>7</th> 
                           <th>-</th> 
                           <th>Controller Dinamis (StudentsController)</th> 
                           <th>-</th> 
                           <th>mengatur tampilan web dinamis dengan mengambil file layoutnya.</th> 
                         </tr>
                         <tr>
                           <th>8</th> 
                           <th>-</th> 
                           <th>Layout Engine (main.blade.php)</th> 
                           <th>-</th> 
                           <th>mengatur tatanan web menjadi lebih mudah.</th> 
                         </tr>
                         <tr>
                           <th>9</th> 
                           <th>-</th> 
                           <th>Eloquent ORM (Model)</th> 
                           <th>-</th> 
                           <th>memudahkan untuk menampilkan data yang diambil dari database.</th> 
                         </tr>
                         <tr>
                           <th>10</th> 
                           <th>MYSQL</th> 
                           <th>-</th> 
                           <th>Ver 15.1 Distrib 10.4.18-MariaDB</th> 
                           <th>sebagai database lokal.</th> 
                         </tr>
                         <tr>
                           <th>11</th> 
                           <th></th> 
                           <th>Validate | CSFR</th> 
                           <th></th> 
                           <th>pengaman untuk form yang menambah data ke database.</th> 
                         </tr>
                         <tr>
                           <th>12</th> 
                           <th></th> 
                           <th>Blade(old)</th> 
                           <th></th> 
                           <th>inputan lama tidak hilang saat pesan error.</th> 
                         </tr>
                         <tr>
                           <th>13</th> 
                           <th></th> 
                           <th>Blade(error)</th> 
                           <th></th> 
                           <th>menampilkan error saat kondisi fill null.</th> 
                         </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection