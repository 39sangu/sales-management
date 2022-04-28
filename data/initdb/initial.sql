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