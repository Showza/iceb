-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Dez-2018 às 20:41
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novoiceb_iceb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) CHARACTER SET utf8 NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8 NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('034juiva1hv212g73klr3ig8pgq2b2ce', '::1', 1545076271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037363235343b),
('08vp6t7asod49ui0hhpgce6e2c0snc1l', '::1', 1545503025, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530323833343b),
('0c0r8ho97d9oersagvg45tmetao2n8tk', '::1', 1545076468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037363336333b6c6f6761646f7c623a313b),
('0jkooul3fqlqk184ujmo01qh77mpfmtl', '::1', 1545079546, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037393534363b6c6f6761646f7c623a313b),
('0omasmv8jfkh5da8g31j7blib8qtvrdd', '::1', 1545144913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134343931333b6c6f6761646f7c623a313b),
('0v3q4h7cu56lvfl71tafijv45rn814qk', '::1', 1545386025, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338353734383b),
('16226k0map7r609cqr5q5ng6aqgcvoqa', '::1', 1545138284, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353133383238343b6c6f6761646f7c623a313b),
('19pmdlo5vkv22eprigciqqo06a2kcnfh', '::1', 1545394767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339343736373b6c6f6761646f7c623a303b),
('1br8bc0skptr8u7ppmtbq6r3e725uslt', '::1', 1545267231, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353236373233313b6c6f6761646f7c623a313b),
('1g1q3c487k56h1030jeipt4g8b4u3mi3', '::1', 1545267263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353236373233313b6c6f6761646f7c623a313b),
('1n7ikcpt7aks41m6qaa4c0ldt24ptmd3', '::1', 1545145613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134353631333b6c6f6761646f7c623a313b),
('1t1lcor75su52eoa5lgnv3n91cd4sd3b', '::1', 1545076198, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037363131333b6c6f6761646f7c623a313b),
('244meesdqsj4fnnfs2b4ldd5ajndqs4r', '::1', 1545502172, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530323137323b),
('315istimkv65ecd874q1n0qmfm147gvl', '::1', 1545394038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339343033383b6c6f6761646f7c623a303b),
('35qpf6cbb1vmvrq1v54aooupgmn2kabr', '::1', 1545390324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339303332343b6c6f6761646f7c623a303b),
('3bltl9dp9njbetmcu8blbif8gpajrgrq', '::1', 1545387634, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338373633343b),
('3d294fqb1g9qllogn83gg4l2pc6ckiit', '::1', 1545158823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353135383832333b6c6f6761646f7c623a313b),
('3jdmjl5dc36g4sib970dpgfqu9coeq1c', '::1', 1545076113, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037363131333b6c6f6761646f7c623a313b),
('3mnv3knekum1g6frju7di1ga2o3f73nt', '::1', 1545389159, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338393135393b),
('3rsnophclolvhf7jcf9f329koluapk10', '::1', 1545391098, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339313039383b6c6f6761646f7c623a303b),
('44s81c4scb0ttbf31ht3taja9887vsr2', '::1', 1545395391, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339353235363b6c6f6761646f7c623a303b),
('4ejrcuqiko6uk7lm88d3ep9470bifpu8', '::1', 1545506450, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530363435303b),
('4ib7se4lthg06944kr64neu0dkra5t5j', '::1', 1545148505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134383530353b6c6f6761646f7c623a313b),
('4nievjqkn3u2tsan9auh4ee9qtdpq5on', '::1', 1545077994, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037373939343b6c6f6761646f7c623a313b),
('5g6pfh9g3b77usqpbfrbni0m6mclund0', '::1', 1545391751, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339313735313b6c6f6761646f7c623a303b),
('5j5199s8l66jg1fgbhc58pjsponccb58', '::1', 1545385347, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338353334373b),
('5ln234p7lib6gh3vs9ub4mh5ua077bp7', '::1', 1545392481, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339323438313b6c6f6761646f7c623a303b),
('68j6bipo3gblhb4h49tphv0akr6je6ep', '::1', 1545147075, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134373037353b6c6f6761646f7c623a313b),
('6eijtpmsjrguplm3i8aikia1d89nh5mf', '::1', 1545141125, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134313132353b6c6f6761646f7c623a313b),
('6v8oic3b2qjrj1p35t91kej136qq0eai', '::1', 1545139502, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353133393530323b6c6f6761646f7c623a313b),
('7668dd097g5k6clj1jke86gqsfmvgghj', '::1', 1545507403, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530373430333b),
('790ks42b5gctmdg8d7fhkug7mq3o4dmv', '::1', 1545137956, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353133373935363b6c6f6761646f7c623a313b),
('7hg4hah91jmrersp9kmfa1k72d0onnah', '::1', 1545140816, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134303831363b6c6f6761646f7c623a313b),
('8l956fppnjovsob0act06gl7v28i51ch', '::1', 1545258302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353235383038313b6c6f6761646f7c623a313b),
('9k4kbd5i6ns1frg61qgn577co03hen4o', '::1', 1545140422, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134303432323b6c6f6761646f7c623a313b),
('a317samrm2vim4utbdk9tjpnp9eetqmb', '::1', 1545392076, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339323037363b6c6f6761646f7c623a303b),
('af4t9gfitf8o9rmtkcqh6glcsfr312lv', '::1', 1545383660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338333636303b),
('anhkmm8690l66k79l99ds197vqbvau5u', '::1', 1545139167, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353133393136373b6c6f6761646f7c623a313b),
('blm1c6t9f6oa2sfkifj2a7bk0cn58d5j', '::1', 1545077690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037373639303b6c6f6761646f7c623a313b),
('bmqqruov7e40usfjfjfk1a9lc194i64s', '::1', 1545076324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037363331373b6c6f6761646f7c623a313b),
('brsns3dc4aijcnul4cq7d5u130mcvqj2', '::1', 1545504427, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530343432373b),
('c590j3omu8jjud06p71ad2ngc8qaj1ld', '::1', 1545080231, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037393936313b6c6f6761646f7c623a313b),
('cttn7h6h3mknfmp0bulcg3rkdp796p15', '::1', 1545389558, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338393535383b),
('db8fv45le8vi2ueoe4ovc2gk0hu0v2s9', '::1', 1545395256, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339353235363b6c6f6761646f7c623a303b),
('dk5je74sum3mn1dsioqmmanjrg0p5m9f', '::1', 1545503437, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530333433373b),
('draof9qdghik6bep5lccof5thj0qrioc', '::1', 1545393404, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339333430343b6c6f6761646f7c623a303b),
('duhoug5vq20fnt194ufhjvhg9p99fp14', '::1', 1545155571, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353135353537313b6c6f6761646f7c623a313b),
('ef56d1j9uvg7bcsbapv1uf1vjquei31c', '::1', 1545392799, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339323739393b6c6f6761646f7c623a303b),
('emssmk0ul8dt81lag676jkv5hb9nrjr4', '::1', 1545396455, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339363435353b6c6f6761646f7c623a303b),
('f104unjap5mss0defaougvchsb5p8kq2', '::1', 1545387171, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338373137313b),
('f19oiv406i375migag18uigsc2l89p0b', '::1', 1545385748, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338353734383b),
('fe1q9il8uje4lr18gjm8qtgatoea5j6h', '::1', 1545391400, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339313430303b6c6f6761646f7c623a303b),
('fgk77udk8vlqis60t2rh242sheh90atd', '::1', 1545506764, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530363736343b),
('fkvngbklnnovko0c2bj8081710s05vkm', '::1', 1545390793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339303739333b6c6f6761646f7c623a303b),
('g5p0jhim9pfqhclln7fagp4vldf8ikqg', '::1', 1545507448, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530373430333b),
('gi9vmasggs3h5a8eh0n3th2a4oqkl7bc', '::1', 1545146751, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134363735313b6c6f6761646f7c623a313b),
('gjhlav17s5et95356be36r58cpu1tg16', '::1', 1545157808, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353135373830383b6c6f6761646f7c623a313b),
('h77v5m4i7803k4kc538ta2umdarg6t38', '::1', 1545075404, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037353430343b6c6f6761646f7c623a313b),
('hdg6m80dr95b3dkeoit947lcpmqvcs5t', '::1', 1545396455, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339363435353b6c6f6761646f7c623a303b),
('hjctb5fsabh8tf3u40ddv97lb43h24g1', '::1', 1545504954, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530343935343b6c6f6761646f7c623a303b),
('i87upqndr639161pmi1t121a77kpd3tn', '::1', 1545139821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353133393832313b6c6f6761646f7c623a313b),
('ihevfks5tekcm1kf5ce6h70lmb3ncruq', '::1', 1545078338, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037383333383b6c6f6761646f7c623a313b),
('ingku7i1psbab3pvbpo7j4juedn4r8ts', '::1', 1545394356, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339343335363b6c6f6761646f7c623a303b),
('j7aasbucf8mg3bj97ckqurjj8mip1she', '::1', 1545389874, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338393837343b),
('kbb5mb3junsnbeg5hp2m6dvlth6mmfev', '::1', 1545155270, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353135353237303b6c6f6761646f7c623a313b),
('kbll3926k5tqilc28rhk033fmjd4pda8', '::1', 1545144533, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134343533333b6c6f6761646f7c623a313b),
('kg3iklv96porbh9hi29u23jdqheadf15', '::1', 1545505264, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530353236343b6c6f6761646f7c623a303b),
('kjdt0u8n2lam5cagfq3sq1om7r9bbaok', '::1', 1545076838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037363833383b6c6f6761646f7c623a313b),
('kk1g7qlh23vochmvt0msi5nin7jtqija', '::1', 1545499619, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353439393631393b),
('kngbmk99nrkuaiqm4g1v61fm47l99uj9', '::1', 1545141426, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134313432363b6c6f6761646f7c623a313b),
('l4l969rip2k45515jkd1mpu3mbqs8kmg', '::1', 1545145926, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134353932363b6c6f6761646f7c623a313b),
('lese92dabr33k1se0muahn533jhahpm8', '::1', 1545075710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037353731303b6c6f6761646f7c623a313b),
('lnfi3b014pnof5e4l7n15ug053pr9dt4', '::1', 1545142852, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134323835323b6c6f6761646f7c623a313b),
('mc7gbcl5l9q4cesevl411k82dpd2hiqo', '::1', 1545158847, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353135383832333b6c6f6761646f7c623a313b),
('merl0hcrej7ov2lrv1ulkmscmerqiuu6', '::1', 1545395607, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339353433393b),
('min047er0gafp2qefv0km09p8m83jd0t', '::1', 1545157424, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353135373432343b6c6f6761646f7c623a313b),
('n4b8kst7etfc4061k8drb9534u75jevj', '::1', 1545505574, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530353537343b6c6f6761646f7c623a303b),
('naogik7sifoi84i41966pkq52leegv46', '::1', 1545386853, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338363835333b),
('nh11q6rhp2rvhuipcnub98meuks5pj92', '::1', 1545504122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530343132323b),
('nh2h9t15e8mphsfr2o9gr0ejt2qb335q', '::1', 1545505747, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530353537343b6c6f6761646f7c623a303b),
('nm12fsk0pvbjd9ke9mp9lcd1od4pdel8', '::1', 1545138842, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353133383834323b6c6f6761646f7c623a313b),
('o2bt0k7ki00gtiv4beh4nti9a427gum5', '::1', 1545388798, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338383739383b),
('of38j1fps8bdrjjb4d3kjo99mmb2sqbr', '::1', 1545142073, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134323037333b6c6f6761646f7c623a313b),
('oknrv90a0biuv7ormk7sv5g8vrbbpk9d', '::1', 1545147420, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134373432303b6c6f6761646f7c623a313b),
('p704kbo8shg4jd44vfgsorfgi5dtp91i', '::1', 1545507082, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530373038323b),
('p7p6i6gllv8p7on0o1djs0e5io4eefpr', '::1', 1545142374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134323337343b6c6f6761646f7c623a313b),
('qe51u9dvooks5q2et81vc9jsqv2sj9tc', '::1', 1545146375, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134363337353b6c6f6761646f7c623a313b),
('qold99nbmrg73pgeklftph4r17qo82vc', '::1', 1545078769, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037383736393b6c6f6761646f7c623a313b),
('qvjt2e1l6m552sdc0faiqt6rnn44t8qs', '::1', 1545502834, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530323833343b),
('rvi8n7sd9j8qc38853320f5f5ej1nnpq', '::1', 1545143337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353134333333373b6c6f6761646f7c623a313b),
('sdn606ve9ab91s28rqkh6d1vnflfr1f3', '::1', 1545079961, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037393936313b6c6f6761646f7c623a313b),
('tdj3mamh4u3pffq9q7sfhtalp8eiihhl', '::1', 1545258081, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353235383038313b),
('tpjq7gct30395d5nab076cnjmd9knksn', '::1', 1545386548, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353338363534383b),
('v7qh9uofh17uesheg11gbk26bggbeu9r', '::1', 1545506116, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530363131363b),
('vgkia4cru77ektpv8d68km7556psf6l4', '::1', 1545393707, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353339333730373b6c6f6761646f7c623a303b),
('vokdgmhh4jfpevstde79qm6q8uh4929k', '::1', 1545503742, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353530333734323b),
('vplrhf78aifvgr4u9ho634atcb20ig7n', '::1', 1545077366, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353037373336363b6c6f6761646f7c623a313b);

-- --------------------------------------------------------

--
-- Estrutura da tabela `colegiado`
--

CREATE TABLE `colegiado` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `link_curso` varchar(200) NOT NULL,
  `link_matriz` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `colegiado`
--

INSERT INTO `colegiado` (`id`, `nome`, `sigla`, `link_curso`, `link_matriz`) VALUES
(3, 'Colegiado de Ciência da Computação', 'COCIC', 'https://www.escolha.ufop.br/cursos/ciencia-da-computacao', 'https://zeppelin10.ufop.br/SistemaAcademico/MatrizCurricular?codCurso=COM'),
(5, 'Colegiado do Curso de Ciências Biológicas Bacharelado', 'COCBIB', 'https://www.escolha.ufop.br/cursos/ciencias-biologicas', 'https://zeppelin10.ufop.br/SistemaAcademico/MatrizCurricular?codCurso=CBB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `telefone`) VALUES
(1, 'DECBI', '3559-1672'),
(2, 'Biblioteca do ICEB', '3559-1502'),
(3, 'Colegiados', '3559-1312'),
(4, 'Laboratório Multiusuário', '3559-1743'),
(5, 'Seção de Ensino', '3559-1337'),
(6, 'Portaria do ICEB', '3559-1661'),
(7, 'Administrador de Prédios', '3559-1273'),
(8, 'Biotério', '3559-1673'),
(9, 'DEQUI', '3559-1707'),
(10, 'DEMAT', '3559-1700'),
(11, 'DEFIS', '3559-1667'),
(12, 'DECOM', '3559-1692'),
(13, 'DEEST', '3559-1400'),
(14, 'DEBIO', '3559-1603'),
(15, 'DEEMA', '3559-1293'),
(16, 'Bloco de Salas(1)', '3559-1028'),
(17, 'Bloco de Salas(2)', '3559-1029'),
(19, 'Diretoria', '3559-1660');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `descricao` text CHARACTER SET utf8 NOT NULL,
  `video` text CHARACTER SET utf8 NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL,
  `atuacao` text CHARACTER SET utf8 NOT NULL,
  `modalidade` varchar(100) CHARACTER SET utf8 NOT NULL,
  `duracao` int(11) NOT NULL,
  `vagas` int(11) NOT NULL,
  `turno` varchar(100) CHARACTER SET utf8 NOT NULL,
  `info` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `titulo`, `descricao`, `video`, `link`, `atuacao`, `modalidade`, `duracao`, `vagas`, `turno`, `info`) VALUES
(1, 'Física', 'O curso localizado no Instituto de Ciências Exatas e Biológicas (ICEB) oferece duas ênfases na modalidade de bacharelado: Física Básica e Ciências dos Materiais. Nos dois primeiros anos as disciplinas são comuns às duas áreas de atuação. A partir do quinto período, o aluno opta por se especializar em uma das áreas e, assim, passa a cursar disciplinas específicas de cada ênfase. O profissional de Ciência dos Materiais está apto a atuar tanto na pesquisa e desenvolvimento quanto na produção e utilização de diferentes materiais, tais como: cerâmicas, polímeros, vidros, metais e ligas, materiais nanoestruturados, semicondutores, etc. O curso foi planejado para formar profissionais com sólida base científica e com competência em ciências aplicadas, voltadas para a pesquisa e para o desenvolvimento de novos materiais, análise estrutural e de propriedades, ensaios e aplicações de materiais tradicionais e novos materiais. Assim, a formação em Física/Ciência dos Materiais habilita o graduando a trabalhar nas indústrias, nos centros de pesquisa, em empresas de consultoria ou, ainda, a continuar seus estudos em ciências físicas ou ciências aplicadas. A ênfase em Física Básica forma profissionais voltados às questões de física básica e fenomenologias. Em geral, estes profissionais encaminham-se para a carreira acadêmica de ensino superior e pesquisa. O curso oferece ao aluno uma formação sólida e atualizada, combinando ciências matemáticas e físicas. O programa de curso visa a proporcionar ao estudante a capacidade de abordar problemas físicos diversos aplicando modelos físicos e matemáticos para o seu entendimento e desenvolvimento de aplicações. Assim, o profissional formado em Física Básica pode estudar e interagir em temas de interesse multidisciplinar, atuando juntamente com matemáticos, químicos, biólogos e engenheiros. Além da habilitação de Bacharelado em Física, o curso localizado no ICEB/UFOP passa a oferecer, a partir de 2012, a habilitação em Licenciatura em Física. Esta habilitação visa à formação de profissionais com sólidas bases no entendimento de fenômenos físicos e aplicações de ferramentas matemáticas, voltados para a atuação no ensino de Física e ciências. Nesse caso, além das disciplinas comuns e de formação básica, o licenciando cursa também disciplinas de cunho pedagógico, didático e psico-pedagógico. O exercício da docência tem um vasto campo em instituições de ensino públicas e particulares. Há também a opção de continuação de estudos, voltado à carreira acadêmica de ensino superior e pesquisa. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ITJ_zNWeHXY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRZFIS2018_1.pdf', 'O mercado de trabalho do bacharel em Física é vasto e abrange setores do ensino superior, de centros de pesquisa públicos e privados e indústrias. O profissional pode se especializar em diversas áreas, tais como: física de materiais, propriedades fundamentais da matéria, física teórica e computacional, biofísica, econofísica, física de partículas, física nuclear e ensino de ciências. ', 'Bacharelado', 8, 25, 'Diurno', ''),
(2, 'Ciências Biológicas', 'Com a proposta de formar profissionais capacitados a compreender os fenômenos da natureza, a interferência do homem no meio ambiente e promover o desenvolvimento sustentável e conservação da biodiversidade, o curso oferece duas modalidades de formação: licenciatura e bacharelado. Com duração de oito semestres no bacharelado e nove semestres na licenciatura, ao longo da graduação o aluno é formado para lidar com desenvolvimento tecnológico e científico que envolve toda a área da biologia. A licenciatura tem como objetivo formar um profissional capacitado a trabalhar nos ensinos fundamental, médio e superior. A formação é composta por conhecimentos práticos interdisciplinares de biologia e pedagogia. O bacharelado forma profissionais qualificados a realizar pesquisas nas grandes áreas das Ciências Biológicas como a Parasitologia, Genética, Bioquímica, Ecologia, entre outras. A localização do curso na cidade de Ouro Preto se torna um fator de vantagem, já que as condições geológicas e biogeográficas são favoráveis para o desenvolvimento de pesquisas em Interações Biológicas, Biologia Evolutiva e Ecologia. O Parque do Itacolomy, o Parque Municipal das Andorinhas, a APA das Andorinhas e a Estação Ecológica do Tripuí são exemplos de ambientes amplamente estudados no curso. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JUVD5QYyXzs\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZCBB018_1.pdf', 'Além de seguir carreira na educação nos ensinos fundamental, médio e superior, o biólogo formado na UFOP está apto a formular e elaborar estudos, projetos ou pesquisa científica básica e aplicada nos diversos setores da biologia. Há também a possibilidade de orientar, dirigir, assessorar e prestar consultoria à empresas e fundações de âmbito público e privado relacionadas com biotecnologia, conservação biológica e estudos de impacto ambiental. ', 'Bacharelado', 8, 30, 'Diurno', 'https://docs.google.com/spreadsheets/d/1o8Zv2qmS3oLOemIHLXH17Vlk-lkCHGrm_j0QKle3Hhw/pubhtml'),
(3, 'Ciência da Computação', 'Computadores são empregados em quase todas as atividades humanas: nas comunicações, nas diferentes tarefas de administração de empresas, escolas, hospitais ou órgãos públicos, na produção de textos, músicas ou filmes, no controle da produção industrial, em transações bancárias, no controle de tráfego aéreo, terrestre ou marítimo, no projeto e fabricação de automóveis, aviões, navios, equipamentos médicos, robôs e até naves espaciais, e em inúmeras outras atividades de produção ou de pesquisa. Isso porque um computador é uma máquina versátil, que pode ser programada para realizar tarefas específicas. O objetivo do curso de bacharelado em Ciência da Computação oferecido pela UFOP é formar o profissional capacitado para atuar, com competência, no desenvolvimento de sistemas de computação e informação. Para isso, o curso oferece uma formação abrangente em tecnologias da computação, possibilitando aos alunos atuarem em diferentes atividades da área. O curso aborda os fundamentos básicos da computação e as mais modernas tecnologias nas áreas de linguagens de programação, redes de computadores, bancos de dados, inteligência artificial, computação gráfica e outras temáticas. Em sua infraestrutura, o curso de Ciência da Computação possui modernos laboratórios de programação e uma biblioteca composta por mais de 1200 títulos. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jCOWvyWyUuM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZCOM2018_1.pdf', 'Alunos formados no curso podem atuar em empresas, órgãos públicos, ou instituições de pesquisa das mais diferentes áreas, sejam em empresas que têm no desenvolvimento software a sua atividade fim, ou naquelas que utilizem sistemas de computação para apoio a suas atividades principais. As atividades na área são variadas: especificação, projeto, implantação e testes de software para diferentes aplicações, projeto e gerenciamento de redes de computadores e de bases de dados, pesquisas e inovação tecnológica. O aluno poderá também empreender seu próprio negócio ou dar continuidade a seus estudos em cursos de pós-graduação, ingressando em atividades de ensino e de pesquisa. ', 'Bacharelado', 8, 40, 'Diurno', 'https://docs.google.com/spreadsheets/d/1O3Vycf9bLnNe6cnC23PH4isrKCzP1h5457C81CcymdE/pubhtml'),
(4, 'Estatística', 'Autorizado pelo MEC em dezembro de 2007, desde o início de 2008 o curso de Estatística vem oferecendo 40 vagas anuais no turno da noite. Com oito semestres letivos de duração, o curso tem como meta propiciar uma formação sólida e atual aos alunos por meio de disciplinas que vão desde as áreas de fundamentos até as disciplinas mais profissionalizantes. O curso de Bacharelado em Estatística da UFOP permite ao aluno formado atuar em três grandes perfis específicos. O Estatístico-Pesquisador se ocupará das atividades de pesquisa em estatística em universidades e centros de pesquisa. O Estatístico-Educador forma com a capacidade de disseminação do conhecimento estatístico em diferentes organizações sociais, mas de forma especial nas escolas de ensino médio. Por fim, o Estatístico Aplicado é o profissional capacitado a formular e resolver problemas que envolvem a coleta, sistematização e análise de dados. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pK7CPwV2fzQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZEST22018_1.pdf', 'O curso oferecido pela UFOP apresenta um programa flexível, de forma a qualificar os seus graduados tanto para a pesquisa e o ensino de nível superior como para qualificá-lo para o mercado de trabalho  fora do ambiente acadêmico nas mais variadas áreas de aplicação da Estatística, como indústrias, hospitais, centros de pesquisa médica, empresas de pesquisa de opinião e mercado, bancos e seguradoras, mercados financeiros, instituições públicas e universidades. ', 'Bacharelado', 8, 40, 'Noturno', ''),
(5, 'Matemática', 'Com o objetivo de atender à demanda regional de professores com licenciatura plena em Matemática, a Universidade Federal de Ouro Preto (UFOP) criou, em 1998, o curso de Matemática na modalidade Licenciatura. Atualmente, o curso conta também com habilitação em Bacharelado. O primeiro ano de estudos é comum a ambas as formações e, ao final do segundo semestre, o aluno deve optar por uma delas. O Bacharelado capacita o estudante para a pesquisa científica. Por meio da continuidade de estudos em nível de mestrado e doutorado o aluno também está apto à docência no ensino superior. A Licenciatura forma professores de Matemática para atuarem na educação básica (ensino fundamental, a partir do 6º ano, e no ensino médio). Assim como no bacharelado o estudante que der continuidade aos estudos em nível de mestrado e doutorado nas áreas de educação, também estará apto à docência. Sediado no Instituto de Ciências Exatas e Biológicas (ICEB), o Departamento de Matemática (Demat) da UFOP dispõe de estruturas que permitem a imersão do aluno, como biblioteca, sala de seminários, laboratório de informática e uma sala para estudos e pesquisa em Educação Matemática. O corpo docente é formado por mestres e doutores que, além de ensinarem na graduação e na pós-graduação, fomentam as iniciativas de projetos de pesquisa e extensão, envolvendo os alunos. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xosjzD3nPxE\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZMTB32018_1.pdf', 'A presença da Matemática vai além do suporte teórico para as novas tecnologias; serve também como instrumento para interpretar e organizar informações, como na construção de tabelas de planos de saúde e imposto de renda. Assim, a compreensão matemática é fundamental para a vida em sociedade. O matemático poderá especializar-se em nível de pós-graduação para exercer a docência superior, especializar-se em áreas da Matemática pura ou aplicada a campos da engenharia, física, finanças, computação teórica, computação gráfica, entre outras. ', 'Bacharelado', 8, 40, 'Integral', 'https://www.google.com/'),
(6, 'Quimica Industrial', 'Pioneiro no estado de Minas Gerais, o curso foi criado em 1999 e reconhecido pelo MEC em 2003, ano em que se formou sua primeira turma. Além da formação específica na área ambiental, o curso oferece uma formação ampla que permite a atuação do profissional nos mais variados campos que o mercado de trabalho propõe. O químico industrial atua no controle de qualidade de matérias-primas, de produtos em processamentos e produtos acabados numa indústria química, além de elaborar laudos técnicos e prestar assessoria dentro de sua competência. O cumprimento do currículo do curso de Química Industrial da UFOP tem uma duração média de quatro anos, incluindo disciplinas obrigatórias, eletivas e horas de estágio. A grade curricular é composta por disciplinas que permeiam a matemática, física, química, biologia, administração, computação, expressão gráfica, tecnologia química, sempre alternando entre a teoria e a prática. A infraestrutura física da Universidade conta com laboratórios modernos, tanto de ensino, quanto de pesquisa e extensão. Tal estrutura, aliada aos diversos programas de bolsas ofertados pela instituição, permitem ao aluno o treinamento em recursos avançados e a maximização do seu aprendizado. A existência de monitorias para diversas disciplinas auxilia o processo de ensino-aprendizagem, e a possibilidade de participação em programas de iniciação científica completa o processo de produção do conhecimento. O corpo docente é composto essencialmente por professores doutores, cujos títulos foram obtidos nas mais renomadas instituições do país e do exterior. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/tA6CZwS0h7E\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZQUI22018_1.pdf', 'O químico industrial formado está efetivamente apto a desempenhar inúmeras funções, bem como produção; tratamentos prévios e complementares de produtos; pesquisa e desenvolvimento de operações e processos industriais; análise química e físico-química; químico-biológica, bromatológica, toxicológica e legal; padronização e controle de qualidade; operação e manutenção de equipamentos e instalações; execução de trabalhos técnicos; vistoria, perícia, avaliação, arbitrariamento e serviços técnicos; elaboração de pareceres, laudos e atestados; além de também poder exercer o magistério, conforme legislação vigente. ', 'Bacharelado', 8, 40, 'Diurno', ''),
(7, 'Licenciatura Ciências Biológicas', 'Com a proposta de formar profissionais capacitados a compreender os fenômenos da natureza, a interferência do homem no meio ambiente e promover o desenvolvimento sustentável e conservação da biodiversidade, o curso oferece duas modalidades de formação: licenciatura e bacharelado. Com duração de oito semestres no bacharelado e nove semestres na licenciatura, ao longo da graduação o aluno é formado para lidar com desenvolvimento tecnológico e científico que envolve toda a área da biologia. A licenciatura tem como objetivo formar um profissional capacitado a trabalhar nos ensinos fundamental, médio e superior. A formação é composta por conhecimentos práticos interdisciplinares de biologia e pedagogia. O bacharelado forma profissionais qualificados a realizar pesquisas nas grandes áreas das Ciências Biológicas como a Parasitologia, Genética, Bioquímica, Ecologia, entre outras. A localização do curso na cidade de Ouro Preto se torna um fator de vantagem, já que as condições geológicas e biogeográficas são favoráveis para o desenvolvimento de pesquisas em Interações Biológicas, Biologia Evolutiva e Ecologia. O Parque do Itacolomy, o Parque Municipal das Andorinhas, a APA das Andorinhas e a Estação Ecológica do Tripuí são exemplos de ambientes amplamente estudados no curso. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JUVD5QYyXzs\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZCBL32018_1.pdf', 'Além de seguir carreira na educação nos ensinos fundamental, médio e superior, o biólogo formado na UFOP está apto a formular e elaborar estudos, projetos ou pesquisa científica básica e aplicada nos diversos setores da biologia. Há também a possibilidade de orientar, dirigir, assessorar e prestar consultoria à empresas e fundações de âmbito público e privado relacionadas com biotecnologia, conservação biológica e estudos de impacto ambiental. ', 'Licenciatura', 9, 30, 'Noturno', 'https://docs.google.com/spreadsheets/d/1o8Zv2qmS3oLOemIHLXH17Vlk-lkCHGrm_j0QKle3Hhw/pubhtml'),
(8, 'Licenciatura Física', ' O curso de licenciatura em física da UFOP teve seu início em 2012 e passou pelo processo de reconhecimento em 2016. São oferecidas 10 vagas anualmente com entrada no início do ano. Mais de 85% do corpo docente é composto por doutores com vasta experiência em pesquisa, tanto em Física Básica quanto em Ensino de Física.  Além disso, os alunos do curso de Licenciatura em Física têm à sua disposição um conjunto de laboratórios de Ensino de alta qualidade. São 4 Laboratórios de Ensino de Física Básica e 2 Laboratórios dedicados exclusivamente para alunos dos cursos de Física nas disciplinas de Física Experimental Avançada e em projetos desenvolvidos em Iniciações Científicas.  Os alunos do curso de Licenciatura em Física podem continuar sua formação dentro da UFOP ao ingressarem no Mestrado Profissional em Ensino de Ciências (MPEC) http://www.mpec.ufop.br ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ITJ_zNWeHXY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZFSL22018_1.pdf', 'O mercado de trabalho do bacharel em Física é vasto e abrange setores do ensino superior, de centros de pesquisa públicos e privados e indústrias. O profissional pode se especializar em diversas áreas, tais como: física de materiais, propriedades fundamentais da matéria, física teórica e computacional, biofísica, econofísica, física de partículas, física nuclear e ensino de ciências. ', 'Licenciatura', 8, 40, 'Diurno', ''),
(9, 'Licenciatura Química', 'Com a criação do Plano de Reestruturação e Expansão das Universidades Federais (Reuni), o curso de Química, que já era idealizado antes de 2005, pôde ser viabilizado em 2008. Tem por objetivo formar profissionais bem qualificados para as diversas áreas de educação em química e visa à formação crítica com ações transformadoras da realidade atual. A matriz curricular possibilita a aquisição de conhecimento em quatro grandes eixos articuladores voltados para a interdisciplinaridade, visando à formação global do aluno. 1) Disciplinas de química e de outras áreas das ciências naturais, que proporcionam um conhecimento profundo da química em todas as suas dimensões. 2) Disciplinas e atividades relacionadas à didática, envolvendo os conhecimentos filosóficos, educacionais e pedagógicos da ação educativa.   3) Disciplinas e atividades relacionadas à prática pedagógica; 4) Disciplinas voltadas para uma formação humanística para o exercício pleno de cidadania. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xMHay-Ps1Gw\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZQLI12018_1.pdf', 'O profissional formado no curso de licenciatura em química da UFOP pode atuar, imediatamente após a sua formatura, como professor de química no ensino básico (fundamental ou médio) ou exercer as atividades de consultoria, perícia, elaboração de laudos e pareceres, pesquisas em geral, análises químicas, físico-químicas, bromatológicas, toxicológicas e de controle de qualidade. Há também a opção de continuar seus estudos de pós-graduação para atuar como professor ou pesquisador em educação em química (área muito deficitária de profissionais dentre os cientistas no Brasil) com a importante missão de colaborar com as ações que definirão o futuro próximo da educação no Brasil. ', 'Licenciatura', 8, 40, 'Noturno', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `titulo` text NOT NULL,
  `sigla` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`id`, `link`, `titulo`, `sigla`) VALUES
(5, 'http://debio.ufop.br/', 'Departamento de Biodiversidade, Evolução e Meio Ambiente', 'DEBIO'),
(6, 'http://www.iceb.ufop.br/decbi/', 'Departamento de Ciências Biológicas', 'DECBI'),
(7, 'http://www.decom.ufop.br/decom/inicio/', 'Departamento de Computação', 'DECOM'),
(8, 'http://www.iceb.ufop.br/deest/', 'Departamento de Estatística', 'DEEST'),
(9, 'http://fisica.ufop.br/', 'Departamento de Física', 'DEFIS'),
(10, 'http://www.iceb.ufop.br/demat/', 'Departamento de Matemática', 'DEMAT'),
(11, 'http://deema.ufop.br/', 'Departamento de Educação Matemática', 'DEEMA'),
(12, 'http://www.iceb.ufop.br/dequi/', 'Departamento de Química', 'DEQUI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `diretoria`
--

CREATE TABLE `diretoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cargo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `diretoria`
--

INSERT INTO `diretoria` (`id`, `nome`, `cargo`) VALUES
(1, 'Prof. André Talvani Pedrosa da Silva', 'Diretor'),
(2, 'Prof. Rodrigo Fernando Bianchi', 'Vice-Diretor'),
(3, 'Roseany Mendes', 'Secretária'),
(4, 'Vânia Cristina Rosa', 'Recepcionista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `colegiado` int(100) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `membro` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `lattes` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `colegiado`, `nome`, `telefone`, `cargo`, `membro`, `email`, `lattes`) VALUES
(1, 5, 'Pedro Alves', '(31) 3559-1312', 'Secretário(a)', 'Membro do Colegiado', 'cocbib.iceb@ufop.edu.br', ''),
(2, 3, 'Joubert Castro Lima', '', 'Coordenador(a)', 'Membro do NDE', 'joubert@gmail.com', 'http://lattes.cnpq.br/4646114975554537'),
(4, 5, 'Eneida M. Eskinazi Sant’Anna', '(31) 3559-1312', 'Coordenador(a)', 'Membro do Colegiado', 'eskinazi@ufop.edu.br', 'http://lattes.cnpq.br/3676657135006759'),
(5, 5, 'Ana Letícia Pilz de Castro', '', 'Membro', 'Membro do Colegiado', 'anacastro@ufop.edu.br', 'http://lattes.cnpq.br/1636925361891899'),
(6, 5, 'Camila Carrião Machado Garcia', '(31) 3559-1698', 'Presidente', 'Membro do NDE', 'carriao@ufop.edu.br', 'http://lattes.cnpq.br/6201516426270860'),
(7, 5, 'Alexandre S.de Paula', '(31) 3559-1244', 'Membro', 'Membro do NDE', 'alexandre.paula@ufop.edu.br', 'http://lattes.cnpq.br/2193708427094253'),
(8, 5, 'Breno de Mello Silva', '(31) 3559-1695', 'Membro', 'Membro do NDE', 'breno@ufop.edu.br', 'http://lattes.cnpq.br/5291451453485893');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mapas`
--

CREATE TABLE `mapas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `arquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mapas`
--

INSERT INTO `mapas` (`id`, `nome`, `arquivo`) VALUES
(1, 'MapaICEB', 'mapaICEB.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `link` text NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `link`, `data`) VALUES
(10, '58° Congresso Brasileiro de Química', 'http://www.ufop.br/noticias/pesquisa-e-inovacao/58o-congresso-brasileiro-de-quimica', '2018-04-05'),
(11, 'Aluno da pós em Ciência da Computação ganha prêmio de melhor trabalho em evento internacional', 'http://www.ufop.br/noticias/pos-graduacao/aluno-da-pos-em-ciencia-da-computacao-ganha-premio-de-melhor-trabalho-em', '2018-04-08'),
(12, 'Ex-aluno da UFOP publica artigo em revista internacional', 'http://www.ufop.br/noticias/ex-aluno-da-ufop-publica-artigo-em-revista-internacional', '2018-04-09'),
(13, 'Abertas inscrições para pós do Programa Multicêntrico em Química', 'http://www.ufop.br/noticias/pos-graduacao/abertas-inscricoes-para-pos-do-programa-multicentrico-em-quimica', '2018-04-19'),
(14, 'Concurso para professor efetivo', 'http://www.ufop.br/noticias/concursos/concurso-para-professor-efetivo', '2018-05-02'),
(15, 'Inscrições abertas para Mestrado e Doutorado em Ciência da Computação', 'http://www.ufop.br/noticias/pos-graduacao/inscricoes-abertas-para-mestrado-e-doutorado-em-ciencia-da-computacao', '2018-05-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pos-graduacao`
--

CREATE TABLE `pos-graduacao` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `link` text NOT NULL,
  `video` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pos-graduacao`
--

INSERT INTO `pos-graduacao` (`id`, `titulo`, `link`, `video`) VALUES
(1, 'Ensino de Ciências', 'http://www.mpec.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UAk4dzhVdQ0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(6, 'Ciência da Computação', 'http://www.decom.ufop.br/pos/inicio/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jrRLL2Vr5wA\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(7, 'Ciências - Física dos Materiais', 'http://fimat.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SL5eRTkZU8g\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(9, 'Engenharia de Materiais', 'http://www.redemat.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/G8r1acrMGD8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(10, 'Educação Matemática', 'http://www.ppgedmat.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/G8r1acrMGD8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(11, 'Química', 'http://www.ppgquimica.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/G8r1acrMGD8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(12, 'Ecologia de Biomas Tropicais', 'http://biomas.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6xE2s8Mtv3c\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

CREATE TABLE `salas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `arquivo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`id`, `nome`, `arquivo`) VALUES
(1, 'Bloco de salas - Segunda-feira', 'Alocacao_Segunda_2018_2_Bloco_de_Salas.pdf'),
(2, 'Bloco de salas - Terça-feira', 'Alocacao_Terca_2018_2_Bloco_de_Salas.pdf'),
(3, 'Bloco de salas - Quarta-feira', 'Alocacao_Quarta_2018_2_Bloco_de_Salas.pdf'),
(4, 'Bloco de salas - Quinta-feira', 'Alocacao_Quinta_2018_2_Bloco_de_Salas.pdf'),
(5, 'Bloco de salas - Sexta-feira', 'Alocacao_Sexta_2018_2_Bloco_de_Salas.pdf'),
(8, 'ICEB - Segunda-feira', 'Alocacao_Segunda_2018_2_ICEB.pdf'),
(9, 'ICEB - Terça-feira', 'Alocacao_Terca_2018_2_ICEB.pdf'),
(10, 'ICEB - Quarta-feira', 'Alocacao_Quarta_2018_2_ICEB.pdf'),
(11, 'ICEB - Quinta-feira', 'Alocacao_Quinta_2018_2_ICEB.pdf'),
(12, 'ICEB - Sexta-feira', 'Alocacao_Sexta_2018_2_ICEB.pdf'),
(6, 'Horário Complementar - Quarta-feira', 'horario_complementar_-_quarta-feira.pdf'),
(7, 'Bloco de salas - Sábado', 'bloco_de_salas_-_sabado.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `colegiado` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `download` tinyint(1) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `upload`
--

INSERT INTO `upload` (`id`, `colegiado`, `tipo`, `arquivo`, `descricao`, `download`, `nome`) VALUES
(4, 5, 'ata', 'Atas para o site.rar', 'ATAS COCBIB Reuniões 2018', 1, 'Atas do Colegiado'),
(5, 5, 'docs', 'Site ICEB.docx', 'Documento do departamento de biologia', 1, 'Documento 1'),
(6, 5, 'aacc', 'Tabela AACC_NOVA_Bacharelado 2018.pdf', 'Tabela AACC do departamento de biologia', 1, 'Tabela AACC 1'),
(8, 5, 'ata', 'ATA_COCBIB__1-16_aprov..pdf', 'Ata teste colegiado de biologia', 1, 'Ata de teste 2'),
(9, 5, 'docs', 'teste_docs.docx', 'docs colegiado de biologia', 1, 'docs teste'),
(10, 3, 'ata', 'ATA_COCBIB__1-16_aprov..pdf', 'ata computacao', 1, 'teste 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(20) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`user`, `senha`) VALUES
('VolutaSD', 'inovarsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `colegiado`
--
ALTER TABLE `colegiado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`) USING BTREE;

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diretoria`
--
ALTER TABLE `diretoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapas`
--
ALTER TABLE `mapas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pos-graduacao`
--
ALTER TABLE `pos-graduacao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Titulo` (`titulo`) USING BTREE;

--
-- Indexes for table `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colegiado`
--
ALTER TABLE `colegiado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `diretoria`
--
ALTER TABLE `diretoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mapas`
--
ALTER TABLE `mapas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pos-graduacao`
--
ALTER TABLE `pos-graduacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `salas`
--
ALTER TABLE `salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
