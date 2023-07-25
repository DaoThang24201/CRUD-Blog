<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Blog\Models\Auth;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Brooklyn Simmons',
                'avatar'=>'6.png',
                'job'=>'Medical Assistant',
                'description'=>'Etiam vitae leo et diam pellentesque porta. Sed eleifend ultricies risus, vel rutrum erat commodo ut. Praesent finibus congue euismod. Nullam scelerisque massa vel augue placerat, a tempor sem egestas. Curabitur placerat finibus lacus.',
            ],
            [
                'name'=>'Artemis',
                'avatar'=>'7.png',
                'job'=>'Doctor',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ipsum lorem, iaculis ac sodales eu, laoreet in justo. Nunc facilisis purus in consequat fringilla. Fusce in elit augue. Quisque sed velit mi.',
            ],
            [
                'name'=>'Stephen',
                'avatar'=>'1.png',
                'job'=>'Advertising executive',
                'description'=>'Fusce euismod sodales purus, eget commodo neque tempus at. Sed sagittis dui gravida elit sollicitudin sodales.',
            ],
            [
                'name'=>'Kelsey',
                'avatar'=>'2.png',
                'job'=>'Baggage handler',
                'description'=>'Aliquam ut mi rutrum, suscipit risus vel, malesuada nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam gravida mauris a eros placerat tempus.',
            ],
            [
                'name'=>'Latifah',
                'avatar'=>'3.png',
                'job'=>'Businessman',
                'description'=>'Duis aliquet eleifend feugiat. Sed posuere, arcu eu fringilla gravida, mi magna viverra massa, sed finibus ligula nibh vel dui. Donec dignissim dapibus ipsum, ac fringilla felis imperdiet quis. Phasellus eget vestibulum nibh.',
            ],
            [
                'name'=>'Winifred',
                'avatar'=>'4.png',
                'job'=>'Fashion designer',
                'description'=>'Phasellus fringilla placerat nulla nec fringilla. Pellentesque sed elementum nulla. Maecenas varius, massa et dignissim tincidunt, lectus urna varius ex, in hendrerit enim dui a quam. Praesent vitae purus tempor, rutrum felis nec, commodo ipsum.',
            ],
            [
                'name'=>'Athelstan',
                'avatar'=>'5.png',
                'job'=>'Chef',
                'description'=>'Morbi tincidunt, metus et faucibus tincidunt, elit mi convallis risus, vitae imperdiet enim lectus id massa.',
            ],
        ];

        Auth::insert($data);
    }
}
