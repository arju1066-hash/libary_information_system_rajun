<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'code_book' => 'BK001',
                'isbn_book' => '978-3-16-148410-0',
                'title_book' => 'The Great Gatsby',
                'author_book' => 'F. Scott Fitzgerald',
                'publisher_book' => 'Scribner',
                'published_year' => 1926,
                'description_book' => 'A novel set in the Roaring Twenties, exploring themes of wealth, love, and the American Dream.',
            ],
            [
                'code_book' => 'BK002',
                'isbn_book' => '978-3-16-148410-0',
                'title_book' => 'The Great Witcher',
                'author_book' => 'F. Scott Fitzgerald',
                'publisher_book' => 'Scribner',
                'published_year' => 1925,
                'description_book' => 'A novel set in the Roaring Twenties, exploring themes of wealth, love, and the American Dream.',
            ],
            [
                'code_book' => 'BK003',
                'isbn_book' => '978-3-16-148410-0',
                'title_book' => 'The Great Tester',
                'author_book' => 'F. Scott Fitzgerald',
                'publisher_book' => 'Scribner',
                'published_year' => 1928,
                'description_book' => 'A novel set in the Roaring Twenties, exploring themes of wealth, love, and the American Dream.',
            ],

        ];

        $this->db->table('books')->insertBatch($data);
    }
}
