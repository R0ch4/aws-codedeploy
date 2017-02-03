SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- Create user role
CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_role_descricao` (`descricao`);


ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


INSERT INTO `roles` (`id`, `descricao`) VALUES (NULL, 'Administrator');


-- Add the `role_id` to `user` table
ALTER TABLE `users` CHANGE `perfil_id` `role_id` INT(10) UNSIGNED NOT NULL;

-- Add the `user_id` to `perfil` table
ALTER TABLE `perfis` ADD `user_id` INT UNSIGNED NOT NULL AFTER `perfil_id`;
