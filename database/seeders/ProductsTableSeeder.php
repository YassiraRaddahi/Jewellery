<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([[
            'name' => 'Armband met glitterrand',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu lectus, ullamcorper quis facilisis a, pellentesque sed sapien.
             Maecenas eu mauris at arcu posuere bibendum at in augue. Pellentesque suscipit tristique ante, quis ornare lorem iaculis non. 
             Fusce placerat sollicitudin dapibus. Cras a enim interdum, ornare velit sed, cursus felis. Praesent eleifend eros quis mollis placerat. 
             Praesent bibendum dui sed sem molestie, ut commodo nisl ultricies. Donec et lorem felis. Proin quis tincidunt sem, ac luctus mi. 
             Nullam semper mauris id libero aliquam, ac ullamcorper metus eleifend. Aenean in tortor lacinia massa placerat auctor. Sed fermentum augue non quam egestas, at tempor elit varius. 
             Duis sagittis sagittis purus a ultricies. Vestibulum pellentesque, quam ut dignissim varius, nulla risus varius odio, id bibendum sapien magna non neque. 
             Duis sed sollicitudin orci, vel tincidunt lacus. Quisque sed nisl a turpis posuere commodo eget sed odio.',
            'image' => 'images/bracelets/armband_met_glitterrand.jpg',
            'price' => 19.99,
            'stock' => 10,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ], 
        [
            'name' => 'Kleurenarmband',
            'description' => 'Sed lacus dolor, vestibulum vitae mauris nec, pulvinar imperdiet felis. Aenean sit amet libero iaculis, mattis augue nec, commodo tortor. 
            Vestibulum orci ante, blandit eget nisi ut, blandit aliquam orci. Nam orci neque, convallis ut justo at, feugiat tristique risus.
            Aenean vel nulla vitae turpis malesuada venenatis. Phasellus consequat laoreet nisl, sit amet sodales mauris sollicitudin ut.
            Ut dignissim metus turpis, et condimentum dui accumsan nec. Vivamus ligula augue, vehicula ac dolor at, lobortis vestibulum nunc.
            Vivamus pulvinar odio ac eros luctus posuere. Suspendisse efficitur ante non orci vestibulum, quis hendrerit nunc convallis.
            Cras dapibus cursus neque, eget dapibus metus dapibus a. Sed a rhoncus mi, at commodo urna. Donec quis luctus diam, a aliquet tellus. 
            Maecenas mattis dictum orci, a accumsan mi luctus id. Donec non nisi suscipit, convallis sem sed, maximus velit.',
            'image' => 'images/bracelets/kleurenarmband.jpg',
            'price' => 15.99,
            'stock' => 8,
            'on_sale' => true,
            'discount_factor' => 0.2, // 20% korting
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Laagjes armband met steentjes',
            'description' => 'Aliquam ornare erat non nisi posuere, suscipit placerat ante mollis. Nunc sit amet diam quis arcu scelerisque consectetur sed vel ligula.
             Nulla aliquam convallis lacus sed iaculis. Quisque sagittis felis eu tempus lobortis. Cras tristique odio ut est accumsan luctus.
             Nam tempor purus sed turpis laoreet posuere. Sed finibus dapibus urna, non porttitor felis pulvinar nec. Duis id leo condimentum, malesuada lorem quis, faucibus augue.
             Pellentesque vulputate faucibus tortor, et cursus purus ultrices nec. Vestibulum commodo blandit ipsum, vitae ullamcorper orci consectetur in.
             Nulla sed tortor interdum dui egestas pulvinar quis quis erat. Nam feugiat ex et magna posuere, non euismod libero interdum.
             Vestibulum at diam non magna porttitor gravida. Integer sed porttitor purus, eget hendrerit est. Sed vitae lacinia felis, sed porttitor libero. 
             Ut et augue a lectus ornare lobortis.',
            'image' => 'images/bracelets/laagjes_armband_steentjes.jpg',
            'price' => 10.99,
            'stock' => 9,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Sierlijke armband',
            'description' => 'Nullam tristique lobortis nisl, sit amet pulvinar urna tempor consectetur. Nam efficitur sed nisl in posuere.
            Aliquam ut nisi ornare, pulvinar urna malesuada, ullamcorper quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
            Donec ut suscipit orci. Sed condimentum ligula sit amet lorem ultricies, in egestas tellus luctus. Aenean ut odio vehicula, auctor quam sit amet, viverra dolor.
            Morbi scelerisque sollicitudin scelerisque. Nulla sodales sagittis augue id sollicitudin. Duis hendrerit maximus elit, ut commodo ligula egestas nec.
            Fusce rhoncus dictum scelerisque. Nullam ullamcorper sit amet mi ut bibendum. Pellentesque eu nibh nulla. Curabitur tempor tempus nisl vel tempus.
            In dictum, lorem ac tempor bibendum, dui tortor mattis lorem, at blandit purus nulla sit amet enim. Proin quis vulputate magna.',
            'image' => 'images/bracelets/sierlijke_armband_rotated.jpg',
            'price' => 19.99,
            'stock' => 0,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Dubble twisted oorbellen dik',
            'description' => 'Phasellus suscipit sapien at orci aliquet, at tincidunt nunc pharetra. Integer cursus mattis lorem, id ultricies leo pulvinar nec. 
            Ut a nibh vitae magna mollis condimentum. Sed vel feugiat lacus, quis elementum felis. Sed hendrerit nisi quis est ornare auctor. Cras ullamcorper in mi vel laoreet.
            Suspendisse fringilla at ipsum tincidunt tincidunt. Nulla at lacus nulla. Sed ullamcorper viverra interdum.
            Donec sed mauris vel lacus sodales fermentum pharetra eget metus. Duis consequat nisi ut eros mattis cursus. Cras mattis nec ipsum quis aliquet. 
            Morbi nec augue turpis. Mauris ullamcorper libero sit amet risus iaculis dictum.
            Proin faucibus, eros sit amet rutrum elementum, lectus leo blandit quam, nec imperdiet ante ligula in velit. Donec blandit facilisis imperdiet.',
            'image' => 'images/earrings/dubbel_twisted_oorbellen_dik.jpg',
            'price' => 22.99,
            'stock' => 5,
            'on_sale' => true,
            'discount_factor' => 0.2, // 20% korting
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Elegante oorbellen',
            'description' => 'Nulla convallis ac tellus ut blandit. Nulla nec lacus tristique, convallis purus luctus, consectetur risus. Nam porta justo ac hendrerit lacinia. 
            Nullam sit amet augue facilisis ligula suscipit tincidunt. Aliquam vel imperdiet arcu. In tincidunt tortor nec erat euismod, ut pellentesque mauris placerat. 
            Nunc lacinia sed nibh ac molestie. Nunc facilisis sapien eget dui cursus molestie.',
            'image' => 'images/earrings/elegante_oorbellen.jpg',
            'price' => 19.99,
            'stock' => 4,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Enkel twisted oorbellen',
            'description' => 'Fusce vulputate, eros ac tristique tincidunt, massa velit cursus erat, ut finibus massa leo nec ante. 
            Proin dignissim ante at sem malesuada, sit amet porta ipsum aliquam. Vestibulum fermentum placerat urna ut mollis.
            Pellentesque fermentum justo est, sit amet elementum lectus fringilla placerat. Mauris nec nunc vitae mi euismod porta quis eget dolor.
            Phasellus et risus cursus, porta mi at, accumsan magna. Morbi pellentesque lobortis quam, sit amet molestie nisl ultricies vitae.',
            'image' => 'images/earrings/enkel_twisted_oorbellen.jpg',
            'price' => 24.99,
            'stock' => 2,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Harten oorbellen',
            'description' => 'Nunc quis neque eros. Nunc euismod a neque non auctor. Ut euismod urna sit amet odio pellentesque, sed consectetur tellus posuere.
             Ut hendrerit tristique eleifend. Mauris scelerisque rutrum dolor. Aenean enim mi, hendrerit vel tellus et, tincidunt vulputate sem. 
             Integer sapien nulla, auctor a nibh sit amet, iaculis pellentesque massa.',
            'image' => 'images/earrings/harten_oorbellen.jpg',
            'price' => 14.99,
            'stock' => 10,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Sierlijke oorbellen',
            'description' => 'Donec placerat bibendum lorem a sollicitudin. Aenean dignissim lectus a lorem pellentesque, sit amet consequat mi viverra. 
            Donec ultrices felis fringilla, convallis nisl sed, pretium est. Phasellus aliquam semper mi ac porttitor. Ut non quam mauris.
            Praesent nibh erat, tincidunt iaculis varius feugiat, luctus ac augue. Aliquam efficitur semper accumsan. Sed accumsan erat non efficitur sollicitudin. 
            Nulla porttitor neque nec posuere mollis. Etiam mattis, lacus vitae tempus consectetur, leo sapien placerat dui, id ultricies nunc eros rhoncus justo.
            Aenean eget posuere enim.',
            'image' => 'images/earrings/sierlijke_oorbellen.jpg',
            'price' => 12.99,
            'stock' => 8,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Spiraal oorbellen met steen',
            'description' => 'Morbi interdum tincidunt ante, ut dictum augue vehicula ut. Nam eu cursus enim. 
             Curabitur pellentesque, risus vitae elementum blandit, diam arcu suscipit felis, eget porttitor eros justo in ante.
             Mauris mollis cursus neque, et congue ante congue nec. Ut eget lectus diam. Mauris et risus ut magna dictum lacinia. Donec in elit a tortor tempor posuere id sed dui. 
             Ut vitae elementum metus, nec cursus urna. Fusce luctus augue iaculis orci tempor maximus. 
             Integer vulputate, urna a lobortis vulputate, arcu elit luctus nisl, id ultrices orci justo eget libero.
             Quisque fermentum felis in ipsum aliquet, ut laoreet orci ullamcorper. Phasellus at condimentum tortor. Nunc sit amet odio vel ipsum hendrerit eleifend.',
            'image' => 'images/earrings/spiraal_oorbellen_met_steen.jpg',
            'price' => 19.99,
            'stock' => 6,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bloemenketting',
            'description' => 'Suspendisse rhoncus fermentum ante, vitae dapibus neque ornare vel. Mauris tincidunt ut felis at luctus. Curabitur aliquam a quam nec luctus.
            Sed eleifend vulputate massa, ac posuere dolor hendrerit quis. Vivamus tempor enim at tellus tincidunt, quis malesuada leo porta.
            Donec faucibus leo sit amet tempor porttitor. Vivamus vitae varius purus, sit amet ultricies lacus. Mauris a ipsum nec orci dictum interdum.
            Duis gravida ut eros ut aliquam. Donec sit amet interdum ex. In eu sollicitudin est. Vestibulum elementum auctor nisi, quis congue arcu elementum scelerisque. 
            Sed vitae semper ante, eget dapibus dolor. Cras mattis libero sit amet vehicula iaculis. Vestibulum urna nunc, ultrices vel imperdiet sed, sodales eget purus.',
            'image' => 'images/necklaces/bloemenketting.jpg',
            'price' => 22.99,
            'stock' => 10,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => "Kleurenketting met kleurenarmband",
            'description' => "Etiam eget velit scelerisque, tristique ante ut, rutrum nibh. Donec ut congue libero. Nullam sit amet odio nisi. 
            Integer sit amet rutrum tortor, ac egestas mi. Etiam ac neque at mi aliquam tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus.
            Integer quam lacus, pretium in ultricies vitae, viverra vitae dui. Phasellus arcu elit, consequat id tincidunt ac, vestibulum nec quam. Suspendisse potenti.
            Aenean vulputate ligula congue, imperdiet velit ac, sagittis dui. Integer nec lectus dui. Integer ut neque fermentum, fringilla est in, semper diam.
            Fusce odio lorem, suscipit id ante ac, rutrum commodo odio. Aliquam tempor ligula risus, quis pharetra arcu porta placerat. 
            Etiam sagittis quam placerat justo mollis tincidunt. Nulla pulvinar at mauris ut pulvinar.",
            "image" => "images/necklaces/kleurenketting_met_kleurenarmband.jpg",
            "price" => 24.99,
            "stock" => 5,
            "on_sale" => false,
            "discount_factor" => null,
            "category_id" => 3,
            'created_at' => now(),
            'updated_at' => now(),
            
        ],
        [
            'name' => 'Laagjes ketting met roos',
            'description' => 'Vivamus tempor ultricies felis, et bibendum dolor bibendum in. Duis risus nisi, rhoncus in sagittis nec, elementum eget massa. 
            Aliquam porttitor finibus augue, quis hendrerit justo luctus id. Ut convallis lobortis tortor. Fusce sem nunc, finibus at tincidunt sit amet, mattis ut magna. 
            Phasellus id laoreet dui. Phasellus iaculis leo vel augue mattis, vel ultrices nunc condimentum. Donec ac tellus mattis, lacinia enim eget, pellentesque nibh. 
            Vivamus id tincidunt ipsum. Mauris nec interdum nisi. Duis eget magna nec odio varius tincidunt. Sed feugiat ultrices orci eu egestas. Proin ut felis nulla. 
            Curabitur eu lorem ut mi vestibulum finibus. Vestibulum tincidunt, neque sed rhoncus condimentum, quam orci bibendum elit, vitae ornare metus lectus vitae metus.',
            'image' => 'images/necklaces/laagjes_ketting_roos.jpg',
            'price' => 19.99,
            'stock' => 12,
            'on_sale' => true,
            'discount_factor' => 0.15, // 15% korting
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Sierlijke bloemenketting',
            'description' => 'Integer sed nunc mi. Integer volutpat massa vitae pulvinar mollis. Mauris tincidunt lorem eget magna egestas tristique. Vestibulum vitae congue lorem, et malesuada mauris. Ut in vestibulum odio. Sed eget odio sit amet odio aliquam rhoncus. Suspendisse rutrum elementum massa, sed mollis lorem iaculis quis. Sed quis tellus diam. In mattis ultricies malesuada.',
            'image' => 'images/necklaces/sierlijke_bloemenketting.jpg',
            'price' => 15.99,
            'stock' => 7,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Basic ring',
            'description' => 'Cras et diam massa. Nulla faucibus orci placerat eleifend finibus. Nunc lorem justo, varius sit amet euismod ultricies, porta in metus. 
            Vivamus finibus non purus ac ultrices. Nulla lacinia, sapien a cursus porta, libero enim finibus purus, at dapibus ligula elit ac urna. 
            Vestibulum volutpat scelerisque nisi vel faucibus. Donec a dictum massa, sed tempus mauris. Suspendisse quis risus sed elit venenatis ultricies nec et nisi. 
            Aenean mattis neque sit amet leo lobortis aliquet. Nulla mattis congue mi, ut luctus est lacinia sed.',
            'image' => 'images/rings/basic_ring.jpg',
            'price' => 19.99,
            'stock' => 3,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Enkel twisted met dubbel twisted ring',
            'description' => 'Suspendisse at tincidunt risus. Suspendisse felis nibh, gravida ut aliquet in, fermentum eget magna. 
            Nulla suscipit nunc sit amet augue porttitor accumsan. In tincidunt quam quis ultrices molestie. 
            Suspendisse purus nibh, ornare ac vulputate sit amet, pellentesque vel eros. Curabitur euismod consequat nibh et elementum. 
            Sed consectetur ultrices porttitor. Praesent non rhoncus arcu, eget porttitor leo. Quisque tempus mollis molestie. 
            Donec laoreet diam elit, non maximus libero interdum id.',
            'image' => 'images/rings/enkel_twisted_met_dubbel_twisted_ring.jpg',
            'price' => 24.99,
            'stock' => 9,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Hartjes ring',
            'description' => 'Cras porta sollicitudin ante, nec porttitor nibh hendrerit eget. 
            Aenean scelerisque, tortor vitae bibendum lacinia, turpis tortor porta metus, in ornare quam enim eget dui. 
            In ut ex id elit rutrum gravida id et enim. Suspendisse potenti. Etiam nec dolor vestibulum, venenatis quam vitae, efficitur nibh. 
            Cras et metus vel nisl fringilla pulvinar a eget orci. Pellentesque vitae molestie elit, ac consequat felis. Ut ultricies suscipit facilisis. 
            Nunc convallis est nec hendrerit laoreet. Cras at tempus dolor. Nam a pretium eros. Nulla ac elit in diam ullamcorper mattis eget feugiat dui.',
            'image' => 'images/rings/hartjesring.jpg',
            'price' => 22.99,
            'stock' => 10,
            'on_sale' => false,
            'discount_factor' => null,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Ring met twist',
            'description' => 'Donec tempus sem mi, a mattis libero rutrum id. Suspendisse rutrum pulvinar turpis, eu posuere mauris. 
            Nam augue sem, vulputate ut urna eget, tempus ultricies velit. Praesent dapibus velit nec augue posuere accumsan. Etiam pulvinar ut nisl ac egestas. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vitae feugiat sem. 
            Sed pharetra, eros quis rhoncus volutpat, odio nunc imperdiet nibh, ac imperdiet sem odio tristique justo. Sed ornare viverra finibus. 
            Mauris porta purus vitae pharetra laoreet.',
            'image' => 'images/rings/ring_met_twist.jpg',
            'price' => 19.99,
            'stock' => 15,
            'on_sale' => true,
            'discount_factor' => 0.2, // 20% korting
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
