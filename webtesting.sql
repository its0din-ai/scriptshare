-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 03:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtesting`
--

-- --------------------------------------------------------

--
-- Table structure for table `scriptdb`
--

CREATE TABLE `scriptdb` (
  `id` int(5) NOT NULL,
  `uploader` varchar(100) NOT NULL,
  `judul_script` varchar(200) NOT NULL DEFAULT 'Tidak ada Judul',
  `slug_script` varchar(10) NOT NULL,
  `konten_script` text NOT NULL,
  `visibility` set('Private','Public') NOT NULL DEFAULT 'Private',
  `tanggal` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scriptdb`
--

INSERT INTO `scriptdb` (`id`, `uploader`, `judul_script`, `slug_script`, `konten_script`, `visibility`, `tanggal`) VALUES
(1337, '', 'Tidak ada Judul', 'gxy2c4b9pq', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales, tortor eget finibus porta, arcu nisi aliquam ipsum, nec consectetur est nisl sit amet arcu. Fusce tristique sapien in felis lobortis, non dictum urna faucibus. Morbi viverra nisi id mi varius, et feugiat nunc malesuada. Proin ligula ante, fermentum vel justo sed, lobortis gravida justo. Mauris laoreet turpis vel ante dictum, a fringilla justo dictum. Etiam mattis, mauris non rutrum laoreet, ante eros elementum elit, ut molestie tortor ante nec lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam neque augue, lobortis at cursus eu, ullamcorper a metus.\r\n\r\nSed efficitur feugiat eros malesuada fermentum. Vivamus bibendum nec sem ac pretium. Nunc ullamcorper dolor a volutpat mollis. Pellentesque sed urna lorem. Vestibulum felis dui, condimentum in arcu sit amet, euismod lobortis tortor. Suspendisse potenti. Sed sodales, orci at pulvinar malesuada, felis mauris accumsan odio, ac porttitor mauris sapien nec ante. Suspendisse in orci maximus, commodo est nec, eleifend felis. Mauris non euismod elit.\r\n\r\nFusce mauris turpis, vestibulum a tincidunt vitae, venenatis quis ante. Etiam nec magna aliquet, aliquam metus vel, egestas orci. Fusce sed venenatis eros, sed ullamcorper lorem. Vivamus orci nisi, rhoncus eget malesuada at, tristique convallis leo. Integer pellentesque non sapien tincidunt pellentesque. Duis ac commodo justo. In hac habitasse platea dictumst. Phasellus ante enim, elementum sit amet tortor molestie, tristique porttitor nisi. Sed fermentum turpis eget neque congue, quis efficitur leo varius. Ut eu odio tristique, aliquet tellus eu, tristique ante. Mauris libero nunc, cursus et faucibus sit amet, luctus a nunc. Etiam suscipit lorem vehicula, efficitur enim sit amet, egestas nisl. Vestibulum at tempor velit. Pellentesque fermentum faucibus purus et euismod.\r\n\r\nSed fringilla eleifend malesuada. Etiam rhoncus vehicula dolor, et laoreet quam pellentesque vitae. Ut imperdiet urna eget lectus porta, sit amet lacinia ipsum feugiat. Cras facilisis magna imperdiet ipsum vehicula dignissim sit amet eu sem. Maecenas luctus pretium arcu ut porta. Etiam sem ipsum, ornare sed pellentesque quis, venenatis lobortis lacus. Quisque eget sem scelerisque, maximus velit dictum, auctor elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris rhoncus ante et quam euismod ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas tristique imperdiet turpis. Pellentesque ut tortor sed erat dapibus malesuada eu nec sem.\r\n\r\nDonec dui arcu, placerat sed mauris non, laoreet rutrum sapien. Mauris mollis justo id turpis accumsan mollis. Maecenas vitae augue id nibh condimentum aliquam. Nunc vel libero tincidunt, blandit nibh ut, convallis velit. Donec at tincidunt ante. Cras commodo, odio vel tristique ultricies, neque ipsum malesuada elit, vel porttitor metus lacus sit amet ipsum. Vivamus quis faucibus ligula. Ut viverra urna non sapien pharetra, vitae gravida ex varius. Cras interdum elit ipsum, id hendrerit tortor finibus vitae. Mauris volutpat imperdiet tincidunt.\r\n\r\nNulla iaculis dui et iaculis suscipit. Sed ornare tortor sed consectetur pulvinar. Mauris nisi felis, vehicula ut odio sit amet, hendrerit volutpat neque. In imperdiet dignissim sem a varius. Maecenas vitae enim ac mauris varius varius. Nulla rhoncus ante enim, sed mattis arcu ultricies nec. Nullam facilisis tellus non elit vehicula, vitae laoreet ipsum tincidunt. Etiam laoreet libero vitae elit mattis porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut ornare neque ac massa hendrerit, vel sodales erat imperdiet. Cras ante tellus, venenatis a posuere eget, faucibus et justo. Praesent ultricies lacus purus, quis condimentum dui fermentum a. Nulla id enim condimentum, faucibus lacus eu, placerat odio.\r\n\r\nPellentesque sed urna et diam interdum congue. Cras lacinia lorem eu dignissim maximus. Sed nec rhoncus nunc, fringilla dapibus sapien. Pellentesque metus purus, sollicitudin blandit justo nec, sagittis congue nisi. Vestibulum gravida libero eu metus tincidunt hendrerit. Nullam in convallis quam. Pellentesque ultrices varius elit, in rhoncus eros tempus sit amet. Duis eros nisi, porttitor sit amet lectus sed, iaculis aliquam leo. Phasellus cursus lectus velit, sit amet tincidunt risus tristique sit amet. Morbi et placerat leo. Duis bibendum dictum diam, id tincidunt elit porttitor sed. Vivamus mattis nunc ut metus mollis, id semper massa aliquam. In id erat enim. Duis et tempus libero. Duis quis libero quis nulla malesuada ornare nec id dolor. Curabitur ultrices metus ut posuere porta.\r\n\r\nDonec lobortis eget lectus vitae consectetur. Donec tristique, ex et cursus dapibus, eros risus vestibulum neque, ut dignissim neque quam et ipsum. Curabitur tempus imperdiet quam, et efficitur leo. Mauris auctor massa in erat vulputate, quis malesuada felis sollicitudin. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In ac arcu pretium turpis mollis luctus. Aliquam erat volutpat.\r\n\r\nMaecenas a libero eu metus elementum luctus. Integer nec viverra ligula. Vivamus libero metus, volutpat eu ipsum et, maximus rutrum libero. Donec porta dolor enim, in hendrerit ex imperdiet eget. Etiam pellentesque non felis sed mattis. Mauris mattis tortor sed lectus faucibus, quis maximus neque molestie. Praesent sed quam sed erat bibendum pharetra in ut nisi. Fusce purus purus, varius et enim non, rhoncus suscipit erat. Maecenas venenatis non mi quis tincidunt. Aliquam consequat ullamcorper aliquet. In ipsum nisi, placerat eget magna a, facilisis egestas nulla. Vivamus a lorem quis dui viverra eleifend. Fusce magna tellus, fringilla finibus porta nec, pellentesque vel eros.\r\n\r\nVestibulum lacinia convallis arcu, id pellentesque ligula posuere vel. Aenean euismod efficitur tortor ut eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris fermentum aliquam orci non tristique. Mauris metus dolor, auctor maximus nulla ac, porta blandit ante. Etiam ultricies elit suscipit ipsum tempor, non ultricies justo consectetur. Nam gravida libero eu facilisis congue. Donec id rhoncus urna. Ut lorem sem, interdum a ullamcorper vitae, posuere at nisi.\r\n\r\nNunc non ex condimentum, faucibus elit non, molestie tortor. Duis fringilla nunc id venenatis congue. Nulla venenatis suscipit lectus, vitae sollicitudin risus vehicula sit amet. Cras auctor leo vel libero lacinia tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel urna tincidunt, facilisis mi in, lobortis erat. Nunc ac hendrerit erat. Mauris eleifend lacus massa, sed pretium nisi facilisis at.\r\n\r\nMorbi varius bibendum nisi, eu tempus metus elementum non. Sed porta tortor nec tortor volutpat dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ac diam ut nunc laoreet ornare elementum vitae nibh. In hac habitasse platea dictumst. Vestibulum eleifend facilisis massa et tempus. Donec condimentum eget purus in elementum.\r\n\r\nSed varius dapibus auctor. Proin ac quam purus. In egestas tincidunt erat vitae euismod. Donec vitae augue a massa gravida tristique. Nunc ac rhoncus augue. Aenean mollis tortor a leo lobortis, id dictum eros consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non lectus nisl.\r\n\r\nVestibulum bibendum purus mi, quis blandit mi malesuada id. Sed dolor mauris, convallis ac hendrerit et, efficitur ac libero. Maecenas est ante, ultrices eget urna id, pulvinar pretium velit. Morbi laoreet metus malesuada elementum pellentesque. Mauris auctor consectetur quam, id volutpat est bibendum eu. Mauris quis congue purus. Maecenas maximus maximus tincidunt. Curabitur venenatis fringilla aliquet. Praesent tempus dui nulla, non aliquam ipsum ultrices et. Duis non orci in turpis mollis mollis id quis mi. Pellentesque nibh lectus, egestas ac dui eget, viverra sodales metus. Ut quis quam sagittis, volutpat augue eget, tristique libero. Quisque dictum mattis urna.\r\n\r\nIn eu pharetra turpis, laoreet dapibus ex. Curabitur sed dignissim risus. Integer luctus nulla quis commodo accumsan. Aliquam vehicula auctor gravida. Morbi at ex vehicula, aliquam purus id, facilisis nisi. Ut et lorem felis. Donec feugiat pharetra orci. Vestibulum vulputate mattis fermentum. Proin quis massa sodales, commodo ligula a, finibus ipsum. Suspendisse fermentum rutrum vehicula. Praesent viverra erat diam, eget blandit mauris luctus a. Nulla ornare imperdiet malesuada. Sed porta quis nisl accumsan rutrum. Integer feugiat magna et vulputate porta.\r\n\r\nNam eget molestie tortor, quis sodales ipsum. Aliquam erat volutpat. Fusce tempor porta tellus eget pretium. Donec vel ex libero. Curabitur maximus eros eget nisi tristique dapibus. Morbi ornare ultrices hendrerit. Phasellus id suscipit orci. Nam ac nunc interdum, aliquam urna vel, congue sem. Suspendisse dictum, tellus convallis tristique accumsan, augue orci pulvinar ante, ac aliquam est dui ac ipsum. Praesent ac vestibulum enim. Nulla accumsan pharetra lacus a commodo.\r\n\r\nInteger non lectus aliquet, fringilla nisi eu, porttitor nunc. Sed eu aliquet nulla. Vestibulum a quam cursus enim volutpat pretium in non odio. Sed gravida tincidunt neque a blandit. In lobortis nulla mauris, nec ultrices diam tincidunt a. Phasellus scelerisque dignissim ipsum eget sagittis. Cras dolor nunc, mattis nec dolor nec, aliquet vestibulum mauris. Donec tincidunt elit at elit lobortis, id sagittis mi faucibus. Nam lobortis ligula nec ex cursus, pellentesque lobortis augue convallis. In consequat diam justo, sed sodales dolor dapibus vel.\r\n\r\nDonec odio ante, interdum quis nisl sed, pellentesque molestie mi. Duis porta libero metus, ac maximus urna iaculis eu. Integer sit amet feugiat massa. Nam porta mattis nunc, ut convallis mi varius ut. Proin eget sem tempus, tempor sapien nec, commodo metus. Proin blandit lorem nec lacus dignissim, eget ornare sem posuere. Integer dapibus vehicula libero cursus faucibus. Suspendisse potenti.\r\n\r\nAliquam in fringilla sapien, sed vehicula est. Mauris quis tincidunt purus. Fusce euismod eu diam eget congue. Maecenas ut pretium tortor. Duis orci neque, dapibus quis lacus quis, tincidunt maximus risus. Mauris ante dui, scelerisque vel est id, lacinia bibendum metus. Donec bibendum enim eu tellus molestie venenatis. Sed sodales felis a felis commodo, eget venenatis urna vehicula. Fusce dictum lorem tempus tortor iaculis sagittis et ut tortor. Fusce non iaculis ex, quis pharetra est.\r\n\r\nPellentesque quis hendrerit lectus. Nam in mattis magna, a molestie ante. Suspendisse arcu orci, rhoncus id venenatis sit amet, imperdiet at ipsum. Nullam eget laoreet ipsum. In hac habitasse platea dictumst. Etiam molestie ligula eu neque tincidunt interdum. Fusce sollicitudin cursus vestibulum. Fusce varius diam sit amet faucibus luctus. Morbi sed nisi mattis, condimentum velit ut, pulvinar nulla. Nulla nisi turpis, rutrum vel felis nec, ultricies iaculis mauris. Curabitur finibus fermentum sem, vel ullamcorper neque maximus ac. Aliquam risus arcu, accumsan in tellus et, luctus faucibus purus. Mauris vitae augue felis. Nunc aliquet augue elit, consectetur rutrum nisl placerat et.\r\n\r\nVivamus finibus leo non ex porttitor, non aliquet magna fringilla. Donec rhoncus sit amet odio sed placerat. Etiam vitae eleifend neque. Donec vel scelerisque est. Pellentesque pharetra est nec tellus faucibus gravida. Nam at efficitur nulla. Sed cursus purus vitae purus suscipit elementum. Morbi pharetra turpis arcu, at cursus mi aliquam a. Duis nec feugiat dui.\r\n\r\nNullam at tempor lacus. Suspendisse dignissim urna id pulvinar eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse potenti. Cras vulputate mauris vel nibh ultricies mattis vitae et arcu. Nunc nibh mi, vulputate at vestibulum at, molestie nec eros. Quisque pellentesque imperdiet quam, ut tincidunt leo ornare ut. Nunc sit amet leo semper, pellentesque ipsum id, scelerisque nulla. Phasellus ut aliquam erat. Nullam urna nunc, ornare euismod eros id, elementum ultricies augue. Nam a finibus mauris, a aliquam massa. Aliquam pellentesque nibh laoreet ipsum elementum, sit amet lacinia justo fermentum. Aliquam vel feugiat ex. Donec libero metus, ultrices ac leo sed, luctus dictum ante. Aliquam cursus risus et nisl molestie vulputate. Aliquam consectetur ullamcorper tellus, non tincidunt orci volutpat in.\r\n\r\nMaecenas aliquet nisi quis augue venenatis, ac fringilla lacus sodales. Aenean hendrerit, dolor ut convallis hendrerit, enim diam consequat felis, sit amet sagittis orci velit quis nunc. Nulla mollis nisi sapien, id mattis turpis laoreet eget. Morbi fermentum lectus ut tincidunt vulputate. Nunc id pulvinar sem. Praesent aliquet mi eget felis sagittis elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam dignissim non nulla id pretium.\r\n\r\nCras egestas venenatis diam, vehicula aliquet lacus ornare sit amet. Mauris a leo et risus cursus ullamcorper id vel mi. Vivamus placerat velit vitae quam varius semper. Etiam urna lorem, fringilla ac tempus sed, gravida sit amet lectus. Nunc et euismod augue, at tempus mi. Donec vestibulum lectus nec ligula placerat, non pellentesque nunc congue. Duis venenatis, leo non sodales maximus, lacus risus gravida lorem, eu dictum purus elit ut dui.\r\n\r\nNullam nec pharetra leo. Donec neque neque, mollis in ex et, aliquam mollis velit. Nunc lobortis ac leo sit amet vehicula. Phasellus consectetur, elit ut interdum volutpat, tellus metus imperdiet sem, at laoreet nisl sem nec felis. Duis varius porttitor sagittis. Pellentesque semper varius vehicula. Mauris vitae nisi sit amet elit accumsan convallis. Phasellus efficitur, sapien porta vulputate lacinia, nibh eros facilisis magna, ut pellentesque enim nunc vitae ante. Pellentesque venenatis, elit eget accumsan ullamcorper, nulla ante tristique enim, pellentesque volutpat est nisi consectetur lectus. Quisque fermentum nibh et lorem tincidunt, laoreet porttitor mauris molestie. Vestibulum aliquam placerat lectus, ut sagittis lectus laoreet id. In lectus mi, tempus eu nisl id, cursus pulvinar nibh. Morbi semper dignissim lorem, non lacinia eros accumsan ac. Sed pretium placerat pretium. Nunc consectetur nunc felis, ac lacinia augue placerat a. Suspendisse ullamcorper diam sollicitudin iaculis varius.\r\n\r\nVestibulum sollicitudin tortor et purus euismod, ultrices vestibulum lacus mollis. Nullam malesuada est eget nunc feugiat vulputate. Nam a molestie justo, a placerat mi. Vivamus sit amet aliquam arcu. Phasellus nec auctor augue, in dapibus leo. Fusce ex tellus, malesuada ut sapien pretium, pulvinar rutrum elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus eu facilisis massa. Nunc faucibus ultrices diam, eu pellentesque augue feugiat ac. Suspendisse dictum placerat tempus. Ut et diam at nibh rutrum iaculis. Mauris pulvinar libero at auctor posuere. Phasellus quis justo a ex gravida finibus.\r\n\r\nNunc sit amet rutrum metus, et fringilla augue. Aliquam fermentum sit amet est ac pulvinar. In urna lacus, porta sed neque at, consectetur bibendum erat. Cras mattis eleifend libero quis congue. Donec eu nulla ac elit viverra ullamcorper. Cras gravida, orci sed posuere congue, arcu lectus pharetra ex, et porttitor quam odio at nunc. Morbi ultrices mauris at facilisis maximus. Suspendisse potenti. Maecenas elementum neque id vestibulum sagittis. Nam imperdiet tempor tellus at viverra.\r\n\r\nSed efficitur elit eu tortor ornare hendrerit. Maecenas at consectetur nibh, id pretium lorem. Sed sapien sapien, aliquet eget venenatis non, fermentum non dolor. Nam nec sapien quis urna convallis pretium. Duis ultricies, dui a feugiat suscipit, massa libero sagittis sem, in dignissim sem nisl eu orci. Nunc eu imperdiet metus. Pellentesque interdum augue nisi, eu porttitor quam feugiat mattis. Proin sollicitudin interdum mi non sodales. Vestibulum tellus quam, lobortis vitae ipsum sit amet, mattis cursus lorem. Aenean et dui ante. Nam eleifend luctus nisl ut ullamcorper. Phasellus nec ullamcorper felis, ut consectetur dolor. Phasellus eget mi dolor. Vestibulum mollis eros quis posuere imperdiet.\r\n\r\nPellentesque ornare tortor et lorem molestie, vel consectetur ligula vulputate. Mauris a elit vitae elit pellentesque ultrices. Vestibulum consequat, sem vitae viverra tincidunt, lorem metus commodo diam, quis molestie nibh eros consectetur lacus. Duis id ornare orci. Suspendisse interdum neque quis molestie porttitor. Sed at pulvinar mi. Donec congue egestas felis nec dignissim. Proin eget faucibus dui. Quisque pellentesque id sapien sit amet volutpat. Quisque finibus eget quam eu hendrerit. Proin sed consectetur elit. Nullam vel diam non tortor rutrum molestie.\r\n\r\nPhasellus malesuada tellus quam, eu fermentum elit tristique eget. Morbi pellentesque egestas lorem. Aliquam sit amet fermentum mauris. Duis rhoncus porta tortor sit amet pellentesque. Vivamus vulputate auctor massa, a sollicitudin augue venenatis nec. Donec viverra ex scelerisque porta lacinia. Morbi nisi nibh, blandit eu sapien sit amet, consectetur suscipit sem. Fusce sollicitudin quam metus. Vestibulum at nulla nec diam eleifend condimentum. Duis ac gravida nulla.\r\n\r\nDonec fringilla, odio vel euismod varius, felis tellus aliquet diam, et lobortis lacus magna a risus. Mauris id pharetra felis. Morbi facilisis, felis nec varius congue, ligula elit commodo mauris, semper venenatis justo nibh quis magna. Phasellus auctor placerat faucibus. Vestibulum dictum porta enim, sit amet volutpat felis interdum sed. Morbi mollis lectus vel sapien hendrerit, vitae fermentum ante facilisis. Donec efficitur sem eu finibus finibus. Aenean tincidunt sagittis tristique. Ut venenatis nisl a dapibus consequat. Morbi ornare orci tortor, in sollicitudin neque tincidunt cursus. Aenean id elementum augue. Aliquam erat volutpat. Nullam egestas dictum mattis. In turpis turpis, iaculis vel nisl non, fermentum mollis orci. Nulla vehicula mi nec maximus aliquam. Sed auctor nisl ut ultrices tempus.\r\n\r\nDuis consequat nisi sapien, sed condimentum orci blandit in. Pellentesque orci lorem, convallis vel ornare id, tempus nec ipsum. Duis eget porttitor sapien. Mauris interdum ante sollicitudin commodo tempus. Nam aliquet lectus vitae tellus faucibus, feugiat imperdiet urna commodo. Donec accumsan convallis eros sed scelerisque. Proin vulputate posuere fermentum. Nunc augue eros, aliquet et sagittis et, dignissim eu leo. Praesent ut congue magna. Suspendisse a tempor nibh.\r\n\r\nMorbi ultrices sit amet turpis eu lobortis. Etiam viverra, felis et porttitor sollicitudin, elit mi commodo urna, ac interdum sem nulla nec ex. Nam id ante volutpat, egestas leo non, bibendum tellus. Suspendisse urna dui, lobortis a porttitor sed, condimentum nec nulla. Phasellus maximus ullamcorper imperdiet. Donec ac malesuada diam. Praesent vitae neque eros. Duis at porta dui. In dignissim orci dui, ac interdum lorem dictum et. Maecenas nec ligula nulla.\r\n\r\nSed eros libero, tempus bibendum commodo at, auctor nec libero. Aenean nulla leo, fermentum eu est sit amet, fringilla luctus lacus. Praesent ultrices sed turpis sed bibendum. Quisque libero dolor, pulvinar ac quam vitae, ultricies cursus turpis. Nunc luctus ex vel dolor maximus auctor. Fusce maximus, lectus et tempor vehicula, tellus enim luctus dui, vitae molestie ipsum tellus ut elit. Sed eget magna eget nibh tempor posuere sit amet at lorem. Vivamus nunc enim, tincidunt pellentesque ante non, pharetra vestibulum nisi. Nulla scelerisque eros eu egestas mattis. Nullam sit amet sem urna. Suspendisse nec odio quis lectus finibus ultricies. Sed eu convallis felis. Donec vel malesuada leo, sit amet mattis lectus. Praesent in euismod nulla.\r\n\r\nProin pellentesque purus magna, eu tristique arcu congue sit amet. Aenean egestas eros ut mattis porttitor. Donec accumsan mauris sed pellentesque fermentum. Nullam in venenatis nibh. Vivamus ut eros et erat aliquet vestibulum eget a sem. Nam venenatis quam sit amet erat pulvinar bibendum. Fusce elit tortor, venenatis vel augue vitae, tempor cursus ligula. Morbi tincidunt luctus lorem vitae volutpat. Maecenas at massa quis sem tincidunt euismod quis ut ipsum. Donec.', 'Private', '2023-06-26 14:41:33.740992'),
(1345, 'eria_eri', 'Aku mau share cerita nih', 'kHYUc4LdCj', 'Ini ceritanya 🔮', 'Public', '2023-06-26 18:25:17.737780'),
(1346, 'eria_eri', 'ini kode rahaisa', 'uicSYEjTZ9', 'qazxswedcvfr', 'Public', '2023-06-26 18:50:06.958405'),
(1347, 'eria_eri', 'contoh', 'nEqYdewkis', 'isi konten', 'Public', '2023-06-26 18:50:15.765322'),
(1348, 'eria_eri', 'test private text', 'NARmtvOXFn', 'hehe, ini privat bang :)', 'Private', '2023-06-26 19:22:18.932406'),
(1349, 'usr', 'Seeds BTC', 'mobDe6OV0U', 'fetch knife tornado mixed chunk casual wheel wink unit modify harbor bike lab cupboard evoke deal switch guard resist shoot feed rate project orbit', 'Private', '2023-06-27 13:52:18.196972'),
(1350, 'usr', 'Tebak Wallet, kalo ketemu dapet duid 3M', 'RJr0Cl96Xf', 'fetch knife tornado mixed chunk casual wheel wink unit modify harbor bike lab cupboard evoke deal switch guard resist shoot feed rate project orbit', 'Public', '2023-06-27 13:52:48.690924'),
(1351, 'test123', '1', 'BhnTsQ6wqM', 'tes', 'Private', '2023-07-01 20:15:17.539681'),
(1352, 'test123', '2', 'J73kLWuBTi', 'test', 'Private', '2023-07-01 20:15:32.521244'),
(1353, 'test123', '3', 'DhMgkAtBrs', 'tes  publik', 'Public', '2023-07-01 20:17:48.589365');

-- --------------------------------------------------------

--
-- Table structure for table `shorts`
--

CREATE TABLE `shorts` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `href` text NOT NULL,
  `slug_link` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `nama_pengguna` varchar(300) NOT NULL DEFAULT 'Anonimus',
  `profile_path` varchar(200) NOT NULL DEFAULT '/public/img/profile/nopp.png',
  `password` varchar(200) NOT NULL,
  `roles` varchar(5) NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `nama_pengguna`, `profile_path`, `password`, `roles`) VALUES
('clarissa7', 'Clarissa Wijaya', '/public/img/profile/6bdbc0d1f7b303e9ca71659ef4c74e92.png', '$2y$10$mHhfvvwnucB10Jz4finQTOy3Ce3/W24p3TFolU1pDkKdjvqNqluV.', 'users'),
('encrypt0r', 'Bang Encrypt0r', '/public/img/profile/enc.png', '$2y$10$oyIpA3QoYcTZYjdgaBPaqOiarGeDHK67AcDgiWuxRVeghkcoejnre', 'admin'),
('eria', 'Eria Eri', '/public/img/profile/eeac83692f12bb4aba069def4f562075.jpg', '$2y$10$7q9I00m0P0bdgEvFfd5Jje1V.2lR7ivAiZhlYhQLozuPZZgLMX0Ru', 'users'),
('eria_eri', 'Bu Eri', '/public/img/profile/6f30f99e0f3acc5948d852b8310d6bec.jpg', '$2y$10$V9Wu0cZtiUVLE6p555YttOqg/s/dKCQ1FFXKw0Wp7CvvsSQrSFPXW', 'users'),
('test123', 'Mr. Test', '/public/img/profile/nopp.png', '$2y$10$ibnydCFChHcVyfKfVjsZQuZ7z3fI7.VdLZi3F4ggRW5D6yFZdgpZC', 'admin'),
('usr', 'Bang User', '/public/img/profile/nopp.png', '$2y$10$oyIpA3QoYcTZYjdgaBPaqOiarGeDHK67AcDgiWuxRVeghkcoejnre', 'users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scriptdb`
--
ALTER TABLE `scriptdb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_script` (`slug_script`);

--
-- Indexes for table `shorts`
--
ALTER TABLE `shorts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_link` (`slug_link`),
  ADD KEY `user_has_links` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scriptdb`
--
ALTER TABLE `scriptdb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1354;

--
-- AUTO_INCREMENT for table `shorts`
--
ALTER TABLE `shorts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shorts`
--
ALTER TABLE `shorts`
  ADD CONSTRAINT `user_has_links` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
