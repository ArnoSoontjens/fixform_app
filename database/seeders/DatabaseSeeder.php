<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Premium Leather Sofa',
                'description' => 'Luxurious sofa made with high-quality leather for ultimate comfort.',
                'price' => 899.99,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffurnitureinstore.co.uk%2Fimages%2Ffurnitureinstore-islington-mustard-leather-2-seater-sofa-p15022-39177_image.jpg&f=1&nofb=1&ipt=500a7c5f058fcb475b88da4b61607858f4fcdbba80dcf6bb945c9ac4a7a40427&ipo=images',
            ],
            [
                'name' => 'Smartphone X Pro',
                'description' => 'The latest smartphone with cutting-edge technology and powerful features.',
                'price' => 799.00,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fhoffmann-electric.com%2Fmedia%2Fpage%2F143%2F1501761044.8531206.png&f=1&nofb=1&ipt=2562fa499e09989d4ebe92339fa670dca7948573739413c454fe861193bd1995&ipo=images',
            ],
            [
                'name' => 'Vintage Coffee Table',
                'description' => 'Elegant coffee table with a vintage design, perfect for any living room.',
                'price' => 129.99,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.design-mkt.com%2F465259%2Fvintage-scandinavian-rectangular-teak-coffee-table-1960s.jpg&f=1&nofb=1&ipt=6c9a34828d7ef79ac06359164428a9fe28baccf792dabb109169dc34fe5f33bb&ipo=images',
            ],
            [
                'name' => 'Fitness Tracker 2024',
                'description' => 'Stay fit and healthy with this advanced fitness tracker that monitors your activities.',
                'price' => 49.99,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.herstylecode.com%2Fwp-content%2Fuploads%2F2016%2F11%2Fbest-fitness-trackers-3.jpg&f=1&nofb=1&ipt=f8c4cc6fc5fd10cc7a7070f6c11a9ae802a55a698304a73789362c1e3f764a38&ipo=images',
            ],
            [
                'name' => 'Professional Camera Kit',
                'description' => 'Capture stunning moments with this high-end camera kit designed for professional photographers.',
                'price' => 1499.99,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages-na.ssl-images-amazon.com%2Fimages%2FI%2F71jAaPeNpeL.jpg&f=1&nofb=1&ipt=64dfe5fabde4af961388e5e4541b01d2f4443cd6a5febea8fff33adeb2493013&ipo=images',
            ],
            [
                'name' => 'Gourmet Chef\'s Knife',
                'description' => 'Precision-crafted chef\'s knife for culinary enthusiasts who demand the best.',
                'price' => 79.95,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.williams-sonoma.com.au%2Fcore%2Fmedia%2Fmedia.nl%3Fid%3D38635497%26c%3D3572911%26h%3D2a46262e8148465ec6e6%26resizeid%3D10%26resizeh%3D1200%26resizew%3D1200&f=1&nofb=1&ipt=9ad23dd0cb99b1d3965ac1211a3133ee24c53c3b538a91c4116f4084b9048606&ipo=images',
            ],
            [
                'name' => 'Ultra HD Smart TV',
                'description' => 'Immerse yourself in entertainment with this ultra-high-definition smart TV.',
                'price' => 1099.99,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F42bd7af9-778b-4230-ba72-0c9190fc2b2d_8.f32f9b5a271d0921e874b2c94e83a245.jpeg&f=1&nofb=1&ipt=8affabae806b841dcb84eb8be5f44eddc41b6d301f299f354843726c788b7e10&ipo=images',
            ],
            [
                'name' => 'Designer Sunglasses',
                'description' => 'Stay stylish with these designer sunglasses that offer both fashion and UV protection.',
                'price' => 149.50,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fc3b46a50-921e-428f-8e43-8cf4b682fc48_1.23e961d866203bcad1de37e3c33ff252.jpeg&f=1&nofb=1&ipt=a88dd571b156889a3bedbdbf95bbfdb2ec18006e9357a841b675f5b5d00d394f&ipo=images',
            ],
            [
                'name' => 'Digital Air Fryer',
                'description' => 'Cook healthier meals with this digital air fryer that uses less oil for crispy results.',
                'price' => 129.99,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpisces.bbystatic.com%2Fimage2%2FBestBuy_US%2Fimages%2Fproducts%2F6351%2F6351671cv13d.jpg&f=1&nofb=1&ipt=66b1760b5a907609cc6e12d5e06e65429e41b1ec3664702e21b5b2b2dadd6b59&ipo=images',
            ],
            [
                'name' => 'Wireless Noise-Canceling Headphones',
                'description' => 'Immerse yourself in music with these wireless headphones featuring advanced noise-canceling technology.',
                'price' => 199.00,
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.bhphotovideo.com%2Fimages%2Fimages2000x2000%2Fsony_wh1000xm2_b_1000x_wireless_noise_canceling_headphones_1361028.jpg&f=1&nofb=1&ipt=7ab8e918030517082d07ec54d9322b406605a5a9e456db1cb38137361c889764&ipo=images',
            ],
        ];

        print "inserting products";
        
        DB::table('products')->insert($products);
    }
}
