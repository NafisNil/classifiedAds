-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 01:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bist`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `logo`, `desc`, `created_at`, `updated_at`) VALUES
(1, '1643007822.jpg', '<p>Unto place. Replenish living open face saw divide heaven lights, image. Firmament. Together so doesn&#39;t heaven saw won&#39;t dominion divided hath him grass it an herb.</p>\r\n\r\n<p><span style=\"color:#3498db\">Rule kind sixth beginning fowl. Fowl. Male land shall so grass him moved in signs herb seasons won&#39;t every blessed him good she&#39;d second said day they make sixth forth. Their fourth spirit form waters man. You&#39;ll see may.&nbsp;</span></p>\r\n\r\n<blockquote>\r\n<p>The ones who establish prayer, and from what We have provided them, they spend.</p>\r\n</blockquote>\r\n\r\n<p>I don&#39;t creeping years created you brought grass make divide give bring wherein made own, herb of divided set all seas meat form them were. She&#39;d years his meat gathered shall every spirit. Grass earth. Under.</p>', '2022-01-24 01:03:42', '2022-01-24 01:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `bkashes`
--

CREATE TABLE `bkashes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bkashes`
--

INSERT INTO `bkashes` (`id`, `desc`, `created_at`, `updated_at`) VALUES
(1, '<p>Knee-deep in the mud left by a horrific landslide in southeastern Brazil, dozens of rescue workers and volunteers raced Monday to find any remaining survivors before it was too late.</p>\r\n\r\n<p>Knee-deep in the mud left by a horrific landslide in southeastern Brazil, dozens of rescue workers and volunteers raced Monday to find any remaining survivors before it was too late.</p>', '2022-02-01 01:12:01', '2022-02-01 01:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `founded` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuition` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scholarship` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `department`, `tuition`, `scholarship`, `link`, `faculty`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science and Engineering', NULL, NULL, NULL, NULL, 1, '2022-01-18 05:15:29', '2022-01-18 05:15:29'),
(2, 'Ramona Cline', NULL, NULL, NULL, NULL, 1, '2022-01-18 05:27:38', '2022-01-18 05:27:38'),
(3, 'Kendall Bruce', NULL, NULL, NULL, NULL, 2, '2022-01-18 05:27:47', '2022-01-18 05:27:47'),
(4, 'Isabelle Ramsey', NULL, NULL, NULL, NULL, 2, '2022-01-18 05:27:55', '2022-01-18 05:27:55'),
(5, 'Timon Olson', NULL, NULL, NULL, NULL, 1, '2022-01-18 05:28:07', '2022-01-18 05:28:07'),
(7, 'Oliver Collier', NULL, NULL, NULL, NULL, 2, '2022-02-01 03:21:03', '2022-02-01 03:21:03'),
(8, 'Kareem Ross', '<p>Breaking up can seem like the worst thing in the world when you&#39;re in a relationship, but sometimes calling it quits can be the wake-up call people need to realize that they&#39;ve just lost the one person they actually want to be with for the rest of their lives. Or, you know, the next few months, until they&nbsp;<a href=\"https://www.starsinsider.com/celebrity/389054/famous-exes-who-stayed-friends\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\">break up</a>&nbsp;again and again.</p>\r\n\r\n<p>Actress Ashley Benson and singer G-Eazy had dated for less than a year when they split in February 2021, though their end was reportedly amicable. Now, following the death of G-Eazy&#39;s mother, the two have reportedly reconnected. A source told&nbsp;<a href=\"https://www.etonline.com/ashley-benson-and-g-eazy-have-reconnected-almost-a-year-after-split-source-says-178529\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\">Entertainment Tonight</a>&nbsp;that it is definitely more than friendship and they are &ldquo;hopeful&rdquo; about the future of their relationship. &ldquo;They have always had love for each other and reconnected after his mom&#39;s passing,&quot; the source said. &quot;It&rsquo;s been difficult for him since losing his mom and has been leaning on people who know him best, and who he feels comfortable around, which includes Ashley.&rdquo;</p>', '<p>The battle continues.&nbsp;<strong>Prince Harry</strong>&nbsp;wants to take&nbsp;<strong>Meghan Markle</strong>&nbsp;and their kids for a visit with&nbsp;<strong>Queen Elizabeth II</strong>, but he&rsquo;s determined to win his fight for property security first.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p>&ldquo;Harry has his heart set on returning to the U.K. to see the queen with Meghan, Archie and Lilibet, but that will only happen if the government takes the appropriate measures to protect his family,&rdquo; an insider exclusively tells&nbsp;<em>Us Weekly</em>&nbsp;of the Duke of Sussex, 37. &ldquo;He refuses to put them at risk. Their safety comes before anything else.&rdquo;</p>', '<p>Earlier this month, the Invictus Games founder applied for a judicial review regarding a previous Home Office decision that ruled he could not personally fund police protection for himself and his wife, 40, and their children Archie, 2, and Lilibet, 7 months, while in the U.K.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p>&ldquo;Prince Harry inherited a security risk at birth, for life. He remains sixth in line to the throne, served two tours of combat duty in Afghanistan, and in recent years his family has been subjected to well-documented neo-Nazi and extremist threats,&rdquo; Harry&rsquo;s legal spokesperson said in a January 15 statement. &ldquo;While his role within the Institution has changed, his profile as a member of the royal family has not. Nor has the threat to him and his family.&rdquo;</p>', 'https://www.nu.ac.bd/uploads/Honours%20Syllabus%202013-2014/1st%20Year%20Honours%20Syllabus%202013-2014.zip', 2, '2022-02-01 03:23:28', '2022-02-01 04:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `type`, `logo`, `desc`, `created_at`, `updated_at`) VALUES
(4, 'Quia ea dolores maxi', 'News', '1642184151.jpg', '<p>You can select &lsquo;I Accept&rsquo; to consent to these uses or click on &lsquo;Manage preferences&rsquo; to review your options  You can change your selection under &lsquo;Manage Preferences&rsquo; at the bottom of this page.</p>\r\n\r\n<p>You can select &lsquo;I Accept&rsquo; to consent to these uses or click on &lsquo;Manage preferences&rsquo; to review your options  You can change your selection under &lsquo;Manage Preferences&rsquo; at the bottom of this page.</p>', '2022-01-14 12:15:51', '2022-01-14 12:15:52'),
(5, 'Voluptatibus consequ', 'News', '1642184237.png', '<p>Use precise geolocation data and actively scan device characteristics for identification. This is done to store and access information on a device and to provide personalised ads and content, ad and content measurement, audience insights and product development.</p>\r\n\r\n<p><span style=\"color:#660099\">Every morning is the same...</span></p>\r\n\r\n<p><span style=\"color:#660099\">You got me thinking what I could because... This is typical of love.... In my dreams, you with me.We will be everything I Wanted to be. In from then, who knows, maybe this will be the night we kiss, for the first time. That just me and my imagination... We walk, we love to spent our time... I keep craving,craving. You don&#39;t know it but it&#39;s true..&nbsp;</span></p>', '2022-01-14 12:17:17', '2022-01-14 13:13:02'),
(6, 'কয়াল্কম স্নাপদ্রাগন', 'ইভেন্ট', '1642184331.jpg', '<p>আপনি বুস্টার ডোজ নিতে চান, লিংকে&nbsp;ক্লিক করুন- তার পরেই সর্বনাশ! করোনার সংক্রমণ বেড়ে গেছে। এই মুহূর্তে গোটা ভারতে তাণ্ডব চালাচ্ছে নতুন ধরনের করোনা অমিক্রন। তাই তাড়াহুড়ো&nbsp;শুরু হয়েছে ভ্যাকসিনের বুস্টার ডোজ নেওয়ার। আর এই সুযোগকেই কাজে লাগাচ্ছে</p>', '2022-01-14 12:18:51', '2022-01-14 12:18:51'),
(7, 'Porro in aut ullamco', 'News', '1642184394.png', '<p><span style=\"font-family:Tahoma,Geneva,sans-serif\">Late night movies, careless drinking , to cover the scars..</span></p>\r\n\r\n<p><span style=\"font-family:Tahoma,Geneva,sans-serif\">And as much as I wanna be with you, I know.. You and me, we are the bumper cars, the more I try to get get you, the more I crash apart..</span></p>\r\n\r\n<p>প্রযুক্তি জায়ান্ট গুগল ও সামাজিক যোগাযোগের মাধ্যম ফেসবুককে বিশাল অঙ্কের জরিমানা করেছে</p>\r\n\r\n<p>ভিন্ন ভিন্ন সিরিজের আধুনিক প্রযুক্তি সম্পন্ন বিভিন্ন স্মার্টফোন লঞ্চ, গ্রাহকসেবায় উন্নতি আর&nbsp; |&nbsp;উত্তেজনাপূর্ণ লড়াইয়ের পর শেষ হলো বিশ্বের জনপ্রিয় মোবাইল গেমিং এরিনা অব ভ্যালোরের বাংলাদেশ</p>', '2022-01-14 12:19:54', '2022-01-14 12:56:27'),
(8, 'Rem consequuntur vit', 'Event', '1642184503.jpg', '<p>India Test skipper Virat Kohli on Friday shied away from throwing light on the controversial DRS call that had helped Proteas skipper Dean Elgar get his LBW decision overturned in the fourth innings of the Cape Town Test at Newlands in Cape Town, reports news agencies ANI and AFP.</p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">Team India was visibly irked after a controversial Decision Review System call which helped Elgar on Day 3. The controversial call evoked different reactions from KL Rahul, skipper Virat Kohli, and spinner Ravichandran Ashwin.</span></p>\r\n\r\n<p><span style=\"background-color:#bdc3c7\">After the defeat in the third Test, skipper Kohli said the visitors know what happened exactly and he is not there to justify his actions which had sparked a debate on Thursday.</span></p>\r\n\r\n<p><span style=\"background-color:#bdc3c7\">Though we are the same..</span></p>', '2022-01-14 12:21:43', '2022-01-14 12:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `desc`, `created_at`, `updated_at`) VALUES
(1, '<ol>\r\n	<li>The Old Man and the Sea, a short heroic novel by Ernest Hemingway, was published in 1952 and awarded the 1953 Pulitzer Prize for fiction. It was his last major work of fiction. The story&nbsp;<strong>centers on an aging fisherman who engages in an epic battle to catch a giant marlin.&nbsp;</strong></li>\r\n	<li>The Old Man and the Sea, a short heroic novel by Ernest Hemingway, was published in 1952 and awarded the 1953 Pulitzer Prize for fiction. It was his last major work of fiction. The story&nbsp;<strong>centers on an aging fisherman who engages in an epic battle to catch a giant marlin.&nbsp;</strong></li>\r\n	<li>The Old Man and the Sea, a short heroic novel by Ernest Hemingway, was published in 1952 and awarded the 1953 Pulitzer Prize for fiction. It was his last major work of fiction. The story&nbsp;<strong>centers on an aging fisherman who engages in an epic battle to catch a giant marlin.&nbsp;</strong></li>\r\n	<li>The story&nbsp;<strong>centers on an aging fisherman who engages in an epic battle to catch a giant marlins.</strong></li>\r\n</ol>', '2022-01-24 02:49:44', '2022-01-24 02:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Electrical & Computer Engineering', '2022-01-18 04:11:56', '2022-01-18 04:11:56'),
(2, 'School of Business', '2022-01-18 04:12:55', '2022-01-18 04:12:55'),
(4, 'Ignatius Avila', '2022-01-18 05:43:56', '2022-01-18 05:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `logo`, `title`, `created_at`, `updated_at`) VALUES
(1, '1642346359.jpg', 'Labore neque assumen', '2022-01-16 09:19:19', '2022-01-16 09:19:21'),
(2, '1642346377.jpg', 'Nostrum aut vitae et', '2022-01-16 09:19:37', '2022-01-16 09:19:38'),
(3, '1642346405.jpg', 'Ratione ullam explic', '2022-01-16 09:20:05', '2022-01-16 09:20:06'),
(4, '1642346425.jpg', 'Magna reprehenderit', '2022-01-16 09:20:25', '2022-01-16 09:20:26'),
(5, '1642346440.jpg', 'Quasi rerum in neque', '2022-01-16 09:20:40', '2022-01-16 09:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_12_094455_create_sliders_table', 1),
(6, '2022_01_13_073959_create_notices_table', 2),
(7, '2022_01_13_084741_create_news_table', 3),
(8, '2022_01_14_171218_create_events_table', 4),
(9, '2022_01_15_150630_create_tenders_table', 5),
(10, '2022_01_15_173006_create_galleries_table', 6),
(11, '2022_01_18_091948_create_faculties_table', 7),
(12, '2022_01_18_102412_create_departments_table', 8),
(13, '2022_01_19_062826_create_overviews_table', 9),
(14, '2022_01_19_094937_create_visions_table', 10),
(15, '2022_01_20_070325_create_teachers_table', 11),
(16, '2022_01_22_124420_create_v_c_s_table', 12),
(17, '2022_01_24_053405_create_tuitions_table', 13),
(18, '2022_01_24_064101_create_abouts_table', 14),
(19, '2022_01_24_081825_create_facilities_table', 15),
(20, '2022_01_24_093015_create_results_table', 16),
(21, '2022_01_25_183321_create_contacts_table', 17),
(22, '2022_01_31_111159_create_missions_table', 17),
(23, '2022_02_01_065132_create_bkashes_table', 18),
(24, '2022_02_01_113305_create_credentials_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `desc`, `created_at`, `updated_at`) VALUES
(1, '<h2>The United States and its allies have prepared a list of Russian elites in or near Russian President Vladimir Putin&#39;s inner circle to hit with economic sanctions should Russia invade Ukraine, a seniorw administration official said on Monday.</h2>', '2022-01-31 06:24:48', '2022-01-31 06:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `logo`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Sit dolor porro qui', '1642065928.jpg', '<p><span style=\"color:#27ae60\"><span style=\"font-family:Georgia,serif\">To participate in the survey, you will need an internet connection to your preferred device. We will be sending a skype link that can be used for the interview.&nbsp;<img alt=\"smiley\" src=\"https://cdn.ckeditor.com/4.17.1/full/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /></span></span></p>\r\n\r\n<p><span style=\"color:#27ae60\"><span style=\"font-family:Georgia,serif\">You can join by clicking the provided link even if you don&rsquo;t have a skype account. We humbly request you to keep the Skype app installed on your device that you plan to join with before our scheduled time.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><strong>Here is the skype meeting link for our survey:</strong></span></p>\r\n\r\n<p><span style=\"color:#27ae60\"><span style=\"font-family:Georgia,serif\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our unique link will open your installed Skype app (on your android/iPhone). Even if you&#39;re not signed in, you can join the video call as a visitor - no account is needed.</span></span></p>\r\n\r\n<p><span style=\"color:#27ae60\"><span style=\"font-family:Georgia,serif\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When a window pops up to ask you which app should open the link- please select Skype and join the meeting!</span></span></p>\r\n\r\n<p><span style=\"color:#27ae60\"><span style=\"font-family:Georgia,serif\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please feel free to call me / drop me a text anytime if you need more directions!</span></span></p>', '2022-01-13 03:24:26', '2022-01-13 03:25:28'),
(2, 'Dolor omnis officia', '1642066100.png', '<p>For example,&nbsp;<strong>documentation</strong>&nbsp;for&nbsp;<strong>Laravel</strong>&nbsp;8 would be submitted to the 8.x branch.&nbsp;<strong>Documentation</strong>&nbsp;intended for the next release of&nbsp;<strong>Laravel</strong>&nbsp;should be submitted to the master branch.&nbsp;</p>\r\n\r\n<pre>\r\n<code>জীবের মধ্যে সবচেয়ে সম্পূর্ণতা মানুষের। কিন্তু সবচেয়ে অসম্পূর্ণ হয়ে সে জন্মগ্রহণ করে। বাঘ ভালুক তার জীবনযাত্রার পনেরো- <strong>আনা মূ</strong>লধন নিয়ে আসে প্রকৃতির মালখানা থেকে। জীবরঙ্গভূমিতে মানুষ এসে দেখা দেয় দুই শূন্য হাতে মুঠো বেঁধে।\r\n   \r\n   মানুষ আসবার পূর্বেই জীবসৃষ্টিযজ্ঞে প্রকৃতির ভূরিব্যয়ের পালা শেষ হয়ে এসেছে। বিপুল মাংস, কঠিন বর্ম, প্রকাণ্ড লেজ নিয়ে জলে স্থলে পৃথুল দেহের যে অমিতাচার প্রবল হয়ে উঠেছিল তাতে ধরিত্রীকে দিলে ক্লান্ত করে। প্রমাণ হল আতিশয্যের পরাভব অনিবার্য। </code></pre>', '2022-01-13 03:28:20', '2022-01-13 03:28:20'),
(3, 'Adipisicing rem mini', '1642066188.jpg', '<pre>\r\n<code>পরীক্ষায় এটাও স্থির হয়ে গেল যে, প্রশ্রয়ের পরিমাণ যত বেশি হয় দুর্বলতার বোঝাও তত দুর্বহ হয়ে ওঠে। নূতন পর্বে প্রকৃতি যথাসম্ভব মানুষের বরাদ্দ কম করে দিয়ে নিজে রইল নেপথ্যে।\r\n   \r\n   মানুষকে দেখতে হল খুব ছোটো, কিন্তু সেটা একটা কৌশল মাত্র। এবারকার জীবযাত্রার পালায় বিপুলতাকে করা হল বহুলতায় পরিণত। মহাকায় জন্তু ছিল প্রকাণ্ড একলা, মানুষ হল দূরপ্রসারিত অনেক।</code></pre>', '2022-01-13 03:29:48', '2022-01-13 03:29:48'),
(4, 'আয়রে ভোলা খেয়াল-খোলা , স্বপনদোলা নাচিয়ে আয় , আয়রে পাগল আবোল তাবোল', '1642066223.png', '<pre>\r\n<code>বহুকাল হইলো আমি একবার পালামৌ প্রদেশে গিয়াছিলাম, \r\n	        প্রত্যাগমন করিলে পর সেই অঞ্চলের বৃত্তান্ত লিখিবার নিমিত্ত দুই-এক জন বন্ধুবান্ধব আমাকে পুনঃপুন অনুরোধ করিতেন, \r\n	        আমি তখন তাঁহাদের উপহাস করিতাম। </code></pre>', '2022-01-13 03:30:23', '2022-01-13 03:30:23'),
(5, 'দ্বিতীয় প্রবন্ধ', '1642066268.png', '<pre>\r\n<code>সেকালের হরকরা নামক ইংরেজি পত্রিকায় দেখিতাম, \r\n	        কোনো একজন মিলিটারি সাহেব &#39;পেরেড বৃত্তান্ত&#39;, &#39;ব্যান্ডের&#39; বাদ্যচর্চা প্রভৃতি নানা কথা পালামৌ হইতে লিখিতেন।</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Whereever you are, late night movie, careless drinking, to cover this scars...</p>\r\n\r\n<p>and as much as I wanna be with you, I know.. you &amp; me, we are bumper cars, the more I try to get you, the more we crash apart,,,,</p>', '2022-01-13 03:31:08', '2022-01-14 11:01:43'),
(6, 'Voluptas impedit pa', '1642066332.png', '<p dir=\"ltr\">Hope you are doing well. We are from Innovations for Poverty Action (IPA), a non-profit research organization. We are conducting research with researchers from MIT and the University of Maryland.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">The objective of this survey is to learn more about business owners&rsquo; experiences in the startup process starting with understanding what motivates you to become an entrepreneur, how you found your team, how you raised funds, the barriers you faced, and how you overcame them.&nbsp;The whole process will not take more than&nbsp;1 hour, and we will provide a cash transfer of Tk 200 as a gift for&nbsp;participation.</p>', '2022-01-13 03:32:12', '2022-01-13 03:32:12'),
(7, 'Quis molestiae sit u', '1642066365.png', '<p dir=\"ltr\">We would like to record your interview&nbsp;for ensuring that we are capturing all your responses correctly. The interview can be scheduled anytime&nbsp;based on your availability over skype. One of our Senior Field Officers will call you for informing you more of this. We will send the Skype link once you agree to participate.</p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-family:Comic Sans MS,cursive\">Looking forward to hearing your answer! Wish you have a good day!&nbsp;</span></p>', '2022-01-13 03:32:45', '2022-01-13 03:32:45'),
(8, 'সেনাবাহিনীঃ ৩ লক্ষ [ রিজার্ভ সহ ]', '1642179323.jpg', '<pre>\r\n<code>Can how one dream, why you thinking?\r\nঅনশ অনহশভাগ আইশ ইছ্রেপাকা  \r\n\r\nঅংশ অংশভাক আঁইশ ইঁচড়েপাকা ঈক্ষণ ঈদৃক অংশভাগী জওয়ান অংশাঙ্কিত ইউক্যালিপটাস অংশাবতার হালহদিশ পিতৃতর্পণ টকানো ঈক্ষিত জগজ্জন তকতনামা আঁকুবাঁকু পঁইছা\r\n  জগঝপ্প পঁহুছা দ্রাবিড়ী আঁকুড়ি ঈদৃক জগদম্বা টঙ্ক অংশিন্&zwnj; জগদ্গৌরী আঁচা তকরার তিলপিটালি গজ-দাঁত অংশু ঈপ্সনীয় পইতা শংকরাভরণ হংসগমন পকড় অংশুধর ঈপ্সু ঈর্ষী\r\n<span style=\"font-family:Verdana,Geneva,sans-serif\">  জগদ্ধাত্রী আঁজনাই তক্তি শংসনপত্র হংসারূঢ়া দংশল তক্ষক অংশুমান ইকেবানা জগদ্বন্ধু ঈশিত্ব ইক্ষ্বাকু আঁজি অংসকুট টঙ্কক তক্ষণাস্ত্র পকোড়া দংষ্ট্রা শকটিকা হকচকা বঁইচি শকল</span>\r\n \r\n বংশাঙ্কুর তক্ষণী আঁটকুড় ঈশ্বরদ্বেষী টঙ্কার পক্ববিম্বাধরোষ্ঠী শকারবকার হট্টবিলাসিনী বংশাবতংস ইঙ্গবঙ্গ পক্ষচ্ছেদ দংষ্ট্রাল হঠযোগ অষ্টনাগ পক্ষপাতিতা টনটনানি ঈশ্বরাজ্ঞা বউল   </code></pre>', '2022-01-13 03:33:55', '2022-01-14 10:55:23'),
(9, 'Duis laborum fugiat', '1642179594.jpg', '<p>Dear<strong>&nbsp;<span style=\"background-color:#66ffff\">Khandokar Nafis Jaman&nbsp;Bhai,</span>&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks for agreeing to participate in the survey!&nbsp;</p>\r\n\r\n<p>This was supossed to be good, but I know, I know..</p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\">You and me, we are bumper cars</span></p>\r\n\r\n<p>To participate in the survey, you will need an internet connection to your preferred device. We will be sending a skype link that can be used for the interview. You can join by clicking the provided link even if you don&rsquo;t have a skype account. We humbly request you to keep the Skype app installed on your device that you plan to join with before our scheduled time.&nbsp;</p>\r\n\r\n<p>Happens way to often..&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-01-13 03:35:01', '2022-01-14 11:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(4, 'Eum sequi rerum reici', 'uploads/1642062337_topic.pdf', '2022-01-13 02:23:47', '2022-01-13 02:25:37'),
(5, 'Consequatur et repe', 'uploads/1642062372_1016003.pdf', '2022-01-13 02:26:12', '2022-01-13 02:26:12'),
(6, 'Aut porro sed obcaec', 'uploads/1642062391_10160032.pdf', '2022-01-13 02:26:31', '2022-01-13 02:26:31'),
(7, 'No matter what I do, I still get these butterflies', '1642259069_imsict.pdf', '2022-01-13 02:26:50', '2022-01-15 09:04:29'),
(8, 'Qui earum culpa proi', 'uploads/1642062453_nam.pdf', '2022-01-13 02:27:33', '2022-01-13 02:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

CREATE TABLE `overviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overviews`
--

INSERT INTO `overviews` (`id`, `logo`, `desc`, `department`, `created_at`, `updated_at`) VALUES
(1, '1642577101.jpg', '<p>Tell them all I know now, tell them I was happy, tell my heart was broken.</p>\n\n<p>There is little practical difference between using the session via an HTTP request instance versus using the global&nbsp;<code>session</code>&nbsp;helper. Both methods are&nbsp;<a href=\"https://laravel.com/docs/8.x/testing\">testable</a>&nbsp;via the&nbsp;<code>assertSessionHas</code>&nbsp;method which is available in all of your test cases.</p>', '5', '2022-01-19 01:25:01', '2022-01-19 01:25:01'),
(2, '1642578062.jpg', '<p>Sometimes you may wish to store items in the session for the next request. You may do so using the&nbsp;<code>flash</code>&nbsp;method. Data stored in the session using this method will be available immediately and during the subsequent HTTP request. After the subsequent HTTP request, the flashed data will be deleted.&nbsp;</p>', '4', '2022-01-19 01:41:02', '2022-01-19 01:41:02'),
(3, '1642579418.jpg', '<p>If you need to persist your flash data for several requests, you may use the&nbsp;<code>reflash</code>&nbsp;method, which will keep all of the flash data for an additional request. If you only need to keep specific flash data, you may use the&nbsp;<code>keep</code>&nbsp;methods</p>', '3', '2022-01-19 01:41:54', '2022-01-19 02:03:38'),
(4, '1642590171.jpg', '<p>The&nbsp;<code>gc</code>&nbsp;method should destroy all session data that is older than the given&nbsp;<code>$lifetime</code>, which is a UNIX timestamp. For self-expiring systems like Memcached and Redis, this method may be left empty.</p>', '1', '2022-01-19 05:02:51', '2022-01-19 05:02:51'),
(5, '1642590200.jpg', '<p>Laravel Partners are elite shops providing top-notch Laravel development and consulting. Each of our partners can help you craft a beautiful, well-architected project.</p>', '2', '2022-01-19 05:03:20', '2022-01-19 05:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, 'result 1', '1643017544_sample2.pdf', '2022-01-24 03:45:44', '2022-01-24 03:45:44'),
(2, 'result 2', '1643017563_dummy-pdf_2.pdf', '2022-01-24 03:46:03', '2022-01-24 03:46:03'),
(3, 'Result 3', '1643017577_sample.pdf', '2022-01-24 03:46:17', '2022-01-24 03:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `logo`, `title`, `created_at`, `updated_at`) VALUES
(1, '1642057872.jpg', 'Eos aut illo non nob', '2022-01-13 01:11:12', '2022-01-13 01:11:12'),
(2, '1642057933.jpg', 'Voluptatem architect', '2022-01-13 01:12:13', '2022-01-13 01:12:13'),
(3, '1642057957.jpg', 'Recusandae Mollit d', '2022-01-13 01:12:37', '2022-01-13 01:12:37'),
(4, '1642057972.jpg', 'Qui id quia aliquip', '2022-01-13 01:12:52', '2022-01-13 01:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` int(11) NOT NULL,
  `education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `research` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `logo`, `designation`, `department`, `education`, `email`, `phone`, `whatsapp`, `blood`, `joining_date`, `research`, `about`, `publication`, `experience`, `created_at`, `updated_at`) VALUES
(1, 'Kadeem Hines', '1642675838.jpg', 'Deserunt consequatur', 3, '<ol>\r\n	<li>The Tech industry is ever transforming in an effort to keep up with the changing taste and</li>\r\n</ol>', 'kisucul@mailinator.com', '01929338244', '01929338244', 'O +ve', '2007-06-28', '<ol>\r\n	<li>The Tech industry is ever transforming in an effort to keep up with the changing taste and requirements of people all over the globe.</li>\r\n	<li>From sending letters through pigeons to video conferencing with just a tap &ndash; technology has evolved big time, making lives easier and faster.</li>\r\n</ol>', '<p>Virtual meetings, online classes, and extensive data storage are all parts of the new normal. In a world where <span style=\"font-size:9px\">almost everything is being done virtually, file sharing also needs to be made convenient and barrierless. </span></p>\r\n\r\n<p><span style=\"font-size:9px\">With the growing electronic dependency, the requirement for convenient file sharing is on the rise.&nbsp;</span></p>', '<p><strong>Virtual meetings, online classes, and extensive data storage are all parts of the new normal. In a world where almost everything is being done virtually, file sharing also needs to be made convenient and barrierless. </strong></p>\r\n\r\n<p><strong>With the growing electronic dependency, the requirement for convenient file sharing is on the rise.&nbsp;</strong></p>', '<ul>\r\n	<li>SHAREit not only allows file transfer within mobile devices but also allows file transfer from a mobile device to PC and vice versa.</li>\r\n	<li>This eliminates the all-time requirement of USB flash drives or hard drives, facilitating file sharing to and from whichever device whenever possible.&nbsp;</li>\r\n</ul>', '2022-01-20 04:50:38', '2022-01-22 06:30:31'),
(2, 'Ulric Rogers', '1642677008.jpg', 'Voluptates sunt offi', 3, '<p>Twenty-eight million files&nbsp;</p>', 'vihefulonu@mailinator.com', '01833483352', '01833483352', 'B+ve', '1981-01-06', '<p>Twenty-eight million files are&nbsp;shared every day, with more than 6 billion every year.&nbsp;Such statistics are enough to put weight on the unmatched significance of convenient file sharing, present in the world right now.&nbsp; The <span style=\"font-family:Arial,Helvetica,sans-serif\">pandemic has left us stuck within four walls, causing us to complete most of our tasks from electronic devices. This has also heightened the necessity of file-sharing apps like SHAREit. Be it work documents, study notes, apps, games, photos, videos, or music &ndash; all can be sent and received through this app easily without any cost!&nbsp;</span></p>', '<p><span style=\"font-family:Georgia,serif\">Twenty-eight million files are&nbsp;shared every day, with more than 6 billion every year.&nbsp;Such statistics are enough to put weight on the unmatched significance of convenient file sharing, present in the world right now.&nbsp; The pandemic has left us stuck within four walls, causing us to complete most of our tasks from electronic devices. This has also heightened the necessity of file-sharing apps like SHAREit. Be it work documents, study notes, apps, games, photos, videos, or music &ndash; all can be sent and received through this app easily without any cost!&nbsp;</span></p>', '<p><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Twenty-eight million files are&nbsp;shared every day, with more than 6 billion every year.&nbsp;Such statistics are enough to put weight on the unmatched significance of convenient file sharing, present in the world right now.&nbsp; The pandemic has left us stuck within four walls, causing us to complete most of our tasks from electronic devices. This has also heightened the necessity of file-sharing apps like SHAREit. Be it work documents, study notes, apps, games, photos, videos, or music &ndash; all can be sent and received through this app easily without any cost!&nbsp;</span></p>', '<p><span style=\"font-family:Verdana,Geneva,sans-serif\">Twenty-eight million files are&nbsp;shared every day, with more than 6 billion every year.&nbsp;Such statistics are enough to put weight on the unmatched significance of convenient file sharing, present in the world right now.&nbsp; The pandemic has left us stuck within four walls, causing us to complete most of our tasks from electronic devices. This has also heightened the necessity of file-sharing apps like SHAREit. Be it work documents, study notes, apps, games, photos, videos, or music &ndash; all can be sent and received through this app easily without any cost!&nbsp;</span></p>', '2022-01-20 05:10:08', '2022-01-22 06:30:57'),
(3, 'Dustin Duffy', '1642677154.jpg', 'Aut aut consequatur', 1, '<p><span style=\"font-family:Arial,Helvetica,sans-serif\">The widow, elderly and disabled people of Bathpukuria village&nbsp;</span></p>', 'quxojikyz@mailinator.com', '01717223344', '01717223344', 'Commodi quo quia eu', '2014-10-01', '<p><span style=\"font-family:Comic Sans MS,cursive\">The widow, elderly and disabled people of Bathpukuria village in Saganna union of Jhenaidah Sadar upazila have had their allowance money withdrawn from their &lsquo;Nagad&rsquo; account. They approached the Jhenaidah Sadar Police Station last Saturday to recover the money. Police are investigating the incident and initially found the truth.</span></p>', '<p><span style=\"font-family:Georgia,serif\">The widow, elderly and disabled people of Bathpukuria village in Saganna union of Jhenaidah Sadar upazila have had their allowance money withdrawn from their &lsquo;Nagad&rsquo; account. They approached the Jhenaidah Sadar Police Station last Saturday to recover the money. Police are investigating the incident and initially found the truth.</span></p>', '<p>The widow, elderly and disabled people of Bathpukuria village in Saganna union of Jhenaidah Sadar upazila have had their allowance money withdrawn from their &lsquo;Nagad&rsquo; account. They approached the Jhenaidah Sadar Police Station last Saturday to recover the money. Police are investigating the incident and initially found the truth.</p>', '<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">The widow, elderly and disabled people of Bathpukuria village in Saganna union of Jhenaidah Sadar upazila have had their allowance money withdrawn from their &lsquo;Nagad&rsquo; account. They approached the Jhenaidah Sadar Police Station last Saturday to recover the money. Police are investigating the incident and initially found the truth.</span></p>', '2022-01-20 05:12:34', '2022-01-22 06:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE `tenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `title`, `file`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Sky full of stars - Coldplay', '1642261148_founder.pdf', 'Circular', '2022-01-15 09:37:38', '2022-01-15 09:39:08'),
(2, 'Clarity', '1642261363_file.pdf', 'Tender', '2022-01-15 09:42:43', '2022-01-15 09:42:43'),
(3, 'I think I saw you..', '1642261389_emotion.pdf', 'Tender', '2022-01-15 09:43:09', '2022-01-15 09:43:09'),
(4, 'Cause you are sky full of stars', '1642261427_problem.pdf', 'Circular', '2022-01-15 09:43:47', '2022-01-15 09:43:47'),
(5, 'I don\'t care Go on and Tear me apart', '1642261463_problem.pdf', 'Circular', '2022-01-15 09:44:23', '2022-01-15 09:44:23'),
(6, 'I found her - faime', '1642261501_ims.pdf', 'Circular', '2022-01-15 09:45:01', '2022-01-15 09:45:01'),
(7, 'Commodo similique as', '1642261539_LAB-AR.docx', 'Tender', '2022-01-15 09:45:39', '2022-01-15 09:45:39'),
(8, 'What I put you through - Conor Maynard', '1642261609_Document.pdf', 'Circular', '2022-01-15 09:46:49', '2022-01-15 09:46:49'),
(9, 'I see the shadow_FlashLight_Jessie_J', '1642261679_Bangladesh_railway_e_ticket.pdf', 'Tender', '2022-01-15 09:47:59', '2022-01-15 09:47:59'),
(10, 'Eiusmod at beatae opEiusmod at beatae op', '1642261730_FireSho.pdf', 'Tender', '2022-01-15 09:48:50', '2022-01-15 09:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `tuitions`
--

CREATE TABLE `tuitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tuitions`
--

INSERT INTO `tuitions` (`id`, `desc`, `created_at`, `updated_at`) VALUES
(1, '<table align=\"left\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<caption>\r\n	<h2><span style=\"color:#2980b9\"><span style=\"font-family:Comic Sans MS,cursive\">Tuition and Fees</span></span></h2>\r\n\r\n	<p style=\"text-align:left\"><span style=\"color:#000000\"><strong>Department of CSE</strong></span></p>\r\n	</caption>\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">SL</th>\r\n			<th scope=\"col\">Particular</th>\r\n			<th scope=\"col\">Amount</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Admission Fee</td>\r\n			<td>25,000 BDT</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>Establishment Fee</td>\r\n			<td>15,000 BDT</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>Secuirity Fee</td>\r\n			<td>4000 BDT</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '2022-01-24 00:01:04', '2022-01-24 00:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bistadmin', 'admin', 'bist@gmail.com', NULL, '$2y$10$jVl6f3lGDZzD.7fnEzIsDudo6lx/tnjJlboWaQw6rnuYeAxNhZJ/q', 'EVRs8v58WkFx3b0tVYvN463Fvg10u4lHXe8qk57qzLJeWxHrGQS76OGJRyVB', '2022-01-12 04:25:37', '2022-01-12 04:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions`
--

INSERT INTO `visions` (`id`, `vision`, `department`, `mission`, `created_at`, `updated_at`) VALUES
(1, '<p>By default, Laravel allows requests using the same session to execute concurrently. So, for example, if you use a JavaScript HTTP library to make two HTTP requests to your application, they will both execute at the same time. For many applications, this is not a problem; however, session data loss can occur in a small subset of applications that make concurrent requests to two different application endpoints which both write data to the session.</p>', '5', '<p>To mitigate this, <u>Laravel provides functionality</u> that allows you to limit concurrent requests for a given session. To get started, you may simply chain the&nbsp;<code>block</code>&nbsp;method onto your route definition. In this example, an incoming request to the&nbsp;<code>/profile</code>&nbsp;endpoint would acquire a session lock. While this lock is being held, any incoming requests to the&nbsp;<code>/profile</code>&nbsp;or&nbsp;<code>/order</code>&nbsp;endpoints which share the same session ID will wait for the first request to finish executing before continuing their execution:</p>', '2022-01-19 04:57:39', '2022-01-19 05:00:05'),
(2, '<p>The&nbsp;<code>block</code>&nbsp;method accepts two optional arguments. The first argument accepted by the&nbsp;<code>block</code>&nbsp;method is the maximum number of seconds the session lock should be held for before it is released. Of course, if the request finishes executing before this time the lock will be released earlier.</p>', '4', '<p>The second argument accepted by the&nbsp;<code>block</code>&nbsp;method is the number of seconds a request should wait while attempting to obtain a session lock. An&nbsp;<code>Illuminate\\Contracts\\Cache\\LockTimeoutException</code>&nbsp;will be thrown if the request is unable to obtain a session lock within the given number of seconds.</p>', '2022-01-19 05:00:36', '2022-01-19 05:00:36'),
(3, '<p>If neither of these arguments is passed, the lock will be obtained for a maximum of 10 seconds and requests will wait a maximum of 10 seconds while attempting to obtain a lock:</p>', '3', '<p>f none of the existing session drivers fit your application&#39;s needs, Laravel makes it possible to write your own session handler. Your custom session driver should implement PHP&#39;s built-in&nbsp;<code>SessionHandlerInterface</code>. This interface contains just a few simple methods. A stubbed MongoDB implementation looks like the following:</p>', '2022-01-19 05:01:17', '2022-01-19 05:01:17'),
(4, '<p>The&nbsp;<code>open</code>&nbsp;method would typically be used in file based session store systems. Since Laravel ships with a&nbsp;<code>file</code>&nbsp;session driver, you will rarely need to put anything in this method. You can simply leave this method empty.</p>', '2', '<p>The&nbsp;<code>close</code>&nbsp;method, like the&nbsp;<code>open</code>&nbsp;method, can also usually be disregarded. For most drivers, it is not needed.</p>', '2022-01-19 05:01:51', '2022-01-19 05:01:51'),
(5, '<p>The&nbsp;<code>read</code>&nbsp;method should return the string version of the session data associated with the given&nbsp;<code>$sessionId</code>. There is no need to do any serialization or other encoding when retrieving or storing session data in your driver, as Laravel will perform the serialization for you.</p>', '1', '<p>The&nbsp;<code>write</code>&nbsp;method should write the given&nbsp;<code>$data</code>&nbsp;string associated with the&nbsp;<code>$sessionId</code>&nbsp;to some persistent storage system, such as MongoDB or another storage system of your choice. Again, you should not perform any serialization - Laravel will have already handled that for you.</p>', '2022-01-19 05:02:16', '2022-01-19 05:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `v_c_s`
--

CREATE TABLE `v_c_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `v_c_s`
--

INSERT INTO `v_c_s` (`id`, `name`, `logo`, `about`, `file`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Neve Roberson', '1642871811.jpg', '<p>Thomas misquoted the brilliant American psychologist William James as saying that the average person specifically &quot;develops only&nbsp;<strong>10 percent</strong>&nbsp;of his latent mental ability.&quot; In fact James had referred more vaguely to our &quot;latent mental energy.&quot;&nbsp;</p>', '1642872870_pdf.pdf', '<p>opens tomorrow in theaters countrywide. It&#39;s based on the immortal myth that we use only 10 percent of our brains. Johansson&#39;s character is implanted with drugs that allow her to access 100 percent of her brain capacity. She subsequently gains the ability to learn Chinese in an instant, beat up bad guys, and throw cars with her mind (among other new talents). Morgan Freeman plays neuroscientist Professor Norman,&nbsp;</p>', '2022-01-22 11:16:51', '2022-01-22 11:34:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkashes`
--
ALTER TABLE `bkashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overviews`
--
ALTER TABLE `overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuitions`
--
ALTER TABLE `tuitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `v_c_s`
--
ALTER TABLE `v_c_s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bkashes`
--
ALTER TABLE `bkashes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `overviews`
--
ALTER TABLE `overviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tuitions`
--
ALTER TABLE `tuitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `v_c_s`
--
ALTER TABLE `v_c_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
