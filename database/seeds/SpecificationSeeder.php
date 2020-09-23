<?php

use Illuminate\Database\Seeder;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specifications')->insert(
            [
                [
                    'product_type_id' => 1,
                    'name' => 'Hãng sản xuất',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Chủng loại',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Part Number',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Mầu sắc',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Bộ vi xử lý',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Chipset',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Bộ nhớ trong',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Số khe cắm',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Dung lượng tối đa',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'VGA',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Ổ cứng',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Ổ quang',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Card Reader',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Bảo mật, Công nghệ',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Màn hình',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Webcam',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Audio',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Giao tiếp mạng',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Giao tiếp không dây',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Cổng giao tiếp',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Pin',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Kích thước',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Cân nặng',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Hệ điều hành',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'product_type_id' => 1,
                    'name' => 'Phụ kiện đi kèm',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
            ]
        );
    }
}
