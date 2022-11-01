-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 02:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin@gmail.com', '3cKfhgnZEK4X6', '2022-10-02 21:10:07', '2022-10-02 21:10:07'),
(2, 'sai sai', 'saisai@gmail.com', '6f4pWHmMAxunU', '2022-10-02 21:10:23', '2022-10-02 21:10:23'),
(3, 'Ma Ni Ni', 'mani@gmail.com', '649./J9eGp4zk', '2022-10-03 10:10:50', '2022-10-03 10:10:50'),
(4, 'swe swe', 'sweswe@gmail.com', '4b3g0tMGfqjnY', '2022-10-18 17:10:23', '2022-10-18 17:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` int(4) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `type`, `writer`, `content`, `img_link`, `created_at`) VALUES
(1, 'What is the roadmap to be a web developer?', 1, 'John Doe', 'What is the roadmap to be a web developer?\r\nImage result for web developer roadmap\r\nSkills you need to have to back-end developer: programming languages, frameworks, databases, servers, and API (Application Program Interface). Programming Languages – Back-end developers should know at least one of the programming languages like Java, Python, and JavaScript.', '1518138175955257937christin-hume-mfB1B1s4sMc-unsplash.jpg', '2022-10-02 16:10:06'),
(2, 'Can I learn web development in 6 months?', 1, 'Zayar Maung', 'Can I learn web development in 4 months?\r\nWeb development bootcamps typically take about 3-4 months to complete and teach HTML, CSS, and JavaScript. Full-stack bootcamps may also teach SQL, Python, or other back-end coding languages. Coding bootcamps typically also cost less than a four-year degree program, but there is little financial aid available.', '44337781430015083travel img1.jpg', '2022-10-02 16:10:55'),
(3, 'What is food explain?😍', 1, 'swe swe', 'What is food explain?\r\nImage result for food\r\nFood is any substance consumed to provide nutritional support for an organism. Food is usually of plant, animal, or fungal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals.I like Pizza!', '1358792798983249322eat1.jpg', '2022-10-02 16:10:41'),
(4, 'What is the artificial intelligence?☠☠', 1, 'Noob Coder', 'မကြာသေးတဲ့ နှစ်အနည်းငယ်အတွင်းမှာပဲ Artificial Intelligence ဆိုတာ ကျွန်တော်တို့တွေ မကြာခဏကြားနေရတာပါ။ အမှန်တကယ်တော့ AI ဆိုတာ လူတွေရဲ့မှတ်ဉာဏ်ကို အတုအယောင် ပြုလုပ်ထားတဲ့ Computer Systems တစ်ခုဖြစ်ပါတယ်။ လူတွေကဲ့သို့ များစွာသော လုပ်ငန်းဆောင်တာတွေ၊ Image Recognization တွေ၊ Speech / Patterns တွေနဲ့ လူတွေထက် တိကျလျင်မြန်တဲ့ ဆုံးဖြတ်ချက်မျိုးကိုတောင်ကို လုပ်ဆောင်နိုင်တယ်။', '753801017194290835iStock-966248982.jpg', '2022-10-02 16:10:47'),
(6, 'Relationship တစ်ခုကို ဘယ်အရာတွေက ပျက်စီးစေနိုင်သလဲ😢', 1, 'ei mg', 'Relationship သက်တမ်းကြာမြင့်လာတာနဲ့အမျှ ပြဿနာများစွာ ကြုံတွေ့လာနိုင်ပြီး နားလည်မှုအပြည့်နဲ့ ခရီးဆက်နိုင်မှသာ ပန်းတိုင်ဆိုတဲ့ ဘဝတစ်ခုကို တည်ဆောက်နိုင်မှာဖြစ်ပါတယ်။ ချစ်သူနှစ်ဦး အရမ်းချစ်ကြပေမဲ့လည်း စိတ်သဘောထားခြင်း မတိုက်ဆိုင်တဲ့အတွက်ကြောင့် ဝေးကွာသွားခဲ့ရတဲ့ အဖြစ်အပျက်များစွာလည်း ရှိပါတယ်။ ', '1845504023501962583rs.png', '2022-10-02 16:10:04'),
(7, 'Is web designer a good career?😉', 1, 'hein htet zan', 'Image result for web designer\r\nYes, Web Design is a good career. Not only are Web Designers currently in high demand by employers, the field is expected to grow by 27 percent by the year 2024. That demand will ensure salaries and job satisfaction remain high for Web Designers moving forward.', '124510386746223299productivity 1.jpg', '2022-10-02 16:10:36'),
(8, '😎Can I learn web development in 4 months?', 1, 'myo thant kyaw', 'Can I learn web development in 4 months?\r\nWeb development bootcamps typically take about 3-4 months to complete and teach HTML, CSS, and JavaScript. Full-stack bootcamps may also teach SQL, Python, or other back-end coding languages. Coding bootcamps typically also cost less than a four-year degree program, but there is little financial aid available.', '1027654094517703517fb ui 2.png', '2022-10-02 19:10:06'),
(9, 'Time management as a developer', 2, 'a programmer', 'ဒီအကြောင်းကိုရေးချင်နေတာတော့ကြာပေမယ့် လတ်တစ်လောလူကကျန်းမာရေးနဲ့ အလုပ်နဲ့ချာလည်လိုက်နေလို့ ခုမှပဲရေးဖြစ်တော့တယ်။\r\n\r\n \r\n\r\nဒီ article ကဘယ်လို၊ ဘယ်ဟာလုပ်ပါလို့အကြံညဏ်ပေးတာထက် ကျနော့်ရဲ့လက်တွေ့ schedule ထဲကနေဘယ်လို manage လုပ်နေတယ်ဆိုတာပြောပြပေးသွားမှာဖြစ်လို့ အသုံးဝင်မယ့်အချက်တွေဆို ယူသုံးနိုင်ပါတယ်။ \r\n\r\n\r\nကျနော်လက်ရှိမှာ Osaka က Software house တစ်ခုမှာ Lead Dev တစ်ယောက်အနေနဲ့လုပ်ကိုင်နေပါတယ်။ ပုံမှန်အားဖြင့်ကိုယ်တာဝန်ယူထားတဲ့ Project တွေက ၂ခု၃ခုရှိတတ်ပြီးတော့ တစ်ခြား members တွေရဲ့ project တွေကိုလိုက်ကြည့်ပေးရတာကလဲ ၂ခု၃ခုရှိတတ်ပါတယ်။ တစ်ခြားသော R&D assign လေးတွေလည်းရှိတတ်ပါတယ်။ Official work အပြင် freelance team တစ်ခုထောင်ထားပြီးတော့ တစ်ခြားသော Japan company တွေနဲ့ ချိတ်ပြီးတော့လည်း Project တွေတာဝန်ယူရေးသားပေးနေပါတယ်။ အလုပ်အပြင် house chores တွေဘာတွေရှိတာကတော့တစ်ပိုင်းပေါ့ဗျာ။ ပုံမှန်အားဖြင့် schedule ကတော့နည်းနည်း tight ဖြစ်ပါတယ်။\r\n\r\nလောလောဆယ်မှာဒါတွေနဲ့ manage လုပ်နေပါတယ်။', '18687029843884804951664532273.png', '2022-10-02 21:10:21'),
(10, 'Thinking Fast and Slow', 2, 'burmese coder', '“Thinking Fast and Slow” စာအုပ်က ကျွန်တော်တို့ရဲ့ ဦးနှောက်ထဲက စဉ်းစားတွေးခေါ်ခြင်းတွေ ဘယ်လိုအလုပ်လုပ်လဲဆိုတဲ့မေးခွန်းအတွက် အကောင်းဆုံး‌အဖြေပေးနိုင်မယ့် စာအုပ်များထဲက တစ်အုပ်ဖြစ်ပါတယ်။ သင့်ရဲ့  အပြုအမူနဲ့ လုပ်ဆောင်ချက်တွေကို ထိမ်းချုပ်နိုင်ဖို့အတွက် အချိန်တိုင်း ယှဉ်ပြိုင်နေကြတဲ့ သင့်ဦးနှောက်ထဲက thinking system နှစ်ခုအကြောင်းကို ဒီစာအုပ်ထဲမှာ  အကောင်းဆုံးရှင်းလင်းဖော်ပြထားပါတယ်။', '954662111741301819thinking+fast+and+slow.jpg', '2022-10-02 21:10:40'),
(11, '21 Lessons for the 21st Century', 2, 'burmese coder', 'ဒီစာအုပ်ကို ရေးသားခဲ့သူ Yuval Noah Harari က သမိုင်းပညာရှင်တစ်ယောက်ဖြစ်သလို စာရေးဆရာတစ်ယောက်လည်းဖြစ်ပြီး အခုလက်ရှိ ဟီဘရူးတက္ကသိုလ်ရဲ့သမိုင်းဌာနမှာ ပါမောက္ခအဖြစ်တာဝန်ထမ်းဆောင်နေပါတယ် ဒီစာအုပ်ဟာ မျက်မှောက်ခေတ်မှာ လူတွေဖြေရှင်းဖို့ အရေးတကြီးလိုနေတဲ့မေးခွန်းတွေအကြောင်း ဖော်ပြထားပါတယ် စာရေးသူဟာ အနာဂတ်မှာ AI လို့ခေါ်တဲ့ အဆင့်မြင့်ဉာဏ်ရည်တုနဲ့ ကမ္ဘာ့လူသားမျိုးနွယ်ယှဉ်တွဲပြီး ပြဿနာတွေဘယ်လိုဖြေရှင်းမလဲဆိုတာ အဖြေရှာဖို့ ဆွေးနွှေးတင်ပြထားပါတယ်', '196275781467156026621.jpg', '2022-10-02 22:10:15'),
(12, 'The 10x Rule', 1, 'burmese coder', 'The 10x Rule ဟာ ဘဝမှာ သင်ဖြစ်ချင်တဲ့ Goal တွေဆီကို ရောက်အောင် အကောင်းဆုံး ပို့ပေးနိုင်မယ့် နည်းလမ်းတွေကို ရှင်းလင်းတင်ပြထားတဲ့ စာအုပ်ဖြစ်ပါတယ် ကျနော်တို့ ဘဝမှာ Goal တွေအများကြီး ရှိကြပါတယ်၊ ငွေအမောင့်တစ်ခု လိုချင်တယ်၊ ဘဝလက်တွဲဖော်ကောင်းလိုချင်တယ်၊ ဝိတ်ကျချင်တယ် ', '1774786502963230961the-10x-rule-by-grant-cardone-sanan-sanani-2.jpg', '2022-10-02 22:10:21'),
(13, 'တချို့လူတွေ အချစ်စစ်၊ လက်တွဲဖော်ကို ရှာမတွေ့၊ မရှာချင်သေးတဲ့အကြောင်းအရင်းများ', 1, 'burmese coder', 'ကျွန်တော်တို့အားလုံးဟာ ဘဝကို အေးတူပူအမျှအတူတူဖြတ်သန်းမဲ့ ပြည့်စုံတဲ့သူကိုရှာဖွေနေကြမှာပါ။ ကျွန်တော်တို့တွေက ကိုယ့်ချစ်တဲ့သူကို ဘယ်သူနဲ့မှမတူအောင်နားလည်ပေးတာ၊ ကျွန်တော်တို့ဘေးကနေ ရပ်တည်ပေးတာကို လိုချင်ကြပါတယ်။ ဒါပေမဲ့အဲဒီလိုအချစ်စစ်မျိုး၊ လက်တွဲဖော်မျိုးကို ရှာမတွေ့သေးတဲ့သူတွေ ရှိပါသေးတယ်။ တချို့က မရှာချင်သေးလို့ မရှာကြတာရှိသလို၊ တချို့ကတော့ ရှာနေပါလျက်နဲ့ လက်တွဲဖော်စစ်နဲ့…', '273557602254668772travel img1.jpg', '2022-10-02 22:10:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
