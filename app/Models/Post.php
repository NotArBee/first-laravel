<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'article_title' => 'Judul Artikel 1',
                'author' => 'Muhammad Dani Arya Putra',
                'date' => '09 Agustus 2024',
                'article_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatum eos unde natus? A, assumenda doloribus sit tenetur facilis eum repudiandae quia? Excepturi sint vero ipsa obcaecati! Libero eveniet numquam impedit soluta laborum ratione molestiae, placeat esse quas. Neque, qui! Aut laboriosam eos atque corporis architecto ducimus, vero mollitia quisquam accusamus impedit delectus vel, placeat molestias, earum reiciendis! Ea quisquam quidem illo fugiat nisi inventore ad sit, ipsam animi ipsum delectus doloribus alias veritatis! At culpa perferendis ut, voluptas, dicta officia non cupiditate perspiciatis provident eveniet laborum quis pariatur libero hic molestiae, nam quas veritatis voluptates modi. Nihil ad recusandae maiores qui ducimus impedit nobis perferendis non soluta ut! Assumenda aspernatur magni rem sunt sit explicabo accusamus commodi animi voluptas tenetur reprehenderit quibusdam deserunt repellendus quas pariatur suscipit eum doloribus sed maxime necessitatibus asperiores tempore ea, amet modi? Consequuntur distinctio obcaecati expedita itaque eligendi voluptatem molestias deserunt magnam rem repellat iste inventore, nam quasi suscipit provident velit? Officiis voluptatem, assumenda sequi debitis dicta dolore explicabo et maiores suscipit tempore. Amet, iure cupiditate. Velit, provident id minima incidunt veniam nobis quis voluptates in quasi aspernatur maxime, unde consectetur quam sint dicta debitis, ipsam nihil sunt aliquid rerum doloremque modi? Fugit, recusandae!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'article_title' => 'Judul Artikel 2',
                'author' => 'Banyuwangi Bin Geprek',
                'date' => '10 Agustus 2024',
                'article_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatum eos unde natus? A, assumenda doloribus sit tenetur facilis eum repudiandae quia? Excepturi sint vero ipsa obcaecati! Libero eveniet numquam impedit soluta laborum ratione molestiae, placeat esse quas. Neque, qui! Aut laboriosam eos atque corporis architecto ducimus, vero mollitia quisquam accusamus impedit delectus vel, placeat molestias, earum reiciendis! Ea quisquam quidem illo fugiat nisi inventore ad sit, ipsam animi ipsum delectus doloribus alias veritatis! At culpa perferendis ut, voluptas, dicta officia non cupiditate perspiciatis provident eveniet laborum quis pariatur libero hic molestiae, nam quas veritatis voluptates modi. Nihil ad recusandae maiores qui ducimus impedit nobis perferendis non soluta ut! Assumenda aspernatur magni rem sunt sit explicabo accusamus commodi animi voluptas tenetur reprehenderit quibusdam deserunt repellendus quas pariatur suscipit eum doloribus sed maxime necessitatibus asperiores tempore ea, amet modi? Consequuntur distinctio obcaecati expedita itaque eligendi voluptatem molestias deserunt magnam rem repellat iste inventore, nam quasi suscipit provident velit? Officiis voluptatem, assumenda sequi debitis dicta dolore explicabo et maiores suscipit tempore. Amet, iure cupiditate. Velit, provident id minima incidunt veniam nobis quis voluptates in quasi aspernatur maxime, unde consectetur quam sint dicta debitis, ipsam nihil sunt aliquid rerum doloremque modi? Fugit, recusandae!'
            ],
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
