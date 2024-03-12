<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        // Category::create([
        //     'name'  =>  'Komputer',
        //     'slug'  =>  'komputer'
        // ]);

        // Category::create([
        //     'name'  =>  'Personal',
        //     'slug'  =>  'programing'
        // ]);

        // Category::create([
        //     'name'  =>  'Desain Grafiks',
        //     'slug'  =>  'desain-grafiks'
        // ]);

        // User::create([
        //     'name'          =>  'Dieki Satria',
        //     'username'      =>  'dieki-satria',
        //     'email'         =>  'diekisatria2@gmail.com',
        //     'password'      =>  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        // ]);

        // User::create([
        //     'name'          =>  'Riko Andrian',
        //     'username'      =>  'riko-andrian',
        //     'email'         =>  'rikoAandrian@gmail.com',
        //     'password'      =>  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        // ]);

        Post::create([
            'title'         => 'Judul Ke Lima',
            'slug'          =>  'judul-ke-lima',
            'excerpt'       =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laudantium aliquam quisquam',
            'body'          =>  '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt possimus autem harum praesentium debitis officia expedita molestiae error quos quidem, doloribus, cumque est accusamus magni repellendus eum cum aperiam ipsam.</p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p></p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p>',
            'category_id'   => 1,
            'user_id'       => 2
        ]);

        Post::create([
            'title'         => 'Judul Ke Enam',
            'slug'          =>  'judul-ke-enam',
            'excerpt'       =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laudantium aliquam quisquam',
            'body'          =>  '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt possimus autem harum praesentium debitis officia expedita molestiae error quos quidem, doloribus, cumque est accusamus magni repellendus eum cum aperiam ipsam.</p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p>',
            'category_id'   => 3,
            'user_id'       => 1
        ]);

        Post::create([
            'title'         => 'Judul Ke Tujuh',
            'slug'          =>  'judul-ke-tujuh',
            'excerpt'       =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laudantium aliquam quisquam',
            'body'          =>  '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt possimus autem harum praesentium debitis officia expedita molestiae error quos quidem, doloribus, cumque est accusamus magni repellendus eum cum aperiam ipsam.</p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p></p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p></p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p>',
            'category_id'   => 2,
            'user_id'       => 1
        ]);

        Post::create([
            'title'         => 'Judul Ke Delapan',
            'slug'          =>  'judul-ke-delapan',
            'excerpt'       =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laudantium aliquam quisquam',
            'body'          =>  '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt possimus autem harum praesentium debitis officia expedita molestiae error quos quidem, doloribus, cumque est accusamus magni repellendus eum cum aperiam ipsam.</p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p></p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p></p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p></p><p>Lorem ipsum corporis, recusandae voluptate optio reprehenderit voluptatum ipsa consequuntur exercitationem quasi quis.</p>',
            'category_id'   => 1,
            'user_id'       => 2
        ]);
    }
}
