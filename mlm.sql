-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 05:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `account` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`id`, `user_id`, `account`, `ifsc_code`, `created_at`, `updated_at`) VALUES
(1, 49, '789456123', '11111', '2019-08-07 11:28:14', '2019-08-07 11:28:14'),
(2, 51, '789456123', '78954', '2019-08-07 11:36:24', '2019-08-07 11:36:24'),
(3, 52, '789456123', '789456123', '2019-08-07 11:59:15', '2019-08-07 11:59:15'),
(4, 53, '123456789', '789', '2019-08-07 12:05:38', '2019-08-07 12:05:38'),
(5, 54, '123456789', '789', '2019-08-07 12:07:26', '2019-08-07 12:07:26'),
(6, 56, '123456789', '789', '2019-08-07 12:09:05', '2019-08-07 12:09:05'),
(7, 57, '789456123', '696', '2019-08-07 12:11:19', '2019-08-07 12:11:19'),
(8, 58, '789456123', '7894561', '2019-08-08 06:34:03', '2019-08-08 06:34:03'),
(9, 59, '789456123', '7894561', '2019-08-08 06:37:11', '2019-08-08 06:37:11'),
(10, 1, '789456123012', '78945612', NULL, NULL),
(11, 40, '123456789012', '78955', NULL, NULL),
(12, 46, '789456123012', '789456', NULL, NULL),
(13, 47, '789456123012', '1326', NULL, NULL),
(14, 45, '789456123012', '123456', NULL, NULL),
(15, 44, '789456123012', '789', NULL, NULL),
(16, 43, '789456123012', '789', NULL, NULL),
(17, 42, '789456123012', '123456', NULL, NULL),
(18, 41, '789456123012', '789456', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `addressbooks`
--

CREATE TABLE `addressbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addressbooks`
--

INSERT INTO `addressbooks` (`id`, `user_id`, `street`, `city`, `state_id`, `country_id`, `updated_at`, `created_at`) VALUES
(27, 40, '662/7 Mehar chand Road Gurdaspur', 'Gurdaspur', 27, 100, '2019-08-02', '2019-08-02'),
(28, 41, '662/7 Mehar chand Road Gurdaspur', '14', 27, 100, '2019-08-02', '2019-08-02'),
(29, 42, '662/7 Mehar chand Road Gurdaspur', '3', 27, 100, '2019-08-02', '2019-08-02'),
(30, 43, '662/7 Mehar chand Road Gurdaspur', '9', 27, 100, '2019-08-02', '2019-08-02'),
(31, 44, '662/7 Mehar chand Road Gurdaspur', '15', 27, 100, '2019-08-02', '2019-08-02'),
(32, 45, '662/7 Mehar chand Road Gurdaspur', '10', 27, 100, '2019-08-02', '2019-08-02'),
(33, 46, '662/7 Mehar chand Road Gurdaspur', '66', 27, 100, '2019-08-06', '2019-08-06'),
(34, 47, '662/7 Mehar chand Road Gurdaspur', '3', 27, 100, '2019-08-07', '2019-08-07'),
(35, 48, '662/7 Mehar chand Road Gurdaspur', '2', 27, 4, '2019-08-07', '2019-08-07'),
(36, 49, '662/7 Mehar chand Road Gurdaspur', '2', 27, 4, '2019-08-07', '2019-08-07'),
(37, 51, '662/7 Mehar chand Road Gurdaspur', 'Gurdaspur', 27, 100, '2019-08-07', '2019-08-07'),
(38, 52, '662/7 Mehar chand Road Gurdaspur', 'Gurdaspur', 27, 100, '2019-08-07', '2019-08-07'),
(39, 53, '662/7 Mehar chand Road Gurdaspur', 'Gurdaspur', 27, 100, '2019-08-07', '2019-08-07'),
(40, 54, '662/7 Mehar chand Road Gurdaspur', 'Gurdaspur', 27, 100, '2019-08-07', '2019-08-07'),
(41, 56, '662/7 Mehar chand Road Gurdaspur', 'Gurdaspur', 27, 100, '2019-08-07', '2019-08-07'),
(42, 57, '662/7 Mehar chand Road Gurdaspur', 'Gurdaspur', 27, 100, '2019-08-07', '2019-08-07'),
(43, 58, '662/7 Mehar chand Road Gurdaspur', 'Gurdaspur', 27, 100, '2019-08-08', '2019-08-08'),
(44, 59, '662/7 Mehar chand Road Gurdaspur', 'Gurdaspur', 27, 100, '2019-08-08', '2019-08-08'),
(45, 1, '662/7 Mehar Chand Road', 'Gurdaspur', 2, 2, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `image_paths`
--

CREATE TABLE `image_paths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_paths`
--

INSERT INTO `image_paths` (`id`, `user_id`, `path`, `created_at`, `updated_at`) VALUES
(7, 57, '1565199679.png', '2019-08-07 12:11:19', '2019-08-07 12:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_30_111700_addressBook', 1),
(4, '2019_07_30_112032_add_fields_to_user_table', 1),
(5, '2019_07_30_112205_phone_book', 1),
(6, '2019_07_30_112322_docs_path', 1),
(7, '2019_07_30_112517_payment', 1),
(8, '2019_08_01_162035_add_is_verified_to_users_table', 2),
(9, '2019_08_01_182817_add_by_to_users_table', 3),
(10, '2019_08_06_132039_add_fields_to_users_table', 4),
(11, '2019_08_07_163640_create_account_details_table', 5),
(12, '2019_08_07_164237_create_image_paths_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction` int(10) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_number` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phonebooks`
--

CREATE TABLE `phonebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phonebooks`
--

INSERT INTO `phonebooks` (`id`, `user_id`, `ph`, `created_at`, `updated_at`) VALUES
(19, 1, '9417464646', '0000-00-00', '2019-08-08'),
(25, 40, '7340910031', '2019-08-02', '2019-08-08'),
(26, 41, '7340910031', '2019-08-02', '2019-08-02'),
(27, 42, '7340910031', '2019-08-02', '2019-08-02'),
(28, 43, '7340910031', '2019-08-02', '2019-08-02'),
(29, 44, '7340910031', '2019-08-02', '2019-08-02'),
(30, 45, '7340910031', '2019-08-02', '2019-08-02'),
(31, 46, '7340910031', '2019-08-06', '2019-08-06'),
(32, 47, '7340910031', '2019-08-07', '2019-08-07'),
(33, 48, '7340910031', '2019-08-07', '2019-08-07'),
(34, 49, '7340910031', '2019-08-07', '2019-08-07'),
(35, 51, '7340910031', '2019-08-07', '2019-08-07'),
(36, 52, '7340910031', '2019-08-07', '2019-08-07'),
(37, 53, '7340910031', '2019-08-07', '2019-08-07'),
(38, 54, '7340910031', '2019-08-07', '2019-08-07'),
(39, 56, '7340910031', '2019-08-07', '2019-08-07'),
(40, 57, '7340910031', '2019-08-07', '2019-08-07'),
(41, 58, '7340910031', '2019-08-08', '2019-08-08'),
(42, 59, '7340910031', '2019-08-08', '2019-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS'),
(2, 'ANDHRA PRADESH'),
(3, 'ARUNACHAL PRADESH'),
(4, 'ASSAM'),
(5, 'BIHAR'),
(6, 'CHATTISGARH'),
(7, 'CHANDIGARH'),
(8, 'DAMAN AND DIU'),
(9, 'DELHI'),
(10, 'DADRA AND NAGAR HAVELI'),
(11, 'GOA'),
(12, 'GUJARAT'),
(13, 'HIMACHAL PRADESH'),
(14, 'HARYANA'),
(15, 'JAMMU AND KASHMIR'),
(16, 'JHARKHAND'),
(17, 'KERALA'),
(18, 'KARNATAKA'),
(19, 'LAKSHADWEEP'),
(20, 'MEGHALAYA'),
(21, 'MAHARASHTRA'),
(22, 'MANIPUR'),
(23, 'MADHYA PRADESH'),
(24, 'MIZORAM'),
(25, 'NAGALAND'),
(26, 'ORISSA'),
(27, 'PUNJAB'),
(28, 'PONDICHERRY'),
(29, 'RAJASTHAN'),
(30, 'SIKKIM'),
(31, 'TAMIL NADU'),
(32, 'TRIPURA'),
(33, 'UTTARAKHAND'),
(34, 'UTTAR PRADESH'),
(35, 'WEST BENGAL'),
(36, 'TELANGANA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vid` int(10) UNSIGNED DEFAULT NULL,
  `pin` int(10) UNSIGNED DEFAULT NULL,
  `points` int(10) UNSIGNED DEFAULT NULL,
  `side` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invested` int(10) UNSIGNED DEFAULT NULL,
  `role` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pan_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addhar_number` text COLLATE utf8mb4_unicode_ci,
  `is_verified` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_by` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `profile_path` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `vid`, `pin`, `points`, `side`, `invested`, `role`, `remember_token`, `created_at`, `updated_at`, `pan_number`, `addhar_number`, `is_verified`, `created_by`, `gender`, `dob`, `profile_path`) VALUES
(40, 'Hardil SIngh', 'hardilsingh87@gmail.com', NULL, '$2y$10$tOvkh68OkKQ1JCE2e8vtl.rSJ9Of0CFFjSs50ZrsfsdJZjwR1p8GW', 10002, 2100, 0, '0', 1100, 1, NULL, '2019-08-02 08:06:41', '2019-08-08 09:59:28', '789456', '789456123012', 1, '10001', 'male', '2019-07-13', NULL),
(41, 'Udit sharma', 'udit@gmail.com', NULL, '$2y$10$rmoCxCxG7Cagtnn7ZVAmW.pU/kQB/5IErQNKXIEjxj.oFgNMzdDtK', 10003, 5285, 0, '2', 1234, 0, NULL, '2019-08-02 08:08:28', '2019-08-02 08:08:28', '789', '789456123012', 1, '10001', 'male', NULL, ''),
(42, 'Aditi Sharma', 'aditi@gmail.com', NULL, '$2y$10$SPSr3qk.KYCvmLrQmiJ97Opg08Ts9gVA719leFTeO3kMQf9zTWctu', 10004, 2085, 0, '1', 78966, 0, NULL, '2019-08-02 08:19:43', '2019-08-08 09:08:10', '789456123', '789012456123', 1, '10002', 'male', NULL, ''),
(43, 'Riya', 'riya@gmail.com', NULL, '$2y$10$Cb/MpDHb91i7F92n0CyksuB9L7GZ/3WmKKc17gdVCqIFD5aVpqnye', 10005, 6450, 0, '1', 7888, 0, NULL, '2019-08-02 08:29:44', '2019-08-02 08:29:44', '789456123', '789456123012', 0, '10002', NULL, NULL, ''),
(44, 'Jasnoor Sokhi', 'sokhi@gmail.com', NULL, '$2y$10$9ls6xucmc2SyVePA9uxSB.ZGtiU0QxvMfnPL1um/Sf6M.BOVRawpK', 10006, 7972, 0, '1', 1100, 0, NULL, '2019-08-02 11:54:03', '2019-08-02 11:54:03', '789456', '789456123012', 0, '10002', NULL, NULL, ''),
(45, 'Manav', 'manav@gmail.com', NULL, '$2y$10$x2V26.2FUVygEKsRfGgm3Oz3S71Rx0621TkpzUA8RJX40hUdu.NQG', 10007, 4400, 0, '1', 1100, 0, NULL, '2019-08-02 11:57:10', '2019-08-02 11:57:10', '789456', '789456123012', 0, '10002', NULL, NULL, ''),
(46, 'Shubkarmanjeet Singh Sodhi', 'sodhi@gmail.com', NULL, '$2y$10$5bk6kjDnTCc7zpjUkceIE.OASPVZvRuhg/rngL0UmiUPW3UvXq8z6', 10008, 9152, 0, '1', 1100, 0, NULL, '2019-08-06 09:51:05', '2019-08-06 09:51:05', '789456', '789456123012', 0, '10002', 'male', NULL, ''),
(47, 'Sanya Singh', 'sanya@gmail.com', NULL, '$2y$10$ZpaXOOwAXq4xBHZkLY0c8eJvcOoiQbodIYHVF7Xf8bOdIulb2l25O', 10009, 9552, 0, '2', 1100, 0, NULL, '2019-08-07 06:24:01', '2019-08-08 08:48:48', '789456', '789456123012', 1, '10003', 'male', NULL, ''),
(49, 'Hardil Singh', 'singh99@gmail.com', NULL, '$2y$10$90gY.HMDyNWO2tub4QBnTuSYM0wR4WCtLCNNgmZddRSjAEsE2NGsy', 10010, 4554, 0, '1', 996, 0, NULL, '2019-08-07 11:28:14', '2019-08-08 08:40:53', '789456', '789456123012', 1, '10001', 'male', '2019-05-15', ''),
(51, 'singh saab', 'singh76@gmail.com', NULL, '$2y$10$dVuqzK9trQLD3S3nbODo2ugI4x0LJBmopVt7RTWvxZ.xlDp3JQUEO', 10011, 2551, 0, '1', 1099, 0, NULL, '2019-08-07 11:36:24', '2019-08-07 11:36:24', '789456', '789456123012', 0, '10001', 'male', NULL, ''),
(52, 'Hardil Singh', 'hardil87@gmail.com', NULL, '$2y$10$nlkPK61CWu95I1e251oFP.qwL.KQLMO.Cw4f8eqftrOMBOBqzAhbW', 10012, 8698, 0, '1', 1095, 0, NULL, '2019-08-07 11:59:15', '2019-08-07 11:59:15', '123456', '789456123012', 0, '10001', 'male', '2013-05-15', ''),
(57, 'Hardil Singh', 'hardil7@gmail.com', NULL, '$2y$10$6GW5tTTwfWkHtZDg7E0HH.suICyPEbuJmVoW4lJ18W7TjDhXxiJLe', 10013, 4457, 0, '1', 789456113, 0, NULL, '2019-08-07 12:11:19', '2019-08-07 12:11:19', '789456123', '789456123012', 1, '10001', 'male', NULL, ''),
(59, 'Sanya Singh', 'sanyasingh87@gmail.com', NULL, '$2y$10$hC9rRvehvKkvvCF3zIhvLuaEPrwqPMpyHg/JKRL8tSgYGMMInKy9i', 10014, 9439, 0, '1', 997, 0, NULL, '2019-08-08 06:37:11', '2019-08-08 06:37:11', '1230123', '789456123012', 1, '10001', 'female', '2019-05-06', '1565266031.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addressbooks`
--
ALTER TABLE `addressbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_paths`
--
ALTER TABLE `image_paths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phonebooks`
--
ALTER TABLE `phonebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `addressbooks`
--
ALTER TABLE `addressbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `image_paths`
--
ALTER TABLE `image_paths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phonebooks`
--
ALTER TABLE `phonebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
