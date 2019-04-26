-- MySQL dump 10.13  Distrib 5.6.41, for Linux (x86_64)
--
-- Host: localhost    Database: juegosantabeatriz
-- ------------------------------------------------------
-- Server version	5.6.41

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

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'Banner 1','banners/April2019/hznjZvkNAVY1mVuSDRpK.jpg','2019-04-12 07:21:28','2019-04-12 07:21:28'),(2,'Banner 2','banners/April2019/jEt3EkLgUgScvVHzDatO.jpg','2019-04-12 07:21:41','2019-04-12 07:21:41'),(3,'Banner 3','banners/April2019/04Q2o2NLZ17U6lasLM0u.jpg','2019-04-12 07:21:53','2019-04-12 07:21:53');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Mesas de Billar','mesas-de-billar','2019-04-06 20:55:01','2019-04-26 05:58:55',1),(2,NULL,2,'Mesas de Fulbito','mesas-de-fulbito','2019-04-06 20:55:01','2019-04-26 05:58:46',1),(3,NULL,3,'Mesas de Sapo','mesas-de-sapo','2019-04-21 21:29:41','2019-04-26 05:47:00',0),(4,NULL,4,'Mesa de ping pong','mesa-de-ping-pong','2019-04-21 22:59:39','2019-04-26 05:59:05',1),(5,NULL,5,'Mesas de Hockey','mesas-de-hockey','2019-04-26 05:47:32','2019-04-26 05:47:32',0),(6,NULL,6,'Mesas de Casino','mesas-de-casino','2019-04-26 05:47:48','2019-04-26 05:59:25',1),(7,NULL,7,'Camas Saltarinas','camas-saltarinas','2019-04-26 05:48:07','2019-04-26 05:48:07',0),(8,NULL,8,'Juegos de Niños','juegos-de-ninos','2019-04-26 05:48:54','2019-04-26 05:48:54',0),(9,NULL,9,'Alquileres','alquileres','2019-04-26 05:49:13','2019-04-26 05:58:37',0);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `customer_logo`
--

LOCK TABLES `customer_logo` WRITE;
/*!40000 ALTER TABLE `customer_logo` DISABLE KEYS */;
INSERT INTO `customer_logo` VALUES (1,'Jockey Club','customer-logo/April2019/NZ9wl92ecQua9eNkBtcp.jpg','2019-04-21 06:37:00','2019-04-21 06:40:03'),(2,'Muni Callao','customer-logo/April2019/Htzn3PfK2CEHkEp6d12O.png','2019-04-21 06:40:39','2019-04-21 06:40:39');
/*!40000 ALTER TABLE `customer_logo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(22,4,'id','number','ID',1,0,0,0,0,0,'{}',1),(23,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(24,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(25,4,'name','text','Name',1,1,1,1,1,1,'{}',4),(26,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:categories,slug\"}}',5),(27,4,'created_at','timestamp','Created At',0,0,1,0,0,0,'{}',7),(28,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(29,5,'id','number','ID',1,0,0,0,0,0,NULL,1),(30,5,'author_id','text','Author',1,0,1,1,0,1,NULL,2),(31,5,'category_id','text','Category',1,0,1,1,1,0,NULL,3),(32,5,'title','text','Title',1,1,1,1,1,1,NULL,4),(33,5,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,5),(34,5,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,6),(35,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(36,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(37,5,'meta_description','text_area','Meta Description',1,0,1,1,1,1,NULL,9),(38,5,'meta_keywords','text_area','Meta Keywords',1,0,1,1,1,1,NULL,10),(39,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(40,5,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,12),(41,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,13),(42,5,'seo_title','text','SEO Title',0,1,1,1,1,1,NULL,14),(43,5,'featured','checkbox','Featured',1,1,1,1,1,1,NULL,15),(44,6,'id','number','ID',1,0,0,0,0,0,NULL,1),(45,6,'author_id','text','Author',1,0,0,0,0,0,NULL,2),(46,6,'title','text','Title',1,1,1,1,1,1,NULL,3),(47,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,4),(48,6,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,5),(49,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),(50,6,'meta_description','text','Meta Description',1,0,1,1,1,1,NULL,7),(51,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,NULL,8),(52,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(53,6,'created_at','timestamp','Created At',1,1,1,0,0,0,NULL,10),(54,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,NULL,11),(55,6,'image','image','Page Image',0,1,1,1,1,1,NULL,12),(56,11,'id','text','Id',1,0,0,0,0,0,'{}',1),(57,11,'name','text','Name',0,1,1,1,1,1,'{}',2),(58,11,'image','image','Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1920\",\"height\":\"652\"},\"quality\":\"100%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"cropped\",\"crop\":{\"width\":\"1920\",\"height\":\"652\"}}],\"description\":\"1920 ancho x 652 alto\"}',3),(59,11,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',4),(60,11,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(61,12,'id','text','Id',1,0,0,0,0,0,'{}',1),(62,12,'name','text','Nombre',0,1,1,1,1,1,'{}',2),(63,12,'slug','text','Slug',0,0,1,1,1,1,'{\"slugify\":{\"origin\":\"name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:products,slug\"}}',5),(65,12,'description','text_area','Descripción',0,0,1,1,1,1,'{\"default\":\".\"}',7),(66,12,'images','multiple_images','Imágenes',0,0,1,1,1,1,'{\"resize\":{\"width\":\"450\",\"height\":\"450\"},\"quality\":\"80%\",\"upsize\":false,\"thumbnails\":[{\"name\":\"cropped\",\"crop\":{\"width\":\"250\",\"height\":\"250\"}}],\"description\":\"0 ancho x 0 alto\"}',8),(67,12,'price','number','Precio',0,1,1,1,1,1,'{}',9),(68,12,'created_at','timestamp','Created At',0,0,1,0,0,0,'{}',12),(69,12,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',13),(70,13,'id','text','Id',1,0,0,0,0,0,'{}',1),(71,13,'name','text','Name',0,1,1,1,1,1,'{}',2),(72,13,'image','image','Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"160\",\"height\":\"140\"},\"quality\":\"100%\",\"upsize\":false}',3),(73,13,'created_at','timestamp','Created At',0,0,1,0,0,0,'{}',4),(74,13,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(75,4,'spotlight','select_dropdown','Spotlight',0,1,1,1,1,1,'{\"default\":\"0\",\"options\":{\"0\":\"No\",\"1\":\"Si\"}}',6),(76,12,'excerpt','text_area','Extracto',0,0,1,1,1,1,'{\"default\":\".\"}',6),(77,12,'category_id','select_dropdown','Categoria',1,1,1,1,1,1,'{}',3),(78,12,'product_belongsto_category_relationship','relationship','Categoria',0,1,1,1,1,1,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"banners\",\"pivot\":\"0\",\"taggable\":\"0\"}',4),(79,12,'spotlight','select_dropdown','Destacar',0,1,1,1,1,1,'{\"default\":\"0\",\"options\":{\"0\":\"No\",\"1\":\"Si\"}}',10),(80,12,'status','select_dropdown','Estado',0,1,1,1,1,1,'{\"default\":\"1\",\"options\":{\"0\":\"Inactivo\",\"1\":\"Activo\"}}',11);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2019-04-06 20:54:59','2019-04-06 20:54:59'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2019-04-06 20:54:59','2019-04-06 20:54:59'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,NULL,'2019-04-06 20:54:59','2019-04-06 20:54:59'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2019-04-06 20:55:01','2019-04-26 05:58:05'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,NULL,'2019-04-06 20:55:01','2019-04-06 20:55:01'),(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2019-04-06 20:55:01','2019-04-06 20:55:01'),(11,'banners','banners','Banner','Banners',NULL,'App\\Banner',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2019-04-12 07:10:10','2019-04-26 06:05:50'),(12,'products','products','Product','Products','voyager-bag','App\\Product',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2019-04-12 07:40:57','2019-04-26 06:52:27'),(13,'customer_logo','customer-logo','Customer Logo','Customer Logos','voyager-photos','App\\CustomerLogo',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2019-04-16 06:43:49','2019-04-21 06:39:24');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2019-04-06 20:54:59','2019-04-06 20:54:59','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,4,'2019-04-06 20:54:59','2019-04-16 06:53:06','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2019-04-06 20:54:59','2019-04-06 20:54:59','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2019-04-06 20:54:59','2019-04-06 20:54:59','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,8,'2019-04-06 20:54:59','2019-04-16 06:53:06',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2019-04-06 20:54:59','2019-04-16 06:53:06','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2019-04-06 20:54:59','2019-04-16 06:53:06','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2019-04-06 20:54:59','2019-04-16 06:53:06','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2019-04-06 20:54:59','2019-04-16 06:53:06','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,9,'2019-04-06 20:54:59','2019-04-16 06:53:06','voyager.settings.index',NULL),(11,1,'Categories','','_self','voyager-categories',NULL,NULL,7,'2019-04-06 20:55:01','2019-04-16 06:53:06','voyager.categories.index',NULL),(12,1,'Posts','','_self','voyager-news',NULL,NULL,5,'2019-04-06 20:55:01','2019-04-16 06:53:06','voyager.posts.index',NULL),(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,6,'2019-04-06 20:55:01','2019-04-16 06:53:06','voyager.pages.index',NULL),(14,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2019-04-06 20:55:02','2019-04-16 06:53:06','voyager.hooks',NULL),(15,1,'Banners','','_self','voyager-photo','#000000',NULL,10,'2019-04-12 07:10:11','2019-04-16 06:53:06','voyager.banners.index','null'),(16,1,'Products','','_self','voyager-bag',NULL,NULL,12,'2019-04-12 07:40:57','2019-04-16 06:53:06','voyager.products.index',NULL),(17,1,'Customer Logos','','_self','voyager-photos','#000000',NULL,11,'2019-04-16 06:43:49','2019-04-16 06:53:06','voyager.customer-logo.index','null');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2019-04-06 20:54:59','2019-04-06 20:54:59');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2016_01_01_000000_create_pages_table',2),(24,'2016_01_01_000000_create_posts_table',2),(25,'2016_02_15_204651_create_categories_table',2),(26,'2017_04_11_000000_alter_post_nullable_fields_table',2),(27,'2019_04_24_131018_create_banners_table',0),(28,'2019_04_24_131018_create_customer_logo_table',0),(29,'2019_04_24_131018_create_products_table',0);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,0,'Hello World','Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','pages/page1.jpg','hello-world','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2019-04-06 20:55:01','2019-04-06 20:55:01');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2019-04-06 20:54:59','2019-04-06 20:54:59'),(2,'browse_bread',NULL,'2019-04-06 20:54:59','2019-04-06 20:54:59'),(3,'browse_database',NULL,'2019-04-06 20:54:59','2019-04-06 20:54:59'),(4,'browse_media',NULL,'2019-04-06 20:54:59','2019-04-06 20:54:59'),(5,'browse_compass',NULL,'2019-04-06 20:54:59','2019-04-06 20:54:59'),(6,'browse_menus','menus','2019-04-06 20:54:59','2019-04-06 20:54:59'),(7,'read_menus','menus','2019-04-06 20:54:59','2019-04-06 20:54:59'),(8,'edit_menus','menus','2019-04-06 20:54:59','2019-04-06 20:54:59'),(9,'add_menus','menus','2019-04-06 20:54:59','2019-04-06 20:54:59'),(10,'delete_menus','menus','2019-04-06 20:55:00','2019-04-06 20:55:00'),(11,'browse_roles','roles','2019-04-06 20:55:00','2019-04-06 20:55:00'),(12,'read_roles','roles','2019-04-06 20:55:00','2019-04-06 20:55:00'),(13,'edit_roles','roles','2019-04-06 20:55:00','2019-04-06 20:55:00'),(14,'add_roles','roles','2019-04-06 20:55:00','2019-04-06 20:55:00'),(15,'delete_roles','roles','2019-04-06 20:55:00','2019-04-06 20:55:00'),(16,'browse_users','users','2019-04-06 20:55:00','2019-04-06 20:55:00'),(17,'read_users','users','2019-04-06 20:55:00','2019-04-06 20:55:00'),(18,'edit_users','users','2019-04-06 20:55:00','2019-04-06 20:55:00'),(19,'add_users','users','2019-04-06 20:55:00','2019-04-06 20:55:00'),(20,'delete_users','users','2019-04-06 20:55:00','2019-04-06 20:55:00'),(21,'browse_settings','settings','2019-04-06 20:55:00','2019-04-06 20:55:00'),(22,'read_settings','settings','2019-04-06 20:55:00','2019-04-06 20:55:00'),(23,'edit_settings','settings','2019-04-06 20:55:00','2019-04-06 20:55:00'),(24,'add_settings','settings','2019-04-06 20:55:00','2019-04-06 20:55:00'),(25,'delete_settings','settings','2019-04-06 20:55:00','2019-04-06 20:55:00'),(26,'browse_categories','categories','2019-04-06 20:55:01','2019-04-06 20:55:01'),(27,'read_categories','categories','2019-04-06 20:55:01','2019-04-06 20:55:01'),(28,'edit_categories','categories','2019-04-06 20:55:01','2019-04-06 20:55:01'),(29,'add_categories','categories','2019-04-06 20:55:01','2019-04-06 20:55:01'),(30,'delete_categories','categories','2019-04-06 20:55:01','2019-04-06 20:55:01'),(31,'browse_posts','posts','2019-04-06 20:55:01','2019-04-06 20:55:01'),(32,'read_posts','posts','2019-04-06 20:55:01','2019-04-06 20:55:01'),(33,'edit_posts','posts','2019-04-06 20:55:01','2019-04-06 20:55:01'),(34,'add_posts','posts','2019-04-06 20:55:01','2019-04-06 20:55:01'),(35,'delete_posts','posts','2019-04-06 20:55:01','2019-04-06 20:55:01'),(36,'browse_pages','pages','2019-04-06 20:55:01','2019-04-06 20:55:01'),(37,'read_pages','pages','2019-04-06 20:55:01','2019-04-06 20:55:01'),(38,'edit_pages','pages','2019-04-06 20:55:01','2019-04-06 20:55:01'),(39,'add_pages','pages','2019-04-06 20:55:01','2019-04-06 20:55:01'),(40,'delete_pages','pages','2019-04-06 20:55:01','2019-04-06 20:55:01'),(41,'browse_hooks',NULL,'2019-04-06 20:55:02','2019-04-06 20:55:02'),(42,'browse_banners','banners','2019-04-12 07:10:10','2019-04-12 07:10:10'),(43,'read_banners','banners','2019-04-12 07:10:10','2019-04-12 07:10:10'),(44,'edit_banners','banners','2019-04-12 07:10:10','2019-04-12 07:10:10'),(45,'add_banners','banners','2019-04-12 07:10:10','2019-04-12 07:10:10'),(46,'delete_banners','banners','2019-04-12 07:10:10','2019-04-12 07:10:10'),(47,'browse_products','products','2019-04-12 07:40:57','2019-04-12 07:40:57'),(48,'read_products','products','2019-04-12 07:40:57','2019-04-12 07:40:57'),(49,'edit_products','products','2019-04-12 07:40:57','2019-04-12 07:40:57'),(50,'add_products','products','2019-04-12 07:40:57','2019-04-12 07:40:57'),(51,'delete_products','products','2019-04-12 07:40:57','2019-04-12 07:40:57'),(52,'browse_customer_logo','customer_logo','2019-04-16 06:43:49','2019-04-16 06:43:49'),(53,'read_customer_logo','customer_logo','2019-04-16 06:43:49','2019-04-16 06:43:49'),(54,'edit_customer_logo','customer_logo','2019-04-16 06:43:49','2019-04-16 06:43:49'),(55,'add_customer_logo','customer_logo','2019-04-16 06:43:49','2019-04-16 06:43:49'),(56,'delete_customer_logo','customer_logo','2019-04-16 06:43:49','2019-04-16 06:43:49');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,0,NULL,'Lorem Ipsum Post',NULL,'This is the excerpt for the Lorem Ipsum Post','<p>This is the body of the lorem ipsum post</p>','posts/post1.jpg','lorem-ipsum-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2019-04-06 20:55:01','2019-04-06 20:55:01'),(2,0,NULL,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','posts/post2.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2019-04-06 20:55:01','2019-04-06 20:55:01'),(3,0,NULL,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/post3.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2019-04-06 20:55:01','2019-04-06 20:55:01'),(4,0,NULL,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/post4.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2019-04-06 20:55:01','2019-04-06 20:55:01');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'producto 1','producto-1','test','<p>test</p>','[\"products\\/April2019\\/9c5NJubZRl44CKpTpynA.jpg\",\"products\\/April2019\\/YlvaXwCc197uADGIORo0.jpg\",\"products\\/April2019\\/ed5m3HPQZgYClk25WvhM.jpg\"]',119.78,'2019-04-12 07:53:28','2019-04-26 06:30:09',1,0,1),(2,'producto 2','producto-2','test','Default text','[\"products\\/April2019\\/x4VKIgDu5JXxIOPSIl6O.jpg\"]',159.32,'2019-04-12 08:17:05','2019-04-26 06:29:52',8,0,1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2019-04-06 20:54:59','2019-04-06 20:54:59'),(2,'user','Normal User','2019-04-06 20:54:59','2019-04-06 20:54:59');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','settings/April2019/jA6VXSAX9KXQcIKeD6yk.png','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Santa Beatriz','','text',1,'Admin'),(7,'admin.description','Admin Description','Bienvenidos al Sistema de Gestión de Contenidos (CMS)','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2019-04-06 20:55:01','2019-04-06 20:55:01'),(2,'data_types','display_name_singular',6,'pt','Página','2019-04-06 20:55:01','2019-04-06 20:55:01'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2019-04-06 20:55:01','2019-04-06 20:55:01'),(4,'data_types','display_name_singular',4,'pt','Categoria','2019-04-06 20:55:01','2019-04-06 20:55:01'),(5,'data_types','display_name_singular',2,'pt','Menu','2019-04-06 20:55:01','2019-04-06 20:55:01'),(6,'data_types','display_name_singular',3,'pt','Função','2019-04-06 20:55:01','2019-04-06 20:55:01'),(7,'data_types','display_name_plural',5,'pt','Posts','2019-04-06 20:55:01','2019-04-06 20:55:01'),(8,'data_types','display_name_plural',6,'pt','Páginas','2019-04-06 20:55:01','2019-04-06 20:55:01'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2019-04-06 20:55:01','2019-04-06 20:55:01'),(10,'data_types','display_name_plural',4,'pt','Categorias','2019-04-06 20:55:01','2019-04-06 20:55:01'),(11,'data_types','display_name_plural',2,'pt','Menus','2019-04-06 20:55:01','2019-04-06 20:55:01'),(12,'data_types','display_name_plural',3,'pt','Funções','2019-04-06 20:55:01','2019-04-06 20:55:01'),(13,'categories','slug',1,'pt','categoria-1','2019-04-06 20:55:01','2019-04-06 20:55:01'),(14,'categories','name',1,'pt','Categoria 1','2019-04-06 20:55:01','2019-04-06 20:55:01'),(15,'categories','slug',2,'pt','categoria-2','2019-04-06 20:55:01','2019-04-06 20:55:01'),(16,'categories','name',2,'pt','Categoria 2','2019-04-06 20:55:02','2019-04-06 20:55:02'),(17,'pages','title',1,'pt','Olá Mundo','2019-04-06 20:55:02','2019-04-06 20:55:02'),(18,'pages','slug',1,'pt','ola-mundo','2019-04-06 20:55:02','2019-04-06 20:55:02'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2019-04-06 20:55:02','2019-04-06 20:55:02'),(20,'menu_items','title',1,'pt','Painel de Controle','2019-04-06 20:55:02','2019-04-06 20:55:02'),(21,'menu_items','title',2,'pt','Media','2019-04-06 20:55:02','2019-04-06 20:55:02'),(22,'menu_items','title',12,'pt','Publicações','2019-04-06 20:55:02','2019-04-06 20:55:02'),(23,'menu_items','title',3,'pt','Utilizadores','2019-04-06 20:55:02','2019-04-06 20:55:02'),(24,'menu_items','title',11,'pt','Categorias','2019-04-06 20:55:02','2019-04-06 20:55:02'),(25,'menu_items','title',13,'pt','Páginas','2019-04-06 20:55:02','2019-04-06 20:55:02'),(26,'menu_items','title',4,'pt','Funções','2019-04-06 20:55:02','2019-04-06 20:55:02'),(27,'menu_items','title',5,'pt','Ferramentas','2019-04-06 20:55:02','2019-04-06 20:55:02'),(28,'menu_items','title',6,'pt','Menus','2019-04-06 20:55:02','2019-04-06 20:55:02'),(29,'menu_items','title',7,'pt','Base de dados','2019-04-06 20:55:02','2019-04-06 20:55:02'),(30,'menu_items','title',10,'pt','Configurações','2019-04-06 20:55:02','2019-04-06 20:55:02');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png',NULL,'$2y$10$AGkbfAwPEoROqR5tRxxPCeh2KkL6ugW3Pi04GR7lJ6gFQM4P5kMOS','SleULPefGcN5CvhH7eC3a8XDMxOAq6m9SC4TohUHZHjGLC6RdyAH117140Tk','{\"locale\":\"es\"}','2019-04-06 20:55:01','2019-04-12 07:02:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-26  8:57:02
