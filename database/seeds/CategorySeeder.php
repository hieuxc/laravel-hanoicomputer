<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'parent_id' => 0,
                    'name' => 'laptop máy tính xách tay',
                    'slug' => Str::slug('laptop máy tính xách tay'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'máy tính chơi game',
                    'slug' => Str::slug('máy tính chơi game'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'máy chủ workstations',
                    'slug' => Str::slug('máy chủ workstations'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'máy tính văn phòng',
                    'slug' => Str::slug('máy tính văn phòng'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'thiết bị văn phòng',
                    'slug' => Str::slug('thiết bị văn phòng'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'linh kiện máy tính',
                    'slug' => Str::slug('linh kiện máy tính'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'màn hình máy tính',
                    'slug' => Str::slug('màn hình máy tính'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'phím chuột gaming gear',
                    'slug' => Str::slug('phím chuột gaming gear'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'tản nhiệt cooling',
                    'slug' => Str::slug('tản nhiệt cooling'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'tivi điện lạnh',
                    'slug' => Str::slug('tivi điện lạnh'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'camera thiết bị an ninh',
                    'slug' => Str::slug('camera thiết bị an ninh'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'thiết bị nghe nhìn',
                    'slug' => Str::slug('thiết bị nghe nhìn'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'thiết bị siêu thị cửa hàng',
                    'slug' => Str::slug('thiết bị siêu thị cửa hàng'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'tb hội nghị trường học',
                    'slug' => Str::slug('tb hội nghị trường học'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'thiết bị thông mình',
                    'slug' => Str::slug('thiết bị thông mình'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'thiết bị lưu trữ',
                    'slug' => Str::slug('thiết bị lưu trữ'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'thiết bị mang',
                    'slug' => Str::slug('thiết bị mang'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' => 0,
                    'name' => 'phụ kiện',
                    'slug' => Str::slug('phụ kiện'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Laptop Asus',
                    'slug' => Str::slug('Laptop Asus'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Laptop Dell',
                    'slug' => Str::slug('Laptop Dell'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Laptop HP',
                    'slug' => Str::slug('Laptop HP'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Laptop Lenovo',
                    'slug' => Str::slug('Laptop Lenovo'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Laptop Acer',
                    'slug' => Str::slug('Laptop Acer'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Laptop Apple',
                    'slug' => Str::slug('Laptop Apple'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Laptop MSI',
                    'slug' => Str::slug('Laptop MSI'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Laptop LG',
                    'slug' => Str::slug('Laptop LG'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Laptop VGS Imperium',
                    'slug' => Str::slug('Laptop VGS Imperium'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>1,
                    'name' => 'Microsoft Surface',
                    'slug' => Str::slug('Microsoft Surface'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>19,
                    'name' => 'Laptop Asus VivoBook',
                    'slug' => Str::slug('Laptop Asus VivoBook'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>19,
                    'name' => 'Laptop Asus ZenBook',
                    'slug' => Str::slug('Laptop Asus ZenBook'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>19,
                    'name' => 'Laptop Asus ExpertBook',
                    'slug' => Str::slug('Laptop Asus ExpertBook'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>19,
                    'name' => 'Laptop Asus ProArt',
                    'slug' => Str::slug('Laptop Asus ProArt'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>20,
                    'name' => 'Laptop Dell Inspiron',
                    'slug' => Str::slug('Laptop Dell Inspiron'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>20,
                    'name' => 'Laptop Dell Vostro',
                    'slug' => Str::slug('Laptop Dell Vostro'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>20,
                    'name' => 'Laptop Dell Latitude',
                    'slug' => Str::slug('Laptop Dell Latitude'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>20,
                    'name' => 'Laptop Dell XPS',
                    'slug' => Str::slug('Laptop Dell XPS'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>21,
                    'name' => 'Laptop HP Pavilion',
                    'slug' => Str::slug('Laptop HP Pavilion'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>21,
                    'name' => 'Laptop HP Probook',
                    'slug' => Str::slug('Laptop HP Probook'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>21,
                    'name' => 'Laptop HP Elitebook',
                    'slug' => Str::slug('Laptop HP Elitebook'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>21,
                    'name' => 'Laptop HP Envy',
                    'slug' => Str::slug('Laptop HP Envy'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>22,
                    'name' => 'Laptop Lenovo Ideapad',
                    'slug' => Str::slug('Laptop Lenovo Ideapad'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>22,
                    'name' => 'Laptop Lenovo ThinkPad',
                    'slug' => Str::slug('Laptop Lenovo ThinkPad'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>22,
                    'name' => 'Laptop Lenovo ThinkBook',
                    'slug' => Str::slug('Laptop Lenovo ThinkBook'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>22,
                    'name' => 'Laptop Lenovo Legion',
                    'slug' => Str::slug('Laptop Lenovo Legion'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>23,
                    'name' => 'Laptop Acer Aspire',
                    'slug' => Str::slug('Laptop Acer Aspire'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>23,
                    'name' => 'Laptop Acer Swift',
                    'slug' => Str::slug('Laptop Acer Swift'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>23,
                    'name' => 'Laptop Acer Nitro',
                    'slug' => Str::slug('Laptop Acer Nitro'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>23,
                    'name' => 'Laptop Acer Predator',
                    'slug' => Str::slug('Laptop Acer Predator'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>24,
                    'name' => 'Laptop Apple Macbook Air',
                    'slug' => Str::slug('Laptop Apple Macbook Air'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>24,
                    'name' => 'Laptop Apple Macbook Pro',
                    'slug' => Str::slug('Laptop Apple Macbook Pro'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>25,
                    'name' => 'Laptop MSI GE Series',
                    'slug' => Str::slug('Laptop MSI GE Series'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>25,
                    'name' => 'Laptop MSI GS Series',
                    'slug' => Str::slug('Laptop MSI GS Series'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>25,
                    'name' => 'Laptop MSI GP Series',
                    'slug' => Str::slug('Laptop MSI GP Series'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>25,
                    'name' => 'Laptop MSI GL Series',
                    'slug' => Str::slug('Laptop MSI GL Series'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>26,
                    'name' => 'Laptop LG Gram',
                    'slug' => Str::slug('Laptop LG Gram'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>28,
                    'name' => 'Surface Pro',
                    'slug' => Str::slug('Surface Pro'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>28,
                    'name' => 'Surface Go',
                    'slug' => Str::slug('Surface Go'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>28,
                    'name' => 'Surface Laptop',
                    'slug' => Str::slug('Surface Laptop'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>28,
                    'name' => 'Linh Phụ Kiện Surface',
                    'slug' => Str::slug('Linh Phụ Kiện Surface'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>7,
                    'name' => 'Màn Hình Asus',
                    'slug' => Str::slug('Màn Hình Asus'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>7,
                    'name' => 'Màn Hình Dell',
                    'slug' => Str::slug('Màn Hình Dell'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>7,
                    'name' => 'Màn Hình LG',
                    'slug' => Str::slug('Màn Hình LG'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>18,
                    'name' => 'Dây Cáp Các Loại',
                    'slug' => Str::slug('Dây Cáp Các Loại'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>18,
                    'name' => 'Thiết bị chuyển đổi',
                    'slug' => Str::slug('Thiết bị chuyển đổi'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>18,
                    'name' => 'Bộ chia tín hiệu',
                    'slug' => Str::slug('Bộ chia tín hiệu'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>18,
                    'name' => 'Linh Kiện Laptop',
                    'slug' => Str::slug('Linh Kiện Laptop'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>18,
                    'name' => 'Phụ kiện khác',
                    'slug' => Str::slug('Phụ kiện khác'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
                [
                    'parent_id' =>18,
                    'name' => 'Phụ Kiện Laptop',
                    'slug' => Str::slug('Phụ Kiện Laptop'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ],
            ]
        );
    }
}
