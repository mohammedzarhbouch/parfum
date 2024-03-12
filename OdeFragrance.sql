CREATE TABLE `doelgroup`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `doelgroep` VARCHAR(255) NOT NULL
);
CREATE TABLE `brand`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `brand_name` VARCHAR(255) NOT NULL
);
CREATE TABLE `foto`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `foto_url` VARCHAR(255) NOT NULL
);
CREATE TABLE `product`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `brand_id` BIGINT NOT NULL,
    `foto_id` BIGINT NOT NULL,
    `doelgroep_id` BIGINT NOT NULL
);
ALTER TABLE
    `product` ADD CONSTRAINT `product_brand_id_foreign` FOREIGN KEY(`brand_id`) REFERENCES `brand`(`id`);
ALTER TABLE
    `product` ADD CONSTRAINT `product_doelgroep_id_foreign` FOREIGN KEY(`doelgroep_id`) REFERENCES `doelgroup`(`id`);
ALTER TABLE
    `product` ADD CONSTRAINT `product_foto_id_foreign` FOREIGN KEY(`foto_id`) REFERENCES `foto`(`id`);