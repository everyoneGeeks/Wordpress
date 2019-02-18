
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','pop'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'syntax_highlighting','true'),(7,1,'comment_shortcuts','false'),(8,1,'admin_color','fresh'),(9,1,'use_ssl','0'),(10,1,'show_admin_bar_front','true'),(11,1,'locale',''),(12,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(13,1,'wp_user_level','10'),(14,1,'dismissed_wp_pointers','wp496_privacy,text_widget_custom_html'),(15,1,'show_welcome_panel','0'),(16,1,'session_tokens','a:3:{s:64:\"b9bad21051f5c40249f1ce94fd70b3b2f3313e2467355e16ccaa3507df0aa6e5\";a:4:{s:10:\"expiration\";i:1550573296;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:133:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/71.0.3578.98 Chrome/71.0.3578.98 Safari/537.36\";s:5:\"login\";i:1550400496;}s:64:\"1943b6d5e74683642b70df2e5266f82b2e5f7541ae10ffd672196f0d11ad0fc4\";a:4:{s:10:\"expiration\";i:1550573300;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:133:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/71.0.3578.98 Chrome/71.0.3578.98 Safari/537.36\";s:5:\"login\";i:1550400500;}s:64:\"38c07867e75010a08b9a344409fd103597814c90a1e2999bc5a686bc05b64beb\";a:4:{s:10:\"expiration\";i:1550651786;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:133:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/71.0.3578.98 Chrome/71.0.3578.98 Safari/537.36\";s:5:\"login\";i:1550478986;}}'),(17,1,'wp_dashboard_quick_press_last_post_id','5'),(18,1,'closedpostboxes_dashboard','a:2:{i:0;s:21:\"dashboard_quick_press\";i:1;s:17:\"dashboard_primary\";}'),(19,1,'metaboxhidden_dashboard','a:0:{}'),(20,1,'wp_user-settings','mfold=o&libraryContent=browse&editor=html'),(21,1,'wp_user-settings-time','1550495170'),(22,1,'_woocommerce_persistent_cart_1','a:1:{s:4:\"cart\";a:0:{}}'),(23,1,'wc_last_active','1550448000'),(24,1,'dismissed_no_secure_connection_notice','1'),(25,1,'dismissed_jetpack_install_error_notice','1'),(26,1,'closedpostboxes_admin_page_revisr_new_commit','a:1:{i:0;s:14:\"revisr_add_tag\";}'),(27,1,'metaboxhidden_admin_page_revisr_new_commit','a:0:{}'),(28,1,'meta-box-order_admin_page_revisr_new_commit','a:2:{s:4:\"side\";s:33:\"revisr_save_commit,revisr_add_tag\";s:6:\"normal\";s:20:\"revisr_pending_files\";}'),(29,1,'screen_layout_admin_page_revisr_new_commit','1');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

