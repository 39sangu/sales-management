SET CHARACTER_SET_CLIENT = utf8mb4;
SET CHARACTER_SET_CONNECTION = utf8mb4;

CREATE TABLE unit_prices (
    id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    ramen_id varchar(255) NOT NULL,
    price int(10) NOT NULL,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE costs (
    id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    ramen_id varchar(255) NOT NULL,
    noodle int(10) NOT NULL,
    vegetable int(10) NOT NULL,
    others int(10) NOT NULL,
    sum int(10) NOT NULL,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO unit_prices (id, ramen_id, price) 
VALUES (NULL, '味噌ラーメン', 800),(NULL, '塩ラーメン', 700),(NULL, '麻婆ラーメン', 850),(NULL, '醤油ラーメン', 700),(NULL, 'タンメン', 850);


INSERT INTO costs (id, ramen_id, noodle, vegetable, others, sum) 
VALUES (NULL, '味噌ラーメン', 80, 100, 60, 240),(NULL, '塩ラーメン', 80, 100, 30, 210),(NULL, '麻婆ラーメン', 80, 50, 100, 230),(NULL, '醤油ラーメン', 80, 100, 30, 210),(NULL, 'タンメン', 80, 150, 30, 260);

CREATE TABLE `ramens` (
  `id` char(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `ramens` (`id`, `name`, `price`) VALUES
('M01', 'miso', 800),
('M02', 'shio', 700),
('M03', 'mabo', 850),
('M04', 'shoyu', 700),
('M05', 'tanmen', 850),
('M06', 'tonkotsu', 900);

ALTER TABLE `ramens`
  ADD PRIMARY KEY (`id`);
COMMIT;

CREATE TABLE `totals` (
  `id` int(11) NOT NULL,
  `date` varchar(16) DEFAULT NULL,
  `ramen_id` varchar(3) DEFAULT NULL,
  `quantity` int(1) DEFAULT NULL,
  `acounting` int(50) DEFAULT NULL,
  `responsible` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `totals`
--

INSERT INTO `totals` (`id`, `date`, `ramen_id`, `quantity`, `acounting`, `responsible`) VALUES
(1, '2022/04/01 11:32', 'M01', 1, 800, 'J01'),
(2, '2022/04/01 11:45', 'M02', 2, 1400, 'J02'),
(3, '2022/04/01 12:55', 'M03', 1, 700, 'J01'),
(4, '2022/04/01 12:58', 'M03', 2, 1400, 'J02'),
(5, '2022/04/01 13:10', 'M04', 1, 850, 'J03');

--
ALTER TABLE `totals`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `totals`
--
ALTER TABLE `totals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
