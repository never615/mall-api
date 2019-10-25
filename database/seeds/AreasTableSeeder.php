<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'code' => '100000',
                'name' => '中华人民共和国',
                'type' => 0,
                'full_name' => '中华人民共和国',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 1,
                'code' => '110000',
                'name' => '北京市',
                'type' => 1,
                'full_name' => '北京市',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 1,
                'code' => '120000',
                'name' => '天津市',
                'type' => 1,
                'full_name' => '天津市',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 1,
                'code' => '130000',
                'name' => '河北省',
                'type' => 1,
                'full_name' => '河北省',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 1,
                'code' => '140000',
                'name' => '山西省',
                'type' => 1,
                'full_name' => '山西省',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 1,
                'code' => '150000',
                'name' => '内蒙古自治区',
                'type' => 1,
                'full_name' => '内蒙古自治区',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 1,
                'code' => '210000',
                'name' => '辽宁省',
                'type' => 1,
                'full_name' => '辽宁省',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 1,
                'code' => '220000',
                'name' => '吉林省',
                'type' => 1,
                'full_name' => '吉林省',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 1,
                'code' => '230000',
                'name' => '黑龙江省',
                'type' => 1,
                'full_name' => '黑龙江省',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 1,
                'code' => '310000',
                'name' => '上海市',
                'type' => 1,
                'full_name' => '上海市',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 1,
                'code' => '320000',
                'name' => '江苏省',
                'type' => 1,
                'full_name' => '江苏省',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 1,
                'code' => '330000',
                'name' => '浙江省',
                'type' => 1,
                'full_name' => '浙江省',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 1,
                'code' => '340000',
                'name' => '安徽省',
                'type' => 1,
                'full_name' => '安徽省',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 1,
                'code' => '350000',
                'name' => '福建省',
                'type' => 1,
                'full_name' => '福建省',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 1,
                'code' => '360000',
                'name' => '江西省',
                'type' => 1,
                'full_name' => '江西省',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 1,
                'code' => '370000',
                'name' => '山东省',
                'type' => 1,
                'full_name' => '山东省',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 1,
                'code' => '410000',
                'name' => '河南省',
                'type' => 1,
                'full_name' => '河南省',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 1,
                'code' => '420000',
                'name' => '湖北省',
                'type' => 1,
                'full_name' => '湖北省',
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 1,
                'code' => '430000',
                'name' => '湖南省',
                'type' => 1,
                'full_name' => '湖南省',
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 1,
                'code' => '440000',
                'name' => '广东省',
                'type' => 1,
                'full_name' => '广东省',
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 1,
                'code' => '450000',
                'name' => '广西壮族自治区',
                'type' => 1,
                'full_name' => '广西壮族自治区',
            ),
            21 => 
            array (
                'id' => 22,
                'parent_id' => 1,
                'code' => '460000',
                'name' => '海南省',
                'type' => 1,
                'full_name' => '海南省',
            ),
            22 => 
            array (
                'id' => 23,
                'parent_id' => 1,
                'code' => '500000',
                'name' => '重庆市',
                'type' => 1,
                'full_name' => '重庆市',
            ),
            23 => 
            array (
                'id' => 24,
                'parent_id' => 1,
                'code' => '510000',
                'name' => '四川省',
                'type' => 1,
                'full_name' => '四川省',
            ),
            24 => 
            array (
                'id' => 25,
                'parent_id' => 1,
                'code' => '520000',
                'name' => '贵州省',
                'type' => 1,
                'full_name' => '贵州省',
            ),
            25 => 
            array (
                'id' => 26,
                'parent_id' => 1,
                'code' => '530000',
                'name' => '云南省',
                'type' => 1,
                'full_name' => '云南省',
            ),
            26 => 
            array (
                'id' => 27,
                'parent_id' => 1,
                'code' => '540000',
                'name' => '西藏自治区',
                'type' => 1,
                'full_name' => '西藏自治区',
            ),
            27 => 
            array (
                'id' => 28,
                'parent_id' => 1,
                'code' => '610000',
                'name' => '陕西省',
                'type' => 1,
                'full_name' => '陕西省',
            ),
            28 => 
            array (
                'id' => 29,
                'parent_id' => 1,
                'code' => '620000',
                'name' => '甘肃省',
                'type' => 1,
                'full_name' => '甘肃省',
            ),
            29 => 
            array (
                'id' => 30,
                'parent_id' => 1,
                'code' => '630000',
                'name' => '青海省',
                'type' => 1,
                'full_name' => '青海省',
            ),
            30 => 
            array (
                'id' => 31,
                'parent_id' => 1,
                'code' => '640000',
                'name' => '宁夏回族自治区',
                'type' => 1,
                'full_name' => '宁夏回族自治区',
            ),
            31 => 
            array (
                'id' => 32,
                'parent_id' => 1,
                'code' => '650000',
                'name' => '新疆维吾尔自治区',
                'type' => 1,
                'full_name' => '新疆维吾尔自治区',
            ),
            32 => 
            array (
                'id' => 33,
                'parent_id' => 1,
                'code' => '710000',
                'name' => '台湾省',
                'type' => 1,
                'full_name' => '台湾省',
            ),
            33 => 
            array (
                'id' => 34,
                'parent_id' => 1,
                'code' => '810000',
                'name' => '香港特别行政区',
                'type' => 1,
                'full_name' => '香港特别行政区',
            ),
            34 => 
            array (
                'id' => 35,
                'parent_id' => 1,
                'code' => '820000',
                'name' => '澳门特别行政区',
                'type' => 1,
                'full_name' => '澳门特别行政区',
            ),
            35 => 
            array (
                'id' => 36,
                'parent_id' => 2,
                'code' => '110100',
                'name' => '北京城区',
                'type' => 2,
                'full_name' => '北京市/北京城区',
            ),
            36 => 
            array (
                'id' => 37,
                'parent_id' => 36,
                'code' => '110101',
                'name' => '东城区',
                'type' => 3,
                'full_name' => '北京市/北京城区/东城区',
            ),
            37 => 
            array (
                'id' => 38,
                'parent_id' => 36,
                'code' => '110102',
                'name' => '西城区',
                'type' => 3,
                'full_name' => '北京市/北京城区/西城区',
            ),
            38 => 
            array (
                'id' => 39,
                'parent_id' => 36,
                'code' => '110105',
                'name' => '朝阳区',
                'type' => 3,
                'full_name' => '北京市/北京城区/朝阳区',
            ),
            39 => 
            array (
                'id' => 40,
                'parent_id' => 36,
                'code' => '110106',
                'name' => '丰台区',
                'type' => 3,
                'full_name' => '北京市/北京城区/丰台区',
            ),
            40 => 
            array (
                'id' => 41,
                'parent_id' => 36,
                'code' => '110107',
                'name' => '石景山区',
                'type' => 3,
                'full_name' => '北京市/北京城区/石景山区',
            ),
            41 => 
            array (
                'id' => 42,
                'parent_id' => 36,
                'code' => '110108',
                'name' => '海淀区',
                'type' => 3,
                'full_name' => '北京市/北京城区/海淀区',
            ),
            42 => 
            array (
                'id' => 43,
                'parent_id' => 36,
                'code' => '110109',
                'name' => '门头沟区',
                'type' => 3,
                'full_name' => '北京市/北京城区/门头沟区',
            ),
            43 => 
            array (
                'id' => 44,
                'parent_id' => 36,
                'code' => '110111',
                'name' => '房山区',
                'type' => 3,
                'full_name' => '北京市/北京城区/房山区',
            ),
            44 => 
            array (
                'id' => 45,
                'parent_id' => 36,
                'code' => '110112',
                'name' => '通州区',
                'type' => 3,
                'full_name' => '北京市/北京城区/通州区',
            ),
            45 => 
            array (
                'id' => 46,
                'parent_id' => 36,
                'code' => '110113',
                'name' => '顺义区',
                'type' => 3,
                'full_name' => '北京市/北京城区/顺义区',
            ),
            46 => 
            array (
                'id' => 47,
                'parent_id' => 36,
                'code' => '110114',
                'name' => '昌平区',
                'type' => 3,
                'full_name' => '北京市/北京城区/昌平区',
            ),
            47 => 
            array (
                'id' => 48,
                'parent_id' => 36,
                'code' => '110115',
                'name' => '大兴区',
                'type' => 3,
                'full_name' => '北京市/北京城区/大兴区',
            ),
            48 => 
            array (
                'id' => 49,
                'parent_id' => 36,
                'code' => '110116',
                'name' => '怀柔区',
                'type' => 3,
                'full_name' => '北京市/北京城区/怀柔区',
            ),
            49 => 
            array (
                'id' => 50,
                'parent_id' => 36,
                'code' => '110117',
                'name' => '平谷区',
                'type' => 3,
                'full_name' => '北京市/北京城区/平谷区',
            ),
            50 => 
            array (
                'id' => 51,
                'parent_id' => 36,
                'code' => '110118',
                'name' => '密云区',
                'type' => 3,
                'full_name' => '北京市/北京城区/密云区',
            ),
            51 => 
            array (
                'id' => 52,
                'parent_id' => 36,
                'code' => '110119',
                'name' => '延庆区',
                'type' => 3,
                'full_name' => '北京市/北京城区/延庆区',
            ),
            52 => 
            array (
                'id' => 53,
                'parent_id' => 3,
                'code' => '120100',
                'name' => '天津城区',
                'type' => 2,
                'full_name' => '天津市/天津城区',
            ),
            53 => 
            array (
                'id' => 54,
                'parent_id' => 53,
                'code' => '120101',
                'name' => '和平区',
                'type' => 3,
                'full_name' => '天津市/天津城区/和平区',
            ),
            54 => 
            array (
                'id' => 55,
                'parent_id' => 53,
                'code' => '120102',
                'name' => '河东区',
                'type' => 3,
                'full_name' => '天津市/天津城区/河东区',
            ),
            55 => 
            array (
                'id' => 56,
                'parent_id' => 53,
                'code' => '120103',
                'name' => '河西区',
                'type' => 3,
                'full_name' => '天津市/天津城区/河西区',
            ),
            56 => 
            array (
                'id' => 57,
                'parent_id' => 53,
                'code' => '120104',
                'name' => '南开区',
                'type' => 3,
                'full_name' => '天津市/天津城区/南开区',
            ),
            57 => 
            array (
                'id' => 58,
                'parent_id' => 53,
                'code' => '120105',
                'name' => '河北区',
                'type' => 3,
                'full_name' => '天津市/天津城区/河北区',
            ),
            58 => 
            array (
                'id' => 59,
                'parent_id' => 53,
                'code' => '120106',
                'name' => '红桥区',
                'type' => 3,
                'full_name' => '天津市/天津城区/红桥区',
            ),
            59 => 
            array (
                'id' => 60,
                'parent_id' => 53,
                'code' => '120110',
                'name' => '东丽区',
                'type' => 3,
                'full_name' => '天津市/天津城区/东丽区',
            ),
            60 => 
            array (
                'id' => 61,
                'parent_id' => 53,
                'code' => '120111',
                'name' => '西青区',
                'type' => 3,
                'full_name' => '天津市/天津城区/西青区',
            ),
            61 => 
            array (
                'id' => 62,
                'parent_id' => 53,
                'code' => '120112',
                'name' => '津南区',
                'type' => 3,
                'full_name' => '天津市/天津城区/津南区',
            ),
            62 => 
            array (
                'id' => 63,
                'parent_id' => 53,
                'code' => '120113',
                'name' => '北辰区',
                'type' => 3,
                'full_name' => '天津市/天津城区/北辰区',
            ),
            63 => 
            array (
                'id' => 64,
                'parent_id' => 53,
                'code' => '120114',
                'name' => '武清区',
                'type' => 3,
                'full_name' => '天津市/天津城区/武清区',
            ),
            64 => 
            array (
                'id' => 65,
                'parent_id' => 53,
                'code' => '120115',
                'name' => '宝坻区',
                'type' => 3,
                'full_name' => '天津市/天津城区/宝坻区',
            ),
            65 => 
            array (
                'id' => 66,
                'parent_id' => 53,
                'code' => '120116',
                'name' => '滨海新区',
                'type' => 3,
                'full_name' => '天津市/天津城区/滨海新区',
            ),
            66 => 
            array (
                'id' => 67,
                'parent_id' => 53,
                'code' => '120117',
                'name' => '宁河区',
                'type' => 3,
                'full_name' => '天津市/天津城区/宁河区',
            ),
            67 => 
            array (
                'id' => 68,
                'parent_id' => 53,
                'code' => '120118',
                'name' => '静海区',
                'type' => 3,
                'full_name' => '天津市/天津城区/静海区',
            ),
            68 => 
            array (
                'id' => 69,
                'parent_id' => 53,
                'code' => '120119',
                'name' => '蓟州区',
                'type' => 3,
                'full_name' => '天津市/天津城区/蓟州区',
            ),
            69 => 
            array (
                'id' => 70,
                'parent_id' => 4,
                'code' => '130100',
                'name' => '石家庄市',
                'type' => 2,
                'full_name' => '河北省/石家庄市',
            ),
            70 => 
            array (
                'id' => 71,
                'parent_id' => 4,
                'code' => '130200',
                'name' => '唐山市',
                'type' => 2,
                'full_name' => '河北省/唐山市',
            ),
            71 => 
            array (
                'id' => 72,
                'parent_id' => 4,
                'code' => '130300',
                'name' => '秦皇岛市',
                'type' => 2,
                'full_name' => '河北省/秦皇岛市',
            ),
            72 => 
            array (
                'id' => 73,
                'parent_id' => 4,
                'code' => '130400',
                'name' => '邯郸市',
                'type' => 2,
                'full_name' => '河北省/邯郸市',
            ),
            73 => 
            array (
                'id' => 74,
                'parent_id' => 4,
                'code' => '130500',
                'name' => '邢台市',
                'type' => 2,
                'full_name' => '河北省/邢台市',
            ),
            74 => 
            array (
                'id' => 75,
                'parent_id' => 4,
                'code' => '130600',
                'name' => '保定市',
                'type' => 2,
                'full_name' => '河北省/保定市',
            ),
            75 => 
            array (
                'id' => 76,
                'parent_id' => 4,
                'code' => '130700',
                'name' => '张家口市',
                'type' => 2,
                'full_name' => '河北省/张家口市',
            ),
            76 => 
            array (
                'id' => 77,
                'parent_id' => 4,
                'code' => '130800',
                'name' => '承德市',
                'type' => 2,
                'full_name' => '河北省/承德市',
            ),
            77 => 
            array (
                'id' => 78,
                'parent_id' => 4,
                'code' => '130900',
                'name' => '沧州市',
                'type' => 2,
                'full_name' => '河北省/沧州市',
            ),
            78 => 
            array (
                'id' => 79,
                'parent_id' => 4,
                'code' => '131000',
                'name' => '廊坊市',
                'type' => 2,
                'full_name' => '河北省/廊坊市',
            ),
            79 => 
            array (
                'id' => 80,
                'parent_id' => 4,
                'code' => '131100',
                'name' => '衡水市',
                'type' => 2,
                'full_name' => '河北省/衡水市',
            ),
            80 => 
            array (
                'id' => 81,
                'parent_id' => 70,
                'code' => '130102',
                'name' => '长安区',
                'type' => 3,
                'full_name' => '河北省/石家庄市/长安区',
            ),
            81 => 
            array (
                'id' => 82,
                'parent_id' => 70,
                'code' => '130104',
                'name' => '桥西区',
                'type' => 3,
                'full_name' => '河北省/石家庄市/桥西区',
            ),
            82 => 
            array (
                'id' => 83,
                'parent_id' => 70,
                'code' => '130105',
                'name' => '新华区',
                'type' => 3,
                'full_name' => '河北省/石家庄市/新华区',
            ),
            83 => 
            array (
                'id' => 84,
                'parent_id' => 70,
                'code' => '130107',
                'name' => '井陉矿区',
                'type' => 3,
                'full_name' => '河北省/石家庄市/井陉矿区',
            ),
            84 => 
            array (
                'id' => 85,
                'parent_id' => 70,
                'code' => '130108',
                'name' => '裕华区',
                'type' => 3,
                'full_name' => '河北省/石家庄市/裕华区',
            ),
            85 => 
            array (
                'id' => 86,
                'parent_id' => 70,
                'code' => '130109',
                'name' => '藁城区',
                'type' => 3,
                'full_name' => '河北省/石家庄市/藁城区',
            ),
            86 => 
            array (
                'id' => 87,
                'parent_id' => 70,
                'code' => '130110',
                'name' => '鹿泉区',
                'type' => 3,
                'full_name' => '河北省/石家庄市/鹿泉区',
            ),
            87 => 
            array (
                'id' => 88,
                'parent_id' => 70,
                'code' => '130111',
                'name' => '栾城区',
                'type' => 3,
                'full_name' => '河北省/石家庄市/栾城区',
            ),
            88 => 
            array (
                'id' => 89,
                'parent_id' => 70,
                'code' => '130121',
                'name' => '井陉县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/井陉县',
            ),
            89 => 
            array (
                'id' => 90,
                'parent_id' => 70,
                'code' => '130123',
                'name' => '正定县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/正定县',
            ),
            90 => 
            array (
                'id' => 91,
                'parent_id' => 70,
                'code' => '130125',
                'name' => '行唐县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/行唐县',
            ),
            91 => 
            array (
                'id' => 92,
                'parent_id' => 70,
                'code' => '130126',
                'name' => '灵寿县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/灵寿县',
            ),
            92 => 
            array (
                'id' => 93,
                'parent_id' => 70,
                'code' => '130127',
                'name' => '高邑县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/高邑县',
            ),
            93 => 
            array (
                'id' => 94,
                'parent_id' => 70,
                'code' => '130128',
                'name' => '深泽县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/深泽县',
            ),
            94 => 
            array (
                'id' => 95,
                'parent_id' => 70,
                'code' => '130129',
                'name' => '赞皇县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/赞皇县',
            ),
            95 => 
            array (
                'id' => 96,
                'parent_id' => 70,
                'code' => '130130',
                'name' => '无极县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/无极县',
            ),
            96 => 
            array (
                'id' => 97,
                'parent_id' => 70,
                'code' => '130131',
                'name' => '平山县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/平山县',
            ),
            97 => 
            array (
                'id' => 98,
                'parent_id' => 70,
                'code' => '130132',
                'name' => '元氏县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/元氏县',
            ),
            98 => 
            array (
                'id' => 99,
                'parent_id' => 70,
                'code' => '130133',
                'name' => '赵县',
                'type' => 3,
                'full_name' => '河北省/石家庄市/赵县',
            ),
            99 => 
            array (
                'id' => 100,
                'parent_id' => 70,
                'code' => '130181',
                'name' => '辛集市',
                'type' => 3,
                'full_name' => '河北省/石家庄市/辛集市',
            ),
            100 => 
            array (
                'id' => 101,
                'parent_id' => 70,
                'code' => '130183',
                'name' => '晋州市',
                'type' => 3,
                'full_name' => '河北省/石家庄市/晋州市',
            ),
            101 => 
            array (
                'id' => 102,
                'parent_id' => 70,
                'code' => '130184',
                'name' => '新乐市',
                'type' => 3,
                'full_name' => '河北省/石家庄市/新乐市',
            ),
            102 => 
            array (
                'id' => 103,
                'parent_id' => 71,
                'code' => '130202',
                'name' => '路南区',
                'type' => 3,
                'full_name' => '河北省/唐山市/路南区',
            ),
            103 => 
            array (
                'id' => 104,
                'parent_id' => 71,
                'code' => '130203',
                'name' => '路北区',
                'type' => 3,
                'full_name' => '河北省/唐山市/路北区',
            ),
            104 => 
            array (
                'id' => 105,
                'parent_id' => 71,
                'code' => '130204',
                'name' => '古冶区',
                'type' => 3,
                'full_name' => '河北省/唐山市/古冶区',
            ),
            105 => 
            array (
                'id' => 106,
                'parent_id' => 71,
                'code' => '130205',
                'name' => '开平区',
                'type' => 3,
                'full_name' => '河北省/唐山市/开平区',
            ),
            106 => 
            array (
                'id' => 107,
                'parent_id' => 71,
                'code' => '130207',
                'name' => '丰南区',
                'type' => 3,
                'full_name' => '河北省/唐山市/丰南区',
            ),
            107 => 
            array (
                'id' => 108,
                'parent_id' => 71,
                'code' => '130208',
                'name' => '丰润区',
                'type' => 3,
                'full_name' => '河北省/唐山市/丰润区',
            ),
            108 => 
            array (
                'id' => 109,
                'parent_id' => 71,
                'code' => '130209',
                'name' => '曹妃甸区',
                'type' => 3,
                'full_name' => '河北省/唐山市/曹妃甸区',
            ),
            109 => 
            array (
                'id' => 110,
                'parent_id' => 71,
                'code' => '130223',
                'name' => '滦县',
                'type' => 3,
                'full_name' => '河北省/唐山市/滦县',
            ),
            110 => 
            array (
                'id' => 111,
                'parent_id' => 71,
                'code' => '130224',
                'name' => '滦南县',
                'type' => 3,
                'full_name' => '河北省/唐山市/滦南县',
            ),
            111 => 
            array (
                'id' => 112,
                'parent_id' => 71,
                'code' => '130225',
                'name' => '乐亭县',
                'type' => 3,
                'full_name' => '河北省/唐山市/乐亭县',
            ),
            112 => 
            array (
                'id' => 113,
                'parent_id' => 71,
                'code' => '130227',
                'name' => '迁西县',
                'type' => 3,
                'full_name' => '河北省/唐山市/迁西县',
            ),
            113 => 
            array (
                'id' => 114,
                'parent_id' => 71,
                'code' => '130229',
                'name' => '玉田县',
                'type' => 3,
                'full_name' => '河北省/唐山市/玉田县',
            ),
            114 => 
            array (
                'id' => 115,
                'parent_id' => 71,
                'code' => '130281',
                'name' => '遵化市',
                'type' => 3,
                'full_name' => '河北省/唐山市/遵化市',
            ),
            115 => 
            array (
                'id' => 116,
                'parent_id' => 71,
                'code' => '130283',
                'name' => '迁安市',
                'type' => 3,
                'full_name' => '河北省/唐山市/迁安市',
            ),
            116 => 
            array (
                'id' => 117,
                'parent_id' => 72,
                'code' => '130302',
                'name' => '海港区',
                'type' => 3,
                'full_name' => '河北省/秦皇岛市/海港区',
            ),
            117 => 
            array (
                'id' => 118,
                'parent_id' => 72,
                'code' => '130303',
                'name' => '山海关区',
                'type' => 3,
                'full_name' => '河北省/秦皇岛市/山海关区',
            ),
            118 => 
            array (
                'id' => 119,
                'parent_id' => 72,
                'code' => '130304',
                'name' => '北戴河区',
                'type' => 3,
                'full_name' => '河北省/秦皇岛市/北戴河区',
            ),
            119 => 
            array (
                'id' => 120,
                'parent_id' => 72,
                'code' => '130306',
                'name' => '抚宁区',
                'type' => 3,
                'full_name' => '河北省/秦皇岛市/抚宁区',
            ),
            120 => 
            array (
                'id' => 121,
                'parent_id' => 72,
                'code' => '130321',
                'name' => '青龙满族自治县',
                'type' => 3,
                'full_name' => '河北省/秦皇岛市/青龙满族自治县',
            ),
            121 => 
            array (
                'id' => 122,
                'parent_id' => 72,
                'code' => '130322',
                'name' => '昌黎县',
                'type' => 3,
                'full_name' => '河北省/秦皇岛市/昌黎县',
            ),
            122 => 
            array (
                'id' => 123,
                'parent_id' => 72,
                'code' => '130324',
                'name' => '卢龙县',
                'type' => 3,
                'full_name' => '河北省/秦皇岛市/卢龙县',
            ),
            123 => 
            array (
                'id' => 124,
                'parent_id' => 73,
                'code' => '130402',
                'name' => '邯山区',
                'type' => 3,
                'full_name' => '河北省/邯郸市/邯山区',
            ),
            124 => 
            array (
                'id' => 125,
                'parent_id' => 73,
                'code' => '130403',
                'name' => '丛台区',
                'type' => 3,
                'full_name' => '河北省/邯郸市/丛台区',
            ),
            125 => 
            array (
                'id' => 126,
                'parent_id' => 73,
                'code' => '130404',
                'name' => '复兴区',
                'type' => 3,
                'full_name' => '河北省/邯郸市/复兴区',
            ),
            126 => 
            array (
                'id' => 127,
                'parent_id' => 73,
                'code' => '130406',
                'name' => '峰峰矿区',
                'type' => 3,
                'full_name' => '河北省/邯郸市/峰峰矿区',
            ),
            127 => 
            array (
                'id' => 128,
                'parent_id' => 73,
                'code' => '130407',
                'name' => '肥乡区',
                'type' => 3,
                'full_name' => '河北省/邯郸市/肥乡区',
            ),
            128 => 
            array (
                'id' => 129,
                'parent_id' => 73,
                'code' => '130408',
                'name' => '永年区',
                'type' => 3,
                'full_name' => '河北省/邯郸市/永年区',
            ),
            129 => 
            array (
                'id' => 130,
                'parent_id' => 73,
                'code' => '130423',
                'name' => '临漳县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/临漳县',
            ),
            130 => 
            array (
                'id' => 131,
                'parent_id' => 73,
                'code' => '130424',
                'name' => '成安县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/成安县',
            ),
            131 => 
            array (
                'id' => 132,
                'parent_id' => 73,
                'code' => '130425',
                'name' => '大名县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/大名县',
            ),
            132 => 
            array (
                'id' => 133,
                'parent_id' => 73,
                'code' => '130426',
                'name' => '涉县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/涉县',
            ),
            133 => 
            array (
                'id' => 134,
                'parent_id' => 73,
                'code' => '130427',
                'name' => '磁县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/磁县',
            ),
            134 => 
            array (
                'id' => 135,
                'parent_id' => 73,
                'code' => '130430',
                'name' => '邱县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/邱县',
            ),
            135 => 
            array (
                'id' => 136,
                'parent_id' => 73,
                'code' => '130431',
                'name' => '鸡泽县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/鸡泽县',
            ),
            136 => 
            array (
                'id' => 137,
                'parent_id' => 73,
                'code' => '130432',
                'name' => '广平县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/广平县',
            ),
            137 => 
            array (
                'id' => 138,
                'parent_id' => 73,
                'code' => '130433',
                'name' => '馆陶县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/馆陶县',
            ),
            138 => 
            array (
                'id' => 139,
                'parent_id' => 73,
                'code' => '130434',
                'name' => '魏县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/魏县',
            ),
            139 => 
            array (
                'id' => 140,
                'parent_id' => 73,
                'code' => '130435',
                'name' => '曲周县',
                'type' => 3,
                'full_name' => '河北省/邯郸市/曲周县',
            ),
            140 => 
            array (
                'id' => 141,
                'parent_id' => 73,
                'code' => '130481',
                'name' => '武安市',
                'type' => 3,
                'full_name' => '河北省/邯郸市/武安市',
            ),
            141 => 
            array (
                'id' => 142,
                'parent_id' => 74,
                'code' => '130502',
                'name' => '桥东区',
                'type' => 3,
                'full_name' => '河北省/邢台市/桥东区',
            ),
            142 => 
            array (
                'id' => 143,
                'parent_id' => 74,
                'code' => '130503',
                'name' => '桥西区',
                'type' => 3,
                'full_name' => '河北省/邢台市/桥西区',
            ),
            143 => 
            array (
                'id' => 144,
                'parent_id' => 74,
                'code' => '130521',
                'name' => '邢台县',
                'type' => 3,
                'full_name' => '河北省/邢台市/邢台县',
            ),
            144 => 
            array (
                'id' => 145,
                'parent_id' => 74,
                'code' => '130522',
                'name' => '临城县',
                'type' => 3,
                'full_name' => '河北省/邢台市/临城县',
            ),
            145 => 
            array (
                'id' => 146,
                'parent_id' => 74,
                'code' => '130523',
                'name' => '内丘县',
                'type' => 3,
                'full_name' => '河北省/邢台市/内丘县',
            ),
            146 => 
            array (
                'id' => 147,
                'parent_id' => 74,
                'code' => '130524',
                'name' => '柏乡县',
                'type' => 3,
                'full_name' => '河北省/邢台市/柏乡县',
            ),
            147 => 
            array (
                'id' => 148,
                'parent_id' => 74,
                'code' => '130525',
                'name' => '隆尧县',
                'type' => 3,
                'full_name' => '河北省/邢台市/隆尧县',
            ),
            148 => 
            array (
                'id' => 149,
                'parent_id' => 74,
                'code' => '130526',
                'name' => '任县',
                'type' => 3,
                'full_name' => '河北省/邢台市/任县',
            ),
            149 => 
            array (
                'id' => 150,
                'parent_id' => 74,
                'code' => '130527',
                'name' => '南和县',
                'type' => 3,
                'full_name' => '河北省/邢台市/南和县',
            ),
            150 => 
            array (
                'id' => 151,
                'parent_id' => 74,
                'code' => '130528',
                'name' => '宁晋县',
                'type' => 3,
                'full_name' => '河北省/邢台市/宁晋县',
            ),
            151 => 
            array (
                'id' => 152,
                'parent_id' => 74,
                'code' => '130529',
                'name' => '巨鹿县',
                'type' => 3,
                'full_name' => '河北省/邢台市/巨鹿县',
            ),
            152 => 
            array (
                'id' => 153,
                'parent_id' => 74,
                'code' => '130530',
                'name' => '新河县',
                'type' => 3,
                'full_name' => '河北省/邢台市/新河县',
            ),
            153 => 
            array (
                'id' => 154,
                'parent_id' => 74,
                'code' => '130531',
                'name' => '广宗县',
                'type' => 3,
                'full_name' => '河北省/邢台市/广宗县',
            ),
            154 => 
            array (
                'id' => 155,
                'parent_id' => 74,
                'code' => '130532',
                'name' => '平乡县',
                'type' => 3,
                'full_name' => '河北省/邢台市/平乡县',
            ),
            155 => 
            array (
                'id' => 156,
                'parent_id' => 74,
                'code' => '130533',
                'name' => '威县',
                'type' => 3,
                'full_name' => '河北省/邢台市/威县',
            ),
            156 => 
            array (
                'id' => 157,
                'parent_id' => 74,
                'code' => '130534',
                'name' => '清河县',
                'type' => 3,
                'full_name' => '河北省/邢台市/清河县',
            ),
            157 => 
            array (
                'id' => 158,
                'parent_id' => 74,
                'code' => '130535',
                'name' => '临西县',
                'type' => 3,
                'full_name' => '河北省/邢台市/临西县',
            ),
            158 => 
            array (
                'id' => 159,
                'parent_id' => 74,
                'code' => '130581',
                'name' => '南宫市',
                'type' => 3,
                'full_name' => '河北省/邢台市/南宫市',
            ),
            159 => 
            array (
                'id' => 160,
                'parent_id' => 74,
                'code' => '130582',
                'name' => '沙河市',
                'type' => 3,
                'full_name' => '河北省/邢台市/沙河市',
            ),
            160 => 
            array (
                'id' => 161,
                'parent_id' => 75,
                'code' => '130602',
                'name' => '竞秀区',
                'type' => 3,
                'full_name' => '河北省/保定市/竞秀区',
            ),
            161 => 
            array (
                'id' => 162,
                'parent_id' => 75,
                'code' => '130606',
                'name' => '莲池区',
                'type' => 3,
                'full_name' => '河北省/保定市/莲池区',
            ),
            162 => 
            array (
                'id' => 163,
                'parent_id' => 75,
                'code' => '130607',
                'name' => '满城区',
                'type' => 3,
                'full_name' => '河北省/保定市/满城区',
            ),
            163 => 
            array (
                'id' => 164,
                'parent_id' => 75,
                'code' => '130608',
                'name' => '清苑区',
                'type' => 3,
                'full_name' => '河北省/保定市/清苑区',
            ),
            164 => 
            array (
                'id' => 165,
                'parent_id' => 75,
                'code' => '130609',
                'name' => '徐水区',
                'type' => 3,
                'full_name' => '河北省/保定市/徐水区',
            ),
            165 => 
            array (
                'id' => 166,
                'parent_id' => 75,
                'code' => '130623',
                'name' => '涞水县',
                'type' => 3,
                'full_name' => '河北省/保定市/涞水县',
            ),
            166 => 
            array (
                'id' => 167,
                'parent_id' => 75,
                'code' => '130624',
                'name' => '阜平县',
                'type' => 3,
                'full_name' => '河北省/保定市/阜平县',
            ),
            167 => 
            array (
                'id' => 168,
                'parent_id' => 75,
                'code' => '130626',
                'name' => '定兴县',
                'type' => 3,
                'full_name' => '河北省/保定市/定兴县',
            ),
            168 => 
            array (
                'id' => 169,
                'parent_id' => 75,
                'code' => '130627',
                'name' => '唐县',
                'type' => 3,
                'full_name' => '河北省/保定市/唐县',
            ),
            169 => 
            array (
                'id' => 170,
                'parent_id' => 75,
                'code' => '130628',
                'name' => '高阳县',
                'type' => 3,
                'full_name' => '河北省/保定市/高阳县',
            ),
            170 => 
            array (
                'id' => 171,
                'parent_id' => 75,
                'code' => '130629',
                'name' => '容城县',
                'type' => 3,
                'full_name' => '河北省/保定市/容城县',
            ),
            171 => 
            array (
                'id' => 172,
                'parent_id' => 75,
                'code' => '130630',
                'name' => '涞源县',
                'type' => 3,
                'full_name' => '河北省/保定市/涞源县',
            ),
            172 => 
            array (
                'id' => 173,
                'parent_id' => 75,
                'code' => '130631',
                'name' => '望都县',
                'type' => 3,
                'full_name' => '河北省/保定市/望都县',
            ),
            173 => 
            array (
                'id' => 174,
                'parent_id' => 75,
                'code' => '130632',
                'name' => '安新县',
                'type' => 3,
                'full_name' => '河北省/保定市/安新县',
            ),
            174 => 
            array (
                'id' => 175,
                'parent_id' => 75,
                'code' => '130633',
                'name' => '易县',
                'type' => 3,
                'full_name' => '河北省/保定市/易县',
            ),
            175 => 
            array (
                'id' => 176,
                'parent_id' => 75,
                'code' => '130634',
                'name' => '曲阳县',
                'type' => 3,
                'full_name' => '河北省/保定市/曲阳县',
            ),
            176 => 
            array (
                'id' => 177,
                'parent_id' => 75,
                'code' => '130635',
                'name' => '蠡县',
                'type' => 3,
                'full_name' => '河北省/保定市/蠡县',
            ),
            177 => 
            array (
                'id' => 178,
                'parent_id' => 75,
                'code' => '130636',
                'name' => '顺平县',
                'type' => 3,
                'full_name' => '河北省/保定市/顺平县',
            ),
            178 => 
            array (
                'id' => 179,
                'parent_id' => 75,
                'code' => '130637',
                'name' => '博野县',
                'type' => 3,
                'full_name' => '河北省/保定市/博野县',
            ),
            179 => 
            array (
                'id' => 180,
                'parent_id' => 75,
                'code' => '130638',
                'name' => '雄县',
                'type' => 3,
                'full_name' => '河北省/保定市/雄县',
            ),
            180 => 
            array (
                'id' => 181,
                'parent_id' => 75,
                'code' => '130681',
                'name' => '涿州市',
                'type' => 3,
                'full_name' => '河北省/保定市/涿州市',
            ),
            181 => 
            array (
                'id' => 182,
                'parent_id' => 75,
                'code' => '130682',
                'name' => '定州市',
                'type' => 3,
                'full_name' => '河北省/保定市/定州市',
            ),
            182 => 
            array (
                'id' => 183,
                'parent_id' => 75,
                'code' => '130683',
                'name' => '安国市',
                'type' => 3,
                'full_name' => '河北省/保定市/安国市',
            ),
            183 => 
            array (
                'id' => 184,
                'parent_id' => 75,
                'code' => '130684',
                'name' => '高碑店市',
                'type' => 3,
                'full_name' => '河北省/保定市/高碑店市',
            ),
            184 => 
            array (
                'id' => 185,
                'parent_id' => 76,
                'code' => '130702',
                'name' => '桥东区',
                'type' => 3,
                'full_name' => '河北省/张家口市/桥东区',
            ),
            185 => 
            array (
                'id' => 186,
                'parent_id' => 76,
                'code' => '130703',
                'name' => '桥西区',
                'type' => 3,
                'full_name' => '河北省/张家口市/桥西区',
            ),
            186 => 
            array (
                'id' => 187,
                'parent_id' => 76,
                'code' => '130705',
                'name' => '宣化区',
                'type' => 3,
                'full_name' => '河北省/张家口市/宣化区',
            ),
            187 => 
            array (
                'id' => 188,
                'parent_id' => 76,
                'code' => '130706',
                'name' => '下花园区',
                'type' => 3,
                'full_name' => '河北省/张家口市/下花园区',
            ),
            188 => 
            array (
                'id' => 189,
                'parent_id' => 76,
                'code' => '130708',
                'name' => '万全区',
                'type' => 3,
                'full_name' => '河北省/张家口市/万全区',
            ),
            189 => 
            array (
                'id' => 190,
                'parent_id' => 76,
                'code' => '130709',
                'name' => '崇礼区',
                'type' => 3,
                'full_name' => '河北省/张家口市/崇礼区',
            ),
            190 => 
            array (
                'id' => 191,
                'parent_id' => 76,
                'code' => '130722',
                'name' => '张北县',
                'type' => 3,
                'full_name' => '河北省/张家口市/张北县',
            ),
            191 => 
            array (
                'id' => 192,
                'parent_id' => 76,
                'code' => '130723',
                'name' => '康保县',
                'type' => 3,
                'full_name' => '河北省/张家口市/康保县',
            ),
            192 => 
            array (
                'id' => 193,
                'parent_id' => 76,
                'code' => '130724',
                'name' => '沽源县',
                'type' => 3,
                'full_name' => '河北省/张家口市/沽源县',
            ),
            193 => 
            array (
                'id' => 194,
                'parent_id' => 76,
                'code' => '130725',
                'name' => '尚义县',
                'type' => 3,
                'full_name' => '河北省/张家口市/尚义县',
            ),
            194 => 
            array (
                'id' => 195,
                'parent_id' => 76,
                'code' => '130726',
                'name' => '蔚县',
                'type' => 3,
                'full_name' => '河北省/张家口市/蔚县',
            ),
            195 => 
            array (
                'id' => 196,
                'parent_id' => 76,
                'code' => '130727',
                'name' => '阳原县',
                'type' => 3,
                'full_name' => '河北省/张家口市/阳原县',
            ),
            196 => 
            array (
                'id' => 197,
                'parent_id' => 76,
                'code' => '130728',
                'name' => '怀安县',
                'type' => 3,
                'full_name' => '河北省/张家口市/怀安县',
            ),
            197 => 
            array (
                'id' => 198,
                'parent_id' => 76,
                'code' => '130730',
                'name' => '怀来县',
                'type' => 3,
                'full_name' => '河北省/张家口市/怀来县',
            ),
            198 => 
            array (
                'id' => 199,
                'parent_id' => 76,
                'code' => '130731',
                'name' => '涿鹿县',
                'type' => 3,
                'full_name' => '河北省/张家口市/涿鹿县',
            ),
            199 => 
            array (
                'id' => 200,
                'parent_id' => 76,
                'code' => '130732',
                'name' => '赤城县',
                'type' => 3,
                'full_name' => '河北省/张家口市/赤城县',
            ),
            200 => 
            array (
                'id' => 201,
                'parent_id' => 77,
                'code' => '130802',
                'name' => '双桥区',
                'type' => 3,
                'full_name' => '河北省/承德市/双桥区',
            ),
            201 => 
            array (
                'id' => 202,
                'parent_id' => 77,
                'code' => '130803',
                'name' => '双滦区',
                'type' => 3,
                'full_name' => '河北省/承德市/双滦区',
            ),
            202 => 
            array (
                'id' => 203,
                'parent_id' => 77,
                'code' => '130804',
                'name' => '鹰手营子矿区',
                'type' => 3,
                'full_name' => '河北省/承德市/鹰手营子矿区',
            ),
            203 => 
            array (
                'id' => 204,
                'parent_id' => 77,
                'code' => '130821',
                'name' => '承德县',
                'type' => 3,
                'full_name' => '河北省/承德市/承德县',
            ),
            204 => 
            array (
                'id' => 205,
                'parent_id' => 77,
                'code' => '130822',
                'name' => '兴隆县',
                'type' => 3,
                'full_name' => '河北省/承德市/兴隆县',
            ),
            205 => 
            array (
                'id' => 206,
                'parent_id' => 77,
                'code' => '130824',
                'name' => '滦平县',
                'type' => 3,
                'full_name' => '河北省/承德市/滦平县',
            ),
            206 => 
            array (
                'id' => 207,
                'parent_id' => 77,
                'code' => '130825',
                'name' => '隆化县',
                'type' => 3,
                'full_name' => '河北省/承德市/隆化县',
            ),
            207 => 
            array (
                'id' => 208,
                'parent_id' => 77,
                'code' => '130826',
                'name' => '丰宁满族自治县',
                'type' => 3,
                'full_name' => '河北省/承德市/丰宁满族自治县',
            ),
            208 => 
            array (
                'id' => 209,
                'parent_id' => 77,
                'code' => '130827',
                'name' => '宽城满族自治县',
                'type' => 3,
                'full_name' => '河北省/承德市/宽城满族自治县',
            ),
            209 => 
            array (
                'id' => 210,
                'parent_id' => 77,
                'code' => '130828',
                'name' => '围场满族蒙古族自治县',
                'type' => 3,
                'full_name' => '河北省/承德市/围场满族蒙古族自治县',
            ),
            210 => 
            array (
                'id' => 211,
                'parent_id' => 77,
                'code' => '130881',
                'name' => '平泉市',
                'type' => 3,
                'full_name' => '河北省/承德市/平泉市',
            ),
            211 => 
            array (
                'id' => 212,
                'parent_id' => 78,
                'code' => '130902',
                'name' => '新华区',
                'type' => 3,
                'full_name' => '河北省/沧州市/新华区',
            ),
            212 => 
            array (
                'id' => 213,
                'parent_id' => 78,
                'code' => '130903',
                'name' => '运河区',
                'type' => 3,
                'full_name' => '河北省/沧州市/运河区',
            ),
            213 => 
            array (
                'id' => 214,
                'parent_id' => 78,
                'code' => '130921',
                'name' => '沧县',
                'type' => 3,
                'full_name' => '河北省/沧州市/沧县',
            ),
            214 => 
            array (
                'id' => 215,
                'parent_id' => 78,
                'code' => '130922',
                'name' => '青县',
                'type' => 3,
                'full_name' => '河北省/沧州市/青县',
            ),
            215 => 
            array (
                'id' => 216,
                'parent_id' => 78,
                'code' => '130923',
                'name' => '东光县',
                'type' => 3,
                'full_name' => '河北省/沧州市/东光县',
            ),
            216 => 
            array (
                'id' => 217,
                'parent_id' => 78,
                'code' => '130924',
                'name' => '海兴县',
                'type' => 3,
                'full_name' => '河北省/沧州市/海兴县',
            ),
            217 => 
            array (
                'id' => 218,
                'parent_id' => 78,
                'code' => '130925',
                'name' => '盐山县',
                'type' => 3,
                'full_name' => '河北省/沧州市/盐山县',
            ),
            218 => 
            array (
                'id' => 219,
                'parent_id' => 78,
                'code' => '130926',
                'name' => '肃宁县',
                'type' => 3,
                'full_name' => '河北省/沧州市/肃宁县',
            ),
            219 => 
            array (
                'id' => 220,
                'parent_id' => 78,
                'code' => '130927',
                'name' => '南皮县',
                'type' => 3,
                'full_name' => '河北省/沧州市/南皮县',
            ),
            220 => 
            array (
                'id' => 221,
                'parent_id' => 78,
                'code' => '130928',
                'name' => '吴桥县',
                'type' => 3,
                'full_name' => '河北省/沧州市/吴桥县',
            ),
            221 => 
            array (
                'id' => 222,
                'parent_id' => 78,
                'code' => '130929',
                'name' => '献县',
                'type' => 3,
                'full_name' => '河北省/沧州市/献县',
            ),
            222 => 
            array (
                'id' => 223,
                'parent_id' => 78,
                'code' => '130930',
                'name' => '孟村回族自治县',
                'type' => 3,
                'full_name' => '河北省/沧州市/孟村回族自治县',
            ),
            223 => 
            array (
                'id' => 224,
                'parent_id' => 78,
                'code' => '130981',
                'name' => '泊头市',
                'type' => 3,
                'full_name' => '河北省/沧州市/泊头市',
            ),
            224 => 
            array (
                'id' => 225,
                'parent_id' => 78,
                'code' => '130982',
                'name' => '任丘市',
                'type' => 3,
                'full_name' => '河北省/沧州市/任丘市',
            ),
            225 => 
            array (
                'id' => 226,
                'parent_id' => 78,
                'code' => '130983',
                'name' => '黄骅市',
                'type' => 3,
                'full_name' => '河北省/沧州市/黄骅市',
            ),
            226 => 
            array (
                'id' => 227,
                'parent_id' => 78,
                'code' => '130984',
                'name' => '河间市',
                'type' => 3,
                'full_name' => '河北省/沧州市/河间市',
            ),
            227 => 
            array (
                'id' => 228,
                'parent_id' => 79,
                'code' => '131002',
                'name' => '安次区',
                'type' => 3,
                'full_name' => '河北省/廊坊市/安次区',
            ),
            228 => 
            array (
                'id' => 229,
                'parent_id' => 79,
                'code' => '131003',
                'name' => '广阳区',
                'type' => 3,
                'full_name' => '河北省/廊坊市/广阳区',
            ),
            229 => 
            array (
                'id' => 230,
                'parent_id' => 79,
                'code' => '131022',
                'name' => '固安县',
                'type' => 3,
                'full_name' => '河北省/廊坊市/固安县',
            ),
            230 => 
            array (
                'id' => 231,
                'parent_id' => 79,
                'code' => '131023',
                'name' => '永清县',
                'type' => 3,
                'full_name' => '河北省/廊坊市/永清县',
            ),
            231 => 
            array (
                'id' => 232,
                'parent_id' => 79,
                'code' => '131024',
                'name' => '香河县',
                'type' => 3,
                'full_name' => '河北省/廊坊市/香河县',
            ),
            232 => 
            array (
                'id' => 233,
                'parent_id' => 79,
                'code' => '131025',
                'name' => '大城县',
                'type' => 3,
                'full_name' => '河北省/廊坊市/大城县',
            ),
            233 => 
            array (
                'id' => 234,
                'parent_id' => 79,
                'code' => '131026',
                'name' => '文安县',
                'type' => 3,
                'full_name' => '河北省/廊坊市/文安县',
            ),
            234 => 
            array (
                'id' => 235,
                'parent_id' => 79,
                'code' => '131028',
                'name' => '大厂回族自治县',
                'type' => 3,
                'full_name' => '河北省/廊坊市/大厂回族自治县',
            ),
            235 => 
            array (
                'id' => 236,
                'parent_id' => 79,
                'code' => '131081',
                'name' => '霸州市',
                'type' => 3,
                'full_name' => '河北省/廊坊市/霸州市',
            ),
            236 => 
            array (
                'id' => 237,
                'parent_id' => 79,
                'code' => '131082',
                'name' => '三河市',
                'type' => 3,
                'full_name' => '河北省/廊坊市/三河市',
            ),
            237 => 
            array (
                'id' => 238,
                'parent_id' => 80,
                'code' => '131102',
                'name' => '桃城区',
                'type' => 3,
                'full_name' => '河北省/衡水市/桃城区',
            ),
            238 => 
            array (
                'id' => 239,
                'parent_id' => 80,
                'code' => '131103',
                'name' => '冀州区',
                'type' => 3,
                'full_name' => '河北省/衡水市/冀州区',
            ),
            239 => 
            array (
                'id' => 240,
                'parent_id' => 80,
                'code' => '131121',
                'name' => '枣强县',
                'type' => 3,
                'full_name' => '河北省/衡水市/枣强县',
            ),
            240 => 
            array (
                'id' => 241,
                'parent_id' => 80,
                'code' => '131122',
                'name' => '武邑县',
                'type' => 3,
                'full_name' => '河北省/衡水市/武邑县',
            ),
            241 => 
            array (
                'id' => 242,
                'parent_id' => 80,
                'code' => '131123',
                'name' => '武强县',
                'type' => 3,
                'full_name' => '河北省/衡水市/武强县',
            ),
            242 => 
            array (
                'id' => 243,
                'parent_id' => 80,
                'code' => '131124',
                'name' => '饶阳县',
                'type' => 3,
                'full_name' => '河北省/衡水市/饶阳县',
            ),
            243 => 
            array (
                'id' => 244,
                'parent_id' => 80,
                'code' => '131125',
                'name' => '安平县',
                'type' => 3,
                'full_name' => '河北省/衡水市/安平县',
            ),
            244 => 
            array (
                'id' => 245,
                'parent_id' => 80,
                'code' => '131126',
                'name' => '故城县',
                'type' => 3,
                'full_name' => '河北省/衡水市/故城县',
            ),
            245 => 
            array (
                'id' => 246,
                'parent_id' => 80,
                'code' => '131127',
                'name' => '景县',
                'type' => 3,
                'full_name' => '河北省/衡水市/景县',
            ),
            246 => 
            array (
                'id' => 247,
                'parent_id' => 80,
                'code' => '131128',
                'name' => '阜城县',
                'type' => 3,
                'full_name' => '河北省/衡水市/阜城县',
            ),
            247 => 
            array (
                'id' => 248,
                'parent_id' => 80,
                'code' => '131182',
                'name' => '深州市',
                'type' => 3,
                'full_name' => '河北省/衡水市/深州市',
            ),
            248 => 
            array (
                'id' => 249,
                'parent_id' => 5,
                'code' => '140100',
                'name' => '太原市',
                'type' => 2,
                'full_name' => '山西省/太原市',
            ),
            249 => 
            array (
                'id' => 250,
                'parent_id' => 5,
                'code' => '140200',
                'name' => '大同市',
                'type' => 2,
                'full_name' => '山西省/大同市',
            ),
            250 => 
            array (
                'id' => 251,
                'parent_id' => 5,
                'code' => '140300',
                'name' => '阳泉市',
                'type' => 2,
                'full_name' => '山西省/阳泉市',
            ),
            251 => 
            array (
                'id' => 252,
                'parent_id' => 5,
                'code' => '140400',
                'name' => '长治市',
                'type' => 2,
                'full_name' => '山西省/长治市',
            ),
            252 => 
            array (
                'id' => 253,
                'parent_id' => 5,
                'code' => '140500',
                'name' => '晋城市',
                'type' => 2,
                'full_name' => '山西省/晋城市',
            ),
            253 => 
            array (
                'id' => 254,
                'parent_id' => 5,
                'code' => '140600',
                'name' => '朔州市',
                'type' => 2,
                'full_name' => '山西省/朔州市',
            ),
            254 => 
            array (
                'id' => 255,
                'parent_id' => 5,
                'code' => '140700',
                'name' => '晋中市',
                'type' => 2,
                'full_name' => '山西省/晋中市',
            ),
            255 => 
            array (
                'id' => 256,
                'parent_id' => 5,
                'code' => '140800',
                'name' => '运城市',
                'type' => 2,
                'full_name' => '山西省/运城市',
            ),
            256 => 
            array (
                'id' => 257,
                'parent_id' => 5,
                'code' => '140900',
                'name' => '忻州市',
                'type' => 2,
                'full_name' => '山西省/忻州市',
            ),
            257 => 
            array (
                'id' => 258,
                'parent_id' => 5,
                'code' => '141000',
                'name' => '临汾市',
                'type' => 2,
                'full_name' => '山西省/临汾市',
            ),
            258 => 
            array (
                'id' => 259,
                'parent_id' => 5,
                'code' => '141100',
                'name' => '吕梁市',
                'type' => 2,
                'full_name' => '山西省/吕梁市',
            ),
            259 => 
            array (
                'id' => 260,
                'parent_id' => 249,
                'code' => '140105',
                'name' => '小店区',
                'type' => 3,
                'full_name' => '山西省/太原市/小店区',
            ),
            260 => 
            array (
                'id' => 261,
                'parent_id' => 249,
                'code' => '140106',
                'name' => '迎泽区',
                'type' => 3,
                'full_name' => '山西省/太原市/迎泽区',
            ),
            261 => 
            array (
                'id' => 262,
                'parent_id' => 249,
                'code' => '140107',
                'name' => '杏花岭区',
                'type' => 3,
                'full_name' => '山西省/太原市/杏花岭区',
            ),
            262 => 
            array (
                'id' => 263,
                'parent_id' => 249,
                'code' => '140108',
                'name' => '尖草坪区',
                'type' => 3,
                'full_name' => '山西省/太原市/尖草坪区',
            ),
            263 => 
            array (
                'id' => 264,
                'parent_id' => 249,
                'code' => '140109',
                'name' => '万柏林区',
                'type' => 3,
                'full_name' => '山西省/太原市/万柏林区',
            ),
            264 => 
            array (
                'id' => 265,
                'parent_id' => 249,
                'code' => '140110',
                'name' => '晋源区',
                'type' => 3,
                'full_name' => '山西省/太原市/晋源区',
            ),
            265 => 
            array (
                'id' => 266,
                'parent_id' => 249,
                'code' => '140121',
                'name' => '清徐县',
                'type' => 3,
                'full_name' => '山西省/太原市/清徐县',
            ),
            266 => 
            array (
                'id' => 267,
                'parent_id' => 249,
                'code' => '140122',
                'name' => '阳曲县',
                'type' => 3,
                'full_name' => '山西省/太原市/阳曲县',
            ),
            267 => 
            array (
                'id' => 268,
                'parent_id' => 249,
                'code' => '140123',
                'name' => '娄烦县',
                'type' => 3,
                'full_name' => '山西省/太原市/娄烦县',
            ),
            268 => 
            array (
                'id' => 269,
                'parent_id' => 249,
                'code' => '140181',
                'name' => '古交市',
                'type' => 3,
                'full_name' => '山西省/太原市/古交市',
            ),
            269 => 
            array (
                'id' => 270,
                'parent_id' => 250,
                'code' => '140202',
                'name' => '城区',
                'type' => 3,
                'full_name' => '山西省/大同市/城区',
            ),
            270 => 
            array (
                'id' => 271,
                'parent_id' => 250,
                'code' => '140203',
                'name' => '矿区',
                'type' => 3,
                'full_name' => '山西省/大同市/矿区',
            ),
            271 => 
            array (
                'id' => 272,
                'parent_id' => 250,
                'code' => '140211',
                'name' => '南郊区',
                'type' => 3,
                'full_name' => '山西省/大同市/南郊区',
            ),
            272 => 
            array (
                'id' => 273,
                'parent_id' => 250,
                'code' => '140212',
                'name' => '新荣区',
                'type' => 3,
                'full_name' => '山西省/大同市/新荣区',
            ),
            273 => 
            array (
                'id' => 274,
                'parent_id' => 250,
                'code' => '140221',
                'name' => '阳高县',
                'type' => 3,
                'full_name' => '山西省/大同市/阳高县',
            ),
            274 => 
            array (
                'id' => 275,
                'parent_id' => 250,
                'code' => '140222',
                'name' => '天镇县',
                'type' => 3,
                'full_name' => '山西省/大同市/天镇县',
            ),
            275 => 
            array (
                'id' => 276,
                'parent_id' => 250,
                'code' => '140223',
                'name' => '广灵县',
                'type' => 3,
                'full_name' => '山西省/大同市/广灵县',
            ),
            276 => 
            array (
                'id' => 277,
                'parent_id' => 250,
                'code' => '140224',
                'name' => '灵丘县',
                'type' => 3,
                'full_name' => '山西省/大同市/灵丘县',
            ),
            277 => 
            array (
                'id' => 278,
                'parent_id' => 250,
                'code' => '140225',
                'name' => '浑源县',
                'type' => 3,
                'full_name' => '山西省/大同市/浑源县',
            ),
            278 => 
            array (
                'id' => 279,
                'parent_id' => 250,
                'code' => '140226',
                'name' => '左云县',
                'type' => 3,
                'full_name' => '山西省/大同市/左云县',
            ),
            279 => 
            array (
                'id' => 280,
                'parent_id' => 250,
                'code' => '140227',
                'name' => '大同县',
                'type' => 3,
                'full_name' => '山西省/大同市/大同县',
            ),
            280 => 
            array (
                'id' => 281,
                'parent_id' => 251,
                'code' => '140302',
                'name' => '城区',
                'type' => 3,
                'full_name' => '山西省/阳泉市/城区',
            ),
            281 => 
            array (
                'id' => 282,
                'parent_id' => 251,
                'code' => '140303',
                'name' => '矿区',
                'type' => 3,
                'full_name' => '山西省/阳泉市/矿区',
            ),
            282 => 
            array (
                'id' => 283,
                'parent_id' => 251,
                'code' => '140311',
                'name' => '郊区',
                'type' => 3,
                'full_name' => '山西省/阳泉市/郊区',
            ),
            283 => 
            array (
                'id' => 284,
                'parent_id' => 251,
                'code' => '140321',
                'name' => '平定县',
                'type' => 3,
                'full_name' => '山西省/阳泉市/平定县',
            ),
            284 => 
            array (
                'id' => 285,
                'parent_id' => 251,
                'code' => '140322',
                'name' => '盂县',
                'type' => 3,
                'full_name' => '山西省/阳泉市/盂县',
            ),
            285 => 
            array (
                'id' => 286,
                'parent_id' => 252,
                'code' => '140402',
                'name' => '城区',
                'type' => 3,
                'full_name' => '山西省/长治市/城区',
            ),
            286 => 
            array (
                'id' => 287,
                'parent_id' => 252,
                'code' => '140411',
                'name' => '郊区',
                'type' => 3,
                'full_name' => '山西省/长治市/郊区',
            ),
            287 => 
            array (
                'id' => 288,
                'parent_id' => 252,
                'code' => '140421',
                'name' => '长治县',
                'type' => 3,
                'full_name' => '山西省/长治市/长治县',
            ),
            288 => 
            array (
                'id' => 289,
                'parent_id' => 252,
                'code' => '140423',
                'name' => '襄垣县',
                'type' => 3,
                'full_name' => '山西省/长治市/襄垣县',
            ),
            289 => 
            array (
                'id' => 290,
                'parent_id' => 252,
                'code' => '140424',
                'name' => '屯留县',
                'type' => 3,
                'full_name' => '山西省/长治市/屯留县',
            ),
            290 => 
            array (
                'id' => 291,
                'parent_id' => 252,
                'code' => '140425',
                'name' => '平顺县',
                'type' => 3,
                'full_name' => '山西省/长治市/平顺县',
            ),
            291 => 
            array (
                'id' => 292,
                'parent_id' => 252,
                'code' => '140426',
                'name' => '黎城县',
                'type' => 3,
                'full_name' => '山西省/长治市/黎城县',
            ),
            292 => 
            array (
                'id' => 293,
                'parent_id' => 252,
                'code' => '140427',
                'name' => '壶关县',
                'type' => 3,
                'full_name' => '山西省/长治市/壶关县',
            ),
            293 => 
            array (
                'id' => 294,
                'parent_id' => 252,
                'code' => '140428',
                'name' => '长子县',
                'type' => 3,
                'full_name' => '山西省/长治市/长子县',
            ),
            294 => 
            array (
                'id' => 295,
                'parent_id' => 252,
                'code' => '140429',
                'name' => '武乡县',
                'type' => 3,
                'full_name' => '山西省/长治市/武乡县',
            ),
            295 => 
            array (
                'id' => 296,
                'parent_id' => 252,
                'code' => '140430',
                'name' => '沁县',
                'type' => 3,
                'full_name' => '山西省/长治市/沁县',
            ),
            296 => 
            array (
                'id' => 297,
                'parent_id' => 252,
                'code' => '140431',
                'name' => '沁源县',
                'type' => 3,
                'full_name' => '山西省/长治市/沁源县',
            ),
            297 => 
            array (
                'id' => 298,
                'parent_id' => 252,
                'code' => '140481',
                'name' => '潞城市',
                'type' => 3,
                'full_name' => '山西省/长治市/潞城市',
            ),
            298 => 
            array (
                'id' => 299,
                'parent_id' => 253,
                'code' => '140502',
                'name' => '城区',
                'type' => 3,
                'full_name' => '山西省/晋城市/城区',
            ),
            299 => 
            array (
                'id' => 300,
                'parent_id' => 253,
                'code' => '140521',
                'name' => '沁水县',
                'type' => 3,
                'full_name' => '山西省/晋城市/沁水县',
            ),
            300 => 
            array (
                'id' => 301,
                'parent_id' => 253,
                'code' => '140522',
                'name' => '阳城县',
                'type' => 3,
                'full_name' => '山西省/晋城市/阳城县',
            ),
            301 => 
            array (
                'id' => 302,
                'parent_id' => 253,
                'code' => '140524',
                'name' => '陵川县',
                'type' => 3,
                'full_name' => '山西省/晋城市/陵川县',
            ),
            302 => 
            array (
                'id' => 303,
                'parent_id' => 253,
                'code' => '140525',
                'name' => '泽州县',
                'type' => 3,
                'full_name' => '山西省/晋城市/泽州县',
            ),
            303 => 
            array (
                'id' => 304,
                'parent_id' => 253,
                'code' => '140581',
                'name' => '高平市',
                'type' => 3,
                'full_name' => '山西省/晋城市/高平市',
            ),
            304 => 
            array (
                'id' => 305,
                'parent_id' => 254,
                'code' => '140602',
                'name' => '朔城区',
                'type' => 3,
                'full_name' => '山西省/朔州市/朔城区',
            ),
            305 => 
            array (
                'id' => 306,
                'parent_id' => 254,
                'code' => '140603',
                'name' => '平鲁区',
                'type' => 3,
                'full_name' => '山西省/朔州市/平鲁区',
            ),
            306 => 
            array (
                'id' => 307,
                'parent_id' => 254,
                'code' => '140621',
                'name' => '山阴县',
                'type' => 3,
                'full_name' => '山西省/朔州市/山阴县',
            ),
            307 => 
            array (
                'id' => 308,
                'parent_id' => 254,
                'code' => '140622',
                'name' => '应县',
                'type' => 3,
                'full_name' => '山西省/朔州市/应县',
            ),
            308 => 
            array (
                'id' => 309,
                'parent_id' => 254,
                'code' => '140623',
                'name' => '右玉县',
                'type' => 3,
                'full_name' => '山西省/朔州市/右玉县',
            ),
            309 => 
            array (
                'id' => 310,
                'parent_id' => 254,
                'code' => '140624',
                'name' => '怀仁县',
                'type' => 3,
                'full_name' => '山西省/朔州市/怀仁县',
            ),
            310 => 
            array (
                'id' => 311,
                'parent_id' => 255,
                'code' => '140702',
                'name' => '榆次区',
                'type' => 3,
                'full_name' => '山西省/晋中市/榆次区',
            ),
            311 => 
            array (
                'id' => 312,
                'parent_id' => 255,
                'code' => '140721',
                'name' => '榆社县',
                'type' => 3,
                'full_name' => '山西省/晋中市/榆社县',
            ),
            312 => 
            array (
                'id' => 313,
                'parent_id' => 255,
                'code' => '140722',
                'name' => '左权县',
                'type' => 3,
                'full_name' => '山西省/晋中市/左权县',
            ),
            313 => 
            array (
                'id' => 314,
                'parent_id' => 255,
                'code' => '140723',
                'name' => '和顺县',
                'type' => 3,
                'full_name' => '山西省/晋中市/和顺县',
            ),
            314 => 
            array (
                'id' => 315,
                'parent_id' => 255,
                'code' => '140724',
                'name' => '昔阳县',
                'type' => 3,
                'full_name' => '山西省/晋中市/昔阳县',
            ),
            315 => 
            array (
                'id' => 316,
                'parent_id' => 255,
                'code' => '140725',
                'name' => '寿阳县',
                'type' => 3,
                'full_name' => '山西省/晋中市/寿阳县',
            ),
            316 => 
            array (
                'id' => 317,
                'parent_id' => 255,
                'code' => '140726',
                'name' => '太谷县',
                'type' => 3,
                'full_name' => '山西省/晋中市/太谷县',
            ),
            317 => 
            array (
                'id' => 318,
                'parent_id' => 255,
                'code' => '140727',
                'name' => '祁县',
                'type' => 3,
                'full_name' => '山西省/晋中市/祁县',
            ),
            318 => 
            array (
                'id' => 319,
                'parent_id' => 255,
                'code' => '140728',
                'name' => '平遥县',
                'type' => 3,
                'full_name' => '山西省/晋中市/平遥县',
            ),
            319 => 
            array (
                'id' => 320,
                'parent_id' => 255,
                'code' => '140729',
                'name' => '灵石县',
                'type' => 3,
                'full_name' => '山西省/晋中市/灵石县',
            ),
            320 => 
            array (
                'id' => 321,
                'parent_id' => 255,
                'code' => '140781',
                'name' => '介休市',
                'type' => 3,
                'full_name' => '山西省/晋中市/介休市',
            ),
            321 => 
            array (
                'id' => 322,
                'parent_id' => 256,
                'code' => '140802',
                'name' => '盐湖区',
                'type' => 3,
                'full_name' => '山西省/运城市/盐湖区',
            ),
            322 => 
            array (
                'id' => 323,
                'parent_id' => 256,
                'code' => '140821',
                'name' => '临猗县',
                'type' => 3,
                'full_name' => '山西省/运城市/临猗县',
            ),
            323 => 
            array (
                'id' => 324,
                'parent_id' => 256,
                'code' => '140822',
                'name' => '万荣县',
                'type' => 3,
                'full_name' => '山西省/运城市/万荣县',
            ),
            324 => 
            array (
                'id' => 325,
                'parent_id' => 256,
                'code' => '140823',
                'name' => '闻喜县',
                'type' => 3,
                'full_name' => '山西省/运城市/闻喜县',
            ),
            325 => 
            array (
                'id' => 326,
                'parent_id' => 256,
                'code' => '140824',
                'name' => '稷山县',
                'type' => 3,
                'full_name' => '山西省/运城市/稷山县',
            ),
            326 => 
            array (
                'id' => 327,
                'parent_id' => 256,
                'code' => '140825',
                'name' => '新绛县',
                'type' => 3,
                'full_name' => '山西省/运城市/新绛县',
            ),
            327 => 
            array (
                'id' => 328,
                'parent_id' => 256,
                'code' => '140826',
                'name' => '绛县',
                'type' => 3,
                'full_name' => '山西省/运城市/绛县',
            ),
            328 => 
            array (
                'id' => 329,
                'parent_id' => 256,
                'code' => '140827',
                'name' => '垣曲县',
                'type' => 3,
                'full_name' => '山西省/运城市/垣曲县',
            ),
            329 => 
            array (
                'id' => 330,
                'parent_id' => 256,
                'code' => '140828',
                'name' => '夏县',
                'type' => 3,
                'full_name' => '山西省/运城市/夏县',
            ),
            330 => 
            array (
                'id' => 331,
                'parent_id' => 256,
                'code' => '140829',
                'name' => '平陆县',
                'type' => 3,
                'full_name' => '山西省/运城市/平陆县',
            ),
            331 => 
            array (
                'id' => 332,
                'parent_id' => 256,
                'code' => '140830',
                'name' => '芮城县',
                'type' => 3,
                'full_name' => '山西省/运城市/芮城县',
            ),
            332 => 
            array (
                'id' => 333,
                'parent_id' => 256,
                'code' => '140881',
                'name' => '永济市',
                'type' => 3,
                'full_name' => '山西省/运城市/永济市',
            ),
            333 => 
            array (
                'id' => 334,
                'parent_id' => 256,
                'code' => '140882',
                'name' => '河津市',
                'type' => 3,
                'full_name' => '山西省/运城市/河津市',
            ),
            334 => 
            array (
                'id' => 335,
                'parent_id' => 257,
                'code' => '140902',
                'name' => '忻府区',
                'type' => 3,
                'full_name' => '山西省/忻州市/忻府区',
            ),
            335 => 
            array (
                'id' => 336,
                'parent_id' => 257,
                'code' => '140921',
                'name' => '定襄县',
                'type' => 3,
                'full_name' => '山西省/忻州市/定襄县',
            ),
            336 => 
            array (
                'id' => 337,
                'parent_id' => 257,
                'code' => '140922',
                'name' => '五台县',
                'type' => 3,
                'full_name' => '山西省/忻州市/五台县',
            ),
            337 => 
            array (
                'id' => 338,
                'parent_id' => 257,
                'code' => '140923',
                'name' => '代县',
                'type' => 3,
                'full_name' => '山西省/忻州市/代县',
            ),
            338 => 
            array (
                'id' => 339,
                'parent_id' => 257,
                'code' => '140924',
                'name' => '繁峙县',
                'type' => 3,
                'full_name' => '山西省/忻州市/繁峙县',
            ),
            339 => 
            array (
                'id' => 340,
                'parent_id' => 257,
                'code' => '140925',
                'name' => '宁武县',
                'type' => 3,
                'full_name' => '山西省/忻州市/宁武县',
            ),
            340 => 
            array (
                'id' => 341,
                'parent_id' => 257,
                'code' => '140926',
                'name' => '静乐县',
                'type' => 3,
                'full_name' => '山西省/忻州市/静乐县',
            ),
            341 => 
            array (
                'id' => 342,
                'parent_id' => 257,
                'code' => '140927',
                'name' => '神池县',
                'type' => 3,
                'full_name' => '山西省/忻州市/神池县',
            ),
            342 => 
            array (
                'id' => 343,
                'parent_id' => 257,
                'code' => '140928',
                'name' => '五寨县',
                'type' => 3,
                'full_name' => '山西省/忻州市/五寨县',
            ),
            343 => 
            array (
                'id' => 344,
                'parent_id' => 257,
                'code' => '140929',
                'name' => '岢岚县',
                'type' => 3,
                'full_name' => '山西省/忻州市/岢岚县',
            ),
            344 => 
            array (
                'id' => 345,
                'parent_id' => 257,
                'code' => '140930',
                'name' => '河曲县',
                'type' => 3,
                'full_name' => '山西省/忻州市/河曲县',
            ),
            345 => 
            array (
                'id' => 346,
                'parent_id' => 257,
                'code' => '140931',
                'name' => '保德县',
                'type' => 3,
                'full_name' => '山西省/忻州市/保德县',
            ),
            346 => 
            array (
                'id' => 347,
                'parent_id' => 257,
                'code' => '140932',
                'name' => '偏关县',
                'type' => 3,
                'full_name' => '山西省/忻州市/偏关县',
            ),
            347 => 
            array (
                'id' => 348,
                'parent_id' => 257,
                'code' => '140981',
                'name' => '原平市',
                'type' => 3,
                'full_name' => '山西省/忻州市/原平市',
            ),
            348 => 
            array (
                'id' => 349,
                'parent_id' => 258,
                'code' => '141002',
                'name' => '尧都区',
                'type' => 3,
                'full_name' => '山西省/临汾市/尧都区',
            ),
            349 => 
            array (
                'id' => 350,
                'parent_id' => 258,
                'code' => '141021',
                'name' => '曲沃县',
                'type' => 3,
                'full_name' => '山西省/临汾市/曲沃县',
            ),
            350 => 
            array (
                'id' => 351,
                'parent_id' => 258,
                'code' => '141022',
                'name' => '翼城县',
                'type' => 3,
                'full_name' => '山西省/临汾市/翼城县',
            ),
            351 => 
            array (
                'id' => 352,
                'parent_id' => 258,
                'code' => '141023',
                'name' => '襄汾县',
                'type' => 3,
                'full_name' => '山西省/临汾市/襄汾县',
            ),
            352 => 
            array (
                'id' => 353,
                'parent_id' => 258,
                'code' => '141024',
                'name' => '洪洞县',
                'type' => 3,
                'full_name' => '山西省/临汾市/洪洞县',
            ),
            353 => 
            array (
                'id' => 354,
                'parent_id' => 258,
                'code' => '141025',
                'name' => '古县',
                'type' => 3,
                'full_name' => '山西省/临汾市/古县',
            ),
            354 => 
            array (
                'id' => 355,
                'parent_id' => 258,
                'code' => '141026',
                'name' => '安泽县',
                'type' => 3,
                'full_name' => '山西省/临汾市/安泽县',
            ),
            355 => 
            array (
                'id' => 356,
                'parent_id' => 258,
                'code' => '141027',
                'name' => '浮山县',
                'type' => 3,
                'full_name' => '山西省/临汾市/浮山县',
            ),
            356 => 
            array (
                'id' => 357,
                'parent_id' => 258,
                'code' => '141028',
                'name' => '吉县',
                'type' => 3,
                'full_name' => '山西省/临汾市/吉县',
            ),
            357 => 
            array (
                'id' => 358,
                'parent_id' => 258,
                'code' => '141029',
                'name' => '乡宁县',
                'type' => 3,
                'full_name' => '山西省/临汾市/乡宁县',
            ),
            358 => 
            array (
                'id' => 359,
                'parent_id' => 258,
                'code' => '141030',
                'name' => '大宁县',
                'type' => 3,
                'full_name' => '山西省/临汾市/大宁县',
            ),
            359 => 
            array (
                'id' => 360,
                'parent_id' => 258,
                'code' => '141031',
                'name' => '隰县',
                'type' => 3,
                'full_name' => '山西省/临汾市/隰县',
            ),
            360 => 
            array (
                'id' => 361,
                'parent_id' => 258,
                'code' => '141032',
                'name' => '永和县',
                'type' => 3,
                'full_name' => '山西省/临汾市/永和县',
            ),
            361 => 
            array (
                'id' => 362,
                'parent_id' => 258,
                'code' => '141033',
                'name' => '蒲县',
                'type' => 3,
                'full_name' => '山西省/临汾市/蒲县',
            ),
            362 => 
            array (
                'id' => 363,
                'parent_id' => 258,
                'code' => '141034',
                'name' => '汾西县',
                'type' => 3,
                'full_name' => '山西省/临汾市/汾西县',
            ),
            363 => 
            array (
                'id' => 364,
                'parent_id' => 258,
                'code' => '141081',
                'name' => '侯马市',
                'type' => 3,
                'full_name' => '山西省/临汾市/侯马市',
            ),
            364 => 
            array (
                'id' => 365,
                'parent_id' => 258,
                'code' => '141082',
                'name' => '霍州市',
                'type' => 3,
                'full_name' => '山西省/临汾市/霍州市',
            ),
            365 => 
            array (
                'id' => 366,
                'parent_id' => 259,
                'code' => '141102',
                'name' => '离石区',
                'type' => 3,
                'full_name' => '山西省/吕梁市/离石区',
            ),
            366 => 
            array (
                'id' => 367,
                'parent_id' => 259,
                'code' => '141121',
                'name' => '文水县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/文水县',
            ),
            367 => 
            array (
                'id' => 368,
                'parent_id' => 259,
                'code' => '141122',
                'name' => '交城县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/交城县',
            ),
            368 => 
            array (
                'id' => 369,
                'parent_id' => 259,
                'code' => '141123',
                'name' => '兴县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/兴县',
            ),
            369 => 
            array (
                'id' => 370,
                'parent_id' => 259,
                'code' => '141124',
                'name' => '临县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/临县',
            ),
            370 => 
            array (
                'id' => 371,
                'parent_id' => 259,
                'code' => '141125',
                'name' => '柳林县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/柳林县',
            ),
            371 => 
            array (
                'id' => 372,
                'parent_id' => 259,
                'code' => '141126',
                'name' => '石楼县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/石楼县',
            ),
            372 => 
            array (
                'id' => 373,
                'parent_id' => 259,
                'code' => '141127',
                'name' => '岚县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/岚县',
            ),
            373 => 
            array (
                'id' => 374,
                'parent_id' => 259,
                'code' => '141128',
                'name' => '方山县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/方山县',
            ),
            374 => 
            array (
                'id' => 375,
                'parent_id' => 259,
                'code' => '141129',
                'name' => '中阳县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/中阳县',
            ),
            375 => 
            array (
                'id' => 376,
                'parent_id' => 259,
                'code' => '141130',
                'name' => '交口县',
                'type' => 3,
                'full_name' => '山西省/吕梁市/交口县',
            ),
            376 => 
            array (
                'id' => 377,
                'parent_id' => 259,
                'code' => '141181',
                'name' => '孝义市',
                'type' => 3,
                'full_name' => '山西省/吕梁市/孝义市',
            ),
            377 => 
            array (
                'id' => 378,
                'parent_id' => 259,
                'code' => '141182',
                'name' => '汾阳市',
                'type' => 3,
                'full_name' => '山西省/吕梁市/汾阳市',
            ),
            378 => 
            array (
                'id' => 379,
                'parent_id' => 6,
                'code' => '150100',
                'name' => '呼和浩特市',
                'type' => 2,
                'full_name' => '内蒙古自治区/呼和浩特市',
            ),
            379 => 
            array (
                'id' => 380,
                'parent_id' => 6,
                'code' => '150200',
                'name' => '包头市',
                'type' => 2,
                'full_name' => '内蒙古自治区/包头市',
            ),
            380 => 
            array (
                'id' => 381,
                'parent_id' => 6,
                'code' => '150300',
                'name' => '乌海市',
                'type' => 2,
                'full_name' => '内蒙古自治区/乌海市',
            ),
            381 => 
            array (
                'id' => 382,
                'parent_id' => 6,
                'code' => '150400',
                'name' => '赤峰市',
                'type' => 2,
                'full_name' => '内蒙古自治区/赤峰市',
            ),
            382 => 
            array (
                'id' => 383,
                'parent_id' => 6,
                'code' => '150500',
                'name' => '通辽市',
                'type' => 2,
                'full_name' => '内蒙古自治区/通辽市',
            ),
            383 => 
            array (
                'id' => 384,
                'parent_id' => 6,
                'code' => '150600',
                'name' => '鄂尔多斯市',
                'type' => 2,
                'full_name' => '内蒙古自治区/鄂尔多斯市',
            ),
            384 => 
            array (
                'id' => 385,
                'parent_id' => 6,
                'code' => '150700',
                'name' => '呼伦贝尔市',
                'type' => 2,
                'full_name' => '内蒙古自治区/呼伦贝尔市',
            ),
            385 => 
            array (
                'id' => 386,
                'parent_id' => 6,
                'code' => '150800',
                'name' => '巴彦淖尔市',
                'type' => 2,
                'full_name' => '内蒙古自治区/巴彦淖尔市',
            ),
            386 => 
            array (
                'id' => 387,
                'parent_id' => 6,
                'code' => '150900',
                'name' => '乌兰察布市',
                'type' => 2,
                'full_name' => '内蒙古自治区/乌兰察布市',
            ),
            387 => 
            array (
                'id' => 388,
                'parent_id' => 6,
                'code' => '152200',
                'name' => '兴安盟',
                'type' => 2,
                'full_name' => '内蒙古自治区/兴安盟',
            ),
            388 => 
            array (
                'id' => 389,
                'parent_id' => 6,
                'code' => '152500',
                'name' => '锡林郭勒盟',
                'type' => 2,
                'full_name' => '内蒙古自治区/锡林郭勒盟',
            ),
            389 => 
            array (
                'id' => 390,
                'parent_id' => 6,
                'code' => '152900',
                'name' => '阿拉善盟',
                'type' => 2,
                'full_name' => '内蒙古自治区/阿拉善盟',
            ),
            390 => 
            array (
                'id' => 391,
                'parent_id' => 379,
                'code' => '150102',
                'name' => '新城区',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼和浩特市/新城区',
            ),
            391 => 
            array (
                'id' => 392,
                'parent_id' => 379,
                'code' => '150103',
                'name' => '回民区',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼和浩特市/回民区',
            ),
            392 => 
            array (
                'id' => 393,
                'parent_id' => 379,
                'code' => '150104',
                'name' => '玉泉区',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼和浩特市/玉泉区',
            ),
            393 => 
            array (
                'id' => 394,
                'parent_id' => 379,
                'code' => '150105',
                'name' => '赛罕区',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼和浩特市/赛罕区',
            ),
            394 => 
            array (
                'id' => 395,
                'parent_id' => 379,
                'code' => '150121',
                'name' => '土默特左旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼和浩特市/土默特左旗',
            ),
            395 => 
            array (
                'id' => 396,
                'parent_id' => 379,
                'code' => '150122',
                'name' => '托克托县',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼和浩特市/托克托县',
            ),
            396 => 
            array (
                'id' => 397,
                'parent_id' => 379,
                'code' => '150123',
                'name' => '和林格尔县',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼和浩特市/和林格尔县',
            ),
            397 => 
            array (
                'id' => 398,
                'parent_id' => 379,
                'code' => '150124',
                'name' => '清水河县',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼和浩特市/清水河县',
            ),
            398 => 
            array (
                'id' => 399,
                'parent_id' => 379,
                'code' => '150125',
                'name' => '武川县',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼和浩特市/武川县',
            ),
            399 => 
            array (
                'id' => 400,
                'parent_id' => 380,
                'code' => '150202',
                'name' => '东河区',
                'type' => 3,
                'full_name' => '内蒙古自治区/包头市/东河区',
            ),
            400 => 
            array (
                'id' => 401,
                'parent_id' => 380,
                'code' => '150203',
                'name' => '昆都仑区',
                'type' => 3,
                'full_name' => '内蒙古自治区/包头市/昆都仑区',
            ),
            401 => 
            array (
                'id' => 402,
                'parent_id' => 380,
                'code' => '150204',
                'name' => '青山区',
                'type' => 3,
                'full_name' => '内蒙古自治区/包头市/青山区',
            ),
            402 => 
            array (
                'id' => 403,
                'parent_id' => 380,
                'code' => '150205',
                'name' => '石拐区',
                'type' => 3,
                'full_name' => '内蒙古自治区/包头市/石拐区',
            ),
            403 => 
            array (
                'id' => 404,
                'parent_id' => 380,
                'code' => '150206',
                'name' => '白云鄂博矿区',
                'type' => 3,
                'full_name' => '内蒙古自治区/包头市/白云鄂博矿区',
            ),
            404 => 
            array (
                'id' => 405,
                'parent_id' => 380,
                'code' => '150207',
                'name' => '九原区',
                'type' => 3,
                'full_name' => '内蒙古自治区/包头市/九原区',
            ),
            405 => 
            array (
                'id' => 406,
                'parent_id' => 380,
                'code' => '150221',
                'name' => '土默特右旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/包头市/土默特右旗',
            ),
            406 => 
            array (
                'id' => 407,
                'parent_id' => 380,
                'code' => '150222',
                'name' => '固阳县',
                'type' => 3,
                'full_name' => '内蒙古自治区/包头市/固阳县',
            ),
            407 => 
            array (
                'id' => 408,
                'parent_id' => 380,
                'code' => '150223',
                'name' => '达尔罕茂明安联合旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/包头市/达尔罕茂明安联合旗',
            ),
            408 => 
            array (
                'id' => 409,
                'parent_id' => 381,
                'code' => '150302',
                'name' => '海勃湾区',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌海市/海勃湾区',
            ),
            409 => 
            array (
                'id' => 410,
                'parent_id' => 381,
                'code' => '150303',
                'name' => '海南区',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌海市/海南区',
            ),
            410 => 
            array (
                'id' => 411,
                'parent_id' => 381,
                'code' => '150304',
                'name' => '乌达区',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌海市/乌达区',
            ),
            411 => 
            array (
                'id' => 412,
                'parent_id' => 382,
                'code' => '150402',
                'name' => '红山区',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/红山区',
            ),
            412 => 
            array (
                'id' => 413,
                'parent_id' => 382,
                'code' => '150403',
                'name' => '元宝山区',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/元宝山区',
            ),
            413 => 
            array (
                'id' => 414,
                'parent_id' => 382,
                'code' => '150404',
                'name' => '松山区',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/松山区',
            ),
            414 => 
            array (
                'id' => 415,
                'parent_id' => 382,
                'code' => '150421',
                'name' => '阿鲁科尔沁旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/阿鲁科尔沁旗',
            ),
            415 => 
            array (
                'id' => 416,
                'parent_id' => 382,
                'code' => '150422',
                'name' => '巴林左旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/巴林左旗',
            ),
            416 => 
            array (
                'id' => 417,
                'parent_id' => 382,
                'code' => '150423',
                'name' => '巴林右旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/巴林右旗',
            ),
            417 => 
            array (
                'id' => 418,
                'parent_id' => 382,
                'code' => '150424',
                'name' => '林西县',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/林西县',
            ),
            418 => 
            array (
                'id' => 419,
                'parent_id' => 382,
                'code' => '150425',
                'name' => '克什克腾旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/克什克腾旗',
            ),
            419 => 
            array (
                'id' => 420,
                'parent_id' => 382,
                'code' => '150426',
                'name' => '翁牛特旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/翁牛特旗',
            ),
            420 => 
            array (
                'id' => 421,
                'parent_id' => 382,
                'code' => '150428',
                'name' => '喀喇沁旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/喀喇沁旗',
            ),
            421 => 
            array (
                'id' => 422,
                'parent_id' => 382,
                'code' => '150429',
                'name' => '宁城县',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/宁城县',
            ),
            422 => 
            array (
                'id' => 423,
                'parent_id' => 382,
                'code' => '150430',
                'name' => '敖汉旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/赤峰市/敖汉旗',
            ),
            423 => 
            array (
                'id' => 424,
                'parent_id' => 383,
                'code' => '150502',
                'name' => '科尔沁区',
                'type' => 3,
                'full_name' => '内蒙古自治区/通辽市/科尔沁区',
            ),
            424 => 
            array (
                'id' => 425,
                'parent_id' => 383,
                'code' => '150521',
                'name' => '科尔沁左翼中旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/通辽市/科尔沁左翼中旗',
            ),
            425 => 
            array (
                'id' => 426,
                'parent_id' => 383,
                'code' => '150522',
                'name' => '科尔沁左翼后旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/通辽市/科尔沁左翼后旗',
            ),
            426 => 
            array (
                'id' => 427,
                'parent_id' => 383,
                'code' => '150523',
                'name' => '开鲁县',
                'type' => 3,
                'full_name' => '内蒙古自治区/通辽市/开鲁县',
            ),
            427 => 
            array (
                'id' => 428,
                'parent_id' => 383,
                'code' => '150524',
                'name' => '库伦旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/通辽市/库伦旗',
            ),
            428 => 
            array (
                'id' => 429,
                'parent_id' => 383,
                'code' => '150525',
                'name' => '奈曼旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/通辽市/奈曼旗',
            ),
            429 => 
            array (
                'id' => 430,
                'parent_id' => 383,
                'code' => '150526',
                'name' => '扎鲁特旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/通辽市/扎鲁特旗',
            ),
            430 => 
            array (
                'id' => 431,
                'parent_id' => 383,
                'code' => '150581',
                'name' => '霍林郭勒市',
                'type' => 3,
                'full_name' => '内蒙古自治区/通辽市/霍林郭勒市',
            ),
            431 => 
            array (
                'id' => 432,
                'parent_id' => 384,
                'code' => '150602',
                'name' => '东胜区',
                'type' => 3,
                'full_name' => '内蒙古自治区/鄂尔多斯市/东胜区',
            ),
            432 => 
            array (
                'id' => 433,
                'parent_id' => 384,
                'code' => '150603',
                'name' => '康巴什区',
                'type' => 3,
                'full_name' => '内蒙古自治区/鄂尔多斯市/康巴什区',
            ),
            433 => 
            array (
                'id' => 434,
                'parent_id' => 384,
                'code' => '150621',
                'name' => '达拉特旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/鄂尔多斯市/达拉特旗',
            ),
            434 => 
            array (
                'id' => 435,
                'parent_id' => 384,
                'code' => '150622',
                'name' => '准格尔旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/鄂尔多斯市/准格尔旗',
            ),
            435 => 
            array (
                'id' => 436,
                'parent_id' => 384,
                'code' => '150623',
                'name' => '鄂托克前旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/鄂尔多斯市/鄂托克前旗',
            ),
            436 => 
            array (
                'id' => 437,
                'parent_id' => 384,
                'code' => '150624',
                'name' => '鄂托克旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/鄂尔多斯市/鄂托克旗',
            ),
            437 => 
            array (
                'id' => 438,
                'parent_id' => 384,
                'code' => '150625',
                'name' => '杭锦旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/鄂尔多斯市/杭锦旗',
            ),
            438 => 
            array (
                'id' => 439,
                'parent_id' => 384,
                'code' => '150626',
                'name' => '乌审旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/鄂尔多斯市/乌审旗',
            ),
            439 => 
            array (
                'id' => 440,
                'parent_id' => 384,
                'code' => '150627',
                'name' => '伊金霍洛旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/鄂尔多斯市/伊金霍洛旗',
            ),
            440 => 
            array (
                'id' => 441,
                'parent_id' => 385,
                'code' => '150702',
                'name' => '海拉尔区',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/海拉尔区',
            ),
            441 => 
            array (
                'id' => 442,
                'parent_id' => 385,
                'code' => '150703',
                'name' => '扎赉诺尔区',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/扎赉诺尔区',
            ),
            442 => 
            array (
                'id' => 443,
                'parent_id' => 385,
                'code' => '150721',
                'name' => '阿荣旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/阿荣旗',
            ),
            443 => 
            array (
                'id' => 444,
                'parent_id' => 385,
                'code' => '150722',
                'name' => '莫力达瓦达斡尔族自治旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/莫力达瓦达斡尔族自治旗',
            ),
            444 => 
            array (
                'id' => 445,
                'parent_id' => 385,
                'code' => '150723',
                'name' => '鄂伦春自治旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/鄂伦春自治旗',
            ),
            445 => 
            array (
                'id' => 446,
                'parent_id' => 385,
                'code' => '150724',
                'name' => '鄂温克族自治旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/鄂温克族自治旗',
            ),
            446 => 
            array (
                'id' => 447,
                'parent_id' => 385,
                'code' => '150725',
                'name' => '陈巴尔虎旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/陈巴尔虎旗',
            ),
            447 => 
            array (
                'id' => 448,
                'parent_id' => 385,
                'code' => '150726',
                'name' => '新巴尔虎左旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/新巴尔虎左旗',
            ),
            448 => 
            array (
                'id' => 449,
                'parent_id' => 385,
                'code' => '150727',
                'name' => '新巴尔虎右旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/新巴尔虎右旗',
            ),
            449 => 
            array (
                'id' => 450,
                'parent_id' => 385,
                'code' => '150781',
                'name' => '满洲里市',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/满洲里市',
            ),
            450 => 
            array (
                'id' => 451,
                'parent_id' => 385,
                'code' => '150782',
                'name' => '牙克石市',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/牙克石市',
            ),
            451 => 
            array (
                'id' => 452,
                'parent_id' => 385,
                'code' => '150783',
                'name' => '扎兰屯市',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/扎兰屯市',
            ),
            452 => 
            array (
                'id' => 453,
                'parent_id' => 385,
                'code' => '150784',
                'name' => '额尔古纳市',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/额尔古纳市',
            ),
            453 => 
            array (
                'id' => 454,
                'parent_id' => 385,
                'code' => '150785',
                'name' => '根河市',
                'type' => 3,
                'full_name' => '内蒙古自治区/呼伦贝尔市/根河市',
            ),
            454 => 
            array (
                'id' => 455,
                'parent_id' => 386,
                'code' => '150802',
                'name' => '临河区',
                'type' => 3,
                'full_name' => '内蒙古自治区/巴彦淖尔市/临河区',
            ),
            455 => 
            array (
                'id' => 456,
                'parent_id' => 386,
                'code' => '150821',
                'name' => '五原县',
                'type' => 3,
                'full_name' => '内蒙古自治区/巴彦淖尔市/五原县',
            ),
            456 => 
            array (
                'id' => 457,
                'parent_id' => 386,
                'code' => '150822',
                'name' => '磴口县',
                'type' => 3,
                'full_name' => '内蒙古自治区/巴彦淖尔市/磴口县',
            ),
            457 => 
            array (
                'id' => 458,
                'parent_id' => 386,
                'code' => '150823',
                'name' => '乌拉特前旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/巴彦淖尔市/乌拉特前旗',
            ),
            458 => 
            array (
                'id' => 459,
                'parent_id' => 386,
                'code' => '150824',
                'name' => '乌拉特中旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/巴彦淖尔市/乌拉特中旗',
            ),
            459 => 
            array (
                'id' => 460,
                'parent_id' => 386,
                'code' => '150825',
                'name' => '乌拉特后旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/巴彦淖尔市/乌拉特后旗',
            ),
            460 => 
            array (
                'id' => 461,
                'parent_id' => 386,
                'code' => '150826',
                'name' => '杭锦后旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/巴彦淖尔市/杭锦后旗',
            ),
            461 => 
            array (
                'id' => 462,
                'parent_id' => 387,
                'code' => '150902',
                'name' => '集宁区',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/集宁区',
            ),
            462 => 
            array (
                'id' => 463,
                'parent_id' => 387,
                'code' => '150921',
                'name' => '卓资县',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/卓资县',
            ),
            463 => 
            array (
                'id' => 464,
                'parent_id' => 387,
                'code' => '150922',
                'name' => '化德县',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/化德县',
            ),
            464 => 
            array (
                'id' => 465,
                'parent_id' => 387,
                'code' => '150923',
                'name' => '商都县',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/商都县',
            ),
            465 => 
            array (
                'id' => 466,
                'parent_id' => 387,
                'code' => '150924',
                'name' => '兴和县',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/兴和县',
            ),
            466 => 
            array (
                'id' => 467,
                'parent_id' => 387,
                'code' => '150925',
                'name' => '凉城县',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/凉城县',
            ),
            467 => 
            array (
                'id' => 468,
                'parent_id' => 387,
                'code' => '150926',
                'name' => '察哈尔右翼前旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/察哈尔右翼前旗',
            ),
            468 => 
            array (
                'id' => 469,
                'parent_id' => 387,
                'code' => '150927',
                'name' => '察哈尔右翼中旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/察哈尔右翼中旗',
            ),
            469 => 
            array (
                'id' => 470,
                'parent_id' => 387,
                'code' => '150928',
                'name' => '察哈尔右翼后旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/察哈尔右翼后旗',
            ),
            470 => 
            array (
                'id' => 471,
                'parent_id' => 387,
                'code' => '150929',
                'name' => '四子王旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/四子王旗',
            ),
            471 => 
            array (
                'id' => 472,
                'parent_id' => 387,
                'code' => '150981',
                'name' => '丰镇市',
                'type' => 3,
                'full_name' => '内蒙古自治区/乌兰察布市/丰镇市',
            ),
            472 => 
            array (
                'id' => 473,
                'parent_id' => 388,
                'code' => '152201',
                'name' => '乌兰浩特市',
                'type' => 3,
                'full_name' => '内蒙古自治区/兴安盟/乌兰浩特市',
            ),
            473 => 
            array (
                'id' => 474,
                'parent_id' => 388,
                'code' => '152202',
                'name' => '阿尔山市',
                'type' => 3,
                'full_name' => '内蒙古自治区/兴安盟/阿尔山市',
            ),
            474 => 
            array (
                'id' => 475,
                'parent_id' => 388,
                'code' => '152221',
                'name' => '科尔沁右翼前旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/兴安盟/科尔沁右翼前旗',
            ),
            475 => 
            array (
                'id' => 476,
                'parent_id' => 388,
                'code' => '152222',
                'name' => '科尔沁右翼中旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/兴安盟/科尔沁右翼中旗',
            ),
            476 => 
            array (
                'id' => 477,
                'parent_id' => 388,
                'code' => '152223',
                'name' => '扎赉特旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/兴安盟/扎赉特旗',
            ),
            477 => 
            array (
                'id' => 478,
                'parent_id' => 388,
                'code' => '152224',
                'name' => '突泉县',
                'type' => 3,
                'full_name' => '内蒙古自治区/兴安盟/突泉县',
            ),
            478 => 
            array (
                'id' => 479,
                'parent_id' => 389,
                'code' => '152501',
                'name' => '二连浩特市',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/二连浩特市',
            ),
            479 => 
            array (
                'id' => 480,
                'parent_id' => 389,
                'code' => '152502',
                'name' => '锡林浩特市',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/锡林浩特市',
            ),
            480 => 
            array (
                'id' => 481,
                'parent_id' => 389,
                'code' => '152522',
                'name' => '阿巴嘎旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/阿巴嘎旗',
            ),
            481 => 
            array (
                'id' => 482,
                'parent_id' => 389,
                'code' => '152523',
                'name' => '苏尼特左旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/苏尼特左旗',
            ),
            482 => 
            array (
                'id' => 483,
                'parent_id' => 389,
                'code' => '152524',
                'name' => '苏尼特右旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/苏尼特右旗',
            ),
            483 => 
            array (
                'id' => 484,
                'parent_id' => 389,
                'code' => '152525',
                'name' => '东乌珠穆沁旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/东乌珠穆沁旗',
            ),
            484 => 
            array (
                'id' => 485,
                'parent_id' => 389,
                'code' => '152526',
                'name' => '西乌珠穆沁旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/西乌珠穆沁旗',
            ),
            485 => 
            array (
                'id' => 486,
                'parent_id' => 389,
                'code' => '152527',
                'name' => '太仆寺旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/太仆寺旗',
            ),
            486 => 
            array (
                'id' => 487,
                'parent_id' => 389,
                'code' => '152528',
                'name' => '镶黄旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/镶黄旗',
            ),
            487 => 
            array (
                'id' => 488,
                'parent_id' => 389,
                'code' => '152529',
                'name' => '正镶白旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/正镶白旗',
            ),
            488 => 
            array (
                'id' => 489,
                'parent_id' => 389,
                'code' => '152530',
                'name' => '正蓝旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/正蓝旗',
            ),
            489 => 
            array (
                'id' => 490,
                'parent_id' => 389,
                'code' => '152531',
                'name' => '多伦县',
                'type' => 3,
                'full_name' => '内蒙古自治区/锡林郭勒盟/多伦县',
            ),
            490 => 
            array (
                'id' => 491,
                'parent_id' => 390,
                'code' => '152921',
                'name' => '阿拉善左旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/阿拉善盟/阿拉善左旗',
            ),
            491 => 
            array (
                'id' => 492,
                'parent_id' => 390,
                'code' => '152922',
                'name' => '阿拉善右旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/阿拉善盟/阿拉善右旗',
            ),
            492 => 
            array (
                'id' => 493,
                'parent_id' => 390,
                'code' => '152923',
                'name' => '额济纳旗',
                'type' => 3,
                'full_name' => '内蒙古自治区/阿拉善盟/额济纳旗',
            ),
            493 => 
            array (
                'id' => 494,
                'parent_id' => 7,
                'code' => '210100',
                'name' => '沈阳市',
                'type' => 2,
                'full_name' => '辽宁省/沈阳市',
            ),
            494 => 
            array (
                'id' => 495,
                'parent_id' => 7,
                'code' => '210200',
                'name' => '大连市',
                'type' => 2,
                'full_name' => '辽宁省/大连市',
            ),
            495 => 
            array (
                'id' => 496,
                'parent_id' => 7,
                'code' => '210300',
                'name' => '鞍山市',
                'type' => 2,
                'full_name' => '辽宁省/鞍山市',
            ),
            496 => 
            array (
                'id' => 497,
                'parent_id' => 7,
                'code' => '210400',
                'name' => '抚顺市',
                'type' => 2,
                'full_name' => '辽宁省/抚顺市',
            ),
            497 => 
            array (
                'id' => 498,
                'parent_id' => 7,
                'code' => '210500',
                'name' => '本溪市',
                'type' => 2,
                'full_name' => '辽宁省/本溪市',
            ),
            498 => 
            array (
                'id' => 499,
                'parent_id' => 7,
                'code' => '210600',
                'name' => '丹东市',
                'type' => 2,
                'full_name' => '辽宁省/丹东市',
            ),
            499 => 
            array (
                'id' => 500,
                'parent_id' => 7,
                'code' => '210700',
                'name' => '锦州市',
                'type' => 2,
                'full_name' => '辽宁省/锦州市',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 501,
                'parent_id' => 7,
                'code' => '210800',
                'name' => '营口市',
                'type' => 2,
                'full_name' => '辽宁省/营口市',
            ),
            1 => 
            array (
                'id' => 502,
                'parent_id' => 7,
                'code' => '210900',
                'name' => '阜新市',
                'type' => 2,
                'full_name' => '辽宁省/阜新市',
            ),
            2 => 
            array (
                'id' => 503,
                'parent_id' => 7,
                'code' => '211000',
                'name' => '辽阳市',
                'type' => 2,
                'full_name' => '辽宁省/辽阳市',
            ),
            3 => 
            array (
                'id' => 504,
                'parent_id' => 7,
                'code' => '211100',
                'name' => '盘锦市',
                'type' => 2,
                'full_name' => '辽宁省/盘锦市',
            ),
            4 => 
            array (
                'id' => 505,
                'parent_id' => 7,
                'code' => '211200',
                'name' => '铁岭市',
                'type' => 2,
                'full_name' => '辽宁省/铁岭市',
            ),
            5 => 
            array (
                'id' => 506,
                'parent_id' => 7,
                'code' => '211300',
                'name' => '朝阳市',
                'type' => 2,
                'full_name' => '辽宁省/朝阳市',
            ),
            6 => 
            array (
                'id' => 507,
                'parent_id' => 7,
                'code' => '211400',
                'name' => '葫芦岛市',
                'type' => 2,
                'full_name' => '辽宁省/葫芦岛市',
            ),
            7 => 
            array (
                'id' => 508,
                'parent_id' => 494,
                'code' => '210102',
                'name' => '和平区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/和平区',
            ),
            8 => 
            array (
                'id' => 509,
                'parent_id' => 494,
                'code' => '210103',
                'name' => '沈河区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/沈河区',
            ),
            9 => 
            array (
                'id' => 510,
                'parent_id' => 494,
                'code' => '210104',
                'name' => '大东区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/大东区',
            ),
            10 => 
            array (
                'id' => 511,
                'parent_id' => 494,
                'code' => '210105',
                'name' => '皇姑区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/皇姑区',
            ),
            11 => 
            array (
                'id' => 512,
                'parent_id' => 494,
                'code' => '210106',
                'name' => '铁西区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/铁西区',
            ),
            12 => 
            array (
                'id' => 513,
                'parent_id' => 494,
                'code' => '210111',
                'name' => '苏家屯区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/苏家屯区',
            ),
            13 => 
            array (
                'id' => 514,
                'parent_id' => 494,
                'code' => '210112',
                'name' => '浑南区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/浑南区',
            ),
            14 => 
            array (
                'id' => 515,
                'parent_id' => 494,
                'code' => '210113',
                'name' => '沈北新区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/沈北新区',
            ),
            15 => 
            array (
                'id' => 516,
                'parent_id' => 494,
                'code' => '210114',
                'name' => '于洪区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/于洪区',
            ),
            16 => 
            array (
                'id' => 517,
                'parent_id' => 494,
                'code' => '210115',
                'name' => '辽中区',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/辽中区',
            ),
            17 => 
            array (
                'id' => 518,
                'parent_id' => 494,
                'code' => '210123',
                'name' => '康平县',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/康平县',
            ),
            18 => 
            array (
                'id' => 519,
                'parent_id' => 494,
                'code' => '210124',
                'name' => '法库县',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/法库县',
            ),
            19 => 
            array (
                'id' => 520,
                'parent_id' => 494,
                'code' => '210181',
                'name' => '新民市',
                'type' => 3,
                'full_name' => '辽宁省/沈阳市/新民市',
            ),
            20 => 
            array (
                'id' => 521,
                'parent_id' => 495,
                'code' => '210202',
                'name' => '中山区',
                'type' => 3,
                'full_name' => '辽宁省/大连市/中山区',
            ),
            21 => 
            array (
                'id' => 522,
                'parent_id' => 495,
                'code' => '210203',
                'name' => '西岗区',
                'type' => 3,
                'full_name' => '辽宁省/大连市/西岗区',
            ),
            22 => 
            array (
                'id' => 523,
                'parent_id' => 495,
                'code' => '210204',
                'name' => '沙河口区',
                'type' => 3,
                'full_name' => '辽宁省/大连市/沙河口区',
            ),
            23 => 
            array (
                'id' => 524,
                'parent_id' => 495,
                'code' => '210211',
                'name' => '甘井子区',
                'type' => 3,
                'full_name' => '辽宁省/大连市/甘井子区',
            ),
            24 => 
            array (
                'id' => 525,
                'parent_id' => 495,
                'code' => '210212',
                'name' => '旅顺口区',
                'type' => 3,
                'full_name' => '辽宁省/大连市/旅顺口区',
            ),
            25 => 
            array (
                'id' => 526,
                'parent_id' => 495,
                'code' => '210213',
                'name' => '金州区',
                'type' => 3,
                'full_name' => '辽宁省/大连市/金州区',
            ),
            26 => 
            array (
                'id' => 527,
                'parent_id' => 495,
                'code' => '210214',
                'name' => '普兰店区',
                'type' => 3,
                'full_name' => '辽宁省/大连市/普兰店区',
            ),
            27 => 
            array (
                'id' => 528,
                'parent_id' => 495,
                'code' => '210224',
                'name' => '长海县',
                'type' => 3,
                'full_name' => '辽宁省/大连市/长海县',
            ),
            28 => 
            array (
                'id' => 529,
                'parent_id' => 495,
                'code' => '210281',
                'name' => '瓦房店市',
                'type' => 3,
                'full_name' => '辽宁省/大连市/瓦房店市',
            ),
            29 => 
            array (
                'id' => 530,
                'parent_id' => 495,
                'code' => '210283',
                'name' => '庄河市',
                'type' => 3,
                'full_name' => '辽宁省/大连市/庄河市',
            ),
            30 => 
            array (
                'id' => 531,
                'parent_id' => 496,
                'code' => '210302',
                'name' => '铁东区',
                'type' => 3,
                'full_name' => '辽宁省/鞍山市/铁东区',
            ),
            31 => 
            array (
                'id' => 532,
                'parent_id' => 496,
                'code' => '210303',
                'name' => '铁西区',
                'type' => 3,
                'full_name' => '辽宁省/鞍山市/铁西区',
            ),
            32 => 
            array (
                'id' => 533,
                'parent_id' => 496,
                'code' => '210304',
                'name' => '立山区',
                'type' => 3,
                'full_name' => '辽宁省/鞍山市/立山区',
            ),
            33 => 
            array (
                'id' => 534,
                'parent_id' => 496,
                'code' => '210311',
                'name' => '千山区',
                'type' => 3,
                'full_name' => '辽宁省/鞍山市/千山区',
            ),
            34 => 
            array (
                'id' => 535,
                'parent_id' => 496,
                'code' => '210321',
                'name' => '台安县',
                'type' => 3,
                'full_name' => '辽宁省/鞍山市/台安县',
            ),
            35 => 
            array (
                'id' => 536,
                'parent_id' => 496,
                'code' => '210323',
                'name' => '岫岩满族自治县',
                'type' => 3,
                'full_name' => '辽宁省/鞍山市/岫岩满族自治县',
            ),
            36 => 
            array (
                'id' => 537,
                'parent_id' => 496,
                'code' => '210381',
                'name' => '海城市',
                'type' => 3,
                'full_name' => '辽宁省/鞍山市/海城市',
            ),
            37 => 
            array (
                'id' => 538,
                'parent_id' => 497,
                'code' => '210402',
                'name' => '新抚区',
                'type' => 3,
                'full_name' => '辽宁省/抚顺市/新抚区',
            ),
            38 => 
            array (
                'id' => 539,
                'parent_id' => 497,
                'code' => '210403',
                'name' => '东洲区',
                'type' => 3,
                'full_name' => '辽宁省/抚顺市/东洲区',
            ),
            39 => 
            array (
                'id' => 540,
                'parent_id' => 497,
                'code' => '210404',
                'name' => '望花区',
                'type' => 3,
                'full_name' => '辽宁省/抚顺市/望花区',
            ),
            40 => 
            array (
                'id' => 541,
                'parent_id' => 497,
                'code' => '210411',
                'name' => '顺城区',
                'type' => 3,
                'full_name' => '辽宁省/抚顺市/顺城区',
            ),
            41 => 
            array (
                'id' => 542,
                'parent_id' => 497,
                'code' => '210421',
                'name' => '抚顺县',
                'type' => 3,
                'full_name' => '辽宁省/抚顺市/抚顺县',
            ),
            42 => 
            array (
                'id' => 543,
                'parent_id' => 497,
                'code' => '210422',
                'name' => '新宾满族自治县',
                'type' => 3,
                'full_name' => '辽宁省/抚顺市/新宾满族自治县',
            ),
            43 => 
            array (
                'id' => 544,
                'parent_id' => 497,
                'code' => '210423',
                'name' => '清原满族自治县',
                'type' => 3,
                'full_name' => '辽宁省/抚顺市/清原满族自治县',
            ),
            44 => 
            array (
                'id' => 545,
                'parent_id' => 498,
                'code' => '210502',
                'name' => '平山区',
                'type' => 3,
                'full_name' => '辽宁省/本溪市/平山区',
            ),
            45 => 
            array (
                'id' => 546,
                'parent_id' => 498,
                'code' => '210503',
                'name' => '溪湖区',
                'type' => 3,
                'full_name' => '辽宁省/本溪市/溪湖区',
            ),
            46 => 
            array (
                'id' => 547,
                'parent_id' => 498,
                'code' => '210504',
                'name' => '明山区',
                'type' => 3,
                'full_name' => '辽宁省/本溪市/明山区',
            ),
            47 => 
            array (
                'id' => 548,
                'parent_id' => 498,
                'code' => '210505',
                'name' => '南芬区',
                'type' => 3,
                'full_name' => '辽宁省/本溪市/南芬区',
            ),
            48 => 
            array (
                'id' => 549,
                'parent_id' => 498,
                'code' => '210521',
                'name' => '本溪满族自治县',
                'type' => 3,
                'full_name' => '辽宁省/本溪市/本溪满族自治县',
            ),
            49 => 
            array (
                'id' => 550,
                'parent_id' => 498,
                'code' => '210522',
                'name' => '桓仁满族自治县',
                'type' => 3,
                'full_name' => '辽宁省/本溪市/桓仁满族自治县',
            ),
            50 => 
            array (
                'id' => 551,
                'parent_id' => 499,
                'code' => '210602',
                'name' => '元宝区',
                'type' => 3,
                'full_name' => '辽宁省/丹东市/元宝区',
            ),
            51 => 
            array (
                'id' => 552,
                'parent_id' => 499,
                'code' => '210603',
                'name' => '振兴区',
                'type' => 3,
                'full_name' => '辽宁省/丹东市/振兴区',
            ),
            52 => 
            array (
                'id' => 553,
                'parent_id' => 499,
                'code' => '210604',
                'name' => '振安区',
                'type' => 3,
                'full_name' => '辽宁省/丹东市/振安区',
            ),
            53 => 
            array (
                'id' => 554,
                'parent_id' => 499,
                'code' => '210624',
                'name' => '宽甸满族自治县',
                'type' => 3,
                'full_name' => '辽宁省/丹东市/宽甸满族自治县',
            ),
            54 => 
            array (
                'id' => 555,
                'parent_id' => 499,
                'code' => '210681',
                'name' => '东港市',
                'type' => 3,
                'full_name' => '辽宁省/丹东市/东港市',
            ),
            55 => 
            array (
                'id' => 556,
                'parent_id' => 499,
                'code' => '210682',
                'name' => '凤城市',
                'type' => 3,
                'full_name' => '辽宁省/丹东市/凤城市',
            ),
            56 => 
            array (
                'id' => 557,
                'parent_id' => 500,
                'code' => '210702',
                'name' => '古塔区',
                'type' => 3,
                'full_name' => '辽宁省/锦州市/古塔区',
            ),
            57 => 
            array (
                'id' => 558,
                'parent_id' => 500,
                'code' => '210703',
                'name' => '凌河区',
                'type' => 3,
                'full_name' => '辽宁省/锦州市/凌河区',
            ),
            58 => 
            array (
                'id' => 559,
                'parent_id' => 500,
                'code' => '210711',
                'name' => '太和区',
                'type' => 3,
                'full_name' => '辽宁省/锦州市/太和区',
            ),
            59 => 
            array (
                'id' => 560,
                'parent_id' => 500,
                'code' => '210726',
                'name' => '黑山县',
                'type' => 3,
                'full_name' => '辽宁省/锦州市/黑山县',
            ),
            60 => 
            array (
                'id' => 561,
                'parent_id' => 500,
                'code' => '210727',
                'name' => '义县',
                'type' => 3,
                'full_name' => '辽宁省/锦州市/义县',
            ),
            61 => 
            array (
                'id' => 562,
                'parent_id' => 500,
                'code' => '210781',
                'name' => '凌海市',
                'type' => 3,
                'full_name' => '辽宁省/锦州市/凌海市',
            ),
            62 => 
            array (
                'id' => 563,
                'parent_id' => 500,
                'code' => '210782',
                'name' => '北镇市',
                'type' => 3,
                'full_name' => '辽宁省/锦州市/北镇市',
            ),
            63 => 
            array (
                'id' => 564,
                'parent_id' => 501,
                'code' => '210802',
                'name' => '站前区',
                'type' => 3,
                'full_name' => '辽宁省/营口市/站前区',
            ),
            64 => 
            array (
                'id' => 565,
                'parent_id' => 501,
                'code' => '210803',
                'name' => '西市区',
                'type' => 3,
                'full_name' => '辽宁省/营口市/西市区',
            ),
            65 => 
            array (
                'id' => 566,
                'parent_id' => 501,
                'code' => '210804',
                'name' => '鲅鱼圈区',
                'type' => 3,
                'full_name' => '辽宁省/营口市/鲅鱼圈区',
            ),
            66 => 
            array (
                'id' => 567,
                'parent_id' => 501,
                'code' => '210811',
                'name' => '老边区',
                'type' => 3,
                'full_name' => '辽宁省/营口市/老边区',
            ),
            67 => 
            array (
                'id' => 568,
                'parent_id' => 501,
                'code' => '210881',
                'name' => '盖州市',
                'type' => 3,
                'full_name' => '辽宁省/营口市/盖州市',
            ),
            68 => 
            array (
                'id' => 569,
                'parent_id' => 501,
                'code' => '210882',
                'name' => '大石桥市',
                'type' => 3,
                'full_name' => '辽宁省/营口市/大石桥市',
            ),
            69 => 
            array (
                'id' => 570,
                'parent_id' => 502,
                'code' => '210902',
                'name' => '海州区',
                'type' => 3,
                'full_name' => '辽宁省/阜新市/海州区',
            ),
            70 => 
            array (
                'id' => 571,
                'parent_id' => 502,
                'code' => '210903',
                'name' => '新邱区',
                'type' => 3,
                'full_name' => '辽宁省/阜新市/新邱区',
            ),
            71 => 
            array (
                'id' => 572,
                'parent_id' => 502,
                'code' => '210904',
                'name' => '太平区',
                'type' => 3,
                'full_name' => '辽宁省/阜新市/太平区',
            ),
            72 => 
            array (
                'id' => 573,
                'parent_id' => 502,
                'code' => '210905',
                'name' => '清河门区',
                'type' => 3,
                'full_name' => '辽宁省/阜新市/清河门区',
            ),
            73 => 
            array (
                'id' => 574,
                'parent_id' => 502,
                'code' => '210911',
                'name' => '细河区',
                'type' => 3,
                'full_name' => '辽宁省/阜新市/细河区',
            ),
            74 => 
            array (
                'id' => 575,
                'parent_id' => 502,
                'code' => '210921',
                'name' => '阜新蒙古族自治县',
                'type' => 3,
                'full_name' => '辽宁省/阜新市/阜新蒙古族自治县',
            ),
            75 => 
            array (
                'id' => 576,
                'parent_id' => 502,
                'code' => '210922',
                'name' => '彰武县',
                'type' => 3,
                'full_name' => '辽宁省/阜新市/彰武县',
            ),
            76 => 
            array (
                'id' => 577,
                'parent_id' => 503,
                'code' => '211002',
                'name' => '白塔区',
                'type' => 3,
                'full_name' => '辽宁省/辽阳市/白塔区',
            ),
            77 => 
            array (
                'id' => 578,
                'parent_id' => 503,
                'code' => '211003',
                'name' => '文圣区',
                'type' => 3,
                'full_name' => '辽宁省/辽阳市/文圣区',
            ),
            78 => 
            array (
                'id' => 579,
                'parent_id' => 503,
                'code' => '211004',
                'name' => '宏伟区',
                'type' => 3,
                'full_name' => '辽宁省/辽阳市/宏伟区',
            ),
            79 => 
            array (
                'id' => 580,
                'parent_id' => 503,
                'code' => '211005',
                'name' => '弓长岭区',
                'type' => 3,
                'full_name' => '辽宁省/辽阳市/弓长岭区',
            ),
            80 => 
            array (
                'id' => 581,
                'parent_id' => 503,
                'code' => '211011',
                'name' => '太子河区',
                'type' => 3,
                'full_name' => '辽宁省/辽阳市/太子河区',
            ),
            81 => 
            array (
                'id' => 582,
                'parent_id' => 503,
                'code' => '211021',
                'name' => '辽阳县',
                'type' => 3,
                'full_name' => '辽宁省/辽阳市/辽阳县',
            ),
            82 => 
            array (
                'id' => 583,
                'parent_id' => 503,
                'code' => '211081',
                'name' => '灯塔市',
                'type' => 3,
                'full_name' => '辽宁省/辽阳市/灯塔市',
            ),
            83 => 
            array (
                'id' => 584,
                'parent_id' => 504,
                'code' => '211102',
                'name' => '双台子区',
                'type' => 3,
                'full_name' => '辽宁省/盘锦市/双台子区',
            ),
            84 => 
            array (
                'id' => 585,
                'parent_id' => 504,
                'code' => '211103',
                'name' => '兴隆台区',
                'type' => 3,
                'full_name' => '辽宁省/盘锦市/兴隆台区',
            ),
            85 => 
            array (
                'id' => 586,
                'parent_id' => 504,
                'code' => '211104',
                'name' => '大洼区',
                'type' => 3,
                'full_name' => '辽宁省/盘锦市/大洼区',
            ),
            86 => 
            array (
                'id' => 587,
                'parent_id' => 504,
                'code' => '211122',
                'name' => '盘山县',
                'type' => 3,
                'full_name' => '辽宁省/盘锦市/盘山县',
            ),
            87 => 
            array (
                'id' => 588,
                'parent_id' => 505,
                'code' => '211202',
                'name' => '银州区',
                'type' => 3,
                'full_name' => '辽宁省/铁岭市/银州区',
            ),
            88 => 
            array (
                'id' => 589,
                'parent_id' => 505,
                'code' => '211204',
                'name' => '清河区',
                'type' => 3,
                'full_name' => '辽宁省/铁岭市/清河区',
            ),
            89 => 
            array (
                'id' => 590,
                'parent_id' => 505,
                'code' => '211221',
                'name' => '铁岭县',
                'type' => 3,
                'full_name' => '辽宁省/铁岭市/铁岭县',
            ),
            90 => 
            array (
                'id' => 591,
                'parent_id' => 505,
                'code' => '211223',
                'name' => '西丰县',
                'type' => 3,
                'full_name' => '辽宁省/铁岭市/西丰县',
            ),
            91 => 
            array (
                'id' => 592,
                'parent_id' => 505,
                'code' => '211224',
                'name' => '昌图县',
                'type' => 3,
                'full_name' => '辽宁省/铁岭市/昌图县',
            ),
            92 => 
            array (
                'id' => 593,
                'parent_id' => 505,
                'code' => '211281',
                'name' => '调兵山市',
                'type' => 3,
                'full_name' => '辽宁省/铁岭市/调兵山市',
            ),
            93 => 
            array (
                'id' => 594,
                'parent_id' => 505,
                'code' => '211282',
                'name' => '开原市',
                'type' => 3,
                'full_name' => '辽宁省/铁岭市/开原市',
            ),
            94 => 
            array (
                'id' => 595,
                'parent_id' => 506,
                'code' => '211302',
                'name' => '双塔区',
                'type' => 3,
                'full_name' => '辽宁省/朝阳市/双塔区',
            ),
            95 => 
            array (
                'id' => 596,
                'parent_id' => 506,
                'code' => '211303',
                'name' => '龙城区',
                'type' => 3,
                'full_name' => '辽宁省/朝阳市/龙城区',
            ),
            96 => 
            array (
                'id' => 597,
                'parent_id' => 506,
                'code' => '211321',
                'name' => '朝阳县',
                'type' => 3,
                'full_name' => '辽宁省/朝阳市/朝阳县',
            ),
            97 => 
            array (
                'id' => 598,
                'parent_id' => 506,
                'code' => '211322',
                'name' => '建平县',
                'type' => 3,
                'full_name' => '辽宁省/朝阳市/建平县',
            ),
            98 => 
            array (
                'id' => 599,
                'parent_id' => 506,
                'code' => '211324',
                'name' => '喀喇沁左翼蒙古族自治县',
                'type' => 3,
                'full_name' => '辽宁省/朝阳市/喀喇沁左翼蒙古族自治县',
            ),
            99 => 
            array (
                'id' => 600,
                'parent_id' => 506,
                'code' => '211381',
                'name' => '北票市',
                'type' => 3,
                'full_name' => '辽宁省/朝阳市/北票市',
            ),
            100 => 
            array (
                'id' => 601,
                'parent_id' => 506,
                'code' => '211382',
                'name' => '凌源市',
                'type' => 3,
                'full_name' => '辽宁省/朝阳市/凌源市',
            ),
            101 => 
            array (
                'id' => 602,
                'parent_id' => 507,
                'code' => '211402',
                'name' => '连山区',
                'type' => 3,
                'full_name' => '辽宁省/葫芦岛市/连山区',
            ),
            102 => 
            array (
                'id' => 603,
                'parent_id' => 507,
                'code' => '211403',
                'name' => '龙港区',
                'type' => 3,
                'full_name' => '辽宁省/葫芦岛市/龙港区',
            ),
            103 => 
            array (
                'id' => 604,
                'parent_id' => 507,
                'code' => '211404',
                'name' => '南票区',
                'type' => 3,
                'full_name' => '辽宁省/葫芦岛市/南票区',
            ),
            104 => 
            array (
                'id' => 605,
                'parent_id' => 507,
                'code' => '211421',
                'name' => '绥中县',
                'type' => 3,
                'full_name' => '辽宁省/葫芦岛市/绥中县',
            ),
            105 => 
            array (
                'id' => 606,
                'parent_id' => 507,
                'code' => '211422',
                'name' => '建昌县',
                'type' => 3,
                'full_name' => '辽宁省/葫芦岛市/建昌县',
            ),
            106 => 
            array (
                'id' => 607,
                'parent_id' => 507,
                'code' => '211481',
                'name' => '兴城市',
                'type' => 3,
                'full_name' => '辽宁省/葫芦岛市/兴城市',
            ),
            107 => 
            array (
                'id' => 608,
                'parent_id' => 8,
                'code' => '220100',
                'name' => '长春市',
                'type' => 2,
                'full_name' => '吉林省/长春市',
            ),
            108 => 
            array (
                'id' => 609,
                'parent_id' => 8,
                'code' => '220200',
                'name' => '吉林市',
                'type' => 2,
                'full_name' => '吉林省/吉林市',
            ),
            109 => 
            array (
                'id' => 610,
                'parent_id' => 8,
                'code' => '220300',
                'name' => '四平市',
                'type' => 2,
                'full_name' => '吉林省/四平市',
            ),
            110 => 
            array (
                'id' => 611,
                'parent_id' => 8,
                'code' => '220400',
                'name' => '辽源市',
                'type' => 2,
                'full_name' => '吉林省/辽源市',
            ),
            111 => 
            array (
                'id' => 612,
                'parent_id' => 8,
                'code' => '220500',
                'name' => '通化市',
                'type' => 2,
                'full_name' => '吉林省/通化市',
            ),
            112 => 
            array (
                'id' => 613,
                'parent_id' => 8,
                'code' => '220600',
                'name' => '白山市',
                'type' => 2,
                'full_name' => '吉林省/白山市',
            ),
            113 => 
            array (
                'id' => 614,
                'parent_id' => 8,
                'code' => '220700',
                'name' => '松原市',
                'type' => 2,
                'full_name' => '吉林省/松原市',
            ),
            114 => 
            array (
                'id' => 615,
                'parent_id' => 8,
                'code' => '220800',
                'name' => '白城市',
                'type' => 2,
                'full_name' => '吉林省/白城市',
            ),
            115 => 
            array (
                'id' => 616,
                'parent_id' => 8,
                'code' => '222400',
                'name' => '延边朝鲜族自治州',
                'type' => 2,
                'full_name' => '吉林省/延边朝鲜族自治州',
            ),
            116 => 
            array (
                'id' => 617,
                'parent_id' => 608,
                'code' => '220102',
                'name' => '南关区',
                'type' => 3,
                'full_name' => '吉林省/长春市/南关区',
            ),
            117 => 
            array (
                'id' => 618,
                'parent_id' => 608,
                'code' => '220103',
                'name' => '宽城区',
                'type' => 3,
                'full_name' => '吉林省/长春市/宽城区',
            ),
            118 => 
            array (
                'id' => 619,
                'parent_id' => 608,
                'code' => '220104',
                'name' => '朝阳区',
                'type' => 3,
                'full_name' => '吉林省/长春市/朝阳区',
            ),
            119 => 
            array (
                'id' => 620,
                'parent_id' => 608,
                'code' => '220105',
                'name' => '二道区',
                'type' => 3,
                'full_name' => '吉林省/长春市/二道区',
            ),
            120 => 
            array (
                'id' => 621,
                'parent_id' => 608,
                'code' => '220106',
                'name' => '绿园区',
                'type' => 3,
                'full_name' => '吉林省/长春市/绿园区',
            ),
            121 => 
            array (
                'id' => 622,
                'parent_id' => 608,
                'code' => '220112',
                'name' => '双阳区',
                'type' => 3,
                'full_name' => '吉林省/长春市/双阳区',
            ),
            122 => 
            array (
                'id' => 623,
                'parent_id' => 608,
                'code' => '220113',
                'name' => '九台区',
                'type' => 3,
                'full_name' => '吉林省/长春市/九台区',
            ),
            123 => 
            array (
                'id' => 624,
                'parent_id' => 608,
                'code' => '220122',
                'name' => '农安县',
                'type' => 3,
                'full_name' => '吉林省/长春市/农安县',
            ),
            124 => 
            array (
                'id' => 625,
                'parent_id' => 608,
                'code' => '220182',
                'name' => '榆树市',
                'type' => 3,
                'full_name' => '吉林省/长春市/榆树市',
            ),
            125 => 
            array (
                'id' => 626,
                'parent_id' => 608,
                'code' => '220183',
                'name' => '德惠市',
                'type' => 3,
                'full_name' => '吉林省/长春市/德惠市',
            ),
            126 => 
            array (
                'id' => 627,
                'parent_id' => 609,
                'code' => '220202',
                'name' => '昌邑区',
                'type' => 3,
                'full_name' => '吉林省/吉林市/昌邑区',
            ),
            127 => 
            array (
                'id' => 628,
                'parent_id' => 609,
                'code' => '220203',
                'name' => '龙潭区',
                'type' => 3,
                'full_name' => '吉林省/吉林市/龙潭区',
            ),
            128 => 
            array (
                'id' => 629,
                'parent_id' => 609,
                'code' => '220204',
                'name' => '船营区',
                'type' => 3,
                'full_name' => '吉林省/吉林市/船营区',
            ),
            129 => 
            array (
                'id' => 630,
                'parent_id' => 609,
                'code' => '220211',
                'name' => '丰满区',
                'type' => 3,
                'full_name' => '吉林省/吉林市/丰满区',
            ),
            130 => 
            array (
                'id' => 631,
                'parent_id' => 609,
                'code' => '220221',
                'name' => '永吉县',
                'type' => 3,
                'full_name' => '吉林省/吉林市/永吉县',
            ),
            131 => 
            array (
                'id' => 632,
                'parent_id' => 609,
                'code' => '220281',
                'name' => '蛟河市',
                'type' => 3,
                'full_name' => '吉林省/吉林市/蛟河市',
            ),
            132 => 
            array (
                'id' => 633,
                'parent_id' => 609,
                'code' => '220282',
                'name' => '桦甸市',
                'type' => 3,
                'full_name' => '吉林省/吉林市/桦甸市',
            ),
            133 => 
            array (
                'id' => 634,
                'parent_id' => 609,
                'code' => '220283',
                'name' => '舒兰市',
                'type' => 3,
                'full_name' => '吉林省/吉林市/舒兰市',
            ),
            134 => 
            array (
                'id' => 635,
                'parent_id' => 609,
                'code' => '220284',
                'name' => '磐石市',
                'type' => 3,
                'full_name' => '吉林省/吉林市/磐石市',
            ),
            135 => 
            array (
                'id' => 636,
                'parent_id' => 610,
                'code' => '220302',
                'name' => '铁西区',
                'type' => 3,
                'full_name' => '吉林省/四平市/铁西区',
            ),
            136 => 
            array (
                'id' => 637,
                'parent_id' => 610,
                'code' => '220303',
                'name' => '铁东区',
                'type' => 3,
                'full_name' => '吉林省/四平市/铁东区',
            ),
            137 => 
            array (
                'id' => 638,
                'parent_id' => 610,
                'code' => '220322',
                'name' => '梨树县',
                'type' => 3,
                'full_name' => '吉林省/四平市/梨树县',
            ),
            138 => 
            array (
                'id' => 639,
                'parent_id' => 610,
                'code' => '220323',
                'name' => '伊通满族自治县',
                'type' => 3,
                'full_name' => '吉林省/四平市/伊通满族自治县',
            ),
            139 => 
            array (
                'id' => 640,
                'parent_id' => 610,
                'code' => '220381',
                'name' => '公主岭市',
                'type' => 3,
                'full_name' => '吉林省/四平市/公主岭市',
            ),
            140 => 
            array (
                'id' => 641,
                'parent_id' => 610,
                'code' => '220382',
                'name' => '双辽市',
                'type' => 3,
                'full_name' => '吉林省/四平市/双辽市',
            ),
            141 => 
            array (
                'id' => 642,
                'parent_id' => 611,
                'code' => '220402',
                'name' => '龙山区',
                'type' => 3,
                'full_name' => '吉林省/辽源市/龙山区',
            ),
            142 => 
            array (
                'id' => 643,
                'parent_id' => 611,
                'code' => '220403',
                'name' => '西安区',
                'type' => 3,
                'full_name' => '吉林省/辽源市/西安区',
            ),
            143 => 
            array (
                'id' => 644,
                'parent_id' => 611,
                'code' => '220421',
                'name' => '东丰县',
                'type' => 3,
                'full_name' => '吉林省/辽源市/东丰县',
            ),
            144 => 
            array (
                'id' => 645,
                'parent_id' => 611,
                'code' => '220422',
                'name' => '东辽县',
                'type' => 3,
                'full_name' => '吉林省/辽源市/东辽县',
            ),
            145 => 
            array (
                'id' => 646,
                'parent_id' => 612,
                'code' => '220502',
                'name' => '东昌区',
                'type' => 3,
                'full_name' => '吉林省/通化市/东昌区',
            ),
            146 => 
            array (
                'id' => 647,
                'parent_id' => 612,
                'code' => '220503',
                'name' => '二道江区',
                'type' => 3,
                'full_name' => '吉林省/通化市/二道江区',
            ),
            147 => 
            array (
                'id' => 648,
                'parent_id' => 612,
                'code' => '220521',
                'name' => '通化县',
                'type' => 3,
                'full_name' => '吉林省/通化市/通化县',
            ),
            148 => 
            array (
                'id' => 649,
                'parent_id' => 612,
                'code' => '220523',
                'name' => '辉南县',
                'type' => 3,
                'full_name' => '吉林省/通化市/辉南县',
            ),
            149 => 
            array (
                'id' => 650,
                'parent_id' => 612,
                'code' => '220524',
                'name' => '柳河县',
                'type' => 3,
                'full_name' => '吉林省/通化市/柳河县',
            ),
            150 => 
            array (
                'id' => 651,
                'parent_id' => 612,
                'code' => '220581',
                'name' => '梅河口市',
                'type' => 3,
                'full_name' => '吉林省/通化市/梅河口市',
            ),
            151 => 
            array (
                'id' => 652,
                'parent_id' => 612,
                'code' => '220582',
                'name' => '集安市',
                'type' => 3,
                'full_name' => '吉林省/通化市/集安市',
            ),
            152 => 
            array (
                'id' => 653,
                'parent_id' => 613,
                'code' => '220602',
                'name' => '浑江区',
                'type' => 3,
                'full_name' => '吉林省/白山市/浑江区',
            ),
            153 => 
            array (
                'id' => 654,
                'parent_id' => 613,
                'code' => '220605',
                'name' => '江源区',
                'type' => 3,
                'full_name' => '吉林省/白山市/江源区',
            ),
            154 => 
            array (
                'id' => 655,
                'parent_id' => 613,
                'code' => '220621',
                'name' => '抚松县',
                'type' => 3,
                'full_name' => '吉林省/白山市/抚松县',
            ),
            155 => 
            array (
                'id' => 656,
                'parent_id' => 613,
                'code' => '220622',
                'name' => '靖宇县',
                'type' => 3,
                'full_name' => '吉林省/白山市/靖宇县',
            ),
            156 => 
            array (
                'id' => 657,
                'parent_id' => 613,
                'code' => '220623',
                'name' => '长白朝鲜族自治县',
                'type' => 3,
                'full_name' => '吉林省/白山市/长白朝鲜族自治县',
            ),
            157 => 
            array (
                'id' => 658,
                'parent_id' => 613,
                'code' => '220681',
                'name' => '临江市',
                'type' => 3,
                'full_name' => '吉林省/白山市/临江市',
            ),
            158 => 
            array (
                'id' => 659,
                'parent_id' => 614,
                'code' => '220702',
                'name' => '宁江区',
                'type' => 3,
                'full_name' => '吉林省/松原市/宁江区',
            ),
            159 => 
            array (
                'id' => 660,
                'parent_id' => 614,
                'code' => '220721',
                'name' => '前郭尔罗斯蒙古族自治县',
                'type' => 3,
                'full_name' => '吉林省/松原市/前郭尔罗斯蒙古族自治县',
            ),
            160 => 
            array (
                'id' => 661,
                'parent_id' => 614,
                'code' => '220722',
                'name' => '长岭县',
                'type' => 3,
                'full_name' => '吉林省/松原市/长岭县',
            ),
            161 => 
            array (
                'id' => 662,
                'parent_id' => 614,
                'code' => '220723',
                'name' => '乾安县',
                'type' => 3,
                'full_name' => '吉林省/松原市/乾安县',
            ),
            162 => 
            array (
                'id' => 663,
                'parent_id' => 614,
                'code' => '220781',
                'name' => '扶余市',
                'type' => 3,
                'full_name' => '吉林省/松原市/扶余市',
            ),
            163 => 
            array (
                'id' => 664,
                'parent_id' => 615,
                'code' => '220802',
                'name' => '洮北区',
                'type' => 3,
                'full_name' => '吉林省/白城市/洮北区',
            ),
            164 => 
            array (
                'id' => 665,
                'parent_id' => 615,
                'code' => '220821',
                'name' => '镇赉县',
                'type' => 3,
                'full_name' => '吉林省/白城市/镇赉县',
            ),
            165 => 
            array (
                'id' => 666,
                'parent_id' => 615,
                'code' => '220822',
                'name' => '通榆县',
                'type' => 3,
                'full_name' => '吉林省/白城市/通榆县',
            ),
            166 => 
            array (
                'id' => 667,
                'parent_id' => 615,
                'code' => '220881',
                'name' => '洮南市',
                'type' => 3,
                'full_name' => '吉林省/白城市/洮南市',
            ),
            167 => 
            array (
                'id' => 668,
                'parent_id' => 615,
                'code' => '220882',
                'name' => '大安市',
                'type' => 3,
                'full_name' => '吉林省/白城市/大安市',
            ),
            168 => 
            array (
                'id' => 669,
                'parent_id' => 616,
                'code' => '222401',
                'name' => '延吉市',
                'type' => 3,
                'full_name' => '吉林省/延边朝鲜族自治州/延吉市',
            ),
            169 => 
            array (
                'id' => 670,
                'parent_id' => 616,
                'code' => '222402',
                'name' => '图们市',
                'type' => 3,
                'full_name' => '吉林省/延边朝鲜族自治州/图们市',
            ),
            170 => 
            array (
                'id' => 671,
                'parent_id' => 616,
                'code' => '222403',
                'name' => '敦化市',
                'type' => 3,
                'full_name' => '吉林省/延边朝鲜族自治州/敦化市',
            ),
            171 => 
            array (
                'id' => 672,
                'parent_id' => 616,
                'code' => '222404',
                'name' => '珲春市',
                'type' => 3,
                'full_name' => '吉林省/延边朝鲜族自治州/珲春市',
            ),
            172 => 
            array (
                'id' => 673,
                'parent_id' => 616,
                'code' => '222405',
                'name' => '龙井市',
                'type' => 3,
                'full_name' => '吉林省/延边朝鲜族自治州/龙井市',
            ),
            173 => 
            array (
                'id' => 674,
                'parent_id' => 616,
                'code' => '222406',
                'name' => '和龙市',
                'type' => 3,
                'full_name' => '吉林省/延边朝鲜族自治州/和龙市',
            ),
            174 => 
            array (
                'id' => 675,
                'parent_id' => 616,
                'code' => '222424',
                'name' => '汪清县',
                'type' => 3,
                'full_name' => '吉林省/延边朝鲜族自治州/汪清县',
            ),
            175 => 
            array (
                'id' => 676,
                'parent_id' => 616,
                'code' => '222426',
                'name' => '安图县',
                'type' => 3,
                'full_name' => '吉林省/延边朝鲜族自治州/安图县',
            ),
            176 => 
            array (
                'id' => 677,
                'parent_id' => 9,
                'code' => '230100',
                'name' => '哈尔滨市',
                'type' => 2,
                'full_name' => '黑龙江省/哈尔滨市',
            ),
            177 => 
            array (
                'id' => 678,
                'parent_id' => 9,
                'code' => '230200',
                'name' => '齐齐哈尔市',
                'type' => 2,
                'full_name' => '黑龙江省/齐齐哈尔市',
            ),
            178 => 
            array (
                'id' => 679,
                'parent_id' => 9,
                'code' => '230300',
                'name' => '鸡西市',
                'type' => 2,
                'full_name' => '黑龙江省/鸡西市',
            ),
            179 => 
            array (
                'id' => 680,
                'parent_id' => 9,
                'code' => '230400',
                'name' => '鹤岗市',
                'type' => 2,
                'full_name' => '黑龙江省/鹤岗市',
            ),
            180 => 
            array (
                'id' => 681,
                'parent_id' => 9,
                'code' => '230500',
                'name' => '双鸭山市',
                'type' => 2,
                'full_name' => '黑龙江省/双鸭山市',
            ),
            181 => 
            array (
                'id' => 682,
                'parent_id' => 9,
                'code' => '230600',
                'name' => '大庆市',
                'type' => 2,
                'full_name' => '黑龙江省/大庆市',
            ),
            182 => 
            array (
                'id' => 683,
                'parent_id' => 9,
                'code' => '230700',
                'name' => '伊春市',
                'type' => 2,
                'full_name' => '黑龙江省/伊春市',
            ),
            183 => 
            array (
                'id' => 684,
                'parent_id' => 9,
                'code' => '230800',
                'name' => '佳木斯市',
                'type' => 2,
                'full_name' => '黑龙江省/佳木斯市',
            ),
            184 => 
            array (
                'id' => 685,
                'parent_id' => 9,
                'code' => '230900',
                'name' => '七台河市',
                'type' => 2,
                'full_name' => '黑龙江省/七台河市',
            ),
            185 => 
            array (
                'id' => 686,
                'parent_id' => 9,
                'code' => '231000',
                'name' => '牡丹江市',
                'type' => 2,
                'full_name' => '黑龙江省/牡丹江市',
            ),
            186 => 
            array (
                'id' => 687,
                'parent_id' => 9,
                'code' => '231100',
                'name' => '黑河市',
                'type' => 2,
                'full_name' => '黑龙江省/黑河市',
            ),
            187 => 
            array (
                'id' => 688,
                'parent_id' => 9,
                'code' => '231200',
                'name' => '绥化市',
                'type' => 2,
                'full_name' => '黑龙江省/绥化市',
            ),
            188 => 
            array (
                'id' => 689,
                'parent_id' => 9,
                'code' => '232700',
                'name' => '大兴安岭地区',
                'type' => 2,
                'full_name' => '黑龙江省/大兴安岭地区',
            ),
            189 => 
            array (
                'id' => 690,
                'parent_id' => 677,
                'code' => '230102',
                'name' => '道里区',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/道里区',
            ),
            190 => 
            array (
                'id' => 691,
                'parent_id' => 677,
                'code' => '230103',
                'name' => '南岗区',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/南岗区',
            ),
            191 => 
            array (
                'id' => 692,
                'parent_id' => 677,
                'code' => '230104',
                'name' => '道外区',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/道外区',
            ),
            192 => 
            array (
                'id' => 693,
                'parent_id' => 677,
                'code' => '230108',
                'name' => '平房区',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/平房区',
            ),
            193 => 
            array (
                'id' => 694,
                'parent_id' => 677,
                'code' => '230109',
                'name' => '松北区',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/松北区',
            ),
            194 => 
            array (
                'id' => 695,
                'parent_id' => 677,
                'code' => '230110',
                'name' => '香坊区',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/香坊区',
            ),
            195 => 
            array (
                'id' => 696,
                'parent_id' => 677,
                'code' => '230111',
                'name' => '呼兰区',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/呼兰区',
            ),
            196 => 
            array (
                'id' => 697,
                'parent_id' => 677,
                'code' => '230112',
                'name' => '阿城区',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/阿城区',
            ),
            197 => 
            array (
                'id' => 698,
                'parent_id' => 677,
                'code' => '230113',
                'name' => '双城区',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/双城区',
            ),
            198 => 
            array (
                'id' => 699,
                'parent_id' => 677,
                'code' => '230123',
                'name' => '依兰县',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/依兰县',
            ),
            199 => 
            array (
                'id' => 700,
                'parent_id' => 677,
                'code' => '230124',
                'name' => '方正县',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/方正县',
            ),
            200 => 
            array (
                'id' => 701,
                'parent_id' => 677,
                'code' => '230125',
                'name' => '宾县',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/宾县',
            ),
            201 => 
            array (
                'id' => 702,
                'parent_id' => 677,
                'code' => '230126',
                'name' => '巴彦县',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/巴彦县',
            ),
            202 => 
            array (
                'id' => 703,
                'parent_id' => 677,
                'code' => '230127',
                'name' => '木兰县',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/木兰县',
            ),
            203 => 
            array (
                'id' => 704,
                'parent_id' => 677,
                'code' => '230128',
                'name' => '通河县',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/通河县',
            ),
            204 => 
            array (
                'id' => 705,
                'parent_id' => 677,
                'code' => '230129',
                'name' => '延寿县',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/延寿县',
            ),
            205 => 
            array (
                'id' => 706,
                'parent_id' => 677,
                'code' => '230183',
                'name' => '尚志市',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/尚志市',
            ),
            206 => 
            array (
                'id' => 707,
                'parent_id' => 677,
                'code' => '230184',
                'name' => '五常市',
                'type' => 3,
                'full_name' => '黑龙江省/哈尔滨市/五常市',
            ),
            207 => 
            array (
                'id' => 708,
                'parent_id' => 678,
                'code' => '230202',
                'name' => '龙沙区',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/龙沙区',
            ),
            208 => 
            array (
                'id' => 709,
                'parent_id' => 678,
                'code' => '230203',
                'name' => '建华区',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/建华区',
            ),
            209 => 
            array (
                'id' => 710,
                'parent_id' => 678,
                'code' => '230204',
                'name' => '铁锋区',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/铁锋区',
            ),
            210 => 
            array (
                'id' => 711,
                'parent_id' => 678,
                'code' => '230205',
                'name' => '昂昂溪区',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/昂昂溪区',
            ),
            211 => 
            array (
                'id' => 712,
                'parent_id' => 678,
                'code' => '230206',
                'name' => '富拉尔基区',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/富拉尔基区',
            ),
            212 => 
            array (
                'id' => 713,
                'parent_id' => 678,
                'code' => '230207',
                'name' => '碾子山区',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/碾子山区',
            ),
            213 => 
            array (
                'id' => 714,
                'parent_id' => 678,
                'code' => '230208',
                'name' => '梅里斯达斡尔族区',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/梅里斯达斡尔族区',
            ),
            214 => 
            array (
                'id' => 715,
                'parent_id' => 678,
                'code' => '230221',
                'name' => '龙江县',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/龙江县',
            ),
            215 => 
            array (
                'id' => 716,
                'parent_id' => 678,
                'code' => '230223',
                'name' => '依安县',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/依安县',
            ),
            216 => 
            array (
                'id' => 717,
                'parent_id' => 678,
                'code' => '230224',
                'name' => '泰来县',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/泰来县',
            ),
            217 => 
            array (
                'id' => 718,
                'parent_id' => 678,
                'code' => '230225',
                'name' => '甘南县',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/甘南县',
            ),
            218 => 
            array (
                'id' => 719,
                'parent_id' => 678,
                'code' => '230227',
                'name' => '富裕县',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/富裕县',
            ),
            219 => 
            array (
                'id' => 720,
                'parent_id' => 678,
                'code' => '230229',
                'name' => '克山县',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/克山县',
            ),
            220 => 
            array (
                'id' => 721,
                'parent_id' => 678,
                'code' => '230230',
                'name' => '克东县',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/克东县',
            ),
            221 => 
            array (
                'id' => 722,
                'parent_id' => 678,
                'code' => '230231',
                'name' => '拜泉县',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/拜泉县',
            ),
            222 => 
            array (
                'id' => 723,
                'parent_id' => 678,
                'code' => '230281',
                'name' => '讷河市',
                'type' => 3,
                'full_name' => '黑龙江省/齐齐哈尔市/讷河市',
            ),
            223 => 
            array (
                'id' => 724,
                'parent_id' => 679,
                'code' => '230302',
                'name' => '鸡冠区',
                'type' => 3,
                'full_name' => '黑龙江省/鸡西市/鸡冠区',
            ),
            224 => 
            array (
                'id' => 725,
                'parent_id' => 679,
                'code' => '230303',
                'name' => '恒山区',
                'type' => 3,
                'full_name' => '黑龙江省/鸡西市/恒山区',
            ),
            225 => 
            array (
                'id' => 726,
                'parent_id' => 679,
                'code' => '230304',
                'name' => '滴道区',
                'type' => 3,
                'full_name' => '黑龙江省/鸡西市/滴道区',
            ),
            226 => 
            array (
                'id' => 727,
                'parent_id' => 679,
                'code' => '230305',
                'name' => '梨树区',
                'type' => 3,
                'full_name' => '黑龙江省/鸡西市/梨树区',
            ),
            227 => 
            array (
                'id' => 728,
                'parent_id' => 679,
                'code' => '230306',
                'name' => '城子河区',
                'type' => 3,
                'full_name' => '黑龙江省/鸡西市/城子河区',
            ),
            228 => 
            array (
                'id' => 729,
                'parent_id' => 679,
                'code' => '230307',
                'name' => '麻山区',
                'type' => 3,
                'full_name' => '黑龙江省/鸡西市/麻山区',
            ),
            229 => 
            array (
                'id' => 730,
                'parent_id' => 679,
                'code' => '230321',
                'name' => '鸡东县',
                'type' => 3,
                'full_name' => '黑龙江省/鸡西市/鸡东县',
            ),
            230 => 
            array (
                'id' => 731,
                'parent_id' => 679,
                'code' => '230381',
                'name' => '虎林市',
                'type' => 3,
                'full_name' => '黑龙江省/鸡西市/虎林市',
            ),
            231 => 
            array (
                'id' => 732,
                'parent_id' => 679,
                'code' => '230382',
                'name' => '密山市',
                'type' => 3,
                'full_name' => '黑龙江省/鸡西市/密山市',
            ),
            232 => 
            array (
                'id' => 733,
                'parent_id' => 680,
                'code' => '230402',
                'name' => '向阳区',
                'type' => 3,
                'full_name' => '黑龙江省/鹤岗市/向阳区',
            ),
            233 => 
            array (
                'id' => 734,
                'parent_id' => 680,
                'code' => '230403',
                'name' => '工农区',
                'type' => 3,
                'full_name' => '黑龙江省/鹤岗市/工农区',
            ),
            234 => 
            array (
                'id' => 735,
                'parent_id' => 680,
                'code' => '230404',
                'name' => '南山区',
                'type' => 3,
                'full_name' => '黑龙江省/鹤岗市/南山区',
            ),
            235 => 
            array (
                'id' => 736,
                'parent_id' => 680,
                'code' => '230405',
                'name' => '兴安区',
                'type' => 3,
                'full_name' => '黑龙江省/鹤岗市/兴安区',
            ),
            236 => 
            array (
                'id' => 737,
                'parent_id' => 680,
                'code' => '230406',
                'name' => '东山区',
                'type' => 3,
                'full_name' => '黑龙江省/鹤岗市/东山区',
            ),
            237 => 
            array (
                'id' => 738,
                'parent_id' => 680,
                'code' => '230407',
                'name' => '兴山区',
                'type' => 3,
                'full_name' => '黑龙江省/鹤岗市/兴山区',
            ),
            238 => 
            array (
                'id' => 739,
                'parent_id' => 680,
                'code' => '230421',
                'name' => '萝北县',
                'type' => 3,
                'full_name' => '黑龙江省/鹤岗市/萝北县',
            ),
            239 => 
            array (
                'id' => 740,
                'parent_id' => 680,
                'code' => '230422',
                'name' => '绥滨县',
                'type' => 3,
                'full_name' => '黑龙江省/鹤岗市/绥滨县',
            ),
            240 => 
            array (
                'id' => 741,
                'parent_id' => 681,
                'code' => '230502',
                'name' => '尖山区',
                'type' => 3,
                'full_name' => '黑龙江省/双鸭山市/尖山区',
            ),
            241 => 
            array (
                'id' => 742,
                'parent_id' => 681,
                'code' => '230503',
                'name' => '岭东区',
                'type' => 3,
                'full_name' => '黑龙江省/双鸭山市/岭东区',
            ),
            242 => 
            array (
                'id' => 743,
                'parent_id' => 681,
                'code' => '230505',
                'name' => '四方台区',
                'type' => 3,
                'full_name' => '黑龙江省/双鸭山市/四方台区',
            ),
            243 => 
            array (
                'id' => 744,
                'parent_id' => 681,
                'code' => '230506',
                'name' => '宝山区',
                'type' => 3,
                'full_name' => '黑龙江省/双鸭山市/宝山区',
            ),
            244 => 
            array (
                'id' => 745,
                'parent_id' => 681,
                'code' => '230521',
                'name' => '集贤县',
                'type' => 3,
                'full_name' => '黑龙江省/双鸭山市/集贤县',
            ),
            245 => 
            array (
                'id' => 746,
                'parent_id' => 681,
                'code' => '230522',
                'name' => '友谊县',
                'type' => 3,
                'full_name' => '黑龙江省/双鸭山市/友谊县',
            ),
            246 => 
            array (
                'id' => 747,
                'parent_id' => 681,
                'code' => '230523',
                'name' => '宝清县',
                'type' => 3,
                'full_name' => '黑龙江省/双鸭山市/宝清县',
            ),
            247 => 
            array (
                'id' => 748,
                'parent_id' => 681,
                'code' => '230524',
                'name' => '饶河县',
                'type' => 3,
                'full_name' => '黑龙江省/双鸭山市/饶河县',
            ),
            248 => 
            array (
                'id' => 749,
                'parent_id' => 682,
                'code' => '230602',
                'name' => '萨尔图区',
                'type' => 3,
                'full_name' => '黑龙江省/大庆市/萨尔图区',
            ),
            249 => 
            array (
                'id' => 750,
                'parent_id' => 682,
                'code' => '230603',
                'name' => '龙凤区',
                'type' => 3,
                'full_name' => '黑龙江省/大庆市/龙凤区',
            ),
            250 => 
            array (
                'id' => 751,
                'parent_id' => 682,
                'code' => '230604',
                'name' => '让胡路区',
                'type' => 3,
                'full_name' => '黑龙江省/大庆市/让胡路区',
            ),
            251 => 
            array (
                'id' => 752,
                'parent_id' => 682,
                'code' => '230605',
                'name' => '红岗区',
                'type' => 3,
                'full_name' => '黑龙江省/大庆市/红岗区',
            ),
            252 => 
            array (
                'id' => 753,
                'parent_id' => 682,
                'code' => '230606',
                'name' => '大同区',
                'type' => 3,
                'full_name' => '黑龙江省/大庆市/大同区',
            ),
            253 => 
            array (
                'id' => 754,
                'parent_id' => 682,
                'code' => '230621',
                'name' => '肇州县',
                'type' => 3,
                'full_name' => '黑龙江省/大庆市/肇州县',
            ),
            254 => 
            array (
                'id' => 755,
                'parent_id' => 682,
                'code' => '230622',
                'name' => '肇源县',
                'type' => 3,
                'full_name' => '黑龙江省/大庆市/肇源县',
            ),
            255 => 
            array (
                'id' => 756,
                'parent_id' => 682,
                'code' => '230623',
                'name' => '林甸县',
                'type' => 3,
                'full_name' => '黑龙江省/大庆市/林甸县',
            ),
            256 => 
            array (
                'id' => 757,
                'parent_id' => 682,
                'code' => '230624',
                'name' => '杜尔伯特蒙古族自治县',
                'type' => 3,
                'full_name' => '黑龙江省/大庆市/杜尔伯特蒙古族自治县',
            ),
            257 => 
            array (
                'id' => 758,
                'parent_id' => 683,
                'code' => '230702',
                'name' => '伊春区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/伊春区',
            ),
            258 => 
            array (
                'id' => 759,
                'parent_id' => 683,
                'code' => '230703',
                'name' => '南岔区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/南岔区',
            ),
            259 => 
            array (
                'id' => 760,
                'parent_id' => 683,
                'code' => '230704',
                'name' => '友好区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/友好区',
            ),
            260 => 
            array (
                'id' => 761,
                'parent_id' => 683,
                'code' => '230705',
                'name' => '西林区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/西林区',
            ),
            261 => 
            array (
                'id' => 762,
                'parent_id' => 683,
                'code' => '230706',
                'name' => '翠峦区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/翠峦区',
            ),
            262 => 
            array (
                'id' => 763,
                'parent_id' => 683,
                'code' => '230707',
                'name' => '新青区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/新青区',
            ),
            263 => 
            array (
                'id' => 764,
                'parent_id' => 683,
                'code' => '230708',
                'name' => '美溪区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/美溪区',
            ),
            264 => 
            array (
                'id' => 765,
                'parent_id' => 683,
                'code' => '230709',
                'name' => '金山屯区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/金山屯区',
            ),
            265 => 
            array (
                'id' => 766,
                'parent_id' => 683,
                'code' => '230710',
                'name' => '五营区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/五营区',
            ),
            266 => 
            array (
                'id' => 767,
                'parent_id' => 683,
                'code' => '230711',
                'name' => '乌马河区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/乌马河区',
            ),
            267 => 
            array (
                'id' => 768,
                'parent_id' => 683,
                'code' => '230712',
                'name' => '汤旺河区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/汤旺河区',
            ),
            268 => 
            array (
                'id' => 769,
                'parent_id' => 683,
                'code' => '230713',
                'name' => '带岭区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/带岭区',
            ),
            269 => 
            array (
                'id' => 770,
                'parent_id' => 683,
                'code' => '230714',
                'name' => '乌伊岭区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/乌伊岭区',
            ),
            270 => 
            array (
                'id' => 771,
                'parent_id' => 683,
                'code' => '230715',
                'name' => '红星区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/红星区',
            ),
            271 => 
            array (
                'id' => 772,
                'parent_id' => 683,
                'code' => '230716',
                'name' => '上甘岭区',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/上甘岭区',
            ),
            272 => 
            array (
                'id' => 773,
                'parent_id' => 683,
                'code' => '230722',
                'name' => '嘉荫县',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/嘉荫县',
            ),
            273 => 
            array (
                'id' => 774,
                'parent_id' => 683,
                'code' => '230781',
                'name' => '铁力市',
                'type' => 3,
                'full_name' => '黑龙江省/伊春市/铁力市',
            ),
            274 => 
            array (
                'id' => 775,
                'parent_id' => 684,
                'code' => '230803',
                'name' => '向阳区',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/向阳区',
            ),
            275 => 
            array (
                'id' => 776,
                'parent_id' => 684,
                'code' => '230804',
                'name' => '前进区',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/前进区',
            ),
            276 => 
            array (
                'id' => 777,
                'parent_id' => 684,
                'code' => '230805',
                'name' => '东风区',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/东风区',
            ),
            277 => 
            array (
                'id' => 778,
                'parent_id' => 684,
                'code' => '230811',
                'name' => '郊区',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/郊区',
            ),
            278 => 
            array (
                'id' => 779,
                'parent_id' => 684,
                'code' => '230822',
                'name' => '桦南县',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/桦南县',
            ),
            279 => 
            array (
                'id' => 780,
                'parent_id' => 684,
                'code' => '230826',
                'name' => '桦川县',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/桦川县',
            ),
            280 => 
            array (
                'id' => 781,
                'parent_id' => 684,
                'code' => '230828',
                'name' => '汤原县',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/汤原县',
            ),
            281 => 
            array (
                'id' => 782,
                'parent_id' => 684,
                'code' => '230881',
                'name' => '同江市',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/同江市',
            ),
            282 => 
            array (
                'id' => 783,
                'parent_id' => 684,
                'code' => '230882',
                'name' => '富锦市',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/富锦市',
            ),
            283 => 
            array (
                'id' => 784,
                'parent_id' => 684,
                'code' => '230883',
                'name' => '抚远市',
                'type' => 3,
                'full_name' => '黑龙江省/佳木斯市/抚远市',
            ),
            284 => 
            array (
                'id' => 785,
                'parent_id' => 685,
                'code' => '230902',
                'name' => '新兴区',
                'type' => 3,
                'full_name' => '黑龙江省/七台河市/新兴区',
            ),
            285 => 
            array (
                'id' => 786,
                'parent_id' => 685,
                'code' => '230903',
                'name' => '桃山区',
                'type' => 3,
                'full_name' => '黑龙江省/七台河市/桃山区',
            ),
            286 => 
            array (
                'id' => 787,
                'parent_id' => 685,
                'code' => '230904',
                'name' => '茄子河区',
                'type' => 3,
                'full_name' => '黑龙江省/七台河市/茄子河区',
            ),
            287 => 
            array (
                'id' => 788,
                'parent_id' => 685,
                'code' => '230921',
                'name' => '勃利县',
                'type' => 3,
                'full_name' => '黑龙江省/七台河市/勃利县',
            ),
            288 => 
            array (
                'id' => 789,
                'parent_id' => 686,
                'code' => '231002',
                'name' => '东安区',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/东安区',
            ),
            289 => 
            array (
                'id' => 790,
                'parent_id' => 686,
                'code' => '231003',
                'name' => '阳明区',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/阳明区',
            ),
            290 => 
            array (
                'id' => 791,
                'parent_id' => 686,
                'code' => '231004',
                'name' => '爱民区',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/爱民区',
            ),
            291 => 
            array (
                'id' => 792,
                'parent_id' => 686,
                'code' => '231005',
                'name' => '西安区',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/西安区',
            ),
            292 => 
            array (
                'id' => 793,
                'parent_id' => 686,
                'code' => '231025',
                'name' => '林口县',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/林口县',
            ),
            293 => 
            array (
                'id' => 794,
                'parent_id' => 686,
                'code' => '231081',
                'name' => '绥芬河市',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/绥芬河市',
            ),
            294 => 
            array (
                'id' => 795,
                'parent_id' => 686,
                'code' => '231083',
                'name' => '海林市',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/海林市',
            ),
            295 => 
            array (
                'id' => 796,
                'parent_id' => 686,
                'code' => '231084',
                'name' => '宁安市',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/宁安市',
            ),
            296 => 
            array (
                'id' => 797,
                'parent_id' => 686,
                'code' => '231085',
                'name' => '穆棱市',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/穆棱市',
            ),
            297 => 
            array (
                'id' => 798,
                'parent_id' => 686,
                'code' => '231086',
                'name' => '东宁市',
                'type' => 3,
                'full_name' => '黑龙江省/牡丹江市/东宁市',
            ),
            298 => 
            array (
                'id' => 799,
                'parent_id' => 687,
                'code' => '231102',
                'name' => '爱辉区',
                'type' => 3,
                'full_name' => '黑龙江省/黑河市/爱辉区',
            ),
            299 => 
            array (
                'id' => 800,
                'parent_id' => 687,
                'code' => '231121',
                'name' => '嫩江县',
                'type' => 3,
                'full_name' => '黑龙江省/黑河市/嫩江县',
            ),
            300 => 
            array (
                'id' => 801,
                'parent_id' => 687,
                'code' => '231123',
                'name' => '逊克县',
                'type' => 3,
                'full_name' => '黑龙江省/黑河市/逊克县',
            ),
            301 => 
            array (
                'id' => 802,
                'parent_id' => 687,
                'code' => '231124',
                'name' => '孙吴县',
                'type' => 3,
                'full_name' => '黑龙江省/黑河市/孙吴县',
            ),
            302 => 
            array (
                'id' => 803,
                'parent_id' => 687,
                'code' => '231181',
                'name' => '北安市',
                'type' => 3,
                'full_name' => '黑龙江省/黑河市/北安市',
            ),
            303 => 
            array (
                'id' => 804,
                'parent_id' => 687,
                'code' => '231182',
                'name' => '五大连池市',
                'type' => 3,
                'full_name' => '黑龙江省/黑河市/五大连池市',
            ),
            304 => 
            array (
                'id' => 805,
                'parent_id' => 688,
                'code' => '231202',
                'name' => '北林区',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/北林区',
            ),
            305 => 
            array (
                'id' => 806,
                'parent_id' => 688,
                'code' => '231221',
                'name' => '望奎县',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/望奎县',
            ),
            306 => 
            array (
                'id' => 807,
                'parent_id' => 688,
                'code' => '231222',
                'name' => '兰西县',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/兰西县',
            ),
            307 => 
            array (
                'id' => 808,
                'parent_id' => 688,
                'code' => '231223',
                'name' => '青冈县',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/青冈县',
            ),
            308 => 
            array (
                'id' => 809,
                'parent_id' => 688,
                'code' => '231224',
                'name' => '庆安县',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/庆安县',
            ),
            309 => 
            array (
                'id' => 810,
                'parent_id' => 688,
                'code' => '231225',
                'name' => '明水县',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/明水县',
            ),
            310 => 
            array (
                'id' => 811,
                'parent_id' => 688,
                'code' => '231226',
                'name' => '绥棱县',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/绥棱县',
            ),
            311 => 
            array (
                'id' => 812,
                'parent_id' => 688,
                'code' => '231281',
                'name' => '安达市',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/安达市',
            ),
            312 => 
            array (
                'id' => 813,
                'parent_id' => 688,
                'code' => '231282',
                'name' => '肇东市',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/肇东市',
            ),
            313 => 
            array (
                'id' => 814,
                'parent_id' => 688,
                'code' => '231283',
                'name' => '海伦市',
                'type' => 3,
                'full_name' => '黑龙江省/绥化市/海伦市',
            ),
            314 => 
            array (
                'id' => 815,
                'parent_id' => 689,
                'code' => '232701',
                'name' => '加格达奇区',
                'type' => 3,
                'full_name' => '黑龙江省/大兴安岭地区/加格达奇区',
            ),
            315 => 
            array (
                'id' => 816,
                'parent_id' => 689,
                'code' => '232721',
                'name' => '呼玛县',
                'type' => 3,
                'full_name' => '黑龙江省/大兴安岭地区/呼玛县',
            ),
            316 => 
            array (
                'id' => 817,
                'parent_id' => 689,
                'code' => '232722',
                'name' => '塔河县',
                'type' => 3,
                'full_name' => '黑龙江省/大兴安岭地区/塔河县',
            ),
            317 => 
            array (
                'id' => 818,
                'parent_id' => 689,
                'code' => '232723',
                'name' => '漠河县',
                'type' => 3,
                'full_name' => '黑龙江省/大兴安岭地区/漠河县',
            ),
            318 => 
            array (
                'id' => 819,
                'parent_id' => 10,
                'code' => '310100',
                'name' => '上海城区',
                'type' => 2,
                'full_name' => '上海市/上海城区',
            ),
            319 => 
            array (
                'id' => 820,
                'parent_id' => 819,
                'code' => '310101',
                'name' => '黄浦区',
                'type' => 3,
                'full_name' => '上海市/上海城区/黄浦区',
            ),
            320 => 
            array (
                'id' => 821,
                'parent_id' => 819,
                'code' => '310104',
                'name' => '徐汇区',
                'type' => 3,
                'full_name' => '上海市/上海城区/徐汇区',
            ),
            321 => 
            array (
                'id' => 822,
                'parent_id' => 819,
                'code' => '310105',
                'name' => '长宁区',
                'type' => 3,
                'full_name' => '上海市/上海城区/长宁区',
            ),
            322 => 
            array (
                'id' => 823,
                'parent_id' => 819,
                'code' => '310106',
                'name' => '静安区',
                'type' => 3,
                'full_name' => '上海市/上海城区/静安区',
            ),
            323 => 
            array (
                'id' => 824,
                'parent_id' => 819,
                'code' => '310107',
                'name' => '普陀区',
                'type' => 3,
                'full_name' => '上海市/上海城区/普陀区',
            ),
            324 => 
            array (
                'id' => 825,
                'parent_id' => 819,
                'code' => '310109',
                'name' => '虹口区',
                'type' => 3,
                'full_name' => '上海市/上海城区/虹口区',
            ),
            325 => 
            array (
                'id' => 826,
                'parent_id' => 819,
                'code' => '310110',
                'name' => '杨浦区',
                'type' => 3,
                'full_name' => '上海市/上海城区/杨浦区',
            ),
            326 => 
            array (
                'id' => 827,
                'parent_id' => 819,
                'code' => '310112',
                'name' => '闵行区',
                'type' => 3,
                'full_name' => '上海市/上海城区/闵行区',
            ),
            327 => 
            array (
                'id' => 828,
                'parent_id' => 819,
                'code' => '310113',
                'name' => '宝山区',
                'type' => 3,
                'full_name' => '上海市/上海城区/宝山区',
            ),
            328 => 
            array (
                'id' => 829,
                'parent_id' => 819,
                'code' => '310114',
                'name' => '嘉定区',
                'type' => 3,
                'full_name' => '上海市/上海城区/嘉定区',
            ),
            329 => 
            array (
                'id' => 830,
                'parent_id' => 819,
                'code' => '310115',
                'name' => '浦东新区',
                'type' => 3,
                'full_name' => '上海市/上海城区/浦东新区',
            ),
            330 => 
            array (
                'id' => 831,
                'parent_id' => 819,
                'code' => '310116',
                'name' => '金山区',
                'type' => 3,
                'full_name' => '上海市/上海城区/金山区',
            ),
            331 => 
            array (
                'id' => 832,
                'parent_id' => 819,
                'code' => '310117',
                'name' => '松江区',
                'type' => 3,
                'full_name' => '上海市/上海城区/松江区',
            ),
            332 => 
            array (
                'id' => 833,
                'parent_id' => 819,
                'code' => '310118',
                'name' => '青浦区',
                'type' => 3,
                'full_name' => '上海市/上海城区/青浦区',
            ),
            333 => 
            array (
                'id' => 834,
                'parent_id' => 819,
                'code' => '310120',
                'name' => '奉贤区',
                'type' => 3,
                'full_name' => '上海市/上海城区/奉贤区',
            ),
            334 => 
            array (
                'id' => 835,
                'parent_id' => 819,
                'code' => '310151',
                'name' => '崇明区',
                'type' => 3,
                'full_name' => '上海市/上海城区/崇明区',
            ),
            335 => 
            array (
                'id' => 836,
                'parent_id' => 11,
                'code' => '320100',
                'name' => '南京市',
                'type' => 2,
                'full_name' => '江苏省/南京市',
            ),
            336 => 
            array (
                'id' => 837,
                'parent_id' => 11,
                'code' => '320200',
                'name' => '无锡市',
                'type' => 2,
                'full_name' => '江苏省/无锡市',
            ),
            337 => 
            array (
                'id' => 838,
                'parent_id' => 11,
                'code' => '320300',
                'name' => '徐州市',
                'type' => 2,
                'full_name' => '江苏省/徐州市',
            ),
            338 => 
            array (
                'id' => 839,
                'parent_id' => 11,
                'code' => '320400',
                'name' => '常州市',
                'type' => 2,
                'full_name' => '江苏省/常州市',
            ),
            339 => 
            array (
                'id' => 840,
                'parent_id' => 11,
                'code' => '320500',
                'name' => '苏州市',
                'type' => 2,
                'full_name' => '江苏省/苏州市',
            ),
            340 => 
            array (
                'id' => 841,
                'parent_id' => 11,
                'code' => '320600',
                'name' => '南通市',
                'type' => 2,
                'full_name' => '江苏省/南通市',
            ),
            341 => 
            array (
                'id' => 842,
                'parent_id' => 11,
                'code' => '320700',
                'name' => '连云港市',
                'type' => 2,
                'full_name' => '江苏省/连云港市',
            ),
            342 => 
            array (
                'id' => 843,
                'parent_id' => 11,
                'code' => '320800',
                'name' => '淮安市',
                'type' => 2,
                'full_name' => '江苏省/淮安市',
            ),
            343 => 
            array (
                'id' => 844,
                'parent_id' => 11,
                'code' => '320900',
                'name' => '盐城市',
                'type' => 2,
                'full_name' => '江苏省/盐城市',
            ),
            344 => 
            array (
                'id' => 845,
                'parent_id' => 11,
                'code' => '321000',
                'name' => '扬州市',
                'type' => 2,
                'full_name' => '江苏省/扬州市',
            ),
            345 => 
            array (
                'id' => 846,
                'parent_id' => 11,
                'code' => '321100',
                'name' => '镇江市',
                'type' => 2,
                'full_name' => '江苏省/镇江市',
            ),
            346 => 
            array (
                'id' => 847,
                'parent_id' => 11,
                'code' => '321200',
                'name' => '泰州市',
                'type' => 2,
                'full_name' => '江苏省/泰州市',
            ),
            347 => 
            array (
                'id' => 848,
                'parent_id' => 11,
                'code' => '321300',
                'name' => '宿迁市',
                'type' => 2,
                'full_name' => '江苏省/宿迁市',
            ),
            348 => 
            array (
                'id' => 849,
                'parent_id' => 836,
                'code' => '320102',
                'name' => '玄武区',
                'type' => 3,
                'full_name' => '江苏省/南京市/玄武区',
            ),
            349 => 
            array (
                'id' => 850,
                'parent_id' => 836,
                'code' => '320104',
                'name' => '秦淮区',
                'type' => 3,
                'full_name' => '江苏省/南京市/秦淮区',
            ),
            350 => 
            array (
                'id' => 851,
                'parent_id' => 836,
                'code' => '320105',
                'name' => '建邺区',
                'type' => 3,
                'full_name' => '江苏省/南京市/建邺区',
            ),
            351 => 
            array (
                'id' => 852,
                'parent_id' => 836,
                'code' => '320106',
                'name' => '鼓楼区',
                'type' => 3,
                'full_name' => '江苏省/南京市/鼓楼区',
            ),
            352 => 
            array (
                'id' => 853,
                'parent_id' => 836,
                'code' => '320111',
                'name' => '浦口区',
                'type' => 3,
                'full_name' => '江苏省/南京市/浦口区',
            ),
            353 => 
            array (
                'id' => 854,
                'parent_id' => 836,
                'code' => '320113',
                'name' => '栖霞区',
                'type' => 3,
                'full_name' => '江苏省/南京市/栖霞区',
            ),
            354 => 
            array (
                'id' => 855,
                'parent_id' => 836,
                'code' => '320114',
                'name' => '雨花台区',
                'type' => 3,
                'full_name' => '江苏省/南京市/雨花台区',
            ),
            355 => 
            array (
                'id' => 856,
                'parent_id' => 836,
                'code' => '320115',
                'name' => '江宁区',
                'type' => 3,
                'full_name' => '江苏省/南京市/江宁区',
            ),
            356 => 
            array (
                'id' => 857,
                'parent_id' => 836,
                'code' => '320116',
                'name' => '六合区',
                'type' => 3,
                'full_name' => '江苏省/南京市/六合区',
            ),
            357 => 
            array (
                'id' => 858,
                'parent_id' => 836,
                'code' => '320117',
                'name' => '溧水区',
                'type' => 3,
                'full_name' => '江苏省/南京市/溧水区',
            ),
            358 => 
            array (
                'id' => 859,
                'parent_id' => 836,
                'code' => '320118',
                'name' => '高淳区',
                'type' => 3,
                'full_name' => '江苏省/南京市/高淳区',
            ),
            359 => 
            array (
                'id' => 860,
                'parent_id' => 837,
                'code' => '320205',
                'name' => '锡山区',
                'type' => 3,
                'full_name' => '江苏省/无锡市/锡山区',
            ),
            360 => 
            array (
                'id' => 861,
                'parent_id' => 837,
                'code' => '320206',
                'name' => '惠山区',
                'type' => 3,
                'full_name' => '江苏省/无锡市/惠山区',
            ),
            361 => 
            array (
                'id' => 862,
                'parent_id' => 837,
                'code' => '320211',
                'name' => '滨湖区',
                'type' => 3,
                'full_name' => '江苏省/无锡市/滨湖区',
            ),
            362 => 
            array (
                'id' => 863,
                'parent_id' => 837,
                'code' => '320213',
                'name' => '梁溪区',
                'type' => 3,
                'full_name' => '江苏省/无锡市/梁溪区',
            ),
            363 => 
            array (
                'id' => 864,
                'parent_id' => 837,
                'code' => '320214',
                'name' => '新吴区',
                'type' => 3,
                'full_name' => '江苏省/无锡市/新吴区',
            ),
            364 => 
            array (
                'id' => 865,
                'parent_id' => 837,
                'code' => '320281',
                'name' => '江阴市',
                'type' => 3,
                'full_name' => '江苏省/无锡市/江阴市',
            ),
            365 => 
            array (
                'id' => 866,
                'parent_id' => 837,
                'code' => '320282',
                'name' => '宜兴市',
                'type' => 3,
                'full_name' => '江苏省/无锡市/宜兴市',
            ),
            366 => 
            array (
                'id' => 867,
                'parent_id' => 838,
                'code' => '320302',
                'name' => '鼓楼区',
                'type' => 3,
                'full_name' => '江苏省/徐州市/鼓楼区',
            ),
            367 => 
            array (
                'id' => 868,
                'parent_id' => 838,
                'code' => '320303',
                'name' => '云龙区',
                'type' => 3,
                'full_name' => '江苏省/徐州市/云龙区',
            ),
            368 => 
            array (
                'id' => 869,
                'parent_id' => 838,
                'code' => '320305',
                'name' => '贾汪区',
                'type' => 3,
                'full_name' => '江苏省/徐州市/贾汪区',
            ),
            369 => 
            array (
                'id' => 870,
                'parent_id' => 838,
                'code' => '320311',
                'name' => '泉山区',
                'type' => 3,
                'full_name' => '江苏省/徐州市/泉山区',
            ),
            370 => 
            array (
                'id' => 871,
                'parent_id' => 838,
                'code' => '320312',
                'name' => '铜山区',
                'type' => 3,
                'full_name' => '江苏省/徐州市/铜山区',
            ),
            371 => 
            array (
                'id' => 872,
                'parent_id' => 838,
                'code' => '320321',
                'name' => '丰县',
                'type' => 3,
                'full_name' => '江苏省/徐州市/丰县',
            ),
            372 => 
            array (
                'id' => 873,
                'parent_id' => 838,
                'code' => '320322',
                'name' => '沛县',
                'type' => 3,
                'full_name' => '江苏省/徐州市/沛县',
            ),
            373 => 
            array (
                'id' => 874,
                'parent_id' => 838,
                'code' => '320324',
                'name' => '睢宁县',
                'type' => 3,
                'full_name' => '江苏省/徐州市/睢宁县',
            ),
            374 => 
            array (
                'id' => 875,
                'parent_id' => 838,
                'code' => '320381',
                'name' => '新沂市',
                'type' => 3,
                'full_name' => '江苏省/徐州市/新沂市',
            ),
            375 => 
            array (
                'id' => 876,
                'parent_id' => 838,
                'code' => '320382',
                'name' => '邳州市',
                'type' => 3,
                'full_name' => '江苏省/徐州市/邳州市',
            ),
            376 => 
            array (
                'id' => 877,
                'parent_id' => 839,
                'code' => '320402',
                'name' => '天宁区',
                'type' => 3,
                'full_name' => '江苏省/常州市/天宁区',
            ),
            377 => 
            array (
                'id' => 878,
                'parent_id' => 839,
                'code' => '320404',
                'name' => '钟楼区',
                'type' => 3,
                'full_name' => '江苏省/常州市/钟楼区',
            ),
            378 => 
            array (
                'id' => 879,
                'parent_id' => 839,
                'code' => '320411',
                'name' => '新北区',
                'type' => 3,
                'full_name' => '江苏省/常州市/新北区',
            ),
            379 => 
            array (
                'id' => 880,
                'parent_id' => 839,
                'code' => '320412',
                'name' => '武进区',
                'type' => 3,
                'full_name' => '江苏省/常州市/武进区',
            ),
            380 => 
            array (
                'id' => 881,
                'parent_id' => 839,
                'code' => '320413',
                'name' => '金坛区',
                'type' => 3,
                'full_name' => '江苏省/常州市/金坛区',
            ),
            381 => 
            array (
                'id' => 882,
                'parent_id' => 839,
                'code' => '320481',
                'name' => '溧阳市',
                'type' => 3,
                'full_name' => '江苏省/常州市/溧阳市',
            ),
            382 => 
            array (
                'id' => 883,
                'parent_id' => 840,
                'code' => '320505',
                'name' => '虎丘区',
                'type' => 3,
                'full_name' => '江苏省/苏州市/虎丘区',
            ),
            383 => 
            array (
                'id' => 884,
                'parent_id' => 840,
                'code' => '320506',
                'name' => '吴中区',
                'type' => 3,
                'full_name' => '江苏省/苏州市/吴中区',
            ),
            384 => 
            array (
                'id' => 885,
                'parent_id' => 840,
                'code' => '320507',
                'name' => '相城区',
                'type' => 3,
                'full_name' => '江苏省/苏州市/相城区',
            ),
            385 => 
            array (
                'id' => 886,
                'parent_id' => 840,
                'code' => '320508',
                'name' => '姑苏区',
                'type' => 3,
                'full_name' => '江苏省/苏州市/姑苏区',
            ),
            386 => 
            array (
                'id' => 887,
                'parent_id' => 840,
                'code' => '320509',
                'name' => '吴江区',
                'type' => 3,
                'full_name' => '江苏省/苏州市/吴江区',
            ),
            387 => 
            array (
                'id' => 888,
                'parent_id' => 840,
                'code' => '320581',
                'name' => '常熟市',
                'type' => 3,
                'full_name' => '江苏省/苏州市/常熟市',
            ),
            388 => 
            array (
                'id' => 889,
                'parent_id' => 840,
                'code' => '320582',
                'name' => '张家港市',
                'type' => 3,
                'full_name' => '江苏省/苏州市/张家港市',
            ),
            389 => 
            array (
                'id' => 890,
                'parent_id' => 840,
                'code' => '320583',
                'name' => '昆山市',
                'type' => 3,
                'full_name' => '江苏省/苏州市/昆山市',
            ),
            390 => 
            array (
                'id' => 891,
                'parent_id' => 840,
                'code' => '320585',
                'name' => '太仓市',
                'type' => 3,
                'full_name' => '江苏省/苏州市/太仓市',
            ),
            391 => 
            array (
                'id' => 892,
                'parent_id' => 841,
                'code' => '320602',
                'name' => '崇川区',
                'type' => 3,
                'full_name' => '江苏省/南通市/崇川区',
            ),
            392 => 
            array (
                'id' => 893,
                'parent_id' => 841,
                'code' => '320611',
                'name' => '港闸区',
                'type' => 3,
                'full_name' => '江苏省/南通市/港闸区',
            ),
            393 => 
            array (
                'id' => 894,
                'parent_id' => 841,
                'code' => '320612',
                'name' => '通州区',
                'type' => 3,
                'full_name' => '江苏省/南通市/通州区',
            ),
            394 => 
            array (
                'id' => 895,
                'parent_id' => 841,
                'code' => '320621',
                'name' => '海安县',
                'type' => 3,
                'full_name' => '江苏省/南通市/海安县',
            ),
            395 => 
            array (
                'id' => 896,
                'parent_id' => 841,
                'code' => '320623',
                'name' => '如东县',
                'type' => 3,
                'full_name' => '江苏省/南通市/如东县',
            ),
            396 => 
            array (
                'id' => 897,
                'parent_id' => 841,
                'code' => '320681',
                'name' => '启东市',
                'type' => 3,
                'full_name' => '江苏省/南通市/启东市',
            ),
            397 => 
            array (
                'id' => 898,
                'parent_id' => 841,
                'code' => '320682',
                'name' => '如皋市',
                'type' => 3,
                'full_name' => '江苏省/南通市/如皋市',
            ),
            398 => 
            array (
                'id' => 899,
                'parent_id' => 841,
                'code' => '320684',
                'name' => '海门市',
                'type' => 3,
                'full_name' => '江苏省/南通市/海门市',
            ),
            399 => 
            array (
                'id' => 900,
                'parent_id' => 842,
                'code' => '320703',
                'name' => '连云区',
                'type' => 3,
                'full_name' => '江苏省/连云港市/连云区',
            ),
            400 => 
            array (
                'id' => 901,
                'parent_id' => 842,
                'code' => '320706',
                'name' => '海州区',
                'type' => 3,
                'full_name' => '江苏省/连云港市/海州区',
            ),
            401 => 
            array (
                'id' => 902,
                'parent_id' => 842,
                'code' => '320707',
                'name' => '赣榆区',
                'type' => 3,
                'full_name' => '江苏省/连云港市/赣榆区',
            ),
            402 => 
            array (
                'id' => 903,
                'parent_id' => 842,
                'code' => '320722',
                'name' => '东海县',
                'type' => 3,
                'full_name' => '江苏省/连云港市/东海县',
            ),
            403 => 
            array (
                'id' => 904,
                'parent_id' => 842,
                'code' => '320723',
                'name' => '灌云县',
                'type' => 3,
                'full_name' => '江苏省/连云港市/灌云县',
            ),
            404 => 
            array (
                'id' => 905,
                'parent_id' => 842,
                'code' => '320724',
                'name' => '灌南县',
                'type' => 3,
                'full_name' => '江苏省/连云港市/灌南县',
            ),
            405 => 
            array (
                'id' => 906,
                'parent_id' => 843,
                'code' => '320803',
                'name' => '淮安区',
                'type' => 3,
                'full_name' => '江苏省/淮安市/淮安区',
            ),
            406 => 
            array (
                'id' => 907,
                'parent_id' => 843,
                'code' => '320804',
                'name' => '淮阴区',
                'type' => 3,
                'full_name' => '江苏省/淮安市/淮阴区',
            ),
            407 => 
            array (
                'id' => 908,
                'parent_id' => 843,
                'code' => '320812',
                'name' => '清江浦区',
                'type' => 3,
                'full_name' => '江苏省/淮安市/清江浦区',
            ),
            408 => 
            array (
                'id' => 909,
                'parent_id' => 843,
                'code' => '320813',
                'name' => '洪泽区',
                'type' => 3,
                'full_name' => '江苏省/淮安市/洪泽区',
            ),
            409 => 
            array (
                'id' => 910,
                'parent_id' => 843,
                'code' => '320826',
                'name' => '涟水县',
                'type' => 3,
                'full_name' => '江苏省/淮安市/涟水县',
            ),
            410 => 
            array (
                'id' => 911,
                'parent_id' => 843,
                'code' => '320830',
                'name' => '盱眙县',
                'type' => 3,
                'full_name' => '江苏省/淮安市/盱眙县',
            ),
            411 => 
            array (
                'id' => 912,
                'parent_id' => 843,
                'code' => '320831',
                'name' => '金湖县',
                'type' => 3,
                'full_name' => '江苏省/淮安市/金湖县',
            ),
            412 => 
            array (
                'id' => 913,
                'parent_id' => 844,
                'code' => '320902',
                'name' => '亭湖区',
                'type' => 3,
                'full_name' => '江苏省/盐城市/亭湖区',
            ),
            413 => 
            array (
                'id' => 914,
                'parent_id' => 844,
                'code' => '320903',
                'name' => '盐都区',
                'type' => 3,
                'full_name' => '江苏省/盐城市/盐都区',
            ),
            414 => 
            array (
                'id' => 915,
                'parent_id' => 844,
                'code' => '320904',
                'name' => '大丰区',
                'type' => 3,
                'full_name' => '江苏省/盐城市/大丰区',
            ),
            415 => 
            array (
                'id' => 916,
                'parent_id' => 844,
                'code' => '320921',
                'name' => '响水县',
                'type' => 3,
                'full_name' => '江苏省/盐城市/响水县',
            ),
            416 => 
            array (
                'id' => 917,
                'parent_id' => 844,
                'code' => '320922',
                'name' => '滨海县',
                'type' => 3,
                'full_name' => '江苏省/盐城市/滨海县',
            ),
            417 => 
            array (
                'id' => 918,
                'parent_id' => 844,
                'code' => '320923',
                'name' => '阜宁县',
                'type' => 3,
                'full_name' => '江苏省/盐城市/阜宁县',
            ),
            418 => 
            array (
                'id' => 919,
                'parent_id' => 844,
                'code' => '320924',
                'name' => '射阳县',
                'type' => 3,
                'full_name' => '江苏省/盐城市/射阳县',
            ),
            419 => 
            array (
                'id' => 920,
                'parent_id' => 844,
                'code' => '320925',
                'name' => '建湖县',
                'type' => 3,
                'full_name' => '江苏省/盐城市/建湖县',
            ),
            420 => 
            array (
                'id' => 921,
                'parent_id' => 844,
                'code' => '320981',
                'name' => '东台市',
                'type' => 3,
                'full_name' => '江苏省/盐城市/东台市',
            ),
            421 => 
            array (
                'id' => 922,
                'parent_id' => 845,
                'code' => '321002',
                'name' => '广陵区',
                'type' => 3,
                'full_name' => '江苏省/扬州市/广陵区',
            ),
            422 => 
            array (
                'id' => 923,
                'parent_id' => 845,
                'code' => '321003',
                'name' => '邗江区',
                'type' => 3,
                'full_name' => '江苏省/扬州市/邗江区',
            ),
            423 => 
            array (
                'id' => 924,
                'parent_id' => 845,
                'code' => '321012',
                'name' => '江都区',
                'type' => 3,
                'full_name' => '江苏省/扬州市/江都区',
            ),
            424 => 
            array (
                'id' => 925,
                'parent_id' => 845,
                'code' => '321023',
                'name' => '宝应县',
                'type' => 3,
                'full_name' => '江苏省/扬州市/宝应县',
            ),
            425 => 
            array (
                'id' => 926,
                'parent_id' => 845,
                'code' => '321081',
                'name' => '仪征市',
                'type' => 3,
                'full_name' => '江苏省/扬州市/仪征市',
            ),
            426 => 
            array (
                'id' => 927,
                'parent_id' => 845,
                'code' => '321084',
                'name' => '高邮市',
                'type' => 3,
                'full_name' => '江苏省/扬州市/高邮市',
            ),
            427 => 
            array (
                'id' => 928,
                'parent_id' => 846,
                'code' => '321102',
                'name' => '京口区',
                'type' => 3,
                'full_name' => '江苏省/镇江市/京口区',
            ),
            428 => 
            array (
                'id' => 929,
                'parent_id' => 846,
                'code' => '321111',
                'name' => '润州区',
                'type' => 3,
                'full_name' => '江苏省/镇江市/润州区',
            ),
            429 => 
            array (
                'id' => 930,
                'parent_id' => 846,
                'code' => '321112',
                'name' => '丹徒区',
                'type' => 3,
                'full_name' => '江苏省/镇江市/丹徒区',
            ),
            430 => 
            array (
                'id' => 931,
                'parent_id' => 846,
                'code' => '321181',
                'name' => '丹阳市',
                'type' => 3,
                'full_name' => '江苏省/镇江市/丹阳市',
            ),
            431 => 
            array (
                'id' => 932,
                'parent_id' => 846,
                'code' => '321182',
                'name' => '扬中市',
                'type' => 3,
                'full_name' => '江苏省/镇江市/扬中市',
            ),
            432 => 
            array (
                'id' => 933,
                'parent_id' => 846,
                'code' => '321183',
                'name' => '句容市',
                'type' => 3,
                'full_name' => '江苏省/镇江市/句容市',
            ),
            433 => 
            array (
                'id' => 934,
                'parent_id' => 847,
                'code' => '321202',
                'name' => '海陵区',
                'type' => 3,
                'full_name' => '江苏省/泰州市/海陵区',
            ),
            434 => 
            array (
                'id' => 935,
                'parent_id' => 847,
                'code' => '321203',
                'name' => '高港区',
                'type' => 3,
                'full_name' => '江苏省/泰州市/高港区',
            ),
            435 => 
            array (
                'id' => 936,
                'parent_id' => 847,
                'code' => '321204',
                'name' => '姜堰区',
                'type' => 3,
                'full_name' => '江苏省/泰州市/姜堰区',
            ),
            436 => 
            array (
                'id' => 937,
                'parent_id' => 847,
                'code' => '321281',
                'name' => '兴化市',
                'type' => 3,
                'full_name' => '江苏省/泰州市/兴化市',
            ),
            437 => 
            array (
                'id' => 938,
                'parent_id' => 847,
                'code' => '321282',
                'name' => '靖江市',
                'type' => 3,
                'full_name' => '江苏省/泰州市/靖江市',
            ),
            438 => 
            array (
                'id' => 939,
                'parent_id' => 847,
                'code' => '321283',
                'name' => '泰兴市',
                'type' => 3,
                'full_name' => '江苏省/泰州市/泰兴市',
            ),
            439 => 
            array (
                'id' => 940,
                'parent_id' => 848,
                'code' => '321302',
                'name' => '宿城区',
                'type' => 3,
                'full_name' => '江苏省/宿迁市/宿城区',
            ),
            440 => 
            array (
                'id' => 941,
                'parent_id' => 848,
                'code' => '321311',
                'name' => '宿豫区',
                'type' => 3,
                'full_name' => '江苏省/宿迁市/宿豫区',
            ),
            441 => 
            array (
                'id' => 942,
                'parent_id' => 848,
                'code' => '321322',
                'name' => '沭阳县',
                'type' => 3,
                'full_name' => '江苏省/宿迁市/沭阳县',
            ),
            442 => 
            array (
                'id' => 943,
                'parent_id' => 848,
                'code' => '321323',
                'name' => '泗阳县',
                'type' => 3,
                'full_name' => '江苏省/宿迁市/泗阳县',
            ),
            443 => 
            array (
                'id' => 944,
                'parent_id' => 848,
                'code' => '321324',
                'name' => '泗洪县',
                'type' => 3,
                'full_name' => '江苏省/宿迁市/泗洪县',
            ),
            444 => 
            array (
                'id' => 945,
                'parent_id' => 12,
                'code' => '330100',
                'name' => '杭州市',
                'type' => 2,
                'full_name' => '浙江省/杭州市',
            ),
            445 => 
            array (
                'id' => 946,
                'parent_id' => 12,
                'code' => '330200',
                'name' => '宁波市',
                'type' => 2,
                'full_name' => '浙江省/宁波市',
            ),
            446 => 
            array (
                'id' => 947,
                'parent_id' => 12,
                'code' => '330300',
                'name' => '温州市',
                'type' => 2,
                'full_name' => '浙江省/温州市',
            ),
            447 => 
            array (
                'id' => 948,
                'parent_id' => 12,
                'code' => '330400',
                'name' => '嘉兴市',
                'type' => 2,
                'full_name' => '浙江省/嘉兴市',
            ),
            448 => 
            array (
                'id' => 949,
                'parent_id' => 12,
                'code' => '330500',
                'name' => '湖州市',
                'type' => 2,
                'full_name' => '浙江省/湖州市',
            ),
            449 => 
            array (
                'id' => 950,
                'parent_id' => 12,
                'code' => '330600',
                'name' => '绍兴市',
                'type' => 2,
                'full_name' => '浙江省/绍兴市',
            ),
            450 => 
            array (
                'id' => 951,
                'parent_id' => 12,
                'code' => '330700',
                'name' => '金华市',
                'type' => 2,
                'full_name' => '浙江省/金华市',
            ),
            451 => 
            array (
                'id' => 952,
                'parent_id' => 12,
                'code' => '330800',
                'name' => '衢州市',
                'type' => 2,
                'full_name' => '浙江省/衢州市',
            ),
            452 => 
            array (
                'id' => 953,
                'parent_id' => 12,
                'code' => '330900',
                'name' => '舟山市',
                'type' => 2,
                'full_name' => '浙江省/舟山市',
            ),
            453 => 
            array (
                'id' => 954,
                'parent_id' => 12,
                'code' => '331000',
                'name' => '台州市',
                'type' => 2,
                'full_name' => '浙江省/台州市',
            ),
            454 => 
            array (
                'id' => 955,
                'parent_id' => 12,
                'code' => '331100',
                'name' => '丽水市',
                'type' => 2,
                'full_name' => '浙江省/丽水市',
            ),
            455 => 
            array (
                'id' => 956,
                'parent_id' => 945,
                'code' => '330102',
                'name' => '上城区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/上城区',
            ),
            456 => 
            array (
                'id' => 957,
                'parent_id' => 945,
                'code' => '330103',
                'name' => '下城区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/下城区',
            ),
            457 => 
            array (
                'id' => 958,
                'parent_id' => 945,
                'code' => '330104',
                'name' => '江干区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/江干区',
            ),
            458 => 
            array (
                'id' => 959,
                'parent_id' => 945,
                'code' => '330105',
                'name' => '拱墅区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/拱墅区',
            ),
            459 => 
            array (
                'id' => 960,
                'parent_id' => 945,
                'code' => '330106',
                'name' => '西湖区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/西湖区',
            ),
            460 => 
            array (
                'id' => 961,
                'parent_id' => 945,
                'code' => '330108',
                'name' => '滨江区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/滨江区',
            ),
            461 => 
            array (
                'id' => 962,
                'parent_id' => 945,
                'code' => '330109',
                'name' => '萧山区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/萧山区',
            ),
            462 => 
            array (
                'id' => 963,
                'parent_id' => 945,
                'code' => '330110',
                'name' => '余杭区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/余杭区',
            ),
            463 => 
            array (
                'id' => 964,
                'parent_id' => 945,
                'code' => '330111',
                'name' => '富阳区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/富阳区',
            ),
            464 => 
            array (
                'id' => 965,
                'parent_id' => 945,
                'code' => '330112',
                'name' => '临安区',
                'type' => 3,
                'full_name' => '浙江省/杭州市/临安区',
            ),
            465 => 
            array (
                'id' => 966,
                'parent_id' => 945,
                'code' => '330122',
                'name' => '桐庐县',
                'type' => 3,
                'full_name' => '浙江省/杭州市/桐庐县',
            ),
            466 => 
            array (
                'id' => 967,
                'parent_id' => 945,
                'code' => '330127',
                'name' => '淳安县',
                'type' => 3,
                'full_name' => '浙江省/杭州市/淳安县',
            ),
            467 => 
            array (
                'id' => 968,
                'parent_id' => 945,
                'code' => '330182',
                'name' => '建德市',
                'type' => 3,
                'full_name' => '浙江省/杭州市/建德市',
            ),
            468 => 
            array (
                'id' => 969,
                'parent_id' => 946,
                'code' => '330203',
                'name' => '海曙区',
                'type' => 3,
                'full_name' => '浙江省/宁波市/海曙区',
            ),
            469 => 
            array (
                'id' => 970,
                'parent_id' => 946,
                'code' => '330205',
                'name' => '江北区',
                'type' => 3,
                'full_name' => '浙江省/宁波市/江北区',
            ),
            470 => 
            array (
                'id' => 971,
                'parent_id' => 946,
                'code' => '330206',
                'name' => '北仑区',
                'type' => 3,
                'full_name' => '浙江省/宁波市/北仑区',
            ),
            471 => 
            array (
                'id' => 972,
                'parent_id' => 946,
                'code' => '330211',
                'name' => '镇海区',
                'type' => 3,
                'full_name' => '浙江省/宁波市/镇海区',
            ),
            472 => 
            array (
                'id' => 973,
                'parent_id' => 946,
                'code' => '330212',
                'name' => '鄞州区',
                'type' => 3,
                'full_name' => '浙江省/宁波市/鄞州区',
            ),
            473 => 
            array (
                'id' => 974,
                'parent_id' => 946,
                'code' => '330213',
                'name' => '奉化区',
                'type' => 3,
                'full_name' => '浙江省/宁波市/奉化区',
            ),
            474 => 
            array (
                'id' => 975,
                'parent_id' => 946,
                'code' => '330225',
                'name' => '象山县',
                'type' => 3,
                'full_name' => '浙江省/宁波市/象山县',
            ),
            475 => 
            array (
                'id' => 976,
                'parent_id' => 946,
                'code' => '330226',
                'name' => '宁海县',
                'type' => 3,
                'full_name' => '浙江省/宁波市/宁海县',
            ),
            476 => 
            array (
                'id' => 977,
                'parent_id' => 946,
                'code' => '330281',
                'name' => '余姚市',
                'type' => 3,
                'full_name' => '浙江省/宁波市/余姚市',
            ),
            477 => 
            array (
                'id' => 978,
                'parent_id' => 946,
                'code' => '330282',
                'name' => '慈溪市',
                'type' => 3,
                'full_name' => '浙江省/宁波市/慈溪市',
            ),
            478 => 
            array (
                'id' => 979,
                'parent_id' => 947,
                'code' => '330302',
                'name' => '鹿城区',
                'type' => 3,
                'full_name' => '浙江省/温州市/鹿城区',
            ),
            479 => 
            array (
                'id' => 980,
                'parent_id' => 947,
                'code' => '330303',
                'name' => '龙湾区',
                'type' => 3,
                'full_name' => '浙江省/温州市/龙湾区',
            ),
            480 => 
            array (
                'id' => 981,
                'parent_id' => 947,
                'code' => '330304',
                'name' => '瓯海区',
                'type' => 3,
                'full_name' => '浙江省/温州市/瓯海区',
            ),
            481 => 
            array (
                'id' => 982,
                'parent_id' => 947,
                'code' => '330305',
                'name' => '洞头区',
                'type' => 3,
                'full_name' => '浙江省/温州市/洞头区',
            ),
            482 => 
            array (
                'id' => 983,
                'parent_id' => 947,
                'code' => '330324',
                'name' => '永嘉县',
                'type' => 3,
                'full_name' => '浙江省/温州市/永嘉县',
            ),
            483 => 
            array (
                'id' => 984,
                'parent_id' => 947,
                'code' => '330326',
                'name' => '平阳县',
                'type' => 3,
                'full_name' => '浙江省/温州市/平阳县',
            ),
            484 => 
            array (
                'id' => 985,
                'parent_id' => 947,
                'code' => '330327',
                'name' => '苍南县',
                'type' => 3,
                'full_name' => '浙江省/温州市/苍南县',
            ),
            485 => 
            array (
                'id' => 986,
                'parent_id' => 947,
                'code' => '330328',
                'name' => '文成县',
                'type' => 3,
                'full_name' => '浙江省/温州市/文成县',
            ),
            486 => 
            array (
                'id' => 987,
                'parent_id' => 947,
                'code' => '330329',
                'name' => '泰顺县',
                'type' => 3,
                'full_name' => '浙江省/温州市/泰顺县',
            ),
            487 => 
            array (
                'id' => 988,
                'parent_id' => 947,
                'code' => '330381',
                'name' => '瑞安市',
                'type' => 3,
                'full_name' => '浙江省/温州市/瑞安市',
            ),
            488 => 
            array (
                'id' => 989,
                'parent_id' => 947,
                'code' => '330382',
                'name' => '乐清市',
                'type' => 3,
                'full_name' => '浙江省/温州市/乐清市',
            ),
            489 => 
            array (
                'id' => 990,
                'parent_id' => 948,
                'code' => '330402',
                'name' => '南湖区',
                'type' => 3,
                'full_name' => '浙江省/嘉兴市/南湖区',
            ),
            490 => 
            array (
                'id' => 991,
                'parent_id' => 948,
                'code' => '330411',
                'name' => '秀洲区',
                'type' => 3,
                'full_name' => '浙江省/嘉兴市/秀洲区',
            ),
            491 => 
            array (
                'id' => 992,
                'parent_id' => 948,
                'code' => '330421',
                'name' => '嘉善县',
                'type' => 3,
                'full_name' => '浙江省/嘉兴市/嘉善县',
            ),
            492 => 
            array (
                'id' => 993,
                'parent_id' => 948,
                'code' => '330424',
                'name' => '海盐县',
                'type' => 3,
                'full_name' => '浙江省/嘉兴市/海盐县',
            ),
            493 => 
            array (
                'id' => 994,
                'parent_id' => 948,
                'code' => '330481',
                'name' => '海宁市',
                'type' => 3,
                'full_name' => '浙江省/嘉兴市/海宁市',
            ),
            494 => 
            array (
                'id' => 995,
                'parent_id' => 948,
                'code' => '330482',
                'name' => '平湖市',
                'type' => 3,
                'full_name' => '浙江省/嘉兴市/平湖市',
            ),
            495 => 
            array (
                'id' => 996,
                'parent_id' => 948,
                'code' => '330483',
                'name' => '桐乡市',
                'type' => 3,
                'full_name' => '浙江省/嘉兴市/桐乡市',
            ),
            496 => 
            array (
                'id' => 997,
                'parent_id' => 949,
                'code' => '330502',
                'name' => '吴兴区',
                'type' => 3,
                'full_name' => '浙江省/湖州市/吴兴区',
            ),
            497 => 
            array (
                'id' => 998,
                'parent_id' => 949,
                'code' => '330503',
                'name' => '南浔区',
                'type' => 3,
                'full_name' => '浙江省/湖州市/南浔区',
            ),
            498 => 
            array (
                'id' => 999,
                'parent_id' => 949,
                'code' => '330521',
                'name' => '德清县',
                'type' => 3,
                'full_name' => '浙江省/湖州市/德清县',
            ),
            499 => 
            array (
                'id' => 1000,
                'parent_id' => 949,
                'code' => '330522',
                'name' => '长兴县',
                'type' => 3,
                'full_name' => '浙江省/湖州市/长兴县',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'parent_id' => 949,
                'code' => '330523',
                'name' => '安吉县',
                'type' => 3,
                'full_name' => '浙江省/湖州市/安吉县',
            ),
            1 => 
            array (
                'id' => 1002,
                'parent_id' => 950,
                'code' => '330602',
                'name' => '越城区',
                'type' => 3,
                'full_name' => '浙江省/绍兴市/越城区',
            ),
            2 => 
            array (
                'id' => 1003,
                'parent_id' => 950,
                'code' => '330603',
                'name' => '柯桥区',
                'type' => 3,
                'full_name' => '浙江省/绍兴市/柯桥区',
            ),
            3 => 
            array (
                'id' => 1004,
                'parent_id' => 950,
                'code' => '330604',
                'name' => '上虞区',
                'type' => 3,
                'full_name' => '浙江省/绍兴市/上虞区',
            ),
            4 => 
            array (
                'id' => 1005,
                'parent_id' => 950,
                'code' => '330624',
                'name' => '新昌县',
                'type' => 3,
                'full_name' => '浙江省/绍兴市/新昌县',
            ),
            5 => 
            array (
                'id' => 1006,
                'parent_id' => 950,
                'code' => '330681',
                'name' => '诸暨市',
                'type' => 3,
                'full_name' => '浙江省/绍兴市/诸暨市',
            ),
            6 => 
            array (
                'id' => 1007,
                'parent_id' => 950,
                'code' => '330683',
                'name' => '嵊州市',
                'type' => 3,
                'full_name' => '浙江省/绍兴市/嵊州市',
            ),
            7 => 
            array (
                'id' => 1008,
                'parent_id' => 951,
                'code' => '330702',
                'name' => '婺城区',
                'type' => 3,
                'full_name' => '浙江省/金华市/婺城区',
            ),
            8 => 
            array (
                'id' => 1009,
                'parent_id' => 951,
                'code' => '330703',
                'name' => '金东区',
                'type' => 3,
                'full_name' => '浙江省/金华市/金东区',
            ),
            9 => 
            array (
                'id' => 1010,
                'parent_id' => 951,
                'code' => '330723',
                'name' => '武义县',
                'type' => 3,
                'full_name' => '浙江省/金华市/武义县',
            ),
            10 => 
            array (
                'id' => 1011,
                'parent_id' => 951,
                'code' => '330726',
                'name' => '浦江县',
                'type' => 3,
                'full_name' => '浙江省/金华市/浦江县',
            ),
            11 => 
            array (
                'id' => 1012,
                'parent_id' => 951,
                'code' => '330727',
                'name' => '磐安县',
                'type' => 3,
                'full_name' => '浙江省/金华市/磐安县',
            ),
            12 => 
            array (
                'id' => 1013,
                'parent_id' => 951,
                'code' => '330781',
                'name' => '兰溪市',
                'type' => 3,
                'full_name' => '浙江省/金华市/兰溪市',
            ),
            13 => 
            array (
                'id' => 1014,
                'parent_id' => 951,
                'code' => '330782',
                'name' => '义乌市',
                'type' => 3,
                'full_name' => '浙江省/金华市/义乌市',
            ),
            14 => 
            array (
                'id' => 1015,
                'parent_id' => 951,
                'code' => '330783',
                'name' => '东阳市',
                'type' => 3,
                'full_name' => '浙江省/金华市/东阳市',
            ),
            15 => 
            array (
                'id' => 1016,
                'parent_id' => 951,
                'code' => '330784',
                'name' => '永康市',
                'type' => 3,
                'full_name' => '浙江省/金华市/永康市',
            ),
            16 => 
            array (
                'id' => 1017,
                'parent_id' => 952,
                'code' => '330802',
                'name' => '柯城区',
                'type' => 3,
                'full_name' => '浙江省/衢州市/柯城区',
            ),
            17 => 
            array (
                'id' => 1018,
                'parent_id' => 952,
                'code' => '330803',
                'name' => '衢江区',
                'type' => 3,
                'full_name' => '浙江省/衢州市/衢江区',
            ),
            18 => 
            array (
                'id' => 1019,
                'parent_id' => 952,
                'code' => '330822',
                'name' => '常山县',
                'type' => 3,
                'full_name' => '浙江省/衢州市/常山县',
            ),
            19 => 
            array (
                'id' => 1020,
                'parent_id' => 952,
                'code' => '330824',
                'name' => '开化县',
                'type' => 3,
                'full_name' => '浙江省/衢州市/开化县',
            ),
            20 => 
            array (
                'id' => 1021,
                'parent_id' => 952,
                'code' => '330825',
                'name' => '龙游县',
                'type' => 3,
                'full_name' => '浙江省/衢州市/龙游县',
            ),
            21 => 
            array (
                'id' => 1022,
                'parent_id' => 952,
                'code' => '330881',
                'name' => '江山市',
                'type' => 3,
                'full_name' => '浙江省/衢州市/江山市',
            ),
            22 => 
            array (
                'id' => 1023,
                'parent_id' => 953,
                'code' => '330902',
                'name' => '定海区',
                'type' => 3,
                'full_name' => '浙江省/舟山市/定海区',
            ),
            23 => 
            array (
                'id' => 1024,
                'parent_id' => 953,
                'code' => '330903',
                'name' => '普陀区',
                'type' => 3,
                'full_name' => '浙江省/舟山市/普陀区',
            ),
            24 => 
            array (
                'id' => 1025,
                'parent_id' => 953,
                'code' => '330921',
                'name' => '岱山县',
                'type' => 3,
                'full_name' => '浙江省/舟山市/岱山县',
            ),
            25 => 
            array (
                'id' => 1026,
                'parent_id' => 953,
                'code' => '330922',
                'name' => '嵊泗县',
                'type' => 3,
                'full_name' => '浙江省/舟山市/嵊泗县',
            ),
            26 => 
            array (
                'id' => 1027,
                'parent_id' => 954,
                'code' => '331002',
                'name' => '椒江区',
                'type' => 3,
                'full_name' => '浙江省/台州市/椒江区',
            ),
            27 => 
            array (
                'id' => 1028,
                'parent_id' => 954,
                'code' => '331003',
                'name' => '黄岩区',
                'type' => 3,
                'full_name' => '浙江省/台州市/黄岩区',
            ),
            28 => 
            array (
                'id' => 1029,
                'parent_id' => 954,
                'code' => '331004',
                'name' => '路桥区',
                'type' => 3,
                'full_name' => '浙江省/台州市/路桥区',
            ),
            29 => 
            array (
                'id' => 1030,
                'parent_id' => 954,
                'code' => '331022',
                'name' => '三门县',
                'type' => 3,
                'full_name' => '浙江省/台州市/三门县',
            ),
            30 => 
            array (
                'id' => 1031,
                'parent_id' => 954,
                'code' => '331023',
                'name' => '天台县',
                'type' => 3,
                'full_name' => '浙江省/台州市/天台县',
            ),
            31 => 
            array (
                'id' => 1032,
                'parent_id' => 954,
                'code' => '331024',
                'name' => '仙居县',
                'type' => 3,
                'full_name' => '浙江省/台州市/仙居县',
            ),
            32 => 
            array (
                'id' => 1033,
                'parent_id' => 954,
                'code' => '331081',
                'name' => '温岭市',
                'type' => 3,
                'full_name' => '浙江省/台州市/温岭市',
            ),
            33 => 
            array (
                'id' => 1034,
                'parent_id' => 954,
                'code' => '331082',
                'name' => '临海市',
                'type' => 3,
                'full_name' => '浙江省/台州市/临海市',
            ),
            34 => 
            array (
                'id' => 1035,
                'parent_id' => 954,
                'code' => '331083',
                'name' => '玉环市',
                'type' => 3,
                'full_name' => '浙江省/台州市/玉环市',
            ),
            35 => 
            array (
                'id' => 1036,
                'parent_id' => 955,
                'code' => '331102',
                'name' => '莲都区',
                'type' => 3,
                'full_name' => '浙江省/丽水市/莲都区',
            ),
            36 => 
            array (
                'id' => 1037,
                'parent_id' => 955,
                'code' => '331121',
                'name' => '青田县',
                'type' => 3,
                'full_name' => '浙江省/丽水市/青田县',
            ),
            37 => 
            array (
                'id' => 1038,
                'parent_id' => 955,
                'code' => '331122',
                'name' => '缙云县',
                'type' => 3,
                'full_name' => '浙江省/丽水市/缙云县',
            ),
            38 => 
            array (
                'id' => 1039,
                'parent_id' => 955,
                'code' => '331123',
                'name' => '遂昌县',
                'type' => 3,
                'full_name' => '浙江省/丽水市/遂昌县',
            ),
            39 => 
            array (
                'id' => 1040,
                'parent_id' => 955,
                'code' => '331124',
                'name' => '松阳县',
                'type' => 3,
                'full_name' => '浙江省/丽水市/松阳县',
            ),
            40 => 
            array (
                'id' => 1041,
                'parent_id' => 955,
                'code' => '331125',
                'name' => '云和县',
                'type' => 3,
                'full_name' => '浙江省/丽水市/云和县',
            ),
            41 => 
            array (
                'id' => 1042,
                'parent_id' => 955,
                'code' => '331126',
                'name' => '庆元县',
                'type' => 3,
                'full_name' => '浙江省/丽水市/庆元县',
            ),
            42 => 
            array (
                'id' => 1043,
                'parent_id' => 955,
                'code' => '331127',
                'name' => '景宁畲族自治县',
                'type' => 3,
                'full_name' => '浙江省/丽水市/景宁畲族自治县',
            ),
            43 => 
            array (
                'id' => 1044,
                'parent_id' => 955,
                'code' => '331181',
                'name' => '龙泉市',
                'type' => 3,
                'full_name' => '浙江省/丽水市/龙泉市',
            ),
            44 => 
            array (
                'id' => 1045,
                'parent_id' => 13,
                'code' => '340100',
                'name' => '合肥市',
                'type' => 2,
                'full_name' => '安徽省/合肥市',
            ),
            45 => 
            array (
                'id' => 1046,
                'parent_id' => 13,
                'code' => '340200',
                'name' => '芜湖市',
                'type' => 2,
                'full_name' => '安徽省/芜湖市',
            ),
            46 => 
            array (
                'id' => 1047,
                'parent_id' => 13,
                'code' => '340300',
                'name' => '蚌埠市',
                'type' => 2,
                'full_name' => '安徽省/蚌埠市',
            ),
            47 => 
            array (
                'id' => 1048,
                'parent_id' => 13,
                'code' => '340400',
                'name' => '淮南市',
                'type' => 2,
                'full_name' => '安徽省/淮南市',
            ),
            48 => 
            array (
                'id' => 1049,
                'parent_id' => 13,
                'code' => '340500',
                'name' => '马鞍山市',
                'type' => 2,
                'full_name' => '安徽省/马鞍山市',
            ),
            49 => 
            array (
                'id' => 1050,
                'parent_id' => 13,
                'code' => '340600',
                'name' => '淮北市',
                'type' => 2,
                'full_name' => '安徽省/淮北市',
            ),
            50 => 
            array (
                'id' => 1051,
                'parent_id' => 13,
                'code' => '340700',
                'name' => '铜陵市',
                'type' => 2,
                'full_name' => '安徽省/铜陵市',
            ),
            51 => 
            array (
                'id' => 1052,
                'parent_id' => 13,
                'code' => '340800',
                'name' => '安庆市',
                'type' => 2,
                'full_name' => '安徽省/安庆市',
            ),
            52 => 
            array (
                'id' => 1053,
                'parent_id' => 13,
                'code' => '341000',
                'name' => '黄山市',
                'type' => 2,
                'full_name' => '安徽省/黄山市',
            ),
            53 => 
            array (
                'id' => 1054,
                'parent_id' => 13,
                'code' => '341100',
                'name' => '滁州市',
                'type' => 2,
                'full_name' => '安徽省/滁州市',
            ),
            54 => 
            array (
                'id' => 1055,
                'parent_id' => 13,
                'code' => '341200',
                'name' => '阜阳市',
                'type' => 2,
                'full_name' => '安徽省/阜阳市',
            ),
            55 => 
            array (
                'id' => 1056,
                'parent_id' => 13,
                'code' => '341300',
                'name' => '宿州市',
                'type' => 2,
                'full_name' => '安徽省/宿州市',
            ),
            56 => 
            array (
                'id' => 1057,
                'parent_id' => 13,
                'code' => '341500',
                'name' => '六安市',
                'type' => 2,
                'full_name' => '安徽省/六安市',
            ),
            57 => 
            array (
                'id' => 1058,
                'parent_id' => 13,
                'code' => '341600',
                'name' => '亳州市',
                'type' => 2,
                'full_name' => '安徽省/亳州市',
            ),
            58 => 
            array (
                'id' => 1059,
                'parent_id' => 13,
                'code' => '341700',
                'name' => '池州市',
                'type' => 2,
                'full_name' => '安徽省/池州市',
            ),
            59 => 
            array (
                'id' => 1060,
                'parent_id' => 13,
                'code' => '341800',
                'name' => '宣城市',
                'type' => 2,
                'full_name' => '安徽省/宣城市',
            ),
            60 => 
            array (
                'id' => 1061,
                'parent_id' => 1045,
                'code' => '340102',
                'name' => '瑶海区',
                'type' => 3,
                'full_name' => '安徽省/合肥市/瑶海区',
            ),
            61 => 
            array (
                'id' => 1062,
                'parent_id' => 1045,
                'code' => '340103',
                'name' => '庐阳区',
                'type' => 3,
                'full_name' => '安徽省/合肥市/庐阳区',
            ),
            62 => 
            array (
                'id' => 1063,
                'parent_id' => 1045,
                'code' => '340104',
                'name' => '蜀山区',
                'type' => 3,
                'full_name' => '安徽省/合肥市/蜀山区',
            ),
            63 => 
            array (
                'id' => 1064,
                'parent_id' => 1045,
                'code' => '340111',
                'name' => '包河区',
                'type' => 3,
                'full_name' => '安徽省/合肥市/包河区',
            ),
            64 => 
            array (
                'id' => 1065,
                'parent_id' => 1045,
                'code' => '340121',
                'name' => '长丰县',
                'type' => 3,
                'full_name' => '安徽省/合肥市/长丰县',
            ),
            65 => 
            array (
                'id' => 1066,
                'parent_id' => 1045,
                'code' => '340122',
                'name' => '肥东县',
                'type' => 3,
                'full_name' => '安徽省/合肥市/肥东县',
            ),
            66 => 
            array (
                'id' => 1067,
                'parent_id' => 1045,
                'code' => '340123',
                'name' => '肥西县',
                'type' => 3,
                'full_name' => '安徽省/合肥市/肥西县',
            ),
            67 => 
            array (
                'id' => 1068,
                'parent_id' => 1045,
                'code' => '340124',
                'name' => '庐江县',
                'type' => 3,
                'full_name' => '安徽省/合肥市/庐江县',
            ),
            68 => 
            array (
                'id' => 1069,
                'parent_id' => 1045,
                'code' => '340181',
                'name' => '巢湖市',
                'type' => 3,
                'full_name' => '安徽省/合肥市/巢湖市',
            ),
            69 => 
            array (
                'id' => 1070,
                'parent_id' => 1046,
                'code' => '340202',
                'name' => '镜湖区',
                'type' => 3,
                'full_name' => '安徽省/芜湖市/镜湖区',
            ),
            70 => 
            array (
                'id' => 1071,
                'parent_id' => 1046,
                'code' => '340203',
                'name' => '弋江区',
                'type' => 3,
                'full_name' => '安徽省/芜湖市/弋江区',
            ),
            71 => 
            array (
                'id' => 1072,
                'parent_id' => 1046,
                'code' => '340207',
                'name' => '鸠江区',
                'type' => 3,
                'full_name' => '安徽省/芜湖市/鸠江区',
            ),
            72 => 
            array (
                'id' => 1073,
                'parent_id' => 1046,
                'code' => '340208',
                'name' => '三山区',
                'type' => 3,
                'full_name' => '安徽省/芜湖市/三山区',
            ),
            73 => 
            array (
                'id' => 1074,
                'parent_id' => 1046,
                'code' => '340221',
                'name' => '芜湖县',
                'type' => 3,
                'full_name' => '安徽省/芜湖市/芜湖县',
            ),
            74 => 
            array (
                'id' => 1075,
                'parent_id' => 1046,
                'code' => '340222',
                'name' => '繁昌县',
                'type' => 3,
                'full_name' => '安徽省/芜湖市/繁昌县',
            ),
            75 => 
            array (
                'id' => 1076,
                'parent_id' => 1046,
                'code' => '340223',
                'name' => '南陵县',
                'type' => 3,
                'full_name' => '安徽省/芜湖市/南陵县',
            ),
            76 => 
            array (
                'id' => 1077,
                'parent_id' => 1046,
                'code' => '340225',
                'name' => '无为县',
                'type' => 3,
                'full_name' => '安徽省/芜湖市/无为县',
            ),
            77 => 
            array (
                'id' => 1078,
                'parent_id' => 1047,
                'code' => '340302',
                'name' => '龙子湖区',
                'type' => 3,
                'full_name' => '安徽省/蚌埠市/龙子湖区',
            ),
            78 => 
            array (
                'id' => 1079,
                'parent_id' => 1047,
                'code' => '340303',
                'name' => '蚌山区',
                'type' => 3,
                'full_name' => '安徽省/蚌埠市/蚌山区',
            ),
            79 => 
            array (
                'id' => 1080,
                'parent_id' => 1047,
                'code' => '340304',
                'name' => '禹会区',
                'type' => 3,
                'full_name' => '安徽省/蚌埠市/禹会区',
            ),
            80 => 
            array (
                'id' => 1081,
                'parent_id' => 1047,
                'code' => '340311',
                'name' => '淮上区',
                'type' => 3,
                'full_name' => '安徽省/蚌埠市/淮上区',
            ),
            81 => 
            array (
                'id' => 1082,
                'parent_id' => 1047,
                'code' => '340321',
                'name' => '怀远县',
                'type' => 3,
                'full_name' => '安徽省/蚌埠市/怀远县',
            ),
            82 => 
            array (
                'id' => 1083,
                'parent_id' => 1047,
                'code' => '340322',
                'name' => '五河县',
                'type' => 3,
                'full_name' => '安徽省/蚌埠市/五河县',
            ),
            83 => 
            array (
                'id' => 1084,
                'parent_id' => 1047,
                'code' => '340323',
                'name' => '固镇县',
                'type' => 3,
                'full_name' => '安徽省/蚌埠市/固镇县',
            ),
            84 => 
            array (
                'id' => 1085,
                'parent_id' => 1048,
                'code' => '340402',
                'name' => '大通区',
                'type' => 3,
                'full_name' => '安徽省/淮南市/大通区',
            ),
            85 => 
            array (
                'id' => 1086,
                'parent_id' => 1048,
                'code' => '340403',
                'name' => '田家庵区',
                'type' => 3,
                'full_name' => '安徽省/淮南市/田家庵区',
            ),
            86 => 
            array (
                'id' => 1087,
                'parent_id' => 1048,
                'code' => '340404',
                'name' => '谢家集区',
                'type' => 3,
                'full_name' => '安徽省/淮南市/谢家集区',
            ),
            87 => 
            array (
                'id' => 1088,
                'parent_id' => 1048,
                'code' => '340405',
                'name' => '八公山区',
                'type' => 3,
                'full_name' => '安徽省/淮南市/八公山区',
            ),
            88 => 
            array (
                'id' => 1089,
                'parent_id' => 1048,
                'code' => '340406',
                'name' => '潘集区',
                'type' => 3,
                'full_name' => '安徽省/淮南市/潘集区',
            ),
            89 => 
            array (
                'id' => 1090,
                'parent_id' => 1048,
                'code' => '340421',
                'name' => '凤台县',
                'type' => 3,
                'full_name' => '安徽省/淮南市/凤台县',
            ),
            90 => 
            array (
                'id' => 1091,
                'parent_id' => 1048,
                'code' => '340422',
                'name' => '寿县',
                'type' => 3,
                'full_name' => '安徽省/淮南市/寿县',
            ),
            91 => 
            array (
                'id' => 1092,
                'parent_id' => 1049,
                'code' => '340503',
                'name' => '花山区',
                'type' => 3,
                'full_name' => '安徽省/马鞍山市/花山区',
            ),
            92 => 
            array (
                'id' => 1093,
                'parent_id' => 1049,
                'code' => '340504',
                'name' => '雨山区',
                'type' => 3,
                'full_name' => '安徽省/马鞍山市/雨山区',
            ),
            93 => 
            array (
                'id' => 1094,
                'parent_id' => 1049,
                'code' => '340506',
                'name' => '博望区',
                'type' => 3,
                'full_name' => '安徽省/马鞍山市/博望区',
            ),
            94 => 
            array (
                'id' => 1095,
                'parent_id' => 1049,
                'code' => '340521',
                'name' => '当涂县',
                'type' => 3,
                'full_name' => '安徽省/马鞍山市/当涂县',
            ),
            95 => 
            array (
                'id' => 1096,
                'parent_id' => 1049,
                'code' => '340522',
                'name' => '含山县',
                'type' => 3,
                'full_name' => '安徽省/马鞍山市/含山县',
            ),
            96 => 
            array (
                'id' => 1097,
                'parent_id' => 1049,
                'code' => '340523',
                'name' => '和县',
                'type' => 3,
                'full_name' => '安徽省/马鞍山市/和县',
            ),
            97 => 
            array (
                'id' => 1098,
                'parent_id' => 1050,
                'code' => '340602',
                'name' => '杜集区',
                'type' => 3,
                'full_name' => '安徽省/淮北市/杜集区',
            ),
            98 => 
            array (
                'id' => 1099,
                'parent_id' => 1050,
                'code' => '340603',
                'name' => '相山区',
                'type' => 3,
                'full_name' => '安徽省/淮北市/相山区',
            ),
            99 => 
            array (
                'id' => 1100,
                'parent_id' => 1050,
                'code' => '340604',
                'name' => '烈山区',
                'type' => 3,
                'full_name' => '安徽省/淮北市/烈山区',
            ),
            100 => 
            array (
                'id' => 1101,
                'parent_id' => 1050,
                'code' => '340621',
                'name' => '濉溪县',
                'type' => 3,
                'full_name' => '安徽省/淮北市/濉溪县',
            ),
            101 => 
            array (
                'id' => 1102,
                'parent_id' => 1051,
                'code' => '340705',
                'name' => '铜官区',
                'type' => 3,
                'full_name' => '安徽省/铜陵市/铜官区',
            ),
            102 => 
            array (
                'id' => 1103,
                'parent_id' => 1051,
                'code' => '340706',
                'name' => '义安区',
                'type' => 3,
                'full_name' => '安徽省/铜陵市/义安区',
            ),
            103 => 
            array (
                'id' => 1104,
                'parent_id' => 1051,
                'code' => '340711',
                'name' => '郊区',
                'type' => 3,
                'full_name' => '安徽省/铜陵市/郊区',
            ),
            104 => 
            array (
                'id' => 1105,
                'parent_id' => 1051,
                'code' => '340722',
                'name' => '枞阳县',
                'type' => 3,
                'full_name' => '安徽省/铜陵市/枞阳县',
            ),
            105 => 
            array (
                'id' => 1106,
                'parent_id' => 1052,
                'code' => '340802',
                'name' => '迎江区',
                'type' => 3,
                'full_name' => '安徽省/安庆市/迎江区',
            ),
            106 => 
            array (
                'id' => 1107,
                'parent_id' => 1052,
                'code' => '340803',
                'name' => '大观区',
                'type' => 3,
                'full_name' => '安徽省/安庆市/大观区',
            ),
            107 => 
            array (
                'id' => 1108,
                'parent_id' => 1052,
                'code' => '340811',
                'name' => '宜秀区',
                'type' => 3,
                'full_name' => '安徽省/安庆市/宜秀区',
            ),
            108 => 
            array (
                'id' => 1109,
                'parent_id' => 1052,
                'code' => '340822',
                'name' => '怀宁县',
                'type' => 3,
                'full_name' => '安徽省/安庆市/怀宁县',
            ),
            109 => 
            array (
                'id' => 1110,
                'parent_id' => 1052,
                'code' => '340824',
                'name' => '潜山县',
                'type' => 3,
                'full_name' => '安徽省/安庆市/潜山县',
            ),
            110 => 
            array (
                'id' => 1111,
                'parent_id' => 1052,
                'code' => '340825',
                'name' => '太湖县',
                'type' => 3,
                'full_name' => '安徽省/安庆市/太湖县',
            ),
            111 => 
            array (
                'id' => 1112,
                'parent_id' => 1052,
                'code' => '340826',
                'name' => '宿松县',
                'type' => 3,
                'full_name' => '安徽省/安庆市/宿松县',
            ),
            112 => 
            array (
                'id' => 1113,
                'parent_id' => 1052,
                'code' => '340827',
                'name' => '望江县',
                'type' => 3,
                'full_name' => '安徽省/安庆市/望江县',
            ),
            113 => 
            array (
                'id' => 1114,
                'parent_id' => 1052,
                'code' => '340828',
                'name' => '岳西县',
                'type' => 3,
                'full_name' => '安徽省/安庆市/岳西县',
            ),
            114 => 
            array (
                'id' => 1115,
                'parent_id' => 1052,
                'code' => '340881',
                'name' => '桐城市',
                'type' => 3,
                'full_name' => '安徽省/安庆市/桐城市',
            ),
            115 => 
            array (
                'id' => 1116,
                'parent_id' => 1053,
                'code' => '341002',
                'name' => '屯溪区',
                'type' => 3,
                'full_name' => '安徽省/黄山市/屯溪区',
            ),
            116 => 
            array (
                'id' => 1117,
                'parent_id' => 1053,
                'code' => '341003',
                'name' => '黄山区',
                'type' => 3,
                'full_name' => '安徽省/黄山市/黄山区',
            ),
            117 => 
            array (
                'id' => 1118,
                'parent_id' => 1053,
                'code' => '341004',
                'name' => '徽州区',
                'type' => 3,
                'full_name' => '安徽省/黄山市/徽州区',
            ),
            118 => 
            array (
                'id' => 1119,
                'parent_id' => 1053,
                'code' => '341021',
                'name' => '歙县',
                'type' => 3,
                'full_name' => '安徽省/黄山市/歙县',
            ),
            119 => 
            array (
                'id' => 1120,
                'parent_id' => 1053,
                'code' => '341022',
                'name' => '休宁县',
                'type' => 3,
                'full_name' => '安徽省/黄山市/休宁县',
            ),
            120 => 
            array (
                'id' => 1121,
                'parent_id' => 1053,
                'code' => '341023',
                'name' => '黟县',
                'type' => 3,
                'full_name' => '安徽省/黄山市/黟县',
            ),
            121 => 
            array (
                'id' => 1122,
                'parent_id' => 1053,
                'code' => '341024',
                'name' => '祁门县',
                'type' => 3,
                'full_name' => '安徽省/黄山市/祁门县',
            ),
            122 => 
            array (
                'id' => 1123,
                'parent_id' => 1054,
                'code' => '341102',
                'name' => '琅琊区',
                'type' => 3,
                'full_name' => '安徽省/滁州市/琅琊区',
            ),
            123 => 
            array (
                'id' => 1124,
                'parent_id' => 1054,
                'code' => '341103',
                'name' => '南谯区',
                'type' => 3,
                'full_name' => '安徽省/滁州市/南谯区',
            ),
            124 => 
            array (
                'id' => 1125,
                'parent_id' => 1054,
                'code' => '341122',
                'name' => '来安县',
                'type' => 3,
                'full_name' => '安徽省/滁州市/来安县',
            ),
            125 => 
            array (
                'id' => 1126,
                'parent_id' => 1054,
                'code' => '341124',
                'name' => '全椒县',
                'type' => 3,
                'full_name' => '安徽省/滁州市/全椒县',
            ),
            126 => 
            array (
                'id' => 1127,
                'parent_id' => 1054,
                'code' => '341125',
                'name' => '定远县',
                'type' => 3,
                'full_name' => '安徽省/滁州市/定远县',
            ),
            127 => 
            array (
                'id' => 1128,
                'parent_id' => 1054,
                'code' => '341126',
                'name' => '凤阳县',
                'type' => 3,
                'full_name' => '安徽省/滁州市/凤阳县',
            ),
            128 => 
            array (
                'id' => 1129,
                'parent_id' => 1054,
                'code' => '341181',
                'name' => '天长市',
                'type' => 3,
                'full_name' => '安徽省/滁州市/天长市',
            ),
            129 => 
            array (
                'id' => 1130,
                'parent_id' => 1054,
                'code' => '341182',
                'name' => '明光市',
                'type' => 3,
                'full_name' => '安徽省/滁州市/明光市',
            ),
            130 => 
            array (
                'id' => 1131,
                'parent_id' => 1055,
                'code' => '341202',
                'name' => '颍州区',
                'type' => 3,
                'full_name' => '安徽省/阜阳市/颍州区',
            ),
            131 => 
            array (
                'id' => 1132,
                'parent_id' => 1055,
                'code' => '341203',
                'name' => '颍东区',
                'type' => 3,
                'full_name' => '安徽省/阜阳市/颍东区',
            ),
            132 => 
            array (
                'id' => 1133,
                'parent_id' => 1055,
                'code' => '341204',
                'name' => '颍泉区',
                'type' => 3,
                'full_name' => '安徽省/阜阳市/颍泉区',
            ),
            133 => 
            array (
                'id' => 1134,
                'parent_id' => 1055,
                'code' => '341221',
                'name' => '临泉县',
                'type' => 3,
                'full_name' => '安徽省/阜阳市/临泉县',
            ),
            134 => 
            array (
                'id' => 1135,
                'parent_id' => 1055,
                'code' => '341222',
                'name' => '太和县',
                'type' => 3,
                'full_name' => '安徽省/阜阳市/太和县',
            ),
            135 => 
            array (
                'id' => 1136,
                'parent_id' => 1055,
                'code' => '341225',
                'name' => '阜南县',
                'type' => 3,
                'full_name' => '安徽省/阜阳市/阜南县',
            ),
            136 => 
            array (
                'id' => 1137,
                'parent_id' => 1055,
                'code' => '341226',
                'name' => '颍上县',
                'type' => 3,
                'full_name' => '安徽省/阜阳市/颍上县',
            ),
            137 => 
            array (
                'id' => 1138,
                'parent_id' => 1055,
                'code' => '341282',
                'name' => '界首市',
                'type' => 3,
                'full_name' => '安徽省/阜阳市/界首市',
            ),
            138 => 
            array (
                'id' => 1139,
                'parent_id' => 1056,
                'code' => '341302',
                'name' => '埇桥区',
                'type' => 3,
                'full_name' => '安徽省/宿州市/埇桥区',
            ),
            139 => 
            array (
                'id' => 1140,
                'parent_id' => 1056,
                'code' => '341321',
                'name' => '砀山县',
                'type' => 3,
                'full_name' => '安徽省/宿州市/砀山县',
            ),
            140 => 
            array (
                'id' => 1141,
                'parent_id' => 1056,
                'code' => '341322',
                'name' => '萧县',
                'type' => 3,
                'full_name' => '安徽省/宿州市/萧县',
            ),
            141 => 
            array (
                'id' => 1142,
                'parent_id' => 1056,
                'code' => '341323',
                'name' => '灵璧县',
                'type' => 3,
                'full_name' => '安徽省/宿州市/灵璧县',
            ),
            142 => 
            array (
                'id' => 1143,
                'parent_id' => 1056,
                'code' => '341324',
                'name' => '泗县',
                'type' => 3,
                'full_name' => '安徽省/宿州市/泗县',
            ),
            143 => 
            array (
                'id' => 1144,
                'parent_id' => 1057,
                'code' => '341502',
                'name' => '金安区',
                'type' => 3,
                'full_name' => '安徽省/六安市/金安区',
            ),
            144 => 
            array (
                'id' => 1145,
                'parent_id' => 1057,
                'code' => '341503',
                'name' => '裕安区',
                'type' => 3,
                'full_name' => '安徽省/六安市/裕安区',
            ),
            145 => 
            array (
                'id' => 1146,
                'parent_id' => 1057,
                'code' => '341504',
                'name' => '叶集区',
                'type' => 3,
                'full_name' => '安徽省/六安市/叶集区',
            ),
            146 => 
            array (
                'id' => 1147,
                'parent_id' => 1057,
                'code' => '341522',
                'name' => '霍邱县',
                'type' => 3,
                'full_name' => '安徽省/六安市/霍邱县',
            ),
            147 => 
            array (
                'id' => 1148,
                'parent_id' => 1057,
                'code' => '341523',
                'name' => '舒城县',
                'type' => 3,
                'full_name' => '安徽省/六安市/舒城县',
            ),
            148 => 
            array (
                'id' => 1149,
                'parent_id' => 1057,
                'code' => '341524',
                'name' => '金寨县',
                'type' => 3,
                'full_name' => '安徽省/六安市/金寨县',
            ),
            149 => 
            array (
                'id' => 1150,
                'parent_id' => 1057,
                'code' => '341525',
                'name' => '霍山县',
                'type' => 3,
                'full_name' => '安徽省/六安市/霍山县',
            ),
            150 => 
            array (
                'id' => 1151,
                'parent_id' => 1058,
                'code' => '341602',
                'name' => '谯城区',
                'type' => 3,
                'full_name' => '安徽省/亳州市/谯城区',
            ),
            151 => 
            array (
                'id' => 1152,
                'parent_id' => 1058,
                'code' => '341621',
                'name' => '涡阳县',
                'type' => 3,
                'full_name' => '安徽省/亳州市/涡阳县',
            ),
            152 => 
            array (
                'id' => 1153,
                'parent_id' => 1058,
                'code' => '341622',
                'name' => '蒙城县',
                'type' => 3,
                'full_name' => '安徽省/亳州市/蒙城县',
            ),
            153 => 
            array (
                'id' => 1154,
                'parent_id' => 1058,
                'code' => '341623',
                'name' => '利辛县',
                'type' => 3,
                'full_name' => '安徽省/亳州市/利辛县',
            ),
            154 => 
            array (
                'id' => 1155,
                'parent_id' => 1059,
                'code' => '341702',
                'name' => '贵池区',
                'type' => 3,
                'full_name' => '安徽省/池州市/贵池区',
            ),
            155 => 
            array (
                'id' => 1156,
                'parent_id' => 1059,
                'code' => '341721',
                'name' => '东至县',
                'type' => 3,
                'full_name' => '安徽省/池州市/东至县',
            ),
            156 => 
            array (
                'id' => 1157,
                'parent_id' => 1059,
                'code' => '341722',
                'name' => '石台县',
                'type' => 3,
                'full_name' => '安徽省/池州市/石台县',
            ),
            157 => 
            array (
                'id' => 1158,
                'parent_id' => 1059,
                'code' => '341723',
                'name' => '青阳县',
                'type' => 3,
                'full_name' => '安徽省/池州市/青阳县',
            ),
            158 => 
            array (
                'id' => 1159,
                'parent_id' => 1060,
                'code' => '341802',
                'name' => '宣州区',
                'type' => 3,
                'full_name' => '安徽省/宣城市/宣州区',
            ),
            159 => 
            array (
                'id' => 1160,
                'parent_id' => 1060,
                'code' => '341821',
                'name' => '郎溪县',
                'type' => 3,
                'full_name' => '安徽省/宣城市/郎溪县',
            ),
            160 => 
            array (
                'id' => 1161,
                'parent_id' => 1060,
                'code' => '341822',
                'name' => '广德县',
                'type' => 3,
                'full_name' => '安徽省/宣城市/广德县',
            ),
            161 => 
            array (
                'id' => 1162,
                'parent_id' => 1060,
                'code' => '341823',
                'name' => '泾县',
                'type' => 3,
                'full_name' => '安徽省/宣城市/泾县',
            ),
            162 => 
            array (
                'id' => 1163,
                'parent_id' => 1060,
                'code' => '341824',
                'name' => '绩溪县',
                'type' => 3,
                'full_name' => '安徽省/宣城市/绩溪县',
            ),
            163 => 
            array (
                'id' => 1164,
                'parent_id' => 1060,
                'code' => '341825',
                'name' => '旌德县',
                'type' => 3,
                'full_name' => '安徽省/宣城市/旌德县',
            ),
            164 => 
            array (
                'id' => 1165,
                'parent_id' => 1060,
                'code' => '341881',
                'name' => '宁国市',
                'type' => 3,
                'full_name' => '安徽省/宣城市/宁国市',
            ),
            165 => 
            array (
                'id' => 1166,
                'parent_id' => 14,
                'code' => '350100',
                'name' => '福州市',
                'type' => 2,
                'full_name' => '福建省/福州市',
            ),
            166 => 
            array (
                'id' => 1167,
                'parent_id' => 14,
                'code' => '350200',
                'name' => '厦门市',
                'type' => 2,
                'full_name' => '福建省/厦门市',
            ),
            167 => 
            array (
                'id' => 1168,
                'parent_id' => 14,
                'code' => '350300',
                'name' => '莆田市',
                'type' => 2,
                'full_name' => '福建省/莆田市',
            ),
            168 => 
            array (
                'id' => 1169,
                'parent_id' => 14,
                'code' => '350400',
                'name' => '三明市',
                'type' => 2,
                'full_name' => '福建省/三明市',
            ),
            169 => 
            array (
                'id' => 1170,
                'parent_id' => 14,
                'code' => '350500',
                'name' => '泉州市',
                'type' => 2,
                'full_name' => '福建省/泉州市',
            ),
            170 => 
            array (
                'id' => 1171,
                'parent_id' => 14,
                'code' => '350600',
                'name' => '漳州市',
                'type' => 2,
                'full_name' => '福建省/漳州市',
            ),
            171 => 
            array (
                'id' => 1172,
                'parent_id' => 14,
                'code' => '350700',
                'name' => '南平市',
                'type' => 2,
                'full_name' => '福建省/南平市',
            ),
            172 => 
            array (
                'id' => 1173,
                'parent_id' => 14,
                'code' => '350800',
                'name' => '龙岩市',
                'type' => 2,
                'full_name' => '福建省/龙岩市',
            ),
            173 => 
            array (
                'id' => 1174,
                'parent_id' => 14,
                'code' => '350900',
                'name' => '宁德市',
                'type' => 2,
                'full_name' => '福建省/宁德市',
            ),
            174 => 
            array (
                'id' => 1175,
                'parent_id' => 1166,
                'code' => '350102',
                'name' => '鼓楼区',
                'type' => 3,
                'full_name' => '福建省/福州市/鼓楼区',
            ),
            175 => 
            array (
                'id' => 1176,
                'parent_id' => 1166,
                'code' => '350103',
                'name' => '台江区',
                'type' => 3,
                'full_name' => '福建省/福州市/台江区',
            ),
            176 => 
            array (
                'id' => 1177,
                'parent_id' => 1166,
                'code' => '350104',
                'name' => '仓山区',
                'type' => 3,
                'full_name' => '福建省/福州市/仓山区',
            ),
            177 => 
            array (
                'id' => 1178,
                'parent_id' => 1166,
                'code' => '350105',
                'name' => '马尾区',
                'type' => 3,
                'full_name' => '福建省/福州市/马尾区',
            ),
            178 => 
            array (
                'id' => 1179,
                'parent_id' => 1166,
                'code' => '350111',
                'name' => '晋安区',
                'type' => 3,
                'full_name' => '福建省/福州市/晋安区',
            ),
            179 => 
            array (
                'id' => 1180,
                'parent_id' => 1166,
                'code' => '350112',
                'name' => '长乐区',
                'type' => 3,
                'full_name' => '福建省/福州市/长乐区',
            ),
            180 => 
            array (
                'id' => 1181,
                'parent_id' => 1166,
                'code' => '350121',
                'name' => '闽侯县',
                'type' => 3,
                'full_name' => '福建省/福州市/闽侯县',
            ),
            181 => 
            array (
                'id' => 1182,
                'parent_id' => 1166,
                'code' => '350122',
                'name' => '连江县',
                'type' => 3,
                'full_name' => '福建省/福州市/连江县',
            ),
            182 => 
            array (
                'id' => 1183,
                'parent_id' => 1166,
                'code' => '350123',
                'name' => '罗源县',
                'type' => 3,
                'full_name' => '福建省/福州市/罗源县',
            ),
            183 => 
            array (
                'id' => 1184,
                'parent_id' => 1166,
                'code' => '350124',
                'name' => '闽清县',
                'type' => 3,
                'full_name' => '福建省/福州市/闽清县',
            ),
            184 => 
            array (
                'id' => 1185,
                'parent_id' => 1166,
                'code' => '350125',
                'name' => '永泰县',
                'type' => 3,
                'full_name' => '福建省/福州市/永泰县',
            ),
            185 => 
            array (
                'id' => 1186,
                'parent_id' => 1166,
                'code' => '350128',
                'name' => '平潭县',
                'type' => 3,
                'full_name' => '福建省/福州市/平潭县',
            ),
            186 => 
            array (
                'id' => 1187,
                'parent_id' => 1166,
                'code' => '350181',
                'name' => '福清市',
                'type' => 3,
                'full_name' => '福建省/福州市/福清市',
            ),
            187 => 
            array (
                'id' => 1188,
                'parent_id' => 1167,
                'code' => '350203',
                'name' => '思明区',
                'type' => 3,
                'full_name' => '福建省/厦门市/思明区',
            ),
            188 => 
            array (
                'id' => 1189,
                'parent_id' => 1167,
                'code' => '350205',
                'name' => '海沧区',
                'type' => 3,
                'full_name' => '福建省/厦门市/海沧区',
            ),
            189 => 
            array (
                'id' => 1190,
                'parent_id' => 1167,
                'code' => '350206',
                'name' => '湖里区',
                'type' => 3,
                'full_name' => '福建省/厦门市/湖里区',
            ),
            190 => 
            array (
                'id' => 1191,
                'parent_id' => 1167,
                'code' => '350211',
                'name' => '集美区',
                'type' => 3,
                'full_name' => '福建省/厦门市/集美区',
            ),
            191 => 
            array (
                'id' => 1192,
                'parent_id' => 1167,
                'code' => '350212',
                'name' => '同安区',
                'type' => 3,
                'full_name' => '福建省/厦门市/同安区',
            ),
            192 => 
            array (
                'id' => 1193,
                'parent_id' => 1167,
                'code' => '350213',
                'name' => '翔安区',
                'type' => 3,
                'full_name' => '福建省/厦门市/翔安区',
            ),
            193 => 
            array (
                'id' => 1194,
                'parent_id' => 1168,
                'code' => '350302',
                'name' => '城厢区',
                'type' => 3,
                'full_name' => '福建省/莆田市/城厢区',
            ),
            194 => 
            array (
                'id' => 1195,
                'parent_id' => 1168,
                'code' => '350303',
                'name' => '涵江区',
                'type' => 3,
                'full_name' => '福建省/莆田市/涵江区',
            ),
            195 => 
            array (
                'id' => 1196,
                'parent_id' => 1168,
                'code' => '350304',
                'name' => '荔城区',
                'type' => 3,
                'full_name' => '福建省/莆田市/荔城区',
            ),
            196 => 
            array (
                'id' => 1197,
                'parent_id' => 1168,
                'code' => '350305',
                'name' => '秀屿区',
                'type' => 3,
                'full_name' => '福建省/莆田市/秀屿区',
            ),
            197 => 
            array (
                'id' => 1198,
                'parent_id' => 1168,
                'code' => '350322',
                'name' => '仙游县',
                'type' => 3,
                'full_name' => '福建省/莆田市/仙游县',
            ),
            198 => 
            array (
                'id' => 1199,
                'parent_id' => 1169,
                'code' => '350402',
                'name' => '梅列区',
                'type' => 3,
                'full_name' => '福建省/三明市/梅列区',
            ),
            199 => 
            array (
                'id' => 1200,
                'parent_id' => 1169,
                'code' => '350403',
                'name' => '三元区',
                'type' => 3,
                'full_name' => '福建省/三明市/三元区',
            ),
            200 => 
            array (
                'id' => 1201,
                'parent_id' => 1169,
                'code' => '350421',
                'name' => '明溪县',
                'type' => 3,
                'full_name' => '福建省/三明市/明溪县',
            ),
            201 => 
            array (
                'id' => 1202,
                'parent_id' => 1169,
                'code' => '350423',
                'name' => '清流县',
                'type' => 3,
                'full_name' => '福建省/三明市/清流县',
            ),
            202 => 
            array (
                'id' => 1203,
                'parent_id' => 1169,
                'code' => '350424',
                'name' => '宁化县',
                'type' => 3,
                'full_name' => '福建省/三明市/宁化县',
            ),
            203 => 
            array (
                'id' => 1204,
                'parent_id' => 1169,
                'code' => '350425',
                'name' => '大田县',
                'type' => 3,
                'full_name' => '福建省/三明市/大田县',
            ),
            204 => 
            array (
                'id' => 1205,
                'parent_id' => 1169,
                'code' => '350426',
                'name' => '尤溪县',
                'type' => 3,
                'full_name' => '福建省/三明市/尤溪县',
            ),
            205 => 
            array (
                'id' => 1206,
                'parent_id' => 1169,
                'code' => '350427',
                'name' => '沙县',
                'type' => 3,
                'full_name' => '福建省/三明市/沙县',
            ),
            206 => 
            array (
                'id' => 1207,
                'parent_id' => 1169,
                'code' => '350428',
                'name' => '将乐县',
                'type' => 3,
                'full_name' => '福建省/三明市/将乐县',
            ),
            207 => 
            array (
                'id' => 1208,
                'parent_id' => 1169,
                'code' => '350429',
                'name' => '泰宁县',
                'type' => 3,
                'full_name' => '福建省/三明市/泰宁县',
            ),
            208 => 
            array (
                'id' => 1209,
                'parent_id' => 1169,
                'code' => '350430',
                'name' => '建宁县',
                'type' => 3,
                'full_name' => '福建省/三明市/建宁县',
            ),
            209 => 
            array (
                'id' => 1210,
                'parent_id' => 1169,
                'code' => '350481',
                'name' => '永安市',
                'type' => 3,
                'full_name' => '福建省/三明市/永安市',
            ),
            210 => 
            array (
                'id' => 1211,
                'parent_id' => 1170,
                'code' => '350502',
                'name' => '鲤城区',
                'type' => 3,
                'full_name' => '福建省/泉州市/鲤城区',
            ),
            211 => 
            array (
                'id' => 1212,
                'parent_id' => 1170,
                'code' => '350503',
                'name' => '丰泽区',
                'type' => 3,
                'full_name' => '福建省/泉州市/丰泽区',
            ),
            212 => 
            array (
                'id' => 1213,
                'parent_id' => 1170,
                'code' => '350504',
                'name' => '洛江区',
                'type' => 3,
                'full_name' => '福建省/泉州市/洛江区',
            ),
            213 => 
            array (
                'id' => 1214,
                'parent_id' => 1170,
                'code' => '350505',
                'name' => '泉港区',
                'type' => 3,
                'full_name' => '福建省/泉州市/泉港区',
            ),
            214 => 
            array (
                'id' => 1215,
                'parent_id' => 1170,
                'code' => '350521',
                'name' => '惠安县',
                'type' => 3,
                'full_name' => '福建省/泉州市/惠安县',
            ),
            215 => 
            array (
                'id' => 1216,
                'parent_id' => 1170,
                'code' => '350524',
                'name' => '安溪县',
                'type' => 3,
                'full_name' => '福建省/泉州市/安溪县',
            ),
            216 => 
            array (
                'id' => 1217,
                'parent_id' => 1170,
                'code' => '350525',
                'name' => '永春县',
                'type' => 3,
                'full_name' => '福建省/泉州市/永春县',
            ),
            217 => 
            array (
                'id' => 1218,
                'parent_id' => 1170,
                'code' => '350526',
                'name' => '德化县',
                'type' => 3,
                'full_name' => '福建省/泉州市/德化县',
            ),
            218 => 
            array (
                'id' => 1219,
                'parent_id' => 1170,
                'code' => '350527',
                'name' => '金门县',
                'type' => 3,
                'full_name' => '福建省/泉州市/金门县',
            ),
            219 => 
            array (
                'id' => 1220,
                'parent_id' => 1170,
                'code' => '350581',
                'name' => '石狮市',
                'type' => 3,
                'full_name' => '福建省/泉州市/石狮市',
            ),
            220 => 
            array (
                'id' => 1221,
                'parent_id' => 1170,
                'code' => '350582',
                'name' => '晋江市',
                'type' => 3,
                'full_name' => '福建省/泉州市/晋江市',
            ),
            221 => 
            array (
                'id' => 1222,
                'parent_id' => 1170,
                'code' => '350583',
                'name' => '南安市',
                'type' => 3,
                'full_name' => '福建省/泉州市/南安市',
            ),
            222 => 
            array (
                'id' => 1223,
                'parent_id' => 1171,
                'code' => '350602',
                'name' => '芗城区',
                'type' => 3,
                'full_name' => '福建省/漳州市/芗城区',
            ),
            223 => 
            array (
                'id' => 1224,
                'parent_id' => 1171,
                'code' => '350603',
                'name' => '龙文区',
                'type' => 3,
                'full_name' => '福建省/漳州市/龙文区',
            ),
            224 => 
            array (
                'id' => 1225,
                'parent_id' => 1171,
                'code' => '350622',
                'name' => '云霄县',
                'type' => 3,
                'full_name' => '福建省/漳州市/云霄县',
            ),
            225 => 
            array (
                'id' => 1226,
                'parent_id' => 1171,
                'code' => '350623',
                'name' => '漳浦县',
                'type' => 3,
                'full_name' => '福建省/漳州市/漳浦县',
            ),
            226 => 
            array (
                'id' => 1227,
                'parent_id' => 1171,
                'code' => '350624',
                'name' => '诏安县',
                'type' => 3,
                'full_name' => '福建省/漳州市/诏安县',
            ),
            227 => 
            array (
                'id' => 1228,
                'parent_id' => 1171,
                'code' => '350625',
                'name' => '长泰县',
                'type' => 3,
                'full_name' => '福建省/漳州市/长泰县',
            ),
            228 => 
            array (
                'id' => 1229,
                'parent_id' => 1171,
                'code' => '350626',
                'name' => '东山县',
                'type' => 3,
                'full_name' => '福建省/漳州市/东山县',
            ),
            229 => 
            array (
                'id' => 1230,
                'parent_id' => 1171,
                'code' => '350627',
                'name' => '南靖县',
                'type' => 3,
                'full_name' => '福建省/漳州市/南靖县',
            ),
            230 => 
            array (
                'id' => 1231,
                'parent_id' => 1171,
                'code' => '350628',
                'name' => '平和县',
                'type' => 3,
                'full_name' => '福建省/漳州市/平和县',
            ),
            231 => 
            array (
                'id' => 1232,
                'parent_id' => 1171,
                'code' => '350629',
                'name' => '华安县',
                'type' => 3,
                'full_name' => '福建省/漳州市/华安县',
            ),
            232 => 
            array (
                'id' => 1233,
                'parent_id' => 1171,
                'code' => '350681',
                'name' => '龙海市',
                'type' => 3,
                'full_name' => '福建省/漳州市/龙海市',
            ),
            233 => 
            array (
                'id' => 1234,
                'parent_id' => 1172,
                'code' => '350702',
                'name' => '延平区',
                'type' => 3,
                'full_name' => '福建省/南平市/延平区',
            ),
            234 => 
            array (
                'id' => 1235,
                'parent_id' => 1172,
                'code' => '350703',
                'name' => '建阳区',
                'type' => 3,
                'full_name' => '福建省/南平市/建阳区',
            ),
            235 => 
            array (
                'id' => 1236,
                'parent_id' => 1172,
                'code' => '350721',
                'name' => '顺昌县',
                'type' => 3,
                'full_name' => '福建省/南平市/顺昌县',
            ),
            236 => 
            array (
                'id' => 1237,
                'parent_id' => 1172,
                'code' => '350722',
                'name' => '浦城县',
                'type' => 3,
                'full_name' => '福建省/南平市/浦城县',
            ),
            237 => 
            array (
                'id' => 1238,
                'parent_id' => 1172,
                'code' => '350723',
                'name' => '光泽县',
                'type' => 3,
                'full_name' => '福建省/南平市/光泽县',
            ),
            238 => 
            array (
                'id' => 1239,
                'parent_id' => 1172,
                'code' => '350724',
                'name' => '松溪县',
                'type' => 3,
                'full_name' => '福建省/南平市/松溪县',
            ),
            239 => 
            array (
                'id' => 1240,
                'parent_id' => 1172,
                'code' => '350725',
                'name' => '政和县',
                'type' => 3,
                'full_name' => '福建省/南平市/政和县',
            ),
            240 => 
            array (
                'id' => 1241,
                'parent_id' => 1172,
                'code' => '350781',
                'name' => '邵武市',
                'type' => 3,
                'full_name' => '福建省/南平市/邵武市',
            ),
            241 => 
            array (
                'id' => 1242,
                'parent_id' => 1172,
                'code' => '350782',
                'name' => '武夷山市',
                'type' => 3,
                'full_name' => '福建省/南平市/武夷山市',
            ),
            242 => 
            array (
                'id' => 1243,
                'parent_id' => 1172,
                'code' => '350783',
                'name' => '建瓯市',
                'type' => 3,
                'full_name' => '福建省/南平市/建瓯市',
            ),
            243 => 
            array (
                'id' => 1244,
                'parent_id' => 1173,
                'code' => '350802',
                'name' => '新罗区',
                'type' => 3,
                'full_name' => '福建省/龙岩市/新罗区',
            ),
            244 => 
            array (
                'id' => 1245,
                'parent_id' => 1173,
                'code' => '350803',
                'name' => '永定区',
                'type' => 3,
                'full_name' => '福建省/龙岩市/永定区',
            ),
            245 => 
            array (
                'id' => 1246,
                'parent_id' => 1173,
                'code' => '350821',
                'name' => '长汀县',
                'type' => 3,
                'full_name' => '福建省/龙岩市/长汀县',
            ),
            246 => 
            array (
                'id' => 1247,
                'parent_id' => 1173,
                'code' => '350823',
                'name' => '上杭县',
                'type' => 3,
                'full_name' => '福建省/龙岩市/上杭县',
            ),
            247 => 
            array (
                'id' => 1248,
                'parent_id' => 1173,
                'code' => '350824',
                'name' => '武平县',
                'type' => 3,
                'full_name' => '福建省/龙岩市/武平县',
            ),
            248 => 
            array (
                'id' => 1249,
                'parent_id' => 1173,
                'code' => '350825',
                'name' => '连城县',
                'type' => 3,
                'full_name' => '福建省/龙岩市/连城县',
            ),
            249 => 
            array (
                'id' => 1250,
                'parent_id' => 1173,
                'code' => '350881',
                'name' => '漳平市',
                'type' => 3,
                'full_name' => '福建省/龙岩市/漳平市',
            ),
            250 => 
            array (
                'id' => 1251,
                'parent_id' => 1174,
                'code' => '350902',
                'name' => '蕉城区',
                'type' => 3,
                'full_name' => '福建省/宁德市/蕉城区',
            ),
            251 => 
            array (
                'id' => 1252,
                'parent_id' => 1174,
                'code' => '350921',
                'name' => '霞浦县',
                'type' => 3,
                'full_name' => '福建省/宁德市/霞浦县',
            ),
            252 => 
            array (
                'id' => 1253,
                'parent_id' => 1174,
                'code' => '350922',
                'name' => '古田县',
                'type' => 3,
                'full_name' => '福建省/宁德市/古田县',
            ),
            253 => 
            array (
                'id' => 1254,
                'parent_id' => 1174,
                'code' => '350923',
                'name' => '屏南县',
                'type' => 3,
                'full_name' => '福建省/宁德市/屏南县',
            ),
            254 => 
            array (
                'id' => 1255,
                'parent_id' => 1174,
                'code' => '350924',
                'name' => '寿宁县',
                'type' => 3,
                'full_name' => '福建省/宁德市/寿宁县',
            ),
            255 => 
            array (
                'id' => 1256,
                'parent_id' => 1174,
                'code' => '350925',
                'name' => '周宁县',
                'type' => 3,
                'full_name' => '福建省/宁德市/周宁县',
            ),
            256 => 
            array (
                'id' => 1257,
                'parent_id' => 1174,
                'code' => '350926',
                'name' => '柘荣县',
                'type' => 3,
                'full_name' => '福建省/宁德市/柘荣县',
            ),
            257 => 
            array (
                'id' => 1258,
                'parent_id' => 1174,
                'code' => '350981',
                'name' => '福安市',
                'type' => 3,
                'full_name' => '福建省/宁德市/福安市',
            ),
            258 => 
            array (
                'id' => 1259,
                'parent_id' => 1174,
                'code' => '350982',
                'name' => '福鼎市',
                'type' => 3,
                'full_name' => '福建省/宁德市/福鼎市',
            ),
            259 => 
            array (
                'id' => 1260,
                'parent_id' => 15,
                'code' => '360100',
                'name' => '南昌市',
                'type' => 2,
                'full_name' => '江西省/南昌市',
            ),
            260 => 
            array (
                'id' => 1261,
                'parent_id' => 15,
                'code' => '360200',
                'name' => '景德镇市',
                'type' => 2,
                'full_name' => '江西省/景德镇市',
            ),
            261 => 
            array (
                'id' => 1262,
                'parent_id' => 15,
                'code' => '360300',
                'name' => '萍乡市',
                'type' => 2,
                'full_name' => '江西省/萍乡市',
            ),
            262 => 
            array (
                'id' => 1263,
                'parent_id' => 15,
                'code' => '360400',
                'name' => '九江市',
                'type' => 2,
                'full_name' => '江西省/九江市',
            ),
            263 => 
            array (
                'id' => 1264,
                'parent_id' => 15,
                'code' => '360500',
                'name' => '新余市',
                'type' => 2,
                'full_name' => '江西省/新余市',
            ),
            264 => 
            array (
                'id' => 1265,
                'parent_id' => 15,
                'code' => '360600',
                'name' => '鹰潭市',
                'type' => 2,
                'full_name' => '江西省/鹰潭市',
            ),
            265 => 
            array (
                'id' => 1266,
                'parent_id' => 15,
                'code' => '360700',
                'name' => '赣州市',
                'type' => 2,
                'full_name' => '江西省/赣州市',
            ),
            266 => 
            array (
                'id' => 1267,
                'parent_id' => 15,
                'code' => '360800',
                'name' => '吉安市',
                'type' => 2,
                'full_name' => '江西省/吉安市',
            ),
            267 => 
            array (
                'id' => 1268,
                'parent_id' => 15,
                'code' => '360900',
                'name' => '宜春市',
                'type' => 2,
                'full_name' => '江西省/宜春市',
            ),
            268 => 
            array (
                'id' => 1269,
                'parent_id' => 15,
                'code' => '361000',
                'name' => '抚州市',
                'type' => 2,
                'full_name' => '江西省/抚州市',
            ),
            269 => 
            array (
                'id' => 1270,
                'parent_id' => 15,
                'code' => '361100',
                'name' => '上饶市',
                'type' => 2,
                'full_name' => '江西省/上饶市',
            ),
            270 => 
            array (
                'id' => 1271,
                'parent_id' => 1260,
                'code' => '360102',
                'name' => '东湖区',
                'type' => 3,
                'full_name' => '江西省/南昌市/东湖区',
            ),
            271 => 
            array (
                'id' => 1272,
                'parent_id' => 1260,
                'code' => '360103',
                'name' => '西湖区',
                'type' => 3,
                'full_name' => '江西省/南昌市/西湖区',
            ),
            272 => 
            array (
                'id' => 1273,
                'parent_id' => 1260,
                'code' => '360104',
                'name' => '青云谱区',
                'type' => 3,
                'full_name' => '江西省/南昌市/青云谱区',
            ),
            273 => 
            array (
                'id' => 1274,
                'parent_id' => 1260,
                'code' => '360105',
                'name' => '湾里区',
                'type' => 3,
                'full_name' => '江西省/南昌市/湾里区',
            ),
            274 => 
            array (
                'id' => 1275,
                'parent_id' => 1260,
                'code' => '360111',
                'name' => '青山湖区',
                'type' => 3,
                'full_name' => '江西省/南昌市/青山湖区',
            ),
            275 => 
            array (
                'id' => 1276,
                'parent_id' => 1260,
                'code' => '360112',
                'name' => '新建区',
                'type' => 3,
                'full_name' => '江西省/南昌市/新建区',
            ),
            276 => 
            array (
                'id' => 1277,
                'parent_id' => 1260,
                'code' => '360121',
                'name' => '南昌县',
                'type' => 3,
                'full_name' => '江西省/南昌市/南昌县',
            ),
            277 => 
            array (
                'id' => 1278,
                'parent_id' => 1260,
                'code' => '360123',
                'name' => '安义县',
                'type' => 3,
                'full_name' => '江西省/南昌市/安义县',
            ),
            278 => 
            array (
                'id' => 1279,
                'parent_id' => 1260,
                'code' => '360124',
                'name' => '进贤县',
                'type' => 3,
                'full_name' => '江西省/南昌市/进贤县',
            ),
            279 => 
            array (
                'id' => 1280,
                'parent_id' => 1261,
                'code' => '360202',
                'name' => '昌江区',
                'type' => 3,
                'full_name' => '江西省/景德镇市/昌江区',
            ),
            280 => 
            array (
                'id' => 1281,
                'parent_id' => 1261,
                'code' => '360203',
                'name' => '珠山区',
                'type' => 3,
                'full_name' => '江西省/景德镇市/珠山区',
            ),
            281 => 
            array (
                'id' => 1282,
                'parent_id' => 1261,
                'code' => '360222',
                'name' => '浮梁县',
                'type' => 3,
                'full_name' => '江西省/景德镇市/浮梁县',
            ),
            282 => 
            array (
                'id' => 1283,
                'parent_id' => 1261,
                'code' => '360281',
                'name' => '乐平市',
                'type' => 3,
                'full_name' => '江西省/景德镇市/乐平市',
            ),
            283 => 
            array (
                'id' => 1284,
                'parent_id' => 1262,
                'code' => '360302',
                'name' => '安源区',
                'type' => 3,
                'full_name' => '江西省/萍乡市/安源区',
            ),
            284 => 
            array (
                'id' => 1285,
                'parent_id' => 1262,
                'code' => '360313',
                'name' => '湘东区',
                'type' => 3,
                'full_name' => '江西省/萍乡市/湘东区',
            ),
            285 => 
            array (
                'id' => 1286,
                'parent_id' => 1262,
                'code' => '360321',
                'name' => '莲花县',
                'type' => 3,
                'full_name' => '江西省/萍乡市/莲花县',
            ),
            286 => 
            array (
                'id' => 1287,
                'parent_id' => 1262,
                'code' => '360322',
                'name' => '上栗县',
                'type' => 3,
                'full_name' => '江西省/萍乡市/上栗县',
            ),
            287 => 
            array (
                'id' => 1288,
                'parent_id' => 1262,
                'code' => '360323',
                'name' => '芦溪县',
                'type' => 3,
                'full_name' => '江西省/萍乡市/芦溪县',
            ),
            288 => 
            array (
                'id' => 1289,
                'parent_id' => 1263,
                'code' => '360402',
                'name' => '濂溪区',
                'type' => 3,
                'full_name' => '江西省/九江市/濂溪区',
            ),
            289 => 
            array (
                'id' => 1290,
                'parent_id' => 1263,
                'code' => '360403',
                'name' => '浔阳区',
                'type' => 3,
                'full_name' => '江西省/九江市/浔阳区',
            ),
            290 => 
            array (
                'id' => 1291,
                'parent_id' => 1263,
                'code' => '360404',
                'name' => '柴桑区',
                'type' => 3,
                'full_name' => '江西省/九江市/柴桑区',
            ),
            291 => 
            array (
                'id' => 1292,
                'parent_id' => 1263,
                'code' => '360423',
                'name' => '武宁县',
                'type' => 3,
                'full_name' => '江西省/九江市/武宁县',
            ),
            292 => 
            array (
                'id' => 1293,
                'parent_id' => 1263,
                'code' => '360424',
                'name' => '修水县',
                'type' => 3,
                'full_name' => '江西省/九江市/修水县',
            ),
            293 => 
            array (
                'id' => 1294,
                'parent_id' => 1263,
                'code' => '360425',
                'name' => '永修县',
                'type' => 3,
                'full_name' => '江西省/九江市/永修县',
            ),
            294 => 
            array (
                'id' => 1295,
                'parent_id' => 1263,
                'code' => '360426',
                'name' => '德安县',
                'type' => 3,
                'full_name' => '江西省/九江市/德安县',
            ),
            295 => 
            array (
                'id' => 1296,
                'parent_id' => 1263,
                'code' => '360428',
                'name' => '都昌县',
                'type' => 3,
                'full_name' => '江西省/九江市/都昌县',
            ),
            296 => 
            array (
                'id' => 1297,
                'parent_id' => 1263,
                'code' => '360429',
                'name' => '湖口县',
                'type' => 3,
                'full_name' => '江西省/九江市/湖口县',
            ),
            297 => 
            array (
                'id' => 1298,
                'parent_id' => 1263,
                'code' => '360430',
                'name' => '彭泽县',
                'type' => 3,
                'full_name' => '江西省/九江市/彭泽县',
            ),
            298 => 
            array (
                'id' => 1299,
                'parent_id' => 1263,
                'code' => '360481',
                'name' => '瑞昌市',
                'type' => 3,
                'full_name' => '江西省/九江市/瑞昌市',
            ),
            299 => 
            array (
                'id' => 1300,
                'parent_id' => 1263,
                'code' => '360482',
                'name' => '共青城市',
                'type' => 3,
                'full_name' => '江西省/九江市/共青城市',
            ),
            300 => 
            array (
                'id' => 1301,
                'parent_id' => 1263,
                'code' => '360483',
                'name' => '庐山市',
                'type' => 3,
                'full_name' => '江西省/九江市/庐山市',
            ),
            301 => 
            array (
                'id' => 1302,
                'parent_id' => 1264,
                'code' => '360502',
                'name' => '渝水区',
                'type' => 3,
                'full_name' => '江西省/新余市/渝水区',
            ),
            302 => 
            array (
                'id' => 1303,
                'parent_id' => 1264,
                'code' => '360521',
                'name' => '分宜县',
                'type' => 3,
                'full_name' => '江西省/新余市/分宜县',
            ),
            303 => 
            array (
                'id' => 1304,
                'parent_id' => 1265,
                'code' => '360602',
                'name' => '月湖区',
                'type' => 3,
                'full_name' => '江西省/鹰潭市/月湖区',
            ),
            304 => 
            array (
                'id' => 1305,
                'parent_id' => 1265,
                'code' => '360622',
                'name' => '余江县',
                'type' => 3,
                'full_name' => '江西省/鹰潭市/余江县',
            ),
            305 => 
            array (
                'id' => 1306,
                'parent_id' => 1265,
                'code' => '360681',
                'name' => '贵溪市',
                'type' => 3,
                'full_name' => '江西省/鹰潭市/贵溪市',
            ),
            306 => 
            array (
                'id' => 1307,
                'parent_id' => 1266,
                'code' => '360702',
                'name' => '章贡区',
                'type' => 3,
                'full_name' => '江西省/赣州市/章贡区',
            ),
            307 => 
            array (
                'id' => 1308,
                'parent_id' => 1266,
                'code' => '360703',
                'name' => '南康区',
                'type' => 3,
                'full_name' => '江西省/赣州市/南康区',
            ),
            308 => 
            array (
                'id' => 1309,
                'parent_id' => 1266,
                'code' => '360704',
                'name' => '赣县区',
                'type' => 3,
                'full_name' => '江西省/赣州市/赣县区',
            ),
            309 => 
            array (
                'id' => 1310,
                'parent_id' => 1266,
                'code' => '360722',
                'name' => '信丰县',
                'type' => 3,
                'full_name' => '江西省/赣州市/信丰县',
            ),
            310 => 
            array (
                'id' => 1311,
                'parent_id' => 1266,
                'code' => '360723',
                'name' => '大余县',
                'type' => 3,
                'full_name' => '江西省/赣州市/大余县',
            ),
            311 => 
            array (
                'id' => 1312,
                'parent_id' => 1266,
                'code' => '360724',
                'name' => '上犹县',
                'type' => 3,
                'full_name' => '江西省/赣州市/上犹县',
            ),
            312 => 
            array (
                'id' => 1313,
                'parent_id' => 1266,
                'code' => '360725',
                'name' => '崇义县',
                'type' => 3,
                'full_name' => '江西省/赣州市/崇义县',
            ),
            313 => 
            array (
                'id' => 1314,
                'parent_id' => 1266,
                'code' => '360726',
                'name' => '安远县',
                'type' => 3,
                'full_name' => '江西省/赣州市/安远县',
            ),
            314 => 
            array (
                'id' => 1315,
                'parent_id' => 1266,
                'code' => '360727',
                'name' => '龙南县',
                'type' => 3,
                'full_name' => '江西省/赣州市/龙南县',
            ),
            315 => 
            array (
                'id' => 1316,
                'parent_id' => 1266,
                'code' => '360728',
                'name' => '定南县',
                'type' => 3,
                'full_name' => '江西省/赣州市/定南县',
            ),
            316 => 
            array (
                'id' => 1317,
                'parent_id' => 1266,
                'code' => '360729',
                'name' => '全南县',
                'type' => 3,
                'full_name' => '江西省/赣州市/全南县',
            ),
            317 => 
            array (
                'id' => 1318,
                'parent_id' => 1266,
                'code' => '360730',
                'name' => '宁都县',
                'type' => 3,
                'full_name' => '江西省/赣州市/宁都县',
            ),
            318 => 
            array (
                'id' => 1319,
                'parent_id' => 1266,
                'code' => '360731',
                'name' => '于都县',
                'type' => 3,
                'full_name' => '江西省/赣州市/于都县',
            ),
            319 => 
            array (
                'id' => 1320,
                'parent_id' => 1266,
                'code' => '360732',
                'name' => '兴国县',
                'type' => 3,
                'full_name' => '江西省/赣州市/兴国县',
            ),
            320 => 
            array (
                'id' => 1321,
                'parent_id' => 1266,
                'code' => '360733',
                'name' => '会昌县',
                'type' => 3,
                'full_name' => '江西省/赣州市/会昌县',
            ),
            321 => 
            array (
                'id' => 1322,
                'parent_id' => 1266,
                'code' => '360734',
                'name' => '寻乌县',
                'type' => 3,
                'full_name' => '江西省/赣州市/寻乌县',
            ),
            322 => 
            array (
                'id' => 1323,
                'parent_id' => 1266,
                'code' => '360735',
                'name' => '石城县',
                'type' => 3,
                'full_name' => '江西省/赣州市/石城县',
            ),
            323 => 
            array (
                'id' => 1324,
                'parent_id' => 1266,
                'code' => '360781',
                'name' => '瑞金市',
                'type' => 3,
                'full_name' => '江西省/赣州市/瑞金市',
            ),
            324 => 
            array (
                'id' => 1325,
                'parent_id' => 1267,
                'code' => '360802',
                'name' => '吉州区',
                'type' => 3,
                'full_name' => '江西省/吉安市/吉州区',
            ),
            325 => 
            array (
                'id' => 1326,
                'parent_id' => 1267,
                'code' => '360803',
                'name' => '青原区',
                'type' => 3,
                'full_name' => '江西省/吉安市/青原区',
            ),
            326 => 
            array (
                'id' => 1327,
                'parent_id' => 1267,
                'code' => '360821',
                'name' => '吉安县',
                'type' => 3,
                'full_name' => '江西省/吉安市/吉安县',
            ),
            327 => 
            array (
                'id' => 1328,
                'parent_id' => 1267,
                'code' => '360822',
                'name' => '吉水县',
                'type' => 3,
                'full_name' => '江西省/吉安市/吉水县',
            ),
            328 => 
            array (
                'id' => 1329,
                'parent_id' => 1267,
                'code' => '360823',
                'name' => '峡江县',
                'type' => 3,
                'full_name' => '江西省/吉安市/峡江县',
            ),
            329 => 
            array (
                'id' => 1330,
                'parent_id' => 1267,
                'code' => '360824',
                'name' => '新干县',
                'type' => 3,
                'full_name' => '江西省/吉安市/新干县',
            ),
            330 => 
            array (
                'id' => 1331,
                'parent_id' => 1267,
                'code' => '360825',
                'name' => '永丰县',
                'type' => 3,
                'full_name' => '江西省/吉安市/永丰县',
            ),
            331 => 
            array (
                'id' => 1332,
                'parent_id' => 1267,
                'code' => '360826',
                'name' => '泰和县',
                'type' => 3,
                'full_name' => '江西省/吉安市/泰和县',
            ),
            332 => 
            array (
                'id' => 1333,
                'parent_id' => 1267,
                'code' => '360827',
                'name' => '遂川县',
                'type' => 3,
                'full_name' => '江西省/吉安市/遂川县',
            ),
            333 => 
            array (
                'id' => 1334,
                'parent_id' => 1267,
                'code' => '360828',
                'name' => '万安县',
                'type' => 3,
                'full_name' => '江西省/吉安市/万安县',
            ),
            334 => 
            array (
                'id' => 1335,
                'parent_id' => 1267,
                'code' => '360829',
                'name' => '安福县',
                'type' => 3,
                'full_name' => '江西省/吉安市/安福县',
            ),
            335 => 
            array (
                'id' => 1336,
                'parent_id' => 1267,
                'code' => '360830',
                'name' => '永新县',
                'type' => 3,
                'full_name' => '江西省/吉安市/永新县',
            ),
            336 => 
            array (
                'id' => 1337,
                'parent_id' => 1267,
                'code' => '360881',
                'name' => '井冈山市',
                'type' => 3,
                'full_name' => '江西省/吉安市/井冈山市',
            ),
            337 => 
            array (
                'id' => 1338,
                'parent_id' => 1268,
                'code' => '360902',
                'name' => '袁州区',
                'type' => 3,
                'full_name' => '江西省/宜春市/袁州区',
            ),
            338 => 
            array (
                'id' => 1339,
                'parent_id' => 1268,
                'code' => '360921',
                'name' => '奉新县',
                'type' => 3,
                'full_name' => '江西省/宜春市/奉新县',
            ),
            339 => 
            array (
                'id' => 1340,
                'parent_id' => 1268,
                'code' => '360922',
                'name' => '万载县',
                'type' => 3,
                'full_name' => '江西省/宜春市/万载县',
            ),
            340 => 
            array (
                'id' => 1341,
                'parent_id' => 1268,
                'code' => '360923',
                'name' => '上高县',
                'type' => 3,
                'full_name' => '江西省/宜春市/上高县',
            ),
            341 => 
            array (
                'id' => 1342,
                'parent_id' => 1268,
                'code' => '360924',
                'name' => '宜丰县',
                'type' => 3,
                'full_name' => '江西省/宜春市/宜丰县',
            ),
            342 => 
            array (
                'id' => 1343,
                'parent_id' => 1268,
                'code' => '360925',
                'name' => '靖安县',
                'type' => 3,
                'full_name' => '江西省/宜春市/靖安县',
            ),
            343 => 
            array (
                'id' => 1344,
                'parent_id' => 1268,
                'code' => '360926',
                'name' => '铜鼓县',
                'type' => 3,
                'full_name' => '江西省/宜春市/铜鼓县',
            ),
            344 => 
            array (
                'id' => 1345,
                'parent_id' => 1268,
                'code' => '360981',
                'name' => '丰城市',
                'type' => 3,
                'full_name' => '江西省/宜春市/丰城市',
            ),
            345 => 
            array (
                'id' => 1346,
                'parent_id' => 1268,
                'code' => '360982',
                'name' => '樟树市',
                'type' => 3,
                'full_name' => '江西省/宜春市/樟树市',
            ),
            346 => 
            array (
                'id' => 1347,
                'parent_id' => 1268,
                'code' => '360983',
                'name' => '高安市',
                'type' => 3,
                'full_name' => '江西省/宜春市/高安市',
            ),
            347 => 
            array (
                'id' => 1348,
                'parent_id' => 1269,
                'code' => '361002',
                'name' => '临川区',
                'type' => 3,
                'full_name' => '江西省/抚州市/临川区',
            ),
            348 => 
            array (
                'id' => 1349,
                'parent_id' => 1269,
                'code' => '361003',
                'name' => '东乡区',
                'type' => 3,
                'full_name' => '江西省/抚州市/东乡区',
            ),
            349 => 
            array (
                'id' => 1350,
                'parent_id' => 1269,
                'code' => '361021',
                'name' => '南城县',
                'type' => 3,
                'full_name' => '江西省/抚州市/南城县',
            ),
            350 => 
            array (
                'id' => 1351,
                'parent_id' => 1269,
                'code' => '361022',
                'name' => '黎川县',
                'type' => 3,
                'full_name' => '江西省/抚州市/黎川县',
            ),
            351 => 
            array (
                'id' => 1352,
                'parent_id' => 1269,
                'code' => '361023',
                'name' => '南丰县',
                'type' => 3,
                'full_name' => '江西省/抚州市/南丰县',
            ),
            352 => 
            array (
                'id' => 1353,
                'parent_id' => 1269,
                'code' => '361024',
                'name' => '崇仁县',
                'type' => 3,
                'full_name' => '江西省/抚州市/崇仁县',
            ),
            353 => 
            array (
                'id' => 1354,
                'parent_id' => 1269,
                'code' => '361025',
                'name' => '乐安县',
                'type' => 3,
                'full_name' => '江西省/抚州市/乐安县',
            ),
            354 => 
            array (
                'id' => 1355,
                'parent_id' => 1269,
                'code' => '361026',
                'name' => '宜黄县',
                'type' => 3,
                'full_name' => '江西省/抚州市/宜黄县',
            ),
            355 => 
            array (
                'id' => 1356,
                'parent_id' => 1269,
                'code' => '361027',
                'name' => '金溪县',
                'type' => 3,
                'full_name' => '江西省/抚州市/金溪县',
            ),
            356 => 
            array (
                'id' => 1357,
                'parent_id' => 1269,
                'code' => '361028',
                'name' => '资溪县',
                'type' => 3,
                'full_name' => '江西省/抚州市/资溪县',
            ),
            357 => 
            array (
                'id' => 1358,
                'parent_id' => 1269,
                'code' => '361030',
                'name' => '广昌县',
                'type' => 3,
                'full_name' => '江西省/抚州市/广昌县',
            ),
            358 => 
            array (
                'id' => 1359,
                'parent_id' => 1270,
                'code' => '361102',
                'name' => '信州区',
                'type' => 3,
                'full_name' => '江西省/上饶市/信州区',
            ),
            359 => 
            array (
                'id' => 1360,
                'parent_id' => 1270,
                'code' => '361103',
                'name' => '广丰区',
                'type' => 3,
                'full_name' => '江西省/上饶市/广丰区',
            ),
            360 => 
            array (
                'id' => 1361,
                'parent_id' => 1270,
                'code' => '361121',
                'name' => '广信区',
                'type' => 3,
                'full_name' => '江西省/上饶市/广信区',
            ),
            361 => 
            array (
                'id' => 1362,
                'parent_id' => 1270,
                'code' => '361123',
                'name' => '玉山县',
                'type' => 3,
                'full_name' => '江西省/上饶市/玉山县',
            ),
            362 => 
            array (
                'id' => 1363,
                'parent_id' => 1270,
                'code' => '361124',
                'name' => '铅山县',
                'type' => 3,
                'full_name' => '江西省/上饶市/铅山县',
            ),
            363 => 
            array (
                'id' => 1364,
                'parent_id' => 1270,
                'code' => '361125',
                'name' => '横峰县',
                'type' => 3,
                'full_name' => '江西省/上饶市/横峰县',
            ),
            364 => 
            array (
                'id' => 1365,
                'parent_id' => 1270,
                'code' => '361126',
                'name' => '弋阳县',
                'type' => 3,
                'full_name' => '江西省/上饶市/弋阳县',
            ),
            365 => 
            array (
                'id' => 1366,
                'parent_id' => 1270,
                'code' => '361127',
                'name' => '余干县',
                'type' => 3,
                'full_name' => '江西省/上饶市/余干县',
            ),
            366 => 
            array (
                'id' => 1367,
                'parent_id' => 1270,
                'code' => '361128',
                'name' => '鄱阳县',
                'type' => 3,
                'full_name' => '江西省/上饶市/鄱阳县',
            ),
            367 => 
            array (
                'id' => 1368,
                'parent_id' => 1270,
                'code' => '361129',
                'name' => '万年县',
                'type' => 3,
                'full_name' => '江西省/上饶市/万年县',
            ),
            368 => 
            array (
                'id' => 1369,
                'parent_id' => 1270,
                'code' => '361130',
                'name' => '婺源县',
                'type' => 3,
                'full_name' => '江西省/上饶市/婺源县',
            ),
            369 => 
            array (
                'id' => 1370,
                'parent_id' => 1270,
                'code' => '361181',
                'name' => '德兴市',
                'type' => 3,
                'full_name' => '江西省/上饶市/德兴市',
            ),
            370 => 
            array (
                'id' => 1371,
                'parent_id' => 16,
                'code' => '370100',
                'name' => '济南市',
                'type' => 2,
                'full_name' => '山东省/济南市',
            ),
            371 => 
            array (
                'id' => 1372,
                'parent_id' => 16,
                'code' => '370200',
                'name' => '青岛市',
                'type' => 2,
                'full_name' => '山东省/青岛市',
            ),
            372 => 
            array (
                'id' => 1373,
                'parent_id' => 16,
                'code' => '370300',
                'name' => '淄博市',
                'type' => 2,
                'full_name' => '山东省/淄博市',
            ),
            373 => 
            array (
                'id' => 1374,
                'parent_id' => 16,
                'code' => '370400',
                'name' => '枣庄市',
                'type' => 2,
                'full_name' => '山东省/枣庄市',
            ),
            374 => 
            array (
                'id' => 1375,
                'parent_id' => 16,
                'code' => '370500',
                'name' => '东营市',
                'type' => 2,
                'full_name' => '山东省/东营市',
            ),
            375 => 
            array (
                'id' => 1376,
                'parent_id' => 16,
                'code' => '370600',
                'name' => '烟台市',
                'type' => 2,
                'full_name' => '山东省/烟台市',
            ),
            376 => 
            array (
                'id' => 1377,
                'parent_id' => 16,
                'code' => '370700',
                'name' => '潍坊市',
                'type' => 2,
                'full_name' => '山东省/潍坊市',
            ),
            377 => 
            array (
                'id' => 1378,
                'parent_id' => 16,
                'code' => '370800',
                'name' => '济宁市',
                'type' => 2,
                'full_name' => '山东省/济宁市',
            ),
            378 => 
            array (
                'id' => 1379,
                'parent_id' => 16,
                'code' => '370900',
                'name' => '泰安市',
                'type' => 2,
                'full_name' => '山东省/泰安市',
            ),
            379 => 
            array (
                'id' => 1380,
                'parent_id' => 16,
                'code' => '371000',
                'name' => '威海市',
                'type' => 2,
                'full_name' => '山东省/威海市',
            ),
            380 => 
            array (
                'id' => 1381,
                'parent_id' => 16,
                'code' => '371100',
                'name' => '日照市',
                'type' => 2,
                'full_name' => '山东省/日照市',
            ),
            381 => 
            array (
                'id' => 1382,
                'parent_id' => 16,
                'code' => '371200',
                'name' => '莱芜市',
                'type' => 2,
                'full_name' => '山东省/莱芜市',
            ),
            382 => 
            array (
                'id' => 1383,
                'parent_id' => 16,
                'code' => '371300',
                'name' => '临沂市',
                'type' => 2,
                'full_name' => '山东省/临沂市',
            ),
            383 => 
            array (
                'id' => 1384,
                'parent_id' => 16,
                'code' => '371400',
                'name' => '德州市',
                'type' => 2,
                'full_name' => '山东省/德州市',
            ),
            384 => 
            array (
                'id' => 1385,
                'parent_id' => 16,
                'code' => '371500',
                'name' => '聊城市',
                'type' => 2,
                'full_name' => '山东省/聊城市',
            ),
            385 => 
            array (
                'id' => 1386,
                'parent_id' => 16,
                'code' => '371600',
                'name' => '滨州市',
                'type' => 2,
                'full_name' => '山东省/滨州市',
            ),
            386 => 
            array (
                'id' => 1387,
                'parent_id' => 16,
                'code' => '371700',
                'name' => '菏泽市',
                'type' => 2,
                'full_name' => '山东省/菏泽市',
            ),
            387 => 
            array (
                'id' => 1388,
                'parent_id' => 1371,
                'code' => '370102',
                'name' => '历下区',
                'type' => 3,
                'full_name' => '山东省/济南市/历下区',
            ),
            388 => 
            array (
                'id' => 1389,
                'parent_id' => 1371,
                'code' => '370103',
                'name' => '市中区',
                'type' => 3,
                'full_name' => '山东省/济南市/市中区',
            ),
            389 => 
            array (
                'id' => 1390,
                'parent_id' => 1371,
                'code' => '370104',
                'name' => '槐荫区',
                'type' => 3,
                'full_name' => '山东省/济南市/槐荫区',
            ),
            390 => 
            array (
                'id' => 1391,
                'parent_id' => 1371,
                'code' => '370105',
                'name' => '天桥区',
                'type' => 3,
                'full_name' => '山东省/济南市/天桥区',
            ),
            391 => 
            array (
                'id' => 1392,
                'parent_id' => 1371,
                'code' => '370112',
                'name' => '历城区',
                'type' => 3,
                'full_name' => '山东省/济南市/历城区',
            ),
            392 => 
            array (
                'id' => 1393,
                'parent_id' => 1371,
                'code' => '370113',
                'name' => '长清区',
                'type' => 3,
                'full_name' => '山东省/济南市/长清区',
            ),
            393 => 
            array (
                'id' => 1394,
                'parent_id' => 1371,
                'code' => '370114',
                'name' => '章丘区',
                'type' => 3,
                'full_name' => '山东省/济南市/章丘区',
            ),
            394 => 
            array (
                'id' => 1395,
                'parent_id' => 1371,
                'code' => '370124',
                'name' => '平阴县',
                'type' => 3,
                'full_name' => '山东省/济南市/平阴县',
            ),
            395 => 
            array (
                'id' => 1396,
                'parent_id' => 1371,
                'code' => '370125',
                'name' => '济阳县',
                'type' => 3,
                'full_name' => '山东省/济南市/济阳县',
            ),
            396 => 
            array (
                'id' => 1397,
                'parent_id' => 1371,
                'code' => '370126',
                'name' => '商河县',
                'type' => 3,
                'full_name' => '山东省/济南市/商河县',
            ),
            397 => 
            array (
                'id' => 1398,
                'parent_id' => 1372,
                'code' => '370202',
                'name' => '市南区',
                'type' => 3,
                'full_name' => '山东省/青岛市/市南区',
            ),
            398 => 
            array (
                'id' => 1399,
                'parent_id' => 1372,
                'code' => '370203',
                'name' => '市北区',
                'type' => 3,
                'full_name' => '山东省/青岛市/市北区',
            ),
            399 => 
            array (
                'id' => 1400,
                'parent_id' => 1372,
                'code' => '370211',
                'name' => '黄岛区',
                'type' => 3,
                'full_name' => '山东省/青岛市/黄岛区',
            ),
            400 => 
            array (
                'id' => 1401,
                'parent_id' => 1372,
                'code' => '370212',
                'name' => '崂山区',
                'type' => 3,
                'full_name' => '山东省/青岛市/崂山区',
            ),
            401 => 
            array (
                'id' => 1402,
                'parent_id' => 1372,
                'code' => '370213',
                'name' => '李沧区',
                'type' => 3,
                'full_name' => '山东省/青岛市/李沧区',
            ),
            402 => 
            array (
                'id' => 1403,
                'parent_id' => 1372,
                'code' => '370214',
                'name' => '城阳区',
                'type' => 3,
                'full_name' => '山东省/青岛市/城阳区',
            ),
            403 => 
            array (
                'id' => 1404,
                'parent_id' => 1372,
                'code' => '370215',
                'name' => '即墨区',
                'type' => 3,
                'full_name' => '山东省/青岛市/即墨区',
            ),
            404 => 
            array (
                'id' => 1405,
                'parent_id' => 1372,
                'code' => '370281',
                'name' => '胶州市',
                'type' => 3,
                'full_name' => '山东省/青岛市/胶州市',
            ),
            405 => 
            array (
                'id' => 1406,
                'parent_id' => 1372,
                'code' => '370283',
                'name' => '平度市',
                'type' => 3,
                'full_name' => '山东省/青岛市/平度市',
            ),
            406 => 
            array (
                'id' => 1407,
                'parent_id' => 1372,
                'code' => '370285',
                'name' => '莱西市',
                'type' => 3,
                'full_name' => '山东省/青岛市/莱西市',
            ),
            407 => 
            array (
                'id' => 1408,
                'parent_id' => 1373,
                'code' => '370302',
                'name' => '淄川区',
                'type' => 3,
                'full_name' => '山东省/淄博市/淄川区',
            ),
            408 => 
            array (
                'id' => 1409,
                'parent_id' => 1373,
                'code' => '370303',
                'name' => '张店区',
                'type' => 3,
                'full_name' => '山东省/淄博市/张店区',
            ),
            409 => 
            array (
                'id' => 1410,
                'parent_id' => 1373,
                'code' => '370304',
                'name' => '博山区',
                'type' => 3,
                'full_name' => '山东省/淄博市/博山区',
            ),
            410 => 
            array (
                'id' => 1411,
                'parent_id' => 1373,
                'code' => '370305',
                'name' => '临淄区',
                'type' => 3,
                'full_name' => '山东省/淄博市/临淄区',
            ),
            411 => 
            array (
                'id' => 1412,
                'parent_id' => 1373,
                'code' => '370306',
                'name' => '周村区',
                'type' => 3,
                'full_name' => '山东省/淄博市/周村区',
            ),
            412 => 
            array (
                'id' => 1413,
                'parent_id' => 1373,
                'code' => '370321',
                'name' => '桓台县',
                'type' => 3,
                'full_name' => '山东省/淄博市/桓台县',
            ),
            413 => 
            array (
                'id' => 1414,
                'parent_id' => 1373,
                'code' => '370322',
                'name' => '高青县',
                'type' => 3,
                'full_name' => '山东省/淄博市/高青县',
            ),
            414 => 
            array (
                'id' => 1415,
                'parent_id' => 1373,
                'code' => '370323',
                'name' => '沂源县',
                'type' => 3,
                'full_name' => '山东省/淄博市/沂源县',
            ),
            415 => 
            array (
                'id' => 1416,
                'parent_id' => 1374,
                'code' => '370402',
                'name' => '市中区',
                'type' => 3,
                'full_name' => '山东省/枣庄市/市中区',
            ),
            416 => 
            array (
                'id' => 1417,
                'parent_id' => 1374,
                'code' => '370403',
                'name' => '薛城区',
                'type' => 3,
                'full_name' => '山东省/枣庄市/薛城区',
            ),
            417 => 
            array (
                'id' => 1418,
                'parent_id' => 1374,
                'code' => '370404',
                'name' => '峄城区',
                'type' => 3,
                'full_name' => '山东省/枣庄市/峄城区',
            ),
            418 => 
            array (
                'id' => 1419,
                'parent_id' => 1374,
                'code' => '370405',
                'name' => '台儿庄区',
                'type' => 3,
                'full_name' => '山东省/枣庄市/台儿庄区',
            ),
            419 => 
            array (
                'id' => 1420,
                'parent_id' => 1374,
                'code' => '370406',
                'name' => '山亭区',
                'type' => 3,
                'full_name' => '山东省/枣庄市/山亭区',
            ),
            420 => 
            array (
                'id' => 1421,
                'parent_id' => 1374,
                'code' => '370481',
                'name' => '滕州市',
                'type' => 3,
                'full_name' => '山东省/枣庄市/滕州市',
            ),
            421 => 
            array (
                'id' => 1422,
                'parent_id' => 1375,
                'code' => '370502',
                'name' => '东营区',
                'type' => 3,
                'full_name' => '山东省/东营市/东营区',
            ),
            422 => 
            array (
                'id' => 1423,
                'parent_id' => 1375,
                'code' => '370503',
                'name' => '河口区',
                'type' => 3,
                'full_name' => '山东省/东营市/河口区',
            ),
            423 => 
            array (
                'id' => 1424,
                'parent_id' => 1375,
                'code' => '370505',
                'name' => '垦利区',
                'type' => 3,
                'full_name' => '山东省/东营市/垦利区',
            ),
            424 => 
            array (
                'id' => 1425,
                'parent_id' => 1375,
                'code' => '370522',
                'name' => '利津县',
                'type' => 3,
                'full_name' => '山东省/东营市/利津县',
            ),
            425 => 
            array (
                'id' => 1426,
                'parent_id' => 1375,
                'code' => '370523',
                'name' => '广饶县',
                'type' => 3,
                'full_name' => '山东省/东营市/广饶县',
            ),
            426 => 
            array (
                'id' => 1427,
                'parent_id' => 1376,
                'code' => '370602',
                'name' => '芝罘区',
                'type' => 3,
                'full_name' => '山东省/烟台市/芝罘区',
            ),
            427 => 
            array (
                'id' => 1428,
                'parent_id' => 1376,
                'code' => '370611',
                'name' => '福山区',
                'type' => 3,
                'full_name' => '山东省/烟台市/福山区',
            ),
            428 => 
            array (
                'id' => 1429,
                'parent_id' => 1376,
                'code' => '370612',
                'name' => '牟平区',
                'type' => 3,
                'full_name' => '山东省/烟台市/牟平区',
            ),
            429 => 
            array (
                'id' => 1430,
                'parent_id' => 1376,
                'code' => '370613',
                'name' => '莱山区',
                'type' => 3,
                'full_name' => '山东省/烟台市/莱山区',
            ),
            430 => 
            array (
                'id' => 1431,
                'parent_id' => 1376,
                'code' => '370634',
                'name' => '长岛县',
                'type' => 3,
                'full_name' => '山东省/烟台市/长岛县',
            ),
            431 => 
            array (
                'id' => 1432,
                'parent_id' => 1376,
                'code' => '370681',
                'name' => '龙口市',
                'type' => 3,
                'full_name' => '山东省/烟台市/龙口市',
            ),
            432 => 
            array (
                'id' => 1433,
                'parent_id' => 1376,
                'code' => '370682',
                'name' => '莱阳市',
                'type' => 3,
                'full_name' => '山东省/烟台市/莱阳市',
            ),
            433 => 
            array (
                'id' => 1434,
                'parent_id' => 1376,
                'code' => '370683',
                'name' => '莱州市',
                'type' => 3,
                'full_name' => '山东省/烟台市/莱州市',
            ),
            434 => 
            array (
                'id' => 1435,
                'parent_id' => 1376,
                'code' => '370684',
                'name' => '蓬莱市',
                'type' => 3,
                'full_name' => '山东省/烟台市/蓬莱市',
            ),
            435 => 
            array (
                'id' => 1436,
                'parent_id' => 1376,
                'code' => '370685',
                'name' => '招远市',
                'type' => 3,
                'full_name' => '山东省/烟台市/招远市',
            ),
            436 => 
            array (
                'id' => 1437,
                'parent_id' => 1376,
                'code' => '370686',
                'name' => '栖霞市',
                'type' => 3,
                'full_name' => '山东省/烟台市/栖霞市',
            ),
            437 => 
            array (
                'id' => 1438,
                'parent_id' => 1376,
                'code' => '370687',
                'name' => '海阳市',
                'type' => 3,
                'full_name' => '山东省/烟台市/海阳市',
            ),
            438 => 
            array (
                'id' => 1439,
                'parent_id' => 1377,
                'code' => '370702',
                'name' => '潍城区',
                'type' => 3,
                'full_name' => '山东省/潍坊市/潍城区',
            ),
            439 => 
            array (
                'id' => 1440,
                'parent_id' => 1377,
                'code' => '370703',
                'name' => '寒亭区',
                'type' => 3,
                'full_name' => '山东省/潍坊市/寒亭区',
            ),
            440 => 
            array (
                'id' => 1441,
                'parent_id' => 1377,
                'code' => '370704',
                'name' => '坊子区',
                'type' => 3,
                'full_name' => '山东省/潍坊市/坊子区',
            ),
            441 => 
            array (
                'id' => 1442,
                'parent_id' => 1377,
                'code' => '370705',
                'name' => '奎文区',
                'type' => 3,
                'full_name' => '山东省/潍坊市/奎文区',
            ),
            442 => 
            array (
                'id' => 1443,
                'parent_id' => 1377,
                'code' => '370724',
                'name' => '临朐县',
                'type' => 3,
                'full_name' => '山东省/潍坊市/临朐县',
            ),
            443 => 
            array (
                'id' => 1444,
                'parent_id' => 1377,
                'code' => '370725',
                'name' => '昌乐县',
                'type' => 3,
                'full_name' => '山东省/潍坊市/昌乐县',
            ),
            444 => 
            array (
                'id' => 1445,
                'parent_id' => 1377,
                'code' => '370781',
                'name' => '青州市',
                'type' => 3,
                'full_name' => '山东省/潍坊市/青州市',
            ),
            445 => 
            array (
                'id' => 1446,
                'parent_id' => 1377,
                'code' => '370782',
                'name' => '诸城市',
                'type' => 3,
                'full_name' => '山东省/潍坊市/诸城市',
            ),
            446 => 
            array (
                'id' => 1447,
                'parent_id' => 1377,
                'code' => '370783',
                'name' => '寿光市',
                'type' => 3,
                'full_name' => '山东省/潍坊市/寿光市',
            ),
            447 => 
            array (
                'id' => 1448,
                'parent_id' => 1377,
                'code' => '370784',
                'name' => '安丘市',
                'type' => 3,
                'full_name' => '山东省/潍坊市/安丘市',
            ),
            448 => 
            array (
                'id' => 1449,
                'parent_id' => 1377,
                'code' => '370785',
                'name' => '高密市',
                'type' => 3,
                'full_name' => '山东省/潍坊市/高密市',
            ),
            449 => 
            array (
                'id' => 1450,
                'parent_id' => 1377,
                'code' => '370786',
                'name' => '昌邑市',
                'type' => 3,
                'full_name' => '山东省/潍坊市/昌邑市',
            ),
            450 => 
            array (
                'id' => 1451,
                'parent_id' => 1378,
                'code' => '370811',
                'name' => '任城区',
                'type' => 3,
                'full_name' => '山东省/济宁市/任城区',
            ),
            451 => 
            array (
                'id' => 1452,
                'parent_id' => 1378,
                'code' => '370812',
                'name' => '兖州区',
                'type' => 3,
                'full_name' => '山东省/济宁市/兖州区',
            ),
            452 => 
            array (
                'id' => 1453,
                'parent_id' => 1378,
                'code' => '370826',
                'name' => '微山县',
                'type' => 3,
                'full_name' => '山东省/济宁市/微山县',
            ),
            453 => 
            array (
                'id' => 1454,
                'parent_id' => 1378,
                'code' => '370827',
                'name' => '鱼台县',
                'type' => 3,
                'full_name' => '山东省/济宁市/鱼台县',
            ),
            454 => 
            array (
                'id' => 1455,
                'parent_id' => 1378,
                'code' => '370828',
                'name' => '金乡县',
                'type' => 3,
                'full_name' => '山东省/济宁市/金乡县',
            ),
            455 => 
            array (
                'id' => 1456,
                'parent_id' => 1378,
                'code' => '370829',
                'name' => '嘉祥县',
                'type' => 3,
                'full_name' => '山东省/济宁市/嘉祥县',
            ),
            456 => 
            array (
                'id' => 1457,
                'parent_id' => 1378,
                'code' => '370830',
                'name' => '汶上县',
                'type' => 3,
                'full_name' => '山东省/济宁市/汶上县',
            ),
            457 => 
            array (
                'id' => 1458,
                'parent_id' => 1378,
                'code' => '370831',
                'name' => '泗水县',
                'type' => 3,
                'full_name' => '山东省/济宁市/泗水县',
            ),
            458 => 
            array (
                'id' => 1459,
                'parent_id' => 1378,
                'code' => '370832',
                'name' => '梁山县',
                'type' => 3,
                'full_name' => '山东省/济宁市/梁山县',
            ),
            459 => 
            array (
                'id' => 1460,
                'parent_id' => 1378,
                'code' => '370881',
                'name' => '曲阜市',
                'type' => 3,
                'full_name' => '山东省/济宁市/曲阜市',
            ),
            460 => 
            array (
                'id' => 1461,
                'parent_id' => 1378,
                'code' => '370883',
                'name' => '邹城市',
                'type' => 3,
                'full_name' => '山东省/济宁市/邹城市',
            ),
            461 => 
            array (
                'id' => 1462,
                'parent_id' => 1379,
                'code' => '370902',
                'name' => '泰山区',
                'type' => 3,
                'full_name' => '山东省/泰安市/泰山区',
            ),
            462 => 
            array (
                'id' => 1463,
                'parent_id' => 1379,
                'code' => '370911',
                'name' => '岱岳区',
                'type' => 3,
                'full_name' => '山东省/泰安市/岱岳区',
            ),
            463 => 
            array (
                'id' => 1464,
                'parent_id' => 1379,
                'code' => '370921',
                'name' => '宁阳县',
                'type' => 3,
                'full_name' => '山东省/泰安市/宁阳县',
            ),
            464 => 
            array (
                'id' => 1465,
                'parent_id' => 1379,
                'code' => '370923',
                'name' => '东平县',
                'type' => 3,
                'full_name' => '山东省/泰安市/东平县',
            ),
            465 => 
            array (
                'id' => 1466,
                'parent_id' => 1379,
                'code' => '370982',
                'name' => '新泰市',
                'type' => 3,
                'full_name' => '山东省/泰安市/新泰市',
            ),
            466 => 
            array (
                'id' => 1467,
                'parent_id' => 1379,
                'code' => '370983',
                'name' => '肥城市',
                'type' => 3,
                'full_name' => '山东省/泰安市/肥城市',
            ),
            467 => 
            array (
                'id' => 1468,
                'parent_id' => 1380,
                'code' => '371002',
                'name' => '环翠区',
                'type' => 3,
                'full_name' => '山东省/威海市/环翠区',
            ),
            468 => 
            array (
                'id' => 1469,
                'parent_id' => 1380,
                'code' => '371003',
                'name' => '文登区',
                'type' => 3,
                'full_name' => '山东省/威海市/文登区',
            ),
            469 => 
            array (
                'id' => 1470,
                'parent_id' => 1380,
                'code' => '371082',
                'name' => '荣成市',
                'type' => 3,
                'full_name' => '山东省/威海市/荣成市',
            ),
            470 => 
            array (
                'id' => 1471,
                'parent_id' => 1380,
                'code' => '371083',
                'name' => '乳山市',
                'type' => 3,
                'full_name' => '山东省/威海市/乳山市',
            ),
            471 => 
            array (
                'id' => 1472,
                'parent_id' => 1381,
                'code' => '371102',
                'name' => '东港区',
                'type' => 3,
                'full_name' => '山东省/日照市/东港区',
            ),
            472 => 
            array (
                'id' => 1473,
                'parent_id' => 1381,
                'code' => '371103',
                'name' => '岚山区',
                'type' => 3,
                'full_name' => '山东省/日照市/岚山区',
            ),
            473 => 
            array (
                'id' => 1474,
                'parent_id' => 1381,
                'code' => '371121',
                'name' => '五莲县',
                'type' => 3,
                'full_name' => '山东省/日照市/五莲县',
            ),
            474 => 
            array (
                'id' => 1475,
                'parent_id' => 1381,
                'code' => '371122',
                'name' => '莒县',
                'type' => 3,
                'full_name' => '山东省/日照市/莒县',
            ),
            475 => 
            array (
                'id' => 1476,
                'parent_id' => 1382,
                'code' => '371202',
                'name' => '莱城区',
                'type' => 3,
                'full_name' => '山东省/莱芜市/莱城区',
            ),
            476 => 
            array (
                'id' => 1477,
                'parent_id' => 1382,
                'code' => '371203',
                'name' => '钢城区',
                'type' => 3,
                'full_name' => '山东省/莱芜市/钢城区',
            ),
            477 => 
            array (
                'id' => 1478,
                'parent_id' => 1383,
                'code' => '371302',
                'name' => '兰山区',
                'type' => 3,
                'full_name' => '山东省/临沂市/兰山区',
            ),
            478 => 
            array (
                'id' => 1479,
                'parent_id' => 1383,
                'code' => '371311',
                'name' => '罗庄区',
                'type' => 3,
                'full_name' => '山东省/临沂市/罗庄区',
            ),
            479 => 
            array (
                'id' => 1480,
                'parent_id' => 1383,
                'code' => '371312',
                'name' => '河东区',
                'type' => 3,
                'full_name' => '山东省/临沂市/河东区',
            ),
            480 => 
            array (
                'id' => 1481,
                'parent_id' => 1383,
                'code' => '371321',
                'name' => '沂南县',
                'type' => 3,
                'full_name' => '山东省/临沂市/沂南县',
            ),
            481 => 
            array (
                'id' => 1482,
                'parent_id' => 1383,
                'code' => '371322',
                'name' => '郯城县',
                'type' => 3,
                'full_name' => '山东省/临沂市/郯城县',
            ),
            482 => 
            array (
                'id' => 1483,
                'parent_id' => 1383,
                'code' => '371323',
                'name' => '沂水县',
                'type' => 3,
                'full_name' => '山东省/临沂市/沂水县',
            ),
            483 => 
            array (
                'id' => 1484,
                'parent_id' => 1383,
                'code' => '371324',
                'name' => '兰陵县',
                'type' => 3,
                'full_name' => '山东省/临沂市/兰陵县',
            ),
            484 => 
            array (
                'id' => 1485,
                'parent_id' => 1383,
                'code' => '371325',
                'name' => '费县',
                'type' => 3,
                'full_name' => '山东省/临沂市/费县',
            ),
            485 => 
            array (
                'id' => 1486,
                'parent_id' => 1383,
                'code' => '371326',
                'name' => '平邑县',
                'type' => 3,
                'full_name' => '山东省/临沂市/平邑县',
            ),
            486 => 
            array (
                'id' => 1487,
                'parent_id' => 1383,
                'code' => '371327',
                'name' => '莒南县',
                'type' => 3,
                'full_name' => '山东省/临沂市/莒南县',
            ),
            487 => 
            array (
                'id' => 1488,
                'parent_id' => 1383,
                'code' => '371328',
                'name' => '蒙阴县',
                'type' => 3,
                'full_name' => '山东省/临沂市/蒙阴县',
            ),
            488 => 
            array (
                'id' => 1489,
                'parent_id' => 1383,
                'code' => '371329',
                'name' => '临沭县',
                'type' => 3,
                'full_name' => '山东省/临沂市/临沭县',
            ),
            489 => 
            array (
                'id' => 1490,
                'parent_id' => 1384,
                'code' => '371402',
                'name' => '德城区',
                'type' => 3,
                'full_name' => '山东省/德州市/德城区',
            ),
            490 => 
            array (
                'id' => 1491,
                'parent_id' => 1384,
                'code' => '371403',
                'name' => '陵城区',
                'type' => 3,
                'full_name' => '山东省/德州市/陵城区',
            ),
            491 => 
            array (
                'id' => 1492,
                'parent_id' => 1384,
                'code' => '371422',
                'name' => '宁津县',
                'type' => 3,
                'full_name' => '山东省/德州市/宁津县',
            ),
            492 => 
            array (
                'id' => 1493,
                'parent_id' => 1384,
                'code' => '371423',
                'name' => '庆云县',
                'type' => 3,
                'full_name' => '山东省/德州市/庆云县',
            ),
            493 => 
            array (
                'id' => 1494,
                'parent_id' => 1384,
                'code' => '371424',
                'name' => '临邑县',
                'type' => 3,
                'full_name' => '山东省/德州市/临邑县',
            ),
            494 => 
            array (
                'id' => 1495,
                'parent_id' => 1384,
                'code' => '371425',
                'name' => '齐河县',
                'type' => 3,
                'full_name' => '山东省/德州市/齐河县',
            ),
            495 => 
            array (
                'id' => 1496,
                'parent_id' => 1384,
                'code' => '371426',
                'name' => '平原县',
                'type' => 3,
                'full_name' => '山东省/德州市/平原县',
            ),
            496 => 
            array (
                'id' => 1497,
                'parent_id' => 1384,
                'code' => '371427',
                'name' => '夏津县',
                'type' => 3,
                'full_name' => '山东省/德州市/夏津县',
            ),
            497 => 
            array (
                'id' => 1498,
                'parent_id' => 1384,
                'code' => '371428',
                'name' => '武城县',
                'type' => 3,
                'full_name' => '山东省/德州市/武城县',
            ),
            498 => 
            array (
                'id' => 1499,
                'parent_id' => 1384,
                'code' => '371481',
                'name' => '乐陵市',
                'type' => 3,
                'full_name' => '山东省/德州市/乐陵市',
            ),
            499 => 
            array (
                'id' => 1500,
                'parent_id' => 1384,
                'code' => '371482',
                'name' => '禹城市',
                'type' => 3,
                'full_name' => '山东省/德州市/禹城市',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'parent_id' => 1385,
                'code' => '371502',
                'name' => '东昌府区',
                'type' => 3,
                'full_name' => '山东省/聊城市/东昌府区',
            ),
            1 => 
            array (
                'id' => 1502,
                'parent_id' => 1385,
                'code' => '371521',
                'name' => '阳谷县',
                'type' => 3,
                'full_name' => '山东省/聊城市/阳谷县',
            ),
            2 => 
            array (
                'id' => 1503,
                'parent_id' => 1385,
                'code' => '371522',
                'name' => '莘县',
                'type' => 3,
                'full_name' => '山东省/聊城市/莘县',
            ),
            3 => 
            array (
                'id' => 1504,
                'parent_id' => 1385,
                'code' => '371523',
                'name' => '茌平县',
                'type' => 3,
                'full_name' => '山东省/聊城市/茌平县',
            ),
            4 => 
            array (
                'id' => 1505,
                'parent_id' => 1385,
                'code' => '371524',
                'name' => '东阿县',
                'type' => 3,
                'full_name' => '山东省/聊城市/东阿县',
            ),
            5 => 
            array (
                'id' => 1506,
                'parent_id' => 1385,
                'code' => '371525',
                'name' => '冠县',
                'type' => 3,
                'full_name' => '山东省/聊城市/冠县',
            ),
            6 => 
            array (
                'id' => 1507,
                'parent_id' => 1385,
                'code' => '371526',
                'name' => '高唐县',
                'type' => 3,
                'full_name' => '山东省/聊城市/高唐县',
            ),
            7 => 
            array (
                'id' => 1508,
                'parent_id' => 1385,
                'code' => '371581',
                'name' => '临清市',
                'type' => 3,
                'full_name' => '山东省/聊城市/临清市',
            ),
            8 => 
            array (
                'id' => 1509,
                'parent_id' => 1386,
                'code' => '371602',
                'name' => '滨城区',
                'type' => 3,
                'full_name' => '山东省/滨州市/滨城区',
            ),
            9 => 
            array (
                'id' => 1510,
                'parent_id' => 1386,
                'code' => '371603',
                'name' => '沾化区',
                'type' => 3,
                'full_name' => '山东省/滨州市/沾化区',
            ),
            10 => 
            array (
                'id' => 1511,
                'parent_id' => 1386,
                'code' => '371621',
                'name' => '惠民县',
                'type' => 3,
                'full_name' => '山东省/滨州市/惠民县',
            ),
            11 => 
            array (
                'id' => 1512,
                'parent_id' => 1386,
                'code' => '371622',
                'name' => '阳信县',
                'type' => 3,
                'full_name' => '山东省/滨州市/阳信县',
            ),
            12 => 
            array (
                'id' => 1513,
                'parent_id' => 1386,
                'code' => '371623',
                'name' => '无棣县',
                'type' => 3,
                'full_name' => '山东省/滨州市/无棣县',
            ),
            13 => 
            array (
                'id' => 1514,
                'parent_id' => 1386,
                'code' => '371625',
                'name' => '博兴县',
                'type' => 3,
                'full_name' => '山东省/滨州市/博兴县',
            ),
            14 => 
            array (
                'id' => 1515,
                'parent_id' => 1386,
                'code' => '371626',
                'name' => '邹平县',
                'type' => 3,
                'full_name' => '山东省/滨州市/邹平县',
            ),
            15 => 
            array (
                'id' => 1516,
                'parent_id' => 1387,
                'code' => '371702',
                'name' => '牡丹区',
                'type' => 3,
                'full_name' => '山东省/菏泽市/牡丹区',
            ),
            16 => 
            array (
                'id' => 1517,
                'parent_id' => 1387,
                'code' => '371703',
                'name' => '定陶区',
                'type' => 3,
                'full_name' => '山东省/菏泽市/定陶区',
            ),
            17 => 
            array (
                'id' => 1518,
                'parent_id' => 1387,
                'code' => '371721',
                'name' => '曹县',
                'type' => 3,
                'full_name' => '山东省/菏泽市/曹县',
            ),
            18 => 
            array (
                'id' => 1519,
                'parent_id' => 1387,
                'code' => '371722',
                'name' => '单县',
                'type' => 3,
                'full_name' => '山东省/菏泽市/单县',
            ),
            19 => 
            array (
                'id' => 1520,
                'parent_id' => 1387,
                'code' => '371723',
                'name' => '成武县',
                'type' => 3,
                'full_name' => '山东省/菏泽市/成武县',
            ),
            20 => 
            array (
                'id' => 1521,
                'parent_id' => 1387,
                'code' => '371724',
                'name' => '巨野县',
                'type' => 3,
                'full_name' => '山东省/菏泽市/巨野县',
            ),
            21 => 
            array (
                'id' => 1522,
                'parent_id' => 1387,
                'code' => '371725',
                'name' => '郓城县',
                'type' => 3,
                'full_name' => '山东省/菏泽市/郓城县',
            ),
            22 => 
            array (
                'id' => 1523,
                'parent_id' => 1387,
                'code' => '371726',
                'name' => '鄄城县',
                'type' => 3,
                'full_name' => '山东省/菏泽市/鄄城县',
            ),
            23 => 
            array (
                'id' => 1524,
                'parent_id' => 1387,
                'code' => '371728',
                'name' => '东明县',
                'type' => 3,
                'full_name' => '山东省/菏泽市/东明县',
            ),
            24 => 
            array (
                'id' => 1525,
                'parent_id' => 17,
                'code' => '410100',
                'name' => '郑州市',
                'type' => 2,
                'full_name' => '河南省/郑州市',
            ),
            25 => 
            array (
                'id' => 1526,
                'parent_id' => 17,
                'code' => '410200',
                'name' => '开封市',
                'type' => 2,
                'full_name' => '河南省/开封市',
            ),
            26 => 
            array (
                'id' => 1527,
                'parent_id' => 17,
                'code' => '410300',
                'name' => '洛阳市',
                'type' => 2,
                'full_name' => '河南省/洛阳市',
            ),
            27 => 
            array (
                'id' => 1528,
                'parent_id' => 17,
                'code' => '410400',
                'name' => '平顶山市',
                'type' => 2,
                'full_name' => '河南省/平顶山市',
            ),
            28 => 
            array (
                'id' => 1529,
                'parent_id' => 17,
                'code' => '410500',
                'name' => '安阳市',
                'type' => 2,
                'full_name' => '河南省/安阳市',
            ),
            29 => 
            array (
                'id' => 1530,
                'parent_id' => 17,
                'code' => '410600',
                'name' => '鹤壁市',
                'type' => 2,
                'full_name' => '河南省/鹤壁市',
            ),
            30 => 
            array (
                'id' => 1531,
                'parent_id' => 17,
                'code' => '410700',
                'name' => '新乡市',
                'type' => 2,
                'full_name' => '河南省/新乡市',
            ),
            31 => 
            array (
                'id' => 1532,
                'parent_id' => 17,
                'code' => '410800',
                'name' => '焦作市',
                'type' => 2,
                'full_name' => '河南省/焦作市',
            ),
            32 => 
            array (
                'id' => 1533,
                'parent_id' => 17,
                'code' => '410900',
                'name' => '濮阳市',
                'type' => 2,
                'full_name' => '河南省/濮阳市',
            ),
            33 => 
            array (
                'id' => 1534,
                'parent_id' => 17,
                'code' => '411000',
                'name' => '许昌市',
                'type' => 2,
                'full_name' => '河南省/许昌市',
            ),
            34 => 
            array (
                'id' => 1535,
                'parent_id' => 17,
                'code' => '411100',
                'name' => '漯河市',
                'type' => 2,
                'full_name' => '河南省/漯河市',
            ),
            35 => 
            array (
                'id' => 1536,
                'parent_id' => 17,
                'code' => '411200',
                'name' => '三门峡市',
                'type' => 2,
                'full_name' => '河南省/三门峡市',
            ),
            36 => 
            array (
                'id' => 1537,
                'parent_id' => 17,
                'code' => '411300',
                'name' => '南阳市',
                'type' => 2,
                'full_name' => '河南省/南阳市',
            ),
            37 => 
            array (
                'id' => 1538,
                'parent_id' => 17,
                'code' => '411400',
                'name' => '商丘市',
                'type' => 2,
                'full_name' => '河南省/商丘市',
            ),
            38 => 
            array (
                'id' => 1539,
                'parent_id' => 17,
                'code' => '411500',
                'name' => '信阳市',
                'type' => 2,
                'full_name' => '河南省/信阳市',
            ),
            39 => 
            array (
                'id' => 1540,
                'parent_id' => 17,
                'code' => '411600',
                'name' => '周口市',
                'type' => 2,
                'full_name' => '河南省/周口市',
            ),
            40 => 
            array (
                'id' => 1541,
                'parent_id' => 17,
                'code' => '411700',
                'name' => '驻马店市',
                'type' => 2,
                'full_name' => '河南省/驻马店市',
            ),
            41 => 
            array (
                'id' => 1542,
                'parent_id' => 17,
                'code' => '419001',
                'name' => '济源市',
                'type' => 2,
                'full_name' => '河南省/济源市',
            ),
            42 => 
            array (
                'id' => 1543,
                'parent_id' => 1525,
                'code' => '410102',
                'name' => '中原区',
                'type' => 3,
                'full_name' => '河南省/郑州市/中原区',
            ),
            43 => 
            array (
                'id' => 1544,
                'parent_id' => 1525,
                'code' => '410103',
                'name' => '二七区',
                'type' => 3,
                'full_name' => '河南省/郑州市/二七区',
            ),
            44 => 
            array (
                'id' => 1545,
                'parent_id' => 1525,
                'code' => '410104',
                'name' => '管城回族区',
                'type' => 3,
                'full_name' => '河南省/郑州市/管城回族区',
            ),
            45 => 
            array (
                'id' => 1546,
                'parent_id' => 1525,
                'code' => '410105',
                'name' => '金水区',
                'type' => 3,
                'full_name' => '河南省/郑州市/金水区',
            ),
            46 => 
            array (
                'id' => 1547,
                'parent_id' => 1525,
                'code' => '410106',
                'name' => '上街区',
                'type' => 3,
                'full_name' => '河南省/郑州市/上街区',
            ),
            47 => 
            array (
                'id' => 1548,
                'parent_id' => 1525,
                'code' => '410108',
                'name' => '惠济区',
                'type' => 3,
                'full_name' => '河南省/郑州市/惠济区',
            ),
            48 => 
            array (
                'id' => 1549,
                'parent_id' => 1525,
                'code' => '410122',
                'name' => '中牟县',
                'type' => 3,
                'full_name' => '河南省/郑州市/中牟县',
            ),
            49 => 
            array (
                'id' => 1550,
                'parent_id' => 1525,
                'code' => '410181',
                'name' => '巩义市',
                'type' => 3,
                'full_name' => '河南省/郑州市/巩义市',
            ),
            50 => 
            array (
                'id' => 1551,
                'parent_id' => 1525,
                'code' => '410182',
                'name' => '荥阳市',
                'type' => 3,
                'full_name' => '河南省/郑州市/荥阳市',
            ),
            51 => 
            array (
                'id' => 1552,
                'parent_id' => 1525,
                'code' => '410183',
                'name' => '新密市',
                'type' => 3,
                'full_name' => '河南省/郑州市/新密市',
            ),
            52 => 
            array (
                'id' => 1553,
                'parent_id' => 1525,
                'code' => '410184',
                'name' => '新郑市',
                'type' => 3,
                'full_name' => '河南省/郑州市/新郑市',
            ),
            53 => 
            array (
                'id' => 1554,
                'parent_id' => 1525,
                'code' => '410185',
                'name' => '登封市',
                'type' => 3,
                'full_name' => '河南省/郑州市/登封市',
            ),
            54 => 
            array (
                'id' => 1555,
                'parent_id' => 1526,
                'code' => '410202',
                'name' => '龙亭区',
                'type' => 3,
                'full_name' => '河南省/开封市/龙亭区',
            ),
            55 => 
            array (
                'id' => 1556,
                'parent_id' => 1526,
                'code' => '410203',
                'name' => '顺河回族区',
                'type' => 3,
                'full_name' => '河南省/开封市/顺河回族区',
            ),
            56 => 
            array (
                'id' => 1557,
                'parent_id' => 1526,
                'code' => '410204',
                'name' => '鼓楼区',
                'type' => 3,
                'full_name' => '河南省/开封市/鼓楼区',
            ),
            57 => 
            array (
                'id' => 1558,
                'parent_id' => 1526,
                'code' => '410205',
                'name' => '禹王台区',
                'type' => 3,
                'full_name' => '河南省/开封市/禹王台区',
            ),
            58 => 
            array (
                'id' => 1559,
                'parent_id' => 1526,
                'code' => '410212',
                'name' => '祥符区',
                'type' => 3,
                'full_name' => '河南省/开封市/祥符区',
            ),
            59 => 
            array (
                'id' => 1560,
                'parent_id' => 1526,
                'code' => '410221',
                'name' => '杞县',
                'type' => 3,
                'full_name' => '河南省/开封市/杞县',
            ),
            60 => 
            array (
                'id' => 1561,
                'parent_id' => 1526,
                'code' => '410222',
                'name' => '通许县',
                'type' => 3,
                'full_name' => '河南省/开封市/通许县',
            ),
            61 => 
            array (
                'id' => 1562,
                'parent_id' => 1526,
                'code' => '410223',
                'name' => '尉氏县',
                'type' => 3,
                'full_name' => '河南省/开封市/尉氏县',
            ),
            62 => 
            array (
                'id' => 1563,
                'parent_id' => 1526,
                'code' => '410225',
                'name' => '兰考县',
                'type' => 3,
                'full_name' => '河南省/开封市/兰考县',
            ),
            63 => 
            array (
                'id' => 1564,
                'parent_id' => 1527,
                'code' => '410302',
                'name' => '老城区',
                'type' => 3,
                'full_name' => '河南省/洛阳市/老城区',
            ),
            64 => 
            array (
                'id' => 1565,
                'parent_id' => 1527,
                'code' => '410303',
                'name' => '西工区',
                'type' => 3,
                'full_name' => '河南省/洛阳市/西工区',
            ),
            65 => 
            array (
                'id' => 1566,
                'parent_id' => 1527,
                'code' => '410304',
                'name' => '瀍河回族区',
                'type' => 3,
                'full_name' => '河南省/洛阳市/瀍河回族区',
            ),
            66 => 
            array (
                'id' => 1567,
                'parent_id' => 1527,
                'code' => '410305',
                'name' => '涧西区',
                'type' => 3,
                'full_name' => '河南省/洛阳市/涧西区',
            ),
            67 => 
            array (
                'id' => 1568,
                'parent_id' => 1527,
                'code' => '410306',
                'name' => '吉利区',
                'type' => 3,
                'full_name' => '河南省/洛阳市/吉利区',
            ),
            68 => 
            array (
                'id' => 1569,
                'parent_id' => 1527,
                'code' => '410311',
                'name' => '洛龙区',
                'type' => 3,
                'full_name' => '河南省/洛阳市/洛龙区',
            ),
            69 => 
            array (
                'id' => 1570,
                'parent_id' => 1527,
                'code' => '410322',
                'name' => '孟津县',
                'type' => 3,
                'full_name' => '河南省/洛阳市/孟津县',
            ),
            70 => 
            array (
                'id' => 1571,
                'parent_id' => 1527,
                'code' => '410323',
                'name' => '新安县',
                'type' => 3,
                'full_name' => '河南省/洛阳市/新安县',
            ),
            71 => 
            array (
                'id' => 1572,
                'parent_id' => 1527,
                'code' => '410324',
                'name' => '栾川县',
                'type' => 3,
                'full_name' => '河南省/洛阳市/栾川县',
            ),
            72 => 
            array (
                'id' => 1573,
                'parent_id' => 1527,
                'code' => '410325',
                'name' => '嵩县',
                'type' => 3,
                'full_name' => '河南省/洛阳市/嵩县',
            ),
            73 => 
            array (
                'id' => 1574,
                'parent_id' => 1527,
                'code' => '410326',
                'name' => '汝阳县',
                'type' => 3,
                'full_name' => '河南省/洛阳市/汝阳县',
            ),
            74 => 
            array (
                'id' => 1575,
                'parent_id' => 1527,
                'code' => '410327',
                'name' => '宜阳县',
                'type' => 3,
                'full_name' => '河南省/洛阳市/宜阳县',
            ),
            75 => 
            array (
                'id' => 1576,
                'parent_id' => 1527,
                'code' => '410328',
                'name' => '洛宁县',
                'type' => 3,
                'full_name' => '河南省/洛阳市/洛宁县',
            ),
            76 => 
            array (
                'id' => 1577,
                'parent_id' => 1527,
                'code' => '410329',
                'name' => '伊川县',
                'type' => 3,
                'full_name' => '河南省/洛阳市/伊川县',
            ),
            77 => 
            array (
                'id' => 1578,
                'parent_id' => 1527,
                'code' => '410381',
                'name' => '偃师市',
                'type' => 3,
                'full_name' => '河南省/洛阳市/偃师市',
            ),
            78 => 
            array (
                'id' => 1579,
                'parent_id' => 1528,
                'code' => '410402',
                'name' => '新华区',
                'type' => 3,
                'full_name' => '河南省/平顶山市/新华区',
            ),
            79 => 
            array (
                'id' => 1580,
                'parent_id' => 1528,
                'code' => '410403',
                'name' => '卫东区',
                'type' => 3,
                'full_name' => '河南省/平顶山市/卫东区',
            ),
            80 => 
            array (
                'id' => 1581,
                'parent_id' => 1528,
                'code' => '410404',
                'name' => '石龙区',
                'type' => 3,
                'full_name' => '河南省/平顶山市/石龙区',
            ),
            81 => 
            array (
                'id' => 1582,
                'parent_id' => 1528,
                'code' => '410411',
                'name' => '湛河区',
                'type' => 3,
                'full_name' => '河南省/平顶山市/湛河区',
            ),
            82 => 
            array (
                'id' => 1583,
                'parent_id' => 1528,
                'code' => '410421',
                'name' => '宝丰县',
                'type' => 3,
                'full_name' => '河南省/平顶山市/宝丰县',
            ),
            83 => 
            array (
                'id' => 1584,
                'parent_id' => 1528,
                'code' => '410422',
                'name' => '叶县',
                'type' => 3,
                'full_name' => '河南省/平顶山市/叶县',
            ),
            84 => 
            array (
                'id' => 1585,
                'parent_id' => 1528,
                'code' => '410423',
                'name' => '鲁山县',
                'type' => 3,
                'full_name' => '河南省/平顶山市/鲁山县',
            ),
            85 => 
            array (
                'id' => 1586,
                'parent_id' => 1528,
                'code' => '410425',
                'name' => '郏县',
                'type' => 3,
                'full_name' => '河南省/平顶山市/郏县',
            ),
            86 => 
            array (
                'id' => 1587,
                'parent_id' => 1528,
                'code' => '410481',
                'name' => '舞钢市',
                'type' => 3,
                'full_name' => '河南省/平顶山市/舞钢市',
            ),
            87 => 
            array (
                'id' => 1588,
                'parent_id' => 1528,
                'code' => '410482',
                'name' => '汝州市',
                'type' => 3,
                'full_name' => '河南省/平顶山市/汝州市',
            ),
            88 => 
            array (
                'id' => 1589,
                'parent_id' => 1529,
                'code' => '410502',
                'name' => '文峰区',
                'type' => 3,
                'full_name' => '河南省/安阳市/文峰区',
            ),
            89 => 
            array (
                'id' => 1590,
                'parent_id' => 1529,
                'code' => '410503',
                'name' => '北关区',
                'type' => 3,
                'full_name' => '河南省/安阳市/北关区',
            ),
            90 => 
            array (
                'id' => 1591,
                'parent_id' => 1529,
                'code' => '410505',
                'name' => '殷都区',
                'type' => 3,
                'full_name' => '河南省/安阳市/殷都区',
            ),
            91 => 
            array (
                'id' => 1592,
                'parent_id' => 1529,
                'code' => '410506',
                'name' => '龙安区',
                'type' => 3,
                'full_name' => '河南省/安阳市/龙安区',
            ),
            92 => 
            array (
                'id' => 1593,
                'parent_id' => 1529,
                'code' => '410522',
                'name' => '安阳县',
                'type' => 3,
                'full_name' => '河南省/安阳市/安阳县',
            ),
            93 => 
            array (
                'id' => 1594,
                'parent_id' => 1529,
                'code' => '410523',
                'name' => '汤阴县',
                'type' => 3,
                'full_name' => '河南省/安阳市/汤阴县',
            ),
            94 => 
            array (
                'id' => 1595,
                'parent_id' => 1529,
                'code' => '410526',
                'name' => '滑县',
                'type' => 3,
                'full_name' => '河南省/安阳市/滑县',
            ),
            95 => 
            array (
                'id' => 1596,
                'parent_id' => 1529,
                'code' => '410527',
                'name' => '内黄县',
                'type' => 3,
                'full_name' => '河南省/安阳市/内黄县',
            ),
            96 => 
            array (
                'id' => 1597,
                'parent_id' => 1529,
                'code' => '410581',
                'name' => '林州市',
                'type' => 3,
                'full_name' => '河南省/安阳市/林州市',
            ),
            97 => 
            array (
                'id' => 1598,
                'parent_id' => 1530,
                'code' => '410602',
                'name' => '鹤山区',
                'type' => 3,
                'full_name' => '河南省/鹤壁市/鹤山区',
            ),
            98 => 
            array (
                'id' => 1599,
                'parent_id' => 1530,
                'code' => '410603',
                'name' => '山城区',
                'type' => 3,
                'full_name' => '河南省/鹤壁市/山城区',
            ),
            99 => 
            array (
                'id' => 1600,
                'parent_id' => 1530,
                'code' => '410611',
                'name' => '淇滨区',
                'type' => 3,
                'full_name' => '河南省/鹤壁市/淇滨区',
            ),
            100 => 
            array (
                'id' => 1601,
                'parent_id' => 1530,
                'code' => '410621',
                'name' => '浚县',
                'type' => 3,
                'full_name' => '河南省/鹤壁市/浚县',
            ),
            101 => 
            array (
                'id' => 1602,
                'parent_id' => 1530,
                'code' => '410622',
                'name' => '淇县',
                'type' => 3,
                'full_name' => '河南省/鹤壁市/淇县',
            ),
            102 => 
            array (
                'id' => 1603,
                'parent_id' => 1531,
                'code' => '410702',
                'name' => '红旗区',
                'type' => 3,
                'full_name' => '河南省/新乡市/红旗区',
            ),
            103 => 
            array (
                'id' => 1604,
                'parent_id' => 1531,
                'code' => '410703',
                'name' => '卫滨区',
                'type' => 3,
                'full_name' => '河南省/新乡市/卫滨区',
            ),
            104 => 
            array (
                'id' => 1605,
                'parent_id' => 1531,
                'code' => '410704',
                'name' => '凤泉区',
                'type' => 3,
                'full_name' => '河南省/新乡市/凤泉区',
            ),
            105 => 
            array (
                'id' => 1606,
                'parent_id' => 1531,
                'code' => '410711',
                'name' => '牧野区',
                'type' => 3,
                'full_name' => '河南省/新乡市/牧野区',
            ),
            106 => 
            array (
                'id' => 1607,
                'parent_id' => 1531,
                'code' => '410721',
                'name' => '新乡县',
                'type' => 3,
                'full_name' => '河南省/新乡市/新乡县',
            ),
            107 => 
            array (
                'id' => 1608,
                'parent_id' => 1531,
                'code' => '410724',
                'name' => '获嘉县',
                'type' => 3,
                'full_name' => '河南省/新乡市/获嘉县',
            ),
            108 => 
            array (
                'id' => 1609,
                'parent_id' => 1531,
                'code' => '410725',
                'name' => '原阳县',
                'type' => 3,
                'full_name' => '河南省/新乡市/原阳县',
            ),
            109 => 
            array (
                'id' => 1610,
                'parent_id' => 1531,
                'code' => '410726',
                'name' => '延津县',
                'type' => 3,
                'full_name' => '河南省/新乡市/延津县',
            ),
            110 => 
            array (
                'id' => 1611,
                'parent_id' => 1531,
                'code' => '410727',
                'name' => '封丘县',
                'type' => 3,
                'full_name' => '河南省/新乡市/封丘县',
            ),
            111 => 
            array (
                'id' => 1612,
                'parent_id' => 1531,
                'code' => '410728',
                'name' => '长垣县',
                'type' => 3,
                'full_name' => '河南省/新乡市/长垣县',
            ),
            112 => 
            array (
                'id' => 1613,
                'parent_id' => 1531,
                'code' => '410781',
                'name' => '卫辉市',
                'type' => 3,
                'full_name' => '河南省/新乡市/卫辉市',
            ),
            113 => 
            array (
                'id' => 1614,
                'parent_id' => 1531,
                'code' => '410782',
                'name' => '辉县市',
                'type' => 3,
                'full_name' => '河南省/新乡市/辉县市',
            ),
            114 => 
            array (
                'id' => 1615,
                'parent_id' => 1532,
                'code' => '410802',
                'name' => '解放区',
                'type' => 3,
                'full_name' => '河南省/焦作市/解放区',
            ),
            115 => 
            array (
                'id' => 1616,
                'parent_id' => 1532,
                'code' => '410803',
                'name' => '中站区',
                'type' => 3,
                'full_name' => '河南省/焦作市/中站区',
            ),
            116 => 
            array (
                'id' => 1617,
                'parent_id' => 1532,
                'code' => '410804',
                'name' => '马村区',
                'type' => 3,
                'full_name' => '河南省/焦作市/马村区',
            ),
            117 => 
            array (
                'id' => 1618,
                'parent_id' => 1532,
                'code' => '410811',
                'name' => '山阳区',
                'type' => 3,
                'full_name' => '河南省/焦作市/山阳区',
            ),
            118 => 
            array (
                'id' => 1619,
                'parent_id' => 1532,
                'code' => '410821',
                'name' => '修武县',
                'type' => 3,
                'full_name' => '河南省/焦作市/修武县',
            ),
            119 => 
            array (
                'id' => 1620,
                'parent_id' => 1532,
                'code' => '410822',
                'name' => '博爱县',
                'type' => 3,
                'full_name' => '河南省/焦作市/博爱县',
            ),
            120 => 
            array (
                'id' => 1621,
                'parent_id' => 1532,
                'code' => '410823',
                'name' => '武陟县',
                'type' => 3,
                'full_name' => '河南省/焦作市/武陟县',
            ),
            121 => 
            array (
                'id' => 1622,
                'parent_id' => 1532,
                'code' => '410825',
                'name' => '温县',
                'type' => 3,
                'full_name' => '河南省/焦作市/温县',
            ),
            122 => 
            array (
                'id' => 1623,
                'parent_id' => 1532,
                'code' => '410882',
                'name' => '沁阳市',
                'type' => 3,
                'full_name' => '河南省/焦作市/沁阳市',
            ),
            123 => 
            array (
                'id' => 1624,
                'parent_id' => 1532,
                'code' => '410883',
                'name' => '孟州市',
                'type' => 3,
                'full_name' => '河南省/焦作市/孟州市',
            ),
            124 => 
            array (
                'id' => 1625,
                'parent_id' => 1533,
                'code' => '410902',
                'name' => '华龙区',
                'type' => 3,
                'full_name' => '河南省/濮阳市/华龙区',
            ),
            125 => 
            array (
                'id' => 1626,
                'parent_id' => 1533,
                'code' => '410922',
                'name' => '清丰县',
                'type' => 3,
                'full_name' => '河南省/濮阳市/清丰县',
            ),
            126 => 
            array (
                'id' => 1627,
                'parent_id' => 1533,
                'code' => '410923',
                'name' => '南乐县',
                'type' => 3,
                'full_name' => '河南省/濮阳市/南乐县',
            ),
            127 => 
            array (
                'id' => 1628,
                'parent_id' => 1533,
                'code' => '410926',
                'name' => '范县',
                'type' => 3,
                'full_name' => '河南省/濮阳市/范县',
            ),
            128 => 
            array (
                'id' => 1629,
                'parent_id' => 1533,
                'code' => '410927',
                'name' => '台前县',
                'type' => 3,
                'full_name' => '河南省/濮阳市/台前县',
            ),
            129 => 
            array (
                'id' => 1630,
                'parent_id' => 1533,
                'code' => '410928',
                'name' => '濮阳县',
                'type' => 3,
                'full_name' => '河南省/濮阳市/濮阳县',
            ),
            130 => 
            array (
                'id' => 1631,
                'parent_id' => 1534,
                'code' => '411002',
                'name' => '魏都区',
                'type' => 3,
                'full_name' => '河南省/许昌市/魏都区',
            ),
            131 => 
            array (
                'id' => 1632,
                'parent_id' => 1534,
                'code' => '411003',
                'name' => '建安区',
                'type' => 3,
                'full_name' => '河南省/许昌市/建安区',
            ),
            132 => 
            array (
                'id' => 1633,
                'parent_id' => 1534,
                'code' => '411024',
                'name' => '鄢陵县',
                'type' => 3,
                'full_name' => '河南省/许昌市/鄢陵县',
            ),
            133 => 
            array (
                'id' => 1634,
                'parent_id' => 1534,
                'code' => '411025',
                'name' => '襄城县',
                'type' => 3,
                'full_name' => '河南省/许昌市/襄城县',
            ),
            134 => 
            array (
                'id' => 1635,
                'parent_id' => 1534,
                'code' => '411081',
                'name' => '禹州市',
                'type' => 3,
                'full_name' => '河南省/许昌市/禹州市',
            ),
            135 => 
            array (
                'id' => 1636,
                'parent_id' => 1534,
                'code' => '411082',
                'name' => '长葛市',
                'type' => 3,
                'full_name' => '河南省/许昌市/长葛市',
            ),
            136 => 
            array (
                'id' => 1637,
                'parent_id' => 1535,
                'code' => '411102',
                'name' => '源汇区',
                'type' => 3,
                'full_name' => '河南省/漯河市/源汇区',
            ),
            137 => 
            array (
                'id' => 1638,
                'parent_id' => 1535,
                'code' => '411103',
                'name' => '郾城区',
                'type' => 3,
                'full_name' => '河南省/漯河市/郾城区',
            ),
            138 => 
            array (
                'id' => 1639,
                'parent_id' => 1535,
                'code' => '411104',
                'name' => '召陵区',
                'type' => 3,
                'full_name' => '河南省/漯河市/召陵区',
            ),
            139 => 
            array (
                'id' => 1640,
                'parent_id' => 1535,
                'code' => '411121',
                'name' => '舞阳县',
                'type' => 3,
                'full_name' => '河南省/漯河市/舞阳县',
            ),
            140 => 
            array (
                'id' => 1641,
                'parent_id' => 1535,
                'code' => '411122',
                'name' => '临颍县',
                'type' => 3,
                'full_name' => '河南省/漯河市/临颍县',
            ),
            141 => 
            array (
                'id' => 1642,
                'parent_id' => 1536,
                'code' => '411202',
                'name' => '湖滨区',
                'type' => 3,
                'full_name' => '河南省/三门峡市/湖滨区',
            ),
            142 => 
            array (
                'id' => 1643,
                'parent_id' => 1536,
                'code' => '411203',
                'name' => '陕州区',
                'type' => 3,
                'full_name' => '河南省/三门峡市/陕州区',
            ),
            143 => 
            array (
                'id' => 1644,
                'parent_id' => 1536,
                'code' => '411221',
                'name' => '渑池县',
                'type' => 3,
                'full_name' => '河南省/三门峡市/渑池县',
            ),
            144 => 
            array (
                'id' => 1645,
                'parent_id' => 1536,
                'code' => '411224',
                'name' => '卢氏县',
                'type' => 3,
                'full_name' => '河南省/三门峡市/卢氏县',
            ),
            145 => 
            array (
                'id' => 1646,
                'parent_id' => 1536,
                'code' => '411281',
                'name' => '义马市',
                'type' => 3,
                'full_name' => '河南省/三门峡市/义马市',
            ),
            146 => 
            array (
                'id' => 1647,
                'parent_id' => 1536,
                'code' => '411282',
                'name' => '灵宝市',
                'type' => 3,
                'full_name' => '河南省/三门峡市/灵宝市',
            ),
            147 => 
            array (
                'id' => 1648,
                'parent_id' => 1537,
                'code' => '411302',
                'name' => '宛城区',
                'type' => 3,
                'full_name' => '河南省/南阳市/宛城区',
            ),
            148 => 
            array (
                'id' => 1649,
                'parent_id' => 1537,
                'code' => '411303',
                'name' => '卧龙区',
                'type' => 3,
                'full_name' => '河南省/南阳市/卧龙区',
            ),
            149 => 
            array (
                'id' => 1650,
                'parent_id' => 1537,
                'code' => '411321',
                'name' => '南召县',
                'type' => 3,
                'full_name' => '河南省/南阳市/南召县',
            ),
            150 => 
            array (
                'id' => 1651,
                'parent_id' => 1537,
                'code' => '411322',
                'name' => '方城县',
                'type' => 3,
                'full_name' => '河南省/南阳市/方城县',
            ),
            151 => 
            array (
                'id' => 1652,
                'parent_id' => 1537,
                'code' => '411323',
                'name' => '西峡县',
                'type' => 3,
                'full_name' => '河南省/南阳市/西峡县',
            ),
            152 => 
            array (
                'id' => 1653,
                'parent_id' => 1537,
                'code' => '411324',
                'name' => '镇平县',
                'type' => 3,
                'full_name' => '河南省/南阳市/镇平县',
            ),
            153 => 
            array (
                'id' => 1654,
                'parent_id' => 1537,
                'code' => '411325',
                'name' => '内乡县',
                'type' => 3,
                'full_name' => '河南省/南阳市/内乡县',
            ),
            154 => 
            array (
                'id' => 1655,
                'parent_id' => 1537,
                'code' => '411326',
                'name' => '淅川县',
                'type' => 3,
                'full_name' => '河南省/南阳市/淅川县',
            ),
            155 => 
            array (
                'id' => 1656,
                'parent_id' => 1537,
                'code' => '411327',
                'name' => '社旗县',
                'type' => 3,
                'full_name' => '河南省/南阳市/社旗县',
            ),
            156 => 
            array (
                'id' => 1657,
                'parent_id' => 1537,
                'code' => '411328',
                'name' => '唐河县',
                'type' => 3,
                'full_name' => '河南省/南阳市/唐河县',
            ),
            157 => 
            array (
                'id' => 1658,
                'parent_id' => 1537,
                'code' => '411329',
                'name' => '新野县',
                'type' => 3,
                'full_name' => '河南省/南阳市/新野县',
            ),
            158 => 
            array (
                'id' => 1659,
                'parent_id' => 1537,
                'code' => '411330',
                'name' => '桐柏县',
                'type' => 3,
                'full_name' => '河南省/南阳市/桐柏县',
            ),
            159 => 
            array (
                'id' => 1660,
                'parent_id' => 1537,
                'code' => '411381',
                'name' => '邓州市',
                'type' => 3,
                'full_name' => '河南省/南阳市/邓州市',
            ),
            160 => 
            array (
                'id' => 1661,
                'parent_id' => 1538,
                'code' => '411402',
                'name' => '梁园区',
                'type' => 3,
                'full_name' => '河南省/商丘市/梁园区',
            ),
            161 => 
            array (
                'id' => 1662,
                'parent_id' => 1538,
                'code' => '411403',
                'name' => '睢阳区',
                'type' => 3,
                'full_name' => '河南省/商丘市/睢阳区',
            ),
            162 => 
            array (
                'id' => 1663,
                'parent_id' => 1538,
                'code' => '411421',
                'name' => '民权县',
                'type' => 3,
                'full_name' => '河南省/商丘市/民权县',
            ),
            163 => 
            array (
                'id' => 1664,
                'parent_id' => 1538,
                'code' => '411422',
                'name' => '睢县',
                'type' => 3,
                'full_name' => '河南省/商丘市/睢县',
            ),
            164 => 
            array (
                'id' => 1665,
                'parent_id' => 1538,
                'code' => '411423',
                'name' => '宁陵县',
                'type' => 3,
                'full_name' => '河南省/商丘市/宁陵县',
            ),
            165 => 
            array (
                'id' => 1666,
                'parent_id' => 1538,
                'code' => '411424',
                'name' => '柘城县',
                'type' => 3,
                'full_name' => '河南省/商丘市/柘城县',
            ),
            166 => 
            array (
                'id' => 1667,
                'parent_id' => 1538,
                'code' => '411425',
                'name' => '虞城县',
                'type' => 3,
                'full_name' => '河南省/商丘市/虞城县',
            ),
            167 => 
            array (
                'id' => 1668,
                'parent_id' => 1538,
                'code' => '411426',
                'name' => '夏邑县',
                'type' => 3,
                'full_name' => '河南省/商丘市/夏邑县',
            ),
            168 => 
            array (
                'id' => 1669,
                'parent_id' => 1538,
                'code' => '411481',
                'name' => '永城市',
                'type' => 3,
                'full_name' => '河南省/商丘市/永城市',
            ),
            169 => 
            array (
                'id' => 1670,
                'parent_id' => 1539,
                'code' => '411502',
                'name' => '浉河区',
                'type' => 3,
                'full_name' => '河南省/信阳市/浉河区',
            ),
            170 => 
            array (
                'id' => 1671,
                'parent_id' => 1539,
                'code' => '411503',
                'name' => '平桥区',
                'type' => 3,
                'full_name' => '河南省/信阳市/平桥区',
            ),
            171 => 
            array (
                'id' => 1672,
                'parent_id' => 1539,
                'code' => '411521',
                'name' => '罗山县',
                'type' => 3,
                'full_name' => '河南省/信阳市/罗山县',
            ),
            172 => 
            array (
                'id' => 1673,
                'parent_id' => 1539,
                'code' => '411522',
                'name' => '光山县',
                'type' => 3,
                'full_name' => '河南省/信阳市/光山县',
            ),
            173 => 
            array (
                'id' => 1674,
                'parent_id' => 1539,
                'code' => '411523',
                'name' => '新县',
                'type' => 3,
                'full_name' => '河南省/信阳市/新县',
            ),
            174 => 
            array (
                'id' => 1675,
                'parent_id' => 1539,
                'code' => '411524',
                'name' => '商城县',
                'type' => 3,
                'full_name' => '河南省/信阳市/商城县',
            ),
            175 => 
            array (
                'id' => 1676,
                'parent_id' => 1539,
                'code' => '411525',
                'name' => '固始县',
                'type' => 3,
                'full_name' => '河南省/信阳市/固始县',
            ),
            176 => 
            array (
                'id' => 1677,
                'parent_id' => 1539,
                'code' => '411526',
                'name' => '潢川县',
                'type' => 3,
                'full_name' => '河南省/信阳市/潢川县',
            ),
            177 => 
            array (
                'id' => 1678,
                'parent_id' => 1539,
                'code' => '411527',
                'name' => '淮滨县',
                'type' => 3,
                'full_name' => '河南省/信阳市/淮滨县',
            ),
            178 => 
            array (
                'id' => 1679,
                'parent_id' => 1539,
                'code' => '411528',
                'name' => '息县',
                'type' => 3,
                'full_name' => '河南省/信阳市/息县',
            ),
            179 => 
            array (
                'id' => 1680,
                'parent_id' => 1540,
                'code' => '411602',
                'name' => '川汇区',
                'type' => 3,
                'full_name' => '河南省/周口市/川汇区',
            ),
            180 => 
            array (
                'id' => 1681,
                'parent_id' => 1540,
                'code' => '411621',
                'name' => '扶沟县',
                'type' => 3,
                'full_name' => '河南省/周口市/扶沟县',
            ),
            181 => 
            array (
                'id' => 1682,
                'parent_id' => 1540,
                'code' => '411622',
                'name' => '西华县',
                'type' => 3,
                'full_name' => '河南省/周口市/西华县',
            ),
            182 => 
            array (
                'id' => 1683,
                'parent_id' => 1540,
                'code' => '411623',
                'name' => '商水县',
                'type' => 3,
                'full_name' => '河南省/周口市/商水县',
            ),
            183 => 
            array (
                'id' => 1684,
                'parent_id' => 1540,
                'code' => '411624',
                'name' => '沈丘县',
                'type' => 3,
                'full_name' => '河南省/周口市/沈丘县',
            ),
            184 => 
            array (
                'id' => 1685,
                'parent_id' => 1540,
                'code' => '411625',
                'name' => '郸城县',
                'type' => 3,
                'full_name' => '河南省/周口市/郸城县',
            ),
            185 => 
            array (
                'id' => 1686,
                'parent_id' => 1540,
                'code' => '411626',
                'name' => '淮阳县',
                'type' => 3,
                'full_name' => '河南省/周口市/淮阳县',
            ),
            186 => 
            array (
                'id' => 1687,
                'parent_id' => 1540,
                'code' => '411627',
                'name' => '太康县',
                'type' => 3,
                'full_name' => '河南省/周口市/太康县',
            ),
            187 => 
            array (
                'id' => 1688,
                'parent_id' => 1540,
                'code' => '411628',
                'name' => '鹿邑县',
                'type' => 3,
                'full_name' => '河南省/周口市/鹿邑县',
            ),
            188 => 
            array (
                'id' => 1689,
                'parent_id' => 1540,
                'code' => '411681',
                'name' => '项城市',
                'type' => 3,
                'full_name' => '河南省/周口市/项城市',
            ),
            189 => 
            array (
                'id' => 1690,
                'parent_id' => 1541,
                'code' => '411702',
                'name' => '驿城区',
                'type' => 3,
                'full_name' => '河南省/驻马店市/驿城区',
            ),
            190 => 
            array (
                'id' => 1691,
                'parent_id' => 1541,
                'code' => '411721',
                'name' => '西平县',
                'type' => 3,
                'full_name' => '河南省/驻马店市/西平县',
            ),
            191 => 
            array (
                'id' => 1692,
                'parent_id' => 1541,
                'code' => '411722',
                'name' => '上蔡县',
                'type' => 3,
                'full_name' => '河南省/驻马店市/上蔡县',
            ),
            192 => 
            array (
                'id' => 1693,
                'parent_id' => 1541,
                'code' => '411723',
                'name' => '平舆县',
                'type' => 3,
                'full_name' => '河南省/驻马店市/平舆县',
            ),
            193 => 
            array (
                'id' => 1694,
                'parent_id' => 1541,
                'code' => '411724',
                'name' => '正阳县',
                'type' => 3,
                'full_name' => '河南省/驻马店市/正阳县',
            ),
            194 => 
            array (
                'id' => 1695,
                'parent_id' => 1541,
                'code' => '411725',
                'name' => '确山县',
                'type' => 3,
                'full_name' => '河南省/驻马店市/确山县',
            ),
            195 => 
            array (
                'id' => 1696,
                'parent_id' => 1541,
                'code' => '411726',
                'name' => '泌阳县',
                'type' => 3,
                'full_name' => '河南省/驻马店市/泌阳县',
            ),
            196 => 
            array (
                'id' => 1697,
                'parent_id' => 1541,
                'code' => '411727',
                'name' => '汝南县',
                'type' => 3,
                'full_name' => '河南省/驻马店市/汝南县',
            ),
            197 => 
            array (
                'id' => 1698,
                'parent_id' => 1541,
                'code' => '411728',
                'name' => '遂平县',
                'type' => 3,
                'full_name' => '河南省/驻马店市/遂平县',
            ),
            198 => 
            array (
                'id' => 1699,
                'parent_id' => 1541,
                'code' => '411729',
                'name' => '新蔡县',
                'type' => 3,
                'full_name' => '河南省/驻马店市/新蔡县',
            ),
            199 => 
            array (
                'id' => 1700,
                'parent_id' => 1542,
                'code' => '419001',
                'name' => '济源市',
                'type' => 3,
                'full_name' => '河南省/济源市/济源市',
            ),
            200 => 
            array (
                'id' => 1701,
                'parent_id' => 18,
                'code' => '420100',
                'name' => '武汉市',
                'type' => 2,
                'full_name' => '湖北省/武汉市',
            ),
            201 => 
            array (
                'id' => 1702,
                'parent_id' => 18,
                'code' => '420200',
                'name' => '黄石市',
                'type' => 2,
                'full_name' => '湖北省/黄石市',
            ),
            202 => 
            array (
                'id' => 1703,
                'parent_id' => 18,
                'code' => '420300',
                'name' => '十堰市',
                'type' => 2,
                'full_name' => '湖北省/十堰市',
            ),
            203 => 
            array (
                'id' => 1704,
                'parent_id' => 18,
                'code' => '420500',
                'name' => '宜昌市',
                'type' => 2,
                'full_name' => '湖北省/宜昌市',
            ),
            204 => 
            array (
                'id' => 1705,
                'parent_id' => 18,
                'code' => '420600',
                'name' => '襄阳市',
                'type' => 2,
                'full_name' => '湖北省/襄阳市',
            ),
            205 => 
            array (
                'id' => 1706,
                'parent_id' => 18,
                'code' => '420700',
                'name' => '鄂州市',
                'type' => 2,
                'full_name' => '湖北省/鄂州市',
            ),
            206 => 
            array (
                'id' => 1707,
                'parent_id' => 18,
                'code' => '420800',
                'name' => '荆门市',
                'type' => 2,
                'full_name' => '湖北省/荆门市',
            ),
            207 => 
            array (
                'id' => 1708,
                'parent_id' => 18,
                'code' => '420900',
                'name' => '孝感市',
                'type' => 2,
                'full_name' => '湖北省/孝感市',
            ),
            208 => 
            array (
                'id' => 1709,
                'parent_id' => 18,
                'code' => '421000',
                'name' => '荆州市',
                'type' => 2,
                'full_name' => '湖北省/荆州市',
            ),
            209 => 
            array (
                'id' => 1710,
                'parent_id' => 18,
                'code' => '421100',
                'name' => '黄冈市',
                'type' => 2,
                'full_name' => '湖北省/黄冈市',
            ),
            210 => 
            array (
                'id' => 1711,
                'parent_id' => 18,
                'code' => '421200',
                'name' => '咸宁市',
                'type' => 2,
                'full_name' => '湖北省/咸宁市',
            ),
            211 => 
            array (
                'id' => 1712,
                'parent_id' => 18,
                'code' => '421300',
                'name' => '随州市',
                'type' => 2,
                'full_name' => '湖北省/随州市',
            ),
            212 => 
            array (
                'id' => 1713,
                'parent_id' => 18,
                'code' => '422800',
                'name' => '恩施土家族苗族自治州',
                'type' => 2,
                'full_name' => '湖北省/恩施土家族苗族自治州',
            ),
            213 => 
            array (
                'id' => 1714,
                'parent_id' => 18,
                'code' => '429004',
                'name' => '仙桃市',
                'type' => 2,
                'full_name' => '湖北省/仙桃市',
            ),
            214 => 
            array (
                'id' => 1715,
                'parent_id' => 18,
                'code' => '429005',
                'name' => '潜江市',
                'type' => 2,
                'full_name' => '湖北省/潜江市',
            ),
            215 => 
            array (
                'id' => 1716,
                'parent_id' => 18,
                'code' => '429006',
                'name' => '天门市',
                'type' => 2,
                'full_name' => '湖北省/天门市',
            ),
            216 => 
            array (
                'id' => 1717,
                'parent_id' => 18,
                'code' => '429021',
                'name' => '神农架林区',
                'type' => 2,
                'full_name' => '湖北省/神农架林区',
            ),
            217 => 
            array (
                'id' => 1718,
                'parent_id' => 1701,
                'code' => '420102',
                'name' => '江岸区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/江岸区',
            ),
            218 => 
            array (
                'id' => 1719,
                'parent_id' => 1701,
                'code' => '420103',
                'name' => '江汉区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/江汉区',
            ),
            219 => 
            array (
                'id' => 1720,
                'parent_id' => 1701,
                'code' => '420104',
                'name' => '硚口区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/硚口区',
            ),
            220 => 
            array (
                'id' => 1721,
                'parent_id' => 1701,
                'code' => '420105',
                'name' => '汉阳区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/汉阳区',
            ),
            221 => 
            array (
                'id' => 1722,
                'parent_id' => 1701,
                'code' => '420106',
                'name' => '武昌区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/武昌区',
            ),
            222 => 
            array (
                'id' => 1723,
                'parent_id' => 1701,
                'code' => '420107',
                'name' => '青山区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/青山区',
            ),
            223 => 
            array (
                'id' => 1724,
                'parent_id' => 1701,
                'code' => '420111',
                'name' => '洪山区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/洪山区',
            ),
            224 => 
            array (
                'id' => 1725,
                'parent_id' => 1701,
                'code' => '420112',
                'name' => '东西湖区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/东西湖区',
            ),
            225 => 
            array (
                'id' => 1726,
                'parent_id' => 1701,
                'code' => '420113',
                'name' => '汉南区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/汉南区',
            ),
            226 => 
            array (
                'id' => 1727,
                'parent_id' => 1701,
                'code' => '420114',
                'name' => '蔡甸区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/蔡甸区',
            ),
            227 => 
            array (
                'id' => 1728,
                'parent_id' => 1701,
                'code' => '420115',
                'name' => '江夏区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/江夏区',
            ),
            228 => 
            array (
                'id' => 1729,
                'parent_id' => 1701,
                'code' => '420116',
                'name' => '黄陂区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/黄陂区',
            ),
            229 => 
            array (
                'id' => 1730,
                'parent_id' => 1701,
                'code' => '420117',
                'name' => '新洲区',
                'type' => 3,
                'full_name' => '湖北省/武汉市/新洲区',
            ),
            230 => 
            array (
                'id' => 1731,
                'parent_id' => 1702,
                'code' => '420202',
                'name' => '黄石港区',
                'type' => 3,
                'full_name' => '湖北省/黄石市/黄石港区',
            ),
            231 => 
            array (
                'id' => 1732,
                'parent_id' => 1702,
                'code' => '420203',
                'name' => '西塞山区',
                'type' => 3,
                'full_name' => '湖北省/黄石市/西塞山区',
            ),
            232 => 
            array (
                'id' => 1733,
                'parent_id' => 1702,
                'code' => '420204',
                'name' => '下陆区',
                'type' => 3,
                'full_name' => '湖北省/黄石市/下陆区',
            ),
            233 => 
            array (
                'id' => 1734,
                'parent_id' => 1702,
                'code' => '420205',
                'name' => '铁山区',
                'type' => 3,
                'full_name' => '湖北省/黄石市/铁山区',
            ),
            234 => 
            array (
                'id' => 1735,
                'parent_id' => 1702,
                'code' => '420222',
                'name' => '阳新县',
                'type' => 3,
                'full_name' => '湖北省/黄石市/阳新县',
            ),
            235 => 
            array (
                'id' => 1736,
                'parent_id' => 1702,
                'code' => '420281',
                'name' => '大冶市',
                'type' => 3,
                'full_name' => '湖北省/黄石市/大冶市',
            ),
            236 => 
            array (
                'id' => 1737,
                'parent_id' => 1703,
                'code' => '420302',
                'name' => '茅箭区',
                'type' => 3,
                'full_name' => '湖北省/十堰市/茅箭区',
            ),
            237 => 
            array (
                'id' => 1738,
                'parent_id' => 1703,
                'code' => '420303',
                'name' => '张湾区',
                'type' => 3,
                'full_name' => '湖北省/十堰市/张湾区',
            ),
            238 => 
            array (
                'id' => 1739,
                'parent_id' => 1703,
                'code' => '420304',
                'name' => '郧阳区',
                'type' => 3,
                'full_name' => '湖北省/十堰市/郧阳区',
            ),
            239 => 
            array (
                'id' => 1740,
                'parent_id' => 1703,
                'code' => '420322',
                'name' => '郧西县',
                'type' => 3,
                'full_name' => '湖北省/十堰市/郧西县',
            ),
            240 => 
            array (
                'id' => 1741,
                'parent_id' => 1703,
                'code' => '420323',
                'name' => '竹山县',
                'type' => 3,
                'full_name' => '湖北省/十堰市/竹山县',
            ),
            241 => 
            array (
                'id' => 1742,
                'parent_id' => 1703,
                'code' => '420324',
                'name' => '竹溪县',
                'type' => 3,
                'full_name' => '湖北省/十堰市/竹溪县',
            ),
            242 => 
            array (
                'id' => 1743,
                'parent_id' => 1703,
                'code' => '420325',
                'name' => '房县',
                'type' => 3,
                'full_name' => '湖北省/十堰市/房县',
            ),
            243 => 
            array (
                'id' => 1744,
                'parent_id' => 1703,
                'code' => '420381',
                'name' => '丹江口市',
                'type' => 3,
                'full_name' => '湖北省/十堰市/丹江口市',
            ),
            244 => 
            array (
                'id' => 1745,
                'parent_id' => 1704,
                'code' => '420502',
                'name' => '西陵区',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/西陵区',
            ),
            245 => 
            array (
                'id' => 1746,
                'parent_id' => 1704,
                'code' => '420503',
                'name' => '伍家岗区',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/伍家岗区',
            ),
            246 => 
            array (
                'id' => 1747,
                'parent_id' => 1704,
                'code' => '420504',
                'name' => '点军区',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/点军区',
            ),
            247 => 
            array (
                'id' => 1748,
                'parent_id' => 1704,
                'code' => '420505',
                'name' => '猇亭区',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/猇亭区',
            ),
            248 => 
            array (
                'id' => 1749,
                'parent_id' => 1704,
                'code' => '420506',
                'name' => '夷陵区',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/夷陵区',
            ),
            249 => 
            array (
                'id' => 1750,
                'parent_id' => 1704,
                'code' => '420525',
                'name' => '远安县',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/远安县',
            ),
            250 => 
            array (
                'id' => 1751,
                'parent_id' => 1704,
                'code' => '420526',
                'name' => '兴山县',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/兴山县',
            ),
            251 => 
            array (
                'id' => 1752,
                'parent_id' => 1704,
                'code' => '420527',
                'name' => '秭归县',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/秭归县',
            ),
            252 => 
            array (
                'id' => 1753,
                'parent_id' => 1704,
                'code' => '420528',
                'name' => '长阳土家族自治县',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/长阳土家族自治县',
            ),
            253 => 
            array (
                'id' => 1754,
                'parent_id' => 1704,
                'code' => '420529',
                'name' => '五峰土家族自治县',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/五峰土家族自治县',
            ),
            254 => 
            array (
                'id' => 1755,
                'parent_id' => 1704,
                'code' => '420581',
                'name' => '宜都市',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/宜都市',
            ),
            255 => 
            array (
                'id' => 1756,
                'parent_id' => 1704,
                'code' => '420582',
                'name' => '当阳市',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/当阳市',
            ),
            256 => 
            array (
                'id' => 1757,
                'parent_id' => 1704,
                'code' => '420583',
                'name' => '枝江市',
                'type' => 3,
                'full_name' => '湖北省/宜昌市/枝江市',
            ),
            257 => 
            array (
                'id' => 1758,
                'parent_id' => 1705,
                'code' => '420602',
                'name' => '襄城区',
                'type' => 3,
                'full_name' => '湖北省/襄阳市/襄城区',
            ),
            258 => 
            array (
                'id' => 1759,
                'parent_id' => 1705,
                'code' => '420606',
                'name' => '樊城区',
                'type' => 3,
                'full_name' => '湖北省/襄阳市/樊城区',
            ),
            259 => 
            array (
                'id' => 1760,
                'parent_id' => 1705,
                'code' => '420607',
                'name' => '襄州区',
                'type' => 3,
                'full_name' => '湖北省/襄阳市/襄州区',
            ),
            260 => 
            array (
                'id' => 1761,
                'parent_id' => 1705,
                'code' => '420624',
                'name' => '南漳县',
                'type' => 3,
                'full_name' => '湖北省/襄阳市/南漳县',
            ),
            261 => 
            array (
                'id' => 1762,
                'parent_id' => 1705,
                'code' => '420625',
                'name' => '谷城县',
                'type' => 3,
                'full_name' => '湖北省/襄阳市/谷城县',
            ),
            262 => 
            array (
                'id' => 1763,
                'parent_id' => 1705,
                'code' => '420626',
                'name' => '保康县',
                'type' => 3,
                'full_name' => '湖北省/襄阳市/保康县',
            ),
            263 => 
            array (
                'id' => 1764,
                'parent_id' => 1705,
                'code' => '420682',
                'name' => '老河口市',
                'type' => 3,
                'full_name' => '湖北省/襄阳市/老河口市',
            ),
            264 => 
            array (
                'id' => 1765,
                'parent_id' => 1705,
                'code' => '420683',
                'name' => '枣阳市',
                'type' => 3,
                'full_name' => '湖北省/襄阳市/枣阳市',
            ),
            265 => 
            array (
                'id' => 1766,
                'parent_id' => 1705,
                'code' => '420684',
                'name' => '宜城市',
                'type' => 3,
                'full_name' => '湖北省/襄阳市/宜城市',
            ),
            266 => 
            array (
                'id' => 1767,
                'parent_id' => 1706,
                'code' => '420702',
                'name' => '梁子湖区',
                'type' => 3,
                'full_name' => '湖北省/鄂州市/梁子湖区',
            ),
            267 => 
            array (
                'id' => 1768,
                'parent_id' => 1706,
                'code' => '420703',
                'name' => '华容区',
                'type' => 3,
                'full_name' => '湖北省/鄂州市/华容区',
            ),
            268 => 
            array (
                'id' => 1769,
                'parent_id' => 1706,
                'code' => '420704',
                'name' => '鄂城区',
                'type' => 3,
                'full_name' => '湖北省/鄂州市/鄂城区',
            ),
            269 => 
            array (
                'id' => 1770,
                'parent_id' => 1707,
                'code' => '420802',
                'name' => '东宝区',
                'type' => 3,
                'full_name' => '湖北省/荆门市/东宝区',
            ),
            270 => 
            array (
                'id' => 1771,
                'parent_id' => 1707,
                'code' => '420804',
                'name' => '掇刀区',
                'type' => 3,
                'full_name' => '湖北省/荆门市/掇刀区',
            ),
            271 => 
            array (
                'id' => 1772,
                'parent_id' => 1707,
                'code' => '420821',
                'name' => '京山县',
                'type' => 3,
                'full_name' => '湖北省/荆门市/京山县',
            ),
            272 => 
            array (
                'id' => 1773,
                'parent_id' => 1707,
                'code' => '420822',
                'name' => '沙洋县',
                'type' => 3,
                'full_name' => '湖北省/荆门市/沙洋县',
            ),
            273 => 
            array (
                'id' => 1774,
                'parent_id' => 1707,
                'code' => '420881',
                'name' => '钟祥市',
                'type' => 3,
                'full_name' => '湖北省/荆门市/钟祥市',
            ),
            274 => 
            array (
                'id' => 1775,
                'parent_id' => 1708,
                'code' => '420902',
                'name' => '孝南区',
                'type' => 3,
                'full_name' => '湖北省/孝感市/孝南区',
            ),
            275 => 
            array (
                'id' => 1776,
                'parent_id' => 1708,
                'code' => '420921',
                'name' => '孝昌县',
                'type' => 3,
                'full_name' => '湖北省/孝感市/孝昌县',
            ),
            276 => 
            array (
                'id' => 1777,
                'parent_id' => 1708,
                'code' => '420922',
                'name' => '大悟县',
                'type' => 3,
                'full_name' => '湖北省/孝感市/大悟县',
            ),
            277 => 
            array (
                'id' => 1778,
                'parent_id' => 1708,
                'code' => '420923',
                'name' => '云梦县',
                'type' => 3,
                'full_name' => '湖北省/孝感市/云梦县',
            ),
            278 => 
            array (
                'id' => 1779,
                'parent_id' => 1708,
                'code' => '420981',
                'name' => '应城市',
                'type' => 3,
                'full_name' => '湖北省/孝感市/应城市',
            ),
            279 => 
            array (
                'id' => 1780,
                'parent_id' => 1708,
                'code' => '420982',
                'name' => '安陆市',
                'type' => 3,
                'full_name' => '湖北省/孝感市/安陆市',
            ),
            280 => 
            array (
                'id' => 1781,
                'parent_id' => 1708,
                'code' => '420984',
                'name' => '汉川市',
                'type' => 3,
                'full_name' => '湖北省/孝感市/汉川市',
            ),
            281 => 
            array (
                'id' => 1782,
                'parent_id' => 1709,
                'code' => '421002',
                'name' => '沙市区',
                'type' => 3,
                'full_name' => '湖北省/荆州市/沙市区',
            ),
            282 => 
            array (
                'id' => 1783,
                'parent_id' => 1709,
                'code' => '421003',
                'name' => '荆州区',
                'type' => 3,
                'full_name' => '湖北省/荆州市/荆州区',
            ),
            283 => 
            array (
                'id' => 1784,
                'parent_id' => 1709,
                'code' => '421022',
                'name' => '公安县',
                'type' => 3,
                'full_name' => '湖北省/荆州市/公安县',
            ),
            284 => 
            array (
                'id' => 1785,
                'parent_id' => 1709,
                'code' => '421023',
                'name' => '监利县',
                'type' => 3,
                'full_name' => '湖北省/荆州市/监利县',
            ),
            285 => 
            array (
                'id' => 1786,
                'parent_id' => 1709,
                'code' => '421024',
                'name' => '江陵县',
                'type' => 3,
                'full_name' => '湖北省/荆州市/江陵县',
            ),
            286 => 
            array (
                'id' => 1787,
                'parent_id' => 1709,
                'code' => '421081',
                'name' => '石首市',
                'type' => 3,
                'full_name' => '湖北省/荆州市/石首市',
            ),
            287 => 
            array (
                'id' => 1788,
                'parent_id' => 1709,
                'code' => '421083',
                'name' => '洪湖市',
                'type' => 3,
                'full_name' => '湖北省/荆州市/洪湖市',
            ),
            288 => 
            array (
                'id' => 1789,
                'parent_id' => 1709,
                'code' => '421087',
                'name' => '松滋市',
                'type' => 3,
                'full_name' => '湖北省/荆州市/松滋市',
            ),
            289 => 
            array (
                'id' => 1790,
                'parent_id' => 1710,
                'code' => '421102',
                'name' => '黄州区',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/黄州区',
            ),
            290 => 
            array (
                'id' => 1791,
                'parent_id' => 1710,
                'code' => '421121',
                'name' => '团风县',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/团风县',
            ),
            291 => 
            array (
                'id' => 1792,
                'parent_id' => 1710,
                'code' => '421122',
                'name' => '红安县',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/红安县',
            ),
            292 => 
            array (
                'id' => 1793,
                'parent_id' => 1710,
                'code' => '421123',
                'name' => '罗田县',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/罗田县',
            ),
            293 => 
            array (
                'id' => 1794,
                'parent_id' => 1710,
                'code' => '421124',
                'name' => '英山县',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/英山县',
            ),
            294 => 
            array (
                'id' => 1795,
                'parent_id' => 1710,
                'code' => '421125',
                'name' => '浠水县',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/浠水县',
            ),
            295 => 
            array (
                'id' => 1796,
                'parent_id' => 1710,
                'code' => '421126',
                'name' => '蕲春县',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/蕲春县',
            ),
            296 => 
            array (
                'id' => 1797,
                'parent_id' => 1710,
                'code' => '421127',
                'name' => '黄梅县',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/黄梅县',
            ),
            297 => 
            array (
                'id' => 1798,
                'parent_id' => 1710,
                'code' => '421181',
                'name' => '麻城市',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/麻城市',
            ),
            298 => 
            array (
                'id' => 1799,
                'parent_id' => 1710,
                'code' => '421182',
                'name' => '武穴市',
                'type' => 3,
                'full_name' => '湖北省/黄冈市/武穴市',
            ),
            299 => 
            array (
                'id' => 1800,
                'parent_id' => 1711,
                'code' => '421202',
                'name' => '咸安区',
                'type' => 3,
                'full_name' => '湖北省/咸宁市/咸安区',
            ),
            300 => 
            array (
                'id' => 1801,
                'parent_id' => 1711,
                'code' => '421221',
                'name' => '嘉鱼县',
                'type' => 3,
                'full_name' => '湖北省/咸宁市/嘉鱼县',
            ),
            301 => 
            array (
                'id' => 1802,
                'parent_id' => 1711,
                'code' => '421222',
                'name' => '通城县',
                'type' => 3,
                'full_name' => '湖北省/咸宁市/通城县',
            ),
            302 => 
            array (
                'id' => 1803,
                'parent_id' => 1711,
                'code' => '421223',
                'name' => '崇阳县',
                'type' => 3,
                'full_name' => '湖北省/咸宁市/崇阳县',
            ),
            303 => 
            array (
                'id' => 1804,
                'parent_id' => 1711,
                'code' => '421224',
                'name' => '通山县',
                'type' => 3,
                'full_name' => '湖北省/咸宁市/通山县',
            ),
            304 => 
            array (
                'id' => 1805,
                'parent_id' => 1711,
                'code' => '421281',
                'name' => '赤壁市',
                'type' => 3,
                'full_name' => '湖北省/咸宁市/赤壁市',
            ),
            305 => 
            array (
                'id' => 1806,
                'parent_id' => 1712,
                'code' => '421303',
                'name' => '曾都区',
                'type' => 3,
                'full_name' => '湖北省/随州市/曾都区',
            ),
            306 => 
            array (
                'id' => 1807,
                'parent_id' => 1712,
                'code' => '421321',
                'name' => '随县',
                'type' => 3,
                'full_name' => '湖北省/随州市/随县',
            ),
            307 => 
            array (
                'id' => 1808,
                'parent_id' => 1712,
                'code' => '421381',
                'name' => '广水市',
                'type' => 3,
                'full_name' => '湖北省/随州市/广水市',
            ),
            308 => 
            array (
                'id' => 1809,
                'parent_id' => 1713,
                'code' => '422801',
                'name' => '恩施市',
                'type' => 3,
                'full_name' => '湖北省/恩施土家族苗族自治州/恩施市',
            ),
            309 => 
            array (
                'id' => 1810,
                'parent_id' => 1713,
                'code' => '422802',
                'name' => '利川市',
                'type' => 3,
                'full_name' => '湖北省/恩施土家族苗族自治州/利川市',
            ),
            310 => 
            array (
                'id' => 1811,
                'parent_id' => 1713,
                'code' => '422822',
                'name' => '建始县',
                'type' => 3,
                'full_name' => '湖北省/恩施土家族苗族自治州/建始县',
            ),
            311 => 
            array (
                'id' => 1812,
                'parent_id' => 1713,
                'code' => '422823',
                'name' => '巴东县',
                'type' => 3,
                'full_name' => '湖北省/恩施土家族苗族自治州/巴东县',
            ),
            312 => 
            array (
                'id' => 1813,
                'parent_id' => 1713,
                'code' => '422825',
                'name' => '宣恩县',
                'type' => 3,
                'full_name' => '湖北省/恩施土家族苗族自治州/宣恩县',
            ),
            313 => 
            array (
                'id' => 1814,
                'parent_id' => 1713,
                'code' => '422826',
                'name' => '咸丰县',
                'type' => 3,
                'full_name' => '湖北省/恩施土家族苗族自治州/咸丰县',
            ),
            314 => 
            array (
                'id' => 1815,
                'parent_id' => 1713,
                'code' => '422827',
                'name' => '来凤县',
                'type' => 3,
                'full_name' => '湖北省/恩施土家族苗族自治州/来凤县',
            ),
            315 => 
            array (
                'id' => 1816,
                'parent_id' => 1713,
                'code' => '422828',
                'name' => '鹤峰县',
                'type' => 3,
                'full_name' => '湖北省/恩施土家族苗族自治州/鹤峰县',
            ),
            316 => 
            array (
                'id' => 1817,
                'parent_id' => 1714,
                'code' => '429004',
                'name' => '仙桃市',
                'type' => 3,
                'full_name' => '湖北省/仙桃市/仙桃市',
            ),
            317 => 
            array (
                'id' => 1818,
                'parent_id' => 1715,
                'code' => '429005',
                'name' => '潜江市',
                'type' => 3,
                'full_name' => '湖北省/潜江市/潜江市',
            ),
            318 => 
            array (
                'id' => 1819,
                'parent_id' => 1716,
                'code' => '429006',
                'name' => '天门市',
                'type' => 3,
                'full_name' => '湖北省/天门市/天门市',
            ),
            319 => 
            array (
                'id' => 1820,
                'parent_id' => 1717,
                'code' => '429021',
                'name' => '神农架林区',
                'type' => 3,
                'full_name' => '湖北省/神农架林区/神农架林区',
            ),
            320 => 
            array (
                'id' => 1821,
                'parent_id' => 19,
                'code' => '430100',
                'name' => '长沙市',
                'type' => 2,
                'full_name' => '湖南省/长沙市',
            ),
            321 => 
            array (
                'id' => 1822,
                'parent_id' => 19,
                'code' => '430200',
                'name' => '株洲市',
                'type' => 2,
                'full_name' => '湖南省/株洲市',
            ),
            322 => 
            array (
                'id' => 1823,
                'parent_id' => 19,
                'code' => '430300',
                'name' => '湘潭市',
                'type' => 2,
                'full_name' => '湖南省/湘潭市',
            ),
            323 => 
            array (
                'id' => 1824,
                'parent_id' => 19,
                'code' => '430400',
                'name' => '衡阳市',
                'type' => 2,
                'full_name' => '湖南省/衡阳市',
            ),
            324 => 
            array (
                'id' => 1825,
                'parent_id' => 19,
                'code' => '430500',
                'name' => '邵阳市',
                'type' => 2,
                'full_name' => '湖南省/邵阳市',
            ),
            325 => 
            array (
                'id' => 1826,
                'parent_id' => 19,
                'code' => '430600',
                'name' => '岳阳市',
                'type' => 2,
                'full_name' => '湖南省/岳阳市',
            ),
            326 => 
            array (
                'id' => 1827,
                'parent_id' => 19,
                'code' => '430700',
                'name' => '常德市',
                'type' => 2,
                'full_name' => '湖南省/常德市',
            ),
            327 => 
            array (
                'id' => 1828,
                'parent_id' => 19,
                'code' => '430800',
                'name' => '张家界市',
                'type' => 2,
                'full_name' => '湖南省/张家界市',
            ),
            328 => 
            array (
                'id' => 1829,
                'parent_id' => 19,
                'code' => '430900',
                'name' => '益阳市',
                'type' => 2,
                'full_name' => '湖南省/益阳市',
            ),
            329 => 
            array (
                'id' => 1830,
                'parent_id' => 19,
                'code' => '431000',
                'name' => '郴州市',
                'type' => 2,
                'full_name' => '湖南省/郴州市',
            ),
            330 => 
            array (
                'id' => 1831,
                'parent_id' => 19,
                'code' => '431100',
                'name' => '永州市',
                'type' => 2,
                'full_name' => '湖南省/永州市',
            ),
            331 => 
            array (
                'id' => 1832,
                'parent_id' => 19,
                'code' => '431200',
                'name' => '怀化市',
                'type' => 2,
                'full_name' => '湖南省/怀化市',
            ),
            332 => 
            array (
                'id' => 1833,
                'parent_id' => 19,
                'code' => '431300',
                'name' => '娄底市',
                'type' => 2,
                'full_name' => '湖南省/娄底市',
            ),
            333 => 
            array (
                'id' => 1834,
                'parent_id' => 19,
                'code' => '433100',
                'name' => '湘西土家族苗族自治州',
                'type' => 2,
                'full_name' => '湖南省/湘西土家族苗族自治州',
            ),
            334 => 
            array (
                'id' => 1835,
                'parent_id' => 1821,
                'code' => '430102',
                'name' => '芙蓉区',
                'type' => 3,
                'full_name' => '湖南省/长沙市/芙蓉区',
            ),
            335 => 
            array (
                'id' => 1836,
                'parent_id' => 1821,
                'code' => '430103',
                'name' => '天心区',
                'type' => 3,
                'full_name' => '湖南省/长沙市/天心区',
            ),
            336 => 
            array (
                'id' => 1837,
                'parent_id' => 1821,
                'code' => '430104',
                'name' => '岳麓区',
                'type' => 3,
                'full_name' => '湖南省/长沙市/岳麓区',
            ),
            337 => 
            array (
                'id' => 1838,
                'parent_id' => 1821,
                'code' => '430105',
                'name' => '开福区',
                'type' => 3,
                'full_name' => '湖南省/长沙市/开福区',
            ),
            338 => 
            array (
                'id' => 1839,
                'parent_id' => 1821,
                'code' => '430111',
                'name' => '雨花区',
                'type' => 3,
                'full_name' => '湖南省/长沙市/雨花区',
            ),
            339 => 
            array (
                'id' => 1840,
                'parent_id' => 1821,
                'code' => '430112',
                'name' => '望城区',
                'type' => 3,
                'full_name' => '湖南省/长沙市/望城区',
            ),
            340 => 
            array (
                'id' => 1841,
                'parent_id' => 1821,
                'code' => '430121',
                'name' => '长沙县',
                'type' => 3,
                'full_name' => '湖南省/长沙市/长沙县',
            ),
            341 => 
            array (
                'id' => 1842,
                'parent_id' => 1821,
                'code' => '430181',
                'name' => '浏阳市',
                'type' => 3,
                'full_name' => '湖南省/长沙市/浏阳市',
            ),
            342 => 
            array (
                'id' => 1843,
                'parent_id' => 1821,
                'code' => '430182',
                'name' => '宁乡市',
                'type' => 3,
                'full_name' => '湖南省/长沙市/宁乡市',
            ),
            343 => 
            array (
                'id' => 1844,
                'parent_id' => 1822,
                'code' => '430202',
                'name' => '荷塘区',
                'type' => 3,
                'full_name' => '湖南省/株洲市/荷塘区',
            ),
            344 => 
            array (
                'id' => 1845,
                'parent_id' => 1822,
                'code' => '430203',
                'name' => '芦淞区',
                'type' => 3,
                'full_name' => '湖南省/株洲市/芦淞区',
            ),
            345 => 
            array (
                'id' => 1846,
                'parent_id' => 1822,
                'code' => '430204',
                'name' => '石峰区',
                'type' => 3,
                'full_name' => '湖南省/株洲市/石峰区',
            ),
            346 => 
            array (
                'id' => 1847,
                'parent_id' => 1822,
                'code' => '430211',
                'name' => '天元区',
                'type' => 3,
                'full_name' => '湖南省/株洲市/天元区',
            ),
            347 => 
            array (
                'id' => 1848,
                'parent_id' => 1822,
                'code' => '430221',
                'name' => '株洲县',
                'type' => 3,
                'full_name' => '湖南省/株洲市/株洲县',
            ),
            348 => 
            array (
                'id' => 1849,
                'parent_id' => 1822,
                'code' => '430223',
                'name' => '攸县',
                'type' => 3,
                'full_name' => '湖南省/株洲市/攸县',
            ),
            349 => 
            array (
                'id' => 1850,
                'parent_id' => 1822,
                'code' => '430224',
                'name' => '茶陵县',
                'type' => 3,
                'full_name' => '湖南省/株洲市/茶陵县',
            ),
            350 => 
            array (
                'id' => 1851,
                'parent_id' => 1822,
                'code' => '430225',
                'name' => '炎陵县',
                'type' => 3,
                'full_name' => '湖南省/株洲市/炎陵县',
            ),
            351 => 
            array (
                'id' => 1852,
                'parent_id' => 1822,
                'code' => '430281',
                'name' => '醴陵市',
                'type' => 3,
                'full_name' => '湖南省/株洲市/醴陵市',
            ),
            352 => 
            array (
                'id' => 1853,
                'parent_id' => 1823,
                'code' => '430302',
                'name' => '雨湖区',
                'type' => 3,
                'full_name' => '湖南省/湘潭市/雨湖区',
            ),
            353 => 
            array (
                'id' => 1854,
                'parent_id' => 1823,
                'code' => '430304',
                'name' => '岳塘区',
                'type' => 3,
                'full_name' => '湖南省/湘潭市/岳塘区',
            ),
            354 => 
            array (
                'id' => 1855,
                'parent_id' => 1823,
                'code' => '430321',
                'name' => '湘潭县',
                'type' => 3,
                'full_name' => '湖南省/湘潭市/湘潭县',
            ),
            355 => 
            array (
                'id' => 1856,
                'parent_id' => 1823,
                'code' => '430381',
                'name' => '湘乡市',
                'type' => 3,
                'full_name' => '湖南省/湘潭市/湘乡市',
            ),
            356 => 
            array (
                'id' => 1857,
                'parent_id' => 1823,
                'code' => '430382',
                'name' => '韶山市',
                'type' => 3,
                'full_name' => '湖南省/湘潭市/韶山市',
            ),
            357 => 
            array (
                'id' => 1858,
                'parent_id' => 1824,
                'code' => '430405',
                'name' => '珠晖区',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/珠晖区',
            ),
            358 => 
            array (
                'id' => 1859,
                'parent_id' => 1824,
                'code' => '430406',
                'name' => '雁峰区',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/雁峰区',
            ),
            359 => 
            array (
                'id' => 1860,
                'parent_id' => 1824,
                'code' => '430407',
                'name' => '石鼓区',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/石鼓区',
            ),
            360 => 
            array (
                'id' => 1861,
                'parent_id' => 1824,
                'code' => '430408',
                'name' => '蒸湘区',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/蒸湘区',
            ),
            361 => 
            array (
                'id' => 1862,
                'parent_id' => 1824,
                'code' => '430412',
                'name' => '南岳区',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/南岳区',
            ),
            362 => 
            array (
                'id' => 1863,
                'parent_id' => 1824,
                'code' => '430421',
                'name' => '衡阳县',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/衡阳县',
            ),
            363 => 
            array (
                'id' => 1864,
                'parent_id' => 1824,
                'code' => '430422',
                'name' => '衡南县',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/衡南县',
            ),
            364 => 
            array (
                'id' => 1865,
                'parent_id' => 1824,
                'code' => '430423',
                'name' => '衡山县',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/衡山县',
            ),
            365 => 
            array (
                'id' => 1866,
                'parent_id' => 1824,
                'code' => '430424',
                'name' => '衡东县',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/衡东县',
            ),
            366 => 
            array (
                'id' => 1867,
                'parent_id' => 1824,
                'code' => '430426',
                'name' => '祁东县',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/祁东县',
            ),
            367 => 
            array (
                'id' => 1868,
                'parent_id' => 1824,
                'code' => '430481',
                'name' => '耒阳市',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/耒阳市',
            ),
            368 => 
            array (
                'id' => 1869,
                'parent_id' => 1824,
                'code' => '430482',
                'name' => '常宁市',
                'type' => 3,
                'full_name' => '湖南省/衡阳市/常宁市',
            ),
            369 => 
            array (
                'id' => 1870,
                'parent_id' => 1825,
                'code' => '430502',
                'name' => '双清区',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/双清区',
            ),
            370 => 
            array (
                'id' => 1871,
                'parent_id' => 1825,
                'code' => '430503',
                'name' => '大祥区',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/大祥区',
            ),
            371 => 
            array (
                'id' => 1872,
                'parent_id' => 1825,
                'code' => '430511',
                'name' => '北塔区',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/北塔区',
            ),
            372 => 
            array (
                'id' => 1873,
                'parent_id' => 1825,
                'code' => '430521',
                'name' => '邵东县',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/邵东县',
            ),
            373 => 
            array (
                'id' => 1874,
                'parent_id' => 1825,
                'code' => '430522',
                'name' => '新邵县',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/新邵县',
            ),
            374 => 
            array (
                'id' => 1875,
                'parent_id' => 1825,
                'code' => '430523',
                'name' => '邵阳县',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/邵阳县',
            ),
            375 => 
            array (
                'id' => 1876,
                'parent_id' => 1825,
                'code' => '430524',
                'name' => '隆回县',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/隆回县',
            ),
            376 => 
            array (
                'id' => 1877,
                'parent_id' => 1825,
                'code' => '430525',
                'name' => '洞口县',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/洞口县',
            ),
            377 => 
            array (
                'id' => 1878,
                'parent_id' => 1825,
                'code' => '430527',
                'name' => '绥宁县',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/绥宁县',
            ),
            378 => 
            array (
                'id' => 1879,
                'parent_id' => 1825,
                'code' => '430528',
                'name' => '新宁县',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/新宁县',
            ),
            379 => 
            array (
                'id' => 1880,
                'parent_id' => 1825,
                'code' => '430529',
                'name' => '城步苗族自治县',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/城步苗族自治县',
            ),
            380 => 
            array (
                'id' => 1881,
                'parent_id' => 1825,
                'code' => '430581',
                'name' => '武冈市',
                'type' => 3,
                'full_name' => '湖南省/邵阳市/武冈市',
            ),
            381 => 
            array (
                'id' => 1882,
                'parent_id' => 1826,
                'code' => '430602',
                'name' => '岳阳楼区',
                'type' => 3,
                'full_name' => '湖南省/岳阳市/岳阳楼区',
            ),
            382 => 
            array (
                'id' => 1883,
                'parent_id' => 1826,
                'code' => '430603',
                'name' => '云溪区',
                'type' => 3,
                'full_name' => '湖南省/岳阳市/云溪区',
            ),
            383 => 
            array (
                'id' => 1884,
                'parent_id' => 1826,
                'code' => '430611',
                'name' => '君山区',
                'type' => 3,
                'full_name' => '湖南省/岳阳市/君山区',
            ),
            384 => 
            array (
                'id' => 1885,
                'parent_id' => 1826,
                'code' => '430621',
                'name' => '岳阳县',
                'type' => 3,
                'full_name' => '湖南省/岳阳市/岳阳县',
            ),
            385 => 
            array (
                'id' => 1886,
                'parent_id' => 1826,
                'code' => '430623',
                'name' => '华容县',
                'type' => 3,
                'full_name' => '湖南省/岳阳市/华容县',
            ),
            386 => 
            array (
                'id' => 1887,
                'parent_id' => 1826,
                'code' => '430624',
                'name' => '湘阴县',
                'type' => 3,
                'full_name' => '湖南省/岳阳市/湘阴县',
            ),
            387 => 
            array (
                'id' => 1888,
                'parent_id' => 1826,
                'code' => '430626',
                'name' => '平江县',
                'type' => 3,
                'full_name' => '湖南省/岳阳市/平江县',
            ),
            388 => 
            array (
                'id' => 1889,
                'parent_id' => 1826,
                'code' => '430681',
                'name' => '汨罗市',
                'type' => 3,
                'full_name' => '湖南省/岳阳市/汨罗市',
            ),
            389 => 
            array (
                'id' => 1890,
                'parent_id' => 1826,
                'code' => '430682',
                'name' => '临湘市',
                'type' => 3,
                'full_name' => '湖南省/岳阳市/临湘市',
            ),
            390 => 
            array (
                'id' => 1891,
                'parent_id' => 1827,
                'code' => '430702',
                'name' => '武陵区',
                'type' => 3,
                'full_name' => '湖南省/常德市/武陵区',
            ),
            391 => 
            array (
                'id' => 1892,
                'parent_id' => 1827,
                'code' => '430703',
                'name' => '鼎城区',
                'type' => 3,
                'full_name' => '湖南省/常德市/鼎城区',
            ),
            392 => 
            array (
                'id' => 1893,
                'parent_id' => 1827,
                'code' => '430721',
                'name' => '安乡县',
                'type' => 3,
                'full_name' => '湖南省/常德市/安乡县',
            ),
            393 => 
            array (
                'id' => 1894,
                'parent_id' => 1827,
                'code' => '430722',
                'name' => '汉寿县',
                'type' => 3,
                'full_name' => '湖南省/常德市/汉寿县',
            ),
            394 => 
            array (
                'id' => 1895,
                'parent_id' => 1827,
                'code' => '430723',
                'name' => '澧县',
                'type' => 3,
                'full_name' => '湖南省/常德市/澧县',
            ),
            395 => 
            array (
                'id' => 1896,
                'parent_id' => 1827,
                'code' => '430724',
                'name' => '临澧县',
                'type' => 3,
                'full_name' => '湖南省/常德市/临澧县',
            ),
            396 => 
            array (
                'id' => 1897,
                'parent_id' => 1827,
                'code' => '430725',
                'name' => '桃源县',
                'type' => 3,
                'full_name' => '湖南省/常德市/桃源县',
            ),
            397 => 
            array (
                'id' => 1898,
                'parent_id' => 1827,
                'code' => '430726',
                'name' => '石门县',
                'type' => 3,
                'full_name' => '湖南省/常德市/石门县',
            ),
            398 => 
            array (
                'id' => 1899,
                'parent_id' => 1827,
                'code' => '430781',
                'name' => '津市市',
                'type' => 3,
                'full_name' => '湖南省/常德市/津市市',
            ),
            399 => 
            array (
                'id' => 1900,
                'parent_id' => 1828,
                'code' => '430802',
                'name' => '永定区',
                'type' => 3,
                'full_name' => '湖南省/张家界市/永定区',
            ),
            400 => 
            array (
                'id' => 1901,
                'parent_id' => 1828,
                'code' => '430811',
                'name' => '武陵源区',
                'type' => 3,
                'full_name' => '湖南省/张家界市/武陵源区',
            ),
            401 => 
            array (
                'id' => 1902,
                'parent_id' => 1828,
                'code' => '430821',
                'name' => '慈利县',
                'type' => 3,
                'full_name' => '湖南省/张家界市/慈利县',
            ),
            402 => 
            array (
                'id' => 1903,
                'parent_id' => 1828,
                'code' => '430822',
                'name' => '桑植县',
                'type' => 3,
                'full_name' => '湖南省/张家界市/桑植县',
            ),
            403 => 
            array (
                'id' => 1904,
                'parent_id' => 1829,
                'code' => '430902',
                'name' => '资阳区',
                'type' => 3,
                'full_name' => '湖南省/益阳市/资阳区',
            ),
            404 => 
            array (
                'id' => 1905,
                'parent_id' => 1829,
                'code' => '430903',
                'name' => '赫山区',
                'type' => 3,
                'full_name' => '湖南省/益阳市/赫山区',
            ),
            405 => 
            array (
                'id' => 1906,
                'parent_id' => 1829,
                'code' => '430921',
                'name' => '南县',
                'type' => 3,
                'full_name' => '湖南省/益阳市/南县',
            ),
            406 => 
            array (
                'id' => 1907,
                'parent_id' => 1829,
                'code' => '430922',
                'name' => '桃江县',
                'type' => 3,
                'full_name' => '湖南省/益阳市/桃江县',
            ),
            407 => 
            array (
                'id' => 1908,
                'parent_id' => 1829,
                'code' => '430923',
                'name' => '安化县',
                'type' => 3,
                'full_name' => '湖南省/益阳市/安化县',
            ),
            408 => 
            array (
                'id' => 1909,
                'parent_id' => 1829,
                'code' => '430981',
                'name' => '沅江市',
                'type' => 3,
                'full_name' => '湖南省/益阳市/沅江市',
            ),
            409 => 
            array (
                'id' => 1910,
                'parent_id' => 1830,
                'code' => '431002',
                'name' => '北湖区',
                'type' => 3,
                'full_name' => '湖南省/郴州市/北湖区',
            ),
            410 => 
            array (
                'id' => 1911,
                'parent_id' => 1830,
                'code' => '431003',
                'name' => '苏仙区',
                'type' => 3,
                'full_name' => '湖南省/郴州市/苏仙区',
            ),
            411 => 
            array (
                'id' => 1912,
                'parent_id' => 1830,
                'code' => '431021',
                'name' => '桂阳县',
                'type' => 3,
                'full_name' => '湖南省/郴州市/桂阳县',
            ),
            412 => 
            array (
                'id' => 1913,
                'parent_id' => 1830,
                'code' => '431022',
                'name' => '宜章县',
                'type' => 3,
                'full_name' => '湖南省/郴州市/宜章县',
            ),
            413 => 
            array (
                'id' => 1914,
                'parent_id' => 1830,
                'code' => '431023',
                'name' => '永兴县',
                'type' => 3,
                'full_name' => '湖南省/郴州市/永兴县',
            ),
            414 => 
            array (
                'id' => 1915,
                'parent_id' => 1830,
                'code' => '431024',
                'name' => '嘉禾县',
                'type' => 3,
                'full_name' => '湖南省/郴州市/嘉禾县',
            ),
            415 => 
            array (
                'id' => 1916,
                'parent_id' => 1830,
                'code' => '431025',
                'name' => '临武县',
                'type' => 3,
                'full_name' => '湖南省/郴州市/临武县',
            ),
            416 => 
            array (
                'id' => 1917,
                'parent_id' => 1830,
                'code' => '431026',
                'name' => '汝城县',
                'type' => 3,
                'full_name' => '湖南省/郴州市/汝城县',
            ),
            417 => 
            array (
                'id' => 1918,
                'parent_id' => 1830,
                'code' => '431027',
                'name' => '桂东县',
                'type' => 3,
                'full_name' => '湖南省/郴州市/桂东县',
            ),
            418 => 
            array (
                'id' => 1919,
                'parent_id' => 1830,
                'code' => '431028',
                'name' => '安仁县',
                'type' => 3,
                'full_name' => '湖南省/郴州市/安仁县',
            ),
            419 => 
            array (
                'id' => 1920,
                'parent_id' => 1830,
                'code' => '431081',
                'name' => '资兴市',
                'type' => 3,
                'full_name' => '湖南省/郴州市/资兴市',
            ),
            420 => 
            array (
                'id' => 1921,
                'parent_id' => 1831,
                'code' => '431102',
                'name' => '零陵区',
                'type' => 3,
                'full_name' => '湖南省/永州市/零陵区',
            ),
            421 => 
            array (
                'id' => 1922,
                'parent_id' => 1831,
                'code' => '431103',
                'name' => '冷水滩区',
                'type' => 3,
                'full_name' => '湖南省/永州市/冷水滩区',
            ),
            422 => 
            array (
                'id' => 1923,
                'parent_id' => 1831,
                'code' => '431121',
                'name' => '祁阳县',
                'type' => 3,
                'full_name' => '湖南省/永州市/祁阳县',
            ),
            423 => 
            array (
                'id' => 1924,
                'parent_id' => 1831,
                'code' => '431122',
                'name' => '东安县',
                'type' => 3,
                'full_name' => '湖南省/永州市/东安县',
            ),
            424 => 
            array (
                'id' => 1925,
                'parent_id' => 1831,
                'code' => '431123',
                'name' => '双牌县',
                'type' => 3,
                'full_name' => '湖南省/永州市/双牌县',
            ),
            425 => 
            array (
                'id' => 1926,
                'parent_id' => 1831,
                'code' => '431124',
                'name' => '道县',
                'type' => 3,
                'full_name' => '湖南省/永州市/道县',
            ),
            426 => 
            array (
                'id' => 1927,
                'parent_id' => 1831,
                'code' => '431125',
                'name' => '江永县',
                'type' => 3,
                'full_name' => '湖南省/永州市/江永县',
            ),
            427 => 
            array (
                'id' => 1928,
                'parent_id' => 1831,
                'code' => '431126',
                'name' => '宁远县',
                'type' => 3,
                'full_name' => '湖南省/永州市/宁远县',
            ),
            428 => 
            array (
                'id' => 1929,
                'parent_id' => 1831,
                'code' => '431127',
                'name' => '蓝山县',
                'type' => 3,
                'full_name' => '湖南省/永州市/蓝山县',
            ),
            429 => 
            array (
                'id' => 1930,
                'parent_id' => 1831,
                'code' => '431128',
                'name' => '新田县',
                'type' => 3,
                'full_name' => '湖南省/永州市/新田县',
            ),
            430 => 
            array (
                'id' => 1931,
                'parent_id' => 1831,
                'code' => '431129',
                'name' => '江华瑶族自治县',
                'type' => 3,
                'full_name' => '湖南省/永州市/江华瑶族自治县',
            ),
            431 => 
            array (
                'id' => 1932,
                'parent_id' => 1832,
                'code' => '431202',
                'name' => '鹤城区',
                'type' => 3,
                'full_name' => '湖南省/怀化市/鹤城区',
            ),
            432 => 
            array (
                'id' => 1933,
                'parent_id' => 1832,
                'code' => '431221',
                'name' => '中方县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/中方县',
            ),
            433 => 
            array (
                'id' => 1934,
                'parent_id' => 1832,
                'code' => '431222',
                'name' => '沅陵县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/沅陵县',
            ),
            434 => 
            array (
                'id' => 1935,
                'parent_id' => 1832,
                'code' => '431223',
                'name' => '辰溪县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/辰溪县',
            ),
            435 => 
            array (
                'id' => 1936,
                'parent_id' => 1832,
                'code' => '431224',
                'name' => '溆浦县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/溆浦县',
            ),
            436 => 
            array (
                'id' => 1937,
                'parent_id' => 1832,
                'code' => '431225',
                'name' => '会同县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/会同县',
            ),
            437 => 
            array (
                'id' => 1938,
                'parent_id' => 1832,
                'code' => '431226',
                'name' => '麻阳苗族自治县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/麻阳苗族自治县',
            ),
            438 => 
            array (
                'id' => 1939,
                'parent_id' => 1832,
                'code' => '431227',
                'name' => '新晃侗族自治县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/新晃侗族自治县',
            ),
            439 => 
            array (
                'id' => 1940,
                'parent_id' => 1832,
                'code' => '431228',
                'name' => '芷江侗族自治县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/芷江侗族自治县',
            ),
            440 => 
            array (
                'id' => 1941,
                'parent_id' => 1832,
                'code' => '431229',
                'name' => '靖州苗族侗族自治县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/靖州苗族侗族自治县',
            ),
            441 => 
            array (
                'id' => 1942,
                'parent_id' => 1832,
                'code' => '431230',
                'name' => '通道侗族自治县',
                'type' => 3,
                'full_name' => '湖南省/怀化市/通道侗族自治县',
            ),
            442 => 
            array (
                'id' => 1943,
                'parent_id' => 1832,
                'code' => '431281',
                'name' => '洪江市',
                'type' => 3,
                'full_name' => '湖南省/怀化市/洪江市',
            ),
            443 => 
            array (
                'id' => 1944,
                'parent_id' => 1833,
                'code' => '431302',
                'name' => '娄星区',
                'type' => 3,
                'full_name' => '湖南省/娄底市/娄星区',
            ),
            444 => 
            array (
                'id' => 1945,
                'parent_id' => 1833,
                'code' => '431321',
                'name' => '双峰县',
                'type' => 3,
                'full_name' => '湖南省/娄底市/双峰县',
            ),
            445 => 
            array (
                'id' => 1946,
                'parent_id' => 1833,
                'code' => '431322',
                'name' => '新化县',
                'type' => 3,
                'full_name' => '湖南省/娄底市/新化县',
            ),
            446 => 
            array (
                'id' => 1947,
                'parent_id' => 1833,
                'code' => '431381',
                'name' => '冷水江市',
                'type' => 3,
                'full_name' => '湖南省/娄底市/冷水江市',
            ),
            447 => 
            array (
                'id' => 1948,
                'parent_id' => 1833,
                'code' => '431382',
                'name' => '涟源市',
                'type' => 3,
                'full_name' => '湖南省/娄底市/涟源市',
            ),
            448 => 
            array (
                'id' => 1949,
                'parent_id' => 1834,
                'code' => '433101',
                'name' => '吉首市',
                'type' => 3,
                'full_name' => '湖南省/湘西土家族苗族自治州/吉首市',
            ),
            449 => 
            array (
                'id' => 1950,
                'parent_id' => 1834,
                'code' => '433122',
                'name' => '泸溪县',
                'type' => 3,
                'full_name' => '湖南省/湘西土家族苗族自治州/泸溪县',
            ),
            450 => 
            array (
                'id' => 1951,
                'parent_id' => 1834,
                'code' => '433123',
                'name' => '凤凰县',
                'type' => 3,
                'full_name' => '湖南省/湘西土家族苗族自治州/凤凰县',
            ),
            451 => 
            array (
                'id' => 1952,
                'parent_id' => 1834,
                'code' => '433124',
                'name' => '花垣县',
                'type' => 3,
                'full_name' => '湖南省/湘西土家族苗族自治州/花垣县',
            ),
            452 => 
            array (
                'id' => 1953,
                'parent_id' => 1834,
                'code' => '433125',
                'name' => '保靖县',
                'type' => 3,
                'full_name' => '湖南省/湘西土家族苗族自治州/保靖县',
            ),
            453 => 
            array (
                'id' => 1954,
                'parent_id' => 1834,
                'code' => '433126',
                'name' => '古丈县',
                'type' => 3,
                'full_name' => '湖南省/湘西土家族苗族自治州/古丈县',
            ),
            454 => 
            array (
                'id' => 1955,
                'parent_id' => 1834,
                'code' => '433127',
                'name' => '永顺县',
                'type' => 3,
                'full_name' => '湖南省/湘西土家族苗族自治州/永顺县',
            ),
            455 => 
            array (
                'id' => 1956,
                'parent_id' => 1834,
                'code' => '433130',
                'name' => '龙山县',
                'type' => 3,
                'full_name' => '湖南省/湘西土家族苗族自治州/龙山县',
            ),
            456 => 
            array (
                'id' => 1957,
                'parent_id' => 20,
                'code' => '440100',
                'name' => '广州市',
                'type' => 2,
                'full_name' => '广东省/广州市',
            ),
            457 => 
            array (
                'id' => 1958,
                'parent_id' => 20,
                'code' => '440200',
                'name' => '韶关市',
                'type' => 2,
                'full_name' => '广东省/韶关市',
            ),
            458 => 
            array (
                'id' => 1959,
                'parent_id' => 20,
                'code' => '440300',
                'name' => '深圳市',
                'type' => 2,
                'full_name' => '广东省/深圳市',
            ),
            459 => 
            array (
                'id' => 1960,
                'parent_id' => 20,
                'code' => '440400',
                'name' => '珠海市',
                'type' => 2,
                'full_name' => '广东省/珠海市',
            ),
            460 => 
            array (
                'id' => 1961,
                'parent_id' => 20,
                'code' => '440500',
                'name' => '汕头市',
                'type' => 2,
                'full_name' => '广东省/汕头市',
            ),
            461 => 
            array (
                'id' => 1962,
                'parent_id' => 20,
                'code' => '440600',
                'name' => '佛山市',
                'type' => 2,
                'full_name' => '广东省/佛山市',
            ),
            462 => 
            array (
                'id' => 1963,
                'parent_id' => 20,
                'code' => '440700',
                'name' => '江门市',
                'type' => 2,
                'full_name' => '广东省/江门市',
            ),
            463 => 
            array (
                'id' => 1964,
                'parent_id' => 20,
                'code' => '440800',
                'name' => '湛江市',
                'type' => 2,
                'full_name' => '广东省/湛江市',
            ),
            464 => 
            array (
                'id' => 1965,
                'parent_id' => 20,
                'code' => '440900',
                'name' => '茂名市',
                'type' => 2,
                'full_name' => '广东省/茂名市',
            ),
            465 => 
            array (
                'id' => 1966,
                'parent_id' => 20,
                'code' => '441200',
                'name' => '肇庆市',
                'type' => 2,
                'full_name' => '广东省/肇庆市',
            ),
            466 => 
            array (
                'id' => 1967,
                'parent_id' => 20,
                'code' => '441300',
                'name' => '惠州市',
                'type' => 2,
                'full_name' => '广东省/惠州市',
            ),
            467 => 
            array (
                'id' => 1968,
                'parent_id' => 20,
                'code' => '441400',
                'name' => '梅州市',
                'type' => 2,
                'full_name' => '广东省/梅州市',
            ),
            468 => 
            array (
                'id' => 1969,
                'parent_id' => 20,
                'code' => '441500',
                'name' => '汕尾市',
                'type' => 2,
                'full_name' => '广东省/汕尾市',
            ),
            469 => 
            array (
                'id' => 1970,
                'parent_id' => 20,
                'code' => '441600',
                'name' => '河源市',
                'type' => 2,
                'full_name' => '广东省/河源市',
            ),
            470 => 
            array (
                'id' => 1971,
                'parent_id' => 20,
                'code' => '441700',
                'name' => '阳江市',
                'type' => 2,
                'full_name' => '广东省/阳江市',
            ),
            471 => 
            array (
                'id' => 1972,
                'parent_id' => 20,
                'code' => '441800',
                'name' => '清远市',
                'type' => 2,
                'full_name' => '广东省/清远市',
            ),
            472 => 
            array (
                'id' => 1973,
                'parent_id' => 20,
                'code' => '441900',
                'name' => '东莞市',
                'type' => 2,
                'full_name' => '广东省/东莞市',
            ),
            473 => 
            array (
                'id' => 1974,
                'parent_id' => 20,
                'code' => '442000',
                'name' => '中山市',
                'type' => 2,
                'full_name' => '广东省/中山市',
            ),
            474 => 
            array (
                'id' => 1975,
                'parent_id' => 20,
                'code' => '442100',
                'name' => '东沙群岛',
                'type' => 2,
                'full_name' => '广东省/东沙群岛',
            ),
            475 => 
            array (
                'id' => 1976,
                'parent_id' => 20,
                'code' => '445100',
                'name' => '潮州市',
                'type' => 2,
                'full_name' => '广东省/潮州市',
            ),
            476 => 
            array (
                'id' => 1977,
                'parent_id' => 20,
                'code' => '445200',
                'name' => '揭阳市',
                'type' => 2,
                'full_name' => '广东省/揭阳市',
            ),
            477 => 
            array (
                'id' => 1978,
                'parent_id' => 20,
                'code' => '445300',
                'name' => '云浮市',
                'type' => 2,
                'full_name' => '广东省/云浮市',
            ),
            478 => 
            array (
                'id' => 1979,
                'parent_id' => 1957,
                'code' => '440103',
                'name' => '荔湾区',
                'type' => 3,
                'full_name' => '广东省/广州市/荔湾区',
            ),
            479 => 
            array (
                'id' => 1980,
                'parent_id' => 1957,
                'code' => '440104',
                'name' => '越秀区',
                'type' => 3,
                'full_name' => '广东省/广州市/越秀区',
            ),
            480 => 
            array (
                'id' => 1981,
                'parent_id' => 1957,
                'code' => '440105',
                'name' => '海珠区',
                'type' => 3,
                'full_name' => '广东省/广州市/海珠区',
            ),
            481 => 
            array (
                'id' => 1982,
                'parent_id' => 1957,
                'code' => '440106',
                'name' => '天河区',
                'type' => 3,
                'full_name' => '广东省/广州市/天河区',
            ),
            482 => 
            array (
                'id' => 1983,
                'parent_id' => 1957,
                'code' => '440111',
                'name' => '白云区',
                'type' => 3,
                'full_name' => '广东省/广州市/白云区',
            ),
            483 => 
            array (
                'id' => 1984,
                'parent_id' => 1957,
                'code' => '440112',
                'name' => '黄埔区',
                'type' => 3,
                'full_name' => '广东省/广州市/黄埔区',
            ),
            484 => 
            array (
                'id' => 1985,
                'parent_id' => 1957,
                'code' => '440113',
                'name' => '番禺区',
                'type' => 3,
                'full_name' => '广东省/广州市/番禺区',
            ),
            485 => 
            array (
                'id' => 1986,
                'parent_id' => 1957,
                'code' => '440114',
                'name' => '花都区',
                'type' => 3,
                'full_name' => '广东省/广州市/花都区',
            ),
            486 => 
            array (
                'id' => 1987,
                'parent_id' => 1957,
                'code' => '440115',
                'name' => '南沙区',
                'type' => 3,
                'full_name' => '广东省/广州市/南沙区',
            ),
            487 => 
            array (
                'id' => 1988,
                'parent_id' => 1957,
                'code' => '440117',
                'name' => '从化区',
                'type' => 3,
                'full_name' => '广东省/广州市/从化区',
            ),
            488 => 
            array (
                'id' => 1989,
                'parent_id' => 1957,
                'code' => '440118',
                'name' => '增城区',
                'type' => 3,
                'full_name' => '广东省/广州市/增城区',
            ),
            489 => 
            array (
                'id' => 1990,
                'parent_id' => 1958,
                'code' => '440203',
                'name' => '武江区',
                'type' => 3,
                'full_name' => '广东省/韶关市/武江区',
            ),
            490 => 
            array (
                'id' => 1991,
                'parent_id' => 1958,
                'code' => '440204',
                'name' => '浈江区',
                'type' => 3,
                'full_name' => '广东省/韶关市/浈江区',
            ),
            491 => 
            array (
                'id' => 1992,
                'parent_id' => 1958,
                'code' => '440205',
                'name' => '曲江区',
                'type' => 3,
                'full_name' => '广东省/韶关市/曲江区',
            ),
            492 => 
            array (
                'id' => 1993,
                'parent_id' => 1958,
                'code' => '440222',
                'name' => '始兴县',
                'type' => 3,
                'full_name' => '广东省/韶关市/始兴县',
            ),
            493 => 
            array (
                'id' => 1994,
                'parent_id' => 1958,
                'code' => '440224',
                'name' => '仁化县',
                'type' => 3,
                'full_name' => '广东省/韶关市/仁化县',
            ),
            494 => 
            array (
                'id' => 1995,
                'parent_id' => 1958,
                'code' => '440229',
                'name' => '翁源县',
                'type' => 3,
                'full_name' => '广东省/韶关市/翁源县',
            ),
            495 => 
            array (
                'id' => 1996,
                'parent_id' => 1958,
                'code' => '440232',
                'name' => '乳源瑶族自治县',
                'type' => 3,
                'full_name' => '广东省/韶关市/乳源瑶族自治县',
            ),
            496 => 
            array (
                'id' => 1997,
                'parent_id' => 1958,
                'code' => '440233',
                'name' => '新丰县',
                'type' => 3,
                'full_name' => '广东省/韶关市/新丰县',
            ),
            497 => 
            array (
                'id' => 1998,
                'parent_id' => 1958,
                'code' => '440281',
                'name' => '乐昌市',
                'type' => 3,
                'full_name' => '广东省/韶关市/乐昌市',
            ),
            498 => 
            array (
                'id' => 1999,
                'parent_id' => 1958,
                'code' => '440282',
                'name' => '南雄市',
                'type' => 3,
                'full_name' => '广东省/韶关市/南雄市',
            ),
            499 => 
            array (
                'id' => 2000,
                'parent_id' => 1959,
                'code' => '440303',
                'name' => '罗湖区',
                'type' => 3,
                'full_name' => '广东省/深圳市/罗湖区',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'parent_id' => 1959,
                'code' => '440304',
                'name' => '福田区',
                'type' => 3,
                'full_name' => '广东省/深圳市/福田区',
            ),
            1 => 
            array (
                'id' => 2002,
                'parent_id' => 1959,
                'code' => '440305',
                'name' => '南山区',
                'type' => 3,
                'full_name' => '广东省/深圳市/南山区',
            ),
            2 => 
            array (
                'id' => 2003,
                'parent_id' => 1959,
                'code' => '440306',
                'name' => '宝安区',
                'type' => 3,
                'full_name' => '广东省/深圳市/宝安区',
            ),
            3 => 
            array (
                'id' => 2004,
                'parent_id' => 1959,
                'code' => '440307',
                'name' => '龙岗区',
                'type' => 3,
                'full_name' => '广东省/深圳市/龙岗区',
            ),
            4 => 
            array (
                'id' => 2005,
                'parent_id' => 1959,
                'code' => '440308',
                'name' => '盐田区',
                'type' => 3,
                'full_name' => '广东省/深圳市/盐田区',
            ),
            5 => 
            array (
                'id' => 2006,
                'parent_id' => 1959,
                'code' => '440309',
                'name' => '龙华区',
                'type' => 3,
                'full_name' => '广东省/深圳市/龙华区',
            ),
            6 => 
            array (
                'id' => 2007,
                'parent_id' => 1959,
                'code' => '440310',
                'name' => '坪山区',
                'type' => 3,
                'full_name' => '广东省/深圳市/坪山区',
            ),
            7 => 
            array (
                'id' => 2008,
                'parent_id' => 1960,
                'code' => '440402',
                'name' => '香洲区',
                'type' => 3,
                'full_name' => '广东省/珠海市/香洲区',
            ),
            8 => 
            array (
                'id' => 2009,
                'parent_id' => 1960,
                'code' => '440403',
                'name' => '斗门区',
                'type' => 3,
                'full_name' => '广东省/珠海市/斗门区',
            ),
            9 => 
            array (
                'id' => 2010,
                'parent_id' => 1960,
                'code' => '440404',
                'name' => '金湾区',
                'type' => 3,
                'full_name' => '广东省/珠海市/金湾区',
            ),
            10 => 
            array (
                'id' => 2011,
                'parent_id' => 1960,
                'code' => '440499',
            'name' => '澳门大学横琴校区(由澳门管辖)',
                'type' => 3,
            'full_name' => '广东省/珠海市/澳门大学横琴校区(由澳门管辖)',
            ),
            11 => 
            array (
                'id' => 2012,
                'parent_id' => 1961,
                'code' => '440507',
                'name' => '龙湖区',
                'type' => 3,
                'full_name' => '广东省/汕头市/龙湖区',
            ),
            12 => 
            array (
                'id' => 2013,
                'parent_id' => 1961,
                'code' => '440511',
                'name' => '金平区',
                'type' => 3,
                'full_name' => '广东省/汕头市/金平区',
            ),
            13 => 
            array (
                'id' => 2014,
                'parent_id' => 1961,
                'code' => '440512',
                'name' => '濠江区',
                'type' => 3,
                'full_name' => '广东省/汕头市/濠江区',
            ),
            14 => 
            array (
                'id' => 2015,
                'parent_id' => 1961,
                'code' => '440513',
                'name' => '潮阳区',
                'type' => 3,
                'full_name' => '广东省/汕头市/潮阳区',
            ),
            15 => 
            array (
                'id' => 2016,
                'parent_id' => 1961,
                'code' => '440514',
                'name' => '潮南区',
                'type' => 3,
                'full_name' => '广东省/汕头市/潮南区',
            ),
            16 => 
            array (
                'id' => 2017,
                'parent_id' => 1961,
                'code' => '440515',
                'name' => '澄海区',
                'type' => 3,
                'full_name' => '广东省/汕头市/澄海区',
            ),
            17 => 
            array (
                'id' => 2018,
                'parent_id' => 1961,
                'code' => '440523',
                'name' => '南澳县',
                'type' => 3,
                'full_name' => '广东省/汕头市/南澳县',
            ),
            18 => 
            array (
                'id' => 2019,
                'parent_id' => 1962,
                'code' => '440604',
                'name' => '禅城区',
                'type' => 3,
                'full_name' => '广东省/佛山市/禅城区',
            ),
            19 => 
            array (
                'id' => 2020,
                'parent_id' => 1962,
                'code' => '440605',
                'name' => '南海区',
                'type' => 3,
                'full_name' => '广东省/佛山市/南海区',
            ),
            20 => 
            array (
                'id' => 2021,
                'parent_id' => 1962,
                'code' => '440606',
                'name' => '顺德区',
                'type' => 3,
                'full_name' => '广东省/佛山市/顺德区',
            ),
            21 => 
            array (
                'id' => 2022,
                'parent_id' => 1962,
                'code' => '440607',
                'name' => '三水区',
                'type' => 3,
                'full_name' => '广东省/佛山市/三水区',
            ),
            22 => 
            array (
                'id' => 2023,
                'parent_id' => 1962,
                'code' => '440608',
                'name' => '高明区',
                'type' => 3,
                'full_name' => '广东省/佛山市/高明区',
            ),
            23 => 
            array (
                'id' => 2024,
                'parent_id' => 1963,
                'code' => '440703',
                'name' => '蓬江区',
                'type' => 3,
                'full_name' => '广东省/江门市/蓬江区',
            ),
            24 => 
            array (
                'id' => 2025,
                'parent_id' => 1963,
                'code' => '440704',
                'name' => '江海区',
                'type' => 3,
                'full_name' => '广东省/江门市/江海区',
            ),
            25 => 
            array (
                'id' => 2026,
                'parent_id' => 1963,
                'code' => '440705',
                'name' => '新会区',
                'type' => 3,
                'full_name' => '广东省/江门市/新会区',
            ),
            26 => 
            array (
                'id' => 2027,
                'parent_id' => 1963,
                'code' => '440781',
                'name' => '台山市',
                'type' => 3,
                'full_name' => '广东省/江门市/台山市',
            ),
            27 => 
            array (
                'id' => 2028,
                'parent_id' => 1963,
                'code' => '440783',
                'name' => '开平市',
                'type' => 3,
                'full_name' => '广东省/江门市/开平市',
            ),
            28 => 
            array (
                'id' => 2029,
                'parent_id' => 1963,
                'code' => '440784',
                'name' => '鹤山市',
                'type' => 3,
                'full_name' => '广东省/江门市/鹤山市',
            ),
            29 => 
            array (
                'id' => 2030,
                'parent_id' => 1963,
                'code' => '440785',
                'name' => '恩平市',
                'type' => 3,
                'full_name' => '广东省/江门市/恩平市',
            ),
            30 => 
            array (
                'id' => 2031,
                'parent_id' => 1964,
                'code' => '440802',
                'name' => '赤坎区',
                'type' => 3,
                'full_name' => '广东省/湛江市/赤坎区',
            ),
            31 => 
            array (
                'id' => 2032,
                'parent_id' => 1964,
                'code' => '440803',
                'name' => '霞山区',
                'type' => 3,
                'full_name' => '广东省/湛江市/霞山区',
            ),
            32 => 
            array (
                'id' => 2033,
                'parent_id' => 1964,
                'code' => '440804',
                'name' => '坡头区',
                'type' => 3,
                'full_name' => '广东省/湛江市/坡头区',
            ),
            33 => 
            array (
                'id' => 2034,
                'parent_id' => 1964,
                'code' => '440811',
                'name' => '麻章区',
                'type' => 3,
                'full_name' => '广东省/湛江市/麻章区',
            ),
            34 => 
            array (
                'id' => 2035,
                'parent_id' => 1964,
                'code' => '440823',
                'name' => '遂溪县',
                'type' => 3,
                'full_name' => '广东省/湛江市/遂溪县',
            ),
            35 => 
            array (
                'id' => 2036,
                'parent_id' => 1964,
                'code' => '440825',
                'name' => '徐闻县',
                'type' => 3,
                'full_name' => '广东省/湛江市/徐闻县',
            ),
            36 => 
            array (
                'id' => 2037,
                'parent_id' => 1964,
                'code' => '440881',
                'name' => '廉江市',
                'type' => 3,
                'full_name' => '广东省/湛江市/廉江市',
            ),
            37 => 
            array (
                'id' => 2038,
                'parent_id' => 1964,
                'code' => '440882',
                'name' => '雷州市',
                'type' => 3,
                'full_name' => '广东省/湛江市/雷州市',
            ),
            38 => 
            array (
                'id' => 2039,
                'parent_id' => 1964,
                'code' => '440883',
                'name' => '吴川市',
                'type' => 3,
                'full_name' => '广东省/湛江市/吴川市',
            ),
            39 => 
            array (
                'id' => 2040,
                'parent_id' => 1965,
                'code' => '440902',
                'name' => '茂南区',
                'type' => 3,
                'full_name' => '广东省/茂名市/茂南区',
            ),
            40 => 
            array (
                'id' => 2041,
                'parent_id' => 1965,
                'code' => '440904',
                'name' => '电白区',
                'type' => 3,
                'full_name' => '广东省/茂名市/电白区',
            ),
            41 => 
            array (
                'id' => 2042,
                'parent_id' => 1965,
                'code' => '440981',
                'name' => '高州市',
                'type' => 3,
                'full_name' => '广东省/茂名市/高州市',
            ),
            42 => 
            array (
                'id' => 2043,
                'parent_id' => 1965,
                'code' => '440982',
                'name' => '化州市',
                'type' => 3,
                'full_name' => '广东省/茂名市/化州市',
            ),
            43 => 
            array (
                'id' => 2044,
                'parent_id' => 1965,
                'code' => '440983',
                'name' => '信宜市',
                'type' => 3,
                'full_name' => '广东省/茂名市/信宜市',
            ),
            44 => 
            array (
                'id' => 2045,
                'parent_id' => 1966,
                'code' => '441202',
                'name' => '端州区',
                'type' => 3,
                'full_name' => '广东省/肇庆市/端州区',
            ),
            45 => 
            array (
                'id' => 2046,
                'parent_id' => 1966,
                'code' => '441203',
                'name' => '鼎湖区',
                'type' => 3,
                'full_name' => '广东省/肇庆市/鼎湖区',
            ),
            46 => 
            array (
                'id' => 2047,
                'parent_id' => 1966,
                'code' => '441204',
                'name' => '高要区',
                'type' => 3,
                'full_name' => '广东省/肇庆市/高要区',
            ),
            47 => 
            array (
                'id' => 2048,
                'parent_id' => 1966,
                'code' => '441223',
                'name' => '广宁县',
                'type' => 3,
                'full_name' => '广东省/肇庆市/广宁县',
            ),
            48 => 
            array (
                'id' => 2049,
                'parent_id' => 1966,
                'code' => '441224',
                'name' => '怀集县',
                'type' => 3,
                'full_name' => '广东省/肇庆市/怀集县',
            ),
            49 => 
            array (
                'id' => 2050,
                'parent_id' => 1966,
                'code' => '441225',
                'name' => '封开县',
                'type' => 3,
                'full_name' => '广东省/肇庆市/封开县',
            ),
            50 => 
            array (
                'id' => 2051,
                'parent_id' => 1966,
                'code' => '441226',
                'name' => '德庆县',
                'type' => 3,
                'full_name' => '广东省/肇庆市/德庆县',
            ),
            51 => 
            array (
                'id' => 2052,
                'parent_id' => 1966,
                'code' => '441284',
                'name' => '四会市',
                'type' => 3,
                'full_name' => '广东省/肇庆市/四会市',
            ),
            52 => 
            array (
                'id' => 2053,
                'parent_id' => 1967,
                'code' => '441302',
                'name' => '惠城区',
                'type' => 3,
                'full_name' => '广东省/惠州市/惠城区',
            ),
            53 => 
            array (
                'id' => 2054,
                'parent_id' => 1967,
                'code' => '441303',
                'name' => '惠阳区',
                'type' => 3,
                'full_name' => '广东省/惠州市/惠阳区',
            ),
            54 => 
            array (
                'id' => 2055,
                'parent_id' => 1967,
                'code' => '441322',
                'name' => '博罗县',
                'type' => 3,
                'full_name' => '广东省/惠州市/博罗县',
            ),
            55 => 
            array (
                'id' => 2056,
                'parent_id' => 1967,
                'code' => '441323',
                'name' => '惠东县',
                'type' => 3,
                'full_name' => '广东省/惠州市/惠东县',
            ),
            56 => 
            array (
                'id' => 2057,
                'parent_id' => 1967,
                'code' => '441324',
                'name' => '龙门县',
                'type' => 3,
                'full_name' => '广东省/惠州市/龙门县',
            ),
            57 => 
            array (
                'id' => 2058,
                'parent_id' => 1968,
                'code' => '441402',
                'name' => '梅江区',
                'type' => 3,
                'full_name' => '广东省/梅州市/梅江区',
            ),
            58 => 
            array (
                'id' => 2059,
                'parent_id' => 1968,
                'code' => '441403',
                'name' => '梅县区',
                'type' => 3,
                'full_name' => '广东省/梅州市/梅县区',
            ),
            59 => 
            array (
                'id' => 2060,
                'parent_id' => 1968,
                'code' => '441422',
                'name' => '大埔县',
                'type' => 3,
                'full_name' => '广东省/梅州市/大埔县',
            ),
            60 => 
            array (
                'id' => 2061,
                'parent_id' => 1968,
                'code' => '441423',
                'name' => '丰顺县',
                'type' => 3,
                'full_name' => '广东省/梅州市/丰顺县',
            ),
            61 => 
            array (
                'id' => 2062,
                'parent_id' => 1968,
                'code' => '441424',
                'name' => '五华县',
                'type' => 3,
                'full_name' => '广东省/梅州市/五华县',
            ),
            62 => 
            array (
                'id' => 2063,
                'parent_id' => 1968,
                'code' => '441426',
                'name' => '平远县',
                'type' => 3,
                'full_name' => '广东省/梅州市/平远县',
            ),
            63 => 
            array (
                'id' => 2064,
                'parent_id' => 1968,
                'code' => '441427',
                'name' => '蕉岭县',
                'type' => 3,
                'full_name' => '广东省/梅州市/蕉岭县',
            ),
            64 => 
            array (
                'id' => 2065,
                'parent_id' => 1968,
                'code' => '441481',
                'name' => '兴宁市',
                'type' => 3,
                'full_name' => '广东省/梅州市/兴宁市',
            ),
            65 => 
            array (
                'id' => 2066,
                'parent_id' => 1969,
                'code' => '441502',
                'name' => '城区',
                'type' => 3,
                'full_name' => '广东省/汕尾市/城区',
            ),
            66 => 
            array (
                'id' => 2067,
                'parent_id' => 1969,
                'code' => '441521',
                'name' => '海丰县',
                'type' => 3,
                'full_name' => '广东省/汕尾市/海丰县',
            ),
            67 => 
            array (
                'id' => 2068,
                'parent_id' => 1969,
                'code' => '441523',
                'name' => '陆河县',
                'type' => 3,
                'full_name' => '广东省/汕尾市/陆河县',
            ),
            68 => 
            array (
                'id' => 2069,
                'parent_id' => 1969,
                'code' => '441581',
                'name' => '陆丰市',
                'type' => 3,
                'full_name' => '广东省/汕尾市/陆丰市',
            ),
            69 => 
            array (
                'id' => 2070,
                'parent_id' => 1970,
                'code' => '441602',
                'name' => '源城区',
                'type' => 3,
                'full_name' => '广东省/河源市/源城区',
            ),
            70 => 
            array (
                'id' => 2071,
                'parent_id' => 1970,
                'code' => '441621',
                'name' => '紫金县',
                'type' => 3,
                'full_name' => '广东省/河源市/紫金县',
            ),
            71 => 
            array (
                'id' => 2072,
                'parent_id' => 1970,
                'code' => '441622',
                'name' => '龙川县',
                'type' => 3,
                'full_name' => '广东省/河源市/龙川县',
            ),
            72 => 
            array (
                'id' => 2073,
                'parent_id' => 1970,
                'code' => '441623',
                'name' => '连平县',
                'type' => 3,
                'full_name' => '广东省/河源市/连平县',
            ),
            73 => 
            array (
                'id' => 2074,
                'parent_id' => 1970,
                'code' => '441624',
                'name' => '和平县',
                'type' => 3,
                'full_name' => '广东省/河源市/和平县',
            ),
            74 => 
            array (
                'id' => 2075,
                'parent_id' => 1970,
                'code' => '441625',
                'name' => '东源县',
                'type' => 3,
                'full_name' => '广东省/河源市/东源县',
            ),
            75 => 
            array (
                'id' => 2076,
                'parent_id' => 1971,
                'code' => '441702',
                'name' => '江城区',
                'type' => 3,
                'full_name' => '广东省/阳江市/江城区',
            ),
            76 => 
            array (
                'id' => 2077,
                'parent_id' => 1971,
                'code' => '441704',
                'name' => '阳东区',
                'type' => 3,
                'full_name' => '广东省/阳江市/阳东区',
            ),
            77 => 
            array (
                'id' => 2078,
                'parent_id' => 1971,
                'code' => '441721',
                'name' => '阳西县',
                'type' => 3,
                'full_name' => '广东省/阳江市/阳西县',
            ),
            78 => 
            array (
                'id' => 2079,
                'parent_id' => 1971,
                'code' => '441781',
                'name' => '阳春市',
                'type' => 3,
                'full_name' => '广东省/阳江市/阳春市',
            ),
            79 => 
            array (
                'id' => 2080,
                'parent_id' => 1972,
                'code' => '441802',
                'name' => '清城区',
                'type' => 3,
                'full_name' => '广东省/清远市/清城区',
            ),
            80 => 
            array (
                'id' => 2081,
                'parent_id' => 1972,
                'code' => '441803',
                'name' => '清新区',
                'type' => 3,
                'full_name' => '广东省/清远市/清新区',
            ),
            81 => 
            array (
                'id' => 2082,
                'parent_id' => 1972,
                'code' => '441821',
                'name' => '佛冈县',
                'type' => 3,
                'full_name' => '广东省/清远市/佛冈县',
            ),
            82 => 
            array (
                'id' => 2083,
                'parent_id' => 1972,
                'code' => '441823',
                'name' => '阳山县',
                'type' => 3,
                'full_name' => '广东省/清远市/阳山县',
            ),
            83 => 
            array (
                'id' => 2084,
                'parent_id' => 1972,
                'code' => '441825',
                'name' => '连山壮族瑶族自治县',
                'type' => 3,
                'full_name' => '广东省/清远市/连山壮族瑶族自治县',
            ),
            84 => 
            array (
                'id' => 2085,
                'parent_id' => 1972,
                'code' => '441826',
                'name' => '连南瑶族自治县',
                'type' => 3,
                'full_name' => '广东省/清远市/连南瑶族自治县',
            ),
            85 => 
            array (
                'id' => 2086,
                'parent_id' => 1972,
                'code' => '441881',
                'name' => '英德市',
                'type' => 3,
                'full_name' => '广东省/清远市/英德市',
            ),
            86 => 
            array (
                'id' => 2087,
                'parent_id' => 1972,
                'code' => '441882',
                'name' => '连州市',
                'type' => 3,
                'full_name' => '广东省/清远市/连州市',
            ),
            87 => 
            array (
                'id' => 2088,
                'parent_id' => 1973,
                'code' => '441900',
                'name' => '东莞市',
                'type' => 3,
                'full_name' => '广东省/东莞市/东莞市',
            ),
            88 => 
            array (
                'id' => 2089,
                'parent_id' => 1974,
                'code' => '442000',
                'name' => '中山市',
                'type' => 3,
                'full_name' => '广东省/中山市/中山市',
            ),
            89 => 
            array (
                'id' => 2090,
                'parent_id' => 1975,
                'code' => '442100',
                'name' => '东沙群岛',
                'type' => 3,
                'full_name' => '广东省/东沙群岛/东沙群岛',
            ),
            90 => 
            array (
                'id' => 2091,
                'parent_id' => 1976,
                'code' => '445102',
                'name' => '湘桥区',
                'type' => 3,
                'full_name' => '广东省/潮州市/湘桥区',
            ),
            91 => 
            array (
                'id' => 2092,
                'parent_id' => 1976,
                'code' => '445103',
                'name' => '潮安区',
                'type' => 3,
                'full_name' => '广东省/潮州市/潮安区',
            ),
            92 => 
            array (
                'id' => 2093,
                'parent_id' => 1976,
                'code' => '445122',
                'name' => '饶平县',
                'type' => 3,
                'full_name' => '广东省/潮州市/饶平县',
            ),
            93 => 
            array (
                'id' => 2094,
                'parent_id' => 1977,
                'code' => '445202',
                'name' => '榕城区',
                'type' => 3,
                'full_name' => '广东省/揭阳市/榕城区',
            ),
            94 => 
            array (
                'id' => 2095,
                'parent_id' => 1977,
                'code' => '445203',
                'name' => '揭东区',
                'type' => 3,
                'full_name' => '广东省/揭阳市/揭东区',
            ),
            95 => 
            array (
                'id' => 2096,
                'parent_id' => 1977,
                'code' => '445222',
                'name' => '揭西县',
                'type' => 3,
                'full_name' => '广东省/揭阳市/揭西县',
            ),
            96 => 
            array (
                'id' => 2097,
                'parent_id' => 1977,
                'code' => '445224',
                'name' => '惠来县',
                'type' => 3,
                'full_name' => '广东省/揭阳市/惠来县',
            ),
            97 => 
            array (
                'id' => 2098,
                'parent_id' => 1977,
                'code' => '445281',
                'name' => '普宁市',
                'type' => 3,
                'full_name' => '广东省/揭阳市/普宁市',
            ),
            98 => 
            array (
                'id' => 2099,
                'parent_id' => 1978,
                'code' => '445302',
                'name' => '云城区',
                'type' => 3,
                'full_name' => '广东省/云浮市/云城区',
            ),
            99 => 
            array (
                'id' => 2100,
                'parent_id' => 1978,
                'code' => '445303',
                'name' => '云安区',
                'type' => 3,
                'full_name' => '广东省/云浮市/云安区',
            ),
            100 => 
            array (
                'id' => 2101,
                'parent_id' => 1978,
                'code' => '445321',
                'name' => '新兴县',
                'type' => 3,
                'full_name' => '广东省/云浮市/新兴县',
            ),
            101 => 
            array (
                'id' => 2102,
                'parent_id' => 1978,
                'code' => '445322',
                'name' => '郁南县',
                'type' => 3,
                'full_name' => '广东省/云浮市/郁南县',
            ),
            102 => 
            array (
                'id' => 2103,
                'parent_id' => 1978,
                'code' => '445381',
                'name' => '罗定市',
                'type' => 3,
                'full_name' => '广东省/云浮市/罗定市',
            ),
            103 => 
            array (
                'id' => 2104,
                'parent_id' => 21,
                'code' => '450100',
                'name' => '南宁市',
                'type' => 2,
                'full_name' => '广西壮族自治区/南宁市',
            ),
            104 => 
            array (
                'id' => 2105,
                'parent_id' => 21,
                'code' => '450200',
                'name' => '柳州市',
                'type' => 2,
                'full_name' => '广西壮族自治区/柳州市',
            ),
            105 => 
            array (
                'id' => 2106,
                'parent_id' => 21,
                'code' => '450300',
                'name' => '桂林市',
                'type' => 2,
                'full_name' => '广西壮族自治区/桂林市',
            ),
            106 => 
            array (
                'id' => 2107,
                'parent_id' => 21,
                'code' => '450400',
                'name' => '梧州市',
                'type' => 2,
                'full_name' => '广西壮族自治区/梧州市',
            ),
            107 => 
            array (
                'id' => 2108,
                'parent_id' => 21,
                'code' => '450500',
                'name' => '北海市',
                'type' => 2,
                'full_name' => '广西壮族自治区/北海市',
            ),
            108 => 
            array (
                'id' => 2109,
                'parent_id' => 21,
                'code' => '450600',
                'name' => '防城港市',
                'type' => 2,
                'full_name' => '广西壮族自治区/防城港市',
            ),
            109 => 
            array (
                'id' => 2110,
                'parent_id' => 21,
                'code' => '450700',
                'name' => '钦州市',
                'type' => 2,
                'full_name' => '广西壮族自治区/钦州市',
            ),
            110 => 
            array (
                'id' => 2111,
                'parent_id' => 21,
                'code' => '450800',
                'name' => '贵港市',
                'type' => 2,
                'full_name' => '广西壮族自治区/贵港市',
            ),
            111 => 
            array (
                'id' => 2112,
                'parent_id' => 21,
                'code' => '450900',
                'name' => '玉林市',
                'type' => 2,
                'full_name' => '广西壮族自治区/玉林市',
            ),
            112 => 
            array (
                'id' => 2113,
                'parent_id' => 21,
                'code' => '451000',
                'name' => '百色市',
                'type' => 2,
                'full_name' => '广西壮族自治区/百色市',
            ),
            113 => 
            array (
                'id' => 2114,
                'parent_id' => 21,
                'code' => '451100',
                'name' => '贺州市',
                'type' => 2,
                'full_name' => '广西壮族自治区/贺州市',
            ),
            114 => 
            array (
                'id' => 2115,
                'parent_id' => 21,
                'code' => '451200',
                'name' => '河池市',
                'type' => 2,
                'full_name' => '广西壮族自治区/河池市',
            ),
            115 => 
            array (
                'id' => 2116,
                'parent_id' => 21,
                'code' => '451300',
                'name' => '来宾市',
                'type' => 2,
                'full_name' => '广西壮族自治区/来宾市',
            ),
            116 => 
            array (
                'id' => 2117,
                'parent_id' => 21,
                'code' => '451400',
                'name' => '崇左市',
                'type' => 2,
                'full_name' => '广西壮族自治区/崇左市',
            ),
            117 => 
            array (
                'id' => 2118,
                'parent_id' => 2104,
                'code' => '450102',
                'name' => '兴宁区',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/兴宁区',
            ),
            118 => 
            array (
                'id' => 2119,
                'parent_id' => 2104,
                'code' => '450103',
                'name' => '青秀区',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/青秀区',
            ),
            119 => 
            array (
                'id' => 2120,
                'parent_id' => 2104,
                'code' => '450105',
                'name' => '江南区',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/江南区',
            ),
            120 => 
            array (
                'id' => 2121,
                'parent_id' => 2104,
                'code' => '450107',
                'name' => '西乡塘区',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/西乡塘区',
            ),
            121 => 
            array (
                'id' => 2122,
                'parent_id' => 2104,
                'code' => '450108',
                'name' => '良庆区',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/良庆区',
            ),
            122 => 
            array (
                'id' => 2123,
                'parent_id' => 2104,
                'code' => '450109',
                'name' => '邕宁区',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/邕宁区',
            ),
            123 => 
            array (
                'id' => 2124,
                'parent_id' => 2104,
                'code' => '450110',
                'name' => '武鸣区',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/武鸣区',
            ),
            124 => 
            array (
                'id' => 2125,
                'parent_id' => 2104,
                'code' => '450123',
                'name' => '隆安县',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/隆安县',
            ),
            125 => 
            array (
                'id' => 2126,
                'parent_id' => 2104,
                'code' => '450124',
                'name' => '马山县',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/马山县',
            ),
            126 => 
            array (
                'id' => 2127,
                'parent_id' => 2104,
                'code' => '450125',
                'name' => '上林县',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/上林县',
            ),
            127 => 
            array (
                'id' => 2128,
                'parent_id' => 2104,
                'code' => '450126',
                'name' => '宾阳县',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/宾阳县',
            ),
            128 => 
            array (
                'id' => 2129,
                'parent_id' => 2104,
                'code' => '450127',
                'name' => '横县',
                'type' => 3,
                'full_name' => '广西壮族自治区/南宁市/横县',
            ),
            129 => 
            array (
                'id' => 2130,
                'parent_id' => 2105,
                'code' => '450202',
                'name' => '城中区',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/城中区',
            ),
            130 => 
            array (
                'id' => 2131,
                'parent_id' => 2105,
                'code' => '450203',
                'name' => '鱼峰区',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/鱼峰区',
            ),
            131 => 
            array (
                'id' => 2132,
                'parent_id' => 2105,
                'code' => '450204',
                'name' => '柳南区',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/柳南区',
            ),
            132 => 
            array (
                'id' => 2133,
                'parent_id' => 2105,
                'code' => '450205',
                'name' => '柳北区',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/柳北区',
            ),
            133 => 
            array (
                'id' => 2134,
                'parent_id' => 2105,
                'code' => '450206',
                'name' => '柳江区',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/柳江区',
            ),
            134 => 
            array (
                'id' => 2135,
                'parent_id' => 2105,
                'code' => '450222',
                'name' => '柳城县',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/柳城县',
            ),
            135 => 
            array (
                'id' => 2136,
                'parent_id' => 2105,
                'code' => '450223',
                'name' => '鹿寨县',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/鹿寨县',
            ),
            136 => 
            array (
                'id' => 2137,
                'parent_id' => 2105,
                'code' => '450224',
                'name' => '融安县',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/融安县',
            ),
            137 => 
            array (
                'id' => 2138,
                'parent_id' => 2105,
                'code' => '450225',
                'name' => '融水苗族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/融水苗族自治县',
            ),
            138 => 
            array (
                'id' => 2139,
                'parent_id' => 2105,
                'code' => '450226',
                'name' => '三江侗族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/柳州市/三江侗族自治县',
            ),
            139 => 
            array (
                'id' => 2140,
                'parent_id' => 2106,
                'code' => '450302',
                'name' => '秀峰区',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/秀峰区',
            ),
            140 => 
            array (
                'id' => 2141,
                'parent_id' => 2106,
                'code' => '450303',
                'name' => '叠彩区',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/叠彩区',
            ),
            141 => 
            array (
                'id' => 2142,
                'parent_id' => 2106,
                'code' => '450304',
                'name' => '象山区',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/象山区',
            ),
            142 => 
            array (
                'id' => 2143,
                'parent_id' => 2106,
                'code' => '450305',
                'name' => '七星区',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/七星区',
            ),
            143 => 
            array (
                'id' => 2144,
                'parent_id' => 2106,
                'code' => '450311',
                'name' => '雁山区',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/雁山区',
            ),
            144 => 
            array (
                'id' => 2145,
                'parent_id' => 2106,
                'code' => '450312',
                'name' => '临桂区',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/临桂区',
            ),
            145 => 
            array (
                'id' => 2146,
                'parent_id' => 2106,
                'code' => '450321',
                'name' => '阳朔县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/阳朔县',
            ),
            146 => 
            array (
                'id' => 2147,
                'parent_id' => 2106,
                'code' => '450323',
                'name' => '灵川县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/灵川县',
            ),
            147 => 
            array (
                'id' => 2148,
                'parent_id' => 2106,
                'code' => '450324',
                'name' => '全州县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/全州县',
            ),
            148 => 
            array (
                'id' => 2149,
                'parent_id' => 2106,
                'code' => '450325',
                'name' => '兴安县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/兴安县',
            ),
            149 => 
            array (
                'id' => 2150,
                'parent_id' => 2106,
                'code' => '450326',
                'name' => '永福县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/永福县',
            ),
            150 => 
            array (
                'id' => 2151,
                'parent_id' => 2106,
                'code' => '450327',
                'name' => '灌阳县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/灌阳县',
            ),
            151 => 
            array (
                'id' => 2152,
                'parent_id' => 2106,
                'code' => '450328',
                'name' => '龙胜各族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/龙胜各族自治县',
            ),
            152 => 
            array (
                'id' => 2153,
                'parent_id' => 2106,
                'code' => '450329',
                'name' => '资源县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/资源县',
            ),
            153 => 
            array (
                'id' => 2154,
                'parent_id' => 2106,
                'code' => '450330',
                'name' => '平乐县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/平乐县',
            ),
            154 => 
            array (
                'id' => 2155,
                'parent_id' => 2106,
                'code' => '450331',
                'name' => '荔浦县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/荔浦县',
            ),
            155 => 
            array (
                'id' => 2156,
                'parent_id' => 2106,
                'code' => '450332',
                'name' => '恭城瑶族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/桂林市/恭城瑶族自治县',
            ),
            156 => 
            array (
                'id' => 2157,
                'parent_id' => 2107,
                'code' => '450403',
                'name' => '万秀区',
                'type' => 3,
                'full_name' => '广西壮族自治区/梧州市/万秀区',
            ),
            157 => 
            array (
                'id' => 2158,
                'parent_id' => 2107,
                'code' => '450405',
                'name' => '长洲区',
                'type' => 3,
                'full_name' => '广西壮族自治区/梧州市/长洲区',
            ),
            158 => 
            array (
                'id' => 2159,
                'parent_id' => 2107,
                'code' => '450406',
                'name' => '龙圩区',
                'type' => 3,
                'full_name' => '广西壮族自治区/梧州市/龙圩区',
            ),
            159 => 
            array (
                'id' => 2160,
                'parent_id' => 2107,
                'code' => '450421',
                'name' => '苍梧县',
                'type' => 3,
                'full_name' => '广西壮族自治区/梧州市/苍梧县',
            ),
            160 => 
            array (
                'id' => 2161,
                'parent_id' => 2107,
                'code' => '450422',
                'name' => '藤县',
                'type' => 3,
                'full_name' => '广西壮族自治区/梧州市/藤县',
            ),
            161 => 
            array (
                'id' => 2162,
                'parent_id' => 2107,
                'code' => '450423',
                'name' => '蒙山县',
                'type' => 3,
                'full_name' => '广西壮族自治区/梧州市/蒙山县',
            ),
            162 => 
            array (
                'id' => 2163,
                'parent_id' => 2107,
                'code' => '450481',
                'name' => '岑溪市',
                'type' => 3,
                'full_name' => '广西壮族自治区/梧州市/岑溪市',
            ),
            163 => 
            array (
                'id' => 2164,
                'parent_id' => 2108,
                'code' => '450502',
                'name' => '海城区',
                'type' => 3,
                'full_name' => '广西壮族自治区/北海市/海城区',
            ),
            164 => 
            array (
                'id' => 2165,
                'parent_id' => 2108,
                'code' => '450503',
                'name' => '银海区',
                'type' => 3,
                'full_name' => '广西壮族自治区/北海市/银海区',
            ),
            165 => 
            array (
                'id' => 2166,
                'parent_id' => 2108,
                'code' => '450512',
                'name' => '铁山港区',
                'type' => 3,
                'full_name' => '广西壮族自治区/北海市/铁山港区',
            ),
            166 => 
            array (
                'id' => 2167,
                'parent_id' => 2108,
                'code' => '450521',
                'name' => '合浦县',
                'type' => 3,
                'full_name' => '广西壮族自治区/北海市/合浦县',
            ),
            167 => 
            array (
                'id' => 2168,
                'parent_id' => 2109,
                'code' => '450602',
                'name' => '港口区',
                'type' => 3,
                'full_name' => '广西壮族自治区/防城港市/港口区',
            ),
            168 => 
            array (
                'id' => 2169,
                'parent_id' => 2109,
                'code' => '450603',
                'name' => '防城区',
                'type' => 3,
                'full_name' => '广西壮族自治区/防城港市/防城区',
            ),
            169 => 
            array (
                'id' => 2170,
                'parent_id' => 2109,
                'code' => '450621',
                'name' => '上思县',
                'type' => 3,
                'full_name' => '广西壮族自治区/防城港市/上思县',
            ),
            170 => 
            array (
                'id' => 2171,
                'parent_id' => 2109,
                'code' => '450681',
                'name' => '东兴市',
                'type' => 3,
                'full_name' => '广西壮族自治区/防城港市/东兴市',
            ),
            171 => 
            array (
                'id' => 2172,
                'parent_id' => 2110,
                'code' => '450702',
                'name' => '钦南区',
                'type' => 3,
                'full_name' => '广西壮族自治区/钦州市/钦南区',
            ),
            172 => 
            array (
                'id' => 2173,
                'parent_id' => 2110,
                'code' => '450703',
                'name' => '钦北区',
                'type' => 3,
                'full_name' => '广西壮族自治区/钦州市/钦北区',
            ),
            173 => 
            array (
                'id' => 2174,
                'parent_id' => 2110,
                'code' => '450721',
                'name' => '灵山县',
                'type' => 3,
                'full_name' => '广西壮族自治区/钦州市/灵山县',
            ),
            174 => 
            array (
                'id' => 2175,
                'parent_id' => 2110,
                'code' => '450722',
                'name' => '浦北县',
                'type' => 3,
                'full_name' => '广西壮族自治区/钦州市/浦北县',
            ),
            175 => 
            array (
                'id' => 2176,
                'parent_id' => 2111,
                'code' => '450802',
                'name' => '港北区',
                'type' => 3,
                'full_name' => '广西壮族自治区/贵港市/港北区',
            ),
            176 => 
            array (
                'id' => 2177,
                'parent_id' => 2111,
                'code' => '450803',
                'name' => '港南区',
                'type' => 3,
                'full_name' => '广西壮族自治区/贵港市/港南区',
            ),
            177 => 
            array (
                'id' => 2178,
                'parent_id' => 2111,
                'code' => '450804',
                'name' => '覃塘区',
                'type' => 3,
                'full_name' => '广西壮族自治区/贵港市/覃塘区',
            ),
            178 => 
            array (
                'id' => 2179,
                'parent_id' => 2111,
                'code' => '450821',
                'name' => '平南县',
                'type' => 3,
                'full_name' => '广西壮族自治区/贵港市/平南县',
            ),
            179 => 
            array (
                'id' => 2180,
                'parent_id' => 2111,
                'code' => '450881',
                'name' => '桂平市',
                'type' => 3,
                'full_name' => '广西壮族自治区/贵港市/桂平市',
            ),
            180 => 
            array (
                'id' => 2181,
                'parent_id' => 2112,
                'code' => '450902',
                'name' => '玉州区',
                'type' => 3,
                'full_name' => '广西壮族自治区/玉林市/玉州区',
            ),
            181 => 
            array (
                'id' => 2182,
                'parent_id' => 2112,
                'code' => '450903',
                'name' => '福绵区',
                'type' => 3,
                'full_name' => '广西壮族自治区/玉林市/福绵区',
            ),
            182 => 
            array (
                'id' => 2183,
                'parent_id' => 2112,
                'code' => '450921',
                'name' => '容县',
                'type' => 3,
                'full_name' => '广西壮族自治区/玉林市/容县',
            ),
            183 => 
            array (
                'id' => 2184,
                'parent_id' => 2112,
                'code' => '450922',
                'name' => '陆川县',
                'type' => 3,
                'full_name' => '广西壮族自治区/玉林市/陆川县',
            ),
            184 => 
            array (
                'id' => 2185,
                'parent_id' => 2112,
                'code' => '450923',
                'name' => '博白县',
                'type' => 3,
                'full_name' => '广西壮族自治区/玉林市/博白县',
            ),
            185 => 
            array (
                'id' => 2186,
                'parent_id' => 2112,
                'code' => '450924',
                'name' => '兴业县',
                'type' => 3,
                'full_name' => '广西壮族自治区/玉林市/兴业县',
            ),
            186 => 
            array (
                'id' => 2187,
                'parent_id' => 2112,
                'code' => '450981',
                'name' => '北流市',
                'type' => 3,
                'full_name' => '广西壮族自治区/玉林市/北流市',
            ),
            187 => 
            array (
                'id' => 2188,
                'parent_id' => 2113,
                'code' => '451002',
                'name' => '右江区',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/右江区',
            ),
            188 => 
            array (
                'id' => 2189,
                'parent_id' => 2113,
                'code' => '451021',
                'name' => '田阳区',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/田阳区',
            ),
            189 => 
            array (
                'id' => 2190,
                'parent_id' => 2113,
                'code' => '451022',
                'name' => '田东县',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/田东县',
            ),
            190 => 
            array (
                'id' => 2191,
                'parent_id' => 2113,
                'code' => '451023',
                'name' => '平果县',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/平果县',
            ),
            191 => 
            array (
                'id' => 2192,
                'parent_id' => 2113,
                'code' => '451024',
                'name' => '德保县',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/德保县',
            ),
            192 => 
            array (
                'id' => 2193,
                'parent_id' => 2113,
                'code' => '451026',
                'name' => '那坡县',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/那坡县',
            ),
            193 => 
            array (
                'id' => 2194,
                'parent_id' => 2113,
                'code' => '451027',
                'name' => '凌云县',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/凌云县',
            ),
            194 => 
            array (
                'id' => 2195,
                'parent_id' => 2113,
                'code' => '451028',
                'name' => '乐业县',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/乐业县',
            ),
            195 => 
            array (
                'id' => 2196,
                'parent_id' => 2113,
                'code' => '451029',
                'name' => '田林县',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/田林县',
            ),
            196 => 
            array (
                'id' => 2197,
                'parent_id' => 2113,
                'code' => '451030',
                'name' => '西林县',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/西林县',
            ),
            197 => 
            array (
                'id' => 2198,
                'parent_id' => 2113,
                'code' => '451031',
                'name' => '隆林各族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/隆林各族自治县',
            ),
            198 => 
            array (
                'id' => 2199,
                'parent_id' => 2113,
                'code' => '451081',
                'name' => '靖西市',
                'type' => 3,
                'full_name' => '广西壮族自治区/百色市/靖西市',
            ),
            199 => 
            array (
                'id' => 2200,
                'parent_id' => 2114,
                'code' => '451102',
                'name' => '八步区',
                'type' => 3,
                'full_name' => '广西壮族自治区/贺州市/八步区',
            ),
            200 => 
            array (
                'id' => 2201,
                'parent_id' => 2114,
                'code' => '451103',
                'name' => '平桂区',
                'type' => 3,
                'full_name' => '广西壮族自治区/贺州市/平桂区',
            ),
            201 => 
            array (
                'id' => 2202,
                'parent_id' => 2114,
                'code' => '451121',
                'name' => '昭平县',
                'type' => 3,
                'full_name' => '广西壮族自治区/贺州市/昭平县',
            ),
            202 => 
            array (
                'id' => 2203,
                'parent_id' => 2114,
                'code' => '451122',
                'name' => '钟山县',
                'type' => 3,
                'full_name' => '广西壮族自治区/贺州市/钟山县',
            ),
            203 => 
            array (
                'id' => 2204,
                'parent_id' => 2114,
                'code' => '451123',
                'name' => '富川瑶族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/贺州市/富川瑶族自治县',
            ),
            204 => 
            array (
                'id' => 2205,
                'parent_id' => 2115,
                'code' => '451202',
                'name' => '金城江区',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/金城江区',
            ),
            205 => 
            array (
                'id' => 2206,
                'parent_id' => 2115,
                'code' => '451203',
                'name' => '宜州区',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/宜州区',
            ),
            206 => 
            array (
                'id' => 2207,
                'parent_id' => 2115,
                'code' => '451221',
                'name' => '南丹县',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/南丹县',
            ),
            207 => 
            array (
                'id' => 2208,
                'parent_id' => 2115,
                'code' => '451222',
                'name' => '天峨县',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/天峨县',
            ),
            208 => 
            array (
                'id' => 2209,
                'parent_id' => 2115,
                'code' => '451223',
                'name' => '凤山县',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/凤山县',
            ),
            209 => 
            array (
                'id' => 2210,
                'parent_id' => 2115,
                'code' => '451224',
                'name' => '东兰县',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/东兰县',
            ),
            210 => 
            array (
                'id' => 2211,
                'parent_id' => 2115,
                'code' => '451225',
                'name' => '罗城仫佬族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/罗城仫佬族自治县',
            ),
            211 => 
            array (
                'id' => 2212,
                'parent_id' => 2115,
                'code' => '451226',
                'name' => '环江毛南族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/环江毛南族自治县',
            ),
            212 => 
            array (
                'id' => 2213,
                'parent_id' => 2115,
                'code' => '451227',
                'name' => '巴马瑶族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/巴马瑶族自治县',
            ),
            213 => 
            array (
                'id' => 2214,
                'parent_id' => 2115,
                'code' => '451228',
                'name' => '都安瑶族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/都安瑶族自治县',
            ),
            214 => 
            array (
                'id' => 2215,
                'parent_id' => 2115,
                'code' => '451229',
                'name' => '大化瑶族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/河池市/大化瑶族自治县',
            ),
            215 => 
            array (
                'id' => 2216,
                'parent_id' => 2116,
                'code' => '451302',
                'name' => '兴宾区',
                'type' => 3,
                'full_name' => '广西壮族自治区/来宾市/兴宾区',
            ),
            216 => 
            array (
                'id' => 2217,
                'parent_id' => 2116,
                'code' => '451321',
                'name' => '忻城县',
                'type' => 3,
                'full_name' => '广西壮族自治区/来宾市/忻城县',
            ),
            217 => 
            array (
                'id' => 2218,
                'parent_id' => 2116,
                'code' => '451322',
                'name' => '象州县',
                'type' => 3,
                'full_name' => '广西壮族自治区/来宾市/象州县',
            ),
            218 => 
            array (
                'id' => 2219,
                'parent_id' => 2116,
                'code' => '451323',
                'name' => '武宣县',
                'type' => 3,
                'full_name' => '广西壮族自治区/来宾市/武宣县',
            ),
            219 => 
            array (
                'id' => 2220,
                'parent_id' => 2116,
                'code' => '451324',
                'name' => '金秀瑶族自治县',
                'type' => 3,
                'full_name' => '广西壮族自治区/来宾市/金秀瑶族自治县',
            ),
            220 => 
            array (
                'id' => 2221,
                'parent_id' => 2116,
                'code' => '451381',
                'name' => '合山市',
                'type' => 3,
                'full_name' => '广西壮族自治区/来宾市/合山市',
            ),
            221 => 
            array (
                'id' => 2222,
                'parent_id' => 2117,
                'code' => '451402',
                'name' => '江州区',
                'type' => 3,
                'full_name' => '广西壮族自治区/崇左市/江州区',
            ),
            222 => 
            array (
                'id' => 2223,
                'parent_id' => 2117,
                'code' => '451421',
                'name' => '扶绥县',
                'type' => 3,
                'full_name' => '广西壮族自治区/崇左市/扶绥县',
            ),
            223 => 
            array (
                'id' => 2224,
                'parent_id' => 2117,
                'code' => '451422',
                'name' => '宁明县',
                'type' => 3,
                'full_name' => '广西壮族自治区/崇左市/宁明县',
            ),
            224 => 
            array (
                'id' => 2225,
                'parent_id' => 2117,
                'code' => '451423',
                'name' => '龙州县',
                'type' => 3,
                'full_name' => '广西壮族自治区/崇左市/龙州县',
            ),
            225 => 
            array (
                'id' => 2226,
                'parent_id' => 2117,
                'code' => '451424',
                'name' => '大新县',
                'type' => 3,
                'full_name' => '广西壮族自治区/崇左市/大新县',
            ),
            226 => 
            array (
                'id' => 2227,
                'parent_id' => 2117,
                'code' => '451425',
                'name' => '天等县',
                'type' => 3,
                'full_name' => '广西壮族自治区/崇左市/天等县',
            ),
            227 => 
            array (
                'id' => 2228,
                'parent_id' => 2117,
                'code' => '451481',
                'name' => '凭祥市',
                'type' => 3,
                'full_name' => '广西壮族自治区/崇左市/凭祥市',
            ),
            228 => 
            array (
                'id' => 2229,
                'parent_id' => 22,
                'code' => '460100',
                'name' => '海口市',
                'type' => 2,
                'full_name' => '海南省/海口市',
            ),
            229 => 
            array (
                'id' => 2230,
                'parent_id' => 22,
                'code' => '460200',
                'name' => '三亚市',
                'type' => 2,
                'full_name' => '海南省/三亚市',
            ),
            230 => 
            array (
                'id' => 2231,
                'parent_id' => 22,
                'code' => '460300',
                'name' => '三沙市',
                'type' => 2,
                'full_name' => '海南省/三沙市',
            ),
            231 => 
            array (
                'id' => 2232,
                'parent_id' => 22,
                'code' => '460400',
                'name' => '儋州市',
                'type' => 2,
                'full_name' => '海南省/儋州市',
            ),
            232 => 
            array (
                'id' => 2233,
                'parent_id' => 22,
                'code' => '469001',
                'name' => '五指山市',
                'type' => 2,
                'full_name' => '海南省/五指山市',
            ),
            233 => 
            array (
                'id' => 2234,
                'parent_id' => 22,
                'code' => '469002',
                'name' => '琼海市',
                'type' => 2,
                'full_name' => '海南省/琼海市',
            ),
            234 => 
            array (
                'id' => 2235,
                'parent_id' => 22,
                'code' => '469005',
                'name' => '文昌市',
                'type' => 2,
                'full_name' => '海南省/文昌市',
            ),
            235 => 
            array (
                'id' => 2236,
                'parent_id' => 22,
                'code' => '469006',
                'name' => '万宁市',
                'type' => 2,
                'full_name' => '海南省/万宁市',
            ),
            236 => 
            array (
                'id' => 2237,
                'parent_id' => 22,
                'code' => '469007',
                'name' => '东方市',
                'type' => 2,
                'full_name' => '海南省/东方市',
            ),
            237 => 
            array (
                'id' => 2238,
                'parent_id' => 22,
                'code' => '469021',
                'name' => '定安县',
                'type' => 2,
                'full_name' => '海南省/定安县',
            ),
            238 => 
            array (
                'id' => 2239,
                'parent_id' => 22,
                'code' => '469022',
                'name' => '屯昌县',
                'type' => 2,
                'full_name' => '海南省/屯昌县',
            ),
            239 => 
            array (
                'id' => 2240,
                'parent_id' => 22,
                'code' => '469023',
                'name' => '澄迈县',
                'type' => 2,
                'full_name' => '海南省/澄迈县',
            ),
            240 => 
            array (
                'id' => 2241,
                'parent_id' => 22,
                'code' => '469024',
                'name' => '临高县',
                'type' => 2,
                'full_name' => '海南省/临高县',
            ),
            241 => 
            array (
                'id' => 2242,
                'parent_id' => 22,
                'code' => '469025',
                'name' => '白沙黎族自治县',
                'type' => 2,
                'full_name' => '海南省/白沙黎族自治县',
            ),
            242 => 
            array (
                'id' => 2243,
                'parent_id' => 22,
                'code' => '469026',
                'name' => '昌江黎族自治县',
                'type' => 2,
                'full_name' => '海南省/昌江黎族自治县',
            ),
            243 => 
            array (
                'id' => 2244,
                'parent_id' => 22,
                'code' => '469027',
                'name' => '乐东黎族自治县',
                'type' => 2,
                'full_name' => '海南省/乐东黎族自治县',
            ),
            244 => 
            array (
                'id' => 2245,
                'parent_id' => 22,
                'code' => '469028',
                'name' => '陵水黎族自治县',
                'type' => 2,
                'full_name' => '海南省/陵水黎族自治县',
            ),
            245 => 
            array (
                'id' => 2246,
                'parent_id' => 22,
                'code' => '469029',
                'name' => '保亭黎族苗族自治县',
                'type' => 2,
                'full_name' => '海南省/保亭黎族苗族自治县',
            ),
            246 => 
            array (
                'id' => 2247,
                'parent_id' => 22,
                'code' => '469030',
                'name' => '琼中黎族苗族自治县',
                'type' => 2,
                'full_name' => '海南省/琼中黎族苗族自治县',
            ),
            247 => 
            array (
                'id' => 2248,
                'parent_id' => 2229,
                'code' => '460105',
                'name' => '秀英区',
                'type' => 3,
                'full_name' => '海南省/海口市/秀英区',
            ),
            248 => 
            array (
                'id' => 2249,
                'parent_id' => 2229,
                'code' => '460106',
                'name' => '龙华区',
                'type' => 3,
                'full_name' => '海南省/海口市/龙华区',
            ),
            249 => 
            array (
                'id' => 2250,
                'parent_id' => 2229,
                'code' => '460107',
                'name' => '琼山区',
                'type' => 3,
                'full_name' => '海南省/海口市/琼山区',
            ),
            250 => 
            array (
                'id' => 2251,
                'parent_id' => 2229,
                'code' => '460108',
                'name' => '美兰区',
                'type' => 3,
                'full_name' => '海南省/海口市/美兰区',
            ),
            251 => 
            array (
                'id' => 2252,
                'parent_id' => 2230,
                'code' => '460202',
                'name' => '海棠区',
                'type' => 3,
                'full_name' => '海南省/三亚市/海棠区',
            ),
            252 => 
            array (
                'id' => 2253,
                'parent_id' => 2230,
                'code' => '460203',
                'name' => '吉阳区',
                'type' => 3,
                'full_name' => '海南省/三亚市/吉阳区',
            ),
            253 => 
            array (
                'id' => 2254,
                'parent_id' => 2230,
                'code' => '460204',
                'name' => '天涯区',
                'type' => 3,
                'full_name' => '海南省/三亚市/天涯区',
            ),
            254 => 
            array (
                'id' => 2255,
                'parent_id' => 2230,
                'code' => '460205',
                'name' => '崖州区',
                'type' => 3,
                'full_name' => '海南省/三亚市/崖州区',
            ),
            255 => 
            array (
                'id' => 2256,
                'parent_id' => 2231,
                'code' => '460321',
                'name' => '西沙群岛',
                'type' => 3,
                'full_name' => '海南省/三沙市/西沙群岛',
            ),
            256 => 
            array (
                'id' => 2257,
                'parent_id' => 2231,
                'code' => '460322',
                'name' => '南沙群岛',
                'type' => 3,
                'full_name' => '海南省/三沙市/南沙群岛',
            ),
            257 => 
            array (
                'id' => 2258,
                'parent_id' => 2231,
                'code' => '460323',
                'name' => '中沙群岛的岛礁及其海域',
                'type' => 3,
                'full_name' => '海南省/三沙市/中沙群岛的岛礁及其海域',
            ),
            258 => 
            array (
                'id' => 2259,
                'parent_id' => 2232,
                'code' => '460400',
                'name' => '儋州市',
                'type' => 3,
                'full_name' => '海南省/儋州市/儋州市',
            ),
            259 => 
            array (
                'id' => 2260,
                'parent_id' => 2233,
                'code' => '469001',
                'name' => '五指山市',
                'type' => 3,
                'full_name' => '海南省/五指山市/五指山市',
            ),
            260 => 
            array (
                'id' => 2261,
                'parent_id' => 2234,
                'code' => '469002',
                'name' => '琼海市',
                'type' => 3,
                'full_name' => '海南省/琼海市/琼海市',
            ),
            261 => 
            array (
                'id' => 2262,
                'parent_id' => 2235,
                'code' => '469005',
                'name' => '文昌市',
                'type' => 3,
                'full_name' => '海南省/文昌市/文昌市',
            ),
            262 => 
            array (
                'id' => 2263,
                'parent_id' => 2236,
                'code' => '469006',
                'name' => '万宁市',
                'type' => 3,
                'full_name' => '海南省/万宁市/万宁市',
            ),
            263 => 
            array (
                'id' => 2264,
                'parent_id' => 2237,
                'code' => '469007',
                'name' => '东方市',
                'type' => 3,
                'full_name' => '海南省/东方市/东方市',
            ),
            264 => 
            array (
                'id' => 2265,
                'parent_id' => 2238,
                'code' => '469021',
                'name' => '定安县',
                'type' => 3,
                'full_name' => '海南省/定安县/定安县',
            ),
            265 => 
            array (
                'id' => 2266,
                'parent_id' => 2239,
                'code' => '469022',
                'name' => '屯昌县',
                'type' => 3,
                'full_name' => '海南省/屯昌县/屯昌县',
            ),
            266 => 
            array (
                'id' => 2267,
                'parent_id' => 2240,
                'code' => '469023',
                'name' => '澄迈县',
                'type' => 3,
                'full_name' => '海南省/澄迈县/澄迈县',
            ),
            267 => 
            array (
                'id' => 2268,
                'parent_id' => 2241,
                'code' => '469024',
                'name' => '临高县',
                'type' => 3,
                'full_name' => '海南省/临高县/临高县',
            ),
            268 => 
            array (
                'id' => 2269,
                'parent_id' => 2242,
                'code' => '469025',
                'name' => '白沙黎族自治县',
                'type' => 3,
                'full_name' => '海南省/白沙黎族自治县/白沙黎族自治县',
            ),
            269 => 
            array (
                'id' => 2270,
                'parent_id' => 2243,
                'code' => '469026',
                'name' => '昌江黎族自治县',
                'type' => 3,
                'full_name' => '海南省/昌江黎族自治县/昌江黎族自治县',
            ),
            270 => 
            array (
                'id' => 2271,
                'parent_id' => 2244,
                'code' => '469027',
                'name' => '乐东黎族自治县',
                'type' => 3,
                'full_name' => '海南省/乐东黎族自治县/乐东黎族自治县',
            ),
            271 => 
            array (
                'id' => 2272,
                'parent_id' => 2245,
                'code' => '469028',
                'name' => '陵水黎族自治县',
                'type' => 3,
                'full_name' => '海南省/陵水黎族自治县/陵水黎族自治县',
            ),
            272 => 
            array (
                'id' => 2273,
                'parent_id' => 2246,
                'code' => '469029',
                'name' => '保亭黎族苗族自治县',
                'type' => 3,
                'full_name' => '海南省/保亭黎族苗族自治县/保亭黎族苗族自治县',
            ),
            273 => 
            array (
                'id' => 2274,
                'parent_id' => 2247,
                'code' => '469030',
                'name' => '琼中黎族苗族自治县',
                'type' => 3,
                'full_name' => '海南省/琼中黎族苗族自治县/琼中黎族苗族自治县',
            ),
            274 => 
            array (
                'id' => 2275,
                'parent_id' => 23,
                'code' => '500100',
                'name' => '重庆城区',
                'type' => 2,
                'full_name' => '重庆市/重庆城区',
            ),
            275 => 
            array (
                'id' => 2276,
                'parent_id' => 23,
                'code' => '500200',
                'name' => '重庆郊县',
                'type' => 2,
                'full_name' => '重庆市/重庆郊县',
            ),
            276 => 
            array (
                'id' => 2277,
                'parent_id' => 2275,
                'code' => '500101',
                'name' => '万州区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/万州区',
            ),
            277 => 
            array (
                'id' => 2278,
                'parent_id' => 2275,
                'code' => '500102',
                'name' => '涪陵区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/涪陵区',
            ),
            278 => 
            array (
                'id' => 2279,
                'parent_id' => 2275,
                'code' => '500103',
                'name' => '渝中区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/渝中区',
            ),
            279 => 
            array (
                'id' => 2280,
                'parent_id' => 2275,
                'code' => '500104',
                'name' => '大渡口区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/大渡口区',
            ),
            280 => 
            array (
                'id' => 2281,
                'parent_id' => 2275,
                'code' => '500105',
                'name' => '江北区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/江北区',
            ),
            281 => 
            array (
                'id' => 2282,
                'parent_id' => 2275,
                'code' => '500106',
                'name' => '沙坪坝区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/沙坪坝区',
            ),
            282 => 
            array (
                'id' => 2283,
                'parent_id' => 2275,
                'code' => '500107',
                'name' => '九龙坡区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/九龙坡区',
            ),
            283 => 
            array (
                'id' => 2284,
                'parent_id' => 2275,
                'code' => '500108',
                'name' => '南岸区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/南岸区',
            ),
            284 => 
            array (
                'id' => 2285,
                'parent_id' => 2275,
                'code' => '500109',
                'name' => '北碚区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/北碚区',
            ),
            285 => 
            array (
                'id' => 2286,
                'parent_id' => 2275,
                'code' => '500110',
                'name' => '綦江区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/綦江区',
            ),
            286 => 
            array (
                'id' => 2287,
                'parent_id' => 2275,
                'code' => '500111',
                'name' => '大足区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/大足区',
            ),
            287 => 
            array (
                'id' => 2288,
                'parent_id' => 2275,
                'code' => '500112',
                'name' => '渝北区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/渝北区',
            ),
            288 => 
            array (
                'id' => 2289,
                'parent_id' => 2275,
                'code' => '500113',
                'name' => '巴南区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/巴南区',
            ),
            289 => 
            array (
                'id' => 2290,
                'parent_id' => 2275,
                'code' => '500114',
                'name' => '黔江区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/黔江区',
            ),
            290 => 
            array (
                'id' => 2291,
                'parent_id' => 2275,
                'code' => '500115',
                'name' => '长寿区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/长寿区',
            ),
            291 => 
            array (
                'id' => 2292,
                'parent_id' => 2275,
                'code' => '500116',
                'name' => '江津区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/江津区',
            ),
            292 => 
            array (
                'id' => 2293,
                'parent_id' => 2275,
                'code' => '500117',
                'name' => '合川区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/合川区',
            ),
            293 => 
            array (
                'id' => 2294,
                'parent_id' => 2275,
                'code' => '500118',
                'name' => '永川区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/永川区',
            ),
            294 => 
            array (
                'id' => 2295,
                'parent_id' => 2275,
                'code' => '500119',
                'name' => '南川区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/南川区',
            ),
            295 => 
            array (
                'id' => 2296,
                'parent_id' => 2275,
                'code' => '500120',
                'name' => '璧山区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/璧山区',
            ),
            296 => 
            array (
                'id' => 2297,
                'parent_id' => 2275,
                'code' => '500151',
                'name' => '铜梁区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/铜梁区',
            ),
            297 => 
            array (
                'id' => 2298,
                'parent_id' => 2275,
                'code' => '500152',
                'name' => '潼南区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/潼南区',
            ),
            298 => 
            array (
                'id' => 2299,
                'parent_id' => 2275,
                'code' => '500153',
                'name' => '荣昌区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/荣昌区',
            ),
            299 => 
            array (
                'id' => 2300,
                'parent_id' => 2275,
                'code' => '500154',
                'name' => '开州区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/开州区',
            ),
            300 => 
            array (
                'id' => 2301,
                'parent_id' => 2275,
                'code' => '500155',
                'name' => '梁平区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/梁平区',
            ),
            301 => 
            array (
                'id' => 2302,
                'parent_id' => 2275,
                'code' => '500156',
                'name' => '武隆区',
                'type' => 3,
                'full_name' => '重庆市/重庆城区/武隆区',
            ),
            302 => 
            array (
                'id' => 2303,
                'parent_id' => 2276,
                'code' => '500229',
                'name' => '城口县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/城口县',
            ),
            303 => 
            array (
                'id' => 2304,
                'parent_id' => 2276,
                'code' => '500230',
                'name' => '丰都县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/丰都县',
            ),
            304 => 
            array (
                'id' => 2305,
                'parent_id' => 2276,
                'code' => '500231',
                'name' => '垫江县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/垫江县',
            ),
            305 => 
            array (
                'id' => 2306,
                'parent_id' => 2276,
                'code' => '500233',
                'name' => '忠县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/忠县',
            ),
            306 => 
            array (
                'id' => 2307,
                'parent_id' => 2276,
                'code' => '500235',
                'name' => '云阳县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/云阳县',
            ),
            307 => 
            array (
                'id' => 2308,
                'parent_id' => 2276,
                'code' => '500236',
                'name' => '奉节县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/奉节县',
            ),
            308 => 
            array (
                'id' => 2309,
                'parent_id' => 2276,
                'code' => '500237',
                'name' => '巫山县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/巫山县',
            ),
            309 => 
            array (
                'id' => 2310,
                'parent_id' => 2276,
                'code' => '500238',
                'name' => '巫溪县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/巫溪县',
            ),
            310 => 
            array (
                'id' => 2311,
                'parent_id' => 2276,
                'code' => '500240',
                'name' => '石柱土家族自治县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/石柱土家族自治县',
            ),
            311 => 
            array (
                'id' => 2312,
                'parent_id' => 2276,
                'code' => '500241',
                'name' => '秀山土家族苗族自治县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/秀山土家族苗族自治县',
            ),
            312 => 
            array (
                'id' => 2313,
                'parent_id' => 2276,
                'code' => '500242',
                'name' => '酉阳土家族苗族自治县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/酉阳土家族苗族自治县',
            ),
            313 => 
            array (
                'id' => 2314,
                'parent_id' => 2276,
                'code' => '500243',
                'name' => '彭水苗族土家族自治县',
                'type' => 3,
                'full_name' => '重庆市/重庆郊县/彭水苗族土家族自治县',
            ),
            314 => 
            array (
                'id' => 2315,
                'parent_id' => 24,
                'code' => '510100',
                'name' => '成都市',
                'type' => 2,
                'full_name' => '四川省/成都市',
            ),
            315 => 
            array (
                'id' => 2316,
                'parent_id' => 24,
                'code' => '510300',
                'name' => '自贡市',
                'type' => 2,
                'full_name' => '四川省/自贡市',
            ),
            316 => 
            array (
                'id' => 2317,
                'parent_id' => 24,
                'code' => '510400',
                'name' => '攀枝花市',
                'type' => 2,
                'full_name' => '四川省/攀枝花市',
            ),
            317 => 
            array (
                'id' => 2318,
                'parent_id' => 24,
                'code' => '510500',
                'name' => '泸州市',
                'type' => 2,
                'full_name' => '四川省/泸州市',
            ),
            318 => 
            array (
                'id' => 2319,
                'parent_id' => 24,
                'code' => '510600',
                'name' => '德阳市',
                'type' => 2,
                'full_name' => '四川省/德阳市',
            ),
            319 => 
            array (
                'id' => 2320,
                'parent_id' => 24,
                'code' => '510700',
                'name' => '绵阳市',
                'type' => 2,
                'full_name' => '四川省/绵阳市',
            ),
            320 => 
            array (
                'id' => 2321,
                'parent_id' => 24,
                'code' => '510800',
                'name' => '广元市',
                'type' => 2,
                'full_name' => '四川省/广元市',
            ),
            321 => 
            array (
                'id' => 2322,
                'parent_id' => 24,
                'code' => '510900',
                'name' => '遂宁市',
                'type' => 2,
                'full_name' => '四川省/遂宁市',
            ),
            322 => 
            array (
                'id' => 2323,
                'parent_id' => 24,
                'code' => '511000',
                'name' => '内江市',
                'type' => 2,
                'full_name' => '四川省/内江市',
            ),
            323 => 
            array (
                'id' => 2324,
                'parent_id' => 24,
                'code' => '511100',
                'name' => '乐山市',
                'type' => 2,
                'full_name' => '四川省/乐山市',
            ),
            324 => 
            array (
                'id' => 2325,
                'parent_id' => 24,
                'code' => '511300',
                'name' => '南充市',
                'type' => 2,
                'full_name' => '四川省/南充市',
            ),
            325 => 
            array (
                'id' => 2326,
                'parent_id' => 24,
                'code' => '511400',
                'name' => '眉山市',
                'type' => 2,
                'full_name' => '四川省/眉山市',
            ),
            326 => 
            array (
                'id' => 2327,
                'parent_id' => 24,
                'code' => '511500',
                'name' => '宜宾市',
                'type' => 2,
                'full_name' => '四川省/宜宾市',
            ),
            327 => 
            array (
                'id' => 2328,
                'parent_id' => 24,
                'code' => '511600',
                'name' => '广安市',
                'type' => 2,
                'full_name' => '四川省/广安市',
            ),
            328 => 
            array (
                'id' => 2329,
                'parent_id' => 24,
                'code' => '511700',
                'name' => '达州市',
                'type' => 2,
                'full_name' => '四川省/达州市',
            ),
            329 => 
            array (
                'id' => 2330,
                'parent_id' => 24,
                'code' => '511800',
                'name' => '雅安市',
                'type' => 2,
                'full_name' => '四川省/雅安市',
            ),
            330 => 
            array (
                'id' => 2331,
                'parent_id' => 24,
                'code' => '511900',
                'name' => '巴中市',
                'type' => 2,
                'full_name' => '四川省/巴中市',
            ),
            331 => 
            array (
                'id' => 2332,
                'parent_id' => 24,
                'code' => '512000',
                'name' => '资阳市',
                'type' => 2,
                'full_name' => '四川省/资阳市',
            ),
            332 => 
            array (
                'id' => 2333,
                'parent_id' => 24,
                'code' => '513200',
                'name' => '阿坝藏族羌族自治州',
                'type' => 2,
                'full_name' => '四川省/阿坝藏族羌族自治州',
            ),
            333 => 
            array (
                'id' => 2334,
                'parent_id' => 24,
                'code' => '513300',
                'name' => '甘孜藏族自治州',
                'type' => 2,
                'full_name' => '四川省/甘孜藏族自治州',
            ),
            334 => 
            array (
                'id' => 2335,
                'parent_id' => 24,
                'code' => '513400',
                'name' => '凉山彝族自治州',
                'type' => 2,
                'full_name' => '四川省/凉山彝族自治州',
            ),
            335 => 
            array (
                'id' => 2336,
                'parent_id' => 2315,
                'code' => '510104',
                'name' => '锦江区',
                'type' => 3,
                'full_name' => '四川省/成都市/锦江区',
            ),
            336 => 
            array (
                'id' => 2337,
                'parent_id' => 2315,
                'code' => '510105',
                'name' => '青羊区',
                'type' => 3,
                'full_name' => '四川省/成都市/青羊区',
            ),
            337 => 
            array (
                'id' => 2338,
                'parent_id' => 2315,
                'code' => '510106',
                'name' => '金牛区',
                'type' => 3,
                'full_name' => '四川省/成都市/金牛区',
            ),
            338 => 
            array (
                'id' => 2339,
                'parent_id' => 2315,
                'code' => '510107',
                'name' => '武侯区',
                'type' => 3,
                'full_name' => '四川省/成都市/武侯区',
            ),
            339 => 
            array (
                'id' => 2340,
                'parent_id' => 2315,
                'code' => '510108',
                'name' => '成华区',
                'type' => 3,
                'full_name' => '四川省/成都市/成华区',
            ),
            340 => 
            array (
                'id' => 2341,
                'parent_id' => 2315,
                'code' => '510112',
                'name' => '龙泉驿区',
                'type' => 3,
                'full_name' => '四川省/成都市/龙泉驿区',
            ),
            341 => 
            array (
                'id' => 2342,
                'parent_id' => 2315,
                'code' => '510113',
                'name' => '青白江区',
                'type' => 3,
                'full_name' => '四川省/成都市/青白江区',
            ),
            342 => 
            array (
                'id' => 2343,
                'parent_id' => 2315,
                'code' => '510114',
                'name' => '新都区',
                'type' => 3,
                'full_name' => '四川省/成都市/新都区',
            ),
            343 => 
            array (
                'id' => 2344,
                'parent_id' => 2315,
                'code' => '510115',
                'name' => '温江区',
                'type' => 3,
                'full_name' => '四川省/成都市/温江区',
            ),
            344 => 
            array (
                'id' => 2345,
                'parent_id' => 2315,
                'code' => '510116',
                'name' => '双流区',
                'type' => 3,
                'full_name' => '四川省/成都市/双流区',
            ),
            345 => 
            array (
                'id' => 2346,
                'parent_id' => 2315,
                'code' => '510117',
                'name' => '郫都区',
                'type' => 3,
                'full_name' => '四川省/成都市/郫都区',
            ),
            346 => 
            array (
                'id' => 2347,
                'parent_id' => 2315,
                'code' => '510121',
                'name' => '金堂县',
                'type' => 3,
                'full_name' => '四川省/成都市/金堂县',
            ),
            347 => 
            array (
                'id' => 2348,
                'parent_id' => 2315,
                'code' => '510129',
                'name' => '大邑县',
                'type' => 3,
                'full_name' => '四川省/成都市/大邑县',
            ),
            348 => 
            array (
                'id' => 2349,
                'parent_id' => 2315,
                'code' => '510131',
                'name' => '蒲江县',
                'type' => 3,
                'full_name' => '四川省/成都市/蒲江县',
            ),
            349 => 
            array (
                'id' => 2350,
                'parent_id' => 2315,
                'code' => '510132',
                'name' => '新津县',
                'type' => 3,
                'full_name' => '四川省/成都市/新津县',
            ),
            350 => 
            array (
                'id' => 2351,
                'parent_id' => 2315,
                'code' => '510181',
                'name' => '都江堰市',
                'type' => 3,
                'full_name' => '四川省/成都市/都江堰市',
            ),
            351 => 
            array (
                'id' => 2352,
                'parent_id' => 2315,
                'code' => '510182',
                'name' => '彭州市',
                'type' => 3,
                'full_name' => '四川省/成都市/彭州市',
            ),
            352 => 
            array (
                'id' => 2353,
                'parent_id' => 2315,
                'code' => '510183',
                'name' => '邛崃市',
                'type' => 3,
                'full_name' => '四川省/成都市/邛崃市',
            ),
            353 => 
            array (
                'id' => 2354,
                'parent_id' => 2315,
                'code' => '510184',
                'name' => '崇州市',
                'type' => 3,
                'full_name' => '四川省/成都市/崇州市',
            ),
            354 => 
            array (
                'id' => 2355,
                'parent_id' => 2315,
                'code' => '510185',
                'name' => '简阳市',
                'type' => 3,
                'full_name' => '四川省/成都市/简阳市',
            ),
            355 => 
            array (
                'id' => 2356,
                'parent_id' => 2316,
                'code' => '510302',
                'name' => '自流井区',
                'type' => 3,
                'full_name' => '四川省/自贡市/自流井区',
            ),
            356 => 
            array (
                'id' => 2357,
                'parent_id' => 2316,
                'code' => '510303',
                'name' => '贡井区',
                'type' => 3,
                'full_name' => '四川省/自贡市/贡井区',
            ),
            357 => 
            array (
                'id' => 2358,
                'parent_id' => 2316,
                'code' => '510304',
                'name' => '大安区',
                'type' => 3,
                'full_name' => '四川省/自贡市/大安区',
            ),
            358 => 
            array (
                'id' => 2359,
                'parent_id' => 2316,
                'code' => '510311',
                'name' => '沿滩区',
                'type' => 3,
                'full_name' => '四川省/自贡市/沿滩区',
            ),
            359 => 
            array (
                'id' => 2360,
                'parent_id' => 2316,
                'code' => '510321',
                'name' => '荣县',
                'type' => 3,
                'full_name' => '四川省/自贡市/荣县',
            ),
            360 => 
            array (
                'id' => 2361,
                'parent_id' => 2316,
                'code' => '510322',
                'name' => '富顺县',
                'type' => 3,
                'full_name' => '四川省/自贡市/富顺县',
            ),
            361 => 
            array (
                'id' => 2362,
                'parent_id' => 2317,
                'code' => '510402',
                'name' => '东区',
                'type' => 3,
                'full_name' => '四川省/攀枝花市/东区',
            ),
            362 => 
            array (
                'id' => 2363,
                'parent_id' => 2317,
                'code' => '510403',
                'name' => '西区',
                'type' => 3,
                'full_name' => '四川省/攀枝花市/西区',
            ),
            363 => 
            array (
                'id' => 2364,
                'parent_id' => 2317,
                'code' => '510411',
                'name' => '仁和区',
                'type' => 3,
                'full_name' => '四川省/攀枝花市/仁和区',
            ),
            364 => 
            array (
                'id' => 2365,
                'parent_id' => 2317,
                'code' => '510421',
                'name' => '米易县',
                'type' => 3,
                'full_name' => '四川省/攀枝花市/米易县',
            ),
            365 => 
            array (
                'id' => 2366,
                'parent_id' => 2317,
                'code' => '510422',
                'name' => '盐边县',
                'type' => 3,
                'full_name' => '四川省/攀枝花市/盐边县',
            ),
            366 => 
            array (
                'id' => 2367,
                'parent_id' => 2318,
                'code' => '510502',
                'name' => '江阳区',
                'type' => 3,
                'full_name' => '四川省/泸州市/江阳区',
            ),
            367 => 
            array (
                'id' => 2368,
                'parent_id' => 2318,
                'code' => '510503',
                'name' => '纳溪区',
                'type' => 3,
                'full_name' => '四川省/泸州市/纳溪区',
            ),
            368 => 
            array (
                'id' => 2369,
                'parent_id' => 2318,
                'code' => '510504',
                'name' => '龙马潭区',
                'type' => 3,
                'full_name' => '四川省/泸州市/龙马潭区',
            ),
            369 => 
            array (
                'id' => 2370,
                'parent_id' => 2318,
                'code' => '510521',
                'name' => '泸县',
                'type' => 3,
                'full_name' => '四川省/泸州市/泸县',
            ),
            370 => 
            array (
                'id' => 2371,
                'parent_id' => 2318,
                'code' => '510522',
                'name' => '合江县',
                'type' => 3,
                'full_name' => '四川省/泸州市/合江县',
            ),
            371 => 
            array (
                'id' => 2372,
                'parent_id' => 2318,
                'code' => '510524',
                'name' => '叙永县',
                'type' => 3,
                'full_name' => '四川省/泸州市/叙永县',
            ),
            372 => 
            array (
                'id' => 2373,
                'parent_id' => 2318,
                'code' => '510525',
                'name' => '古蔺县',
                'type' => 3,
                'full_name' => '四川省/泸州市/古蔺县',
            ),
            373 => 
            array (
                'id' => 2374,
                'parent_id' => 2319,
                'code' => '510603',
                'name' => '旌阳区',
                'type' => 3,
                'full_name' => '四川省/德阳市/旌阳区',
            ),
            374 => 
            array (
                'id' => 2375,
                'parent_id' => 2319,
                'code' => '510623',
                'name' => '中江县',
                'type' => 3,
                'full_name' => '四川省/德阳市/中江县',
            ),
            375 => 
            array (
                'id' => 2376,
                'parent_id' => 2319,
                'code' => '510626',
                'name' => '罗江区',
                'type' => 3,
                'full_name' => '四川省/德阳市/罗江区',
            ),
            376 => 
            array (
                'id' => 2377,
                'parent_id' => 2319,
                'code' => '510681',
                'name' => '广汉市',
                'type' => 3,
                'full_name' => '四川省/德阳市/广汉市',
            ),
            377 => 
            array (
                'id' => 2378,
                'parent_id' => 2319,
                'code' => '510682',
                'name' => '什邡市',
                'type' => 3,
                'full_name' => '四川省/德阳市/什邡市',
            ),
            378 => 
            array (
                'id' => 2379,
                'parent_id' => 2319,
                'code' => '510683',
                'name' => '绵竹市',
                'type' => 3,
                'full_name' => '四川省/德阳市/绵竹市',
            ),
            379 => 
            array (
                'id' => 2380,
                'parent_id' => 2320,
                'code' => '510703',
                'name' => '涪城区',
                'type' => 3,
                'full_name' => '四川省/绵阳市/涪城区',
            ),
            380 => 
            array (
                'id' => 2381,
                'parent_id' => 2320,
                'code' => '510704',
                'name' => '游仙区',
                'type' => 3,
                'full_name' => '四川省/绵阳市/游仙区',
            ),
            381 => 
            array (
                'id' => 2382,
                'parent_id' => 2320,
                'code' => '510705',
                'name' => '安州区',
                'type' => 3,
                'full_name' => '四川省/绵阳市/安州区',
            ),
            382 => 
            array (
                'id' => 2383,
                'parent_id' => 2320,
                'code' => '510722',
                'name' => '三台县',
                'type' => 3,
                'full_name' => '四川省/绵阳市/三台县',
            ),
            383 => 
            array (
                'id' => 2384,
                'parent_id' => 2320,
                'code' => '510723',
                'name' => '盐亭县',
                'type' => 3,
                'full_name' => '四川省/绵阳市/盐亭县',
            ),
            384 => 
            array (
                'id' => 2385,
                'parent_id' => 2320,
                'code' => '510725',
                'name' => '梓潼县',
                'type' => 3,
                'full_name' => '四川省/绵阳市/梓潼县',
            ),
            385 => 
            array (
                'id' => 2386,
                'parent_id' => 2320,
                'code' => '510726',
                'name' => '北川羌族自治县',
                'type' => 3,
                'full_name' => '四川省/绵阳市/北川羌族自治县',
            ),
            386 => 
            array (
                'id' => 2387,
                'parent_id' => 2320,
                'code' => '510727',
                'name' => '平武县',
                'type' => 3,
                'full_name' => '四川省/绵阳市/平武县',
            ),
            387 => 
            array (
                'id' => 2388,
                'parent_id' => 2320,
                'code' => '510781',
                'name' => '江油市',
                'type' => 3,
                'full_name' => '四川省/绵阳市/江油市',
            ),
            388 => 
            array (
                'id' => 2389,
                'parent_id' => 2321,
                'code' => '510802',
                'name' => '利州区',
                'type' => 3,
                'full_name' => '四川省/广元市/利州区',
            ),
            389 => 
            array (
                'id' => 2390,
                'parent_id' => 2321,
                'code' => '510811',
                'name' => '昭化区',
                'type' => 3,
                'full_name' => '四川省/广元市/昭化区',
            ),
            390 => 
            array (
                'id' => 2391,
                'parent_id' => 2321,
                'code' => '510812',
                'name' => '朝天区',
                'type' => 3,
                'full_name' => '四川省/广元市/朝天区',
            ),
            391 => 
            array (
                'id' => 2392,
                'parent_id' => 2321,
                'code' => '510821',
                'name' => '旺苍县',
                'type' => 3,
                'full_name' => '四川省/广元市/旺苍县',
            ),
            392 => 
            array (
                'id' => 2393,
                'parent_id' => 2321,
                'code' => '510822',
                'name' => '青川县',
                'type' => 3,
                'full_name' => '四川省/广元市/青川县',
            ),
            393 => 
            array (
                'id' => 2394,
                'parent_id' => 2321,
                'code' => '510823',
                'name' => '剑阁县',
                'type' => 3,
                'full_name' => '四川省/广元市/剑阁县',
            ),
            394 => 
            array (
                'id' => 2395,
                'parent_id' => 2321,
                'code' => '510824',
                'name' => '苍溪县',
                'type' => 3,
                'full_name' => '四川省/广元市/苍溪县',
            ),
            395 => 
            array (
                'id' => 2396,
                'parent_id' => 2322,
                'code' => '510903',
                'name' => '船山区',
                'type' => 3,
                'full_name' => '四川省/遂宁市/船山区',
            ),
            396 => 
            array (
                'id' => 2397,
                'parent_id' => 2322,
                'code' => '510904',
                'name' => '安居区',
                'type' => 3,
                'full_name' => '四川省/遂宁市/安居区',
            ),
            397 => 
            array (
                'id' => 2398,
                'parent_id' => 2322,
                'code' => '510921',
                'name' => '蓬溪县',
                'type' => 3,
                'full_name' => '四川省/遂宁市/蓬溪县',
            ),
            398 => 
            array (
                'id' => 2399,
                'parent_id' => 2322,
                'code' => '510922',
                'name' => '射洪县',
                'type' => 3,
                'full_name' => '四川省/遂宁市/射洪县',
            ),
            399 => 
            array (
                'id' => 2400,
                'parent_id' => 2322,
                'code' => '510923',
                'name' => '大英县',
                'type' => 3,
                'full_name' => '四川省/遂宁市/大英县',
            ),
            400 => 
            array (
                'id' => 2401,
                'parent_id' => 2323,
                'code' => '511002',
                'name' => '市中区',
                'type' => 3,
                'full_name' => '四川省/内江市/市中区',
            ),
            401 => 
            array (
                'id' => 2402,
                'parent_id' => 2323,
                'code' => '511011',
                'name' => '东兴区',
                'type' => 3,
                'full_name' => '四川省/内江市/东兴区',
            ),
            402 => 
            array (
                'id' => 2403,
                'parent_id' => 2323,
                'code' => '511024',
                'name' => '威远县',
                'type' => 3,
                'full_name' => '四川省/内江市/威远县',
            ),
            403 => 
            array (
                'id' => 2404,
                'parent_id' => 2323,
                'code' => '511025',
                'name' => '资中县',
                'type' => 3,
                'full_name' => '四川省/内江市/资中县',
            ),
            404 => 
            array (
                'id' => 2405,
                'parent_id' => 2323,
                'code' => '511083',
                'name' => '隆昌市',
                'type' => 3,
                'full_name' => '四川省/内江市/隆昌市',
            ),
            405 => 
            array (
                'id' => 2406,
                'parent_id' => 2324,
                'code' => '511102',
                'name' => '市中区',
                'type' => 3,
                'full_name' => '四川省/乐山市/市中区',
            ),
            406 => 
            array (
                'id' => 2407,
                'parent_id' => 2324,
                'code' => '511111',
                'name' => '沙湾区',
                'type' => 3,
                'full_name' => '四川省/乐山市/沙湾区',
            ),
            407 => 
            array (
                'id' => 2408,
                'parent_id' => 2324,
                'code' => '511112',
                'name' => '五通桥区',
                'type' => 3,
                'full_name' => '四川省/乐山市/五通桥区',
            ),
            408 => 
            array (
                'id' => 2409,
                'parent_id' => 2324,
                'code' => '511113',
                'name' => '金口河区',
                'type' => 3,
                'full_name' => '四川省/乐山市/金口河区',
            ),
            409 => 
            array (
                'id' => 2410,
                'parent_id' => 2324,
                'code' => '511123',
                'name' => '犍为县',
                'type' => 3,
                'full_name' => '四川省/乐山市/犍为县',
            ),
            410 => 
            array (
                'id' => 2411,
                'parent_id' => 2324,
                'code' => '511124',
                'name' => '井研县',
                'type' => 3,
                'full_name' => '四川省/乐山市/井研县',
            ),
            411 => 
            array (
                'id' => 2412,
                'parent_id' => 2324,
                'code' => '511126',
                'name' => '夹江县',
                'type' => 3,
                'full_name' => '四川省/乐山市/夹江县',
            ),
            412 => 
            array (
                'id' => 2413,
                'parent_id' => 2324,
                'code' => '511129',
                'name' => '沐川县',
                'type' => 3,
                'full_name' => '四川省/乐山市/沐川县',
            ),
            413 => 
            array (
                'id' => 2414,
                'parent_id' => 2324,
                'code' => '511132',
                'name' => '峨边彝族自治县',
                'type' => 3,
                'full_name' => '四川省/乐山市/峨边彝族自治县',
            ),
            414 => 
            array (
                'id' => 2415,
                'parent_id' => 2324,
                'code' => '511133',
                'name' => '马边彝族自治县',
                'type' => 3,
                'full_name' => '四川省/乐山市/马边彝族自治县',
            ),
            415 => 
            array (
                'id' => 2416,
                'parent_id' => 2324,
                'code' => '511181',
                'name' => '峨眉山市',
                'type' => 3,
                'full_name' => '四川省/乐山市/峨眉山市',
            ),
            416 => 
            array (
                'id' => 2417,
                'parent_id' => 2325,
                'code' => '511302',
                'name' => '顺庆区',
                'type' => 3,
                'full_name' => '四川省/南充市/顺庆区',
            ),
            417 => 
            array (
                'id' => 2418,
                'parent_id' => 2325,
                'code' => '511303',
                'name' => '高坪区',
                'type' => 3,
                'full_name' => '四川省/南充市/高坪区',
            ),
            418 => 
            array (
                'id' => 2419,
                'parent_id' => 2325,
                'code' => '511304',
                'name' => '嘉陵区',
                'type' => 3,
                'full_name' => '四川省/南充市/嘉陵区',
            ),
            419 => 
            array (
                'id' => 2420,
                'parent_id' => 2325,
                'code' => '511321',
                'name' => '南部县',
                'type' => 3,
                'full_name' => '四川省/南充市/南部县',
            ),
            420 => 
            array (
                'id' => 2421,
                'parent_id' => 2325,
                'code' => '511322',
                'name' => '营山县',
                'type' => 3,
                'full_name' => '四川省/南充市/营山县',
            ),
            421 => 
            array (
                'id' => 2422,
                'parent_id' => 2325,
                'code' => '511323',
                'name' => '蓬安县',
                'type' => 3,
                'full_name' => '四川省/南充市/蓬安县',
            ),
            422 => 
            array (
                'id' => 2423,
                'parent_id' => 2325,
                'code' => '511324',
                'name' => '仪陇县',
                'type' => 3,
                'full_name' => '四川省/南充市/仪陇县',
            ),
            423 => 
            array (
                'id' => 2424,
                'parent_id' => 2325,
                'code' => '511325',
                'name' => '西充县',
                'type' => 3,
                'full_name' => '四川省/南充市/西充县',
            ),
            424 => 
            array (
                'id' => 2425,
                'parent_id' => 2325,
                'code' => '511381',
                'name' => '阆中市',
                'type' => 3,
                'full_name' => '四川省/南充市/阆中市',
            ),
            425 => 
            array (
                'id' => 2426,
                'parent_id' => 2326,
                'code' => '511402',
                'name' => '东坡区',
                'type' => 3,
                'full_name' => '四川省/眉山市/东坡区',
            ),
            426 => 
            array (
                'id' => 2427,
                'parent_id' => 2326,
                'code' => '511403',
                'name' => '彭山区',
                'type' => 3,
                'full_name' => '四川省/眉山市/彭山区',
            ),
            427 => 
            array (
                'id' => 2428,
                'parent_id' => 2326,
                'code' => '511421',
                'name' => '仁寿县',
                'type' => 3,
                'full_name' => '四川省/眉山市/仁寿县',
            ),
            428 => 
            array (
                'id' => 2429,
                'parent_id' => 2326,
                'code' => '511423',
                'name' => '洪雅县',
                'type' => 3,
                'full_name' => '四川省/眉山市/洪雅县',
            ),
            429 => 
            array (
                'id' => 2430,
                'parent_id' => 2326,
                'code' => '511424',
                'name' => '丹棱县',
                'type' => 3,
                'full_name' => '四川省/眉山市/丹棱县',
            ),
            430 => 
            array (
                'id' => 2431,
                'parent_id' => 2326,
                'code' => '511425',
                'name' => '青神县',
                'type' => 3,
                'full_name' => '四川省/眉山市/青神县',
            ),
            431 => 
            array (
                'id' => 2432,
                'parent_id' => 2327,
                'code' => '511502',
                'name' => '翠屏区',
                'type' => 3,
                'full_name' => '四川省/宜宾市/翠屏区',
            ),
            432 => 
            array (
                'id' => 2433,
                'parent_id' => 2327,
                'code' => '511503',
                'name' => '南溪区',
                'type' => 3,
                'full_name' => '四川省/宜宾市/南溪区',
            ),
            433 => 
            array (
                'id' => 2434,
                'parent_id' => 2327,
                'code' => '511521',
                'name' => '宜宾县',
                'type' => 3,
                'full_name' => '四川省/宜宾市/宜宾县',
            ),
            434 => 
            array (
                'id' => 2435,
                'parent_id' => 2327,
                'code' => '511523',
                'name' => '江安县',
                'type' => 3,
                'full_name' => '四川省/宜宾市/江安县',
            ),
            435 => 
            array (
                'id' => 2436,
                'parent_id' => 2327,
                'code' => '511524',
                'name' => '长宁县',
                'type' => 3,
                'full_name' => '四川省/宜宾市/长宁县',
            ),
            436 => 
            array (
                'id' => 2437,
                'parent_id' => 2327,
                'code' => '511525',
                'name' => '高县',
                'type' => 3,
                'full_name' => '四川省/宜宾市/高县',
            ),
            437 => 
            array (
                'id' => 2438,
                'parent_id' => 2327,
                'code' => '511526',
                'name' => '珙县',
                'type' => 3,
                'full_name' => '四川省/宜宾市/珙县',
            ),
            438 => 
            array (
                'id' => 2439,
                'parent_id' => 2327,
                'code' => '511527',
                'name' => '筠连县',
                'type' => 3,
                'full_name' => '四川省/宜宾市/筠连县',
            ),
            439 => 
            array (
                'id' => 2440,
                'parent_id' => 2327,
                'code' => '511528',
                'name' => '兴文县',
                'type' => 3,
                'full_name' => '四川省/宜宾市/兴文县',
            ),
            440 => 
            array (
                'id' => 2441,
                'parent_id' => 2327,
                'code' => '511529',
                'name' => '屏山县',
                'type' => 3,
                'full_name' => '四川省/宜宾市/屏山县',
            ),
            441 => 
            array (
                'id' => 2442,
                'parent_id' => 2328,
                'code' => '511602',
                'name' => '广安区',
                'type' => 3,
                'full_name' => '四川省/广安市/广安区',
            ),
            442 => 
            array (
                'id' => 2443,
                'parent_id' => 2328,
                'code' => '511603',
                'name' => '前锋区',
                'type' => 3,
                'full_name' => '四川省/广安市/前锋区',
            ),
            443 => 
            array (
                'id' => 2444,
                'parent_id' => 2328,
                'code' => '511621',
                'name' => '岳池县',
                'type' => 3,
                'full_name' => '四川省/广安市/岳池县',
            ),
            444 => 
            array (
                'id' => 2445,
                'parent_id' => 2328,
                'code' => '511622',
                'name' => '武胜县',
                'type' => 3,
                'full_name' => '四川省/广安市/武胜县',
            ),
            445 => 
            array (
                'id' => 2446,
                'parent_id' => 2328,
                'code' => '511623',
                'name' => '邻水县',
                'type' => 3,
                'full_name' => '四川省/广安市/邻水县',
            ),
            446 => 
            array (
                'id' => 2447,
                'parent_id' => 2328,
                'code' => '511681',
                'name' => '华蓥市',
                'type' => 3,
                'full_name' => '四川省/广安市/华蓥市',
            ),
            447 => 
            array (
                'id' => 2448,
                'parent_id' => 2329,
                'code' => '511702',
                'name' => '通川区',
                'type' => 3,
                'full_name' => '四川省/达州市/通川区',
            ),
            448 => 
            array (
                'id' => 2449,
                'parent_id' => 2329,
                'code' => '511703',
                'name' => '达川区',
                'type' => 3,
                'full_name' => '四川省/达州市/达川区',
            ),
            449 => 
            array (
                'id' => 2450,
                'parent_id' => 2329,
                'code' => '511722',
                'name' => '宣汉县',
                'type' => 3,
                'full_name' => '四川省/达州市/宣汉县',
            ),
            450 => 
            array (
                'id' => 2451,
                'parent_id' => 2329,
                'code' => '511723',
                'name' => '开江县',
                'type' => 3,
                'full_name' => '四川省/达州市/开江县',
            ),
            451 => 
            array (
                'id' => 2452,
                'parent_id' => 2329,
                'code' => '511724',
                'name' => '大竹县',
                'type' => 3,
                'full_name' => '四川省/达州市/大竹县',
            ),
            452 => 
            array (
                'id' => 2453,
                'parent_id' => 2329,
                'code' => '511725',
                'name' => '渠县',
                'type' => 3,
                'full_name' => '四川省/达州市/渠县',
            ),
            453 => 
            array (
                'id' => 2454,
                'parent_id' => 2329,
                'code' => '511781',
                'name' => '万源市',
                'type' => 3,
                'full_name' => '四川省/达州市/万源市',
            ),
            454 => 
            array (
                'id' => 2455,
                'parent_id' => 2330,
                'code' => '511802',
                'name' => '雨城区',
                'type' => 3,
                'full_name' => '四川省/雅安市/雨城区',
            ),
            455 => 
            array (
                'id' => 2456,
                'parent_id' => 2330,
                'code' => '511803',
                'name' => '名山区',
                'type' => 3,
                'full_name' => '四川省/雅安市/名山区',
            ),
            456 => 
            array (
                'id' => 2457,
                'parent_id' => 2330,
                'code' => '511822',
                'name' => '荥经县',
                'type' => 3,
                'full_name' => '四川省/雅安市/荥经县',
            ),
            457 => 
            array (
                'id' => 2458,
                'parent_id' => 2330,
                'code' => '511823',
                'name' => '汉源县',
                'type' => 3,
                'full_name' => '四川省/雅安市/汉源县',
            ),
            458 => 
            array (
                'id' => 2459,
                'parent_id' => 2330,
                'code' => '511824',
                'name' => '石棉县',
                'type' => 3,
                'full_name' => '四川省/雅安市/石棉县',
            ),
            459 => 
            array (
                'id' => 2460,
                'parent_id' => 2330,
                'code' => '511825',
                'name' => '天全县',
                'type' => 3,
                'full_name' => '四川省/雅安市/天全县',
            ),
            460 => 
            array (
                'id' => 2461,
                'parent_id' => 2330,
                'code' => '511826',
                'name' => '芦山县',
                'type' => 3,
                'full_name' => '四川省/雅安市/芦山县',
            ),
            461 => 
            array (
                'id' => 2462,
                'parent_id' => 2330,
                'code' => '511827',
                'name' => '宝兴县',
                'type' => 3,
                'full_name' => '四川省/雅安市/宝兴县',
            ),
            462 => 
            array (
                'id' => 2463,
                'parent_id' => 2331,
                'code' => '511902',
                'name' => '巴州区',
                'type' => 3,
                'full_name' => '四川省/巴中市/巴州区',
            ),
            463 => 
            array (
                'id' => 2464,
                'parent_id' => 2331,
                'code' => '511903',
                'name' => '恩阳区',
                'type' => 3,
                'full_name' => '四川省/巴中市/恩阳区',
            ),
            464 => 
            array (
                'id' => 2465,
                'parent_id' => 2331,
                'code' => '511921',
                'name' => '通江县',
                'type' => 3,
                'full_name' => '四川省/巴中市/通江县',
            ),
            465 => 
            array (
                'id' => 2466,
                'parent_id' => 2331,
                'code' => '511922',
                'name' => '南江县',
                'type' => 3,
                'full_name' => '四川省/巴中市/南江县',
            ),
            466 => 
            array (
                'id' => 2467,
                'parent_id' => 2331,
                'code' => '511923',
                'name' => '平昌县',
                'type' => 3,
                'full_name' => '四川省/巴中市/平昌县',
            ),
            467 => 
            array (
                'id' => 2468,
                'parent_id' => 2332,
                'code' => '512002',
                'name' => '雁江区',
                'type' => 3,
                'full_name' => '四川省/资阳市/雁江区',
            ),
            468 => 
            array (
                'id' => 2469,
                'parent_id' => 2332,
                'code' => '512021',
                'name' => '安岳县',
                'type' => 3,
                'full_name' => '四川省/资阳市/安岳县',
            ),
            469 => 
            array (
                'id' => 2470,
                'parent_id' => 2332,
                'code' => '512022',
                'name' => '乐至县',
                'type' => 3,
                'full_name' => '四川省/资阳市/乐至县',
            ),
            470 => 
            array (
                'id' => 2471,
                'parent_id' => 2333,
                'code' => '513201',
                'name' => '马尔康市',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/马尔康市',
            ),
            471 => 
            array (
                'id' => 2472,
                'parent_id' => 2333,
                'code' => '513221',
                'name' => '汶川县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/汶川县',
            ),
            472 => 
            array (
                'id' => 2473,
                'parent_id' => 2333,
                'code' => '513222',
                'name' => '理县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/理县',
            ),
            473 => 
            array (
                'id' => 2474,
                'parent_id' => 2333,
                'code' => '513223',
                'name' => '茂县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/茂县',
            ),
            474 => 
            array (
                'id' => 2475,
                'parent_id' => 2333,
                'code' => '513224',
                'name' => '松潘县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/松潘县',
            ),
            475 => 
            array (
                'id' => 2476,
                'parent_id' => 2333,
                'code' => '513225',
                'name' => '九寨沟市',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/九寨沟市',
            ),
            476 => 
            array (
                'id' => 2477,
                'parent_id' => 2333,
                'code' => '513226',
                'name' => '金川县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/金川县',
            ),
            477 => 
            array (
                'id' => 2478,
                'parent_id' => 2333,
                'code' => '513227',
                'name' => '小金县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/小金县',
            ),
            478 => 
            array (
                'id' => 2479,
                'parent_id' => 2333,
                'code' => '513228',
                'name' => '黑水县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/黑水县',
            ),
            479 => 
            array (
                'id' => 2480,
                'parent_id' => 2333,
                'code' => '513230',
                'name' => '壤塘县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/壤塘县',
            ),
            480 => 
            array (
                'id' => 2481,
                'parent_id' => 2333,
                'code' => '513231',
                'name' => '阿坝县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/阿坝县',
            ),
            481 => 
            array (
                'id' => 2482,
                'parent_id' => 2333,
                'code' => '513232',
                'name' => '若尔盖县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/若尔盖县',
            ),
            482 => 
            array (
                'id' => 2483,
                'parent_id' => 2333,
                'code' => '513233',
                'name' => '红原县',
                'type' => 3,
                'full_name' => '四川省/阿坝藏族羌族自治州/红原县',
            ),
            483 => 
            array (
                'id' => 2484,
                'parent_id' => 2334,
                'code' => '513301',
                'name' => '康定市',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/康定市',
            ),
            484 => 
            array (
                'id' => 2485,
                'parent_id' => 2334,
                'code' => '513322',
                'name' => '泸定县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/泸定县',
            ),
            485 => 
            array (
                'id' => 2486,
                'parent_id' => 2334,
                'code' => '513323',
                'name' => '丹巴县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/丹巴县',
            ),
            486 => 
            array (
                'id' => 2487,
                'parent_id' => 2334,
                'code' => '513324',
                'name' => '九龙县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/九龙县',
            ),
            487 => 
            array (
                'id' => 2488,
                'parent_id' => 2334,
                'code' => '513325',
                'name' => '雅江县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/雅江县',
            ),
            488 => 
            array (
                'id' => 2489,
                'parent_id' => 2334,
                'code' => '513326',
                'name' => '道孚县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/道孚县',
            ),
            489 => 
            array (
                'id' => 2490,
                'parent_id' => 2334,
                'code' => '513327',
                'name' => '炉霍县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/炉霍县',
            ),
            490 => 
            array (
                'id' => 2491,
                'parent_id' => 2334,
                'code' => '513328',
                'name' => '甘孜县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/甘孜县',
            ),
            491 => 
            array (
                'id' => 2492,
                'parent_id' => 2334,
                'code' => '513329',
                'name' => '新龙县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/新龙县',
            ),
            492 => 
            array (
                'id' => 2493,
                'parent_id' => 2334,
                'code' => '513330',
                'name' => '德格县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/德格县',
            ),
            493 => 
            array (
                'id' => 2494,
                'parent_id' => 2334,
                'code' => '513331',
                'name' => '白玉县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/白玉县',
            ),
            494 => 
            array (
                'id' => 2495,
                'parent_id' => 2334,
                'code' => '513332',
                'name' => '石渠县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/石渠县',
            ),
            495 => 
            array (
                'id' => 2496,
                'parent_id' => 2334,
                'code' => '513333',
                'name' => '色达县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/色达县',
            ),
            496 => 
            array (
                'id' => 2497,
                'parent_id' => 2334,
                'code' => '513334',
                'name' => '理塘县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/理塘县',
            ),
            497 => 
            array (
                'id' => 2498,
                'parent_id' => 2334,
                'code' => '513335',
                'name' => '巴塘县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/巴塘县',
            ),
            498 => 
            array (
                'id' => 2499,
                'parent_id' => 2334,
                'code' => '513336',
                'name' => '乡城县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/乡城县',
            ),
            499 => 
            array (
                'id' => 2500,
                'parent_id' => 2334,
                'code' => '513337',
                'name' => '稻城县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/稻城县',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'parent_id' => 2334,
                'code' => '513338',
                'name' => '得荣县',
                'type' => 3,
                'full_name' => '四川省/甘孜藏族自治州/得荣县',
            ),
            1 => 
            array (
                'id' => 2502,
                'parent_id' => 2335,
                'code' => '513401',
                'name' => '西昌市',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/西昌市',
            ),
            2 => 
            array (
                'id' => 2503,
                'parent_id' => 2335,
                'code' => '513422',
                'name' => '木里藏族自治县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/木里藏族自治县',
            ),
            3 => 
            array (
                'id' => 2504,
                'parent_id' => 2335,
                'code' => '513423',
                'name' => '盐源县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/盐源县',
            ),
            4 => 
            array (
                'id' => 2505,
                'parent_id' => 2335,
                'code' => '513424',
                'name' => '德昌县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/德昌县',
            ),
            5 => 
            array (
                'id' => 2506,
                'parent_id' => 2335,
                'code' => '513425',
                'name' => '会理县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/会理县',
            ),
            6 => 
            array (
                'id' => 2507,
                'parent_id' => 2335,
                'code' => '513426',
                'name' => '会东县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/会东县',
            ),
            7 => 
            array (
                'id' => 2508,
                'parent_id' => 2335,
                'code' => '513427',
                'name' => '宁南县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/宁南县',
            ),
            8 => 
            array (
                'id' => 2509,
                'parent_id' => 2335,
                'code' => '513428',
                'name' => '普格县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/普格县',
            ),
            9 => 
            array (
                'id' => 2510,
                'parent_id' => 2335,
                'code' => '513429',
                'name' => '布拖县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/布拖县',
            ),
            10 => 
            array (
                'id' => 2511,
                'parent_id' => 2335,
                'code' => '513430',
                'name' => '金阳县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/金阳县',
            ),
            11 => 
            array (
                'id' => 2512,
                'parent_id' => 2335,
                'code' => '513431',
                'name' => '昭觉县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/昭觉县',
            ),
            12 => 
            array (
                'id' => 2513,
                'parent_id' => 2335,
                'code' => '513432',
                'name' => '喜德县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/喜德县',
            ),
            13 => 
            array (
                'id' => 2514,
                'parent_id' => 2335,
                'code' => '513433',
                'name' => '冕宁县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/冕宁县',
            ),
            14 => 
            array (
                'id' => 2515,
                'parent_id' => 2335,
                'code' => '513434',
                'name' => '越西县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/越西县',
            ),
            15 => 
            array (
                'id' => 2516,
                'parent_id' => 2335,
                'code' => '513435',
                'name' => '甘洛县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/甘洛县',
            ),
            16 => 
            array (
                'id' => 2517,
                'parent_id' => 2335,
                'code' => '513436',
                'name' => '美姑县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/美姑县',
            ),
            17 => 
            array (
                'id' => 2518,
                'parent_id' => 2335,
                'code' => '513437',
                'name' => '雷波县',
                'type' => 3,
                'full_name' => '四川省/凉山彝族自治州/雷波县',
            ),
            18 => 
            array (
                'id' => 2519,
                'parent_id' => 25,
                'code' => '520100',
                'name' => '贵阳市',
                'type' => 2,
                'full_name' => '贵州省/贵阳市',
            ),
            19 => 
            array (
                'id' => 2520,
                'parent_id' => 25,
                'code' => '520200',
                'name' => '六盘水市',
                'type' => 2,
                'full_name' => '贵州省/六盘水市',
            ),
            20 => 
            array (
                'id' => 2521,
                'parent_id' => 25,
                'code' => '520300',
                'name' => '遵义市',
                'type' => 2,
                'full_name' => '贵州省/遵义市',
            ),
            21 => 
            array (
                'id' => 2522,
                'parent_id' => 25,
                'code' => '520400',
                'name' => '安顺市',
                'type' => 2,
                'full_name' => '贵州省/安顺市',
            ),
            22 => 
            array (
                'id' => 2523,
                'parent_id' => 25,
                'code' => '520500',
                'name' => '毕节市',
                'type' => 2,
                'full_name' => '贵州省/毕节市',
            ),
            23 => 
            array (
                'id' => 2524,
                'parent_id' => 25,
                'code' => '520600',
                'name' => '铜仁市',
                'type' => 2,
                'full_name' => '贵州省/铜仁市',
            ),
            24 => 
            array (
                'id' => 2525,
                'parent_id' => 25,
                'code' => '522300',
                'name' => '黔西南布依族苗族自治州',
                'type' => 2,
                'full_name' => '贵州省/黔西南布依族苗族自治州',
            ),
            25 => 
            array (
                'id' => 2526,
                'parent_id' => 25,
                'code' => '522600',
                'name' => '黔东南苗族侗族自治州',
                'type' => 2,
                'full_name' => '贵州省/黔东南苗族侗族自治州',
            ),
            26 => 
            array (
                'id' => 2527,
                'parent_id' => 25,
                'code' => '522700',
                'name' => '黔南布依族苗族自治州',
                'type' => 2,
                'full_name' => '贵州省/黔南布依族苗族自治州',
            ),
            27 => 
            array (
                'id' => 2528,
                'parent_id' => 2519,
                'code' => '520102',
                'name' => '南明区',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/南明区',
            ),
            28 => 
            array (
                'id' => 2529,
                'parent_id' => 2519,
                'code' => '520103',
                'name' => '云岩区',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/云岩区',
            ),
            29 => 
            array (
                'id' => 2530,
                'parent_id' => 2519,
                'code' => '520111',
                'name' => '花溪区',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/花溪区',
            ),
            30 => 
            array (
                'id' => 2531,
                'parent_id' => 2519,
                'code' => '520112',
                'name' => '乌当区',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/乌当区',
            ),
            31 => 
            array (
                'id' => 2532,
                'parent_id' => 2519,
                'code' => '520113',
                'name' => '白云区',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/白云区',
            ),
            32 => 
            array (
                'id' => 2533,
                'parent_id' => 2519,
                'code' => '520115',
                'name' => '观山湖区',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/观山湖区',
            ),
            33 => 
            array (
                'id' => 2534,
                'parent_id' => 2519,
                'code' => '520121',
                'name' => '开阳县',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/开阳县',
            ),
            34 => 
            array (
                'id' => 2535,
                'parent_id' => 2519,
                'code' => '520122',
                'name' => '息烽县',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/息烽县',
            ),
            35 => 
            array (
                'id' => 2536,
                'parent_id' => 2519,
                'code' => '520123',
                'name' => '修文县',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/修文县',
            ),
            36 => 
            array (
                'id' => 2537,
                'parent_id' => 2519,
                'code' => '520181',
                'name' => '清镇市',
                'type' => 3,
                'full_name' => '贵州省/贵阳市/清镇市',
            ),
            37 => 
            array (
                'id' => 2538,
                'parent_id' => 2520,
                'code' => '520201',
                'name' => '钟山区',
                'type' => 3,
                'full_name' => '贵州省/六盘水市/钟山区',
            ),
            38 => 
            array (
                'id' => 2539,
                'parent_id' => 2520,
                'code' => '520203',
                'name' => '六枝特区',
                'type' => 3,
                'full_name' => '贵州省/六盘水市/六枝特区',
            ),
            39 => 
            array (
                'id' => 2540,
                'parent_id' => 2520,
                'code' => '520221',
                'name' => '水城县',
                'type' => 3,
                'full_name' => '贵州省/六盘水市/水城县',
            ),
            40 => 
            array (
                'id' => 2541,
                'parent_id' => 2520,
                'code' => '520281',
                'name' => '盘州市',
                'type' => 3,
                'full_name' => '贵州省/六盘水市/盘州市',
            ),
            41 => 
            array (
                'id' => 2542,
                'parent_id' => 2521,
                'code' => '520302',
                'name' => '红花岗区',
                'type' => 3,
                'full_name' => '贵州省/遵义市/红花岗区',
            ),
            42 => 
            array (
                'id' => 2543,
                'parent_id' => 2521,
                'code' => '520303',
                'name' => '汇川区',
                'type' => 3,
                'full_name' => '贵州省/遵义市/汇川区',
            ),
            43 => 
            array (
                'id' => 2544,
                'parent_id' => 2521,
                'code' => '520304',
                'name' => '播州区',
                'type' => 3,
                'full_name' => '贵州省/遵义市/播州区',
            ),
            44 => 
            array (
                'id' => 2545,
                'parent_id' => 2521,
                'code' => '520322',
                'name' => '桐梓县',
                'type' => 3,
                'full_name' => '贵州省/遵义市/桐梓县',
            ),
            45 => 
            array (
                'id' => 2546,
                'parent_id' => 2521,
                'code' => '520323',
                'name' => '绥阳县',
                'type' => 3,
                'full_name' => '贵州省/遵义市/绥阳县',
            ),
            46 => 
            array (
                'id' => 2547,
                'parent_id' => 2521,
                'code' => '520324',
                'name' => '正安县',
                'type' => 3,
                'full_name' => '贵州省/遵义市/正安县',
            ),
            47 => 
            array (
                'id' => 2548,
                'parent_id' => 2521,
                'code' => '520325',
                'name' => '道真仡佬族苗族自治县',
                'type' => 3,
                'full_name' => '贵州省/遵义市/道真仡佬族苗族自治县',
            ),
            48 => 
            array (
                'id' => 2549,
                'parent_id' => 2521,
                'code' => '520326',
                'name' => '务川仡佬族苗族自治县',
                'type' => 3,
                'full_name' => '贵州省/遵义市/务川仡佬族苗族自治县',
            ),
            49 => 
            array (
                'id' => 2550,
                'parent_id' => 2521,
                'code' => '520327',
                'name' => '凤冈县',
                'type' => 3,
                'full_name' => '贵州省/遵义市/凤冈县',
            ),
            50 => 
            array (
                'id' => 2551,
                'parent_id' => 2521,
                'code' => '520328',
                'name' => '湄潭县',
                'type' => 3,
                'full_name' => '贵州省/遵义市/湄潭县',
            ),
            51 => 
            array (
                'id' => 2552,
                'parent_id' => 2521,
                'code' => '520329',
                'name' => '余庆县',
                'type' => 3,
                'full_name' => '贵州省/遵义市/余庆县',
            ),
            52 => 
            array (
                'id' => 2553,
                'parent_id' => 2521,
                'code' => '520330',
                'name' => '习水县',
                'type' => 3,
                'full_name' => '贵州省/遵义市/习水县',
            ),
            53 => 
            array (
                'id' => 2554,
                'parent_id' => 2521,
                'code' => '520381',
                'name' => '赤水市',
                'type' => 3,
                'full_name' => '贵州省/遵义市/赤水市',
            ),
            54 => 
            array (
                'id' => 2555,
                'parent_id' => 2521,
                'code' => '520382',
                'name' => '仁怀市',
                'type' => 3,
                'full_name' => '贵州省/遵义市/仁怀市',
            ),
            55 => 
            array (
                'id' => 2556,
                'parent_id' => 2522,
                'code' => '520402',
                'name' => '西秀区',
                'type' => 3,
                'full_name' => '贵州省/安顺市/西秀区',
            ),
            56 => 
            array (
                'id' => 2557,
                'parent_id' => 2522,
                'code' => '520403',
                'name' => '平坝区',
                'type' => 3,
                'full_name' => '贵州省/安顺市/平坝区',
            ),
            57 => 
            array (
                'id' => 2558,
                'parent_id' => 2522,
                'code' => '520422',
                'name' => '普定县',
                'type' => 3,
                'full_name' => '贵州省/安顺市/普定县',
            ),
            58 => 
            array (
                'id' => 2559,
                'parent_id' => 2522,
                'code' => '520423',
                'name' => '镇宁布依族苗族自治县',
                'type' => 3,
                'full_name' => '贵州省/安顺市/镇宁布依族苗族自治县',
            ),
            59 => 
            array (
                'id' => 2560,
                'parent_id' => 2522,
                'code' => '520424',
                'name' => '关岭布依族苗族自治县',
                'type' => 3,
                'full_name' => '贵州省/安顺市/关岭布依族苗族自治县',
            ),
            60 => 
            array (
                'id' => 2561,
                'parent_id' => 2522,
                'code' => '520425',
                'name' => '紫云苗族布依族自治县',
                'type' => 3,
                'full_name' => '贵州省/安顺市/紫云苗族布依族自治县',
            ),
            61 => 
            array (
                'id' => 2562,
                'parent_id' => 2523,
                'code' => '520502',
                'name' => '七星关区',
                'type' => 3,
                'full_name' => '贵州省/毕节市/七星关区',
            ),
            62 => 
            array (
                'id' => 2563,
                'parent_id' => 2523,
                'code' => '520521',
                'name' => '大方县',
                'type' => 3,
                'full_name' => '贵州省/毕节市/大方县',
            ),
            63 => 
            array (
                'id' => 2564,
                'parent_id' => 2523,
                'code' => '520522',
                'name' => '黔西县',
                'type' => 3,
                'full_name' => '贵州省/毕节市/黔西县',
            ),
            64 => 
            array (
                'id' => 2565,
                'parent_id' => 2523,
                'code' => '520523',
                'name' => '金沙县',
                'type' => 3,
                'full_name' => '贵州省/毕节市/金沙县',
            ),
            65 => 
            array (
                'id' => 2566,
                'parent_id' => 2523,
                'code' => '520524',
                'name' => '织金县',
                'type' => 3,
                'full_name' => '贵州省/毕节市/织金县',
            ),
            66 => 
            array (
                'id' => 2567,
                'parent_id' => 2523,
                'code' => '520525',
                'name' => '纳雍县',
                'type' => 3,
                'full_name' => '贵州省/毕节市/纳雍县',
            ),
            67 => 
            array (
                'id' => 2568,
                'parent_id' => 2523,
                'code' => '520526',
                'name' => '威宁彝族回族苗族自治县',
                'type' => 3,
                'full_name' => '贵州省/毕节市/威宁彝族回族苗族自治县',
            ),
            68 => 
            array (
                'id' => 2569,
                'parent_id' => 2523,
                'code' => '520527',
                'name' => '赫章县',
                'type' => 3,
                'full_name' => '贵州省/毕节市/赫章县',
            ),
            69 => 
            array (
                'id' => 2570,
                'parent_id' => 2524,
                'code' => '520602',
                'name' => '碧江区',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/碧江区',
            ),
            70 => 
            array (
                'id' => 2571,
                'parent_id' => 2524,
                'code' => '520603',
                'name' => '万山区',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/万山区',
            ),
            71 => 
            array (
                'id' => 2572,
                'parent_id' => 2524,
                'code' => '520621',
                'name' => '江口县',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/江口县',
            ),
            72 => 
            array (
                'id' => 2573,
                'parent_id' => 2524,
                'code' => '520622',
                'name' => '玉屏侗族自治县',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/玉屏侗族自治县',
            ),
            73 => 
            array (
                'id' => 2574,
                'parent_id' => 2524,
                'code' => '520623',
                'name' => '石阡县',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/石阡县',
            ),
            74 => 
            array (
                'id' => 2575,
                'parent_id' => 2524,
                'code' => '520624',
                'name' => '思南县',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/思南县',
            ),
            75 => 
            array (
                'id' => 2576,
                'parent_id' => 2524,
                'code' => '520625',
                'name' => '印江土家族苗族自治县',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/印江土家族苗族自治县',
            ),
            76 => 
            array (
                'id' => 2577,
                'parent_id' => 2524,
                'code' => '520626',
                'name' => '德江县',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/德江县',
            ),
            77 => 
            array (
                'id' => 2578,
                'parent_id' => 2524,
                'code' => '520627',
                'name' => '沿河土家族自治县',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/沿河土家族自治县',
            ),
            78 => 
            array (
                'id' => 2579,
                'parent_id' => 2524,
                'code' => '520628',
                'name' => '松桃苗族自治县',
                'type' => 3,
                'full_name' => '贵州省/铜仁市/松桃苗族自治县',
            ),
            79 => 
            array (
                'id' => 2580,
                'parent_id' => 2525,
                'code' => '522301',
                'name' => '兴义市',
                'type' => 3,
                'full_name' => '贵州省/黔西南布依族苗族自治州/兴义市',
            ),
            80 => 
            array (
                'id' => 2581,
                'parent_id' => 2525,
                'code' => '522322',
                'name' => '兴仁县',
                'type' => 3,
                'full_name' => '贵州省/黔西南布依族苗族自治州/兴仁县',
            ),
            81 => 
            array (
                'id' => 2582,
                'parent_id' => 2525,
                'code' => '522323',
                'name' => '普安县',
                'type' => 3,
                'full_name' => '贵州省/黔西南布依族苗族自治州/普安县',
            ),
            82 => 
            array (
                'id' => 2583,
                'parent_id' => 2525,
                'code' => '522324',
                'name' => '晴隆县',
                'type' => 3,
                'full_name' => '贵州省/黔西南布依族苗族自治州/晴隆县',
            ),
            83 => 
            array (
                'id' => 2584,
                'parent_id' => 2525,
                'code' => '522325',
                'name' => '贞丰县',
                'type' => 3,
                'full_name' => '贵州省/黔西南布依族苗族自治州/贞丰县',
            ),
            84 => 
            array (
                'id' => 2585,
                'parent_id' => 2525,
                'code' => '522326',
                'name' => '望谟县',
                'type' => 3,
                'full_name' => '贵州省/黔西南布依族苗族自治州/望谟县',
            ),
            85 => 
            array (
                'id' => 2586,
                'parent_id' => 2525,
                'code' => '522327',
                'name' => '册亨县',
                'type' => 3,
                'full_name' => '贵州省/黔西南布依族苗族自治州/册亨县',
            ),
            86 => 
            array (
                'id' => 2587,
                'parent_id' => 2525,
                'code' => '522328',
                'name' => '安龙县',
                'type' => 3,
                'full_name' => '贵州省/黔西南布依族苗族自治州/安龙县',
            ),
            87 => 
            array (
                'id' => 2588,
                'parent_id' => 2526,
                'code' => '522601',
                'name' => '凯里市',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/凯里市',
            ),
            88 => 
            array (
                'id' => 2589,
                'parent_id' => 2526,
                'code' => '522622',
                'name' => '黄平县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/黄平县',
            ),
            89 => 
            array (
                'id' => 2590,
                'parent_id' => 2526,
                'code' => '522623',
                'name' => '施秉县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/施秉县',
            ),
            90 => 
            array (
                'id' => 2591,
                'parent_id' => 2526,
                'code' => '522624',
                'name' => '三穗县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/三穗县',
            ),
            91 => 
            array (
                'id' => 2592,
                'parent_id' => 2526,
                'code' => '522625',
                'name' => '镇远县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/镇远县',
            ),
            92 => 
            array (
                'id' => 2593,
                'parent_id' => 2526,
                'code' => '522626',
                'name' => '岑巩县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/岑巩县',
            ),
            93 => 
            array (
                'id' => 2594,
                'parent_id' => 2526,
                'code' => '522627',
                'name' => '天柱县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/天柱县',
            ),
            94 => 
            array (
                'id' => 2595,
                'parent_id' => 2526,
                'code' => '522628',
                'name' => '锦屏县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/锦屏县',
            ),
            95 => 
            array (
                'id' => 2596,
                'parent_id' => 2526,
                'code' => '522629',
                'name' => '剑河县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/剑河县',
            ),
            96 => 
            array (
                'id' => 2597,
                'parent_id' => 2526,
                'code' => '522630',
                'name' => '台江县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/台江县',
            ),
            97 => 
            array (
                'id' => 2598,
                'parent_id' => 2526,
                'code' => '522631',
                'name' => '黎平县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/黎平县',
            ),
            98 => 
            array (
                'id' => 2599,
                'parent_id' => 2526,
                'code' => '522632',
                'name' => '榕江县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/榕江县',
            ),
            99 => 
            array (
                'id' => 2600,
                'parent_id' => 2526,
                'code' => '522633',
                'name' => '从江县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/从江县',
            ),
            100 => 
            array (
                'id' => 2601,
                'parent_id' => 2526,
                'code' => '522634',
                'name' => '雷山县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/雷山县',
            ),
            101 => 
            array (
                'id' => 2602,
                'parent_id' => 2526,
                'code' => '522635',
                'name' => '麻江县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/麻江县',
            ),
            102 => 
            array (
                'id' => 2603,
                'parent_id' => 2526,
                'code' => '522636',
                'name' => '丹寨县',
                'type' => 3,
                'full_name' => '贵州省/黔东南苗族侗族自治州/丹寨县',
            ),
            103 => 
            array (
                'id' => 2604,
                'parent_id' => 2527,
                'code' => '522701',
                'name' => '都匀市',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/都匀市',
            ),
            104 => 
            array (
                'id' => 2605,
                'parent_id' => 2527,
                'code' => '522702',
                'name' => '福泉市',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/福泉市',
            ),
            105 => 
            array (
                'id' => 2606,
                'parent_id' => 2527,
                'code' => '522722',
                'name' => '荔波县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/荔波县',
            ),
            106 => 
            array (
                'id' => 2607,
                'parent_id' => 2527,
                'code' => '522723',
                'name' => '贵定县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/贵定县',
            ),
            107 => 
            array (
                'id' => 2608,
                'parent_id' => 2527,
                'code' => '522725',
                'name' => '瓮安县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/瓮安县',
            ),
            108 => 
            array (
                'id' => 2609,
                'parent_id' => 2527,
                'code' => '522726',
                'name' => '独山县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/独山县',
            ),
            109 => 
            array (
                'id' => 2610,
                'parent_id' => 2527,
                'code' => '522727',
                'name' => '平塘县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/平塘县',
            ),
            110 => 
            array (
                'id' => 2611,
                'parent_id' => 2527,
                'code' => '522728',
                'name' => '罗甸县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/罗甸县',
            ),
            111 => 
            array (
                'id' => 2612,
                'parent_id' => 2527,
                'code' => '522729',
                'name' => '长顺县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/长顺县',
            ),
            112 => 
            array (
                'id' => 2613,
                'parent_id' => 2527,
                'code' => '522730',
                'name' => '龙里县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/龙里县',
            ),
            113 => 
            array (
                'id' => 2614,
                'parent_id' => 2527,
                'code' => '522731',
                'name' => '惠水县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/惠水县',
            ),
            114 => 
            array (
                'id' => 2615,
                'parent_id' => 2527,
                'code' => '522732',
                'name' => '三都水族自治县',
                'type' => 3,
                'full_name' => '贵州省/黔南布依族苗族自治州/三都水族自治县',
            ),
            115 => 
            array (
                'id' => 2616,
                'parent_id' => 26,
                'code' => '530100',
                'name' => '昆明市',
                'type' => 2,
                'full_name' => '云南省/昆明市',
            ),
            116 => 
            array (
                'id' => 2617,
                'parent_id' => 26,
                'code' => '530300',
                'name' => '曲靖市',
                'type' => 2,
                'full_name' => '云南省/曲靖市',
            ),
            117 => 
            array (
                'id' => 2618,
                'parent_id' => 26,
                'code' => '530400',
                'name' => '玉溪市',
                'type' => 2,
                'full_name' => '云南省/玉溪市',
            ),
            118 => 
            array (
                'id' => 2619,
                'parent_id' => 26,
                'code' => '530500',
                'name' => '保山市',
                'type' => 2,
                'full_name' => '云南省/保山市',
            ),
            119 => 
            array (
                'id' => 2620,
                'parent_id' => 26,
                'code' => '530600',
                'name' => '昭通市',
                'type' => 2,
                'full_name' => '云南省/昭通市',
            ),
            120 => 
            array (
                'id' => 2621,
                'parent_id' => 26,
                'code' => '530700',
                'name' => '丽江市',
                'type' => 2,
                'full_name' => '云南省/丽江市',
            ),
            121 => 
            array (
                'id' => 2622,
                'parent_id' => 26,
                'code' => '530800',
                'name' => '普洱市',
                'type' => 2,
                'full_name' => '云南省/普洱市',
            ),
            122 => 
            array (
                'id' => 2623,
                'parent_id' => 26,
                'code' => '530900',
                'name' => '临沧市',
                'type' => 2,
                'full_name' => '云南省/临沧市',
            ),
            123 => 
            array (
                'id' => 2624,
                'parent_id' => 26,
                'code' => '532300',
                'name' => '楚雄彝族自治州',
                'type' => 2,
                'full_name' => '云南省/楚雄彝族自治州',
            ),
            124 => 
            array (
                'id' => 2625,
                'parent_id' => 26,
                'code' => '532500',
                'name' => '红河哈尼族彝族自治州',
                'type' => 2,
                'full_name' => '云南省/红河哈尼族彝族自治州',
            ),
            125 => 
            array (
                'id' => 2626,
                'parent_id' => 26,
                'code' => '532600',
                'name' => '文山壮族苗族自治州',
                'type' => 2,
                'full_name' => '云南省/文山壮族苗族自治州',
            ),
            126 => 
            array (
                'id' => 2627,
                'parent_id' => 26,
                'code' => '532800',
                'name' => '西双版纳傣族自治州',
                'type' => 2,
                'full_name' => '云南省/西双版纳傣族自治州',
            ),
            127 => 
            array (
                'id' => 2628,
                'parent_id' => 26,
                'code' => '532900',
                'name' => '大理白族自治州',
                'type' => 2,
                'full_name' => '云南省/大理白族自治州',
            ),
            128 => 
            array (
                'id' => 2629,
                'parent_id' => 26,
                'code' => '533100',
                'name' => '德宏傣族景颇族自治州',
                'type' => 2,
                'full_name' => '云南省/德宏傣族景颇族自治州',
            ),
            129 => 
            array (
                'id' => 2630,
                'parent_id' => 26,
                'code' => '533300',
                'name' => '怒江傈僳族自治州',
                'type' => 2,
                'full_name' => '云南省/怒江傈僳族自治州',
            ),
            130 => 
            array (
                'id' => 2631,
                'parent_id' => 26,
                'code' => '533400',
                'name' => '迪庆藏族自治州',
                'type' => 2,
                'full_name' => '云南省/迪庆藏族自治州',
            ),
            131 => 
            array (
                'id' => 2632,
                'parent_id' => 2616,
                'code' => '530102',
                'name' => '五华区',
                'type' => 3,
                'full_name' => '云南省/昆明市/五华区',
            ),
            132 => 
            array (
                'id' => 2633,
                'parent_id' => 2616,
                'code' => '530103',
                'name' => '盘龙区',
                'type' => 3,
                'full_name' => '云南省/昆明市/盘龙区',
            ),
            133 => 
            array (
                'id' => 2634,
                'parent_id' => 2616,
                'code' => '530111',
                'name' => '官渡区',
                'type' => 3,
                'full_name' => '云南省/昆明市/官渡区',
            ),
            134 => 
            array (
                'id' => 2635,
                'parent_id' => 2616,
                'code' => '530112',
                'name' => '西山区',
                'type' => 3,
                'full_name' => '云南省/昆明市/西山区',
            ),
            135 => 
            array (
                'id' => 2636,
                'parent_id' => 2616,
                'code' => '530113',
                'name' => '东川区',
                'type' => 3,
                'full_name' => '云南省/昆明市/东川区',
            ),
            136 => 
            array (
                'id' => 2637,
                'parent_id' => 2616,
                'code' => '530114',
                'name' => '呈贡区',
                'type' => 3,
                'full_name' => '云南省/昆明市/呈贡区',
            ),
            137 => 
            array (
                'id' => 2638,
                'parent_id' => 2616,
                'code' => '530115',
                'name' => '晋宁区',
                'type' => 3,
                'full_name' => '云南省/昆明市/晋宁区',
            ),
            138 => 
            array (
                'id' => 2639,
                'parent_id' => 2616,
                'code' => '530124',
                'name' => '富民县',
                'type' => 3,
                'full_name' => '云南省/昆明市/富民县',
            ),
            139 => 
            array (
                'id' => 2640,
                'parent_id' => 2616,
                'code' => '530125',
                'name' => '宜良县',
                'type' => 3,
                'full_name' => '云南省/昆明市/宜良县',
            ),
            140 => 
            array (
                'id' => 2641,
                'parent_id' => 2616,
                'code' => '530126',
                'name' => '石林彝族自治县',
                'type' => 3,
                'full_name' => '云南省/昆明市/石林彝族自治县',
            ),
            141 => 
            array (
                'id' => 2642,
                'parent_id' => 2616,
                'code' => '530127',
                'name' => '嵩明县',
                'type' => 3,
                'full_name' => '云南省/昆明市/嵩明县',
            ),
            142 => 
            array (
                'id' => 2643,
                'parent_id' => 2616,
                'code' => '530128',
                'name' => '禄劝彝族苗族自治县',
                'type' => 3,
                'full_name' => '云南省/昆明市/禄劝彝族苗族自治县',
            ),
            143 => 
            array (
                'id' => 2644,
                'parent_id' => 2616,
                'code' => '530129',
                'name' => '寻甸回族彝族自治县',
                'type' => 3,
                'full_name' => '云南省/昆明市/寻甸回族彝族自治县',
            ),
            144 => 
            array (
                'id' => 2645,
                'parent_id' => 2616,
                'code' => '530181',
                'name' => '安宁市',
                'type' => 3,
                'full_name' => '云南省/昆明市/安宁市',
            ),
            145 => 
            array (
                'id' => 2646,
                'parent_id' => 2617,
                'code' => '530302',
                'name' => '麒麟区',
                'type' => 3,
                'full_name' => '云南省/曲靖市/麒麟区',
            ),
            146 => 
            array (
                'id' => 2647,
                'parent_id' => 2617,
                'code' => '530303',
                'name' => '沾益区',
                'type' => 3,
                'full_name' => '云南省/曲靖市/沾益区',
            ),
            147 => 
            array (
                'id' => 2648,
                'parent_id' => 2617,
                'code' => '530321',
                'name' => '马龙县',
                'type' => 3,
                'full_name' => '云南省/曲靖市/马龙县',
            ),
            148 => 
            array (
                'id' => 2649,
                'parent_id' => 2617,
                'code' => '530322',
                'name' => '陆良县',
                'type' => 3,
                'full_name' => '云南省/曲靖市/陆良县',
            ),
            149 => 
            array (
                'id' => 2650,
                'parent_id' => 2617,
                'code' => '530323',
                'name' => '师宗县',
                'type' => 3,
                'full_name' => '云南省/曲靖市/师宗县',
            ),
            150 => 
            array (
                'id' => 2651,
                'parent_id' => 2617,
                'code' => '530324',
                'name' => '罗平县',
                'type' => 3,
                'full_name' => '云南省/曲靖市/罗平县',
            ),
            151 => 
            array (
                'id' => 2652,
                'parent_id' => 2617,
                'code' => '530325',
                'name' => '富源县',
                'type' => 3,
                'full_name' => '云南省/曲靖市/富源县',
            ),
            152 => 
            array (
                'id' => 2653,
                'parent_id' => 2617,
                'code' => '530326',
                'name' => '会泽县',
                'type' => 3,
                'full_name' => '云南省/曲靖市/会泽县',
            ),
            153 => 
            array (
                'id' => 2654,
                'parent_id' => 2617,
                'code' => '530381',
                'name' => '宣威市',
                'type' => 3,
                'full_name' => '云南省/曲靖市/宣威市',
            ),
            154 => 
            array (
                'id' => 2655,
                'parent_id' => 2618,
                'code' => '530402',
                'name' => '红塔区',
                'type' => 3,
                'full_name' => '云南省/玉溪市/红塔区',
            ),
            155 => 
            array (
                'id' => 2656,
                'parent_id' => 2618,
                'code' => '530403',
                'name' => '江川区',
                'type' => 3,
                'full_name' => '云南省/玉溪市/江川区',
            ),
            156 => 
            array (
                'id' => 2657,
                'parent_id' => 2618,
                'code' => '530422',
                'name' => '澄江县',
                'type' => 3,
                'full_name' => '云南省/玉溪市/澄江县',
            ),
            157 => 
            array (
                'id' => 2658,
                'parent_id' => 2618,
                'code' => '530423',
                'name' => '通海县',
                'type' => 3,
                'full_name' => '云南省/玉溪市/通海县',
            ),
            158 => 
            array (
                'id' => 2659,
                'parent_id' => 2618,
                'code' => '530424',
                'name' => '华宁县',
                'type' => 3,
                'full_name' => '云南省/玉溪市/华宁县',
            ),
            159 => 
            array (
                'id' => 2660,
                'parent_id' => 2618,
                'code' => '530425',
                'name' => '易门县',
                'type' => 3,
                'full_name' => '云南省/玉溪市/易门县',
            ),
            160 => 
            array (
                'id' => 2661,
                'parent_id' => 2618,
                'code' => '530426',
                'name' => '峨山彝族自治县',
                'type' => 3,
                'full_name' => '云南省/玉溪市/峨山彝族自治县',
            ),
            161 => 
            array (
                'id' => 2662,
                'parent_id' => 2618,
                'code' => '530427',
                'name' => '新平彝族傣族自治县',
                'type' => 3,
                'full_name' => '云南省/玉溪市/新平彝族傣族自治县',
            ),
            162 => 
            array (
                'id' => 2663,
                'parent_id' => 2618,
                'code' => '530428',
                'name' => '元江哈尼族彝族傣族自治县',
                'type' => 3,
                'full_name' => '云南省/玉溪市/元江哈尼族彝族傣族自治县',
            ),
            163 => 
            array (
                'id' => 2664,
                'parent_id' => 2619,
                'code' => '530502',
                'name' => '隆阳区',
                'type' => 3,
                'full_name' => '云南省/保山市/隆阳区',
            ),
            164 => 
            array (
                'id' => 2665,
                'parent_id' => 2619,
                'code' => '530521',
                'name' => '施甸县',
                'type' => 3,
                'full_name' => '云南省/保山市/施甸县',
            ),
            165 => 
            array (
                'id' => 2666,
                'parent_id' => 2619,
                'code' => '530523',
                'name' => '龙陵县',
                'type' => 3,
                'full_name' => '云南省/保山市/龙陵县',
            ),
            166 => 
            array (
                'id' => 2667,
                'parent_id' => 2619,
                'code' => '530524',
                'name' => '昌宁县',
                'type' => 3,
                'full_name' => '云南省/保山市/昌宁县',
            ),
            167 => 
            array (
                'id' => 2668,
                'parent_id' => 2619,
                'code' => '530581',
                'name' => '腾冲市',
                'type' => 3,
                'full_name' => '云南省/保山市/腾冲市',
            ),
            168 => 
            array (
                'id' => 2669,
                'parent_id' => 2620,
                'code' => '530602',
                'name' => '昭阳区',
                'type' => 3,
                'full_name' => '云南省/昭通市/昭阳区',
            ),
            169 => 
            array (
                'id' => 2670,
                'parent_id' => 2620,
                'code' => '530621',
                'name' => '鲁甸县',
                'type' => 3,
                'full_name' => '云南省/昭通市/鲁甸县',
            ),
            170 => 
            array (
                'id' => 2671,
                'parent_id' => 2620,
                'code' => '530622',
                'name' => '巧家县',
                'type' => 3,
                'full_name' => '云南省/昭通市/巧家县',
            ),
            171 => 
            array (
                'id' => 2672,
                'parent_id' => 2620,
                'code' => '530623',
                'name' => '盐津县',
                'type' => 3,
                'full_name' => '云南省/昭通市/盐津县',
            ),
            172 => 
            array (
                'id' => 2673,
                'parent_id' => 2620,
                'code' => '530624',
                'name' => '大关县',
                'type' => 3,
                'full_name' => '云南省/昭通市/大关县',
            ),
            173 => 
            array (
                'id' => 2674,
                'parent_id' => 2620,
                'code' => '530625',
                'name' => '永善县',
                'type' => 3,
                'full_name' => '云南省/昭通市/永善县',
            ),
            174 => 
            array (
                'id' => 2675,
                'parent_id' => 2620,
                'code' => '530626',
                'name' => '绥江县',
                'type' => 3,
                'full_name' => '云南省/昭通市/绥江县',
            ),
            175 => 
            array (
                'id' => 2676,
                'parent_id' => 2620,
                'code' => '530627',
                'name' => '镇雄县',
                'type' => 3,
                'full_name' => '云南省/昭通市/镇雄县',
            ),
            176 => 
            array (
                'id' => 2677,
                'parent_id' => 2620,
                'code' => '530628',
                'name' => '彝良县',
                'type' => 3,
                'full_name' => '云南省/昭通市/彝良县',
            ),
            177 => 
            array (
                'id' => 2678,
                'parent_id' => 2620,
                'code' => '530629',
                'name' => '威信县',
                'type' => 3,
                'full_name' => '云南省/昭通市/威信县',
            ),
            178 => 
            array (
                'id' => 2679,
                'parent_id' => 2620,
                'code' => '530630',
                'name' => '水富县',
                'type' => 3,
                'full_name' => '云南省/昭通市/水富县',
            ),
            179 => 
            array (
                'id' => 2680,
                'parent_id' => 2621,
                'code' => '530702',
                'name' => '古城区',
                'type' => 3,
                'full_name' => '云南省/丽江市/古城区',
            ),
            180 => 
            array (
                'id' => 2681,
                'parent_id' => 2621,
                'code' => '530721',
                'name' => '玉龙纳西族自治县',
                'type' => 3,
                'full_name' => '云南省/丽江市/玉龙纳西族自治县',
            ),
            181 => 
            array (
                'id' => 2682,
                'parent_id' => 2621,
                'code' => '530722',
                'name' => '永胜县',
                'type' => 3,
                'full_name' => '云南省/丽江市/永胜县',
            ),
            182 => 
            array (
                'id' => 2683,
                'parent_id' => 2621,
                'code' => '530723',
                'name' => '华坪县',
                'type' => 3,
                'full_name' => '云南省/丽江市/华坪县',
            ),
            183 => 
            array (
                'id' => 2684,
                'parent_id' => 2621,
                'code' => '530724',
                'name' => '宁蒗彝族自治县',
                'type' => 3,
                'full_name' => '云南省/丽江市/宁蒗彝族自治县',
            ),
            184 => 
            array (
                'id' => 2685,
                'parent_id' => 2622,
                'code' => '530802',
                'name' => '思茅区',
                'type' => 3,
                'full_name' => '云南省/普洱市/思茅区',
            ),
            185 => 
            array (
                'id' => 2686,
                'parent_id' => 2622,
                'code' => '530821',
                'name' => '宁洱哈尼族彝族自治县',
                'type' => 3,
                'full_name' => '云南省/普洱市/宁洱哈尼族彝族自治县',
            ),
            186 => 
            array (
                'id' => 2687,
                'parent_id' => 2622,
                'code' => '530822',
                'name' => '墨江哈尼族自治县',
                'type' => 3,
                'full_name' => '云南省/普洱市/墨江哈尼族自治县',
            ),
            187 => 
            array (
                'id' => 2688,
                'parent_id' => 2622,
                'code' => '530823',
                'name' => '景东彝族自治县',
                'type' => 3,
                'full_name' => '云南省/普洱市/景东彝族自治县',
            ),
            188 => 
            array (
                'id' => 2689,
                'parent_id' => 2622,
                'code' => '530824',
                'name' => '景谷傣族彝族自治县',
                'type' => 3,
                'full_name' => '云南省/普洱市/景谷傣族彝族自治县',
            ),
            189 => 
            array (
                'id' => 2690,
                'parent_id' => 2622,
                'code' => '530825',
                'name' => '镇沅彝族哈尼族拉祜族自治县',
                'type' => 3,
                'full_name' => '云南省/普洱市/镇沅彝族哈尼族拉祜族自治县',
            ),
            190 => 
            array (
                'id' => 2691,
                'parent_id' => 2622,
                'code' => '530826',
                'name' => '江城哈尼族彝族自治县',
                'type' => 3,
                'full_name' => '云南省/普洱市/江城哈尼族彝族自治县',
            ),
            191 => 
            array (
                'id' => 2692,
                'parent_id' => 2622,
                'code' => '530827',
                'name' => '孟连傣族拉祜族佤族自治县',
                'type' => 3,
                'full_name' => '云南省/普洱市/孟连傣族拉祜族佤族自治县',
            ),
            192 => 
            array (
                'id' => 2693,
                'parent_id' => 2622,
                'code' => '530828',
                'name' => '澜沧拉祜族自治县',
                'type' => 3,
                'full_name' => '云南省/普洱市/澜沧拉祜族自治县',
            ),
            193 => 
            array (
                'id' => 2694,
                'parent_id' => 2622,
                'code' => '530829',
                'name' => '西盟佤族自治县',
                'type' => 3,
                'full_name' => '云南省/普洱市/西盟佤族自治县',
            ),
            194 => 
            array (
                'id' => 2695,
                'parent_id' => 2623,
                'code' => '530902',
                'name' => '临翔区',
                'type' => 3,
                'full_name' => '云南省/临沧市/临翔区',
            ),
            195 => 
            array (
                'id' => 2696,
                'parent_id' => 2623,
                'code' => '530921',
                'name' => '凤庆县',
                'type' => 3,
                'full_name' => '云南省/临沧市/凤庆县',
            ),
            196 => 
            array (
                'id' => 2697,
                'parent_id' => 2623,
                'code' => '530922',
                'name' => '云县',
                'type' => 3,
                'full_name' => '云南省/临沧市/云县',
            ),
            197 => 
            array (
                'id' => 2698,
                'parent_id' => 2623,
                'code' => '530923',
                'name' => '永德县',
                'type' => 3,
                'full_name' => '云南省/临沧市/永德县',
            ),
            198 => 
            array (
                'id' => 2699,
                'parent_id' => 2623,
                'code' => '530924',
                'name' => '镇康县',
                'type' => 3,
                'full_name' => '云南省/临沧市/镇康县',
            ),
            199 => 
            array (
                'id' => 2700,
                'parent_id' => 2623,
                'code' => '530925',
                'name' => '双江拉祜族佤族布朗族傣族自治县',
                'type' => 3,
                'full_name' => '云南省/临沧市/双江拉祜族佤族布朗族傣族自治县',
            ),
            200 => 
            array (
                'id' => 2701,
                'parent_id' => 2623,
                'code' => '530926',
                'name' => '耿马傣族佤族自治县',
                'type' => 3,
                'full_name' => '云南省/临沧市/耿马傣族佤族自治县',
            ),
            201 => 
            array (
                'id' => 2702,
                'parent_id' => 2623,
                'code' => '530927',
                'name' => '沧源佤族自治县',
                'type' => 3,
                'full_name' => '云南省/临沧市/沧源佤族自治县',
            ),
            202 => 
            array (
                'id' => 2703,
                'parent_id' => 2624,
                'code' => '532301',
                'name' => '楚雄市',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/楚雄市',
            ),
            203 => 
            array (
                'id' => 2704,
                'parent_id' => 2624,
                'code' => '532322',
                'name' => '双柏县',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/双柏县',
            ),
            204 => 
            array (
                'id' => 2705,
                'parent_id' => 2624,
                'code' => '532323',
                'name' => '牟定县',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/牟定县',
            ),
            205 => 
            array (
                'id' => 2706,
                'parent_id' => 2624,
                'code' => '532324',
                'name' => '南华县',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/南华县',
            ),
            206 => 
            array (
                'id' => 2707,
                'parent_id' => 2624,
                'code' => '532325',
                'name' => '姚安县',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/姚安县',
            ),
            207 => 
            array (
                'id' => 2708,
                'parent_id' => 2624,
                'code' => '532326',
                'name' => '大姚县',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/大姚县',
            ),
            208 => 
            array (
                'id' => 2709,
                'parent_id' => 2624,
                'code' => '532327',
                'name' => '永仁县',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/永仁县',
            ),
            209 => 
            array (
                'id' => 2710,
                'parent_id' => 2624,
                'code' => '532328',
                'name' => '元谋县',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/元谋县',
            ),
            210 => 
            array (
                'id' => 2711,
                'parent_id' => 2624,
                'code' => '532329',
                'name' => '武定县',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/武定县',
            ),
            211 => 
            array (
                'id' => 2712,
                'parent_id' => 2624,
                'code' => '532331',
                'name' => '禄丰县',
                'type' => 3,
                'full_name' => '云南省/楚雄彝族自治州/禄丰县',
            ),
            212 => 
            array (
                'id' => 2713,
                'parent_id' => 2625,
                'code' => '532501',
                'name' => '个旧市',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/个旧市',
            ),
            213 => 
            array (
                'id' => 2714,
                'parent_id' => 2625,
                'code' => '532502',
                'name' => '开远市',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/开远市',
            ),
            214 => 
            array (
                'id' => 2715,
                'parent_id' => 2625,
                'code' => '532503',
                'name' => '蒙自市',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/蒙自市',
            ),
            215 => 
            array (
                'id' => 2716,
                'parent_id' => 2625,
                'code' => '532504',
                'name' => '弥勒市',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/弥勒市',
            ),
            216 => 
            array (
                'id' => 2717,
                'parent_id' => 2625,
                'code' => '532523',
                'name' => '屏边苗族自治县',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/屏边苗族自治县',
            ),
            217 => 
            array (
                'id' => 2718,
                'parent_id' => 2625,
                'code' => '532524',
                'name' => '建水县',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/建水县',
            ),
            218 => 
            array (
                'id' => 2719,
                'parent_id' => 2625,
                'code' => '532525',
                'name' => '石屏县',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/石屏县',
            ),
            219 => 
            array (
                'id' => 2720,
                'parent_id' => 2625,
                'code' => '532527',
                'name' => '泸西县',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/泸西县',
            ),
            220 => 
            array (
                'id' => 2721,
                'parent_id' => 2625,
                'code' => '532528',
                'name' => '元阳县',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/元阳县',
            ),
            221 => 
            array (
                'id' => 2722,
                'parent_id' => 2625,
                'code' => '532529',
                'name' => '红河县',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/红河县',
            ),
            222 => 
            array (
                'id' => 2723,
                'parent_id' => 2625,
                'code' => '532530',
                'name' => '金平苗族瑶族傣族自治县',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/金平苗族瑶族傣族自治县',
            ),
            223 => 
            array (
                'id' => 2724,
                'parent_id' => 2625,
                'code' => '532531',
                'name' => '绿春县',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/绿春县',
            ),
            224 => 
            array (
                'id' => 2725,
                'parent_id' => 2625,
                'code' => '532532',
                'name' => '河口瑶族自治县',
                'type' => 3,
                'full_name' => '云南省/红河哈尼族彝族自治州/河口瑶族自治县',
            ),
            225 => 
            array (
                'id' => 2726,
                'parent_id' => 2626,
                'code' => '532601',
                'name' => '文山市',
                'type' => 3,
                'full_name' => '云南省/文山壮族苗族自治州/文山市',
            ),
            226 => 
            array (
                'id' => 2727,
                'parent_id' => 2626,
                'code' => '532622',
                'name' => '砚山县',
                'type' => 3,
                'full_name' => '云南省/文山壮族苗族自治州/砚山县',
            ),
            227 => 
            array (
                'id' => 2728,
                'parent_id' => 2626,
                'code' => '532623',
                'name' => '西畴县',
                'type' => 3,
                'full_name' => '云南省/文山壮族苗族自治州/西畴县',
            ),
            228 => 
            array (
                'id' => 2729,
                'parent_id' => 2626,
                'code' => '532624',
                'name' => '麻栗坡县',
                'type' => 3,
                'full_name' => '云南省/文山壮族苗族自治州/麻栗坡县',
            ),
            229 => 
            array (
                'id' => 2730,
                'parent_id' => 2626,
                'code' => '532625',
                'name' => '马关县',
                'type' => 3,
                'full_name' => '云南省/文山壮族苗族自治州/马关县',
            ),
            230 => 
            array (
                'id' => 2731,
                'parent_id' => 2626,
                'code' => '532626',
                'name' => '丘北县',
                'type' => 3,
                'full_name' => '云南省/文山壮族苗族自治州/丘北县',
            ),
            231 => 
            array (
                'id' => 2732,
                'parent_id' => 2626,
                'code' => '532627',
                'name' => '广南县',
                'type' => 3,
                'full_name' => '云南省/文山壮族苗族自治州/广南县',
            ),
            232 => 
            array (
                'id' => 2733,
                'parent_id' => 2626,
                'code' => '532628',
                'name' => '富宁县',
                'type' => 3,
                'full_name' => '云南省/文山壮族苗族自治州/富宁县',
            ),
            233 => 
            array (
                'id' => 2734,
                'parent_id' => 2627,
                'code' => '532801',
                'name' => '景洪市',
                'type' => 3,
                'full_name' => '云南省/西双版纳傣族自治州/景洪市',
            ),
            234 => 
            array (
                'id' => 2735,
                'parent_id' => 2627,
                'code' => '532822',
                'name' => '勐海县',
                'type' => 3,
                'full_name' => '云南省/西双版纳傣族自治州/勐海县',
            ),
            235 => 
            array (
                'id' => 2736,
                'parent_id' => 2627,
                'code' => '532823',
                'name' => '勐腊县',
                'type' => 3,
                'full_name' => '云南省/西双版纳傣族自治州/勐腊县',
            ),
            236 => 
            array (
                'id' => 2737,
                'parent_id' => 2628,
                'code' => '532901',
                'name' => '大理市',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/大理市',
            ),
            237 => 
            array (
                'id' => 2738,
                'parent_id' => 2628,
                'code' => '532922',
                'name' => '漾濞彝族自治县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/漾濞彝族自治县',
            ),
            238 => 
            array (
                'id' => 2739,
                'parent_id' => 2628,
                'code' => '532923',
                'name' => '祥云县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/祥云县',
            ),
            239 => 
            array (
                'id' => 2740,
                'parent_id' => 2628,
                'code' => '532924',
                'name' => '宾川县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/宾川县',
            ),
            240 => 
            array (
                'id' => 2741,
                'parent_id' => 2628,
                'code' => '532925',
                'name' => '弥渡县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/弥渡县',
            ),
            241 => 
            array (
                'id' => 2742,
                'parent_id' => 2628,
                'code' => '532926',
                'name' => '南涧彝族自治县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/南涧彝族自治县',
            ),
            242 => 
            array (
                'id' => 2743,
                'parent_id' => 2628,
                'code' => '532927',
                'name' => '巍山彝族回族自治县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/巍山彝族回族自治县',
            ),
            243 => 
            array (
                'id' => 2744,
                'parent_id' => 2628,
                'code' => '532928',
                'name' => '永平县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/永平县',
            ),
            244 => 
            array (
                'id' => 2745,
                'parent_id' => 2628,
                'code' => '532929',
                'name' => '云龙县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/云龙县',
            ),
            245 => 
            array (
                'id' => 2746,
                'parent_id' => 2628,
                'code' => '532930',
                'name' => '洱源县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/洱源县',
            ),
            246 => 
            array (
                'id' => 2747,
                'parent_id' => 2628,
                'code' => '532931',
                'name' => '剑川县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/剑川县',
            ),
            247 => 
            array (
                'id' => 2748,
                'parent_id' => 2628,
                'code' => '532932',
                'name' => '鹤庆县',
                'type' => 3,
                'full_name' => '云南省/大理白族自治州/鹤庆县',
            ),
            248 => 
            array (
                'id' => 2749,
                'parent_id' => 2629,
                'code' => '533102',
                'name' => '瑞丽市',
                'type' => 3,
                'full_name' => '云南省/德宏傣族景颇族自治州/瑞丽市',
            ),
            249 => 
            array (
                'id' => 2750,
                'parent_id' => 2629,
                'code' => '533103',
                'name' => '芒市',
                'type' => 3,
                'full_name' => '云南省/德宏傣族景颇族自治州/芒市',
            ),
            250 => 
            array (
                'id' => 2751,
                'parent_id' => 2629,
                'code' => '533122',
                'name' => '梁河县',
                'type' => 3,
                'full_name' => '云南省/德宏傣族景颇族自治州/梁河县',
            ),
            251 => 
            array (
                'id' => 2752,
                'parent_id' => 2629,
                'code' => '533123',
                'name' => '盈江县',
                'type' => 3,
                'full_name' => '云南省/德宏傣族景颇族自治州/盈江县',
            ),
            252 => 
            array (
                'id' => 2753,
                'parent_id' => 2629,
                'code' => '533124',
                'name' => '陇川县',
                'type' => 3,
                'full_name' => '云南省/德宏傣族景颇族自治州/陇川县',
            ),
            253 => 
            array (
                'id' => 2754,
                'parent_id' => 2630,
                'code' => '533301',
                'name' => '泸水市',
                'type' => 3,
                'full_name' => '云南省/怒江傈僳族自治州/泸水市',
            ),
            254 => 
            array (
                'id' => 2755,
                'parent_id' => 2630,
                'code' => '533323',
                'name' => '福贡县',
                'type' => 3,
                'full_name' => '云南省/怒江傈僳族自治州/福贡县',
            ),
            255 => 
            array (
                'id' => 2756,
                'parent_id' => 2630,
                'code' => '533324',
                'name' => '贡山独龙族怒族自治县',
                'type' => 3,
                'full_name' => '云南省/怒江傈僳族自治州/贡山独龙族怒族自治县',
            ),
            256 => 
            array (
                'id' => 2757,
                'parent_id' => 2630,
                'code' => '533325',
                'name' => '兰坪白族普米族自治县',
                'type' => 3,
                'full_name' => '云南省/怒江傈僳族自治州/兰坪白族普米族自治县',
            ),
            257 => 
            array (
                'id' => 2758,
                'parent_id' => 2631,
                'code' => '533401',
                'name' => '香格里拉市',
                'type' => 3,
                'full_name' => '云南省/迪庆藏族自治州/香格里拉市',
            ),
            258 => 
            array (
                'id' => 2759,
                'parent_id' => 2631,
                'code' => '533422',
                'name' => '德钦县',
                'type' => 3,
                'full_name' => '云南省/迪庆藏族自治州/德钦县',
            ),
            259 => 
            array (
                'id' => 2760,
                'parent_id' => 2631,
                'code' => '533423',
                'name' => '维西傈僳族自治县',
                'type' => 3,
                'full_name' => '云南省/迪庆藏族自治州/维西傈僳族自治县',
            ),
            260 => 
            array (
                'id' => 2761,
                'parent_id' => 27,
                'code' => '540100',
                'name' => '拉萨市',
                'type' => 2,
                'full_name' => '西藏自治区/拉萨市',
            ),
            261 => 
            array (
                'id' => 2762,
                'parent_id' => 27,
                'code' => '540200',
                'name' => '日喀则市',
                'type' => 2,
                'full_name' => '西藏自治区/日喀则市',
            ),
            262 => 
            array (
                'id' => 2763,
                'parent_id' => 27,
                'code' => '540300',
                'name' => '昌都市',
                'type' => 2,
                'full_name' => '西藏自治区/昌都市',
            ),
            263 => 
            array (
                'id' => 2764,
                'parent_id' => 27,
                'code' => '540400',
                'name' => '林芝市',
                'type' => 2,
                'full_name' => '西藏自治区/林芝市',
            ),
            264 => 
            array (
                'id' => 2765,
                'parent_id' => 27,
                'code' => '540500',
                'name' => '山南市',
                'type' => 2,
                'full_name' => '西藏自治区/山南市',
            ),
            265 => 
            array (
                'id' => 2766,
                'parent_id' => 27,
                'code' => '540600',
                'name' => '那曲市',
                'type' => 2,
                'full_name' => '西藏自治区/那曲市',
            ),
            266 => 
            array (
                'id' => 2767,
                'parent_id' => 27,
                'code' => '542500',
                'name' => '阿里地区',
                'type' => 2,
                'full_name' => '西藏自治区/阿里地区',
            ),
            267 => 
            array (
                'id' => 2768,
                'parent_id' => 2761,
                'code' => '540102',
                'name' => '城关区',
                'type' => 3,
                'full_name' => '西藏自治区/拉萨市/城关区',
            ),
            268 => 
            array (
                'id' => 2769,
                'parent_id' => 2761,
                'code' => '540103',
                'name' => '堆龙德庆区',
                'type' => 3,
                'full_name' => '西藏自治区/拉萨市/堆龙德庆区',
            ),
            269 => 
            array (
                'id' => 2770,
                'parent_id' => 2761,
                'code' => '540104',
                'name' => '达孜区',
                'type' => 3,
                'full_name' => '西藏自治区/拉萨市/达孜区',
            ),
            270 => 
            array (
                'id' => 2771,
                'parent_id' => 2761,
                'code' => '540121',
                'name' => '林周县',
                'type' => 3,
                'full_name' => '西藏自治区/拉萨市/林周县',
            ),
            271 => 
            array (
                'id' => 2772,
                'parent_id' => 2761,
                'code' => '540122',
                'name' => '当雄县',
                'type' => 3,
                'full_name' => '西藏自治区/拉萨市/当雄县',
            ),
            272 => 
            array (
                'id' => 2773,
                'parent_id' => 2761,
                'code' => '540123',
                'name' => '尼木县',
                'type' => 3,
                'full_name' => '西藏自治区/拉萨市/尼木县',
            ),
            273 => 
            array (
                'id' => 2774,
                'parent_id' => 2761,
                'code' => '540124',
                'name' => '曲水县',
                'type' => 3,
                'full_name' => '西藏自治区/拉萨市/曲水县',
            ),
            274 => 
            array (
                'id' => 2775,
                'parent_id' => 2761,
                'code' => '540127',
                'name' => '墨竹工卡县',
                'type' => 3,
                'full_name' => '西藏自治区/拉萨市/墨竹工卡县',
            ),
            275 => 
            array (
                'id' => 2776,
                'parent_id' => 2762,
                'code' => '540202',
                'name' => '桑珠孜区',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/桑珠孜区',
            ),
            276 => 
            array (
                'id' => 2777,
                'parent_id' => 2762,
                'code' => '540221',
                'name' => '南木林县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/南木林县',
            ),
            277 => 
            array (
                'id' => 2778,
                'parent_id' => 2762,
                'code' => '540222',
                'name' => '江孜县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/江孜县',
            ),
            278 => 
            array (
                'id' => 2779,
                'parent_id' => 2762,
                'code' => '540223',
                'name' => '定日县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/定日县',
            ),
            279 => 
            array (
                'id' => 2780,
                'parent_id' => 2762,
                'code' => '540224',
                'name' => '萨迦县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/萨迦县',
            ),
            280 => 
            array (
                'id' => 2781,
                'parent_id' => 2762,
                'code' => '540225',
                'name' => '拉孜县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/拉孜县',
            ),
            281 => 
            array (
                'id' => 2782,
                'parent_id' => 2762,
                'code' => '540226',
                'name' => '昂仁县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/昂仁县',
            ),
            282 => 
            array (
                'id' => 2783,
                'parent_id' => 2762,
                'code' => '540227',
                'name' => '谢通门县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/谢通门县',
            ),
            283 => 
            array (
                'id' => 2784,
                'parent_id' => 2762,
                'code' => '540228',
                'name' => '白朗县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/白朗县',
            ),
            284 => 
            array (
                'id' => 2785,
                'parent_id' => 2762,
                'code' => '540229',
                'name' => '仁布县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/仁布县',
            ),
            285 => 
            array (
                'id' => 2786,
                'parent_id' => 2762,
                'code' => '540230',
                'name' => '康马县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/康马县',
            ),
            286 => 
            array (
                'id' => 2787,
                'parent_id' => 2762,
                'code' => '540231',
                'name' => '定结县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/定结县',
            ),
            287 => 
            array (
                'id' => 2788,
                'parent_id' => 2762,
                'code' => '540232',
                'name' => '仲巴县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/仲巴县',
            ),
            288 => 
            array (
                'id' => 2789,
                'parent_id' => 2762,
                'code' => '540233',
                'name' => '亚东县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/亚东县',
            ),
            289 => 
            array (
                'id' => 2790,
                'parent_id' => 2762,
                'code' => '540234',
                'name' => '吉隆县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/吉隆县',
            ),
            290 => 
            array (
                'id' => 2791,
                'parent_id' => 2762,
                'code' => '540235',
                'name' => '聂拉木县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/聂拉木县',
            ),
            291 => 
            array (
                'id' => 2792,
                'parent_id' => 2762,
                'code' => '540236',
                'name' => '萨嘎县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/萨嘎县',
            ),
            292 => 
            array (
                'id' => 2793,
                'parent_id' => 2762,
                'code' => '540237',
                'name' => '岗巴县',
                'type' => 3,
                'full_name' => '西藏自治区/日喀则市/岗巴县',
            ),
            293 => 
            array (
                'id' => 2794,
                'parent_id' => 2763,
                'code' => '540302',
                'name' => '卡若区',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/卡若区',
            ),
            294 => 
            array (
                'id' => 2795,
                'parent_id' => 2763,
                'code' => '540321',
                'name' => '江达县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/江达县',
            ),
            295 => 
            array (
                'id' => 2796,
                'parent_id' => 2763,
                'code' => '540322',
                'name' => '贡觉县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/贡觉县',
            ),
            296 => 
            array (
                'id' => 2797,
                'parent_id' => 2763,
                'code' => '540323',
                'name' => '类乌齐县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/类乌齐县',
            ),
            297 => 
            array (
                'id' => 2798,
                'parent_id' => 2763,
                'code' => '540324',
                'name' => '丁青县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/丁青县',
            ),
            298 => 
            array (
                'id' => 2799,
                'parent_id' => 2763,
                'code' => '540325',
                'name' => '察雅县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/察雅县',
            ),
            299 => 
            array (
                'id' => 2800,
                'parent_id' => 2763,
                'code' => '540326',
                'name' => '八宿县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/八宿县',
            ),
            300 => 
            array (
                'id' => 2801,
                'parent_id' => 2763,
                'code' => '540327',
                'name' => '左贡县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/左贡县',
            ),
            301 => 
            array (
                'id' => 2802,
                'parent_id' => 2763,
                'code' => '540328',
                'name' => '芒康县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/芒康县',
            ),
            302 => 
            array (
                'id' => 2803,
                'parent_id' => 2763,
                'code' => '540329',
                'name' => '洛隆县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/洛隆县',
            ),
            303 => 
            array (
                'id' => 2804,
                'parent_id' => 2763,
                'code' => '540330',
                'name' => '边坝县',
                'type' => 3,
                'full_name' => '西藏自治区/昌都市/边坝县',
            ),
            304 => 
            array (
                'id' => 2805,
                'parent_id' => 2764,
                'code' => '540402',
                'name' => '巴宜区',
                'type' => 3,
                'full_name' => '西藏自治区/林芝市/巴宜区',
            ),
            305 => 
            array (
                'id' => 2806,
                'parent_id' => 2764,
                'code' => '540421',
                'name' => '工布江达县',
                'type' => 3,
                'full_name' => '西藏自治区/林芝市/工布江达县',
            ),
            306 => 
            array (
                'id' => 2807,
                'parent_id' => 2764,
                'code' => '540422',
                'name' => '米林县',
                'type' => 3,
                'full_name' => '西藏自治区/林芝市/米林县',
            ),
            307 => 
            array (
                'id' => 2808,
                'parent_id' => 2764,
                'code' => '540423',
                'name' => '墨脱县',
                'type' => 3,
                'full_name' => '西藏自治区/林芝市/墨脱县',
            ),
            308 => 
            array (
                'id' => 2809,
                'parent_id' => 2764,
                'code' => '540424',
                'name' => '波密县',
                'type' => 3,
                'full_name' => '西藏自治区/林芝市/波密县',
            ),
            309 => 
            array (
                'id' => 2810,
                'parent_id' => 2764,
                'code' => '540425',
                'name' => '察隅县',
                'type' => 3,
                'full_name' => '西藏自治区/林芝市/察隅县',
            ),
            310 => 
            array (
                'id' => 2811,
                'parent_id' => 2764,
                'code' => '540426',
                'name' => '朗县',
                'type' => 3,
                'full_name' => '西藏自治区/林芝市/朗县',
            ),
            311 => 
            array (
                'id' => 2812,
                'parent_id' => 2765,
                'code' => '540502',
                'name' => '乃东区',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/乃东区',
            ),
            312 => 
            array (
                'id' => 2813,
                'parent_id' => 2765,
                'code' => '540521',
                'name' => '扎囊县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/扎囊县',
            ),
            313 => 
            array (
                'id' => 2814,
                'parent_id' => 2765,
                'code' => '540522',
                'name' => '贡嘎县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/贡嘎县',
            ),
            314 => 
            array (
                'id' => 2815,
                'parent_id' => 2765,
                'code' => '540523',
                'name' => '桑日县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/桑日县',
            ),
            315 => 
            array (
                'id' => 2816,
                'parent_id' => 2765,
                'code' => '540524',
                'name' => '琼结县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/琼结县',
            ),
            316 => 
            array (
                'id' => 2817,
                'parent_id' => 2765,
                'code' => '540525',
                'name' => '曲松县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/曲松县',
            ),
            317 => 
            array (
                'id' => 2818,
                'parent_id' => 2765,
                'code' => '540526',
                'name' => '措美县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/措美县',
            ),
            318 => 
            array (
                'id' => 2819,
                'parent_id' => 2765,
                'code' => '540527',
                'name' => '洛扎县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/洛扎县',
            ),
            319 => 
            array (
                'id' => 2820,
                'parent_id' => 2765,
                'code' => '540528',
                'name' => '加查县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/加查县',
            ),
            320 => 
            array (
                'id' => 2821,
                'parent_id' => 2765,
                'code' => '540529',
                'name' => '隆子县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/隆子县',
            ),
            321 => 
            array (
                'id' => 2822,
                'parent_id' => 2765,
                'code' => '540530',
                'name' => '错那县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/错那县',
            ),
            322 => 
            array (
                'id' => 2823,
                'parent_id' => 2765,
                'code' => '540531',
                'name' => '浪卡子县',
                'type' => 3,
                'full_name' => '西藏自治区/山南市/浪卡子县',
            ),
            323 => 
            array (
                'id' => 2824,
                'parent_id' => 2766,
                'code' => '540602',
                'name' => '色尼区',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/色尼区',
            ),
            324 => 
            array (
                'id' => 2825,
                'parent_id' => 2766,
                'code' => '540621',
                'name' => '嘉黎县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/嘉黎县',
            ),
            325 => 
            array (
                'id' => 2826,
                'parent_id' => 2766,
                'code' => '540622',
                'name' => '比如县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/比如县',
            ),
            326 => 
            array (
                'id' => 2827,
                'parent_id' => 2766,
                'code' => '540623',
                'name' => '聂荣县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/聂荣县',
            ),
            327 => 
            array (
                'id' => 2828,
                'parent_id' => 2766,
                'code' => '540624',
                'name' => '安多县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/安多县',
            ),
            328 => 
            array (
                'id' => 2829,
                'parent_id' => 2766,
                'code' => '540625',
                'name' => '申扎县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/申扎县',
            ),
            329 => 
            array (
                'id' => 2830,
                'parent_id' => 2766,
                'code' => '540626',
                'name' => '索县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/索县',
            ),
            330 => 
            array (
                'id' => 2831,
                'parent_id' => 2766,
                'code' => '540627',
                'name' => '班戈县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/班戈县',
            ),
            331 => 
            array (
                'id' => 2832,
                'parent_id' => 2766,
                'code' => '540628',
                'name' => '巴青县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/巴青县',
            ),
            332 => 
            array (
                'id' => 2833,
                'parent_id' => 2766,
                'code' => '540629',
                'name' => '尼玛县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/尼玛县',
            ),
            333 => 
            array (
                'id' => 2834,
                'parent_id' => 2766,
                'code' => '540630',
                'name' => '双湖县',
                'type' => 3,
                'full_name' => '西藏自治区/那曲市/双湖县',
            ),
            334 => 
            array (
                'id' => 2835,
                'parent_id' => 2767,
                'code' => '542521',
                'name' => '普兰县',
                'type' => 3,
                'full_name' => '西藏自治区/阿里地区/普兰县',
            ),
            335 => 
            array (
                'id' => 2836,
                'parent_id' => 2767,
                'code' => '542522',
                'name' => '札达县',
                'type' => 3,
                'full_name' => '西藏自治区/阿里地区/札达县',
            ),
            336 => 
            array (
                'id' => 2837,
                'parent_id' => 2767,
                'code' => '542523',
                'name' => '噶尔县',
                'type' => 3,
                'full_name' => '西藏自治区/阿里地区/噶尔县',
            ),
            337 => 
            array (
                'id' => 2838,
                'parent_id' => 2767,
                'code' => '542524',
                'name' => '日土县',
                'type' => 3,
                'full_name' => '西藏自治区/阿里地区/日土县',
            ),
            338 => 
            array (
                'id' => 2839,
                'parent_id' => 2767,
                'code' => '542525',
                'name' => '革吉县',
                'type' => 3,
                'full_name' => '西藏自治区/阿里地区/革吉县',
            ),
            339 => 
            array (
                'id' => 2840,
                'parent_id' => 2767,
                'code' => '542526',
                'name' => '改则县',
                'type' => 3,
                'full_name' => '西藏自治区/阿里地区/改则县',
            ),
            340 => 
            array (
                'id' => 2841,
                'parent_id' => 2767,
                'code' => '542527',
                'name' => '措勤县',
                'type' => 3,
                'full_name' => '西藏自治区/阿里地区/措勤县',
            ),
            341 => 
            array (
                'id' => 2842,
                'parent_id' => 28,
                'code' => '610100',
                'name' => '西安市',
                'type' => 2,
                'full_name' => '陕西省/西安市',
            ),
            342 => 
            array (
                'id' => 2843,
                'parent_id' => 28,
                'code' => '610200',
                'name' => '铜川市',
                'type' => 2,
                'full_name' => '陕西省/铜川市',
            ),
            343 => 
            array (
                'id' => 2844,
                'parent_id' => 28,
                'code' => '610300',
                'name' => '宝鸡市',
                'type' => 2,
                'full_name' => '陕西省/宝鸡市',
            ),
            344 => 
            array (
                'id' => 2845,
                'parent_id' => 28,
                'code' => '610400',
                'name' => '咸阳市',
                'type' => 2,
                'full_name' => '陕西省/咸阳市',
            ),
            345 => 
            array (
                'id' => 2846,
                'parent_id' => 28,
                'code' => '610500',
                'name' => '渭南市',
                'type' => 2,
                'full_name' => '陕西省/渭南市',
            ),
            346 => 
            array (
                'id' => 2847,
                'parent_id' => 28,
                'code' => '610600',
                'name' => '延安市',
                'type' => 2,
                'full_name' => '陕西省/延安市',
            ),
            347 => 
            array (
                'id' => 2848,
                'parent_id' => 28,
                'code' => '610700',
                'name' => '汉中市',
                'type' => 2,
                'full_name' => '陕西省/汉中市',
            ),
            348 => 
            array (
                'id' => 2849,
                'parent_id' => 28,
                'code' => '610800',
                'name' => '榆林市',
                'type' => 2,
                'full_name' => '陕西省/榆林市',
            ),
            349 => 
            array (
                'id' => 2850,
                'parent_id' => 28,
                'code' => '610900',
                'name' => '安康市',
                'type' => 2,
                'full_name' => '陕西省/安康市',
            ),
            350 => 
            array (
                'id' => 2851,
                'parent_id' => 28,
                'code' => '611000',
                'name' => '商洛市',
                'type' => 2,
                'full_name' => '陕西省/商洛市',
            ),
            351 => 
            array (
                'id' => 2852,
                'parent_id' => 2842,
                'code' => '610102',
                'name' => '新城区',
                'type' => 3,
                'full_name' => '陕西省/西安市/新城区',
            ),
            352 => 
            array (
                'id' => 2853,
                'parent_id' => 2842,
                'code' => '610103',
                'name' => '碑林区',
                'type' => 3,
                'full_name' => '陕西省/西安市/碑林区',
            ),
            353 => 
            array (
                'id' => 2854,
                'parent_id' => 2842,
                'code' => '610104',
                'name' => '莲湖区',
                'type' => 3,
                'full_name' => '陕西省/西安市/莲湖区',
            ),
            354 => 
            array (
                'id' => 2855,
                'parent_id' => 2842,
                'code' => '610111',
                'name' => '灞桥区',
                'type' => 3,
                'full_name' => '陕西省/西安市/灞桥区',
            ),
            355 => 
            array (
                'id' => 2856,
                'parent_id' => 2842,
                'code' => '610112',
                'name' => '未央区',
                'type' => 3,
                'full_name' => '陕西省/西安市/未央区',
            ),
            356 => 
            array (
                'id' => 2857,
                'parent_id' => 2842,
                'code' => '610113',
                'name' => '雁塔区',
                'type' => 3,
                'full_name' => '陕西省/西安市/雁塔区',
            ),
            357 => 
            array (
                'id' => 2858,
                'parent_id' => 2842,
                'code' => '610114',
                'name' => '阎良区',
                'type' => 3,
                'full_name' => '陕西省/西安市/阎良区',
            ),
            358 => 
            array (
                'id' => 2859,
                'parent_id' => 2842,
                'code' => '610115',
                'name' => '临潼区',
                'type' => 3,
                'full_name' => '陕西省/西安市/临潼区',
            ),
            359 => 
            array (
                'id' => 2860,
                'parent_id' => 2842,
                'code' => '610116',
                'name' => '长安区',
                'type' => 3,
                'full_name' => '陕西省/西安市/长安区',
            ),
            360 => 
            array (
                'id' => 2861,
                'parent_id' => 2842,
                'code' => '610117',
                'name' => '高陵区',
                'type' => 3,
                'full_name' => '陕西省/西安市/高陵区',
            ),
            361 => 
            array (
                'id' => 2862,
                'parent_id' => 2842,
                'code' => '610118',
                'name' => '鄠邑区',
                'type' => 3,
                'full_name' => '陕西省/西安市/鄠邑区',
            ),
            362 => 
            array (
                'id' => 2863,
                'parent_id' => 2842,
                'code' => '610122',
                'name' => '蓝田县',
                'type' => 3,
                'full_name' => '陕西省/西安市/蓝田县',
            ),
            363 => 
            array (
                'id' => 2864,
                'parent_id' => 2842,
                'code' => '610124',
                'name' => '周至县',
                'type' => 3,
                'full_name' => '陕西省/西安市/周至县',
            ),
            364 => 
            array (
                'id' => 2865,
                'parent_id' => 2843,
                'code' => '610202',
                'name' => '王益区',
                'type' => 3,
                'full_name' => '陕西省/铜川市/王益区',
            ),
            365 => 
            array (
                'id' => 2866,
                'parent_id' => 2843,
                'code' => '610203',
                'name' => '印台区',
                'type' => 3,
                'full_name' => '陕西省/铜川市/印台区',
            ),
            366 => 
            array (
                'id' => 2867,
                'parent_id' => 2843,
                'code' => '610204',
                'name' => '耀州区',
                'type' => 3,
                'full_name' => '陕西省/铜川市/耀州区',
            ),
            367 => 
            array (
                'id' => 2868,
                'parent_id' => 2843,
                'code' => '610222',
                'name' => '宜君县',
                'type' => 3,
                'full_name' => '陕西省/铜川市/宜君县',
            ),
            368 => 
            array (
                'id' => 2869,
                'parent_id' => 2844,
                'code' => '610302',
                'name' => '渭滨区',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/渭滨区',
            ),
            369 => 
            array (
                'id' => 2870,
                'parent_id' => 2844,
                'code' => '610303',
                'name' => '金台区',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/金台区',
            ),
            370 => 
            array (
                'id' => 2871,
                'parent_id' => 2844,
                'code' => '610304',
                'name' => '陈仓区',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/陈仓区',
            ),
            371 => 
            array (
                'id' => 2872,
                'parent_id' => 2844,
                'code' => '610322',
                'name' => '凤翔县',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/凤翔县',
            ),
            372 => 
            array (
                'id' => 2873,
                'parent_id' => 2844,
                'code' => '610323',
                'name' => '岐山县',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/岐山县',
            ),
            373 => 
            array (
                'id' => 2874,
                'parent_id' => 2844,
                'code' => '610324',
                'name' => '扶风县',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/扶风县',
            ),
            374 => 
            array (
                'id' => 2875,
                'parent_id' => 2844,
                'code' => '610326',
                'name' => '眉县',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/眉县',
            ),
            375 => 
            array (
                'id' => 2876,
                'parent_id' => 2844,
                'code' => '610327',
                'name' => '陇县',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/陇县',
            ),
            376 => 
            array (
                'id' => 2877,
                'parent_id' => 2844,
                'code' => '610328',
                'name' => '千阳县',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/千阳县',
            ),
            377 => 
            array (
                'id' => 2878,
                'parent_id' => 2844,
                'code' => '610329',
                'name' => '麟游县',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/麟游县',
            ),
            378 => 
            array (
                'id' => 2879,
                'parent_id' => 2844,
                'code' => '610330',
                'name' => '凤县',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/凤县',
            ),
            379 => 
            array (
                'id' => 2880,
                'parent_id' => 2844,
                'code' => '610331',
                'name' => '太白县',
                'type' => 3,
                'full_name' => '陕西省/宝鸡市/太白县',
            ),
            380 => 
            array (
                'id' => 2881,
                'parent_id' => 2845,
                'code' => '610402',
                'name' => '秦都区',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/秦都区',
            ),
            381 => 
            array (
                'id' => 2882,
                'parent_id' => 2845,
                'code' => '610403',
                'name' => '杨陵区',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/杨陵区',
            ),
            382 => 
            array (
                'id' => 2883,
                'parent_id' => 2845,
                'code' => '610404',
                'name' => '渭城区',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/渭城区',
            ),
            383 => 
            array (
                'id' => 2884,
                'parent_id' => 2845,
                'code' => '610422',
                'name' => '三原县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/三原县',
            ),
            384 => 
            array (
                'id' => 2885,
                'parent_id' => 2845,
                'code' => '610423',
                'name' => '泾阳县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/泾阳县',
            ),
            385 => 
            array (
                'id' => 2886,
                'parent_id' => 2845,
                'code' => '610424',
                'name' => '乾县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/乾县',
            ),
            386 => 
            array (
                'id' => 2887,
                'parent_id' => 2845,
                'code' => '610425',
                'name' => '礼泉县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/礼泉县',
            ),
            387 => 
            array (
                'id' => 2888,
                'parent_id' => 2845,
                'code' => '610426',
                'name' => '永寿县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/永寿县',
            ),
            388 => 
            array (
                'id' => 2889,
                'parent_id' => 2845,
                'code' => '610427',
                'name' => '彬县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/彬县',
            ),
            389 => 
            array (
                'id' => 2890,
                'parent_id' => 2845,
                'code' => '610428',
                'name' => '长武县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/长武县',
            ),
            390 => 
            array (
                'id' => 2891,
                'parent_id' => 2845,
                'code' => '610429',
                'name' => '旬邑县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/旬邑县',
            ),
            391 => 
            array (
                'id' => 2892,
                'parent_id' => 2845,
                'code' => '610430',
                'name' => '淳化县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/淳化县',
            ),
            392 => 
            array (
                'id' => 2893,
                'parent_id' => 2845,
                'code' => '610431',
                'name' => '武功县',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/武功县',
            ),
            393 => 
            array (
                'id' => 2894,
                'parent_id' => 2845,
                'code' => '610481',
                'name' => '兴平市',
                'type' => 3,
                'full_name' => '陕西省/咸阳市/兴平市',
            ),
            394 => 
            array (
                'id' => 2895,
                'parent_id' => 2846,
                'code' => '610502',
                'name' => '临渭区',
                'type' => 3,
                'full_name' => '陕西省/渭南市/临渭区',
            ),
            395 => 
            array (
                'id' => 2896,
                'parent_id' => 2846,
                'code' => '610503',
                'name' => '华州区',
                'type' => 3,
                'full_name' => '陕西省/渭南市/华州区',
            ),
            396 => 
            array (
                'id' => 2897,
                'parent_id' => 2846,
                'code' => '610522',
                'name' => '潼关县',
                'type' => 3,
                'full_name' => '陕西省/渭南市/潼关县',
            ),
            397 => 
            array (
                'id' => 2898,
                'parent_id' => 2846,
                'code' => '610523',
                'name' => '大荔县',
                'type' => 3,
                'full_name' => '陕西省/渭南市/大荔县',
            ),
            398 => 
            array (
                'id' => 2899,
                'parent_id' => 2846,
                'code' => '610524',
                'name' => '合阳县',
                'type' => 3,
                'full_name' => '陕西省/渭南市/合阳县',
            ),
            399 => 
            array (
                'id' => 2900,
                'parent_id' => 2846,
                'code' => '610525',
                'name' => '澄城县',
                'type' => 3,
                'full_name' => '陕西省/渭南市/澄城县',
            ),
            400 => 
            array (
                'id' => 2901,
                'parent_id' => 2846,
                'code' => '610526',
                'name' => '蒲城县',
                'type' => 3,
                'full_name' => '陕西省/渭南市/蒲城县',
            ),
            401 => 
            array (
                'id' => 2902,
                'parent_id' => 2846,
                'code' => '610527',
                'name' => '白水县',
                'type' => 3,
                'full_name' => '陕西省/渭南市/白水县',
            ),
            402 => 
            array (
                'id' => 2903,
                'parent_id' => 2846,
                'code' => '610528',
                'name' => '富平县',
                'type' => 3,
                'full_name' => '陕西省/渭南市/富平县',
            ),
            403 => 
            array (
                'id' => 2904,
                'parent_id' => 2846,
                'code' => '610581',
                'name' => '韩城市',
                'type' => 3,
                'full_name' => '陕西省/渭南市/韩城市',
            ),
            404 => 
            array (
                'id' => 2905,
                'parent_id' => 2846,
                'code' => '610582',
                'name' => '华阴市',
                'type' => 3,
                'full_name' => '陕西省/渭南市/华阴市',
            ),
            405 => 
            array (
                'id' => 2906,
                'parent_id' => 2847,
                'code' => '610602',
                'name' => '宝塔区',
                'type' => 3,
                'full_name' => '陕西省/延安市/宝塔区',
            ),
            406 => 
            array (
                'id' => 2907,
                'parent_id' => 2847,
                'code' => '610603',
                'name' => '安塞区',
                'type' => 3,
                'full_name' => '陕西省/延安市/安塞区',
            ),
            407 => 
            array (
                'id' => 2908,
                'parent_id' => 2847,
                'code' => '610621',
                'name' => '延长县',
                'type' => 3,
                'full_name' => '陕西省/延安市/延长县',
            ),
            408 => 
            array (
                'id' => 2909,
                'parent_id' => 2847,
                'code' => '610622',
                'name' => '延川县',
                'type' => 3,
                'full_name' => '陕西省/延安市/延川县',
            ),
            409 => 
            array (
                'id' => 2910,
                'parent_id' => 2847,
                'code' => '610623',
                'name' => '子长县',
                'type' => 3,
                'full_name' => '陕西省/延安市/子长县',
            ),
            410 => 
            array (
                'id' => 2911,
                'parent_id' => 2847,
                'code' => '610625',
                'name' => '志丹县',
                'type' => 3,
                'full_name' => '陕西省/延安市/志丹县',
            ),
            411 => 
            array (
                'id' => 2912,
                'parent_id' => 2847,
                'code' => '610626',
                'name' => '吴起县',
                'type' => 3,
                'full_name' => '陕西省/延安市/吴起县',
            ),
            412 => 
            array (
                'id' => 2913,
                'parent_id' => 2847,
                'code' => '610627',
                'name' => '甘泉县',
                'type' => 3,
                'full_name' => '陕西省/延安市/甘泉县',
            ),
            413 => 
            array (
                'id' => 2914,
                'parent_id' => 2847,
                'code' => '610628',
                'name' => '富县',
                'type' => 3,
                'full_name' => '陕西省/延安市/富县',
            ),
            414 => 
            array (
                'id' => 2915,
                'parent_id' => 2847,
                'code' => '610629',
                'name' => '洛川县',
                'type' => 3,
                'full_name' => '陕西省/延安市/洛川县',
            ),
            415 => 
            array (
                'id' => 2916,
                'parent_id' => 2847,
                'code' => '610630',
                'name' => '宜川县',
                'type' => 3,
                'full_name' => '陕西省/延安市/宜川县',
            ),
            416 => 
            array (
                'id' => 2917,
                'parent_id' => 2847,
                'code' => '610631',
                'name' => '黄龙县',
                'type' => 3,
                'full_name' => '陕西省/延安市/黄龙县',
            ),
            417 => 
            array (
                'id' => 2918,
                'parent_id' => 2847,
                'code' => '610632',
                'name' => '黄陵县',
                'type' => 3,
                'full_name' => '陕西省/延安市/黄陵县',
            ),
            418 => 
            array (
                'id' => 2919,
                'parent_id' => 2848,
                'code' => '610702',
                'name' => '汉台区',
                'type' => 3,
                'full_name' => '陕西省/汉中市/汉台区',
            ),
            419 => 
            array (
                'id' => 2920,
                'parent_id' => 2848,
                'code' => '610703',
                'name' => '南郑区',
                'type' => 3,
                'full_name' => '陕西省/汉中市/南郑区',
            ),
            420 => 
            array (
                'id' => 2921,
                'parent_id' => 2848,
                'code' => '610722',
                'name' => '城固县',
                'type' => 3,
                'full_name' => '陕西省/汉中市/城固县',
            ),
            421 => 
            array (
                'id' => 2922,
                'parent_id' => 2848,
                'code' => '610723',
                'name' => '洋县',
                'type' => 3,
                'full_name' => '陕西省/汉中市/洋县',
            ),
            422 => 
            array (
                'id' => 2923,
                'parent_id' => 2848,
                'code' => '610724',
                'name' => '西乡县',
                'type' => 3,
                'full_name' => '陕西省/汉中市/西乡县',
            ),
            423 => 
            array (
                'id' => 2924,
                'parent_id' => 2848,
                'code' => '610725',
                'name' => '勉县',
                'type' => 3,
                'full_name' => '陕西省/汉中市/勉县',
            ),
            424 => 
            array (
                'id' => 2925,
                'parent_id' => 2848,
                'code' => '610726',
                'name' => '宁强县',
                'type' => 3,
                'full_name' => '陕西省/汉中市/宁强县',
            ),
            425 => 
            array (
                'id' => 2926,
                'parent_id' => 2848,
                'code' => '610727',
                'name' => '略阳县',
                'type' => 3,
                'full_name' => '陕西省/汉中市/略阳县',
            ),
            426 => 
            array (
                'id' => 2927,
                'parent_id' => 2848,
                'code' => '610728',
                'name' => '镇巴县',
                'type' => 3,
                'full_name' => '陕西省/汉中市/镇巴县',
            ),
            427 => 
            array (
                'id' => 2928,
                'parent_id' => 2848,
                'code' => '610729',
                'name' => '留坝县',
                'type' => 3,
                'full_name' => '陕西省/汉中市/留坝县',
            ),
            428 => 
            array (
                'id' => 2929,
                'parent_id' => 2848,
                'code' => '610730',
                'name' => '佛坪县',
                'type' => 3,
                'full_name' => '陕西省/汉中市/佛坪县',
            ),
            429 => 
            array (
                'id' => 2930,
                'parent_id' => 2849,
                'code' => '610802',
                'name' => '榆阳区',
                'type' => 3,
                'full_name' => '陕西省/榆林市/榆阳区',
            ),
            430 => 
            array (
                'id' => 2931,
                'parent_id' => 2849,
                'code' => '610803',
                'name' => '横山区',
                'type' => 3,
                'full_name' => '陕西省/榆林市/横山区',
            ),
            431 => 
            array (
                'id' => 2932,
                'parent_id' => 2849,
                'code' => '610822',
                'name' => '府谷县',
                'type' => 3,
                'full_name' => '陕西省/榆林市/府谷县',
            ),
            432 => 
            array (
                'id' => 2933,
                'parent_id' => 2849,
                'code' => '610824',
                'name' => '靖边县',
                'type' => 3,
                'full_name' => '陕西省/榆林市/靖边县',
            ),
            433 => 
            array (
                'id' => 2934,
                'parent_id' => 2849,
                'code' => '610825',
                'name' => '定边县',
                'type' => 3,
                'full_name' => '陕西省/榆林市/定边县',
            ),
            434 => 
            array (
                'id' => 2935,
                'parent_id' => 2849,
                'code' => '610826',
                'name' => '绥德县',
                'type' => 3,
                'full_name' => '陕西省/榆林市/绥德县',
            ),
            435 => 
            array (
                'id' => 2936,
                'parent_id' => 2849,
                'code' => '610827',
                'name' => '米脂县',
                'type' => 3,
                'full_name' => '陕西省/榆林市/米脂县',
            ),
            436 => 
            array (
                'id' => 2937,
                'parent_id' => 2849,
                'code' => '610828',
                'name' => '佳县',
                'type' => 3,
                'full_name' => '陕西省/榆林市/佳县',
            ),
            437 => 
            array (
                'id' => 2938,
                'parent_id' => 2849,
                'code' => '610829',
                'name' => '吴堡县',
                'type' => 3,
                'full_name' => '陕西省/榆林市/吴堡县',
            ),
            438 => 
            array (
                'id' => 2939,
                'parent_id' => 2849,
                'code' => '610830',
                'name' => '清涧县',
                'type' => 3,
                'full_name' => '陕西省/榆林市/清涧县',
            ),
            439 => 
            array (
                'id' => 2940,
                'parent_id' => 2849,
                'code' => '610831',
                'name' => '子洲县',
                'type' => 3,
                'full_name' => '陕西省/榆林市/子洲县',
            ),
            440 => 
            array (
                'id' => 2941,
                'parent_id' => 2849,
                'code' => '610881',
                'name' => '神木市',
                'type' => 3,
                'full_name' => '陕西省/榆林市/神木市',
            ),
            441 => 
            array (
                'id' => 2942,
                'parent_id' => 2850,
                'code' => '610902',
                'name' => '汉滨区',
                'type' => 3,
                'full_name' => '陕西省/安康市/汉滨区',
            ),
            442 => 
            array (
                'id' => 2943,
                'parent_id' => 2850,
                'code' => '610921',
                'name' => '汉阴县',
                'type' => 3,
                'full_name' => '陕西省/安康市/汉阴县',
            ),
            443 => 
            array (
                'id' => 2944,
                'parent_id' => 2850,
                'code' => '610922',
                'name' => '石泉县',
                'type' => 3,
                'full_name' => '陕西省/安康市/石泉县',
            ),
            444 => 
            array (
                'id' => 2945,
                'parent_id' => 2850,
                'code' => '610923',
                'name' => '宁陕县',
                'type' => 3,
                'full_name' => '陕西省/安康市/宁陕县',
            ),
            445 => 
            array (
                'id' => 2946,
                'parent_id' => 2850,
                'code' => '610924',
                'name' => '紫阳县',
                'type' => 3,
                'full_name' => '陕西省/安康市/紫阳县',
            ),
            446 => 
            array (
                'id' => 2947,
                'parent_id' => 2850,
                'code' => '610925',
                'name' => '岚皋县',
                'type' => 3,
                'full_name' => '陕西省/安康市/岚皋县',
            ),
            447 => 
            array (
                'id' => 2948,
                'parent_id' => 2850,
                'code' => '610926',
                'name' => '平利县',
                'type' => 3,
                'full_name' => '陕西省/安康市/平利县',
            ),
            448 => 
            array (
                'id' => 2949,
                'parent_id' => 2850,
                'code' => '610927',
                'name' => '镇坪县',
                'type' => 3,
                'full_name' => '陕西省/安康市/镇坪县',
            ),
            449 => 
            array (
                'id' => 2950,
                'parent_id' => 2850,
                'code' => '610928',
                'name' => '旬阳县',
                'type' => 3,
                'full_name' => '陕西省/安康市/旬阳县',
            ),
            450 => 
            array (
                'id' => 2951,
                'parent_id' => 2850,
                'code' => '610929',
                'name' => '白河县',
                'type' => 3,
                'full_name' => '陕西省/安康市/白河县',
            ),
            451 => 
            array (
                'id' => 2952,
                'parent_id' => 2851,
                'code' => '611002',
                'name' => '商州区',
                'type' => 3,
                'full_name' => '陕西省/商洛市/商州区',
            ),
            452 => 
            array (
                'id' => 2953,
                'parent_id' => 2851,
                'code' => '611021',
                'name' => '洛南县',
                'type' => 3,
                'full_name' => '陕西省/商洛市/洛南县',
            ),
            453 => 
            array (
                'id' => 2954,
                'parent_id' => 2851,
                'code' => '611022',
                'name' => '丹凤县',
                'type' => 3,
                'full_name' => '陕西省/商洛市/丹凤县',
            ),
            454 => 
            array (
                'id' => 2955,
                'parent_id' => 2851,
                'code' => '611023',
                'name' => '商南县',
                'type' => 3,
                'full_name' => '陕西省/商洛市/商南县',
            ),
            455 => 
            array (
                'id' => 2956,
                'parent_id' => 2851,
                'code' => '611024',
                'name' => '山阳县',
                'type' => 3,
                'full_name' => '陕西省/商洛市/山阳县',
            ),
            456 => 
            array (
                'id' => 2957,
                'parent_id' => 2851,
                'code' => '611025',
                'name' => '镇安县',
                'type' => 3,
                'full_name' => '陕西省/商洛市/镇安县',
            ),
            457 => 
            array (
                'id' => 2958,
                'parent_id' => 2851,
                'code' => '611026',
                'name' => '柞水县',
                'type' => 3,
                'full_name' => '陕西省/商洛市/柞水县',
            ),
            458 => 
            array (
                'id' => 2959,
                'parent_id' => 29,
                'code' => '620100',
                'name' => '兰州市',
                'type' => 2,
                'full_name' => '甘肃省/兰州市',
            ),
            459 => 
            array (
                'id' => 2960,
                'parent_id' => 29,
                'code' => '620200',
                'name' => '嘉峪关市',
                'type' => 2,
                'full_name' => '甘肃省/嘉峪关市',
            ),
            460 => 
            array (
                'id' => 2961,
                'parent_id' => 29,
                'code' => '620300',
                'name' => '金昌市',
                'type' => 2,
                'full_name' => '甘肃省/金昌市',
            ),
            461 => 
            array (
                'id' => 2962,
                'parent_id' => 29,
                'code' => '620400',
                'name' => '白银市',
                'type' => 2,
                'full_name' => '甘肃省/白银市',
            ),
            462 => 
            array (
                'id' => 2963,
                'parent_id' => 29,
                'code' => '620500',
                'name' => '天水市',
                'type' => 2,
                'full_name' => '甘肃省/天水市',
            ),
            463 => 
            array (
                'id' => 2964,
                'parent_id' => 29,
                'code' => '620600',
                'name' => '武威市',
                'type' => 2,
                'full_name' => '甘肃省/武威市',
            ),
            464 => 
            array (
                'id' => 2965,
                'parent_id' => 29,
                'code' => '620700',
                'name' => '张掖市',
                'type' => 2,
                'full_name' => '甘肃省/张掖市',
            ),
            465 => 
            array (
                'id' => 2966,
                'parent_id' => 29,
                'code' => '620800',
                'name' => '平凉市',
                'type' => 2,
                'full_name' => '甘肃省/平凉市',
            ),
            466 => 
            array (
                'id' => 2967,
                'parent_id' => 29,
                'code' => '620900',
                'name' => '酒泉市',
                'type' => 2,
                'full_name' => '甘肃省/酒泉市',
            ),
            467 => 
            array (
                'id' => 2968,
                'parent_id' => 29,
                'code' => '621000',
                'name' => '庆阳市',
                'type' => 2,
                'full_name' => '甘肃省/庆阳市',
            ),
            468 => 
            array (
                'id' => 2969,
                'parent_id' => 29,
                'code' => '621100',
                'name' => '定西市',
                'type' => 2,
                'full_name' => '甘肃省/定西市',
            ),
            469 => 
            array (
                'id' => 2970,
                'parent_id' => 29,
                'code' => '621200',
                'name' => '陇南市',
                'type' => 2,
                'full_name' => '甘肃省/陇南市',
            ),
            470 => 
            array (
                'id' => 2971,
                'parent_id' => 29,
                'code' => '622900',
                'name' => '临夏回族自治州',
                'type' => 2,
                'full_name' => '甘肃省/临夏回族自治州',
            ),
            471 => 
            array (
                'id' => 2972,
                'parent_id' => 29,
                'code' => '623000',
                'name' => '甘南藏族自治州',
                'type' => 2,
                'full_name' => '甘肃省/甘南藏族自治州',
            ),
            472 => 
            array (
                'id' => 2973,
                'parent_id' => 2959,
                'code' => '620102',
                'name' => '城关区',
                'type' => 3,
                'full_name' => '甘肃省/兰州市/城关区',
            ),
            473 => 
            array (
                'id' => 2974,
                'parent_id' => 2959,
                'code' => '620103',
                'name' => '七里河区',
                'type' => 3,
                'full_name' => '甘肃省/兰州市/七里河区',
            ),
            474 => 
            array (
                'id' => 2975,
                'parent_id' => 2959,
                'code' => '620104',
                'name' => '西固区',
                'type' => 3,
                'full_name' => '甘肃省/兰州市/西固区',
            ),
            475 => 
            array (
                'id' => 2976,
                'parent_id' => 2959,
                'code' => '620105',
                'name' => '安宁区',
                'type' => 3,
                'full_name' => '甘肃省/兰州市/安宁区',
            ),
            476 => 
            array (
                'id' => 2977,
                'parent_id' => 2959,
                'code' => '620111',
                'name' => '红古区',
                'type' => 3,
                'full_name' => '甘肃省/兰州市/红古区',
            ),
            477 => 
            array (
                'id' => 2978,
                'parent_id' => 2959,
                'code' => '620121',
                'name' => '永登县',
                'type' => 3,
                'full_name' => '甘肃省/兰州市/永登县',
            ),
            478 => 
            array (
                'id' => 2979,
                'parent_id' => 2959,
                'code' => '620122',
                'name' => '皋兰县',
                'type' => 3,
                'full_name' => '甘肃省/兰州市/皋兰县',
            ),
            479 => 
            array (
                'id' => 2980,
                'parent_id' => 2959,
                'code' => '620123',
                'name' => '榆中县',
                'type' => 3,
                'full_name' => '甘肃省/兰州市/榆中县',
            ),
            480 => 
            array (
                'id' => 2981,
                'parent_id' => 2960,
                'code' => '620200',
                'name' => '嘉峪关市',
                'type' => 3,
                'full_name' => '甘肃省/嘉峪关市/嘉峪关市',
            ),
            481 => 
            array (
                'id' => 2982,
                'parent_id' => 2961,
                'code' => '620302',
                'name' => '金川区',
                'type' => 3,
                'full_name' => '甘肃省/金昌市/金川区',
            ),
            482 => 
            array (
                'id' => 2983,
                'parent_id' => 2961,
                'code' => '620321',
                'name' => '永昌县',
                'type' => 3,
                'full_name' => '甘肃省/金昌市/永昌县',
            ),
            483 => 
            array (
                'id' => 2984,
                'parent_id' => 2962,
                'code' => '620402',
                'name' => '白银区',
                'type' => 3,
                'full_name' => '甘肃省/白银市/白银区',
            ),
            484 => 
            array (
                'id' => 2985,
                'parent_id' => 2962,
                'code' => '620403',
                'name' => '平川区',
                'type' => 3,
                'full_name' => '甘肃省/白银市/平川区',
            ),
            485 => 
            array (
                'id' => 2986,
                'parent_id' => 2962,
                'code' => '620421',
                'name' => '靖远县',
                'type' => 3,
                'full_name' => '甘肃省/白银市/靖远县',
            ),
            486 => 
            array (
                'id' => 2987,
                'parent_id' => 2962,
                'code' => '620422',
                'name' => '会宁县',
                'type' => 3,
                'full_name' => '甘肃省/白银市/会宁县',
            ),
            487 => 
            array (
                'id' => 2988,
                'parent_id' => 2962,
                'code' => '620423',
                'name' => '景泰县',
                'type' => 3,
                'full_name' => '甘肃省/白银市/景泰县',
            ),
            488 => 
            array (
                'id' => 2989,
                'parent_id' => 2963,
                'code' => '620502',
                'name' => '秦州区',
                'type' => 3,
                'full_name' => '甘肃省/天水市/秦州区',
            ),
            489 => 
            array (
                'id' => 2990,
                'parent_id' => 2963,
                'code' => '620503',
                'name' => '麦积区',
                'type' => 3,
                'full_name' => '甘肃省/天水市/麦积区',
            ),
            490 => 
            array (
                'id' => 2991,
                'parent_id' => 2963,
                'code' => '620521',
                'name' => '清水县',
                'type' => 3,
                'full_name' => '甘肃省/天水市/清水县',
            ),
            491 => 
            array (
                'id' => 2992,
                'parent_id' => 2963,
                'code' => '620522',
                'name' => '秦安县',
                'type' => 3,
                'full_name' => '甘肃省/天水市/秦安县',
            ),
            492 => 
            array (
                'id' => 2993,
                'parent_id' => 2963,
                'code' => '620523',
                'name' => '甘谷县',
                'type' => 3,
                'full_name' => '甘肃省/天水市/甘谷县',
            ),
            493 => 
            array (
                'id' => 2994,
                'parent_id' => 2963,
                'code' => '620524',
                'name' => '武山县',
                'type' => 3,
                'full_name' => '甘肃省/天水市/武山县',
            ),
            494 => 
            array (
                'id' => 2995,
                'parent_id' => 2963,
                'code' => '620525',
                'name' => '张家川回族自治县',
                'type' => 3,
                'full_name' => '甘肃省/天水市/张家川回族自治县',
            ),
            495 => 
            array (
                'id' => 2996,
                'parent_id' => 2964,
                'code' => '620602',
                'name' => '凉州区',
                'type' => 3,
                'full_name' => '甘肃省/武威市/凉州区',
            ),
            496 => 
            array (
                'id' => 2997,
                'parent_id' => 2964,
                'code' => '620621',
                'name' => '民勤县',
                'type' => 3,
                'full_name' => '甘肃省/武威市/民勤县',
            ),
            497 => 
            array (
                'id' => 2998,
                'parent_id' => 2964,
                'code' => '620622',
                'name' => '古浪县',
                'type' => 3,
                'full_name' => '甘肃省/武威市/古浪县',
            ),
            498 => 
            array (
                'id' => 2999,
                'parent_id' => 2964,
                'code' => '620623',
                'name' => '天祝藏族自治县',
                'type' => 3,
                'full_name' => '甘肃省/武威市/天祝藏族自治县',
            ),
            499 => 
            array (
                'id' => 3000,
                'parent_id' => 2965,
                'code' => '620702',
                'name' => '甘州区',
                'type' => 3,
                'full_name' => '甘肃省/张掖市/甘州区',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'parent_id' => 2965,
                'code' => '620721',
                'name' => '肃南裕固族自治县',
                'type' => 3,
                'full_name' => '甘肃省/张掖市/肃南裕固族自治县',
            ),
            1 => 
            array (
                'id' => 3002,
                'parent_id' => 2965,
                'code' => '620722',
                'name' => '民乐县',
                'type' => 3,
                'full_name' => '甘肃省/张掖市/民乐县',
            ),
            2 => 
            array (
                'id' => 3003,
                'parent_id' => 2965,
                'code' => '620723',
                'name' => '临泽县',
                'type' => 3,
                'full_name' => '甘肃省/张掖市/临泽县',
            ),
            3 => 
            array (
                'id' => 3004,
                'parent_id' => 2965,
                'code' => '620724',
                'name' => '高台县',
                'type' => 3,
                'full_name' => '甘肃省/张掖市/高台县',
            ),
            4 => 
            array (
                'id' => 3005,
                'parent_id' => 2965,
                'code' => '620725',
                'name' => '山丹县',
                'type' => 3,
                'full_name' => '甘肃省/张掖市/山丹县',
            ),
            5 => 
            array (
                'id' => 3006,
                'parent_id' => 2966,
                'code' => '620802',
                'name' => '崆峒区',
                'type' => 3,
                'full_name' => '甘肃省/平凉市/崆峒区',
            ),
            6 => 
            array (
                'id' => 3007,
                'parent_id' => 2966,
                'code' => '620821',
                'name' => '泾川县',
                'type' => 3,
                'full_name' => '甘肃省/平凉市/泾川县',
            ),
            7 => 
            array (
                'id' => 3008,
                'parent_id' => 2966,
                'code' => '620822',
                'name' => '灵台县',
                'type' => 3,
                'full_name' => '甘肃省/平凉市/灵台县',
            ),
            8 => 
            array (
                'id' => 3009,
                'parent_id' => 2966,
                'code' => '620823',
                'name' => '崇信县',
                'type' => 3,
                'full_name' => '甘肃省/平凉市/崇信县',
            ),
            9 => 
            array (
                'id' => 3010,
                'parent_id' => 2966,
                'code' => '620824',
                'name' => '华亭县',
                'type' => 3,
                'full_name' => '甘肃省/平凉市/华亭县',
            ),
            10 => 
            array (
                'id' => 3011,
                'parent_id' => 2966,
                'code' => '620825',
                'name' => '庄浪县',
                'type' => 3,
                'full_name' => '甘肃省/平凉市/庄浪县',
            ),
            11 => 
            array (
                'id' => 3012,
                'parent_id' => 2966,
                'code' => '620826',
                'name' => '静宁县',
                'type' => 3,
                'full_name' => '甘肃省/平凉市/静宁县',
            ),
            12 => 
            array (
                'id' => 3013,
                'parent_id' => 2967,
                'code' => '620902',
                'name' => '肃州区',
                'type' => 3,
                'full_name' => '甘肃省/酒泉市/肃州区',
            ),
            13 => 
            array (
                'id' => 3014,
                'parent_id' => 2967,
                'code' => '620921',
                'name' => '金塔县',
                'type' => 3,
                'full_name' => '甘肃省/酒泉市/金塔县',
            ),
            14 => 
            array (
                'id' => 3015,
                'parent_id' => 2967,
                'code' => '620922',
                'name' => '瓜州县',
                'type' => 3,
                'full_name' => '甘肃省/酒泉市/瓜州县',
            ),
            15 => 
            array (
                'id' => 3016,
                'parent_id' => 2967,
                'code' => '620923',
                'name' => '肃北蒙古族自治县',
                'type' => 3,
                'full_name' => '甘肃省/酒泉市/肃北蒙古族自治县',
            ),
            16 => 
            array (
                'id' => 3017,
                'parent_id' => 2967,
                'code' => '620924',
                'name' => '阿克塞哈萨克族自治县',
                'type' => 3,
                'full_name' => '甘肃省/酒泉市/阿克塞哈萨克族自治县',
            ),
            17 => 
            array (
                'id' => 3018,
                'parent_id' => 2967,
                'code' => '620981',
                'name' => '玉门市',
                'type' => 3,
                'full_name' => '甘肃省/酒泉市/玉门市',
            ),
            18 => 
            array (
                'id' => 3019,
                'parent_id' => 2967,
                'code' => '620982',
                'name' => '敦煌市',
                'type' => 3,
                'full_name' => '甘肃省/酒泉市/敦煌市',
            ),
            19 => 
            array (
                'id' => 3020,
                'parent_id' => 2968,
                'code' => '621002',
                'name' => '西峰区',
                'type' => 3,
                'full_name' => '甘肃省/庆阳市/西峰区',
            ),
            20 => 
            array (
                'id' => 3021,
                'parent_id' => 2968,
                'code' => '621021',
                'name' => '庆城县',
                'type' => 3,
                'full_name' => '甘肃省/庆阳市/庆城县',
            ),
            21 => 
            array (
                'id' => 3022,
                'parent_id' => 2968,
                'code' => '621022',
                'name' => '环县',
                'type' => 3,
                'full_name' => '甘肃省/庆阳市/环县',
            ),
            22 => 
            array (
                'id' => 3023,
                'parent_id' => 2968,
                'code' => '621023',
                'name' => '华池县',
                'type' => 3,
                'full_name' => '甘肃省/庆阳市/华池县',
            ),
            23 => 
            array (
                'id' => 3024,
                'parent_id' => 2968,
                'code' => '621024',
                'name' => '合水县',
                'type' => 3,
                'full_name' => '甘肃省/庆阳市/合水县',
            ),
            24 => 
            array (
                'id' => 3025,
                'parent_id' => 2968,
                'code' => '621025',
                'name' => '正宁县',
                'type' => 3,
                'full_name' => '甘肃省/庆阳市/正宁县',
            ),
            25 => 
            array (
                'id' => 3026,
                'parent_id' => 2968,
                'code' => '621026',
                'name' => '宁县',
                'type' => 3,
                'full_name' => '甘肃省/庆阳市/宁县',
            ),
            26 => 
            array (
                'id' => 3027,
                'parent_id' => 2968,
                'code' => '621027',
                'name' => '镇原县',
                'type' => 3,
                'full_name' => '甘肃省/庆阳市/镇原县',
            ),
            27 => 
            array (
                'id' => 3028,
                'parent_id' => 2969,
                'code' => '621102',
                'name' => '安定区',
                'type' => 3,
                'full_name' => '甘肃省/定西市/安定区',
            ),
            28 => 
            array (
                'id' => 3029,
                'parent_id' => 2969,
                'code' => '621121',
                'name' => '通渭县',
                'type' => 3,
                'full_name' => '甘肃省/定西市/通渭县',
            ),
            29 => 
            array (
                'id' => 3030,
                'parent_id' => 2969,
                'code' => '621122',
                'name' => '陇西县',
                'type' => 3,
                'full_name' => '甘肃省/定西市/陇西县',
            ),
            30 => 
            array (
                'id' => 3031,
                'parent_id' => 2969,
                'code' => '621123',
                'name' => '渭源县',
                'type' => 3,
                'full_name' => '甘肃省/定西市/渭源县',
            ),
            31 => 
            array (
                'id' => 3032,
                'parent_id' => 2969,
                'code' => '621124',
                'name' => '临洮县',
                'type' => 3,
                'full_name' => '甘肃省/定西市/临洮县',
            ),
            32 => 
            array (
                'id' => 3033,
                'parent_id' => 2969,
                'code' => '621125',
                'name' => '漳县',
                'type' => 3,
                'full_name' => '甘肃省/定西市/漳县',
            ),
            33 => 
            array (
                'id' => 3034,
                'parent_id' => 2969,
                'code' => '621126',
                'name' => '岷县',
                'type' => 3,
                'full_name' => '甘肃省/定西市/岷县',
            ),
            34 => 
            array (
                'id' => 3035,
                'parent_id' => 2970,
                'code' => '621202',
                'name' => '武都区',
                'type' => 3,
                'full_name' => '甘肃省/陇南市/武都区',
            ),
            35 => 
            array (
                'id' => 3036,
                'parent_id' => 2970,
                'code' => '621221',
                'name' => '成县',
                'type' => 3,
                'full_name' => '甘肃省/陇南市/成县',
            ),
            36 => 
            array (
                'id' => 3037,
                'parent_id' => 2970,
                'code' => '621222',
                'name' => '文县',
                'type' => 3,
                'full_name' => '甘肃省/陇南市/文县',
            ),
            37 => 
            array (
                'id' => 3038,
                'parent_id' => 2970,
                'code' => '621223',
                'name' => '宕昌县',
                'type' => 3,
                'full_name' => '甘肃省/陇南市/宕昌县',
            ),
            38 => 
            array (
                'id' => 3039,
                'parent_id' => 2970,
                'code' => '621224',
                'name' => '康县',
                'type' => 3,
                'full_name' => '甘肃省/陇南市/康县',
            ),
            39 => 
            array (
                'id' => 3040,
                'parent_id' => 2970,
                'code' => '621225',
                'name' => '西和县',
                'type' => 3,
                'full_name' => '甘肃省/陇南市/西和县',
            ),
            40 => 
            array (
                'id' => 3041,
                'parent_id' => 2970,
                'code' => '621226',
                'name' => '礼县',
                'type' => 3,
                'full_name' => '甘肃省/陇南市/礼县',
            ),
            41 => 
            array (
                'id' => 3042,
                'parent_id' => 2970,
                'code' => '621227',
                'name' => '徽县',
                'type' => 3,
                'full_name' => '甘肃省/陇南市/徽县',
            ),
            42 => 
            array (
                'id' => 3043,
                'parent_id' => 2970,
                'code' => '621228',
                'name' => '两当县',
                'type' => 3,
                'full_name' => '甘肃省/陇南市/两当县',
            ),
            43 => 
            array (
                'id' => 3044,
                'parent_id' => 2971,
                'code' => '622901',
                'name' => '临夏市',
                'type' => 3,
                'full_name' => '甘肃省/临夏回族自治州/临夏市',
            ),
            44 => 
            array (
                'id' => 3045,
                'parent_id' => 2971,
                'code' => '622921',
                'name' => '临夏县',
                'type' => 3,
                'full_name' => '甘肃省/临夏回族自治州/临夏县',
            ),
            45 => 
            array (
                'id' => 3046,
                'parent_id' => 2971,
                'code' => '622922',
                'name' => '康乐县',
                'type' => 3,
                'full_name' => '甘肃省/临夏回族自治州/康乐县',
            ),
            46 => 
            array (
                'id' => 3047,
                'parent_id' => 2971,
                'code' => '622923',
                'name' => '永靖县',
                'type' => 3,
                'full_name' => '甘肃省/临夏回族自治州/永靖县',
            ),
            47 => 
            array (
                'id' => 3048,
                'parent_id' => 2971,
                'code' => '622924',
                'name' => '广河县',
                'type' => 3,
                'full_name' => '甘肃省/临夏回族自治州/广河县',
            ),
            48 => 
            array (
                'id' => 3049,
                'parent_id' => 2971,
                'code' => '622925',
                'name' => '和政县',
                'type' => 3,
                'full_name' => '甘肃省/临夏回族自治州/和政县',
            ),
            49 => 
            array (
                'id' => 3050,
                'parent_id' => 2971,
                'code' => '622926',
                'name' => '东乡族自治县',
                'type' => 3,
                'full_name' => '甘肃省/临夏回族自治州/东乡族自治县',
            ),
            50 => 
            array (
                'id' => 3051,
                'parent_id' => 2971,
                'code' => '622927',
                'name' => '积石山保安族东乡族撒拉族自治县',
                'type' => 3,
                'full_name' => '甘肃省/临夏回族自治州/积石山保安族东乡族撒拉族自治县',
            ),
            51 => 
            array (
                'id' => 3052,
                'parent_id' => 2972,
                'code' => '623001',
                'name' => '合作市',
                'type' => 3,
                'full_name' => '甘肃省/甘南藏族自治州/合作市',
            ),
            52 => 
            array (
                'id' => 3053,
                'parent_id' => 2972,
                'code' => '623021',
                'name' => '临潭县',
                'type' => 3,
                'full_name' => '甘肃省/甘南藏族自治州/临潭县',
            ),
            53 => 
            array (
                'id' => 3054,
                'parent_id' => 2972,
                'code' => '623022',
                'name' => '卓尼县',
                'type' => 3,
                'full_name' => '甘肃省/甘南藏族自治州/卓尼县',
            ),
            54 => 
            array (
                'id' => 3055,
                'parent_id' => 2972,
                'code' => '623023',
                'name' => '舟曲县',
                'type' => 3,
                'full_name' => '甘肃省/甘南藏族自治州/舟曲县',
            ),
            55 => 
            array (
                'id' => 3056,
                'parent_id' => 2972,
                'code' => '623024',
                'name' => '迭部县',
                'type' => 3,
                'full_name' => '甘肃省/甘南藏族自治州/迭部县',
            ),
            56 => 
            array (
                'id' => 3057,
                'parent_id' => 2972,
                'code' => '623025',
                'name' => '玛曲县',
                'type' => 3,
                'full_name' => '甘肃省/甘南藏族自治州/玛曲县',
            ),
            57 => 
            array (
                'id' => 3058,
                'parent_id' => 2972,
                'code' => '623026',
                'name' => '碌曲县',
                'type' => 3,
                'full_name' => '甘肃省/甘南藏族自治州/碌曲县',
            ),
            58 => 
            array (
                'id' => 3059,
                'parent_id' => 2972,
                'code' => '623027',
                'name' => '夏河县',
                'type' => 3,
                'full_name' => '甘肃省/甘南藏族自治州/夏河县',
            ),
            59 => 
            array (
                'id' => 3060,
                'parent_id' => 30,
                'code' => '630100',
                'name' => '西宁市',
                'type' => 2,
                'full_name' => '青海省/西宁市',
            ),
            60 => 
            array (
                'id' => 3061,
                'parent_id' => 30,
                'code' => '630200',
                'name' => '海东市',
                'type' => 2,
                'full_name' => '青海省/海东市',
            ),
            61 => 
            array (
                'id' => 3062,
                'parent_id' => 30,
                'code' => '632200',
                'name' => '海北藏族自治州',
                'type' => 2,
                'full_name' => '青海省/海北藏族自治州',
            ),
            62 => 
            array (
                'id' => 3063,
                'parent_id' => 30,
                'code' => '632300',
                'name' => '黄南藏族自治州',
                'type' => 2,
                'full_name' => '青海省/黄南藏族自治州',
            ),
            63 => 
            array (
                'id' => 3064,
                'parent_id' => 30,
                'code' => '632500',
                'name' => '海南藏族自治州',
                'type' => 2,
                'full_name' => '青海省/海南藏族自治州',
            ),
            64 => 
            array (
                'id' => 3065,
                'parent_id' => 30,
                'code' => '632600',
                'name' => '果洛藏族自治州',
                'type' => 2,
                'full_name' => '青海省/果洛藏族自治州',
            ),
            65 => 
            array (
                'id' => 3066,
                'parent_id' => 30,
                'code' => '632700',
                'name' => '玉树藏族自治州',
                'type' => 2,
                'full_name' => '青海省/玉树藏族自治州',
            ),
            66 => 
            array (
                'id' => 3067,
                'parent_id' => 30,
                'code' => '632800',
                'name' => '海西蒙古族藏族自治州',
                'type' => 2,
                'full_name' => '青海省/海西蒙古族藏族自治州',
            ),
            67 => 
            array (
                'id' => 3068,
                'parent_id' => 3060,
                'code' => '630102',
                'name' => '城东区',
                'type' => 3,
                'full_name' => '青海省/西宁市/城东区',
            ),
            68 => 
            array (
                'id' => 3069,
                'parent_id' => 3060,
                'code' => '630103',
                'name' => '城中区',
                'type' => 3,
                'full_name' => '青海省/西宁市/城中区',
            ),
            69 => 
            array (
                'id' => 3070,
                'parent_id' => 3060,
                'code' => '630104',
                'name' => '城西区',
                'type' => 3,
                'full_name' => '青海省/西宁市/城西区',
            ),
            70 => 
            array (
                'id' => 3071,
                'parent_id' => 3060,
                'code' => '630105',
                'name' => '城北区',
                'type' => 3,
                'full_name' => '青海省/西宁市/城北区',
            ),
            71 => 
            array (
                'id' => 3072,
                'parent_id' => 3060,
                'code' => '630121',
                'name' => '大通回族土族自治县',
                'type' => 3,
                'full_name' => '青海省/西宁市/大通回族土族自治县',
            ),
            72 => 
            array (
                'id' => 3073,
                'parent_id' => 3060,
                'code' => '630122',
                'name' => '湟中县',
                'type' => 3,
                'full_name' => '青海省/西宁市/湟中县',
            ),
            73 => 
            array (
                'id' => 3074,
                'parent_id' => 3060,
                'code' => '630123',
                'name' => '湟源县',
                'type' => 3,
                'full_name' => '青海省/西宁市/湟源县',
            ),
            74 => 
            array (
                'id' => 3075,
                'parent_id' => 3061,
                'code' => '630202',
                'name' => '乐都区',
                'type' => 3,
                'full_name' => '青海省/海东市/乐都区',
            ),
            75 => 
            array (
                'id' => 3076,
                'parent_id' => 3061,
                'code' => '630203',
                'name' => '平安区',
                'type' => 3,
                'full_name' => '青海省/海东市/平安区',
            ),
            76 => 
            array (
                'id' => 3077,
                'parent_id' => 3061,
                'code' => '630222',
                'name' => '民和回族土族自治县',
                'type' => 3,
                'full_name' => '青海省/海东市/民和回族土族自治县',
            ),
            77 => 
            array (
                'id' => 3078,
                'parent_id' => 3061,
                'code' => '630223',
                'name' => '互助土族自治县',
                'type' => 3,
                'full_name' => '青海省/海东市/互助土族自治县',
            ),
            78 => 
            array (
                'id' => 3079,
                'parent_id' => 3061,
                'code' => '630224',
                'name' => '化隆回族自治县',
                'type' => 3,
                'full_name' => '青海省/海东市/化隆回族自治县',
            ),
            79 => 
            array (
                'id' => 3080,
                'parent_id' => 3061,
                'code' => '630225',
                'name' => '循化撒拉族自治县',
                'type' => 3,
                'full_name' => '青海省/海东市/循化撒拉族自治县',
            ),
            80 => 
            array (
                'id' => 3081,
                'parent_id' => 3062,
                'code' => '632221',
                'name' => '门源回族自治县',
                'type' => 3,
                'full_name' => '青海省/海北藏族自治州/门源回族自治县',
            ),
            81 => 
            array (
                'id' => 3082,
                'parent_id' => 3062,
                'code' => '632222',
                'name' => '祁连县',
                'type' => 3,
                'full_name' => '青海省/海北藏族自治州/祁连县',
            ),
            82 => 
            array (
                'id' => 3083,
                'parent_id' => 3062,
                'code' => '632223',
                'name' => '海晏县',
                'type' => 3,
                'full_name' => '青海省/海北藏族自治州/海晏县',
            ),
            83 => 
            array (
                'id' => 3084,
                'parent_id' => 3062,
                'code' => '632224',
                'name' => '刚察县',
                'type' => 3,
                'full_name' => '青海省/海北藏族自治州/刚察县',
            ),
            84 => 
            array (
                'id' => 3085,
                'parent_id' => 3063,
                'code' => '632321',
                'name' => '同仁县',
                'type' => 3,
                'full_name' => '青海省/黄南藏族自治州/同仁县',
            ),
            85 => 
            array (
                'id' => 3086,
                'parent_id' => 3063,
                'code' => '632322',
                'name' => '尖扎县',
                'type' => 3,
                'full_name' => '青海省/黄南藏族自治州/尖扎县',
            ),
            86 => 
            array (
                'id' => 3087,
                'parent_id' => 3063,
                'code' => '632323',
                'name' => '泽库县',
                'type' => 3,
                'full_name' => '青海省/黄南藏族自治州/泽库县',
            ),
            87 => 
            array (
                'id' => 3088,
                'parent_id' => 3063,
                'code' => '632324',
                'name' => '河南蒙古族自治县',
                'type' => 3,
                'full_name' => '青海省/黄南藏族自治州/河南蒙古族自治县',
            ),
            88 => 
            array (
                'id' => 3089,
                'parent_id' => 3064,
                'code' => '632521',
                'name' => '共和县',
                'type' => 3,
                'full_name' => '青海省/海南藏族自治州/共和县',
            ),
            89 => 
            array (
                'id' => 3090,
                'parent_id' => 3064,
                'code' => '632522',
                'name' => '同德县',
                'type' => 3,
                'full_name' => '青海省/海南藏族自治州/同德县',
            ),
            90 => 
            array (
                'id' => 3091,
                'parent_id' => 3064,
                'code' => '632523',
                'name' => '贵德县',
                'type' => 3,
                'full_name' => '青海省/海南藏族自治州/贵德县',
            ),
            91 => 
            array (
                'id' => 3092,
                'parent_id' => 3064,
                'code' => '632524',
                'name' => '兴海县',
                'type' => 3,
                'full_name' => '青海省/海南藏族自治州/兴海县',
            ),
            92 => 
            array (
                'id' => 3093,
                'parent_id' => 3064,
                'code' => '632525',
                'name' => '贵南县',
                'type' => 3,
                'full_name' => '青海省/海南藏族自治州/贵南县',
            ),
            93 => 
            array (
                'id' => 3094,
                'parent_id' => 3065,
                'code' => '632621',
                'name' => '玛沁县',
                'type' => 3,
                'full_name' => '青海省/果洛藏族自治州/玛沁县',
            ),
            94 => 
            array (
                'id' => 3095,
                'parent_id' => 3065,
                'code' => '632622',
                'name' => '班玛县',
                'type' => 3,
                'full_name' => '青海省/果洛藏族自治州/班玛县',
            ),
            95 => 
            array (
                'id' => 3096,
                'parent_id' => 3065,
                'code' => '632623',
                'name' => '甘德县',
                'type' => 3,
                'full_name' => '青海省/果洛藏族自治州/甘德县',
            ),
            96 => 
            array (
                'id' => 3097,
                'parent_id' => 3065,
                'code' => '632624',
                'name' => '达日县',
                'type' => 3,
                'full_name' => '青海省/果洛藏族自治州/达日县',
            ),
            97 => 
            array (
                'id' => 3098,
                'parent_id' => 3065,
                'code' => '632625',
                'name' => '久治县',
                'type' => 3,
                'full_name' => '青海省/果洛藏族自治州/久治县',
            ),
            98 => 
            array (
                'id' => 3099,
                'parent_id' => 3065,
                'code' => '632626',
                'name' => '玛多县',
                'type' => 3,
                'full_name' => '青海省/果洛藏族自治州/玛多县',
            ),
            99 => 
            array (
                'id' => 3100,
                'parent_id' => 3066,
                'code' => '632701',
                'name' => '玉树市',
                'type' => 3,
                'full_name' => '青海省/玉树藏族自治州/玉树市',
            ),
            100 => 
            array (
                'id' => 3101,
                'parent_id' => 3066,
                'code' => '632722',
                'name' => '杂多县',
                'type' => 3,
                'full_name' => '青海省/玉树藏族自治州/杂多县',
            ),
            101 => 
            array (
                'id' => 3102,
                'parent_id' => 3066,
                'code' => '632723',
                'name' => '称多县',
                'type' => 3,
                'full_name' => '青海省/玉树藏族自治州/称多县',
            ),
            102 => 
            array (
                'id' => 3103,
                'parent_id' => 3066,
                'code' => '632724',
                'name' => '治多县',
                'type' => 3,
                'full_name' => '青海省/玉树藏族自治州/治多县',
            ),
            103 => 
            array (
                'id' => 3104,
                'parent_id' => 3066,
                'code' => '632725',
                'name' => '囊谦县',
                'type' => 3,
                'full_name' => '青海省/玉树藏族自治州/囊谦县',
            ),
            104 => 
            array (
                'id' => 3105,
                'parent_id' => 3066,
                'code' => '632726',
                'name' => '曲麻莱县',
                'type' => 3,
                'full_name' => '青海省/玉树藏族自治州/曲麻莱县',
            ),
            105 => 
            array (
                'id' => 3106,
                'parent_id' => 3067,
                'code' => '632801',
                'name' => '格尔木市',
                'type' => 3,
                'full_name' => '青海省/海西蒙古族藏族自治州/格尔木市',
            ),
            106 => 
            array (
                'id' => 3107,
                'parent_id' => 3067,
                'code' => '632802',
                'name' => '德令哈市',
                'type' => 3,
                'full_name' => '青海省/海西蒙古族藏族自治州/德令哈市',
            ),
            107 => 
            array (
                'id' => 3108,
                'parent_id' => 3067,
                'code' => '632821',
                'name' => '乌兰县',
                'type' => 3,
                'full_name' => '青海省/海西蒙古族藏族自治州/乌兰县',
            ),
            108 => 
            array (
                'id' => 3109,
                'parent_id' => 3067,
                'code' => '632822',
                'name' => '都兰县',
                'type' => 3,
                'full_name' => '青海省/海西蒙古族藏族自治州/都兰县',
            ),
            109 => 
            array (
                'id' => 3110,
                'parent_id' => 3067,
                'code' => '632823',
                'name' => '天峻县',
                'type' => 3,
                'full_name' => '青海省/海西蒙古族藏族自治州/天峻县',
            ),
            110 => 
            array (
                'id' => 3111,
                'parent_id' => 3067,
                'code' => '632825',
                'name' => '海西蒙古族藏族自治州直辖',
                'type' => 3,
                'full_name' => '青海省/海西蒙古族藏族自治州/海西蒙古族藏族自治州直辖',
            ),
            111 => 
            array (
                'id' => 3112,
                'parent_id' => 31,
                'code' => '640100',
                'name' => '银川市',
                'type' => 2,
                'full_name' => '宁夏回族自治区/银川市',
            ),
            112 => 
            array (
                'id' => 3113,
                'parent_id' => 31,
                'code' => '640200',
                'name' => '石嘴山市',
                'type' => 2,
                'full_name' => '宁夏回族自治区/石嘴山市',
            ),
            113 => 
            array (
                'id' => 3114,
                'parent_id' => 31,
                'code' => '640300',
                'name' => '吴忠市',
                'type' => 2,
                'full_name' => '宁夏回族自治区/吴忠市',
            ),
            114 => 
            array (
                'id' => 3115,
                'parent_id' => 31,
                'code' => '640400',
                'name' => '固原市',
                'type' => 2,
                'full_name' => '宁夏回族自治区/固原市',
            ),
            115 => 
            array (
                'id' => 3116,
                'parent_id' => 31,
                'code' => '640500',
                'name' => '中卫市',
                'type' => 2,
                'full_name' => '宁夏回族自治区/中卫市',
            ),
            116 => 
            array (
                'id' => 3117,
                'parent_id' => 3112,
                'code' => '640104',
                'name' => '兴庆区',
                'type' => 3,
                'full_name' => '宁夏回族自治区/银川市/兴庆区',
            ),
            117 => 
            array (
                'id' => 3118,
                'parent_id' => 3112,
                'code' => '640105',
                'name' => '西夏区',
                'type' => 3,
                'full_name' => '宁夏回族自治区/银川市/西夏区',
            ),
            118 => 
            array (
                'id' => 3119,
                'parent_id' => 3112,
                'code' => '640106',
                'name' => '金凤区',
                'type' => 3,
                'full_name' => '宁夏回族自治区/银川市/金凤区',
            ),
            119 => 
            array (
                'id' => 3120,
                'parent_id' => 3112,
                'code' => '640121',
                'name' => '永宁县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/银川市/永宁县',
            ),
            120 => 
            array (
                'id' => 3121,
                'parent_id' => 3112,
                'code' => '640122',
                'name' => '贺兰县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/银川市/贺兰县',
            ),
            121 => 
            array (
                'id' => 3122,
                'parent_id' => 3112,
                'code' => '640181',
                'name' => '灵武市',
                'type' => 3,
                'full_name' => '宁夏回族自治区/银川市/灵武市',
            ),
            122 => 
            array (
                'id' => 3123,
                'parent_id' => 3113,
                'code' => '640202',
                'name' => '大武口区',
                'type' => 3,
                'full_name' => '宁夏回族自治区/石嘴山市/大武口区',
            ),
            123 => 
            array (
                'id' => 3124,
                'parent_id' => 3113,
                'code' => '640205',
                'name' => '惠农区',
                'type' => 3,
                'full_name' => '宁夏回族自治区/石嘴山市/惠农区',
            ),
            124 => 
            array (
                'id' => 3125,
                'parent_id' => 3113,
                'code' => '640221',
                'name' => '平罗县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/石嘴山市/平罗县',
            ),
            125 => 
            array (
                'id' => 3126,
                'parent_id' => 3114,
                'code' => '640302',
                'name' => '利通区',
                'type' => 3,
                'full_name' => '宁夏回族自治区/吴忠市/利通区',
            ),
            126 => 
            array (
                'id' => 3127,
                'parent_id' => 3114,
                'code' => '640303',
                'name' => '红寺堡区',
                'type' => 3,
                'full_name' => '宁夏回族自治区/吴忠市/红寺堡区',
            ),
            127 => 
            array (
                'id' => 3128,
                'parent_id' => 3114,
                'code' => '640323',
                'name' => '盐池县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/吴忠市/盐池县',
            ),
            128 => 
            array (
                'id' => 3129,
                'parent_id' => 3114,
                'code' => '640324',
                'name' => '同心县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/吴忠市/同心县',
            ),
            129 => 
            array (
                'id' => 3130,
                'parent_id' => 3114,
                'code' => '640381',
                'name' => '青铜峡市',
                'type' => 3,
                'full_name' => '宁夏回族自治区/吴忠市/青铜峡市',
            ),
            130 => 
            array (
                'id' => 3131,
                'parent_id' => 3115,
                'code' => '640402',
                'name' => '原州区',
                'type' => 3,
                'full_name' => '宁夏回族自治区/固原市/原州区',
            ),
            131 => 
            array (
                'id' => 3132,
                'parent_id' => 3115,
                'code' => '640422',
                'name' => '西吉县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/固原市/西吉县',
            ),
            132 => 
            array (
                'id' => 3133,
                'parent_id' => 3115,
                'code' => '640423',
                'name' => '隆德县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/固原市/隆德县',
            ),
            133 => 
            array (
                'id' => 3134,
                'parent_id' => 3115,
                'code' => '640424',
                'name' => '泾源县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/固原市/泾源县',
            ),
            134 => 
            array (
                'id' => 3135,
                'parent_id' => 3115,
                'code' => '640425',
                'name' => '彭阳县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/固原市/彭阳县',
            ),
            135 => 
            array (
                'id' => 3136,
                'parent_id' => 3116,
                'code' => '640502',
                'name' => '沙坡头区',
                'type' => 3,
                'full_name' => '宁夏回族自治区/中卫市/沙坡头区',
            ),
            136 => 
            array (
                'id' => 3137,
                'parent_id' => 3116,
                'code' => '640521',
                'name' => '中宁县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/中卫市/中宁县',
            ),
            137 => 
            array (
                'id' => 3138,
                'parent_id' => 3116,
                'code' => '640522',
                'name' => '海原县',
                'type' => 3,
                'full_name' => '宁夏回族自治区/中卫市/海原县',
            ),
            138 => 
            array (
                'id' => 3139,
                'parent_id' => 32,
                'code' => '650100',
                'name' => '乌鲁木齐市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/乌鲁木齐市',
            ),
            139 => 
            array (
                'id' => 3140,
                'parent_id' => 32,
                'code' => '650200',
                'name' => '克拉玛依市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/克拉玛依市',
            ),
            140 => 
            array (
                'id' => 3141,
                'parent_id' => 32,
                'code' => '650400',
                'name' => '吐鲁番市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/吐鲁番市',
            ),
            141 => 
            array (
                'id' => 3142,
                'parent_id' => 32,
                'code' => '650500',
                'name' => '哈密市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/哈密市',
            ),
            142 => 
            array (
                'id' => 3143,
                'parent_id' => 32,
                'code' => '652300',
                'name' => '昌吉回族自治州',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/昌吉回族自治州',
            ),
            143 => 
            array (
                'id' => 3144,
                'parent_id' => 32,
                'code' => '652700',
                'name' => '博尔塔拉蒙古自治州',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/博尔塔拉蒙古自治州',
            ),
            144 => 
            array (
                'id' => 3145,
                'parent_id' => 32,
                'code' => '652800',
                'name' => '巴音郭楞蒙古自治州',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州',
            ),
            145 => 
            array (
                'id' => 3146,
                'parent_id' => 32,
                'code' => '652900',
                'name' => '阿克苏地区',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/阿克苏地区',
            ),
            146 => 
            array (
                'id' => 3147,
                'parent_id' => 32,
                'code' => '653000',
                'name' => '克孜勒苏柯尔克孜自治州',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/克孜勒苏柯尔克孜自治州',
            ),
            147 => 
            array (
                'id' => 3148,
                'parent_id' => 32,
                'code' => '653100',
                'name' => '喀什地区',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/喀什地区',
            ),
            148 => 
            array (
                'id' => 3149,
                'parent_id' => 32,
                'code' => '653200',
                'name' => '和田地区',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/和田地区',
            ),
            149 => 
            array (
                'id' => 3150,
                'parent_id' => 32,
                'code' => '654000',
                'name' => '伊犁哈萨克自治州',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州',
            ),
            150 => 
            array (
                'id' => 3151,
                'parent_id' => 32,
                'code' => '654200',
                'name' => '塔城地区',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/塔城地区',
            ),
            151 => 
            array (
                'id' => 3152,
                'parent_id' => 32,
                'code' => '654300',
                'name' => '阿勒泰地区',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/阿勒泰地区',
            ),
            152 => 
            array (
                'id' => 3153,
                'parent_id' => 32,
                'code' => '659001',
                'name' => '石河子市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/石河子市',
            ),
            153 => 
            array (
                'id' => 3154,
                'parent_id' => 32,
                'code' => '659002',
                'name' => '阿拉尔市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/阿拉尔市',
            ),
            154 => 
            array (
                'id' => 3155,
                'parent_id' => 32,
                'code' => '659003',
                'name' => '图木舒克市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/图木舒克市',
            ),
            155 => 
            array (
                'id' => 3156,
                'parent_id' => 32,
                'code' => '659004',
                'name' => '五家渠市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/五家渠市',
            ),
            156 => 
            array (
                'id' => 3157,
                'parent_id' => 32,
                'code' => '659005',
                'name' => '北屯市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/北屯市',
            ),
            157 => 
            array (
                'id' => 3158,
                'parent_id' => 32,
                'code' => '659006',
                'name' => '铁门关市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/铁门关市',
            ),
            158 => 
            array (
                'id' => 3159,
                'parent_id' => 32,
                'code' => '659007',
                'name' => '双河市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/双河市',
            ),
            159 => 
            array (
                'id' => 3160,
                'parent_id' => 32,
                'code' => '659008',
                'name' => '可克达拉市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/可克达拉市',
            ),
            160 => 
            array (
                'id' => 3161,
                'parent_id' => 32,
                'code' => '659009',
                'name' => '昆玉市',
                'type' => 2,
                'full_name' => '新疆维吾尔自治区/昆玉市',
            ),
            161 => 
            array (
                'id' => 3162,
                'parent_id' => 3139,
                'code' => '650102',
                'name' => '天山区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/乌鲁木齐市/天山区',
            ),
            162 => 
            array (
                'id' => 3163,
                'parent_id' => 3139,
                'code' => '650103',
                'name' => '沙依巴克区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/乌鲁木齐市/沙依巴克区',
            ),
            163 => 
            array (
                'id' => 3164,
                'parent_id' => 3139,
                'code' => '650104',
                'name' => '新市区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/乌鲁木齐市/新市区',
            ),
            164 => 
            array (
                'id' => 3165,
                'parent_id' => 3139,
                'code' => '650105',
                'name' => '水磨沟区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/乌鲁木齐市/水磨沟区',
            ),
            165 => 
            array (
                'id' => 3166,
                'parent_id' => 3139,
                'code' => '650106',
                'name' => '头屯河区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/乌鲁木齐市/头屯河区',
            ),
            166 => 
            array (
                'id' => 3167,
                'parent_id' => 3139,
                'code' => '650107',
                'name' => '达坂城区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/乌鲁木齐市/达坂城区',
            ),
            167 => 
            array (
                'id' => 3168,
                'parent_id' => 3139,
                'code' => '650109',
                'name' => '米东区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/乌鲁木齐市/米东区',
            ),
            168 => 
            array (
                'id' => 3169,
                'parent_id' => 3139,
                'code' => '650121',
                'name' => '乌鲁木齐县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/乌鲁木齐市/乌鲁木齐县',
            ),
            169 => 
            array (
                'id' => 3170,
                'parent_id' => 3140,
                'code' => '650202',
                'name' => '独山子区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/克拉玛依市/独山子区',
            ),
            170 => 
            array (
                'id' => 3171,
                'parent_id' => 3140,
                'code' => '650203',
                'name' => '克拉玛依区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/克拉玛依市/克拉玛依区',
            ),
            171 => 
            array (
                'id' => 3172,
                'parent_id' => 3140,
                'code' => '650204',
                'name' => '白碱滩区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/克拉玛依市/白碱滩区',
            ),
            172 => 
            array (
                'id' => 3173,
                'parent_id' => 3140,
                'code' => '650205',
                'name' => '乌尔禾区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/克拉玛依市/乌尔禾区',
            ),
            173 => 
            array (
                'id' => 3174,
                'parent_id' => 3141,
                'code' => '650402',
                'name' => '高昌区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/吐鲁番市/高昌区',
            ),
            174 => 
            array (
                'id' => 3175,
                'parent_id' => 3141,
                'code' => '650421',
                'name' => '鄯善县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/吐鲁番市/鄯善县',
            ),
            175 => 
            array (
                'id' => 3176,
                'parent_id' => 3141,
                'code' => '650422',
                'name' => '托克逊县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/吐鲁番市/托克逊县',
            ),
            176 => 
            array (
                'id' => 3177,
                'parent_id' => 3142,
                'code' => '650502',
                'name' => '伊州区',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/哈密市/伊州区',
            ),
            177 => 
            array (
                'id' => 3178,
                'parent_id' => 3142,
                'code' => '650521',
                'name' => '巴里坤哈萨克自治县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/哈密市/巴里坤哈萨克自治县',
            ),
            178 => 
            array (
                'id' => 3179,
                'parent_id' => 3142,
                'code' => '650522',
                'name' => '伊吾县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/哈密市/伊吾县',
            ),
            179 => 
            array (
                'id' => 3180,
                'parent_id' => 3143,
                'code' => '652301',
                'name' => '昌吉市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/昌吉回族自治州/昌吉市',
            ),
            180 => 
            array (
                'id' => 3181,
                'parent_id' => 3143,
                'code' => '652302',
                'name' => '阜康市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/昌吉回族自治州/阜康市',
            ),
            181 => 
            array (
                'id' => 3182,
                'parent_id' => 3143,
                'code' => '652323',
                'name' => '呼图壁县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/昌吉回族自治州/呼图壁县',
            ),
            182 => 
            array (
                'id' => 3183,
                'parent_id' => 3143,
                'code' => '652324',
                'name' => '玛纳斯县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/昌吉回族自治州/玛纳斯县',
            ),
            183 => 
            array (
                'id' => 3184,
                'parent_id' => 3143,
                'code' => '652325',
                'name' => '奇台县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/昌吉回族自治州/奇台县',
            ),
            184 => 
            array (
                'id' => 3185,
                'parent_id' => 3143,
                'code' => '652327',
                'name' => '吉木萨尔县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/昌吉回族自治州/吉木萨尔县',
            ),
            185 => 
            array (
                'id' => 3186,
                'parent_id' => 3143,
                'code' => '652328',
                'name' => '木垒哈萨克自治县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/昌吉回族自治州/木垒哈萨克自治县',
            ),
            186 => 
            array (
                'id' => 3187,
                'parent_id' => 3144,
                'code' => '652701',
                'name' => '博乐市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/博尔塔拉蒙古自治州/博乐市',
            ),
            187 => 
            array (
                'id' => 3188,
                'parent_id' => 3144,
                'code' => '652702',
                'name' => '阿拉山口市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/博尔塔拉蒙古自治州/阿拉山口市',
            ),
            188 => 
            array (
                'id' => 3189,
                'parent_id' => 3144,
                'code' => '652722',
                'name' => '精河县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/博尔塔拉蒙古自治州/精河县',
            ),
            189 => 
            array (
                'id' => 3190,
                'parent_id' => 3144,
                'code' => '652723',
                'name' => '温泉县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/博尔塔拉蒙古自治州/温泉县',
            ),
            190 => 
            array (
                'id' => 3191,
                'parent_id' => 3145,
                'code' => '652801',
                'name' => '库尔勒市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州/库尔勒市',
            ),
            191 => 
            array (
                'id' => 3192,
                'parent_id' => 3145,
                'code' => '652822',
                'name' => '轮台县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州/轮台县',
            ),
            192 => 
            array (
                'id' => 3193,
                'parent_id' => 3145,
                'code' => '652823',
                'name' => '尉犁县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州/尉犁县',
            ),
            193 => 
            array (
                'id' => 3194,
                'parent_id' => 3145,
                'code' => '652824',
                'name' => '若羌县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州/若羌县',
            ),
            194 => 
            array (
                'id' => 3195,
                'parent_id' => 3145,
                'code' => '652825',
                'name' => '且末县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州/且末县',
            ),
            195 => 
            array (
                'id' => 3196,
                'parent_id' => 3145,
                'code' => '652826',
                'name' => '焉耆回族自治县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州/焉耆回族自治县',
            ),
            196 => 
            array (
                'id' => 3197,
                'parent_id' => 3145,
                'code' => '652827',
                'name' => '和静县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州/和静县',
            ),
            197 => 
            array (
                'id' => 3198,
                'parent_id' => 3145,
                'code' => '652828',
                'name' => '和硕县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州/和硕县',
            ),
            198 => 
            array (
                'id' => 3199,
                'parent_id' => 3145,
                'code' => '652829',
                'name' => '博湖县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/巴音郭楞蒙古自治州/博湖县',
            ),
            199 => 
            array (
                'id' => 3200,
                'parent_id' => 3146,
                'code' => '652901',
                'name' => '阿克苏市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿克苏地区/阿克苏市',
            ),
            200 => 
            array (
                'id' => 3201,
                'parent_id' => 3146,
                'code' => '652922',
                'name' => '温宿县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿克苏地区/温宿县',
            ),
            201 => 
            array (
                'id' => 3202,
                'parent_id' => 3146,
                'code' => '652923',
                'name' => '库车县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿克苏地区/库车县',
            ),
            202 => 
            array (
                'id' => 3203,
                'parent_id' => 3146,
                'code' => '652924',
                'name' => '沙雅县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿克苏地区/沙雅县',
            ),
            203 => 
            array (
                'id' => 3204,
                'parent_id' => 3146,
                'code' => '652925',
                'name' => '新和县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿克苏地区/新和县',
            ),
            204 => 
            array (
                'id' => 3205,
                'parent_id' => 3146,
                'code' => '652926',
                'name' => '拜城县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿克苏地区/拜城县',
            ),
            205 => 
            array (
                'id' => 3206,
                'parent_id' => 3146,
                'code' => '652927',
                'name' => '乌什县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿克苏地区/乌什县',
            ),
            206 => 
            array (
                'id' => 3207,
                'parent_id' => 3146,
                'code' => '652928',
                'name' => '阿瓦提县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿克苏地区/阿瓦提县',
            ),
            207 => 
            array (
                'id' => 3208,
                'parent_id' => 3146,
                'code' => '652929',
                'name' => '柯坪县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿克苏地区/柯坪县',
            ),
            208 => 
            array (
                'id' => 3209,
                'parent_id' => 3147,
                'code' => '653001',
                'name' => '阿图什市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/克孜勒苏柯尔克孜自治州/阿图什市',
            ),
            209 => 
            array (
                'id' => 3210,
                'parent_id' => 3147,
                'code' => '653022',
                'name' => '阿克陶县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/克孜勒苏柯尔克孜自治州/阿克陶县',
            ),
            210 => 
            array (
                'id' => 3211,
                'parent_id' => 3147,
                'code' => '653023',
                'name' => '阿合奇县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/克孜勒苏柯尔克孜自治州/阿合奇县',
            ),
            211 => 
            array (
                'id' => 3212,
                'parent_id' => 3147,
                'code' => '653024',
                'name' => '乌恰县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/克孜勒苏柯尔克孜自治州/乌恰县',
            ),
            212 => 
            array (
                'id' => 3213,
                'parent_id' => 3148,
                'code' => '653101',
                'name' => '喀什市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/喀什市',
            ),
            213 => 
            array (
                'id' => 3214,
                'parent_id' => 3148,
                'code' => '653121',
                'name' => '疏附县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/疏附县',
            ),
            214 => 
            array (
                'id' => 3215,
                'parent_id' => 3148,
                'code' => '653122',
                'name' => '疏勒县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/疏勒县',
            ),
            215 => 
            array (
                'id' => 3216,
                'parent_id' => 3148,
                'code' => '653123',
                'name' => '英吉沙县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/英吉沙县',
            ),
            216 => 
            array (
                'id' => 3217,
                'parent_id' => 3148,
                'code' => '653124',
                'name' => '泽普县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/泽普县',
            ),
            217 => 
            array (
                'id' => 3218,
                'parent_id' => 3148,
                'code' => '653125',
                'name' => '莎车县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/莎车县',
            ),
            218 => 
            array (
                'id' => 3219,
                'parent_id' => 3148,
                'code' => '653126',
                'name' => '叶城县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/叶城县',
            ),
            219 => 
            array (
                'id' => 3220,
                'parent_id' => 3148,
                'code' => '653127',
                'name' => '麦盖提县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/麦盖提县',
            ),
            220 => 
            array (
                'id' => 3221,
                'parent_id' => 3148,
                'code' => '653128',
                'name' => '岳普湖县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/岳普湖县',
            ),
            221 => 
            array (
                'id' => 3222,
                'parent_id' => 3148,
                'code' => '653129',
                'name' => '伽师县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/伽师县',
            ),
            222 => 
            array (
                'id' => 3223,
                'parent_id' => 3148,
                'code' => '653130',
                'name' => '巴楚县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/巴楚县',
            ),
            223 => 
            array (
                'id' => 3224,
                'parent_id' => 3148,
                'code' => '653131',
                'name' => '塔什库尔干塔吉克自治县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/喀什地区/塔什库尔干塔吉克自治县',
            ),
            224 => 
            array (
                'id' => 3225,
                'parent_id' => 3149,
                'code' => '653201',
                'name' => '和田市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/和田地区/和田市',
            ),
            225 => 
            array (
                'id' => 3226,
                'parent_id' => 3149,
                'code' => '653221',
                'name' => '和田县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/和田地区/和田县',
            ),
            226 => 
            array (
                'id' => 3227,
                'parent_id' => 3149,
                'code' => '653222',
                'name' => '墨玉县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/和田地区/墨玉县',
            ),
            227 => 
            array (
                'id' => 3228,
                'parent_id' => 3149,
                'code' => '653223',
                'name' => '皮山县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/和田地区/皮山县',
            ),
            228 => 
            array (
                'id' => 3229,
                'parent_id' => 3149,
                'code' => '653224',
                'name' => '洛浦县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/和田地区/洛浦县',
            ),
            229 => 
            array (
                'id' => 3230,
                'parent_id' => 3149,
                'code' => '653225',
                'name' => '策勒县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/和田地区/策勒县',
            ),
            230 => 
            array (
                'id' => 3231,
                'parent_id' => 3149,
                'code' => '653226',
                'name' => '于田县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/和田地区/于田县',
            ),
            231 => 
            array (
                'id' => 3232,
                'parent_id' => 3149,
                'code' => '653227',
                'name' => '民丰县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/和田地区/民丰县',
            ),
            232 => 
            array (
                'id' => 3233,
                'parent_id' => 3150,
                'code' => '654002',
                'name' => '伊宁市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/伊宁市',
            ),
            233 => 
            array (
                'id' => 3234,
                'parent_id' => 3150,
                'code' => '654003',
                'name' => '奎屯市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/奎屯市',
            ),
            234 => 
            array (
                'id' => 3235,
                'parent_id' => 3150,
                'code' => '654004',
                'name' => '霍尔果斯市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/霍尔果斯市',
            ),
            235 => 
            array (
                'id' => 3236,
                'parent_id' => 3150,
                'code' => '654021',
                'name' => '伊宁县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/伊宁县',
            ),
            236 => 
            array (
                'id' => 3237,
                'parent_id' => 3150,
                'code' => '654022',
                'name' => '察布查尔锡伯自治县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/察布查尔锡伯自治县',
            ),
            237 => 
            array (
                'id' => 3238,
                'parent_id' => 3150,
                'code' => '654023',
                'name' => '霍城县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/霍城县',
            ),
            238 => 
            array (
                'id' => 3239,
                'parent_id' => 3150,
                'code' => '654024',
                'name' => '巩留县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/巩留县',
            ),
            239 => 
            array (
                'id' => 3240,
                'parent_id' => 3150,
                'code' => '654025',
                'name' => '新源县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/新源县',
            ),
            240 => 
            array (
                'id' => 3241,
                'parent_id' => 3150,
                'code' => '654026',
                'name' => '昭苏县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/昭苏县',
            ),
            241 => 
            array (
                'id' => 3242,
                'parent_id' => 3150,
                'code' => '654027',
                'name' => '特克斯县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/特克斯县',
            ),
            242 => 
            array (
                'id' => 3243,
                'parent_id' => 3150,
                'code' => '654028',
                'name' => '尼勒克县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/伊犁哈萨克自治州/尼勒克县',
            ),
            243 => 
            array (
                'id' => 3244,
                'parent_id' => 3151,
                'code' => '654201',
                'name' => '塔城市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/塔城地区/塔城市',
            ),
            244 => 
            array (
                'id' => 3245,
                'parent_id' => 3151,
                'code' => '654202',
                'name' => '乌苏市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/塔城地区/乌苏市',
            ),
            245 => 
            array (
                'id' => 3246,
                'parent_id' => 3151,
                'code' => '654221',
                'name' => '额敏县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/塔城地区/额敏县',
            ),
            246 => 
            array (
                'id' => 3247,
                'parent_id' => 3151,
                'code' => '654223',
                'name' => '沙湾县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/塔城地区/沙湾县',
            ),
            247 => 
            array (
                'id' => 3248,
                'parent_id' => 3151,
                'code' => '654224',
                'name' => '托里县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/塔城地区/托里县',
            ),
            248 => 
            array (
                'id' => 3249,
                'parent_id' => 3151,
                'code' => '654225',
                'name' => '裕民县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/塔城地区/裕民县',
            ),
            249 => 
            array (
                'id' => 3250,
                'parent_id' => 3151,
                'code' => '654226',
                'name' => '和布克赛尔蒙古自治县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/塔城地区/和布克赛尔蒙古自治县',
            ),
            250 => 
            array (
                'id' => 3251,
                'parent_id' => 3152,
                'code' => '654301',
                'name' => '阿勒泰市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿勒泰地区/阿勒泰市',
            ),
            251 => 
            array (
                'id' => 3252,
                'parent_id' => 3152,
                'code' => '654321',
                'name' => '布尔津县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿勒泰地区/布尔津县',
            ),
            252 => 
            array (
                'id' => 3253,
                'parent_id' => 3152,
                'code' => '654322',
                'name' => '富蕴县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿勒泰地区/富蕴县',
            ),
            253 => 
            array (
                'id' => 3254,
                'parent_id' => 3152,
                'code' => '654323',
                'name' => '福海县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿勒泰地区/福海县',
            ),
            254 => 
            array (
                'id' => 3255,
                'parent_id' => 3152,
                'code' => '654324',
                'name' => '哈巴河县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿勒泰地区/哈巴河县',
            ),
            255 => 
            array (
                'id' => 3256,
                'parent_id' => 3152,
                'code' => '654325',
                'name' => '青河县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿勒泰地区/青河县',
            ),
            256 => 
            array (
                'id' => 3257,
                'parent_id' => 3152,
                'code' => '654326',
                'name' => '吉木乃县',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿勒泰地区/吉木乃县',
            ),
            257 => 
            array (
                'id' => 3258,
                'parent_id' => 3153,
                'code' => '659001',
                'name' => '石河子市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/石河子市/石河子市',
            ),
            258 => 
            array (
                'id' => 3259,
                'parent_id' => 3154,
                'code' => '659002',
                'name' => '阿拉尔市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/阿拉尔市/阿拉尔市',
            ),
            259 => 
            array (
                'id' => 3260,
                'parent_id' => 3155,
                'code' => '659003',
                'name' => '图木舒克市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/图木舒克市/图木舒克市',
            ),
            260 => 
            array (
                'id' => 3261,
                'parent_id' => 3156,
                'code' => '659004',
                'name' => '五家渠市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/五家渠市/五家渠市',
            ),
            261 => 
            array (
                'id' => 3262,
                'parent_id' => 3157,
                'code' => '659005',
                'name' => '北屯市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/北屯市/北屯市',
            ),
            262 => 
            array (
                'id' => 3263,
                'parent_id' => 3158,
                'code' => '659006',
                'name' => '铁门关市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/铁门关市/铁门关市',
            ),
            263 => 
            array (
                'id' => 3264,
                'parent_id' => 3159,
                'code' => '659007',
                'name' => '双河市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/双河市/双河市',
            ),
            264 => 
            array (
                'id' => 3265,
                'parent_id' => 3160,
                'code' => '659008',
                'name' => '可克达拉市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/可克达拉市/可克达拉市',
            ),
            265 => 
            array (
                'id' => 3266,
                'parent_id' => 3161,
                'code' => '659009',
                'name' => '昆玉市',
                'type' => 3,
                'full_name' => '新疆维吾尔自治区/昆玉市/昆玉市',
            ),
            266 => 
            array (
                'id' => 3267,
                'parent_id' => 34,
                'code' => '810100',
                'name' => '香港城区',
                'type' => 2,
                'full_name' => '香港特别行政区/香港城区',
            ),
            267 => 
            array (
                'id' => 3268,
                'parent_id' => 3267,
                'code' => '810101',
                'name' => '中西区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/中西区',
            ),
            268 => 
            array (
                'id' => 3269,
                'parent_id' => 3267,
                'code' => '810102',
                'name' => '湾仔区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/湾仔区',
            ),
            269 => 
            array (
                'id' => 3270,
                'parent_id' => 3267,
                'code' => '810103',
                'name' => '东区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/东区',
            ),
            270 => 
            array (
                'id' => 3271,
                'parent_id' => 3267,
                'code' => '810104',
                'name' => '南区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/南区',
            ),
            271 => 
            array (
                'id' => 3272,
                'parent_id' => 3267,
                'code' => '810105',
                'name' => '油尖旺区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/油尖旺区',
            ),
            272 => 
            array (
                'id' => 3273,
                'parent_id' => 3267,
                'code' => '810106',
                'name' => '深水埗区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/深水埗区',
            ),
            273 => 
            array (
                'id' => 3274,
                'parent_id' => 3267,
                'code' => '810107',
                'name' => '九龙城区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/九龙城区',
            ),
            274 => 
            array (
                'id' => 3275,
                'parent_id' => 3267,
                'code' => '810108',
                'name' => '黄大仙区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/黄大仙区',
            ),
            275 => 
            array (
                'id' => 3276,
                'parent_id' => 3267,
                'code' => '810109',
                'name' => '观塘区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/观塘区',
            ),
            276 => 
            array (
                'id' => 3277,
                'parent_id' => 3267,
                'code' => '810110',
                'name' => '荃湾区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/荃湾区',
            ),
            277 => 
            array (
                'id' => 3278,
                'parent_id' => 3267,
                'code' => '810111',
                'name' => '屯门区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/屯门区',
            ),
            278 => 
            array (
                'id' => 3279,
                'parent_id' => 3267,
                'code' => '810112',
                'name' => '元朗区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/元朗区',
            ),
            279 => 
            array (
                'id' => 3280,
                'parent_id' => 3267,
                'code' => '810113',
                'name' => '北区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/北区',
            ),
            280 => 
            array (
                'id' => 3281,
                'parent_id' => 3267,
                'code' => '810114',
                'name' => '大埔区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/大埔区',
            ),
            281 => 
            array (
                'id' => 3282,
                'parent_id' => 3267,
                'code' => '810115',
                'name' => '西贡区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/西贡区',
            ),
            282 => 
            array (
                'id' => 3283,
                'parent_id' => 3267,
                'code' => '810116',
                'name' => '沙田区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/沙田区',
            ),
            283 => 
            array (
                'id' => 3284,
                'parent_id' => 3267,
                'code' => '810117',
                'name' => '葵青区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/葵青区',
            ),
            284 => 
            array (
                'id' => 3285,
                'parent_id' => 3267,
                'code' => '810118',
                'name' => '离岛区',
                'type' => 3,
                'full_name' => '香港特别行政区/香港城区/离岛区',
            ),
            285 => 
            array (
                'id' => 3286,
                'parent_id' => 35,
                'code' => '820100',
                'name' => '澳门城区',
                'type' => 2,
                'full_name' => '澳门特别行政区/澳门城区',
            ),
            286 => 
            array (
                'id' => 3287,
                'parent_id' => 3286,
                'code' => '820101',
                'name' => '花地玛堂区',
                'type' => 3,
                'full_name' => '澳门特别行政区/澳门城区/花地玛堂区',
            ),
            287 => 
            array (
                'id' => 3288,
                'parent_id' => 3286,
                'code' => '820102',
                'name' => '花王堂区',
                'type' => 3,
                'full_name' => '澳门特别行政区/澳门城区/花王堂区',
            ),
            288 => 
            array (
                'id' => 3289,
                'parent_id' => 3286,
                'code' => '820103',
                'name' => '望德堂区',
                'type' => 3,
                'full_name' => '澳门特别行政区/澳门城区/望德堂区',
            ),
            289 => 
            array (
                'id' => 3290,
                'parent_id' => 3286,
                'code' => '820104',
                'name' => '大堂区',
                'type' => 3,
                'full_name' => '澳门特别行政区/澳门城区/大堂区',
            ),
            290 => 
            array (
                'id' => 3291,
                'parent_id' => 3286,
                'code' => '820105',
                'name' => '风顺堂区',
                'type' => 3,
                'full_name' => '澳门特别行政区/澳门城区/风顺堂区',
            ),
            291 => 
            array (
                'id' => 3292,
                'parent_id' => 3286,
                'code' => '820106',
                'name' => '嘉模堂区',
                'type' => 3,
                'full_name' => '澳门特别行政区/澳门城区/嘉模堂区',
            ),
            292 => 
            array (
                'id' => 3293,
                'parent_id' => 3286,
                'code' => '820107',
                'name' => '路凼填海区',
                'type' => 3,
                'full_name' => '澳门特别行政区/澳门城区/路凼填海区',
            ),
            293 => 
            array (
                'id' => 3294,
                'parent_id' => 3286,
                'code' => '820108',
                'name' => '圣方济各堂区',
                'type' => 3,
                'full_name' => '澳门特别行政区/澳门城区/圣方济各堂区',
            ),
        ));
        
        
    }
}