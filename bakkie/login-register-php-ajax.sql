/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : login-register-php-ajax

 Target Server Type    : MySQL
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 10/03/2022 15:50:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for employers
-- ----------------------------
DROP TABLE IF EXISTS `employers`;
CREATE TABLE `employers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cellnumber` bigint(20) NOT NULL,
  `password` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `timeStamp` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 77 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of employers
-- ----------------------------
INSERT INTO `employers` VALUES (52, 'roman', 'ttt', 'kdingghtiger@gmail.com', 114113, '$2y$10$CtGmnmYfsdbdRPEFqECuSO5DHpK0fiWY89E0xwXadyChfCsQJTgei', '2022-02-07 20:21:15');
INSERT INTO `employers` VALUES (60, 'etry', 'yte', 'adtmin@phpzag.com', 1231231231, '$2y$10$rzMpkdqynto4eK8Ubz1BBeCHg48EPsoMBFUVuDejkvClF0l1euS4m', '2022-02-18 06:47:33');
INSERT INTO `employers` VALUES (61, 'asdfdf', 'afd', 'pio12neerdev1023@gmail.com', 1231231231, '$2y$10$jIK.Td0BDJM8isCtFQCKcOnabX.7zczrgpTh03XwEr0ECM9aQoOVe', '2022-02-18 06:48:32');
INSERT INTO `employers` VALUES (62, 'pion', 'fg', 'admi123n@phpzag.com', 1231231231, '$2y$10$gpaY0cLkFrWmhCC5DJKTrO4kkqDkEStlU82R4Xe0jR8gZHgE6uQB6', '2022-02-18 12:52:47');
INSERT INTO `employers` VALUES (63, 'Piet', 'Pompies', 'pietpompies@gmail.com', 125468978, '$2y$10$EBbLAsavO.L0PZ5KXc7s2.G6Aki2OLOGqHSSLfh6XS5uL.R9oIEy6', '2022-02-18 19:52:14');
INSERT INTO `employers` VALUES (64, 'Koos', 'Bekker', 'koos@bekker.com', 890123456, '$2y$10$v0YOaRr1h/mvStJqtgaKg.iBM9nAbcmy/HVtcKtawE3akEjUDl.ta', '2022-02-22 20:20:38');
INSERT INTO `employers` VALUES (65, 'Me', 'Email', 'me@email.com', 812345678, '$2y$10$r9KAQGG8Ek3oMms.sthF8OFdh9TQrMy7xCXj7Q710ikgAvv.pd3aS', '2022-02-26 20:11:41');
INSERT INTO `employers` VALUES (66, 'End', 'User', 'eu@gmail.com', 821234567, '$2y$10$utIhlUKTphXj2o9GUf4il..l/4p17TjAijgVlXyLwC8uhEDoLYXq2', '2022-02-26 22:31:40');
INSERT INTO `employers` VALUES (67, 'hollo', 'gram', 'ex@email.com', 1231232222, '$2y$10$Uuor5lOkTMQqF6W0nQQpl.bXVrhpYmD8BBOsGYvF9wWIvtriX752K', '2022-03-02 20:04:52');
INSERT INTO `employers` VALUES (68, 'End', 'User', 'enduser@gmail.com', 812345678, '$2y$10$fMnvT0o0qCrqgz447xP5SeMlmQQynVSZ50PqaK2Wb0PSPYjakfgYa', '2022-03-02 21:08:04');
INSERT INTO `employers` VALUES (69, 'New End', 'User', 'newenduser@gmail.com', 812341234, '$2y$10$oQjTIiXOPSYOzVWDNY1dC.YICy5p7TXJFZSNaa8oHYKuuSdz5K3Ce', '2022-03-02 21:59:44');
INSERT INTO `employers` VALUES (70, 'NewMarch', 'User', 'newmarchuser@gmail.com', 898765432, '$2y$10$.96AUcIwSWanySkMUgEbI.W2isEEcwFClCcVJJfNjcSVXM4eqMCfG', '2022-03-07 19:22:07');
INSERT INTO `employers` VALUES (71, 'Beatrice', 'Bekker', 'bmbekker39@gmail.com', 835213547, '$2y$10$xHR4O8BqajxlsPemt1DoYOJUmJnf.ONiR5gSGM6wfb4JxEu/107Xu', '2022-03-07 21:23:27');
INSERT INTO `employers` VALUES (72, 'Eight', 'March', '8march@gmail.com', 123456789, '$2y$10$iVmIRtWmbMUVpp.u8AyBUOVOrlLFFJAKWMJxFiWTKGUBAg7p6MGF6', '2022-03-08 22:12:56');
INSERT INTO `employers` VALUES (73, 'Nick', 'sirler', 'seo@gmail.com', 7897897899, '$2y$10$V/JiNSYk9ZeIp.BCVgZbEevarAud5n7IY5UdyI3aPx6u1fnuPvZOy', '2022-03-09 13:12:55');
INSERT INTO `employers` VALUES (74, 'toel', 'jsrtj', 'kygghtiger@gmail.com', 8908908908, '$2y$10$COEWCIKJ4uT9B1oAXflYouQ1DpxN.s4JzlDUrkNHCg8zdKCZGKNbG', '2022-03-09 13:17:34');
INSERT INTO `employers` VALUES (75, 'toel', 'jsrtj', 'kyrtghtiger@gmail.com', 8908908908, '$2y$10$cgl2WyQV2kKwlLe9GNX6Xe3B2zXQr26Grj.rLBKEngzVidNG55ome', '2022-03-09 13:30:03');
INSERT INTO `employers` VALUES (76, 'wuaskj', '4uaj', 'adsdrwtmin@phpzag.com', 3465346344, '$2y$10$cButyWmuoltmi69tLxl8oeQI2cCLyvGvQRbNGYKByoXLlP3yosIxe', '2022-03-09 13:37:12');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cellnumber` bigint(20) NOT NULL,
  `email` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hoc_rate` bigint(10) NOT NULL,
  `free_km` bigint(10) NOT NULL,
  `daily_rate` bigint(10) NOT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hometown` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `license_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bakkie_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `timeStamp` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `approve` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 77 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (23, 'sdga', 'abnedba', 'aaa23', 5678567878, 'ki3ngtiger@gmail.com', 2323, 2323, 2323, 'MPUMALANGA', 'Aankoms', '/uploads/505d89fdea682b9d595d9fd2c350554f.jpg', '/uploads/72eb37c21b548e6425fc11f610abcfac.jpg', '/uploads/b8ee876b7d093bb0d60d8141414e6647.png', '$2y$10$7HvSUhiKeTE//rTkhKwlxOL9/gG9gmzF5go1hjdXuvDEzBqLeY.b.', '2022-02-04 02:06:51', 'OK');
INSERT INTO `users` VALUES (24, 'sdfg', 'aewveg', 'old24b', 5678567878, 'kingt3siger@gmail.com', 2424, 2424, 2424, 'LIMPOPO', 'Afguns', '/uploads/b92648f116206d3e8c151c080584944f.jpg', '/uploads/97c7aca9091b0c1d995974f7a8651d84.jpg', '/uploads/680cc8b36d4958df2e86d9b6f4c97013.png', '$2y$10$JXX0QdqDdRPk.FQubWKiBeg0uaxc0H/MM0sSSPDmv2u7mMkSECmgy', '2022-02-04 02:19:48', 'OK');
INSERT INTO `users` VALUES (29, 'pi', 'xfdr', 'fff', 6513451341, 'kingqaftiger@gmail.com', 333, 222, 111, 'KWAZULUNATAL', 'Adams Mission', '/uploads/bdf1d2ce6ad385176246a60c986fa4ad.jpg', '/uploads/aaa83f47593340263bc6322018424b69.jpg', '/uploads/c7bd946db99f7488e3d80efa19916947.png', '$2y$10$2wntslVA9Ow0WG7JE5zYA.p9X3mGUhRatMZtQNFvzwK4iLe9061w2', '2022-02-04 02:56:26', 'OK');
INSERT INTO `users` VALUES (34, 'Jack', 'Frost', 'Frosty', 81299999, 'frosty@gmail.com', 1500, 200, 250, 'MPUMALANGA', 'Ermelo', '/uploads/3dd8f16be3c66f46351881ff77f9b883.jpg', '/uploads/3c1348b7c0698faca8657eef345a2314.jpg', '/uploads/f45cd07736ebaad37c5d06b381a75d89.jpg', '$2y$10$qUsWmIMGRQx0rDSTlH/r7O10v2zHLj4vWhiHSakIBDfk5wg5GGzJe', '2022-02-04 06:12:10', 'OK');
INSERT INTO `users` VALUES (40, 'Joe', 'Moer', 'Joey', 123456789, 'joe@moer.com', 375, 125, 1550, 'LIMPOPO', 'Ellisras', '/uploads/deede4e880b7c2f8ebd4625371caca20jfif', '/uploads/74fcabec44b73b5ac342903838012e54jfif', '/uploads/fb5c929e233f089855f4e6d2bf883debjfif', '$2y$10$RyNUWyNbgUdGgjglZhpsGupDjrChVbAGhXPYEB2NqbSQY.z5i1CnG', '2022-02-06 08:38:50', 'OK');
INSERT INTO `users` VALUES (41, 'Jon', 'Doe', 'Jon', 123456788, 'jod@Doe.com', 475, 150, 1950, 'GAUTENG', 'Bronkhorstspruit', '/uploads/f460b2e0d52e965d82faf16fc502b5eajfif', '/uploads/2ae0ff332a2788806e8792ed74b4dc59jfif', '/uploads/af80b62ccc77d237471c01bb66be0470jfif', '$2y$10$SjuNcyfwm02c/PaFuVaxTu4NXuCpcT5u0Ir1Tya5QZoJ36dkXyn4m', '2022-02-06 08:40:55', 'OK');
INSERT INTO `users` VALUES (42, 'Jaq', 'Teq', 'Jaq', 9254775807, 'jaq@teq.co.za', 395, 125, 1495, 'EASTERNCAPE', 'Humansdorp', '/uploads/f90d37cde0e692f664db44ea9673081cjfif', '/uploads/a10d7f7425d902058afd94aa815544f8jfif', '/uploads/c19501beca988e8a5002d9174a0457a7jfif', '$2y$10$qTH.hbP.Doeb3P0fL8tGqecdqJ9E1gaUv5gpylaQ3uCaZSkd.kaV6', '2022-02-06 08:48:25', 'OK');
INSERT INTO `users` VALUES (43, 'Jack', 'Teck', 'Jack', 1122334666, 'jaqqie@teq.co.za', 595, 225, 1795, 'WESTERNCAPE', 'George', '/uploads/0b71dacdb70fb092eb895716f51c4dfcjfif', '/uploads/de779932e66c7804f0fd0523adc746fdjfif', '/uploads/ecef01137edd8e114e13a352e1c0214cjfif', '$2y$10$FlZz8oOuwXirlESgRJE.m.hDzZaSWYmgRRG6Xqe.Ne1DKqNk8RvSu', '2022-02-06 08:51:30', 'OK');
INSERT INTO `users` VALUES (44, 'Fred', 'Frost', 'Fred', 1122334455, 'fred@frost.com', 395, 425, 1195, 'NORTHERNCAPE', 'Kimberley', '/uploads/923dbcb7496af2397118be53d99c71aajfif', '/uploads/31cababe354e8b11e71ce58b9ed0e49ejfif', '/uploads/8137acf9338af3195095fa2ec808a584jfif', '$2y$10$/YNrhV5nHEX.RCQsshRjTOydhva43jyTUYNbBX0p5RKmyxFq3fjZG', '2022-02-06 08:54:12', 'OK');
INSERT INTO `users` VALUES (46, 'Pete', 'Potch', 'Pete', 112233, 'pete@potch.za', 595, 500, 1650, 'NORTHWEST', 'Potchefstroom', '/uploads/bee29ea38a4557750033464249a0a66fjfif', '/uploads/751033d9c1101773eff66203d37f9ea9jfif', '/uploads/0810eb1682342663aa923b92b789f6c8jfif', '$2y$10$vsWbhYgYVYqkHD8gCHcfteA2L/znnBBVB2UZaZi3uowVL81j/P/qq', '2022-02-06 09:08:57', 'OK');
INSERT INTO `users` VALUES (52, 'nikita', 'M.M.', 'misha', 151235155, 'bestfriend@email.com', 13, 123, 132, 'LIMPOPO', 'Ba-Phalaborwa', '/uploads/d117f90b9214a1a2af669c199c4fa202.jpg', '/uploads/2ea16d445e632a3086bcb502981dea7e.jpg', '/uploads/95be3c3da6b22b5357fc93a0c52b0438.jpg', '$2y$10$kDnuMcAUcdao6HwLdVpLw.3NTYdIbVUjCkKXtJchLIBvZXpGUJAHi', '2022-02-09 20:33:25', 'OK');
INSERT INTO `users` VALUES (53, 'linio', 'lingo', 'youn', 1234123244, 'empoll@gmail.com', 342, 232, 432, 'MPUMALANGA', 'Aankoms', '/uploads/a425fa89bd55b37f57a833df874593cd.jpg', '/uploads/c617c6827227f5dbf6727d6af7da1ec9.jpg', '/uploads/586988d22382d8deb678c72eca53d4a5.jpg', '$2y$10$S05W1kOaGszjBwG30PMAiOldaiJ4iTwM1RpvzwSw487my1cBeeR/q', '2022-02-10 05:24:18', 'OK');
INSERT INTO `users` VALUES (54, 'Jaq', 'Teq', 'Jaq', 827440602, 'jaq-teq@gmail.com', 150, 150, 1500, 'EASTERNCAPE', 'Humansdorp', '/uploads/a07c2b8be69f76644a28bbe1524a128ejfif', '/uploads/cc64000b89bb230d3b90f0c137013667jfif', '/uploads/65931736f09f85323224bb1219fb6677jfif', '$2y$10$jwXWO1OCr1clY295jJm23edsIVK2Qm6PUD5m/FQ006/nfAoiWUsmC', '2022-02-10 07:47:02', 'OK');
INSERT INTO `users` VALUES (57, 'pio', 'dfht', 'xgthyyy', 2652546333, 'ktyadmin@phpzag.com', 333, 333, 333, 'NORTHERNCAPE', 'Aggeneys', '', '/uploads/279d8c246faef1c2ee15f5fa22884f1e.jpg', '/uploads/e97b9016505fc5c300e6bec9f7ddaa0e.jpg', '$2y$10$I04ZxiZBaZ05B13xnnIoJ.ApNHj4PX/AhECm923SZmD9MPwWzYd2q', '2022-02-17 17:56:20', 'OK');
INSERT INTO `users` VALUES (60, 'ajrtg', 'aj', 'jra', 1231231231, 'admain@phpzag.com', 32, 12, 31, 'NORTHWEST', 'Amalia', '', '/uploads/6efc59eac175f2ddc8bcc2ee114db07e.jpg', '/uploads/8033d9bd8bf5a650f42f347bd7bbffb3.jpg', '$2y$10$yj.Tlpkc3SWdWZbdsu97r.H.YI5OEqyAewZn8KpR37mFFxVXAIXsi', '2022-02-18 13:56:00', 'OK');
INSERT INTO `users` VALUES (61, 'Nelson', 'Mandela', 'Madiba', 123456789, 'nelson@mandela.co.za', 550, 250, 1500, 'EASTERNCAPE', 'Humansdorp', '/uploads/76844d0d4fa1071e9cd79ab80d5102b0jfif', '/uploads/08ae9912e5d8be2b4f1fd0c6a82f3975.jpg', '/uploads/0d52f1d01e47f884f5e0ea8e604f11ef.png', '$2y$10$0PMwLYz18fcNcAfg/.INROUe2ZzWRGEPardOT141jW05YEtQtSDFW', '2022-02-18 20:28:21', 'OK');
INSERT INTO `users` VALUES (64, 'Jaq', 'Teq', 'Kosie', 124589321, 'jaq@teq.com', 450, 250, 2599, 'EASTERNCAPE', 'Humansdorp', '/uploads/c3e935f839d47e7e152f0e8bf5d7b03bjfif', '/uploads/03a50c05bdc523e7481262e8cba09f09jfif', '/uploads/1914b3949e9b618002fd089f080b5287jfif', '$2y$10$RLPe9x8r3LMMdbUv97BlB.f8vXtn2qrGyBh9OtM4FcwxDKCgH6Hlu', '2022-02-22 20:16:50', 'OK');
INSERT INTO `users` VALUES (69, 'ar', 'ksr', 'asdgw', 1231231231, 'em27p@gmail.com', 345, 8888, 246, 'MPUMALANGA', 'Aankoms', '/uploads/12fe743516147a91dda72cbcbac2281f.jpg', '/uploads/b2dc3462cd5284b703e0b11033c8de06.jpg', '/uploads/300e2138710d6291198882acf576bb99.jpg', '$2y$10$TVcC20C3V5fj2CkobcQ5OeNxbqYyzaIsLdMWjY896KNQuGMMCmLtK', '2022-02-24 01:07:49', 'OK');
INSERT INTO `users` VALUES (70, 'Jaq2', 'Teq', 'Jaq2', 812345678, 'jaq2teq@gmail.com', 550, 250, 1495, 'EASTERNCAPE', 'Humansdorp', '/uploads/3359ba5da3a5f78fabd65fe94ea0dd84jfif', '/uploads/13a11efceaa0f84c04f75a9e039494f5jfif', '/uploads/aac6149534705dcc7b7387b2173e81de.jpg', '$2y$10$VLRhQk5WzzyWtk47YGpoq.TfxtPJRqxAq74kiIhhZo3gAXBx0XTIi', '2022-02-26 20:25:25', 'OK');
INSERT INTO `users` VALUES (71, 'John', 'Andro', 'Micky-edit', 1231231231, 'empin@gmail.com', 1231, 1233, 1231, 'GAUTENG', 'Atteridgeville', '/uploads/9c6017297efb62c4b3bec886df050794.jpg', '/uploads/13915b6d623259761aaf6a8e951cf867.jpg', '/uploads/00f6c47d4bdd6e422a85b38fcc663006.jpg', '$2y$10$Cf256fRctIA0pMLzSkABP.dU7trwg4pdHJEiAeyl.IhlALleAQppi', '2022-02-26 21:35:02', 'OK');
INSERT INTO `users` VALUES (72, 'RU', 'Bakkie', 'NewRU', 823456789, 'me@mail.com', 200, 100, 1000, 'EASTERNCAPE', 'Humansdorp', '/uploads/94d94353697ef8c8e15eeb510a7e1056jfif', '/uploads/a26a11c6265232129df7e158e32e7562jfif', '/uploads/76c0e4671371ef81b69478923ccade8d.jpg', '$2y$10$gjx/Xrx1RbKzB/75GZPLTuL.KPgJmDWH3ZX3kXCBVWHGrSJUwCgOS', '2022-02-26 21:38:04', 'OK');
INSERT INTO `users` VALUES (75, 'albert', 'maksim', 'Wolfson', 6786786788, 'expaer@gmail.com', 123, 312, 123, 'KWAZULUNATAL', 'Adams Mission', '/uploads/ff05909e6f64f817932fc489f264cd19.jpg', '/uploads/dccb3735a81bc5cfcce2d495925539d9.jpg', '/uploads/870d2acbbb5e3e16d1c351306bf8a97e.jpg', '$2y$10$JxwseTgjZw0Jdm84chdSeOhV8TJcC9gbDZXh4YS7ZnvsnXnLs.JXu', '2022-03-09 12:42:43', 'OK');
INSERT INTO `users` VALUES (76, 'soe', 'eoll', 'Micky34', 6788766781, 'emqaujpin@gmail.com', 123, 123, 123, 'FREESTATE', 'Allanridge', '/uploads/380aeb81b6021093d816c33b56ef42ea.jpg', '/uploads/454174bce5c48bdf9c6aa53d535f5239.jpg', '/uploads/2b76fdd4b1ec1269b8fbe26cd4c889ba.jpg', '$2y$10$JBPqrrow1KS1EB4Q6/jktOl6rN5RhGzfOqHxSutLdokXxYl4GyWIm', '2022-03-10 01:48:45', 'OK');

-- ----------------------------
-- Table structure for users_temp
-- ----------------------------
DROP TABLE IF EXISTS `users_temp`;
CREATE TABLE `users_temp`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cellnumber` bigint(20) NOT NULL,
  `email` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hometown` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hoc_rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `free_km` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `daily_rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `license_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bakkie_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `timeStamp` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `approve` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `edit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 138 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
