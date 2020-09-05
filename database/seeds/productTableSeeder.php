<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Fender CC-60SCE',
            'id_type' => '1',
            'thuonghieu' => 'Fender',
            'new' => '0',
            'images' => 'ac1.jpg',
            'giagoc' => '6690000',
            'giagiam' => '5299000',
            'uudiem' => '- Dáng Concert cutaway nhỏ gọn, rất dễ chơi
            - Mặt top bằng gỗ spruce nguyên khối  
            - Mặt sau và bên hông được làm từ gỗ mahogany
            - Các phím đàn trọn trịa trên mặt phím Rosewood ',
            'mota' => 'Nhỏ gọn và thoải mái, CC-60SCE lý tưởng cho người mới chơi. Đàn có dáng Concert nhỏ gọn, dễ dàng chơi ở bất kỳ vị trí nào với âm thanh tuyệt vời. Mặt trước bằng gỗ spruce nguyên khối, cần đàn thoải mái, và mặt sau và mặt gỗ gụ làm cho CC-60SCE trở thành lựa chọn hoàn hảo để chơi ở bãi biển, sân vườn hoặc quán cà phê.'
        ]);
        DB::table('products')->insert([
            'name' => 'Fender CC-60S',
            'id_type' => '1',
            'thuonghieu' => 'Fender',
            'new' => '1',
            'images' => 'ac2.jpg',
            'giagoc' => '4000000',
            'giagiam' => '0',
            'uudiem' => '- Dáng Concert nhỏ gọn, rất dễ chơi
            - Mặt top bằng gỗ spruce nguyên khối          
            - Mặt sau và bên hông được làm từ gỗ mahogany
            - Các phím đàn trọn trịa trên mặt phím Rosewood',
            'mota' => 'Nhỏ gọn và thoải mái, CC-60S lý tưởng cho người mới chơi. Đàn có dáng Concert nhỏ gọn, dễ dàng chơi ở bất kỳ vị trí nào với âm thanh tuyệt vời. Mặt top bằng gỗ vân sam nguyên khối, cần đàn thỏai mái, và mặt sau và mặt gỗ gụ làm cho CC-60S trở thành lựa chọn hoàn hảo để chơi ở bãi biển, sân vườn hoặc quán cà phê.'
        ]);
        DB::table('products')->insert([
            'name' => 'Takamine GD93CE',
            'id_type' => '1',
            'thuonghieu' => 'Takamine',
            'new' => '0',
            'images' => 'ac3.jpg',
            'giagoc' => '13390000',
            'giagiam' => '0',
            'uudiem' => '- Dáng dreadnought khác biệt với vẻ ngoài tinh tế và hiện đại
            - Cấu trúc gỗ nguyên miếng ở mặt trước và mặt sau ba mảnh khác lạ
            - Âm thanh phong phú, đanh và vang mạnh mẽ     
            - Cần đàn bằng gỗ Gụ giúp cân bằng âm thanh
            - Hệ thống Pre-amp được tích hợp sẵn',
            'mota' => 'Đàn Guitar Takamine GD93CE là một chiếc guitar dáng dreadnought khác biệt với vẻ ngoài tinh tế và hiện đại. GD93CE có cấu trúc gỗ nguyên miếng ở mặt trước và thiết kế mặt sau ba mảnh khác lạ mang lại cho nó một dáng vẻ cao cấp và âm thanh riêng biệt. Cây đàn mang đến cho người chơi cảm giác thích thụ vì sự khác biệt và cá nhân hóa này.'
        ]);
        DB::table('products')->insert([
            'name' => 'Taylor 110E',
            'id_type' => '1',
            'thuonghieu' => 'Taylor',
            'new' => '1',
            'images' => 'ac4.jpg',
            'giagoc' => '14020000',
            'giagiam' => '13050000',
            'uudiem' => '- Dáng Dreadnought cho âm thanh mạnh mẽ, ngân lâu trong thùng đàn
            - Mặt trước đàn làm bằng gỗ Sitka Spruce cao cấp
            - Thân đàn bằng gỗ Walnut cho âm thanh cực kỳ đặc trưng, cân bằng ',
            'mota' => 'Đàn guitar Taylor 110E là cây đàn guitar thuộc thương hiệu taylor nhưng có series nhỏ nhất, tuy vậy chất lượng của nó cũng mang đậm bản chất Taylor. Đàn Guitar Taylor 110E tương tự Guitar Taylor Series 200, Series 100 cung cấp khả năng phục hồi trong điều kiện khí hậu biến đổi, và cần đàn hẹp hơn một chút, 1 11/16-inch. Đó là một trong những cây guitar tốt nhất bạn sẽ tìm thấy, phù hợp với túi tiền của mình, đặc biệt với sự tích hợp của pickup Taylor ® ES-T. Taylor 100 series thực sự là sự lựa chọn phù hợp cho những người mới chơi nhưng vẫn mang lại hiệu suất âm thanh và tiện ích đáng kinh ngạc.'
        ]);
        DB::table('products')->insert([
            'name' => 'Taylor 214CE ',
            'id_type' => '1',
            'thuonghieu' => 'Taylor',
            'new' => '1',
            'images' => 'ac5.jpg',
            'giagoc' => '34020000',
            'giagiam' => '0',

            'mota' => 'Đàn Guitar Taylor 214CE Nổi bật hơn với viền trắng sắc nét trên cơ thể toàn màu đen, Đàn Guitar Taylor 214CE được thiết kế dựa trên những yếu tố cơ bản, mặt cắt Venetian giúp mở rộng dải âm để tạo ra một cây guitar mang lại những trải nghiệm tuyệt vời, tiếng và giai điệu rõ ràng, âm thanh cân bằng và trung thực.'
        ]);
        DB::table('products')->insert([
            'name' => 'Taylor Academy A12E',
            'id_type' => '1',
            'thuonghieu' => 'Taylor',
            'new' => '0',
            'images' => 'ac6.jpg',
            'giagoc' => '17379000',
            'giagiam' => '16000000',
            'uudiem' => '- Thân đàn nhỏ gọn dễ chịu thích hợp với lối chơi fingerpicking
            - Mặt trước gỗ Sitka nguyên miếng cho âm thanh linh hoạt và độ vang lớn
- Bàn phím bằng gỗ mun được trang trí với các nốt họa tiết acrylic Ý 4mm ',
            'mota' => 'Đàn guitar Taylor Academy A12E có dáng Grand concert - là dáng đàn nhỏ nhất của Taylor. Với dáng đàn nhỏ gọn và tiện lợi này, Academy 12E mang đến những phản hồi linh hoạt, cực kì thích hợp với lối chơi fingerstyle, hát solo hay dùng để ghi âm. Thân đàn có một thắt eo thon gọn thoải mái, một đệm tay được tích hợp mang đến cảm giác dễ chịu và giúp giảm mệt mỏi, kết hợp với chiều dài gam ngắn và bộ dây đàn sáng mang đến cảm giác thoải mái cho người sử dụng.'
        ]);
        DB::table('products')->insert([
            'name' => 'Taylor PS14ce, Macassar',
            'id_type' => '1',
            'thuonghieu' => 'Taylor',
            'new' => '0',
            'images' => 'ac7.jpg',
            'giagoc' => '25979000',
            'giagiam' => '0',
            'uudiem' => '- Được chế tạo với chất liệu chính là gỗ mun Macassar  ',
            'mota' => 'ỉnh cao trong các dòng Taylor là seri Presentation được giới thiệu với trình độ thủ công cao nhất của hãng. Giống như những người anh em trong seri, dáng đàn Grand Auditorium trở nên cực kì nổi bật với vân gỗ mun Macassar đến từ Indonesia ở mặt sau và hai bên hông kết hợp với chất gỗ Sitka spruce cao cấp ở mặt trước. Một chỗ vịn tay bằng gỗ mun được chạm khắc tỉ mỉ kết hợp với những nốt khảm tuyệt đẹp mang lại cảm giác vô cùng dễ chịu khi chơi. Bên cạnh đó, chiếc đàn còn sở hữu nhiều chi tiết tinh tế khác bao gồm: viền đàn rực rỡ bằng paua, backtrap bằng gỗ mun Macassar, và một họa tiết phím đàn hình nhành nho Nouveau thêm phần thanh nhã với đầu đàn sáng bóng và họa tiết ngựa đàn, một bộ tinh chỉnh dây Gotoh Gold, một lược và lưng ngựa đàn bằng xương, một mặt cắt cutaway Venetian và Expression System 2 electronics của Taylor.'
        ]);
        DB::table('products')->insert([
            'name' => 'Taylor 412CE',
            'id_type' => '1',
            'thuonghieu' => 'Taylor',
            'new' => '1',
            'images' => 'ac8.jpg',
            'giagoc' => '75810000',
            'giagiam' => '0',
            'uudiem' => '- Dáng Grand Concert -  thân nhỏ hơn phù hợp cho fingerstyle.
            - Khung: Forward Shifted với Relief Rou           
            - Mặt trước đàn làm bằng gỗ Sitka Spruce rắn            
            - Mặt sau và hai bên hông đàn làm bằng gỗ Ovangkol            
            - Đường cắt Venetian cutaway được biết đến với đường cong mềm mại ',
            'mota' => 'Tổng quan về Đàn Guitar Taylor 412CE
Những người chơi sẽ được tiếp tục khám phá âm thanh nhạy bén giống với gỗ rosewood của loại gỗ ovangkol Châu Phi, đi đôi hài hoà với gỗ Sitka spruce và có thể thích hợp cho nhiều phong cách chơi đàn. Viền mép màu trắng tạo nên điểm tương phản với phần trên bóng loáng và các vằn màu nâu của gỗ ovangol, trong khi hệ thống Expression cho âm thanh acoustic to rõ, trung thực và cao.'
        ]);
        DB::table('products')->insert([
            'name' => 'Suzuki SDG-6NL',
            'id_type' => '1',
            'thuonghieu' => 'Suzuki',
            'new' => '1',
            'images' => 'ac9.jpg',
            'giagoc' => '2060000',
            'giagiam' => '0',
            'uudiem' => '- Nổi bật với kiểu dáng hiện đại, bắt mắt.
            - Thùng đàn được thiết kế dày tạo âm thanh trong và vang.           
            - Giá phải chăng, rất thích hợp cho người mới chơi, học sinh, sinh viên, người chơi có thu nhập thấp.',
            'mota' => 'Đàn Guitar Suzuki SDG-6NL với cấu tạo thông dụng, cần đàn đượcgia công kỹ lưỡng, giữ độ thẳng cho cần, điều này sẽ giúp giảm nhẹ lực bấm đàncho người chơi, đặc biệt đối với người mới sử dụng, tập đánh đàn guitar, lựcngón tay yếu nên chọn đàn guitar SDG-6PK.'
        ]);
        DB::table('products')->insert([
            'name' => 'Fender CD-140SCE',
            'id_type' => '1',
            'thuonghieu' => 'Fender',
            'new' => '1',
            'images' => 'ac10.jpg',
            'giagoc' => '7560000',
            'giagiam' => '6900000',
            'uudiem' => '- Thiết kế hiện đại. Thùng đàn lớn cho tiếng đàn to, ấm và đầy

            - Nhiều tính năng hiện đại, đánh bật mọi cảm xúc khi chơi.',
            'mota' => 'CD-140SCE được cải tiến so với thế hệ trước với  sự nâng cấp hệ thống điện tử  Fishman® Presys,  mặt sau và bên hông bằng gỗ rosewood  và thêm một vỏ hộp. Kiểu single-cutaway dreadnought kết hợp với mặt trước bằng gỗ solid spruce mang đến âm thanh ấm áp. Cổ đàn dễ chơi và cảm giác thoải mái cho tất cả các phong cách chơi. CD-140SCE đã sẵn sàng cho bất cứ bản nhạc nào, cho dù bạn ở nhà hay trên sân khấu.'
        ]);
        DB::table('products')->insert([
            'name' => 'Takamine TC132SC',
            'id_type' => '2',
            'thuonghieu' => 'Takamine',
            'new' => '1',
            'images' => 'cl1.jpg',
            'giagoc' => '34990000',
            'giagiam' => '33990000',
            'uudiem' => '- Thiết kế hiện đại. Thùng đàn lớn cho tiếng đàn to, ấm và đầy
            - Nhiều tính năng hiện đại, đánh bật mọi cảm xúc khi chơi.',
            'mota' => 'Cây đàn guitar cổ điển sử dụng dây nilon này tuân thủ thiết kế của nhạc cụ truyền thống và bám sát bản vẽ gốc của Antonio Torres. Đây là sự lựa chọn đầu tiên của nghệ sĩ chơi nhạc latin và jazz truyền thống, khi cần âm điệu của loại dây nilon thuần khiết tại mức âm lượng khuếch đại. Mặt trên làm bằng gỗ tuyết tùng nguyên miếng cho âm dày và ấm với nhiều dải động. Mặt lưng bằng gỗ hồng mộc tạo tiếng vang tốt và giúp chất lượng âm thanh đạt đến độ tuyệt hảo. Cần đàn bằng gỗ Gụ với cặp truss rod để chiếc guitar chơi hoàn hảo trong mọi môi trường.'
        ]);
        DB::table('products')->insert([
            'name' => 'Takamine TC135SC',
            'id_type' => '2',
            'thuonghieu' => 'Takamine',
            'new' => '0',
            'images' => 'cl2.jpg',
            'giagoc' => '42420000',
            'giagiam' => '0',
            'uudiem' => '- Thiết kế hiện đại. Thùng đàn lớn cho tiếng đàn to, ấm và đầy
            - Nhiều tính năng hiện đại, đánh bật mọi cảm xúc khi chơi.',
            'mota' => 'Đàn guitar Takamine TC135SC với kiểu dáng Classic: là kiểu dáng đàn đầu tiên của cây đàn guitar trải qua hàng trăm năm không có gì thay đổi và vẫn được ưa chuộng. Dài 49cm, thân trên 29cm, thân dưới 37cm, dày 10cm.'
        ]);
        DB::table('products')->insert([
            'name' => 'ORTEGA R121SN guitar',
            'id_type' => '2',
            'thuonghieu' => 'ORTEGA',
            'new' => '0',
            'images' => 'cl3.jpg',
            'giagoc' => '5420000',
            'giagiam' => '5000000',
            'uudiem' => '- Thùng đàn lớn cho tiếng đàn to, ấm và đầy
            - Nhiều tính năng hiện đại, đánh bật mọi cảm xúc khi chơi.',
            'mota' => 'Cây đàn guitar cổ điển sử dụng dây nilon này tuân thủ thiết kế của nhạc cụ truyền thống và bám sát bản vẽ gốc của Antonio Torres. Đây là sự lựa chọn đầu tiên của nghệ sĩ chơi nhạc latin và jazz truyền thống, khi cần âm điệu của loại dây nilon thuần khiết tại mức âm lượng khuếch đại. Mặt trên làm bằng gỗ tuyết tùng nguyên miếng cho âm dày và ấm với nhiều dải động. Mặt lưng bằng gỗ hồng mộc tạo tiếng vang tốt và giúp chất lượng âm thanh đạt đến độ tuyệt hảo. Cần đàn bằng gỗ Gụ với cặp truss rod để chiếc guitar chơi hoàn hảo trong mọi môi trường.'
        ]);
        DB::table('products')->insert([
            'name' => 'Takamine GC1CE',
            'id_type' => '2',
            'thuonghieu' => 'Takamine',
            'new' => '0',
            'images' => 'cl4.jpg',
            'giagoc' => '6800000',
            'giagiam' => '6000000',
            'uudiem' => '- Thùng đàn lớn cho tiếng đàn to, ấm và đầy
            - Nhiều tính năng hiện đại, đánh bật mọi cảm xúc khi chơi.',
            'mota' => 'Đàn Guitar Takamine GC1CE là một chiếc guitar acoustic-electric cổ điển khá đẹp mắt với dây nilon đặc trưng mang lại những âm thanh dày ấm và có kiểu dáng thiết kế với mặt cắt kiểu Venetian cùng hệ thống điện tử của Takamine.Đây là sự lựa chọn tuyệt vời cho những người chơi đang tìm kiếm một chiếc guitar cổ điển vừa có chất lượng tốt nhưng giá cả phải chăng.'
        ]);
        DB::table('products')->insert([
            'name' => 'Takamine GC3',
            'id_type' => '2',
            'thuonghieu' => 'Takamine',
            'new' => '1',
            'images' => 'cl5.jpg',
            'giagoc' => '5990000',
            'giagiam' => '0',
            'uudiem' => '- Thùng đàn lớn cho tiếng đàn to, ấm và đầy
            - Nhiều tính năng hiện đại, đánh bật mọi cảm xúc khi chơi.',
            'mota' => 'Đàn guitar Takamine GC3-NAT là một cây guitar cổ điển được xây dựng vững chắc với mặt top, màu bóng hoàn thiện, âm thanh dây nylon tuyệt vời đúng với sự mong đợi từ người chơi guitar cổ điển như Takamine.'
        ]);
    }
}
